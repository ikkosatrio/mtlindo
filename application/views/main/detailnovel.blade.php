@extends('main.template')
@section('title')
Home -> Novel
@endsection
@section('content')

  <div class="content">

  <div class="row">

  <div class="col-md-12 main-content" >

  <!-- Main (left side) -->

  <section>

    <div class="row">
        <div class="col-md-12">
            <!-- post -->
            <div class="row">
                <article class="blog-post">
                    <div class="blog-post-container">
                      <img src="{{base_url()}}assets/images/novel/{{$n->cover}}" style="width: 100%; max-height: 500px;" alt="">
                    </div>

                    <div class="post-entry">
                        <div class="post-meta"><span class="post-category"><a href="#">kategori {{$n->id_kategori}}</a></span></div>
                        <div class="divider"></div>
                          <h1><a href="portfolio-item.html">{{$n->judul}}</a></h1>
                        <div class="post-meta">Posted on <span class="post-time">{{tgl_indo($n->created_at)}}</span> by <span class="post-author"><a href="post.html">Paino</a></span></div>
                            <p align="justify" style="font-family: {{$config->font_name}};">{!! read_more($n->deskripsi,7000000000000) !!}</p>

                        
                        <div class="accordion">
                            @foreach ($chap as $c)
                            <div>
                                <a href="">
                                    {{$c->judul}}
                                </a>
                                <div>
                                <a href="{{base_url('main/detail_chapter/').$c->id_chapter}}" id="">test</a>
                                    {{read_more($c->content,200)}}
                                </div>

                                <div class="post-entry">

                                <div class="post-meta"><span class="post-category"><a href="#">kategori {{$n->id_kategori}}</a></span></div>
                                <div class="divider"></div>
                                  <h1><a href="portfolio-item.html">{{$n->judul}}</a></h1>
                                <div class="post-meta">Posted on <span class="post-time">{{tgl_indo($n->created_at)}}</span> by <span class="post-author"><a href="post.html">Paino</a></span></div>
                                    <p align="justify" style="font-family: {{$config->font_name}};">{!! read_more($n->deskripsi,7000000) !!}</p>


                                <div class="accordion">
                                    @foreach ($chap as $c)
                                    <div>
                                        <a href="">
                                            {{$c->judul}}
                                        </a>
                                        <div>
                                    <a href="base_url()" id="">test</a>
                                            {{read_more($c->content,200)}}
                                        </div>
                                    </div>
                                    @endforeach
                                </div>

                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </article>
            </div>
            <!--== Comments ==-->
            <div class="row">
                <div class="comments">
                <h4 class="main-heading"><span>Comments</span></h4>
                @foreach ($komen as $k)
                <ul class="comment-list">
                    <li>
                        <div class="comment">
                        <div class="comment-author">
                            <img src="{{base_url()}}assets/images/member/{{$k->email}}/{{$k->photo}}" alt="Author">
                            <a href="#" rel="external nofollow" class="comment-author-name">{{$k->nama}}</a>
                            <span class="comment-meta">{{date("d-M-Y", strtotime($k->created))}} at {{date("H:m:s", strtotime($k->created))}}</span>
                        </div>
                        <div class="comment-body">
                            <p>{{$k->komentar}}</p>
                            <a href="#" class="comment-reply"><i class="fa fa-reply"></i> Reply</a>
                        </div>
                        </div>
                    </li>
                </ul>
                @endforeach
                </div>
                <!--== Post Reply ==-->
                    <div class="comment-form-body">
                    <div class="row">
                    <form class="comment-form" action="{{base_url('main/addcomment')}}" method="post">

                        <div class="col-md-12">
                          <h4 class="main-heading"><span>Type your comment</span></h4>
                <?php if (ucwords($ctrl->session->userdata('main_auth'))==TRUE){ ?>
                          <input type="hidden" name="id_member" value="{{ucwords($ctrl->session->userdata('id'))}}">
                          <input type="hidden" name="id_novel" value="{{$n->id_novel}}">
                          <textarea name="comment" id="comment" placeholder="type here"></textarea>
                        </div>

                        <div class="col-md-12"><input type="submit" value="Post Comment" class="submit-button" /></div>
                    </form>
                <?php }else{ ?>
                        <div class="col-md-12"><a href="{{base_url('main/auth/login')}}"><input type="button" value="Log In" class="submit-button"/></a></div>
                <?php } ?>
                    </div>
                    </div>
            </div><!-- end col-md-12 -->
        </div>
    </div><!-- end row -->

   </section>

 </div>

  </div><!-- end row -->

  </div><!-- end content -->

@endsection