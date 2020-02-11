<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <i class="fa fa-users"></i> Category Management
        <small>Add / Edit Category</small>
      </h1>
    </section>
    
    <section class="content">
    
        <div class="row">
            <!-- left column -->
            <div class="col-md-8">
              <!-- general form elements -->
                
                <?php $category = $this->crud_model->get_category($category_id)->row_array();?>
                
                <div class="box box-primary">
                    <div class="box-header">
                        <h3 class="box-title">Edit Category Details</h3>
                    </div><!-- /.box-header -->
                    <!-- form start -->
                    <?php $this->load->helper("form"); ?>
                    <form role="form" id="" action="<?php echo base_url().'admin/categories_form/edit/'.$category_id; ?>" method="post" role="form">
                        <div class="box-body">
                            <div class="row">
                                <div class="col-md-5">                                
                                    <div class="form-group">
                                        <label for="fname">Category Name</label>
                                        <input type="text" class="form-control required" value="<?php echo $category['name']; ?>" id="fname" required name="categoryname" maxlength="128">
                                    </div>
                                    
                                </div>
                                <div class="col-md-5">                                
                                    <div class="form-group">
                                        <label for="fname">Category Slug</label>
                                        <input type="text" class="form-control required" value="<?php echo $category['slug']; ?>" id="" required name="slug" maxlength="128">
                                    </div>
                                    
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="">Category Icon</label><br>
                                        <button type="button" class="btn btn-info media-modal-btn">Choose Image</button>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">File Name</label><br>
                                        <p class="form-filename"><?php echo $category['icon']; ?></p>
                                        <input type="hidden" id="form-filename-hidden" name="form-filename" value="<?php echo $category['icon']; ?>">
                                        <span class="hidden image-size-validation-msg" data-height="64" data-width="64">image size must be 64 x 64 px</span>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                         <label><input type="checkbox" name="top_category" value="1" <?php if($category['top_category'] == 1)  echo "checked"; ?> > Is Top Category</label>
                                        
                                    </div>
                                </div>
                            </div>
                            
                            
                        </div><!-- /.box-body -->
    
                        <div class="box-footer">
                            <input type="submit" class="btn btn-primary" value="Submit" />
                            <input type="reset" class="btn btn-default" value="Reset" />
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