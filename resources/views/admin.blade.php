<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta author="Axel Christopher">
        <meta description="Pop Up Page of Favebook" content="create new post">
        {{-- Custom CSS --}}
        <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
        {{-- Custom JS --}}
        <script src="{{ asset('/js/script.js') }}"></script>
        {{-- Bootstrap CSS --}}
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
        <title>Admin Dashboard • Favebook</title>
    </head>
    <body>
        <nav class="navbar">
            <div class="logo">
                <a href="/home/{{$user->id}}"><img src="{{url('/image/login/logo.png')}}" alt="Company Logo"></a>
            </div>
            <div class="profile-picture">
                <a href="/">
                    <div class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            @if($user->image != NULL)
                                <img class="profile-pitcure" src="{{asset( '/storage/Barang/' .$user->image )}}" alt="">
                            @elseif($user->image == NULL)
                                <img class="profile-pitcure" src="{{url('/image/login/ProfilePitcure.webp')}}" alt="Image"/>
                            @endif
                        </a>
                        <div class="dropdown-menu dropdown-menu-right text-right" aria-labelledby="navbarDropdown">
                          <a class="dropdown-item" href="/edit-profile/{{$user->id}}"><i class="fa fa-user-edit"></i> &nbsp Edit Profile</a>
                          <div class="dropdown-divider"></div>
                          <form action="/logout" method="POST">
                            @csrf
                            <button type="submit" class="dropdown-item"><i class="fa fa-arrow-left"></i> &nbsp Logout</button>
                        </form>
                        </div>
                    </div>
                </a>
            </div>
        </nav>

    {{-- Font Awesome JS --}}
       <script src="https://kit.fontawesome.com/ca8cef09e9.js" crossorigin="anonymous"></script>

       {{-- Bootstrap JS --}}
       <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
       <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
       <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
</html>