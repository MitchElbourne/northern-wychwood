/*/
  *  ScrollTo
/*/
function scrollToConfig() {

	var subNavLinks = document.querySelectorAll(".nav-link");


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

	})
}
scrollToConfig();
