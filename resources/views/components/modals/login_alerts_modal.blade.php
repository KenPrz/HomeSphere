<div id="loginAlertsModal" class="fixed inset-0 z-40 flex items-center justify-center bg-gray-500 bg-opacity-75 hidden">
    <div id="loginAlertsDimDiv" class="fixed inset-0 bg-black opacity-50"></div>
    <div class="flex flex-col w-1/3 z-50 h-auto bg-white rounded-md">
        <div class="p-10">
            <div>
                <h1 class="py-2 text-xl font-bold sm:py-4 sm:text-2xl md:text-2xl">Login Alerts</h1>
            </div>
            <li class="flex flex-col rounded-lg p-4 my-3 transition duration-500 border border-gray-300">
                <div>
                    <h1 class="text-black text-xs">Email</h1>
                </div>
                <div>
                    <p class="text-black text-xs">{{ $user->email }}</p>
                </div>     
            </li>
            <a href="#" class="rounded-full text-white text-sm bg-blue-600 border mt-10 py-3 p-2 px-3 hover:bg-blue-900 flex items-center justify-center">
                <div>
                    <h1 class="text-md text-white text-sm font-semibold">Done</h1>
                </div>
            </a>
        </div>
    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function () {
    const loginAlertsModal= document.getElementById("loginAlertsModal");
    const loginAlertsDimDiv= document.getElementById("loginAlertsDimDiv");
    loginAlertsDimDiv.addEventListener("click", function () {
        loginAlertsModal.classList.add("hidden");
    });
});
</script>