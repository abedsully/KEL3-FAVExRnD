<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/editprofile.css') }}">
    <link rel="icon" href="/image/login/icon.svg" sizes="any" type="image/svg+xml">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
    </style>
        <title>Edit Profile • Favebook </title>
</head>
<body>
    <nav>
        <a href="home">
            <img src="image/login/logo.png" class="logo" alt="">
        </a>
        <a href="">
            <img class = "profile-picture" src="image/login/ProfilePitcure.webp" alt="">
        </a>
    </nav>

    <div class="center">
        <div class="left">
            <div class="profile">
                <img src="image/login/ProfilePitcure.webp" alt="">
                <div class = "profile-content">
                    <h2>Username</h2>
                    <label for="file-upload" class="change-profile-picture">
                        Change Profile Photo
                    </label>
                    <input id="file-upload" type="file">
                </div>
            </div>
            <a class="profile-section" href="/edit-profile/{{$user->id}}">Profile</a>
            <a class="password-section" href="/edit-password/{{$user->id}}">Password</a>
        </div>

        <div class="right">
            <h1>Edit Profile</h1>
            <form>
                <div class="name">
                    <div class="first-name">
                        <label>First Name</label>
                        <input type="text" placeholder="Enter your First Name here" value="{{$user->firstName}}">
                    </div>

                    <div class="last-name">
                        <label>Last Name</label>
                        <input type="text" placeholder="Enter your First Name here" value="{{$user->lastName}}">
                    </div>
                </div>
                <div class="email">
                    <label>Email</label>
                    <input type="email" placeholder="Enter your email here" value="{{$user->email}}">
                </div>
                <div class="username">
                    <label>Username</label>
                    <input type="text" placeholder = "Enter your username here" value="{{$user->username}}">
                </div>
                <div class="birth">
                    <div class="pob">
                        <label>Place Of Birth</label>
                        <input type="text" placeholder="Enter your place of birth" value="{{$user->place}}">
                    </div>
                    <div class="dob">
                        <label for="">Date of Birth</label>
                        <input type="date" value="{{$user->dob}}">
                    </div>
                </div>
                <div class="phone-number">
                    <label for="">Phone Number</label>
                    <input type="tel" placeholder="+6281234567890" value="{{$user->number}}">
                </div>
                <div id="button">
                    <button>Save</button>
                </div>
            </form>

        </div>
    </div>

    <footer>
        <img src="image/login/Footer.png" alt="">
    </footer>
</body>
</html>
