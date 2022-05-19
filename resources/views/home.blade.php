@extends('layouts.app')
 
@section('title', 'Page Title')
 
@section('header')
    @parent
@endsection
 
@section('content')

    <style>
        body {
            font-family: 'DM Sans', sans-serif;
        }
    </style>
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