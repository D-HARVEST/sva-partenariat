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
                <span class="fw-semibold">5 Go / 30 J</span>
              </li>
              <li class="d-flex justify-content-between align-items-center mb-2">
                <span>Prix :</span>
                <span class="fw-semibold text-success">7 000 F</span>
              </li>
              <li class="d-flex justify-content-between align-items-center">
                <span>Quantité :</span>
                <span class="fw-semibold">1</span>
              </li>
            </ul>
          </div>
        </div>
        <!-- Section de droite : Confirmation et paiement -->
        <div class="col-lg-6">
          <div class="shop-content">
            <h4>Confirmer l'Achat</h4>
            <div class="mb-3">
              <label for="phoneNumber" class="form-label fw-semibold">N° de Téléphone du Bénéficiaire</label>
              <input type="text" id="phoneNumber" class="form-control" placeholder="Entrez un numéro de téléphone" value="0701234567">
            </div>
            <div class="mb-3">
              <label for="paymentMethod" class="form-label fw-semibold">Mode de Paiement</label>
              <select id="paymentMethod" class="form-select">
                <option value="momo">MoMo MTN</option>
                <option value="moov">MOOV</option>
              </select>
            </div>
            <div class="d-flex align-items-center gap-6 pt-4">
              <a href="javascript:void(0)" class="btn btn-primary w-50">Confirmer et Payer</a>
              <a href="javascript:void(0)" class="btn btn-secondary w-50">Annuler</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection
