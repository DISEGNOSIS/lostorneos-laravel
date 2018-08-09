(function(){
	const dropdownButtons = document.getElementsByClassName('dropdown-button');
	const toggleNav = document.querySelector('.toggle-nav');

	toggleNav.addEventListener('click', toggle);

	dropdownButtons.forEach(function(dropdownButton) {
		dropdownButton.addEventListener('mouseover', show);
	});

	function show() {
		this.classList.toggle('activo');
		const submenu = this.nextElementSibling;
		console.log(submenu)
		if(submenu.style.maxHeight) {
			console.log(submenu.style.maxHeight)
			submenu.style.maxHeight = null;
			submenu.style.margin = null;
		} else {
			submenu.style.maxHeight = submenu.scrollHeight + "px";
			submenu.style.margin = '0.75em';
		}
	}

	function toggle() {
		$(this).next().slideToggle();
	}

})();
