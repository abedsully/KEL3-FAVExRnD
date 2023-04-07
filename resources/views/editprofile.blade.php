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
@auth


<body>
    <nav>
        <a href="/home/{{$user->id}}">
            <img src="{{url('/image/login/logo.png')}}" alt="Image"/>
        </a>

        <a href="/">
            <div class="btn-group">
                <button type="button" class="btn" data-toggle="dropdown">
                    <img class="profile-pitcure" src="{{asset( '/storage/Barang/' .$user->image )}}" alt="">
                </button>

                <div class="dropdown-menu dropdown-menu-right">
                    <form action="/logout" method="POST">
                        @csrf
                        <button type="submit" class="dropdown-item"><i class="fa fa-arrow-left"></i> &nbsp Logout</button>
                    </form>
                </div>

            </div>
        </a>
    </nav>

    <div class="center">
        <div class="left">
            <div class="profile">

                @if($user->image != NULL)
                    <img src="{{asset( '/storage/Barang/' .$user->image )}}" alt="">
                @elseif($user->image == NULL)
                    <img src="{{url('/image/login/ProfilePitcure.webp')}}" alt="Image"/>
                @endif

                <div class = "profile-content">
                    <h2>{{ucwords($user->username)}}</h2>
                    <form action="{{ route('update-profile-picture', ['id' => $user->id]) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <label for="file-upload" class="change-profile-picture">
                            Change Profile Photo
                        </label>

                        <input id="file-upload" type="file" name="image">
<br>
                        <button type="submit" class="btn btn-success btn-sm">Confirm Photo</button>
                    </form>

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
    @endauth

    <footer>
        <div class = "footer-content">
            <img src="{{url('/image/login/Footer.png')}}" alt="">
        </div>
    </footer>
<<<<<<< HEAD
    <script src="https://kit.fontawesome.com/ca8cef09e9.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
=======
</body>
>>>>>>> refs/remotes/origin/main
</html>
