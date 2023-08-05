
<div class="flex flex-col h-screen justify-between">
    <div class="py-8 px-4">
        <div class="profile-image text-center pt-10">
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
        <div class="mt-6">
            <ul class="flex flex-col justify-center items-start">
                <li class="p-2 hover:bg-slate-400 rounded-lg w-full transition-colors duration-500 ease-in-out">
                    <a href="#" class=" flex items-center p-2">
                        <img src="{{asset('img-assets/nav-vectors/home.svg')}}" alt="Home" class="w-6 h-6 mr-2">
                        Home
                    </a>
                </li>
                <li class="p-2 hover:bg-slate-400 rounded-lg w-full transition-colors duration-500 ease-in-out">
                    <a href="#" class="flex items-center p-2">
                        <img src="{{asset('img-assets/nav-vectors/account.svg')}}" alt="Profile" class="w-6 h-6 mr-2">
                        Profile
                    </a>
                </li>
                <li class="p-2 hover:bg-slate-400 rounded-lg w-full transition-colors duration-500 ease-in-out">
                    <a href="#" class="flex items-center p-2">
                        <img src="{{asset('img-assets/nav-vectors/devices.svg')}}" alt="Appliances" class="w-6 h-6 mr-2">
                        Appliances
                    </a>
                </li>
                <li class="p-2 hover:bg-slate-400 rounded-lg w-full transition-colors duration-500 ease-in-out">
                    <a href="#" class="flex items-center p-2">
                        <img src="{{asset('img-assets/nav-vectors/rooms.svg')}}" alt="Rooms" class="w-6 h-6 mr-2">
                        Rooms
                    </a>
                </li>
                <li class="p-2 hover:bg-slate-400 rounded-lg w-full transition-colors duration-500 ease-in-out">
                    <a href="#" class="selection-container flex items-center p-2">
                        <img src="{{asset('img-assets/nav-vectors/modes.svg')}}" alt="Modes" class="w-6 h-6 mr-2">
                        Modes
                    </a>
                </li>
            </ul>
        </div>
        
    </div>
    <div class="logout-section py-4 px-4">
        <a href="{{ route('logout') }}" class="hover:text-red-500">Logout</a>
    </div>
</div>
