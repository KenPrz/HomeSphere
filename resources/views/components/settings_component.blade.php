@extends('dashboard')
@section('page-content')

    <h1 class= "mx-10 mt-7 py-5 text-3xl font-bold">
        List of Users
    </h1>

    <div class = "flex-grow mx-10 mt-5 p-3 rounded-lg bg-white">
        <div class ="flex items-center justify-between">
            <div class = "flex item-center border border-gray-500 py-2 w-1/2 rounded-full">
                <div id= "search" class = "ml-5">
                    <img src = "{{ asset('img-assets\list-users-vectors\search.svg') }}" alt="search">
                </div>
                <input placeholder="Search" class="flex items-center ml-5 text-sm w-96 focus:outline-none">
            </div>
    
            <div class ="flex items-center justify-between">
                <a onclick = "toggleElementVisibility" class = "">
                    <div class = "flex item-center border border-gray-500 hover:bg-gray-300 ml-8 py-2 w-34 rounded-full">
                        <div class="flex item-center justify-between">
                            <div id= "remove" class = "ml-5">
                                <img src = "{{ asset('img-assets\list-users-vectors\remove.svg') }}" alt="remove">
                            </div>
                            <div class = "text-sm text-left">
                                <p class = "px-2 mr-4">Remove</p>
                            </div>    
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>

    <div>

        <div class = "flex items-center mx-10 mt-5 mb-2 text-base text-left text-white rounded-tl-lg rounded-tr-lg bg-zinc-600">
            <div class = "flex item-center justify-center">
                <input type="checkbox" class="w-10 h-5 mx-10">
            </div>
                <div class = "py-4 basis-1/2">Name</div>
                <div class = "py-4 pl-12 basis-1/2">User</div>
                <div class = "py-4 pl-12 basis-1/2">Status</div>
        </div>

        <div class = "flex items-center mx-10 my-2 text-base text-left text-zinc-600 rounded-md rounded-tr-lg bg-white hover:bg-gray-300">
            <div class = "flex item-center justify-center">
                <input type="checkbox" class="w-10 h-5 mx-10">
            </div>
                <div class = "py-4 basis-1/2">Jaime Fraser</div>
                <div class = "py-4 pl-12 basis-1/2">Owner</div>
                <div class = "py-4 pl-12 basis-1/2">Active User</div>
        </div>
        
        <div class = "flex items-center mx-10 my-2 text-base text-left text-zinc-600 rounded-md rounded-tr-lg bg-white hover:bg-gray-300">
            <div class = "flex item-center justify-center">
                <input type="checkbox" class="w-10 h-5 mx-10">
            </div>
                <div class = "py-4 basis-1/2">Claire Fraser</div>
                <div class = "py-4 pl-12 basis-1/2">Owner</div>
                <div class = "py-4 pl-12 basis-1/2">Active User</div>
        </div>
        
        <div class = "flex items-center mx-10 my-2 text-base text-left text-zinc-600 rounded-md rounded-tr-lg bg-white hover:bg-gray-300">
            <div class = "flex item-center justify-center">
                <input type="checkbox" class="w-10 h-5 mx-10">
            </div>
                <div class = "py-4 basis-1/2">Murtagh Fraser</div>
                <div class = "py-4 pl-12 basis-1/2">Guest</div>
                <div class = "py-4 pl-12 basis-1/2">Inactive User</div>
        </div>
        
        <div class = "flex items-center mx-10 my-2 text-base text-left text-zinc-600 rounded-md rounded-tr-lg bg-white hover:bg-gray-300">
            <div class = "flex item-center justify-center">
                <input type="checkbox" class="w-10 h-5 mx-10">
            </div>
                <div class = "py-4 basis-1/2">Brianna Randall Fraser</div>
                <div class = "py-4 pl-12 basis-1/2">Guest</div>
                <div class = "py-4 pl-12 basis-1/2">Active User</div>
        </div>

        <div class = "flex items-center mx-10 my-2 text-base text-left text-zinc-600 rounded-md rounded-tr-lg bg-white hover:bg-gray-300">
            <div class = "flex item-center justify-center">
                <input type="checkbox" class="w-10 h-5 mx-10">
            </div>
                <div class = "py-4 basis-1/2">Roger Wakefield</div>
                <div class = "py-4 pl-12 basis-1/2">Guest</div>
                <div class = "py-4 pl-12 basis-1/2">Inactive User</div>
        </div>

        <div class = "flex items-center mx-10 my-2 text-base text-left text-zinc-600 rounded-md rounded-tr-lg bg-white hover:bg-gray-300">
            <div class = "flex item-center justify-center">
                <input type="checkbox" class="w-10 h-5 mx-10">
            </div>
                <div class = "py-4 basis-1/2">John Grey</div>
                <div class = "py-4 pl-12 basis-1/2">Guest</div>
                <div class = "py-4 pl-12 basis-1/2">Inactive User</div>
        </div>

    </div>

@endsection