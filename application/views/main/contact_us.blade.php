@extends('main.template')
@section('title')
MTLINDO -> Contact Us
@endsection
@section('content')

<script src="{{base_url()}}assets/template/js/jquery.js"></script>
<script>
$(document).ready(function() {
  $('#form-contact').submit(function(e) {
    e.preventDefault();
    $.ajax({
      type: "POST",
      url: $("#form-contact").attr('action'), //nama action script php sobat
      data: $(this).serialize(),
      dataType:'json',
      success: function(data)
      {
        if (data.code === 'Success') {
          $('#alert-contact').html(data.body);
          $("#name").val('');
          $("#email").val('');
          $("#pesan").val('');
          // alert('sukses');
          // window.location = "{{base_url('main')}}";
        }
        else {
          
          $('#alert-contact').html(data.body);
          // alert('Invalid Credentials');
        }
      }
   });
 });
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

          <h2>Contact Us</h2><br>

          <div id="alert-contact">
          </div>
         <!-- Button trigger modal -->
          <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
            Launch demo modal
          </button> -->
        <!-- Modal -->
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
          <form name="form" id="form-contact" action="{{base_url('main/proses_contact_us')}}" method="post" class="comment-form">
            
            <div class="col-md-6">
              <span>Name </span>
              <input id="name" type="text" name="nama" required>
            </div>

            <div class="col-md-6">
              <span>Email </span>
              <input id="email" type="email" name="email" required>
            </div>

            <!-- <div class="col-md-6">
              <span>Phone </span>
              <input id="phone" type="number" minlength="11" maxlength="13" name="phone" required>
            </div> -->

            <div class="col-md-12">
              <span>Message </span>
              <textarea name="pesan" id="pesan" required></textarea>
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