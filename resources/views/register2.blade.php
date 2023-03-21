<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Register • Favebook</title>
        <link rel="stylesheet" href="{{ asset('/css/register2.css') }}">
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
            <form action="/" class="form2" id="form2" autocomplete="off">
                <div class="u-name">
                    <label for="username">Username</label>
                    <input type="text" placeholder="Enter your username here" id="username">
                </div>
                <div class="place-date">
                    <div class="birth-place">
                        <label for="POB">Place of Birth</label>
                        <input type="text" placeholder="Jawa Barat" id="POB">
                    </div>
                    <div class="birth-date">
                        <label for="DOB">Date of Birth</label>
                        <input type="date" placeholder="DD-MM-YY" id="DOB">
                    </div>
                </div>
                <div class="phone">
                    <label for="phone-number">Phone Number</label>
                    <input type="text" placeholder="Enter your phone number here (Ex : +62XXXXXXXXXXX)" id="phone-number">
                </div>
                <div class="gender">
                    <p>Gender</p>
                    <input type="radio" name="gender" id="female" value="female">
                    <label for="female">Female</label>
                    <input type="radio" name="gender" id="male" value="male" checked>
                    <label for="male">Male</label>
                </div>
                <div class="back-submit">
                    <div class="back">
                        <a href="/register" type="submit">Back</a>
                    </div>
                    <div class="submit">
                        <button type="submit">Submit</button>
                    </div>
                </div>
            </form>
        </section>
        <footer>
            <img src="../image/register/footer.png" alt="template footer">
        </footer>
    </body>
    <script src="https://kit.fontawesome.com/ca8cef09e9.js" crossorigin="anonymous"></script>
</html>
