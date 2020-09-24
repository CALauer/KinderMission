$('#add_project').click('tap', function() {
	console.log('Test');
	$('#profile_content').fadeOut(0, function() {
		// this starts when the fadeOut is finished
		$('#profile_content_edit').fadeIn(500);
	});
});

$(document).scroll(function () {


});
// $(window).scroll(function(){
// 	var scrollPos = $(document).scrollTop();
// 	if (scrollPos >= 0 ) {
// 		$(".nav").animate({height: "80px"}, 200);
// 		console.log(scrollPos);
// 		return;


// 		return;

// 	}
// });