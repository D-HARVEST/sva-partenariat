<?php

namespace App\Http\Controllers;

use App\Models\MvmStock;
use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Models\RechargeStock;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\RechargeStockRequest;

class RechargeStockController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $rechargeStocks = RechargeStock::paginate();

        return view('recharge-stock.index', compact('rechargeStocks'))
            ->with('i', ($request->input('page', 1) - 1) * $rechargeStocks->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $rechargeStock = new RechargeStock();

        return view('recharge-stock.create', compact('rechargeStock'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(RechargeStockRequest $request): RedirectResponse
    {
        $all = $request->validated();
        $all['Type'] = $request->input('Type');  // Ajoute le champ Type

        RechargeStock::create($all);

        return Redirect::route('recharge-stocks.index')
            ->with('success', 'RechargeStock a été créé(e) avec succès !');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $rechargeStock = RechargeStock::findOrFail($id);

        return view('recharge-stock.show', compact('rechargeStock'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $rechargeStock = RechargeStock::findOrFail($id);

        return view('recharge-stock.edit', compact('rechargeStock'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(RechargeStockRequest $request, RechargeStock $rechargeStock): RedirectResponse
    {
        $all = $request->validated();
        $all['Type'] = $request->input('Type');  // Ajoute le champ Type

        $rechargeStock->update($all);

        return Redirect::route('recharge-stocks.index')
            ->with('success', 'RechargeStock a été mis(e) à jour avec succès !');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id): RedirectResponse
    {
        $data = RechargeStock::findOrFail($id);

        try {
            $data->delete();
        } catch (\Throwable $th) {
            return redirect()->back()
                ->withErrors(["Une erreur s'est produite lors de la suppression du RechargeStock !" . $th->getMessage()]);
        }


        return Redirect::route('recharge-stocks.index')
            ->with('success', 'RechargeStock a été supprimé(e) avec succès !');
    }

    /**
     * Recharge the stock volume.
     */
    public function rechargeVolume(Request $request)
    {
        $request->validate([
            'Volume' => 'required|numeric',
            'ExpireAt' => 'required|date',
            'id' => 'required|exists:recharge_stocks,id',
        ]);

        $rechargevolume = RechargeStock::find($request->id);

        if (!$rechargevolume) {
            return redirect()->back()->with('error', 'Le stock spécifié est introuvable.');
        }

        $stockavant = $rechargevolume->Volume;
        $nouveauVolume = $request->Volume + $stockavant;

        $rechargeStock = RechargeStock::where('id', $request->id)->update([
            'Volume' => $nouveauVolume,
            'ExpireAt' => $request->ExpireAt,
        ]);

        $stock = MvmStock::create([
            'recharge_stock_id' => $rechargevolume->id,
            'transaction_id' => null,
            'Type' => 'ENTREE',
            'Quantite' => $request->Volume,
        ]);

        return redirect()->route('dashboard')->with('success', 'Stock approvisionné avec succès.');
    }
}
