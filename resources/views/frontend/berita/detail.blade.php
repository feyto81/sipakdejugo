@extends('frontend.layouts.master')
@section('title','SipakdeJugo | Berita')
@section('content')
<section class="ptb-0">
        <div class="mb-30 brdr-ash-1 opacty-5"></div>
        <div class="container">
            <a class="mt-10" href="index.html"><i class="mr-5 ion-ios-home"></i>Home<i class="mlr-10 ion-chevron-right"></i></a>
            <a class="mt-10" href="">Berita<i class="mlr-10 ion-chevron-right"></i></a>
        </div><!-- container -->
    </section>
<div class="col-md-12 col-lg-8">
    <div class="row">

        <div class="col-sm-12">
            <br><br><br><br>
            <img src="{{asset('uploads/'.$berita_detail->gambar)}}" alt="">
            &nbsp;

            <h2 class="pt-20"><b>{{$berita_detail->judul}}</b></h2>

            <ul class="list-li-mr-20 pt-10 pb-20">
                <li class="color-lite-black">by <a href="javascipt::void(0)" class="color-black"><b>{{$berita_detail->User->name}},</b></a>
                    {{$berita_detail->created_at->diffForHumans()}}</li>
                <br>&nbsp;<br>
                <a href=""><img src="{{asset('frontend\images\icon/Icon metro-facebook.png')}}" sizes="30px"></a>
                <a href=""><img src="{{asset('frontend\images\icon/Icon awesome-twitter-square.png')}}"
                        sizes="30px"></a>
                <a href=""><img src="{{asset('frontend\images\icon/Icon awesome-google-plus-square.png')}}"
                        sizes="30px"></a>
                <a href=""><img src="{{asset('frontend\images\icon/Icon awesome-pinterest-square.png')}}"
                        sizes="30px"></a>


            </ul>

            <p>{!! $berita_detail->body !!}</p>
            <hr>
        </div>
    </div>
</div>
@endsection
