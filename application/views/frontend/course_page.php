<!-- dont fixed top bar on this page -->
<style type="text/css">
	.navbar-dark2
	{
		position: absolute; !important;
	}
</style>

<div class="course-banner">
	<div class="container">
		<div class="row">
		<div class="course-details col-lg-8">
			<h3 class="course-title"><?php echo $course['title']; ?></h3>
			


			<p class="rating-row">
				<span class="cus_badge">Best Seller</span>
				<span class="rating-stars">
					<i class="fas fa-star filled"></i>
                    <i class="fas fa-star filled"></i>
                    <i class="fas fa-star filled"></i>
                    <i class="fas fa-star filled"></i>
                    <i class="fas fa-star filled"></i>
				</span>
				<span class="social-icons"><i class="fab fa-google"></i> 4.5/5</span>
				<span class="social-icons"><i class="fab fa-facebook"></i> 5.0/5</span>
				<span class="social-icons"><i class="fas fa-star trust-pilot"></i> 4.5/5</span>

			</p>
			<p class="course-description">
				<?php echo $course['description']; ?> 
			</p>
			<div class="course-buttons mt-4">
				<button class="btn btn-banner"><i class="far fa-calendar-check  mr-2" aria-hidden="true"></i>Upcoming Batches</button>
				<button class="btn btn-banner ml-2 open-modal-btn" data-text="Contact Course Advisior" data-type="none"><i class="fa fa-phone-square-alt  mr-2" aria-hidden="true"></i>Contact Course Advisior</button>
			</div>
		</div>
		<div class="course-video col-lg-4 pl-5 ">
			<div class="video_box" style="position: relative;">
        	<a href="javascript:void(0);"
        	<?php if($this->session->userdata('course_popup_cookie') == '1'){ ?>
        		class="js-video-button" data-videourl="<?php echo $course['demo_video_url'];?>"
        	<?php } else { ?>
        		class="open-modal-btn" data-type="video" data-videourl="<?php echo $course['demo_video_url'];?>"  data-text="Watch Demo Video" 
        	<?php } ?>
        	 id="videolinkpopup"  data-message="Message">
	          	<span>Watch Demo Video</span>
	          	<div class="video-btn" style="top: 43%;">
	            	<i class="fa fa-play"></i>
	            	<div class="ripple orangebg"></div>
		            <div class="ripple orangebg"></div>
		            <div class="ripple orangebg"></div>
	          	</div>
	          	<img title="" alt="Training" class="lazy" src="<?php echo base_url('assets/frontend/images/').$course['thumbnail'];?>" style="display: inline-block;">
        	</a>

      		</div>
		</div>
	</div>
	<div class="course-stats clearfix">
            <div>
                <p class="counter"><?php echo $course['columnheading1']; ?></p>
                <p><?php echo $course['columntext1']; ?></p>
            </div>
            <div>
                <p class="counter"><?php echo $course['columnheading2']; ?></p>
                <p><?php echo $course['columntext2']; ?></p>
            </div>
            <div>
                <p class="counter"><?php echo $course['columnheading3']; ?></p>
                <p><?php echo $course['columntext3']; ?></p>
            </div>
            <div>
                <p class="counter"><?php echo $course['columnheading4']; ?></p>
                <p><?php echo $course['columntext4']; ?></p>
            </div>
        </div>
	</div>
</div>

