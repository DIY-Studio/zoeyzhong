$(document).ready(function(){
	
	$(".menubar").sticky({ topSpacing: -150 });
		
		
	//position the nav
	
//	$(".menubar").css('top',-3000);


	// hides the #back-to-top button on document load
	$("#back-to-top").hide();
	
	// fade in #back-to-top button when browser is scrolled to x amount
	$(function () {
	$(window).scroll(function () {
		if ($(this).scrollTop() > 200) {
			$('#back-to-top').fadeIn(600);
//			$('.menubar').fadeIn(600);
			} else {
				$('#back-to-top').fadeOut(600);
//				$('.menubar').fadeOut(600);
				}
	});
	
	// scrolls the body back to 0px on click
	$('#back-to-top').click(function(){
		$('body,html').animate({scrollTop: 0}, 400);
			});
	});
	
	//---------------------------------------------------------------------------
	// the code for the smooth scroll to anchors
	$('a[href^="#"]').on('click',function (e) {
	    e.preventDefault();

	    var target = this.hash,
	    $target = $(target);

	    $('html, body').stop().animate({
	        'scrollTop': $target.offset().top - 70
	    }, 900, 'swing', function () {
	        window.location.hash = target;
	    });
	});

});
