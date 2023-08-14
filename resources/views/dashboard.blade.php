@extends('layouts.app')
<div class="bg-white w-full fixed py-2 px-4 shadow-md z-20 top-0">
    <x-navbar :user="$user"/>
</div>
<div class="flex flex-col-reverse md:flex-row">
        <x-sidenav :user="$user" />  <!--this is the sidenav -->
        
        <x-profile :user="$user" /> <!-- this is the profile component-->
</div>