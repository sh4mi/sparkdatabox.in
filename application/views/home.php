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
                          <li class="active"><a data-toggle="tab" href="#banner">Banner</a></li>
                          <li><a data-toggle="tab" href="#seo">SEO</a></li>
                          <!-- <li><a data-toggle="tab" href="#sections">Sections</a></li> -->
                          
                         
                        </ul>
                </div><!-- /.box-header -->
                <div class="tab-content">
                <div id="banner" class="tab-pane fade in active">
                    <form role="form" id="" action="<?php echo base_url().'admin/edit_home_banner'; ?>" method="post" enctype="multipart/form-data" role="form">
                    <div class="box-body ">
                                <div class="row">
                                    <div class="col-md-12">         <?php
                                    $page = $this->crud_model->get_home_page()->row_array(); ?>
                                        <div class="row">

                                            <div class="col-md-6">                     
                                            <div class="form-group">
                                                <label for="fname">Banner Title</label>
                                                <input type="text" class="form-control required" value="<?php echo $page['title'];  ?>"  required name="title" maxlength="">
                                            </div>
                                            </div>
                                            <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="fname">Banner Sub Title</label>
                                                <input type="text" class="form-control required" value="<?php echo $page['sub_title'];  ?>"  required name="sub_title" maxlength="">
                                            </div>
                                            </div>
                                        </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="fname">Widget 1 Text</label>
                                                <input type="text" class="form-control required" value="<?php echo $page['widget_text1'];  ?>"  required name="widget_text1" maxlength="25">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="">Widget 1 Icon</label><br>
                                                <button type="button" data-msg="image size must be 128 x 128 px" data-input="form-filename-widget-1" data-height="128" data-width="128" class="btn btn-info media-modal-btn">Choose Image</button>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                
                                                <input type="hidden" id="form-filename-widget-1" name="form-filename-widget-1" value="<?php echo $page['widget_icon1'];  ?>">
                                                <span id="image-size-validation-msg-course" class="hidden image-size-validation-msg" data-height="128" data-width="128">image size must be 128 x 128 px</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="fname">Widget 2 Text</label>
                                                <input type="text" class="form-control required" value="<?php echo $page['widget_text2'];  ?>"  required name="widget_text2" maxlength="25">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="">Widget 2 Icon</label><br>
                                                <button type="button" data-msg="image size must be 128 x 128 px" data-input="form-filename-widget-2" data-height="128" data-width="128" class="btn btn-info media-modal-btn">Choose Image</button>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                               
                                                <input type="hidden" value="<?php echo $page['widget_icon2'];  ?>" id="form-filename-widget-2"  name="form-filename-widget-2">
                                                <span id="image-size-validation-msg-course" class="hidden image-size-validation-msg" data-height="128" data-width="128">image size must be 128 x 128 px</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="fname">Widget 3 Text</label>
                                                <input type="text"  class="form-control required" value="<?php echo $page['widget_text3'];  ?>"  required name="widget_text3" maxlength="25">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="">Widget 3 Icon</label><br>
                                                <button type="button" data-msg="image size must be 128 x 128 px" data-input="form-filename-widget-3" data-height="128" data-width="128" class="btn btn-info media-modal-btn">Choose Image</button>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                               
                                                <input type="hidden" id="form-filename-widget-3" value="<?php echo $page['widget_icon3'];  ?>" name="form-filename-widget-3">
                                                <span id="image-size-validation-msg-course" class="hidden image-size-validation-msg" data-height="128" data-width="128">image size must be 128 x 128 px</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">

                                            <div class="col-md-6">                     
                                            <div class="form-group">
                                                <label for="fname">Snipet 1 heading</label>
                                                <input type="text" class="form-control required" value="<?php echo $page['snipet_title1'];  ?>"  required name="snipet_title1" maxlength="15">
                                            </div>
                                            </div>
                                            <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="fname">snipet 1 text</label>
                                                <input type="text" class="form-control required" value="<?php echo $page['snipet_text1'];  ?>"  required name="snipet_text1" maxlength="25">
                                            </div>
                                            </div>
                                    </div>

                                    <div class="row">

                                            <div class="col-md-6">                     
                                            <div class="form-group">
                                                <label for="fname">Snipet 2 heading</label>
                                                <input type="text" class="form-control required" value="<?php echo $page['snipet_title2'];  ?>"  required name="snipet_title2" maxlength="15">
                                            </div>
                                            </div>
                                            <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="fname">snipet 2 text</label>
                                                <input type="text" class="form-control required" value="<?php echo $page['snipet_text2'];  ?>"  required name="snipet_text2" maxlength="25">
                                            </div>
                                            </div>
                                    </div>

                                    <div class="row">

                                            <div class="col-md-6">                     
                                            <div class="form-group">
                                                <label for="fname">Snipet 3 heading</label>
                                                <input type="text" class="form-control required" value="<?php echo $page['snipet_title3'];  ?>"  required name="snipet_title3" maxlength="15">
                                            </div>
                                            </div>
                                            <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="fname">snipet 3 text</label>
                                                <input type="text" class="form-control required" value="<?php echo $page['snipet_text3'];  ?>"  required name="snipet_text3" maxlength="25">
                                            </div>
                                            </div>
                                    </div>

                                    <div class="row">

                                            <div class="col-md-6">                     
                                            <div class="form-group">
                                                <label for="fname">Snipet 4 heading</label>
                                                <input type="text" class="form-control required" value="<?php echo $page['snipet_title4'];  ?>"  required name="snipet_title4" maxlength="15">
                                            </div>
                                            </div>
                                            <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="fname">snipet 4 text</label>
                                                <input type="text" class="form-control required" value="<?php echo $page['snipet_text4'];  ?>"  required name="snipet_text4" maxlength="25">
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
                                <div class="row">
                                    <div class="col-md-5">         <?php
                                    $seo = $this->crud_model->get_page_seo(1)->row_array(); ?>                       
                                        <div class="form-group">
                                            <label for="fname">SEO Page Title</label>
                                            <input type="text" class="form-control required" value="<?php echo $seo['title'];  ?>"  required name="title" maxlength="">
                                        </div>
                                        <div class="form-group">
                                            <label for="fname">Meta Description</label>
                                            <input type="text" class="form-control required" value="<?php echo $seo['description'];  ?>"  required name="description" maxlength="">
                                        </div>
                                        <div class="form-group">
                                            <label for="fname">Meta Keywords</label>
                                            <input type="text" class="form-control required" value="<?php echo $seo['keywords'];  ?>"  required name="keywords" maxlength="">
                                        </div>
                                    </div>
                                </div>
                    </div>
                    <div class="box-footer">
                        <input type="submit" class="btn btn-primary" value="Submit" />
                         
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

