@php
    $pagetitle = 'Détails forfait de data';
    $breadcrumbs = ['Liste des forfaits de data' => route('data-packages.index'), 'Détails forfait de data' => ''];
@endphp

@extends('layouts.app')

@section('template_title')
    Détails  Data Package
@endsection

@section('content')
    <section class="">
        <div class="row">
            <div class="col-md-12">
                <div class="card">


                    <div class="card-body">
                        <div class="text-end">
                            <a href="{{ route('data-packages.index') }}" class="btn btn-sm btn-primary"> Retour</a>
                        </div>
                        <div class="row">



                        <div class="col-lg-4">
                            <strong class="text-dark ">Referenceapi:</strong>
                            <input type="text" class="form-control rounded-05 my-1 text-dark" value="{{ $dataPackage->referenceAPI }}"
                                readonly>
                        </div>

                        <div class="col-lg-4">
                            <strong class="text-dark ">Volume:</strong>
                            <input type="text" class="form-control rounded-05 my-1 text-dark" value="{{ $dataPackage->Volume }}"
                                readonly>
                        </div>

                        <div class="col-lg-4">
                            <strong class="text-dark ">Cout:</strong>
                            <input type="text" class="form-control rounded-05 my-1 text-dark" value="{{ $dataPackage->Cout }}"
                                readonly>
                        </div>

                        <div class="col-lg-4">
                            <strong class="text-dark ">Prix:</strong>
                            <input type="text" class="form-control rounded-05 my-1 text-dark" value="{{ $dataPackage->Prix }}"
                                readonly>
                        </div>

                        <div class="col-lg-4">
                            <strong class="text-dark ">Ancienprix:</strong>
                            <input type="text" class="form-control rounded-05 my-1 text-dark" value="{{ $dataPackage->AncienPrix }}"
                                readonly>
                        </div>

                        <div class="col-lg-4">
                            <strong class="text-dark ">Validite:</strong>
                            <input type="text" class="form-control rounded-05 my-1 text-dark" value="{{ $dataPackage->Validite }}"
                                readonly>
                        </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
