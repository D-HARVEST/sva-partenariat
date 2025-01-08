@php
    $pagetitle = 'Tableau de bord';
@endphp

@extends('layouts.app')

@section('script')
<script>
    document.addEventListener('DOMContentLoaded', () => {
        const volumeExpireModal = document.getElementById('volumeExpireModal');
        volumeExpireModal.addEventListener('show.bs.modal', (event) => {
            const button = event.relatedTarget; // Bouton qui a déclenché le modal
            const stockId = button.getAttribute('data-id'); // Récupérer l'ID
            const modalForm = volumeExpireModal.querySelector('form');

            // Injecter l'ID dans le champ caché du formulaire
            modalForm.querySelector('input[name="id"]').value = stockId;
        });
    });
</script>

@endsection

@section('modal')
    @include('modalAjout')
@endsection


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
                                                        href="#" data-bs-toggle="modal"
                                                        data-bs-target="#volumeExpireModal" data-id="{{ $stock->id }}">
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
                    <h5 class="mb-1 fw-bold">Bienvenue, {{ auth()->user()->name }}</h5>
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

<!-- Modal -->
@role('Client')
<div class="modal fade" id="welcomeModal" tabindex="-1" aria-labelledby="welcomeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-sm modal-md modal-lg">
        <div class="modal-content" style="background-color: white;">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="text-center mb-4">
                    <img src="{{ asset('assets/image/bell.jpg') }}" alt="Image de fond" class="img-fluid" style="max-width: 100px; height: auto; margin: 0 auto">
                </div>

                <div class="text-center">
                    @if ($dataPackagesAvailable)
                        <h5 class="mb-1 fw-bold">Bienvenue, {{ auth()->user()->name }}</h5>
                        <p class="fs-3 mb-3 pb-1" style="color:#34C759;">Nous avons des données datas disponibles !</p>
                    @else
                        <h5 class="mb-1 fw-bold">Bienvenue, {{ auth()->user()->name }}</h5>
                        <p class="fs-3 pb-1 text-danger">Aucun package de données n'est disponible, Revenez plus tôt pour acheter des données !</p>
                        <h6 class="fs-3 pb-1 text-secondary"></h6>
                        <h6 class="mb-1 fw-bold mt-4 text-secondary">Merci pour votre confiance !</h6>
                    @endif
                </div>

                <div class="modal-footer mb-5" style="display: flex; justify-content: center; width: 100%; padding: 7px;">
                    @if ($dataPackagesAvailable)
                        <a href="{{ route('achat') }}">
                            <button type="button" class="btn btn-secondary rounded-1">Voir les packages disponibles</button>
                        </a>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>

  @endrole

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
                <form method="GET" action="{{ route('dashboard') }}" class="position-relative me-3 w-100">
                    <input type="text" name="search" class="form-control search-chat py-2 ps-5" id="text-srh"
                        placeholder="Search" value="{{ old('search', $searchTerm) }}">
                    <i class="ti ti-search position-absolute top-50 start-0 translate-middle-y fs-6 text-dark ms-3"></i>
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
                  <th>Volume</th>
                  <th>Prix</th>
                  <th>Validité</th>
                  <th>Status</th>
                  <th>Date d'achat</th>

                </tr>
              </thead>
              <tbody>
                @forelse ($transactions as $transaction)
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
                        <h5 class="mb-1 fs-4">
                            {{ $transaction->Volume }} Go
                        </h5>
                    </td>
                    <td>
                      <h5 class="mb-1 fs-4">{{ $transaction->Prix }} Fcfa </h5>
                    </td>
                    <td>
                        <h5 class="mb-1 fs-4">{{ $transaction->Validite }} H</h5>
                    </td>
                    <td>
                        <div class="d-flex align-items-center">
                            @if($transaction->Statut == 1)
                                <i class="ti ti-check text-success me-2"></i>
                                <h6 class="mb-0">Actif</h6>
                            @else
                                <i class="ti ti-x text-danger me-2"></i>
                                <h6 class="mb-0">Expiré</h6>
                            @endif
                        </div>
                    </td>
                    <td>
                        <h5 class="mb-1 fs-4">{{ $transaction->created_at }}</h5>
                    </td>
                  </tr>
                  @empty
                  <tr>
                      <td colspan="7" class="text-center">
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





@role('Super-admin')
<div class="row">
    <div class="col-12">
      <div class="card mb-0">
        <div class="card-body">
          <div class="d-md-flex justify-content-between mb-9">
            <div class="mb-9 mb-md-0">
              <h5 class="card-title">Historique d'achat</h5>
            </div>
            <div class="d-flex align-items-center">
                <form method="GET" action="{{ route('dashboard') }}" class="position-relative me-3 w-100">
                    <input type="text" name="search" class="form-control search-chat py-2 ps-5" id="text-srh"
                        placeholder="Search" value="{{ old('search', $searchTerm) }}">
                    <i class="ti ti-search position-absolute top-50 start-0 translate-middle-y fs-6 text-dark ms-3"></i>
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
                  <th>Volume</th>
                  <th>Prix</th>
                  <th>Validité</th>
                  <th>Status</th>
                  <th>Date d'achat</th>

                </tr>
              </thead>
              <tbody>
                @forelse ($trans as $transaction)
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
                        <p class="text-dark mb-0 fw-normal text-truncate-2">
                            {{ $transaction->Volume }} Go
                        </p>
                    </td>
                    <td>
                      <h5 class="mb-1 fs-4">{{ $transaction->Prix }} Fcfa </h5>
                    </td>
                    <td>
                      <p class="mb-0">{{ $transaction->Validite }} H</p>
                    </td>
                    <td>
                        <div class="d-flex align-items-center">
                            @if($transaction->Statut == 1)
                                <i class="ti ti-check text-success me-2"></i>
                                <h6 class="mb-0">Actif</h6>
                            @else
                                <i class="ti ti-x text-danger me-2"></i>
                                <h6 class="mb-0">Expiré</h6>
                            @endif
                        </div>
                    </td>
                    <td>
                        <p class="mb-0">{{ $transaction->created_at }}</p>
                    </td>
                  </tr>
                  @empty
                  <tr>
                      <td colspan="7" class="text-center">
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




<script>
    window.addEventListener('DOMContentLoaded', (event) => {
        // Afficher le modal
        var myModal = new bootstrap.Modal(document.getElementById('welcomeModal'));
        myModal.show();
    });
</script>

@endsection
