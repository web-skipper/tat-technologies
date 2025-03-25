
jQuery(document).ready(function ($) {

	$(window).on('scroll', function () {
		$("body").toggleClass("sticky", $(document).scrollTop() >= $('.header').outerHeight());

	});
	jQuery(".menutoggle a").on("click", function () {
		$('body').toggleClass('mbodyact');
	});
	jQuery(".menutoglclose a").on("click", function () {
		$('body').removeClass('mbodyact');
	});

});

/*--equal height---*/

equalheight = function (container) {
	var currentTallest = 0,
		currentRowStart = 0,
		rowDivs = new Array(),
		$el,
		topPosition = 0;
	$(container).each(function () {

		$el = $(this);
		$($el).height('auto')
		topPostion = $el.position().top;

		if (currentRowStart != topPostion) {
			for (currentDiv = 0; currentDiv < rowDivs.length; currentDiv++) {
				//rowDivs[currentDiv].height(currentTallest);
				rowDivs[currentDiv].css('height', currentTallest);
			}
			rowDivs.length = 0; // empty the array
			currentRowStart = topPostion;
			currentTallest = $el.height();
			rowDivs.push($el);
		} else {
			rowDivs.push($el);
			currentTallest = (currentTallest < $el.height()) ? ($el.height()) : (currentTallest);
		}
		for (currentDiv = 0; currentDiv < rowDivs.length; currentDiv++) {
			// rowDivs[currentDiv].height(currentTallest);
			rowDivs[currentDiv].css('height', currentTallest);
		}
	});
}
jQuery(window).on('load', function () {

});

jQuery(window).resize(function () {

});	
