@extends('layouts.app')
 
@section('title', 'Page Title')
 
@section('header')
    @parent
@endsection
 
@section('content')


@php
$skills = [
    'tech' => [
        [
            'logo' => 'img/skills-figma.png',
            'label' => 'Figma'
        ],
        [
            'logo' => 'img/skills-adobexd.png',
            'label' => 'Adobe Xd'
        ],
        [
            'logo' => 'img/skills-laravel.png',
            'label' => 'Laravel'
        ],
        [
            'logo' => 'img/skills-php.png',
            'label' => 'PHP'
        ],
        [
            'logo' => 'img/skills-wordpress.png',
            'label' => 'Wordpress'
        ],
        [
            'logo' => 'img/skills-html.png',
            'label' => 'HTML'
        ],
        [
            'logo' => 'img/skills-css.png',
            'label' => 'CSS'
        ],
        [
            'logo' => 'img/skills-javascript.png',
            'label' => 'JavaScript'
        ],
        [
            'logo' => 'img/skills-vuejs.png',
            'label' => 'Vue.js'
        ],
        [
            'logo' => 'img/skills-git.png',
            'label' => 'Git'
        ],
    ],
    'soft' => [
        [
            'logo' => 'img/skills-vibes.png',
            'label' => 'GoodVibes'
        ],
        [
            'logo' => 'img/skills-disciplined.png',
            'label' => 'Disciplinado'
        ],
        [
            'logo' => 'img/skills-coworker.png',
            'label' => 'Empático'
        ],
        [
            'logo' => 'img/skills-focus.png',
            'label' => 'Enfocado'
        ],
        [
            'logo' => 'img/skills-creative.png',
            'label' => 'Creativo'
        ],
        [
            'logo' => 'img/skills-openmind.png',
            'label' => 'Open Mind'
        ],
        [
            'logo' => 'img/skills-listener.png',
            'label' => 'Escuchador'
        ],
        [
            'logo' => 'img/skills-communicator.png',
            'label' => 'Comunicador'
        ],
    ]
];
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
$testimonials = [
    [
        'quote' => 'Estamos realmente contentos de contar con los servicios profesionales de Diter. Desde la funcionalidad, el asesoramiento y las soluciones precisas en el tiempo, los servicios prestados por Diter son excelentes y el trato es muy cercano.',
        'owner_photo' => 'img/testimonial-expresartemejor.png',
        'owner_name' => 'Jesús Morales',
        'owner_title' => 'CEO de ExpresArte Mejor',
    ],
    [
        'quote' => 'Todo el proceso de creación de la web fue super rapido y  de manera eficaz. Te ayudan y asesoran en todo el proceso y posterior a la entrega de la web. Realmente recomendables 100% y super confiables.',
        'owner_photo' => 'img/testimonial-elricostore.png',
        'owner_name' => 'Sarita Pariño',
        'owner_title' => 'CEO de El Rico Store',
    ],
    [
        'quote' => 'Gracias por la rapidez y eficiencia en la creación de nuestra página web https://aremisse.com/, la cual ha quedado lista antes de tiempo y mucho mejor de lo que nos esperábamos!!',
        'owner_photo' => 'img/testimonial-aremisse.png',
        'owner_name' => 'Solange Del Río',
        'owner_title' => 'CEO de Aremisse Lima',
    ],
    [
        'quote' => 'Super recomendado, cumplió la expectativa de A & K Technical Solution\'s SAC, aportó ideas adicionales que lograron dar a conocer a los clientes los productos y servicios que  brindamos, contento con los resultados obtenidos.',
        'owner_photo' => 'img/testimonial-aktechnical.png',
        'owner_name' => 'Arturo Ramirez',
        'owner_title' => 'Gerente de AK Tech. Solutions',
    ],
];
@endphp 

    <section id="main-banner" class="main-banner max-w-6xl flex md:block justify-center h-screen md:h-auto mx-auto -mt-[90px] md:mt-0">
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
                    Web Designer & <br> Frontend Developer
                </p>
                <p class="font-body text-md">
                    Diseño y desarrollo experiencias <span class="font-bold">visualmente <br>atractivas</span> y funcionales en la web
                </p>
                <a 
                    href="#about-banner"
                    class="md:hidden block mt-6">
                    <img 
                        src="{{ asset('icon/icon-arrow-yellow.svg') }}" 
                        alt="Arrow" 
                        class="mx-auto"
                    >
                </a>
            </div>
        </div>
        <div class="md:grid grid-cols-1 grid-rows-1 hidden -mt-[100px]">
            <div class="img-container relative">
                <img 
                    src="{{ asset('img/diter-main-banner.png') }}" 
                    alt="Diter Main Cover" 
                    width="650"
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
    <nav class="hidden md:block nav sticky top-5 z-[100] w-2/3 bg-black-500 shadow-main-menu shadow-black-200/40 rounded-full font-bold font-heading mx-auto -mt-5 mb-10">
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
    <section id="about-banner" class="about-banner py-14 md:pt-36 px-4 bg-white">
        <div class="max-w-6xl mx-auto grid grid-cols-1 md:grid-cols-2 grid-rows-1 text-center md:text-left mb-6 md:mb-10">
            <h2 class="font-heading text-heading-h3 md:text-heading-h2 text-gray-title font-black mb-4">
                Sobre <span class="font-heading text-blue-500">mí</span>
            </h2>
            <div class="flex items-center justify-end">
                <a href="https://drive.google.com/file/d/16yQSyxGjjV5T6CR06btOvPWBfczOL1Ng/view?usp=sharing" class="rounded-full bg-yellow-500 text-black-500 py-2 px-4 font-bold w-fit mx-auto md:mx-0">
                    Descarga mi CV
                </a>
            </div>
        </div>
        <div class="max-w-6xl mx-auto grid grid-cols-1 md:grid-cols-12 grid-rows-1 text-center md:text-left">
            <div class="about-copy md:col-span-8 flex flex-col justify-center">
                <p class="text-gray-normal text-md mb-6">
                    Soy bachiller en <span class="font-bold">Ingeniería de Sistemas</span>, apasionado por la tecnología y el diseño de interfaces web. <br>
                    Cuento con +5 años de experticia como <span class="font-bold">Frontend Developer</span>, ayudo a emprendedores y empresas a tener presencia digital e incrementar el alcance de lo que ofrecen combinando mis habilidades de <span class="font-bold">Diseño UI</span> con la <span class="font-bold">construcción de sitios</span> o aplicaciones web.
                </p>
                <p class="text-gray-normal text-md mb-6">
                    Si te gusta mi perfil, <span class="font-bold text-blue-500">¡charlemos!</span>
                </p>
                <div class="grid grid-cols-1 md:grid-cols-2 mb-8 md:mb-0">
                    <div class="transition hover:bg-yellow-50 md:-ml-5">
                        <!-- header -->
                        <div class="accordion-header cursor-pointer transition flex justify-center md:justify-start space-x-3 px-5 items-center h-16">
                            <h3 class="font-heading text-heading-h5 font-bold">
                                <img src="{{ asset('icon/icon-flash.svg') }}" alt="flash" class="inline-block"> Tech Skills
                            </h3>
                            <img 
                                src="{{ asset('icon/icon-arrow.svg') }}" 
                                alt="Arrow" 
                                class="accordion-selector inline-block mx-auto"
                            >
                        </div>
                        <!-- Content -->
                        <div class="accordion-body bg-white px-5 pt-0 overflow-hidden max-h-0">
                            <div class="flex flex-row flex-wrap">
                                @foreach ($skills['tech'] as $skill)
                                    <div class="skills-item px-4 pt-5 pb-3">
                                        <img src="{{ asset($skill['logo']) }}" alt="{{ $skill['label'] }}" class="max-w-[40px] mx-auto">
                                        <p class="text-xs text-gray-light font-body whitespace-nowrap text-center mt-1">
                                            {{ $skill['label'] }}
                                        </p>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
        
                    <div class="transition hover:bg-blue-50">
                        <!-- header -->
                        <div class="accordion-header cursor-pointer transition flex justify-center md:justify-start space-x-3 px-5 items-center h-16">
                            <h3 class="font-heading text-heading-h5 font-bold">
                                <img src="{{ asset('icon/icon-fire.svg') }}" alt="flash" class="inline-block"> Soft Skills
                            </h3>
                            <img 
                                src="{{ asset('icon/icon-arrow.svg') }}" 
                                alt="Arrow" 
                                class="accordion-selector inline-block mx-auto"
                            >
                        </div>
                        <!-- Content -->
                        <div class="accordion-body bg-white px-5 pt-0 overflow-hidden max-h-0">
                            <div class="flex flex-row flex-wrap">
                                @foreach ($skills['soft'] as $skill)
                                    <div class="skills-item px-4 pt-5 pb-3">
                                        <img src="{{ asset($skill['logo']) }}" alt="{{ $skill['label'] }}" class="max-w-[40px] mx-auto">
                                        <p class="text-xs text-gray-light font-body whitespace-nowrap text-center mt-1">
                                            {{ $skill['label'] }}
                                        </p>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="about-cover md:col-span-4">
                <div class="img-container ">
                    <img 
                        loading="lazy"
                        width="300"
                        src="{{ asset('img/diter-aboutme.png') }}"
                        alt="Diter About Me"  
                        class="about-cover-img mx-auto w-[300px] md:mr-0"
                    >
                </div>
            </div>
        </div>
    </section>
    <section id="services-banner" class="services-banner container-2xl mx-auto py-14 md:pt-36 px-4">
        <div class="grid grid-cols-1 grid-rows-1 text-center mb-6">
            <h2 class="font-heading text-heading-h3 md:text-heading-h2 text-gray-title font-black mb-4">
                ¿Qué <span class="font-heading text-blue-500">hago</span> bien?
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
    <section id="customers-banner" class="customers-banner container-2xl mx-auto py-14 md:pt-36 px-4">
        <div class="grid grid-cols-1 grid-rows-1 text-center mb-6">
            <h2 class="font-heading text-heading-h3 text-gray-title font-black mb-4">
                Mi <span class="font-heading text-blue-500">trabajo</span>
            </h2>
            <p class="text-gray-normal text-md mb-6">
                Un pequeño recorrido de los proyectos para clientes con los que logramos estos grandes resultados. <br>
                <span class="font-bold text-blue-500">¡Compruébalo!</span>
            </p>
        </div>
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
    <section id="testimonials-banner" class="testimonials-banner container-2xl mx-auto py-14 md:pt-36 px-4">
        <div class="grid grid-cols-1 grid-rows-1 text-center mb-6">
            <h2 class="font-heading text-heading-h3 text-gray-title font-black mb-4">
                ¿Qué dicen de mis <span class="font-heading text-blue-500">resultados</span>?
            </h2>
            <p class="text-gray-normal text-md mb-6">
                Cada vez, son más personas las que confían en <span class="font-bold">mi trabajo</span>. <br>
                Anímate y vamos a construir algo grande <span class="font-bold text-blue-500">¡Juntos!</span>
            </p>
        </div>
        <div class="testimonials-container max-w-6xl mx-auto overflow-x-auto scrollbar flex items-center">
            @foreach ($testimonials as $testimony)
                <div class="testimonial-item flex-none mb-12 first:ml-6 last:mr-6 mr-6 w-10/12 md:w-2/5">
                    <div class="testimonial-item-body text-center bg-white rounded-lg py-8 px-8 mb-6">
                        <p class="text-md mb-9 text-gray-normal">
                            {{ $testimony['quote'] }}
                        </p>
                    </div>
                    <div class="testimonial-item-owner -mt-20">
                        <img 
                            loading="lazy"
                            width="120"
                            src="{{ asset($testimony['owner_photo']) }}"
                            alt="{{ $testimony['owner_name'] }}"  
                            class="testimonial-cover-img mx-auto"
                        >
                        <h1 class="text-md font-bold text-center text-gray-title">{{ $testimony['owner_name'] }}</h1>
                        <p class="text-xs text-center text-gray-light">{{ $testimony['owner_title'] }}</p>
                    </div>
                </div>
            @endforeach
            </div>
        </div>
    </section>
    <section id="contact-banner" class="contact-banner mx-auto py-14 md:pt-36 px-4 bg-white">
        <div class="max-w-6xl mx-auto grid grid-cols-1 md:grid-cols-12">
            <div class="md:col-span-5 grid grid-cols-1 grid-rows-1 text-center md:text-left mb-6 md:mb-0">
                <h2 class="font-heading text-heading-h3 md:text-heading-h2 text-gray-title font-black mb-4">
                    Nos caemos bien 😃 <br> <span class="font-heading text-blue-500">Conversemos</span>
                </h2>
                <p class="text-gray-normal text-md mb-6 md:mb-0">
                    Vamos directo al grano y <span class="font-bold text-blue-500">¡trabajemos juntos!</span> <br>
                    <span class="font-bold">Escríbeme un DM</span> y reunámonos para pasar a la acción y <span class="font-bold">construyamos lo que tienes en mente.</span>
                </p>
            </div>
            <div class="md:col-span-6 md:col-start-7 grid grid-cols-2 md:grid-cols-4 grid-rows-2 md:grid-rows-1 mb-8 md:mb-0">
                <div class="self-center text-center mb-8 md:mb-0">
                    <img 
                        loading="lazy"
                        class="mx-auto mb-3"
                        width="65"
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
                        loading="lazy"
                        class="mx-auto mb-3"
                        width="65"
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
                        loading="lazy"
                        class="mx-auto mb-3"
                        width="65"
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
                        loading="lazy"
                        class="mx-auto mb-3"
                        width="65"
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
    <section id="rrss-banner" class="rrss-banner mx-auto py-14 md:pt-36 px-4">
        <div class="max-w-6xl mx-auto grid grid-cols-1 grid-rows-1 text-center mb-6">
            <h2 class="font-heading text-heading-h3 md:text-heading-h2 text-gray-title font-black mb-4">
                Mis últimas <span class="font-heading text-blue-500">creaciones</span>
            </h2>
            <p class="text-gray-normal text-md mb-6">
                Date una vuelta por mis redes creo <span class="font-bold">contenido ameno y cotidiano.</span> <br>
                <span class="font-bold">Sobre todo comparto mis aprendizajes.</span>
            </p>
        </div>
        <div class="max-w-6xl grid grid-cols-1 md:grid-cols-3 grid-rows-3 md:grid-rows-1 md:gap-x-10 md:mx-auto mb-8">
            <div class="img-container p-4 mb-8 rounded-md hover:scale-105 hover:shadow-md hover:shadow-black-200/40 transition-all bg-white">
                <a href="https://www.instagram.com/p/Cc1l29FoJDg/" target="_blank">
                    <img
                        loading="lazy" 
                        src="{{ asset('img/26-Abr-22 composición.png') }}"
                        class="rounded-[4px]" 
                        width="500"
                        alt="Diter Terrones Post">
                </a>

            </div>
            <div class="img-container p-4 mb-8 rounded-md hover:scale-105 hover:shadow-md hover:shadow-black-200/40 transition-all bg-white">
                <a href="https://www.instagram.com/p/CcY_G1uMtj0/" target="_blank">
                    <img
                        loading="lazy" 
                        src="{{ asset('img/14-Abr-22 El diseño mas bonito.png') }}"
                        class="rounded-[4px]" 
                        width="500"
                        alt="Diter Terrones Post">
                </a>
            </div>
            <div class="img-container p-4 mb-8 rounded-md hover:scale-105 hover:shadow-md hover:shadow-black-200/40 transition-all bg-white">
                <a href="https://www.instagram.com/p/Cb06VP5phe_/" target="_blank">
                    <img
                        loading="lazy" 
                        src="{{ asset('img/01-Abr-22 Skeleton Screens.png') }}"
                        class="rounded-[4px]" 
                        width="500"
                        alt="Diter Terrones Post">
                </a>
            </div>
        </div>
    </section>
    <section id="curiosity-banner" class="curiosity-banner mx-auto py-14 md:pb-0 px-4 bg-black-400">
        <div class="max-w-6xl mx-auto grid grid-cols-1 md:grid-cols-2 grid-rows-1">
            <div class="text-center md:text-left mb-6 md:mb-0">
                <h2 class="font-heading text-heading-h3 md:text-heading-h2 text-white font-black mb-4">
                    ¿Quieres saber? <br> <span class="font-heading text-yellow-500">Curiosidades</span>
                </h2>
                <img 
                    loading="lazy"
                    src="{{ asset('img/diter-curiosity.png') }}"
                    alt="Diter - Curiosidades" 
                    width="220"
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
                <a href="https://paypal.me/diterterrones" class="rounded-full bg-yellow-500 text-black-500 py-2 px-4 font-bold w-fit mx-auto">
                    ☕ ¿Quieres conversar? Me gusta el café
                </a>
            </div>
        </div>

    </section>
    <nav class="nav sticky bottom-0 z-10 w-full mx-auto bg-black-500 text-xs font-bold font-heading md:hidden">
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

@section('scripts')
<script>
    document.addEventListener('DOMContentLoaded', (ed) => {
        // Active link for Main Navigation Menu
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

        // Selected tab for accordion
        const accordionHeader = document.querySelectorAll('.accordion-header')
        accordionHeader.forEach((header) => {
            header.addEventListener('click', function () {
                const accordionContent = header.parentElement.querySelector('.accordion-body')
                let accordionMaxHeight = accordionContent.style.maxHeight

                // Condition handling
                if (accordionMaxHeight == '0px' || accordionMaxHeight.length == 0) {
                    accordionContent.style.maxHeight = `${accordionContent.scrollHeight + 32}px`
                    header.parentElement.classList.add('bg-blue-50')
                } else {
                    accordionContent.style.maxHeight = `0px`
                }
                header.querySelector('.accordion-selector').classList.toggle('rotate-180')
            })
        })
    })
</script>
@endsection

@section('footer')
    @parent
@endsection