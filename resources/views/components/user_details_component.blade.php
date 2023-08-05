<ul class="flex flex-col">
    <a href="#" class="mb-3">
        <li
            class="flex items-center justify-between rounded-lg bg-gray-600 p-4 transition duration-500 hover:bg-gray-700">
            <div>
                <span class="text-white">Name</span><br>
                <p class="text-white">{{ $user->first_name . ' ' . $user->last_name }}</p>
            </div>
            <div id="arrow"
                class="translate-x-0 transform transition duration-500 hover:translate-x-[-15px]">
                <img src="{{ asset('img-assets/vectors/arrow.svg') }}" alt="arrow">
            </div>
        </li>
    </a>
    <a href="#" class="mb-3">
        <li
            class="flex items-center justify-between rounded-lg bg-gray-600 p-4 transition duration-500 hover:bg-gray-700">
            <div>
                <span class="text-white">Email</span><br>
                <p class="text-white">{{ $user->email }}</p>
            </div>
            <div id="arrow"
                class="translate-x-0 transform transition duration-500 hover:translate-x-[-15px]">
                <img src="{{ asset('img-assets/vectors/arrow.svg') }}" alt="arrow">
            </div>
        </li>
    </a>
    <a href="#" class="mb-3">
        <li
            class="flex items-center justify-between rounded-lg bg-gray-600 p-4 transition duration-500 hover:bg-gray-700">
            <div>
                <span class="text-white">Password and Security</span>
            </div>
            <div id="arrow"
                class="translate-x-0 transform transition duration-500 hover:translate-x-[-15px]">
                <img src="{{ asset('img-assets/vectors/arrow.svg') }}" alt="arrow">
            </div>
        </li>
    </a>
</ul>