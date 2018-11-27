@extends('main.template')
@section('title')
Home -> Novel
@endsection
@section('content')
  <div class="content">

  <div class="row">

  <div class="col-md-8 main-content" >

  <!-- Main (left side) -->

  <section>

    @foreach ($novel as $n)
    <div class="row">
        <div class="col-sm-12">
            <div class="blog-post">
                <div class="blog-post-container">
                   <a href="post.html"><img src="{{base_url()}}assets/images/novel/{{$n->cover}}" style="width: 100%; max-height: 500px;" alt=""></a>
                </div>

                <div class="blog-post-body">

                    <div class="post-meta"><span class="post-category"><a href="#">Fashion</a></span></div>
                    <div class="divider"></div>
                   <h2 class="title"><a href="post.html">Wonderful Pencil Drawings by Stefan Zsaitsits</a></h2>
                    <div class="post-meta">Posted on <span class="post-time">February 23, 2015</span> by <span class="post-author"><a href="post.html">Different Themes</a></span></div>
                   <p>
                   Meh synth Schlitz, tempor duis single-origin coffee ea next level ethnic fingerstache fanny pack nostrud. Photo booth anim 8-bit hella, PBR 3 wolf moon beard Helvetica. Salvia esse nihil, flexitarian Truffaut synth art party deep v chillwave. Seitan High Life reprehenderit consectetur cupidatat kogi. Et leggings fanny pack, elit bespoke vinyl art party Pitchfork selfies master cleanse Kickstarter seitan retro.
                   </p>
                   <p>
                      <div class="more-button"><a href="post.html"><span class="read-more-button">READ MORE</span></a></div>
                      <div class="wcircle-menu-button">
                        <div class="wcircle-icon">
                          <div class="wcircle-menu-icon"> <i class="fa fa-share-alt"></i> </div>
                        </div>
                        <div class="wcircle-menu" style="display:none;">
                          <div class="wcircle-menu-item share-facebook"> <a href="post.html"><i class="fa fa-facebook"></i></a> </div>
                          <div class="wcircle-menu-item share-youtube"> <a href="post.html"><i class="fa fa-youtube"></i></a> </div>
                          <div class="wcircle-menu-item share-twitter"> <a href="post.html"><i class="fa fa-twitter"></i></a> </div>
                          <div class="wcircle-menu-item share-google"> <a href="post.html"><i class="fa fa-google"></i></a> </div>
                          <div class="wcircle-menu-item share-linkedin"> <a href="post.html"><i class="fa fa-linkedin"></i></a> </div>
                          <div class="wcircle-menu-item share-pinterest"> <a href="post.html"><i class="fa fa-pinterest"></i></a> </div>
                          <div class="wcircle-menu-item share-tumblr"> <a href="post.html"><i class="fa fa-tumblr"></i></a> </div>
                        </div>
                      </div>
                   </p>
                </div>
            </div>
        </div>
    </div>
    @endforeach

    <!-- video post -->
    <div class="row">
        <div class="col-sm-12">
            <div class="blog-post">

                <div class="blog-post-container">
                  <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="//www.youtube.com/embed/8hP9D6kZseM?rel=0" allowfullscreen></iframe>
                  </div>
                </div>

                <div class="blog-post-body">

                   <div class="post-meta"><span class="post-category"><a href="#">Video</a></span></div>
                   <div class="divider"></div>
                    <h2 class="title"><a href="post.html">Youtube Video Embed</a></h2>
                    <div class="post-meta">Posted on <span class="post-time">February 23, 2015</span> by <span class="post-author"><a href="post.html">Different Themes</a></span></div>
                   <p>
                   Maecenas euismod magna augue, et imperdiet nisl efficitur nec. Nunc non risus a diam tempor ornare. Suspendisse molestie nisi a euismod egestas. Integer tristique mauris in laoreet iaculis. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;
                   </p>
                   <p>
                      <div class="more-button"><a href="post.html"><span class="read-more-button">READ MORE</span></a></div>
                      <div class="wcircle-menu-button">
                        <div class="wcircle-icon">
                          <div class="wcircle-menu-icon"> <i class="fa fa-share-alt"></i> </div>
                        </div>
                        <div class="wcircle-menu" style="display:none;">
                          <div class="wcircle-menu-item share-facebook"> <a href="post.html"><i class="fa fa-facebook"></i></a> </div>
                          <div class="wcircle-menu-item share-youtube"> <a href="post.html"><i class="fa fa-youtube"></i></a> </div>
                          <div class="wcircle-menu-item share-twitter"> <a href="post.html"><i class="fa fa-twitter"></i></a> </div>
                          <div class="wcircle-menu-item share-google"> <a href="post.html"><i class="fa fa-google"></i></a> </div>
                          <div class="wcircle-menu-item share-linkedin"> <a href="post.html"><i class="fa fa-linkedin"></i></a> </div>
                          <div class="wcircle-menu-item share-pinterest"> <a href="post.html"><i class="fa fa-pinterest"></i></a> </div>
                          <div class="wcircle-menu-item share-tumblr"> <a href="post.html"><i class="fa fa-tumblr"></i></a> </div>
                        </div>
                      </div>
                   </p>
                </div>


            </div>
        </div>
    </div>

    <!-- soundcloud post -->
    <div class="row">
        <div class="col-sm-12">
            <div class="blog-post">
                <div class="blog-post-container">
                    <iframe width="100%" height="450" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/160960615&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;visual=true"></iframe>
                </div>

                <div class="blog-post-body">
                   <div class="post-meta"><span class="post-category"><a href="#">Music</a></span></div>
                   <div class="divider"></div>
                    <h2 class="title"><a href="post.html">SoundCloud Music Embed</a></h2>
                    <div class="post-meta">Posted on <span class="post-time">February 23, 2015</span> by <span class="post-author"><a href="post.html">Different Themes</a></span></div>
                   <p>
                   Meh synth Schlitz, tempor duis single-origin coffee ea next level ethnic fingerstache fanny pack nostrud. Photo booth anim 8-bit hella, PBR 3 wolf moon beard Helvetica.
                   </p>
                   <p>
                      <div class="more-button"><a href="post.html"><span class="read-more-button">READ MORE</span></a></div>
                      <div class="wcircle-menu-button">
                        <div class="wcircle-icon">
                          <div class="wcircle-menu-icon"> <i class="fa fa-share-alt"></i> </div>
                        </div>
                        <div class="wcircle-menu" style="display:none;">
                          <div class="wcircle-menu-item share-facebook"> <a href="post.html"><i class="fa fa-facebook"></i></a> </div>
                          <div class="wcircle-menu-item share-youtube"> <a href="post.html"><i class="fa fa-youtube"></i></a> </div>
                          <div class="wcircle-menu-item share-twitter"> <a href="post.html"><i class="fa fa-twitter"></i></a> </div>
                          <div class="wcircle-menu-item share-google"> <a href="post.html"><i class="fa fa-google"></i></a> </div>
                          <div class="wcircle-menu-item share-linkedin"> <a href="post.html"><i class="fa fa-linkedin"></i></a> </div>
                          <div class="wcircle-menu-item share-pinterest"> <a href="post.html"><i class="fa fa-pinterest"></i></a> </div>
                          <div class="wcircle-menu-item share-tumblr"> <a href="post.html"><i class="fa fa-tumblr"></i></a> </div>
                        </div>
                      </div>
                   </p>
                </div>
            </div>
        </div>
    </div>

  </section>

  <!-- Grid Post style -->
  <section>
  <h4 class="main-heading"><span>Grid style</span></h4>

   <div class="row">
    @foreach ($novel as $n)
        <div class="col-md-6">

            <!-- grid list item -->
            <div class="grid-post">
                <div class="grid-post-container">
                   <a href="post.html"><img src="{{base_url()}}assets/images/novel/{{$n->cover}}" style="width: 100%; max-height: 360px;" alt=""></a>
                   <div class="post-cats"><a href="#">Beauty</a></div>
                </div>

                <div class="post-meta">
                    <span class="post-meta-publ-date">February 23, 2015</span>
                    <span><i class="fa fa-comments"></i> <a href="#" rel="category tag">32</a></span>
                </div>

                <div class="grid-post-body">
                    <h3 class="title"><a href="portfolio-item.html">The Jaw-Droppingly Gorgeous Illustrations of Phil Noto</a></h3>
                    <p>Meh synth Schlitz, tempor duis single-origin coffee ea next level ethnic fingerstache fanny pack nostrud. Photo booth anim 8-bit hella, PBR 3 wolf moon beard Helvetica.</p>
                    <p><a href="post.html" class="more-button"><span class="read-more-button">READ MORE</span></a></p>
                </div>
            </div>
            <!-- end grid list item -->

        </div>
    @endforeach
    </div>

  </section>
  <!-- end Grid Post style -->

  <!-- List Post style -->
  <section>
  <h4 class="main-heading"><span>List style</span></h4>

    <!-- end list post item -->
    @foreach ($novel as $n)
    <div class="list-post">
        <div class="list-post-container">
            <a href="post.html"><img src="{{base_url()}}assets/images/novel/{{$n->cover}}" style="width: 100%; height: auto;" alt=""></a>
            <div class="post-cats"><a href="#">Transport</a></div>
        </div>
        <div class="list-post-body">
            <h2><a href="post.html">Unbelievable Anamorphic Sculptures by Jonty Hurwitz</a></h2>

                <div class="post-meta">
                    <span class="post-meta-publ-date">February 23, 2015</span>
                    <span class="post-meta-author">by <a href="#">Different Themes</a></span>
                    <span><i class="fa fa-comments"></i> <a href="#" rel="category tag">32</a></span>
                </div>

            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci accusamus accusantium. Adipisci accusamus accusantium. Adipisci accusamus accusantium.</p>
            <p><a href="post.html" class="more-button"><span class="read-more-button">READ MORE</span></a></p>
        </div>
    </div>
    @endforeach
    <!-- end list post item -->

  </section>
  <!-- end List Post style -->

 </div>

 <div class="col-md-4">

