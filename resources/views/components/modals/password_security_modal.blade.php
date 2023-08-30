<div id="passwordSecurityModal" class="fixed inset-0 z-40 flex items-center justify-center bg-gray-500 bg-opacity-75 hidden">
    <div id="passwordSecurityDimDiv" class="fixed inset-0 bg-black opacity-50"></div>
    <div class="flex flex-col w-1/3 z-50 h-auto bg-white rounded-md">
        <div class="p-10">
            <div class="flex justify-end"> 
                <div id="close" class="ml-1">
                    <img src="{{ asset('img-assets/vectors/close.svg') }}" alt="close">
                </div>
            </div>    
            <div>
                <h1 class="py-2 text-xl font-bold sm:py-4 sm:text-2xl md:text-xl">Password and Security</h1>
            </div>
            <div>
                <p class="my-3 m:text-md text-sm">Login and Recovery</p>
            </div>
            <div class="flex flex-col">
                <a onclick="toggleElementVisibility('passwordUpdateModal')" class="flex w-full bg-gray-700 mb-2 py-4 my-2 text-white text-sm rounded-md border p-2 px-3 hover:bg-gray-500">
                    Change Password
                    <div class="flex-grow"></div> 
                    <div id="arrow" class="ml-2">
                        <img src="{{ asset('img-assets/vectors/arrow.svg') }}" alt="arrow">
                    </div>
                </a>              
                <a onclick="toggleElementVisibility('addExtraSecurityModal')" class="flex w-full bg-gray-700 py-4 text-white text-sm rounded-md border p-2 px-3 hover:bg-gray-500">
                    Two-factor Authentication
                    <div class="flex-grow"></div> <!-- This div will push the arrow to the right -->
                    <div id="arrow" class="ml-2">
                        <img src="{{ asset('img-assets/vectors/arrow.svg') }}" alt="arrow">
                    </div>
                </a>   
            </div>
            <div>
                <h1 class="my-4 m:text-md text-sm">Security Check</h1>
            </div>
            <div>
            <a onclick="toggleElementVisibility('loginAlertsModal')"  class="flex w-full bg-gray-700 py-4 my-4 text-white text-sm rounded-md border p-2 px-3 hover:bg-gray-500">
                    Login Alerts
                    <div class="flex-grow"></div> <!-- This div will push the arrow to the right -->
                    <div id="arrow" class="ml-2">
                        <img src="{{ asset('img-assets/vectors/arrow.svg') }}" alt="arrow">
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>
<x-modals.password_update_modal :user="$user"/>
<x-modals.add_extra_security_modal :user="$user"/>
<x-modals.login_alerts_modal :user="$user"/>
<script>
    document.addEventListener("DOMContentLoaded", function () {
    const passwordSecurityModal= document.getElementById("passwordSecurityModal");
    const passwordSecurityDimDiv= document.getElementById("passwordSecurityDimDiv");
    passwordSecurityDimDiv.addEventListener("click", function () {
        passwordSecurityModal.classList.add("hidden");
    });
});
</script>