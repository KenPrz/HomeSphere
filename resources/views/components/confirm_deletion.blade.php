<div class="rounded-lg w-1/2 shadow-lg bg-gray-200 z-40">
    <!-- Your image uploader component here -->
    <div id="delete-modal" class="fixed inset-0 flex items-center justify-center z-50">
        <div class="bg-white rounded-lg p-6 w-1/2">
            <h2 class="text-lg font-semibold mb-4">Confirm Deletion</h2>
            <p class="text-gray-700 mb-6">Are you sure you want to delete this item?</p>
            <div class="flex justify-end">
                <button id="cancel-button" class="px-4 py-2 text-sm font-medium text-gray-500 hover:text-gray-700 focus:outline-none">
                    Cancel
                </button>
                <button id="confirm-button"class="ml-2 px-4 py-2 text-sm font-medium text-white bg-red-500 rounded-lg hover:bg-red-600 focus:outline-none focus:shadow-outline-red active:bg-red-700">
                    Confirm
                </button>
            </div>
        </div>
    </div>
</div>