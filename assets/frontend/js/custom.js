$(document).ready(function(){

     /* Get iframe src attribute value i.e. YouTube video url
    and store it in a variable */
    var url = $("#cartoonVideo").attr('src');
    
    /* Assign empty url value to the iframe src attribute when
    modal hide, which stop the video playing */
    $("#videoModal").on('hide.bs.modal', function(){
        $("#cartoonVideo").attr('src', '');
    });
    
    /* Assign the initially stored url back to the iframe src
    attribute when modal is displayed again */
    $("#videoModal").on('show.bs.modal', function(){
        $("#cartoonVideo").attr('src', url);
    });


    $(".js-video-button").click(function(){

        var url = $(this).attr("data-videourl");
        $("#videoModal").modal();
        $("#cartoonVideo").attr('src', url);
    });
	

  $(".sidebar-list li a ").hover(function(){
    
     $(".sidebar-list li a ").removeClass("sidebar-link-active");
    $(this).addClass("sidebar-link-active");
    // $(this).append('<i class="fas fa-caret-right right-arrow"></i>');
    }, function(){
    $(this).removeClass("sidebar-link-active");
    // $(".sidebar-list li i").remove();
  });

  $("#ct_box").hover(function(){
    
     $("#ct_box_hover").show();
    
    }, function(){
   		$("#ct_box_hover").hide();
  });

  $("#ct_online").hover(function(){
    
     $("#ct_online_hover").show();
    
    }, function(){
   		$("#ct_online_hover").hide();
  });

  $(".in_box").hover(function(){
    
     $(".discount_hover").show();
    
    }, function(){
   		$(".discount_hover").hide();
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

$('.course-carousel-live-tabs').slick({
        dots: false,
        infinite: false,
        speed: 300,
        slidesToShow: 5,
        slidesToScroll: 5,
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

$('.video-testimonials').slick({
        dots: false,
        infinite: false,
        speed: 300,
        slidesToShow: 5,
        slidesToScroll: 5,
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


$(document).on("click",".course-category-tab",function(event){
     var tab = $(this).attr("href");
     var category_id = $(this).attr("data-category");
     var url = baseURL +"home/get_tab_content";
     $.ajax({
            url: url,
            type : 'POST',
            data:{category_id:category_id},
            success: function(response)
            {
              console.log(response);    
              $(tab).html(response);
              
            }
          });
    
    });

function centerModal() {
    $(this).css('display', 'block');
    var $dialog = $(this).find(".modal-dialog");
    var offset = ($(window).height() - $dialog.height()) / 2;
    // Center modal vertically in window
    $dialog.css("margin-top", offset);
}

$('.modal').on('show.bs.modal', centerModal);
$(window).on("resize", function () {
    $('.modal:visible').each(centerModal);
});

$(document).on("click",".open-cert-btn",function(event){
     var src = $(this).attr("src");
     $("#certificate_image").attr("src",src);
     $("#certificate_modal").modal("show");
     
    
    });




 $(".category_dropdown_link").click(function(){
    
     $(".category-dropdown").toggleClass('visible');
      event.stopPropagation();
    
    });

 $(".category-dropdown").click(function(){
    
      event.stopPropagation();
    
    }); 



$(window).click(function() {
//Hide the menus if visible
  $(".category-dropdown").removeClass('visible');
});




var video_url;
$(".open-modal-btn").click(function(){
    
    video_url = $(this).attr("data-videourl");
    var heading = $(this).attr("data-text");
    var type = $(this).attr("data-type");
    $("#website-inquiry-popup").modal();
    $("#modal-heading").html(heading);
    $("#modal-type-input").val(heading);
    $("#modal-type").val(type);
    
}); 




});