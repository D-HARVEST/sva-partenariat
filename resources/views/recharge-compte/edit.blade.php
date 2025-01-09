@php
    $pagetitle = 'Modifier Recharge Compte';
    $breadcrumbs = ['Liste des Recharge Compte(s)' => route('recharge-comptes.index'), 'Modifier Recharge Compte' => ''];
@endphp
@extends('layouts.app')

@section('template_title')
    Formulaire de modification: Recharge Compte
@endsection

@section('content')
    <section class="">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">

                    <div class="card-body">
                        <div class="text-end">
                            <a href="{{ route('recharge-comptes.index') }}" class="btn btn-sm btn-primary"> Retour</a>
                        </div>
                        <div class="col mb-2">
                            <h5 class="card-title text-dark fw-bolder mb-0">Mettre à jour Recharge Compte</h5>
                            <span>Formulaire de modification: Recharge Compte</span>
                            <hr>
                        </div>
                        <form method="POST" action="{{ route('recharge-comptes.update', $rechargeCompte->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('recharge-compte.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
