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
    <!-- <script src="https://cdn.tailwindcss.com"></script> -->
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
    <main class="app">
        <section class="section about-me">
            <img class="about-me-profile" src="./img/Diter-Terrones-Profile.v3.png" alt="Diter Terrones">
            <div class="about-me-body">
                <p class="title-s about-me-title">¡Hola! Soy</p>
                <h1 class="title-xl about-me-title">Diter Terrones</h1>
                <h3 class="title-s about-me-title blue">Diseñador UI - Frontend Developer</h3>
                <p class="">🔥 Soy apasionado por la tecnología y el diseño. </p>
                <p class="">🎨 Me encanta diseñar y construir webs minimalistas, inspiradoras y disruptivas. </p>
                <p class="">🚀 Sobre todo volverlas realidad.</p>
            </div>
        </section>
        <section class="section portfolio" id="portfolio">
            <h2 class="title-m">💼 Mi trabajo</h2>
            <div class="grid s-grid-1 m-grid-2">
                <div class="customer grid s-grid-1">
                    <div class="customer-cover">
                        <a href="https://elricostore.com" target="_blank">
                            <img loading="lazy" src="img/portada el rico store.png" alt="Customer Cover">
                        </a>
                    </div>
                    <div class="customer-body">
                        <h3 class="title-s">El Rico Store</h3>
                        <p class="text-s text-color-normal">Construcción de e-Commerce para empresa de venta de ropa geek.</p>
                        <div class="customer-tags">
                            <span class="customer-tag red">Diseño Web</span>
                            <span class="customer-tag blue">e-Commerce</span>
                            <span class="customer-tag">Wordpress</span>
                        </div>
                        <ul class="customer-links">
                            <li class="customer-link">
                                🔗 
                                <a target="_blank" href="https://www.figma.com/proto/JP4qrPd6zzquKtGrTfDpYh/El-Rico-Store?page-id=60%3A2&node-id=79%3A0&viewport=-38%2C-464%2C0.4282759130001068&scaling=scale-down-width">
                                    Mockup
                                </a>
                            </li>
                            <li class="customer-link">
                                🔗 
                                <a target="_blank" href="https://elricostore.com">
                                    Sitio Web
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="customer grid s-grid-1">
                    <div class="customer-cover">
                        <a href="https://expresartemejor.com" target="_blank">
                            <img loading="lazy" src="img/portada expresarte mejor.png" alt="Customer Cover">
                        </a>
                    </div>
                    <div class="customer-body">
                        <h3 class="title-s">ExpresArte Mejor</h3>
                        <p class="text-s text-color-normal">Construcción de plataforma web orientado a cursos de oratoria.</p>
                        <div class="customer-tags">
                            <span class="customer-tag">Plataforma Web</span>
                            <span class="customer-tag red">Diseño Web</span>
                        </div>
                        <ul class="customer-links">
                            <!-- <li class="customer-link">
                                🔗 
                                <a target="_blank" href="https://www.figma.com/proto/CAl00bC8mfI1DUJJuvw5VU/ExpresArte-Mejor-Web?page-id=128%3A361&node-id=168%3A0&viewport=321%2C230%2C0.1720537692308426&scaling=scale-down-width">
                                    Mockup
                                </a>
                            </li> -->
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
                <div class="customer grid s-grid-1">
                    <div class="customer-cover">
                        <a href="https://ingymec.com" target="_blank">
                            <img loading="lazy" src="img/cover ingymec.png" alt="INGYMEC Cover">
                        </a>
                    </div>
                    <div class="customer-body">
                        <h3 class="title-s">INGYMEC</h3>
                        <p class="text-s text-color-normal">Diseño y construcción de sitio web corporativo del rubro metal mecánica.</p>
                        <div class="customer-tags">
                            <span class="customer-tag red">Diseño Web</span>
                            <span class="customer-tag yellow">Wordpress</span>
                            <span class="customer-tag blue">Divi Builder</span>
                        </div>
                        <ul class="customer-links">
                            <li class="customer-link">
                                🔗 
                                <a target="_blank" href="https://ingymec.com">
                                    Sitio Web
                                </a>
                            </li>
                            <li class="customer-link">
                                🔗
                                <a target="_blank" href="https://www.facebook.com/diter.terrones/posts/457294005981528">
                                    Publicación
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="customer grid s-grid-1">
                    <div class="customer-cover">
                        <a href="https://aktechnicalsolutions.com" target="_blank">
                            <img loading="lazy" src="img/cover ak technical.png" alt="AK Technical Cover">
                        </a>
                    </div>
                    <div class="customer-body">
                        <h3 class="title-s">AK Technical's Solutions</h3>
                        <p class="text-s text-color-normal">Diseño y construcción de sitio web corporativo del rubro de reparaciones mineras.</p>
                        <div class="customer-tags">
                            <span class="customer-tag">Diseño Web</span>
                            <span class="customer-tag yellow">Wordpress</span>
                            <span class="customer-tag blue">Elementor</span>
                        </div>
                        <ul class="customer-links">
                            <li class="customer-link">
                                🔗 
                                <a target="_blank" href="https://aktechnicalsolutions.com">
                                    Sitio Web
                                </a>
                            </li>
                            <li class="customer-link">
                                🔗
                                <a target="_blank" href="https://www.facebook.com/diter.terrones/posts/433242521720010">
                                    Publicación
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="customer grid s-grid-1">
                    <div class="customer-cover">
                        <a href="https://www.figma.com/proto/Bok2k2Y1RPn5oP1Guva0YP/InterConnecta-Employee-Profile?page-id=1%3A6&node-id=1001%3A9345&viewport=-90%2C-2484%2C0.24&scaling=min-zoom&starting-point-node-id=1001%3A9345&show-proto-sidebar=1" target="_blank">
                            <img loading="lazy" src="img/cover interconnecta.png" alt="InterConnecta Cover">
                        </a>
                    </div>
                    <div class="customer-body">
                        <h3 class="title-s">InterConnecta</h3>
                        <p class="text-s text-color-normal">Plataforma web personalizada para visualizar métricas y reportes de empleados.</p>
                        <div class="customer-tags">
                            <span class="customer-tag">Diseño Web</span>
                            <span class="customer-tag yellow">Laravel</span>
                            <span class="customer-tag blue">Vue.js</span>
                            <span class="customer-tag">Figma</span>
                        </div>
                        <ul class="customer-links">
                            <li class="customer-link">
                                🔗 
                                <a target="_blank" href="https://www.figma.com/proto/Bok2k2Y1RPn5oP1Guva0YP/InterConnecta-Employee-Profile?page-id=1%3A6&node-id=1001%3A9345&viewport=-90%2C-2484%2C0.24&scaling=min-zoom&starting-point-node-id=1001%3A9345&show-proto-sidebar=1">
                                    Mockup - Diseño
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="customer grid s-grid-1">
                    <div class="customer-cover">
                        <a href="https://aremisse.com" target="_blank">
                            <img loading="lazy" src="img/portada aremisse lima.png" alt="Aremisse Cover">
                        </a>
                    </div>
                    <div class="customer-body">
                        <h3 class="title-s">Aremisse Lima</h3>
                        <p class="text-s text-color-normal">Sitio web corporativo para empresa de transporte de personal y turístico.</p>
                        <div class="customer-tags">
                            <span class="customer-tag red">Diseño Web</span>
                            <span class="customer-tag green">Sitio Web</span>
                        </div>
                        <ul class="customer-links">
                            <li class="customer-link">
                                🔗 
                                <a target="_blank" href="https://www.figma.com/proto/wJ7CvvekA9bTvxy70LLZeG/Aremisse-Website?page-id=105%3A0&node-id=111%3A705&viewport=3113%2C1028%2C0.3367941081523895&scaling=scale-down-width">
                                    Mockup
                                </a>
                            </li>
                            <li class="customer-link">
                                🔗 
                                <a target="_blank" href="https://aremisse.com">
                                    Sitio Web
                                </a>
                            </li>
                            <li class="customer-link">
                                🔗
                                <a target="_blank" href="https://www.facebook.com/diter.terrones/posts/239367091107555">
                                    Publicación
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="customer grid s-grid-1">
                    <div class="customer-cover">
                        <img loading="lazy" src="img/portada fisio megi.png" alt="Customer Cover">
                    </div>
                    <div class="customer-body">
                        <h3 class="title-s">Fisio Megi</h3>
                        <p class="text-s text-color-normal">Diseño web para centro de Fisioterapia y Bienestar.</p>
                        <div class="customer-tags">
                            <span class="customer-tag yellow">Prototipado</span>
                            <span class="customer-tag blue">Diseño Web</span>
                        </div>
                        <ul class="customer-links">
                            <li class="customer-link">
                                🔗 
                                <a target="_blank" href="https://www.figma.com/proto/797OEbIQrTYLp4NyB9JmED/Fisio-MEGI-Landing?page-id=232%3A6&node-id=232%3A7&viewport=539%2C356%2C0.09983249753713608&scaling=min-zoom">
                                Prototipado
                                </a>
                            </li>
                            <li class="customer-link">
                                🔗 
                                <a target="_blank" href="https://www.facebook.com/diter.terrones/posts/245082333869364">
                                Publicación
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <section class="section rrss">
            <h2 class="title-m">🔗 ¿Me buscas en redes sociales? <span class="title-badge">Sígueme, doy tips interesantes</span></h2>
            <div class="grid s-grid-1 m-grid-3">
                <div class="rrss-item">
                    <img class="rrss-icon" src="./img/youtube.svg" alt="youtube">
                    <a class="rrss-label" href="https://www.youtube.com/channel/UC4lGytEx_jtzC6UlifC__lQ" target="_blank">Youtube</a>
                </div>
                <div class="rrss-item">
                    <img class="rrss-icon" src="./img/facebook.svg" alt="facebook">
                    <a class="rrss-label" href="https://www.facebook.com/diter.terrones" target="_blank">Facebook</a>
                </div>
                <div class="rrss-item">
                    <img class="rrss-icon" src="./img/instagram.svg" alt="instagram">
                    <a class="rrss-label" href="https://www.instagram.com/diter.terrones/" target="_blank">Instagram</a>
                </div>
            </div>
        </section>
        <section class="section posts">
            <h2 class="title-m">📄 Últimas publicaciones</h2>
            <div class="grid s-grid-1 m-grid-3">
                <div class="post-item">
                    <blockquote class="instagram-media" data-instgrm-permalink="https://www.instagram.com/p/COeC1mDA2xJ/?utm_source=ig_embed&amp;utm_campaign=loading" data-instgrm-version="13" style=" background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; padding:0; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px);"><div style="padding:16px;"> <a href="https://www.instagram.com/p/COeC1mDA2xJ/?utm_source=ig_embed&amp;utm_campaign=loading" style=" background:#FFFFFF; line-height:0; padding:0 0; text-align:center; text-decoration:none; width:100%;" target="_blank"> <div style=" display: flex; flex-direction: row; align-items: center;"> <div style="background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 40px; margin-right: 14px; width: 40px;"></div> <div style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center;"> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 100px;"></div> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 60px;"></div></div></div><div style="padding: 19% 0;"></div> <div style="display:block; height:50px; margin:0 auto 12px; width:50px;"><svg width="50px" height="50px" viewBox="0 0 60 60" version="1.1" xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g transform="translate(-511.000000, -20.000000)" fill="#000000"><g><path d="M556.869,30.41 C554.814,30.41 553.148,32.076 553.148,34.131 C553.148,36.186 554.814,37.852 556.869,37.852 C558.924,37.852 560.59,36.186 560.59,34.131 C560.59,32.076 558.924,30.41 556.869,30.41 M541,60.657 C535.114,60.657 530.342,55.887 530.342,50 C530.342,44.114 535.114,39.342 541,39.342 C546.887,39.342 551.658,44.114 551.658,50 C551.658,55.887 546.887,60.657 541,60.657 M541,33.886 C532.1,33.886 524.886,41.1 524.886,50 C524.886,58.899 532.1,66.113 541,66.113 C549.9,66.113 557.115,58.899 557.115,50 C557.115,41.1 549.9,33.886 541,33.886 M565.378,62.101 C565.244,65.022 564.756,66.606 564.346,67.663 C563.803,69.06 563.154,70.057 562.106,71.106 C561.058,72.155 560.06,72.803 558.662,73.347 C557.607,73.757 556.021,74.244 553.102,74.378 C549.944,74.521 548.997,74.552 541,74.552 C533.003,74.552 532.056,74.521 528.898,74.378 C525.979,74.244 524.393,73.757 523.338,73.347 C521.94,72.803 520.942,72.155 519.894,71.106 C518.846,70.057 518.197,69.06 517.654,67.663 C517.244,66.606 516.755,65.022 516.623,62.101 C516.479,58.943 516.448,57.996 516.448,50 C516.448,42.003 516.479,41.056 516.623,37.899 C516.755,34.978 517.244,33.391 517.654,32.338 C518.197,30.938 518.846,29.942 519.894,28.894 C520.942,27.846 521.94,27.196 523.338,26.654 C524.393,26.244 525.979,25.756 528.898,25.623 C532.057,25.479 533.004,25.448 541,25.448 C548.997,25.448 549.943,25.479 553.102,25.623 C556.021,25.756 557.607,26.244 558.662,26.654 C560.06,27.196 561.058,27.846 562.106,28.894 C563.154,29.942 563.803,30.938 564.346,32.338 C564.756,33.391 565.244,34.978 565.378,37.899 C565.522,41.056 565.552,42.003 565.552,50 C565.552,57.996 565.522,58.943 565.378,62.101 M570.82,37.631 C570.674,34.438 570.167,32.258 569.425,30.349 C568.659,28.377 567.633,26.702 565.965,25.035 C564.297,23.368 562.623,22.342 560.652,21.575 C558.743,20.834 556.562,20.326 553.369,20.18 C550.169,20.033 549.148,20 541,20 C532.853,20 531.831,20.033 528.631,20.18 C525.438,20.326 523.257,20.834 521.349,21.575 C519.376,22.342 517.703,23.368 516.035,25.035 C514.368,26.702 513.342,28.377 512.574,30.349 C511.834,32.258 511.326,34.438 511.181,37.631 C511.035,40.831 511,41.851 511,50 C511,58.147 511.035,59.17 511.181,62.369 C511.326,65.562 511.834,67.743 512.574,69.651 C513.342,71.625 514.368,73.296 516.035,74.965 C517.703,76.634 519.376,77.658 521.349,78.425 C523.257,79.167 525.438,79.673 528.631,79.82 C531.831,79.965 532.853,80.001 541,80.001 C549.148,80.001 550.169,79.965 553.369,79.82 C556.562,79.673 558.743,79.167 560.652,78.425 C562.623,77.658 564.297,76.634 565.965,74.965 C567.633,73.296 568.659,71.625 569.425,69.651 C570.167,67.743 570.674,65.562 570.82,62.369 C570.966,59.17 571,58.147 571,50 C571,41.851 570.966,40.831 570.82,37.631"></path></g></g></g></svg></div><div style="padding-top: 8px;"> <div style=" color:#3897f0; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:550; line-height:18px;"> Ver esta publicación en Instagram</div></div><div style="padding: 12.5% 0;"></div> <div style="display: flex; flex-direction: row; margin-bottom: 14px; align-items: center;"><div> <div style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(0px) translateY(7px);"></div> <div style="background-color: #F4F4F4; height: 12.5px; transform: rotate(-45deg) translateX(3px) translateY(1px); width: 12.5px; flex-grow: 0; margin-right: 14px; margin-left: 2px;"></div> <div style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(9px) translateY(-18px);"></div></div><div style="margin-left: 8px;"> <div style=" background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 20px; width: 20px;"></div> <div style=" width: 0; height: 0; border-top: 2px solid transparent; border-left: 6px solid #f4f4f4; border-bottom: 2px solid transparent; transform: translateX(16px) translateY(-4px) rotate(30deg)"></div></div><div style="margin-left: auto;"> <div style=" width: 0px; border-top: 8px solid #F4F4F4; border-right: 8px solid transparent; transform: translateY(16px);"></div> <div style=" background-color: #F4F4F4; flex-grow: 0; height: 12px; width: 16px; transform: translateY(-4px);"></div> <div style=" width: 0; height: 0; border-top: 8px solid #F4F4F4; border-left: 8px solid transparent; transform: translateY(-4px) translateX(8px);"></div></div></div> <div style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center; margin-bottom: 24px;"> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 224px;"></div> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 144px;"></div></div></a><p style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; line-height:17px; margin-bottom:0; margin-top:8px; overflow:hidden; padding:8px 0 7px; text-align:center; text-overflow:ellipsis; white-space:nowrap;"><a href="https://www.instagram.com/p/COeC1mDA2xJ/?utm_source=ig_embed&amp;utm_campaign=loading" style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px; text-decoration:none;" target="_blank">Una publicación compartida por ⚡️ Diter Terrones (@diter.terrones)</a></p></div></blockquote> <script async src="//www.instagram.com/embed.js"></script>
                </div>
                <div class="post-item">
                    <blockquote class="instagram-media" data-instgrm-permalink="https://www.instagram.com/p/COBprWvn4I3/?utm_source=ig_embed&amp;utm_campaign=loading" data-instgrm-version="13" style=" background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; padding:0; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px);"><div style="padding:16px;"> <a href="https://www.instagram.com/p/COBprWvn4I3/?utm_source=ig_embed&amp;utm_campaign=loading" style=" background:#FFFFFF; line-height:0; padding:0 0; text-align:center; text-decoration:none; width:100%;" target="_blank"> <div style=" display: flex; flex-direction: row; align-items: center;"> <div style="background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 40px; margin-right: 14px; width: 40px;"></div> <div style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center;"> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 100px;"></div> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 60px;"></div></div></div><div style="padding: 19% 0;"></div> <div style="display:block; height:50px; margin:0 auto 12px; width:50px;"><svg width="50px" height="50px" viewBox="0 0 60 60" version="1.1" xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g transform="translate(-511.000000, -20.000000)" fill="#000000"><g><path d="M556.869,30.41 C554.814,30.41 553.148,32.076 553.148,34.131 C553.148,36.186 554.814,37.852 556.869,37.852 C558.924,37.852 560.59,36.186 560.59,34.131 C560.59,32.076 558.924,30.41 556.869,30.41 M541,60.657 C535.114,60.657 530.342,55.887 530.342,50 C530.342,44.114 535.114,39.342 541,39.342 C546.887,39.342 551.658,44.114 551.658,50 C551.658,55.887 546.887,60.657 541,60.657 M541,33.886 C532.1,33.886 524.886,41.1 524.886,50 C524.886,58.899 532.1,66.113 541,66.113 C549.9,66.113 557.115,58.899 557.115,50 C557.115,41.1 549.9,33.886 541,33.886 M565.378,62.101 C565.244,65.022 564.756,66.606 564.346,67.663 C563.803,69.06 563.154,70.057 562.106,71.106 C561.058,72.155 560.06,72.803 558.662,73.347 C557.607,73.757 556.021,74.244 553.102,74.378 C549.944,74.521 548.997,74.552 541,74.552 C533.003,74.552 532.056,74.521 528.898,74.378 C525.979,74.244 524.393,73.757 523.338,73.347 C521.94,72.803 520.942,72.155 519.894,71.106 C518.846,70.057 518.197,69.06 517.654,67.663 C517.244,66.606 516.755,65.022 516.623,62.101 C516.479,58.943 516.448,57.996 516.448,50 C516.448,42.003 516.479,41.056 516.623,37.899 C516.755,34.978 517.244,33.391 517.654,32.338 C518.197,30.938 518.846,29.942 519.894,28.894 C520.942,27.846 521.94,27.196 523.338,26.654 C524.393,26.244 525.979,25.756 528.898,25.623 C532.057,25.479 533.004,25.448 541,25.448 C548.997,25.448 549.943,25.479 553.102,25.623 C556.021,25.756 557.607,26.244 558.662,26.654 C560.06,27.196 561.058,27.846 562.106,28.894 C563.154,29.942 563.803,30.938 564.346,32.338 C564.756,33.391 565.244,34.978 565.378,37.899 C565.522,41.056 565.552,42.003 565.552,50 C565.552,57.996 565.522,58.943 565.378,62.101 M570.82,37.631 C570.674,34.438 570.167,32.258 569.425,30.349 C568.659,28.377 567.633,26.702 565.965,25.035 C564.297,23.368 562.623,22.342 560.652,21.575 C558.743,20.834 556.562,20.326 553.369,20.18 C550.169,20.033 549.148,20 541,20 C532.853,20 531.831,20.033 528.631,20.18 C525.438,20.326 523.257,20.834 521.349,21.575 C519.376,22.342 517.703,23.368 516.035,25.035 C514.368,26.702 513.342,28.377 512.574,30.349 C511.834,32.258 511.326,34.438 511.181,37.631 C511.035,40.831 511,41.851 511,50 C511,58.147 511.035,59.17 511.181,62.369 C511.326,65.562 511.834,67.743 512.574,69.651 C513.342,71.625 514.368,73.296 516.035,74.965 C517.703,76.634 519.376,77.658 521.349,78.425 C523.257,79.167 525.438,79.673 528.631,79.82 C531.831,79.965 532.853,80.001 541,80.001 C549.148,80.001 550.169,79.965 553.369,79.82 C556.562,79.673 558.743,79.167 560.652,78.425 C562.623,77.658 564.297,76.634 565.965,74.965 C567.633,73.296 568.659,71.625 569.425,69.651 C570.167,67.743 570.674,65.562 570.82,62.369 C570.966,59.17 571,58.147 571,50 C571,41.851 570.966,40.831 570.82,37.631"></path></g></g></g></svg></div><div style="padding-top: 8px;"> <div style=" color:#3897f0; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:550; line-height:18px;"> Ver esta publicación en Instagram</div></div><div style="padding: 12.5% 0;"></div> <div style="display: flex; flex-direction: row; margin-bottom: 14px; align-items: center;"><div> <div style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(0px) translateY(7px);"></div> <div style="background-color: #F4F4F4; height: 12.5px; transform: rotate(-45deg) translateX(3px) translateY(1px); width: 12.5px; flex-grow: 0; margin-right: 14px; margin-left: 2px;"></div> <div style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(9px) translateY(-18px);"></div></div><div style="margin-left: 8px;"> <div style=" background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 20px; width: 20px;"></div> <div style=" width: 0; height: 0; border-top: 2px solid transparent; border-left: 6px solid #f4f4f4; border-bottom: 2px solid transparent; transform: translateX(16px) translateY(-4px) rotate(30deg)"></div></div><div style="margin-left: auto;"> <div style=" width: 0px; border-top: 8px solid #F4F4F4; border-right: 8px solid transparent; transform: translateY(16px);"></div> <div style=" background-color: #F4F4F4; flex-grow: 0; height: 12px; width: 16px; transform: translateY(-4px);"></div> <div style=" width: 0; height: 0; border-top: 8px solid #F4F4F4; border-left: 8px solid transparent; transform: translateY(-4px) translateX(8px);"></div></div></div> <div style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center; margin-bottom: 24px;"> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 224px;"></div> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 144px;"></div></div></a><p style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; line-height:17px; margin-bottom:0; margin-top:8px; overflow:hidden; padding:8px 0 7px; text-align:center; text-overflow:ellipsis; white-space:nowrap;"><a href="https://www.instagram.com/p/COBprWvn4I3/?utm_source=ig_embed&amp;utm_campaign=loading" style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px; text-decoration:none;" target="_blank">Una publicación compartida por ⚡️ Diter Terrones (@diter.terrones)</a></p></div></blockquote> <script async src="//www.instagram.com/embed.js"></script>
                </div>
                <div class="post-item">
                    <blockquote class="instagram-media" data-instgrm-permalink="https://www.instagram.com/p/CNdrWxHnVlq/?utm_source=ig_embed&amp;utm_campaign=loading" data-instgrm-version="13" style=" background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; padding:0; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px);"><div style="padding:16px;"> <a href="https://www.instagram.com/p/CNdrWxHnVlq/?utm_source=ig_embed&amp;utm_campaign=loading" style=" background:#FFFFFF; line-height:0; padding:0 0; text-align:center; text-decoration:none; width:100%;" target="_blank"> <div style=" display: flex; flex-direction: row; align-items: center;"> <div style="background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 40px; margin-right: 14px; width: 40px;"></div> <div style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center;"> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 100px;"></div> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 60px;"></div></div></div><div style="padding: 19% 0;"></div> <div style="display:block; height:50px; margin:0 auto 12px; width:50px;"><svg width="50px" height="50px" viewBox="0 0 60 60" version="1.1" xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g transform="translate(-511.000000, -20.000000)" fill="#000000"><g><path d="M556.869,30.41 C554.814,30.41 553.148,32.076 553.148,34.131 C553.148,36.186 554.814,37.852 556.869,37.852 C558.924,37.852 560.59,36.186 560.59,34.131 C560.59,32.076 558.924,30.41 556.869,30.41 M541,60.657 C535.114,60.657 530.342,55.887 530.342,50 C530.342,44.114 535.114,39.342 541,39.342 C546.887,39.342 551.658,44.114 551.658,50 C551.658,55.887 546.887,60.657 541,60.657 M541,33.886 C532.1,33.886 524.886,41.1 524.886,50 C524.886,58.899 532.1,66.113 541,66.113 C549.9,66.113 557.115,58.899 557.115,50 C557.115,41.1 549.9,33.886 541,33.886 M565.378,62.101 C565.244,65.022 564.756,66.606 564.346,67.663 C563.803,69.06 563.154,70.057 562.106,71.106 C561.058,72.155 560.06,72.803 558.662,73.347 C557.607,73.757 556.021,74.244 553.102,74.378 C549.944,74.521 548.997,74.552 541,74.552 C533.003,74.552 532.056,74.521 528.898,74.378 C525.979,74.244 524.393,73.757 523.338,73.347 C521.94,72.803 520.942,72.155 519.894,71.106 C518.846,70.057 518.197,69.06 517.654,67.663 C517.244,66.606 516.755,65.022 516.623,62.101 C516.479,58.943 516.448,57.996 516.448,50 C516.448,42.003 516.479,41.056 516.623,37.899 C516.755,34.978 517.244,33.391 517.654,32.338 C518.197,30.938 518.846,29.942 519.894,28.894 C520.942,27.846 521.94,27.196 523.338,26.654 C524.393,26.244 525.979,25.756 528.898,25.623 C532.057,25.479 533.004,25.448 541,25.448 C548.997,25.448 549.943,25.479 553.102,25.623 C556.021,25.756 557.607,26.244 558.662,26.654 C560.06,27.196 561.058,27.846 562.106,28.894 C563.154,29.942 563.803,30.938 564.346,32.338 C564.756,33.391 565.244,34.978 565.378,37.899 C565.522,41.056 565.552,42.003 565.552,50 C565.552,57.996 565.522,58.943 565.378,62.101 M570.82,37.631 C570.674,34.438 570.167,32.258 569.425,30.349 C568.659,28.377 567.633,26.702 565.965,25.035 C564.297,23.368 562.623,22.342 560.652,21.575 C558.743,20.834 556.562,20.326 553.369,20.18 C550.169,20.033 549.148,20 541,20 C532.853,20 531.831,20.033 528.631,20.18 C525.438,20.326 523.257,20.834 521.349,21.575 C519.376,22.342 517.703,23.368 516.035,25.035 C514.368,26.702 513.342,28.377 512.574,30.349 C511.834,32.258 511.326,34.438 511.181,37.631 C511.035,40.831 511,41.851 511,50 C511,58.147 511.035,59.17 511.181,62.369 C511.326,65.562 511.834,67.743 512.574,69.651 C513.342,71.625 514.368,73.296 516.035,74.965 C517.703,76.634 519.376,77.658 521.349,78.425 C523.257,79.167 525.438,79.673 528.631,79.82 C531.831,79.965 532.853,80.001 541,80.001 C549.148,80.001 550.169,79.965 553.369,79.82 C556.562,79.673 558.743,79.167 560.652,78.425 C562.623,77.658 564.297,76.634 565.965,74.965 C567.633,73.296 568.659,71.625 569.425,69.651 C570.167,67.743 570.674,65.562 570.82,62.369 C570.966,59.17 571,58.147 571,50 C571,41.851 570.966,40.831 570.82,37.631"></path></g></g></g></svg></div><div style="padding-top: 8px;"> <div style=" color:#3897f0; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:550; line-height:18px;"> Ver esta publicación en Instagram</div></div><div style="padding: 12.5% 0;"></div> <div style="display: flex; flex-direction: row; margin-bottom: 14px; align-items: center;"><div> <div style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(0px) translateY(7px);"></div> <div style="background-color: #F4F4F4; height: 12.5px; transform: rotate(-45deg) translateX(3px) translateY(1px); width: 12.5px; flex-grow: 0; margin-right: 14px; margin-left: 2px;"></div> <div style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(9px) translateY(-18px);"></div></div><div style="margin-left: 8px;"> <div style=" background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 20px; width: 20px;"></div> <div style=" width: 0; height: 0; border-top: 2px solid transparent; border-left: 6px solid #f4f4f4; border-bottom: 2px solid transparent; transform: translateX(16px) translateY(-4px) rotate(30deg)"></div></div><div style="margin-left: auto;"> <div style=" width: 0px; border-top: 8px solid #F4F4F4; border-right: 8px solid transparent; transform: translateY(16px);"></div> <div style=" background-color: #F4F4F4; flex-grow: 0; height: 12px; width: 16px; transform: translateY(-4px);"></div> <div style=" width: 0; height: 0; border-top: 8px solid #F4F4F4; border-left: 8px solid transparent; transform: translateY(-4px) translateX(8px);"></div></div></div> <div style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center; margin-bottom: 24px;"> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 224px;"></div> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 144px;"></div></div></a><p style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; line-height:17px; margin-bottom:0; margin-top:8px; overflow:hidden; padding:8px 0 7px; text-align:center; text-overflow:ellipsis; white-space:nowrap;"><a href="https://www.instagram.com/p/CNdrWxHnVlq/?utm_source=ig_embed&amp;utm_campaign=loading" style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px; text-decoration:none;" target="_blank">Una publicación compartida por ⚡️ Diter Terrones (@diter.terrones)</a></p></div></blockquote> <script async src="//www.instagram.com/embed.js"></script>
                </div>
            </div>
        </section>
        <!-- <section class="section back-me-up">
            <h2 class="title-m">🤝🏽 ¿Te gustó mi contenido?</h2>
        </section> -->
    </main>
    <footer class="footer">
        <p class="text-center text-s">
            Copyright ©<?= date('Y'); ?>. Todos los derechos reservados. Hecho con el 💗 por <span class="text-color-yellow">Diter Terrones</span>
        </p>
    </footer>
</body>
</html>