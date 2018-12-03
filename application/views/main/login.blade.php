@extends('main.template')
@section('title')
Home -> Login
@endsection
@section('content')
<script src="http://code.jquery.com/jquery-2.1.1.min.js"></script>
<div class="content">

    <div class="row">
        <div class="col-sm-12">

          <!-- post -->
          <article class="blog-post">

          <div class="post-entry">

          <div class="row">
            <?php if ($menu=='registered'): ?>
            <br>
            <div id="alert">
              <div class="col-md-12">
                <div class="coloralert" style="background-color: green;">
                  <i class="fa fa-check"></i>
                  <p>Register Success, now you have to check your email to get a verification code for log in...!</p>
                  <a href="#close-alert"class="close-alert"><i class="fa fa-times-circle"></i></a>
                </div>
              </div>
            </div>
            <?php endif ?>
          </div>
          
          <h2>Login Page</h2><br>
          <form name="form" id="form" action="{{base_url('main/authentication')}}" method="post" class="comment-form">
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
              <span>Email</span>
              <input type="email" placeholder="email@gmail.com" name="email" required>
            </div>

            <div class="col-md-6">
              <span>Password</span>
              <input id="pass" type="password" placeholder="password" minlength="8" name="pass" required>
            </div>

            <div class="col-md-12"><input type="submit" value="Log In" class="submit-button"/></div>
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
    email: [/^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/, ' enter a Pleasevalid email address']
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