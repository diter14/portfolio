<?php
    $meta = [
        'title' => 'Diter Terrones',
        'description' => 'Diseñador UI y Frontend Developer. 🔥 Apasionado por la productividad y desarrollo personal',
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
    <script src="https://cdn.tailwindcss.com"></script>
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
    <meta property="og:image" content="<?= 'https://diterterrones.com/img/diter-terrones-cover-open-graph.png'; ?>">
    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:title" content="<?= $meta['title']; ?>">
    <meta property="twitter:site" content="@diter_terrones">
    <meta property="twitter:description" content="<?= $meta['description']; ?>">
    <meta name="twitter:image" content="<?= "//$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]" . $meta['cover']; ?>">
    <!-- metatags -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <!-- <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;400;500;600;700;800&display=swap" rel="stylesheet"> -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,wght@0,400;0,500;0,700;1,400;1,500;1,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Red+Hat+Display:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500&display=swap" rel="stylesheet">
</head>
<body>
    <main class="app card">
        <section class="section about-me">
            <img class="about-me-profile" src="./img/Diter-Terrones-Profile.v3.png" alt="Diter Terrones">
            <div class="about-me-body">
                <p class="title-s about-me-title">¡Hola! Soy</p>
                <h1 class="title-xl about-me-title">Diter Terrones</h1>
                <p class="">🔥 Soy apasionado por la tecnología y el diseño. </p>
                <p class="">🎨 Me encanta diseñar webs minimalistas, inspiradoras y disruptivas. </p>
                <p class="">🚀 Sobre todo volverlas realidad.</p>
            </div>
        </section>
        <section class="section portfolio">
            <h2 class="title-m">💼 ¿Quieres ver mi trabajo?</h2>
            <div class="grid s-grid-1 m-grid-2">
                <div class="customer grid s-grid-1">
                    <div class="customer-cover">
                        <img loading="lazy" src="img/portada expresarte mejor.png" alt="Customer Logo">
                    </div>
                    <div class="customer-body">
                        <h3 class="title-s">ExpresArte Mejor</h3>
                        <div class="customer-tags">
                            <span class="customer-tag">Plataforma Web</span>
                            <span class="customer-tag red">Diseño Web</span>
                        </div>
                        <ul class="customer-links">
                            <li class="customer-link">
                                🔗 
                                <a target="_blank" href="https://www.figma.com/proto/CAl00bC8mfI1DUJJuvw5VU/ExpresArte-Mejor-Web?page-id=128%3A361&node-id=168%3A0&viewport=321%2C230%2C0.1720537692308426&scaling=scale-down-width">
                                    Mockup
                                </a>
                            </li>
                            <li class="customer-link">
                                🔗 
                                <a target="_blank" href="https://expresartemejor.com">
                                    Sitio Web
                                </a>
                            </li>
                            <li class="customer-link">
                                🔗
                                <a target="_blank" href="https://www.facebook.com/diter.terrones/posts/272220434488887">
                                    Publicación
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
    </main>
</body>
</html>