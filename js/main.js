$(document).ready(function() {
    $(".main-slider").owlCarousel({
        autoplay: true,
        items: 1,
        loop: true,
        touchDrag: true,
        nav: true,
        navText: ['', ''],
        dots: true
    });
});

$(document).ready(function() {
    $(".slide-section").click(function(e){

    	var linkHref = $(this).attr('href');
    	$('html, body').animate({
    		scrollTop: $(linkHref).offset().top
    	}, 700);

        e.preventDefault();
    });
});
