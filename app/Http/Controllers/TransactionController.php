<?php

namespace App\Http\Controllers;

use App\Models\MvmStock;
use App\Models\DataPackage;
use App\Models\Transaction;
use Illuminate\Http\Request;
use App\Models\RechargeStock;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class TransactionController extends Controller
{
    /**
     * Affiche le formulaire de confirmation d'achat.
     */
    public function confirmPurchase($id)
    {
        // Récupérer les détails du forfait sélectionné
        $details = DataPackage::findOrFail($id);

        return view('achat.confirm', compact('details'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
        // Validation des champs nécessaires
        $request->validate([
            'ModePaiement' => 'required|string',
            'data_package_id' => 'required|exists:data_packages,id',
            'Telephone' => ['required', 'string', 'regex:/^[0-9]{10}$/']
], [
    'Telephone.regex' => 'Le numéro de téléphone doit contenir exactement 10 chiffres.'

        ]);


        // Récupérer le forfait sélectionné
        $dataPackage = DataPackage::findOrFail($request->data_package_id);

        // Créer une nouvelle transaction avec les données du formulaire
        DB::transaction(function () use ($request, $dataPackage) {
            $transaction = Transaction::create([
                'ModePaiement' => $request->ModePaiement,
                'user_id' => Auth::user()->id,
                'data_package_id' => $request->data_package_id,
                'Volume' => $dataPackage->Volume,
                'Cout' => $dataPackage->Cout,
                'Prix' => $dataPackage->Prix,
                'Validite' => $dataPackage->Validite,
                'idPaiement' => rand(1000, 9999), // Exemple d'un id de paiement aléatoire
                'Telephone' => $request->Telephone,
            ]);

            $rechargeStock = RechargeStock::findOrFail($dataPackage->recharge_stock_id);

            // Calculer le nouveau volume
            $nouveauVolume = $rechargeStock->Volume - $dataPackage->Volume;

            // Mettre à jour le stock principal
            $rechargeStock->update(['Volume' => $nouveauVolume]);


            // Créer le mouvement de stock
            MvmStock::create([
                'recharge_stock_id' => $rechargeStock->id,
                'transaction_id' => $transaction->id,
                'Type' => 'SORTIE',
                'Quantite' => $dataPackage->Volume,
            ]);
        });

        return redirect()->route('dashboard')->with('success', 'Achat réalisé avec succès !');
}
}
