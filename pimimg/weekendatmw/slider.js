$(document).ready(function(){

		var SLIDERINTERVAL = 2000;
		var sliderIntervalController = null;

		function nextImage(active){
			var next = active.next("div");
			active.removeClass("active");
			if(next.length){
				next.addClass("active");
			}
			else{
      			active.siblings("div:first").addClass('active');
    		}
		};
		

		function startSlider(time){
            sliderIntervalController = setInterval(function(){
					nextImage($(".slider .active"));
				}, time);
			
		}
        function startSlider2(time){
            sliderIntervalController = setInterval(function(){
					nextImage($(".slider2 .active"));
				}, time);
			
		}
		
		startSlider(SLIDERINTERVAL);
		startSlider2(3000);
	});