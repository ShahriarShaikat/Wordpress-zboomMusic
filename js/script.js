(function($){
	$(function () {
		  $("#slider").responsiveSlides({
			auto: true,
			pager: false,
			nav: true,
			speed: 500,
			maxwidth: 962,
			namespace: "centered-btns"
		  });
		});

	
    
	/*$( window ).load(function() {
		$(window).scrollTo(0, 1200);
  console.log("Scrolled...!");
});
*/
})(jQuery);