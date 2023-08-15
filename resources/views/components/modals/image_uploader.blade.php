{{-- Deprecated version --}}

<div id="imageUploaderModal" class="fixed inset-0 z-50 flex items-center justify-center bg-gray-800 bg-opacity-75 hidden">
    <div id="uploaderDimDiv" class="fixed inset-0 bg-black opacity-50"></div>
    <form action="{{ route('uploadImage') }}" method="POST" enctype="multipart/form-data"
        class="w-full max-w-md bg-white p-6 rounded-lg z-50">
        <div class="mb-4">
            <label for="dropzone-file" class="block text-lg font-semibold text-gray-800 mb-2">
                Upload an Image
            </label>
            <input id="dropzone-file" type="file" name="image" class="w-full p-2 border border-gray-300">
        </div>
        <div class="flex justify-center">
            @csrf
            <button id="submit-button"
                    class="w-full bg-blue-500 text-white rounded-lg py-2 text-sm font-semibold hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 active:bg-blue-700">
                Submit
            </button>
        </div>
    </form>
</div>


<script>
    document.addEventListener("DOMContentLoaded", function () {
        const imageUploaderModal = document.getElementById("imageUploaderModal");
        const uploaderDimDiv = document.getElementById("uploaderDimDiv");

        uploaderDimDiv.addEventListener("click", function () {
            imageUploaderModal.classList.add("hidden");
        });
    });

    function previewImage(event) {
        const input = event.target;
        const previewImg = document.getElementById('preview-img');

        if (input.files && input.files[0]) {
            const reader = new FileReader();

            reader.onload = function(e) {
                previewImg.src = e.target.result;
                previewImg.classList.remove('hidden');
            };

            reader.readAsDataURL(input.files[0]);
        }
    }
</script>
