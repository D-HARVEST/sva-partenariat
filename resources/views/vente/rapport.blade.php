@php
    $pagetitle = 'Rapport de Vente';
@endphp
@extends('layouts.app', ['withoutBarner' => false])

@section('script')
    <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
    <script>
        $(document).ready(function() {
            let ranges = {
                "Aujourd'hui": [
                    moment().startOf('day'),
                    moment().endOf('day'),

                ],
                "Cette Semaine": [
                    moment().startOf('week'),
                    moment().endOf('week')
                ],
                "Ce mois-ci": [
                    moment().startOf('month'),
                    moment().endOf('month')
                ],
            };
            @if (request()->start_date && request()->end_date && !empty(request()->start_date) && !empty(request()->end_date))
                var startDate = moment(@Js(request()->start_date)) ?? moment().startOf('day');
                var endDate = moment(@Js(request()->end_date)) ?? moment().endOf('day');
            @else
                var startDate = moment().startOf('day');
                var endDate = moment().endOf('day');
            @endif
            if (!startDate.isValid() || !endDate.isValid()) {
                startDate = moment().startOf('day');
                endDate = moment().endOf('day');
                $('#datedebut').val(startDate.format('YYYY-MM-DD HH:mm:ss'));
                $('#datefin').val(endDate.format('YYYY-MM-DD HH:mm:ss'));
                $("#filterForm").submit();
            } else {
                $('#datedebut').val(startDate.format('YYYY-MM-DD HH:mm:ss'));
                $('#datefin').val(endDate.format('YYYY-MM-DD HH:mm:ss'));
                let label = '';
                try {
                    Object.entries(ranges).forEach(([key, value]) => {
                        if (startDate.toString() == (value[0].toString()) && endDate.toString() == (value[1]
                                .toString())) {
                            label = key;
                        }
                    });
                } catch (error) {

                }
                if (label == '') {
                    label = "Personnaliser : " + startDate.format('DD/MM/YYYY HH:mm:ss') +
                        " - " + endDate.format('DD/MM/YYYY HH:mm:ss')
                }
                $('#datePickerLabel').val(label);
            }

            // var startDate = moment().startOf('day');
            // var endDate = moment().endOf('day');
            console.log(startDate, endDate);
            $('#daterangepicker').daterangepicker({
                "timePicker": true,
                "timePicker24Hour": true,
                "autoApply": true,
                "showCustomRangeLabel": true,
                "ranges": ranges,
                "startDate": startDate,
                "endDate": endDate,


            }, function(start, end, label) {
                // console.log(label);
                $('#datedebut').val(start.format('YYYY-MM-DD HH:mm:ss'));
                $('#datefin').val(end.format('YYYY-MM-DD HH:mm:ss'));
                $('#datePickerLabel').val(label);
                if (label == "Custom Range") {
                    $('#datePickerLabel').val("Personnaliser : " + start.format('DD/MM/YYYY HH:mm:ss') +
                        " - " + end.format('DD/MM/YYYY HH:mm:ss'));
                }
                $("#filterForm").submit();
            });
        })
    </script>
@endsection
@section('style2')
    <link href="{{ asset('spike/assets/css/styleD.css') }}" rel='stylesheet'>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
