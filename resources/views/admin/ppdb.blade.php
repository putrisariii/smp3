<!DOCTYPE html>
<html lang="en">
<head>
	<title>Atribut PPDB</title>
	@include('admin/component/head')

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
										<h4 class="card-title">Atribut PPDB</h4>
									</div>
								</div>
								<div class="card-body">
									<!-- Modal Tambah Atribut PPDB-->
									{{-- <div class="modal fade" id="addRowModal" tabindex="-1" role="dialog" aria-hidden="true">
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
													<form action="/admin/ppdb" method="POST" enctype="multipart/form-data">
														@csrf
														<div class="row">
															<div class="col-sm-12">
																<div class="form-group form-group-default">
																	<label>Tanggal Awal</label>
																	<input id="addName" name="tanggal_awal" type="date" class="form-control" placeholder="fill name">
																</div>
																<div class="form-group form-group-default">
																	<label>Tanggal Akhir</label>
																	<input id="addName" name="tanggal_akhir" type="date" class="form-control" placeholder="fill name">
																</div>
															</div>
															<div class="col-md-6 pr-0">
																<div class="form-group form-group-default">
																	<label>Kuota Penerimaan</label>
																	<input id="addPosition" name="kuota" type="text" class="form-control" placeholder="fill position">
																</div>
															</div>
															<div class="col-md-6">
																<div class="form-group form-group-default">
																	<label>Lokasi Pendaftaran</label>
																	<input id="addOffice" name="lokasi" type="text" class="form-control" placeholder="fill office">
																</div>
															</div>
														</div>
														<div class="modal-footer no-bd">
															<button type="button" class="btn btn-danger" data-dismiss="modal" >Batal</button>
															<button type="submit" id="addRowButton"  class="btn btn-primary">Tambah</button>
														</div>
													</form>
												</div>
											</div>
										</div>
									</div> --}}
									<!-- Modal Tambah Atribut PPDB end-->

									<div class="table-responsive">
										<table id="add-row" class="display table table-striped table-hover" >
											<thead>
												<tr>
													<th>No</th>
													<th>Rentang Tanggal</th>
													<th>Kuota Penerimaan</th>
													<th>Lokasi</th>
													<th style="width: 10%">Action</th>
												</tr>
											</thead>
											<tbody>
												@foreach ( $atributs as $row )
												@csrf
												<tr>
													<td>{{ $row->id }}</td>
													<td>{{ $row->tanggal_awal }}
														{{ $row->tanggal_akhir }}
													</td>
													<td>{{ $row->kuota }}</td>
													<td>{{ $row->lokasi }}</td>
													<td>
														<div class="form-button-action">
															<button type="button" data-toggle="modal" data-target="#edit{{$row->id}}" title="" class="btn btn-link btn-primary btn-lg" >
																<i class="fa fa-edit"></i>
															</button>
														</div>
													</td>
												</tr>
												
												<!-- Modal Edit Atribut PPDB end-->
												<div class="modal fade" id="edit{{ $row->id }}" tabindex="-1" role="dialog" aria-hidden="true">
													<div class="modal-dialog" role="document">
														<div class="modal-content">
															<div class="modal-header no-bd">
																<h5 class="modal-title">
																	<span class="fw-mediumbold">
																	Edit</span> 
																	<span class="fw-light">
																		Data
																	</span>
																</h5>
																<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																	<span aria-hidden="true">&times;</span>
																</button>
															</div>
															<div class="modal-body">
																<p class="small">Pastikan Anda mengisi semuanya dengan benar</p>
																<form action="/admin/ppdb/{{ $row->id }}" method="POST" enctype="multipart/form-data">
																	@csrf
																	<div class="row">
																		<div class="col-sm-12">
																			<div class="form-group form-group-default">
																				<label>Tanggal Awal</label>
																				<input id="addName" name="tanggal_awal" value="{{ $row->tanggal_awal}}" type="date" class="form-control" placeholder="fill name">
																			</div>
																			<div class="form-group form-group-default">
																				<label>Tanggal Akhir</label>
																				<input id="addName" name="tanggal_akhir" value="{{ $row->tanggal_akhir}}" type="date" class="form-control" placeholder="fill name">
																			</div>
																		</div>
																		<div class="col-md-6 pr-0">
																			<div class="form-group form-group-default">
																				<label>Kuota Penerimaan</label>
																				<input id="addPosition" name="kuota" value="{{ $row->kuota}}" type="text" class="form-control" placeholder="fill position">
																			</div>
																		</div>
																		<div class="col-md-6">
																			<div class="form-group form-group-default">
																				<label>Lokasi Pendaftaran</label>
																				<input id="addOffice" name="lokasi" value="{{ $row->lokasi}}" type="text" class="form-control" placeholder="fill office">
																			</div>
																		</div>
																	</div>
																	<div class="modal-footer no-bd">
																		<button type="button" class="btn btn-danger" data-dismiss="modal" >Batal</button>
																		<button type="submit" id="addRowButton"  class="btn btn-primary">Simpan</button>
																	</div>
																</form>
															</div>
														</div>
													</div>
												</div>
												<!-- Modal Edit Atribut PPDB end-->
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