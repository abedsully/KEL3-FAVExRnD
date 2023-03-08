<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <link rel="icon" href="/image/login/icon.svg" sizes="any" type="image/svg+xml">
    <title>Login • Favebook</title>
    <style>
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
        <form>
            <div class="usernamepass">
                <label>Username</label>
                <input type="text" placeholder="Enter your username here" id="username">
            </div>
            <div class="usernamepass">
                <label>Password</label>
                <input type="password" placeholder="Enter your password here" id="password">
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
                <button>Login</button>
            </div>

            <div id="donthave">
                <p>Don't have an account yet? <a href=""> Sign Up</a> </p>
            </div>
        </form>
    </div>
</body>
</html>
