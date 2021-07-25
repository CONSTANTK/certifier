<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Certifier</title>
  @include('front.common.meta')
</head>
<body>
<!--? Preloader Start -->
@include('front.layout.loader')
<!-- Preloader Start -->
@include('front.layout.top-header')
<main>

  @yield('content')
</main>
@include('front.layout.footer')
<!-- Scroll Up -->
<div id="back-top" >
    <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
</div>

@include('front.common.scripts')

@include('front.partials.sweetalert-info-display')
</body>
</html>
