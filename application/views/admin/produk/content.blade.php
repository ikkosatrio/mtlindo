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

@endsection
@section('content')
	<div class="content-wrapper">

				<!-- Page header -->
				<div class="page-header page-header-default">
					<div class="breadcrumb-line">
						<ul class="breadcrumb">
							<li><a href="{{base_url('superuser')}}"><i class="icon-home2 position-left"></i> Home</a></li>
							<li><a href="{{base_url('superuser/produk')}}">Produk</a></li>
							<li class="active">{{ ($type=="create") ? 'Tambah Data Produk' : 'Perbarui Data Produk' }}</li>
						</ul>
					</div>
				</div>
				<!-- /page header -->
				<!-- Content area -->
				<div class="content">

					<!-- Form horizontal -->
					<div class="panel panel-flat">
						<div class="panel-heading">
							<h5 class="panel-title">Tambah Produk</h5>
							<div class="heading-elements">
								<ul class="icons-list">
			                		<li><a data-action="collapse"></a></li>
			                		<li><a data-action="reload"></a></li>
			                		<li><a data-action="close"></a></li>
			                	</ul>
		                	</div>
						</div>
						<div class="panel-body">
						<form id="form-blog" class="form-horizontal" action="{{ ($type=='create') ? base_url('superuser/produk/created') : base_url('superuser/produk/updated/'.$produk->id_produk) }}" method="post">
							<div class="form-group">
								<label class="col-lg-2 control-label">Judul Produk <span class="text-danger"><b>*</b></span></label>
								<div class="col-lg-10">
									<input class="form-control" type="text" placeholder="Judul Produk" name="judul"
									value="{{ ($type=='create') ? '' : $produk->judul }}" required>
								</div>
							</div>
                            <div class="form-group">
                                <label class="col-lg-2 control-label">Kategori Artikel <span class="text-danger"><b>*</b></span></label>
                                <div class="col-lg-10">
                                    <select class="select-search" name="kategori" required>
                                        <option value="">Pilih Kategori</option>
                                        @foreach($kategori as $result)
                                            @if($type=="update")
                                                <option value="{{$result->id_kategori}}" {{($result->id_kategori==$produk->id_kategori) ? "selected" : ""}}>{{$result->nama}}</option>
                                            @else
                                                <option value="{{$result->id_kategori}}">{{$result->nama}}</option>
                                            @endif
                                        @endforeach
                                    </select>

                                </div>
                            </div>
							<div class="form-group">
								<label class="col-lg-2 control-label">Harga Produk <span class="text-danger"><b>*</b></span></label>
								<div class="col-lg-10">
									<input class="form-control" type="number" placeholder="Harga Produk" name="harga"
									value="{{ ($type=='create') ? '' : $produk->harga }}" required>
								</div>
							</div>
							<div class="form-group">
								<label class="col-lg-2 control-label">Stok Produk <span class="text-danger"><b>*</b></span></label>
								<div class="col-lg-10">
									<input class="form-control" type="number" placeholder="Harga Produk" name="stok"
										   value="{{ ($type=='create') ? '' : $produk->stok }}" required>
								</div>
							</div>
							<div class="form-group">
								<label class="col-lg-2 control-label">Deskripsi Produk <span class="text-danger"><b>*</b></span></label>
								<div class="col-lg-10">
									<textarea rows="10" id="editor-full" cols="100" class="wysihtml5 wysihtml5-default2 form-control"  name="deskripsi" >{!! ($type=='create') ? '' : $produk->deskripsi !!}</textarea>
								</div>
							</div>
							@if ($type!='create')
								<div class="form-group">
									<label class="col-lg-2 control-label">Cover Lama<span class="text-danger"><b>*</b></span></label>
									<div class="col-lg-10">
										<img src="{{img_produk($produk->cover)}}" alt="" style="height: 100px">
									</div>
								</div>
							@endif
							<div class="form-group">
								<label class="col-lg-2 control-label">Sampul Produk<span class="text-danger"><b>*</b></span></label>
								<div class="col-lg-10">
									<input type="file" class="file-input-custom" name="cover" accept="image/*" {{ ($type=='create') ? '' : '' }} data-show-upload="false" data-show-caption="true" data-show-preview="true">
										<span class="help-block"> {{ ($type=='create') ? '' : '( Jangan Ubah Jika Tidak Ada Perubahan)' }}
										Ukuran Maksimum 2MB , Hanya File Gambar gif|jpg|png|jpeg
										</span>
								</div>
							</div>

					<div class="text-right">
							<button type="submit" class="btn btn-primary">{{ ($type=='create') ? 'Buat Produk' : 'Ubah Produk' }} <i class="icon-arrow-right14 position-right"></i></button>
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

	$(document).ready(function(){
			$('.file-input-custom').fileinput({
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
	        initialPreview: ["<img src='{{ ($type=='create') ? img_holder() : img_produk($produk->cover) }}' class='file-preview-image' alt=''>",],
	        overwriteInitial: true
	    });
	})

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
					blockMessage($('#form-blog'),'Please Wait , {{ ($type =="create") ? "Menambahkan Produk" : "Memperbarui Produk" }}','#fff');
				}
			})
			.done(function(data){
				$('#form-blog').unblock();
				sweetAlert({
					title: 	((data.auth==false) ? "Opps!" : '{{ ($type =="create") ? "Produk Di Buatkan" : "Produk Di Perbarui" }}'),
					text: 	data.msg,
					type: 	((data.auth==false) ? "error" : "success"),
				},
				function(){
					if(data.auth!=false){
						redirect("{{base_url('superuser/produk')}}");
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
