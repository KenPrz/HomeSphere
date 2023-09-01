<div id="addExtraSecurityModal" class="fixed inset-0 z-40 flex items-center justify-center bg-gray-500 bg-opacity-75 hidden">
    <div id="addExtraSecurityDimDiv" class="fixed inset-0 bg-black opacity-50"></div>
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
                <h1 class="py-2 text-xl font-bold sm:py-4 sm:text-2xl md:text-lg">Add extra security to your account</h1>
            </div>
            <div>
                <p class="my-3 m:text-md text-sm">Two-factor authentication protects your account by requiring an additional code when you log in on a device we don't recognize</p>
            </div>

            <div class="flex flex-col">
                <div class="rounded-md border border-gray-300 my-6 p-2 px-3 hover:bg-gray-300 relative"> <!-- Added "relative" class for positioning -->
                    <div>
                        <h1 class="text-sm font-semibold">Email message</h1>
                    </div>
                    <div>
                        <p class="text-xs my-1">We'll send a code to your email</p>
                    </div>
                    <div class="absolute top-1/2 right-1 transform -translate-y-1/2 mx-3">
                        <input id="link-radio" type="radio" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500">
                    </div>
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