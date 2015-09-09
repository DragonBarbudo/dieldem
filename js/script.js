var slidercount = 0;
var objetos=0;
$(document).ready(function(){




	
	if(window.location.hash){
		productnav();
	}

	$('.prod .description').hide();
	$('.prod').click(function(){
		$(this).children('.description').slideToggle();
	});
	$('.prod, .serv').hover(function(){
		$(this).siblings('article').stop().fadeTo(200,0.3);
	}, function(){
		$(this).siblings('article').stop().fadeTo(300,1);
	});


	// lightbox
	$('.gallery a').click(function(ev){
		$('.modal').show(400);
		var img = $(this).attr('href');
		$('.modal').html('<span></span><img src="'+img+'"/>');
		var ancho = $('.modal').width();
		$('.modal, .modal span').click(function(){
			$('.modal').empty().hide();
		});
		ev.stopPropagation();
		return false;
	});



	//contactoform
	 $('#contactform').submit(function(){
	    var nombre = $('#nombre').val().trim();
	    var empresa = $('#empresa').val().trim();
	    var correo_electronico = $('#correo_electronico').val().trim();
	    var telefono = $('#telefono').val().trim();
	    var ciudad = $('#ciudad').val().trim();
	    var mensaje = $('#mensaje').val().trim();
	    
	    if((nombre!="")&&(correo_electronico!="")&&(telefono!="")&&(mensaje!="")){
			$.post('php/smail.php', {n:nombre, e:empresa, c:correo_electronico, t:telefono, ci:ciudad, m:mensaje}, function(data){
				apprise(data, {'textOk':'Aceptar'});
				$('#nombre').val('');
				$('#empresa').val('');
				$('#correo_electronico').val('');
				$('#telefono').val('');
				$('#ciudad').val('');
				$('#mensaje').val('');
				});
		} else {
			apprise('Debes llenar todos los campos.', {'textOk':'Aceptar'});
		}
		return false;
    });


	//slider
	$('.slider_container').css({'position':'relative', 'overflow':'hidden'});
	$('#slider article').css({'position':'absolute','top':'0','left':'960px','z-index':'99', 'width':'960px'});
	objetos = $('#slider article').size();
	$('#slider article').each(function(index) {
    	$(this).attr({'id':'slide_'+index});
    });
       
   if(objetos>1){ 
     setInterval("rotating()", 5000);
    }
     rotating();
    
});

 function rotating(){
		$('#slide_'+slidercount).css({'left':'960px'}).animate({left:'0px'}, 1000, 'easeOutSine');
		$('#slide_'+(slidercount-1)).animate({left:'-960px'}, 500, 'easeInBack').children('div').fadeOut();
		
		$('#slide_'+slidercount+' div').fadeIn();
		
		if((slidercount == 0)&&($('#slide_'+(objetos-1)).css('left')=='0px')){
			$('#slide_'+(objetos-1)).animate({left:'-960px'}, 500, 'easeInBack').children('div').fadeOut();
		}
		slidercount++;
		if(slidercount>objetos-1){
			slidercount = 0;
			
		}
    }
   
function productnav(goto){
	if(goto==null){
		goto = document.location.hash;
	}
	goto = goto.replace('_','');
	$.scrollTo(goto,1000);
}