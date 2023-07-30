<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/layouts.css')}}">
    <title>Home</title>
</head>
<body>
    <div class="component-navbar">
        <ul>
            <li class="nav-item title"><a href="#">HomeSphere</a></li>
            <div class="right-section">
                <li class="nav-item notification"><a href="#">Notification</a></li>
                <li class="nav-item profile"><a href="#">Profile</a></li>
            </div>
        </ul>
    </div>
    <div class="body-container">
        <div class="sidenav">
            <div class="sidenav-container">
                <div class="upper-section">
                    <div class="profile-image">
                        <img src="{{asset('img/dummy.png')}}" alt="claire">
                        <div class="image-text">
                            <h5>Welcome Back!!</h5>
                            <h2><strong>{{ $user->first_name }} {{ $user->last_name }}</strong></h2>
                        </div>
                    </div>
                    <div class="side-nav-selection">
                        <ul>
                            <a href="#">
                                <div class="selection-container">
                                    <img src="{{asset('img-assets/nav-vectors/home.svg')}}" alt="light">
                                    <li>Home</li>
                                </div>
                            </a>
                            <a href="#">
                                <div class="selection-container">
                                    <img src="{{asset('img-assets/nav-vectors/account.svg')}}" alt="light">
                                    <li>Profile</li>
                                </div>
                            </a>
                            <a href="#">
                                <div class="selection-container">
                                    <img src="{{asset('img-assets/nav-vectors/devices.svg')}}" alt="light">
                                    <li>Appliances</li>
                                </div>
                            </a>
                            <a href="#">
                                <div class="selection-container">
                                    <img src="{{asset('img-assets/nav-vectors/rooms.svg')}}" alt="light">
                                    <li>Rooms</li>
                                </div>
                            </a>
                            <a href="#">
                                <div class="selection-container">
                                    <img src="{{asset('img-assets/nav-vectors/modes.svg')}}" alt="light">
                                    <li>Modes</li>
                                </div>
                            </a>
                        </ul>
                    </div>
                </div>
                <div class="logout-section">
                    <a href="{{ route('logout') }}">Logout</a>
                </div>
            </div>
        </div>
        <div class="main-content">
            @yield('content')
        </div>
    </div>
</body>
</html>
