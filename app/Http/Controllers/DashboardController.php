<?php

namespace App\Http\Controllers;

use App\Models\DataPackage;
use App\Models\RechargeStock;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {


        if (!auth()->check()) {
            return redirect()->route('login');
        }

        $searchTerm = $request->input('search', '');

        // Récupérer les paramètres de configuration
        $stockCritique = (int) config('app.stock_critique');
        $stocksCritiques = RechargeStock::where('Volume', '<=', $stockCritique)->get();


     


        $transactionsQuery = Transaction::where('user_id', Auth::id());
        $transQuery = Transaction::query();

        if ($searchTerm) {
            $transactionsQuery->where(function($query) use ($searchTerm) {
                $query->where('Volume', 'like', '%' . $searchTerm . '%');
            });
        }


        if ($searchTerm) {
            $transQuery->where('Volume', 'like', '%' . $searchTerm . '%');
        }

        // Exécuter la requête pour récupérer les transactions filtrées
        $transactions = $transactionsQuery->get();


        $trans = $transQuery->get();



         // Mise à jour du statut des transactions en fonction de la validité
         foreach ($transactions as $transaction) {

            // Calcul de la date d'expiration en fonction de la validité
            $expirationDate = Carbon::parse($transaction->created_at)->addHours($transaction->Validite);

            

            if ($expirationDate <= Carbon::now()) {
                $transaction->Statut = 0;
            } else {
                $transaction->Statut = 1;
            }

            $transaction->save(); // Sauvegarder les modifications

        }

        $chiffreAffaireJour = Transaction::whereDate('created_at', now()->toDateString())
        ->sum('Prix');

        // Calcul du chiffre d'affaires hebdomadaire
        $chiffreAffaireSemaine = Transaction::whereBetween('created_at', [now()->startOfWeek(), now()->endOfWeek()])
        ->sum('Prix');

        // Calcul du chiffre d'affaires mensuel
        $chiffreAffaireMois = Transaction::whereMonth('created_at', now()->month)
        ->whereYear('created_at', now()->year)
        ->sum('Prix');

        // Retourner la vue avec les données nécessaires
        return view('dashboard', compact('transactions', 'trans', 'stocksCritiques', 'searchTerm', 'chiffreAffaireJour', 'chiffreAffaireSemaine', 'chiffreAffaireMois'));
    }

    public function rapport(Request $request)
    {

        $vv = $request->validate([
            'start_date' => 'nullable|date',
            'end_date' => 'nullable|date|after_or_equal:start_date',
        ]);
        $start_date = $vv['start_date'] ?? date('Y-m-d 00:00:00');
        $end_date = $vv['end_date'] ?? date('Y-m-d 23:59:59');


        $query = Transaction::query();
        // Filtrer par période

        $query->whereBetween('created_at', [$start_date, $end_date]);


        $ventes = $query->paginate();

        return view('vente.rapport', compact('ventes'));

    }

}
