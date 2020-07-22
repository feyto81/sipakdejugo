@extends('frontend.layouts.master')
@section('title','Pengumuman | SipakdeJugo')
@section('content')



    <div class="col-md-12 col-lg-8">
    

        <h4 class="p-title" style="margin-top: -0px"><b>PENGUMUMAN</b></h4>
        <div class="row">
            @foreach($pengumuman as $row)
                        <div class="col-sm-6">
                            <img src="{{asset('uploads/'.$row->gambar)}}"alt="" style="width: 300px;height: 200px">
                            <h4 class="pt-20"><a href="{{route('pengumuman.detail',$row->slug)}}"><b>{{$row->judul}}</b></a></h4>
                            <ul class="list-li-mr-20 pt-10 mb-30">
                                <li class="color-lite-black">by <a href="#" class="color-black"><b>{{$row->User->name}},</b></a>
                                {{$row->created_at->diffForHumans()}}</li>
                                
                            </ul>
                        </div>
                        @endforeach
        </div>
                     
        
    </div>
@endsection
