<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    @vite('resources/css/app.css')
    <title>Login</title>
</head>
<div id="registration-toast" class="hidden fixed top-4 w-64 bg-gray-800 text-white p-4 rounded-md shadow-md transition-opacity duration-300">
</div>
<body class="flex justify-center items-center min-h-screen bg-gray-100 font-poppins">
    {{-- Row Container --}}
    <div class="w-full max-w-screen-lg mx-auto p-6 md:p-8 lg:p-10">
        <div class="flex flex-col md:flex-row justify-between items-start">
            <div class="w-full md:w-1/2 flex flex-col pr-4">
                <div class="text">
                    <h1 class="text-2xl md:text-4xl font-bold text-gray-900">HomeSphere</h1>
                    <p class="text-lg md:text-2xl text-gray-700 py-2">A web-based home automation system using microcontrollers.</p>
                </div>
                <img class="h-auto md:max-h-96 w-auto mx-auto" src="{{asset('img-assets/login-vectors/home-main.svg')}}" alt="light">
            </div>
            <div class="w-full md:w-1/2 flex justify-center mt-4 md:mt-0">
                <div style="margin-top: 15%;" class="bg-white p-10 m-4 md:m-6 rounded-lg shadow-lg w-full">
                    {{-- FORM --}}
                    <form class="w-full" action="{{ route('login') }}" method="POST">
                        @csrf
                        <h1 class="text-xl md:text-3xl font-bold mb-6">Login</h1>
                        <div class="w-full">
                            <input class="w-full my-2 px-4 py-2 border border-gray-400 rounded-md focus:outline-none focus:border-blue-500" type="text" name="email" placeholder="email" required>
                            <div class="relative">
                                <input class="w-full my-2 px-4 py-2 border border-gray-400 rounded-md focus:outline-none focus:border-blue-500" type="password" name="password" placeholder="Password" id="loginPasswordInput" required>
                                <button type="button" class="absolute right-3 top-1/2 transform -translate-y-1/2 cursor-pointer" id="passwordToggle" onclick="togglePasswordVisibility('loginPasswordInput', 'showPasswordIcon', 'hidePasswordIcon')">
                                    {{-- SVGS --}}
                                    <x-fas-eye class="w-5 h-5 text-gray-500" id="showPasswordIcon" />
                                    <x-far-eye class="w-5 h-5 text-gray-500" id="hidePasswordIcon" style="display: none;" />
                                </button>                                
                            </div>
                            @if(session('error'))
                                <div class="alert alert-danger text-sm text-red-400">
                                    {{ session('error') }}
                                </div>
                            @endif
                        </div>
                        <div class="flex flex-col items-center w-full mt-4">
                            <button class="w-full md:w-32 my-2 py-2 px-4 bg-blue-500 text-white rounded-full hover:bg-blue-600 transition duration-300" type="submit" value="Login">Login</button>
                            <a class="text-xs hover:color-blue-500 transition duration-300" href="#">Forgot password?</a>
                        </div>
                    </form>
                    {{-- FORM --}}
                    <div class="flex justify-center items-center py-4">
                        <hr class="border-1 border-black w-full mx-4">
                    </div>            
                    <div class="flex flex-col items-center w-full">
                        <button class="w-full mb-3 md:w-32 py-2 px-4 bg-gray-500 text-white rounded-full hover:bg-gray-600 transition duration-300 register-button" id="createAccButton" onclick="toggleElementVisibility('registerModal')">Register</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <x-modals.register_modal />
</body>
</html>
<script src="{{ asset('js/script.js') }}"></script>
<script>
    $(document).ready(function() {
            // Check if there is a "success" session data set from the controller
            @if(session('success'))
                // Get the success message from the session
                var successMessage = "{{ session('success') }}";
                
                // Show the toast notification with the success message
                showNotification(successMessage);
            @endif
        });
        // Function to show the toast notification
        function showNotification(message) {
            var toast = $('#registration-toast');
            toast.text(message);
            toast.removeClass('hidden'); // Remove the 'hidden' class to make it visible
            toast.addClass('bg-green-500 text-white p-4 rounded-md shadow-md'); // Apply Tailwind classes for styling
            
            // Center the toast notification horizontally
            toast.removeClass('right-4');
            toast.addClass('mx-auto');

            setTimeout(function() {
                toast.removeClass('bg-green-500 text-white p-4 rounded-md shadow-md mx-auto');
                toast.addClass('hidden right-4'); // Hide the toast after a delay
            }, 3000);
        }

    </script>