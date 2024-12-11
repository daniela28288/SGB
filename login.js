const togglePassword = document.getElementById('togglePassword');
const passwordInput = document.getElementById('password');

const visibleIcon = "img/icons8-ojo-cerrado-24.png";
const hiddenIcon = "img/icons8-visible-24.png";

togglePassword.src = hiddenIcon;

togglePassword.addEventListener('click', () => {
    const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
    passwordInput.setAttribute('type', type);
    togglePassword.src = type === 'password' ? hiddenIcon : visibleIcon;
});

