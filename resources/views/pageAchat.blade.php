@php
    $pagetitle = 'Achat de forfaits';
@endphp

@extends('layouts.app')

@section('content')
<div class="tab-content">
    <div class="text-end">
        <a href="{{ route('dashboard') }}" class="btn btn-sm btn-primary"> Retour</a>
    </div>
    <div id="note-full-container" class="note-has-grid row">
        @foreach($forfaits as $forfait)
            <div class="col-md-3 single-note-item all-category">
                <div class="card card-body">
                    <span class="side-stick"></span>
                    <h6 class="note-title text-truncate w-75 mb-0" data-noteHeading="Forfait Data Mois">
                        Forfait Data Mois
                    </h6>
                    <p class="note-date fs-2"></p>
                    <div class="note-content">
                        <ul class="list-unstyled mb-3">
                            <li class="d-flex justify-content-between align-items-center">
                                <span>{{$forfait->Volume}} Go /  {{$forfait->Validite}} H</span>
                                <span class="text-success fw-bold">{{$forfait->Prix}} F</span>/<span class="text-danger fw-bold"><del>{{$forfait->AncienPrix}} F</del></span>
                            </li>
                        </ul>
                    </div>
                    <div class="d-flex align-items-center">
                        <div class="ms-auto">
                            <div class="category-selector btn-group">
                                <a class="btn btn-sm btn-secondary rounded-1" href="{{ route('confirmation', $forfait->id) }}">
                                    Acheter maintenant
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
