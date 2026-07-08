<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>El destino te espera en el corazón de Night City</title>
    @vite(['resources/css/app.css'])
    @livewireStyles
</head>
<body class="bg-[#050816] text-white antialiased min-h-screen overflow-x-hidden">
    {{ $slot }}

    @livewireScripts
    @vite(['resources/js/app.js'])
</body>
</html>
