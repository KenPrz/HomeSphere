<div class="modal bg-white rounded-lg shadow-lg p-8 w-2/9">
    <form action="{{ route('register') }}" method="POST" class="space-y-4">
        @csrf
        <h1 class="text-2xl font-bold mb-3">Create an account</h1>
        <div class="flex">
            <input type="text" name="firstName" placeholder="First name" required
                class="flex-1 px-3 py-2 mr-1 rounded border focus:outline-none focus:border-blue-500" value="{{old('firstName')}}">
            <input type="text" name="lastName" placeholder="Last name" required
                class="flex-1 px-3 py-2 ml-1 rounded border focus:outline-none focus:border-blue-500" value="{{old('lastName')}}">
        </div>
        <div>
        </div>
        <div>
            <input type="email" name="email" placeholder="Email address" required
                class="w-full px-3 py-2 rounded border focus:outline-none focus:border-blue-500" value="{{old('email')}}">
            @error('email')
                <span class="text-red-500 text-xs">{{ $message }}</span>
            @enderror
        </div>
        <div>
            <input type="password" name="password" placeholder="Password" id="createAccountPasswordInput" required
                class="w-full px-3 py-2 rounded border focus:outline-none focus:border-blue-500">
            @error('password')
                <span class="text-red-500 text-xs">{{ $message }}</span>
            @enderror
        </div>
        <div>
            <input type="password" name="password_confirmation" placeholder="Confirm Password" id="createAccountPasswordInput" required
                class="w-full px-3 py-2 rounded border focus:outline-none focus:border-blue-500">
            @error('confirm_password')
                <span class="text-red-500 text-xs">{{ $message }}</span>
            @enderror
        </div>
        <div class="flex justify-center items-center">
            <input type="submit" name="submitButton" id="createAccount" value="Register"
                class="w-full cursor-pointer md:w-32 py-2 px-4 bg-gray-500 text-white rounded-full hover:bg-gray-600 transition duration-300 register-button">
        </div>
    </form>
</div>