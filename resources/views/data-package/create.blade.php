@php
    $pagetitle = 'Nouveau forfait de data';
    $breadcrumbs = ['Liste des des forfaits de data' => route('data-packages.index'), 'Nouveau forfait de data' => route('data-packages.create')];
@endphp
@extends('layouts.app')

@section('template_title')
    Nouveau Data Package
@endsection

@section('content')
    <section class="">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default  border">

                    <div class="card-body">
                        <div class="text-end">
                            <a href="{{ route('data-packages.index') }}" class="btn btn-sm btn-primary"> Retour</a>
                        </div>
                        <div class="col mb-2">
                            <h5 class="card-title text-dark fw-bolder mb-0">Nouveau forfait de data</h5>
                            <span>Formulaire d'ajout d'un nouveau forfait de data</span>
                            <hr>
                        </div>
                        <form method="POST" action="{{ route('data-packages.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('data-package.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
