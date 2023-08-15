const navbarToggler = document.querySelector('#menuBtn');

navbarToggler.addEventListener('click', function () {
	const navbarIcon = navbarToggler.querySelector('i');
	if (navbarIcon.classList.contains('fa-bars')) {
		navbarIcon.classList.remove('fa-bars');
		navbarIcon.classList.add('fa-times');
	} else {
		navbarIcon.classList.remove('fa-times');
		navbarIcon.classList.add('fa-bars');
	}
});