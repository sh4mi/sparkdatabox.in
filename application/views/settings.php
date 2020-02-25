<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <i class="fa fa-users"></i> Edit System Settings
        <small>Add, Edit, Delete</small>
      </h1>
    </section>
    <section class="content">
         <div class="row">
            <div class="col-md-12">
              <div class="box">
                <div class="box-header">
                   <ul class="nav nav-tabs">
                          <li class="active"><a data-toggle="tab" href="#banner">Basic</a></li>
                          <li><a data-toggle="tab" href="#seo">Advanced</a></li>
                          <!-- <li><a data-toggle="tab" href="#sections">Sections</a></li> -->
                          
                         
                        </ul>
                </div><!-- /.box-header -->
                <div class="tab-content">
                <div id="banner" class="tab-pane fade in active">
                    <form role="form" id="" action="<?php echo base_url().'admin/update_settings'; ?>" method="post" enctype="multipart/form-data" role="form">
                    <div class="box-body ">
                                <div class="row">
                                    <div class="col-md-12">        
                                        <div class="row">

                                            <div class="col-md-6">                     
                                            <div class="form-group">
                                                <label for="fname">Phone Number (IND)</label>
                                                <input type="text" class="form-control required" value="<?php echo get_frontend_settings('phone_ind');  ?>"  required name="phone_ind" maxlength="">
                                            </div>
                                            </div>
                                            <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="fname">Phone Number (USA)</label>
                                                <input type="text" class="form-control required" value="<?php echo get_frontend_settings('phone_us');   ?>"  required name="phone_us" maxlength="">
                                            </div>
                                            </div>
                                        </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="fname">Phone Number (Whatsapp)</label>
                                                <input type="text" class="form-control required" value="<?php echo get_frontend_settings('phone_whatsapp');   ?>"  required name="phone_whatsapp" maxlength="25">
                                            </div>
                                        </div>
                                        
                                   
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="fname">Offer Text</label>
                                                <input type="text" class="form-control required" value="<?php echo get_frontend_settings('offer_text');   ?>"  required name="offer_text" maxlength="25">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="">Coupon Code</label><br>
                                                <input type="text" class="form-control required" value="<?php echo get_frontend_settings('coupon_code');   ?>"  required name="coupon_code" maxlength="25">
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
                </div>

                <div id="seo" class="tab-pane fade ">
                    <form role="form" id="" action="<?php echo base_url().'admin/edit_home'; ?>" method="post" enctype="multipart/form-data" role="form">
                    <div class="box-body ">
                                
                    </div>
                    <div class="box-footer">
                        <!-- <input type="submit" class="btn btn-primary" value="Submit" /> -->
                         
                    </div>
                </form>
                </div>

            </div>
            <!-- tab content end -->
                 
            </div>
        </div>
    </div>
    </section>
</div>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/common.js" charset="utf-8"></script>

