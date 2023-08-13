<div class="mb-24 mt-16 w-full md:mb-0 md:mt-0 md:flex-1">
    <div class="h-screen md:ms-32 lg:ms-64">
        <div class="flex h-full items-center justify-center">
            <div class="profile-card m-5 rounded-lg bg-white p-8 shadow-md lg:w-2/3">
                <div class="profile-settings flex flex-wrap justify-between md:flex-nowrap">
                    <div class="image-section mb-2 flex w-full flex-col items-center justify-center p-4 md:w-1/3">
                        <x-profile_container :user="$user" />

                        <form action="{{ route('uploadImage') }}" method="POST" enctype="multipart/form-data"
                            class="mt-2 flex w-full flex-col items-center px-2">
                            @csrf
                            <div class="image-buttons">
                                <button id="uploadButton" type="button"
                                    class="open-modal-button cursor-pointer rounded-lg border-2 border-gray-600 bg-none px-3 py-1 text-gray-600 hover:bg-gray-200 hover:text-gray-800"
                                    onclick="toggleElementVisibility('imageUploaderModal')">upload</button>
                                <button id="deleteButton" type="button"
                                    class="cursor-pointer rounded-lg border-gray-600 bg-gray-600 px-3 py-1 text-white transition-colors duration-500 ease-in-out hover:bg-red-700"
                                    onclick="toggleElementVisibility('imageDeleteModal')">delete</button>
                            </div>
                        </form>
                        <div id="imageUploaderModal" class="fixed inset-0 z-30 flex hidden items-center justify-center">
                            <div class="z-40 w-1/2 rounded-lg bg-gray-200 shadow-lg">
                                <x-image_uploader />
                            </div>
                        </div>

                        <x-confirm_deletion />

                    </div>
                    <div class="user-details-section w-full pr-4 pt-12 md:w-2/3">
                        <x-user_details_component :user="$user" />
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="{{ asset('js/script.js') }}"></script>
