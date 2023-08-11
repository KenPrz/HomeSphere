<div class="fixed inset-0 flex items-center justify-center z-40">
    <div class="modal w-2/9 rounded-lg bg-white p-8 shadow-lg z-50">
        <form action="{{ route('register') }}" method="POST" class="space-y-4">
            @csrf
            <h1 class="mb-3 text-2xl font-bold">Create an account</h1>
            <div class="flex">
                <input type="text" name="firstName" placeholder="First name" required
                    class="mr-1 flex-1 rounded border px-3 py-2 focus:border-blue-500 focus:outline-none"
                    value="{{ old('firstName') }}">
                <input type="text" name="lastName" placeholder="Last name" required
                    class="ml-1 flex-1 rounded border px-3 py-2 focus:border-blue-500 focus:outline-none"
                    value="{{ old('lastName') }}">
            </div>
            <div>
                <input type="email" name="email" placeholder="Email address" required
                    class="w-full rounded border px-3 py-2 focus:border-blue-500 focus:outline-none"
                    value="{{ old('email') }}">
                @error('email')
                    <span class="text-xs text-red-500">{{ $message }}</span>
                @enderror
            </div>
            <div>
                <input type="password" name="password" placeholder="Password" id="createAccountPasswordInput" required
                    class="w-full rounded border px-3 py-2 focus:border-blue-500 focus:outline-none">
                @error('password')
                    <span class="text-xs text-red-500">{{ $message }}</span>
                @enderror
            </div>
            <div>
                <input type="password" name="password_confirmation" placeholder="Confirm Password"
                    id="createAccountPasswordInput" required
                    class="w-full rounded border px-3 py-2 focus:border-blue-500 focus:outline-none">
                @error('confirm_password')
                    <span class="text-xs text-red-500">{{ $message }}</span>
                @enderror
            </div>
            <div class="flex items-center justify-center">
                <input type="submit" name="submitButton" id="createAccount" value="Register"
                    class="register-button w-full cursor-pointer rounded-full bg-gray-500 px-4 py-2 text-white transition duration-300 hover:bg-gray-600 md:w-32">
            </div>
        </form>
    </div>
</div>
