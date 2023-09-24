<!DOCTYPE html>
<html lang="en">
<head>
	<title>Pengumuman</title>
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
										<h4 class="card-title">Pengumuman</h4>
										<button class="btn btn-primary btn-round ml-auto" data-toggle="modal" data-target="#tambah" style="background: #04a3b1!important;border-color:#04a3b1!important;">
											<i class="fa fa-plus"></i>
											Tambah
										</button>
									</div>
								</div>
								<div class="card-body">
									<!-- Modal Tambah Pengumuman-->
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
														<form action="/admin/pengumuman" method="POST" enctype="multipart/form-data">
															@csrf
															<div class="row">
																<div class="col-sm-12">
																	<div class="form-floating mb-2">
																		<label>Judul</label>
																		<input name="judul" type="text" class="form-control" required>
																	</div>
																</div>
																<div class="col-md-12">
																	<div class="form-floating mb-2">
																		<label>Narasi</label>
																		<textarea name="narasi" id="tambah_narasi"  type="text" class="form-control" rows="6"></textarea>
																	</div>
																</div>
																<div class="col-md-12">
																	<div class="form-floating mb-2">
																		<label>Dokumen</label>
																		<input name="file" type="file" class="form-control">
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
													<script>
														ClassicEditor
																.create( document.querySelector( '#tambah_narasi' ) )
																.then( tambah_narasi => {
																		console.log( tambah_narasi );
																} )
																.catch( error => {
																		console.error( error );
																} );
													</script>
												</div>
											</div>
										</div>
									</div>
									<!-- Modal Tambah Pengumuman end-->

									<div class="table-responsive">
										<table id="add-row" class="display table table-striped table-hover" >
											<thead>
												<tr>
													<th>No</th>
													<th>Judul pengumuman</th>
													<th>Narasi</th>
													<th>File</th>
													<th>Foto</th>
													<th style="width: 10%">Action</th>
												</tr>
											</thead>
											<tbody>
											<?php $i=1;?>
											@foreach ($pengumumans as $row)
											<tr>
												<td>{{$i++}}</td>
												<td>{{ $row->judul }}</td>
												<td><?php $num_char = 500; $text = $row->narasi; echo substr($text, 0, $num_char) . '...';?></td>
												<td><a href="{{ asset('file/Pengumuman/' . $row->file) }}" >Download</a></td>
												<td>
													<img src="{{ asset('file/Pengumuman/' . $row->foto) }}" width="150" height="100" alt="">
												</td>
												<td>
													<div class="form-button-action">
														<button type="button" data-toggle="modal" data-target="#edit{{$row->id}}" title="" class="btn btn-link btn-primary btn-lg" >
															<i class="fa fa-edit"></i>
														</button>
														<a href="#">
															<button type="button" data-toggle="tooltip" class="btn btn-link btn-danger btn-lg delete" data-id="{{ $row->id }}" data-judul="{{ $row->judul }}">
																<i class="fa fa-times"></i>
															</button>
														</a>
													</div>
												</td>
											</tr>
											<!-- Modal Ubah Pengumuman-->
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
																<form action="/admin/pengumuman/{{$row->id}}" method="POST" enctype="multipart/form-data">
																	@csrf
																	<div class="row">
																		<div class="col-sm-12">
																			<div class="form-floating mb-2">
																				<label>Judul</label>
																				<input name="judul"  value="{{$row->judul}}" type="text" class="form-control">
																			</div>
																		</div>
																		<div class="col-md-12">
																			<div class="form-floating mb-2">
																				<label>Narasi</label>
																				<textarea name="narasi" id="edit_narasi_{{ $row->id }}"  type="text" class="form-control" rows="6">{{$row->narasi}}</textarea>
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
																						<a href="{{ asset('file/Pengumuman/' . $row->foto) }}">
																							<img src="{{ asset('file/Pengumuman/' . $row->foto) }}" height="100px" alt="">
																						</a>
																					</div>
																				</div>
																				<input name="foto" value="{{$row->foto}}" type="file" class="form-control">
																			</div>
																		</div>
																		<div class="col-md-12">
																			<div class="form-floating mb-2">
																				<label >Dokumen</label>
																				<div class="d-flex">
																					<div class="col-md-4 p-0">
																						<p>File sebelumnya :</p>
																					</div>
																					<div class="col-md-8 p-0 mb-2">
																						<b><p>{{$row->file}}</p></b>
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
											<script>
												ClassicEditor
														.create( document.querySelector( '#edit_narasi_' + @json($row->id)) )
														.then( edit_narasi => {
																console.log( edit_narasi );
														} )
														.catch( error => {
																console.error( error );
														} );
											</script>
											<!-- Modal Ubah Pengumuman end-->
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
        var pengumumanid = $(this).attr('data-id');
        var judul = $(this).attr('data-judul');
        
        swal({
            title: "Yakin?",
            text: "Kamu akan menghapus data pengumuman dengan judul "+judul+" ",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
        .then((willDelete) => {
            if (willDelete) {
                window.location = "/admin/pengumuman/delete/"+pengumumanid+" "
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