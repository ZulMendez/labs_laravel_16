<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/tailwind.css') }}">
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}"/>
	    <link rel="stylesheet" href="{{asset('css/flaticon.css')}}"/>
	    {{-- <link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}"/> --}}
	    {{-- <link rel="stylesheet" href="{{asset('css/owl.carousel.css')}}"/> --}}


        <!-- Scripts -->
        <script src="{{ asset('js/tailwind.js') }}" defer></script>
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100 flex mt-2">
            @include('layouts.navigation')
            <!-- Page Content -->
            <main class="w-full">
                {{ $slot }}
            </main>
        </div>

        <script src="{{asset('js/app.js')}}"></script>
    </body>
</html>
