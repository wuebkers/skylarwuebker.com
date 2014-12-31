$('#menu-btn').sidr({
	name: 'sidr-main',
	source: '#mobile-nav'
});

$(window).touchwipe({
	wipeLeft: function() {
  // Close
  $.sidr('close', 'sidr-main');
},
wipeRight: function() {
  // Open
  $.sidr('open', 'sidr-main');
},
preventDefaultEvents: false
});

var $container = $('.items').isotope({
	itemselector: 'li'
});

$('.filters').on( 'click', 'a.filter', function() {
	var filterValue = $(this).attr('data-filter');
	$container.isotope({ filter: filterValue });
});

$('.sidr').on( 'click', 'a.sidr-class-filter', function() {
	var filterValue = $(this).attr('data-filter');
	$container.isotope({ filter: filterValue });
});