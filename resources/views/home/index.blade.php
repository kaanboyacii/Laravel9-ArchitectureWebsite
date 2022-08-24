@extends('layouts.frontbase')

@section('title', 'İz Mimarlık')

@section('content')
<!-- Carousel Start -->
<div class="container-fluid p-0 pb-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="owl-carousel header-carousel position-relative">
        <div class="owl-carousel-item position-relative" data-dot="<img src='{{asset('assets')}}/img/gallery/3d1.jpg'>">
            <img class="img-fluid" src="{{asset('assets')}}/img/gallery/3d1.jpg" alt="">
            <div class="owl-carousel-inner">
                <div class="container">
                    <div class="row justify-content-start">
                        <div class="col-10 col-lg-8">
                            <h1 class="display-1 text-white animated slideInDown">Size özel bir yaşam alanı sunuyoruz</h1>
                            <p class="fs-5 fw-medium text-white mb-4 pb-3">İZ MİMARLIK olarak size hayallerinize kavuşma garantisi veriyoruz.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="owl-carousel-item position-relative" data-dot="<img src='{{asset('assets')}}/img/gallery/3d2.jpg'>">
            <img class="img-fluid" src="{{asset('assets')}}/img/gallery/3d2.jpg" alt="">
            <div class="owl-carousel-inner">
                <div class="container">
                    <div class="row justify-content-start">
                        <div class="col-10 col-lg-8">
                            <h1 class="display-1 text-white animated slideInDown">Size özel bir yaşam alanı sunuyoruz</h1>
                            <p class="fs-5 fw-medium text-white mb-4 pb-3">İZ MİMARLIK olarak size hayallerinize kavuşma garantisi veriyoruz.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="owl-carousel-item position-relative" data-dot="<img src='{{asset('assets')}}/img/gallery/3d3.jpeg'>">
            <img class="img-fluid" src="{{asset('assets')}}/img/gallery/3d3.jpeg" alt="">
            <div class="owl-carousel-inner">
                <div class="container">
                    <div class="row justify-content-start">
                        <div class="col-10 col-lg-8">
                            <h1 class="display-1 text-white animated slideInDown">Size özel bir yaşam alanı sunuyoruz</h1>
                            <p class="fs-5 fw-medium text-white mb-4 pb-3">İZ MİMARLIK olarak size hayallerinize kavuşma garantisi veriyoruz.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Carousel End -->


<!-- Facts Start -->
<div class="container-xxl py-5">
    <div class="container pt-5">
        <div class="row g-4">
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="fact-item text-center bg-light h-100 p-5 pt-0">
                    <div class="fact-icon">
                        <img src="{{asset('assets')}}/img/icons/icon-2.png" alt="Icon">
                    </div>
                    <h3 class="mb-3">Tasarım yaklaşımı</h3>
                    <p class="mb-0">En yeni ve modern tasarımlarımızı sizlere sunuyoruz, size özel tasarımlar oluşturuyoruz.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="fact-item text-center bg-light h-100 p-5 pt-0">
                    <div class="fact-icon">
                        <img src="{{asset('assets')}}/img/icons/icon-3.png" alt="Icon">
                    </div>
                    <h3 class="mb-3">Yenilikçi Çözümler</h3>
                    <p class="mb-0">Tamamen Modern çözümler ve yenilikçi yaklaşımlarla sizin isteklerinizi yerine getiriyoruz.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="fact-item text-center bg-light h-100 p-5 pt-0">
                    <div class="fact-icon">
                        <img src="{{asset('assets')}}/img/icons/icon-4.png" alt="Icon">
                    </div>
                    <h3 class="mb-3">Proje Yönetimi</h3>
                    <p class="mb-0">Projemizi oluşturup baştan sona, sizin istekleriniz üzerine değişimler yaparak süreci yönetiyoruz.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Facts End -->


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
<!-- Feature End -->

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


