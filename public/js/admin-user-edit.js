(function() {

    var changePassword = document.getElementById('change-password');
    var changeAvatar = document.getElementById('change-avatar');
    var password = document.getElementById('password');
    var passwordConfirmation = document.getElementById('password_confirmation');
    var avatar = document.getElementById('avatar');
    
    changePassword.addEventListener('click', checkedChangePassword);
    changeAvatar.addEventListener('click', checkedChangeAvatar);
    
    function checkedChangePassword() {
        console.log('pass');
        password.style.display = 'inherit';
        passwordConfirmation.style.display = 'inherit';
    }

    function checkedChangeAvatar() {
        console.log('avatar');
        avatar.style.display = 'inherit';
    }
    
})();