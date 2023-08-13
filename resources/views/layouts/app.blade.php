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
            <x-sidenav :user="$user" />  <!--this is the sidenav -->
            
            <x-profile :user="$user" /> <!-- this is the profile component-->
    </div>
</body>
</html>
<script src="{{ asset('js/script.js') }}"></script>
