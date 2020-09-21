$('#add_project').click('tap', function() {
	console.log('Test');
	$('#profile_content').fadeOut(0, function() {
		// this starts when the fadeOut is finished
		$('#profile_content_edit').fadeIn(500);
	});
});

