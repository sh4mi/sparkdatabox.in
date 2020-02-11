<div class="course-carousel-live-tabs" id="course-carousel-live-tabs-<?php echo $category_id; ?>">
      		<?php
      		
				$courses = $this->crud_model->get_courses_by_category($category_id);
				if($courses != NULL)
		{
				if($courses->num_rows() > 0)
			{
				$courses = $courses->result_array();
				foreach($courses as $course)
		        {
			?>
				<a class="course-link" href="<?php echo base_url('course/').$course['slug'];?>">
					<div class="course">
						<div class="course-imgbox">
							<img src="https://312895-958381-raikfcquaxqncofqfm.stackpathdns.com/uploads/thumbnails/course_thumbnails/a4d711721c8e7ce57a0b369c2fde1c2c.jpg" class="course-img">
						</div>
						<div class="course-details">
							<h4 class="course-title2"><?php echo $course['title']; ?></h4>
							<p class="course-instructor">Course Instructor</p>
							<div class="rating">
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                            </div>
                            
						</div>
					</div>
				</a>
			<?php } } }  ?>
				
		</div>
		<script type="text/javascript">
			$('#course-carousel-live-tabs-<?php echo $category_id; ?>').slick({
        dots: false,
        infinite: false,
        speed: 300,
        slidesToShow: 4,
        slidesToScroll: 4,
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
		</script>