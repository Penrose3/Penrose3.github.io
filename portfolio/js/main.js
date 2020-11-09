function openModal(modal) {
	$("body").toggleClass('no-scroll');
	$("#blackout").toggleClass('active');
	$(modal).toggleClass('active');
}

function closeModal() {
	$("body").toggleClass('no-scroll');
	$("#blackout").toggleClass('active');
	$(".modal.active").toggleClass('active');
	$('video').trigger('pause');
}