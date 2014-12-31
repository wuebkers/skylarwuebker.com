$('#menu-btn').sidr({
  name: 'sidr-main',
  source: '#mobile-nav'
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