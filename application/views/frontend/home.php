<?php 
$page = $this->crud_model->get_home_page()->row_array();
?>
<div class="course-banner">
	<div class="container">
		<div class="row justify-content-center">
		<div class="course-details col-lg-12">
			<h1 class=""><?php echo $page['title'];?></h1>
			<p class="description text-center"><?php echo $page['sub_title'];?></p>
			<form class="mt-4">
				<div class="form-inline justify-content-center">
					<input type="text" placeholder="What do you want to learn?" name="search" class="form-control search-input">

					<button type="submit" class="btn btn-default search-btn"><i class="fas fa-search"></i></button>
				</div>
			</form>
			<div class="row text-center justify-content-center mt-5">
				<div class="col-lg-2">
					<img class="banner-icon" src="<?php echo base_url('assets/frontend/images/').$page['widget_icon1'];?>">
					<p class="banner-icon-text"><?php echo $page['widget_text1'];?></p>
				</div>
				<div class="col-lg-2">
					<img class="banner-icon" src="<?php echo base_url('assets/frontend/images/').$page['widget_icon2'];?>">
					<p class="banner-icon-text"><?php echo $page['widget_text2'];?></p>
				</div>
				<div class="col-lg-2">
					<img class="banner-icon" src="<?php echo base_url('assets/frontend/images/').$page['widget_icon3'];?>">
					<p class="banner-icon-text"><?php echo $page['widget_text3'];?></p>
				</div>
				
			</div>
		</div>
		
	</div>
	<div class="course-stats clearfix">
            <div>
                <p class="counter"><?php echo $page['snipet_title1'];?></p>
                <p><?php echo $page['snipet_text1'];?></p>
            </div>
            <div>
                <p class="counter"><?php echo $page['snipet_title2'];?></p>
                <p><?php echo $page['snipet_text1'];?></p>
            </div>
            <div>
                <p class="counter"><?php echo $page['snipet_title3'];?></p>
                <p><?php echo $page['snipet_text1'];?></p>
            </div>
            <div>
                <p class="counter"><?php echo $page['snipet_title4'];?></p>
                <p><?php echo $page['snipet_text1'];?></p>
            </div>
        </div>
	</div>
</div>

<!-- <div class="container mt-5">
	<h3 class="section-heading2 text-center bline">Spark Databox Training</h3>
	<div class="row mt-5 text-center justify-content-center">
		<div class="col-lg-4 why-us">
			<img class="" src="assets/frontend/images/work_big.png">
			<h4 class="">IT Experts As Trainers</h4>
			<p class="">Learning a technology with a professional who is well expertise in that solve 60% of your needs.</p>
		</div>
		<div class="col-lg-4 why-us">
			<img class="" src="assets/frontend/images/laptop.png">
			<h4 class="">IT Experts As Trainers</h4>
			<p class="">Learning a technology with a professional who is well expertise in that solve 60% of your needs.</p>
		</div>
		<div class="col-lg-4 why-us">
			<img class="" src="assets/frontend/images/money.png">
			<h4 class="">IT Experts As Trainers</h4>
			<p class="">Learning a technology with a professional who is well expertise in that solve 60% of your needs.</p>
		</div>
	</div>
</div> -->

