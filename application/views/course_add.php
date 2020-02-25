<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <i class="fa fa-clone"></i> Course Management
        <small>Add / Edit Course</small>
      </h1>
    </section>
    
    <section class="content">
    
        <div class="row">
            <!-- left column -->
            <div class="col-md-8">
              <!-- general form elements -->
                
                
                
                <div class="box box-primary">
                    <div class="box-header">
                        <h3 class="box-title">Enter Course Details</h3>
                    </div><!-- /.box-header -->
                    <!-- form start -->
                    <?php $this->load->helper("form"); ?>
                    <form role="form" id="" action="<?php echo base_url(); ?>admin/courses_form/add" method="post" role="form">
                        <div class="box-body">
                            <div class="row">
                                <div class="col-md-5">                                
                                    <div class="form-group">
                                        <label for="fname">Course Title</label>
                                        <input type="text" class="form-control required" value="<?php echo set_value('title'); ?>" id="fname" required name="title" maxlength="128">
                                    </div>
                                    
                                </div>
                                
                                <div class="col-md-5">                                
                                    <div class="form-group">
                                        <label for="fname">Course Description (800 characters)</label>
                                        <textarea name="description" resize="none" class="form-control textarea"  required></textarea>
                                    </div>
                                    
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="">Thumbnail</label><br>
                                        <button type="button" data-msg="image size must be 400 x 240 px" data-input="form-filename-course-a" data-height="240" data-width="400" class="btn btn-info media-modal-btn">Choose Image</button>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">File Name</label><br>
                                        <p class="form-filename"></p>
                                        <input type="hidden" id="form-filename-course-a" name="form-filename">
                                        <span id="image-size-validation-msg-course" class="hidden image-size-validation-msg" data-height="240" data-width="400">image size must be 400 x 240 px</span>
                                    </div>
                                </div>
                            </div>
                            
                            
                        </div><!-- /.box-body -->
    
                        <div class="box-footer">
                            <input type="submit" class="btn btn-primary" value="Submit" />
                         
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-4">
                <?php
                    $this->load->helper('form');
                    $error = $this->session->flashdata('error');
                    if($error)
                    {
                ?>
                <div class="alert alert-danger alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <?php echo $this->session->flashdata('error'); ?>                    
                </div>
                <?php } ?>
                <?php  
                    $success = $this->session->flashdata('success');
                    if($success)
                    {
                ?>
                <div class="alert alert-success alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <?php echo $this->session->flashdata('success'); ?>
                </div>
                <?php } ?>
                
                <div class="row">
                    <div class="col-md-12">
                        <?php echo validation_errors('<div class="alert alert-danger alert-dismissable">', ' <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button></div>'); ?>
                    </div>
                </div>
            </div>
        </div>    
    </section>
    
</div>
<script type="text/javascript">
    
</script>