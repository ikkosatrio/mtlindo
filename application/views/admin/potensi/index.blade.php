@extends('admin.template')
@section('title')
Dashboard - Administrasi
@endsection
@section('corejs')
	<script type="text/javascript" src="{{base_url()}}assets/js/plugins/media/fancybox.min.js"></script>
	<script type="text/javascript" src="{{base_url()}}assets/js/plugins/tables/datatables/datatables.min.js"></script>
	<script type="text/javascript" src="{{base_url()}}assets/js/plugins/forms/selects/select2.min.js"></script>
	<script type="text/javascript" src="{{base_url()}}assets/js/pages/datatables_basic.js"></script>
	<script type="text/javascript" src="{{base_url()}}assets/js/pages/components_thumbnails.js"></script>
@endsection
@section('content')
	<div class="content-wrapper">

				<!-- Page header -->
				<div class="page-header page-header-default">
					<div class="breadcrumb-line">
						<ul class="breadcrumb">
							<li><a href="{{base_url('superuser')}}"><i class="icon-home2 position-left"></i> Home</a></li>
							<li class="active"><a href="#">Potensi</a></li>
						</ul>
					</div>
				</div>
				<!-- /page header -->


				<!-- Content area -->
				<div class="content">

					<!-- Basic datatable -->
					<div class="panel panel-flat">
						<div class="panel-heading">
							<h5 class="panel-title">Daftar Potensi</h5>
							<div class="heading-elements">
								<ul class="icons-list">
			                		<li><a data-action="collapse"></a></li>
			                		<li><a data-action="reload"></a></li>
			                		<li><a data-action="close"></a></li>
			                	</ul>
		                	</div>
						</div>
						<div class="panel-heading">
							<a href="{{base_url('superuser/potensi/create')}}"><button type="button" class="btn bg-teal-400 btn-labeled"><b><i class="icon-plus-circle2"></i></b> Tambah Potensi</button></a>
						</div>
						<table class="table table-striped datatable-basic table-lg table-responsive">
		                    <thead>
		                        <tr>
		                        	<th>No</th>
		                        	<th>Gambar</th>
		                            <th>Potensi</th>
		                            <th>Di Lihat</th>
		                            <th class="text-center">Aksi</th>
		                        </tr>
		                    </thead>
		                    <tbody>
		                    	@foreach($potensi as $key => $result)
		                         <tr>
		                        	<td align="center">{{($key+1)}}</td>
			                        <td>
				                        <a href="{{img_potensi($result->cover)}}" data-popup="lightbox">
					                        <img src="{{img_potensi($result->cover)}}" alt="{{$result->cover}}" class="img-rounded img-preview" style="object-fit: cover;height: 70px;">
				                        </a>
			                        </td>
			                        <td style="width:300px;">
			                        	<a href="{{base_url('superuser/potensi/update/'.$result->id_potensi.'/'.seo($result->judul))}}">
			                        		<b>{{ucwords(read_more($result->judul,30))}}</b>
			                        	</a><br>
			                        	<span class="text-size-mini">
			                        	Tanggal Publish : {{tgl_indo($result->created_at)}}
			                        	</span><br>
			                        	<span class="text-size-small text-muted">
			                        		{{read_more(strip_tags($result->deskripsi),30)}}
			                        	</span>
			                        </td>
			                        <td align="center">
			                        	<span class="label label-success"><i class="icon-eye"></i> &nbsp;{{$result->view}} Di Lihat</span>
			                        </td>
			                        <td class="text-center">
			                           <div class="btn-group">
					                    	<button type="button" class="btn btn-danger btn-sm btn-rounded dropdown-toggle" data-toggle="dropdown"><i class="icon-cog5 position-left"></i> Action <span class="caret"></span></button>
					                    	<ul class="dropdown-menu dropdown-menu-right">
					                    		<li>
													<a href="{{base_url('main/news/detail/'.$result->id_potensi.'/'.seo($result->judul))}}" target="_blank">
														<i class="fa fa-eye"></i> Lihat Potensi Website
													</a>
												</li>
												<li>
													<a href="{{base_url('superuser/potensi/update/'.$result->id_potensi.'/'.seo($result->judul))}}">
														<i class="fa fa-edit"></i> Ubah Potensi
													</a>
												</li>
												<li><a href="javascript:void(0)" onclick="deleteIt(this)" 
												data-url="{{base_url('superuser/potensi/deleted/'.$result->id_potensi.'/'.seo($result->judul))}}">
														<i class="fa fa-trash"></i> Hapus Potensi
													</a>
												</li>
											</ul>
										</div>
			                        </td>
		                        </tr>
		                        @endforeach
		                    </tbody>
		                </table>
					</div>
					<!-- /basic datatable -->					

				</div>
				<!-- /content area -->

			</div>
@endsection