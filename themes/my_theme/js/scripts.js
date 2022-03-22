jQuery(document).ready(function ($) {
	//  make menu responsive
	$('#menu-main-navigation').slicknav();

	// run bx slider on testimonials
	$('.testimonials-list').bxSlider({
		mode: 'fade',
	});

	// add a fixed menu if position is greater than 300px
	const headerScroll = document.querySelector('.navigation-bar');
	const rect = headerScroll.getBoundingClientRect();
	const topDistance = Math.abs(rect.top);

	fixedMenu(topDistance);
});

window.onscroll = () => {
	const scroll = window.scrollY;
	fixedMenu(scroll);
};

// adds a fixed menu on top
function fixedMenu(scroll) {
	const headerScroll = document.querySelector('.navigation-bar');
	const documentBody = document.querySelector('body');

	if (scroll > 300) {
		headerScroll.classList.add('fixed-top');
	} else {
		headerScroll.classList.remove('fixed-top');
	}
}
