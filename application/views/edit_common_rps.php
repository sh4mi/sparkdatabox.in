<?php
 $section =  $this->crud_model->get_rps($id)->row_array();
 $course_id = 0;
?>
<form action="<?php echo base_url('admin/widget_form/common_rps/').$id.'/'.$course_id;?>" method="post" enctype="multipart/form-data">
				  <div class="form-group">
				    <label for="heading">Username:</label>
				    <input type="text" value="<?php echo $section['username'];?>" class="form-control" id="heading" name="username">
				  </div>
				  <div class="form-group">
				    <label for="heading">Designation:</label>
				    <input type="text" class="form-control" value="<?php echo $section['designation'];?>" id="" name="designation">
				  </div>
				  <div class="form-group col-md-8">
                    <label for="">Icon</label><br>
                    <button type="button" data-msg="image size must be 200 x 200 px" data-height="200" data-width="200" class="btn btn-info media-modal-btn" data-input="form-filename-rps-e">Choose Image</button>
                  </div>
                  <div class="form-group col-md-4">
                    <label for="">File Name</label><br>
                    <p class="form-filename"><?php echo $section['thumbnail'];?></p>
                    <input type="hidden" id="form-filename-rps-e" name="form-filename">
                   </div>
				  
				  <button type="submit" class="btn btn-default">Submit</button>
				</form>