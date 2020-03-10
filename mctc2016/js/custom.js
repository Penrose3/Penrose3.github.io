$(document).ready(function() {
	$('.project').on('click', function(){
		var indexthis = $(this).index() + 1;
		$('.projectmodal.modal' + indexthis).toggleClass('active');
		$('.modalbg').toggleClass('active');
	});
	$('.projectmodal .fa-times').on('click', function(){
		$('.projectmodal.active').toggleClass('active');
		$('.modalbg.active').toggleClass('active');
	});
});