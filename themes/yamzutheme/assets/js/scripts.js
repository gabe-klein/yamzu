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

// Manage 
var paymentForm = document.querySelector(".payment-form-wrapper");
