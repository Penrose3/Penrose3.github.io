function openModal(modal) {
	$("body").toggleClass('no-scroll');
	$("#blackout").toggleClass('active');
	$(modal).toggleClass('active');
	gtag('event', 'interaction', {
	  'event_category' : 'modal',
	  'event_label' : modal
	});
}

function closeModal() {
	$("body").toggleClass('no-scroll');
	$("#blackout").toggleClass('active');
	$(".modal.active").toggleClass('active');
	$('video').trigger('pause');
}