<?php
 $section = $this->crud_model->get_section(NULL,$id)->row_array();
?>

<form role="form" id="" action="<?php echo base_url('admin/section_form/update/').$section['id'];  ?>" method="post" enctype="multipart/form-data" role="form">
                            <div class="box-body">
                                <div class="row">
                                    <div class="col-md-12">                                
                                        <div class="form-group">
                                            <label for="fname">Section Sidebar Title</label>
                                            <input type="text" class="form-control required"  required value="<?php echo $section['sidebar_title'];?>" name="sidebar_title" maxlength="128">
                                        </div>
                                    </div>
                                    <div class="col-md-12">                                
                                        <div class="form-group">
                                            <label for="fname">Section Heading</label>
                                            <input type="text" class="form-control required"  required value="<?php echo $section['heading'];?>" name="heading" maxlength="128">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="">Icon</label><br>
                                            <button type="button" data-msg="image size must be 32 x 32 px" data-height="32" data-width="32" data-input="form-filename-sectione" class="btn btn-info media-modal-btn">Choose Image</button>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="">File Name</label><br>
                                            <p class="form-filename"><?php echo $section['icon'];?></p>
                                            <input type="hidden" id="form-filename-sectione" value="<?php echo $section['icon'];?>" name="form-filename">
                                            
                                        </div>
                                    </div>
                                     <div class="col-md-12">
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </form>