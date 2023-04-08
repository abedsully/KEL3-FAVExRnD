<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta author="Axel Christopher">
        <meta description="Pop Up Page of Favebook" content="create new post">
        <link rel="icon" href="/image/login/icon.svg" sizes="any" type="image/svg+xml">
        {{-- Custom CSS --}}
        <link rel="stylesheet" href="{{ asset('css/home.css') }}">
        {{-- Custom JS --}}
        <script src="{{ asset('/js/home.js') }}"></script>
        {{-- Bootstrap CSS --}}
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
        <title>Home • Favebook</title>
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
        <section class="wrapper-page">
            <div class="write-post">
                @if($user->image != NULL)
                    <img class="profile-pitcure" src="{{asset( '/storage/Barang/' .$user->image )}}" alt="">
                @elseif($user->image == NULL)
                    <img class="profile-pitcure" src="{{url('/image/login/ProfilePitcure.webp')}}" alt="Image"/>
                @endif
                <input type="text" placeholder="Write your post here..." onclick="openPopUp()">
                <img src="{{url('/image/login/file-icon.png')}}" alt="upload file" onclick="openPopUp()">
            </div>
            <div class="post-1">
                <div class="informasi">
                    <img src="{{url('image/home/Baron.png')}}" alt="Profile foto">
                    <p>Blockchain “Baron”</p>
                </div>
                <div class="text1" id="post-1">
                    <hr>
                    <p>Dude I own this NFT. Do you really think you can get away with theft when you’re showing what you stole directly to my face. My lawyers will make an easy job of this case. Prepare to say goodbye to your luscious life and start preparing for the streets. I will ruin you.</p>
                </div>
            </div>
            <div class="post-2">
                <div class="informasi">
                    <img src="{{url('image/home/Guru.png')}}" alt="Profile foto">
                    <p>GNUguru</p>
                </div>
                <div class="text1" id="post-2">
                    <hr>
                    <img src="{{url('image/home/Posted.png')}}" alt="postingan ">
                </div>
            </div>
            <div class="post-1">
                <div class="informasi">
                    <img src="{{url('image/home/Baron.png')}}" alt="Profile foto">
                    <p>Blockchain “Baron”</p>
                </div>
                <div class="text1" id="post-1">
                    <hr>
                    <p>Ini hanyalah contoh postingan ke 3. Postingan ini dibuat dengan tujuan menunjukkan overflow-y pada tampilan</p>
                </div>
            </div>
        </section>
        <footer>
            <img src="{{url('/image/login/Footer.png')}}"  alt="Footer">
        </footer>


        <!-- Pop Up -->
       <section class="pop-up" id="popUp">
            <div class="wrapper-post">
                    <h1>New Post</h1>
                    <hr>
                <div class="info-profile">
                    <img src="{{url('/image/home/pp.png')}}" alt="your profile picture">
                    <p>Mr. Chadest</p>
                </div>
                <form action="" method="get" class="forum">
                    <div class="post-title">
                        <input type="text" placeholder="Write your post title here..." id="post-title">
                    </div>
                    <div class="post-desc">
                        <textarea placeholder="What are you thinking about this time?" id="post-desc" cols="30"></textarea>
                    </div>
                    <div class="post-btn">
                        <button type="submit" class="style-submit" onclick="closePopUp()">Post</button>
                        <div class="post-file">
                            <i class="fa-solid fa-image"><input type="file"></i>
                        </div>
                    </div>
                </form>
            </div>
       </section>

       {{-- Font Awesome JS --}}
       <script src="https://kit.fontawesome.com/ca8cef09e9.js" crossorigin="anonymous"></script>

       {{-- Bootstrap JS --}}
       <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
       <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
       <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
</html>
