document.addEventListener("DOMContentLoaded", function () {
	const navbar = document.querySelector(".navbar");

	window.addEventListener("scroll", function () {
		if (window.scrollY > 0) {
			navbar.classList.remove("sticky-top");
			navbar.classList.add("fixed-top");
		} else {
			navbar.classList.remove("fixed-top");
			navbar.classList.add("sticky-top");
		}
	});
});