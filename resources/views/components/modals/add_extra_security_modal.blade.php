<div id="addExtraSecurityModal" class="fixed inset-0 z-40 flex items-center justify-center bg-gray-500 bg-opacity-75 hidden">
    <div id="addExtraSecurityDimDiv" class="fixed inset-0 bg-black opacity-50"></div>
    <div class="flex flex-col w-1/3 z-50 h-auto bg-white rounded-md">
        <div class="p-10">
            <div>
                <h1 class="py-2 text-xl font-bold sm:py-4 sm:text-2xl md:text-lg">Add extra security to your account</h1>
            </div>
            <div>
                <p class="my-3 m:text-md text-sm">Two-factor authentication protects your account by requiring an additional code when you log in on a device we don't recognize</p>
            </div>
            <div class="flex flex-col">
                <div class="rounded-md border border-gray-300 my-6 p-2 px-3 hover:bg-gray-300">
                    <div>
                        <h1 class="text-sm  font-semibold">Email message</h1>
                    </div>
                    <div>
                        <p class="text-xs">We'll send a code to your email</p>
                    </div>
                </div>
                <a href="#" class="rounded-full text-white text-sm bg-blue-600 border mt-3 py-3 p-2 px-3 hover:bg-blue-900 flex items-center justify-center">
                    <div>
                        <h1 class="text-md text-white text-sm font-semibold">Done</h1>
                    </div>
                </a>
            </div>

  
        </div>
    </div>
</div>


<script>
    document.addEventListener("DOMContentLoaded", function () {
    const addExtraSecurityModal= document.getElementById("addExtraSecurityModal");
    const addExtraSecurityDimDiv= document.getElementById("addExtraSecurityDimDiv");
    addExtraSecurityDimDiv.addEventListener("click", function () {
        addExtraSecurityModal.classList.add("hidden");
    });
});
</script>