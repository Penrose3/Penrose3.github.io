function openModal(modal) {
	$("body").toggleClass('no-scroll');
	$("#blackout").toggleClass('active');
	$(modal).toggleClass('active');
}

function closeModal() {
	console.log("ayy");
	$("body").toggleClass('no-scroll');
	$("#blackout").toggleClass('active');
	$(".modal.active").toggleClass('active');
}