<?php

namespace App\Http\Controllers;

use App\Models\DataPackage;
use App\Models\Transaction;
use Illuminate\Http\Request;
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
            'Telephone' => 'required|string',
        ]);

        // Récupérer le forfait sélectionné
        $dataPackage = DataPackage::findOrFail($request->data_package_id);

        // Créer une nouvelle transaction avec les données du formulaire
        DB::transaction(function () use ($request, $dataPackage) {
            Transaction::create([
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
        });

        return redirect()->route('dashboard')
            ->with('success', 'Achat réalisé avec succès !');
    }
}
