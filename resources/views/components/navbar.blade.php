<div class="container mx-auto">
    <ul class="flex flex-col md:flex-row justify-between items-center">
        <li class="nav-item title md:mb-0 mb-2 md:mr-0 mr-2">
            <a href="#" class="text-xl font-bold md:text-center text-center flex items-center hover:text-blue-500 transition-colors">
                <img src="{{ asset('img-assets/favicons/android-chrome-512x512.png') }}" alt="Default Image" class="h-10 w-10 rounded-full p-1 mr-2 hover:scale-110 transition-transform">
                HomeSphere
            </a>
        </li>        
        <div class="flex items-center space-x-4 md:justify-end hidden md:flex">
            <li>
                <a href="#" class="hover:text-gray-400">
                    Notification
                </a>
            </li>
            <li>
                <a href="#">
                    <img src="{{ asset('storage/' . $user->profile_image) }}" alt="Profile Image" class="rounded-full w-8 h-8 border-2 border-gray-800 hover:border-blue-500 transition-colors">
                </a>                
            </li>
        </div>
    </ul>
</div>
