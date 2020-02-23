    <!-- Media Modal -->
  <div class="modal fade" id="media_modal" role="dialog">
    <div class="modal-dialog modal-lg" style="width: 90% !important">
      <div class="modal-content" style="height: 600px !important;overflow: auto;">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
         <button class="btn btn-primary upload-new-img">Upload New</button>
         <span class="modal-size-msg"></span>
        </div>
        <div class="modal-body" >
          <div class="row">
              <div class="col-lg-9" id="media_modal_body">
                  
              </div>
              <div class="col-lg-3 fixed-modal-viewer text-center">
                  <img class="view-thumb" src="<?php echo base_url(); ?>assets/frontend/images/placeholder-image.png">
                  <div class="preview-info mt-5">
                      <p class="preview-question">File name: <span id="preview-name" class="preview-answer">image.jpg</span></p>
                      <p class="preview-question">Dimensions (width x height): <span   id="preview-size" class="preview-answer">33x155 px</span></p>
                      <p class="validation-image-error text-danger"></p>
                  </div>
                  <br>
                  <button id="select-image" class="btn btn-primary">Select</button>
              </div>

          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Loading Modal -->
<div class="modal fade" id="loadMe" tabindex="-1" role="dialog" aria-labelledby="loadMeLabel">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-body text-center">
        <div class="loader text-center">
          <img src="<?php echo base_url('assets/frontend/images/loading.gif');?>">
        </div>
        <div clas="loader-txt">
          <p>Loading Images please wait...</small></p>
        </div>
      </div>
    </div>
  </div>
</div>

  <div class="hidden">
    <form class="new-img-form" id="new-img-form" method="post" enctype="multipart/form-data" role="form" action="<?php echo base_url('admin/upload_new_img'); ?>">
      <input type="file" name="newimg" id="upfile" class="new-img" onchange="submit_form();">
    </form>
  </div>

  <!-- Delete Modal -->

  <!-- Modal HTML -->
<div id="deleteModal" class="modal fade">
  <div class="modal-dialog modal-confirm">
    <div class="modal-content">
      <div class="modal-header">
        <div class="icon-box">
          <i class="fa fa-close"></i>
        </div>        
        <h4 class="modal-title">Are you sure?</h4>  
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
      </div>
      <div class="modal-body">
        <p>Do you really want to delete this record? This process cannot be undone.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-info" data-dismiss="modal">Cancel</button>
        <a type="button" href="" class="btn btn-danger delete-btn-yes">Delete</a>
      </div>
    </div>
  </div>
</div>

<!-- edit modal -->

  <!-- Media Modal -->
  <div class="modal fade" id="edit_modal" role="dialog">
    <div class="modal-dialog " >
      <div class="modal-content" >
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title edit-modal-heading">Edit </h4>
         </div>
        <div class="modal-body edit-modal-body" >
          
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>


    <footer class="main-footer">
        <div class="pull-right hidden-xs">
          <b>Spark Databox</b> Admin System | Version 1.5
        </div>
        <strong>Copyright &copy; 2020-2021 <a href="<?php echo base_url(); ?>">Spark Databox</a>.</strong> All rights reserved.
    </footer>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/dist/DataTables/dt/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/dist/DataTables/dt/js/dataTables.bootstrap.min.js"></script>
    
    
    <script src="<?php echo base_url(); ?>assets/js/common.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/dist/js/adminlte.min.js" type="text/javascript"></script>
    <!-- <script src="<?php echo base_url(); ?>assets/dist/js/pages/dashboard.js" type="text/javascript"></script> -->
    <script src="<?php echo base_url(); ?>assets/js/jquery.validate.js" type="text/javascript"></script>

    <script src="<?php echo base_url(); ?>assets/js/validation.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>assets/js/dragula.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>assets/js/sorting.js" type="text/javascript"></script>
    
    
    <script type="text/javascript">
        var windowURL = window.location.href;
        pageURL = windowURL.substring(0, windowURL.lastIndexOf('/'));
        var x= $('a[href="'+pageURL+'"]');
            x.addClass('active');
            x.parent().addClass('active');
        var y= $('a[href="'+windowURL+'"]');
            y.addClass('active');
            y.parent().addClass('active');
            $("#categories_table").DataTable();
    </script>




  </body>
</html>