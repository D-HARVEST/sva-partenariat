<?php

namespace App\Http\Controllers;

use App\Models\Historique;
use Illuminate\Http\Request;
use App\Models\RechargeStock;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $stockCritique = (int) config('app.stock_critique');
        $stocksCritiques = RechargeStock::where('Volume', '<=', $stockCritique)->get();
        $historiques = Historique::where('user_id', Auth::id())
        ->with('dataPackage')
        ->latest()
        ->get();
        return view('dashboard', compact('historiques', 'stocksCritiques'));
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
