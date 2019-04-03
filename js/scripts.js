(function ($, root, undefined, scrollTo) {

	$(function () {

		'use strict';


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

					e.preventDefault();
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
