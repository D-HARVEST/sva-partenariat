@php
    $pagetitle = 'Détails Recharge Compte';
    $breadcrumbs = ['Liste des Recharge Compte' => route('recharge-comptes.index'), 'Détails Recharge Compte' => ''];
@endphp

@extends('layouts.app')

@section('template_title')
    Détails  Recharge Compte
@endsection

@section('content')
    <section class="">
        <div class="row">
            <div class="col-md-12">
                <div class="card">


                    <div class="card-body">
                        <div class="text-end">
                            <a href="{{ route('recharge-comptes.index') }}" class="btn btn-sm btn-primary"> Retour</a>
                        </div>
                        <div class="row">

                            

                        <div class="col-lg-4">
                            <strong class="text-dark ">Libelle:</strong>
                            <input type="text" class="form-control rounded-05 my-1 text-dark" value="{{ $rechargeCompte->Libelle }}"
                                readonly>
                        </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