<!-- Project Start -->
<div class="container-xxl project py-5">
    <div class="container">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            <h4 class="section-title">Projelerimiz</h4>
            <h1 class="display-5 mb-4">Son Projelerimizi ve Yenilikçi Çalışmalarımızı Ziyaret Edin</h1>
        </div>
        <div class="row g-4 wow fadeInUp" data-wow-delay="0.3s">
            <div class="col-lg-4">
                <div class="nav nav-pills d-flex justify-content-between w-100 h-100 me-4">
                    <button class="nav-link w-100 d-flex align-items-center text-start p-4 mb-4 active" data-bs-toggle="pill" data-bs-target="#tab-pane-1" type="button">
                        <h3 class="m-0">01. Kaplan Dağ Evi</h3>
                    </button>
                    <button class="nav-link w-100 d-flex align-items-center text-start p-4 mb-4" data-bs-toggle="pill" data-bs-target="#tab-pane-2" type="button">
                        <h3 class="m-0">02. Cambazlı Dağ Evi</h3>
                    </button>
                    <button class="nav-link w-100 d-flex align-items-center text-start p-4 mb-4" data-bs-toggle="pill" data-bs-target="#tab-pane-3" type="button">
                        <h3 class="m-0">03. Dubleks Villa</h3>
                    </button>
                    <button class="nav-link w-100 d-flex align-items-center text-start p-4 mb-0" data-bs-toggle="pill" data-bs-target="#tab-pane-4" type="button">
                        <h3 class="m-0">04. Tiny House</h3>
                    </button>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="tab-content w-100">
                    <div class="tab-pane fade show active" id="tab-pane-1">
                        <div class="row g-4">
                            <div class="col-md-6" style="min-height: 350px;">
                                <div class="position-relative h-100">
                                    <img class="position-absolute img-fluid w-100 h-100" src="{{asset('assets')}}/img/gallery/kaplan/kaplandışdikey.jpeg" style="object-fit: cover;" alt="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <h1 class="mb-3">Kaplan Dağ Evi</h1>
                                <p class="mb-4">Eski binayı yıkılıp, tekrardan özel tasarım, modern bir dağ evi oluşturduğumuz projedir. Şık tasarımıyla ve geniş bahçe alanıyla herkesin dikkatini çeken bir yaşam alanı oluşturduk.</p>
                                <p><i class="fa fa-check text-primary me-3"></i>Kişiye özel tasarım</p>
                                <p><i class="fa fa-check text-primary me-3"></i>Modern iç tasarım</p>
                                <p><i class="fa fa-check text-primary me-3"></i>Planlı proje yönetimi</p>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="tab-pane-2">
                        <div class="row g-4">
                            <div class="col-md-6" style="min-height: 350px;">
                                <div class="position-relative h-100">
                                    <img class="position-absolute img-fluid w-100 h-100" src="{{asset('assets')}}/img/gallery/cambazlı/cambazlıdışdikey.jpg" style="object-fit: cover;" alt="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <h1 class="mb-3">Cambazlı Dağ Evi</h1>
                                <p class="mb-4">Elverişsiz, eski binayı içini ve dışını eskisinden eser kalmayacak şekilde tekrardan oluşturduk. Son derece modern bir oluşum yaptık. </p>
                                <p><i class="fa fa-check text-primary me-3"></i>Modern tasarım</p>
                                <p><i class="fa fa-check text-primary me-3"></i>İleri düzey tamirat & tadilat</p>
                                <p><i class="fa fa-check text-primary me-3"></i>Planlı proje yönetimi</p>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="tab-pane-3">
                        <div class="row g-4">
                            <div class="col-md-6" style="min-height: 350px;">
                                <div class="position-relative h-100">
                                    <img class="position-absolute img-fluid w-100 h-100" src="{{asset('assets')}}/img/gallery/sezen/sezendışdikey.jpg" style="object-fit: cover;" alt="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <h1 class="mb-3">Dubleks Villa</h1>
                                <p class="mb-4">Şehrin içinde eski fakat değerli bir villayı, dış ve iç olarak yeniledik. Şehrin en modern villalarından biri halinde getirdik, gece görüntüsüyle herkesin dikkatini çekiyor.</p>
                                <p><i class="fa fa-check text-primary me-3"></i>Kişiselleştirilmiş dizayn</p>
                                <p><i class="fa fa-check text-primary me-3"></i>Yenilikçi tasarım</p>
                                <p><i class="fa fa-check text-primary me-3"></i>Düzenli inşaat süreci</p>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="tab-pane-4">
                        <div class="row g-4">
                            <div class="col-md-6" style="min-height: 350px;">
                                <div class="position-relative h-100">
                                    <img class="position-absolute img-fluid w-100 h-100" src="{{asset('assets')}}/img/gallery/yuvalı/yuvalıdışdikey.jpeg" style="object-fit: cover;" alt="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <h1 class="mb-3">Tiny House</h1>
                                <p class="mb-4">Köyün içinde doğayla iç içe tiny house oluşturduk. Eski kulübeyi yıkıp üstüne modern ve kullanışlı bir yaşam alanı oluşturduk. Tire ilçesinde ilk Tiny House yaparak kayda geçtik.</p>
                                <p><i class="fa fa-check text-primary me-3"></i>Modern Tasarım</p>
                                <p><i class="fa fa-check text-primary me-3"></i>Yenilikçi dizayn yaklaşımı</p>
                                <p><i class="fa fa-check text-primary me-3"></i>Düzenli inşaat süreci</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Project End -->
@endsection('content')