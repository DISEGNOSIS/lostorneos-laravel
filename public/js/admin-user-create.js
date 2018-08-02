(function() {

    var generatePassword = document.getElementById('generate-password');
    var setPassword = document.getElementById('set-password');
    var password = document.getElementById('password');
    var passwordConfirmation = document.getElementById('password_confirmation');
    
    generatePassword.addEventListener('change', checkedGeneratePassword);
    setPassword.addEventListener('change', checkedSetPassword);

    function checkedGeneratePassword() {
        password.style.display = 'none';
        passwordConfirmation.style.display = 'none';
    }
    
    function checkedSetPassword() {
        password.style.display = 'inherit';
        passwordConfirmation.style.display = 'inherit';
    }

    
})();