
$(document).ready(function(){
  	// alert('hello');
	
	


$('a.smooth-scroll').click(function(event){
	event.preventDefault();
	var section=$(this).attr('href');
	$('html, body').animate({
		scrollTop:$(section).offset().top-11
		
	},1250,"easeInOutExpo");
});	
});

	
$("#openmoda").click(function(){
	
$("#commentmodal").modal("show");
});

//Navigation

$(window).scroll(function(){
	if($(this).scrollTop()<300){
		$('#toTop').fadeOut();
	}
	else{
		$('#toTop').fadeIn();
	}
});


$("#opennav").click(function(){
	$("#navigate").slideToggle(2000);
});

//Home
$('#btn-more').hover(function(){
	
	$('#btn-more').addClass('btnmore');
},
function(){
	
	$('#btn-more').removeClass('btnmore');
}
);


//proctor 
$(function(){
	
	$('#proctor-memb').owlCarousel({
		items:1,
		autoplay:true,
		loop:true,
		smartSpeed:750
		
	});
});



//rules 
$(function(){
	
	
});


//rules 
$(function(){
	
	// $('#news').owlCarousel({
		// items:1,
		// autoplay:true,
		// loop:true,
		// smartSpeed:800
		
	// });
});



//service
$(function(){
new WOW().init();
	
});

//smooth scroll


$(function(){
$('a.smooth-scroll').click(function(event){
	event.preventDefault();
	var section=$(this).attr('href');
	$('html, body').animate({
		scrollTop:$(section).offset().top-11
		
	},1250,"easeInOutExpo");
});	
});
// image gallery
$(function(){
	$('#gallery').magnificPopup({
		delegate:'a',
		type:'image',
		gallery:{
			enabled:true
		}
	});
});