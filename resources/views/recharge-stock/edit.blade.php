@php
    $pagetitle = 'Modifier stock de data';
    $breadcrumbs = ['Liste des stocks de data' => route('recharge-stocks.index'), 'Modifier stock de data' => ''];
@endphp
@extends('layouts.app')

@section('template_title')
    Formulaire de modification: Recharge Stock
@endsection

@section('content')
    <section class="">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">

                    <div class="card-body">
                        <div class="text-end">
                            <a href="{{ route('recharge-stocks.index') }}" class="btn btn-sm btn-primary"> Retour</a>
                        </div>
                        <div class="col mb-2">
                            <h5 class="card-title text-dark fw-bolder mb-0">Mettre à jour stock de data</h5>
                            <span>Formulaire de modification de stock de data</span>
                            <hr>
                        </div>
                        <form method="POST" action="{{ route('recharge-stocks.update', $rechargeStock->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('recharge-stock.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
