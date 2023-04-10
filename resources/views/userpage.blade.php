<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>User Page • Favebook</title>
        <link rel="stylesheet" href="{{ asset('/css/userpage.css') }}">
        <link rel="icon" href="/image/login/icon.svg" sizes="any" type="image/svg+xml">
        <style>
            /* Added Font Awesome Icon Link 1 */
            @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
        </style>
    </head>
    <body>

        @foreach($posts as $post)
                {{$post->title}}
            @endforeach
        <div class="background">
        <nav class="navbar">
            <div class="logo">
                <img src="image/login/logo.png" alt="Company Logo">
            </div>
            <div class="profile-picture">
                <img src="assets/pp.png" alt="Profile Picture">
            </div>
        </nav>
        <section class="user-profile">
            <div class="pp">
                <img src="assets/pp2.png" alt="User Profile Picture">
            </div>
            <div class="user-info">
                <h2>Mr. Chadest</h2>
                <p>10 post</p>
                <form action="editprofile##" class="style-button">
                    <button type="submit"><i class="fa-solid fa-pen"></i>Edit profile</button>
                </form>
            </div>
        </section>
        <section class="my-post">
            <div class="my-postingan">
                <h3>My Posts</h3>
                <hr>
            </div>
            <div class="post-wrapper">
                <div class="wrapper1">

                </div>
                <div class="profile-picture">
                    <img src="image/userpage/pp.png" alt="Profile Picture">
                </div>
            </nav>
        <div class="user-post-wrapper">
            <section class="user-profile">
                <div class="pp">
                    <img src="image/userpage/pp2.png" alt="User Profile Picture">
                </div>
                <div class="user-info">
                    <h2>Mr. Chadest</h2>
                    <p>10 post</p>
                    <form action="editprofile##" class="style-button">
                        <button type="submit"><i class="fa-solid fa-pen"></i>Edit profile</button>
                    </form>
                </div>
            </section>
            <aside class="my-post">
                <div class="my-postingan">
                    <h3>My Posts</h3>
                    <hr>
                </div>
                <div class="post-wrapper">
                    <div class="wrapper1">
                        <div class="informasi">
                            <img src="image/userpage/pp2.png" alt="Profile foto"> 
                            <p>Mr. Chadest</p>
                        </div>
                        <div class="text1" id="post-1">
                            <hr>
                            <p>Dude I own this NFT. Do you really think you can get away with theft when you’re showing what you stole directly to my face. My lawyers will make an easy job of this case. Prepare to say goodbye to your luscious life and start preparing for the streets. I will ruin you.</p>
                        </div>
                    </div>
                    <div class="wrapper2">
                        <div class="informasi">
                            <img src="image/userpage/pp2.png" alt="Profile foto"> 
                            <p>Mr. Chadest</p>
                        </div>
                            <img src="image/userpage/postingan.png" alt="post-1">
                    </div>
                    <div class="wrapper1">
                        <div class="informasi">
                            <img src="image/userpage/pp2.png" alt="Profile foto"> 
                            <p>Mr. Chadest</p>
                        </div>
                        <div class="text1" id="post-1">
                            <hr>
                            <p>Ini hanyalah contoh postingan ke 3. Postingan ini dibuat dengan tujuan menunjukkan overflow-y pada tampilan</p>
                        </div>
                    </div>
                </div>
            </aside>
        </div>
        <footer>
            <img src="{{url('/image/login/Footer.png')}}"  alt="Footer">
        </footer>
    </body>
    <script src="https://kit.fontawesome.com/ca8cef09e9.js" crossorigin="anonymous"></script>
</html>
