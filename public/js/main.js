(function ($) {
	"use strict";
	if ($(".typedText").length == 1) {
		var titlesList = $(".titles").text();
		var texts = new Typed(".typedText", {
			strings: titlesList.split(","),
			typeSpeed: 80,
			loop: true,
			backDelay: 1100,
			backSpeed: 30,
		});
	}
})(jQuery);

var links = document.getElementsByClassName('sideLinks')
for(var i = 0; i <= links.length; i++)
   addClass(i)
function addClass(id){
   setTimeout(function(){
      if(id > 0) links[id-1].classList.remove('hover')
      links[id].classList.add('hover')
   }, id*750) 
}

