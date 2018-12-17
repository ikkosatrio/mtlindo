@extends('main.template')
@section('title')
MTLINDO -> Novel
@endsection
@section('content')

  <div class="content">

  <div class="row">

  <div class="col-md-8 main-content" >

  <!-- Main (left side) -->

  <!-- Grid Post style -->
  <section>
  <!-- <h4 class="main-heading"><span>Grid style</span></h4> -->

   <div class="row">
    @foreach ($novel as $n)
        <div class="col-md-6">
            <!-- grid list item -->
            <div class="grid-post">
                <div class="grid-post-container">
                   <a href="{{base_url('main/detail_novel/').$n->id_novel}}"><img src="{{base_url()}}assets/images/novel/{{$n->cover}}" style="width: 100%; height: 450px;" alt=""></a>
                   <div class="post-cats"><a href="#">{{$n->nama}}</a></div>
                </div>

                <div class="post-meta">
                    <span>{{date("d-M-Y", strtotime($n->created_at))}}</span>
                    <!-- <span>by:</span> -->
                </div>

                <div class="grid-post-body">
                    <h3 class="title" align="center"><a href="{{base_url('main/detail_novel/').$n->id_novel}}">{{$n->judul}}</a></h3>
                    <p align="justify" style="font-family: {{$config->font_name}};">{!! read_more($n->deskripsi,75) !!}</p>
                    <p><a href="{{base_url('main/detail_novel/').$n->id_novel}}" class="more-button"><span class="read-more-button">READ MORE</span></a></p>
                </div>
            </div>
            <!-- end grid list item -->

        </div>
    @endforeach
        <nav class="pagination-2">
            <ul class="text-center">
                @if($pagination!=="")
                    asdasdasd
                    <ul>
                        {!! $pagination !!}
                    </ul>
                @endif
            </ul>
        </nav>
    </div>
    {!!$pagination!!}
  </section>
  <!-- end Grid Post style -->

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