@props(['title' => 'Studio Legale Bocchietti', 'description' => 'Sito web dello \'Studio Legale Bocchietti\', situato a Como (CO).'])

<head>

    <meta charset="UTF-8">
    <meta name="author" content="Tommaso Bocchietti">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="canonical" href="{{ url()->current() }}" />

    {{-- Open Graph metadata --}}
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="{{ $title }}">
    <meta name="og:description" content="{{ $description }}">
    <meta property="og:image" content="{{ asset('img/feather_pen.jpg') }}">

    <meta property="og:image:alt" content="{{ $title }}">
    <meta property="og:type" content="website">
    <meta name="og:site_name" property="og:site_name" content="Bocchio">

    {{-- Twitter metadata --}}
    <meta name="twitter:url" content="{{ url()->current() }}">
    <meta name="twitter:title" content="{{ $title }}">
    <meta name="twitter:description" content="{{ $description }}">
    <meta name="twitter:image" content="{{ asset('img/feather_pen.jpg') }}">

    <meta name="twitter:image:alt" content="{{ $title }}">
    <meta name="twitter:card" content="summary_large_image">

    {{-- Favicon --}}
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
    <link rel="apple-touch-icon" href="{{ asset('favicon.ico') }}">
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}">

    <title>{{ $title }} | Studio Legale Bocchietti</title>
    <meta name="description" content="{{ $description }}">

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    @stack('scripts')

</head>
