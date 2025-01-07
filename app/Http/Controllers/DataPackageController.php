<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use App\Models\DataPackage;
use Illuminate\Http\Request;
use App\Models\RechargeStock;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\DataPackageRequest;

class DataPackageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $dataPackages = DataPackage::paginate();

        return view('data-package.index', compact('dataPackages'))
            ->with('i', ($request->input('page', 1) - 1) * $dataPackages->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $dataPackage = new DataPackage();
         $rechargeStock = RechargeStock::all(); // Remplace RechargeStock par ton modèle approprié

        return view('data-package.create', compact('dataPackage','rechargeStock'));
    }
    
    // Passer les stocks à la vue


    /**
     * Store a newly created resource in storage.
     */
    public function store(DataPackageRequest $request): RedirectResponse
    {
        $all = $request->validated();
        DataPackage::create($all);

        return Redirect::route('data-packages.index')
            ->with('success', 'DataPackage a été créé(e) avec succes !');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $dataPackage = DataPackage::findOrFail($id);

        return view('data-package.show', compact('dataPackage'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $dataPackage = DataPackage::findOrFail($id);

        return view('data-package.edit', compact('dataPackage'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(DataPackageRequest $request, DataPackage $dataPackage): RedirectResponse
    {
        $all=$request->validated();
        $dataPackage->update($all);

        return Redirect::route('data-packages.index')
            ->with('success', 'DataPackage a été mis(e) à jour avec succes !');
    }

    public function destroy($id): RedirectResponse
    {
        $data = DataPackage::findOrFail($id);

        try {
            $data->delete();
        } catch (\Throwable $th) {
            return redirect()->back()
                ->withErrors(["Une erreur s'est produite lors de la suppression du DataPackage !" . $th->getMessage()]);
        }


        return Redirect::route('data-packages.index')
            ->with('success', 'DataPackage a été supprimé(e) avec succes !');
    }
}
