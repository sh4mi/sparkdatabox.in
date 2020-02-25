<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <i class="fa fa-users"></i> Edit Home Page Template
        <small>Add, Edit, Delete</small>
      </h1>
    </section>
    <section class="content">
         <div class="row">
            <div class="col-md-12">
              <div class="box">
                <div class="box-header">
                   <ul class="nav nav-tabs">
                          <li class="active"><a data-toggle="tab" href="#banner">Video Testimonials</a></li>
                          <li><a data-toggle="tab" href="#seo">Recentely placed students</a></li>
                          <li><a data-toggle="tab" href="#features">Key Features</a></li>
                          <li><a data-toggle="tab" href="#certificate">Certificate</a></li>
                          
                         
                        </ul>
                </div><!-- /.box-header -->
                <div class="tab-content">
                <div id="banner" class="tab-pane fade in active">
                    <form role="form" id="" action="<?php echo base_url().'admin/add_testimonial'; ?>" method="post" enctype="multipart/form-data" role="form">
                    <div class="box-body ">
                                <div class="row">
                                    <div class="col-md-12">      
                                        
                                            <div class="row">
                                                <div class="col-md-4">                     
                                            <div class="form-group">
                                                <label for="fname">Youtube Video Url</label>
                                                <input type="text" class="form-control required" value=""  required name="video_url" maxlength="">
                                            </div>
                                            </div>
                                               <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="">Thumnail</label><br>
                                                        <button type="button" data-msg="image size must be 500 x 500 px" data-height="500" data-width="500" data-input="form-filename-video-thumb" class="btn btn-info media-modal-btn">Choose Image</button>
                                                    </div>
                                                </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="">File Name</label><br>
                                                    <p class="form-filename"></p>
                                                    <input type="hidden" id="form-filename-video-thumb" name="form-filename">
                                                    <span id="image-size-validation-msg-course" class="hidden image-size-validation-msg" data-height="500" data-width="500">image size must be 500 x 500 px</span>
                                                </div>
                                            </div>
                                            
                                            
                                        </div>

                                    

                                        

                                        
                                    </div>
                                </div>
                    </div>
                    <div class="box-footer">
                        <input type="submit" class="btn btn-primary" value="Submit" />
                         
                    </div>
                </form>

                <div class="row justify-content-center">
                    <div class="col-md-6">
                        <?php $testimonials = $this->crud_model->get_testimonials()->result_array();
                            foreach ($testimonials as $testimonial) 
                            { 
                        ?>
                            <div class="testimonial border mt-5 p-5">
                                <div class="container-btns">
                                        
                                        <a class="text-danger ml-2 delete-btn" id="" href="#" data-url="<?php echo base_url().'admin/delete/testimonial/'.$testimonial['id']; ?>" data-id="<?php echo $testimonial['id']; ?>" title="Delete">delete <i class="fa fa-trash"></i></a> 
                                </div>
                                <p><?php echo $testimonial['url'];?></p>
                            </div>
                        <?php

                            }
                        ;?>
                    </div>
                </div>
                </div>

                <div id="seo" class="tab-pane fade ">
                    <form role="form" id="" action="<?php echo base_url().'admin/add_rps'; ?>" method="post" enctype="multipart/form-data" role="form">
                    <div class="box-body ">
                                <div class="row">
                                    <h4 class="mt-5 mb-5">Add Recently placed students</h4>
                                    <div class="col-md-3">
                                                          
                                        <div class="form-group">
                                            <label for="fname">Username</label>
                                            <input type="text" class="form-control required" value=""  required name="username" maxlength="">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="fname">Designation</label>
                                            <input type="text" class="form-control required" value=""  required name="designation" maxlength="">
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="">Thumnail</label><br>
                                                        <button type="button" data-msg="image size must be 200 x 200 px" data-height="200" data-width="200" data-input="form-filename-user-image" class="btn btn-info media-modal-btn">Choose Image</button>
                                                    </div>
                                    </div>
                                    <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="">File Name</label><br>
                                                    <p class="form-filename"></p>
                                                    <input type="hidden" id="form-filename-user-image" name="form-filename">
                                                    <span id="image-size-validation-msg-course" class="hidden image-size-validation-msg" data-height="200" data-width="200">image size must be 200 x 200 px</span>
                                                </div>
                                    </div>
                                       
                                    
                                </div>
                    </div>
                    <div class="box-footer">
                        <input type="submit" class="btn btn-primary" value="Submit" />
                         
                    </div>
                </form>
                <div class="row justify-content-center">
                    <div class="col-md-6">
                        <?php $testimonials = $this->crud_model->get_rps()->result_array();
                            foreach ($testimonials as $testimonial) 
                            { 
                        ?>
                            <div class="testimonial border mt-5 p-5">
                                <div class="container-btns">
                                        <a class="edit-modal-btn" data-id="<?php echo $testimonial['id'];?>"  data-type="edit_common_rps" data-heading="Edit Recently placed students" href="#">edit <i class="fa fa-edit"></i></a>
                                        <a class="text-danger ml-2 delete-btn" id="" href="#" data-url="<?php echo base_url().'admin/delete/rps/'.$testimonial['id']; ?>" data-id="<?php echo $testimonial['id']; ?>" title="Delete">delete <i class="fa fa-trash"></i></a> 
                                </div>
                                <p><?php echo $testimonial['username'];?></p>
                                <p><?php echo $testimonial['designation'];?></p>
                            </div>
                        <?php

                            }
                        ;?>
                    </div>
                </div>
                </div>

                <div id="features" class="tab-pane fade ">
                    <form role="form" id="" action="<?php echo base_url().'admin/add_key_feature'; ?>" method="post" enctype="multipart/form-data" role="form">
                    <div class="box-body ">
                                <div class="row">
                                    <h4 class="mt-5 mb-5">Add Key Features</h4>
                                    <div class="col-md-3">
                                                          
                                        <div class="form-group">
                                            <label for="fname">Heading</label>
                                            <input type="text" class="form-control required" value=""  required name="heading" maxlength="">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="fname">Text</label>
                                            <input type="text" class="form-control required" value=""  required name="body" maxlength="">
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="">Icon</label><br>
                                                        <button type="button" data-msg="image size must be 128 x 128 px" data-height="128" data-width="128" data-input="form-filename-key-features" class="btn btn-info media-modal-btn">Choose Image</button>
                                                    </div>
                                    </div>
                                    <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="">File Name</label><br>
                                                    <p class="form-filename"></p>
                                                    <input type="hidden" id="form-filename-key-features" name="form-filename">
                                                    <span id="image-size-validation-key-features" class="hidden image-size-validation-msg" data-height="128" data-width="128">image size must be 128 x 128 px</span>
                                                </div>
                                    </div>
                                       
                                    
                                </div>
                    </div>
                    <div class="box-footer">
                        <input type="submit" class="btn btn-primary" value="Submit" />
                         
                    </div>
                </form>
                <div class="row justify-content-center">
                    <div class="col-md-6">
                        <?php $testimonials = $this->crud_model->get_key_feature()->result_array();
                            foreach ($testimonials as $testimonial) 
                            { 
                        ?>
                            <div class="testimonial border mt-5 p-5">
                                <div class="container-btns">
                                        <a class="edit-modal-btn" data-id="<?php echo $testimonial['id'];?>"  data-type="edit_common_feature" data-heading="Edit feature" href="#">edit <i class="fa fa-edit"></i></a>
                                        <a class="text-danger ml-2 delete-btn" id="" href="#" data-url="<?php echo base_url().'admin/delete/common_feature/'.$testimonial['id']; ?>" data-id="<?php echo $testimonial['id']; ?>" title="Delete">delete <i class="fa fa-trash"></i></a> 
                                </div>
                                <p>Heading: <?php echo $testimonial['heading'];?></p>
                                <p>Text : <?php echo $testimonial['body'];?></p>
                                <p>Icon : <?php echo $testimonial['icon'];?></p>
                            </div>
                        <?php

                            }
                        ;?>
                    </div>
                </div>
                </div>


                <div id="certificate" class="tab-pane fade ">

                    <?php $certificate_count = $this->crud_model->get_common_certificate()->num_rows();
                          if($certificate_count < 1)  
                            { 
                        ?>
                    <form role="form" id="" action="<?php echo base_url().'admin/add_common_certificate'; ?>" method="post" enctype="multipart/form-data" role="form">
                    <div class="box-body ">
                                <div class="row">
                                    <h4 class="mt-5 mb-5">Add Common Certificate</h4>
                                    <div class="col-md-3">
                                                          
                                        <div class="form-group">
                                            <label for="fname">Heading</label>
                                            <input type="text" class="form-control " value=""  name="heading" maxlength="">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="fname">Text</label>
                                            <textarea  class="form-control textarea" name="body"></textarea>
                                            <!-- <input type="text" class="form-control required" value=""  required  maxlength=""> -->
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="">Icon</label><br>
                                                        <button type="button" data-msg="image size must be 1600 x 1132 px" data-height="1132" data-width="1600" data-input="form-filename-common-cert" class="btn btn-info media-modal-btn">Choose Image</button>
                                                    </div>
                                    </div>
                                    <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="">File Name</label><br>
                                                    <p class="form-filename"></p>
                                                    <input type="hidden" id="form-filename-common-cert" name="form-filename">
                                                    <span id="image-size-validation-key-features" class="hidden image-size-validation-msg" data-height="1132" data-width="1600">image size must be 1600 x 1132 px</span>
                                                </div>
                                    </div>
                                       
                                    
                                </div>
                    </div>
                    <div class="box-footer">
                        <input type="submit" class="btn btn-primary" value="Submit" />
                         
                    </div>
                </form>
            <?php } ?>
                <div class="row justify-content-center">
                    <div class="col-md-6">
                        <?php $testimonials = $this->crud_model->get_common_certificate()->result_array();
                            foreach ($testimonials as $testimonial) 
                            { 
                        ?>
                            <div class="testimonial border mt-5 p-5">
                                <div class="container-btns">
                                        <a class="edit-modal-btn" data-id="<?php echo $testimonial['id'];?>"  data-type="edit_common_certificate" data-heading="Edit Common Certificate" href="#">edit <i class="fa fa-edit"></i></a>
                                        <a class="text-danger ml-2 delete-btn" id="" href="#" data-url="<?php echo base_url().'admin/delete/common_certificate/'.$testimonial['id']; ?>" data-id="<?php echo $testimonial['id']; ?>" title="Delete">delete <i class="fa fa-trash"></i></a> 
                                </div>
                                <p>Heading: <?php echo $testimonial['heading'];?></p>
                                <p>Text : <?php echo $testimonial['body'];?></p>
                                <p>Icon : <?php echo $testimonial['icon'];?></p>
                                <img width="400px" src="<?php echo base_url('assets/frontend/images/').$testimonial['icon'];?>">
                            </div>
                        <?php

                            }
                        ;?>
                    </div>
                </div>
                </div>

            </div>
            <!-- tab content end -->
                 
            </div>
        </div>
    </div>
    </section>
</div>
<!-- <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/common.js" charset="utf-8"></script>
 -->
