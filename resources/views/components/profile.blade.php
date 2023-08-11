<div class="flex h-full justify-center items-center">
    <div class="profile-card lg:w-2/3 m-5 rounded-lg bg-white p-8 shadow-md">
        <div class="profile-settings flex flex-wrap md:flex-nowrap justify-between">
            <div class="image-section mb-2 w-full md:w-1/3 flex flex-col items-center justify-center p-4">
                <x-profile_container :user="$user"/>

                <form action="{{ route('uploadImage') }}" method="POST" enctype="multipart/form-data"
                    class="mt-2 flex flex-col items-center w-full px-2">
                    @csrf
                    <div class="image-buttons">
                        <button id="uploadButton" type="button"
                            class="bg-none border-2 border-gray-600 text-gray-600 rounded-lg px-3 py-1 cursor-pointer hover:bg-gray-200 hover:text-gray-800 open-modal-button" onclick="toggleElementVisibility('imageUploaderModal')">upload</button>
                        <button id="deleteButton" type="button"
                            class="bg-gray-600 border-gray-600 text-white rounded-lg px-3 py-1 cursor-pointer hover:bg-red-700 transition-colors duration-500 ease-in-out" onclick="toggleElementVisibility('imageDeleteModal')">delete</button>
                    </div>
                </form>
                <div id="imageUploaderModal" class="fixed inset-0 flex items-center justify-center z-30 hidden">
                    <div class="rounded-lg w-1/2 shadow-lg bg-gray-200 z-40">
                        <x-image_uploader />
                    </div>
                </div>
                <div id="imageDeleteModal" class="fixed inset-0 flex items-center justify-center z-30 hidden">
                    <div class="rounded-lg w-1/2 shadow-lg bg-gray-200 z-40">
                        <x-confirm_deletion />
                    </div>
                </div>
            </div>
            <div class="user-details-section w-full md:w-2/3 pt-12 pr-4">
                <x-user_details_component :user="$user" />
            </div>
        </div>
    </div>
</div>
<script src="{{ asset('js/script.js') }}"></script>
