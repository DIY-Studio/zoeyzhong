$(document).ready(function () {

 $(".fournote").draggable();
 $(".eightnote").draggable();
 $(".twoeightnote").draggable();
 $(".halfnote").draggable();
 $(".onenote").draggable();
 $(".bottomnote1").draggable();
 $(".bottomnote2").draggable();
 $(".bottomnote3").draggable();

});

$(document).ready(function () {

 $("#s4").draggable();
 $("#s2").draggable();
 
 $(".container1").droppable({
 
     drop: function(event, ui) {
      	var rightId = $(ui.draggable).attr('id');

      	if(rightId=='s2'){
      		$( this ).addClass( "correct" );
        }
         else{

        	$( this ).addClass( "wrong" );
        	}
      	}

    });
    $(".container2").droppable({
 
     drop: function(event, ui) {
      	var rightId = $(ui.draggable).attr('id');

      	if(rightId=='s4'){
      		$( this ).addClass( "correct" );
        }
         else{

        	$( this ).addClass( "wrong" );
        	}
      	}

    });
  
});