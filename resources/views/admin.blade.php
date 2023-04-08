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
        <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
        {{-- Custom JS --}}
        <script src="{{ asset('/js/admin.js') }}"></script>
        {{-- Bootstrap CSS --}}
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
        <title>Admin Dashboard • Favebook</title>
    </head>
    <body>
        <nav class="navbar">
            <div class="logo">
                <a href="/home/{{$user->id}}"><img src="assets/logo.png" alt="Company Logo"></a>
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
        <section class="post-report-wrapper">
            <div class="title">
                <h1 id="menu1" onclick="openPosts()">Posts</h1>
                <h1 id="menu2" onclick="openReports()">Reports</h1>                
            </div>
            <hr>
            <section class="posts" id="posts">
                <div class="allpost-detail">
                    <aside class="all-post">
                        <h2>All Posts</h2>
                        <hr>
                            <div class="info-1">
                                <img src="assets/Baron.png" alt="Profile Picture">
                                <p>Blockchain "Barron"</p>
                            </div>
                            <div class="info-2">
                                <img src="assets/Guru.png" alt="Profile Picture">
                                <p>GNUguru</p>
                            </div>
                            <div class="info-3">
                                <img src="assets/pp.png" alt="Profile Picture">
                                <p>Mr. Chadest</p>
                            </div>
                    </aside>
                    <aside class="detail-post">
                        <div class="post-information1">
                            <div class="info-1">
                                <img src="assets/Baron.png" alt="Profile Picture">
                                <p>Blockchain "Barron"</p>
                                <img src="assets/Delete Button.png" class="delete" alt="delete">
                            </div>
                            <hr>
                            <p>Dude I own this NFT. Do you really think you can get away with theft when you’re showing what you stole directly to my face. My lawyers will make an easy job of this case. Prepare to say goodbye to your luscious life and start preparing for the streets. I will ruin you.</p>
                        </div>
                        <!-- Seandainya belum ada postingan -->
                        <div class="no-post">
                            <p>User Has Not Posted</p>
                        </div>
                    </aside>
                </div>
            </section>
            <section class="reports" id="reports">
                <div class="allreports-detail">
                    <aside class="all-reports">
                        <h2>All Reports</h2>
                        <hr>
                            <div class="info-1">
                                <img src="assets/Baron.png" alt="Profile Picture">
                                <p>Blockchain "Barron"</p>
                            </div>
                            <div class="info-2">
                                <img src="assets/Guru.png" alt="Profile Picture">
                                <p>GNUguru</p>
                            </div>
                            <div class="info-3">
                                <img src="assets/pp.png" alt="Profile Picture">
                                <p>Mr. Chadest</p>
                            </div>
                    </aside>
                    <aside class="reporting-user">
                        <div class="user-1">
                            <img src="assets/Baron.png" alt="Profile Picture">
                            <p>Blockchain Barron's Reports</p>
                        </div>
                        <aside class="detail-report">
                            <div class="report-information1">
                                <h6>Reported User</h6>
                                <div class="info-1">
                                    <img src="assets/Guru.png" alt="Profile Picture">
                                    <p>GNUguru</p>
                                    <img src="assets/Delete Button.png" class="delete" alt="delete">
                                </div>
                                <hr>
                                <p>Subject: Stolen NFT - Urgent Report<br><br>My NFT was stolen, and I am furious. I worked hard to create this valuable digital asset, and someone bypassed my security measures to take it. I demand immediate action to recover my stolen NFT and bring the perpetrator to justice. This theft has caused me significant financial and emotional damage, and I expect compensation. Please take this matter seriously and resolve it promptly.
                                <br><br>Sincerely,<br>Blockchain Baron</p>
                            </div>
                    </aside>
            </section>
        </section>
        <footer>
            <img src="assets/Footer.png"  alt="Footer">
        </footer>

    {{-- Font Awesome JS --}}
       <script src="https://kit.fontawesome.com/ca8cef09e9.js" crossorigin="anonymous"></script>

       {{-- Bootstrap JS --}}
       <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
       <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
       <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
</html>