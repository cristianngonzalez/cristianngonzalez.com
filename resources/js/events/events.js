const btn_password_eye = document.getElementsByClassName('btn-password-eye');

for (let i = 0; i < btn_password_eye.length; i++) {
    btn_password_eye[i].addEventListener('click', function () {
        const input = this.previousElementSibling;
        input.type = input.type === 'password' ? 'text' : 'password';
    });
}