@extends('layouts.frontbase')

@section('title', 'İletişim')

@section('content')
<div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container py-5">
        <h1 class="display-1 text-white animated slideInDown">İletişim</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb text-uppercase mb-0">
                <li class="breadcrumb-item"><a class="text-white" href="/anasayfa">Anasayfa</a></li>
                <li class="breadcrumb-item"><a class="text-white" href="/iletişim">İletişim</a></li>
            </ol>
        </nav>
    </div>
</div>



<!-- Contact Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            <h4 class="section-title">Bize Ulaşın</h4>
            <h1 class="display-5 mb-4">Herhangi Bir Sorunuz Varsa, Lütfen Bize Ulaşın</h1>
        </div>
        <div class="row g-5">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="d-flex flex-column justify-content-between h-100">
                    <div class="bg-light d-flex align-items-center w-100 p-4 mb-4">
                        <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-dark" style="width: 55px; height: 55px;">
                            <i class="fa fa-map-marker-alt text-primary"></i>
                        </div>
                        <div class="ms-4">
                            <p class="mb-2">Adres</p>
                            <h3 class="mb-0">İhsaniye Mh. Gökçen Efe Cd. No:68/1A Tire/İZMİR</h3>
                        </div>
                    </div>
                    <div class="bg-light d-flex align-items-center w-100 p-4 mb-4">
                        <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-dark" style="width: 55px; height: 55px;">
                            <i class="fa fa-phone-alt text-primary"></i>
                        </div>
                        <div class="ms-4">
                            <p class="mb-2">Telefon</p>
                            <h3 class="mb-0">+90 555 110 88 89</h3>
                        </div>
                    </div>
                    <div class="bg-light d-flex align-items-center w-100 p-4">
                        <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-dark" style="width: 55px; height: 55px;">
                            <i class="fa fa-envelope-open text-primary"></i>
                        </div>
                        <div class="ms-4">
                            <p class="mb-2">E-posta Adresi</p>
                            <h3 class="mb-0">boyaciorkun@gmail.com</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                <iframe class="w-100 mb-n2" style="height: 450px;" src="https://maps.google.com/maps?q=%C4%B0hsaniye,%20G%C3%B6k%C5%9Fen%20Efe%20Cd.%20No:68,%2035900%20Tire/%C4%B0zmir&t=k&z=15&ie=UTF8&iwloc=&output=embed" frameborder="0" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>
        </div>
    </div>
</div>
<!-- Contact End -->
@endsection('content')