<?php

namespace App\Http\Controllers;

use Jenssegers\Agent\Agent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;

class ProfilController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $userId = Auth::id();

    // Récupérer les sessions de l'utilisateur à partir de la table des sessions
    $sessions = DB::table('sessions')
        ->where('user_id', $userId)
        ->get();

        $sessions->transform(function ($session) {
            $agent = new Agent();
            $agent->setUserAgent($session->user_agent);

            // Construire la chaîne d'affichage désirée
            $session->device_browser = $agent->platform() . ' - ' . $agent->browser();
            $session->ip_address = $session->ip_address; // Récupérer l'IP pour l'affichage
            return $session;
        });
        return view('profil.mon-profil', compact('sessions'));
    }

    /**
     * Show the form for creating a new resource.
     */
    /**
     * Update the specified resource in storage.
     */
    public function updateProfil(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . Auth::id(),
        ]);

        $user = Auth::user();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->save();

        return back()->with('status', 'Profile mise a jour avec succès!');
    }


    public function updatePassword(Request $request)
    {
        $request->validate([
            'current_password' => 'required',
            'password' => 'required|string|min:8|confirmed',
        ]);

        $user = Auth::user();

        if (!Hash::check($request->current_password, $user->password)) {
            return back()->withErrors(['current_password' => 'Current password is incorrect']);
        }

        $user->password = Hash::make($request->password,                                  );
        $user->save();

        return back()->with('status', 'Password mise a jour avec succès!');
    }



    public function logoutOtherSessions(Request $request)
    {

        $userId = Auth::user()->id;

        $currentSessionId = $request->session()->getId();

        DB::table('sessions')
        ->where('user_id', $userId)
        ->where('id', '!=', $currentSessionId) // Garder la session actuelle
        ->delete();


        return Redirect::route('mon-profil')->with('status', 'Déconnexion des autres sessions réussie !');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        $request->validate([
            'password' => 'required|string',
        ]);

        if (!Hash::check($request->password, Auth::user()->password)) {
            return response()->json(['error' => 'Le mot de passe ne correspond pas.'], 403);
        }

        Auth::user()->delete();


        Auth::logout();

        return Redirect::route('home')->with('status', 'Compte supprimé avec succès!');
    }
}
