@extends('frontend.layouts.master')
@section('title','Struktur Organisasi | SipakdeJugo')
@section('content')

<div class="col-md-12 col-lg-8" style="margin-bottom: 70px">
    <div class="row">

        <div class="col-sm-12" style="margin-top: -20px">
            
            <h4 class="p-title pt-20" style="margin-top: -0px"><b>Struktur Organisasi</b></h4>
            <ul class="list-li-mr-20 pt-10 pb-20">
                
                <br>&nbsp;<br>
              


            </ul>
            @foreach($bagan as $row)
            <img style="margin-top: -20px" src="{{asset('uploads/'.$row->gambar)}}" alt="">
            <h4 class="pt-20" style="text-align: center;"><b></b></h4>
            <h4 class="pt-20" style="text-align: center;"><b></b></h4>&nbsp;
            <p></p>

            <h4 class="pt-20" style="text-align: center;"><b></b></h4>&nbsp;
            <p></p>
            @endforeach
        </div>
    </div>

</div>

@endsection
@push('bottom')

@endpush
