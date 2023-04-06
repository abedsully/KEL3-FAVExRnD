@foreach($users as $user)
<form>
    <div class="name">
        <div class="first-name">
            <label>First Name</label>
            <input type="text" placeholder="Enter your First Name here" value="{{$user->firstName}}">
        </div>

        <div class="last-name">
            <label>Last Name</label>
            <input type="text" placeholder="Enter your First Name here" value="{{$user->lastName}}">
        </div>
    </div>
    <div class="email">
        <label>Email</label>
        <input type="email" placeholder="Enter your email here" value="{{$user->email}}">
    </div>
    <div class="username">
        <label>Username</label>
        <input type="text" placeholder = "Enter your username here" value="{{$user->username}}">
    </div>
    <div class="birth">
        <div class="pob">
            <label>Place Of Birth</label>
            <input type="text" placeholder="Enter your place of birth" value="{{$user->place}}">
        </div>
        <div class="dob">
            <label for="">Date of Birth</label>
            <input type="date" value="{{$user->dob}}">
        </div>
    </div>
    <div class="phone-number">
        <label for="">Phone Number</label>
        <input type="tel" placeholder="+6281234567890" value="{{$user->number}}">
    </div>
    <div id="button">
        <button>Save</button>
    </div>
</form>
@endforeach
