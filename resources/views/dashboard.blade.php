@php
    $pagetitle = 'Tableau de bord';
@endphp

@extends('layouts.app')


@section('content')
@role('Super-admin')
<div class="row">
    <div class="col-lg-4">
        <div class="card border-radius-xl shadow">
            <div class="card-body p-4">
                <div class="d-flex align-items-center">
                    <div
                        class="bg-success-subtle text-success p-6 fs-7 rounded-circle d-flex align-items-center justify-content-center">
                        <i class="ti ti-template"></i>
                    </div>
                    <div class="ms-6">
                        <h6 class="mb-1 fs-6">Chiffre d'affaire du jour</h6>

                        <p class="mb-0">
                            0 F CFA
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

 <div class="col-lg-4">
    <div class="card border-radius-xl shadow">
        <div class="card-body p-4">
            <div class="d-flex align-items-center">
                <div
                    class="bg-success-subtle text-success p-6 fs-7 rounded-circle d-flex align-items-center justify-content-center">
                    <i class="ti ti-template"></i>
                </div>
                <div class="ms-6">
                    <h6 class="mb-1 fs-6">Chiffre d'affaire de la semaine</h6>

                    <p class="mb-0">
                        0 F CFA</p>
                </div>
            </div>
        </div>
    </div>
 </div>
 <div class="col-lg-4">
    <div class="card border-radius-xl shadow">
        <div class="card-body p-4">
            <div class="d-flex align-items-center">
                <div
                    class="bg-success-subtle text-success p-6 fs-7 rounded-circle d-flex align-items-center justify-content-center">
                    <i class="ti ti-template"></i>
                </div>
                <div class="ms-6">
                    <h6 class="mb-1 fs-6">Chiffre d'affaire du Mois</h6>
                    <p class="mb-0">
                        0 F CFA</p>

                </div>
            </div>
        </div>
    </div>
 </div>
</div>
@endrole
<div class="row">
    @role('Super-admin')
    <!-- Premiere colonne -->
    <div class="col-lg-12 col-xl-6 d-flex align-items-stretch">
        <div class="card w-100">
            <div class="card-body pb-2">
                <h5 class="">Les data en stock critiques</h5>
                <div class="table-responsive overflow-x-auto border rounded-1">
                    <table id="all-student" class="table table-bordered border table-striped align-middle">
                        <thead>
                            <tr>
                                <th>Forfait</th>
                                <th>Volume(s)</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody class="border-top">
                            @forelse ($stocksCritiques as $stock)
                                <tr>
                                    <td>
                                        <p>MTN</p>
                                    </td>
                                    <td>
                                        <p class="text-danger">{{ $stock->Volume }} Go</p>
                                    </td>
                                    <td>
                                        <div class="dropdown dropstart">
                                            <a href="#" class="text-muted"
                                                id="dropdownMenuButton" data-bs-toggle="dropdown"
                                                aria-expanded="false">
                                                <i class="ti ti-dots-vertical fs-5"></i>
                                            </a>
                                            <ul class="dropdown-menu"
                                                aria-labelledby="dropdownMenuButton">
                                                <li>
                                                    <a class="dropdown-item d-flex align-items-center gap-3"
                                                        href="#">
                                                        <i class="fs-4 ti ti-plus"></i>Détails / Ajouter Quantité
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item d-flex align-items-center gap-3"
                                                        href="#">
                                                        <i class="fs-4 ti ti-edit"></i>Désactiver le suivi de stock
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="3" class="text-center">Aucun stock critique trouvé</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    @endrole

    <!-- Deuxième colonne -->
    <div class="col-lg-12 col-xl-6 d-flex align-items-stretch">
        <div class="card w-100">
            <div class="card-body d-flex justify-content-between align-items-center position-relative">
                <div>
                    <h5 class="mb-1 fw-bold">Bienvenue, Jonathan Deo</h5>
                    <p class="fs-3 mb-3 pb-1">Gérez vos données en toute simplicité !</p>
                    @role('Client')
                    <a class="btn btn-primary rounded-1" href="{{ route('achat') }}">
                        Acheter de la data
                    </a>
                    @endrole
                </div>
                <div>
                    <img src="{{ asset('spike/assets/images/backgrounds/school.png') }}"
                         class="img-fluid"
                         alt="Image de fond"
                         style="max-width: 200px; height: auto;" />
                </div>
            </div>
        </div>
    </div>
</div>

@role('Client')
<div class="row">
    <div class="col-12">
      <div class="card mb-0">
        <div class="card-body">
          <div class="d-md-flex justify-content-between mb-9">
            <div class="mb-9 mb-md-0">
              <h5 class="card-title">Historique d'achat</h5>
            </div>
            <div class="d-flex align-items-center">
              <form class="position-relative me-3 w-100">
                <input type="text" class="form-control search-chat py-2 ps-5" id="text-srh"
                  placeholder="Search">
                <i
                  class="ti ti-search position-absolute top-50 start-0 translate-middle-y fs-6 text-dark ms-3"></i>
              </form>
            </div>
          </div>
          <div class="table-responsive overflow-x-auto latest-reviews-table">
            <table class="table mb-0 align-middle text-nowrap">
              <thead class="text-dark fs-4">
                <tr>
                  <th class="ps-0">
                    #
                  </th>
                  <th>Forfait</th>
                  <th>Prix</th>
                  <th>Volume</th>
                  <th>Status</th>
                  <th>Validité</th>
                </tr>
              </thead>
              <tbody>
                @forelse ($historiques as $historique)
                 <tr>
                    <td class="ps-0">
                      <div class="form-check mb-0 flex-shrink-0">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault1">
                      </div>
                    </td>
                    <td>
                      <h6 class="fs-4 mb-0 text-truncate-2">forfait mois</h6>
                    </td>
                    <td>
                      <h5 class="mb-1 fs-4">{{ $historique->dataPackage->Prix }} Fcfa</h5>
                    </td>
                    <td>
                        <p class="text-dark mb-0 fw-normal text-truncate-2">
                            {{ $historique->dataPackage->Volume }} Go
                        </p>
                    </td>
                    <td>
                      <span class="badge rounded-pill bg-success-subtle text-success border-success border">Valide</span>
                    </td>
                    <td>
                      <p class="mb-0">{{ $historique->dataPackage->Validite }} H</p>
                    </td>
                  </tr>
                @empty
                <tr>
                    <td colspan="4" class="text-center">
                        <i class="ti ti-mood-empty text-muted"
                            style="font-size: 3rem; font-weight: 100;"></i> <br>
                        Aucune donnée disponible
                    </td>
                </tr>
                @endforelse
              </tbody>
            </table>
          </div>
          <div class="d-flex align-items-center justify-content-between mt-10">
            <p class="mb-0 fw-normal">1-6 of 32</p>
            <nav aria-label="Page navigation example">
              <ul class="pagination mb-0 align-items-center">
                <li class="page-item"><a
                    class="page-link border-0 d-flex align-items-center text-muted fw-normal"
                    href="#"><iconify-icon icon="solar:alt-arrow-left-line-duotone"
                      class="fs-5"></iconify-icon>Previous</a></li>
                <li class="page-item"><a class="page-link border-0 d-flex align-items-center fw-normal"
                    href="#">Next<iconify-icon icon="solar:alt-arrow-right-line-duotone"
                      class="fs-5"></iconify-icon></a></li>
              </ul>
            </nav>
          </div>
        </div>
      </div>
    </div>
</div>
@endrole
@endsection
