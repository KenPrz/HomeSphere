<link rel="stylesheet" href="{{asset('css/profile.css')}}">
<div class="main-container">
    <div class="profile-card">
        <div class="header">
            <h1>My Profile</h1>
        </div>
        <div class="profile-settings">
            <div class="image-section">
                <img src="{{asset('img/dummy.png')}}" alt="claire">
                <div class="image-buttons">
                    <a href="#" class="button-link" id="upload-button">upload</a>
                    <a href="#" class="button-link" id="delete-button">delete</a>
                </div>
            </div>
            <div class="user-details-section">
                <ul>
                    <a href="#">
                        <li>
                            <span>Name</span><br>
                            <p>{{$user->first_name.' '.$user->last_name}}</p>
                        </li>
                    </a>
                    <a href="#">
                        <li>
                            <span>Email</span><br>
                            <p>{{$user->email}}</p>
                        </li>
                    </a>
                    <a href="#">
                        <li>
                            <span>Password and Security</span>
                        </li>
                    </a>
                </ul>
            </div>
        </div>
    </div>
</div>
