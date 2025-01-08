<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RechargeStock;
use App\Models\Transaction;
use App\Models\DataPackage; 
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        
        $searchTerm = $request->input('search', ''); 
    
        // Récupérer les paramètres de configuration
        $stockCritique = (int) config('app.stock_critique');
        $stocksCritiques = RechargeStock::where('Volume', '<=', $stockCritique)->get();
        

        // Vérifier si des données sont disponibles dans DataPackage
        $dataPackagesAvailable = DataPackage::hasData();


        
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
    
        // Retourner la vue avec les données nécessaires
        return view('dashboard', compact('transactions', 'trans', 'stocksCritiques', 'searchTerm', 'dataPackagesAvailable'));
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
        //
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
