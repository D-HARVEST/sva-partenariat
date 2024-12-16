@php
    $pagetitle = 'Nouveau stock de data';
    $breadcrumbs = ['Liste des stocks de data' => route('recharge-stocks.index'), 'Nouveau stock de data' => route('recharge-stocks.create')];
@endphp
@extends('layouts.app')

@section('template_title')
    Nouveau Recharge Stock
@endsection

@section('content')
    <section class="">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default  border">

                    <div class="card-body">
                        <div class="text-end">
                            <a href="{{ route('recharge-stocks.index') }}" class="btn btn-sm btn-primary"> Retour</a>
                        </div>
                        <div class="col mb-2">
                            <h5 class="card-title text-dark fw-bolder mb-0">Nouveau : Stock de data</h5>
                            <span>Formulaire d'ajout d'un stock de data</span>
                            <hr>
                        </div>
                        <form method="POST" action="{{ route('recharge-stocks.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('recharge-stock.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
