$(document).ready(function () {
	$('.touch-menu').on('click',function(e){
		e.preventDefault();
		$('.h-menu').slideToggle();
	});
});