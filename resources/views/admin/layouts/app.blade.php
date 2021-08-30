<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    
    <title>Certifier</title>
  @include('admin.common.meta')
</head>
<body>
<!--? Preloader Start -->
@include('admin.layout.loader')
<!-- Preloader Start -->
@include('admin.layout.top-header')
<main>

  @yield('content')
</main>
@include('admin.layout.footer')
<!-- Scroll Up -->
<div id="back-top" >
    <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
</div>

@include('admin.common.scripts')

@include('admin.partials.sweetalert-info-display')
</body>
</html>