<!-- SIDE BAR -->
<div id="sidebar">
            <!-- sidebar-module-author -->
            <div class="sidebar-module">


                <div class="sidebar-content">

                <h4 class="sidebar-heading"><span>About Us</span></h4>

                    <a href="post.html"><img src="{{base_url()}}assets/template/images/about-me.jpg" style="max-width: 100%; height: auto;" alt="fashion" /></a>
                    <p>Meh synth Schlitz, tempor duis single-origin coffee ea next level ethnic fingerstache fanny pack nostrud. Photo booth anim 8-bit hella, PBR 3 wolf moon beard Helvetica.</p>
                    <a href="post.html" class="more-button"><span class="read-more-button">READ MORE</span></a>
                </div>
            </div>
            <!-- end sidebar-module-author -->

             <!-- sidebar-module latest posts -->
            <div class="sidebar-module">


                <div class="sidebar-content">

                <h4 class="sidebar-heading"><span>Latest</span></h4>

                    <div class="widget-post" id="latest_posts">
                        <div class="widget-post-circle">
                            1
                        </div>
                        <div class="widget-post-entry">
                            <h3 class="widget-post-title"><a href="post.html">Watch Top Brands and Agencies Live-Tweet</a></h3>
                            <div class="widget-post-meta"><i class="fa fa-clock-o"></i>15. MARCH 2015 <span class="widget-post-comments"><i class="fa fa-comments"></i>15</span></div>
                        </div>
                    </div>

                    <div class="widget-post" id="latest_posts">
                        <div class="widget-post-circle">
                            2
                        </div>
                        <div class="widget-post-entry">
                            <h3 class="widget-post-title"><a href="post.html">The Influences of Modern Minimalism</a></h3>
                            <div class="widget-post-meta"><i class="fa fa-clock-o"></i> 15. JANUARY 2015</div>
                        </div>
                    </div>

                    <div class="widget-post" id="latest_posts">
                        <div class="widget-post-circle">
                            3
                        </div>
                        <div class="widget-post-entry">
                            <h3 class="widget-post-title"><a href="post.html">Coors Light Gets New Look, Miller Lite Targets Biculturals</a></h3>
                            <div class="widget-post-meta"><i class="fa fa-clock-o"></i> 15. JANUARY 2015 <span class="widget-post-comments"><i class="fa fa-comments"></i>3</span></div>
                        </div>
                    </div>

                    <div class="widget-post" id="latest_posts">
                        <div class="widget-post-circle">
                            4
                        </div>
                        <div class="widget-post-entry">
                            <h3 class="widget-post-title"><a href="post.html">Facebook to Start Telling Brands Who's Talking About What Topics</a></h3>
                            <div class="widget-post-meta"><i class="fa fa-clock-o"></i> 15. JANUARY 2015 <span class="widget-post-comments"><i class="fa fa-comments"></i>5</span></div>
                        </div>
                    </div>

                    <div class="widget-post" id="latest_posts">
                        <div class="widget-post-circle">
                            5
                        </div>
                        <div class="widget-post-entry">
                            <h3 class="widget-post-title"><a href="post.html">Notegraphy, Graphic Design Meet Note-Taking</a></h3>
                            <div class="widget-post-meta"><i class="fa fa-clock-o"></i> 15. JANUARY 2015</div>
                        </div>
                    </div>

                </div>
            </div>
            <!-- end sidebar-module -->

            <!-- sidebar-module-instagram -->
            <div class="sidebar-module">
                <div class="sidebar-content">
                <h4 class="sidebar-heading"><span>Instagram</span></h4>
                    <ul class="widget-instagram">
                        <li><a href="#" target="_self"><img src="{{base_url()}}assets/template/images/demo/300x300-1.jpg" style="max-width: 100%; height: auto;" alt="Instagram Title" title="Instagram Title"/></a></li>
                        <li><a href="#" target="_self"><img src="{{base_url()}}assets/template/images/demo/300x300-2.jpg" style="max-width: 100%; height: auto;" alt="Instagram Title" title="Instagram Title"/></a></li>
                        <li><a href="#" target="_self"><img src="{{base_url()}}assets/template/images/demo/300x300-3.jpg" style="max-width: 100%; height: auto;" alt="Instagram Title" title="Instagram Title"/></a></li>
                    </ul>
                </div>
            </div>
            <!-- end sidebar-module-instagram  -->

            <!-- sidebar-module -->
            <div class="sidebar-module">
                <div class="sidebar-content">
                <h4 class="sidebar-heading"><span>Social</span></h4>
                    <div class="widget-social">
                        <a href="http://facebook.com/" target="_blank"><i class="fa fa-facebook"></i></a>
                        <a href="http://twitter.com/" target="_blank"><i class="fa fa-twitter"></i></a>
                        <a href="http://instagram.com/" target="_blank"><i class="fa fa-instagram"></i></a>
                        <a href="http://pinterest.com/" target="_blank"><i class="fa fa-pinterest"></i></a>
                        <a href="http://plus.google.com/#" target="_blank"><i class="fa fa-google-plus"></i></a>
                        <a href="http://tumblr.com/" target="_blank"><i class="fa fa-tumblr"></i></a>
                        <a href="#" target="_blank"><i class="fa fa-rss"></i></a>
                    </div>
                </div>
            </div>
            <!-- end sidebar-module -->

            <!-- sidebar-module -->
            <div class="sidebar-module">

                <div class="sidebar-content">
                <h4 class="sidebar-heading"><span>Fashion</span></h4>
                    <div class="widget-post">
                        <div class="widget-post-image">
                            <a href="post.html"><img src="{{base_url()}}assets/template/images/demo/300x300-1.jpg" style="max-width: 100%; height: auto;" alt="fashion" /></a>
                        </div>
                        <div class="widget-post-entry">
                            <h3 class="widget-post-title"><a href="post.html">Watch Top Brands and Agencies Live-Tweet</a></h3>
                            <div class="widget-post-meta"><i class="fa fa-clock-o"></i>15. MARCH 2015 <span class="widget-post-comments"><i class="fa fa-comments"></i>11</span></div>
                        </div>
                    </div>

                    <div class="widget-post">
                        <div class="widget-post-image">
                            <a href="post.html"><img src="{{base_url()}}assets/template/images/demo/300x300-5.jpg" style="max-width: 100%; height: auto;" alt="fashion" /></a>
                        </div>
                        <div class="widget-post-entry">
                            <h3 class="widget-post-title"><a href="post.html">The Influences of Modern Minimalism</a></h3>
                            <div class="widget-post-meta"><i class="fa fa-clock-o"></i> 15. JANUARY 2015 <span class="widget-post-comments"><i class="fa fa-comments"></i>6</span></div>
                        </div>
                    </div>

                    <div class="widget-post">
                        <div class="widget-post-image">
                            <a href="post.html"><img src="{{base_url()}}assets/template/images/demo/300x300-7.jpg" style="max-width: 100%; height: auto;" alt="fashion" /></a>
                        </div>
                        <div class="widget-post-entry">
                            <h3 class="widget-post-title"><a href="post.html">Coors Light Gets New Look, Miller Lite Targets Biculturals</a></h3>
                            <div class="widget-post-meta"><i class="fa fa-clock-o"></i> 15. JANUARY 2015</div>
                        </div>
                    </div>

                </div>
            </div>
            <!-- end sidebar-module -->

            <!-- sidebar-module latest comments -->
            <div class="sidebar-module">

                <div class="sidebar-content">
                <h4 class="sidebar-heading"><span>Latest Comments</span></h4>
                    <div class="lcomments-item">
                        <a href="#">Mr. Wordpress</a> on <a href="post.html">Monotype Typecast, Stately Type and TDC Generator</a>
                    </div>
                    <div class="lcomments-item">
                        <a href="#">Jeremy Clarkson</a> on <a href="post.html">Five centuries, but also the nation</a>
                    </div>
                    <div class="lcomments-item">
                        <a href="#">John Doe</a> on <a href="post.html">12 Animated Magnets from Fictional Places</a>
                    </div>
                    <div class="lcomments-item">
                        <a href="#">Claire</a> on <a href="post.html">Wonderful Pencil Drawings by Stefan</a>
                    </div>
                    <div class="lcomments-item">
                        <a href="#">Sarah Lee</a> on <a href="post.html">Five centuries, but also the nation</a>
                    </div>
                </div>

            </div>
            <!-- end sidebar-module latest comments -->

             <!-- sidebar-module-tag-cloud -->
            <div class="sidebar-module">

                <div class="sidebar-content">
                <h4 class="sidebar-heading"><span>Tag cloud</span></h4>
                    <div class="tag-cloud">
                        <a href="#">Fashion</a>
                        <a href="#">Design</a>
                        <a href="#">Architecture</a>
                        <a href="#">Gadgets</a>
                        <a href="#">Cars</a>
                        <a href="#">Music</a>
                        <a href="#">Recipe</a>
                        <a href="#">Lifestyle</a>
                        <a href="#">Travel</a>
                    </div>
                </div>

            </div>
            <!-- end sidebar-module-tag-cloud -->

            <!-- sidebar-module-banner -->
            <div class="sidebar-module">


                <div class="sidebar-content">
                <h4 class="sidebar-heading"><span>Advertisement</span></h4>
                    <div class="sidebar-content banner-widget">
                        <a href="#"><img src="{{base_url()}}assets/template/images/banner-300x250.png" style="max-width: 100%; height: auto;" alt="advertisement"/></a>
                    </div>
                </div>
            </div>
            <!-- end sidebar-module-banner -->

  <!-- end SIDE BAR -->
  </div>
  </div>

  </div><!-- end row -->

  </div><!-- end content -->
@endsection
