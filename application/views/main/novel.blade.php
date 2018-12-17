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
                    <ul>
                        {!! $pagination !!}
                    </ul>
                @endif
            </ul>
        </nav>
    </div>
    {{--{!!$pagination!!}--}}
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

@endsection