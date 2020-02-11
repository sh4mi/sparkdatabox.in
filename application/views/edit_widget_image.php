<?php
 $section = $this->crud_model->get_widget('image','',$id)->row_array();
?>
<form action="<?php echo base_url('admin/widget_form/image/').$id.'/'.$course_id;?>" method="post" enctype="multipart/form-data">
				  <div class="form-group">
				    <label for="heading">Heading:</label>
				    <input type="text" value="<?php echo $section['heading'];?>" class="form-control" id="heading" name="heading">
				  </div>
				  <div class="form-group">
				    <label for="">Text:</label>
				    <textarea class="form-control textarea" name="body"><?php echo $section['body'];?></textarea>
				  </div>
				  <div class="form-group col-md-8">
                    <label for="">Icon</label><br>
                    <button type="button" data-msg="image size must be 500 x 500 px" data-height="500" data-input="form-filename-image" data-width="500" class="btn btn-info media-modal-btn" data-input="form-filename-imagee">Choose Image</button>
                  </div>
                  <div class="form-group col-md-4">
                    <label for="">File Name</label><br>
                    <p class="form-filename"><?php echo $section['icon'];?></p>
                    <input type="hidden" id="form-filename-feature" name="form-filename-imagee">
                   </div>
                            
				  
				  <button type="submit" class="btn btn-default">Submit</button>
				</form>