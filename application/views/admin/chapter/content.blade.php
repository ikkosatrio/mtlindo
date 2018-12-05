@extends('admin.template')
@section('title')
Dashboard - Administrasi
@endsection
@section('style')
	
@endsection
@section('corejs')
	<script type="text/javascript" src="{{base_url()}}assets/js/core/libraries/jquery_ui/interactions.min.js"></script>
	<script type="text/javascript" src="{{base_url()}}assets/js/plugins/forms/selects/select2.min.js"></script>
	<script type="text/javascript" src="{{base_url()}}assets/js/pages/form_inputs.js"></script>
	<script type="text/javascript" src="{{base_url()}}assets/js/pages/form_select2.js"></script>
	<script type="text/javascript" src="{{base_url()}}assets/ckeditor/ckeditor.js"></script>

	<script>

	</script>
@endsection
@section('content')
	<div class="content-wrapper">

				<!-- Page header -->
				<div class="page-header page-header-default">
					<div class="breadcrumb-line">
						<ul class="breadcrumb">
							<li><a href="{{base_url('superuser')}}"><i class="icon-home2 position-left"></i> Home</a></li>
							<li><a href="{{base_url('superuser/chapter?id_novel='.$novel->id_novel)}}">Chapter</a></li>
							<li class="active">{{ ($type=="create") ? 'Tambah Data Chapter' : 'Perbarui Data Chapter' }}</li>
						</ul>
					</div>
				</div>
				<!-- /page header -->
				<!-- Content area -->
				<div class="content">

					<!-- Form horizontal -->
					<div class="panel panel-flat">
						<div class="panel-heading">

							<h5 class="panel-title">Tambah Chapter</h5>

						</div>

						<div class="panel-body">
							<div class="row">
								<form id="form-blog" class="form-horizontal" action="{{ ($type=='create') ? base_url('superuser/chapter/created') : base_url('superuser/chapter/updated/'.$chapter->id_chapter) }}" method="post">
									<hr>
									<h3 class="text-center">Indonesia</h3>
									<hr>
									<div class="form-group">
										<label class="col-lg-2 control-label">Judul Chapter <span class="text-danger"><b>*</b></span></label>
										<div class="col-lg-10">
											<input type="hidden" name="id_novel" value="{{$novel->id_novel}}">
											<input class="form-control" type="text" placeholder="Nama Chapter" name="judul"
											value="{{ ($type=='create') ? '' : $chapter->nama }}" required>
										</div>
									</div>

									<div class="form-group">
										<label class="col-lg-2 control-label">Content Chapter <span class="text-danger"><b>*</b></span></label>
										<div class="col-lg-10">
											<textarea rows="10" id="editor-full" cols="100" class="wysihtml5 wysihtml5-default2 form-control"  name="content" >{!! ($type=='create') ? '' : $chapter->deskripsi_kat !!}</textarea>
										</div>
									</div>

									<hr>
									<h3 class="text-center">English</h3>
									<hr>

									<div class="form-group">
										<label class="col-lg-2 control-label">Judul Chapter <span class="text-danger"><b>*</b></span></label>
										<div class="col-lg-10">
											<input type="hidden" name="id_novel" value="{{$novel->id_novel}}">
											<input id="judul_en" class="form-control" type="text" placeholder="Nama Chapter" name="judul"
												   value="{{ ($type=='create') ? '' : $chapter->nama }}" required>
										</div>
									</div>

									<div class="form-group">
										<label class="col-lg-2 control-label">Content Chapter <span class="text-danger"><b>*</b></span></label>
										<div class="col-lg-10">
											<textarea id="content_en" rows="10" id="content_en" cols="100" class="wysihtml5 wysihtml5-default2 form-control"  name="content_en" >{!! ($type=='create') ? '' : $chapter->deskripsi_kat !!}</textarea>
										</div>
									</div>

									<hr>
									<h3 class="text-center">China</h3>
									<hr>

									<div class="form-group">
										<label class="col-lg-2 control-label">Judul Chapter <span class="text-danger"><b>*</b></span></label>
										<div class="col-lg-10">
											<input type="hidden" name="id_novel" value="{{$novel->id_novel}}">
											<input id="judul_ch" class="form-control" type="text" placeholder="Nama Chapter" name="judul"
												   value="{{ ($type=='create') ? '' : $chapter->nama }}" required>
										</div>
									</div>

									<div class="form-group">
										<label class="col-lg-2 control-label">Content Chapter <span class="text-danger"><b>*</b></span></label>
										<div class="col-lg-10">
											<textarea id="content_ch" rows="10" id="content_ch" cols="100" class="wysihtml5 wysihtml5-default2 form-control"  name="content_ch" >{!! ($type=='create') ? '' : $chapter->deskripsi_kat !!}</textarea>
										</div>
									</div>

									<hr>

									<div class="text-right">
											<button type="submit" class="btn btn-primary">{{ ($type=='create') ? 'Buat Chapter' : 'Ubah chapter' }} <i class="icon-arrow-right14 position-right"></i></button>
											@if($type=="update")
											<a class="btn btn-danger" href="javascript:void(0)" onclick="window.history.back(); "> Batalkan <i class="fa fa-times position-right"></i></a>
											@endif
									</div>
								</form>
							</div>
							<div class="row">
								<div class="col-lg-4">
									<form id="form-eng" class="form-horizontal" action="{{base_url('superuser/chapter/import')}}"  method="post" enctype="multipart/form-data">
										<div class="form-group">
											<label class="col-lg-2 control-label">English Chapter <span class="text-danger"><b>*</b></span></label>
										</div>
										<div class="form-group">
											<input type="file" name="file" class="file-input">
										</div>
										<div class="form-group">
											<button type="submit" class="btn btn-primary">Upload</button>
										</div>
									</form>
								</div>
								<div class="col-lg-4">
								</div>
								<div class="col-lg-4">
									<form id="form-china" class="form-horizontal" action="{{base_url('superuser/chapter/import')}}"  method="post" enctype="multipart/form-data">
										<div class="form-group">
											<label class="col-lg-2 control-label">China Chapter <span class="text-danger"><b>*</b></span></label>
										</div>
										<div class="form-group">
											<input type="file" name="file" class="file-input">
										</div>
										<div class="form-group">
											<button type="submit" class="btn btn-primary">Upload</button>
										</div>
									</form>
								</div>
							</div>
						</div>


					<!-- /form horizontal -->

					
					<!-- Footer -->
					{{-- <div class="footer text-muted">
						&copy; 2015. <a href="#">Limitless Web App Kit</a> by <a href="http://themeforest.net/user/Kopyov" target="_blank">Eugene Kopyov</a>
					</div> --}}
					<!-- /footer -->

				</div>
					<div class="panel-body">

					</div>
			</div>
	@section('script')
	<script type="text/javascript" src="{{base_url()}}assets/js/plugins/uploaders/fileinput.min.js"></script>
	<script type="text/javascript" src="{{base_url()}}assets/js/plugins/forms/selects/select2.min.js"></script>
	<script type="text/javascript" src="{{base_url()}}assets/js/pages/form_layouts.js"></script>

	<script type="text/javascript">
		var editorsmall = false;

	</script>

	<script type="text/javascript" src="{{base_url()}}assets/js/pages/uploader_bootstrap.js"></script>
	<script type="text/javascript" src="{{base_url()}}assets/js/plugins/forms/styling/uniform.min.js"></script>
	<script type="text/javascript" src="{{base_url()}}assets/js/plugins/forms/styling/switch.min.js"></script>
	<script type="text/javascript">
	$(".switch").bootstrapSwitch();

    CKEDITOR.replace( 'content_en' );
    CKEDITOR.add

    CKEDITOR.replace( 'content_ch' );
    CKEDITOR.add

	$("#form-blog").submit(function(e){
			e.preventDefault();
			var formData = new FormData( $("#form-blog")[0] );

			 for ( instance in CKEDITOR.instances ) {
		        CKEDITOR.instances[instance].updateElement();
		    }

			$.ajax({
				url: 		$("#form-blog").attr('action'),
				method: 	"POST",
				data:  		new FormData(this),
          		processData: false,
          		contentType: false,
				beforeSend: function(){
					blockMessage($('#form-blog'),'Please Wait , {{ ($type =="create") ? "Menambahkan Chapter" : "Memperbarui Chapter" }}','#fff');		
				}
			})
			.done(function(data){
				$('#form-blog').unblock();
				sweetAlert({
					title: 	((data.auth==false) ? "Opps!" : '{{ ($type =="create") ? "Chapter Di Buatkan" : "Chapter Di Perbarui" }}'),
					text: 	data.msg,
					type: 	((data.auth==false) ? "error" : "success"),
				},
				function(){
					if(data.auth!=false){
						redirect("{{base_url('superuser/chapter/?id_novel='.$novel->id_novel)}}");
						return;
					}
				});
			})
			.fail(function() {
			    $('#form-blog').unblock();
				sweetAlert({
					title: 	"Opss!",
					text: 	"Ada Yang Salah! , Silahkan Coba Lagi Nanti",
					type: 	"error",
				},
				function(){
				});
			 })
			
		})

    $("#form-eng").submit(function(e){
        e.preventDefault();
        var formData = new FormData( $("#form-eng")[0] );

        for ( instance in CKEDITOR.instances ) {
            CKEDITOR.instances[instance].updateElement();
        }

        $.ajax({
            url: 		$("#form-eng").attr('action'),
            method: 	"POST",
            data:  		new FormData(this),
            processData: false,
            contentType: false,
            dataType:'json',
            beforeSend: function(){
                blockMessage($('#form-eng'),'Please Wait , {{ ($type =="create") ? "Generate Chapter" : "Generate Chapter" }}','#fff');
            }
        })
            .done(function(data){
				console.log("ENGLISH",data)
				alert(data.Code);
				$("#content_en").val(data.Content);
                CKEDITOR.instances['content_en'].setData(data.Content);
            })
            .fail(function() {
                $('#form-eng').unblock();
                sweetAlert({
                        title: 	"Opss!",
                        text: 	"Ada Yang Salah! , Silahkan Coba Lagi Nanti",
                        type: 	"error",
                    },
                    function(){
                    });
            })

    })

    $("#form-china").submit(function(e){
        e.preventDefault();
        var formData = new FormData( $("#form-china")[0] );

        for ( instance in CKEDITOR.instances ) {
            CKEDITOR.instances[instance].updateElement();
        }

        $.ajax({
            url: 		$("#form-china").attr('action'),
            method: 	"POST",
            data:  		new FormData(this),
            processData: false,
            contentType: false,
			dataType:'json',
            beforeSend: function(){
                blockMessage($('#form-china'),'Please Wait , {{ ($type =="create") ? "Generate Chapter" : "Generate Chapter" }}','#fff');
            }
        })
            .done(function(data){
                console.log("CHINA",data)
                alert(data.Code);
                $("#content_ch").val(data.Content);
                CKEDITOR.instances['content_ch'].setData(data.Content);
            })
            .fail(function() {
                $('#form-china').unblock();
                sweetAlert({
                        title: 	"Opss!",
                        text: 	"Ada Yang Salah! , Silahkan Coba Lagi Nanti",
                        type: 	"error",
                    },
                    function(){
                    });
            })

    })




	</script>
	<script type="text/javascript" src="{{base_url()}}assets/js/pages/editor_ckeditor.js"></script>
	
@endsection
@endsection