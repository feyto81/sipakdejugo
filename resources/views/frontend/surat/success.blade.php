@extends('frontend.layouts.master')
@section('title','Pelayanan Surat | SipakdeJugo')
@section('content')

<div class="col-md-12 col-lg-8">
    <div class="row">

        <div class="col-sm-12">
            
            
            <h3 class="p-title" style="margin-top: -10px">Pelayanan Surat</h3>
            <br>
            <div class="col-sm-12">
            <div class="box box">
                
            </div>
            <div class="box box">
                Permohonan Surat Anda Telah Kami terima. Silahkan Tunggu Pesan WA dari Pihak Kami Setelah itu scan qrcode dibawah
                <br>
                <br>
                <a style="width: 100%" href="{{url('/print-qr-code/'.$surat_no)}}"  class="btn btn-success btn-sm">
                              Dapatkan QR Code <i class="fa fa-barcode"></i>
                            </a>

            </div>
            <br><br>
        </div>
        </div>
    </div>
</div>
<br><br>
@endsection
