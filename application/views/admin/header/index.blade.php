@extends('admin.template')
@section('title')
{{ucfirst($menu)}} - Administrasi
@endsection
@section('corejs')
	<script type="text/javascript" src="{{base_url()}}assets/js/plugins/forms/selects/select2.min.js"></script>
	<script type="text/javascript" src="{{base_url()}}assets/js/plugins/editors/wysihtml5/wysihtml5.min.js"></script>
	<script type="text/javascript" src="{{base_url()}}assets/js/plugins/editors/wysihtml5/toolbar.js"></script>
	<script type="text/javascript" src="{{base_url()}}assets/js/plugins/editors/wysihtml5/parsers.js"></script>
	<script type="text/javascript" src="{{base_url()}}assets/js/plugins/editors/wysihtml5/locales/bootstrap-wysihtml5.ua-UA.js"></script>
	<script type="text/javascript" src="{{base_url()}}assets/js/plugins/uploaders/fileinput.min.js"></script>
	<script type="text/javascript" src="{{base_url()}}assets/js/pages/editor_wysihtml5.js"></script>
	{{-- <script type="text/javascript" src="{{base_url()}}assets/js/pages/uploader_bootstrap.js"></script> --}}
@endsection
@section('content')
	<div class="content-wrapper">

				<!-- Page header -->
				<div class="page-header page-header-default">
					<div class="breadcrumb-line">
						<ul class="breadcrumb">
							<li><a href="index.html"><i class="icon-home2 position-left"></i> Home</a></li>
							<li class="active"><a href="datatable_basic.html">Header</a></li>
						</ul>
					</div>
				</div>
				<!-- /page header -->


				<!-- Content area -->
				<div class="content">

					<!-- Basic datatable -->
					<div class="panel panel-flat">
						<div class="panel-heading">
							<h5 class="panel-title">Header Untuk Setiap Halaman</h5>
							<div class="heading-elements">
								<ul class="icons-list">
			                		<li><a data-action="collapse"></a></li>
			                		<li><a data-action="reload"></a></li>
			                		<li><a data-action="close"></a></li>
			                	</ul>
		                	</div>
						</div>
						<div class="panel-body">
							<form class="form-horizontal" id="form-config" action="{{base_url('superuser/header/update')}}">
								<fieldset class="content-group">
									<legend class="text-bold">Data Header</legend>

								 	<div class="form-group">
										<label class="col-lg-2 control-label text-semibold">Profil Desa</label>
										<div class="col-lg-10">
											<input type="file" class="file-input-customProfil" name="profil" accept="image/*" multiple="multiple" data-show-upload="false" data-show-caption="true" data-show-preview="true">
											<span class="help-block">Format File Images gif,jpg,png ( Jangan Di Ubah Jika Tidak Ada Perubahan ) File Maks 2MB . (Dianjurkan menggunakan gambar berukuran 1920 x 348 px)</span>
										</div>
									</div>

									<div class="form-group">
										<label class="col-lg-2 control-label text-semibold">Artikel</label>
										<div class="col-lg-10">
											<input type="file" class="file-input-customArtikel" name="artikel" accept="image/*" multiple="multiple" data-show-upload="false" data-show-caption="true" data-show-preview="true">
											<span class="help-block">Format File Images gif,jpg,png ( Jangan Di Ubah Jika Tidak Ada Perubahan ) File Maks 2MB. (Dianjurkan menggunakan gambar berukuran 1920 x 348 px)</span>
										</div>
									</div>

									<div class="form-group">
										<label class="col-lg-2 control-label text-semibold">Produk</label>
										<div class="col-lg-10">
											<input type="file" class="file-input-customProduk" name="produk" accept="image/*" multiple="multiple" data-show-upload="false" data-show-caption="true" data-show-preview="true">
											<span class="help-block">Format File Images gif,jpg,png ( Jangan Di Ubah Jika Tidak Ada Perubahan ) File Maks 2MB. (Dianjurkan menggunakan gambar berukuran 1920 x 348 px)</span>
										</div>
									</div>

									<div class="form-group">
										<label class="col-lg-2 control-label text-semibold">Potensi</label>
										<div class="col-lg-10">
											<input type="file" class="file-input-customPotensi" name="potensi" accept="image/*" multiple="multiple" data-show-upload="false" data-show-caption="true" data-show-preview="true">
											<span class="help-block">Format File Images gif,jpg,png ( Jangan Di Ubah Jika Tidak Ada Perubahan ) File Maks 2MB. (Dianjurkan menggunakan gambar berukuran 1920 x 348 px)</span>
										</div>
									</div>

									<div class="form-group">
										<label class="col-lg-2 control-label text-semibold">Gallery</label>
										<div class="col-lg-10">
											<input type="file" class="file-input-customGallery" name="gallery" accept="image/*" multiple="multiple" data-show-upload="false" data-show-caption="true" data-show-preview="true">
											<span class="help-block">Format File Images gif,jpg,png ( Jangan Di Ubah Jika Tidak Ada Perubahan ) File Maks 2MB. (Dianjurkan menggunakan gambar berukuran 1920 x 348 px)</span>
										</div>
									</div>

									<div class="form-group">
										<label class="col-lg-2 control-label text-semibold">Kontak</label>
										<div class="col-lg-10">
											<input type="file" class="file-input-customKontak" name="kontak" accept="image/*" multiple="multiple" data-show-upload="false" data-show-caption="true" data-show-preview="true">
											<span class="help-block">Format File Images gif,jpg,png ( Jangan Di Ubah Jika Tidak Ada Perubahan ) File Maks 2MB. (Dianjurkan menggunakan gambar berukuran 1920 x 348 px)</span>
										</div>
									</div>


								</fieldset>

								<div class="text-right">
									<button type="submit" class="btn btn-primary">Update <i class="icon-arrow-right14 position-right"></i></button>
								</div>
							</form>
						</div>
					</div>
					<!-- /basic datatable -->					

				</div>
				<!-- /content area -->

			</div>
			@section('script')
				
			<script type="text/javascript">
				$(document).ready(function(){
					$('.file-input-customProfil').fileinput({
						previewFileType: 'image',
				        browseLabel: 'Select',
				        browseClass: 'btn bg-slate-700',
				        browseIcon: '<i class="icon-image2 position-left"></i> ',
				        removeLabel: 'Remove',
				        removeClass: 'btn btn-danger',
				        removeIcon: '<i class="icon-cancel-square position-left"></i> ',
				        uploadClass: 'hidden',
				        uploadIcon: '<i class="icon-file-upload position-left"></i> ',
				        layoutTemplates: {
				            caption: '<div tabindex="-1" class="form-control file-caption {class}">\n' + '<span class="icon-file-plus kv-caption-icon"></span><div class="file-caption-name"></div>\n' + '</div>'
				        },
				        initialPreview: ["<img src='{{base_url()}}assets/images/header/{{$header->profil}}' class='file-preview-image'>",],
				        overwriteInitial: true
								});

					$('.file-input-customArtikel').fileinput({
						previewFileType: 'image',
				        browseLabel: 'Select',
				        browseClass: 'btn bg-slate-700',
				        browseIcon: '<i class="icon-image2 position-left"></i> ',
				        removeLabel: 'Remove',
				        removeClass: 'btn btn-danger',
				        removeIcon: '<i class="icon-cancel-square position-left"></i> ',
				        uploadClass: 'hidden',
				        uploadIcon: '<i class="icon-file-upload position-left"></i> ',
				        layoutTemplates: {
				            caption: '<div tabindex="-1" class="form-control file-caption {class}">\n' + '<span class="icon-file-plus kv-caption-icon"></span><div class="file-caption-name"></div>\n' + '</div>'
				        },
				        initialPreview: ["<img src='{{base_url()}}assets/images/header/{{$header->artikel}}' class='file-preview-image'>",],
				        overwriteInitial: true
								});

					$('.file-input-customProduk').fileinput({
						previewFileType: 'image',
				        browseLabel: 'Select',
				        browseClass: 'btn bg-slate-700',
				        browseIcon: '<i class="icon-image2 position-left"></i> ',
				        removeLabel: 'Remove',
				        removeClass: 'btn btn-danger',
				        removeIcon: '<i class="icon-cancel-square position-left"></i> ',
				        uploadClass: 'hidden',
				        uploadIcon: '<i class="icon-file-upload position-left"></i> ',
				        layoutTemplates: {
				            caption: '<div tabindex="-1" class="form-control file-caption {class}">\n' + '<span class="icon-file-plus kv-caption-icon"></span><div class="file-caption-name"></div>\n' + '</div>'
				        },
				        initialPreview: ["<img src='{{base_url()}}assets/images/header/{{$header->produk}}' class='file-preview-image'>",],
				        overwriteInitial: true
								});

					$('.file-input-customPotensi').fileinput({
						previewFileType: 'image',
				        browseLabel: 'Select',
				        browseClass: 'btn bg-slate-700',
				        browseIcon: '<i class="icon-image2 position-left"></i> ',
				        removeLabel: 'Remove',
				        removeClass: 'btn btn-danger',
				        removeIcon: '<i class="icon-cancel-square position-left"></i> ',
				        uploadClass: 'hidden',
				        uploadIcon: '<i class="icon-file-upload position-left"></i> ',
				        layoutTemplates: {
				            caption: '<div tabindex="-1" class="form-control file-caption {class}">\n' + '<span class="icon-file-plus kv-caption-icon"></span><div class="file-caption-name"></div>\n' + '</div>'
				        },
				        initialPreview: ["<img src='{{base_url()}}assets/images/header/{{$header->potensi}}' class='file-preview-image'>",],
				        overwriteInitial: true
								});

					$('.file-input-customGallery').fileinput({
						previewFileType: 'image',
				        browseLabel: 'Select',
				        browseClass: 'btn bg-slate-700',
				        browseIcon: '<i class="icon-image2 position-left"></i> ',
				        removeLabel: 'Remove',
				        removeClass: 'btn btn-danger',
				        removeIcon: '<i class="icon-cancel-square position-left"></i> ',
				        uploadClass: 'hidden',
				        uploadIcon: '<i class="icon-file-upload position-left"></i> ',
				        layoutTemplates: {
				            caption: '<div tabindex="-1" class="form-control file-caption {class}">\n' + '<span class="icon-file-plus kv-caption-icon"></span><div class="file-caption-name"></div>\n' + '</div>'
				        },
				        initialPreview: ["<img src='{{base_url()}}assets/images/header/{{$header->gallery}}' class='file-preview-image'>",],
				        overwriteInitial: true
								});

					$('.file-input-customKontak').fileinput({
						previewFileType: 'image',
				        browseLabel: 'Select',
				        browseClass: 'btn bg-slate-700',
				        browseIcon: '<i class="icon-image2 position-left"></i> ',
				        removeLabel: 'Remove',
				        removeClass: 'btn btn-danger',
				        removeIcon: '<i class="icon-cancel-square position-left"></i> ',
				        uploadClass: 'hidden',
				        uploadIcon: '<i class="icon-file-upload position-left"></i> ',
				        layoutTemplates: {
				            caption: '<div tabindex="-1" class="form-control file-caption {class}">\n' + '<span class="icon-file-plus kv-caption-icon"></span><div class="file-caption-name"></div>\n' + '</div>'
				        },
				        initialPreview: ["<img src='{{base_url()}}assets/images/header/{{$header->kontak}}' class='file-preview-image'>",],
				        overwriteInitial: true
								});
				})

				$("#form-config").submit(function(e){
					e.preventDefault();

					var formData = new FormData( $("#form-config")[0] );
					$.ajax({
						url: 		$("#form-config").attr('action'),
						method: 	"POST",
						data:  		new FormData(this),
		          		processData: false,
		          		contentType: false,
						beforeSend: function(){
							blockMessage($('#form-config'),'Tunggu , Sedang Menyimpan Konfigurasi','#fff');		
						}
					})
					.done(function(data){

						$('#form-config').unblock();
						sweetAlert({
							title: 	((data.auth==false) ? "Opps!" : "Konfigurasi Di Simpan"),
							text: 	data.msg,
							type: 	((data.auth==false) ? "error" : "success"),
						},
						function(){
							if(data.auth!=false){
								redirect("{{base_url('superuser/header')}}");		
								return;
							}
							redirect("{{base_url('superuser/header')}}");
						});
					})
					.fail(function() {
					    $('#form-config').unblock();
						sweetAlert({
							title: 	"Opss!",
							text: 	"Ada Yang Salah! , Silahkan Coba Kembali",
							type: 	"error",
						},
						function(){
							redirect("{{base_url('superuser/config')}}");
						});
					 })
					
				})
			</script>
		
			@endsection
@endsection