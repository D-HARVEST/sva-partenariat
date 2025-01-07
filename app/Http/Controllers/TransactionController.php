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
    try {
        $request->validate([
            'ModePaiement' => 'required|string',
            'data_package_id' => 'required|exists:data_packages,id',
            'Telephone' => 'required|string',
        ]);

        $dataPackage = DataPackage::findOrFail($request->data_package_id);

        DB::transaction(function () use ($request, $dataPackage) {
            $transaction = Transaction::create([
                'ModePaiement' => $request->ModePaiement,
                'user_id' => Auth::user()->id,
                'data_package_id' => $request->data_package_id,
                'Volume' => $dataPackage->Volume,
                'Cout' => $dataPackage->Cout,
                'Prix' => $dataPackage->Prix,
                'Validite' => $dataPackage->Validite,
                'idPaiement' => rand(1000, 9999),
                'Telephone' => $request->Telephone,
            ]);

            // Récupérer le stock
            $rechargeStock = RechargeStock::findOrFail($dataPackage->recharge_stock_id);

            dd($rechargeStock);
            // Calculer le nouveau volume
            $nouveauVolume = $rechargeStock->Volume - $dataPackage->Volume;
            

            if ($nouveauVolume < 0) {
                throw new \Exception("Stock insuffisant pour cette transaction.");
            }

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

        return redirect()->route('achat')->with('success', 'Achat réalisé avec succès !');
    } catch (\Exception $e) {
        return redirect()->back()->with('error', $e->getMessage());
    }
}

}