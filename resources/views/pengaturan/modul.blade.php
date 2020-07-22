@extends('layouts.global')
@section('title','Pengaturan Modul | Sipakdejugo')
@section('content')
<section class="content-header">
    <h1>Pengaturan Aplikasi</h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
      <li class="active">Pengaturan Modul</li>
    </ol>
  </section>
	<section class="content" id="maincontent">
		@foreach($modul as $row)
		<form id="mainform" name="mainform" action="" method="post">
			<div class="row">
				<div class="col-md-12">
					<div class="box box-info">
						<div class="box-header with-border">
							<a href="{{url('pengaturan/aplikasi')}}" data-toggle="tooltip" class="btn btn-social btn-flat btn-info btn-sm visible-xs-block visible-sm-inline-block visible-md-inline-block visible-lg-inline-block" title="Kembali Ke Data Desa"><i class="fa fa-arrow-circle-o-left"></i> Kembali Ke Pengaturan Aplikasi</a>
							
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

							
							<hr>
							<div class="row">
								<div class="col-md-12">
									<div class="table-responsive">
										<table class="table table-bordered table-striped table-hover" >
											<tbody>
												<tr>
													<th colspan="3" class="subtitle_head"><strong>Pengaturan</strong></th>
												</tr>
												
												<tr>
													<td width="300">Logo</td><td width="1">:</td>
													<td>
														<div style="width: 300px;height: 300px">@if($row->foto_kepala_desa==null)
												<p class="text-muted text-center ">Gambar Tidak Ada</p>
												@else
													<img class="profile-user-img img-responsive" src="{{asset('uploads/'.$row->foto_kepala_desa)}}" alt="Logo">
												@endif
														</div>
													</td>
												</tr>
												<tr>
													<td width="300">Nomor Pengaduan Wa</td><td width="1">:</td>
													<td>{{$row->pengaduan_wa}} </td>
												</tr>
												<tr>
													<td width="300">Link Informasi Covid</td><td width="1">:</td>
													<td>{{$row->link_informasi_covid}} </td>
												</tr>
												<tr>
														<td  width="300"></td>
														<td></td>
														<td>
															<a href="{{url('pengaturan/modul/edit/'.$row->id)}}" class="btn btn-social btn-flat btn-success btn-sm visible-xs-block visible-sm-inline-block visible-md-inline-block visible-lg-inline-block pull-right" title="Sidebar"  data-toggle="tooltip"><i class="fa fa-edit"></i> Edit</a>
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
		@endforeach
	</section>
@endsection