<section class="fixed_widgets" style="display: block;">
	<div class="container-fluid">
		<div class="row">
			 <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs">
				<div class="fixed_box">
					<span class="cb_box">
						<div class="cb_box_inner">
							<a href="tel:+91-8099770770"><i class="fa fa-phone-square-alt" aria-hidden="true"></i> +91-4446 311 234</a>
						</div>
					</span>
					<span class="dq_box">
						<div class="dq_box_inner">
							<a href="mailto:training@sparkdatabox.com" target="_blank" title="training@sparkdatabox.com"><i class="far fa-envelope" aria-hidden="true"></i> Drop A Query</a>
						</div>
					</span>					
					<span class="ct_box" id="ct_box">
						<div class="ct_box_inner">
							<a href="#"><i class="fas fa-city" aria-hidden="true"></i>Corporate Training</a>
						</div>	
						
						<div class="ct_box_hover" id="ct_box_hover" style="display: none;">
							<h5>Corporate Training</h5>
							<p>If you want to give the Trending technology experience to your esteemed employees, we are here to help you! </p>
							
							<div class="row">
								<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs">
									<div class="discount_btn">										
										<a class="btn btn-primary open-modal-btn" data-type="none"  href="#" role="button"  data-text="Corporate Training"  title="Contact Corporate Co-Ordinator">Contact Corporate Co-Ordinator</a>
									</div>
								</div>
							</div>
						</div>						
						
					</span>
					<span class="ct_box" id="ct_online">
						<div class="ct_box_inner">
							<a href="#"><i class="fas fa-chalkboard" aria-hidden="true"></i>Online Training</a>
						</div>	
						
						<div class="ct_box_hover" id="ct_online_hover" style="display: none;">
							<h5 class="text-center">Spark Databox Online Training</h5>
							<p class="point mb-1 mt-2">
							<a href="tel:+91-4446311234" title="+91-4446311234"><i class="fa fa-phone-alt mr-2 flar"></i>
							IND +91-4446311234</a>
							</p>
							<p class="point mb-1">
							<a href="tel:+1-6502652492" title="+91-4446311234"><i class="fa fa-phone-alt mr-2 flar"></i>
							USA +1-6502652492</a>
							</p>
							<p class="point mb-2">
							<a href="tel:+91-7530088009" title="+91-7530088009"><i class="fab fa-whatsapp mr-2 wai flar"></i>
							WAP +91-7530088009</a>
							</p>
							<p class="point text-center mb-3">
							<a class="btn btn-primary display-inline" href="https://sparkdatabox.com" target="_blank" title="Sparkdatabox">View Online Courses</a>
							</p>
						</div>						
						
					</span>
					<span class="in_box">
						<div class="in_box_inner">
							<a href="#"> <i class="fas fa-dollar-sign" aria-hidden="true"></i> Group Discount</a>
						</div>
						<div class="discount_hover" style="display: none;">
							<h5>Group Discount</h5>
							<p>If you have Three or more people in your training we will be delighted to offer you a group discount. </p>
							<div class="row">
								<div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-xs">
									<div class="discount_box">
										<p>3 to 4 People</p>
										<h4>10%</h4>
									</div>
								</div>
								<div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-xs">
									<div class="discount_box">
										<p>5 to 9 People</p>
										<h4>15%</h4>
									</div>
								</div>
								<div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-xs">
									<div class="discount_box">
										<p>10+ People</p>
										<h4>20%</h4>
									</div>
								</div>								
							</div>
							<div class="row">
								<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs">
									<div class="discount_btn">										
										<a class="btn btn-primary open-modal-btn" data-type="none" data-text="Group Discount" href="#" role="button"  title="Get Discount">Get Discount</a>
									</div>
								</div>
							</div>
						</div>
					</span>
					<span class="en_box" style="margin:0px">
						<div class="en_box_inner">
							<a 
							<?php if($this->session->userdata('course_popup_cookie') == '1'){ ?>
        						href="<?php echo base_url('uploads/').$course['syllabus'];?>" download="syllabus"
        					<?php } else { ?>
        					class="open-modal-btn" data-type="syllabus" data-text="Download Syllabus" href="#"
        					<?php } ?>
							 title="Download">Download Syllabus</a>
							
						</div>
					</span>
				</div>
				
			 </div>
		</div>
	</div>
</section>

<div class="course-content container-fluid">
	<div class="row content-row">
		<div class="col-lg-3 left-sidebar">
			<ul class="sidebar-list">
				<?php $sections = $this->crud_model->get_section($course['id'])->result_array();
                        $count =0;
                        foreach ($sections as $section) {
                                   $count ++;
                ?>
			 <li ><a href="#section-<?php echo slugify($section['sidebar_title']);?>" class="<?php if($count==1){ echo "sidebar-link-active";}?>"><img src="<?php echo base_url('assets/frontend/images/').$section['icon'];?>"></i><span><?php echo $section['sidebar_title'];?></span></a></li>
			<?php } ?>


			 <!-- <li><a href="#features"><img src="assets/frontend/images/features.png"><span>Key Features</span></a></li>
			 <li><a href="#curriculum"><img src="assets/frontend/images/sylabus.png"><span>Course Syllabus</span></a></li>
			 <li><a href="#career"><img src="assets/frontend/images/career.png"><span>Career</span></a></li>
			 <li><a href="#certification"><img src="assets/frontend/images/certificate.png"><span>Certification</span></a></li>
			 
			 <li><a href="#reviews"><img src="assets/frontend/images/review.png"><span>Reviews</span></a></li>
			 <li><a href="#faqs"><img src="assets/frontend/images/faq.png"><span>FAQ's</span></a></li> -->
			 
			</ul>
		</div>
		<div class="col-lg-7 main-content">
			<?php foreach ($sections as $section) {
                                   $count ++;
                ?>
			<div class="section mt-1" id="section-<?php echo slugify($section['sidebar_title']);?>">
				<h3 class="section-heading mb-4">
					<span class="border-after"><?php echo $section['heading'];?></span></h3>
				
					<?php include('get_section_content.php'); ?>
					
		
			
			</div>
			<!-- about section end  -->
			<?php } ?>

			
			

			

			

			

			

			


		</div>
		<div class="col-lg-3 right-sidebar">
			<!-- <div class="batch">
				<img class="calendar" src="assets/frontend/images/calendar.png">
				<button class="btn btn-default2">REQUEST A BATCH</button>
			</div>
			
			<div class="box">
				<h4>One To One Training</h4>
				<p class="point">Exclusive customized training on Python Programming from a personal trainer at your convenience.</p>
			</div>

			<div class="box">
				<h4>Team/Corporate Training</h4>
				<p class="point">Up-skill your team by training them on Python Programming.</p>
			</div> -->

			<div class="box">
				<h4 class="text-center">Recently Placed Students</h4>
				<div class="sliding example3">
					<div id="animation_box" class="one">
						<?php
							$rps = $this->crud_model->get_rps()->result_array();
							foreach ($rps as $user) 
                            { 
						?>
						<div class="one-user text-center">
							<img src="<?php echo base_url('assets/frontend/images/').$user['thumbnail'];?>" class="user-img">
							<span class="username"><?php echo $user['username'];?></span>
							<span class="designation"><?php echo $user['designation'];?></span>
						</div>
						<?php } ?>
					</div>
					<div id="animation_box" class="two">
						<?php
							$rps = $this->crud_model->get_rps()->result_array();
							foreach ($rps as $user) 
                            { 
						?>
						<div class="one-user text-center">
							<img src="<?php echo base_url('assets/frontend/images/').$user['thumbnail'];?>" class="user-img">
							<span class="username"><?php echo $user['username'];?></span>
							<span class="designation"><?php echo $user['designation'];?></span>
						</div>
						<?php } ?>
					</div>
					
				</div>
			</div>

			

		</div>
	</div>
	
