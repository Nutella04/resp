$(document).ready(function(){
	$('.header__burger').click(function(event){
		$('.header__burger,.header__menu').toggleClass('active');
		$('body').toggleClass('lock');
	});

	$('.podderzh').click(function(event){
		$('.cash').toggleClass('active');
		$('.for_body').toggleClass('lock');
	});
	$('.otmena').click(function(event){
		$('.cash').removeClass('active');
		$('.for_body').removeClass('lock');
	});
});

