@extends('layouts.frontbase')

@section('title', 'İz Mimarlık')

@section('content')
<div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container text-center">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <i class="bi bi-exclamation-triangle display-1 text-primary"></i>
                    <h1 class="display-1">404</h1>
                    <h1 class="mb-4">Sayfa Bulunamadı</h1>
                    <p class="mb-4">Üzgünüz, aradığınız sayfa sitemizde yok! Belki ana sayfamıza gidin veya bir arama yapmayı deneyin?</p>
                    <a class="btn btn-primary py-3 px-5" href="/anasayfa">Anasayfaya Dön</a>
                </div>
            </div>
        </div>
    </div>
@endsection('content')