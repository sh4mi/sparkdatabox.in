<?php
 $section = $this->crud_model->get_widget('review','',$id)->row_array();
?>
<form action="<?php echo base_url('admin/widget_form/image/').$id.'/'.$course_id;?>" method="post" enctype="multipart/form-data">
				  <div class="form-group">
				    <label for="heading">Username:</label>
				    <input type="text" value="<?php echo $section['heading'];?>" class="form-control" id="heading" name="heading">
				  </div>
				  <div class="form-group">
				    <label for="heading">LinkedIn Url:</label>
				    <input type="text" class="form-control" value="<?php echo $section['url'];?>" id="" name="url">
				  </div>
				  <div class="form-group">
				    <label for="">Review Text:</label>
				    <textarea class="form-control textarea" name="body"><?php echo $section['body'];?></textarea>
				  </div>
				  
				  <button type="submit" class="btn btn-default">Submit</button>
				</form>