@php
    $pagetitle = 'Liste des forfaits de data ';
    $breadcrumbs = ['Liste des forfaits de data' => route('data-packages.index')];
@endphp

@extends('layouts.app')


@section('content')
    <div class="">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">



                    <div class="card-body">
                      @if ($message = Session::get('success'))
                            <div class="alert alert-success">
                                <p>{{ $message }}</p>
                            </div>
                        @endif

                        <div class="text-end">
                            <a href="{{ route('data-packages.create') }}" class="btn btn-sm btn-primary rounded-05"> Nouveau</a>
                        </div>
                        <div class="col mb-2">
                            <h5 class="card-title text-dark fw-bolder mb-0">Forfaits de data</h5>
                            <span>Liste des forfaits de data</span>
                            <div class="row justify-content-end my-2">
                                <div class="col-sm-4">
                                    <form method="get">
                                        <div class="input-group mb-3">
                                            <input type="search" placeholder="Rechercher un article"
                                                class="form-control form-control-sm" name="search"
                                                value="{{ request()->search }}">
                                            <span class="input-group-text">
                                                <i class="ti ti-search"></i>
                                            </span>
                                        </div>
                                    </form>
                                </div>

                            </div>
                            <hr>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>N°</th>

									<th >Referenceapi</th>
									<th >Volume</th>
									<th >Cout</th>
                                    <th>Recharge Compte</th>
									<th >Prix</th>
									<th >Ancienprix</th>
									<th >Validite</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($dataPackages as $dataPackage)
                                        <tr>
                                            <td>{{ ++$i }}</td>

										<td >{{ $dataPackage->referenceAPI }}</td>
										<td >{{ $dataPackage->Volume }} Go</td>
										<td >{{ $dataPackage->Cout }} FCFA</td>
                                        <td >{{ $dataPackage->rechargeStock->recharge_compte->Libelle}}</td>
										<td >{{ $dataPackage->Prix }} FCFA</td>
										<td >{{ $dataPackage->AncienPrix }} FCFA</td>
										<td >{{ $dataPackage->Validite }} Heure(s)</td>

                                            <td>
                                                <div class="dropdown dropstart">
                                                    <a href="javascript:void(0)" class="text-muted show" id="dropdownMenuButton" data-bs-toggle="dropdown"
                                                        aria-expanded="true">
                                                        <i class="ti ti-dots-vertical fs-5"></i>
                                                    </a>
                                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton"
                                                        style="position: absolute; inset: 0px 0px auto auto; margin: 0px; transform: translate3d(-20px, 1.6px, 0px);"
                                                        data-popper-placement="left-start">
                                                        <li>
                                                            <a class="dropdown-item d-flex align-items-center gap-3" href="{{ route('data-packages.show',$dataPackage->id) }}">
                                                                <i class="fs-4 ti ti-eye"></i> Détails
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a class="dropdown-item d-flex align-items-center gap-3" href="{{ route('data-packages.edit',$dataPackage->id) }}">
                                                                <i class="fs-4 ti ti-edit"></i> Modifier
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <form action="{{ route('data-packages.destroy',$dataPackage->id) }}" method="POST">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button type="submit" class="dropdown-item text-danger">
                                                                <i class="fs-4 ti ti-trash"></i> {{ __('Supprimer') }}
                                                                </button>
                                                            </form>

                                                        </li>
                                                    </ul>
                                                </div>
                                                {{--
                                                    <div class="dropdown">
                                                        <button class="btn btn-primary dropdown-toggle btn-sm" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            Actions
                                                        </button>
                                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                            <a class="dropdown-item" href="{{ route('data-packages.show',$dataPackage->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Détails') }}</a>
                                                            <a class="dropdown-item" href="{{ route('data-packages.edit',$dataPackage->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Modifier') }}</a>
                                                            <div class="dropdown-divider"></div>
                                                            <form action="{{ route('data-packages.destroy',$dataPackage->id) }}" method="POST">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button type="submit" class="dropdown-item text-danger"><i class="fa fa-fw fa-trash"></i> {{ __('Supprimer') }}</button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                --}}
                                            </td>

                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $dataPackages->withQueryString()->links() !!}
            </div>
        </div>
    </div>
@endsection
