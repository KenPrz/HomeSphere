<div id="deleteModal" class="register-modal hidden">
    <div class="fixed inset-0 flex items-center justify-center z-40">
        <div id="deleteDimDiv" class="fixed inset-0 background-dim bg-black opacity-50"></div>
        <div class="modal w-2/9 rounded-lg bg-white p-8 shadow-lg z-50">
            <h2 class="text-lg font-semibold mb-4">Confirm Deletion</h2>
                <p class="text-gray-700 mb-6">Are you sure you want to delete this item?</p>
                <div class="flex justify-end">
                    <button onclick="toggleElementVisibility('deleteModal')"id="cancel-button" class="px-4 py-2 text-sm font-medium text-gray-500 hover:text-gray-700 focus:outline-none">
                        Cancel
                    </button>
                    <form method="post" action="{{ route('deleteImage')}}">
                        @csrf
                        <button id="confirm-button" class="ml-2 px-4 py-2 text-sm font-medium text-white bg-red-500 rounded-lg hover:bg-red-600 focus:outline-none focus:shadow-outline-red active:bg-red-700">
                            Confirm
                        </button>
                    </form>
                </div>
        </div>
    </div>
</div>

<script>
    //delete button
document.addEventListener("DOMContentLoaded", function () {
    const deleteModal = document.getElementById("deleteModal");
    const deleteDimDiv = document.getElementById("deleteDimDiv");
    
    deleteDimDiv.addEventListener("click", function () {
        deleteModal.classList.add("hidden");
    });
});
</script>