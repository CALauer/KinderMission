$('#add_project').click('tap', function() {
	console.log('Test');
	$('#profile_content').fadeOut(0, function() {
		// this starts when the fadeOut is finished
		$('#profile_content_edit').fadeIn(500);
	});
});

$('#hamburger-menu').on('click', function() {
	var x = $('.mobile-menu');
	if (x.css('margin-top' = )) == "-500px") {
		$('.mobile-menu').animate({marginTop: "50px"}, 500);
	}
		else {
			$('.mobile-menu').animate({marginTop: "-500px"}, 500);
		}
	})
	// function myFunction() {
	// 	var x = document.getElementById("myLinks");
	// 	if (x.style.display === "block") {
	// 	  x.style.display = "none";
	// 	} else {
	// 	  x.style.display = "block";
	// 	}
	//   }
	