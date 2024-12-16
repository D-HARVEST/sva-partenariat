@php
    $pagetitle = 'Achat de forfaits';
@endphp

@extends('layouts.app')

@section('content')
<div class="tab-content">
    <div id="note-full-container" class="note-has-grid row">
      <div class="col-md-3 single-note-item all-category">
        <div class="card card-body">
          <span class="side-stick"></span>
          <h6 class="note-title text-truncate w-75 mb-0" data-noteHeading="Book a Ticket for Movie">
            Forfait Data Mois
          </h6>
          <p class="note-date fs-2"></p>
          <div class="note-content">
            <ul class="list-unstyled mb-3">
                <li class="d-flex justify-content-between align-items-center">
                  <span>1 Go / 30 J</span>
                  <span class="text-success fw-bold">1 500 F</span>
                </li>
              </ul>
          </div>
          <div class="d-flex align-items-center">
            <div class="ms-auto">
              <div class="category-selector btn-group">
                <a class="btn btn-sm btn-secondary rounded-1" href="{{ route('confirmation') }}">
                    Acheter maintenant
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-3 single-note-item all-category note-important">
        <div class="card card-body">
            <span class="side-stick"></span>
            <h6 class="note-title text-truncate w-75 mb-0" data-noteHeading="Book a Ticket for Movie">
              Forfait Data Mois
            </h6>
            <p class="note-date fs-2"></p>
            <div class="note-content">
              <ul class="list-unstyled mb-3">
                  <li class="d-flex justify-content-between align-items-center">
                    <span>1 Go / 30 J</span>
                    <span class="text-success fw-bold">1 500 F</span>
                  </li>
                </ul>
            </div>
            <div class="d-flex align-items-center">
              <div class="ms-auto">
                <div class="category-selector btn-group">
                  <a class="btn btn-sm btn-secondary rounded-1" href="{{ route('confirmation') }}">
                      Acheter maintenant
                  </a>
                </div>
              </div>
            </div>
          </div>
      </div>
      <div class="col-md-3 single-note-item all-category note-social">
        <div class="card card-body">
            <span class="side-stick"></span>
            <h6 class="note-title text-truncate w-75 mb-0" data-noteHeading="Book a Ticket for Movie">
              Forfait Data Mois
            </h6>
            <p class="note-date fs-2"></p>
            <div class="note-content">
              <ul class="list-unstyled mb-3">
                  <li class="d-flex justify-content-between align-items-center">
                    <span>1 Go / 30 J</span>
                    <span class="text-success fw-bold">1 500 F</span>
                  </li>
                </ul>
            </div>
            <div class="d-flex align-items-center">
              <div class="ms-auto">
                <div class="category-selector btn-group">
                  <a class="btn btn-sm btn-secondary rounded-1" href="{{ route('confirmation') }}">
                      Acheter maintenant
                  </a>
                </div>
              </div>
            </div>
          </div>
      </div>
      <div class="col-md-3 single-note-item all-category">
        <div class="card card-body">
          <span class="side-stick"></span>
          <h6 class="note-title text-truncate w-75 mb-0" data-noteHeading="Book a Ticket for Movie">
            Forfait Data Mois
          </h6>
          <p class="note-date fs-2"></p>
          <div class="note-content">
            <ul class="list-unstyled mb-3">
                <li class="d-flex justify-content-between align-items-center">
                  <span>1 Go / 30 J</span>
                  <span class="text-success fw-bold">1 500 F</span>
                </li>
              </ul>
          </div>
          <div class="d-flex align-items-center">
            <div class="ms-auto">
              <div class="category-selector btn-group">
                <a class="btn btn-sm btn-secondary rounded-1" href="{{ route('confirmation') }}">
                    Acheter maintenant
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>
@endsection
