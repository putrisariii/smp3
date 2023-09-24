<!DOCTYPE html>
<html lang="en">
<head>
	<title>Pengajar dan Staf</title>
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
										<h4 class="card-title">Pengajar dan Staf</h4>
										<button class="btn btn-primary btn-round ml-auto" data-toggle="modal" data-target="#tambah" style="background: #04a3b1!important;border-color:#04a3b1!important;">
											<i class="fa fa-plus"></i>
											Tambah
										</button>
									</div>
								</div>
								<div class="card-body">
									<!-- Modal Tambah-->
									<div class="modal-detail">
										<div class="modal fade" id="tambah" tabindex="-1" role="dialog" aria-hidden="true">
											<div class="modal-dialog" role="document">
												<div class="modal-content">
													<div class="modal-header no-bd">
														<div class="modal-title">
															<p>Tambah Data</p>
														</div>
														<button type="button" class="close" data-dismiss="modal" aria-label="Close">
															<span aria-hidden="true">&times;</span>
														</button>
													</div>
													<div class="modal-body">
														<p class="small">Buat baris baru menggunakan formulir ini, pastikan Anda mengisi semuanya</p>
														<form action="/admin/pengajar-staf" method="POST" enctype="multipart/form-data">
															@csrf
															<div class="row">
																<div class="col-sm-12">
																	<div class="form-floating mb-2">
																		<label>Nama Guru</label>
																		<input name="nama" type="text" class="form-control" required>
																	</div>
																</div>
																<div class="col-md-12">
																	<div class="form-floating mb-2">
																		<label>Mata Pelajaran</label>
																		<input name="mapel" type="text" class="form-control" required>
																	</div>
																</div>
																<div class="col-md-12">
																	<div class="form-floating mb-2">
																		<label>Foto Pengajar dan Staf</label>
																		<input name="foto" type="file" class="form-control" required>
																	</div>
																</div>
															</div>
															<div class="modal-footer no-bd">
																<button type="button" class="btn btn-danger" data-dismiss="modal" >Batal</button>
																<button type="submit" id="addRowButton" class="btn btn-primary">Tambah</button>
															</div>
														</form>
													</div>
												</div>
											</div>
										</div>
									</div>
									<!-- Modal Tambah End-->

									<div class="table-responsive">
										<table id="add-row" class="display table table-striped table-hover" >
											<thead>
												<tr>
													<th>No</th>
													<th>Nama Guru</th>
													<th>Mata Pelajaran</th>
													<th>Foto</th>
													<th style="width: 10%">Action</th>
												</tr>
											</thead>
											<tbody>
												<?php $i=1;?>
												@foreach ($pengajars as $row)
												<tr>
													<td>{{$i++}}</td>
													<td>{{ $row->nama }}</td>
													<td>{{ $row->mapel }}</td>
													<td>
														<img src="{{ asset('file/Pengajar/' . $row->foto) }}" class="img-fluid" width="100px" alt="">
													</td>
													
													<td>
														<div class="form-button-action">
															<button type="button" data-toggle="modal" data-target="#edit{{$row->id}}" title="" class="btn btn-link btn-primary btn-lg" >
																<i class="fa fa-edit"></i>
															</button>
															<a href="#">
																<button type="button" data-toggle="tooltip" class="btn btn-link btn-danger btn-lg delete" data-id="{{ $row->id }}" data-nama="{{ $row->nama }}">
																	<i class="fa fa-times"></i>
																</button>
															</a>
														</div>
													</td>
												</tr>

												<!-- Modal Edit-->
												<div class="modal-detail">
													<div class="modal fade" id="edit{{$row->id}}" tabindex="-1" role="dialog" aria-hidden="true">
														<div class="modal-dialog" role="document">
															<div class="modal-content">
																<div class="modal-header no-bd">
																	<div class="modal-title">
																		<p>Edit Data</p>
																	</div>
																	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																		<span aria-hidden="true">&times;</span>
																	</button>
																</div>
																<div class="modal-body">
																	<p class="small">Pastikan mengisi semua formulir ini</p>
																	<form action="/admin/pengajar-staf/{{$row->id}}" method="POST" enctype="multipart/form-data">
																		@csrf
																		<div class="row">
																			<div class="col-sm-12">
																				<div class="form-floating mb-2">
																					<label>Nama Guru</label>
																					<input name="nama" value="{{$row->nama}}" type="text" class="form-control" required>
																				</div>
																			</div>
																			<div class="col-md-12">
																				<div class="form-floating mb-2">
																					<label>Mata Pelajaran</label>
																					<input name="mapel" value="{{$row->mapel}}" type="text" class="form-control" required>
																				</div>
																			</div>
																			<div class="col-md-12">
																				<div class="form-floating mb-2">
																					<label >Foto Pengajar dan Staf</label>
																					<div class="d-flex">
																						<div class="col-md-4 p-0">
																							<p>File sebelumnya :</p>
																						</div>
																						<div class="col-md-8 p-0 mb-2">
																							<a href="{{ asset('file/Pengajar/' . $row->foto) }}">
																								<img src="{{ asset('file/Pengajar/' . $row->foto) }}" height="100px" alt="">
																							</a>
																						</div>
																					</div>
																					<input name="foto" value="{{$row->foto}}" type="file" class="form-control">
																				</div>
																			</div>
																		</div>
																		<div class="modal-footer no-bd">
																			<button type="button" class="btn btn-danger" data-dismiss="modal" >Batal</button>
																			<button type="submit" id="addRowButton" class="btn btn-primary">Simpan</button>
																		</div>
																	</form>
																</div>
															</div>
														</div>
													</div>
												</div>
												<!-- Modal Edit end-->
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

	@include('admin/component/footer-js')
	
	<script >
		$(document).ready(function() {
			// Add Row
			$('#add-row').DataTable({
				"pageLength": 5,
			});
		});
	</script>

	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	{{-- sweet alert hapus --}}
	<script>
		$('.delete').click(function(){
		var pengajarstafid = $(this).attr('data-id');
		var nama = $(this).attr('data-nama');
		
		swal({
			title: "Yakin?",
			text: "Kamu akan menghapus data pengajar dan staf dengan nama "+nama+" ",
			icon: "warning",
			buttons: true,
			dangerMode: true,
		})
		.then((willDelete) => {
			if (willDelete) {
				window.location = "/admin/pengajar-staf/delete/"+pengajarstafid+" "
				swal("Data berhasil di hapus", {
				icon: "success",
				});
		} else {
			swal("Data tidak jadi dihapus");
		}
		});
	});
	</script>
</body>
</html>