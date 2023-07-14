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
                            <input type="text" name="email" id="email" placeholder="email" required>
                        </div>
                        <div>
                            <input type="password" name="password" placeholder="password" required>
                        </div>
                        <hr>   
                        <input type="submit" value="login">
                        <a href="#">forgot password?</a>
                    </form>
                    <button>Create and account</button>
                </div>
            </div>
    </div>
</body>
</html>