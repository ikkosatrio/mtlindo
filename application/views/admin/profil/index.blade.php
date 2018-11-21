@extends('admin.template')
@section('title')
{{ucfirst($menu)}} - Administrasi
@endsection
@section('corejs')
	<script type="text/javascript" src="{{base_url()}}assets/js/plugins/forms/selects/select2.min.js"></script>
	<script type="text/javascript" src="{{base_url()}}assets/js/plugins/editors/wysihtml5/wysihtml5.min.js"></script>
	<script type="text/javascript" src="{{base_url()}}assets/js/plugins/editors/wysihtml5/toolbar.js"></script>
	<script type="text/javascript" src="{{base_url()}}assets/js/plugins/editors/wysihtml5/parsers.js"></script>
	<script type="text/javascript" src="{{base_url()}}assets/js/plugins/tables/datatables/datatables.min.js"></script>
	<script type="text/javascript" src="{{base_url()}}assets/js/pages/datatables_basic.js"></script>
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
							<li class="active"><a href="datatable_basic.html">Profil</a></li>
						</ul>
					</div>
				</div>
				<!-- /page header -->


				<!-- Content area -->
				<div class="content">

					<!-- Basic datatable -->
					<div class="panel panel-flat">
						<div class="panel-heading">
							<h5 class="panel-title">Data Profil</h5>
							<div class="heading-elements">
								<ul class="icons-list">
			                		<li><a data-action="collapse"></a></li>
			                		<li><a data-action="reload"></a></li>
			                		<li><a data-action="close"></a></li>
			                	</ul>
		                	</div>
						</div>
						<div class="panel-body">
							<form class="form-horizontal" id="form-config" action="{{base_url('superuser/profil/update')}}">
								<fieldset class="content-group">
									<legend class="text-bold">Data</legend>

									<div class="form-group">
										<label class="control-label col-lg-2">Nama Website </label>
										<div class="col-lg-10">
											<input type="text" class="form-control" name="name" value="{{$profil->nama_desa}}">
										</div>
									</div>

									<div class="form-group">
										<label class="col-lg-2 control-label text-semibold">Gambar Website</label>
										<div class="col-lg-10">
											<input type="file" class="file-input-custom" name="foto" accept="image/*" multiple="multiple" data-show-upload="false" data-show-caption="true" data-show-preview="true">
											<span class="help-block">Format File Images gif,jpg,png ( Jangan Di Ubah Jika Tidak Ada Perubahan ) File Maks 2MB .</span>
										</div>
									</div>


									<div class="form-group">
										<label class="control-label col-lg-2">Deskripsi</label>
										<div class="col-lg-10">
											<textarea rows="5" cols="5" name="description" class=" wysihtml5 wysihtml5-min form-control" placeholder="Default textarea">{!! $profil->deskripsi !!}</textarea>
										</div>
									</div>
								</fieldset>
							<div class="text-right">
									<button type="submit" class="btn btn-primary">Update <i class="icon-arrow-right14 position-right"></i></button>
								</div>
							</form>
								{{-- <fieldset class="content-group">
									<legend class="text-bold">Pejabat Desa</legend>
									<div class="content">
									<!-- Basic datatable -->

											<div class="panel-heading">
												<a href="{{base_url('superuser/pejabat/create')}}"><button type="button" class="btn bg-teal-400 btn-labeled"><b><i class="icon-plus-circle2"></i></b> Tambah Pejabat</button></a>
											</div>
											<table class="table table-striped datatable-basic table-lg table-responsive">
							                    <thead>
							                        <tr>
							                        	<th>No</th>
							                        	<th>Foto</th>
							                            <th>Pejabat</th>
							                            <th>Prioritas</th>
							                            <th class="text-center">Aksi</th>
							                        </tr>
							                    </thead>
							                    <tbody>
							                    	@foreach($pejabat as $key => $result)
							                         <tr>
							                        	<td align="center">{{($key+1)}}</td>
								                        <td>
									                        <a href="{{img_produk($result->foto)}}" data-popup="lightbox">
										                        <img src="{{img_pejabat($result->foto)}}" alt="{{$result->foto}}" class="img-rounded img-preview" style="object-fit: cover;height: 70px;">
									                        </a>
								                        </td>
								                        <td style="width:300px;">
								                        	<a href="{{base_url('superuser/pejabat/update/'.$result->id_pejabat.'/'.seo($result->nama))}}">
								                        		<b>{{ucwords(read_more($result->nama,30))}}</b>
								                        	</a><br>
								                        	<span class="text-size-mini">
								                        	Jabatan : {{$result->jabatan}}
								                        	</span><br>
								                        </td>
								                        <td align="center">
								                        	<span class="label label-success"><i class="icon-eye"></i> &nbsp;{{$result->prioritas}}</span>
								                        </td>
								                        <td class="text-center">
								                           <div class="btn-group">
										                    	<button type="button" class="btn btn-danger btn-sm btn-rounded dropdown-toggle" data-toggle="dropdown"><i class="icon-cog5 position-left"></i> Action <span class="caret"></span></button>
										                    	<ul class="dropdown-menu dropdown-menu-right">
																	<li>
																		<a href="{{base_url('superuser/pejabat/update/'.$result->id_pejabat.'/'.seo($result->nama))}}">
																			<i class="fa fa-edit"></i> Ubah Pejabat
																		</a>
																	</li>
																	<li><a href="javascript:void(0)" onclick="deleteIt(this)"
																	data-url="{{base_url('superuser/pejabat/deleted/'.$result->id_pejabat.'/'.seo($result->nama))}}">
																			<i class="fa fa-trash"></i> Hapus Produk
																		</a>
																	</li>
																</ul>
															</div>
								                        </td>
							                        </tr>
							                        @endforeach
							                    </tbody>
							                </table>
										<!-- /basic datatable -->
									</div>
								</fieldset> --}}
						</div>
					</div>
					<!-- /basic datatable -->

				</div>
				<!-- /content area -->

			</div>
			@section('script')

			<script type="text/javascript">
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
				        initialPreview: ["<img src='{{base_url()}}assets/images/profil/{{$profil->gambar}}' class='file-preview-image'>",],
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
								redirect("{{base_url('superuser/profil')}}");
								return;
							}
							redirect("{{base_url('superuser/profil')}}");
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
							redirect("{{base_url('superuser/profil')}}");
						});
					 })

				})
			</script>

			@endsection
@endsection
