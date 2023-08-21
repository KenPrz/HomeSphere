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
    {{-- Navbar Start --}}
        <x-setup_navbar/>
    {{-- Navbar end --}}
    <div class="flex justify-center items-center">
        <x-setup_body />
    </div>
    <x-modals.create_home_modal/>
    <x-modals.join_home_modal/>
</body>
</html>
<script src="{{ asset('js/script.js') }}"></script>