/**
 * @author Kishor Mali
 */


jQuery(document).ready(function(){
	
	jQuery(document).on("click", ".deleteUser", function(){
		var userId = $(this).data("userid"),
			hitURL = baseURL+ "deleteUser",
			currentRow = $(this);
		
		var confirmation = confirm("Are you sure to delete this user ?");
		
		if(confirmation)
		{
			jQuery.ajax({
			type : "POST",
			dataType : "json",
			url : hitURL,
			data : { userId : userId } 
			}).done(function(data){
				console.log(data);
				currentRow.parents('tr').remove();
				if(data.status = true) { alert("User successfully deleted"); }
				else if(data.status = false) { alert("User deletion failed"); }
				else { alert("Access denied..!"); }
			});
		}
	});
	
	
	jQuery(document).on("click", ".searchList", function(){
		
	});

	var required_width ; 
   	var required_height;
   	var input_name;
	
	$(document).on("click",".media-modal-btn",function(event){
	 event.preventDefault();

	 $("#loadMe").modal({
      backdrop: "static", //remove ability to close modal with click
      keyboard: false, //remove option to close with keyboard
      show: true //Display loader!
    });
	 var msg = $(this).attr("data-msg");
	 required_height = $(this).attr("data-height");
	 required_width = $(this).attr("data-width");
	 input_name = $(this).attr("data-input");
            		
	 var url = baseURL +"admin/get_all_media_ajax";
	 $.ajax({
            url: url,
            type : 'POST',
            success: function(response)
            {
              console.log(response);	
              $('#media_modal_body').html(response);
              $("#select-image").hide();
              $("#media_modal").modal();
              $(".modal-size-msg").html(msg);
              $("#loadMe").modal('hide');
            }
          });
	 return false;
	
	});
   	
   	var validate_height;
   	var validate_width;
   	var filename ;
   

	$(document).on("click",".media-thumbnail",function(event){

		$("#select-image").show();
		$(".media-thumbnail").removeClass("media-thumbnail-clicked");
		$(".validation-image-error").html("");
		$(this).addClass("media-thumbnail-clicked");
		 var bg = $(this).css('background-image');
        bg = bg.replace('url(','').replace(')','').replace(/\"/gi, "");
        console.log(bg);
        $(".view-thumb").attr("src",bg);
        var name = $(this).attr("data-name");
        var width = $(this).attr("data-width");
        validate_width = width;
        var height = $(this).attr("data-height");
        validate_height = height;
        var size = width + " x "+height+"px";

        $("#preview-name").html(name);
        filename = name;
        $("#preview-size").html(size);

	});


	$(document).on("click","#select-image",function(event){

		var width = required_width;
        var height = required_height;
        //console.log(validate_width+"  "+validate_height);
        //console.log(width+"  "+height);
		if(width == validate_width && height == validate_height)
		{
			$(".validation-image-error").html("");
			$(".form-filename").html(filename);
			$("#"+input_name).val(filename);
			// $("#form-filename-hidden").val(filename);
			$("#media_modal").modal("hide");
			console.log("working iamge ");
		}
		else
		{
			$(".validation-image-error").html("Please select image with proper size.");
			$(".image-size-validation-msg").html("Please select image with proper size.");
			
		}

	});

	$(document).on("click",".delete-btn",function(event){

		var id = $(this).attr("data-id");
		var url = $(this).attr("data-url");
		$("#deleteModal").modal();
		$(".delete-btn-yes").attr("href",url);

	});

	$(document).on("click",".choose-file-btn",function(event){

		$("#form-filename-syllabus").click();

	});

	$(document).on('change','#form-filename-syllabus' , function(event){
	 
	 var filename = $(this).val().replace(/C:\\fakepath\\/i, ''); 
	 var extension = filename.split('.').pop();
	 console.log(extension);
	 if(extension != 'pdf')
	 {
	 	$(".syllabus-error").html("only pdf file format allowed");	
	 }
	 else
	 {
	 	$(".form-filename-syllabus").html(filename);
	 	$(".syllabus-error").html('');
	 }

	});

	$('#categories-select').change(function() {

    	$(".category-response").html("");
    	var text = $(this).children("option:selected").text();
    	var category_id = $(this).val();
    	console.log("course id "+ Course_id);
    	var url = baseURL +"admin/add_course_category_ajax";
		$.ajax({
	            url: url,
	            data:{category_id:category_id,course_id:Course_id},
	            type : 'POST',
	            dataType:'json',
	            success: function(response)
	            {
	              console.log(response);
	              if(response.msg)
	              {
	              	$(".course-categories").append('<button data-id="'+response.id+'" class="btn btn-info ml-2 remove-category-btn">'+text+' <i class="fa fa-close ml-2"></i></button>');
	              	$(".category-response").html("category added.");
	              }	
	              else
	              {
	              	$(".category-response").html("category already exists.");
	              }
	            }
	        });

	});

	$(document).on("click",".remove-category-btn",function(event){
		var id = $(this).attr("data-id");
		$(this).remove();
		var url = baseURL +"admin/remove_course_category_ajax";
		$.ajax({
	            url: url,
	            data:{id:id},
	            type : 'POST',
	            dataType:'json',
	            success: function(response)
	            {
	              console.log(response);
	              if(response.msg)
	              {
	              	$(".category-response").html("category removed.");
	              }	
	              else
	              {
	              	//$(".category-response").html("category already exists.");
	              }
	            }
	        });
		
	});


	$('#related-courses-select').change(function() {

    	$(".related-response").html("");
    	var text = $(this).children("option:selected").text();
    	var related_course_id = $(this).val();
    	//console.log("course id "+ Course_id);
    	var url = baseURL +"admin/add_related_course_ajax";
		$.ajax({
	            url: url,
	            data:{related_course_id:related_course_id,course_id:Course_id},
	            type : 'POST',
	            dataType:'json',
	            success: function(response)
	            {
	              console.log(response);
	              if(response.msg)
	              {
	              	$(".related-courses").append('<button data-id="'+response.id+'" class="btn btn-info ml-2 remove-course-btn">'+text+' <i class="fa fa-close ml-2"></i></button>');
	              	$(".related-response").html("related course added.");
	              }	
	              else
	              {
	              	$(".related-response").html("course already exists.");
	              }
	            }
	        });

	});

	$(document).on("click",".remove-course-btn",function(event){
		var id = $(this).attr("data-id");
		$(this).remove();
		var url = baseURL +"admin/remove_related_course_ajax";
		$.ajax({
	            url: url,
	            data:{id:id},
	            type : 'POST',
	            dataType:'json',
	            success: function(response)
	            {
	              console.log(response);
	              if(response.msg)
	              {
	              	$(".related-response").html("course removed.");
	              }	
	              else
	              {
	              	//$(".category-response").html("category already exists.");
	              }
	            }
	        });
		
	});


	$(document).on("click",".widget-box",function(event){
		var type = $(this).attr("data-type");
		var id = $(this).attr("data-id");
		var course_id = $(this).attr('data-course');
		var url = baseURL +"admin/add_widget_ajax";
		$.ajax({
	            url: url,
	            data:{type:type,id:id,course_id:course_id},
	            type : 'POST',
	            //dataType:'json',
	            success: function(response)
	            {
	              console.log(response);
	              $("#widget-response"+id).html(response);
	            }
	        });
		
	});

	$(document).on("click",".widget-box-import",function(event){
		var type = $(this).attr("data-type");
		var id = $(this).attr("data-id");
		var course_id = $(this).attr('data-course');
		var url = baseURL +"admin/import_features_ajax";
		$.ajax({
	            url: url,
	            data:{type:type,id:id,course_id:course_id},
	            type : 'POST',
	            success: function(response)
	            {
	              console.log(response);
	              //$("#widget-response"+id).html(response);
	              location.reload();
	            }
	        });
		
	});

	$(document).on("click",".add-more-question",function(event){
		var count = $(this).attr("data-count");
		count ++; 
		$(".questions-panel-group").append('<div class="panel panel-default"><div class="panel-heading"><h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion" href="#collapse'+count+'">Question '+count+'</a><a class="btn btn-danger remove-question btn-sm">remove</a></h4></div><div id="collapse'+count+'" class="panel-collapse collapse in"><div class="panel-body"><div class="form-group"><label for="heading">Question Text:</label> <input type="text" class="form-control" id="heading" name="question[]"></div><div class="form-group"><label for="">Answer:</label><textarea id="textarea'+count+'" class="form-control textarea-answer" name="answer[]"></textarea><a class="btn btn-sm btn-addlist btn-success" data-id="textarea'+count+'">Add List Items</a></div></div></div></div>');
		$(this).attr("data-count",count);
	});

	$(document).on("click",".btn-addlist",function(event){
		var id = $(this).attr("data-id");
		var existing_text = $("#"+id).val();
		var new_text = existing_text + '\n<p class="list-item"><i class="far fa-check-circle list-icon mr-2"></i><span class="list-text">list item (add your text here)</span></p>'; 
		$("#"+id).val(new_text);
	});

	$(document).on("click",".remove-question",function(event){
		$(this).parents(".panel").remove();
		console.log("tes");
	});

	$(document).on("click",".add-more-listitem",function(event){
		var count = $(this).attr("data-count");
		count ++; 
		$(".append-listitem").append('<div class="form-group"><label for="">List Item '+count+'<a class="remove-listitem">remove</a></label><input type="text" required class="form-control" id="" name="listitems[]"></div>');
		$(this).attr("data-count",count);
	});

	$(document).on("click",".remove-listitem",function(event){
		$(this).parents(".form-group").remove();
		
	});

	$(document).on("click",".edit-modal-btn",function(event){

		  
		  event.preventDefault();
		 var heading = $(this).attr("data-heading");
		 var type = $(this).attr("data-type");
		 var id = $(this).attr("data-id");
		 var course_id = $(this).attr("data-courseid");
		 var url = baseURL + "admin/edit_modal";
		 
		 $.ajax({
	            url: url,
	            type : 'POST',
	            data:{heading:heading,type:type,id:id,course_id:course_id},
	            success: function(response)
	            {
	              //console.log(response);	
	              $('.edit-modal-body').html(response);
	              $(".edit-modal-heading").html(heading);
	              $("#edit_modal").modal();
	              
	            }
	          });

	});


     $(document).on("click",".nav-tabs li a",function(event){

     	
        var section = $(this).attr("href");
       	console.log("sec"+section);
        var url = baseURL + "admin/set_section_cookie/";
		 
		 $.ajax({
	            url: url,
	            type : 'POST',
	            data:{section:section},
	            success: function(response)
	            {
	             
	              console.log(response);
	            }
	          });
    });

    var url = baseURL + "admin/get_section_cookie";
		 
		 $.ajax({
	            url: url,
	            type : 'POST',
	            //data:{heading:heading,type:type,id:id,course_id:course_id},
	            success: function(response)
	            {
	             
	              console.log(response);
	              $(response).click();
	              $("a[href='"+response+"']").click();
	            }
	          });
                     

$(document).on("click",".upload-new-img",function(event){

     	
       	$(".new-img").click();
		 
		
    });

$(document).on("submit",".new-img-form",function(event){
		$("#media_modal").modal('hide');
     	event.preventDefault();
     	var form = $(this);
     	var formData = new FormData($('#new-img-form')[0]);
     	console.log(FormData);
    
    	var url = form.attr('action');
      	$.ajax({
	            url: url,
	            enctype: 'multipart/form-data',
    			processData: false,  // do not process the data as url encoded params
    			contentType: false,   // by default jQuery sets this to urlencoded string
	            cache: false,
	            type : 'POST',
	            data:formData,
	            success: function(response)
	            {
	             console.log(response);
	              $(".media-modal-btn").click();
	              //$("#media_modal").modal();
	              
	             // $('body').removeClass('modal-open');
				  //$('.modal-backdrop').remove();
	            }
	          });
    });



	
});

function submit_form()
{
	$(".new-img-form").submit();
}
