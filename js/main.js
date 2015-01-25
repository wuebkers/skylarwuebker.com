if ($(window).width() < 768) {

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
};

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

$(document).ready(function() {
	$(".fancybox")
		.fancybox({
			beforeLoad: function() {
	            var el, id = $(this.element).data('title-id');

	            if (id) {
	                el = $('#' + id);
	            
	                if (el.length) {
	                    this.title = el.html();
	                }
	            }
	        },
			closeClick : true,
			openEffect : 'fade',
			helpers : {
				title : {
					type : 'inside'
				},
				overlay : {
					closeClick : true,
					showEarly  : true
				}
			}
		});
});

var a = $(".nav").offset().top;

$(document).scroll(function(){
    if($(this).scrollTop() > a)
    {   
       $('.nav').css({"background":"white"});
	   $('.nav').css({"box-shadow":"3px 3px 20px rgba(0,0,0,0.5)"});
	   $('.logo').css({"background-image":"url(photos/button.png)"});
    } else {
       $('.nav').css({"background":"transparent"});
	   $('.nav').css({"box-shadow":"3px 3px 20px rgba(0,0,0,0)"});
	   $('.logo').css({"background-image":"url(photos/button-white.png)"});
    }
});