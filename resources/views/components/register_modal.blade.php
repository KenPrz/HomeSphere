
    <div class="modal bg-white rounded-lg shadow-lg p-8 w-96">
        <form action="{{ route( 'register') }}" method="POST">
            @csrf
            <h2 class="text-2xl font-bold mb-4">Create an Account</h2>
            <div class="mb-4">
                <div class="flex space-x-2">
                    <input type="text" name="firstName" placeholder="First name" required
                        class="w-1/2 px-3 py-2 rounded border focus:outline-none focus:border-blue-500">
                    <input type="text" name="lastName" placeholder="Last name" required
                        class="w-1/2 px-3 py-2 rounded border focus:outline-none focus:border-blue-500">
                </div>
            </div>
            <div class="mb-4">
                <input type="email" name="email" placeholder="Email address" required
                    class="w-full px-3 py-2 rounded border focus:outline-none focus:border-blue-500">
            </div>
            <div class="mb-4 relative">
                <input type="password" name="password" placeholder="Password" id="createAccountPasswordInput" required
                    class="w-full px-3 py-2 rounded border focus:outline-none focus:border-blue-500">
                <input type="checkbox" onclick="showPassword('createAccountPasswordInput')"
                    class="absolute right-2 top-2">
                <span class="absolute right-8 top-2 text-sm cursor-pointer">Show password</span>
            </div>
            <div>
                <input type="submit" name="submitButton" id="createAccount" value="Create an account"
                    class="w-full px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600 cursor-pointer">
            </div>
        </form>
    </div>
</div>