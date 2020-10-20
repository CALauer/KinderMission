

$('#hamburger-menu').click('click', function() {
	let x = $('.mobile-drop');
	if (x.css('top') === '-500px') {
		console.log("Top Margin is -500px")
		x.animate({top: 0, height: "auto"});

		}
		else {
			x.animate({top: -500, height: "auto"});
	} 
	});
$('.show-menu').on('mouseover', function() {
	console.log('Hovered')
	x = $('.menu-hidden');
	x.css({top: '70px'});
})

$('.menu-hidden').on('mouseleave', function() {
	console.log('Mouse Out')
	x = $('.menu-hidden');
	x.animate({top: '-500px'});
})






	