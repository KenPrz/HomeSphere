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
                        <img src="{{asset('img-assets/light.svg')}}" alt="light">
                        <img src="{{asset('img-assets/plug.svg')}}" alt="plug">
                        <img src="{{asset('img-assets/temp.svg')}}" alt="temp">
                        <img src="{{asset('img-assets/humidity.svg')}}" alt="humidity">
                    </div>
                    <div class="home-icon">
                        <img src="{{asset('img-assets/house.svg')}}" alt="house icon">
                    </div>
                </div>
        </div>
        <div class="child-2">
            <div class="form-container">
                <h1>Login</h1>
                <form action="#" method="post">
                    <div>
                        <input type="text" name="email" id="email" placeholder="Email" required>
                    </div>
                    <div>
                        <input type="password" name="password" placeholder="Password" required>
                    </div>
                    <hr>   
                    <input type="submit" value="Login">
                    <a href="#">Forgot password?</a>
                </form>
                <button id="createAcc">Create an Account</button>
            </div>
            <div class="modal-container" id="modalContainer">
                <div class="modal">
                    <h2>Create an Account</h2>
                    <form action="#" method="post">
                        <div class="userName">
                            <div><input type="text" name="firstName" placeholder="First name" required></div> 
                            <div><input type="text" name="lastName" placeholder="Last name" required></div>
                        </div>
                        <div>
                            <input type="email" name="email" placeholder="Email address" required>
                        </div>
                        <div>
                            <input type="password" name="password" placeholder="password">
                        </div>
                        <div>
                            <input type="submit" name="submitButton" id="create account" value="create an account">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
<script src="{{ asset('js/script.js') }}"></script>