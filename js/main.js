var $container = $('.items').isotope({
	itemselector: 'li',
});

$('#filters').on( 'click', 'a.filter', function() {
  var filterValue = $(this).attr('data-filter');
  $container.isotope({ filter: filterValue });
});