@extends('layouts.frontbase')

@section('title', 'Projelerimiz')

@section('content')
<div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
  <div class="container py-5">
    <h1 class="display-1 text-white animated slideInDown">Projelerimiz</h1>
    <nav aria-label="breadcrumb animated slideInDown">
      <ol class="breadcrumb text-uppercase mb-0">
        <li class="breadcrumb-item"><a class="text-white" href="/anasayfa">Anasayfa</a></li>
        <li class="breadcrumb-item"><a class="text-white" href="/projelerimiz">Projelerimiz</a></li>
      </ol>
    </nav>
  </div>
</div>
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
<div class="container-xxl py-5">
  <div class="video-container">
   <iframe src="https://www.youtube.com/embed/BdSF45tJRRY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
  </div>
  <br>
  <div class="video-container">
    <iframe src="https://www.youtube.com/embed/10UhyhdaLMs" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
  </div>
  <br>
  <div class="video-container">
    <iframe src="https://www.youtube.com/embed/uswEx920lKw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
  </div>
</div>
<!-- Project End -->
<div class="container-xxl py-5">
  <div class="container">
    <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
      <h4 class="section-title">Kaplan Dağ Evi</h4>
    </div>
    <div class="row g-0 team-items">
      <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
        <div class="team-item position-relative">
          <div class="position-relative zoom"><img class="img-fluid" src="{{asset('assets')}}/img/gallery/kaplan/eski2.jpeg" alt="" /></div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
        <div class="team-item position-relative">
          <div class="position-relative zoom"><img class="img-fluid" src="{{asset('assets')}}/img/gallery/kaplan/kaplan-dış.jpg" alt="" /></div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
        <div class="team-item position-relative">
          <div class="position-relative zoom"><img class="img-fluid" src="{{asset('assets')}}/img/gallery/kaplan/kaplan-dış2.jpg" alt="" /></div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
        <div class="team-item position-relative">
          <div class="position-relative zoom"><img class="img-fluid" src="{{asset('assets')}}/img/gallery/kaplan/kaplan-bahçe2.jpg" alt="" /></div>
        </div>
      </div>
    </div>
  </div>
  <hr />
  <div class="container">
    <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
      <h4 class="section-title">Cambazlı Dağ Evi</h4>
    </div>
    <div class="row g-0 team-items">
      <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
        <div class="team-item position-relative">
          <div class="position-relative zoom"><img class="img-fluid" src="{{asset('assets')}}/img/gallery/cambazlı/cambazlı-eski.jpeg" alt="" /></div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
        <div class="team-item position-relative">
          <div class="position-relative zoom"><img class="img-fluid" src="{{asset('assets')}}/img/gallery/cambazlı/cambazlı-dış5.jpg" alt="" /></div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
        <div class="team-item position-relative">
          <div class="position-relative zoom"><img class="img-fluid" src="{{asset('assets')}}/img/gallery/cambazlı/cambazlı-iç6.jpg" alt="" /></div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
        <div class="team-item position-relative">
          <div class="position-relative zoom"><img class="img-fluid" src="{{asset('assets')}}/img/gallery/cambazlı/cambazlı-iç1.jpg" alt="" /></div>
        </div>
      </div>
    </div>
  </div>
  <hr />
  <div class="container">
    <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
      <h4 class="section-title">Dubleks Villa</h4>
    </div>
    <div class="row g-0 team-items">
      <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
        <div class="team-item position-relative">
          <div class="position-relative zoom"><img class="img-fluid" src="{{asset('assets')}}/img/gallery/sezen/eski1.jpeg" alt="" /></div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
        <div class="team-item position-relative">
          <div class="position-relative zoom"><img class="img-fluid" src="{{asset('assets')}}/img/gallery/sezen/sezen-1.jpg" alt="" /></div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
        <div class="team-item position-relative">
          <div class="position-relative zoom"><img class="img-fluid" src="{{asset('assets')}}/img/gallery/sezen/sezen3.jpeg" alt="" /></div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
        <div class="team-item position-relative">
          <div class="position-relative zoom"><img class="img-fluid" src="{{asset('assets')}}/img/gallery/sezen/sezen-iç.jpg" alt="" /></div>
        </div>
      </div>
    </div>
    <hr />
    <div class="container">
      <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
        <h4 class="section-title">Tiny House</h4>
      </div>
      <div class="row g-0 team-items">
        <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
          <div class="team-item position-relative">
            <div class="position-relative zoom"><img class="img-fluid" src="{{asset('assets')}}/img/gallery/yuvalı/eski1.jpeg" alt="" /></div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
          <div class="team-item position-relative">
            <div class="position-relative zoom"><img class="img-fluid" src="{{asset('assets')}}/img/gallery/yuvalı/yuvalı-dış1.jpeg" alt="" /></div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
          <div class="team-item position-relative">
            <div class="position-relative zoom"><img class="img-fluid" src="{{asset('assets')}}/img/gallery/yuvalı/yuvalı-dış2.jpeg" alt="" /></div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
          <div class="team-item position-relative">
            <div class="position-relative zoom"><img class="img-fluid" src="{{asset('assets')}}/img/gallery/yuvalı/yuvalı-iç1.jpg" alt="" /></div>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
        <h4 class="section-title">Özsan Ofis Tasarım</h4>
      </div>
      <div class="row g-0 team-items">
        <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
          <div class="team-item position-relative">
            <div class="position-relative zoom"><img class="img-fluid" src="{{asset('assets')}}/img/gallery/ozsan" alt="" /></div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
          <div class="team-item position-relative">
            <div class="position-relative zoom"><img class="img-fluid" src="{{asset('assets')}}/img/gallery/yuvalı/yuvalı-dış1.jpeg" alt="" /></div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
          <div class="team-item position-relative">
            <div class="position-relative zoom"><img class="img-fluid" src="{{asset('assets')}}/img/gallery/yuvalı/yuvalı-dış2.jpeg" alt="" /></div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
          <div class="team-item position-relative">
            <div class="position-relative zoom"><img class="img-fluid" src="{{asset('assets')}}/img/gallery/yuvalı/yuvalı-iç1.jpg" alt="" /></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection('content')