<div class="container-fluid mt-5">
	<div class="row">
		<div class="col-lg-4 border ">
			<h4 class="text-center sub-heading-home place-students"><span class="border-after">Our Recently Placed Students</span></h4>
				<div class="sliding-home example3-home example3">
					<div class="one mt-4" style="top: -16px;">
						
						<?php
							$rps = $this->crud_model->get_rps()->result_array();
							foreach ($rps as $user) 
                            { 
						?>
						<div class="one-user text-left">
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
						<div class="one-user text-left">
							<img src="<?php echo base_url('assets/frontend/images/').$user['thumbnail'];?>" class="user-img">
							<span class="username"><?php echo $user['username'];?></span>
							<span class="designation"><?php echo $user['designation'];?></span>
						</div>
						<?php } ?>
					</div>
					
				</div>
		</div>
		<?php
		$categories = $this->crud_model->get_top_category()->result_array();
		?>
		<div class="col-lg-8 pl-3  ">
			<div class="border pb-4" style="height: 507px;">
			<h4 class="text-center sub-heading-home top-categories"><span class="border-after">Top Categories</span></h4>
			<!-- Nav pills -->
		  <ul class="nav nav-pills justify-content-center mt-4" role="tablist">
		  	<?php 
		  	$count = 0; foreach($categories as $category)
		        {
		        	$count++;

		                    ?>
		    <li class="nav-item">
		      <a class="nav-link course-category-tab <?php if($count == 1) echo "active";?>" data-category="<?php echo $category['id']; ?>" data-toggle="pill" href="#tab-<?php echo $category['slug']; ?>"><?php echo $category['name']; ?></a>
		    </li>
		    <?php } ?>
		    
		  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <?php 
    $count = 0;
    foreach($categories as $category)
		        {
		        	$count++;
		                    ?>
    <div id="tab-<?php echo $category['slug']; ?>" class="container tab-pane <?php if($count == 1) { echo "active"; } ?>"><br>
      <div class="course-carousel-live-tabs" id="course-carousel-live-tabs-<?php echo $category['id']; ?>">
      		<?php
      		if($count == 1)
      		{
				$courses = $this->crud_model->get_courses_by_category($category['id']);
				if($courses != NULL)
		{
				if($courses->num_rows() > 0)
			{
				$courses = $courses->result_array();
				foreach($courses as $course)
		        {
			?>
				<a class="course-link" href="<?php echo base_url('course/').$course['slug']; ?>">
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
			<?php } } } } else
			{?>
				<img style="width: 100px !important;" src="<?php echo base_url('assets/frontend/images/loading.gif');?>">
			<?php } ?>
				
		</div>
    </div>
   
    <?php } ?>
  </div>
  		</div>
  		<!-- border wali div end -->
		</div>
	</div>
</div>

<div class="container mt-5">
	<h4 class="text-center section-heading-home "><span class="border-after">Why Choose Spark Databox</span></h4>
	<div class=" mt-4 row text-center justify-content-center">
		<div class="col-lg-12">
			<img width="100%" src="assets/frontend/images/infographic.png">
		</div>
	</div>
	
</div>

<div class="container mt-5">
	<h4 class="text-center section-heading-home "><span class="border-after">Categories</span></h4>
	<div class="row mt-5">
		<?php
		$categories = $this->crud_model->get_non_top_category()->result_array();
		?>
		<?php foreach($categories as $category){ ?>
			<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 ">
				<div class="other-category-box border">
					<img src="assets/frontend/images/code.png">
					<span><?php echo $category['name'] ; ?></span>
				</div>
				
			</div>
		<?php } ?>
		
	</div>
</div>




<section class="course-carousel-area mt-5" style="background: #e8e6e6;min-height: 630;padding-top: 20px;">
    <div class="container-lg">
        <div class="row">
            <div class="col">
               <h4 class="text-center section-heading-home "><span class="border-after">What Our Students Have To Say</span></h4>
                
<div id="myCarousel" class="carousel slide mt-5" data-ride="carousel">
	<!-- Carousel indicators -->
	<ol class="carousel-indicators">
		<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
		<li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
        <li data-target="#myCarousel" data-slide-to="3"></li>
        <li data-target="#myCarousel" data-slide-to="4"></li>
        <li data-target="#myCarousel" data-slide-to="5"></li>
        <li data-target="#myCarousel" data-slide-to="6"></li>
        <li data-target="#myCarousel" data-slide-to="7"></li>
        <li data-target="#myCarousel" data-slide-to="8"></li>
        <li data-target="#myCarousel" data-slide-to="9"></li>

    </ol> 
    <a class="carousel-control left carousel-control-prev" href="#myCarousel" data-slide="prev">
		<i class="fa fa-angle-left"></i>
	</a>  
	<!-- Wrapper for carousel items -->
	<div class="carousel-inner">
        		
		<div class="item carousel-item active">
			<div class="img-box"><img src="https://media-exp1.licdn.com/dms/image/C4E03AQHgSfxwObya6Q/profile-displayphoto-shrink_200_200/0?e=1586390400&v=beta&t=OGnVlN5dGfgA-a9US7yS3DsMLJN_Gf1z4o-naJGb1mk" alt=""></div>
			<p class="testimonial">Having trained by top-notch professionals from Spark Databox is a pleasure. They are a real hidden gem, if you are reading this you are lucky. I am already an ML expert. I enrolled in ML for a specific reason and they proved that they can deliver. I again choose them for AWS training. I would definitely recommend them for all of your training needs.</p>
            <p class="overview"><b>Bharathwaj </b>Oracle Cloud Developer  <a href="#"></a>
            <br><a href="https://www.linkedin.com/in/btms/" target="_blank" style="color: #393939;font-style: italic;">Follow on<img src=" https://d2h0cx97tjks2p.cloudfront.net/wp-content/uploads/2016/05/Linkedin-logo-icon.png" style="height: 19px;margin-left: 4px;"></a>
            </p>
			<div class="star-rating">
				<ul class="list-inline">
					<li class="list-inline-item"><i class="fa fa-star"></i></li>
					<li class="list-inline-item"><i class="fa fa-star"></i></li>
					<li class="list-inline-item"><i class="fa fa-star"></i></li>
					<li class="list-inline-item"><i class="fa fa-star"></i></li>
					<li class="list-inline-item"><i class="fa fa-star"></i></li>
				</ul>
			</div>
        </div>

        <div class="item carousel-item ">
			<div class="img-box"><img src="https://media.licdn.com/dms/image/C4E03AQEFbY4HHkfLfw/profile-displayphoto-shrink_200_200/0?e=1583971200&v=beta&t=xa9KSjkKB2f_CKXGyyoMzg9ZcRE1C9VKmBPol9rM-rI" alt=""></div>
			<p class="testimonial">I and my team enrolled in Big Data online training from Spark Databox. Some of the significant improvement our associates received after taking part in the training provided from Spark Databox. We were able to deliver the product 70% faster than we use to do after attending the training. I would definitely recommend Spark Databox for your training needs.</p>
            <p class="overview"><b>Nanda Navarathnam </b>Senior Big Data Engineer at <a href="#">Saras America.</a>
            <br><a href="https://www.linkedin.com/in/nanda-navarathnam-a70b1a191/" target="_blank" style="color: #393939;font-style: italic;">Follow on<img src=" https://d2h0cx97tjks2p.cloudfront.net/wp-content/uploads/2016/05/Linkedin-logo-icon.png" style="height: 19px;margin-left: 4px;"></a>
            </p>
			<div class="star-rating">
				<ul class="list-inline">
					<li class="list-inline-item"><i class="fa fa-star"></i></li>
					<li class="list-inline-item"><i class="fa fa-star"></i></li>
					<li class="list-inline-item"><i class="fa fa-star"></i></li>
					<li class="list-inline-item"><i class="fa fa-star"></i></li>
					<li class="list-inline-item"><i class="fa fa-star"></i></li>
				</ul>
			</div>
        </div>
        
		<div class="item carousel-item">
			<div class="img-box"><img src="https://media.licdn.com/dms/image/C5103AQE3_Rh9UnQuaQ/profile-displayphoto-shrink_200_200/0?e=1583971200&v=beta&t=Bm7pLBvOrjcFL0lB9DvzgOypoVTBbX9nXhvfPEoHbiQ" alt=""></div>
			<p class="testimonial">They took the training to the next level. The level of professionalism they showed is really amazing. I enrolled in multiple courses for my new project and I am flabbergasted by the trainer's knowledge. You can enroll with them without a second thought.</p>
            <p class="overview"><b>Prem Nandhakumar</b>Solution Architect at <a href="#">DW ETL and BI systems.</a>
            <br><a href="https://www.linkedin.com/in/prem-nandhakumar-aa07a67/" target="_blank" style="color: #393939;font-style: italic;">Follow on<img src=" https://d2h0cx97tjks2p.cloudfront.net/wp-content/uploads/2016/05/Linkedin-logo-icon.png" style="height: 19px;margin-left: 4px;"></a>
            </p>
			<div class="star-rating">
				<ul class="list-inline">
					<li class="list-inline-item"><i class="fa fa-star"></i></li>
					<li class="list-inline-item"><i class="fa fa-star"></i></li>
					<li class="list-inline-item"><i class="fa fa-star"></i></li>
					<li class="list-inline-item"><i class="fa fa-star"></i></li>
					<li class="list-inline-item"><i class="fa fa-star"></i></li>
				</ul>
			</div>
		</div>		
    
        <div class="item carousel-item">
			<div class="img-box"><img src="assets/frontend/images/testi4.jpg" alt=""></div>
			<p class="testimonial">I had the privilege to undertake Hadoop training from Spark Databox. Excellent trainers and customer support. You can reach out to them 24/7. Support personnel was very quick in resolving any conflict that may arise. They have pretty good Cloud infrastructure for training. I believe they can turn a layman to an expert.</p>
            <p class="overview"><b>Sushreeta Kar</b>Project Manager at <a href="#">Infosys.</a>
            <br><a href="https://www.linkedin.com/in/sushreeta-kar-02258972/" target="_blank" style="color: #393939;font-style: italic;">Follow on<img src=" https://d2h0cx97tjks2p.cloudfront.net/wp-content/uploads/2016/05/Linkedin-logo-icon.png" style="height: 19px;margin-left: 4px;"></a>
            </p>
			<div class="star-rating">
				<ul class="list-inline">
					<li class="list-inline-item"><i class="fa fa-star"></i></li>
					<li class="list-inline-item"><i class="fa fa-star"></i></li>
					<li class="list-inline-item"><i class="fa fa-star"></i></li>
					<li class="list-inline-item"><i class="fa fa-star"></i></li>
					<li class="list-inline-item"><i class="fa fa-star"></i></li>
				</ul>
			</div>
        </div>
        		
        <div class="item carousel-item">
			<div class="img-box"><img src="https://media.licdn.com/dms/image/C5603AQEfn9aK4hXfvA/profile-displayphoto-shrink_200_200/0?e=1583971200&v=beta&t=Zj7HAG-T4__bmfwKm9w8sqFKcpsSPZv9nANjKu-istA" alt=""></div>
			<p class="testimonial">I was introduced to Spark Databox from one of my previous colleagues. Training is a spot on.. They just don't teach concepts, they train you. After the training, you will really feel that you are an industry expert. In fact, you will become one. They stand by their word. Excellent customer support, cloud lab. I am glad that I enrolled in their Data Science program.</p>
            <p class="overview"><b>Sindhuja Dhamodaran</b>Project Manager at <a href="#">Tata Consultancy Services.</a>
            <br><a href="http://linkedin.com/in/sindhuja-dhamodaran-2834a649/" target="_blank" style="color: #393939;font-style: italic;">Follow on<img src=" https://d2h0cx97tjks2p.cloudfront.net/wp-content/uploads/2016/05/Linkedin-logo-icon.png" style="height: 19px;margin-left: 4px;"></a>
            </p>
			<div class="star-rating">
				<ul class="list-inline">
					<li class="list-inline-item"><i class="fa fa-star"></i></li>
					<li class="list-inline-item"><i class="fa fa-star"></i></li>
					<li class="list-inline-item"><i class="fa fa-star"></i></li>
					<li class="list-inline-item"><i class="fa fa-star"></i></li>
					<li class="list-inline-item"><i class="fa fa-star"></i></li>
				</ul>
			</div>
        </div>
        
        <div class="item carousel-item">
			<div class="img-box"><img src="https://media.licdn.com/dms/image/C4E03AQEbZgy3nm5kgQ/profile-displayphoto-shrink_200_200/0?e=1583971200&v=beta&t=YY54_MJ6fX0sMQMa-vYu5E9-SHAHkhrWtzf0q6vS81M" alt=""></div>
			<p class="testimonial">Spark Databox provides one of the best full-stack developer courses online. No one can beat their quality and price. I had a feeling from the first talk, and I am right. I am more confident that I can be a successful full stack developer. Kudos to the team Spark Databox.</p>
            <p class="overview"><b>Balamurugan Uthayakumar</b>Salesforce Technical Lead / Full Stack Developer at <a href="#">Cognizant.</a>
            <br><a href="https://www.linkedin.com/in/balamuruganu/" target="_blank" style="color: #393939;font-style: italic;">Follow on<img src=" https://d2h0cx97tjks2p.cloudfront.net/wp-content/uploads/2016/05/Linkedin-logo-icon.png" style="height: 19px;margin-left: 4px;"></a>
            </p>
			<div class="star-rating">
				<ul class="list-inline">
					<li class="list-inline-item"><i class="fa fa-star"></i></li>
					<li class="list-inline-item"><i class="fa fa-star"></i></li>
					<li class="list-inline-item"><i class="fa fa-star"></i></li>
					<li class="list-inline-item"><i class="fa fa-star"></i></li>
					<li class="list-inline-item"><i class="fa fa-star"></i></li>
				</ul>
			</div>
		</div>	
    
        <div class="item carousel-item">
			<div class="img-box"><img src="https://media.licdn.com/dms/image/C5103AQGGcJlLqxCUhA/profile-displayphoto-shrink_200_200/0?e=1583971200&v=beta&t=nOF_G0nkUx1OWP3tBiN2YeElb0XXAJ1w0CoSoKHAD0E" alt=""></div>
			<p class="testimonial">I joined Spark Databox for the placement service they provided. I am very much satisfied with the training. The trainer was thorough and was very patient with me. He explained everything in detail. The online lab was excellent. I was able to work on it without any hassle. I am placed as a big data developer after completing the big data placement training from them.</p>
            <p class="overview"><b>Ezhilan Palanisamy</b>Big Data Engineer at <a href="#">LatentView Analytics.</a>
            <br><a href="https://www.linkedin.com/in/ezhilan-palanisamy-41125a194/" target="_blank" style="color: #393939;font-style: italic;">Follow on<img src=" https://d2h0cx97tjks2p.cloudfront.net/wp-content/uploads/2016/05/Linkedin-logo-icon.png" style="height: 19px;margin-left: 4px;"></a>
            </p>
			<div class="star-rating">
				<ul class="list-inline">
					<li class="list-inline-item"><i class="fa fa-star"></i></li>
					<li class="list-inline-item"><i class="fa fa-star"></i></li>
					<li class="list-inline-item"><i class="fa fa-star"></i></li>
					<li class="list-inline-item"><i class="fa fa-star"></i></li>
					<li class="list-inline-item"><i class="fa fa-star"></i></li>
				</ul>
			</div>
		</div>		
    
        <div class="item carousel-item">
			<div class="img-box"><img src="https://media.licdn.com/dms/image/C4D03AQEyr76Ym5aZIg/profile-displayphoto-shrink_200_200/0?e=1583971200&v=beta&t=MFUEtGXbr92JbFcrurbW_7qx0TpgT0viXkoiq7gHKlc" alt=""></div>
			<p class="testimonial">I enrolled in PySpark online classroom training and gained more confidence in my skills. They deliver excellent training. Spark Databox also offered me free self-paced python courses which was very helpful. I would definitely recommend PySpark online training course from Spark Databox.</p>
            <p class="overview"><b>Shekhar Suman</b>Big Data Developer at <a href="#">Macys Systems and Technology.</a>
            <br><a href="https://www.linkedin.com/in/shekhar-suman-92899a15/" target="_blank" style="color: #393939;font-style: italic;">Follow on<img src=" https://d2h0cx97tjks2p.cloudfront.net/wp-content/uploads/2016/05/Linkedin-logo-icon.png" style="height: 19px;margin-left: 4px;"></a>
            </p>
			<div class="star-rating">
				<ul class="list-inline">
					<li class="list-inline-item"><i class="fa fa-star"></i></li>
					<li class="list-inline-item"><i class="fa fa-star"></i></li>
					<li class="list-inline-item"><i class="fa fa-star"></i></li>
					<li class="list-inline-item"><i class="fa fa-star"></i></li>
					<li class="list-inline-item"><i class="fa fa-star"></i></li>
				</ul>
			</div>
		</div>		
    
        <div class="item carousel-item">
			<div class="img-box"><img src="https://media.licdn.com/dms/image/C4E03AQF78wU8JS9FSQ/profile-displayphoto-shrink_200_200/0?e=1583971200&v=beta&t=n7UL-e3QOnXdCwIlphBusajOzueuBTXwxcpeaucx0rE" alt=""></div>
			<p class="testimonial">AWS DevOps online training from Spark Databox is an excellent choice if you want to start a career in DevOps or in AWS. I heard several positive reviews from my team members about Spark Databox because of that I checked with them about AWS training to see what they have to offer. My colleagues were right. They are world-class. I really wonder why the fees are so less. They charge way more than what they are supposed to charge. I definitely recommend Spark Databox for AWS DevOps training. Good luck</p>
			<p class="overview"><b>Abdul Jaleel</b>Principal Associate,Technical Lead at  <a href="#">Capital One.</a>
            <br><a href="https://www.linkedin.com/in/abdul-jaleel-955244a2/" target="_blank" style="color: #393939;font-style: italic;">Follow on<img src=" https://d2h0cx97tjks2p.cloudfront.net/wp-content/uploads/2016/05/Linkedin-logo-icon.png" style="height: 19px;margin-left: 4px;"></a>
            </p>
			<div class="star-rating">
				<ul class="list-inline">
					<li class="list-inline-item"><i class="fa fa-star"></i></li>
					<li class="list-inline-item"><i class="fa fa-star"></i></li>
					<li class="list-inline-item"><i class="fa fa-star"></i></li>
					<li class="list-inline-item"><i class="fa fa-star"></i></li>
					<li class="list-inline-item"><i class="fa fa-star"></i></li>
				</ul>
			</div>
		</div>		
    
        <div class="item carousel-item">
			<div class="img-box"><img src="https://media.licdn.com/dms/image/C5603AQHAwmX9MlYMGA/profile-displayphoto-shrink_200_200/0?e=1583971200&v=beta&t=4d0D_gaSh6nnAdw2ZpB3zphPxcMU0Yva5_zldCQbEWA" alt=""></div>
			<p class="testimonial">I took Oracle Placement training from Spark Databox. They changed my life upside down (in a positive way). Entire team worked on my profile and got me placed in an MNC. I am really glad that training institutes like Spark Databox exists.</p>
            <p class="overview"><b>Balakrishna Rajavelu</b>Application Development Analyst at <a href="#">Accenture.</a>
            <br><a href="https://www.linkedin.com/in/balakrishna-rajavelu-27198b118/" target="_blank" style="color: #393939;font-style: italic;">Follow on<img src=" https://d2h0cx97tjks2p.cloudfront.net/wp-content/uploads/2016/05/Linkedin-logo-icon.png" style="height: 19px;margin-left: 4px;"></a>
            </p>
			<div class="star-rating">
				<ul class="list-inline">
					<li class="list-inline-item"><i class="fa fa-star"></i></li>
					<li class="list-inline-item"><i class="fa fa-star"></i></li>
					<li class="list-inline-item"><i class="fa fa-star"></i></li>
					<li class="list-inline-item"><i class="fa fa-star"></i></li>
					<li class="list-inline-item"><i class="fa fa-star"></i></li>
				</ul>
			</div>
		</div>		
    
    		
     </div>
	<!-- Carousel controls -->
	
	<a class="carousel-control right carousel-control-next" href="#myCarousel" data-slide="next">
		<i class="fa fa-angle-right"></i>
	</a>
</div>
</div>
</div>
</div>
</section>



<?php include_once('video_testimonials.php'); ?>


<div class="container-fluid mt-5">
	
	<h4 class="text-center section-heading-home "><span class="border-after">Our Students Placed In</span></h4>
	<div class=" mt-5 row text-center justify-content-center">
		<div class="col-lg-12">
			<img width="100%" src="assets/frontend/images/comp.png">
		</div>
	</div>
	
</div>

