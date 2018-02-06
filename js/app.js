$(document).ready(function () {
	$(".navbar-nav li a").click(function(event) {
	$(".navbar-collapse").collapse('hide');
	});
});

$(document).ready(function(){
	var scroll_start = 0;
	var startchange  = $('#nav-change');
	var offset       = startchange.offset();
		if ( startchange.length ){
			$(document).scroll(function() {
			scroll_start = $(this).scrollTop();
		if ( scroll_start > offset.top ) {
			$(".navbar-default").css('background-color', 'rgba(236, 231, 231, 0.9)');
		} else {
			$('.navbar-default').css('background-color', 'transparent');
			$(".navbar-default").css('border-color', 'transparent');
			}
		});
	}
});

$(document).ready(function () {
	var trigger = $('.hamburger'),
		overlay = $('.overlay'),
		isClosed = false;

	trigger.click(function () {
		hamburger_cross();
	});

	function hamburger_cross() {

		if (isClosed == true) {
			overlay.hide();
			trigger.removeClass('is-open');
			trigger.addClass('is-closed');
			isClosed = false;
		} else {
			overlay.show();
			trigger.removeClass('is-closed');
			trigger.addClass('is-open');
			isClosed = true;
		}
	}

	$('[data-toggle="offcanvas"]').click(function () {
		$('#wrapper').toggleClass('toggled');
	});
});
