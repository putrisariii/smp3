<!DOCTYPE html>
<html lang="en">
<head>
	<title>Formulir PPDB</title>
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
										<h4 class="card-title">Formulir PPDB</h4>
										{{-- <button class="btn btn-primary btn-round ml-auto" data-toggle="modal" data-target="#addRowModal" style="background: #04a3b1!important;border-color:#04a3b1!important;">
											<i class="fa fa-plus"></i>
											Tambah
										</button> --}}
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
													<th>Jenis Kelamin</th>
													<th>Agama</th>
													<th>Alamat Lengkap</th>
													<th>Asal Sekolah SD</th>
													<th style="width: 10%">Action</th>
												</tr>
											</thead>
											<tbody>
												@foreach ( $formulirs as $row )
												<tr>
													<td>{{ $row->id }}</td>
													<td>{{ $row->nama }}</td>
													<td>{{ $row->nisn }}</td>
													<td>{{ $row->jenis_kelamin }}</td>
													<td>{{ $row->agama }}</td>
													<td>{{ $row->alamat }}</td>
													<td>{{ $row->asal_sd }}</td>
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
															<button type="button" data-toggle="modal" data-target="#detail{{$row->id}}" title="" class="btn btn-link btn-primary btn-lg" >
																<i class="fa fa-info"></i>
															</button>
														</div>
													</td>
												</tr>
												

												<!-- Modal Edit -->
												<div class="modal fade" id="edit{{$row->id}}" tabindex="-1" role="dialog" aria-labelledby="edit{{$row->id}}Label" aria-hidden="true">
													<div class="modal-dialog modal-lg" role="document">
														<div class="modal-content">
															<div class="modal-header">
																<h5 class="modal-title" id="edit{{$row->id}}Label">Edit Data Siswa</h5>
																<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																	<span aria-hidden="true">&times;</span>
																</button>
															</div>
															<div class="modal-body">
																<form action="/form-ppdb/{{ $row->id }}" method="POST" enctype="multipart/form-data">
																	@csrf
                                                                    <ul class="nav nav-tabs" id="myTab" role="tablist">
																		<li class="nav-item">
																			<a class="nav-link active" id="data-diri-tab" data-toggle="tab" href="#data-diri" role="tab" aria-controls="data-diri" aria-selected="true">Data Diri</a>
																		</li>
																		<li class="nav-item">
																			<a class="nav-link" id="data-orang-tua-tab" data-toggle="tab" href="#data-orang-tua" role="tab" aria-controls="data-orang-tua" aria-selected="false">Data Orang Tua</a>
																		</li>
																		<li class="nav-item">
																			<a class="nav-link" id="data-wali-tab" data-toggle="tab" href="#data-wali" role="tab" aria-controls="data-wali" aria-selected="false">Data Wali</a>
																		</li>
																	</ul>
																	<div class="tab-content" id="myTabContent">
																		<div class="tab-pane fade show active" id="data-diri" role="tabpanel" aria-labelledby="data-diri-tab">
																			<h2>Data Diri</h2>
																			<div class="row">
																					<div class="form-group col-md-6 ">
																						<label for="nama">Nama</label>
																						<input type="text" class="form-control" id="nama" name="nama" value="{{ $row->nama }}">
																					</div>
																					<div class="form-group col-md-6 ">
																						<label for="nisn">NISN</label>
																						<input type="" class="form-control" id="nisn" name="nisn" value="{{ $row->nisn }}">
																					</div>
																					<div class="form-group col-md-6 ">
																						<label for="ttl">Tempat Tanggal Lahir</label>
																						<input type="text" class="form-control" id="ttl" name="ttl" value="{{ $row->ttl }}">
																					</div>
																					<div class="form-group col-md-6">
																						<label for="jenis_kelamin">Jenis Kelamin</label>
																						<select class="form-control" id="jenis_kelamin" name="jenis_kelamin" value="{{ $row->jenis_kelamin }}">
																							<option value="" disabled selected>--Pilih--</option>
																							<option value="Laki-laki" {{ (old('jenis_kelamin') ?? $row->jenis_kelamin) == 'Laki-laki' ? 'selected' : '' }}>
																								Laki-laki
																							</option>
																							<option value="Perempuan" {{ (old('jenis_kelamin') ?? $row->jenis_kelamin) == 'Perempuan' ? 'selected' : '' }}>
																								Perempuan
																							</option>
																						</select>
																					</div>
																					<div class="form-group col-md-6">
																						<label for="agama">Agama</label>
																						<select class="form-control" id="agama" name="agama" value="{{ $row->agama }}">
																							<option value="" disabled selected>--Pilih--</option>
																							<option value="Islam" {{ (old('agama') ?? $row->agama) == 'Islam' ? 'selected' : '' }}>
																								Islam
																							</option>
																							<option value="Protestan" {{ (old('agama') ?? $row->agama) == 'Protestan' ? 'selected' : '' }}>
																								Protestan
																							</option>
																							<option value="Katolik" {{ (old('agama') ?? $row->agama) == 'Katolik' ? 'selected' : '' }}>
																								Katolik
																							</option>
																							<option value="Hindu" {{ (old('agama') ?? $row->agama) == 'Hindu' ? 'selected' : '' }}>
																								Hindu
																							</option>
																							<option value="Buddha" {{ (old('agama') ?? $row->agama) == 'Buddha' ? 'selected' : '' }}>
																								Buddha
																							</option>
																							<option value="Khonghucu" {{ (old('agama') ?? $row->agama) == 'Khonghucu' ? 'selected' : '' }}>
																								Khonghucu
																							</option>
																						</select>
																					</div>
																					<div class="form-group col-md-6">
																						<label for="anak_ke">Anak Ke</label>
																						<input type="number" class="form-control" id="anak_ke" name="anak_ke" value="{{ $row->anak_ke }}">
																					</div>
																					<div class="form-group col-md-6">
																						<label for="saudara">Jumlah Saudara Kandung</label>
																						<input type="number" class="form-control" id="saudara" name="saudara" value="{{ $row->saudara }}">
																					</div>
																					<div class="form-group col-md-6">
																						<label for="hobi">Hobi</label>
																						<input type="text" class="form-control" id="hobi" name="hobi" value="{{ $row->hobi }}">
																					</div>
																					<div class="form-group col-md-6">
																						<label for="alamat">Alamat Lengkap</label>
																						<input type="text" class="form-control" id="alamat" name="alamat" value="{{ $row->alamat }}">
																					</div>
																					<div class="form-group col-md-6">
																						<label for="telpon_ortu">No Telpon Orang Tua</label>
																						<input type="number" class="form-control" id="telpon_ortu" name="telpon_ortu" value="{{ $row->telpon_ortu }}">
																					</div>
																					<div class="form-group col-md-6">
																						<label for="telpon_siswa">No Telpon Calon Peserta Didik</label>
																						<input type="number" class="form-control" id="telpon_siswa" name="telpon_siswa" value="{{ $row->telpon_siswa }}">
																					</div>
																					<div class="form-group col-md-6">
																						<label for="prestasi-{{$row->id}}">Memiliki Prestasi (pernah juara lomba)</label>
																						<select name="pernah_juara" id="prestasi-{{$row->id}}"  class="form-control" name="pernah_juara" value="{{ $row->pernah_juara }}" >
																						<option value="" disabled selected>--Pilih--</option>
																						<option value="ya" {{ (old('pernah_juara') ?? $row->pernah_juara) == 'ya' ? 'selected' : '' }}>
																							Ya
																						</option>
																						<option value="tidak" {{ (old('pernah_juara') ?? $row->pernah_juara) == 'tidak' ? 'selected' : '' }}>
																							Tidak
																						</option>
																						</select>
																					</div>
																					<div class="form-group col-md-6" id="val-prestasi-{{$row->id}}" style="display: {{$row->pernah_juara == "ya" ? "block" : "none"}}">
																						<label for="">Memiliki Prestasi di Bidang</label>
																						<input name="prestasi" type="text" class="form-control" id="prestasi-{{$row->id}}" name="prestasi" value="{{ $row->prestasi }}" >
																					</div>
																					<div class="form-group col-md-6">
																						<label for="kip-{{$row->id}}">Memiliki Kartu PKH/KIP</label>
																						<select name="punya_kip" id="kip-{{$row->id}}"  class="form-control" name="punya_kip" value="{{ $row->punya_kip }}" >
																						<option value="" disabled selected>--Pilih--</option>
																						<option value="ya" {{ (old('punya_kip') ?? $row->punya_kip) == 'ya' ? 'selected' : '' }}>
																							Ya
																						</option>
																						<option value="tidak" {{ (old('punya_kip') ?? $row->punya_kip) == 'tidak' ? 'selected' : '' }}>
																							Tidak
																						</option>
																						</select>
																					</div>
																					<div class="form-group col-md-6" id="val-kip-{{$row->id}}" style="display: {{$row->punya_kip == "ya" ? "block" : "none"}}">
																						<label for="">No Kartu PKH/KIP</label>
																						<input name="no_kip" type="text" class="form-control" id="no_kip-{{$row->id}}" name="no_kip" value="{{ $row->no_kip }}" >
																					</div>
																					<div class="form-group col-md-6">
																						<label for="">Penyakit Yang Pernah Diderita</label>
																						<input name="penyakit" type="text" class="form-control" id="penyakit" name="penyakit" value="{{ $row->penyakit }}" >
																					</div>
																					
																					<div class="form-group col-md-6">
																						<label for="">Pekerjaan Wali</label>
																						<input name="pekerjaan_wali" type="text" class="form-control" id="pekerjaan_wali" name="pekerjaan_wali" value="{{ $row->pekerjaan_wali }}" >
																					</div>
																					<div class="form-group col-md-6">
																						<label for="penghasilan_wali">Penghasilan Orang Tua</label>
																						<select class="form-control" id="penghasilan_wali" name="penghasilan_wali" value="{{ $row->penghasilan_wali }}">
																							<option value="" disabled selected>--Pilih--</option>
																							<option value="Di bawah Rp 500.000" {{ (old('penghasilan_ortu') ?? $row->penghasilan_ortu) == 'Di bawah Rp 500.000' ? 'selected' : '' }}>
																								Di bawah Rp 500.000
																							</option>
																							<option value="Rp 500.000 s.d Rp 1.000.000" {{ (old('penghasilan_ortu') ?? $row->penghasilan_ortu) == 'Rp 500.000 s.d Rp 1.000.000' ? 'selected' : '' }}>
																								Rp 500.000 s.d Rp 1.000.000
																							</option>
																							<option value="Rp 1.000.000 s.d Rp 3.000.000" {{ (old('penghasilan_ortu') ?? $row->penghasilan_ortu) == 'Rp 1.000.000 s.d Rp 3.000.000' ? 'selected' : '' }}>
																								Rp 1.000.000 s.d Rp 3.000.000
																							</option>
																							<option value="Rp 3.000.000 s.d Rp 5.000.000" {{ (old('penghasilan_ortu') ?? $row->penghasilan_ortu) == 'Rp 3.000.000 s.d Rp 5.000.000' ? 'selected' : '' }}>
																								Rp 3.000.000 s.d Rp 5.000.000
																							</option>
																							<option value="Di atas Rp 5.000.000" {{ (old('penghasilan_ortu') ?? $row->penghasilan_ortu) == 'Di atas Rp 5.000.000' ? 'selected' : '' }}>
																								Di atas Rp 5.000.000
																							</option>
																						</select>
																					</div>
																					<div class="form-group col-md-6">
																						<label for="">Asal Sekolah (SD)</label>
																						<input name="asal_sd" type="text" class="form-control" id="asal_sd" name="asal_sd" value="{{ $row->asal_sd }}" >
																					</div>
																					<div class="form-group col-md-6">
																						<label for="">No Kartu Keluarga / Srat Domisili</label>
																						<input name="no_kk" type="text" class="form-control" id="no_kk" name="no_kk" value="{{ $row->no_kk }}" >
																					</div>
																			</div>
																		</div>
																		<div class="tab-pane fade" id="data-orang-tua" role="tabpanel" aria-labelledby="data-orang-tua-tab">
																			<h2>Data Orang Tua</h2>
																			<div class="row">
																				<div class="form-group col-md-6">
																					<label for="">Nama Ayah Kandung</label>
																					<input name="nama_ayah" type="text" class="form-control" id="nama_ayah" name="nama_ayah" value="{{ $row->nama_ayah }}" >
																				</div>
																				<div class="form-group col-md-6">
																					<label for="">Tempat dan Tanggal Lahir Ayah</label>
																					<input name="ttl_ayah" type="text" class="form-control" id="ttl_ayah" name="ttl_ayah" value="{{ $row->ttl_ayah }}" >
																				</div>
																				<div class="form-group col-md-6">
																					<label for="">No KTP / NIK Ayah</label>
																					<input name="nik_ayah" type="number" class="form-control" id="nik_ayah" name="nik_ayah" value="{{ $row->nik_ayah }}" >
																				</div>
																				<div class="form-group col-md-6">
																					<label for="">Pendidikan Terakhir Ayah</label>
																					<input name="pendidikan_ayah" type="text" class="form-control" id="pendidikan_ayah" name="pendidikan_ayah" value="{{ $row->pendidikan_ayah }}" >
																				</div>
																				<div class="form-group col-md-6">
																					<label for="">Pekerjaan Ayah</label>
																					<input name="pekerjaan_ayah" type="text" class="form-control" id="pekerjaan_ayah" name="pekerjaan_ayah" value="{{ $row->pekerjaan_ayah }}" >
																				</div>
																				<div class="form-group col-md-6">
																					<label for="">Nama Ibu Kandung</label>
																					<input name="nama_ibu" type="text" class="form-control" id="nama_ibu" name="nama_ibu" value="{{ $row->nama_ibu }}" >
																				</div>
																				<div class="form-group col-md-6">
																					<label for="">Tempat dan Tanggal Lahir Ibu</label>
																					<input name="ttl_ibu" type="text" class="form-control" id="ttl_ibu" name="ttl_ibu" value="{{ $row->ttl_ibu }}" >
																				</div>
																				<div class="form-group col-md-6">
																					<label for="">No KTP / NIK Ibu</label>
																					<input name="nik_ibu" type="number" class="form-control" id="nik_ibu" name="nik_ibu" value="{{ $row->nik_ibu }}" >
																				</div>
																				<div class="form-group col-md-6">
																					<label for="">Pendidikan Terakhir Ibu</label>
																					<input name="pendidikan_ibu" type="text" class="form-control" id="pendidikan_ibu" name="pendidikan_ibu" value="{{ $row->pendidikan_ibu }}" >
																				</div>
																				<div class="form-group col-md-6">
																					<label for="">Pekerjaan Ibu</label>
																					<input name="pekerjaan_ibu" type="text" class="form-control" id="pekerjaan_ibu" name="pekerjaan_ibu" value="{{ $row->pekerjaan_ibu }}" >
																				</div>
																				<div class="form-group col-md-6">
																					<label for="penghasilan_ortu">Penghasilan Orang Tua</label>
																					<select class="form-control" id="penghasilan_ortu" name="penghasilan_ortu" value="{{ $row->penghasilan_ortu }}">
																						<option value="" disabled selected>--Pilih--</option>
																						<option value="Di bawah Rp 500.000" {{ (old('penghasilan_ortu') ?? $row->penghasilan_ortu) == 'Di bawah Rp 500.000' ? 'selected' : '' }}>
																							Di bawah Rp 500.000
																						</option>
																						<option value="Rp 500.000 s.d Rp 1.000.000" {{ (old('penghasilan_ortu') ?? $row->penghasilan_ortu) == 'Rp 500.000 s.d Rp 1.000.000' ? 'selected' : '' }}>
																							Rp 500.000 s.d Rp 1.000.000
																						</option>
																						<option value="Rp 1.000.000 s.d Rp 3.000.000" {{ (old('penghasilan_ortu') ?? $row->penghasilan_ortu) == 'Rp 1.000.000 s.d Rp 3.000.000' ? 'selected' : '' }}>
																							Rp 1.000.000 s.d Rp 3.000.000
																						</option>
																						<option value="Rp 3.000.000 s.d Rp 5.000.000" {{ (old('penghasilan_ortu') ?? $row->penghasilan_ortu) == 'Rp 3.000.000 s.d Rp 5.000.000' ? 'selected' : '' }}>
																							Rp 3.000.000 s.d Rp 5.000.000
																						</option>
																						<option value="Di atas Rp 5.000.000" {{ (old('penghasilan_ortu') ?? $row->penghasilan_ortu) == 'Di atas Rp 5.000.000' ? 'selected' : '' }}>
																							Di atas Rp 5.000.000
																						</option>
																					</select>
																				</div>
																			</div>
																		</div>
																		<div class="tab-pane fade" id="data-wali" role="tabpanel" aria-labelledby="data-wali-tab">
																			<h2>Data Wali</h2>
																				<div class="form-group ">
																					<label for="">Nama Wali Siswa</label>
																					<input name="nama_wali" type="text" class="form-control" id="nama_wali" name="nama_wali" value="{{ $row->nama_wali }}" >
																				</div>
																				<div class="form-group">
																					<label for="">Alamat Wali</label>
																					<input name="alamat_wali" type="text" class="form-control" id="alamat_wali" name="alamat_wali" value="{{ $row->alamat_wali }}" >
																				</div>
																				<div class="form-group">
																					<label for="">No Telepon Wali</label>
																					<input name="telpon_wali" type="number" class="form-control" id="telpon_wali" name="telpon_wali" value="{{ $row->telpon_wali }}" >
																				</div>
																				<div class="form-group">
																					<label for="">Pekerjaan Wali</label>
																					<input name="pekerjaan_wali" type="text" class="form-control" id="pekerjaan_wali" name="pekerjaan_wali" value="{{ $row->pekerjaan_wali }}" >
																				</div>
																				<div class="form-group">
																					<label for="penghasilan_wali">Penghasilan Wali</label>
																					<select class="form-control" id="penghasilan_wali" name="penghasilan_wali" value="{{ $row->penghasilan_wali }}">
																						<option value="" disabled selected>--Pilih--</option>
																						<option value="Di bawah Rp 500.000" {{ (old('penghasilan_wali') ?? $row->penghasilan_wali) == 'Di bawah Rp 500.000' ? 'selected' : '' }}>
																							Di bawah Rp 500.000
																						</option>
																						<option value="Rp 500.000 s.d Rp 1.000.000" {{ (old('penghasilan_wali') ?? $row->penghasilan_wali) == 'Rp 500.000 s.d Rp 1.000.000' ? 'selected' : '' }}>
																							Rp 500.000 s.d Rp 1.000.000
																						</option>
																						<option value="Rp 1.000.000 s.d Rp 3.000.000" {{ (old('penghasilan_wali') ?? $row->penghasilan_wali) == 'Rp 1.000.000 s.d Rp 3.000.000' ? 'selected' : '' }}>
																							Rp 1.000.000 s.d Rp 3.000.000
																						</option>
																						<option value="Rp 3.000.000 s.d Rp 5.000.000" {{ (old('penghasilan_wali') ?? $row->penghasilan_wali) == 'Rp 3.000.000 s.d Rp 5.000.000' ? 'selected' : '' }}>
																							Rp 3.000.000 s.d Rp 5.000.000
																						</option>
																						<option value="Di atas Rp 5.000.000" {{ (old('penghasilan_wali') ?? $row->penghasilan_wali) == 'Di atas Rp 5.000.000' ? 'selected' : '' }}>
																							Di atas Rp 5.000.000
																						</option>
																					</select>
																				</div>
																		</div>
																	</div>
																</div>
															<div class="modal-footer">
																<button type="submit" class="btn btn-primary">Simpan Perubahan</button>
																<button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
															</div>
														</form>
														</div>
													</div>
												</div>

												<!-- Modal Detail Formulir PPDB-->
											
													<div class="modal fade" id="detail{{$row->id}}" tabindex="-1" role="dialog" aria-labelledby="detail{{$row->id}}Label" aria-hidden="true">
														<div class="modal-dialog modal-lg" role="document">
															<div class="modal-content">
																<div class="modal-header no-bd">
																	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																		<span aria-hidden="true">&times;</span>
																	</button>
																</div>
																<div class="modal-body">
																	<ul class="nav nav-tabs" id="myTab" role="tablist">
																		<li class="nav-item">
																			<a class="nav-link active" id="data-dirii-tab" data-toggle="tab" href="#data-dirii" role="tab" aria-controls="data-dirii" aria-selected="true">Data Diri</a>
																		</li>
																		<li class="nav-item">
																			<a class="nav-link" id="data-orang-tuaa-tab" data-toggle="tab" href="#data-orang-tuaa" role="tab" aria-controls="data-orang-tuaa" aria-selected="false">Data Orang Tua</a>
																		</li>
																		<li class="nav-item">
																			<a class="nav-link" id="data-walii-tab" data-toggle="tab" href="#data-walii" role="tab" aria-controls="data-walii" aria-selected="false">Data Wali</a>
																		</li>
																	</ul>
																	<div class="tab-content" id="myTabContent">
																		<div class="tab-pane fade show active" id="data-dirii" role="tabpanel" aria-labelledby="data-dirii-tab">
																			<h2>Data Diri</h2>
																			<div class="row">
																				<div class="col-sm-6">
																					<div class="form-floating mb-2">
																						<div class="row align-items-center">
																							<div class="col-md-4">
																								<label>Nama Siswa</label>
																							</div>
																							<div class="col-md-8">
																								<input value="{{$row->nama}}" type="text" class="form-control" readonly>
																							</div>
																						</div>
																					</div>
																					<div class="form-floating mb-2">
																						<div class="row align-items-center">
																							<div class="col-md-4">
																								<label>NISN</label>
																							</div>
																							<div class="col-md-8">
																								<input value="{{ $row->nisn }}" type="text" class="form-control" readonly>
																							</div>
																						</div>
																					</div>
																					<div class="form-floating mb-2">
																						<div class="row align-items-center">
																							<div class="col-md-4">
																								<label>Tempat & Tanggal Lahir</label>
																							</div>
																							<div class="col-md-8">
																								<input value="{{ $row->ttl }}" type="text" class="form-control" readonly>
																							</div>
																						</div>
																					</div>
																					<div class="form-floating mb-2">
																						<div class="row align-items-center">
																							<div class="col-md-4">
																								<label>Jenis Kelamin</label>
																							</div>
																							<div class="col-md-8">
																								<input value="{{ $row->jenis_kelamin }}" type="text" class="form-control" readonly>
																							</div>
																						</div>
																					</div>
																					<div class="form-floating mb-2">
																						<div class="row align-items-center">
																							<div class="col-md-4">
																								<label>Agama</label>
																							</div>
																							<div class="col-md-8">
																								<input value="{{ $row->agama }}" type="text" class="form-control" readonly>
																							</div>
																						</div>
																					</div>
																					<div class="form-floating mb-2">
																						<div class="row align-items-center">
																							<div class="col-md-4">
																								<label>Saudara Ke</label>
																							</div>
																							<div class="col-md-8">
																								<input value="{{ $row->anak_ke }}" type="text" class="form-control" readonly>
																							</div>
																						</div>
																					</div>
																					<div class="form-floating mb-2">
																						<div class="row align-items-center">
																							<div class="col-md-4">
																								<label>Jumlah Saudara Kandung</label>
																							</div>
																							<div class="col-md-8">
																								<input value="{{ $row->saudara }}" type="text" class="form-control" readonly>
																							</div>
																						</div>
																					</div>
																					<div class="form-floating mb-2">
																						<div class="row align-items-center">
																							<div class="col-md-4">
																								<label>Alamat Lengkap</label>
																							</div>
																							<div class="col-md-8">
																								<input value="{{ $row->alamat }}" type="text" class="form-control" readonly>
																							</div>
																						</div>
																					</div>
																					<div class="form-floating mb-2">
																						<div class="row align-items-center">
																							<div class="col-md-4">
																								<label>Asal Sekolah</label>
																							</div>
																							<div class="col-md-8">
																								<input value="{{ $row->asal_sd }}" type="text" class="form-control" readonly>
																							</div>
																						</div>
																					</div>
																					<div class="form-floating mb-2">
																						<div class="row align-items-center">
																							<div class="col-md-4">
																								<label>Hobi</label>
																							</div>
																							<div class="col-md-8">
																								<input value="{{ $row->hobi }}" type="text" class="form-control" readonly>
																							</div>
																						</div>
																					</div>
																					<div class="form-floating mb-2">
																						<div class="row align-items-center">
																							<div class="col-md-4">
																								<label>No. Telepon</label>
																							</div>
																							<div class="col-md-8">
																								<input value="{{ $row->telpon_siswa }}" type="text" class="form-control" readonly>
																							</div>
																						</div>
																					</div>
																					<div class="form-floating mb-2">
																						<div class="row align-items-center">
																							<div class="col-md-4">
																								<label>No. Kartu Keluarga</label>
																							</div>
																							<div class="col-md-8">
																								<input value="{{ $row->no_kk}}" type="text" class="form-control" readonly>
																							</div>
																						</div>
																					</div>
																				</div>

																				<div class="col-sm-6">
																					<div class="form-floating mb-2">
																						<div class="row align-items-center">
																							<div class="col-md-4">
																								<label>Riwayat Penyakit</label>
																							</div>
																							<div class="col-md-8">
																								<input value="{{ $row->penyakit }}" type="text" class="form-control" readonly>
																							</div>
																						</div>
																					</div>
																					<div class="form-floating mb-2">
																						<div class="row align-items-center">
																							<div class="col-md-4">
																								<label>Pernah Juara</label>
																							</div>
																							<div class="col-md-8">
																								<input value="{{ $row->pernah_juara }}" type="text" class="form-control" readonly>
																							</div>
																						</div>
																					</div>
																					<div class="form-floating mb-2">
																						<div class="row align-items-center">
																							<div class="col-md-4">
																								<label>Bidang Prestasi</label>
																							</div>
																							<div class="col-md-8">
																								<input value="{{ $row->prestasi }}" type="text" class="form-control" readonly>
																							</div>
																						</div>
																					</div>
																					<div class="form-floating mb-2">
																						<div class="row align-items-center">
																							<div class="col-md-4">
																								<label>Kartu PKH/KIP</label>
																							</div>
																							<div class="col-md-8">
																								<input value="{{ $row->punya_kip }}" type="text" class="form-control" readonly>
																							</div>
																						</div>
																					</div>
																					<div class="form-floating mb-2">
																						<div class="row align-items-center">
																							<div class="col-md-4">
																								<label>No. Kartu PKH/KIP</label>
																							</div>
																							<div class="col-md-8">
																								<input value="{{ $row->no_kip }}" type="text" class="form-control" readonly>
																							</div>
																						</div>
																					</div>
																					<div class="form-floating mb-2">
																						<div class="row align-items-center">
																							<div class="col-md-4">
																								<label>No. Kartu Keluarga</label>
																							</div>
																							<div class="col-md-8">
																								<input value="{{ $row->no_kk}}" type="text" class="form-control" readonly>
																							</div>
																						</div>
																					</div>
																				</div>
																			</div>
																		</div>
																		<div class="tab-pane fade" id="data-orang-tuaa" role="tabpanel" aria-labelledby="data-orang-tuaa-tab">
																			<h2>Data Orang Tua</h2>
																			<div class="row">
																				<div class="col-sm-6 ">
																					
																				</div>	
																			</div>
																			
																			<div class="row">
																				<div class="col-sm-6 ">
																					<h4>Ayah Kandung</h4>
																					<div class="form-floating mb-2">
																						<div class="row align-items-center">
																							<div class="col-md-4">
																								<label>Nama</label>
																							</div>
																							<div class="col-md-8">
																								<input value="{{ $row->nama_ayah }}" type="text" class="form-control" readonly>
																							</div>
																						</div>
																					</div>
																					<div class="form-floating mb-2">
																						<div class="row align-items-center">
																							<div class="col-md-4">
																								<label>Tempat & Tanggal Lahir</label>
																							</div>
																							<div class="col-md-8">
																								<input value="{{ $row->ttl_ayah }}" type="text" class="form-control" readonly>
																							</div>
																						</div>
																					</div>
																					<div class="form-floating mb-2">
																						<div class="row align-items-center">
																							<div class="col-md-4">
																								<label>No. KTP</label>
																							</div>
																							<div class="col-md-8">
																								<input value="{{ $row->nik_ayah }}" type="text" class="form-control" readonly>
																							</div>
																						</div>
																					</div>
																					<div class="form-floating mb-2">
																						<div class="row align-items-center">
																							<div class="col-md-4">
																								<label>Pendidikan Terakhir</label>
																							</div>
																							<div class="col-md-8">
																								<input value="{{ $row->pendidikan_ayah }}" type="text" class="form-control" readonly>
																							</div>
																						</div>
																					</div>
																					<div class="form-floating mb-2">
																						<div class="row align-items-center">
																							<div class="col-md-4">
																								<label>Pekerjaan</label>
																							</div>
																							<div class="col-md-8">
																								<input value="{{ $row->pekerjaan_ayah }}" type="text" class="form-control" readonly>
																							</div>
																						</div>
																					</div>
																				</div>

																				<div class="col-sm-6 ">
																					<h4>Ibu Kandung</h4>
																					<div class="form-floating mb-2">
																						<div class="row align-items-center">
																							<div class="col-md-4">
																								<label>Nama</label>
																							</div>
																							<div class="col-md-8">
																								<input value="{{ $row->nama_ibu }}" type="text" class="form-control" readonly>
																							</div>
																						</div>
																					</div>
																					<div class="form-floating mb-2">
																						<div class="row align-items-center">
																							<div class="col-md-4">
																								<label>Tempat & Tanggal Lahir</label>
																							</div>
																							<div class="col-md-8">
																								<input value="{{ $row->ttl_ibu }}" type="text" class="form-control" readonly>
																							</div>
																						</div>
																					</div>
																					<div class="form-floating mb-2">
																						<div class="row align-items-center">
																							<div class="col-md-4">
																								<label>No. KTP</label>
																							</div>
																							<div class="col-md-8">
																								<input value="{{ $row->nik_ibu }}" type="text" class="form-control" readonly>
																							</div>
																						</div>
																					</div>
																					<div class="form-floating mb-2">
																						<div class="row align-items-center">
																							<div class="col-md-4">
																								<label>Pendidikan Terakhir Ibu</label>
																							</div>
																							<div class="col-md-8">
																								<input value="{{ $row->pendidikan_ibu }}" type="text" class="form-control" readonly>
																							</div>
																						</div>
																					</div>
																					<div class="form-floating mb-2">
																						<div class="row align-items-center">
																							<div class="col-md-4">
																								<label>Pekerjaan Ibu</label>
																							</div>
																							<div class="col-md-8">
																								<input value="{{ $row->pekerjaan_ibu }}" type="text" class="form-control" readonly>
																							</div>
																						</div>
																					</div>
																				</div>
																			</div>
																		</div>
																		<div class="tab-pane fade" id="data-walii" role="tabpanel" aria-labelledby="data-walii-tab">
																			<h2>Data Wali</h2>
																			<div class="form-floating mb-2">
																				<div class="row align-items-center">
																					<div class="col-md-4">
																						<label>Nama Wali</label>
																					</div>
																					<div class="col-md-8">
																						<input value="{{ $row->nama_wali}}" type="text" class="form-control" readonly>
																					</div>
																				</div>
																			</div>
																			<div class="form-floating mb-2">
																				<div class="row align-items-center">
																					<div class="col-md-4">
																						<label>Alamat Wali</label>
																					</div>
																					<div class="col-md-8">
																						<input value="{{ $row->alamat_wali}}" type="text" class="form-control" readonly>
																					</div>
																				</div>
																			</div>
																			<div class="form-floating mb-2">
																				<div class="row align-items-center">
																					<div class="col-md-4">
																						<label>No. Telpon Wali</label>
																					</div>
																					<div class="col-md-8">
																						<input value="{{ $row->telpon_wali}}" type="text" class="form-control" readonly>
																					</div>
																				</div>
																			</div>
																			<div class="form-floating mb-2">
																				<div class="row align-items-center">
																					<div class="col-md-4">
																						<label>Pekerjaan Wali</label>
																					</div>
																					<div class="col-md-8">
																						<input value="{{ $row->pekerjaan_wali}}" type="text" class="form-control" readonly>
																					</div>
																				</div>
																			</div>
																			<div class="form-floating mb-2">
																				<div class="row align-items-center">
																					<div class="col-md-4">
																						<label>Penghasilan Wali</label>
																					</div>
																					<div class="col-md-8">
																						<input value="{{ $row->penghasilan_wali}}" type="text" class="form-control" readonly>
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
												
												<!-- Modal Detail Formulir PPDB end-->
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
				<!-- Tambahkan script Bootstrap dan jQuery -->
				<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
				<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
				<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
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

<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
@foreach ($formulirs as $row)    
    <script>
        $('#prestasi-{{$row->id}}').on('change', function () {
            let data = $('#prestasi-{{$row->id}}').val()
            let val = $('#val-prestasi-{{$row->id}}');
            if (data === "ya") val.css("display", "block")
            else if (data === "tidak") val.css("display", "none")
        })
        $('#kip-{{$row->id}}').on('change', function () {
            let data = $('#kip-{{$row->id}}').val()
            let val = $('#val-kip-{{$row->id}}');
            if (data === "ya") val.css("display", "block")
            else if (data === "tidak") val.css("display", "none")
        })
    </script>
@endforeach
	
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
{{-- sweet alert hapus --}}
<script>
	 $('.delete').click(function(){
	var ppdbid = $(this).attr('data-id');
	var nama = $(this).attr('data-nama');
	
	swal({
		title: "Yakin?",
		text: "Kamu akan menghapus data calon peserta didik dari  "+nama+" ",
		icon: "warning",
		buttons: true,
		dangerMode: true,
	})
	.then((willDelete) => {
		if (willDelete) {
			window.location = "/admin/form-ppdb/delete/"+ppdbid+" "
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