@extends('layouts.global')
@section('title','Surat Pengantar | Sipakdejugo')
@section('content')
<section class="content-header">
    <h1>Cetak Layanan Surat</h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
      <li class="active">Cetak Layanan Surat</li>
    </ol>
  </section>
<section class="content" id="maincontent">
		<form id="mainform" action="{{url('pengantar/cetak')}}" method="POST" enctype="multipart/form-data" class="form-horizontal">
										{{csrf_field() }}
			<div class="row">
				
				<div class="col-md-12">
					<div class="box box-info">
						<div class="box-header with-border">
							
							<a href="{{url('cetak-surat')}}" data-toggle="tooltip" class="btn btn-social btn-flat btn-info btn-sm visible-xs-block visible-sm-inline-block visible-md-inline-block visible-lg-inline-block" title="Kembali Ke Data Desa"><i class="fa fa-arrow-circle-o-left"></i> Kembali</a>

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
														<th colspan="5" class="subtitle_head"><strong>Surat Pengantar</strong></th>
													</tr>
													<tr>
														<td width="300">Nama</td><td width="1">:</td>
														<td>
															<input id="nama" name="nama" class="form-control input-sm required" type="text"  value=""></input>
														</td>
														
													</tr>
													<tr>
														<td width="300">Tempat / Tanggal Lahir / Umur</td><td width="1">:</td>
														<td>
															<input id="tempat" name="tempat" class="form-control input-sm required" type="text"  value=""></input>
														</td>
														<td>
															<input id="tanggal_lahir" name="tanggal_lahir" class="form-control input-sm required" type="text"  value=""></input>
														</td>
														<td>
															<input id="umur" name="umur" class="form-control input-sm required" type="text"  value=""></input>
															<input type="hidden" name="n_d" value="DESA JUGO">
														</td>
														
													</tr>
													<tr>
														<td width="300">Jenis Kelamin / No KTP / No KK</td><td width="1">:</td>
														<td>
															<input id="jenis_kelamin" name="jenis_kelamin" class="form-control input-sm required" type="text"  value=""></input>
														</td>
														<td>
															<input id="no_ktp" name="no_ktp" class="form-control input-sm required" type="text"  value=""></input>
														</td>
														<td>
															<input id="no_kk" name="no_kk" class="form-control input-sm required" type="text"  value=""></input>
														</td>
														
													</tr>
													<tr>
														<td width="300">Golongan Darah</td><td width="1">:</td>
														<td>
															<input id="golongan_darah" name="golongan_darah" class="form-control input-sm required" type="text"  value=""></input>
														</td>
													</tr>
													<tr>
														<td width="300">Alamat / Jenis Kelamin / Pekerjaan</td><td width="1">:</td>
														<td>
															<input id="alamat" name="alamat" class="form-control input-sm required" type="text"  value=""></input>
														</td>
														
														<td>
															<input id="pekerjaan" name="pekerjaan" class="form-control input-sm required" type="text"  value=""></input>
														</td>
														
													</tr>
													<tr>
														<td width="300">Pendidikan / Warga Negara / Agama</td><td width="1">:</td>
														<td>
															<input id="pendidikan" name="pendidikan" class="form-control input-sm required" type="text"  value=""></input>
														</td>
														<td>
															<input id="wn" name="wn" class="form-control input-sm required" type="text"  value=""></input>
														</td>
														<td>
															<input id="agama" name="agama" class="form-control input-sm required" type="text"  value=""></input>
														</td>
														
													</tr>
													<tr>
														<td width="300">Nomor Surat</td><td width="1">:</td>
														<td>
															<input id="nomor_surat" name="nomor_surat" class="form-control input-sm required" type="text"  value=""></input>
														</td>
														
													</tr>
													<tr>
														<td width="300">Keperluan</td><td width="1">:</td>
														<td>
															<div>
                                                                <textarea name="keperluan" id="keperluan" class="form-control" placeholder="Place some text here"
                                                                    >
                                                                    
                                                              </textarea>
                                                            </div>
														</td>
														
													</tr>
													<tr>
														<td width="300">Keterangan</td><td width="1">:</td>
														<td>
															<div>
                                                                <textarea name="keterangan" id="keterangan" class="form-control" placeholder="Place some text here"
                                                                    >
                                                                    
                                                              </textarea>
                                                            </div>
														</td>
														
													</tr>
													<tr>
														<td width="300">Berlaku Dari - Sampai</td><td width="1">:</td>
														<td>
															<input id="tanggal_awal" name="tanggal_awal" class="form-control input-sm required" type="date"  value=""></input>
														</td>
														<td>
															<input type="date" id="tanggal_akhir" name="tanggal_akhir" class="form-control input-sm required"  value=""></input>
														</td>
														
													</tr>
													<tr>
														<td width="300">Tertanda Atas Nama</td><td width="1">:</td>
														<td>
															<input id="tta" name="tta" class="form-control input-sm required" type="text"  value=""></input>
														</td>
														
														
													</tr>
													<tr>
														<td width="300">Staff Pemerintah Desa</td><td width="1">:</td>
														<td>
															<input id="staff" name="staff" class="form-control input-sm required" type="text"  value=""></input>
														</td>
														
														
													</tr>
													<tr>
														<td width="300">Menjabat Sebagai</td><td width="1">:</td>
														<td>
															<input id="jabatan" name="jabatan" class="form-control input-sm required" type="text"  value=""></input>
														</td>
														
														
													</tr>
													<tr>
														<td  width="300"></td>
														<td></td>
														<td></td>
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
	// function total(){
 //        lk = $('#laki').val();
 //        pr = $('#perempuan').val();
 //        hsl = (parseInt(lk) + parseInt(pr));  
 //        $('#jumlah_seluruh').val(hsl);
 //      }
      </script>
	</script>
@endpush