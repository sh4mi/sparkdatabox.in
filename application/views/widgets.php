<div class="row">
	<div class="col-md-2">
		<h4>Choose widget</h4>
		<div class="widget-box" data-type="text" data-course="<?php echo $course_id; ?>" data-id="<?php echo $section['id'];?>">
			Add Text
		</div>
		<div class="widget-box" data-type="question" data-course="<?php echo $course_id; ?>" data-id="<?php echo $section['id'];?>">
			Add Questions
		</div>
		<div class="widget-box" data-type="feature" data-course="<?php echo $course_id; ?>" data-id="<?php echo $section['id'];?>">
			Add Feature 
		</div>
		<div class="widget-box-import" data-type="feature" data-course="<?php echo $course_id; ?>" data-id="<?php echo $section['id'];?>">
			Import Features
		</div>
		<div class="widget-box" data-type="list" data-course="<?php echo $course_id; ?>" data-id="<?php echo $section['id'];?>">
			Add List Items
		</div>
		<div class="widget-box" data-type="image" data-course="<?php echo $course_id; ?>" data-id="<?php echo $section['id'];?>">
			Add Text Image 
		</div>
		<div class="widget-box" data-type="review" data-course="<?php echo $course_id; ?>" data-id="<?php echo $section['id'];?>">
			Add User Review 
		</div>

	</div>
	<div class="col-md-9">
		<div class="widget-response" id="widget-response<?php echo $section['id']; ?>">
			
		</div>
		<div id = "parent-div" data-plugin="dragula" data-containers='["accordion<?php echo $section['id']; ?>"]'>
			<div class="bg-dragula p-2 p-lg-4">
			<h5 class="mt-0">
               <button type="button" class="btn btn-primary btn-sm btn-rounded alignToTitle" id = "section-sort-btn" onclick="sort_widgets('<?php echo $section['id']; ?>')" data-widget="<?php echo $section['id']; ?>" name="button">Update Sorting</button>
            </h5>
            <?php $runned = 0; ?>
        	<div class="existing-widgets py-2" id="widget-list<?php echo $section['id']; ?>" >
			<div class="panel-group" id="accordion<?php echo $section['id']; ?>">
			<?php 
			$section_id = $section['id'];
			$section_widgets = $this->crud_model->get_section_widgets($section_id)->result_array();
			
			
			
				foreach ($section_widgets as $sw) 
				{
				 $count++;
				   
				  switch ($sw['type'])
					 {
					    case "text":
					    $widget = $this->crud_model->get_widget($sw['type'],$sw['id'])->row_array();
					    ?>
					    <div class="panel panel-default draggable-item" id = "<?php echo $sw['id']; ?>">
						    <div class="panel-heading">
						    	 <div class="eddel-btns">
                                        <a class="edit-modal-btn" data-id="<?php echo $widget['id'];?>" data-courseid="<?php echo $course_id;?>" data-type="edit_widget_text" data-heading="Edit Widget" href="#">edit <i class="fa fa-edit"></i></a>
                                        <a class="text-danger ml-2 delete-btn" id="" href="#" data-url="<?php echo base_url().'admin/delete_widget/text/'.$widget['id'].'/'.$course_id; ?>" data-id="<?php echo $section['id']; ?>" title="Delete">delete <i class="fa fa-trash"></i></a> 
                                </div>
						      <h4 class="panel-title">
						        <a data-toggle="collapse" data-parent="#accordion<?php echo $section['id']; ?>" href="#widget<?php echo $count; ?>">
						        <?php echo $sw['type']?> widget - <?php echo $widget['heading']?></a>
						      </h4>
						     
						    </div>
						    <div id="widget<?php echo $count;?>" class="panel-collapse collapse">
						      <div class="panel-body">
						      	
						      	<p><?php echo $widget['body']; ?></p>
						      </div>
						    </div>
						</div>
					    <?php
					    break;
					    case "review":
					    $widget = $this->crud_model->get_widget($sw['type'],$sw['id'])->row_array();
					    ?>
					    <div class="panel panel-default draggable-item" id = "<?php echo $sw['id']; ?>">
						    <div class="panel-heading">
						    	<div class="eddel-btns">
	                                        <a class="edit-modal-btn" data-id="<?php echo $widget['id'];?>" data-courseid="<?php echo $course_id;?>" data-type="edit_widget_review" data-heading="Edit Widget" href="#">edit <i class="fa fa-edit"></i></a>
	                                        <a class="text-danger ml-2 delete-btn" id="" href="#" data-url="<?php echo base_url().'admin/delete_widget/review/'.$sw['id'].'/'.$course_id; ?>" data-id="<?php echo $sw['id']; ?>" title="Delete">delete <i class="fa fa-trash"></i></a> 
                                		</div>
						      <h4 class="panel-title">
						        <a data-toggle="collapse" data-parent="#accordion<?php echo $section['id']; ?>" href="#widget<?php echo $count; ?>">
						        <?php echo $sw['type']?> widget - <?php echo $widget['heading']?></a>
						      </h4>
						    </div>
						    <div id="widget<?php echo $count;?>" class="panel-collapse collapse">
						      <div class="panel-body">
						      	<p>LinkedIn url:<?php echo $widget['url']; ?></p>
						      	<p><?php echo $widget['body']; ?></p>
						      </div>
						    </div>
						</div>
					    <?php
					    break;
					    case "question":
					    $questions = $this->crud_model->get_widget($sw['type'],$sw['id'])->result_array(); 
					    ?>
					    <div class="panel panel-default draggable-item" id = "<?php echo $sw['id']; ?>">
						    <div class="panel-heading">
						    	<div class="eddel-btns">
                                        
                                        <a class="text-danger ml-2 delete-btn" id="" href="#" data-url="<?php echo base_url().'admin/delete_widget/question/'.$sw['id'].'/'.$course_id; ?>" data-id="<?php echo $section['id']; ?>" title="Delete">delete <i class="fa fa-trash"></i></a> 
                                </div>
						      <h4 class="panel-title">
						        <a data-toggle="collapse" data-parent="#accordion<?php echo $section['id']; ?>" href="#widget<?php echo $count;?>">
						        <?php echo $sw['type']?> widget</a>
						      </h4>
						    </div>
						    <div id="widget<?php echo $count;?>" class="panel-collapse collapse">
						      <div class="panel-body">
						      	<?php foreach ($questions as $question)
						      	 { ?>
						      		<div class="widget-inside-question">
						      			<div class="eddel-btns inside">
	                                        <a class="edit-modal-btn" data-id="<?php echo $question['id'];?>" data-courseid="<?php echo $course_id;?>" data-type="edit_widget_question" data-heading="Edit Widget" href="#">edit <i class="fa fa-edit"></i></a>
	                                        <a class="text-danger ml-2 delete-btn" id="" href="#" data-url="<?php echo base_url().'admin/delete_widget/question_single/'.$question['id'].'/'.$course_id; ?>" data-id="<?php echo $question['id']; ?>" title="Delete">delete <i class="fa fa-trash"></i></a> 
                                		</div>
						      		<p><?php echo $question['question']; ?></p>
						      		<p><?php echo $question['answer']; ?></p>
						      		</div>
						      	<?php } ?>
						      	
						      </div>
						    </div>
						</div>
					    <?php
					    break;
					    case "feature":
					    $widget = $this->crud_model->get_widget($sw['type'],$sw['id'])->row_array();
					    ?>
					    <div class="panel panel-default draggable-item" id = "<?php echo $sw['id']; ?>">
							<div class="panel-heading">
								<div class="eddel-btns">
	                                        <a class="edit-modal-btn" data-id="<?php echo $widget['id'];?>" data-courseid="<?php echo $course_id;?>" data-type="edit_widget_feature" data-heading="Edit Widget" href="#">edit <i class="fa fa-edit"></i></a>
	                                        <a class="text-danger ml-2 delete-btn" id="" href="#" data-url="<?php echo base_url().'admin/delete_widget/feature/'.$sw['id'].'/'.$course_id; ?>" data-id="<?php echo $sw['id']; ?>" title="Delete">delete <i class="fa fa-trash"></i></a> 
                                		</div>
						      <h4 class="panel-title">
						        <a data-toggle="collapse" data-parent="#accordion<?php echo $section['id']; ?>" href="#widget<?php echo $count; ?>">
						        <?php echo $sw['type']?> widget - <?php echo $widget['heading']?></a>
						      </h4>
						    </div>
						    <div id="widget<?php echo $count;?>" class="panel-collapse collapse">
						      <div class="panel-body">
						      	
						      	<p><?php echo $widget['body']; ?></p>
						      	<p>Filename: <?php echo $widget['icon']; ?></p>
						      </div>
						    </div>
						</div>
					    <?php
					    break;
					    case "image":
					    $widget = $this->crud_model->get_widget($sw['type'],$sw['id'])->row_array();
					    ?>
					    <div class="panel panel-default draggable-item" id = "<?php echo $sw['id']; ?>">
						    <div class="panel-heading">
						    	<div class="eddel-btns">
	                                        <a class="edit-modal-btn" data-id="<?php echo $widget['id'];?>" data-courseid="<?php echo $course_id;?>" data-type="edit_widget_image" data-heading="Edit Widget" href="#">edit <i class="fa fa-edit"></i></a>
	                                        <a class="text-danger ml-2 delete-btn" id="" href="#" data-url="<?php echo base_url().'admin/delete_widget/image/'.$sw['id'].'/'.$course_id; ?>" data-id="<?php echo $sw['id']; ?>" title="Delete">delete <i class="fa fa-trash"></i></a> 
                                		</div>
						      <h4 class="panel-title">
						        <a data-toggle="collapse" data-parent="#accordion<?php echo $section['id']; ?>" href="#widget<?php echo $count; ?>">
						        <?php echo $sw['type']?> widget - <?php echo $widget['heading']?></a>
						      </h4>
						    </div>
						    <div id="widget<?php echo $count;?>" class="panel-collapse collapse">
						      <div class="panel-body">
						      	
						      	<p><?php echo $widget['body']; ?></p>
						      	<p>Filename: <?php echo $widget['icon']; ?></p>
						      </div>
						    </div>
						</div>
					    <?php
					    break;
					    case "list":
					    $list = $this->crud_model->get_widget($sw['type'],$sw['id'])->row_array(); 
					    ?>
					    <div class="panel panel-default draggable-item" id = "<?php echo $sw['id']; ?>">
						    <div class="panel-heading">
						    	<div class="eddel-btns">
	                                        <a class="edit-modal-btn" data-id="<?php echo $list['id'];?>" data-courseid="<?php echo $course_id;?>" data-type="edit_widget_list" data-heading="Edit Widget" href="#">edit <i class="fa fa-edit"></i></a>
	                                        <a class="text-danger ml-2 delete-btn" id="" href="#" data-url="<?php echo base_url().'admin/delete_widget/list/'.$sw['id'].'/'.$course_id; ?>" data-id="<?php echo $sw['id']; ?>" title="Delete">delete <i class="fa fa-trash"></i></a> 
                                		</div>
						      <h4 class="panel-title">
						        <a data-toggle="collapse" data-parent="#accordion<?php echo $section['id']; ?>" href="#widget<?php echo $count;?>">
						        <?php echo $sw['type']?> widget - <?php echo $list['heading']; ?></a>
						      </h4>
						    </div>
						    <div id="widget<?php echo $count;?>" class="panel-collapse collapse">
						      <div class="panel-body">
						      	<?php 
						      	$list_items = $this->crud_model->get_list_items($list['id'])->result_array();
						      	foreach ($list_items as $li)
						      	 { ?>
						      		
						      		<div class="border p-8">
						      			<div class="eddel-btns inside">
	                                        <a class="edit-modal-btn" data-id="<?php echo $li['id'];?>" data-courseid="<?php echo $course_id;?>" data-type="edit_widget_list_item" data-heading="Edit Widget" href="#">edit <i class="fa fa-edit"></i></a>
	                                        <a class="text-danger ml-2 delete-btn" id="" href="#" data-url="<?php echo base_url().'admin/delete_widget/list_item/'.$li['id'].'/'.$course_id; ?>" data-id="<?php echo $li['id']; ?>" title="Delete">delete <i class="fa fa-trash"></i></a> 
                                		</div>
						      			<?php echo $li['item']; ?>
						      		</div>
						      		
						      	<?php } ?>
						      	
						      </div>
						    </div>
						</div>
					    <?php
					    break;
					    default:
        				echo "Your favorite color is neither red, blue, nor green!";
					}
				  ?>
				  

			 <?php }
			 $count = $count + 200;
			 ?>
			</div> 
			<!-- panel ground end -->
		</div>
		</div>  <!-- bg-dragula  -->
		</div>  <!--  parent div -->

	</div>
</div>