<div id="profileDropdownContent" class=" flex flex-col absolute right-0 mt-2 py-2 w-80 h-auto bg-white border rounded-lg shadow-lg hidden">
    <!-- Profile Dropdown Options -->
    <div class="h-1/2 py-2 px-3 mx-4 my-2 shadow-md">
        <div class="border-b-2 py-1">
            <a href="#" class="block px-4 py-2 rounded-md text-blue-600 hover:bg-gray-100 ">
                <div class="flex">
                    <div>
                        @if($user->profile_image)
                        <img src="{{ asset('storage/' . $user->profile_image) }}" alt="Profile Image" class="rounded-full w-8 h-8 border-2 border-gray-800">
                        @else
                        <img src="{{ asset('img-assets/default_avatar.png') }}" alt="Default Image" class="rounded-full w-8 h-8 border-2 border-gray-800">
                        @endif
                    </div>
                    <div class="flex items-center justify-center">
                        <div class="ml-2 text-sm font-medium">
                            {{ $user->first_name }} {{ $user->last_name }}
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="p-2 mt-3">
            <a href="#" class="hover:text-blue-500 duration-300">
                <p class="text-sm pl-3 font-semibold">View profile</p>
            </a>
        </div>                        
    </div>
    <div class="h-1/2 my-2 mx-2">
        <a href="#" class="flex items-center px-4 py-2 rounded-md hover:bg-gray-100 cursor-pointer">
                <img src="{{ asset('img-assets/nav-vectors/settings_navbar.svg') }}" alt="Settings" class="w-8 h-auto mr-4">
                <p class="flex items-center text-gray-800 font-semibold">Settings</p>
        </a>                       
        <a href="{{ route('logout') }}" class="flex items-center px-4 py-2 rounded-md hover:bg-gray-100 cursor-pointer">
            <img src="{{ asset('img-assets/nav-vectors/logout_navbar.svg') }}" alt="Settings" class="w-8 h-auto mr-4">
            <p class="flex items-center text-gray-800 font-semibold hover:text-red-500 duration-200">Logout</p>
        </a>
    </div>
</div>