@extends('main.template')
@section('title')
Home -> Novel
@endsection
@section('content')
    <div class="slider">
        <div class="row">
            <div class="col-sm-12 col-md-8 slider-left">
                <div class="slider-item">
                <figure class="effect-milo">
                    <img src="{{base_url()}}assets/template/images/demo/1200x800-20.jpg" alt="img11"/>
                    <figcaption>
                        <h2>Wine Packaging Inspired by <span>the Simpsons and Piet Mondrian</span> Goes Against the Packaging Norms</h2>
                        <p>Jodi started making these beautiful book sculptures when she got hooked from folding one of the pages of a used book from a second-hand book shop.</p>
                        <a href="post.html">View more</a>
                    </figcaption>
                </figure>
                </div>
            </div>
            <div class="col-sm-12 col-md-4 slider-right">
                <div class="row">
                    <div class="col-xs-12">

                        <div class="slider-item rightside">
                        <figure class="effect-milo">
                            <img src="{{base_url()}}assets/template/images/demo/1200x800-14.jpg" alt="img11"/>
                            <figcaption>
                                <h2>Make Stories Come Alive with <span>Jodi Harvey-Brown</span> Book Sculpture</h2>
                                <p>Maybe it's wine or maybe not but one thing is for sure, combining Homer and ...</p>
                                <a href="post.html">View more</a>
                            </figcaption>
                        </figure>
                        </div>

                    </div>
                    <div class="col-xs-12">

                        <div class="slider-item rightside">
                        <figure class="effect-milo">
                            <img src="{{base_url()}}assets/template/images/demo/1200x800-21.jpg" alt="img11"/>
                            <figcaption>
                                <h2>You! Be Inspired! - The Enchanting Art of Meg Hunt</h2>
                                <p>Milo went to the woods. He took a fun ride and never came back.</p>
                                <a href="post.html">View more</a>
                            </figcaption>
                        </figure>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
  <div class="content">

  <div class="row">

  <div class="col-md-8 main-content" >

  <!-- Main (left side) -->

  <section>

    <div class="row">
        <div class="col-md-12">

        <!-- post -->
        <article class="blog-post">
        <div class="blog-post-container">
          <img src="{{base_url()}}assets/images/novel/{{$n->cover}}" style="width: 100%; max-height: 500px;" alt="">
        </div>

        <div class="post-entry">

        <div class="post-meta"><span class="post-category"><a href="#">{{$n->judul}}</a></span></div>
        <div class="divider"></div>
          <h1><a href="portfolio-item.html">{{$chap->judul}}</a></h1>
        <div class="post-meta">Posted on <span class="post-time">{{tgl_indo($chap->created_at)}}</span> by <span class="post-author"><a href="post.html">Paino</a></span></div>
            <p align="justify" style="font-family: {{$config->font_name}};">{!! read_more($chap->content,7000000000000) !!}</p>
        
        </div>
      </article>
    
        </div><!-- end col-md-12 -->
    </div><!-- end row -->

   </section>

 </div>
<div class="col-md-4">

<!-- SIDE BAR -->
<div id="sidebar">
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
  <!-- end SIDE BAR -->
  </div>
  </div>

  </div><!-- end row -->

  </div><!-- end content -->

  <!-- instagram widget in main page -->
  <h4 class="main-heading"><span>Instagram</span></h4>
  <div class="widget-insta">
    <div id="insta-owl" class="owl-carousel owl-theme">
      <div class="item"><a href="#"><img src="{{base_url()}}assets/template/images/demo/300x300-2.jpg" alt=""></a></div>
      <div class="item"><a href="#"><img src="{{base_url()}}assets/template/images/demo/300x300-1.jpg" alt=""></a></div>
      <div class="item"><a href="#"><img src="{{base_url()}}assets/template/images/demo/300x300-3.jpg" alt=""></a></div>
      <div class="item"><a href="#"><img src="{{base_url()}}assets/template/images/demo/300x300-6.jpg" alt=""></a></div>
      <div class="item"><a href="#"><img src="{{base_url()}}assets/template/images/demo/300x300-4.jpg" alt=""></a></div>
      <div class="item"><a href="#"><img src="{{base_url()}}assets/template/images/demo/300x300-5.jpg" alt=""></a></div>
      <div class="item"><a href="#"><img src="{{base_url()}}assets/template/images/demo/article-298x298-3.jpg" alt=""></a></div>
      <div class="item"><a href="#"><img src="{{base_url()}}assets/template/images/demo/300x300-6.jpg" alt=""></a></div>
      <div class="item"><a href="#"><img src="{{base_url()}}assets/template/images/demo/article-298x298-5.jpg" alt=""></a></div>
      <div class="item"><a href="#"><img src="{{base_url()}}assets/template/images/demo/article-298x298-3.jpg" alt=""></a></div>
      <div class="item"><a href="#"><img src="{{base_url()}}assets/template/images/demo/article-298x298-2.jpg" alt=""></a></div>
      <div class="item"><a href="#"><img src="{{base_url()}}assets/template/images/demo/article-298x298-1.jpg" alt=""></a></div>
    </div>
  </div>
  <!-- end instagram widget in main page -->


@endsection