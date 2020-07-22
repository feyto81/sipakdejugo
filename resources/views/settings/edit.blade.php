@extends('layouts.global')
@section('title','Setting Web')
@section('content')

<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">@yield('title')</h3>
        </div>
        <!-- box-body -->
        <div class="box-body">
          <form action="{{route('settings.update',[$settings->data_id])}}" method="post" enctype="multipart/form-data">
              @csrf
              <input type="hidden" name="_method" value="PUT">
              <div class="row">
                <div class="col-md-4">
                  <div class="form-group">
                    <label class="form-control-label" for="logo">Logo</label>
                    <br>
                    logo : <br>
                    @if($settings->logo)
                    <img src="{{asset('storage/'.$settings->logo)}}" alt="Logo" width="120px">
                    @else
                    No Avatar
                    @endif
                    <input type="file" class="form-control" id="logo" name="logo" placeholder="One of three cols" value="{{$settings->logo}}">
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label class="form-control-label" for="nik">Phone</label>
                    <input type="text" class="form-control" id="phone" name="phone" placeholder="One of three cols" value="{{$settings->phone}}" >
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label class="form-control-label" for="name">Email</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="One of three cols" value="{{$settings->email}}" >
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label class="form-control-label" for="name">sms</label>
                    <input type="text" class="form-control" id="sms" name="sms" placeholder="One of three cols" value="{{$settings->sms}}" >
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label class="form-control-label" for="name">wa</label>
                    <input type="text" class="form-control" id="wa" name="wa" placeholder="One of three cols" value="{{$settings->wa}}" >
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label class="form-control-label" for="name">Facebook</label>
                    <input type="text" class="form-control" id="facebook" name="facebook" placeholder="One of three cols" value="{{$settings->facebook}}" >
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label class="form-control-label" for="name">ig</label>
                    <input type="text" class="form-control" id="ig" name="ig" placeholder="One of three cols" value="{{$settings->ig}}" >
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label class="form-control-label" for="name">Alamat</label>
                    <input type="text" class="form-control" id="alamat" name="alamat" placeholder="One of three cols" value="{{$settings->alamat}}" >
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label class="form-control-label" for="name">Foto Kades</label>
                    <br>
                    Foto Kades : <br>
                  @if($settings->foto_kades)
                  <img src="asset('storage/'.$setting->foto_kades)" alt="foto_kades">
                  @else 
                  No Image
                  @endif
                    <input type="file" class="form-control" id="foto_kades" name="foto_kades" placeholder="One of three cols" value="{{$settings->foto_kades}}" >
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label class="form-control-label" for="name">Wilayah Desa</label>
                    <input type="text" class="form-control" id="wilayah_desa" name="wilayah_desa" placeholder="One of three cols" value="{{$settings->wilayah_desa}}" >
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label class="form-control-label" for="name">Lokasi Balaidesa</label>
                    <input type="text" class="form-control" id="lokasi_balaidesa" name="lokasi_balaidesa" placeholder="One of three cols" value="{{$settings->lokasi_balaidesa}}" >
                  </div>
                </div>
                <br>

              </div>
              <div class="row">
                <div class="col-sm-12">
                    
                  <a href="{{route('home')}}"><button type="button" class="btn btn-primary"> <i class="fa fa-angle-left"></i> </button></a>
                  <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
              </div>
          </form>
        </div>
        <!-- ./box-body -->
      </div>
    </div>
  </div>
</section>




@endsection