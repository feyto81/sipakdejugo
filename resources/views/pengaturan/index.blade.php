@extends('layouts.global')
@section('title','Pengaturan Aplikasi | Sipakdejugo')
@section('content')
<section class="content-header">
    <h1>Pengaturan Aplikasi</h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
      <li class="active">Pengaturan Aplikasi</li>
    </ol>
  </section>
	<section class="content" id="maincontent">
		@foreach($pengaturan as $row)
		<form id="mainform" name="mainform" action="" method="post">
			<div class="row">
				<div class="col-md-12">
					<div class="box box-info">
						<div class="box-header with-border">
							<a href="{{url('pengaturan/aplikasi/edit/'.$row->id)}}" class="btn btn-social btn-flat btn-warning btn-sm visible-xs-block visible-sm-inline-block visible-md-inline-block visible-lg-inline-block" title="Ubah data desa"  data-toggle="tooltip"><i class="fa fa-edit"></i> Ubah Data Aplikasi</a>
							<a href="{{url('pengaturan/modul')}}" class="btn btn-social btn-flat btn-success btn-sm visible-xs-block visible-sm-inline-block visible-md-inline-block visible-lg-inline-block" title="Sidebar"  data-toggle="tooltip"><i class="fa fa-map"></i> Sidebar</a>
							
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
													<td width="300">Nama aplikasi</td><td width="1">:</td>
													<td>{{$row->nama_aplikasi}} </td>
												</tr>
												<tr>
													<td width="300">Logo</td><td width="1">:</td>
													<td>
														<div>@if($row->logo==null)
												<p class="text-muted text-center ">Gambar Tidak Ada</p>
												@else
													<img class="profile-user-img img-responsive" src="{{asset('uploads/'.$row->logo)}}" alt="Logo">
												@endif
														</div>
													</td>
												</tr>
												
												<tr>
													<td width="300">Current Version</td><td width="1">:</td>
													<td>{{$row->current_version}}</td>
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