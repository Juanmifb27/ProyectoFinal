document.querySelector('#campo_password span').addEventListener('click', e =>{
    const passwordInput = document.querySelector('#password');
    if (e.target.classList.contains('fa-lock')) {
        e.target.classList.remove('fa-lock');
        e.target.classList.add('fa-unlock');
        passwordInput.type = 'text';
    }else{
        e.target.classList.remove('fa-unlock');
        e.target.classList.add('fa-lock');
        passwordInput.type = 'password';
    }
});