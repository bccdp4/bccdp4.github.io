$(document).ready(function() {
	$('kbd').mouseenter(function() {
		$('kbd').fadeTo('fast', 1);
	});
	$('kbd').mouseleave(function() {
		$('kbd').fadeTo('fast', 0.5);
	});
});