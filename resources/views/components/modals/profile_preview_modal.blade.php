<div id="profilePreviewModal" class="fixed inset-0 z-40 flex items-center justify-center bg-gray-500 bg-opacity-75 hidden">
    <div id="profilePreviewDimDiv" class="fixed inset-0 bg-black opacity-50"></div>
    <div class="flex flex-col w-1/3 z-50 h-auto bg-white rounded-md">
        <div class="p-10">
            <div class="flex items-center justify-between">
                <div id="angle_left" class="hover:bg-gray-300">
                    <img src="{{ asset('img-assets/vectors/angle_left.svg') }}" alt="angle_left">
                </div>
                <div id="close" class="ml-1 hover:bg-gray-300">
                    <img src="{{ asset('img-assets/vectors/close.svg') }}" alt="close">
                </div>
            </div>
            <div>
                <h1 class="py-2 text-xl font-bold sm:py-4 sm:text-2xl md:text-2xl">Preview</h1>
            </div>

            <div class="flex justify-center border">
                @if ($user->profile_image)
                    <img src="{{ asset('storage/' . $user->profile_image) }}" alt="Profile Image"
                        class="h-48 w-48 rounded-full border p-4">
                @else
                    <img src="{{ asset('img-assets/default_avatar.png') }}" alt="Default Image"
                        class="h-48 w-48 rounded-full border p-4">
                @endif
            </div>

            <div class="rounded-full border border-gray-500 w-1/3 text-sm border mt-6 mx-auto">
                <div class="my-2 flex items-center justify-center">
                    <div id="crop" class="hover:bg-gray-300">
                        <img src="{{ asset('img-assets/vectors/crop.svg') }}" alt="crop">
                    </div>
                    <div>
                        <h1 class="text-black text-xs font-semibold mr-2">Crop photo</h1>
                    </div>
                </div>
            </div>

            <div class="flex items-center justify-between mt-10">
                <button class="w-1/2 mr-2 border border-gray-500 text-black hover:bg-gray-600 hover:text-white hover:bg-gray-600 font-bold py-2 px-4 rounded-full">
                    Cancel
                </button>
                    @csrf
                <button id="submit-button"
                    class="w-1/2 bg-blue-500 text-white rounded-full py-2 font-semibold hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 active:bg-blue-700">
                    Save
                </button>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function () {
    const profilePreviewModal= document.getElementById("profilePreviewModal");
    const profilePreviewDimDiv= document.getElementById("profilePreviewDimDiv");
    profilePreviewDimDiv.addEventListener("click", function () {
        profilePreviewModal.classList.add("hidden");
    });
});
</script>