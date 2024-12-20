<?php

namespace App\Http\Controllers;

use App\Models\Vente;
use App\Models\Historique;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class VenteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $user= Auth::user();
        $vv = $request->validate([
            'start_date' => 'nullable|date',
            'end_date' => 'nullable|date|after_or_equal:start_date',
        ]);
        $start_date = $vv['start_date'] ?? date('Y-m-d 00:00:00');
        $end_date = $vv['end_date'] ?? date('Y-m-d 23:59:59');


        $ventes = Vente::where('user_id', $user->id)
            ->whereBetween('created_at', [$start_date, $end_date])
            ->with('dataPackage')
            ->latest()
            ->get();
        return view('vente.rapport', compact('ventes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'ModePaiement' => 'required',
            'data_package_id' => 'required|exists:data_packages,id',
        ]);

        DB::transaction(function () use ($request) {
            // Enregistrer la vente
            $vente = Vente::create([
                'ModePaiement' => $request->ModePaiement,
                'user_id' => Auth::user()->id,
                'data_package_id' => $request->data_package_id,
            ]);

            // Enregistrer dans l'historique
            Historique::create([
                'user_id' => Auth::user()->id,
                'data_package_id' => $request->data_package_id,
            ]);
        });
        return redirect()->route('achat')
        ->with('success', 'Achat réalisée avec succès !');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
