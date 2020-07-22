@extends('frontend.layouts.master')
@section('title','Pelayanan Surat | SipakdeJugo')
@section('content')

<div class="col-md-12 col-lg-8">
    <div class="row">

        <div class="col-sm-12">
            
            

            <h3 class="p-title" style="margin-top: -10px">Pelayanan Surat</h3>
            <div class="col-sm-12">
            <div class="box box">
                
            </div>
            <div class="box box">
                <?php
                            $qrCode = new Endroid\QrCode\QrCode($surat_id);//('123456') buat angka doang
                            $qrCode->writeFile('uploads/qr-code/surat-'.$surat_id.'.png');
                          ?>
                          <br>
                          
                          <img src="{{asset('uploads/qr-code/surat-'.$surat_id.'.png')}}" style="width: 300px;">

            </div>
            <br><br>
        </div>
        </div>
    </div>
</div>
<br><br>
@endsection
