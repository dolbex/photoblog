$(function() {

	function getWindowHeight() {
		return $(window).height();
	}

	function setPhotoHeaderHeight() {
		$('#photo-header').css('height', getWindowHeight());
	}

	function inititalize() {
		setPhotoHeaderHeight();
	}

	inititalize();

});