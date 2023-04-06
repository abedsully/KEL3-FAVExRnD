<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/editpassword.css') }}">
    <script src="{{ asset('/js/script.js') }}"></script>
    <link rel="icon" href="/image/login/icon.svg" sizes="any" type="image/svg+xml">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
    </style>
        <title>Home • Favebook </title>
</head>
<body>

    @auth()



    <form action="/logout" method="POST">
        @csrf
        <button type="submit">Logout</button>
    </form>

    <a href="/edit-profile/{{auth()->user()->id}}">Edit</a>

    {{auth()->user()->id}}

    {{-- <a class="profile-section" href="/edit-profile/{{$user->id}}">Profile</a> --}}

    <footer>
        <img src="image/login/Footer.png" alt="">
    </footer>
    <script src="script.js"></script>
    <script src="https://kit.fontawesome.com/ca8cef09e9.js" crossorigin="anonymous"></script>
    @endauth
</body>
</html>
