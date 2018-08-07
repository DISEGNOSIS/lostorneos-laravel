/* (function() {
	const faqs = document.querySelectorAll('.faq');

	faqs.addEventListener('click', show);

	function show() {

	}
})(); */
// JavaScript Document
//window.onload(function() {
//	"use strict";
//	$(".main-nav").css("display", "none");
//});
$(".faq").click(function() {
	"use strict";
	$(this).next().slideToggle();
});