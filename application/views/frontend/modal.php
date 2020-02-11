<div class="modal fade" id="website-inquiry-popup">
    <div class="modal-dialog mto-10">
      <div class="modal-content">
      
        

        <div class="myf-modal-header">
          <h4 id="modal-heading" class="myf-heading"></h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
        <form id="enquiry_form" class="myf-form-modal website-inquiry-ajax " action="<?php echo site_url("home/contact_popup");?>">
                     <p class="cou">Please fill this form and ask us your queries.</p>
                     <input type="email" class="mform-input_modal" name="email" required placeholder="Email *" />
                     <input type="hidden" id="modal-type-input" name="type" value="">
                     <input type="hidden" id="modal-type" name="modaltype" value="">
                     <?php if($course['title'] !='') { ?>
                     <input type="hidden" id="modal-course-input" name="course" value="<?php echo $course['title'];?>">
                     <?php } ?>
                     <input type="tel" class="mform-input_modal" id="telephone-website" name ="phone"  placeholder=""  required>
                     <input type="hidden" id="contact" class="hi-contact1-website" name="contact" value="">
                   
                    <script>
                    $("#telephone-website").intlTelInput({
                        
                        autoPlaceholder: "polite",
                        formatOnDisplay: true,
                        customPlaceholder: null,
                        autoHideDialCode: true,
                        separateDialCode: true,
                    });
                    </script>
                     <textarea rows="2" name="msg" class="mform-textarea mform-input teare-web emp8" required placeholder="Your query *"></textarea>
                     
                     <button id='wsubmit1' type="submit" class="myf-btn myf-btn-modal btn-default inquiry-website-btn">Submit</button>
                   </form>
                   <p class="rmsg-website"></p>
        </div>
        
       
        
      </div>
    </div>
  </div>

<script type="text/javascript">
  $('.website-inquiry-ajax').on('submit',function(e){
   e.preventDefault();
   var phone = $("#telephone-website").intlTelInput("getSelectedCountryData").dialCode;
    phone = "+"+phone+"-" + $("#telephone-website").val();
    $(".hi-contact1-website").val(phone);
    $(".inquiry-website-btn").html("Sending..");
    $(".inquiry-website-btn").prop("disabled",true);
    $(".inquiry-website-btn").addClass('disabled-btn');
    var url = $(this).attr("action");
    $.ajax({
    type: 'post',
    url: url,
    data: $("#enquiry_form").serialize(),
    dataType:'json',
    success: function (data) {
      console.log(data);
      $(".rmsg-website").text(data.remsg);
       var type = $("#modal-type").val();
       if(type == 'inquiry')
       {
         hide_inquiry_popup_forever();
       }
       else if(type=='video')
       {
        make_course_cookie();
        $("#website-inquiry-popup").modal('hide');
        $("#videoModal").modal();
        //video url is a global variable in custom .css
        $("#cartoonVideo").attr('src', video_url);
        $("#website-inquiry-popup").modal('hide');

       }
       else if(type=='syllabus')
       {
        make_course_cookie();
       }
       else if(type=='none')
       {

       }
    }
  });

  });


  function hide_inquiry_popup_forever()
  {
    var url = baseURL +"home/hide_inquiry_popup_forever";
    $.ajax({
    type: 'post',
    url: url,
    dataType:'json',
    success: function (data) {
      console.log(data);
      
    }
  });
  }

  function make_course_cookie()
  {
    var url = baseURL +"home/make_course_cookie";
    $.ajax({
    type: 'post',
    url: url,
    dataType:'json',
    success: function (data) {
      console.log(data);
      
    }
  });
  }
</script>