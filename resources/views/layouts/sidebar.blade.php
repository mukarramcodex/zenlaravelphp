<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale() ) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-tokent" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'ZEN APP') }}</title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <div class="sidebar bg-blue-800 text-white w-64 min-h-screen fixed transition-all duration-300 ease-in-out">
        <div class="sidebar-header p-4 border-b border-gray-700 flex items-center">
            <div class="logo flex items-center">
                
            </div>
        </div>
    </div>
</body>
</html>
