console.log('test')
// Tombol mata Password
function visible(){
    var x = document.getElementById('password')
    var y = document.getElementById('hide1')
    var z = document.getElementById('hide2')
    if(x.type === 'password'){
        x.type = 'text';
        y.style.display = 'block';
        z.style.display = 'none';
    }else{
        x.type = 'password';
        y.style.display = 'none';
        z.style.display = 'block';
    }
}

// Tombol mata confirm - password
function visible2(){
    var a = document.getElementById('confirmpass')
    var b = document.getElementById('hide3')
    var c = document.getElementById('hide4')
    var x = document.getElementById('password')

    if(a.type === 'password'){
        a.type = 'text';
        b.style.display = 'block';
        c.style.display = 'none';
    }else{
        a.type = 'password';
        b.style.display = 'none';
        c.style.display = 'block';
    }
}
// Visibility of Form
function registerP2(){
    var aw = document.getElementById('register1');
    var az = document.getElementById('register2');

    az.style.display = 'block';
    aw.style.display = 'none';
}
function registerP1(){
    var avv = document.getElementById('register1');
    var ily = document.getElementById('register2');

    avv.style.display = 'block';
    ily.style.display = 'none';
}

//Form Register 1
const form = document.getElementById('register1')
const firstName = document.getElementById('firstName')
const lastName = document.getElementById('lastName')
const email = document.getElementById('emailAddress')
const password = document.getElementById('password')
const confirmpass = document.getElementById('confirmpass')
const errorElement = document.getElementById('error')
function capLettValid(str) {     return /[A-Z]/.test(str); }

form.addEventListener('submit', (e) =>{
    let messages = []
    if(firstName.value ==''){
        messages.push('Name is required')
    }
    if(lastName.value ==''){
        messages.push('Name is required')
    }
    if(email.value == '' || email.value == null){
        messages.push('Email is required')
    } else if(email.value.indexOf('@')== -1 || email.value.indexOf('.com') == -1){
        messages.push('Please input the email correctly')
    }
    if (password.value == '' || password.value == null) {         
        messages.push('Password is required');     
    } else if (password.value.length<8) {         
        messages.push('Password must be atleast 8 character');     
    } else if (!capLettValid(password.value)) {         
        messages.push('Password must have atleast 1 letters and 1 Capital');     
    }
    if (!(password.value == confirmpass.value)){
        messages.push('Password & Confirm Password not match')
    }
    if (messages.length > 0){
        e.preventDefault()
        errorElement.innerText = messages.join(', ')    
    }
})

//Form Register 2
const form2 = document.getElementById('register2')
const uname = document.getElementById('username')
const POB = document.getElementById('POB')
const DOB = document.getElementById('DOB')
const phone = document.getElementById('phone-number')
const male = document.getElementById('female')
const female = document.getElementById('female')

// -------------------------------------------------------------------------------------------------------------------------------------
function loginvisible(){
    var j = document.getElementById('loginpassword')
    var k = document.getElementById('hide5')
    var l = document.getElementById('hide6')

    if(j.type === 'password'){
        j.type = 'text';
        k.style.display = 'block';
        l.style.display = 'none';
    }else{
        j.type = 'password';
        k.style.display = 'none';
        l.style.display = 'block';
    }
}

function visible3(){
    var j = document.getElementById('newpassword')
    var k = document.getElementById('hide3')
    var l = document.getElementById('hide4')

    if(j.type === 'password'){
        j.type = 'text';
        k.style.display = 'block';
        l.style.display = 'none';
    }else{
        j.type = 'password';
        k.style.display = 'none';
        l.style.display = 'block';
    }
}

function visible4(){
    var j = document.getElementById('confirmpassword')
    var k = document.getElementById('hide5')
    var l = document.getElementById('hide6')

    if(j.type === 'password'){
        j.type = 'text';
        k.style.display = 'block';
        l.style.display = 'none';
    }else{
        j.type = 'password';
        k.style.display = 'none';
        l.style.display = 'block';
    }
}
