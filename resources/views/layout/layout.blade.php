<!DOCTYPE html>
<html lang="fa-IR" dir="rtl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title> استودیو ژاو، @yield('title')  </title>
    <meta name="description"
        content="@yield('description', "ژاو استودیو خدمات طراحی و اجرای انواع وب سایت‌های شخصی،تجاری، وب اپلیکیشن و اپلیکیشن های موبایل اندروید و iOS")"/>
    <meta name="robots" content="index, follow">
    <meta name="author" content="@yield('author', "Iman Nasr Esfahani")"/>
    <meta http-equiv="Content-Type" content="text/html; charset = UTF-8"/>
    <meta name="revised" content="{{ \Carbon\Carbon::yesterday()->format("Y-m-d") }}"/>
    @yield('keywords')
    <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('storage/fav/apple-icon-57x57.png')}}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{ asset('storage/fav/apple-icon-60x60.png')}}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('storage/fav/apple-icon-72x72.png')}}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('storage/fav/apple-icon-76x76.png')}}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('storage/fav/apple-icon-114x114.png')}}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('storage/fav/apple-icon-120x120.png')}}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('storage/fav/apple-icon-144x144.png')}}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('storage/fav/apple-icon-152x152.png')}}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('storage/fav/apple-icon-180x180.png')}}">
    <link rel="icon" type="image/png" sizes="192x192" href="{{ asset('storage/fav/android-icon-192x192.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('storage/fav/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('storage/fav/favicon-96x96.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('storage/fav/favicon-16x16.png')}}">
    <link rel="manifest" href="{{ asset('storage/fav/manifest.json')}}">
    <link rel="canonical" href="{{env('APP_URL', 'https://zhavstucio.com')}}">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="{{ asset('storage/fav/ms-icon-144x144.png')}}">
    <meta name="theme-color" content="#ffffff">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    @vite(['resources/scss/app.scss', 'resources/js/app.js'])
    @livewireStyles
</head>
<body>
<noscript>Please Turn on your Javascript in your browser!</noscript>

<header>
    @includeIf('navbar.navbar')
</header>
<div>
    @yield('content')
</div>
<footer>
    @includeIf('footer.footer')
</footer>


@livewireScripts
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-HR5DD524V7"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-HR5DD524V7');
</script>
</body>
</html>
