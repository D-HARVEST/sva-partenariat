@php
    $pagetitle = 'Modifier forfait de data';
    $breadcrumbs = ['Liste des forfaits de data' => route('data-packages.index'), 'Modifier forfait de data' => ''];
@endphp
@extends('layouts.app')

@section('template_title')
    Formulaire de modification: Data Package
@endsection

@section('content')
    <section class="">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">

                    <div class="card-body">
                        <div class="text-end">
                            <a href="{{ route('data-packages.index') }}" class="btn btn-sm btn-primary"> Retour</a>
                        </div>
                        <div class="col mb-2">
                            <h5 class="card-title text-dark fw-bolder mb-0">Mettre à jour de forfait de data</h5>
                            <span>Formulaire de modification de forfaits de data</span>
                            <hr>
                        </div>
                        <form method="POST" action="{{ route('data-packages.update', $dataPackage->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('data-package.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
