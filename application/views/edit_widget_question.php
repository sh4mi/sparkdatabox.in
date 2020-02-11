<?php
 $section = $this->crud_model->get_widget('question','',$id)->row_array();
?>
<form action="<?php echo base_url('admin/widget_form/question/').$id.'/'.$course_id;?>" method="post" enctype="multipart/form-data">
				  <div class="form-group">
				    <label for="heading">Question:</label>
				    <input type="text" value="<?php echo $section['question'];?>" class="form-control" id="heading" name="question">
				  </div>
				  <div class="form-group">
				    <label for="">Answer:</label>
				    <textarea class="form-control textarea"  name="answer"><?php echo $section['answer'];?></textarea>
				  </div>
				  
				  <button type="submit" class="btn btn-default">Submit</button>
				</form>