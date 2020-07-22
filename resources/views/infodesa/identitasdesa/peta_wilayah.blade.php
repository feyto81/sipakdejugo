@extends('layouts.global')
@section('title','Peta Wilayah Desa | Sipakdejugo')
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

							<div class="row">
								<div class="col-md-12">
									<div class="box-body box-profile">
										<iframe src="{{$peta_wilayah->link}}" width="100%" height="100%" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
										 
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<div class="callout callout-warning">
						              <h4>Peta Wilayah Desa</h4>
						              Jika Mau edit wilayah silahkan klik tombol lihat peta lebih besar setelah itu cari nama desa ,nama kecamamatan nama kabupaten dan provinsi setelah itu muncul peta wilayah desa ,kemudian klik tombol bagikan dan klik menu sematkan peta dan salin kode linkya tempel ke kolom link yang aday di sipakdejugoo dan simpan.
						            </div>
				          		</div>
							</div>
							<hr>
							<div class="row">
								<div class="col-md-12">
									<form id="mainform" action="{{url('/peta_wilayah/update/'.$peta_wilayah->id)}}" method="POST" enctype="multipart/form-data" class="form-horizontal">
										{{csrf_field() }}
										<div class="table-responsive">
											<table class="table table-bordered table-striped table-hover" >
												<tbody>
													<tr>
														<th colspan="3" class="subtitle_head"><strong>DESA</strong></th>
													</tr>
													<tr>
														<td width="300">Link Peta Wilayah</td><td width="1">:</td>
														<td>
															<input id="link" name="link" class="form-control input-sm required" type="text" required="" value="{{$peta_wilayah->link}}"></input>
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
@push('bottom')
<script type="text/javascript">
	// variabel global marker
var marker;
  
function taruhMarker(peta, posisiTitik){
    
    if( marker ){
      // pindahkan marker
      marker.setPosition(posisiTitik);
    } else {
      // buat marker baru
      marker = new google.maps.Marker({
        position: posisiTitik,
        map: peta
      });
    }
  
     // isi nilai koordinat ke form
    document.getElementById("lat").value = posisiTitik.lat();
    document.getElementById("lng").value = posisiTitik.lng();
    
}
</script>
<script>



function initialize() {
  var propertiPeta = {
    center:new google.maps.LatLng(-6.551382,110.681076),
    zoom:9,
    mapTypeId:google.maps.MapTypeId.ROADMAP
  };
  
  var peta = new google.maps.Map(document.getElementById("googleMap"), propertiPeta);
  
  // // membuat Marker
  // var marker=new google.maps.Marker({
  //     position: new google.maps.LatLng(-8.623592, 116.222123),
  //     map: peta
      
  // });
  // even listner ketika peta diklik
  google.maps.event.addListener(peta, 'click', function(event) {
    taruhMarker(this, event.latLng);
  });

}


// event jendela di-load  
google.maps.event.addDomListener(window, 'load', initialize);
</script>
</script>
@endpush