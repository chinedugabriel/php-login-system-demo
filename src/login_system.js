let btnRegister = document.getElementById("btn-register");
let btnLogin = document.getElementById("btn-login");

// signup & login form sections
let loginFormSection = document.getElementById("login-form");
let signUpFormSection = document.getElementById("signup-form");

// close form btn
let closeLoginFormSection = document.getElementById("close-login-form");
let closeSignUpFormSection = document.getElementById("close-signup-form");

// success message
let successMessage = document.getElementById('successMessage');

// function to close a form section
function closeForm(formSection){
    formSection.style.display = "none";
}

// signUp btn to show signup form section
btnRegister.addEventListener('click',()=>{
    signUpFormSection.style.display = "flex";
});

// Login btn to show login form section
btnLogin.addEventListener('click',()=>{
    loginFormSection.style.display = "flex";
});

// btn for closing the form section
closeLoginFormSection.addEventListener("click",()=>{
    closeForm(loginFormSection);
});

// btn for closing the form section
closeSignUpFormSection.addEventListener("click",()=>{
    closeForm(signUpFormSection);
});

function messageAlert(){
    setTimeout(()=>{
        successMessage.remove();
    },3000);
}

// messageAlert();