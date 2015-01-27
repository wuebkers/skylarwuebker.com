if ($(window).width() < 768) {

	$('#menu-btn').sidr({
		name: 'sidr-main',
		source: '#mobile-nav',
		side: 'right'
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

var b = $(".dayton").offset().top;
var c = $(".akron").offset().top;

$(document).hover(function(){
    if($(this).hover() = b)
    {   
       $('.location').css({"background":"url(photos/dayton-hover.jpg)"});
	   $('.location a').css({"color":"white"});
    } else {
       $('.location').css({"background":"url(photos/dayton.jpg)"});
	   $('.location a').css({"color":"#3399CC"});
    }
	if($(this).hover() = c)
    {   
       $('.location').css({"background":"url(photos/akron-hover.jpg)"});
	   $('.location a').css({"color":"white"});
    } else {
       $('.location').css({"background":"url(photos/akron.jpg)"});
	   $('.location a').css({"color":"#3399CC"});
    }
});