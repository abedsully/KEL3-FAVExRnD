<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Register • Favebook</title>
        <link rel="stylesheet" href="{{ asset('/css/register.css') }}">
        <script src="{{ asset('/js/script.js') }}"></script>
        <link rel="icon" href="/image/login/icon.svg" sizes="any" type="image/svg+xml">
        <style>
            @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
        </style>
    </head>
    <body>
        <div class="logo">
            <img src="/image/register/logo.png" alt="logo favebook" class="favebook">
        </div>
        <section class="form-wrapper">
            <h1 class="title">Register</h1>
            <p class="welcome">Welcome to Favebook! Let’s get started.</p>
                <form action="../Register 2/index2.html" id="form" autocomplete="off">
                    <div class="nama1">
                        <label for="firstName">First Name</label> <br>
                        <input type="text" id="firstName" placeholder="Enter your first name here">
                    </div>
                    <div class="nama2">
                        <label for="lastName">Last Name</label> <br>
                        <input type="text" id="lastName" placeholder="Enter your last name here">
                    </div>
                    <div class="email">
                        <label for="email">Email</label> <br>
                        <input type="text" id="email" placeholder="Enter your email name here (Ex: bncc123@gmail.com)">
                    </div>
                    <div class="psw">
                        <label for="password">Password</label> <br>
                        <input type="password" id="password" placeholder="Enter your password here (Ex: bncc123_)">
                        <div class="visibility" onclick="visible()">
                            <i class="fa-solid fa-eye" id="hide1" ></i>
                            <i class="fa-solid fa-eye-slash" id="hide2" ></i>
                        </div>
                    </div>
                    <div class="confirm-psw">
                        <label for="confirmPsw">Confirm Password</label> <br>
                        <input type="password" id="confirmPsw" placeholder="Enter your password here (Ex: bncc123_)">
                        <div class="visibility2" onclick="visible2()">
                            <i class="fa-solid fa-eye" id="hide3" ></i>
                            <i class="fa-solid fa-eye-slash" id="hide4" ></i>
                        </div>
                    </div>
                    <div class="next">
                        <a href="../Register 2/index2.html"><button type="submit" class="next-sambit">Next</button></a>
                    </div>
                </form>
        </section>
        <footer>
            <p>All content © 2023 Favebook. All rights reserved.</p>
        </footer>
        <script src="script.js"></script>
        <script src="https://kit.fontawesome.com/ca8cef09e9.js" crossorigin="anonymous"></script>
    </body>
</html>
