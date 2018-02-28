
$(document).ready(function(){
	$('#cielo').click(function(e){	
		e.preventDefault();
   		volver  = $(this).attr('href');
    	$('html, body').animate({
        scrollTop: $(volver).offset().top
    	}, 2000);
	});

	$(document).ajaxStart(function() {
	   $("#cargando").show();
	});

	$(document).ajaxStop(function() {
	   $("#cargando").hide();
	});

	$("div.thumbnail").mouseenter(function() {
	  $(this).addClass('animated pulse');
	});

	$("div.thumbnail").mouseleave(function() {
	  $(this).removeClass('animated pulse');
	});

	for(var i=1; i<5; i++){
		$("#item-categoria-" + i).mouseenter(function() {
		  $(this).addClass('mouseActive');
		});

		$("#item-categoria-" + i).mouseleave(function() {
		  $(this).removeClass('mouseActive');
		});
	}
	
	var item_actual = 1;
	setInterval(function() {
		var ciclo = setInterval(function() {
			var id_item_actual = "#item-categoria-" + item_actual;
			if($(id_item_actual).hasClass('mouseActive') == false){
				$(id_item_actual).addClass('animated pulse');
				var stop = setInterval(function() {
					$(id_item_actual).removeClass('animated pulse');
					clearInterval(stop);
				}, 1000);
			}
			if(item_actual < 4){
				item_actual++;
			}else{
				clearInterval(ciclo);
				item_actual = 1;
			}
		}, 300);
	}, 6000);
	

});