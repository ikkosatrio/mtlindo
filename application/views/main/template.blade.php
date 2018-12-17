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
    <link rel="stylesheet" href="https://unpkg.com/flickity@2.1.2/dist/flickity.min.css">
    <style>
      p {
        style="font-family: {{$config->font_name}};"
      }
    </style>

      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <script src="https://unpkg.com/flickity@2.1.2/dist/flickity.pkgd.min.js"></script>

    <!-- Custom styles for this template -->
    <!-- <link href="css/non-responsive.css" rel="stylesheet"> -->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>


    <style>
        /*
inspired from http://codepen.io/Rowno/pen/Afykb
& https://jsfiddle.net/q0rgL8ws/
*/
        .carousel-fade .carousel-inner .item {
            opacity: 0;
            transition-property: opacity;
            overflow:hidden;
        }
        .item.active img {
            transition: transform 5000ms linear 0s;
            /* This should be based on your carousel setting. For bs, it should be 5second*/
            transform: scale(1.05, 1.05);
        }
        .carousel-fade .carousel-inner .active {
            opacity: 1;
        }

        .carousel-fade .carousel-inner .active.left,
        .carousel-fade .carousel-inner .active.right {
            left: 0;
            opacity: 0;
            z-index: 1;
        }

        .carousel-fade .carousel-inner .next.left,
        .carousel-fade .carousel-inner .prev.right {
            opacity: 1;
        }

        .carousel-fade .carousel-control {
            z-index: 2;
        }

        /*
        WHAT IS NEW IN 3.3: "Added transforms to improve carousel performance in modern browsers."
        now override the 3.3 new styles for modern browsers & apply opacity
        */
        @media all and (transform-3d), (-webkit-transform-3d) {
            .carousel-fade .carousel-inner > .item.next,
            .carousel-fade .carousel-inner > .item.active.right {
                opacity: 0;
                -webkit-transform: translate3d(0, 0, 0);
                transform: translate3d(0, 0, 0);
            }
            .carousel-fade .carousel-inner > .item.prev,
            .carousel-fade .carousel-inner > .item.active.left {
                opacity: 0;
                -webkit-transform: translate3d(0, 0, 0);
                transform: translate3d(0, 0, 0);
            }
            .carousel-fade .carousel-inner > .item.next.left,
            .carousel-fade .carousel-inner > .item.prev.right,
            .carousel-fade .carousel-inner > .item.active {
                opacity: 1;
                -webkit-transform: translate3d(0, 0, 0);
                transform: translate3d(0, 0, 0);
            }
        }
    </style>

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
                    <div class="logo"><a href="{{base_url()}}"><img id="logo" src="{{base_url()}}assets/images/website/config/logo/{{$config->logo}}" alt="logo"></a></div>
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
                <li><a href="{{base_url('')}}">Home</a></li>
                <li><a href="{{base_url('main/novel')}}">Novel</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Kategori <b class="caret"></b></a>
                    <ul class="dropdown-menu" role="menu">
                        @foreach($kategoris as $key => $result)
                            <li><a href="{{base_url('main/novel/?kategori='.$result->id_kategori)}}">{{$result->nama}}</a></li>
                        @endforeach
                    </ul>
                </li>
                <li><a href="{{base_url('main/contact_us')}}">Contact us</a></li>

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
              <a href="https://dribbble.com/d" class="social dribbble" rel="publisher"><i class="fa fa-envelope"></i> {{$config->email}}</a>
              <a href="https://plus.google.com/+d" class="social google"><i class="fa fa-google-plus-square"></i> Google+</a>
          </div>

<!--           <div class="footer-menu"><span>{{$config->address}}</span><br><span>{{$config->phone}}</span>
          </div> -->
      </div>

      <div class="footer-bottom">
          <i class="fa fa-copyright"></i> Copyright 2019. All rights reserved.<br />
          Theme made by CakCode
      </div>

</footer>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script type="text/javascript" src="{{base_url()}}assets/template/js/jquery-latest.min.js"></script>
<script type="text/javascript" src="{{base_url()}}assets/template/js/bootstrap.min.js"></script>
<script type="text/javascript" src="{{base_url()}}assets/template/js/owl.carousel.min.js"></script>
{{--<script type="text/javascript" src="{{base_url()}}assets/template/js/demo-settings.js"></script>--}}
<script type="text/javascript" src="{{base_url()}}assets/template/js/SmoothScroll.min.js"></script>
<script type="text/javascript" src="{{base_url()}}assets/template/js/jquery.scrolline.js"></script>
<script type="text/javascript" src="{{base_url()}}assets/template/js/jquery.WCircleMenu-min.js"></script>
<script type="text/javascript" src="{{base_url()}}assets/template/js/ThemeScripts.js"></script>

  </body>
</html>