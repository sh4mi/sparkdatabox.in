<?php $course = $this->crud_model->get_course($course_id)->row_array();?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <i class="fa fa-clone"></i> Course Management
        <small>Add / Edit Course</small>
        <a  target="blank" href="<?php echo base_url('course/').$course['slug'];?>" class="btn btn-primary">view course on frontend</a>
      </h1>
    </section>
    
    <section class="content">
    
        <div class="row">
            <!-- left column -->
            <div class="col-md-12">
              <!-- general form elements -->
                
                 
                
                <div class="box box-primary">
                    <div class="box-header">
                        <ul class="nav nav-tabs">
                          <li class="active"><a data-toggle="tab" href="#banner">Banner</a></li>
                          <li><a data-toggle="tab" href="#categories">Categories</a></li>
                          <li><a data-toggle="tab" href="#seo">SEO</a></li>
                          <li><a data-toggle="tab" href="#sections">Sections</a></li>
                          <?php $sections = $this->crud_model->get_section($course_id)->result_array();
                                foreach ($sections as $section) {
                                ?>
                                <li><a data-toggle="tab" href="#<?php  $section_name =str_replace(' ','-',$section["sidebar_title"]); $section_name = str_replace("'",'-', $section_name); echo $section_name; ?>"><?php echo $section['sidebar_title']; ?></a></li>
                                <?php } ?>
                         
                        </ul>
                      


                    </div><!-- /.box-header -->
                    <div class="tab-content">
                      <div id="banner" class="tab-pane fade in active">
                        <h3>Banner Settings</h3>
                        <!-- form start -->
                    <?php $this->load->helper("form"); ?>
                    <form role="form" id="" action="<?php echo base_url().'admin/courses_form/update/'.$course_id ; ?>" method="post" enctype="multipart/form-data" role="form">
                        <div class="box-body">
                            <div class="row">
                                <div class="col-md-5">                                
                                    <div class="form-group">
                                        <label for="fname">Course Title</label>
                                        <input type="text" class="form-control required" value="<?php echo $course['title'];  ?>" id="fname" required name="title" maxlength="128">
                                    </div>

                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="">Thumbnail</label><br>
                                        <button type="button" data-msg="image size must be 600 x 600 px" data-input="form-filename-course-e" data-height="500" data-width="500" class="btn btn-info media-modal-btn">Choose Image</button>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">File Name</label><br>
                                        <p class="form-filename"><?php echo $course['thumbnail'];  ?></p>
                                        <input type="hidden" id="form-filename-course-e" name="form-filename">
                                        <span id="image-size-validation-msg-course" class="hidden image-size-validation-msg" data-height="500" data-width="500">image size must be 500 x 500 px</span>
                                    </div>
                                </div>
                                <div class="col-md-5">                                
                                    <div class="form-group">
                                        <label for="fname">Course Description (500 characters)</label>
                                        <textarea name="description" resize="none" class="form-control textarea" maxlength="500" required><?php echo $course['description'];  ?> </textarea>
                                    </div>
                                    
                                </div>
                                <div class="col-md-3">                                
                                    <div class="form-group">
                                        <label for="fname">Slug Url</label>
                                        <input type="text" class="form-control required" value="<?php echo $course['slug'];  ?>" id="" required name="slug" maxlength="128">
                                    </div>

                                </div>
                                <div class="col-md-4">                                
                                    <div class="form-group">
                                        <label for="fname">Status</label>
                                        <select class="form-control select" name="status">
                                            <option value="<?php echo $course['status'];?>" <?php if($course['status']=='1') echo "selected";?>>Active</option>
                                            <option value="<?php echo $course['status'];?>" <?php if($course['status']=='0') echo "selected";?>>Pending</option>
                                        </select>
                                    </div>

                                </div>

                                 
                            </div>
                            <div class="row">
                                <div class="col-md-5">                                
                                    <div class="form-group">
                                        <label for="fname">Column 1 heading</label>
                                        <input type="text" class="form-control required" value="<?php echo $course['columnheading1'];  ?>" id=""  name="column_heading1" maxlength="15">
                                    </div>
                                </div>
                                <div class="col-md-5">                                
                                    <div class="form-group">
                                        <label for="fname">Column 1 text</label>
                                        <input type="text" class="form-control required" value="<?php echo $course['columntext1'];  ?>" id=""  name="column_text1" maxlength="30">
                                    </div>
                                </div>
                                <div class="col-md-5">                                
                                    <div class="form-group">
                                        <label for="fname">Column 2 heading</label>
                                        <input type="text" class="form-control required" value="<?php echo $course['columnheading2'];  ?>" id=""  name="column_heading2" maxlength="15">
                                    </div>
                                </div>
                                <div class="col-md-5">                                
                                    <div class="form-group">
                                        <label for="fname">Column 2 text</label>
                                        <input type="text" class="form-control required" value="<?php echo $course['columntext2'];  ?>" id=""  name="column_text2" maxlength="30">
                                    </div>
                                </div>
                                <div class="col-md-5">                                
                                    <div class="form-group">
                                        <label for="fname">Column 3 heading</label>
                                        <input type="text" class="form-control required" value="<?php echo $course['columnheading3'];  ?>" id=""  name="column_heading3" maxlength="15">
                                    </div>
                                </div>
                                <div class="col-md-5">                                
                                    <div class="form-group">
                                        <label for="fname">Column 3 text</label>
                                        <input type="text" class="form-control required" value="<?php echo $course['columntext3'];  ?>" id=""  name="column_text3" maxlength="30">
                                    </div>
                                </div>
                                <div class="col-md-5">                                
                                    <div class="form-group">
                                        <label for="fname">Column 4 heading</label>
                                        <input type="text" class="form-control required" value="<?php echo $course['columnheading4'];  ?>" id=""  name="column_heading4" maxlength="15">
                                    </div>
                                </div>
                                <div class="col-md-5">                                
                                    <div class="form-group">
                                        <label for="fname">Column 4 text</label>
                                        <input type="text" class="form-control required" value="<?php echo $course['columntext4'];  ?>" id=""  name="column_text4" maxlength="30">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-5">                                
                                    <div class="form-group">
                                        <label for="fname">Course demo video Url</label>
                                        <input type="text" class="form-control required" value="<?php echo $course['slug'];  ?>" id=""  name="demo_url" >
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="">Course Syllabus</label><br>
                                        <button type="button" class="btn btn-info choose-file-btn">Choose File</button>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">File Name</label><br>
                                        <p class="form-filename-syllabus"><?php echo $course['syllabus'];  ?></p>
                                        <p class="text-danger syllabus-error" ></p>
                                        <input type="file" style="display: none;" id="form-filename-syllabus" name="form-filename-syllabus">
                                        
                                    </div>
                                </div>
                            </div>
                            
                            
                        </div><!-- /.box-body -->
    
                        <div class="box-footer">
                            <input type="submit" class="btn btn-primary" value="Submit" />
                         
                        </div>
                    </form>
                      </div>
                      <div id="categories" class="tab-pane fade">
                        <h3>Categories Settings</h3>
                        <form role="form" id="" action="<?php echo base_url().'admin/courses_form/update/'.$course_id ; ?>" method="post" enctype="multipart/form-data" role="form">
                        <div class="box-body">
                            <div class="row">
                                <div class="col-md-4">    
                                    <div class="form-group">
                                        <label for="fname">Select Course Categories</label>
                                        <select class="form-control select" id="categories-select" name="select-categories">
                                        <?php $categories = $this->crud_model->get_category()->result_array();
                                        foreach ($categories as $category ) { ?>
                                        
                                            <option value="<?php echo $category['id'];?>"><?php echo $category['name'];?></option>
                                           
                                       
                                    <?php } ?>
                                     </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 course-categories">
                                    <?php $course_categories = $this->crud_model->get_course_categories($course_id)->result_array() ;
                                        foreach($course_categories as $cc) {
                                            $cat = $this->crud_model->get_category($cc['category_id'])->row_array() ;
                                         ?>
                                            <button data-id="<?php echo $cc['id']; ?>" class="btn btn-info ml-2 remove-category-btn"><?php echo $cat['name']; ?> <i class="fa fa-close ml-2"></i></button>
                                        <?php } ?>
                                </div>
                                <p class="category-response"></p>
                            </div>
                            <h4 class="mt-5">Related Courses</h4>
                            <div class="row">
                                <div class="col-md-4">    
                                    <div class="form-group">
                                        <label for="fname">Select Related Courses</label>
                                        <select class="form-control select" id="related-courses-select" name="related-courses">
                                        <?php $courses = $this->crud_model->get_course()->result_array();
                                        foreach ($courses as $course ) {
                                        if($course['id'] != $course_id) { ?>
                                        
                                            <option value="<?php echo $course['id'];?>"><?php echo $course['title'];?></option>
                                           
                                       
                                    <?php } } ?>
                                     </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 related-courses">
                                    <?php $related_courses = $this->crud_model->get_related_courses($course_id)->result_array() ;
                                        foreach($related_courses as $rc) {
                                            $cou = $this->crud_model->get_course($rc['related_course_id'])->row_array() ;
                                         ?>
                                            <button data-id="<?php echo $cc['id']; ?>" class="btn btn-info ml-2 remove-course-btn"><?php echo $cou['title']; ?> <i class="fa fa-close ml-2"></i></button>
                                        <?php } ?>
                                </div>
                                <p class="related-response"></p>
                            </div>
                        </div><!-- /.box-body -->
    
                        <div class="box-footer">
                           <!--  <input type="submit" class="btn btn-primary" value="Submit" /> -->
                         
                        </div>
                    </form>
                      </div>
                      <div id="sections" class="tab-pane fade">
                        <h3>Create Sections</h3>
                        <form role="form" id="" action="<?php echo base_url().'admin/courses_form/add_section/'.$course_id ; ?>" method="post" enctype="multipart/form-data" role="form">
                            <div class="box-body">
                                <div class="row">
                                    <div class="col-md-3">                                
                                        <div class="form-group">
                                            <label for="fname">Section Sidebar Title</label>
                                            <input type="text" class="form-control required"  required name="sidebar_title" maxlength="128">
                                        </div>
                                    </div>
                                    <div class="col-md-3">                                
                                        <div class="form-group">
                                            <label for="fname">Section Heading</label>
                                            <input type="text" class="form-control required"  required name="heading" maxlength="128">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="">Icon</label><br>
                                            <button type="button" data-input="form-filename-section" data-msg="image size must be 32 x 32 px" data-height="32" data-width="32" class="btn btn-info media-modal-btn">Choose Image</button>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="">File Name</label><br>
                                            <p class="form-filename"></p>
                                            <input type="hidden" id="form-filename-section" name="form-filename">
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="box-footer">
                                <input type="submit" class="btn btn-primary" value="Submit" /> 
                            </div>
                            </form>
                            <?php $sections = $this->crud_model->get_section($course_id);

                               if($sections->num_rows()){ 
                               $sections = $sections->result_array(); ?>
                            <div class="box-body">
                                <h3>Sections</h3>
                                <div class="row justify-content-center" id = "parent-div" data-plugin="dragula" data-containers='["section-list"]'>
                                    <div class="col-md-7">
                                        <div class="bg-dragula p-2 p-lg-4">
                                            <h5 class="mt-0">
                                                <button type="button" class="btn btn-primary btn-sm btn-rounded alignToTitle" id = "section-sort-btn" onclick="sort()" name="button">Update Sorting</button>
                                            </h5>
                                            <div id="section-list" class="py-2">
                                                    <?php 
                                                    
                                                    foreach ($sections as $section): ?>
                                                        <!-- Item -->
                                                        <div class="card move mb-0 mt-2 draggable-item" id = "<?php echo $section['id']; ?>">
                                                            <div class="card-body">
                                                                <div class="media">
                                                                    <div class="media-body">
                                                                        <div class="container-btns">
                                        <a class="edit-modal-btn" data-id="<?php echo $section['id'];?>" data-type="edit_section" data-heading="Edit Section" href="#">edit <i class="fa fa-edit"></i></a>
                                        <a class="text-danger ml-2 delete-btn" id="" href="#" data-url="<?php echo base_url().'admin/delete/section/'.$section['id']; ?>" data-id="<?php echo $section['id']; ?>" title="Delete">delete <i class="fa fa-trash"></i></a> 
                                    </div>
                                                                        <h5 class="mb-1 mt-0"><?php echo $section['sidebar_title']; ?></h5>
                                                                    </div> <!-- end media-body -->
                                                                </div> <!-- end media -->
                                                            </div> <!-- end card-body -->
                                                        </div> <!-- end col -->
                                                    <?php endforeach; ?>
                                            </div> <!-- end company-list-1-->
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        <?php } ?>

                            <div class="box-footer"></div>
                    
                      </div>
                      <div id="seo" class="tab-pane fade">
                            <h3>SEO Settings</h3>
                            <form role="form" id="" action="<?php echo base_url().'admin/course_seo/'.$course_id ; ?>" method="post" enctype="multipart/form-data" role="form">
                            <div class="box-body">
                                <div class="row">
                                    <div class="col-md-5">         <?php
                                    $seo = $this->crud_model->get_course_seo($course_id)->row_array(); ?>                       
                                        <div class="form-group">
                                            <label for="fname">SEO Course Title</label>
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
                      <?php $sections = $this->crud_model->get_section($course_id)->result_array();
                                $count = 1;
                                foreach ($sections as $section) {
                                    $count++;
                                ?>
                                <div id="<?php  $section_name =str_replace(' ','-',$section["sidebar_title"]); $section_name = str_replace("'",'-', $section_name); echo $section_name; ?>" class="tab-pane fade">
                                    <h3><?php echo $section['sidebar_title'];?></h3>
                                    <?php include('widgets.php');?>
                                </div>
                                <?php } ?>

                                
                    </div>

                    
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
    var Course_id = "<?php echo $course_id; ?>";
</script>