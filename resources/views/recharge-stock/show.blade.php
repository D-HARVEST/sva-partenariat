@php
    $pagetitle = 'Détails stock de data';
    $breadcrumbs = ['Liste des stocks de date' => route('recharge-stocks.index'), 'Détails stock de data' => ''];
@endphp

@extends('layouts.app')

@section('template_title')
    Détails  Recharge Stock
@endsection

@section('content')
    <section class="">
        <div class="row">
            <div class="col-md-12">
                <div class="card">


                    <div class="card-body">
                        <div class="text-end">
                            <a href="{{ route('recharge-stocks.index') }}" class="btn btn-sm btn-primary"> Retour</a>
                        </div>
                        <div class="row">



                        <div class="col-lg-4">
                            <strong class="text-dark ">Volume:</strong>
                            <input type="text" class="form-control rounded-05 my-1 text-dark" value="{{ $rechargeStock->Volume }}"
                                readonly>
                        </div>

                        <div class="col-lg-4">
                            <strong class="text-dark ">Observation:</strong>
                            <input type="text" class="form-control rounded-05 my-1 text-dark" value="{{ $rechargeStock->Observation }}"
                                readonly>
                        </div>

                        <div class="col-lg-4">
                            <strong class="text-dark ">Expireat:</strong>
                            <input type="text" class="form-control rounded-05 my-1 text-dark" value="{{ $rechargeStock->ExpireAt }}"
                                readonly>
                        </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
