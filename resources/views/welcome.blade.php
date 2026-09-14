<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="light">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dental Clinic - Your Smile Is Our Priority</title>
    <link rel="icon" href="/favicon.ico" sizes="any">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-white text-gray-900">
    @include('homepage.header')
    
    <main class="pt-16">
        @include('homepage.hero')
        @include('homepage.services')
        @include('homepage.features')
        @include('homepage.cta')
        @include('homepage.contact')
    </main>
    
    @include('homepage.footer')
</body>
</html>
