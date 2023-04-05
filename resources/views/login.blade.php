<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <link rel="icon" href="/image/login/icon.svg" sizes="any" type="image/svg+xml">
    <script src="{{ asset('/js/script.js') }}"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <title>Login • Favebook</title>
    <style>
        /* Added Font Awesome Links */
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
      </style>
</head>
<body>
    <div id = logo>
        <a href="/"><img src="image/login/logo.png" id= favebook alt="favebook"></a>
    </div>
    <div class = "center">
        <h1>Login</h1>
        <p>Welcome back! Let’s get you logged in.</p>
        <form action="/login" method="POST">
            @csrf
            @if(session('loginError'))

             <div class="alert alert-danger" role="alert">
                {{ session('loginError') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>

            @endif
            <div class="usernamepass">
                <label>Username</label>
                <input type="text" placeholder="Enter your username here" id="username" name="username">
            </div>
            <div class="usernamepass">
                <label>Password</label>
                <input type="password" id="loginpassword" placeholder="Enter your password here" name="password">
                <div class="visibility" onclick="loginvisible()">
                    <i class="fa-solid fa-eye" id="hide5" ></i>
                    <i class="fa-solid fa-eye-slash" id="hide6" ></i>
                </div>
            </div>
            <div class="content">
                <div class = "rememberme">
                    <div class="chxbox">
                        <input type="checkbox">
                    </div>
                    <label>Remember me</label>
                </div>
                <div class = "forgetpass">
                    <a href="">Forgot Password?</a>
                </div>
            </div>
            <div id="button">
                <button type="submit">Login</button>
            </div>

            <div id="donthave">
                <p>Don't have an account yet? <a href="register"> Sign Up</a> </p>
            </div>
        </form>
    </div>

    <footer>
        <img src="image/login/Footer.png" alt="">
    </footer>
    <script src="script.js"></script>
    <script src="https://kit.fontawesome.com/ca8cef09e9.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.min.js" integrity="sha384-heAjqF+bCxXpCWLa6Zhcp4fu20XoNIA98ecBC1YkdXhszjoejr5y9Q77hIrv8R9i" crossorigin="anonymous"></script>
</body>
</html>
