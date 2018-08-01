(function() {
    //  ----------------  ADMIN USER CREATE  ----------------  //
    var generatePassword = document.getElementById('generate-password');
    var setPassword = document.getElementById('set-password');
    var password = document.getElementById('password');
    var passwordConfirm = document.getElementById('password-confirm');
    
    generatePassword.addEventListener('change', checkedGeneratePassword);
    setPassword.addEventListener('change', checkedSetPassword);

    //  ----------------  ADMIN USER EDIT  ----------------  //
    var changePassword = document.getElementById('change-password');
    var changeAvatar = document.getElementById('change-avatar');
    var avatar = document.getElementById('avatar');

    changePassword.addEventListener('click', checkedSetPassword);
    changeAvatar.addEventListener('click', checkedChangeAvatar);


    function checkedGeneratePassword() {
        password.style.display = 'none';
        passwordConfirm.style.display = 'none';
    }
    
    function checkedSetPassword() {
        password.style.display = 'inherit';
        passwordConfirm.style.display = 'inherit';
    }

    function checkedChangeAvatar() {
        avatar.style.display = 'inherit';
    }

    
})();