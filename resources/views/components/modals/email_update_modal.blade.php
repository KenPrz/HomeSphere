<div id="emailUpdateModal" class="hidden">
    <div class="fixed inset-0 z-40 flex items-center justify-center">
        <div id="emailUpdateDimDiv" class="fixed inset-0 background-dim bg-black opacity-50"></div>
        <div class="w-full rounded-md bg-white p-4 shadow-lg sm:w-1/2 sm:p-8 md:w-1/3 lg:w-1/3 z-50">
            <div class="py-2">
                <div class="flex justify-end"> 
                    <div id="close" class="ml-1">
                        <img src="{{ asset('img-assets/vectors/close.svg') }}" alt="close">
                    </div>
                </div>
                <h1 class="py-2 text-xl font-semibold sm:py-4 sm:text-2xl md:text-3xl">Email</h1>
                <p class="sm:text-md text-sm">Manage your email to make sure your info is accurate and up to date.</p>
            </div>
            <form action="{{route('changeEmail')}}" method="POST" class="mt-4">
                @csrf
                        <input placeholder="Current email" name="currentEmail" type="text" class="w-full text-sm border border-gray-300 py-3 mb-3 px-4 rounded-md">
                        <input placeholder="New email" name="newEmail" type="text" class="w-full text-sm border border-gray-300 py-3 mb-3 px-4 rounded-md">
                <div class="item-cente flex justify-center pt-8">
                    <button type="submit"
                        class="my-2 w-full rounded-full bg-blue-900 px-2 py-3 text-white transition duration-300 ease-in-out hover:bg-blue-800">Change
                        Email</button>
                </div>
            </form>
        </div>
    </div>
</div>
<script>
        document.addEventListener("DOMContentLoaded", function () {
        const emailUpdateModal = document.getElementById("emailUpdateModal");
        const emailUpdateDimDiv= document.getElementById("emailUpdateDimDiv");
        emailUpdateDimDiv.addEventListener("click", function () {
            emailUpdateModal.classList.add("hidden");
        });
    });
</script>
