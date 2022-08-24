<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>@yield("title")</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="iz mimarlık, mimarlık, tire iz mimarlık, tamirat, tadilat, mimar, iz" name="keywords">
    <meta content="Tire'de kurulmuş olan İz mimarlık, Mimar Ali Orkun Boyacı ve İç Mimar Ezgi Boyacı tarafından organizasyonlarını yürütmekte. İz Mimarlık çeşitli konut servisleri ile hizmetinizde." name="description">

    <!-- Favicon -->
    <link href="{{asset('assets')}}/img/icons/icon-1.png" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600&family=Teko:wght@400;500;600&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{asset('assets')}}/lib/animate/animate.min.css" rel="stylesheet">
    <link href="{{asset('assets')}}/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="{{asset('assets')}}/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{asset('assets')}}/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{asset('assets')}}/css/style.css" rel="stylesheet">
    @yield("head")
</head>

<body>
@include("home.header")

@yield('content')

@include("home.footer")
</body>

</html>