@endsection
@section('content')
    <div class="row">
        <div class="col-12">
            <form class="mb-3" method="GET" id="filterForm">
                <div class="d-none">
                    <input type="datetime-local" class="form-control rounded-2 bg-white fs-3 px-2 text-center"
                        name="end_date" id="datefin" placeholder="Date de fin" value="{{ request('end_date') }}">
                    <input type="datetime-local" class="form-control rounded-2 bg-white fs-3 px-2 text-center"
                        name="start_date" id="datedebut" placeholder="Date de début" value="{{ request('start_date') }}">
                </div>
                <div class="input-group mb-0 ">
                    <div class="input-group-text">
                        <i class="ti ti-calendar me-2 fs-6"> </i> Période
                    </div>
                    <input type="text" class="form-control bg-white text-center" id="datePickerLabel" disabled>
                    <button class="btn btn-secondary " type="button" id="daterangepicker">
                        <i class="ti ti-edit me-2 fs-4"> </i> Définir
                    </button>
                </div>
            </form>


        </div>
        <div class="col-lg-4 d-flex align-items-stretch">
            <div class="card border-radius-xl shadow w-100">
                <div class="card-body p-4">
                    <div class="d-flex align-items-center ">
                        <div
                            class="bg-success-subtle text-success p-6 fs-7 rounded-circle d-flex align-items-center justify-content-center">
                            <i class="ti ti-template"></i>
                        </div>
                        <div class="ms-6">
                            <h6 class="mb-1 fs-6">Chiffre d'affaire</h6>

                            <p class="mb-0">
                               0
                                F CFA
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-12 ">
            <div class="card mb-0">
                <div class="card-body">

                    <div class="d-md-flex justify-content-between mb-9">
                        <div class="mb-9 mb-md-0">
                            <h5 class="card-title mb-0">Rapport des ventes</h5>
                        </div>
                        <div class="text-end">

                            <div class="btn-group ">
                                <button type="button" class="btn btn-sm fs-3  btn-outline-primary rounded-start-2">
                                    <i class="ti ti-download me-2"></i>
                                    Exporter</button>
                                <button type="button"
                                    class="btn btn-sm fs-3 btn-primary dropdown-toggle dropdown-toggle-split rounded-end-2"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="sr-only"></span>
                                </button>
                                <ul class="dropdown-menu rounded-2" style="">
                                    <li class="border-bottom">
                                        <a class="dropdown-item text-dark"
                                            href="#">
                                            <i class="ti ti-file-text me-2"></i> PDF</a>
                                    </li>

                                    <li>
                                        <a class="dropdown-item text-dark"
                                           href="#">
                                            <i class="ti ti-file-spreadsheet me-2"></i>
                                            Excel
                                        </a>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </div>



                    <div class="table-responsive overflow-x-auto latest-reviews-table border rounded-1">
                        <table class="table mb-0 align-middle text-nowrap">
                            <thead class="text-dark fs-4">
                                <tr>

                                    <th>Forfait</th>
                                    <th>Volume</th>
                                    <th>Prix </th>
                                    <th>Validité </th>
                                    <th>Statut</th>
                                </tr>
                            </thead>
                            <tbody>
                              @forelse ($ventes as $vente)
                                <tr>
                                    <td>
                                        <h6 class="fs-4 mb-0 text-truncate-2">Forfait Semaine</h6>
                                    </td>
                                    <td>
                                        <p class="text-dark mb-0 fw-normal text-truncate-2">{{ $vente->Volume }} Go</p>
                                    </td>
                                    <td>
                                        <h5 class="mb-1 fs-4">{{ $vente->Prix }} FCFA</h5>
                                    </td>
                                    <td>
                                        <p class="mb-0">{{ $vente->Validite }} H</p>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            @if($vente->Statut == 1)
                                                <i class="ti ti-check text-success me-2"></i>
                                                <h6 class="mb-0">Actif</h6>
                                            @else
                                                <i class="ti ti-x text-danger me-2"></i>
                                                <h6 class="mb-0">Expiré</h6>
                                            @endif
                                        </div>
                                    </td>
                                </tr>
                              @empty
                                    <tr>
                                        <td colspan="4" class="text-center">
                                            <i class="ti ti-mood-empty text-muted"
                                                style="font-size: 3rem; font-weight: 100;"></i> <br>
                                            Aucune donnée disponible pour cette période
                                        </td>
                                    </tr>
                              @endforelse
                            </tbody>
                        </table>
                    </div>


                </div>
            </div>

        </div>
    </div>
@endsection
