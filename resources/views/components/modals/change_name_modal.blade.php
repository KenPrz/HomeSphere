<div id="changeNameModal" class="hidden">
    <div class="fixed inset-0 z-40 flex items-center justify-center">
        <div id="changeNameDimDiv" class="fixed inset-0 background-dim bg-black opacity-50"></div>
        <div class="w-full rounded-md bg-white p-4 shadow-lg sm:w-1/2 sm:p-8 md:w-1/3 lg:w-1/3 z-50">
            <div class="py-2">
                <h1 class="py-2 text-xl font-semibold sm:py-4 sm:text-2xl md:text-3xl">Name</h1>
                <p class="sm:text-md text-sm">Name changes are allowed only once every 60 days. Please avoid using
                    unusual capitalizations, punctuation, characters, or random words.</p>
            </div>
            <form action="{{route('changeName')}}" method="POST" class="mt-4">
                @csrf
                <div class="my-2 flex flex-col rounded-md border border-gray-300 p-2 px-3">
                    <div class="my-1">
                        <label for="firstName" class="py-2 text-xs sm:text-sm">First name</label>
                        <input name="firstName" type="text" class="w-full focus:outline-none">
                    </div>
                </div>
                <div class="my-2 flex flex-col rounded-md border border-gray-300 p-2 px-3">
                    <div class="my-1">
                        <label for="lastName" class="py-2 text-xs sm:text-sm">Last name</label>
                        <input name="lastName" type="text" class="w-full focus:outline-none">
                    </div>
                </div>
                <div class="item-center flex justify-center pt-8">
                    <button type="submit"
                        class="my-2 w-full rounded-full bg-blue-900 px-2 py-3 text-white transition duration-300 ease-in-out hover:bg-blue-800">Change
                        Name</button>
                </div>
            </form>
        </div>
    </div>
</div>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        const changeNameModal = document.getElementById("changeNameModal");
        const changeNameDimDiv = document.getElementById("changeNameDimDiv");
        changeNameDimDiv.addEventListener("click", function () {
            changeNameModal.classList.add("hidden");
        });
    });
</script>
