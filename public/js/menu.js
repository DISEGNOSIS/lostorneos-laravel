(function(){
	const dropdownButtons = document.getElementsByClassName('dropdown-button');

	dropdownButtons.forEach(function(dropdownButton) {
		dropdownButton.addEventListener('mouseover', show);
	});

	function show() {
		console.log(this);
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

})();

// JavaScript Document
//window.onload(function() {
//	"use strict";
//	$(".main-nav").css("display", "none");
//});
$(".toggle-nav").click(function() {
	"use strict";
	$(this).next().slideToggle();
});
