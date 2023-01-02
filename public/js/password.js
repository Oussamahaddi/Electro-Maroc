


let pwdVisibility = document.getElementById("password_eye");
let pwd = document.getElementById('password');

pwdVisibility.addEventListener('click', e => {
    // console.log(pwdVisibility)
    if (pwdVisibility.getAttribute('class') === 'fa-solid fa-eye-slash') {
        pwd.setAttribute('type', 'text');
        pwdVisibility.setAttribute('class', 'fa-solid fa-eye');
    } else {
        pwd.setAttribute('type', 'password');
        pwdVisibility.setAttribute('class', 'fa-solid fa-eye-slash');
    }
})

