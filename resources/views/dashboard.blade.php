@extends('layouts.app')

@section('content')
<div class="grid grid-cols-1 min-h-screen">
    <!-- Navbar -->
    <div class="sticky top-0 bg-white max-h-14 py-2 px-4 shadow-md z-20">
        <x-navbar :user="$user"/>
    </div>
    
    <!-- Main Content -->
    <div class="md:flex"> <!-- Use md:flex for horizontal layout on medium screens and above -->
        <!-- Profile Container -->
        <div class="md:w-5/6 px-4 py-8">
            <x-profile :user="$user" />
        </div>

        <!-- Side/Bottom Navigation Bar -->
        <div class="fixed bottom-0 w-full md:w-1/6 bg-white shadow-md z-10 md:h-screen">
            <x-sidenav :user="$user" />
        </div>
    </div>
</div>
@endsection
