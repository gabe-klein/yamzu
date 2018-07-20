// Look for .hamburger
var hamburger = document.querySelector(".hamburger");
var mobileMenu = document.querySelector(".navigation-menu-container");
var menuLink = document.querySelector(".site-links");

// On click
hamburger.addEventListener("click", function() {

	hamburger.classList.toggle("is-active");
	mobileMenu.classList.toggle("open");

});

menuLink.addEventListener("click", function() {

	if(mobileMenu.classList.contains("open")){
		mobileMenu.classList.toggle("open");
		hamburger.classList.toggle("is-active");
	}

});

// Enable fontawesome on CSS pseudo elements 

window.FontAwesomeConfig = {
	searchPseudoElements: true
}

$(document).ready(function(){

	$("#terms-box").change(function(){
		if($("#terms-box").prop("checked") === true) {
			$(".accept-button").removeClass('disabled-default');
		} else {
			$(".accept-button").addClass('disabled-default');
		}
	});

	$(".accept-button").click(function(e) {
        if($("#terms-box").prop("checked") === false) {
            e.preventDefault();
            return false;
        } else {
            return true;
        };
    });

});

