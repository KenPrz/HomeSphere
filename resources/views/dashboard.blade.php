@extends('layouts.app')

@section('content')
<div class="grid grid-cols-1 min-h-screen">
    <!-- Navbar -->
    <div class="sticky top-0 bg-white max-h-14 py-2 px-4 shadow-md z-20">
        <x-navbar :user="$user"/>
    </div>
    <!-- End Navbar -->

    <div class="md:flex">
        <!-- Sidebar -->
        <div class="fixed bottom-0 w-full md:w-1/6 bg-white shadow-md md:h-screen">
            <x-sidenav :user="$user"/>
        </div>  
        <!-- End Sidebar -->

        <!-- Main Content -->
        <div class="flex-1 p-4 lg:ml-72 h-screen">
            @yield('page-content')
        </div>
    </div>
</div>
@endsection
