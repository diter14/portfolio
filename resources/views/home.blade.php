@extends('layouts.app')
 
@section('title', 'Page Title')
 
@section('header')
    @parent
@endsection
 
@section('content')
    <section class="home-banner max-w-6xl mx-auto flex md:block justify-center h-screen md:h-auto -mt-[90px] md:mt-0">
        <div class="grid grid-cols-1 md:grid-cols-2 content-center mb-8">
            <div class="self-center text-center md:text-left mb-6">
                <h2 class="font-heading text-xl md:text-heading-h4">
                    ¡Hola! Soy
                </h2>
                <h1 class="font-heading text-heading-h2 md:text-2xl text-gray-title font-black">
                    DITER <br> TERRONES
                </h1>
            </div>
            <div class="self-center text-center md:text-right">
                <p class="font-heading text-blue-400 text-md md:text-heading-h4 font-black mb-3">
                    Diseñador Web & <br> Vue Frontend Developer
                </p>
                <p class="font-body text-md">
                    Diseño y desarrollo experiencias <span class="font-bold">visualmente <br>atractivas</span> y funcionales en la web
                </p>
            </div>
        </div>
        <div class="hidden md:grid grid-cols-1 grid-rows-1 -mt-[150px]">
            <div class="img-container relative">
                <img 
                    src="{{ asset('img/diter-main-banner.png') }}" 
                    alt="Diter Main Cover" 
                    class="banner-cover mx-auto"
                >
                <img 
                    src="{{ asset('img/diter-main-banner-thunder.png') }}" 
                    alt="Diter Main Thunder" 
                    class="floating absolute top-0 left-0 right-0 mx-auto"
                >
                <img 
                    src="{{ asset('img/diter-main-banner-click.png') }}" 
                    alt="Diter Main Click" 
                    class="floating animation-delay-1 absolute top-0 left-0 right-0 mx-auto"
                >
            </div>
        </div>
    </section>
    <nav class="hidden md:block nav sticky top-5 z-[100] w-2/3 bg-black-500 shadow-main-menu shadow-black-200/40 rounded-full font-bold font-heading mx-auto -mt-[64px] mb-[32px]">
        <ul class="flex items-center justify-evenly text-xl h-[80px] space-x-2 py-3">
            <li class="nav-item">
                <a href="#about-banner" class="nav-item__link">
                    Sobre mí
                </a>
            </li>
            <li class="nav-item">
                <a href="#services-banner" class="nav-item__link">
                    Qué hago bien
                </a>
            </li>
            <li class="nav-item">
                <a href="#customers-banner" class="nav-item__link">
                    Clientes
                </a>
            </li>
            <li class="nav-item">
                <a href="#testimonials-banner" class="nav-item__link">
                    Resultados
                </a>
            </li>
        </ul>
    </nav>
    <section id="about-banner" class="about-banner py-14 md:py-36 px-4 bg-white">
        <div class="max-w-6xl mx-auto grid grid-cols-1 md:grid-cols-2 grid-rows-1 text-center md:text-left mb-6 md:mb-10">
            <h2 class="font-heading text-heading-h3 md:text-heading-h2 text-gray-title font-black mb-4">
                Sobre <span class="text-blue-500">mí</span>
            </h2>
            <div class="flex items-center justify-end">
                <a href="#" class="rounded-full bg-yellow-500 text-black-500 py-2 px-4 font-bold w-fit mx-auto md:mx-0">
                    Descarga mi CV
                </a>
            </div>
        </div>
        <div class="max-w-6xl mx-auto grid grid-cols-1 md:grid-cols-12 grid-rows-1 text-center md:text-left">
            <div class="about-copy md:col-span-8 flex flex-col justify-center">
                <p class="text-gray-normal text-md mb-6">
                    Soy bachiller en <span class="font-bold">Ingeniería de Sistemas</span>, apasionado por la tecnología y el diseño de interfaces web.
                    Cuento con +5 años de experticia como <span class="font-bold">Frontend Developer</span>, ayudo a emprendedores y empresas a tener presencia digital e incrementar el alcance de lo que ofrecen combinando mis habilidades de <span class="font-bold">Diseño UI</span> con la <span class="font-bold">construcción de sitios</span> o aplicaciones web.
                    Si te gusta mi perfil, <span class="font-bold text-blue-500">¡charlemos!</span>
                </p>
                <h3 class="font-heading text-heading-h5 font-bold mb-6">💻 Tech Skills ></h3>
                <h3 class="font-heading text-heading-h5 font-bold mb-8">🔥 Soft Skills ></h3>
            </div>
            <div class="about-cover md:col-span-4">
                <div class="img-container ">
                    <img 
                        src="{{ asset('img/diter-aboutme.png') }}"
                        alt="Diter About Me"  
                        class="about-cover-img mx-auto md:mr-0"
                    >
                </div>
            </div>
        </div>
    </section>
    <section id="services-banner" class="services-banner container-2xl mx-auto py-14 md:py-36 px-4">
        <div class="grid grid-cols-1 grid-rows-1 text-center mb-6">
            <h2 class="font-heading text-heading-h3 md:text-heading-h2 text-gray-title font-black mb-4">
                ¿Qué <span class="text-blue-500">hago</span> bien?
            </h2>
            <p class="text-gray-normal text-md mb-6">
                Tengo alma de <span class="font-bold">designer</span> y experiencia de <span class="font-bold">developer</span>. <br>
                Junto lo mejor de los dos mundos: el <span class="font-bold">diseño y desarrollo de soluciones web <span class="font-bold text-blue-500">efectivas</span></span>.
            </p>
        </div>
        @include('components.service-card.service-yellow', ['theme' => 'light'])
        @include('components.service-card.service-blue', ['theme' => 'light'])
        @include('components.service-card.service-black', ['theme' => 'light'])
    </section>
    <section id="customers-banner" class="customers-banner container-2xl mx-auto py-14 md:py-36 px-4">
        <div class="grid grid-cols-1 grid-rows-1 text-center mb-6">
            <h2 class="font-heading text-heading-h3 text-gray-title font-black mb-4">
                Mi <span class="text-blue-500">trabajo</span>
            </h2>
            <p class="text-gray-normal text-md mb-6">
                Un pequeño recorrido de los proyectos para clientes con los que logramos estos grandes resultados. <br>
                <span class="font-bold text-blue-500">¡Compruébalo!</span>
            </p>
        </div>
        @php
            $customers = [
                [
                    'name' => 'ExpresArte Mejor',
                    'description' => 'Diseño y construcción de plataforma web orientado a cursos de oratoria, locución, blog y eventos.',
                    'badges' => ['Wordpress', 'Elementor', 'Diseño Web'],
                    'link_web' => 'https://expresartemejor.com',
                    'link_rrss' => 'https://',
                    'cover' => 'img/customers-expresartemejor.png',
                    'theme-color' => 'black',
                ],
                [
                    'name' => 'Aremisse Lima',
                    'description' => 'Sitio web corporativo para empresa de transporte de personal, turístico y corporativo.',
                    'badges' => ['Laravel', 'Vue JS', 'Diseño UI'],
                    'link_web' => 'https://aremisselima.com',
                    'link_rrss' => 'https://',
                    'cover' => 'img/customers-aremisse.png',
                    'theme-color' => 'yellow',
                ],
                [
                    'name' => 'INGYMEC',
                    'description' => 'Análisis, diseño de arquitectura web y construcción de sitio web corporativo del rubro metal mecánica.',
                    'badges' => ['Wordpress', 'Divi', 'Diseño Web'],
                    'link_web' => 'https://ingymec.com',
                    'link_rrss' => 'https://',
                    'cover' => 'img/customers-ingymec.png',
                    'theme-color' => 'blue',
                ],
                [
                    'name' => 'InterConnecta',
                    'description' => 'Construcción de plataforma web personalizada para visualizar métricas y perfiles de empleados.',
                    'badges' => ['Laravel', 'Vue JS', 'Diseño UI'],
                    'link_web' => '#',
                    'link_rrss' => 'https://',
                    'cover' => 'img/customers-interconnecta.png',
                    'theme-color' => 'black',
                ],
                [
                    'name' => 'El Rico Store',
                    'description' => 'Construcción y diseño de e-Commerce para empresa de venta de ropa de sector geek 🔥.',
                    'badges' => ['eCommerce', 'Diseño Web', 'Wordpress'],
                    'link_web' => 'https://elricostore.com',
                    'link_rrss' => 'https://',
                    'cover' => 'img/customers-elricostore.png',
                    'theme-color' => 'blue',
                ],
                [
                    'name' => 'AK Tech. Solutions',
                    'description' => 'Diseño y construcción de sitio web corporativo de sector de minero e implementación de telemandos.',
                    'badges' => ['Wordpress', 'Elementor', 'Diseño Web'],
                    'link_web' => 'https://aktechnicalsolutions.com',
                    'link_rrss' => 'https://',
                    'cover' => 'img/customers-aktechnical.png',
                    'theme-color' => 'yellow',
                ],
                [
                    'name' => 'Corporación Marles',
                    'description' => 'Arquitectura web, diseño y construcción de catálogo virtual para mayoreo de productos de panadería.',
                    'badges' => ['Arquitectura', 'Diseño Web', 'Wordpress'],
                    'link_web' => 'https://corporacionmarles.com',
                    'link_rrss' => 'https://',
                    'cover' => 'img/customers-corpmarles.png',
                    'theme-color' => 'black',
                ],
            ];
        @endphp 
        @foreach ($customers as $customer)
            @switch($customer['theme-color'])
                @case('black')
                    @include('components.customer-card.customer-black', ['theme' => 'light'])
                    @break
                @case('yellow')
                    @include('components.customer-card.customer-yellow', ['theme' => 'light'])
                    @break
                @case('blue')
                    @include('components.customer-card.customer-blue', ['theme' => 'light'])
                    @break
                @default
            @endswitch
        @endforeach
    </section>
    <section id="testimonials-banner" class="testimonials-banner container-2xl mx-auto py-14 md:py-36 px-4">
        <div class="grid grid-cols-1 grid-rows-1 text-center mb-6">
            <h2 class="font-heading text-heading-h3 text-gray-title font-black mb-4">
                ¿Qué dicen de mis <span class="text-blue-500">resultados</span>?
            </h2>
            <p class="text-gray-normal text-md mb-6">
                Cada vez, son más personas las que confían en mis <span class="font-bold">resultados y trabajo</span>. <br>
                Anímate y vamos a construir algo grande <span class="font-bold text-blue-500">¡Juntos!</span>
            </p>
        </div>
        <div class="testimonials-container overflow-x-auto scrollbar flex items-center">
            <div class="testimonial-item flex-none mb-12 first:ml-6 last:mr-6 mr-6 w-10/12 md:w-2/5">
                <div class="testimonial-item-body text-center bg-white rounded-lg py-8 px-8 mb-6">
                    <p class="text-md mb-9 text-gray-normal">
                        Estamos realmente contentos de contar con los servicios profesionales de Diter. Desde la funcionalidad, el asesoramiento y las soluciones precisas en el tiempo, los servicios prestados por Diter son excelentes y el trato es muy cercano.
                    </p>
                </div>
                <div class="testimonial-item-owner -mt-20">
                    <img 
                        src="{{ asset('img/testimonial-expresartemejor.png') }}"
                        alt="Jesús Morales - Expresarte Mejor"  
                        class="testimonial-cover-img mx-auto"
                    >
                    <h1 class="text-md font-bold text-center text-gray-title">Jesús Morales</h1>
                    <p class="text-xs text-center text-gray-light">CEO de ExpresArte Mejor</p>
                </div>
            </div>
            <div class="testimonial-item flex-none mb-12 first:ml-6 last:mr-6 mr-6 w-10/12 md:w-2/5">
                <div class="testimonial-item-body text-center bg-white rounded-lg py-8 px-8 mb-6">
                    <p class="text-md mb-9 text-gray-normal">
                        Todo el proceso de creación de la web fue super rapido y  de manera eficaz. Te ayudan y asesoran en todo el proceso y posterior a la entrega de la web. Realmente recomendables 100% y super confiables
                    </p>
                </div>
                <div class="testimonial-item-owner -mt-20">
                    <img 
                        src="{{ asset('img/testimonial-elricostore.png') }}"
                        alt="Jesús Morales - Expresarte Mejor"  
                        class="testimonial-cover-img mx-auto"
                    >
                    <h1 class="text-md font-bold text-center text-gray-title">Sarita Pariño</h1>
                    <p class="text-xs text-center text-gray-light">CEO de El Rico Store</p>
                </div>
            </div>
            <div class="testimonial-item flex-none mb-12 first:ml-6 last:mr-6 mr-6 w-10/12 md:w-2/5">
                <div class="testimonial-item-body text-center bg-white rounded-lg py-8 px-8 mb-6">
                    <p class="text-md mb-9 text-gray-normal">
                        Super recomendado, cumplió la expectativa de A & K Technical Solution's SAC, aportó ideas adicionales que lograron dar a conocer a los clientes los productos y servicios que  brindamos, contento con los resultados obtenidos.
                    </p>
                </div>
                <div class="testimonial-item-owner -mt-20">
                    <img 
                        src="{{ asset('img/testimonial-aktechnical.png') }}"
                        alt="Jesús Morales - Expresarte Mejor"  
                        class="testimonial-cover-img mx-auto"
                    >
                    <h1 class="text-md font-bold text-center text-gray-title">Arturo Ramirez</h1>
                    <p class="text-xs text-center text-gray-light">Gerente de AK Tech. Solutions</p>
                </div>
            </div>
            <div class="testimonial-item flex-none mb-12 first:ml-6 last:mr-6 mr-6 w-10/12 md:w-2/5">
                <div class="testimonial-item-body text-center bg-white rounded-lg py-8 px-8 mb-6">
                    <p class="text-md mb-9 text-gray-normal">
                        Gracias por la rapidez y eficiencia en la creación de nuestra página web https://aremisse.com/, la cual ha quedado lista antes de tiempo y mucho mejor de lo que nos esperábamos!!
                    </p>
                </div>
                <div class="testimonial-item-owner -mt-20">
                    <img 
                        src="{{ asset('img/testimonial-aremisse.png') }}"
                        alt="Jesús Morales - Expresarte Mejor"  
                        class="testimonial-cover-img mx-auto"
                    >
                    <h1 class="text-md font-bold text-center text-gray-title">Solange Del Río</h1>
                    <p class="text-xs text-center text-gray-light">CEO de Aremisse Lima</p>
                </div>
            </div>
        </div>
    </section>
    <section id="contact-banner" class="contact-banner mx-auto py-14 md:py-36 px-4 bg-white">
        <div class="max-w-6xl mx-auto grid grid-cols-1 md:grid-cols-12">
            <div class="md:col-span-5 grid grid-cols-1 grid-rows-1 text-center md:text-left mb-6 md:mb-0">
                <h2 class="font-heading text-heading-h3 md:text-heading-h2 text-gray-title font-black mb-4">
                    Nos caemos bien 😃 <br> <span class="text-blue-500">Conversemos</span>
                </h2>
                <p class="text-gray-normal text-md mb-6 md:mb-0">
                    Vamos directo al grano y <span class="font-bold text-blue-500">¡trabajemos juntos!</span> <br>
                    <span class="font-bold">Escríbeme un DM</span> y reunámonos para pasar a la acción y <span class="font-bold">construyamos lo que tienes en mente.</span>
                </p>
            </div>
            <div class="md:col-span-6 md:col-start-7 grid grid-cols-2 md:grid-cols-4 grid-rows-2 md:grid-rows-1 mb-8 md:mb-0">
                <div class="self-center text-center mb-8 md:mb-0">
                    <img 
                        class="mx-auto mb-3"
                        src="{{ asset('img/rrss-logo-linkedin.png') }}"
                        alt="Logo LinkedIn"
                    >
                    <a 
                        href="https://www.linkedin.com/in/diter-terrones/"
                        target="_blank"
                        class="font-body text-gray-normal text-sm underline mb-3 md:mb-0"
                        >
                        /in/diter-terrones
                    </a>
                </div>
                <div class="self-center text-center mb-8 md:mb-0">
                    <img 
                        class="mx-auto mb-3"
                        src="{{ asset('img/rrss-logo-facebook.png') }}"
                        alt="Logo Facebook"
                    >
                    <a 
                        href="https://facebook.com/diter.terrones"
                        target="_blank"
                        class="font-body text-gray-normal text-sm underline mb-3 md:mb-0"
                        >
                        /diter.terrones
                    </a>
                </div>
                <div class="self-center text-center mb-8 md:mb-0">
                    <img 
                        class="mx-auto mb-3"
                        src="{{ asset('img/rrss-logo-twitter.png') }}"
                        alt="Logo Twitter"
                    >
                    <a 
                        href="https://twitter.com/diter_terrones"
                        target="_blank"
                        class="font-body text-gray-normal text-sm underline mb-3 md:mb-0"
                        >
                        /@diter_terrones
                    </a>
                </div>
                <div class="self-center text-center mb-8 md:mb-0">
                    <img 
                        class="mx-auto mb-3"
                        src="{{ asset('img/rrss-logo-instagram.png') }}"
                        alt="Logo Instagram"
                    >
                    <a 
                        href="https://instagram.com/diter.terrones/"
                        target="_blank"
                        class="font-body text-gray-normal text-sm underline mb-3 md:mb-0"
                        >
                        /@diter.terrones
                    </a>
                </div>
            </div>
        </div>
    </section>
    <section id="rrss-banner" class="rrss-banner mx-auto py-14 md:py-36 px-4">
        <div class="max-w-6xl mx-auto grid grid-cols-1 grid-rows-1 text-center mb-6">
            <h2 class="font-heading text-heading-h3 md:text-heading-h2 text-gray-title font-black mb-4">
                Mis últimas <span class="text-blue-500">creaciones</span>
            </h2>
            <p class="text-gray-normal text-md mb-6">
                Date una vuelta por mis redes creo <span class="font-bold">contenido ameno y cotidiano.</span> <br>
                <span class="font-bold">Sobre todo comparto mis aprendizajes.</span>
            </p>
        </div>
        <div class="max-w-6xl grid grid-cols-1 md:grid-cols-3 grid-rows-3 md:grid-rows-1 md:gap-x-10 md:mx-auto mb-8">
            <div class="img-container mb-8 rounded-md">
                <blockquote class="instagram-media" data-instgrm-permalink="https://www.instagram.com/p/Cc1l29FoJDg/?utm_source=ig_embed&amp;utm_campaign=loading" data-instgrm-version="14" style=" background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:540px; min-width:326px; padding:0; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px);"><div style="padding:16px;"> <a href="https://www.instagram.com/p/Cc1l29FoJDg/?utm_source=ig_embed&amp;utm_campaign=loading" style=" background:#FFFFFF; line-height:0; padding:0 0; text-items:center; text-decoration:none; width:100%;" target="_blank"> <div style=" display: flex; flex-direction: row; items-items: center;"> <div style="background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 40px; margin-right: 14px; width: 40px;"></div> <div style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center;"> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 100px;"></div> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 60px;"></div></div></div><div style="padding: 19% 0;"></div> <div style="display:block; height:50px; margin:0 auto 12px; width:50px;"><svg width="50px" height="50px" viewBox="0 0 60 60" version="1.1" xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g transform="translate(-511.000000, -20.000000)" fill="#000000"><g><path d="M556.869,30.41 C554.814,30.41 553.148,32.076 553.148,34.131 C553.148,36.186 554.814,37.852 556.869,37.852 C558.924,37.852 560.59,36.186 560.59,34.131 C560.59,32.076 558.924,30.41 556.869,30.41 M541,60.657 C535.114,60.657 530.342,55.887 530.342,50 C530.342,44.114 535.114,39.342 541,39.342 C546.887,39.342 551.658,44.114 551.658,50 C551.658,55.887 546.887,60.657 541,60.657 M541,33.886 C532.1,33.886 524.886,41.1 524.886,50 C524.886,58.899 532.1,66.113 541,66.113 C549.9,66.113 557.115,58.899 557.115,50 C557.115,41.1 549.9,33.886 541,33.886 M565.378,62.101 C565.244,65.022 564.756,66.606 564.346,67.663 C563.803,69.06 563.154,70.057 562.106,71.106 C561.058,72.155 560.06,72.803 558.662,73.347 C557.607,73.757 556.021,74.244 553.102,74.378 C549.944,74.521 548.997,74.552 541,74.552 C533.003,74.552 532.056,74.521 528.898,74.378 C525.979,74.244 524.393,73.757 523.338,73.347 C521.94,72.803 520.942,72.155 519.894,71.106 C518.846,70.057 518.197,69.06 517.654,67.663 C517.244,66.606 516.755,65.022 516.623,62.101 C516.479,58.943 516.448,57.996 516.448,50 C516.448,42.003 516.479,41.056 516.623,37.899 C516.755,34.978 517.244,33.391 517.654,32.338 C518.197,30.938 518.846,29.942 519.894,28.894 C520.942,27.846 521.94,27.196 523.338,26.654 C524.393,26.244 525.979,25.756 528.898,25.623 C532.057,25.479 533.004,25.448 541,25.448 C548.997,25.448 549.943,25.479 553.102,25.623 C556.021,25.756 557.607,26.244 558.662,26.654 C560.06,27.196 561.058,27.846 562.106,28.894 C563.154,29.942 563.803,30.938 564.346,32.338 C564.756,33.391 565.244,34.978 565.378,37.899 C565.522,41.056 565.552,42.003 565.552,50 C565.552,57.996 565.522,58.943 565.378,62.101 M570.82,37.631 C570.674,34.438 570.167,32.258 569.425,30.349 C568.659,28.377 567.633,26.702 565.965,25.035 C564.297,23.368 562.623,22.342 560.652,21.575 C558.743,20.834 556.562,20.326 553.369,20.18 C550.169,20.033 549.148,20 541,20 C532.853,20 531.831,20.033 528.631,20.18 C525.438,20.326 523.257,20.834 521.349,21.575 C519.376,22.342 517.703,23.368 516.035,25.035 C514.368,26.702 513.342,28.377 512.574,30.349 C511.834,32.258 511.326,34.438 511.181,37.631 C511.035,40.831 511,41.851 511,50 C511,58.147 511.035,59.17 511.181,62.369 C511.326,65.562 511.834,67.743 512.574,69.651 C513.342,71.625 514.368,73.296 516.035,74.965 C517.703,76.634 519.376,77.658 521.349,78.425 C523.257,79.167 525.438,79.673 528.631,79.82 C531.831,79.965 532.853,80.001 541,80.001 C549.148,80.001 550.169,79.965 553.369,79.82 C556.562,79.673 558.743,79.167 560.652,78.425 C562.623,77.658 564.297,76.634 565.965,74.965 C567.633,73.296 568.659,71.625 569.425,69.651 C570.167,67.743 570.674,65.562 570.82,62.369 C570.966,59.17 571,58.147 571,50 C571,41.851 570.966,40.831 570.82,37.631"></path></g></g></g></svg></div><div style="padding-top: 8px;"> <div style=" color:#3897f0; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:550; line-height:18px;">Ver esta publicación en Instagram</div></div><div style="padding: 12.5% 0;"></div> <div style="display: flex; flex-direction: row; margin-bottom: 14px; items-items: center;"><div> <div style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(0px) translateY(7px);"></div> <div style="background-color: #F4F4F4; height: 12.5px; transform: rotate(-45deg) translateX(3px) translateY(1px); width: 12.5px; flex-grow: 0; margin-right: 14px; margin-left: 2px;"></div> <div style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(9px) translateY(-18px);"></div></div><div style="margin-left: 8px;"> <div style=" background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 20px; width: 20px;"></div> <div style=" width: 0; height: 0; border-top: 2px solid transparent; border-left: 6px solid #f4f4f4; border-bottom: 2px solid transparent; transform: translateX(16px) translateY(-4px) rotate(30deg)"></div></div><div style="margin-left: auto;"> <div style=" width: 0px; border-top: 8px solid #F4F4F4; border-right: 8px solid transparent; transform: translateY(16px);"></div> <div style=" background-color: #F4F4F4; flex-grow: 0; height: 12px; width: 16px; transform: translateY(-4px);"></div> <div style=" width: 0; height: 0; border-top: 8px solid #F4F4F4; border-left: 8px solid transparent; transform: translateY(-4px) translateX(8px);"></div></div></div> <div style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center; margin-bottom: 24px;"> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 224px;"></div> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 144px;"></div></div></a><p style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; line-height:17px; margin-bottom:0; margin-top:8px; overflow:hidden; padding:8px 0 7px; text-items:center; text-overflow:ellipsis; white-space:nowrap;"><a href="https://www.instagram.com/p/Cc1l29FoJDg/?utm_source=ig_embed&amp;utm_campaign=loading" style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px; text-decoration:none;" target="_blank">Una publicación compartida por ⚡️ Diter Terrones | Web/UI Designer (@diter.terrones)</a></p></div></blockquote> <script async src="//www.instagram.com/embed.js"></script>
            </div>
            <div class="img-container mb-8 rounded-md">
                <blockquote class="instagram-media" data-instgrm-permalink="https://www.instagram.com/p/CcY_G1uMtj0/?utm_source=ig_embed&amp;utm_campaign=loading" data-instgrm-version="14" style=" background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:540px; min-width:326px; padding:0; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px);"><div style="padding:16px;"> <a href="https://www.instagram.com/p/CcY_G1uMtj0/?utm_source=ig_embed&amp;utm_campaign=loading" style=" background:#FFFFFF; line-height:0; padding:0 0; text-items:center; text-decoration:none; width:100%;" target="_blank"> <div style=" display: flex; flex-direction: row; items-items: center;"> <div style="background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 40px; margin-right: 14px; width: 40px;"></div> <div style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center;"> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 100px;"></div> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 60px;"></div></div></div><div style="padding: 19% 0;"></div> <div style="display:block; height:50px; margin:0 auto 12px; width:50px;"><svg width="50px" height="50px" viewBox="0 0 60 60" version="1.1" xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g transform="translate(-511.000000, -20.000000)" fill="#000000"><g><path d="M556.869,30.41 C554.814,30.41 553.148,32.076 553.148,34.131 C553.148,36.186 554.814,37.852 556.869,37.852 C558.924,37.852 560.59,36.186 560.59,34.131 C560.59,32.076 558.924,30.41 556.869,30.41 M541,60.657 C535.114,60.657 530.342,55.887 530.342,50 C530.342,44.114 535.114,39.342 541,39.342 C546.887,39.342 551.658,44.114 551.658,50 C551.658,55.887 546.887,60.657 541,60.657 M541,33.886 C532.1,33.886 524.886,41.1 524.886,50 C524.886,58.899 532.1,66.113 541,66.113 C549.9,66.113 557.115,58.899 557.115,50 C557.115,41.1 549.9,33.886 541,33.886 M565.378,62.101 C565.244,65.022 564.756,66.606 564.346,67.663 C563.803,69.06 563.154,70.057 562.106,71.106 C561.058,72.155 560.06,72.803 558.662,73.347 C557.607,73.757 556.021,74.244 553.102,74.378 C549.944,74.521 548.997,74.552 541,74.552 C533.003,74.552 532.056,74.521 528.898,74.378 C525.979,74.244 524.393,73.757 523.338,73.347 C521.94,72.803 520.942,72.155 519.894,71.106 C518.846,70.057 518.197,69.06 517.654,67.663 C517.244,66.606 516.755,65.022 516.623,62.101 C516.479,58.943 516.448,57.996 516.448,50 C516.448,42.003 516.479,41.056 516.623,37.899 C516.755,34.978 517.244,33.391 517.654,32.338 C518.197,30.938 518.846,29.942 519.894,28.894 C520.942,27.846 521.94,27.196 523.338,26.654 C524.393,26.244 525.979,25.756 528.898,25.623 C532.057,25.479 533.004,25.448 541,25.448 C548.997,25.448 549.943,25.479 553.102,25.623 C556.021,25.756 557.607,26.244 558.662,26.654 C560.06,27.196 561.058,27.846 562.106,28.894 C563.154,29.942 563.803,30.938 564.346,32.338 C564.756,33.391 565.244,34.978 565.378,37.899 C565.522,41.056 565.552,42.003 565.552,50 C565.552,57.996 565.522,58.943 565.378,62.101 M570.82,37.631 C570.674,34.438 570.167,32.258 569.425,30.349 C568.659,28.377 567.633,26.702 565.965,25.035 C564.297,23.368 562.623,22.342 560.652,21.575 C558.743,20.834 556.562,20.326 553.369,20.18 C550.169,20.033 549.148,20 541,20 C532.853,20 531.831,20.033 528.631,20.18 C525.438,20.326 523.257,20.834 521.349,21.575 C519.376,22.342 517.703,23.368 516.035,25.035 C514.368,26.702 513.342,28.377 512.574,30.349 C511.834,32.258 511.326,34.438 511.181,37.631 C511.035,40.831 511,41.851 511,50 C511,58.147 511.035,59.17 511.181,62.369 C511.326,65.562 511.834,67.743 512.574,69.651 C513.342,71.625 514.368,73.296 516.035,74.965 C517.703,76.634 519.376,77.658 521.349,78.425 C523.257,79.167 525.438,79.673 528.631,79.82 C531.831,79.965 532.853,80.001 541,80.001 C549.148,80.001 550.169,79.965 553.369,79.82 C556.562,79.673 558.743,79.167 560.652,78.425 C562.623,77.658 564.297,76.634 565.965,74.965 C567.633,73.296 568.659,71.625 569.425,69.651 C570.167,67.743 570.674,65.562 570.82,62.369 C570.966,59.17 571,58.147 571,50 C571,41.851 570.966,40.831 570.82,37.631"></path></g></g></g></svg></div><div style="padding-top: 8px;"> <div style=" color:#3897f0; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:550; line-height:18px;">Ver esta publicación en Instagram</div></div><div style="padding: 12.5% 0;"></div> <div style="display: flex; flex-direction: row; margin-bottom: 14px; align-items: center;"><div> <div style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(0px) translateY(7px);"></div> <div style="background-color: #F4F4F4; height: 12.5px; transform: rotate(-45deg) translateX(3px) translateY(1px); width: 12.5px; flex-grow: 0; margin-right: 14px; margin-left: 2px;"></div> <div style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(9px) translateY(-18px);"></div></div><div style="margin-left: 8px;"> <div style=" background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 20px; width: 20px;"></div> <div style=" width: 0; height: 0; border-top: 2px solid transparent; border-left: 6px solid #f4f4f4; border-bottom: 2px solid transparent; transform: translateX(16px) translateY(-4px) rotate(30deg)"></div></div><div style="margin-left: auto;"> <div style=" width: 0px; border-top: 8px solid #F4F4F4; border-right: 8px solid transparent; transform: translateY(16px);"></div> <div style=" background-color: #F4F4F4; flex-grow: 0; height: 12px; width: 16px; transform: translateY(-4px);"></div> <div style=" width: 0; height: 0; border-top: 8px solid #F4F4F4; border-left: 8px solid transparent; transform: translateY(-4px) translateX(8px);"></div></div></div> <div style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center; margin-bottom: 24px;"> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 224px;"></div> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 144px;"></div></div></a><p style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; line-height:17px; margin-bottom:0; margin-top:8px; overflow:hidden; padding:8px 0 7px; text-align:center; text-overflow:ellipsis; white-space:nowrap;"><a href="https://www.instagram.com/p/CcY_G1uMtj0/?utm_source=ig_embed&amp;utm_campaign=loading" style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px; text-decoration:none;" target="_blank">Una publicación compartida por ⚡️ Diter Terrones | Web/UI Designer (@diter.terrones)</a></p></div></blockquote> <script async src="//www.instagram.com/embed.js"></script>
            </div>
            <div class="img-container mb-8 rounded-md">
                <blockquote class="instagram-media" data-instgrm-permalink="https://www.instagram.com/p/Cb06VP5phe_/?utm_source=ig_embed&amp;utm_campaign=loading" data-instgrm-version="14" style=" background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:540px; min-width:326px; padding:0; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px);"><div style="padding:16px;"> <a href="https://www.instagram.com/p/Cb06VP5phe_/?utm_source=ig_embed&amp;utm_campaign=loading" style=" background:#FFFFFF; line-height:0; padding:0 0; text-align:center; text-decoration:none; width:100%;" target="_blank"> <div style=" display: flex; flex-direction: row; align-items: center;"> <div style="background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 40px; margin-right: 14px; width: 40px;"></div> <div style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center;"> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 100px;"></div> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 60px;"></div></div></div><div style="padding: 19% 0;"></div> <div style="display:block; height:50px; margin:0 auto 12px; width:50px;"><svg width="50px" height="50px" viewBox="0 0 60 60" version="1.1" xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g transform="translate(-511.000000, -20.000000)" fill="#000000"><g><path d="M556.869,30.41 C554.814,30.41 553.148,32.076 553.148,34.131 C553.148,36.186 554.814,37.852 556.869,37.852 C558.924,37.852 560.59,36.186 560.59,34.131 C560.59,32.076 558.924,30.41 556.869,30.41 M541,60.657 C535.114,60.657 530.342,55.887 530.342,50 C530.342,44.114 535.114,39.342 541,39.342 C546.887,39.342 551.658,44.114 551.658,50 C551.658,55.887 546.887,60.657 541,60.657 M541,33.886 C532.1,33.886 524.886,41.1 524.886,50 C524.886,58.899 532.1,66.113 541,66.113 C549.9,66.113 557.115,58.899 557.115,50 C557.115,41.1 549.9,33.886 541,33.886 M565.378,62.101 C565.244,65.022 564.756,66.606 564.346,67.663 C563.803,69.06 563.154,70.057 562.106,71.106 C561.058,72.155 560.06,72.803 558.662,73.347 C557.607,73.757 556.021,74.244 553.102,74.378 C549.944,74.521 548.997,74.552 541,74.552 C533.003,74.552 532.056,74.521 528.898,74.378 C525.979,74.244 524.393,73.757 523.338,73.347 C521.94,72.803 520.942,72.155 519.894,71.106 C518.846,70.057 518.197,69.06 517.654,67.663 C517.244,66.606 516.755,65.022 516.623,62.101 C516.479,58.943 516.448,57.996 516.448,50 C516.448,42.003 516.479,41.056 516.623,37.899 C516.755,34.978 517.244,33.391 517.654,32.338 C518.197,30.938 518.846,29.942 519.894,28.894 C520.942,27.846 521.94,27.196 523.338,26.654 C524.393,26.244 525.979,25.756 528.898,25.623 C532.057,25.479 533.004,25.448 541,25.448 C548.997,25.448 549.943,25.479 553.102,25.623 C556.021,25.756 557.607,26.244 558.662,26.654 C560.06,27.196 561.058,27.846 562.106,28.894 C563.154,29.942 563.803,30.938 564.346,32.338 C564.756,33.391 565.244,34.978 565.378,37.899 C565.522,41.056 565.552,42.003 565.552,50 C565.552,57.996 565.522,58.943 565.378,62.101 M570.82,37.631 C570.674,34.438 570.167,32.258 569.425,30.349 C568.659,28.377 567.633,26.702 565.965,25.035 C564.297,23.368 562.623,22.342 560.652,21.575 C558.743,20.834 556.562,20.326 553.369,20.18 C550.169,20.033 549.148,20 541,20 C532.853,20 531.831,20.033 528.631,20.18 C525.438,20.326 523.257,20.834 521.349,21.575 C519.376,22.342 517.703,23.368 516.035,25.035 C514.368,26.702 513.342,28.377 512.574,30.349 C511.834,32.258 511.326,34.438 511.181,37.631 C511.035,40.831 511,41.851 511,50 C511,58.147 511.035,59.17 511.181,62.369 C511.326,65.562 511.834,67.743 512.574,69.651 C513.342,71.625 514.368,73.296 516.035,74.965 C517.703,76.634 519.376,77.658 521.349,78.425 C523.257,79.167 525.438,79.673 528.631,79.82 C531.831,79.965 532.853,80.001 541,80.001 C549.148,80.001 550.169,79.965 553.369,79.82 C556.562,79.673 558.743,79.167 560.652,78.425 C562.623,77.658 564.297,76.634 565.965,74.965 C567.633,73.296 568.659,71.625 569.425,69.651 C570.167,67.743 570.674,65.562 570.82,62.369 C570.966,59.17 571,58.147 571,50 C571,41.851 570.966,40.831 570.82,37.631"></path></g></g></g></svg></div><div style="padding-top: 8px;"> <div style=" color:#3897f0; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:550; line-height:18px;">Ver esta publicación en Instagram</div></div><div style="padding: 12.5% 0;"></div> <div style="display: flex; flex-direction: row; margin-bottom: 14px; align-items: center;"><div> <div style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(0px) translateY(7px);"></div> <div style="background-color: #F4F4F4; height: 12.5px; transform: rotate(-45deg) translateX(3px) translateY(1px); width: 12.5px; flex-grow: 0; margin-right: 14px; margin-left: 2px;"></div> <div style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(9px) translateY(-18px);"></div></div><div style="margin-left: 8px;"> <div style=" background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 20px; width: 20px;"></div> <div style=" width: 0; height: 0; border-top: 2px solid transparent; border-left: 6px solid #f4f4f4; border-bottom: 2px solid transparent; transform: translateX(16px) translateY(-4px) rotate(30deg)"></div></div><div style="margin-left: auto;"> <div style=" width: 0px; border-top: 8px solid #F4F4F4; border-right: 8px solid transparent; transform: translateY(16px);"></div> <div style=" background-color: #F4F4F4; flex-grow: 0; height: 12px; width: 16px; transform: translateY(-4px);"></div> <div style=" width: 0; height: 0; border-top: 8px solid #F4F4F4; border-left: 8px solid transparent; transform: translateY(-4px) translateX(8px);"></div></div></div> <div style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center; margin-bottom: 24px;"> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 224px;"></div> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 144px;"></div></div></a><p style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; line-height:17px; margin-bottom:0; margin-top:8px; overflow:hidden; padding:8px 0 7px; text-align:center; text-overflow:ellipsis; white-space:nowrap;"><a href="https://www.instagram.com/p/Cb06VP5phe_/?utm_source=ig_embed&amp;utm_campaign=loading" style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px; text-decoration:none;" target="_blank">Una publicación compartida por ⚡️ Diter Terrones | Web/UI Designer (@diter.terrones)</a></p></div></blockquote> <script async src="//www.instagram.com/embed.js"></script>
            </div>
        </div>
    </section>
    <section id="curiosity-banner" class="curiosity-banner mx-auto py-14 md:pb-0 px-4 bg-black-400">
        <div class="max-w-6xl mx-auto grid grid-cols-1 md:grid-cols-2 grid-rows-1">
            <div class="text-center md:text-left mb-6 md:mb-0">
                <h2 class="font-heading text-heading-h3 md:text-heading-h2 text-white font-black mb-4">
                    ¿Quieres saber? <br> <span class="text-yellow-500">Curiosidades</span>
                </h2>
                <img 
                    src="{{ asset('img/diter-curiosity.png') }}"
                    alt="Diter - Curiosidades"  
                    class="curiosity-cover-img ml-0 hidden md:block"
                >
            </div>
            <div class="mb-8 font-light text-center md:text-left">
                <p class="text-white text-md mb-6">
                    Algunas curiosidades sobre mí 😏
                </p>
                <ul class="list-disc mx-8 md:mx-auto mb-10 text-left">
                    <li class="text-white mb-6">
                        Gané un reto de lectura en el 2020, en esa oportunidad resumí el extraordinario libro <span class="font-bold text-white">"Empieza con el Por Qué"</span>, mira <a href="https://www.youtube.com/watch?v=sPOwmkIa6Bw&t=1275s" class="text-yellow-500">el video aquí</a>
                    </li>
                    <li class="text-white mb-6">
                        En mi época de colegio (2011), aprendí sobre <span class="font-bold text-white">diseño industrial</span> y eso impulsó mi alma y carrera de diseñador.
                    </li>
                    <li class="text-white mb-6">
                        Trabajé <span class="font-bold text-white">+4 años como Web Developer</span> y aprendí todo el flujo de desarrollo web: HTML, CSS, JavaScript, PHP, Laravel y hasta ¡Configurar servidores con AWS! 🤯
                    </li>
                    <li class="text-white mb-6">
                        Por alguna razón desde pequeño, siempre tuve <span class="font-bold text-white">buen ojo para el dibujo </span>, las perspectivas, proyecciones, etc. 📐📏
                    </li>
                </ul>
                <a href="#" class="rounded-full bg-yellow-500 text-black-500 py-2 px-4 font-bold w-fit mx-auto">
                    ☕ ¿Quieres conversar? Me gusta el café
                </a>
            </div>
        </div>

    </section>
    <nav class="nav sticky bottom-0 z-10 w-full mx-auto bg-black-400 text-xs font-bold font-heading md:hidden">
        <ul class="flex items-center justify-evenly h-[40px] space-x-2 py-3">
            <li class="nav-item">
                <a href="#about-banner" class="nav-item__link text-black-50">Sobre mí</a>
            </li>
            <li class="nav-item">
                <a href="#services-banner" class="nav-item__link text-black-50">Qué hago</a>
            </li>
            <li class="nav-item">
                <a href="#customers-banner" class="nav-item__link text-black-50">Proyectos</a>
            </li>
            <li class="nav-item">
                <a href="#testimonials-banner" class="nav-item__link text-black-50">Resultados</a>
            </li>
        </ul>
    </nav>
@endsection


<script>
    document.addEventListener('DOMContentLoaded', (ed) => {
        const nav = document.querySelectorAll('.nav-item__link')
        nav.forEach(function(navItem) {
            navItem.addEventListener('click', (e) => {
                const current = document.querySelector('.nav-item__link.active')
                if (current) {
                    current.classList.remove('active')
                }
                e.target.classList.add('active')
            })
        })
    })
</script>

@section('footer')
    @parent
@endsection