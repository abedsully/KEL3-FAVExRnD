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
            /* Added Font Awesome Icon Link 1 */
            @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
        </style>
    </head>
    <body>
        <div class="logo">
            <a href="/"><img src="../image/register/logo.png" alt="Favebook logo"></a>
        </div>
        <section class="form-wrapper">
            <div class="title">
                <h1>Register</h1>
                <p>Welcome to favebook! Let’s get started. </p>
            </div>
            <form action="/register" method="POST" enctype="multipart/form-data">
                @csrf
            <nav class="form" autocomplete="off" id="register1" style="margin-bottom: 1rem">
                <div class="first-last">
                    <div class="first-name">
                        <label for="firstName">First Name</label>
                        <input type="text" placeholder="Enter your first name here" id="form3Example" name="firstName" class="form-control rounded-top @error('firstName') is-invalid @enderror" value="{{ old('firstName' )}}" autofocus/>
                        @error('firstName')
                        <div class="invalid-feedback" style="color: red">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="last-name">
                        <label for="lastName">Last Name</label>
                        <input type="text" placeholder="Enter your last name here" id="lastName" name="lastName" class="form-control rounded-top @error('name') is-invalid @enderror" value="{{ old('lastName' )}}" autofocus/>
                        @error('lastName')
                        <div class="invalid-feedback" style="color: red">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>
                <div class="e-mail">
                    <label for="emailAddress">Email</label>
                    <input type="text" placeholder="Enter your email name here (Ex : bncc123@gmail.com)" id="emailAddress" name="email" class="form-control rounded-top @error('email') is-invalid @enderror" value="{{ old('email' )}}" autofocus/>
                    @error('email')
                    <div class="invalid-feedback" style="color: red">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="password">
                    <label for="password">Password</label>
                    <input type="password" placeholder="Enter your password here (Ex : Bncc123_)" id="password" name="password" class="form-control rounded-top @error('password') is-invalid @enderror" value="{{ old('password' )}}" autofocus/>
                    <div class="visibility" onclick="visible()">
                        <i class="fa-solid fa-eye" id="hide1" ></i>
                        <i class="fa-solid fa-eye-slash" id="hide2" ></i>
                    </div>
                    @error('lastName')
                    <div class="invalid-feedback" style="color: red">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="password-confirm">
                    <label for="confirm-pass">Confirm Password</label>
                    <input type="password" placeholder="Enter your password here (Ex : Bncc123_)" id="confirmpass" name="confirm" class="form-control rounded-top @error('confirm') is-invalid @enderror" value="{{ old('confirm' )}}" autofocus/>
                    <div class="visibility2" onclick="visible2()">
                        <i class="fa-solid fa-eye" id="hide3"></i>
                        <i class="fa-solid fa-eye-slash" id="hide4"></i>
                    </div>
                    @error('confirm')
                    <div class="invalid-feedback" style="color: red">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="next" onclick="registerP2()">
                    <button type="button">Next</button>
                </div>
            </nav>
            <!-- Register II -->
            <nav class="form2" id="register2" autocomplete="off" >
                @csrf
                <div class="u-name">
                    <label for="username">Username</label>
                    <input type="text" placeholder="Enter your username here" id="username" name="username" class="form-control rounded-top @error('username') is-invalid @enderror" value="{{ old('username' )}}" autofocus/>
                    @error('username')
                    <div class="invalid-feedback" style="color: red">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="place-date">
                    <div class="birth-place">
                        <label for="POB">Place of Birth</label>
                        <input type="text" placeholder="Jawa Barat" id="POB" name="place" class="form-control rounded-top @error('place') is-invalid @enderror" value="{{ old('place' )}}" autofocus/>
                        @error('place')
                        <div class="invalid-feedback" style="color: red">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="birth-date">
                        <label for="DOB">Date of Birth</label>
                        <input type="date" placeholder="DD-MM-YY" id="DOB" name="dob" class="form-control rounded-top @error('dob') is-invalid @enderror" value="{{ old('dob' )}}" autofocus/>
                        @error('dob')
                        <div class="invalid-feedback" style="color: red">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>
                <div class="phone">
                    <label for="phone-number">Phone Number</label>
                    <input type="text" placeholder="Enter your phone number here (Ex : +62XXXXXXXXXXX)" id="phone-number" name="number" class="form-control rounded-top @error('number') is-invalid @enderror" value="{{ old('number' )}}" autofocus/>
                    @error('number')
                    <div class="invalid-feedback" style="color: red">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="gender">
                    <p>Gender</p>
                    <input type="radio" name="gender" id="female" value="female" class="form-control rounded-top @error('gender') is-invalid @enderror" value="{{ old('gender' )}}" autofocus/>
                    @error('gender')
                    <div class="invalid-feedback" style="color: red">
                        {{ $message }}
                    </div>
                    @enderror
                    <label for="female">Female</label>
                    <input type="radio" name="gender" id="male" value="male" checked>
                    <label for="male">Male</label>
                </div>

                <div class="back-submit">
                    <div class="back">
                        <button type="button" onclick="registerP1()">Back</button>
                    </div>
                    <div class="submit">
                        <button type="submit">Submit</button>
                    </div>
                </div>
            </nav>
        </form>
        </section>
        <footer>
            <img src="../image/register/Footer.png" alt="template footer">
        </footer>
    </body>
    <script src="script.js"></script>
    <script src="https://kit.fontawesome.com/ca8cef09e9.js" crossorigin="anonymous"></script>
</html>
