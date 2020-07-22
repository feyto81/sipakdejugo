@extends('frontend.layouts.master')
@section('title','PKK | SipakdeJugo')
@section('content')

<div class="col-md-12 col-lg-8" style="margin-bottom: 70px">
    <div class="row">

        <div class="col-sm-12"  style="margin-top: -20px">
            @foreach($pkk as $row)
            <h4 class="p-title pt-20" style="margin-top: -0px"><b>{{$row->judul}}</b></h4>

        
                
            
            


           
            
            <br>
            <div class="col-sm-12" style="margin-left: -16px">
            <div class="box box">
                
            </div>
            <div class="box box">
                <p>{!! $row->body !!}</p>
            </div>
            <br><br>
        
            @endforeach
        </div>
        
        </div>
    </div>
</div>
@endsection
