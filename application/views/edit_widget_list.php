<?php
 $section = $this->crud_model->get_widget('list','',$id)->row_array();
?>
<form action="<?php echo base_url('admin/widget_form/list/').$id.'/'.$course_id;?>" method="post" enctype="multipart/form-data">
				  <div class="form-group">
				    <label for="heading">List Item:</label>
				    <input type="text" value="<?php echo $section['heading'];?>" class="form-control" id="heading" name="heading">
				  </div>
				   <div class="append-listitem">
								 
							  </div>
							  <a class="btn btn-sm btn-info add-more-listitem" data-count="0">Add list item</a>
				  
				  
				  <button type="submit" class="btn btn-default">Submit</button>
				</form>