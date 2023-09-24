<!DOCTYPE html>
<html lang="en">
<head>
	<title>Ekstrakurikuler</title>
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
										<h4 class="card-title">Ekstrakurikuler</h4>
										<button class="btn btn-primary btn-round ml-auto" data-toggle="modal" data-target="#tambah" style="background: #04a3b1!important;border-color:#04a3b1!important;">
											<i class="fa fa-plus"></i>
											Tambah
										</button>
									</div>
								</div>
								<div class="card-body">
									<!-- Modal Tambah Ekstrakurikuler-->
									<div class="modal-detail">
										<div class="modal fade" id="tambah" tabindex="-1" role="dialog" aria-hidden="true">
											<div class="modal-dialog modal-lg" role="document">
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
														<p class="small">Pastikan mengisi semua formulir ini</p>
														<form action="/admin/ekstrakurikuler" method="POST" enctype="multipart/form-data">
															@csrf
															<div class="row">
																<div class="col-sm-12">
																	<div class="form-floating mb-2">
																		<label>Nama Ekstrakurikuler</label>
																		<input name="ekskul" type="text" class="form-control" required>
																	</div>
																</div>
																<div class="col-md-12">
																	<div class="form-floating mb-2">
																		<label>Deksripsi</label>
																		<textarea name="tentang" type="text" class="form-control" rows="5" required></textarea>
																	</div>
																</div>
																<div class="col-md-12">
																	<div class="form-floating mb-2">
																		<label>Foto</label>
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
									<!-- Modal Tambah Ekstrakurikuler end-->

									<div class="table-responsive">
										<table id="add-row" class="display table table-striped table-hover" >
											<thead>
												<tr>
													<th>No</th>
													<th>Nama Ekstrakurikuler</th>
													<th>Deksripsi</th>
													<th>Foto</th>
													<th style="width: 10%">Action</th>
												</tr>
											</thead>
											<tbody>
												<?php $i=1;?>
												@foreach ( $ekstrakurikulers as $row )
												@csrf
												<tr>
													<td>{{$i++}}</td>
													<td>{{ $row->ekskul }}</td>
													<td>{{ $row->tentang }}</td>
													<td>
														<img src="{{ asset('file/Ekstrakurikuler/' . $row->foto) }}" class="img-fluid" width="400px" alt="">
													</td>
													<td>
														<div class="form-button-action">
															<button type="button" data-toggle="modal" data-target="#edit{{$row->id}}" title="" class="btn btn-link btn-primary btn-lg" >
																<i class="fa fa-edit"></i>
															</button>
															<a href="#">
																<button type="button" data-toggle="tooltip" class="btn btn-link btn-danger btn-lg delete" data-id="{{ $row->id }}" data-ekskul="{{ $row->ekskul }}">
																	<i class="fa fa-times"></i>
																</button>
															</a>
														</div>
													</td>
												</tr>

												<!-- Modal Ubah Ekstrakurikuler-->
												<div class="modal-detail">
													<div class="modal fade" id="edit{{$row->id}}" tabindex="-1" role="dialog" aria-hidden="true">
														<div class="modal-dialog modal-lg" role="document">
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
																	<form action="/admin/ekstrakurikuler/{{$row->id}}" method="POST" enctype="multipart/form-data">
																		@csrf
																		<div class="row">
																			<div class="col-sm-12">
																				<div class="form-floating mb-2">
																					<label>Nama Ekstrakurikuler</label>
																					<input name="ekskul" value="{{$row->ekskul}}" type="text" class="form-control" required>
																				</div>
																			</div>
																			<div class="col-md-12">
																				<div class="form-floating mb-2">
																					<label>Deksripsi</label>
																					<textarea name="tentang" type="text" class="form-control" rows="5" required>{{$row->tentang}}</textarea>
																				</div>
																			</div>
																			<div class="col-md-12">
																				<div class="form-floating mb-2">
																					<label >Foto</label>
																					<div class="d-flex">
																						<div class="col-md-4 p-0">
																							<p>Foto sebelumnya :</p>
																						</div>
																						<div class="col-md-8 p-0 mb-2">
																							<a href="{{ asset('file/Ekstrakurikuler/' . $row->foto) }}">
																								<img src="{{ asset('file/Ekstrakurikuler/' . $row->foto) }}" height="100px" alt="">
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
												<!-- Modal Ubah Ekstrakurikuler end-->
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

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
{{-- sweet alert hapus --}}
<script>
	 $('.delete').click(function(){
	var ekstrakurikulerid = $(this).attr('data-id');
	var ekskul = $(this).attr('data-ekskul');
	
	swal({
		title: "Yakin?",
		text: "Kamu akan menghapus data esktrakurikuler "+ekskul+" ",
		icon: "warning",
		buttons: true,
		dangerMode: true,
	})
	.then((willDelete) => {
		if (willDelete) {
			window.location = "/admin/ekstrakurikuler/delete/"+ekstrakurikulerid+" "
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