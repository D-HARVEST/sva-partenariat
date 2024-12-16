@php
    $pagetitle = 'Tableau de bord';
@endphp

@extends('layouts.app')


@section('content')
<div class="row">
    <div class="col-lg-12 col-xl-6 d-flex align-items-strech">
      <div class="card w-100">
        <div class="card-body position-relative">
          <div>
            <h5 class="mb-1 fw-bold">Bienvenue, Jonathan Deo</h5>
            <p class="fs-3 mb-3 pb-1">Gérez vos données en toute simplicité !</p>
            <a class="btn btn-primary rounded-1" href="{{ route('achat') }}">
              Acheter de la data
            </a>
          </div>
          <div class="school-img d-none d-sm-block">
            <img src="./../assets/images/backgrounds/school.png" class="img-fluid" alt="" />
          </div>

          <div class="d-sm-none d-block text-center">
            <img src="./../assets/images/backgrounds/school.png" class="img-fluid" alt="" />
          </div>
        </div>
      </div>
    </div>

    <div class="col-lg-12 col-xl-6">
      <div class="row">
        <div class="col-sm-4 d-flex align-items-strech">
          <div class="card warning-card overflow-hidden text-bg-primary w-100">
            <div class="card-body p-4">
              <div class="mb-7">
                <i class="ti ti-brand-producthunt fs-8 fw-lighter"></i>
              </div>
              <h5 class="text-white fw-bold fs-14 text-nowrap">
                2358 <span class="fs-2 fw-light">+23%</span>
              </h5>
              <p class="opacity-50 mb-0 ">Sales</p>
            </div>
          </div>
        </div>

        <div class="col-sm-4 d-flex align-items-strech">
          <div class="card danger-card overflow-hidden text-bg-primary w-100">
            <div class="card-body p-4">
              <div class="mb-7">
                <i class="ti ti-report-money fs-8 fw-lighter"></i>
              </div>
              <h5 class="text-white fw-bold fs-14">
                356 <span class="fs-2 fw-light">+8%</span>
              </h5>
              <p class="opacity-50 mb-0">Refunds</p>
            </div>
          </div>
        </div>

        <div class="col-sm-4 d-flex align-items-strech">
          <div class="card info-card overflow-hidden text-bg-primary w-100">
            <div class="card-body p-4">
              <div class="mb-7">
                <i class="ti ti-currency-dollar fs-8 fw-lighter"></i>
              </div>
              <h5 class="text-white fw-bold fs-14 text-nowrap">
                $235.8K <span class="fs-2 fw-light">-3%</span>
              </h5>
              <p class="opacity-50 mb-0">Earnings</p>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>
<div class="row">
    <div class="col-12">
      <div class="card mb-0">
        <div class="card-body">
          <div class="d-md-flex justify-content-between mb-9">
            <div class="mb-9 mb-md-0">
              <h5 class="card-title">Historique</h5>
            </div>
            <div class="d-flex align-items-center">
              <form class="position-relative me-3 w-100">
                <input type="text" class="form-control search-chat py-2 ps-5" id="text-srh"
                  placeholder="Search">
                <i
                  class="ti ti-search position-absolute top-50 start-0 translate-middle-y fs-6 text-dark ms-3"></i>
              </form>
              <div class="dropdown">
                <a href="#" class="btn border shadow-none px-3" id="dropdownMenuButton"
                  data-bs-toggle="dropdown" aria-expanded="false">
                  <i class="ti ti-dots-vertical fs-5"></i>
                </a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton">
                  <li>
                    <a class="dropdown-item d-flex align-items-center gap-3" href="#"><i
                        class="fs-4 ti ti-plus"></i>Add</a>
                  </li>
                  <li>
                    <a class="dropdown-item d-flex align-items-center gap-3" href="#"><i
                        class="fs-4 ti ti-edit"></i>Edit</a>
                  </li>
                  <li>
                    <a class="dropdown-item d-flex align-items-center gap-3" href="#"><i
                        class="fs-4 ti ti-trash"></i>Delete</a>
                  </li>
                </ul>
              </div>
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
                  <th>Montant</th>
                  <th>Volume</th>
                  <th>Status</th>
                  <th>Temps d'expiration</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
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
                    <h5 class="mb-1 fs-4">50000 Fcfa</h5>
                  </td>
                  <td>
                      <p class="text-dark mb-0 fw-normal text-truncate-2">
                        30GB
                      </p>
                  </td>
                  <td>
                    <span class="badge rounded-pill bg-success-subtle text-success border-success border">Valide</span>
                  </td>
                  <td>
                    <p class="mb-0">1 mois</p>
                  </td>
                  <td>
                    <div class="dropdown dropstart">
                      <a href="#" class="text-muted " id="dropdownMenuButton" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        <i class="ti ti-dots-vertical fs-5"></i>
                      </a>
                      <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <li>
                          <a class="dropdown-item d-flex align-items-center gap-3" href="#"><i
                              class="fs-4 ti ti-plus"></i>Add</a>
                        </li>
                        <li>
                          <a class="dropdown-item d-flex align-items-center gap-3" href="#"><i
                              class="fs-4 ti ti-edit"></i>Edit</a>
                        </li>
                        <li>
                          <a class="dropdown-item d-flex align-items-center gap-3" href="#"><i
                              class="fs-4 ti ti-trash"></i>Delete</a>
                        </li>
                      </ul>
                    </div>
                  </td>
                </tr>
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
@endsection
