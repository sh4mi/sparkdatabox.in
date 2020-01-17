$(document).ready(function(){

  $(".sidebar-list li a ").hover(function(){
    
     $(".sidebar-list li a ").removeClass("sidebar-link-active");
    $(this).addClass("sidebar-link-active");
    // $(this).append('<i class="fas fa-caret-right right-arrow"></i>');
    }, function(){
    $(this).removeClass("sidebar-link-active");
    // $(".sidebar-list li i").remove();
  });

$(function () {
	function toggleOpen(e) {
		$(e.target)
			.prev('.card-header')
			.find(".expand-icon")
			.text("remove_circle");
	}
	function toggleClose(e) {
		$(e.target)
			.prev('.card-header')
			.find(".expand-icon")
			.text("add_circle");
	}
	$('.panel-group').on('hidden.bs.collapse', toggleClose);
	$('.panel-group').on('shown.bs.collapse', toggleOpen);
});


$('.course-carousel-live').slick({
        dots: false,
        infinite: false,
        speed: 300,
        slidesToShow: 6,
        slidesToScroll: 6,
        swipe: true,
        touchMove: true,
        responsive: [
            {
                breakpoint: 1300,
                settings: {
                    slidesToShow: 4,
                    slidesToScroll: 4,
                }
            },
            {
                breakpoint: 1100,
                settings: {
                    slidesToShow: 4,
                    slidesToScroll: 4
                }
            },
            {
                breakpoint: 840,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3
                }
            },
            {
                breakpoint: 620,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ]
    });


});