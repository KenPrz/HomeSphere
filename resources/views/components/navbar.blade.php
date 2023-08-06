<div class="container mx-auto">
    <ul class="flex flex-col md:flex-row justify-between items-center">
        <li class="nav-item title md:mb-0 mb-2 md:mr-0 mr-2">
            <a href="#" class="text-xl font-bold md:text-center text-center">HomeSphere</a>
        </li>
        <div class="flex items-center space-x-4 md:justify-end hidden md:flex">
            <li>
                <a href="#" class="hover:text-gray-400">
                    Notification
                </a>
            </li>
            <li>
                <a href="#">
                    <img src="{{ asset('storage/' . $user->profile_image) }}" alt="Profile Image" class="rounded-full w-8 h-8 border-2 border-gray-800">    
                </a>
            </li>
        </div>
    </ul>
</div>
