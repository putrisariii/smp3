<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title>Prestasi</title>
	<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
	<link rel="icon" href="../../assets-admin/img/icon.ico" type="image/x-icon"/>
	
	<!-- Fonts and icons -->
	<script src="../../assets-admin/js/plugin/webfont/webfont.min.js"></script>
	<script>
		WebFont.load({
			google: {"families":["Lato:300,400,700,900"]},
			custom: {"families":["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"], urls: ['../../assets-admin/css/fonts.min.css']},
			active: function() {
				sessionStorage.fonts = true;
			}
		});
	</script>

	<!-- CSS Files -->
	<link rel="stylesheet" href="../../assets-admin/css/bootstrap.min.css">
	<link rel="stylesheet" href="../../assets-admin/css/atlantis.min.css">
	<!-- CSS Just for demo purpose, don't include it in your project -->
	<link rel="stylesheet" href="../../assets-admin/css/demo.css">
	<link rel="stylesheet" href="../../assets-admin/css/style.css">

</head>
<body>
	<div class="wrapper">
		<div class="main-header">
			<!-- Logo Header -->
			@include('admin/component/logo-header')
			<!-- End Logo Header -->

			<!-- Navbar Header -->
			@include('admin/component/navbar')
			<!-- End Navbar -->
		</div>
		<!-- Sidebar -->
		@include('admin/component/sidebar')
		<!-- Sidebar End -->

		<div class="main-panel">
			<div class="content">
				<div class="page-inner">
					<div class="row">
						<div class="col-md-12">
							<div class="card">
								<div class="card-header">
									<div class="d-flex align-items-center">
										<h4 class="card-title">Prestasi</h4>
										<button class="btn btn-primary btn-round ml-auto" data-toggle="modal" data-target="#addRowModal" style="background: #04a3b1!important;border-color:#04a3b1!important;">
											<i class="fa fa-plus"></i>
											Tambah
										</button>
									</div>
								</div>
								<div class="card-body">
									<!-- Modal Tambah Prestasi-->
									<div class="modal fade" id="addRowModal" tabindex="-1" role="dialog" aria-hidden="true">
										<div class="modal-dialog" role="document">
											<div class="modal-content">
												<div class="modal-header no-bd">
													<h5 class="modal-title">
														<span class="fw-mediumbold">
														Tambah</span> 
														<span class="fw-light">
															Data
														</span>
													</h5>
													<button type="button" class="close" data-dismiss="modal" aria-label="Close">
														<span aria-hidden="true">&times;</span>
													</button>
												</div>
												<div class="modal-body">
													<p class="small">Buat baris baru menggunakan formulir ini, pastikan Anda mengisi semuanya</p>
													<form action="/admin/prestasi" method="POST" enctype="multipart/form-data">
														@csrf
														<div class="row">
															<div class="col-md-6 pr-0">
																<div class="form-group form-group-default">
																	<label>Foto</label>
																	<input id="addPosition" type="file" name="foto" class="form-control" placeholder="fill position">
																</div>
															</div>
															<div class="col-md-6">
																<div class="form-group form-group-default">
																	<label>Juara</label>
																	<input id="addOffice" type="text" name="juara" class="form-control" placeholder="fill office">
																</div>
															</div>
															<div class="col-md-6">
																<div class="form-group form-group-default">
																	<label>Jenis lomba</label>
																	<input id="addOffice" type="text" name="jenis" class="form-control" placeholder="fill office">
																</div>
															</div>
														</div>
														<div class="modal-footer no-bd">
															<button type="submit" id="addRowButton" class="btn btn-primary" style="background: #04a3b1!important">Add</button>
															<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
														</div>
													</form>
												</div>
												
											</div>
										</div>
									</div>
									<!-- Modal Tambah Prestasi end-->

									<div class="table-responsive">
										<table id="add-row" class="display table table-striped table-hover" >
											<thead>
												<tr>
													<th>No</th>
													<th>Foto</th>
													<th>Juara</th>
													<th>Jenis lomba</th>
													<th style="width: 10%">Action</th>
												</tr>
											</thead>
											<tbody>
												@foreach ( $prestasis as $row )
												<tr>
													<td>{{ $row->id }}</td>
													<td>
														<img src="{{ asset('file/Prestasi/' . $row->foto) }}" width="150" height="100" alt="">
													</td>
													<td>{{ $row->juara }}</td>
													<td>{{ $row->jenis }}</td>
													<td>
														<div class="form-button-action">
															<button type="button" data-toggle="modal" data-target="#edit{{$row->id}}" title="" class="btn btn-link btn-primary btn-lg" >
																<i class="fa fa-edit"></i>
															</button>
															<a href="/admin/prestasi/delete/{{ $row->id }}">
																<button type="button" class="btn btn-link btn-danger btn-lg">
																	<i class="fa fa-times"></i>
																</button>
															</a>
														</div>
													</td>
												</tr>

												<!-- Modal Ubah Prestasi-->
												<div class="modal fade" id="edit{{$row->id}}" tabindex="-1" role="dialog" aria-hidden="true">
													<div class="modal-dialog" role="document">
														<div class="modal-content">
															<div class="modal-header no-bd">
																<h5 class="modal-title">
																	<span class="fw-mediumbold">
																	Tambah</span> 
																	<span class="fw-light">
																		Data
																	</span>
																</h5>
																<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																	<span aria-hidden="true">&times;</span>
																</button>
															</div>
															<div class="modal-body">
																<p class="small">Buat baris baru menggunakan formulir ini, pastikan Anda mengisi semuanya</p>
																<form action="/admin/prestasi/{{$row->id}}" method="POST" enctype="multipart/form-data">
																	@csrf
																	<div class="row">
																		<div class="col-md-6 pr-0">
																			<div class="form-group form-group-default">
																				<label>Foto</label>
																				<input id="addPosition" type="file" name="foto" value="{{ $row->foto}}" class="form-control" placeholder="fill position">
																			</div>
																		</div>
																		<div class="col-md-6">
																			<div class="form-group form-group-default">
																				<label>Juara</label>
																				<input id="addOffice" type="text" name="juara" value="{{ $row->juara}}" class="form-control" placeholder="fill office">
																			</div>
																		</div>
																		<div class="col-md-6">
																			<div class="form-group form-group-default">
																				<label>Jenis lomba</label>
																				<input id="addOffice" type="text" name="jenis" value="{{ $row->jenis}}" class="form-control" placeholder="fill office">
																			</div>
																		</div>
																	</div>
																	<div class="modal-footer no-bd">
																		<button type="submit" id="addRowButton" class="btn btn-primary" style="background: #04a3b1!important">Add</button>
																		<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
																	</div>
																</form>
															</div>
															
														</div>
													</div>
												</div>
												<!-- Modal Ubah Prestasi end-->
												@endforeach
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			@include('admin/component/footer')
		</div>

	</div>
	<!--   Core JS Files   -->
	<script src="../../assets-admin/js/core/jquery.3.2.1.min.js"></script>
	<script src="../../assets-admin/js/core/popper.min.js"></script>
	<script src="../../assets-admin/js/core/bootstrap.min.js"></script>
	<!-- jQuery UI -->
	<script src="../../assets-admin/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
	<script src="../../assets-admin/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>
	
	<!-- jQuery Scrollbar -->
	<script src="../../assets-admin/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>
	<!-- Datatables -->
	<script src="../../assets-admin/js/plugin/datatables/datatables.min.js"></script>
	<!-- Atlantis JS -->
	<script src="../../assets-admin/js/atlantis.min.js"></script>
	<!-- Atlantis DEMO methods, don't include it in your project! -->
	<script src="../../assets-admin/js/setting-demo2.js"></script>
	<script >
		$(document).ready(function() {
			// Add Row
			$('#add-row').DataTable({
				"pageLength": 5,
			});
		});
	</script>
</body>
</html>