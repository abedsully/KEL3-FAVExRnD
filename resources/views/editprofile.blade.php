<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/editprofile.css') }}">
    <link rel="icon" href="/image/login/icon.svg" sizes="any" type="image/svg+xml">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
    </style>
        <title>Edit Profile • Favebook </title>
</head>
<body>
    <nav>
        <a href="/">
            <img src="image/login/logo.png" class="logo" alt="">
        </a>
        <a href="">
            <img class = "profile-pitcure" src="image/login/Rin.jpg" alt="">
        </a>
    </nav>
    <div class="center">
        <div class="left">
            <div class="profile">
                <img src="image/login/Rin.jpg" alt="">
                <div class = "profile-content">
                    <h2>Username</h2>
                    <a href="">Change Profile Photo</a>
                </div>
            </div>
            <a class="profile-section" href="/editprofile">Profile</a>
            <a class="password-section" href="">Password</a>
        </div>

        <div class="right">
            <h1>My Profile</h1>
            <form>
                <div class="name">
                    <div class="first-name">
                        <label>First Name</label>
                        <input type="text" placeholder="Enter your First Name here">
                    </div>
                    <div class="last-name">
                        <label>Last Name</label>
                        <input type="text" placeholder="Enter your First Name here">
                    </div>
                </div>
                <div class="email">
                    <label>Email</label>
                    <input type="email" placeholder="Enter your email here">
                </div>
                <div class="username">
                    <label>Username</label>
                    <input type="Username" placeholder = "Enter your username here">
                </div>
                <div class="birth">
                    <div class="pob">  
                        <label>Place Of Birth</label>
                        <select name="place" id="place">
                            <option value="">Select state</option>
                            <option value="AC">Aceh</option>
                            <option value="BA">Bali</option>
                            <option value="BB">Bangka Belitung Islands</option>
                            <option value="BT">Banten</option>
                            <option value="BE">Bengkulu</option>
                            <option value="JT">Central Java</option>
                            <option value="KT">Central Kalimantan</option>
                            <option value="ST">Central Sulawesi</option>
                            <option value="JI">East Java</option>
                            <option value="KI">East Kalimantan</option>
                            <option value="NT">East Nusa Tenggara</option>
                            <option value="GO">Gorontalo</option>
                            <option value="JK">Jakarta</option>
                            <option value="JA">Jambi</option>
                            <option value="KA">Kalimantan</option>
                            <option value="LA">Lampung</option>
                            <option value="NU">Lesser Sunda Islands</option>
                            <option value="MA">Maluku</option>
                            <option value="ML">Maluku Islands</option>
                            <option value="KU">North Kalimantan</option>
                            <option value="MU">North Maluku</option>
                            <option value="SA">North Sulawesi</option>
                            <option value="SU">North Sumatra</option>
                            <option value="PA">Papua</option>
                            <option value="RI">Riau</option>
                            <option value="KR">Riau Islands</option>
                            <option value="KS">South Kalimantan</option>
                            <option value="SN">South Sulawesi</option>
                            <option value="SS">South Sumatra</option>
                            <option value="SG">Southeast Sulawesi</option>
                            <option value="YO">Special Region of Yogyakarta</option>
                            <option value="SL">Sulawesi</option>
                            <option value="SM">Sumatra</option>
                            <option value="JB">West Java</option>
                            <option value="NB">West Nusa Tenggara</option>
                            <option value="PB">West Papua</option>
                            <option value="SR">West Sulawesi</option>
                            <option value="SB">West Sumatra</option>
                        </select>
                    </div>
                    <div class="dob">
                        <label for="">Date of Birth</label>
                        <input type="date">
                    </div>
                </div>
                <div class="phone-number">
                    <label for="">Phone Number</label>
                    <input type="tel" placeholder="+6281234567890">
                </div>
                <div id="button">
                    <button>Save</button>
                </div>
            </form>
        </div>
    </div>

    <footer>
        <img src="image/Footer.png" alt="">
    </footer>
</body>
</html>