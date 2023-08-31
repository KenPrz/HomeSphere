<div id="joinHomeModal" class="hidden">
    <div class="fixed inset-0 z-40 flex items-center justify-center">
        <div id="joinHomeDimDiv" class="fixed inset-0 background-dim bg-black opacity-50"></div>
        <div class="w-full rounded-md bg-white p-4 shadow-lg sm:w-1/2 sm:p-8 md:w-1/3 lg:w-1/4 z-50">
            <div class="flex justify-end">
                <button id="closeJoinHomeModal" class="text-gray-600 hover:text-gray-800">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd"
                            d="M13.06 10l4.47-4.47a1 1 0 10-1.42-1.42L11.59 8 7.12 3.53a1 1 0 00-1.42 1.42L10.17 10l-4.47 4.47a1 1 0 101.42 1.42L11.59 12l4.47 4.47a1 1 0 001.42-1.42L13.06 10z"
                            clip-rule="evenodd" />
                    </svg>
                </button>
            </div>
            <div class="py-2">
                <h1 class="py-2 text-xl font-semibold sm:py-4 sm:text-2xl md:text-3xl">Join a home</h1>
            </div>
            <form action="#" method="POST" class="mt-4">
                @csrf
                <div class="my-2 flex flex-col rounded-md border p-2 px-3">
                    <div class="my-1">
                        <label for="homeCode" class="py-2 text-xs sm:text-sm">Enter your home code</label>
                        <input name="homeCode" type="text" class="w-full focus:outline-none">
                    </div>
                </div>
                <div class="item-center flex justify-center pt-8">
                    <button type="submit"
                        class="my-2 w-full rounded-full bg-blue-900 px-2 py-3 text-white transition duration-300 ease-in-out hover:bg-blue-800">Request
                        Access</button>
                </div>
            </form>
        </div>
    </div>
</div>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        const joinHomeModal = document.getElementById("joinHomeModal");
        const joinHomeDimDiv = document.getElementById("joinHomeDimDiv");
        const closeJoinHomeModal = document.getElementById("closeJoinHomeModal");
        
        joinHomeDimDiv.addEventListener("click", function () {
            joinHomeModal.classList.add("hidden");
        });
        
        closeJoinHomeModal.addEventListener("click", function () {
            joinHomeModal.classList.add("hidden");
        });
    });
</script>
