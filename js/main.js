var btn = document.getElementById('btn')
var newBtn = document.getElementById('newBtn')
var reBtn = document.getElementById('reBtn')

btn.addEventListener('click', function(){
    //to Password
    let password = document.getElementById('password')

    if(password.type == "password"){
        password.type = "text"
        this.setAttribute("class", "bx bxs-hide")
    }else{
        password.type = "password"
        this.setAttribute("class", "bx bxs-show")
    }
})

newBtn.addEventListener('click', function(){
    //to new Password
    let newPassword = document.getElementById('newPassword')

    if(newPassword.type == "password"){
        newPassword.type = "text"
        this.setAttribute("class", "bx bxs-hide")
    }else{
        newPassword.type = "password"
        this.setAttribute("class", "bx bxs-show")
    }
})

reBtn.addEventListener('click', function(){
    //to Re-enter Password
    let rePassword = document.getElementById('rePassword')

    if(rePassword.type == "password"){
        rePassword.type = "text"
        this.setAttribute("class", "bx bxs-hide")
    }else{
        rePassword.type = "password"
        this.setAttribute("class", "bx bxs-show")
    }
})


const containerForm = document.querySelector('div.container__form');
const formSingIn = document.querySelector('form.form__sing-in');
const formSingUp = document.querySelector('form.form__sing-up');
const homeSingIn = document.querySelector('a.home__sing-in');
const homeSingUp = document.querySelector('a.home__sing-up');

homeSingUp.onclick = (()=>{
    containerForm.style.transform = "translateY(0%)";
    containerForm.style.display = "flex";
    formSingIn.style.display = "none";
    formSingUp.style.display = "block";
});
homeSingIn.onclick = (()=>{
    containerForm.style.transform = "translateY(0%)";
    containerForm.style.display = "flex";
    formSingIn.style.display = "block";
    formSingUp.style.display = "none";
});


const singIn = document.querySelector('form.form__sing-in');
const singUp = document.querySelector('form.form__sing-up');
const checkSingIn = document.querySelector('label.checkSingIn');
const checkSingUp = document.querySelector('label.checkSingUp');

checkSingUp.onclick = (()=>{
    singIn.style.display = "none";
    singUp.style.display = "block";
});
checkSingIn.onclick = (()=>{
    singIn.style.display = "block";
    singUp.style.display = "none";
});
