(()=>{

	const body = document.getElementsByTagName("body")[0];
	const meassage = "Welcome to BV Boilerplate!";
	body.onload = ()=>{

		const ToggleMenu = window.document.getElementsByClassName('toggle-button')[0]

		ToggleMenu.addEventListener('click', ()=>{

			let mobileMenu = window.document.getElementsByClassName('navigation-box')[0]
			let menuOpen = mobileMenu.dataset.menu === 'open'

			function openMenu() {
				mobileMenu.style.left = '-270px'
				mobileMenu.dataset.menu = 'closed'
			}

			function closeMenu() {
				mobileMenu.style.left = '0px'
				mobileMenu.dataset.menu = 'open'
			}

			menuOpen ? openMenu() : closeMenu()

		})

	};
	// end onload

})();