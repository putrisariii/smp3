<!DOCTYPE html>
<html lang="en">
<head>
	<title>Beranda</title>
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
										<h4 class="card-title">Beranda</h4>
									</div>
								</div>
								<div class="card-body">
									<!-- Modal Tambah Beranda-->
									{{-- <div class="modal-detail">
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
														<form action="/admin/beranda" method="POST" enctype="multipart/form-data">
															@csrf
															<div class="row">
																<div class="col-sm-12">
																	<div class="form-floating mb-2">
																		<label>Foto</label>
																		<input name="foto" type="file" class="form-control" required>
																	</div>
																</div>
																<div class="col-md-12">
																	<div class="form-floating mb-2">
																		<label>Deskripsi Sambutan</label>
																		<textarea name="deskripsi" id="tambah_narasi"  type="text" class="form-control" rows="6"></textarea>
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
										</div>
									</div> --}}
									<!-- Modal Tambah Beranda end-->

									<div class="table-responsive">
										<table id="add-row" class="display table table-striped table-hover" >
											<thead>
												<tr>
													<th>No</th>
													<th>Foto</th>
													<th>Deskripsi</th>
													<th style="width: 10%">Action</th>
												</tr>
											</thead>
											<tbody>
												<?php $i=1;?>
												@foreach ($berandas as $row)
												<tr>
													<td>{{$i++}}</td>
													<td>
														<img src="{{ asset('file/Beranda/' . $row->foto) }}" width="150" height="100" alt="">
													</td>
                                                    <td><?php $num_char = 500; $text = $row->deskripsi; echo substr($text, 0, $num_char) . '...';?></td>
													<td>
														<div class="form-button-action">
															<button type="button" data-toggle="modal" data-target="#edit{{$row->id}}" title="" class="btn btn-link btn-primary btn-lg" >
																<i class="fa fa-edit"></i>
															</button>
														</div>
													</td>
												</tr>

												<!-- Modal Edit beranda-->
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
																	<form action="/admin/beranda/{{$row->id}}" method="POST" enctype="multipart/form-data">
																		@csrf
																		<div class="row">
																			<div class="col-md-12">
																				<div class="form-floating mb-2">
																					<label>Foto</label>
																				</div>
																				<div class="form-floating mb-2">
																					<a href="{{ asset('file/Beranda/' . $row->foto) }}">
																					<img src="{{ asset('file/Beranda/' . $row->foto) }}" height="100px" alt="">
																					</a>
																				</div>
																				<input name="foto" value="{{$row->foto}}"  type="file" class="form-control">
																			</div>
																			<div class="col-md-12">
																				<div class="form-floating mb-2">
																					<label>Deskripsi</label>
																					<textarea name="deskripsi" id="edit_deskripsi_{{ $row->id }}"  type="text" class="form-control" rows="6">{{$row->deskripsi}}</textarea>
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
															.create( document.querySelector( '#edit_deskripsi_' + @json($row->id)) )
															.then( edit_narasi => {
																	console.log( edit_narasi );
															} )
															.catch( error => {
																	console.error( error );
															} );
												</script>
												<!-- Modal Edit beranda end-->
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
	

	


	



   

	



</body>
</html>