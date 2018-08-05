(function() {

    var changePassword = document.getElementById('change-password');
    var changeAvatar = document.getElementById('change-avatar');
    var password = document.getElementById('password');
    var passwordConfirmation = document.getElementById('password_confirmation');
    var avatar = document.getElementById('avatar');
    
    changePassword.addEventListener('click', checkedChangePassword);
    changeAvatar.addEventListener('click', checkedChangeAvatar);
    
    function checkedChangePassword() {
        password.style.display = 'flex';
        passwordConfirmation.style.display = 'flex';
    }

    function checkedChangeAvatar() {
        avatar.style.display = 'flex';
    }
    
})();