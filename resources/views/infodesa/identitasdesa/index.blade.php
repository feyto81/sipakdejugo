@extends('layouts.global')
@section('title','Identitas Desa | Sipakdejugo')
@section('content')
	<section class="content" id="maincontent">
		@foreach($identitas_desa as $row)
		<form id="mainform" name="mainform" action="" method="post">
			<div class="row">
				<div class="col-md-12">
					<div class="box box-info">
						<div class="box-header with-border">
							<a href="{{url('identitas-desa/edit/'.$row->id)}}" class="btn btn-social btn-flat btn-warning btn-sm visible-xs-block visible-sm-inline-block visible-md-inline-block visible-lg-inline-block" title="Ubah data desa"  data-toggle="tooltip"><i class="fa fa-edit"></i> Ubah Data Desa</a>
							<a href="{{url('identitas-desa/lokasi-kantor-desa/1')}}" class="btn btn-social btn-flat bg-purple btn-sm visible-xs-block visible-sm-inline-block visible-md-inline-block visible-lg-inline-block"><i class='fa fa-map-marker'></i> Lokasi Kantor Desa</a>
							<a href="{{url('peta-wilayah-desa/1')}}" class="btn btn-social btn-flat btn-info btn-sm btn-sm visible-xs-block visible-sm-inline-block visible-md-inline-block visible-lg-inline-block"><i class='fa fa-map'></i> Peta Wilayah Desa</a>
							<a href="{{url('media-social/1')}}" class="btn btn-social btn-flat btn-success btn-sm btn-sm visible-xs-block visible-sm-inline-block visible-md-inline-block visible-lg-inline-block"><i class='fa fa-facebook'></i> Info Media Social</a>
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

							<div class="row">
								<div class="col-md-12">
									<div class="box-body box-profile">
										<img class="profile-user-img img-responsive" src="{{asset('uploads/'.$row->lambang_desa)}}" alt="logo">
										<h3 class="profile-username text-center detail">Desa {{$row->nama_desa}} </h3>
										<p class="text-center detail"><b>Kecamatan {{$row->nama_kecamatan}} , Kabupaten {{$row->nama_kabupaten}} , Provinsi {{$row->provinsi}}</b></p>
									</div>
								</div>
							</div>
							<hr>
							<div class="row">
								<div class="col-md-12">
									<div class="table-responsive">
										<table class="table table-bordered table-striped table-hover" >
											<tbody>
												<tr>
													<th colspan="3" class="subtitle_head"><strong>DESA</strong></th>
												</tr>
												<tr>
													<td width="300">Nama Desa</td><td width="1">:</td>
													<td>{{$row->nama_desa}} </td>
												</tr>
												<tr>
													<td width="300">Kode Desa</td><td width="1">:</td>
													<td>{{$row->kode_desa}}</td>
												</tr>
												<tr>
													<td width="300">Kode Pos Desa</td><td width="1">:</td>
													<td>{{$row->kode_pos_desa}}</td>
												</tr>
												<tr>
													<td width="300">Kepala Desa</td><td width="1">:</td>
													<td>{{$row->kepala_desa}} </td>
												</tr>
												<tr>
													<td width="300">NIP Kepala Desa</td><td width="1">:</td>
													<td>{{$row->nip_kepala_desa}}</td>
												</tr>
												<tr>
													<td width="300">Alamat Kantor Desa</td><td width="1">:</td>
													<td>{{$row->alamat_kantor_desa}}</td>
												</tr>
												<tr>
													<td width="300">E-Mail Desa</td><td width="1">:</td>
													<td>{{$row->email_desa}}</td>
												</tr>
												<tr>
													<td width="300">Telpon Desa</td><td width="1">:</td>
													<td>{{$row->telepon_desa}}</td>
												</tr>
												<tr>
													<td width="300">Website Desa</td><td width="1">:</td>
													<td>{{$row->website_desa}}</td>
												</tr>
												<tr>
													<th colspan="3" class="subtitle_head"><strong>KECAMATAN</strong></th>
												</tr>
												<tr>
													<td width="300">Nama Kecamatan</td><td width="1">:</td>
													<td>{{$row->nama_kecamatan}}</td>
												</tr>
												<tr>
													<td width="300">Kode Kecamatan</td><td width="1">:</td>
													<td>{{$row->kode_kecamatan}}</td>
												</tr>
												<tr>
													<td width="300">Nama Camat</td><td width="1">:</td>
													<td>{{$row->nama_camat}}</td>
												</tr>
												<tr>
													<td width="300">NIP Camat</td><td width="1">:</td>
													<td>{{$row->nip_camat}}</td>
												</tr>
												<tr>
													<th colspan="3" class="subtitle_head"><strong>KABUPATEN</strong></th>
												</tr>
												<tr>
													<td width="300">Nama Kabupaten</td><td width="1">:</td>
													<td>{{$row->nama_kabupaten}}</td>
												</tr>
												<tr>
													<td width="300">Kode Kabupaten</td><td width="1">:</td>
													<td>{{$row->kode_kabupaten}}</td>
												</tr>
												<tr>
													<th colspan="3" class="subtitle_head"><strong>PROVINSI</strong></th>
												</tr>
												<tr>
													<td width="300">Provinsi</td><td width="1">:</td>
													<td>{{$row->provinsi}}</td>
												</tr>
												<tr>
													<td width="300">Kode Provinsi</td><td width="1">:</td>
													<td>{{$row->kode_provinsi}}</td>
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
		@endforeach
	</section>
@endsection