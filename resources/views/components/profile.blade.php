<div class="flex flex-col lg:h-screen items-center justify-center">
<div class="profile-card m-5 rounded-lg bg-white p-8 shadow-md lg:w-2/3">
    <div class="profile-settings flex flex-wrap justify-between md:flex-nowrap">
        <div class="image-section mb-2 flex w-full flex-col items-center justify-center p-4 md:w-1/3">
            <x-profile_container :user="$user" />
            <form action="{{ route('uploadImage') }}" method="POST" enctype="multipart/form-data"
                class="mt-2 flex w-full flex-col items-center px-2">
                @csrf
                <div class="image-buttons flex md:justify-start">
                    <button id="uploadButton" type="button"
                        class="open-modal-button mr-2 cursor-pointer rounded-lg border-2 border-gray-600 bg-none px-3 py-1 text-gray-600 hover:bg-gray-200 hover:text-gray-800"
                        onclick="toggleElementVisibility('imageUploaderModal')">Upload</button>
                    <button id="deleteButton" type="button"
                        class="@if (!$user->profile_image) opacity-50 cursor-not-allowed disabled:opacity-50 disabled:cursor-not-allowed @endif cursor-pointer rounded-lg bg-gray-600 px-3 py-1 text-white transition-colors duration-500 ease-in-out hover:bg-red-700"
                        onclick="toggleElementVisibility('deleteModal')"
                        @if (!$user->profile_image) disabled @endif>Delete</button>
                </div>
            </form>
            <x-modals.image_uploader_modal />
            <x-modals.confirm_deletion_modal />
        </div>
        <div class="user-details-section w-full pr-4 pt-12 md:w-2/3">
            <x-user_details_component :user="$user" />
        </div>
    </div>
</div>
</div>
<script src="{{ asset('js/script.js') }}"></script>
