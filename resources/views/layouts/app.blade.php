<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/layouts.css') }}">
    @vite('resources/css/app.css')
    <title>@yield('title', 'Home')</title>
</head>
<body class="w-full p-0 m-0">
    <div class="bg-white w-full fixed py-2 px-4 shadow-md z-20 top-0">
        <x-navbar :user="$user"/>
    </div>
    <div class="flex flex-col-reverse md:flex-row">
        <div class="fixed bottom-0 w-full md:w-1/6 bg-white shadow-md z-10 md:h-screen">
            <x-sidenav :user="$user" />
        </div>
        <div class="w-full mt-16 md:mt-0 mb-24 md:mb-0 md:flex-1">
            <div class="lg:ms-64 md:ms-32 h-screen">
                <x-profile :user="$user" />
            </div>
        </div>
    </div>
</body>
</html>
<script src="{{ asset('js/script.js') }}"></script>
