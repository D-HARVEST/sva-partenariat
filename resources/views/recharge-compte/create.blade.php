@php
    $pagetitle = 'Nouveau Recharge Compte';
    $breadcrumbs = ['Liste des Recharge Compte(s)' => route('recharge-comptes.index'), 'Nouveau Recharge Compte' => route('recharge-comptes.create')];
@endphp
@extends('layouts.app')

@section('template_title')
    Nouveau Recharge Compte
@endsection

@section('content')
    <section class="">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default  border">

                    <div class="card-body">
                        <div class="text-end">
                            <a href="{{ route('recharge-comptes.index') }}" class="btn btn-sm btn-primary"> Retour</a>
                        </div>
                        <div class="col mb-2">
                            <h5 class="card-title text-dark fw-bolder mb-0">Nouveau : Recharge Compte</h5>
                            <span>Formulaire d'ajout d'un(e)  Recharge Compte</span>
                            <hr>
                        </div>
                        <form method="POST" action="{{ route('recharge-comptes.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('recharge-compte.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
