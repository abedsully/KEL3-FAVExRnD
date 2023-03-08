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

function visible2(){
    var a = document.getElementById('confirmPsw')
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
    if(a != x){
        alert('blokkk')
    }
}

const form = document.getElementById('form')
const fullName = document.getElementById('name')
const email = document.getElementById('email')
const comment = document.getElementById('komentar')
const errorElement = document.getElementById('error')

form.addEventListener('submit', (e) =>{
    let messages = []
    if(fullName.value ==''){
        messages.push('Name is required')
    } else if(fullName.value.length <3){
        messages.push('Name required min 3 characters')
    }
    if (email.value == '' || email.value == null){
        messages.push('Email is required')
    } else if(email.value.indexOf('@')== -1 || email.value.indexOf('.com') == -1){
        messages.push('Please input the email correctly')
    } 
    if (comment.value.length<3){
        messages.push('We need more comment, atleast 3 characters, thanks!')
    }
    if (messages.length > 0){
        e.preventDefault()
        errorElement.innerText = messages.join(', ')    
    }
})