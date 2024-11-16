document.addEventListener('DOMContentLoaded', () => {
    const phoneInput = document.getElementById('phone');
    const termsCheckbox = document.getElementById('terms');
    const registerButton = document.querySelector('.status.reviewed');

    function toggleRegisterButton() {
        registerButton.disabled = !(phoneInput.value && termsCheckbox.checked);
    }

    phoneInput.addEventListener('input', toggleRegisterButton);
    termsCheckbox.addEventListener('change', toggleRegisterButton);
});