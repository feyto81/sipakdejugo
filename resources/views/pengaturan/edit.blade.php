@extends('layouts.global')
@section('title','Edit Pengaturan Aplikasi | Sipakdejugo')
@section('content')
<section class="content" id="maincontent">
		<div class="row">
			<form id="mainform" action="{{url('/pengaturan-aplikasi/update/'.$pengaturan->id)}}" method="POST" enctype="multipart/form-data" class="form-horizontal">
				{{csrf_field()}}
				<div class="col-md-3">
					<div class="box box-primary">
						<div class="box-body box-profile">
							@if($pengaturan->logo==null)
							<p class="text-muted text-center ">Gambar Tidak Ada</p>
							@else
								<img class="profile-user-img img-responsive" src="{{asset('uploads/'.$pengaturan->logo)}}" alt="Logo">
							@endif
							
							<br/>
							<p class="text-center text-bold">Logo</p>
							<p class="text-muted text-center text-red">(Kosongkan, jika logo tidak berubah)</p>
							<br/>
							<div class="input-group input-group-sm">
								<input type="text" class="form-control" name="logo" id="file_path" >
								<input type="file" class="hidden" id="file" name="logo">
								<input type="hidden" name="logo" value="">
								<span class="input-group-btn">
									<button type="button" class="btn btn-info btn-flat" name="logo" id="file_browser"><i class="fa fa-search"></i> Browse</button>
								</span>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-9">
					<div class="box box-primary">

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
									<input id="nama_aplikasi" name="nama_aplikasi" class="form-control input-sm required" type="text" placeholder="Nama Aplikasi" value="{{$pengaturan->nama_aplikasi}} "></input>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-3 control-label" for="nama">Current Version</label>
								<div class="col-sm-8">
									<input id="current_version" name="current_version" class="form-control input-sm required" type="text" placeholder="Nama Aplikasi" value="{{$pengaturan->current_version}} "></input>
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