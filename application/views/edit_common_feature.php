<?php
 $section =  $this->crud_model->get_key_feature($id)->row_array();
 $course_id = 0;
?>
<form action="<?php echo base_url('admin/widget_form/common_feature/').$id.'/'.$course_id;?>" method="post" enctype="multipart/form-data">
				  <div class="form-group">
				    <label for="heading">Heading:</label>
				    <input type="text"  value="<?php echo $section['heading'];?>" class="form-control" id="heading" name="heading">
				  </div>
				  <div class="form-group">
				    <label for="">Text:</label>
				    <textarea class="form-control textarea" name="body"><?php echo $section['body'];?></textarea>
				  </div>
				  <div class="form-group col-md-8">
                    <label for="">Icon</label><br>
                    <button type="button" data-msg="image size must be 128 x 128 px" data-height="128" data-width="128" class="btn btn-info media-modal-btn" data-input="form-filename-feature-e">Choose Image</button>
                  </div>
                  <div class="form-group col-md-4">
                    <label for="">File Name</label><br>
                    <p class="form-filename"><?php echo $section['icon'];?></p>
                    <input type="hidden" id="form-filename-feature-e" name="form-filename">
                   </div>
                            
				  
				  <button type="submit" class="btn btn-default">Submit</button>
				</form>