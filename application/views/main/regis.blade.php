@extends('main.template')
@section('title')
Home -> Regis
@endsection
@section('content')

<script src="http://code.jquery.com/jquery-2.1.1.min.js"></script>
<script>
$(document).ready(function(){
  $("#email").on("blur", function(){
    var url = "<?php echo base_url('main/cek_email');?>";
    $.ajax({
      url: "<?php echo base_url('main/cek_email');?>",
      type: "POST",
      data: 'email='+$(this).val(),
      success: function(data){
        $('#emailalert').html(data).css('color', 'red');
        if (data!='') {$("#email").val('');}
      }
    });
  })
});
</script>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-md" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
<div class="content">

    <div class="row">
        <div class="col-sm-12">

          <!-- post -->
          <article class="blog-post">

          <div class="post-entry">

          <h2>Form Registration</h2><br>
         <!-- Button trigger modal -->
          <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
            Launch demo modal
          </button> -->
        <!-- Modal -->
          <form name="form" id="form" action="{{base_url('main/addmember')}}" method="post" enctype="multipart/form-data" class="comment-form">
            <div class="row">
            <div id="alert">
              <!-- <div class="col-md-12">
                <div class="coloralert" style="background-color: #F6BD42;">
                  <i class="fa fa-warning"></i>
                  <p>Some Warning Text This may take a few seconds !</p>
                  <a href="#close-alert"class="close-alert"><i class="fa fa-times-circle"></i></a>
                </div>
              </div> -->
            </div>
            <div class="col-md-6">
              <span>Full name</span>
              <input type="text" placeholder="Your name" name="name" required>
            </div>

            <div class="col-md-6">
              <span>Email </span>
              <span id="emailalert"></span>
              <input id="email" type="email" placeholder="Email" name="email" required>
            </div>

            <div class="col-md-6">
              <span>Password</span>
              <input id="pass" type="password" minlength="8" placeholder="Password" name="pass" required>
            </div>

            <div class="col-md-6">
              <span>Confim password </span>
              <span id='message'></span>
              <input id="c_pass" type="password" placeholder="Confirm Password" name="c_pass" required>
            </div>

            <div class="col-md-12">
              <span>Photo</span>
              <input type="file" placeholder="Photo" name="photo" id="image-source" onchange="previewImage();" required>
            <img src="https://d3e54v103j8qbb.cloudfront.net/img/image-placeholder.svg" width="100%" id="image-preview" class="img-rounded img-responsive" style=" width: 200px;">
            </div>

            <div class="col-md-12"><input type="submit" value="send" class="submit-button"/></div>
            </div>
          </form>
      </div>

      </article>

        </div>
    </div>
 </div> <!-- content div -->

  </div> <!-- container div -->

</div> <!-- boxed div -->
<script>
  function previewImage() {
    document.getElementById("image-preview").style.display = "block";
    var oFReader = new FileReader();
     oFReader.readAsDataURL(document.getElementById("image-source").files[0]);

    oFReader.onload = function(oFREvent) {
      document.getElementById("image-preview").src = oFREvent.target.result;
    };
  };
</script>

 <style>
    #form label{float:left; width:140px;}
    #error_msg{color:red; font-weight:bold;}
 </style>

<script>
  $('#pass, #c_pass').on('keyup', function () {
    if ($('#pass').val() == $('#c_pass').val()) {
      $('#message').html('is matching').css('color', 'green');
    } else 
      $('#message').html('is not matching').css('color', 'red');
  });
  $(document).ready(function(){
      var $submitBtn = $("#form input[type='submit']");
      var $passwordBox = $("#pass");
      var $confirmBox = $("#c_pass");
      var $errorMsg =  $('<span id="error_msg">Passwords do not match.</span>');

      // This is incase the user hits refresh - some browsers will maintain the disabled state of the button.
      $submitBtn.removeAttr("disabled");

      function checkMatchingPasswords(){
          if($confirmBox.val() != "" && $passwordBox.val != ""){
              if( $confirmBox.val() != $passwordBox.val() ){
                  $submitBtn.attr("disabled", "disabled");
                  $errorMsg.insertAfter($confirmBox);
              }
          }
      }

      function resetPasswordError(){
          $submitBtn.removeAttr("disabled");
          var $errorCont = $("#error_msg");
          if($errorCont.length > 0){
              $errorCont.remove();
          }  
      }

      $("#c_pass, #pass")
      .on("keydown", function(e){
        /* only check when the tab or enter keys are pressed
         * to prevent the method from being called needlessly  */
        if(e.keyCode == 13 || e.keyCode == 9) {
            checkMatchingPasswords();
        }
      })
      .on("blur", function(){                    
          // also check when the element looses focus (clicks somewhere else)
          checkMatchingPasswords();
      })
      .on("focus", function(){
          // reset the error message when they go to make a change
          resetPasswordError();
      })
  });
  var validations ={
    email: [/^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/, 'Please enter a valid email address']
  };
  $(document).ready(function(){
      // Check all the input fields of type email. This function will handle all the email addresses validations
      $("input[type=email]").change( function(){
          // Set the regular expression to validate the email 
          validation = new RegExp(validations['email'][0]);
          // validate the email value against the regular expression
          if (!validation.test(this.value)){
              // If the validation fails then we show the custom error message
              this.setCustomValidity(validations['email'][1]);
              return false;
          } else {
              // This is really important. If the validation is successful you need to reset the custom error message
              this.setCustomValidity('');
          }
      });
  })
</script>
@endsection