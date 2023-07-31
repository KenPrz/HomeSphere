<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/login.css')}}">
    <title>Login</title>
</head>
<body>
    <div class="container">
        <div class="child-1">
            <div class="title-div">
                <h1>HomeSphere</h1>
                <h2>A web-based home automation system using microcontrollers.</h2>
            </div>
                <div class="icons-div">
                    <div class="icons">
                        <img src="{{asset('img-assets/login-vectors/light.svg')}}" alt="light">
                        <img src="{{asset('img-assets/login-vectors/plug.svg')}}" alt="plug">
                        <img src="{{asset('img-assets/login-vectors/temp.svg')}}" alt="temp">
                        <img src="{{asset('img-assets/login-vectors/humidity.svg')}}" alt="humidity">
                    </div>
                    <div class="home-icon">
                        <img src="{{asset('img-assets/login-vectors/house.svg')}}" alt="house icon">
                    </div>
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
                                <input type="checkbox" onclick="showPassword('loginPasswordInput')"> Show Password
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
                    <form action="{{ route( 'register') }}" method="POST">
                        @csrf
                        <h2>Create an Account</h2>
                            <div class="userName">
                                <div><input type="text" name="firstName" placeholder="First name" required></div> 
                                <div><input type="text" name="lastName" placeholder="Last name" required></div>
                            </div>
                            <div>
                                <input type="email" name="email" placeholder="Email address" required>
                            </div>
                            <div>
                                <input type="password" name="password" placeholder="Password" id="createAccountPasswordInput" required>
                                <input type="checkbox" onclick="showPassword('createAccountPasswordInput')">Show password
                            </div>
                            <div>
                                <input type="submit" name="submitButton" id="createAccount" value="create an account">
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
<script src="{{ asset('js/script.js') }}"></script>