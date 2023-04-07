<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="{{ asset('css/home.css') }}">
        <script src="{{ asset('/js/homescript.js') }}"></script>
        <link rel="icon" href="/image/login/icon.svg" sizes="any" type="image/svg+xml">
        <style>
            @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
        </style>
            <title>Home • Favebook </title>
    </head>
    <body>
        <nav class="navbar">
            <div class="logo">
                <a href="/"><img src="assets/logo.png" alt="Company Logo"></a>
            </div>
            <div class="profile-picture">
                <img src="assets/pp.png" alt="Profile Picture">
            </div>
        </nav>
        <section class="wrapper-page">
            <div class="write-post">
                <img src="assets/pp.png" alt="User-profile">
                <input type="text" placeholder="Write your post here..." onclick="openPopUp()">
                <img src="assets/file-icon.png" alt="upload file" onclick="openPopUp()">
            </div>
            <div class="post-1">
                <div class="informasi">
                    <img src="assets/Baron.png" alt="Profile foto"> 
                    <p>Blockchain “Baron”</p>
                </div>
                <div class="text1" id="post-1">
                    <hr>
                    <p>Dude I own this NFT. Do you really think you can get away with theft when you’re showing what you stole directly to my face. My lawyers will make an easy job of this case. Prepare to say goodbye to your luscious life and start preparing for the streets. I will ruin you.</p>
                </div>
            </div>
            <div class="post-2">
                <div class="informasi">
                    <img src="assets/Guru.png" alt="Profile foto"> 
                    <p>GNUguru</p>
                </div>
                <div class="text1" id="post-2">
                    <hr>
                    <img src="assets/Posted.png" alt="postingan ">
                </div>
            </div>
        </section>
        <footer>
            <img src="assets/Footer.png" alt="Footer">
        </footer>
        <!-- Pop Up -->
       <section class="pop-up" id="popUp">
            <div class="wrapper-post">
                    <h1>New Post</h1>
                    <hr>
                <div class="info-profile">
                    <img src="assets/pp.png" alt="your profile picture">
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
       <script src="https://kit.fontawesome.com/ca8cef09e9.js" crossorigin="anonymous"></script> 
    </body>
</html>
