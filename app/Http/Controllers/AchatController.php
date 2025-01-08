<?php

namespace App\Http\Controllers;

use App\Models\DataPackage;
use App\Models\RechargeStock;
use Illuminate\Http\Request;

class AchatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        // Récupérer uniquement les DataPackages dont le volume est inférieur ou égal au stock disponible
        $forfaits = DataPackage::whereHas('rechargeStock', function ($query) {
            $query->whereColumn('recharge_stocks.Volume', '>=', 'data_packages.Volume');
        })->get();

        return view('pageAchat', compact('forfaits'));
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
