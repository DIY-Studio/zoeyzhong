function submitForm() {
    var form =
        document.forms['myform'];
    var email = 
    'yingyingzhong610@gmail.com';
console.log('Email',email);
    var subject =
        form['subject'].value;
    var comment =
        form['comment'].value;
    var mailto = 'mailto:'+ email +
'?subject='+subject + '&body=' +comment;

    console.log ('MailTo'.mailto);
    window.location.href = mailto; 
}
 
$(function() {
	
	var currentslidenumber = 0;
	$(".slideshow-captions-all div").eq(0).show().siblings().hide();
	$(".arrow-next").click(function () {
		//currentslidenumber = currentslidenumber+1;
		currentslidenumber++;
		
		if (currentslidenumber>5) {
			currentslidenumber=0;
		}
		showSlide();
	});//end of next button
	
	$(".arrow-prev").click(function () {
		
		currentslidenumber--;
		
		if (currentslidenumber<0) {
			currentslidenumber=5;
		}
		showSlide();
	});//end of prev button
	$(".thumbnails li a").eq(0).addClass('selected');
	
	$(".thumbnails li a").click (function() {
		event.preventDefault();
		currentslidenumber =$(this).parent().index();
		showSlide();
		
	});
	
	
	
	//start function
	
	function showSlide() {
		//$(".slideshow-images img").eq(currentslidenumber).show();
		//$(".slideshow-images img").eq(currentslidenumber).siblings().hide();
		
		var calculation=-800*currentslidenumber;
		$(".slideshow-images").animate({marginLeft:calculation},1000);
		$(".slideshow-captions-all div").eq(currentslidenumber).show().siblings().hide();
		
		$(".thumbnails li a").removeClass('selected');
		$(".thumbnails li a").eq(currentslidenumber).addClass('selected');

	};//end of showSlide function
	
	
	
});

