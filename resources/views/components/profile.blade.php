<link rel="stylesheet" href="{{asset('css/profile.css')}}">
<div class="main-container">
    <div class="profile-card">
        <div class="profile-settings">
            <div class="image-section">
                <div class="header">
                    <h1>My Profile</h1>
                </div>
                @if($user->profile_image)
                    <img src="{{ asset('storage/' . $user->profile_image) }}" alt="Profile Image">
                @else
                    <img src="{{ asset('img-assets/default_avatar.png') }}" alt="Default Image">
                @endif
                <form action="{{ route('uploadImage') }}" method="POST" enctype="multipart/form-data">
                    {{-- Add styles here --}}
                    @csrf
                    <div class="image-buttons">
                        <label for="image">Upload:</label>
                        <input type="file" name="image" id="image">
                        <button type="submit" class="button-link">Upload</button>
                    </div>
                </form>
            </div>
            <div class="user-details-section">
                <ul>
                    <a href="#">
                        <li>
                            <div>
                                <span>Name</span><br>
                                <p>{{$user->first_name.' '.$user->last_name}}</p>
                            </div>
                            <div id="arrow">
                                <img src="{{ asset('img-assets/vectors/arrow.svg') }}" alt="arrow">
                            </div>
                        </li>
                    </a>
                    <a href="#">
                        <li>
                            <div>
                                <span>Email</span><br>
                                <p>{{$user->email}}</p>
                            </div>
                            <div id="arrow">
                                <img src="{{ asset('img-assets/vectors/arrow.svg') }}" alt="arrow">
                            </div>
                        </li>
                    </a>
                    <a href="#">
                        <li>
                            <div>
                                <span>Password and Security</span>
                            </div>
                            <div id="arrow">
                                <img src="{{ asset('img-assets/vectors/arrow.svg') }}" alt="arrow">
                            </div>
                        </li>
                    </a>
                </ul>
            </div>
        </div>
    </div>
</div>
