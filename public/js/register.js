

const toggleConfirmpass = document.querySelector('#toggleConfimPass');
const confirmpass = document.querySelector('#confirmpass');
toggleConfirmpass.addEventListener('click', () => {
    // Toggle the type attribute using
    // getAttribure() method
    const type2 = confirmpass.getAttribute('type') === 'confirmpass' ? 'text' : 'password';
    confirmpass.setAttribute('type', type2);
    // Toggle the eye and bi-eye icon
    this.classList.toggle('bi-eye');
});

const togglePassword = document.querySelector('#togglePassword');
const password = document.querySelector('#password');
togglePassword.addEventListener('click', () => {
    // Toggle the type attribute using
    // getAttribure() method
    const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
    password.setAttribute('type', type);
    // Toggle the eye and bi-eye icon
    this.classList.toggle('bi-eye');
});




