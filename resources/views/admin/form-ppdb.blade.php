<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title>Tables - Atlantis Lite Bootstrap 4 Admin Dashboard</title>
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
										<h4 class="card-title">Formulir PPDB</h4>
										<button class="btn btn-primary btn-round ml-auto" data-toggle="modal" data-target="#addRowModal" style="background: #04a3b1!important;border-color:#04a3b1!important;">
											<i class="fa fa-plus"></i>
											Tambah
										</button>
									</div>
								</div>
								<div class="card-body">
									<div class="table-responsive">
										<table id="add-row" class="display table table-striped table-hover" >
											<thead>
												<tr>
													<th>No</th>
													<th>Nama Siswa</th>
													<th>NISN Siswa</th>
													<th>Tempat dan Tanggal Lahir Siswa</th>
													<th>Jenis Kelamin</th>
													<th>Agama</th>
													<th>Aanak Ke</th>
													<th>Jumlah Saudara Kandung</th>
													<th>Hobi</th>
													<th>Alamat Lengkap</th>
													<th>No Telepon Orang Tua</th>
													<th>No Telepon Calon Peserta Didik</th>
													<th>Memiliki Prestasi</th>
													<th>Memiliki Prestasi di Bidang</th>
													<th>Memiliki Kartu PKH/KIP</th>
													<th>No Kartu PKH/KIP</th>
													<th>Penyakit Yang Pernah Diderita</th>
													<th>Asal Sekolah SD</th>
													<th>No Kartu Keluarga (KK) / Surat Domisili</th>
													<th>Nama Ayah Kandung</th>
													<th>Tempat dan Tanggal Lahir Ayah</th>
													<th>No KTP/NIK Ayah</th>
													<th>Pendidikan Terakhir Ayah</th>
													<th>Pekerjaan Ayah</th>
													<th>Nama Ibu Kandung</th>
													<th>Tempat dan Tanggal Lahir Ibu</th>
													<th>No KTP/NIK Ibu</th>
													<th>Pendidikan Terakhir Ibu</th>
													<th>Pekerjaan Ibu</th>
													<th>Penghasilan Orang Tua</th>
													<th>Nama Wali Siswa</th>
													<th>Alamat Wali</th>
													<th>No Telepon Wali</th>
													<th>Pekerjaan Wali</th>
													<th>Penghasilan Wali</th>
													<th style="width: 10%">Action</th>
												</tr>
											</thead>
											<tbody>
												@foreach ( $formulirs as $row )
												<tr>
													<td>{{ $row->id }}</td>
													<td>{{ $row->nama }}</td>
													<td>{{ $row->nisn }}</td>
													<td>{{ $row->ttl }}</td>
													<td>{{ $row->jenis_kelamin }}</td>
													<td>{{ $row->agama }}</td>
													<td>{{ $row->anak_ke }}</td>
													<td>{{ $row->saudara }}</td>
													<td>{{ $row->hobi }}</td>
													<td>{{ $row->alamat }}</td>
													<td>{{ $row->telpon_ortu }}</td>
													<td>{{ $row->telpon_siswa }}</td>
													<td>{{ $row->pernah_juara }}</td>
													<td>{{ $row->prestasi }}</td>
													<td>{{ $row->punya_kip }}</td>
													<td>{{ $row->no_kip }}</td>
													<td>{{ $row->penyakit }}</td>
													<td>{{ $row->asal_sd }}</td>
													<td>{{ $row->no_kk }}</td>
													<td>{{ $row->nama_ayah }}</td>
													<td>{{ $row->ttl_ayah }}</td>
													<td>{{ $row->nik_ayah }}</td>
													<td>{{ $row->pendidikan_ayah }}</td>
													<td>{{ $row->pekerjaan_ayah }}</td>
													<td>{{ $row->nama_ibu }}</td>
													<td>{{ $row->ttl_ibu }}</td>
													<td>{{ $row->nik_ibu }}</td>
													<td>{{ $row->pendidikan_ibu }}</td>
													<td>{{ $row->pekerjaan_ibu }}</td>
													<td>{{ $row->penghasilan_ortu }}</td>
													<td>{{ $row->nama_wali }}</td>
													<td>{{ $row->alamat_wali }}</td>
													<td>{{ $row->telpon_wali }}</td>
													<td>{{ $row->pekerjaan_wali }}</td>
													<td>{{ $row->penghasilan_wali }}</td>
													<td>
														<div class="form-button-action">
															<button type="button" data-toggle="modal" data-target="#edit{{$row->id}}" title="" class="btn btn-link btn-primary btn-lg" >
																<i class="fa fa-edit"></i>
															</button>
															<a href="/admin/form-ppdb/delete/{{ $row->id }}">
																<button type="button" class="btn btn-link btn-danger btn-lg">
																	<i class="fa fa-times"></i>
																</button>
															</a>
														</div>
													</td>
												</tr>
												<!-- Modal Edit Formulir PPDB -->
												<div class="modal fade" id="edit{{ $row->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
																<h3 class="mb-4 text-center">Formulir Pendaftaran</h3>
																<form action="{{ route('atributs.TambahPpdb') }}" enctype="multipart/form-data">
																	@csrf
																	<div class="row">
																		<div class="form-floating col-md-12 mb-4">
																			<input type="text" name="nama" value="{{ $row->nama}}" class="form-control" id="floatingInput" placeholder="name@example.com">
																			<label for="floatingInput" class="mr-3">Nama Siswa (sesuai ijazah SD)</label>
																		</div>
																		<div class="form-floating col-md-12 mb-4">
																			<input type="text" name="nisn" value="{{ $row->nisn}}" class="form-control" id="floatingPassword" placeholder="Password">
																			<label for="floatingPassword">NISN Siswa</label>
																		</div>
																		<div class="form-floating col-md-12 mb-4">
																			<input type="text" name="ttl" value="{{ $row->ttl}}" class="form-control" id="floatingPassword" placeholder="Password">
																			<label for="floatingPassword">Tempat dan Tanggal Lahir Siswa(sesuai skl/ijazah sd)</label>
																		</div>
																		<div class="form-floating col-md-12 mb-4">
																			<select name="jenis_kelamin" value="{{ $row->jenis_kelamin}}" class="form-select" id="floatingSelectGrid">
																			<option selected>Pilih</option>
																			<option value="1">Laki-laki</option>
																			<option value="2">Perempuan</option>
																			</select>
																			<label for="floatingSelectGrid">Jenis Kelamin</label>
																		</div>
																		<div class="form-floating col-md-12 mb-4">
																			<select name="agama" value="{{ $row->agama}}" class="form-select" id="floatingSelectGrid">
																			<option selected>Pilih</option>
																			<option value="1">Islam</option>
																			<option value="2">Protestan</option>
																			<option value="2">Katolik</option>
																			<option value="2">Hindu</option>
																			<option value="2">Buddha</option>
																			<option value="2">Khonghucu</option>
																			</select>
																			<label for="floatingSelectGrid">Agama</label>
																		</div>
																		<div class="form-floating col-md-12 mb-4">
																			<input type="text" value="{{ $row->anak_ke}}" name="anak_ke" class="form-control" id="floatingPassword" placeholder="Password">
																			<label for="floatingPassword">Anak ke</label>
																		</div>
																		<div class="form-floating col-md-12 mb-4">
																			<input type="text" value="{{ $row->saudara}}" name="saudara" class="form-control" id="floatingPassword" placeholder="Password">
																			<label for="floatingPassword">Jumlah Saudara Kandung</label>
																		</div>
																		<div class="form-floating col-md-12 mb-4">
																			<input type="text" value="{{ $row->hobi}}" name="hobi" class="form-control" id="floatingPassword" placeholder="Password">
																			<label for="floatingPassword">Hobi</label>
																		</div>
																		<div class="form-floating col-md-12 mb-4">
																			<input type="text" value="{{ $row->alamat}}" name="alamat" class="form-control" id="floatingPassword" placeholder="Password">
																			<label for="floatingPassword">Alamat Lengkap</label>
																		</div>
																		<div class="form-floating col-md-12 mb-4">
																			<input type="text" value="{{ $row->telpon_ortu}}" name="telpon_ortu" class="form-control" id="floatingPassword" placeholder="Password">
																			<label for="floatingPassword">No Telepon Orang Tua</label>
																		</div>
																		<div class="form-floating col-md-12 mb-4">
																			<input type="text" value="{{ $row->telpon_siswa}}" name="telpon_siswa" class="form-control" id="floatingPassword" placeholder="Password">
																			<label for="floatingPassword">No Telepon Calon Peserta Didik</label>
																		</div>
																		<div class="form-floating col-md-12 mb-4">
																			<select name="pernah_juara" value="{{ $row->pernah_juara}}" class="form-select" id="floatingSelectGrid">
																			<option selected>Pilih</option>
																			<option value="1">Ya</option>
																			<option value="2">Tidak</option>
																			</select>
																			<label for="floatingSelectGrid">Memiliki Prestasi (pernah juara lomba)</label>
																		</div>
																		<div class="form-floating col-md-12 mb-4">
																			<input name="prestasi" value="{{ $row->prestasi}}" type="text" class="form-control" id="floatingPassword" placeholder="Password">
																			<label for="floatingPassword">Memiliki Prestasi di Bidang</label>
																		</div>
																		<div class="form-floating col-md-12 mb-4">
																			<select name="punya_kip" value="{{ $row->punya_kip}}" class="form-select" id="floatingSelectGrid">
																			<option selected>Pilih</option>
																			<option value="1">Ya</option>
																			<option value="2">Tidak</option>
																			</select>
																			<label for="floatingSelectGrid">Memiliki Kartu PKH/KIP</label>
																		</div>
																		<div class="form-floating col-md-12 mb-4">
																			<input type="text" name="no_kip" value="{{ $row->no_kip}}" class="form-control" id="floatingPassword" placeholder="Password">
																			<label for="floatingPassword">No Kartu PKH/KIP</label>
																		</div>
																		<div class="form-floating col-md-12 mb-4">
																			<input type="text" name="penyakit" value="{{ $row->penyakit}}" class="form-control" id="floatingPassword" placeholder="Password">
																			<label for="floatingPassword">Penyakit Yang Pernah diderita</label>
																		</div>
																		<div class="form-floating col-md-12 mb-4">
																			<input type="text" name="asal_sd" value="{{ $row->asal_sd}}" class="form-control" id="floatingPassword" placeholder="Password">
																			<label for="floatingPassword">Asal Sekolah (SD)</label>
																		</div>
																		<div class="form-floating col-md-12 mb-4">
																			<input type="text" name="no_kk" value="{{ $row->no_kk}}" class="form-control" id="floatingPassword" placeholder="Password">
																			<label for="floatingPassword">No kartu keluarga (KK) / Surat domisili</label>
																		</div>
																		<div class="form-floating col-md-12 mb-4">
																			<input type="text" name="nama_ayah" value="{{ $row->nama_ayah}}" class="form-control" id="floatingPassword" placeholder="Password">
																			<label for="floatingPassword">Nama Ayah Kandung</label>
																		</div>
																		<div class="form-floating col-md-12 mb-4">
																			<input type="text" name="ttl_ayah" value="{{ $row->ttl_ayah}}" class="form-control" id="floatingPassword" placeholder="Password">
																			<label for="floatingPassword">Tempat dan Tanggal Lahir Ayah</label>
																		</div>
																		<div class="form-floating col-md-12 mb-4">
																			<input type="text" name="nik_ayah" value="{{ $row->nik_ayah}}" class="form-control" id="floatingPassword" placeholder="Password">
																			<label for="floatingPassword">No KTP/NIK Ayah</label>
																		</div>
																		<div class="form-floating col-md-12 mb-4">
																			<input type="text" name="pendidikan_ayah" value="{{ $row->pendidikan_ayah}}" class="form-control" id="floatingPassword" placeholder="Password">
																			<label for="floatingPassword">Pendidikan Terakhir Ayah</label>
																		</div>
																		<div class="form-floating col-md-12 mb-4">
																			<input type="text" name="pekerjaan_ayah" value="{{ $row->pekerjaan_ayah}}" class="form-control" id="floatingPassword" placeholder="Password">
																			<label for="floatingPassword">Pekerjaan Ayah</label>
																		</div>
																		<div class="form-floating col-md-12 mb-4">
																			<input type="text" name="nama_ibu" value="{{ $row->nama_ibu}}" class="form-control" id="floatingPassword" placeholder="Password">
																			<label for="floatingPassword">Nama Ibu Kandung</label>
																		</div>
																		<div class="form-floating col-md-12 mb-4">
																			<input type="text" name="ttl_ibu" value="{{ $row->ttl_ibu}}" class="form-control" id="floatingPassword" placeholder="Password">
																			<label for="floatingPassword">Tempat dan Tanggal Lahir Ibu</label>
																		</div>
																		<div class="form-floating col-md-12 mb-4">
																			<input type="text" name="nik_ibu" value="{{ $row->nik_ibu}}" class="form-control" id="floatingPassword" placeholder="Password">
																			<label for="floatingPassword">No KTP/NIK Ibu</label>
																		</div>
																		<div class="form-floating col-md-12 mb-4">
																			<input type="text" name="pendidikan_ibu" value="{{ $row->pendidikan_ibu}}" class="form-control" id="floatingPassword" placeholder="Password">
																			<label for="floatingPassword">Pendidikan Terakhir Ibu</label>
																		</div>
																		<div class="form-floating col-md-12 mb-4">
																			<input type="text" name="pekerjaan_ibu" value="{{ $row->pekerjaan_ibu}}" class="form-control" id="floatingPassword" placeholder="Password">
																			<label for="floatingPassword">Pekerjaan Ibu</label>
																		</div>
																		<div class="form-floating col-md-12 mb-4">
																			<select name="penghasilan_ortu" value="{{ $row->penghasilan_ortu}}" class="form-select" id="floatingSelectGrid">
																			<option selected>Pilih</option>
																			<option value="1">Di bawah Rp 500.000</option>
																			<option value="2">Rp 500.000 s.d Rp 1.000.000</option>
																			<option value="2">Rp 1.000.000 s.d Rp 3.000.000</option>
																			<option value="2">Rp 3.000.000 s.d Rp 5.000.000</option>
																			<option value="2">Di atas Rp 5.000.000</option>
																			</select>
																			<label for="floatingSelectGrid">Penghasilan Orang Tua</label>
																		</div>
																		<div class="form-floating col-md-12 mb-4">
																			<input type="text" name="nama_wali" value="{{ $row->nama_wali}}" class="form-control" id="floatingPassword" placeholder="Password">
																			<label for="floatingPassword">Nama Wali Siswa</label>
																		</div>
																		<div class="form-floating col-md-12 mb-4">
																			<input type="text" name="alamat_wali" value="{{ $row->alamat_wali}}" class="form-control" id="floatingPassword" placeholder="Password">
																			<label for="floatingPassword">Alamat Wali</label>
																		</div>
																		<div class="form-floating col-md-12 mb-4">
																			<input type="text" name="telpon_wali" value="{{ $row->telpon_wali}}" class="form-control" id="floatingPassword" placeholder="Password">
																			<label for="floatingPassword">No Telepon Wali</label>
																		</div>
																		<div class="form-floating col-md-12 mb-4">
																			<input type="text" name="pekerjaan_wali" value="{{ $row->pekerjaan_wali}}" class="form-control" id="floatingPassword" placeholder="Password">
																			<label for="floatingPassword">Pekerjaan Wali</label>
																		</div>
																		<div class="form-floating col-md-12 mb-4">
																			<select name="penghasilan_wali" value="{{ $row->penghasilan_wali}}" class="form-select" id="floatingSelectGrid">
																			<option selected>Pilih</option>
																			<option value="1">Di bawah Rp 500.000</option>
																			<option value="2">Rp 500.000 s.d Rp 1.000.000</option>
																			<option value="2">Rp 1.000.000 s.d Rp 3.000.000</option>
																			<option value="2">Rp 3.000.000 s.d Rp 5.000.000</option>
																			<option value="2">Di atas Rp 5.000.000</option>
																			</select>
																			<label for="floatingSelectGrid">Penghasilan Wali</label>
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
												<!-- Modal Edit Formulir PPDB end-->
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