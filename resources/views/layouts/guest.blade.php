<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Fit Done Well') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- Fit Done Well font -->
<!-- Fit Done Well font -->
<style>
@import url('https://fonts.googleapis.com/css2?family=Kaushan+Script&display=swap');

.fit-font {
    font-family: "Kaushan Script", serif;
    font-weight: 400;
    font-style: normal;
    font-size: 50px;
    color: #FCD804 !important;
}
</style>
    </head>
    <body class="font-sans text-gray-900 antialiased" style="background-color: #222429;">
        <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100" style="background-color: #222429;">
            <div>
                <h1 class="fit-font" >Fit Done Well</h1>
            </div>
            <div>                
                <img src="{{ asset('logo-medium.png') }}" alt="" style="max-width: 75px;" >
            </div>

            <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
                {{ $slot }}
            </div>
        </div>
    </body>
</html>
