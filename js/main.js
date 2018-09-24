"use strict";

(function () {

	var body = document.getElementsByTagName("body")[0];
	var meassage = "Welcome to BV Boilerplate!";
	body.onload = function () {

		var ToggleMenu = window.document.getElementsByClassName('toggle-button')[0];

		ToggleMenu.addEventListener('click', function () {

			var mobileMenu = window.document.getElementsByClassName('navigation-box')[0];
			var menuOpen = mobileMenu.dataset.menu === 'open';

			function openMenu() {
				mobileMenu.style.left = '-270px';
				mobileMenu.dataset.menu = 'closed';
			}

			function closeMenu() {
				mobileMenu.style.left = '0px';
				mobileMenu.dataset.menu = 'open';
			}

			menuOpen ? openMenu() : closeMenu();
		});
	};
	// end onload
})();