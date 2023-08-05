<!-- resources/views/layouts/app.blade.php -->

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
<body>
    <div class="bg-white py-2 px-4 shadow-md z-20 relative sticky top-0">
        <x-navbar :user="$user"/>
    </div>
    <div>
        <div class="fixed bottom-0 left-0 w-1/6 bg-white shadow-md z-10">
            <x-sidenav :user="$user" />
        </div>
        <div>
            <div class="flex justify-center items-center pl-52 h-screen ">
                <x-profile :user="$user" />
            </div>
        </div>
    </div>
</body>
</html>
