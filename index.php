<?php
    $meta = [
        'title' => 'Diter Terrones',
        'description' => 'Diseño y desarrollo web. 🔥 Apasionado por la productividad y desarrollo personal',
        'url' => 'https://diterterrones.com',
        'cover' => 'img/diter-terrones-cover.png',
        'favicon' => './img/diter-terrones-favicon-32.png',
        'theme_color' => '#5171fb'
    ]
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/app.css">
    <title>Diter Terrones</title>
    <!-- metatags -->
    <link rel="icon" href="<?= $meta['favicon']; ?>" sizes="32x32" type="image/png">
    <meta name="theme-color" content="<?= $meta['theme_color']; ?>" />

    <meta name="title" content="<?= $meta['title']; ?>">
    <meta name="description" content="<?= $meta['description']; ?>">

    <meta property="og:title" content="<?= $meta['title']; ?>">
    <meta property="og:description" content="<?= $meta['description']; ?>">
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?= $meta['url']; ?>">
    <meta property="og:locale" content="es_PE">
    <meta property="og:site_name" content="Diter Terrones">
    <!-- <meta property="og:image" content="<?= "//$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]" . $meta['cover']; ?>"> -->
    <meta property="og:image" content="<?= "//$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]" . 'img/diter-terrones-cover-open-graph.png'; ?>">
    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:title" content="<?= $meta['title']; ?>">
    <meta property="twitter:site" content="@diter_terrones">
    <meta property="twitter:description" content="<?= $meta['description']; ?>">
    <meta name="twitter:image" content="<?= "//$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]" . $meta['cover']; ?>">
    <!-- metatags -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
</head>
<body>
    <main class="app">
        <section class="card about-me">
            <h1 class="text-center title-xl">¡Hola! Soy <br> Diter Terrones</h1>
            <p class="text-center">🚧 Estoy construyendo algo genial</p>
            <p class="text-center">🏃🏽‍♂️💨 Mientras tanto, date una vuelta por mis redes:</p>
            <ul>
                <li>
                    <img class="rrss-icon" src="./img/youtube.svg" alt="youtube">
                    <a href="https://www.youtube.com/channel/UC4lGytEx_jtzC6UlifC__lQ" target="_blank">Youtube</a>
                </li>
                <li>
                    <img class="rrss-icon" src="./img/facebook.svg" alt="facebook">
                    <a href="https://www.facebook.com/diter.terrones" target="_blank">Facebook</a>
                </li>
                <li>
                    <img class="rrss-icon" src="./img/instagram.svg" alt="instagram">
                    <a href="https://www.instagram.com/diter.terrones/" target="_blank">Instagram</a>
                </li>
            </ul>
        </section>
    </main>
</body>
</html>