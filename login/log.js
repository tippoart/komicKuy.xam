const passwordInput = document.getElementById('pass');
const showPassIcon = document.getElementById('showPass');
const hidePassIcon = document.getElementById('hidePass');

showPassIcon.addEventListener('click', () => togglePassword(true));
hidePassIcon.addEventListener('click', () => togglePassword(false));

function togglePassword(showPassword) {
    passwordInput.type = showPassword ? 'text' : 'password';
    showPassIcon.style.display = showPassword ? 'none' : 'block';
    hidePassIcon.style.display = showPassword ? 'block' : 'none';
}
