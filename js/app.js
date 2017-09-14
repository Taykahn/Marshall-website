$(document).ready(function(){
	var scroll_start = 0;
	var startchange = $('#nav-change');
	var offset = startchange.offset();
		if (startchange.length){
			$(document).scroll(function() { 
			scroll_start = $(this).scrollTop();
		if(scroll_start > offset.top) {
			$(".navbar-default").css('background-color', 'rgba(236, 231, 231, 0.9)');
		} else {
			$('.navbar-default').css('background-color', 'transparent');
			$(".navbar-default").css('border-color', 'transparent');
			}
		});
	}
});

$(document.querySelector("#myCard")).toggle("flip");