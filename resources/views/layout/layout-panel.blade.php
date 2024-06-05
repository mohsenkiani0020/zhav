<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" @if($current_locale == "fa") dir="rtl" @else dir="ltr" @endif>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=0.9">

    <title>{{ $title ?? "Zhav Studio" }}</title>

    <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('storage/fav/apple-icon-57x57.png') }}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{ asset('storage/fav/apple-icon-60x60.png') }}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('storage/fav/apple-icon-72x72.png') }}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('storage/fav/apple-icon-76x76.png') }}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('storage/fav/apple-icon-114x114.png') }}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('storage/fav/apple-icon-120x120.png') }}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('storage/fav/apple-icon-144x144.png') }}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('storage/fav/apple-icon-152x152.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('storage/fav/apple-icon-180x180.png') }}">
    <link rel="icon" type="image/png" sizes="192x192"  href="{{ asset('storage/fav/android-icon-192x192.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('storage/fav/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('storage/fav/favicon-96x96.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('storage/fav/favicon-16x16.png') }}">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="{{ asset('storage/fav/ms-icon-144x144.png') }}">
    <meta name="theme-color" content="#ffffff">
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>
@yield("content")
<noscript>Please Turn on your Javascript in your browser!</noscript>

<script>
    window.Laravel = {
        baseUrl: '{{ url('/') }}',
        routes: @json(\Illuminate\Support\Facades\Route::getRoutes()->getRoutesByName()),
    };
</script>

</body>
</html>
