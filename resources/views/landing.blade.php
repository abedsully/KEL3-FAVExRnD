<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Favebook</title>
    <link rel="stylesheet" href="{{ asset('css/landing.css') }}">
    {{-- Bootstrap CSS --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    {{-- Icon Logo --}}
    <link rel="icon" href="/image/login/icon.svg" sizes="any" type="image/svg+xml">
    <style>
    /* Added Font Awesome Links */
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
    </style>
</head>
<body>
    
    <nav>
        <a href="/"><img src="image/login/logo.png" id= favebook alt="favebook"></a>
        <div class = "button">
            <button id= "login" >Login</button>
            <button id = "register">Register</button>
        </div>
    </nav>
    
    <div class="center">
        <img src="image/login/landingbn.png" alt="">
        <div class ="content">
            <h1 class = "create">Create</h1>
            <h1 class = "comment">Comment</h1>
            <h1 class = "connect">Connect</h1>
        </div>
    </div>
    
</body>
</html>
