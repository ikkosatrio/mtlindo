@extends('admin.template')
@section('title')
Dashboard - Administrasi
@endsection
@section('style')
	<style type="text/css">
	.image img{
		width: 100%;
		height: 200px;
		object-fit:cover;
		border:1px solid#ccc;
		margin-bottom: 15px;
	}
	.container-image {
		margin-bottom: 20px;
	}
</style>
@endsection
@section('corejs')
	<script type="text/javascript" src="{{base_url()}}assets/js/core/libraries/jquery_ui/interactions.min.js"></script>
	<script type="text/javascript" src="{{base_url()}}assets/js/plugins/forms/selects/select2.min.js"></script>
	<script type="text/javascript" src="{{base_url()}}assets/js/pages/form_inputs.js"></script>
	<script type="text/javascript" src="{{base_url()}}assets/js/pages/form_select2.js"></script>

@endsection
@section('content')
	<div class="content-wrapper">

				<!-- Page header -->
				<div class="page-header page-header-default">
					<div class="breadcrumb-line">
						<ul class="breadcrumb">
							<li><a href="{{base_url('superuser')}}"><i class="icon-home2 position-left"></i> Home</a></li>
							<li><a href="{{base_url('superuser/gallery')}}">Album</a></li>
							<li class="active">{{ ($type=="create") ? 'Tambah Data Album' : 'Perbarui Data Album' }}</li>
						</ul>
					</div>
				</div>
				<!-- /page header -->
				<!-- Content area -->
				<div class="content">

					<!-- Form horizontal -->
					<div class="panel panel-flat">
						<div class="panel-heading">
							<h5 class="panel-title">Tambah Album</h5>
							<div class="heading-elements">
								<ul class="icons-list">
			                		<li><a data-action="collapse"></a></li>
			                		<li><a data-action="reload"></a></li>
			                		<li><a data-action="close"></a></li>
			                	</ul>
		                	</div>
						</div>
						<div class="panel-body">
						<form id="form-blog" class="form-horizontal" action="{{ ($type=='create') ? base_url('superuser/gallery/created') : base_url('superuser/gallery/updated/'.$album->id_album) }}" method="post">
							<div class="form-group">
								<label class="col-lg-2 control-label">Nama Album <span class="text-danger"><b>*</b></span></label>
								<div class="col-lg-5">
									<input class="form-control" type="text" placeholder="Nama Album" name="nama"
									value="{{ ($type=='create') ? '' : $album->nama_album }}" required>
								</div>
							</div>

							<div class="form-group">
								<label class="col-lg-2 control-label">Gambar <span class="text-danger"><b>*</b></span>
								</label>
								<div class="col-lg-10">
									<label class="control-label">
										<button type="button" class="btn bg-teal-400 btn-sm btn-labeled" onclick="NewImage()">Tambah Gambar <b><i class="icon-plus3"></i></b></button>
										<span class="help-block">Accepted formats: gif, png, jpg. Max file size 2Mb</span>
									</label>
									<div id="box-image" style="margin-top:20px">
										@if($type=="update")
											@if(count($gambar_album)>=0)
												@foreach($gambar_album as $image)
													<div class="col-md-4 col-sm-6 container-image">
														<div class="image">
															<img src="{{img_album($image->gambar)}}" style="height: 100px">
														</div>
														<div class="col-sm-10" style="padding:0">
															<input type="hidden" name="isimage-{{$image->id_gambar}}" value="true">
															<div class="media-body">
																<div class="uploader bg-primary">
																	<input type="file" onchange="uploadImage(this)"  name="image-{{$image->id_gambar}}" accept="image/*" class="file-styled">
																	{{-- <span class="action" style="-webkit-user-select: none;"><i class="icon-googleplus5"></i></span> --}}
																</div>
															</div>
														</div>
														<div class="col-sm-2" style="padding:0">
															<button type="button" class="btn bg-danger btn-block" onclick="removeImage(this)"><i class="icon-trash"></i></button>
														</div>
													</div>
												@endforeach
											@endif
										@else
											<div class="col-md-4 col-sm-6 container-image">
												<div class="image">
													<img src="{{img_holder()}}" style="height: 100px">
												</div>
												<div class="col-sm-10" style="padding:0">
													<div class="media-body">
														<div class="uploader bg-primary">
															<input type="file" onchange="uploadImage(this)"  name="image[]" accept="image/*" required class="file-styled">
															{{-- <span class="action" style="-webkit-user-select: none;"><i class="icon-googleplus5"></i></span> --}}
														</div>
													</div>
												</div>
												<div class="col-sm-2" style="padding:0">
													<button type="button" class="btn bg-danger btn-block" onclick="removeImage(this)"><i class="icon-trash"></i></button>
												</div>
											</div>
										@endif
									</div>
								</div>
							</div>

					<div class="text-right">
							<button type="submit" class="btn btn-primary">{{ ($type=='create') ? 'Buat Album' : 'Ubah Album' }} <i class="icon-arrow-right14 position-right"></i></button>
							@if($type=="update")
							<a class="btn btn-danger" href="javascript:void(0)" onclick="window.history.back(); "> Batalkan <i class="fa fa-times position-right"></i></a>
							@endif
					</div>
					</div>
					</form>
					<!-- /form horizontal -->


					<!-- Footer -->
					{{-- <div class="footer text-muted">
						&copy; 2015. <a href="#">Limitless Web App Kit</a> by <a href="http://themeforest.net/user/Kopyov" target="_blank">Eugene Kopyov</a>
					</div> --}}
					<!-- /footer -->

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

	function NewImage(){
		var html = '<div class="col-md-4 col-sm-6 container-image">'+
											'<div class="image">'+
												'<img src="{{img_holder()}}" style="height: 100px">'+
											'</div>'+
											'<div class="col-sm-10" style="padding:0">'+
												'<div class="media-body">'+
													'<div class="uploader bg-primary">'+
														'<input type="file" onchange="uploadImage(this)"  name="image[]" accept="image/*" required class="file-styled">'+
														'<span class="filename" style="user-select: none;">No file selected</span>'+
														'<span class="action btn btn-default" style="user-select: none;">Choose File</span>'+
													'</div>'+
												'</div>'+
											'</div>'+
											'<div class="col-sm-2" style="padding:0">'+
												'<button type="button" class="btn bg-danger btn-block" onclick="removeImage(this)"><i class="icon-trash"></i></button>'+
											'</div>'+
										'</div>';

		$("#box-image").append(html);
	}

	function removeImage(that){
		$(that).parents('.container-image').remove();
	}

	function  uploadImage(input) {

	    if (input.files && input.files[0]) {
	        var reader = new FileReader();

	        reader.onload = function (e) {
	        	$(input).parents('.container-image').find('img').attr('src', e.target.result)
	            $(input).next().html(read_more(e.target.result,10));
	        }
	        reader.readAsDataURL(input.files[0]);
	    }
	}

	$("#form-blog").submit(function(e){
			e.preventDefault();
			var formData = new FormData( $("#form-blog")[0] );

			$.ajax({
				url: 		$("#form-blog").attr('action'),
				method: 	"POST",
				data:  		new FormData(this),
          		processData: false,
          		contentType: false,
				beforeSend: function(){
					blockMessage($('#form-blog'),'Please Wait , {{ ($type =="create") ? "Menambahkan Album" : "Memperbarui Album" }}','#fff');
				}
			})
			.done(function(data){
				$('#form-blog').unblock();
				sweetAlert({
					title: 	((data.auth==false) ? "Opps!" : '{{ ($type =="create") ? "Album Di Buatkan" : "Album Di Perbarui" }}'),
					text: 	data.msg,
					type: 	((data.auth==false) ? "error" : "success"),
				},
				function(){
					if(data.auth!=false){
						redirect("{{base_url('superuser/gallery')}}");
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
	</script>
	<script type="text/javascript" src="{{base_url()}}assets/ckeditor/ckeditor.js"></script>
	<script type="text/javascript" src="{{base_url()}}assets/js/pages/editor_ckeditor.js"></script>

@endsection
@endsection
