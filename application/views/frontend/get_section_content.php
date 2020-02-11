<?php 
			$section_id = $section['id'];
			$fcount = 0;
			$section_widgets = $this->crud_model->get_section_widgets($section_id)->result_array();
			foreach ($section_widgets as $sw) 
				{
				 $count++;

				 switch ($sw['type'])
					{
					    case "text":
					    $widget = $this->crud_model->get_widget($sw['type'],$sw['id'])->row_array();
?>
					<div class="textblock mt-45">
						<h3 class="subsection-heading"><?php echo $widget['heading'];?></h3>
						<p class="section-text ml-1"><?php echo $widget['body'];?></p>
						
					</div>
<?php
					    break;
					    case "list":
					    $list = $this->crud_model->get_widget($sw['type'],$sw['id'])->row_array(); 
?>
					<div class="listblock mt-45">
					<h3 class="subsection-heading"><?php echo $list['heading'];?></h3>
					
					<div class="list pl-3">
						<?php 
						$list_items = $this->crud_model->get_list_items($list['id'])->result_array();
						      	foreach ($list_items as $li)
						      	 { ?>
						<p class="list-item"><i class="far fa-check-circle list-icon mr-2"></i><span class="list-text"><?php echo $li['item'];?></span></p>
					<?php } ?>
						
					</div>
				</div>
<?php
					    break;
					    case "feature":
					    
					    $fcount ++;
					    if($fcount == 1) { 
					     $features = $this->crud_model->get_all_features($sw['course_id']);
						 if($features != NULL) {
						 	if($features->num_rows() > 0) {
						 		$features = $features->result_array();?>
						 		<div class="feature-block">
								<div class="row">
						 		<?php foreach ($features as $feature ) {
?>
							
									<div class="col-lg-4">
										<img src="<?php echo base_url('assets/frontend/images/').$feature['icon'];?>">
										<h4><?php echo $feature['heading'];?></h4>
										<p><?php echo $feature['body'];?></p>
									</div>
								
					<?php } ?>
					</div>
							</div>
					 <?php } } } ?>
						
						
					
<?php
					    break;
					    case "question":
					    $questions = $this->crud_model->get_widget($sw['type'],$sw['id'])->result_array();
?>
						<div class="panel-group questions mt-45" id="accordion-questions">
							
							<?php foreach ($questions as $question)
						      	 { ?>
							<div class="card">
								<div class="card-header" id="subheadingOne">
									<h5 class="mb-0">
										<button class="btn btn-link" data-toggle="collapse" data-target="#question-<?php echo $question['id'];?>" aria-expanded="true" aria-controls="collapseOne">
										<img class="plus-open" src="<?php echo base_url('assets/frontend/images/plus.png');?>" /><span class="ml-3 open-text"><?php echo $question['question'];?></span>
										</button>
									</h5>
								</div>

								<div id="question-<?php echo $question['id'];?>" class="collapse" aria-labelledby="subheadingOne" data-parent="#accordion-questions">
									<div class="card-body">
										<?php echo $question['answer'];?> 
									</div>
								</div>
							</div>
							<?php } ?>

						</div>
<?php
					    break;
					     case "review":
					    $widget = $this->crud_model->get_widget($sw['type'],$sw['id'])->row_array();
?>
						<div class="testimonial-thumb">
                        <div class="media">
                            <div class="media-left testimonial-card">
                                <a href="<?php echo $widget['url'];?>" rel="noreferrer nofollow" target="_blank" title="<?php echo $widget['url'];?>" class="testimonial-profile">
                                    <span class="user_letter"><?php echo substr($widget['heading'],0,1);?></span>
                                </a>
                            </div>
                                    <div class="media-body">
                                        <div class="title_name">  <?php echo $widget['heading'];?>  </div>
                                        <span class="stars" data-rating="5" data-num-stars="5"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></span> <span>(5.0)       </span>                              
                                        
                                        <p class="section-text"><?php echo $widget['body'];?>
										</p>
                                    </div>
                                </div>
                            </div>
<?php
					    break;
					     case "image":
					    $widget = $this->crud_model->get_widget($sw['type'],$sw['id'])->row_array();
?>
						<div class="text-image-block">
					<h3 class="subsection-heading"><?php echo $widget['heading'];?></h3>
					<div class="row">
						<div class="col-lg-8">
							<p class="section-text"><?php echo $widget['body'];?></p>
						</div>
						<div class="col-lg-4">
							<img class="open-cert-btn" src="<?php echo base_url('assets/frontend/images/').$widget['icon'];?>">
						</div>
					</div>
				</div>
<?php
					    break;
					    default:
					    echo "dasd";
					}
?>






<?php } ?>