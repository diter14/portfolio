<?php
    $meta = [
        'title' => 'Diter Terrones',
        'description' => 'Diseñador UI y Frontend Developer. 🔥 Apasionado por la productividad y desarrollo personal',
        'url' => 'https://diterterrones.com',
        'cover' => 'img/diter-terrones-cover.png',
        'favicon' => '/img/diter-terrones-favicon-32.png',
        'theme_color' => '#5171fb'
    ]
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Diter Terrones</title>
    <!-- metatags -->
    <link rel="icon" href="<?= $meta['favicon']; ?>" sizes="32x32" type="image/png">
    <meta name="theme-color" content="<?= $meta['theme_color']; ?>" />

    <meta name="title" content="<?= $meta['title']; ?>">
    <meta name="description" content="<?= $meta['description']; ?>">

    <!-- Open Graph -->
    <meta property="og:title" content="<?= $meta['title']; ?>">
    <meta property="og:description" content="<?= $meta['description']; ?>">
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?= $meta['url']; ?>">
    <meta property="og:locale" content="es_PE">
    <meta property="og:site_name" content="Diter Terrones">
    <meta property="og:image" content="<?= 'https://diterterrones.com/img/diter-terrones-cover-open-graph.png'; ?>">
    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:title" content="<?= $meta['title']; ?>">
    <meta property="twitter:site" content="@diter_terrones">
    <meta property="twitter:description" content="<?= $meta['description']; ?>">
    <meta name="twitter:image" content="<?= "//$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]" . $meta['cover']; ?>">
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,wght@0,400;0,500;0,700;1,400;1,500;1,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Red+Hat+Display:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500&display=swap" rel="stylesheet">
</head>
<body class="bg-body-light">
    @section('header')
        @include('components.main-header')
    @show

    <main class="app">
        @yield('content')
    </main>

    @yield('scripts')

    @section('footer')
        @include('components.main-footer')
    @show
</body>
</html>