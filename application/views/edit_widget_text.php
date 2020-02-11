<?php
 $section = $this->crud_model->get_widget('text','',$id)->row_array();
?>
<form action="<?php echo base_url('admin/widget_form/text/').$id.'/'.$course_id;?>" method="post" enctype="multipart/form-data">
				  <div class="form-group">
				    <label for="heading">Heading:</label>
				    <input type="text" value="<?php echo $section['heading'];?>" class="form-control" id="heading" name="heading">
				  </div>
				  <div class="form-group">
				    <label for="">Text:</label>
				    <textarea class="form-control textarea"  name="body"><?php echo $section['body'];?></textarea>
				  </div>
				  
				  <button type="submit" class="btn btn-default">Submit</button>
				</form>