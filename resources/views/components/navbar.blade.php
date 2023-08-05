
<div class="container mx-auto">
    <ul class="flex justify-between items-center">
        <li class="nav-item title"><a href="#" class="text-xl font-bold md:text-center">HomeSphere</a></li>
        <div class="flex space-x-4 ml-2 justify-center">
            <li>
                <a href="#" class="hover:text-gray-400">
                    Notification
                </a>
            </li>
                <a href="#">
                    <img src="{{ asset('storage/' . $user->profile_image) }}" alt="Profile Image" class="rounded-full w-8 h-w-8 border-2 border-gray-800">    
                </a>
            </li>
        </div>
    </ul>
</div>