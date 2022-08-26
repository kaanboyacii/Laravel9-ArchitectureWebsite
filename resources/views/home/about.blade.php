@extends('layouts.frontbase')

@section('title', 'Hakkımızda')

@section('content')
<div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container py-5">
        <h1 class="display-1 text-white animated slideInDown">Hakkımızda</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb text-uppercase mb-0">
                <li class="breadcrumb-item"><a class="text-white" href="/anasayfa">Anasayfa</a></li>
                <li class="breadcrumb-item"><a class="text-white" href="/hakkımızda">Hakkımızda</a></li>
            </ol>
        </nav>
    </div>
</div>
<!-- About Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                <div class="about-img">
                    <img class="img-fluid" src="{{asset('assets')}}/img/gallery/apollo-özsan/apollo-dış.jpeg" alt="">
                    <img class="img-fluid" src="{{asset('assets')}}/img/gallery/apollo-özsan/apollo-heykel.jpeg" alt="">
                </div>
            </div>
            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                <h4 class="section-title">Hakkımızda</h4>
                <h1 class="display-5 mb-4">Hayalinizdeki Ev İçin Yaratıcı Bir Mimarlık Ajansı</h1>
                <p>İz Mimarlık; mimarlık , iç mimari ve dekorasyon, dış tasarım, anahtar teslim projeler yapmaktadır. Ticari (okul, ofis, idari bina, klinik, mağaza, restaurant, cafe, hastane, düğün salonu..) ve Bireysel (villa, konut, bağ evi, yazlık ev, konak) projeleri tasarım ve takip aşamalarını, dünyada ve Türkiye de değişen ve gelişen şartlara uygun olarak, müşterilerimizin istekleri doğrultusunda gerçekleştiriyor. Tüm projeler verimli, kullanışlı, yaratılan dizaynı vurgulayıcı ve mekanın estetik öğelerini ön plana çıkaracak şekilde fonksiyonel işlevsellikle harmanlanarak tasarlanmaktadır.</p>
                <div class="d-flex align-items-center mb-5">
                    <div class="d-flex flex-shrink-0 align-items-center justify-content-center border border-5 border-primary" style="width: 120px; height: 120px;">
                        <h1 class="display-1 mb-n2" data-toggle="counter-up">9</h1>
                    </div>
                    <div class="ps-4">
                        <h3>Yıllık</h3>
                        <h3>Çalışma</h3>
                        <h3 class="mb-0">Tecrübesi</h3>
                    </div>
                </div>
                <a class="btn btn-primary py-3 px-5" href="/hakkımızda">Detaylı Bilgi</a>
            </div>
        </div>
    </div>
</div>
<!-- About End -->
<!-- Feature Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                <h4 class="section-title">Neden Bizi Seçmelisiniz ?</h4>
                <h1 class="display-5 mb-4">Neden Bize Güvenmelisiniz? Hakkımızda Daha Fazla Bilgi Edinin!</h1>
                <p class="mb-4">Tecrübemizle, yüksek memnuniyet oranımızla, müşteri ilişkilerimizle mimarlık sektöründe uzman ve tecrübeli ustalar ile çalıştığımız gibi kaliteli hizmet alacağınızdan emin olabilirsiniz.</p>
                <div class="row g-4">
                    <div class="col-12">
                        <div class="d-flex align-items-start">
                            <img class="flex-shrink-0" src="{{asset('assets')}}/img/icons/icon-2.png" alt="Icon">
                            <div class="ms-4">
                                <h3>Tasarım yaklaşımı</h3>
                                <p class="mb-0">En yeni ve modern tasarımlarımızı sizlere sunuyoruz, size özel tasarımlar oluşturuyoruz.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="d-flex align-items-start">
                            <img class="flex-shrink-0" src="{{asset('assets')}}/img/icons/icon-3.png" alt="Icon">
                            <div class="ms-4">
                                <h3>Yenilikçi Çözümler</h3>
                                <p class="mb-0">Tamamen Modern çözümler ve yenilikçi yaklaşımlarla sizin isteklerinizi yerine getiriyoruz.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="d-flex align-items-start">
                            <img class="flex-shrink-0" src="{{asset('assets')}}/img/icons/icon-4.png" alt="Icon">
                            <div class="ms-4">
                                <h3>Proje Yönetimi</h3>
                                <p class="mb-0">Projemizi oluşturup baştan sona, sizin istekleriniz üzerine değişimler yaparak süreci yönetiyoruz.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="feature-img">
                    <img class="img-fluid" src="{{asset('assets')}}/img/gallery/cambazlı/cambazlı-iç3.jpg" alt="">
                    <img class="img-fluid" src="{{asset('assets')}}/img/gallery/kaplan/kaplan-iç4.jpg" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5">
         <iframe width="560" height="560" src="https://www.youtube.com/embed/V4DiWNsMbv4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
    </div>
</div>
<!-- Feature End -->
@endsection('content')