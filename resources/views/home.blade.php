@extends('layouts.app')
 
@section('title', 'Page Title')
 
@section('header')
    @parent
@endsection
 
@section('content')

    <section class="home-banner container mx-auto">
        
        <div class="grid grid-cols-1 md:grid-cols-2 grid-rows-1 mb-8">
            <div class="self-center text-center">
                <h2 class="font-heading text-xl">¡Hola! Soy</h2>
                <h1 class="font-heading text-heading-h2 text-gray-title font-black">DITER <br> TERRONES</h1>
            </div>
            <div class="self-center text-center">
                <p class="font-heading text-blue-400 text-md font-black mb-3">
                    Diseñador Web & <br> Vue Frontend Developer
                </p>
                <p class="font-body text-md">
                    Diseño y desarrollo experiencias <span class="font-bold">visualmente <br>atractivas</span> y funcionales en la web
                </p>
            </div>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-1 grid-rows-1">
            <div class="img-container">
                <img 
                    src="{{ asset('img/diter-main-banner.png') }}" 
                    alt="Diter Main Cover" 
                    class="banner-cover mx-auto"
                >
            </div>
        </div>
    </section>
    <section class="about-banner container mx-auto py-14 px-4 bg-white">
        <div class="grid grid-cols-1 grid-rows-1 text-center mb-6">
            <h2 class="font-heading text-heading-h3 text-gray-title font-black mb-4">Sobre <span class="text-blue-500">mí</span></h2>
            <a href="#" class="rounded-full bg-yellow-500 text-black-500 py-2 px-4 font-bold w-fit mx-auto">Descarga mi CV</a>
        </div>
        <div class="grid grid-cols-1 grid-rows-1 text-center">
            <div class="about-copy">
                <p class="text-gray-normal text-md mb-6">
                    Soy bachiller en <span class="font-bold">Ingeniería de Sistemas</span>, apasionado por la tecnología y el diseño de interfaces web.
                    Cuento con +5 años de experticia como <span class="font-bold">Frontend Developer</span>, ayudo a emprendedores y empresas a tener presencia digital e incrementar el alcance de lo que ofrecen combinando mis habilidades de <span class="font-bold">Diseño UI</span> con la <span class="font-bold">construcción de sitios</span> o aplicaciones web.
                    Si te gusta mi perfil, <span class="font-bold text-blue-500">¡charlemos!</span>
                </p>
                <h3 class="font-heading text-heading-h5 font-bold mb-6">💻 Tech Skills ></h3>
                <h3 class="font-heading text-heading-h5 font-bold mb-8">🔥 Soft Skills ></h3>
            </div>
            <div class="about-cover">
                <div class="img-container ">
                    <img 
                        src="{{ asset('img/diter-aboutme.png') }}"
                        alt="Diter About Me"  
                        class="about-cover-img mx-auto"
                    >
                </div>
            </div>
        </div>
    </section>
    <section class="services-banner container mx-auto py-14 px-4">
        <div class="grid grid-cols-1 grid-rows-1 text-center mb-6">
            <h2 class="font-heading text-heading-h3 text-gray-title font-black mb-4">
                ¿Qué <span class="text-blue-500">hago</span> bien?
            </h2>
            <p class="text-gray-normal text-md mb-6">
                Tengo alma de <span class="font-bold">designer</span> y experiencia de <span class="font-bold">developer</span>. <br>
                Uno lo mejor de los dos mundos: el <span class="font-bold">diseño y desarrollo de soluciones web <span class="font-bold text-blue-500">efectivas</span></span>.
            </p>
        </div>
        <div class="card-service mb-8 py-12 px-10 mx-4 bg-gradient-to-r from-black-400 to-black-500 rounded-lg">
            <div class="grid grid-cols-1 grid-rows-1">
                <div class="card-service-body text-center">
                    <h2 class="font-heading text-heading-h4 font-black mb-9 text-white">Diseño Web</h2>
                    <p class="text-md mb-9 text-white/75">
                        Investigación y diseño las interfaces de usuario (ui) para tu sitio o aplicación web. Wireframes, Mockups y prototipado.
                    </p>
                    <a href="#" class="rounded-full bg-yellow-300 text-black-500 py-2 px-4 font-heading font-bold w-fit mx-auto mb-9">
                        Diseña mi web >
                    </a>
                </div>
                <div class="card-service-cover mt-12">
                    <img 
                        src="{{ asset('img/service-web-design.png') }}"
                        alt="Diter About Me"  
                        class="service-cover-img mx-auto"
                    >
                </div>
            </div>
        </div>
        <div class="card-service mb-12 py-12 px-10 mx-4 bg-gradient-to-r from-blue-400 to-blue-600 rounded-lg">
            <div class="grid grid-cols-1 grid-rows-1">
                <div class="card-service-body text-center">
                    <h2 class="font-heading text-heading-h4 font-black mb-9 text-white">Desarrollo Web</h2>
                    <p class="text-md mb-9 text-white/75">
                        Construyo tu sitio web, e-Commerce, landing page y portafolios a medida con el toque único que mereces.
                    </p>
                    <a href="#" class="rounded-full bg-yellow-500 text-black-500 py-2 px-4 font-heading font-bold w-fit mx-auto mb-9">
                        Construye mi web >
                    </a>
                </div>
                <div class="card-service-cover mt-12">
                    <img 
                        src="{{ asset('img/service-web-development.png') }}"
                        alt="Diter About Me"  
                        class="service-cover-img mx-auto"
                    >
                </div>
            </div>
        </div>
        <div class="card-service mb-12 py-12 px-10 mx-4 bg-gradient-to-r from-yellow-500 to-yellow-600 rounded-lg">
            <div class="grid grid-cols-1 grid-rows-1">
                <div class="card-service-body text-center">
                    <h2 class="font-heading text-heading-h4 font-black mb-9 text-black-500">Aplicaciones Web</h2>
                    <p class="text-md mb-9 text-gray-normal">
                        Si quieres desarrollar una aplicación o sistema para tu negocio. Escalable y personalizado, hecho a la medida.
                    </p>
                    <a href="#" class="rounded-full bg-yellow-200 text-black-500 py-2 px-4 font-heading font-bold w-fit mx-auto mb-9">
                        Desarrolla mi app web >
                    </a>
                </div>
                <div class="card-service-cover mt-12">
                    <img 
                        src="{{ asset('img/service-web-applications.png') }}"
                        alt="Diter About Me"  
                        class="service-cover-img mx-auto"
                    >
                </div>
            </div>
        </div>
    </section>
    <section class="customers-banner container mx-auto py-14 px-4 bg-white">
        <div class="grid grid-cols-1 grid-rows-1 text-center mb-6">
            <h2 class="font-heading text-heading-h3 text-gray-title font-black mb-4">
                Mi <span class="text-blue-500">trabajo</span>
            </h2>
            <p class="text-gray-normal text-md mb-6">
                Un pequeño recorrido de los proyectos para clientes con los que logramos estos grandes resultados. <br>
                <span class="font-bold text-blue-500">¡Compruébalo!</span>
            </p>
        </div>
        {{-- Customers --}}
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
                    @include('components.customer-card.customer-black')
                    @break
                @case('yellow')
                    @include('components.customer-card.customer-yellow')
                    @break
                @case('blue')
                    @include('components.customer-card.customer-blue')
                    @break
                @default
            @endswitch
        @endforeach
    </section>
    <section class="testimonials-banner container mx-auto py-14 px-4">
        <div class="grid grid-cols-1 grid-rows-1 text-center mb-6">
            <h2 class="font-heading text-heading-h3 text-gray-title font-black mb-4">
                ¿Qué dicen de mis <span class="text-blue-500">resultados</span>?
            </h2>
            <p class="text-gray-normal text-md mb-6">
                Cada vez, son más personas las que confían en mis <span class="font-bold">resultados y trabajo</span>.
                Anímate y vamos a construir algo grande <span class="font-bold text-blue-500">¡Juntos!</span>
            </p>
        </div>
        <div class="testimonials-container overflow-x-auto no-scrollbar flex items-center">
            <div class="testimonial-item flex-none mb-12 first:ml-6 last:mr-6 mr-6 w-11/12">
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
            <div class="testimonial-item flex-none mb-12 first:ml-6 last:mr-6 mr-6 w-11/12">
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
            <div class="testimonial-item flex-none mb-12 first:ml-6 last:mr-6 mr-6 w-11/12">
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
            <div class="testimonial-item flex-none mb-12 first:ml-6 last:mr-6 mr-6 w-11/12">
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
    <section class="contact-banner container mx-auto py-14 px-4 bg-white">
        <div class="grid grid-cols-1 grid-rows-1 text-center mb-6">
            <h2 class="font-heading text-heading-h3 text-gray-title font-black mb-4">
                Nos caemos bien <br> <span class="text-blue-500">Conversemos</span>
            </h2>
            <p class="text-gray-normal text-md mb-6">
                Vamos directo al grano y <span class="font-bold text-blue-500">¡trabajemos juntos!</span>
                <span class="font-bold">Escríbeme un DM</span> y reunámonos para pasar a la acción y <span class="font-bold">construyamos lo que tienes en mente.</span>
            </p>
        </div>
        <div class="grid grid-cols-2 grid-rows-2 mb-8">
            <div class="self-center text-center mb-8">
                <img 
                    class="mx-auto mb-3"
                    src="{{ asset('img/rrss-logo-linkedin.png') }}"
                    alt="Logo LinkedIn"
                >
                <a 
                    href="https://www.linkedin.com/in/diter-terrones/"
                    target="_blank"
                    class="font-body text-gray-normal text-md underline mb-3"
                    >
                    /in/diter-terrones
                </a>
            </div>
            <div class="self-center text-center mb-8">
                <img 
                    class="mx-auto mb-3"
                    src="{{ asset('img/rrss-logo-facebook.png') }}"
                    alt="Logo Facebook"
                >
                <a 
                    href="https://facebook.com/diter.terrones"
                    target="_blank"
                    class="font-body text-gray-normal text-md underline mb-3"
                    >
                    /diter.terrones
                </a>
            </div>
            <div class="self-center text-center mb-8">
                <img 
                    class="mx-auto mb-3"
                    src="{{ asset('img/rrss-logo-twitter.png') }}"
                    alt="Logo Twitter"
                >
                <a 
                    href="https://twitter.com/diter_terrones"
                    target="_blank"
                    class="font-body text-gray-normal text-md underline mb-3"
                    >
                    @diter_terrones
                </a>
            </div>
            <div class="self-center text-center mb-8">
                <img 
                    class="mx-auto mb-3"
                    src="{{ asset('img/rrss-logo-instagram.png') }}"
                    alt="Logo Instagram"
                >
                <a 
                    href="https://instagram.com/diter.terrones/"
                    target="_blank"
                    class="font-body text-gray-normal text-md underline mb-3"
                    >
                    @diter.terrones
                </a>
            </div>
        </div>
    </section>

    {{-- <nav class="nav sticky top-5 z-10 w-2/3 mx-auto bg-white rounded-full text-xl font-bold font-heading">
        <ul class="flex items-center justify-evenly h-[80px] space-x-2 py-3">
            <li class="nav-item">
                <a href="" class="nav-item__link">SOBRE MÍ</a>
            </li>
            <li class="nav-item">
                <a href="" class="nav-item__link">QUÉ HAGO</a>
            </li>
            <li class="nav-item">
                <a href="" class="nav-item__link">PROYECTOS</a>
            </li>
            <li class="nav-item">
                <a href="" class="nav-item__link">TRABAJEMOS</a>
            </li>
        </ul>
    </nav> --}}
@endsection

@section('footer')
    @parent
@endsection