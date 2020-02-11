<?php //echo $section_id; echo $type; 

switch ($type)
 {
    case "text":
        echo '<div class="row justify-content-center">
        	   <div class="col-md-10 border pad-20 widget-header">
        	    <h4 class="widget-heading">Text Widget</h4>
        	   
        		<div class="form-box border pad-20">
        		 <form action="'.base_url("admin/widgets_form/add/").$course_id.'/'.$section_id.'/'.$type.'" method="post" enctype="multipart/form-data">
				  <div class="form-group">
				    <label for="heading">Heading:</label>
				    <input type="text" class="form-control" id="heading" name="heading">
				  </div>
				  <div class="form-group">
				    <label for="">Text:</label>
				    <textarea class="form-control textarea" name="body" id="textarea-text"></textarea>
				  </div>
				  <a class="btn btn-sm btn-addlist btn-success" data-id="textarea-text">Add List Items</a>
				  
				  <button type="submit" class="btn btn-default">Submit</button>
				</form>
				</div>
			  </div>
			 </div>';
        break;
    case "question":
         echo '<div class="row justify-content-center">
        	   <div class="col-md-10 border pad-20 widget-header">
        	    <h4 class="widget-heading">Question Widget</h4>
        	   
        		<div class="form-box  pad-20">
        		 <form action="'.base_url("admin/widgets_form/add/").$course_id.'/'.$section_id.'/'.$type.'" method="post" enctype="multipart/form-data">
				  <div class="panel-group questions-panel-group" id="accordion">
				    <div class="panel panel-default">
					    <div class="panel-heading">
					      <h4 class="panel-title">
					        <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">
					        Question 1</a>

					      </h4>
					    </div>
					    <div id="collapse1" class="panel-collapse collapse in">
	      					<div class="panel-body">
							  <div class="form-group">
							    <label for="heading">Question Text:</label>
							    <input type="text" required class="form-control" id="heading" name="question[]">
							  </div>
							  <div class="form-group">
							    <label for="">Answer:</label>
							    <textarea required id="textarea1" class="form-control textarea-answer" name="answer[]"></textarea>
							    <a class="btn btn-sm btn-addlist btn-success" data-id="textarea1">Add List Items</a>
							  </div>
						  	</div>
    					</div>
  					</div>

				  </div>
				  <a class="btn btn-sm btn-info add-more-question" data-count="1">Add More</a>
				  <button type="submit" class="btn btn-default">Submit</button>
				</form>
				</div>
			  </div>
			 </div>';
        break;
    case "list":
        echo '<div class="row justify-content-center">
        	   <div class="col-md-10 border pad-20 widget-header">
        	    <h4 class="widget-heading">List Widget</h4>
        	   
        		<div class="form-box  pad-20">
        		 <form action="'.base_url("admin/widgets_form/add/").$course_id.'/'.$section_id.'/'.$type.'" method="post" enctype="multipart/form-data">
				  <div class="panel-group " id="accordion">
				    <div class="panel panel-default">
					    <div class="panel-heading">
					      <h4 class="panel-title">
					        <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">
					        List Items</a>

					      </h4>
					    </div>
					    <div id="collapse1" class="panel-collapse collapse in">
	      					<div class="panel-body">
							  <div class="form-group">
							    <label for="heading">List Section Heading:</label>
							    <input type="text" required class="form-control" id="heading" name="heading">
							  </div>
							  <div class="append-listitem">
								  <div class="form-group">
								    <label for="">List Item 1</label>
								    <input type="text" required class="form-control" id="" name="listitems[]">
								  </div>
							  </div>
							  <a class="btn btn-sm btn-info add-more-listitem" data-count="1">Add list item</a>
						  	</div>
    					</div>
  					</div>

				  </div>
				  
				  <button type="submit" class="btn btn-default">Submit</button>
				</form>
				</div>
			  </div>
			 </div>';
        break;
        case "feature":
        echo '<div class="row justify-content-center">
        	   <div class="col-md-6 border pad-20 widget-header">
        	    <h4 class="widget-heading">Feature Widget</h4>
        	   
        		<div class="form-box border pad-20">
        		 <form action="'.base_url("admin/widgets_form/add/").$course_id.'/'.$section_id.'/'.$type.'" method="post" enctype="multipart/form-data">
				  <div class="form-group">
				    <label for="heading">Heading:</label>
				    <input type="text" class="form-control" id="heading" name="heading">
				  </div>
				  <div class="form-group">
				    <label for="">Text:</label>
				    <textarea class="form-control textarea" name="body"></textarea>
				  </div>
				  <div class="form-group col-md-8">
                    <label for="">Icon</label><br>
                    <button type="button" data-msg="image size must be 128 x 128 px" data-height="128" data-width="128" class="btn btn-info media-modal-btn" data-input="form-filename-feature">Choose Image</button>
                  </div>
                  <div class="form-group col-md-4">
                    <label for="">File Name</label><br>
                    <p class="form-filename"></p>
                    <input type="hidden" id="form-filename-feature" name="form-filename">
                   </div>
                            
				  
				  <button type="submit" class="btn btn-default">Submit</button>
				</form>
				</div>
			  </div>
			 </div>';
        break;
        case "image":
        echo '<div class="row justify-content-center">
        	   <div class="col-md-6 border pad-20 widget-header">
        	    <h4 class="widget-heading">Image Widget (for certificate)</h4>
        	   
        		<div class="form-box border pad-20">
        		 <form action="'.base_url("admin/widgets_form/add/").$course_id.'/'.$section_id.'/'.$type.'" method="post" enctype="multipart/form-data">
				  <div class="form-group">
				    <label for="heading">Heading:</label>
				    <input type="text" class="form-control" id="heading" name="heading">
				  </div>
				  <div class="form-group">
				    <label for="">Text:</label>
				    <textarea class="form-control textarea" name="body"></textarea>
				  </div>
				  <div class="form-group col-md-8">
                    <label for="">Icon</label><br>
                    <button type="button" data-msg="image size must be 500 x 500 px" data-height="500" data-input="form-filename-image" data-width="500" class="btn btn-info media-modal-btn" data-input="form-filename-image">Choose Image</button>
                  </div>
                  <div class="form-group col-md-4">
                    <label for="">File Name</label><br>
                    <p class="form-filename"></p>
                    <input type="hidden" id="form-filename-image" name="form-filename-image">
                   </div>
                            
				  
				  <button type="submit" class="btn btn-default">Submit</button>
				</form>
				</div>
			  </div>
			 </div>';
        break;
        case "review":
        echo '<div class="row justify-content-center">
        	   <div class="col-md-6 border pad-20 widget-header">
        	    <h4 class="widget-heading">Review Widget</h4>
        	   
        		<div class="form-box border pad-20">
        		 <form action="'.base_url("admin/widgets_form/add/").$course_id.'/'.$section_id.'/'.$type.'" method="post" enctype="multipart/form-data">
				  <div class="form-group">
				    <label for="heading">Username:</label>
				    <input type="text" class="form-control" id="heading" name="heading">
				  </div>
				  <div class="form-group">
				    <label for="heading">LinkedIn Url:</label>
				    <input type="text" class="form-control" id="" name="url">
				  </div>
				  <div class="form-group">
				    <label for="">Review Text:</label>
				    <textarea class="form-control textarea" name="body"></textarea>
				  </div>
				  
				  <button type="submit" class="btn btn-default">Submit</button>
				</form>
				</div>
			  </div>
			 </div>';
        break;
    default:
        echo "Your favorite color is neither red, blue, nor green!";
}

?>