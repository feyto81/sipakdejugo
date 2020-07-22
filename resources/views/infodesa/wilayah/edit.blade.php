@extends('layouts.global')
@section('title','Edit Wilayah Desa | Sipakdejugo')
@section('content')
<section class="content" id="maincontent">
		<form id="mainform" action="{{url('dusun/update/'.$dusun->id)}}" method="POST" enctype="multipart/form-data" class="form-horizontal">
										{{csrf_field() }}
			<div class="row">
				
				<div class="col-md-12">
					<div class="box box-info">
						<div class="box-header with-border">
							
							<a href="{{url('wilayah/konfigurasi')}}" data-toggle="tooltip" class="btn btn-social btn-flat btn-info btn-sm visible-xs-block visible-sm-inline-block visible-md-inline-block visible-lg-inline-block" title="Kembali Ke Data Desa"><i class="fa fa-arrow-circle-o-left"></i> Kembali Ke Wilayah Adminstratif</a>

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
														<th colspan="3" class="subtitle_head"><strong>Edit Dusun</strong></th>
													</tr>
													<tr>
														<td width="300">Dusun</td><td width="1">:</td>
														<td>
															<input id="dusun" name="dusun" class="form-control input-sm required" type="text"  value="{{$dusun->dusun}}"></input>
														</td>
													</tr>
													<tr>
														<td width="300">Kepala Dusun</td><td width="1">:</td>
														<td>
															<input id="kepala_dusun" name="kepala_dusun" class="form-control input-sm required" type="text"  value="{{$dusun->kepala_dusun}}"></input>
														</td>
													</tr>
													<tr>
														<td width="300">RW</td><td width="1">:</td>
														<td>
															<input id="rw" name="rw" class="form-control input-sm required" type="text"  value="{{$dusun->rw}}"></input>
														</td>
													</tr>
													<tr>
														<td width="300">RT</td><td width="1">:</td>
														<td>
															<input id="rt" name="rt" class="form-control input-sm required" type="text"  value="{{$dusun->rt}}"></input>
														</td>
													</tr>
													<tr>
														<td width="300">KK</td><td width="1">:</td>
														<td>
															<input id="kk" name="kk" class="form-control input-sm required" type="text"  value="{{$dusun->kk}}"></input>
															
														</td>
													</tr>
													<tr>
														<td width="300">Jumlah Laki-Laki</td><td width="1">:</td>
														<td>
															<input id="laki" name="laki" class="form-control input-sm required" type="text"  value="{{$dusun->laki}}"></input>
														</td>
													</tr>
													<tr>
														<td width="300">Jumlah Perempuan</td><td width="1">:</td>
														<td>
															<input id="perempuan" name="perempuan" class="form-control input-sm required" type="text"  value="{{$dusun->perempuan}}"></input>
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
	// function total(){
 //        lk = $('#laki').val();
 //        pr = $('#perempuan').val();
 //        hsl = (parseInt(lk) + parseInt(pr));  
 //        $('#jumlah_seluruh').val(hsl);
 //      }
      </script>
	</script>
@endpush