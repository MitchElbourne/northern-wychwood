/*/
  *  ScrollTo
/*/
function scrollToConfig() {

	var subNavLinks = document.querySelectorAll(".nav-link");
	var contactUs = document.querySelectorAll(".contact-cta");

	subNavLinks.forEach(function(item){

		var hash = item.href.substring(item.href.indexOf("#")+1);

		item.onclick = function(e) {

			$(window).scrollTo(
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

			$(window).scrollTo(
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

			$(window).scrollTo(
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
$('#rebrand-button').click( function (){
    $('#rebrand-modal').css('display', 'none');
})
