@extends('frontend.layouts.master')
@section('title','Sejarah Desa Sekartaji | SipakdeJugo')
@section('content')

<div class="col-md-12 col-lg-8" style="margin-bottom: 70px">
    <div class="row">

        <div class="col-sm-12" style="margin-top: -20px">
            @foreach($sejarah as $row)
            <h4 class="p-title pt-20" style="margin-top: -0px"><b>{{$row->title}}</b></h4>
            <ul class="list-li-mr-20 pt-10 pb-20">
                <li class="color-lite-black"><a href="javascipt::void(0)" class="color-black"><i class="fa fa-user"></i>&nbsp;{{$row->User->name}}&nbsp;<i class="ion-ios-clock"></i>&nbsp;{{$row->created_at}}</a>
                    </li>
                <br>&nbsp;<br>
              


            </ul>
            <img src="{{asset('uploads/'.$row->images)}}" width="400px" height="300px" alt="">
            &nbsp;

            <p>{!! $row->body !!}</p>
        </div>
        @endforeach
    </div>
</div>
@endsection
