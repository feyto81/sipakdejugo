@extends('frontend.layouts.master')
@section('title','SipakdeJugo | Webstire Resmi Desa Jugo')
@section('slider')
<!-- <div class="container">
 <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="{{asset('frontend\images\slider/kindpng_4417448.png')}}" height="360px" class="d-block w-100" alt="">
        </div>
        <div class="carousel-item">
         <img src="{{asset('frontend\images\slider/wH5y2PkWhCxqKBje8rBp5e-970-80.jpg')}}" height="360px" class="d-block w-100" alt="">
        </div>
        <div class="carousel-item">
          <img src="{{asset('frontend\images\slider/854231251.jpg')}}" height="360px" class="d-block w-100" alt="">
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
</div> -->
<div class="container">
            <!-- Start WOWSlider.com BODY section -->
    <div id="wowslider-container1" style="height: 20px">
      <div class="ws_images"><ul>
        @foreach($slider as $data)
          <li><img src="{{asset('uploads/'.$data->gambar)}}"   alt="" title="" id="wows1_0"/></li>
          
          @endforeach
        </ul></div>
        <div class="ws_shadow"></div>
      </div>  
    </div>
@endsection
@section('content')
<div class="col-md-12 col-lg-8">

    <h4 class="p-title"><b>T E R B A R U</b></h4>
    <div class="row">
        <div class="col-sm-12">
          @foreach($berita as $row)
            <a class="oflow-hidden pos-relative mb-20 dplay-block" href="{{route('berita.detail',$row->slug)}}">
                <div class="wh-100x abs-tlr"><img src="{{asset('/uploads/'.$row->gambar)}}" alt=""></div>
                <div class="ml-120 min-h-100x">
                    <h5><b>{{$row->judul}}</b></h5>
                    <h6 class="color-lite-black pt-10">by <span class="color-black"><b>{{$row->User->name}},</b></span> {{$row->created_at->diffForHumans()}}</h6>
                </div>
            </a>
            @endforeach
        </div>
        
    </div>
    {{ $berita->links() }}
</div>

@endsection