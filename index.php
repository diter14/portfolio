<?php
    $meta = [
        'title' => 'Diter Terrones',
        'description' => 'Diseño y desarrollo web. 🔥 Apasionado por la productividad y desarrollo personal',
        'url' => 'https://diterterrones.com',
        'cover' => './img/diter-terrones-cover.png',
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
    <meta property="og:image" content="<?= $meta['cover']; ?>">
    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:title" content="<?= $meta['title']; ?>">
    <meta property="twitter:site" content="@diter_terrones">
    <meta property="twitter:description" content="<?= $meta['description']; ?>">
    <meta name="twitter:image" content="<?= $meta['cover']; ?>">
    <!-- metatags -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <style>
        * {
            font-family: 'Poppins', Arial, sans-serif;
        }
        body {
            margin: 0;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #5171fb;
            background: linear-gradient(-60deg, #05353F, #5171fb, #C9D3FE);
        	background-size: 400% 400%;
            animation: gradient 7s ease infinite;
        }
        .main-app {
            margin: 0 35px;
        }
        .card-presentation {
            padding: 40px;
            border-radius: 8px;
            border: 1px solid #dcdcdc;
            background-color: white;
            box-shadow: 0 8px 16px 4px rgba(16, 31, 97, 0.5);
        }

        @keyframes gradient {
            0% {
                background-position: 0% 50%;
            }
            50% {
                background-position: 100% 50%;
            }
            100% {
                background-position: 0% 50%;
            }
        }

        /* utils */
        .rrss-icon { width: 16px; height: 16px; margin-right: 8px;}
        .title-xl { font-size: 48px; font-weight: 800; margin-top: 0;}
        .text-center { text-align: center; }
        ul {
            width: 140px;
            margin: 0 auto;
            list-style: none;
            padding: 0;
        }
        li {
            padding: 4px 0;
        }
    </style>
</head>
<body>
    <main class="main-app">
        <section class="card-presentation">
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