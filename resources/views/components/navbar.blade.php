<div class="container mx-auto">
    <ul class="flex flex-col md:flex-row justify-between items-center">
        <li class="nav-item title md:mb-0 mb-2 md:mr-0 mr-2">
            <a href="{{route('dashboard')}}" class="text-xl font-bold md:text-center text-center flex items-center hover:text-blue-500 transition-colors">
                <img src="{{ asset('img-assets/favicons/android-chrome-512x512.png') }}" alt="Default Image" class="h-10 w-10 rounded-full p-1 mr-2 hover:scale-110 transition-transform">
                HomeSphere
            </a>
        </li>        
        <div class="flex items-center space-x-1 md:justify-end hidden md:flex">
            <li class="relative">
                <!-- Dropdown Trigger Button -->
                <button id="notificationDropdown" class="group hover:text-gray-400 focus:outline-none">
                    <img src="{{asset('img-assets/nav-vectors/Notification.svg')}}" alt="Profile" class="w-8 h-auto mr-2 bg-gray-600 rounded-full p-2 group-hover:bg-gray-400 group-hover:border-gray-400 border-1 border-transparent transition duration-300">
                </button>
                <!-- Dropdown Content -->
                <div id="notificationDropdownContent" class="absolute right-0 mt-2 py-2 w-48 bg-white border rounded-lg shadow-lg hidden">
                    <!-- Dropdown Options -->
                    <a href="#" class="block px-4 py-2 text-gray-800 hover:bg-gray-100">Notification 1</a>
                    <a href="#" class="block px-4 py-2 text-gray-800 hover:bg-gray-100">Notification 2</a>
                </div>
            </li>
            <li class="relative">
                <!-- Profile Dropdown Trigger Button -->
                <button id="profileDropdown" class="focus:outline-none">
                    @if($user->profile_image)
                    <img src="{{ asset('storage/' . $user->profile_image) }}" alt="Profile Image" class="rounded-full w-8 h-8 border-2 border-gray-800 hover:border-blue-500 transition-colors">
                    @else
                    <img src="{{ asset('img-assets/default_avatar.png') }}" alt="Default Image" class="rounded-full w-8 h-8 border-2 border-gray-800 hover:border-blue-500 transition-colors">
                    @endif
                </button>
                <!-- Profile Dropdown Content -->
                <x-navbar_profile_dropdown :user="$user"/>
            </li>
        </div>
    </ul>
</div>
<script>
    // JavaScript to toggle dropdown visibility
    document.getElementById('notificationDropdown').addEventListener('click', function () {
        hideAllDropdowns();
        document.getElementById('notificationDropdownContent').classList.remove('hidden');
    });

    document.getElementById('profileDropdown').addEventListener('click', function () {
        hideAllDropdowns();
        document.getElementById('profileDropdownContent').classList.remove('hidden');
    });

    // Close dropdowns when clicking outside
    document.addEventListener('click', function (event) {
        if (!event.target.closest('.relative')) {
            hideAllDropdowns();
        }
    });

    // Function to hide all dropdowns
    function hideAllDropdowns() {
        document.getElementById('notificationDropdownContent').classList.add('hidden');
        document.getElementById('profileDropdownContent').classList.add('hidden');
    }
</script>