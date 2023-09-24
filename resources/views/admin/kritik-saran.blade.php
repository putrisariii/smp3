<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title>Kritik dan Saran</title>
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
										<h4 class="card-title">Kritik dan Saran</h4>
									</div>
								</div>
								<div class="card-body">
									<div class="table-responsive">
										<table id="add-row" class="display table table-striped table-hover" >
											<thead>
												<tr class="text-center">
													<th>No</th>
													<th>Nama lengkap</th>
													<th>No telepon</th>
													<th>No Whatsapp</th>
													<th>Email</th>
													<th>Status</th>
													<th>Isi Pesan</th>
													<th style="width: 1%">Action</th>
												</tr>
											</thead>
											<tbody>
												<?php $i=1;?>
												@foreach ( $kritiks as $row )
												@csrf
												<tr>
													<td>{{ $i++ }}</td>
													<td>{{ $row->nama }}</td>
													<td>{{ $row->telpon }}</td>
													<td>{{ $row->whatsapp }}</td>
													<td>{{ $row->email }}</td>
													<td class="text-center">
														@if ($row->status == 'Tampil')
															<span class="badge badge-success">Tampil</span>
														@else
															<span class="badge badge-danger">Tidak Tampil</span>
														@endif
													</td>
													<td>{{ $row->pesan }}</td>
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
												<div class="modal-detail">
													<div class="modal fade" id="edit{{$row->id}}" tabindex="-1" role="dialog" aria-hidden="true">
														<div class="modal-dialog " role="document">
															<div class="modal-content">
																<div class="modal-body">
																	<div class="container">
																		<div class="mb-3">
																			<div class="title-detail">
																				<p>Kode Pengirim</p>
																			</div>
																			<div class="text-detail">
																				<p>
																					<?php
																					$number = $row->id;
																					$formattedNumber = sprintf("%03d", $number);
																					echo $formattedNumber;
																					?>
																				</p>
																			</div>
																		</div>
																		<div class="mb-3">
																			<div class="title-detail">
																				<p>Nama Lengkap</p>
																			</div>
																			<div class="text-detail">
																				<p>{{$row->nama}}</p>
																			</div>
																		</div> 
																		<div class="mb-3">
																			<div class="title-detail">
																				<p>No. Telpon</p>
																			</div>
																			<div class="text-detail">
																				<p>{{$row->telpon}}</p>
																			</div>
																		</div> 
																		<div class="mb-3">
																			<div class="title-detail">
																				<p>No. Whatsapp</p>
																			</div>
																			<div class="text-detail">
																				<p>{{$row->whatsapp}}</p>
																			</div>
																		</div>                                
																		<div class="mb-3">
																			<div class="title-detail">
																				<p>Email</p>
																			</div>
																			<div class="text-detail">
																				<p>{{$row->email}}</p>
																			</div>
																		</div>                                
																		<div class="mb-3">
																			<div class="title-detail">
																				<p>Isi Pesan</p>
																			</div>
																			<div class="text-detail">
																				<p>{{$row->pesan}}</p>
																			</div>
																		</div>

																		<form action="{{ route('StatusKritik', $row->id )}}" method="POST" enctype="multipart/form-data">
																		@csrf
																			<label>Status</label>
																			<div class="col-md-12">
																				<div class="form-check">
																					<div class="row">
																						<div class="col-md-6 col-6">
																							<div class="form-check">
																								<input class="form-check-input" type="radio" name="status" value="Tidak Tampil" id="opsi1"
																								@if ($row->status == 'Tidak Tampil') checked  @endif>
																								<label class="form-check-label ml-2" for="fopsi1">Tidak Tampil</label>
																							</div>
																						</div>
																						<div class="col-md-6 col-6">
																							<div class="form-check">
																								<input class="form-check-input" type="radio" name="status" value="Tampil" id="opsi2"
																								@if ($row->status == 'Tampil') {{ 'checked '}}  @endif>
																								<label class="form-check-label ml-2" for="opsi2">Tampil</label>
																							</div>
																						</div>
																					</div>
																				</div>
																			</div>
																			<div class="modal-footer no-bd">
																				<button type="button" class="btn btn-danger" data-dismiss="modal">Kembali</button>
																				<button type="submit" id="addRowButton" class="btn btn-primary">Simpan</button>
																			</div>
																		</form>                              
																	</div>
																</div>
																
															</div>
														</div>
													</div>
												</div>
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
	var kritikid = $(this).attr('data-id');
	var nama = $(this).attr('data-nama');
	
	swal({
		title: "Yakin?",
		text: "Kamu akan menghapus kritik dan saran dari  "+nama+" ",
		icon: "warning",
		buttons: true,
		dangerMode: true,
	})
	.then((willDelete) => {
		if (willDelete) {
			window.location = "/admin/kritik-saran/delete/"+kritikid+" "
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