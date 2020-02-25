<?php
 $section =  $this->crud_model->get_common_certificate($id)->row_array();
 $course_id = 0;
?>
<form action="<?php echo base_url('admin/widget_form/common_certificate/').$id.'/'.$course_id;?>" method="post" enctype="multipart/form-data">
				  <div class="form-group">
				    <label for="heading">Heading:</label>
				    <input type="text"  value="<?php echo $section['heading'];?>" class="form-control" id="heading" name="heading">
				  </div>
				  <div class="form-group">
				    <label for="">Text:</label>
				    <textarea class="form-control textarea" name="body"><?php echo $section['body'];?></textarea>
				  </div>
				 <div class="form-group">
                                                        <label for="">Icon</label><br>
                                                        <button type="button" data-msg="image size must be 1600 x 1132 px" data-height="1132" data-width="1600" data-input="form-filename-common-cert" class="btn btn-info media-modal-btn">Choose Image</button>
                                                    </div>
                                                    <div class="form-group">
                                                    <label for="">File Name</label><br>
                                                    <p class="form-filename"><?php echo $section['icon'];?></p>
                                                    <input type="hidden" id="form-filename-common-cert" name="form-filename">
                                                    <span id="image-size-validation-key-features" class="hidden image-size-validation-msg" data-height="1132" data-width="1600">image size must be 1600 x 1132 px</span>
                                                </div>
                            
				  
				  <button type="submit" class="btn btn-default">Submit</button>
				</form>