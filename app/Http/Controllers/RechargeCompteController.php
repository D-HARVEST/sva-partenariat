<?php

namespace App\Http\Controllers;

use App\Models\RechargeCompte;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\RechargeCompteRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class RechargeCompteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $rechargeComptes = RechargeCompte::paginate();

        return view('recharge-compte.index', compact('rechargeComptes'))
            ->with('i', ($request->input('page', 1) - 1) * $rechargeComptes->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $rechargeCompte = new RechargeCompte();

        return view('recharge-compte.create', compact('rechargeCompte'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(RechargeCompteRequest $request): RedirectResponse
    {
        $all = $request->validated();
        RechargeCompte::create($all);

        return Redirect::route('recharge-comptes.index')
            ->with('success', 'RechargeCompte a été créé(e) avec succes !');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $rechargeCompte = RechargeCompte::findOrFail($id);

        return view('recharge-compte.show', compact('rechargeCompte'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $rechargeCompte = RechargeCompte::findOrFail($id);

        return view('recharge-compte.edit', compact('rechargeCompte'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(RechargeCompteRequest $request, RechargeCompte $rechargeCompte): RedirectResponse
    {
        $all=$request->validated();
        $rechargeCompte->update($all);

        return Redirect::route('recharge-comptes.index')
            ->with('success', 'RechargeCompte a été mis(e) à jour avec succes !');
    }

    public function destroy($id): RedirectResponse
    {
        $data = RechargeCompte::findOrFail($id);

        try {
            $data->delete();
        } catch (\Throwable $th) {
            return redirect()->back()
                ->withErrors(["Une erreur s'est produite lors de la suppression du RechargeCompte !" . $th->getMessage()]);
        }


        return Redirect::route('recharge-comptes.index')
            ->with('success', 'RechargeCompte a été supprimé(e) avec succes !');
    }
}
