<?php
 $section = $this->crud_model->get_list_item($id)->row_array();
?>
<form action="<?php echo base_url('admin/widget_form/list_item/').$id.'/'.$course_id;?>" method="post" enctype="multipart/form-data">
				  <div class="form-group">
				    <label for="heading">List Item Text:</label>
				    <input type="text" value="<?php echo $section['item'];?>" class="form-control" id="heading" name="item">
				  </div>
				  
				  
				  <button type="submit" class="btn btn-default">Submit</button>
				</form>