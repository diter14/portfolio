@extends('layouts.app')
 
@section('title', 'Page Title')
 
@section('header')
    @parent
@endsection
 
@section('content')

    <section class="home-banner container mx-auto">
        
        <div class="grid grid-cols-1 md:grid-cols-2 grid-rows-1">
            <div class="self-center">
                <h2 class="font-heading text-heading-h3 ">¡Hola! Soy</h2>
                <h1 class="font-heading text-2xl font-black">DITER <br> TERRONES</h1>
            </div>
            <div class="self-center">
                <p class="font-heading text-blue-400 text-heading-h4 font-black text-right">
                    Diseñador Web & <br> Vue Frontend Developer
                </p>
                <p class="font-body text-xl text-texts-normal text-right">
                    Diseño experiencias <span class="font-bold">visualmente <br>atractivas</span> y funcionales en la web
                </p>
            </div>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-1 grid-rows-1">
            <div class="img-container mx-auto">
                <img 
                    src="https://images.squarespace-cdn.com/content/v1/56b75f108a65e2ee4f2f2bde/1455557293033-S86RZZK28KMB9LN01U0I/image-asset.jpeg?format=1500w" 
                    alt="" 
                    class="banner-cover"
                >
            </div>
        </div>
    </section>
    <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
        
        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">

            <div class="flex justify-center mt-4 sm:items-center sm:justify-between">

                <div class="ml-4 text-center text-sm text-gray-100 sm:text-right sm:ml-0">
                    Hecho con el 💗 por 
                    <span class="text-yellow-500">
                        Diter Terrones
                    </span> 
                </div>
            </div>
        </div>
    </div>
@endsection

@section('footer')
    @parent
@endsection