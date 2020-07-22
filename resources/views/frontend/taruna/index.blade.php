@extends('frontend.layouts.master')
@section('title','Karang Taruna | SipakdeJugo')
@section('content')

<div class="col-md-12 col-lg-8" style="margin-bottom: 70px">
    <div class="row">

        <div class="col-sm-12"  style="margin-top: -20px">
            @foreach($kt as $row)
            <h4 class="p-title pt-20" style="margin-top: -0px"><b>{{$row->judul}}</b></h4>
            <br>
            <div class="col-sm-12" style="margin-left: -16px">
            <p>{!!$row->body!!}</p>
        </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
