@extends('layouts.global')
@section('title','Info Media Social | Sipakdejugo')
@section('content')
<section class="content" id="maincontent">
		
			<div class="row">
				<div class="col-md-12">
					<div class="box box-info">
						<div class="box-header with-border">
							
							<a href="{{url('identitas-desa/konfigurasi')}}" data-toggle="tooltip" class="btn btn-social btn-flat btn-info btn-sm visible-xs-block visible-sm-inline-block visible-md-inline-block visible-lg-inline-block" title="Kembali Ke Data Desa"><i class="fa fa-arrow-circle-o-left"></i> Kembali Ke Data Identitas Desa</a>

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
									@if (count($errors) > 0)
                  <div class="alert alert-danger alert-dismissible">
                      <ul>
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                          @foreach ($errors->all() as $error)
                              <li>{{ $error }}</li>
                          @endforeach
                      </ul>
                  </div>
                  @endif
									<form id="mainform" action="{{url('/media_social/update/'.$media_social->id)}}" method="POST" enctype="multipart/form-data" class="form-horizontal">
										{{csrf_field() }}
										<div class="table-responsive">
											<table class="table table-bordered table-striped table-hover" >
												<tbody>
													<tr>
														<th colspan="3" class="subtitle_head"><strong>MEDIA SOCIAL DESA JUGO</strong></th>
													</tr>
													<tr>
														<td width="300">Facebook</td><td width="1">:</td>
														<td>
															<input id="link" name="facebook" class="form-control input-sm required" type="text" value="{{$media_social->facebook}}"></input>
														</td>
													</tr>
													<tr>
														<td width="300">Instagram</td><td width="1">:</td>
														<td>
															<input id="link" name="instagram" class="form-control input-sm required" type="text" value="{{$media_social->instagram}}"></input>
														</td>
													</tr>
													<tr>
														<td width="300">Twitter</td><td width="1">:</td>
														<td>
															<input id="link" name="twitter" class="form-control input-sm required" type="text" value="{{$media_social->twitter}}"></input>
														</td>
													</tr>
													<tr>
														<td width="300">WhatsApp</td><td width="1">:</td>
														<td>
															<input id="link" name="Whatsapp" class="form-control input-sm required" type="text" value="{{$media_social->Whatsapp}}"></input>
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
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
	</section>

@endsection