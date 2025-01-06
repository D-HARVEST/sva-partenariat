@extends('auth.template')

@section('content')
    <h2 class="lh-base mb-0">Inscription </h2>
    <p>
        Rejoignez-nous en quelques clics pour profiter de nos services.
    </p>
    <hr>
    <div class="row">
        <div class="col-12">
            <a class="btn btn-white shadow-sm text-dark link-primary border fw-semibold d-flex align-items-center justify-content-center rounded-1 py-6"
                href="{{ url('/login/google') }}" role="button">
                <img src="{{ asset('matdash/google-icon.svg') }}" alt="matdash-img" class="img-fluid me-2" width="18" height="18">
                <span class="d-none d-xxl-inline-flex"> S'inscrire avec Google</span>
            </a>
        </div>
    </div>
    <div class="position-relative text-center my-4">
        <p class="mb-0 fs-12 px-3 d-inline-block bg-body z-index-5 position-relative">
            Ou inscrivez-vous avec
        </p>
        <span class="border-top w-100 position-absolute top-50 start-50 translate-middle"></span>
    </div>
    <form method="POST" action="{{ route('register') }}" role="form">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Nom complet <strong class="text-danger">*</strong></label>
            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                value="{{ old('name') }}" required autocomplete="name" autofocus>
            @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Email / Identifiant</label>
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                value="{{ old('email') }}" required autocomplete="email">
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    
        <div class="mb-4">
            <label for="password" class="form-label">Mot de passe</label>
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required>
            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="mb-3">
            <label for="telephone" class="form-label">Telephone</label>
            <input id="telephone" type="tel" class="form-control @error('telephone') is-invalid @enderror" pattern="[0-9]{10}" name="telephone"
                value="{{ old('telephone') }}"  autocomplete="telephone"  title="Le numéro de téléphone doit être composé uniquement de chiffres">
            @error('telephone')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <button type="submit" class="btn btn-dark w-100 py-8 mb-4 rounded-1">S'inscrire</button>
        <div class="d-flex align-items-center">
            <p class="fs-12 mb-0 fw-medium">Avez-vous déjà un compte chez nous ?</p>
            <a class="text-success fw-bolder ms-2" href="{{ route('login') }}">Se connecter</a>
        </div>
    </form>
@endsection

@section('illustrations')
    <img src="{{ asset('matdash/tr2.png') }}" class="w-100 img-fluid my-5" alt="Illustration d'inscription">
    <p class="text-center">
        Veuillez vous inscrire pour accéder à votre espace personnel et profiter de nos services.
    </p>
@endsection
