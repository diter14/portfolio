<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
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
    <meta property="og:image" content="<?= $meta['cover']; ?>">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:title" content="<?= $meta['title']; ?>">
    <meta property="twitter:site" content="@diter_terrones">
    <meta property="twitter:description" content="<?= $meta['description']; ?>">
    <meta name="twitter:image" content="<?= $meta['cover']; ?>">

    @production
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id={{ env('GOOGLE_ANALYTICS_DTWFLOW') }}"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', {{ env('GOOGLE_ANALYTICS_DTWFLOW') }});
        </script>
    @endproduction

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
    <script src="{{ mix('/js/app.js') }}"></script>

    @section('footer')
        @include('components.main-footer')
    @show
</body>
</html>