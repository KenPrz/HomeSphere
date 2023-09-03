<ul class="flex flex-col">
    <a onclick="toggleElementVisibility('changeNameModal')" class="mb-3 hover:cursor-pointer">
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
    <a onclick="toggleElementVisibility('emailUpdateModal')" class="mb-3 hover:cursor-pointer">
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
    <a onclick="toggleElementVisibility('passwordSecurityModal')" class="mb-3 hover:cursor-pointer">
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
<x-modals.password_security_modal :user="$user"/>
<x-modals.change_name_modal :user="$user"/>
<x-modals.email_update_modal :user="$user"/>
<x-modals.password_update_modal :user="$user"/>
<script src="{{ asset('js/script.js') }}"></script>