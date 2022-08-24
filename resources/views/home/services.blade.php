@extends('layouts.frontbase')

@section('title', 'Servislerimiz')

@section('content')
<div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container py-5">
        <h1 class="display-1 text-white animated slideInDown">Servislerimiz</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb text-uppercase mb-0">
                <li class="breadcrumb-item"><a class="text-white" href="/anasayfa">Anasayfa</a></li>
                <li class="breadcrumb-item"><a class="text-white" href="/servislerimiz">Servislerimiz</a></li>
            </ol>
        </nav>
    </div>
</div>
<!-- Service Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            <h4 class="section-title">Servislerimiz</h4>
            <h1 class="display-5 mb-4">Modern Mimari ve İç Tasarıma Odaklandık</h1>
        </div>
        <div class="row g-4">
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="service-item d-flex position-relative text-center h-100">
                    <img class="bg-img" src="{{asset('assets')}}/img/gallery/3d5.jpg" alt="">
                    <div class="service-text p-5">
                        <img class="mb-4" src="{{asset('assets')}}/img/icons/icon-5.png" alt="Icon">
                        <h3 class="mb-3">Mimari Proje</h3>
                        <p class="mb-4">Tüm yapı tipleri için plan çizimi, ruhsat alımına kadar olan tüm teknik çizimler. İç ve dış görselleştirme. Öğrenciler için proje çizim ve tasarımlarını birlikte uygulamaktayız.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="service-item d-flex position-relative text-center h-100">
                    <img class="bg-img" src="{{asset('assets')}}/img/gallery/sezen/3dsezen.jpg" alt="">
                    <div class="service-text p-5">
                        <img class="mb-4" src="{{asset('assets')}}/img/icons/icon-6.png" alt="Icon">
                        <h3 class="mb-3">3D Çizim</h3>
                        <p class="mb-4">Sizlerin taleplerini ve isteklerini en doğru ve estetik şekilde uygulayacağımız projelerimizin doğru ölçek ve malzemeler kullanılarak en son hali ile görsel sunum haline getiriyoruz</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="service-item d-flex position-relative text-center h-100">
                    <img class="bg-img" src="{{asset('assets')}}/img/gallery/şehrimuazzammutfak.jpg" alt="">
                    <div class="service-text p-5">
                        <img class="mb-4" src="{{asset('assets')}}/img/icons/icon-7.png" alt="Icon">
                        <h3 class="mb-3">Ev Planlama</h3>
                        <p class="mb-4">Size uygun yaşam alanını en ergonomik, en faydaki şekilde planlıyoruz, sizlere sunuyoruz.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="service-item d-flex position-relative text-center h-100">
                    <img class="bg-img" src="{{asset('assets')}}/img/gallery/apollo-özsan/özsanofis.jpg" alt="">
                    <div class="service-text p-5">
                        <img class="mb-4" src="{{asset('assets')}}/img/icons/icon-8.png" alt="Icon">
                        <h3 class="mb-3">İç dizayn</h3>
                        <p class="mb-4">İç Mimarımız ve Mimarımız ile, süreci başından sonuna büyük bir özenle sürdürüyoruz, sizlere tamamen size özel iç tasarını sunuyoruz. </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="service-item d-flex position-relative text-center h-100">
                    <img class="bg-img" src="{{asset('assets')}}/img/gallery/sezen/sezen2.jpg" alt="">
                    <div class="service-text p-5">
                        <img class="mb-4" src="{{asset('assets')}}/img/icons/icon-9.png" alt="Icon">
                        <h3 class="mb-3">Tadilat & Tamirat</h3>
                        <p class="mb-4">Eski yaşam alanlarınızı, yeni teknolojilerle modern bir yaşam alanına çeviriyoruz ve hem dış hem de iç tamirat gereksinimleri için profesyonel olarak tamirat hizmetini sizlere sunuyoruz.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="service-item d-flex position-relative text-center h-100">
                    <img class="bg-img" src="{{asset('assets')}}/img/gallery/kaplan/kaplan-dış1.jpg" alt="">
                    <div class="service-text p-5">
                        <img class="mb-4" src="{{asset('assets')}}/img/icons/icon-10.png" alt="Icon">
                        <h3 class="mb-3">İnşaat</h3>
                        <p class="mb-4">Tecrübeli ustalarımız ve dinamik ekibimizle sizlere en kısa sürede hizmetlerinizi bitirme garantisini veriyoruz.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Service End -->
@endsection('content')