$(document).ready(function() {
	var host = window.location.host;
	var pathname = window.location.pathname;
	var postUrl = host + pathname;

	$('#social-share-buttons').socialLikes({
		url: postUrl
	});
});