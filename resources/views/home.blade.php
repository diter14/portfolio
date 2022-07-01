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