@extends('layouts.global')
@section('title','Edit Identitas Desa | Sipakdejugo')
@section('content')
<section class="content" id="maincontent">
		<div class="row">
			<form id="mainform" action="{{url('/identitas-desa/update/'.$identitasdesa->id)}}" method="POST" enctype="multipart/form-data" class="form-horizontal">
				{{csrf_field()}}
				<div class="col-md-3">
					<div class="box box-primary">
						<div class="box-body box-profile">
							@if($identitasdesa->lambang_desa==null)
							<p class="text-muted text-center ">Gambar Tidak Ada</p>
							@else
								<img class="profile-user-img img-responsive img-circle" src="{{asset('uploads/'.$identitasdesa->lambang_desa)}}" alt="Logo">
							@endif
							
							<br/>
							<p class="text-center text-bold">Lambang Desa</p>
							<p class="text-muted text-center text-red">(Kosongkan, jika logo tidak berubah)</p>
							<br/>
							<div class="input-group input-group-sm">
								<input type="text" class="form-control" name="lambang_desa" id="file_path" >
								<input type="file" class="hidden" id="file" name="lambang_desa">
								<input type="hidden" name="lambang_desa" value="">
								<span class="input-group-btn">
									<button type="button" class="btn btn-info btn-flat" name="lambang_desa" id="file_browser"><i class="fa fa-search"></i> Browse</button>
								</span>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-9">
					<div class="box box-primary">

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
							<div class="form-group">
								<label class="col-sm-3 control-label" for="nama">Nama Desa</label>
								<div class="col-sm-8">
									<input id="nama_desa" name="nama_desa" class="form-control input-sm required" type="text" placeholder="Nama Desa" value="{{$identitasdesa->nama_desa}} "></input>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-3 control-label" for="kode_desa">Kode Desa</label>
								<div class="col-sm-2">
									<input id="kode_desa" name="kode_desa" class="form-control input-sm required" type="text" placeholder="Kode Desa" value="{{$identitasdesa->kode_desa}}" ></input>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-3 control-label" for="kode_pos">Kode Pos Desa</label>
								<div class="col-sm-2">
									<input id="kode_pos" name="kode_pos_desa" class="form-control input-sm number" type="text" placeholder="Kode Pos Desa" value="{{$identitasdesa->kode_pos_desa}}"></input>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-3 control-label" for="nama_kepala_desa">Kepala Desa</label>
								<div class="col-sm-8">
									<input id="nama_kepala_desa" name="kepala_desa" class="form-control input-sm required" type="text" placeholder="Kepala Desa" value="{{$identitasdesa->kepala_desa}}"></input>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-3 control-label" for="nip_kepala_desa">NIP Kepala Desa</label>
								<div class="col-sm-8">
									<input id="nip_kepala_desa" name="nip_kepala_desa" class="form-control input-sm" type="text" placeholder="NIP Kepala Desa" value="{{$identitasdesa->nip_kepala_desa}}"></input>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-3 control-label" for="alamat_kantor">Alamat Kantor Desa</label>
								<div class="col-sm-8">
									<textarea id="alamat_kantor" name="alamat_kantor_desa" class="form-control input-sm required" placeholder="Alamat Kantor Desa" rows="3" style="resize:none;">{{$identitasdesa->alamat_kantor_desa}}</textarea>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-3 control-label" for="email_desa">E-Mail Desa</label>
								<div class="col-sm-8">
									<input id="email_desa" name="email_desa" class="form-control input-sm email" type="text" placeholder="E-Mail Desa" value="{{$identitasdesa->email_desa}}"></input>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-3 control-label" for="telepon">Telpon Desa</label>
								<div class="col-sm-8">
									<input id="telepon" name="telepon_desa" class="form-control input-sm" type="text" placeholder="Telpon Desa" value="{{$identitasdesa->telepon_desa}}"></input>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-3 control-label" for="website">Website Desa</label>
								<div class="col-sm-8">
									<input id="website" name="website_desa" class="form-control input-sm url" type="text" placeholder="Webiste Desa" value="{{$identitasdesa->website_desa}}"></input>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-3 control-label" for="nama_kecamatan">Nama Kecamatan</label>
								<div class="col-sm-8">
									<input id="nama_kecamatan" name="nama_kecamatan" class="form-control input-sm required" type="text" placeholder="Nama Kecamatan" value="{{$identitasdesa->nama_kecamatan}} "></input>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-3 control-label" for="kode_kecamatan">Kode Kecamatan</label>
								<div class="col-sm-2">
									<input id="kode_kecamatan" name="kode_kecamatan" class="form-control input-sm required" type="text" placeholder="Kode Kecamatan" value="{{$identitasdesa->kode_kecamatan}}" ></input>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-3 control-label" for="nama_kecamatan">Nama Camat</label>
								<div class="col-sm-8">
									<input id="nama_kepala_camat" name="nama_camat" class="form-control input-sm required" type="text" placeholder="Nama Camat" value="{{$identitasdesa->nama_camat}}"></input>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-3 control-label" for="nip_kepala_camat">NIP Camat</label>
								<div class="col-sm-4">
									<input id="nip_kepala_camat" name="nip_camat" class="form-control input-sm" type="text" placeholder="NIP Camat" value="{{$identitasdesa->nip_camat}}"></input>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-3 control-label" for="nama_kabupaten">Nama Kabupaten</label>
								<div class="col-sm-8">
									<input id="nama_kabupaten" name="nama_kabupaten" class="form-control input-sm required" type="text" placeholder="Nama Kabupaten" value="{{$identitasdesa->nama_kabupaten}}"></input>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-3 control-label" for="kode_kabupaten">Kode Kabupaten</label>
								<div class="col-sm-2">
									<input id="kode_kabupaten" name="kode_kabupaten" class="form-control input-sm required" type="text" placeholder="Kode Kabupaten" value="{{$identitasdesa->kode_kabupaten}}"></input>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-3 control-label" for="kode_propinsi">Provinsi</label>
								<div class="col-sm-2">
									<input id="provinsi" name="provinsi" class="form-control input-sm required" type="text" placeholder="Kode Provinsi" value="{{$identitasdesa->provinsi}}"></input>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-3 control-label" for="kode_propinsi">Kode Provinsi</label>
								<div class="col-sm-2">
									<input id="kode_propinsi" name="kode_provinsi" class="form-control input-sm required" type="text" placeholder="Kode Provinsi" value="{{$identitasdesa->kode_provinsi}}"></input>
								</div>
							</div>
						</div>
						<div class='box-footer'>
							<div class='col-xs-12'>
								<button type='reset' class='btn btn-social btn-flat btn-danger btn-sm invisible' ><i class='fa fa-times'></i> Batal</button>
								<button type='submit' class='btn btn-social btn-flat btn-info btn-sm pull-right'><i class='fa fa-check'></i> Simpan</button>
							</div>
						</div>
					</div>
				</div>
			</form>
		</div>
	</section>
@endsection
@push('bottom')
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
	$('.select2').select2()
</script>
@endpush