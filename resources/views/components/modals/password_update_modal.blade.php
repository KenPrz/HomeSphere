<div id="passwordUpdateModal" class="hidden">
    <div class="fixed inset-0 z-40 flex items-center justify-center">
        <div id="passwordUpdateDimDiv" class="fixed inset-0 background-dim bg-black opacity-50"></div>
        <div class="w-full rounded-md bg-white p-4 shadow-lg sm:w-1/2 sm:p-8 md:w-1/3 lg:w-1/3 z-50">
            <div class="py-2">
                <div class="flex items-center justify-between">
                    <div id="angle_left" class="hover:bg-gray-300">
                        <img src="{{ asset('img-assets/vectors/angle_left.svg') }}" alt="angle_left">
                    </div>
                    <div id="close" class="ml-1 hover:bg-gray-300">
                        <img src="{{ asset('img-assets/vectors/close.svg') }}" alt="close">
                    </div>
                </div> 
                <h1 class="py-2 text-xl font-semibold sm:py-4 sm:text-2xl md:text-3xl">Password</h1>
                <p class="sm:text-md text-sm">Your password must be at least 6 characters and should include a combination of numbers, letters, and special characters (!$@%).</p>
            </div>
            <form action="{{ route('changePassword') }}" method="POST" class="mt-4">
                @csrf
                <input placeholder="Current password" name="currentPassword" type="password" class="w-full text-sm border-2 border-color-black py-3 mb-3 px-4 rounded-md">
                @error('currentPassword')
                    <div class="text-red-500 text-sm">{{ $message }}</div>
                @enderror
                
                <input placeholder="New Password" name="newPassword" type="password" class="w-full text-sm border-2 border-color-black py-3 mb-3 px-4 rounded-md">
                @error('newPassword')
                    <div class="text-red-500 text-sm">{{ $message }}</div>
                @enderror
                
                <input placeholder="Re-type New Password" name="password_confirmation" type="password" class="w-full text-sm border-2 border-color-black py-3 mb-3 px-4 rounded-md">
                @error('password_confirmation')
                    <div class="text-red-500 text-sm">{{ $message }}</div>
                @enderror
                
                <div class="item-center flex justify-center pt-8">
                    <button type="submit" class="my-2 w-full rounded-full bg-blue-900 px-2 py-3 text-white transition duration-300 ease-in-out hover:bg-blue-800">
                        Update Password
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@if(session('success'))
    <div id="successMessage" class="absolute top-2 left-1/2 transform -translate-x-1/2 h-10 z-50 bg-blue-500 text-white text-center py-2 w-1/4 rounded-md">
        {{ session('success') }}
    </div>
@endif
<script>
        document.addEventListener("DOMContentLoaded", function () {
        const passwordUpdateModal= document.getElementById("passwordUpdateModal");
        const passwordUpdateDimDiv= document.getElementById("passwordUpdateDimDiv");
        passwordUpdateDimDiv.addEventListener("click", function () {
            passwordUpdateModal.classList.add("hidden");
        });
    });
</script>
