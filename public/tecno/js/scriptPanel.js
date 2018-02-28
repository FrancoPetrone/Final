
$(document).ready(function(){
	
	$('#cielo').click(function(e){	
		e.preventDefault();
   		volver  = $(this).attr('href');
    	$('html, body').animate({
        scrollTop: $(volver).offset().top
    	}, 2000);
	});

});