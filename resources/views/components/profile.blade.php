
        <div class="profile-card bg-white rounded-lg shadow-md p-8 m-5 w-3/4">
            <div class="profile-settings mt-5 flex flex-wrap justify-between">
                <div class="image-section mb-2 flex flex-col items-center justify-center p-4 w-1/3">
                    <div class="header">
                        <h1 class="font-bold text-xl">My Profile</h1>
                    </div>
                    @if($user->profile_image)
                    <img src="{{ asset('storage/' . $user->profile_image) }}" alt="Profile Image"
                        class="rounded-full h-48 w-48 p-4">
                    @else
                    <img src="{{ asset('img-assets/default_avatar.png') }}" alt="Default Image"
                        class="rounded-full h-48 w-48 p-4">
                    @endif
                    <form action="{{ route('uploadImage') }}" method="POST" enctype="multipart/form-data"
                        class="flex flex-col items-center mt-2">
                        @csrf
                        <div class="image-buttons">
                            {{-- Add styles here --}}
                            <label for="image" class="cursor-pointer">Upload:</label>
                            <input type="file" name="image" id="image" class="hidden">
                            <button type="submit" class="button-link py-1 px-2 rounded-lg">Upload</button>
                        </div>
                    </form>
                </div>
                <div class="user-details-section pt-12 w-2/3">
                    <ul class="flex flex-col">
                        <a href="#" class="mb-3">
                            <li
                                class="flex justify-between items-center bg-gray-600 p-4 rounded-lg transition duration-500 hover:bg-gray-700">
                                <div>
                                    <span class="text-white">Name</span><br>
                                    <p class="text-white">{{ $user->first_name . ' ' . $user->last_name }}</p>
                                </div>
                                <div id="arrow"
                                    class="transition duration-500 transform translate-x-0 hover:translate-x-[-15px]">
                                    <img src="{{ asset('img-assets/vectors/arrow.svg') }}" alt="arrow">
                                </div>
                            </li>
                        </a>
                        <a href="#" class="mb-3">
                            <li
                                class="flex justify-between items-center bg-gray-600 p-4 rounded-lg transition duration-500 hover:bg-gray-700">
                                <div>
                                    <span class="text-white">Email</span><br>
                                    <p class="text-white">{{ $user->email }}</p>
                                </div>
                                <div id="arrow"
                                    class="transition duration-500 transform translate-x-0 hover:translate-x-[-15px]">
                                    <img src="{{ asset('img-assets/vectors/arrow.svg') }}" alt="arrow">
                                </div>
                            </li>
                        </a>
                        <a href="#" class="mb-3">
                            <li
                                class="flex justify-between items-center bg-gray-600 p-4 rounded-lg transition duration-500 hover:bg-gray-700">
                                <div>
                                    <span class="text-white">Password and Security</span>
                                </div>
                                <div id="arrow"
                                    class="transition duration-500 transform translate-x-0 hover:translate-x-[-15px]">
                                    <img src="{{ asset('img-assets/vectors/arrow.svg') }}" alt="arrow">
                                </div>
                            </li>
                        </a>
                    </ul>
                </div>
            </div>
        </div>
