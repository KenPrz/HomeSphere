<div id="imageUploaderModal" class="register-modal hidden">
    <div class="fixed inset-0 z-40 flex items-center justify-center">
        <div id="uploaderDimDiv" class="background-dim fixed inset-0 bg-black opacity-50"></div>
        <form action="{{ route('uploadImage') }}" method="POST" enctype="multipart/form-data"
            class="mt-2 flex flex-col items-center z-50">
            <div class="flex w-full items-center justify-center">
                <label for="dropzone-file"
                    class="flex h-64 w-full cursor-pointer flex-col items-center justify-center rounded-lg border-2 border-dashed border-gray-300 bg-gray-50 hover:bg-gray-100 dark:border-gray-600 dark:bg-gray-700 dark:hover:border-gray-500 dark:hover:bg-gray-600 dark:hover:bg-gray-800">
                    <div class="flex flex-col items-center justify-center pb-6 pt-5">
                        <div id="image-preview" class="mb-4">
                            <img id="preview-img" src="#" alt="Image Preview"
                                class="hidden max-h-40 max-w-full" />
                        </div>
                        <svg class="mb-4 h-8 w-8 text-gray-500 dark:text-gray-400" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2" />
                        </svg>
                        <p class="mb-2 text-sm text-gray-500 dark:text-gray-400"><span class="font-semibold">Click to
                                upload</span> or drag and drop</p>
                        <p class="text-xs text-gray-500 dark:text-gray-400">PNG/JPG (MAX. 800x400px)</p>
                    </div>
                    @csrf
                    <input id="dropzone-file" type="file" name="image" class="hidden"
                        onchange="previewImage(event)" />
                </label>
            </div>
            <div class="mt-4 flex justify-center">
                <button id="submit-button"
                    class="rounded-lg bg-blue-500 px-4 py-2 text-sm font-medium text-white hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 active:bg-blue-700">
                    Submit
                </button>
            </div>
        </form>
    </div>
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
