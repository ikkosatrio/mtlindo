@extends('main.template')
@section('title')
Home -> Novel
@endsection
@section('content')
    <div class="content">

    <div class="row">
        <div class="col-sm-12">

          <!-- post -->
          <article class="blog-post">
                    <!-- <div class="blog-post-container">
                      <img src="{{base_url()}}assets/images/novel/{{$chap->cover}}" style="width: 100%; max-height: 500px;" alt="">
                    </div> -->

                    <div class="post-entry">
<!--                         <div class="post-meta"><span class="post-category"><a href="#">{{$chap->judul}}</a></span></div> -->
                        <!-- <div class="divider"></div> -->
                          <h1>{{$chap->judul}}</h1>
                          
                    <div class="short-tabs">
                      <ul>
                        <li class="active" 0><a href="javascript:void(0);">Indonesia</a></li>
                        <li 1><a href="javascript:void(0);">English</a></li>
                        <li 2><a href="javascript:void(0);">Arab</a></li>
                      </ul>
                      <div class="active">
                        <p align="justify" style="font-family: {{$config->font_name}};">{!! read_more($chap->content,7000000000000) !!}</p>
                      </div>
                      <div>
                        <p align="justify" style="font-family: {{$config->font_name}};">English</p>
                      </div>
                      <div>
                        <p align="justify" style="font-family: {{$config->font_name}};">Arab</p>
                      </div>
                    </div>
                    </div>

      </article>

        </div>
    </div>

@endsection