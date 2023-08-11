<div class="flex h-full justify-center items-center">
    <div class="profile-card lg:w-2/3 m-5 rounded-lg bg-white p-8 shadow-md">
        <div class="profile-settings flex flex-wrap md:flex-nowrap justify-between">
            <div class="image-section mb-2 w-full md:w-1/3 flex flex-col items-center justify-center p-4">
                <x-profile_container :user="$user"/>

                <form action="{{ route('uploadImage') }}" method="POST" enctype="multipart/form-data"
                    class="mt-2 flex flex-col items-center w-full px-2">
                    @csrf
                    <div class="image-buttons">
                        <button type="button"
                            class="bg-none border-2 border-gray-600 text-gray-600 rounded-lg px-3 py-1 cursor-pointer hover:bg-gray-200 hover:text-gray-800 open-modal-button">upload</button>
                        <button type="button"
                            class="bg-gray-600 border-gray-600 text-white rounded-lg px-3 py-1 cursor-pointer hover:bg-red-700 transition-colors duration-500 ease-in-out">delete</button>
                    </div>
                </form>
                
                <div id="imageUploaderModal" class="fixed inset-0 flex items-center justify-center z-30 hidden">
                    {{-- <x-bgdim/> --}}
                    <!-- Modal content -->
                    <div class="rounded-lg w-1/2 shadow-lg bg-gray-200 z-40">
                        <!-- Your image uploader component here -->
                        <x-image_uploader />
                    </div>
                </div>
            </div>
            
            <div class="user-details-section w-full md:w-2/3 pt-12 pr-4">
                <x-user_details_component :user="$user" />
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const modal = document.getElementById('imageUploaderModal');
        const openModalButton = document.querySelector('.open-modal-button');
        openModalButton.addEventListener('click', function() {
            modal.classList.remove('hidden');
            // Close modal when clicking outside of it
            window.addEventListener('click', function(event) {
                if (event.target === modal) {
                    modal.classList.add('hidden');
                }
            });
        });
    });
</script>
