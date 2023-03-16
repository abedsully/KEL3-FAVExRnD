<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/editpassword.css') }}">
    <link rel="icon" href="/image/login/icon.svg" sizes="any" type="image/svg+xml">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
    </style>
        <title>Edit Password • Favebook </title>
</head>
<body>
    <nav>
        <a href="/">
            <img src="image/login/logo.png" class="logo" alt="">
        </a>
        <a href="">
            <img class = "profile-pitcure" src="image/login/Rin.jpg" alt="">
        </a>
    </nav>
    <div class="center">
        <div class="left">
            <div class="profile">
                <img src="image/login/Rin.jpg" alt="">
                <div class = "profile-content">
                    <h2>Username</h2>
                    <a href="">Change Profile Photo</a>
                </div>
            </div>
            <a class="profile-section" href="/editprofile">Profile</a>
            <a class="password-section" href="">Password</a>
        </div>

        <div class="right">
            <h1>Password</h1>
            <form>
                <div class="password">
                    <label for="">Password</label>
                    <input type="password" placeholder="Your Password">
                </div>
                <div class="newpassword">
                    <label for="">New Password</label>
                    <input type="password" placeholder="Enter your new password">
                </div>
                <div class="confirmpassword">
                    <label for="">New Password</label>
                    <input type="password" placeholder="Confirm your new password">
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