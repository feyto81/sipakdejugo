@extends('layouts.global')
@section('title','Tambah Aparat Desa | Sipakdejugo')
@section('content')
<section class="content" id="maincontent">
		<form id="mainform" action="{{url('save_aparat')}}" method="POST" enctype="multipart/form-data" class="form-horizontal">
										{{csrf_field() }}
			<div class="row">
				<div class="col-md-3">
					<div class="box box-primary">
						<div class="box-body box-profile">
							<img class="profile-user-img img-responsive img-circle" src="{{asset('uploads/aparat/kuser.png')}}" alt="Foto">
							
							<br/>
						
							<p class="text-muted text-center"><code>(Kosongkan jika tidak ingin mengubah foto)</code></p>
							<br/>
							<div class="input-group input-group-sm">
								<input type="text" class="form-control" name="foto" id="file_path" >
								<input type="file" class="hidden" id="file" name="foto">
								<input type="hidden" name="foto" value="">
								<span class="input-group-btn">
									<button type="button" class="btn btn-success btn-flat" name="foto" id="file_browser"><i class="fa fa-search"></i> Browse</button>
								</span>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-9">
					<div class="box box-info">
						<div class="box-header with-border">
							
							<a href="{{url('pemerintahdesa/aparatur')}}" data-toggle="tooltip" class="btn btn-social btn-flat btn-info btn-sm visible-xs-block visible-sm-inline-block visible-md-inline-block visible-lg-inline-block" title="Kembali Ke Data Desa"><i class="fa fa-arrow-circle-o-left"></i> Kembali Ke Data Aparatur Desa</a>

							<div class="pull-right box-tools">
								
			                <button type="button" class="btn btn-info btn-sm" data-widget="collapse" data-toggle="tooltip"
			                        title="Collapse">
			                  <i class="fa fa-minus"></i></button>
			                <button type="button" class="btn btn-info btn-sm" data-widget="remove" data-toggle="tooltip"
			                        title="Remove">
			                  <i class="fa fa-times"></i></button>
			              </div>
						</div>

						<div class="box-body">

							@if (count($errors) > 0)
		                  <div class="alert alert-danger">
		                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
		                    
		                      <ul>
		                          @foreach ($errors->all() as $error)
		                              <li>{{ $error }}</li>
		                          @endforeach
		                      </ul>
		                  </div>
		                  @endif
							<hr>

							<div class="row">
								<div class="col-md-12">
									
										<div class="table-responsive">
											<table class="table table-bordered table-striped table-hover" >
												<tbody>
													<tr>
														<th colspan="3" class="subtitle_head"><strong>Tambah Aparat Desa</strong></th>
													</tr>
													<tr>
														<td width="300">Nama Pegawai Desa</td><td width="1">:</td>
														<td>
															<input id="nama" name="nama" class="form-control input-sm required" type="text"  value=""></input>
														</td>
													</tr>
													<tr>
														<td width="300">Nomor Induk Kependudukan</td><td width="1">:</td>
														<td>
															<input id="nik" name="nik" class="form-control input-sm required" type="text"  value=""></input>
														</td>
													</tr>
													<tr>
														<td width="300">NIAP</td><td width="1">:</td>
														<td>
															<input id="niap" name="niap" class="form-control input-sm required" type="text" value=""></input>
														</td>
													</tr>
													<tr>
														<td width="300">NIP</td><td width="1">:</td>
														<td>
															<input id="nip" name="nip" class="form-control input-sm required" type="text"  value=""></input>
														</td>
													</tr>
													<tr>
														<td width="300">Tempat Lahir</td><td width="1">:</td>
														<td>
															<input id="tempat" name="tempat" class="form-control input-sm required" type="text"  value=""></input>
														</td>
													</tr>
													<tr>
														<td width="300">Tanggal Lahir</td><td width="1">:</td>
														<td>

															<input id="tanggal_lahir" name="tanggal_lahir" class="form-control input-sm required" type="date"  value=""></input>
														</td>
													</tr>
													<tr>
														<td width="300">Jenis Kelamin</td><td width="1">:</td>
														<td>
															<div>	
																<select class="form-control select2" name="jenis_kelamin">
																	<option value="" disabled selected="">Jenis Kelamin</option>
																	<option value="L">Laki-Laki</option>
																	<option value="P">Perempuan</option>
																</select>
															</div>
														</td>
													</tr>
													<tr>
														<td width="300">Pendidikan</td><td width="1">:</td>
														<td>
															<div>	
																<select class="form-control" name="pendidikan_terakhir">
																					<option value="" disabled selected="">Pilih Pendidikan (Dalam KK) </option>
																					<option value="1" >TIDAK / BELUM SEKOLAH</option>
																					<option value="2" >BELUM TAMAT SD/SEDERAJAT</option>
																					<option value="3" >TAMAT SD / SEDERAJAT</option>
																					<option value="4" >SLTP/SEDERAJAT</option>
																					<option value="5" >SLTA / SEDERAJAT</option>
																					<option value="6" >DIPLOMA I / II</option>
																					<option value="7" >AKADEMI/ DIPLOMA III/S. MUDA</option>
																					<option value="8" >DIPLOMA IV/ STRATA I</option>
																					<option value="9" >STRATA II</option>
																					<option value="10" >STRATA III</option>
																			</select>
															</div>
														</td>
													</tr>
													<tr>
														<td width="300">Agama</td><td width="1">:</td>
														<td>
															<div>	
																<select class="form-control" name="agama">
																					<option value="" disabled selected="">Pilih Agama</option>
																					<option value="1" >ISLAM</option>
																					<option value="2" >KRISTEN</option>
																					<option value="3" >KATHOLIK</option>
																					<option value="4" >HINDU</option>
																					<option value="5" >BUDHA</option>
																					<option value="6" >KHONGHUCU</option>
																					<option value="7" >KEPERCAYAAN TERHADAP TUHAN YME / LAINNYA</option>
																			</select>
															</div>
														</td>
													</tr>
													<tr>
														<td width="300">Pangkat / Golongan</td><td width="1">:</td>
														<td>

															<input id="pangkat" name="pangkat" class="form-control input-sm required" type="text"value=""></input>
														</td>
													</tr>
													<tr>
														<td width="300">Nomor SK Pengangkatan</td><td width="1">:</td>
														<td>

															<input id="nomor_sk_pengangkatan" name="nomor_sk_pengangkatan" class="form-control input-sm" type="text"  value=""></input>
														</td>
													</tr>
													<tr>
														<td width="300">Tanggal SK Pengangkatan</td><td width="1">:</td>
														<td>

															<input id="tanggal_sk_pengangkatan" name="tanggal_sk_pengangkatan" class="form-control input-sm" type="date"  value=""></input>
														</td>
													</tr>
													<tr>
														<td width="300">Nomor SK Pemberhentian</td><td width="1">:</td>
														<td>

															<input id="nomor_sk_pemberhentian" name="nomor_sk_pemberhentian" class="form-control input-sm" type="text"  value=""></input>
														</td>
													</tr>
													<tr>
														<td width="300">Tanggal SK Pemberhentian</td><td width="1">:</td>
														<td>

															<input id="tanggal_sk_pemberhentian" name="tanggal_sk_pemberhentian" class="form-control input-sm" type="date"  value=""></input>
														</td>
													</tr>
													<tr>
														<td width="300">Masa Jabatan (Usia/Periode)</td><td width="1">:</td>
														<td>

															<input id="masa_periode" name="masa_periode" class="form-control input-sm" type="text"  value=""></input>
														</td>
													</tr>
													<tr>
														<td width="300">Jabatan</td><td width="1">:</td>
														<td>

															<input id="jabatan" name="jabatan" class="form-control input-sm" type="text"  value=""></input>
														</td>
													</tr>
													<tr>
														<td  width="300"></td>
														<td></td>
														<td>
															<button type='submit' class='btn btn-social btn-flat btn-info btn-sm pull-right'><i class='fa fa-check'></i> Simpan</button>
														</td>
													</tr>
												</tbody>
											</table>
										</div>
									
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</form>
	</section>
@endsection
@push('bottom')
	<script type="text/javascript">
		$(function () {
    //Initialize Select2 Elements
    $('.select2').select2();

    
  })
	</script>
	<script type="text/javascript">
		$('#file_browser').click(function(e)
	{
		e.preventDefault();
		$('#file').click();
	});
	$('#file').change(function()
	{
		$('#file_path').val($(this).val());
		if ($(this).val() == '')
		{
			$('#'+$(this).data('submit')).attr('disabled','disabled');
		}
		else
		{
			$('#'+$(this).data('submit')).removeAttr('disabled');;
		}
	});
	$('#file_path').click(function()
	{
		$('#file_browser').click();
	});
	</script>
@endpush