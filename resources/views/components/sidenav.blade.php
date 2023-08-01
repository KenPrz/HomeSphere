
<div class="sidenav">
    <div class="sidenav-container">
        <div class="upper-section">
            <div class="profile-image">
                @empty($user->profile_image)
                    <img src="{{ asset('img-assets/default_avatar.png') }}" alt="Default Image">
                @else
                    <img src=" {{ asset('storage/' . $user->profile_image) }}" alt="Profile Image">
                @endempty
                <div class="image-text">
                    <h5>Welcome Back!!</h5>
                    <h2><strong>{{ $user->first_name }} {{ $user->last_name }}</strong></h2>               
                </div>
            </div>
            <div class="side-nav-selection">
                <ul>
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
                </ul>
            </div>
        </div>
        <div class="logout-section">
            <a href="{{ route('logout') }}">Logout</a>
        </div>
    </div>
</div>
