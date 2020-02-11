<?php $testimonials = $this->crud_model->get_testimonials($course['id']);
       if($testimonials->num_rows() > 0)
       {
       		$testimonials = $testimonials->result_array();
      
?>
<div class="container related-courses mt-5">

	<div class="row">
		<div class="col-lg-12">
			<h4 class="text-center section-heading-home "><span class="border-after">Video Testimonials</span></h4>
			<div class="video-testimonials mt-5 ">

				<?php foreach ($testimonials as $testimonial) 
				{
					# code...
				?>
				
					<div class="video-box">
						<a href="#videoModal" class="" data-toggle="modal">
						<div class="course-imgbox js-video-button" data-videourl="<?php echo $testimonial['url'];?>">
							<img src="<?php echo base_url('assets/frontend/images/').$testimonial['thumbnail'];?>" class="course-img">
							<div class="video-btn">
				            	<i class="fa fa-play"></i>
				            </div>
						</div>
						</a>
					</div>

					<?php } ?>

					

			</div>
		</div>
	</div>
</div>
<!-- video testimonials -->

<?php } ?>

<!-- Modal HTML -->
    <div id="videoModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                
                <div class="modal-body">
                    <iframe id="cartoonVideo" width="720" height="480" src="//www.youtube.com/embed/YE7VzlLtp-4" frameborder="0" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>