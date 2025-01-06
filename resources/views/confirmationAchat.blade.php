@php
    $pagetitle = 'Confirmation d\'achat';
@endphp

@extends('layouts.app')

@section('content')
<div class="card shadow-none border">
    <div class="card-body p-4">
      <div class="row">
        <!-- Section de gauche : Détail du forfait -->
        <div class="col-lg-6 border-end">
            <div class="shop-content">
              <h4>Détails du Forfait</h4>
              <p class="mb-3 text-muted">Veuillez vérifier les informations avant de confirmer.</p>
              <ul class="list-unstyled">
                <li class="d-flex justify-content-between align-items-center mb-2">
                  <span>Forfait sélectionné :</span>
                  <span class="fw-semibold">{{$details->Volume}} Go / {{$details->Validite}} H</span>
                </li>
                <li class="d-flex justify-content-between align-items-center mb-2">
                  <span>Prix :</span>
                  <span class="fw-semibold text-success">{{$details->Prix}} F</span>
                </li>
                {{-- <li class="d-flex justify-content-between align-items-center">
                  <span>Volume :</span>
                  <span class="fw-semibold">1</span>
                </li> --}}
              </ul>
            </div>
        </div>
        <!-- Section de droite : Confirmation et paiement -->
        <div class="col-lg-6">
          <div class="shop-content">
            <form action="{{ route('transactions.store') }}" method="POST">
                @csrf
            <h4>Confirmer l'Achat</h4>
            <input type="hidden" name="data_package_id" value="{{ $details->id }}">
            <div class="mb-3">
              <label for="phoneNumber" class="form-label fw-semibold">N° de Téléphone du Bénéficiaire</label>
              <input type="text" id="phoneNumber" class="form-control" placeholder="Entrez un numéro de téléphone" value="{{ Auth::user()->telephone ?? '' }}">
            </div>
            <div class="mb-3">
                <label for="paymentMethod" class="form-label fw-semibold">Mode de Paiement</label>
                <select id="paymentMethod" name="ModePaiement" class="form-select" required>
                    <option value="" disabled selected>Choisissez un mode de paiement</option>
                    <option value="momo">MoMo MTN</option>
                    <option value="moov">MOOV</option>
                </select>
            </div>
            <div class="d-flex align-items-center gap-6 pt-4">
              <button type="submit" class="btn btn-primary w-50">Confirmer et Payer</button>
              <a href="{{ route('achat') }}" class="btn btn-secondary w-50">Annuler</a>
            </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection
