<div class="alert alert-success alert-dismissible text-center hide-sm">
  <button type="button" class="close" data-dismiss="alert">&times;</button>
  <div class="left-s">
    <h5 class="inline"><?php echo get_frontend_settings('offer_text');?></h5>
    <p class="coupon-code inline"><?php echo get_frontend_settings('coupon_code');   ?></p>
  </div>
  <div class="right-s">
    <p class="inline">Call Us and Get Offer</p>
    <a href="tel:<?php echo get_frontend_settings('phone_ind');?>" class="bot-links"><i class="fas fa-phone-volume mr-2"></i><span><img height="25px" class="ml-1" src="https://sparkdatabox.com/assets/frontend/default/images/ind_flag.png"><?php echo get_frontend_settings('phone_ind');?></span></a>
    <a href="tel:<?php echo get_frontend_settings('phone_us');   ?>" style="margin-left:-10px;" class="bot-links"><span><img height="25px" class="ml-1" src="https://sparkdatabox.com/assets/frontend/default/images/usa_flag.png"><?php echo get_frontend_settings('phone_us');   ?></span></a>
    <a target="_blank" style="margin-left:-10px;" href="https://api.whatsapp.com/send?phone=<?php echo get_frontend_settings('phone_whatsapp');   ?>" class="bot-links"><img src="https://312895-958381-raikfcquaxqncofqfm.stackpathdns.com/assets/frontend/default/images/whatsapp.png" class="mr-1" height="17px"><span> <?php echo get_frontend_settings('phone_whatsapp');   ?></span></a>
  </div>

</div>

<nav class="navbar navbar-expand-md navbar-dark2">
  <!-- Brand -->
  <a class="navbar-brand" href="<?php echo base_url();?>">
    <img class="little-up" height="55px;" src="<?php echo base_url('assets/frontend/images/logo-light.png');?>">
  </a>

  <!-- Toggler/collapsibe Button -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"><i class="fas fa-bars" style="color:#fff; font-size:28px;"></i></span>
  </button>

  <!-- Navbar links -->
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav little-up">
       <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle category_dropdown_link" href="#" id="navbardrop" data-toggle="dropdown">
        Training Courses
      </a>
      <div class="container category-dropdown">
          <div class="row">
            <?php $categories = $this->crud_model->get_category()->result_array(); 
                  foreach ($categories as $category )
                  {?>
                   <div class="col-lg-3">
                    <a href="#" class="dropdown-item category-title"><?php echo $category['name'];?></a>
                    <a class="dropdown-item" href="#">Aws Training in chennai</a>
                    <a class="dropdown-item" href="https://labs.sparkdatabox.com">Labs</a>
                    <a class="dropdown-item" href="https://sparkdatabox.com">Online Training</a>
                  </div>
           <?php  } ?>
            
          </div>
        </div>
      
    </li>
      <li class="nav-item">
        <a class="nav-link" href="https://sparkdatabox.com">Online Training</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="https://labs.sparkdatabox.com">Labs</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('contact_us')?>">Contact us</a>
      </li>
      <!-- <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li> -->
    </ul>
  </div>
</nav>