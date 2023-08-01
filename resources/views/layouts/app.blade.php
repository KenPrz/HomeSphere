<!-- resources/views/layouts/app.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/layouts.css') }}">
    <title>@yield('title', 'Home')</title>
</head>
<body>
    <x-navbar :user="$user"/>
    <div class="body-container">
        <x-sidenav :user="$user" />
        <div class="main-content">
            @yield('content')
        </div>
    </div>
</body>
</html>
