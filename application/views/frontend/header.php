<nav class="navbar navbar-expand-md navbar-dark2">
  <!-- Brand -->
  <a class="navbar-brand" href="<?php echo base_url();?>">
    <img height="55px;" src="<?php echo base_url('assets/frontend/images/logo-light.png');?>">
  </a>

  <!-- Toggler/collapsibe Button -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"><i class="fas fa-bars" style="color:#fff; font-size:28px;"></i></span>
  </button>

  <!-- Navbar links -->
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
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
      <!-- <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li> -->
    </ul>
  </div>
</nav>