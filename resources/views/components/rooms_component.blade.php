@extends('dashboard')
@section('page-content')

<h1 class="mx-10 mt-7 py-5 text-3xl font-bold">
    List of Rooms
</h1>
<div class="flex-grow mx-10 mt-5 p-3 rounded-lg bg-white">
    <div class="flex px-4">
        <button class="w-1/5 mr-2 border border-gray-500 rounded-full active:bg-gray-600 text-black hover:bg-gray-600 hover:text-white font-bold py-2 px-4 rounded">
            All Rooms
        </button>
        <button class="w-1/5 mr-2 border border-gray-500 rounded-full active:bg-gray-600 text-black hover:bg-gray-600 hover:text-white font-bold py-2 px-4 rounded">
            Living Room
        </button>
        <button class="w-1/5 mr-2 border border-gray-500 rounded-full active:bg-gray-600 text-black hover:bg-gray-600 hover:text-white font-bold py-2 px-4 rounded">
            Dining & Kitchen 
        </button>
        <button class="w-1/5 mr-2 border border-gray-500 rounded-full active:bg-gray-600 text-black hover:bg-gray-600 hover:text-white font-bold py-2 px-4 rounded">
            Bedroom
        </button>
        <button class="w-1/5 border border-gray-500 rounded-full active:bg-gray-600 text-black hover:bg-gray-600 hover:text-white font-bold py-2 px-4 rounded">
            Bathroom
        </button>
    </div>
</div>

<div class="m-8 mt-2 p-2 grid grid-rows-2 grid-flow-col gap-4 auto-cols-auto rounded-md">
    <div class="flex flex-col text-center">
        <div class="living-room-card rounded-lg bg-white p-8 shadow-md">
            <div class="living-room-settings flex">
                <div class="left-section mx-3">
                    <div id="living_room">
                        <img src="{{ asset('img-assets/vectors/living_room.svg') }}" alt="living_room">
                    </div>
                    <h1 class="mt-4 text-xl font-bold">Living Room</h1>
                    <p class="mt-1 text-sm">Appliance(s)</p>
                </div>
                <div class="right-section ml-4 flex-grow mr-2">
                    <div class=" flex justify-end">
                        <label class="relative inline-flex cursor-pointer">
                            <input type="checkbox" value="" class="sr-only peer" checked>
                            <div class="w-11 h-6 bg-gray-200 rounded-full peer peer-focus:ring-4 dark:bg-gray-700 peer-checked:after:translate-x-full after:content-[''] after:absolute after:top-0.5 after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600"></div>
                        </label>
                    </div>
                    <div class="flex flex-col items-start">
                        <div class="mt-3">
                            <h1 class="text-sm">Temperature</h1>
                        </div>
                        <div class="flex w-full border border-gray-600 mt-1 rounded-full h-5"></div>                      
                        <div class="mt-1"> 
                            <p class="text-sm">Humidity</p>
                        </div>
                        <div class="flex w-full border border-gray-600 rounded-full mt-1 h-5"></div>  
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="flex flex-col text-center">
        <div class="living-room-card rounded-lg bg-white p-8 shadow-md">
            <div class="living-room-settings flex">
                <div class="left-section mx-7">
                    <div id="bedroom">
                        <img src="{{ asset('img-assets/vectors/bedroom.svg') }}" alt="bedroom">
                    </div>
                    <h1 class="mt-4 text-xl font-bold">Bedroom</h1>
                    <p class="mt-1 text-sm">Appliance(s)</p>
                </div>
                <div class="right-section ml-4 flex-grow mr-2">
                    <div class=" flex justify-end">
                        <label class="relative inline-flex cursor-pointer">
                            <input type="checkbox" value="" class="sr-only peer" checked>
                            <div class="w-11 h-6 bg-gray-200 rounded-full peer peer-focus:ring-4 dark:bg-gray-700 peer-checked:after:translate-x-full after:content-[''] after:absolute after:top-0.5 after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600"></div>
                        </label>
                    </div>
                    <div class="flex flex-col items-start">
                        <div class="mt-3">
                            <h1 class="text-sm">Temperature</h1>
                        </div>
                        <div class="flex w-full border border-gray-600 mt-1 rounded-full h-5"></div>                      
                        <div class="mt-1"> 
                            <p class="text-sm">Humidity</p>
                        </div>
                        <div class="flex w-full border border-gray-600 rounded-full mt-1 h-5"></div>  
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="flex flex-col text-center">
        <div class="living-room-card rounded-lg bg-white p-8 shadow-md">
            <div class="living-room-settings flex">
                <div class="left-section mx-7">
                    <div id="dining_kitchen">
                        <img src="{{ asset('img-assets/vectors/dining_kitchen.svg') }}" alt="dining_kitchen">
                    </div>
                    <h1 class="mt-4 text-xl font-bold">Dining & Kitchen</h1>
                    <p class="mt-1 text-sm">Appliance(s)</p>
                </div>
                <div class="right-section ml-4 flex-grow mr-2">
                    <div class=" flex justify-end">
                        <label class="relative inline-flex cursor-pointer">
                            <input type="checkbox" value="" class="sr-only peer" checked>
                            <div class="w-11 h-6 bg-gray-200 rounded-full peer peer-focus:ring-4 dark:bg-gray-700 peer-checked:after:translate-x-full after:content-[''] after:absolute after:top-0.5 after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600"></div>
                        </label>
                    </div>
                    <div class="flex flex-col items-start">
                        <div class="mt-3">
                            <h1 class="text-sm">Temperature</h1>
                        </div>
                        <div class="flex w-full border border-gray-600 mt-1 rounded-full h-5"></div>                      
                        <div class="mt-1"> 
                            <p class="text-sm">Humidity</p>
                        </div>
                        <div class="flex w-full border border-gray-600 rounded-full mt-1 h-5"></div>  
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="flex flex-col text-center">
        <div class="living-room-card rounded-lg bg-white p-8 shadow-md">
            <div class="living-room-settings flex">
                <div class="left-section mx-7">
                    <div id="bathroom">
                        <img src="{{ asset('img-assets/vectors/bathroom.svg') }}" alt="bathroom">
                    </div>
                    <h1 class="mt-2 text-xl font-bold">Bathroom</h1>
                    <p class="mt-1 text-sm">Appliance(s)</p>
                </div>
                <div class="right-section ml-4 flex-grow mr-2">
                    <div class=" flex justify-end">
                        <label class="relative inline-flex cursor-pointer">
                            <input type="checkbox" value="" class="sr-only peer" checked>
                            <div class="w-11 h-6 bg-gray-200 rounded-full peer peer-focus:ring-4 dark:bg-gray-700 peer-checked:after:translate-x-full after:content-[''] after:absolute after:top-0.5 after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600"></div>
                        </label>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>






@endsection






