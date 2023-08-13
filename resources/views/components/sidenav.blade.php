<div class="fixed bottom-0 w-full md:w-1/6 bg-white shadow-md z-10 md:h-screen">
    <div class="flex flex-col justify-between lg:min-h-screen">
        <div class="py-4 md:py-8 px-4 ">
            <div class="profile-image text-center pt-10 md:block hidden">
                @empty($user->profile_image)
                    <img src="{{ asset('img-assets/default_avatar.png') }}" alt="Default Image" class="rounded-full w-24 h-24 mx-auto mb-2">
                @else
                    <img src="{{ asset('storage/' . $user->profile_image) }}" alt="Profile Image" class="rounded-md w-32 h-32 mx-auto mb-2">
                @endempty
                <div class="image-text">
                    <h5 class="mb-1">Welcome Back!!</h5>
                    <h2 class="font-bold">{{ $user->first_name }} {{ $user->last_name }}</h2>
                </div>
            </div>
            <div class="sm:mt-0 lg:mt-6">
                <ul class="flex flex-row md:flex-col justify-center items-start">
                    <li class="p-2 hover:bg-slate-400 rounded-lg w-full transition-colors duration-500 ease-in-out">
                        <a href="#" class="flex items-center p-2">
                            <img src="{{asset('img-assets/nav-vectors/home.svg')}}" alt="Home" class="w-6 h-6 mr-2">
                            <div class="hidden sm:block">Home</div>
                        </a>
                    </li>
                    <li class="p-2 hover:bg-slate-400 rounded-lg w-full transition-colors duration-500 ease-in-out">
                        <a href="#" class="flex items-center p-2">
                            <img src="{{asset('img-assets/nav-vectors/account.svg')}}" alt="Profile" class="w-6 h-6 mr-2">
                            <div class="hidden sm:block">Profile</div>
                        </a>
                    </li>
                    <li class="p-2 hover:bg-slate-400 rounded-lg w-full transition-colors duration-500 ease-in-out">
                        <a href="#" class="flex items-center p-2">
                            <img src="{{asset('img-assets/nav-vectors/devices.svg')}}" alt="Appliances" class="w-6 h-6 mr-2">
                            <div class="hidden sm:block">Appliances</div>
                        </a>
                    </li>
                    <li class="p-2 hover:bg-slate-400 rounded-lg w-full transition-colors duration-500 ease-in-out">
                        <a href="#" class="flex items-center p-2">
                            <img src="{{asset('img-assets/nav-vectors/rooms.svg')}}" alt="Rooms" class="w-6 h-6 mr-2">
                            <div class="hidden sm:block">Rooms</div>
                        </a>
                    </li>
                    <li class="p-2 hover:bg-slate-400 rounded-lg w-full transition-colors duration-500 ease-in-out">
                        <a href="#" class="flex items-center p-2">
                            <img src="{{asset('img-assets/nav-vectors/modes.svg')}}" alt="Modes" class="w-6 h-6 mr-2">
                            <div class="hidden sm:block">Modes</div>
                        </a>
                    </li>
                </ul>
            </div>
            
        </div>
        <div class="flex flex-col h-full p-4 mt-4 hidden sm:block">
            <div class="flex-grow logout-section py-4 px-4 bottom-0">
                <a href="{{ route('logout') }}" class="hover:text-red-500 duration-500"><strong>Logout</strong></a>
            </div>
        </div>    
    </div>
</div>