</div>

<?php $related_courses = $this->crud_model->get_related_courses($course['id']);
       if($related_courses->num_rows() > 0)
       {
       		$related_courses = $related_courses->result_array();
      
?>

<div class="container related-courses">

	<div class="row">
		<div class="col-lg-12">
			<h3 class="related-heading">Related Courses <span></span></h3>
			<div class="course-carousel-live">
				<?php 
				foreach($related_courses as $rc)
				{
                    $cou = $this->crud_model->get_course($rc['related_course_id'])->row_array() ;
                ?>
				<a class="course-link" href="<?php echo base_url('home/course/').$cou['slug'];?>">
					<div class="course">
						<div class="course-imgbox">
							<img src="<?php echo base_url('assets/frontend/images/').$cou['thumbnail'];?>">
						</div>
						<div class="course-details">
							<h4 class="course-title2"><?php echo $cou['title'];?></h4>
							<p class="course-instructor">Spark Databox</p>
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
			<?php } ?>
				
				
				
				

			</div>
		</div>
	</div>
</div>
<!-- related courses end -->

<?php } ?>

<?php include_once('video_testimonials.php'); ?>


<div id="certificate_modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-body">
            <img id="certificate_image" src="" width="100%" class="img-responsive">
        </div>
    </div>
  </div>
</div>

<!-- course page template scripts -->
<script type="text/javascript">
	$(document).ready(function(){

      $(function(){
      $(window).scroll(function(){

        var aTop = $('.course-banner').height();
        aTop = aTop + 110;
        if($(this).scrollTop()>=aTop){
        	$(".category-dropdown").removeClass('visible');
            //alert('header just passed.');
            $(".main-content").addClass("col-offset-25");
            $('.left-sidebar').addClass('fixed');
            $('.right-sidebar').addClass('fixed-right');
            
        }
        if($(this).scrollTop() < aTop){
            
            $('.left-sidebar').removeClass('fixed');
            $('.right-sidebar').removeClass('fixed-right');
            $(".main-content").removeClass("col-offset-25");
            
        }

        var position = $(this).scrollTop();

        $('.section').each(function() {
        	var target = $(this).offset().top;
        	target -= 120;
       		var id = $(this).attr('id');

	        if (position >= target) 
	        {
	            $('.sidebar-list li a').removeClass('sidebar-link-active');
            	$("a[href='#"+id+"']").addClass('sidebar-link-active');
            	
            }

    	});


    	var rc = $(".related-courses").offset().top;
    	rc -=500;
    	rspark = rc-300;
    	if(position >= rspark)
    	{
    		$(".sparkwalabox").hide();
    	}
    	else
    	{
    		$(".sparkwalabox").show();
    	}
    	if(position >= rc)
    	{
    		$(".main-content").removeClass("col-offset-25");
    		$('.left-sidebar').removeClass('fixed');
            $('.right-sidebar').removeClass('fixed-right');
    	}
    	


        	});
    	});


    });

</script>