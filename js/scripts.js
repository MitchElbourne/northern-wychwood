(function ($, root, undefined, scrollTo) {

	$(function () {

		'use strict';

		/*/
		*  Closes the Navbar on scroll if it is open
		/*/

		var navbarOpen = false;
		function menuCloseOnScroll()  {
			var navContent = jQuery('.navbar-collapse');

			jQuery(window).on('scroll', lodash.throttle(function() {
				if (navContent.hasClass('show')) {
					navContent.collapse('hide');
					navContent.removeClass('show');
					jQuery('.navbar-toggler').removeClass('open');
					navbarOpen = false;
				}
			}, 500));
		}
		menuCloseOnScroll();

		/*/
			*  Close Navbar when clicking out of menu area
		/*/

		function menuCloseOnClick() {
			var navContent = jQuery('.navbar-collapse');

			jQuery('body').bind('click', function(e) {
				if(jQuery(e.target).closest('.collapse').length == 0) {
					if (navContent.hasClass('show')) {
						navContent.collapse('hide');
						navContent.removeClass('show');
						jQuery('.navbar-toggler').removeClass('open');
						navbarOpen = false;
					}
				}
			});
		}
		menuCloseOnClick();


		/*/
		  *  ScrollTo
		/*/
		function scrollToConfig() {

			var subNavLinks = document.querySelectorAll(".nav-link");
			var contactUs = document.querySelectorAll(".contact-cta");

			subNavLinks.forEach(function(item){

				var hash = item.href.substring(item.href.indexOf("#")+1);

				item.onclick = function(e) {

					jQuery(window).scrollTo(
						item.hash, {
						duration: 500,
						offset: (-70)
					})

					e.preventDefault();
				}


			});

			contactUs.forEach(function(item){

				var hash = item.href.substring(item.href.indexOf("#")+1);

				item.onclick = function(e) {

					jQuery(window).scrollTo(
						item.hash, {
						duration: 500,
						offset: (-70)
					})

					if($('body').hasClass('home')) {
						e.preventDefault();
					}
				}


			})

		}
		scrollToConfig();



		function inlineLinkScroll() {
			var inlineLink = document.querySelectorAll(".inline-tag");

			inlineLink.forEach(function(item){

				var hash = item.href.substring(item.href.indexOf("#")+1);

				item.onclick = function(e) {

					jQuery(window).scrollTo(
						item.hash, {
						duration: 500,
						offset: (300)
					})
					e.preventDefault();
				}
			})

		}
		inlineLinkScroll();



		/*/
		  *  Rebranding modal
		/*/
		jQuery('#rebrand-button').click( function (){
		    jQuery('#rebrand-modal').css('display', 'none');
		})




	});

})(jQuery, this);
