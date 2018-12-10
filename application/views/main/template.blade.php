<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title') </title>
    
    <link rel="icon" href="{{base_url()}}assets/images/website/config/icon/{{$config->icon}}" type="image/ico">
    <link href="{{base_url()}}assets/template/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{base_url()}}assets/template/css/style.css" rel="stylesheet">
    <link href="{{base_url()}}assets/template/css/shortcodes.css" rel="stylesheet">
    <link href="{{base_url()}}assets/template/css/font-awesome.css" rel="stylesheet">
    <link href="{{base_url()}}assets/template/css/owl.carousel.css" rel="stylesheet">
    <link href="{{base_url()}}assets/template/css/owl.theme.css" rel="stylesheet">

    <!-- only for demo -->
    <link href="{{base_url()}}assets/template/css/demo-settings.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <!-- <link href="css/non-responsive.css" rel="stylesheet"> -->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body id="top">

  <div class="boxed">

  <div class="container container-gutter">

    <!-- top menu -->
    <div class="top-bar">

        <span class="top-bar-menu">
          <?php if (ucwords($ctrl->session->userdata('main_auth'))==TRUE){ ?>
          <label>Welcome, {{ucwords($ctrl->session->userdata('nama'))}}</label>
          <?php }else{ ?>
          <a href="{{base_url('main/auth/login')}}">login</a>
          <a href="{{base_url('main/regis')}}">Register</a>
          <?php } ?>
        </span>

        <span class="top-bar-socials">
          <?php if (ucwords($ctrl->session->userdata('main_auth'))==TRUE){ ?>
            <a href="{{base_url('main/detail_member/').ucwords($ctrl->session->userdata('id')).'/password'}}">Change Password</a>
            <a href="{{base_url('main/detail_member/').ucwords($ctrl->session->userdata('id')).'/profile'}}">Edit Profile</a>
            <a href="{{base_url('main/logout')}}">Log out</a>
          <?php } ?>
        </span>

    </div>
    <!-- end top menu -->

     <!-- header (logo section) -->
      <header class="header">

            <div class="row">
                <div class="col-md-12">
                    <div class="logo"><a href="{{base_url()}}"><img id="logo" src="{{base_url()}}assets/template/images/logo.png" alt="logo"></a></div>
                </div>
            </div>

      </header>
     <!-- end header (logo section) -->

     <!-- main menu -->
     <nav class="navbar yamm navbar-default" id="main-navigation">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li><a href="{{base_url('main')}}">Home</a></li>
            <li><a href="index-grid.html">Novel</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Features <b class="caret"></b></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="404.html">404 page</a></li>
                <li><a href="shortcodes.html">Shortcodes</a></li>
                <li><a href="post-video.html">Post with Video</a></li>
                <li><a href="about.html">Full Width Page</a></li>
                <li><a href="contact.html">Contact Form</a></li>
              </ul>
            </li>
            <li><a href="contact.html">Contact</a></li>

          </ul>

          <ul class="nav navbar-nav navbar-right">
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-search"></i></a>
                  <div class="dropdown-menu searchbox" role="menu">
                    <form id="search" class="navbar-form search" role="search">
                        <div class="input-group">
                            <input type="search" class="form-control" placeholder="Type to search">
                            <span class="input-group-btn"><button type="submit" class="btn btn-default btn-submit"><i class="fa fa-angle-right"></i></button></span>
                        </div>
                    </form>
                  </div>
            </li><!-- /.searchbox -->
          </ul>

        </div><!--/.nav-collapse -->
      </div>
    </nav>
    <!-- end main menu -->

    @yield('content')
    
   <p id="back-top">
    <a href="#top"><i class="fa fa-angle-up"></i></a>
  </p>

  </div> <!-- container div -->

</div> <!-- boxed div -->

  <footer class="footer">

      <div class="footer-dark">
          <div class="footer-socials">
              <a href="https://www.twitter.com/d" class="social"><i class="fa fa-twitter"></i> Twitter</a>
              <a href="http://www.bloglovin.com//d" class="social"><i class="fa fa-instagram"></i> {{$config->instagram}}</a>
              <a href="https://www.facebook.com/d" class="social"><i class="fa fa-facebook-square"></i> {{$config->facebook}}</a>
              <a href="https://dribbble.com/d" class="social dribbble" rel="publisher"><i class="fa fa-dribbble"></i> Dribbble</a>
              <a href="https://plus.google.com/+d" class="social google"><i class="fa fa-google-plus-square"></i> Google+</a>
          </div>

          <div class="footer-menu"><span>{{$config->address}}</span><br><span>{{$config->phone}}</span>
          </div>
      </div>

      <div class="footer-bottom">
          <i class="fa fa-copyright"></i> Copyright 2015. All rights reserved.<br />
          Theme made by <a href="http://themeforest.net/user/different-themes/portfolio?ref=different-themes">Different Themes</a>
      </div>

</footer>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script type="text/javascript" src="{{base_url()}}assets/template/js/jquery-latest.min.js"></script>
<script type="text/javascript" src="{{base_url()}}assets/template/js/bootstrap.min.js"></script>
<script type="text/javascript" src="{{base_url()}}assets/template/js/owl.carousel.min.js"></script>
<script type="text/javascript" src="{{base_url()}}assets/template/js/demo-settings.js"></script>
<script type="text/javascript" src="{{base_url()}}assets/template/js/SmoothScroll.min.js"></script>
<script type="text/javascript" src="{{base_url()}}assets/template/js/jquery.scrolline.js"></script>
<script type="text/javascript" src="{{base_url()}}assets/template/js/jquery.WCircleMenu-min.js"></script>
<script type="text/javascript" src="{{base_url()}}assets/template/js/ThemeScripts.js"></script>

  </body>
</html>