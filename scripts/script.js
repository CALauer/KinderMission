

$('#hamburger-menu').click('click', function() {
	let x = $('.mobile-menu');
	if (x.css('top') === '-500px') {
		console.log("Top Margin is -500px")
		x.animate({top: 50, height: "100%"});

		}
		else {
			x.animate({top: -500, height: "0"});
	} 
	});


	