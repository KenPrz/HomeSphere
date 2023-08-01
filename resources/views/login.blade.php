<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="{{asset('css/login.css')}}">
    <title>Login</title>
</head>
<div id="registration-toast" class="toast"></div>
<body>
    <div class="container">
        <div class="child-1">
            <div class="title-div">
                <h1>HomeSphere</h1>
                <h2>A web-based home automation system using microcontrollers.</h2>
            </div>
                <div class="image-container">
                    <img src="{{asset('img-assets/login-vectors/home-main.svg')}}" alt="light">
                </div>
        </div>
        <div class="child-2">
            <div class="form-container">
                <h1>Login</h1>
                <form action="{{ route('login') }}" method="POST">
                    @csrf
                    <div class="input-container">
                        <div>
                            <input type="text" name="email" id="email" placeholder="Email" required>
                        </div>
                        <div>
                            <input type="password" name="password" placeholder="Password" id="loginPasswordInput" required><br>
                        </div>
                        <div class="checkbox">
                            <input name="password-checkbox" type="checkbox" id="showPasswordCheckbox" onclick="togglePasswordVisibility()">
                            <label for="password-checkbox">Show password</label>
                        </div>
                    </div>
                    @if(session('error'))
                        <div class="alert alert-danger">
                            {{ session('error') }}
                        </div>
                    @endif
                    
                    <hr>   
                    <input type="submit" value="Login">
                    <a href="#">Forgot password?</a>
                </form>
                <button id="createAcc">Create an Account</button>
            </div>
            <div class="modal-container" id="modalContainer">
                <div class="modal">
                    <form action="{{ route('register') }}" method="POST">
                        @csrf
                        <h2>Create an Account</h2>
                        <div class="input-container">
                            <div class="userName">
                                <div>
                                    <!-- Use old() function to retain the value on validation failure -->
                                    <input type="text" name="firstName" placeholder="First name" value="{{ old('firstName') }}" required>
                                </div> 
                                @error('firstName')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                                <div>
                                    <!-- Use old() function to retain the value on validation failure -->
                                    <input type="text" name="lastName" placeholder="Last name" value="{{ old('lastName') }}" required>
                                </div>
                                @error('lastName')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div>
                                <!-- Use old() function to retain the value on validation failure -->
                                <input type="email" name="email" placeholder="Email address" value="{{ old('email') }}" required>
                            </div>
                                @error('email')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                                <div>
                                    <input type="password" name="password" placeholder="Password" id="createAccountPasswordInput" required style="margin-bottom: 1em">
                                    <input type="password" name="password_confirmation" placeholder="Confirm Password" id="confirmPassword" required>
                                    @error('password')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>                              
                            <div>
                                <input type="submit" name="submitButton" id="createAccount" value="Create an account">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
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
        toast.fadeIn().delay(3000).fadeOut();
    }
</script>