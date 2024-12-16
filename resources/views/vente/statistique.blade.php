@php
    $pagetitle = 'Statistiques des transactions';
@endphp

@extends('layouts.app')

@section('script')
    <script>
        // =====================================
        // total-orders chart
        // =====================================
        $(function() {
            var total_orders = {
                series: [{
                        name: "Last Year ",
                        data: [29, 52, 38, 47, 56, 41, 46],
                    },
                    {
                        name: "This Year ",
                        data: [71, 71, 71, 71, 71, 71, 71],
                    },
                ],
                chart: {
                    fontFamily: "inherit",
                    type: "bar",
                    height: 150,
                    stacked: true,
                    foreColor: "#707a82",
                    toolbar: {
                        show: false,
                    },
                },
                grid: {
                    show: false,
                    borderColor: "rgba(0,0,0,0.1)",
                    strokeDashArray: 1,
                    xaxis: {
                        lines: {
                            show: false,
                        },
                    },
                    yaxis: {
                        lines: {
                            show: true,
                        },
                    },
                    padding: {
                        top: 0,
                        right: 0,
                        bottom: 0,
                        left: 0,
                    },
                },
                colors: ["var(--bs-primary)", "#D9D9D9"],
                plotOptions: {
                    bar: {
                        horizontal: false,
                        columnWidth: "26%",
                        borderRadius: [3],
                        borderRadiusApplication: "end",
                        borderRadiusWhenStacked: "all",
                    },
                },
                dataLabels: {
                    enabled: false,
                },
                xaxis: {
                    categories: [
                        ["L"],
                        ["M"],
                        ["M"],
                        ["J"],
                        ["V"],
                        ["S"],
                        ["P"]
                    ],
                    axisBorder: {
                        show: false,
                    },
                    axisTicks: {
                        show: false,
                    },
                },
                yaxis: {
                    labels: {
                        show: false,
                    },
                },
                tooltip: {
                    theme: "dark",
                },
                legend: {
                    show: false,
                },
            };

            var chart_column_stacked = new ApexCharts(
                document.querySelector("#total-orders"),
                total_orders
            );
            chart_column_stacked.render();
        });
    </script>
@endsection
@section('script2')
    <script src="{{ asset('spike/assets/js/dashboards/dashboard.js') }}"></script>
    <script src="{{ asset('spike/assets/libs/apexcharts/dist/apexcharts.min.js') }}"></script>
    {{-- <script>
        document.addEventListener('DOMContentLoaded', function() {
            document.getElementById('stockNegatifBtn').addEventListener('click', function() {
                var myModal = new bootstrap.Modal(document.getElementById('stockNegatifModal'));
                myModal.show();
            });
        });
    </script> --}}
@endsection

@section('content')
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
 <div class="col-lg-4 d-flex align-items-stretch">
    <div class="card w-100">
        <div class="card-body">
            <div class="d-flex justify-content-between">
                <div>
                    <h5 class="card-title mb-1">Ventes</h5>
                    <p class="mb-0">7 derniers jours</p>
                </div>
                <div>
                    <h5 class="card-title mb-1 text-end">12,389</h5>
                    <span
                        class="badge rounded-pill bg-warning-subtle text-warning border-warning border text-end">-3.8%</span>
                </div>
            </div>
            <div id="total-orders" class="total-orders-chart my-1"></div>
            <div class="d-flex align-items-center justify-content-between mb-2">
                <div class="d-flex align-items-center">
                    <i class="ti ti-circle text-primary fs-4 me-2"></i>
                    <p class="mb-0">Wrappixel</p>
                </div>
                <p class="mb-0">52%</p>
            </div>
            <div class="d-flex align-items-center justify-content-between">
                <div class="d-flex align-items-center">
                    <i class="ti ti-circle text-light fs-4 me-2"></i>
                    <p class="mb-0">Adminmart</p>
                </div>
                <p class="mb-0">48%</p>
            </div>
        </div>
    </div>

</div>
<div class="col-lg-8 d-flex align-items-stretch">
    <div class="card w-100">
        <div class="card-body position-relative pb-2">
            <!-- Conteneur principal aligné horizontalement -->
            <div class="d-flex align-items-center justify-content-between">
                <!-- Texte de bienvenue et bouton -->
                <div>
                    <h5 class="mb-1 fw-bold">Bienvenue Administrateur</h5>
                    <p class="fs-3 mb-3 pb-1">Consultez toutes les statistiques</p>
                    <a href="{{ route('achat') }}" class="btn btn-warning rounded-1" type="button">
                        Accéder à la Boutique
                    </a>
                </div>

                <!-- Image alignée à droite -->
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

</div>
@endsection
