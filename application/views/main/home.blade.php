@extends('main.template')
@section('title')
    MTLINDO -> Home
@endsection
@section('content')
    <div class="slider">
        <div class="row">
            <div class="col-sm-12 col-md-12 slider-left">
                <div id="carousel" class="carousel slide carousel-fade" data-ride="carousel">
                    <ol class="carousel-indicators">
                        @foreach($slider as $key => $result)
                            <li data-target="#carousel" data-slide-to="{{$key}}" class="{{$key==0 ? 'active':''}}"></li>
                        @endforeach
                    </ol>
                    <!-- Carousel items -->
                    <div class="carousel-inner carousel-zoom">
                        @foreach($slider as $key => $result)
                            <div class="{{$key==0 ? 'active':''}} item"><img style="width: 100%;height: 50%;" class="img-responsive" src="{{img_slider($result->cover)}}">
                                <div class="carousel-caption" style="padding-bottom: 100px!important;">
                                    <h2>{{$result->judul}}</h2>
                                    <p>{!! $result->deskripsi !!}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <!-- Carousel nav -->
                    <a class="carousel-control left" href="#carousel" data-slide="prev">‹</a>
                    <a class="carousel-control right" href="#carousel" data-slide="next">›</a>
                </div>
            </div>
        </div>
    </div>
    <div class="content">

        <div class="row">

            <div class="col-md-8 main-content" >

                <!-- Main (left side) -->

                <!-- Grid Post style -->
                {{--<section>--}}
                    {{--<!-- <h4 class="main-heading"><span>Grid style</span></h4> -->--}}

                    {{--<div class="row">--}}
                        {{--@foreach ($novel as $n)--}}
                            {{--<div class="col-md-6">--}}

                                {{--<!-- grid list item -->--}}
                                {{--<div class="grid-post">--}}
                                    {{--<div class="grid-post-container">--}}
                                        {{--<a href="{{base_url('main/detail_novel/').$n->id_novel}}"><img src="{{base_url()}}assets/images/novel/{{$n->cover}}" style="width: 100%; height: 450px;" alt=""></a>--}}
                                        {{--<div class="post-cats"><a href="#">Kategori-{{$n->id_kategori}}</a></div>--}}
                                    {{--</div>--}}

                                    {{--<div class="post-meta">--}}
                                        {{--<span>{{date("d-M-Y", strtotime($n->created_at))}}</span>--}}
                                        {{--<!-- <span>by:</span> -->--}}
                                    {{--</div>--}}

                                    {{--<div class="grid-post-body">--}}
                                        {{--<h3 class="title" align="center"><a href="{{base_url('main/detail_novel/').$n->id_novel}}">{{$n->judul}}</a></h3>--}}
                                        {{--<p>{!! $n->deskripsi !!}</p>--}}
                                        {{--<p><a href="{{base_url('main/detail_novel/').$n->id_novel}}" class="more-button"><span class="read-more-button">READ MORE</span></a></p>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<!-- end grid list item -->--}}

                            {{--</div>--}}
                        {{--@endforeach--}}
                    {{--</div>--}}

                {{--</section>--}}
                <!-- end Grid Post style -->

                <!-- List Post style -->
                <section>
                    <!-- <h4 class="main-heading"><span>List style</span></h4> -->

                    <!-- end list post item -->
                    @foreach ($novel as $n)
                        <div class="list-post">
                            <div class="list-post-container">
                                <a href="post.html"><img src="{{base_url()}}assets/images/novel/{{$n->cover}}" style="width: 100%; height: auto;" alt=""></a>
                                <div class="post-cats"><a href="#">{{$n->nama}}</a></div>
                            </div>
                            <div class="list-post-body">
                                <h2><a href="post.html">{{$n->judul}}</a></h2>

                                <div class="post-meta">
                                    <span class="post-meta-publ-date">{{tgl_indo($n->created_at)}}</span>
                                    <span class="post-meta-author">by <a href="#">Admin</a></span>
                                    <span><i class="fa fa-comments"></i> <a href="#" rel="category tag">32</a></span>
                                </div>

                                <p>{!!read_more($n->deskripsi,500)!!}</p>
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
                    <!-- sidebar-module latest posts -->
                    <div class="sidebar-module">


                        <div class="sidebar-content">

                            <h4 class="sidebar-heading"><span>Latest</span></h4>

                            @foreach($novelBaru as $key => $result)
                                <div class="widget-post" id="latest_posts">
                                    <div class="widget-post-circle">
                                        {{$key+1}}
                                    </div>
                                    <div class="widget-post-entry">
                                        <h3 class="widget-post-title"><a href="post.html">{{$result->judul}}</a></h3>
                                        <div class="widget-post-meta"><i class="fa fa-clock-o"></i>{{tgl_indo($result->created_at)}}
                                            {{--<span class="widget-post-comments"><i class="fa fa-comments"></i>15</span>--}}
                                        </div>
                                    </div>
                                </div>
                            @endforeach


                        </div>
                    </div>
                    <!-- end sidebar-module -->
                    <!-- end SIDE BAR -->
                </div>
            </div>

        </div><!-- end row -->

    </div><!-- end content -->

    {{--<!-- instagram widget in main page -->--}}
    {{--<h4 class="main-heading"><span>Instagram</span></h4>--}}
    {{--<div class="widget-insta">--}}
    {{--<div id="insta-owl" class="owl-carousel owl-theme">--}}
    {{--<div class="item"><a href="#"><img src="{{base_url()}}assets/template/images/demo/300x300-2.jpg" alt=""></a></div>--}}
    {{--<div class="item"><a href="#"><img src="{{base_url()}}assets/template/images/demo/300x300-1.jpg" alt=""></a></div>--}}
    {{--<div class="item"><a href="#"><img src="{{base_url()}}assets/template/images/demo/300x300-3.jpg" alt=""></a></div>--}}
    {{--<div class="item"><a href="#"><img src="{{base_url()}}assets/template/images/demo/300x300-6.jpg" alt=""></a></div>--}}
    {{--<div class="item"><a href="#"><img src="{{base_url()}}assets/template/images/demo/300x300-4.jpg" alt=""></a></div>--}}
    {{--<div class="item"><a href="#"><img src="{{base_url()}}assets/template/images/demo/300x300-5.jpg" alt=""></a></div>--}}
    {{--<div class="item"><a href="#"><img src="{{base_url()}}assets/template/images/demo/article-298x298-3.jpg" alt=""></a></div>--}}
    {{--<div class="item"><a href="#"><img src="{{base_url()}}assets/template/images/demo/300x300-6.jpg" alt=""></a></div>--}}
    {{--<div class="item"><a href="#"><img src="{{base_url()}}assets/template/images/demo/article-298x298-5.jpg" alt=""></a></div>--}}
    {{--<div class="item"><a href="#"><img src="{{base_url()}}assets/template/images/demo/article-298x298-3.jpg" alt=""></a></div>--}}
    {{--<div class="item"><a href="#"><img src="{{base_url()}}assets/template/images/demo/article-298x298-2.jpg" alt=""></a></div>--}}
    {{--<div class="item"><a href="#"><img src="{{base_url()}}assets/template/images/demo/article-298x298-1.jpg" alt=""></a></div>--}}
    {{--</div>--}}
    {{--</div>--}}
    <!-- end instagram widget in main page -->
    <script>
        $('.main-carousel').flickity({
            // options
            cellAlign: 'left',
            contain: true
        });
    </script>
@endsection