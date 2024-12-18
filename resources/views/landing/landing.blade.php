<!DOCTYPE html>
<html lang="fr" dir="ltr" data-bs-theme="light" data-color-theme="Blue_Theme">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="shortcut icon" type="image/png" href="{{ asset('logo-dh.svg') }}" />
    <title>D-Go - Revente de Forfaits Internet</title>

    <!-- Lien Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <!-- Icônes Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" href="{{ asset('spike/assets/css/styles.css') }}" />
    <link rel="stylesheet" href="{{ asset('bootstraps/bootstrap.min.css') }}" />

    {{-- <link rel="stylesheet" href="{{ asset('aos.css') }}" /> --}}

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick-theme.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.css">
    <link rel="stylesheet" href="{{ asset('spike/slike2zoom.css') }}">
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="{{ asset('spike/assets/libs/owl.carousel/dist/assets/owl.carousel.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('spike/assets/libs/aos/dist/aos.css') }}" />
    {{-- <link rel="stylesheet" href="{{ asset('bootstraps/bootstrap.min.css') }}" /> --}}




</head>
<script src="//code.tidio.co/a1c66h4zitdz51oldafsnwtmpciwn93n.js" async></script>
<body>
    @include('landing.partials.styles')
    <!-- Preloader -->
    <div class="preloader">
        <img src="{{ asset('spike/assets/images/logos/loader.svg') }}" alt="loader" class="lds-ripple img-fluid" />
    </div>
    <div class="container">

        <div id="main-wrapper flex-column">
            @include('landing.partials.header-menu')

            @include('landing.partials.first-carousel')

        </div>
    </div>

    <section id="features" class="features">
        <div class="container text-center">
            <h2 class="mb-5">Pourquoi choisir D-Go ?</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="card w-100 border p-3">
                        <i class="fa-solid fa-lock feature-icon text-primary"></i>
                        <h5 class="card-title">Tarifs Compétitifs</h5>
                        <p class="card-text">Des prix imbattables pour toutes vos données Internet.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card w-100 border p-3">
                        <i class="fa-solid fa-lock feature-icon text-primary"></i>
                        <h5 class="card-title">Paiements Sécurisés</h5>
                        <p class="card-text">Effectuez vos transactions en toute sécurité via MoMo et Moov.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card w-100 border p-3">
                        <i class="fa-solid fa-clock feature-icon text-primary"></i>
                        <h5 class="card-title">Livraison Immédiate</h5>
                        <p class="card-text">Recevez vos forfaits en quelques secondes seulement.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Partenaires -->
    <section id="partners" class="py-5 partners">
        <div class="container text-center">
            <h2 class="mb-5">Ils nous font confiance</h2>
            <div class="row justify-content-center">
                <div class="col-md-4 mb-4">
                    <div class="card w-100 border partner-card">
                        <img src="{{ asset('asset_perso/mtn.png') }}" alt="MTN Logo" class="mx-auto mt-4" width="50" height="50">
                        <div class="card-body">
                            <h5 class="card-title">MTN Bénin</h5>
                            <p class="card-text">Notre partenaire principal pour la fourniture de forfaits Internet.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card w-100 border partner-card">
                        <img src="{{ asset('asset_perso/moov.png') }}" alt="MTN Logo" class="mx-auto mt-4" width="50" height="50">
                        <div class="card-body">
                            <h5 class="card-title">Moov Africa</h5>
                            <p class="card-text">Un partenaire clé pour des transactions fluides et rapides.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Contact -->
    <section id="contact" class="contact">
        <div class="container">
            <div class="py-5">
                <div class="mb-5">
                    <h2 class="fs-9 mb-0 text-center" data-aos="fade-right" data-aos-delay="200" data-aos-duration="1000">
                        Contactez-nous
                    </h2>
                </div>
                <div class="row d-flex align-items-stretch">
                    <!-- Messagerie Live Card -->
                    <div class="col-lg-4 col-sm-6 ">
                        <div class="card w-100 border shadow-none p-3 border-radius-xl shadow">
                            <div class="row d-flex align-items-stretch ">
                                <div class="col-3">
                                    <div
                                        class="bg-light-primary rounded py-2 px-3 d-flex justify-content-center align-items-center h-100">

                                        <img src="https://ornestaste.com/spike/socialmedia_tech_09.png" class="img-fluid"
                                            alt="">
                                    </div>
                                </div>
                                <div class="col-9">
                                    <h4>Messagerie Live</h4>

                                    <h6 class="card-subtitle mt-2 mb-0 fw-normal text-muted">
                                        Vous pouvez nous contacter en direct via notre messagerie live.
                                    </h6>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Email Card -->
                    <div class="col-lg-4 col-sm-6 ">
                        <div class="card w-100 border shadow-none p-3 border-radius-xl shadow">
                            <div class="row d-flex align-items-stretch ">
                                <div class="col-3">
                                    <div class=" d-flex justify-content-center align-items-center h-100">

                                        <img src="https://ornestaste.com/ccc.png" class="img-fluid" alt="">
                                    </div>
                                </div>
                                <div class="col-9">
                                    <h4>Email</h4>

                                    <a href="mailto:contact@d-harvest.com"
                                        class="card-subtitle mt-2 mb-0 fw-normal text-muted">
                                        contact@d-harvest.com
                                    </a>

                                </div>
                                <div class="d-flex">

                                    <div class="ms-2">

                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>

                    <!-- Phone Card -->
                    <div class="col-lg-4 col-sm-6 ">
                        <div class="card w-100 border shadow-none p-3 border-radius-xl shadow">
                            <div class="row d-flex align-items-stretch ">
                                <div class="col-3">
                                    <div class=" d-flex justify-content-center align-items-center h-100">

                                        <img src="https://ornestaste.com/eee.png" class="img-fluid" alt="">
                                    </div>
                                </div>
                                <div class="col-9">
                                    <h4>Téléphone</h4>

                                    <a href="tel:+22967404081" class="card-subtitle mt-2 mb-0 fw-semibold text-muted">
                                        (+229) 67 40 40 81
                                    </a>
                                </div>

                                <div class="d-flex">

                                    <div class="ms-2">

                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Footer -->
    <footer class="footer py-4">
        <div class="container text-center">
            <p>&copy; 2024 D-Go. Tous droits réservés.</p>
            <p>Suivez-nous :
                <a href="#" class="mx-1"><i class="fa-brands fa-facebook"></i></a>
                <a href="#" class="mx-1"><i class="fa-brands fa-twitter"></i></a>
                <a href="#" class="mx-1"><i class="fa-brands fa-instagram"></i></a>
            </p>
        </div>
    </footer>

    <script src="{{ asset('spike/slick2.js') }}"></script>

    <script src="{{ asset('spike/assets/js/vendor.min.js') }}"></script>
    <script src="{{ asset('spike/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('spike/assets/libs/simplebar/dist/simplebar.min.js') }}"></script>
    <script src="{{ asset('spike/assets/js/theme/app.init.js') }}"></script>
    <script src="{{ asset('spike/assets/js/theme/theme.js') }}"></script>
    <script src="{{ asset('spike/assets/js/theme/app.min.js') }}"></script>
    <script src="{{ asset('spike/assets/js/theme/sidebarmenu.js') }}"></script>
    <script src="{{ asset('spike/assets/js/theme/feather.min.js') }}"></script>

    <!-- solar icons -->
    <script src="https://cdn.jsdelivr.net/npm/iconify-icon@1.0.8/dist/iconify-icon.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('spike/assets/libs/owl.carousel/dist/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('spike/assets/libs/aos/aos.js') }}"></script>
    <script src="{{ asset('spike/assets/js/landingpage.js') }}"></script>

    <div class="offcanvas offcanvas-start modernize-lp-offcanvas" tabindex="-1" id="offcanvasNavbar"
        aria-labelledby="offcanvasNavbarLabel">
        <div class="offcanvas-header p-4">
            <img src="{{ asset('spike/assets/images/logos/logo-light.svg') }}" alt="" class="img-fluid"
                width="150" />
        </div>
    </div>


    <script src="{{ asset('spike/slick2.js') }}"></script>


    <script src="{{ asset('spike/assets/js/vendor.min.js') }}"></script>
    <script src="{{ asset('spike/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('spike/assets/libs/simplebar/dist/simplebar.min.js') }}"></script>
    <script src="{{ asset('spike/assets/js/theme/app.init.js') }}"></script>
    <script src="{{ asset('spike/assets/js/theme/theme.js') }}"></script>
    <script src="{{ asset('spike/assets/js/theme/app.min.js') }}"></script>
    <script src="{{ asset('spike/assets/js/theme/sidebarmenu.js') }}"></script>
    <script src="{{ asset('spike/assets/js/theme/feather.min.js') }}"></script>

    <!-- solar icons -->
    <script src="https://cdn.jsdelivr.net/npm/iconify-icon@1.0.8/dist/iconify-icon.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('spike/assets/libs/owl.carousel/dist/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('spike/assets/libs/aos/aos.js') }}"></script>
    <script src="{{ asset('spike/assets/js/landingpage.js') }}"></script>



</body>

</html>
