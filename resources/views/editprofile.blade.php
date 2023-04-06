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
            <form action="/edit-profile/{{ $user->id }}" method="POST">
                @csrf
                @method('patch')
                <div class="name">
                    <div class="first-name">
                        <label>First Name</label>
                        <input type="text" placeholder="Enter your First Name here" value="{{$user->firstName}}" name="firstName" class="form-control rounded-top @error('firstName') is-invalid @enderror" value="{{ old('firstName' )}}" autofocus/>
                        @error('firstName')
                        <div class="invalid-feedback" style="color: red">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <div class="last-name">
                        <label>Last Name</label>
                        <input type="text" placeholder="Enter your First Name here" value="{{$user->lastName}}" name="lastName" class="form-control rounded-top @error('lastName') is-invalid @enderror" value="{{ old('lastName' )}}" autofocus/>
                        @error('lastName')
                        <div class="invalid-feedback" style="color: red">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>
                <div class="email">
                    <label>Email</label>
                    <input type="email" placeholder="Enter your email here" value="{{$user->email}}" name="email" class="form-control rounded-top @error('email') is-invalid @enderror" value="{{ old('email' )}}" autofocus/>
                    @error('email')
                    <div class="invalid-feedback" style="color: red">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="username">
                    <label>Username</label>
                    <input type="text" placeholder = "Enter your username here" value="{{$user->username}}" name="username" class="form-control rounded-top @error('username') is-invalid @enderror" value="{{ old('username' )}}" autofocus/>
                    @error('username')
                    <div class="invalid-feedback" style="color: red">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="birth">
                    <div class="pob">
                        <label>Place Of Birth</label>
                        <input type="text" placeholder="Enter your place of birth" value="{{$user->place}}" name="place" class="form-control rounded-top @error('place') is-invalid @enderror" value="{{ old('place' )}}" autofocus/>
                        @error('place')
                        <div class="invalid-feedback" style="color: red">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="dob">
                        <label for="">Date of Birth</label>
                        <input type="date" value="{{$user->dob}}" name="dob" class="form-control rounded-top @error('dob') is-invalid @enderror" value="{{ old('dob' )}}" autofocus/>
                        @error('dob')
                        <div class="invalid-feedback" style="color: red">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>
                <div class="phone-number">
                    <label for="">Phone Number</label>
                    <input type="tel" placeholder="+6281234567890" value="{{$user->number}}" name="number" class="form-control rounded-top @error('number') is-invalid @enderror" value="{{ old('number' )}}" autofocus/>
                    @error('number')
                    <div class="invalid-feedback" style="color: red">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div id="button">
                    <button type="submit">Save</button>
                </div>
            </form>

        </div>
    </div>

    <footer>
        <img src="image/login/Footer.png" alt="">
    </footer>
</body>
</html>
