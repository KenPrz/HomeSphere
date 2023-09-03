@extends('dashboard')
@section('page-content')  
  
    <h1 class= "mx-10 mt-7 py-5 text-3xl font-bold">
        List of Appliances
    </h1>

    <div class = "flex-grow mx-10 mt-5 p-3 rounded-lg bg-white">
        <div class = "flex item-center border border-gray-500 py-2 w-1/2 rounded-full text-1xl text-left">
            <div id= "search" class = "ml-5">
                <img src = "{{ asset('img-assets\list-app-vectors\search.svg') }}" alt="search">
            </div>
            <input placeholder="Search" class="flex items-center ml-4 text-sm w-96 focus:outline-none">

        </div>
    </div>

    <div>

        <div class = "flex mx-10 mt-5 mb-2 text-base text-left text-white rounded-tl-lg rounded-tr-lg bg-zinc-600">
            <div class = "py-4 pl-12 basis-1/2">Room</div>
            <div class = "py-4 pl-10 basis-1/2">Type</div>
            <div class = "py-4 pl-5 basis-1/2">Appliance</div>
            <div class = "py-4 pl-10 basis-1/2">Name</div>
            <div class = "py-4 pl-10 basis-1/2">Status</div>
        </div>

        <div class = "flex mx-10 mb-2 text-sm text-left text-black bg-gray-400 hover:bg-gray-300">
            <div class = "py-4 pl-12 basis-1/2">Bathroom</div>
            <div class = "py-4 pl-10 basis-1/2">light</div>
            <div class = "py-4 pl-5 basis-1/2">light</div>
            <div class = "py-4 pl-10 basis-1/2">bathroom light</div>
            <div class = "py-4 pl-10 basis-1/2">ON</div>
        </div>

        <div class = "flex mx-10 mb-2 text-sm text-left text-black bg-white hover:bg-gray-300">
            <div class = "py-4 pl-12 basis-1/2">Bedroom</div>
            <div class = "py-4 pl-10 basis-1/2">plug</div>
            <div class = "py-4 pl-5 basis-1/2">electric fan</div>
            <div class = "py-4 pl-10 basis-1/2">bedroom fan</div>
            <div class = "py-4 pl-10 basis-1/2">OFF</div>
        </div>

        <div class = "flex mx-10 mb-2 text-sm text-left text-black bg-gray-400 hover:bg-gray-300">
            <div class = "py-4 pl-12 basis-1/2">Bedroom</div>
            <div class = "py-4 pl-10 basis-1/2">light</div>
            <div class = "py-4 pl-5 basis-1/2">light</div>
            <div class = "py-4 pl-10 basis-1/2">bedroom light</div>
            <div class = "py-4 pl-10 basis-1/2">ON</div>
        </div>

        <div class = "flex mx-10 mb-2 text-sm text-left text-black bg-gray-400 hover:bg-gray-300">
            <div class = "py-4 pl-12 basis-1/2">Dining & Kitchen</div>
            <div class = "py-4 pl-10 basis-1/2">light</div>
            <div class = "py-4 pl-5 basis-1/2">light</div>
            <div class = "py-4 pl-10 basis-1/2">D&K light</div>
            <div class = "py-4 pl-10 basis-1/2">ON</div>
        </div>

        <div class = "flex mx-10 mb-2 text-sm text-left text-black bg-gray-400 hover:bg-gray-300">
            <div class = "py-4 pl-12 basis-1/2">Dining & Kitchen</div>
            <div class = "py-4 pl-10 basis-1/2">plug</div>
            <div class = "py-4 pl-5 basis-1/2">electric fan</div>
            <div class = "py-4 pl-10 basis-1/2">D&K fan</div>
            <div class = "py-4 pl-10 basis-1/2">ON</div>
        </div>

        <div class = "flex mx-10 mb-2 text-sm text-left text-black bg-white hover:bg-gray-300">
            <div class = "py-4 pl-12 basis-1/2">Living Room</div>
            <div class = "py-4 pl-10 basis-1/2">light</div>
            <div class = "py-4 pl-5 basis-1/2">light</div>
            <div class = "py-4 pl-10 basis-1/2">light outside</div>
            <div class = "py-4 pl-10 basis-1/2">OFF</div>
        </div>

    </div>

    <div class = "flex justify-between items-center">

        <div class = "flex mx-10 my-7 pl-10 pb-10 text-xs text-left font-">showing 
            <b class="px-1"> 6 </b> of 
            <b class="px-1"> 2 </b> entries
        </div>

        <div class = "flex mx-10 my-7 pl-10 pb-10 rounded-lg bg-white">

    </div>

@endsection