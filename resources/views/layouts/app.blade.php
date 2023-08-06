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
<body class="w-full p-0 m-0">
    <div class="bg-white py-2 px-4 shadow-md z-20 relative sticky top-0">
        <x-navbar :user="$user"/>
    </div>
    <div class="flex flex-col-reverse md:flex-row">
        <div class="fixed bottom-0 w-full md:w-1/6 bg-white shadow-md z-10 md:h-screen">
            <x-sidenav :user="$user" />
        </div>
        
        <div class="w-full md:flex-1">
            <div class="flex justify-center items-center h-screen">
                {{-- <x-profile :user="$user" /> --}}
            </div>
        </div>
    </div>
</body>


</html>
