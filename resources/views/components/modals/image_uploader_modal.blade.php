@php
    $user = Auth::user();
@endphp

<div id="imageUploaderModal" class="fixed inset-0 z-40 flex items-center justify-center bg-gray-500 bg-opacity-75 hidden">
    <div id="imageUploaderDimDiv" class="fixed inset-0 bg-black opacity-50"></div>
    <div class="flex flex-col w-1/3 z-50 h-auto bg-white rounded-md">
        <div class="p-10">
            <div class="flex justify-end"> 
                <div id="close" class="ml-1 hover:bg-gray-300">
                    <img src="{{ asset('img-assets/vectors/close.svg') }}" alt="close">
                </div>
            </div>
            <div>
                <h1 class="py-2 text-xl font-bold sm:py-4 sm:text-2xl md:text-2xl">Profile picture</h1>
            </div>

            <div class="flex justify-center">
                @if ($user->profile_image)
                    <img src="{{ asset('storage/' . $user->profile_image) }}" alt="Profile Image"
                        class="h-48 w-48 rounded-full border mt-5 p-4">
                @else
                    <img src="{{ asset('img-assets/default_avatar.png') }}" alt="Default Image"
                        class="h-48 w-48 rounded-full border mt-5 p-4">
                @endif
            </div>
            
            <a onclick="toggleElementVisibility('profilePreviewModal')" class="rounded-full bg-blue-600 border mt-10 py-3 p-2 px-3 hover:bg-blue-900 flex items-center justify-center">
                <div>
                    <h1 class="text-md text-white font-semibold">Upload a photo</h1>
                </div>
            </a>
        </div>
    </div>
</div>

<x-modals.profile_preview_modal :user="$user"/>
<script>
    document.addEventListener("DOMContentLoaded", function () {
    const imageUploaderModal= document.getElementById("imageUploaderModal");
    const imageUploaderDimDiv= document.getElementById("imageUploaderDimDiv");
    imageUploaderDimDiv.addEventListener("click", function () {
        imageUploaderModal.classList.add("hidden");
    });
});
</script>