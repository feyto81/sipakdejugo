@extends('layouts.global')
@section('title','Profil Wilayah Desa | Sipakdejugo')
@section('content')

<section class="content">
  <div class="row">
        <div class="col-md-8">
          <div class="box box-primary">
                @if (count($errors) > 0)
                  <div class="alert alert-danger alert-dismissible">
                      <ul>
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                          @foreach ($errors->all() as $error)
                              <li>{{ $error }}</li>
                          @endforeach
                      </ul>
                  </div>
                  @endif
            <div class="box-header with-border">
              <h3 class="box-title">Profil Wilayah Desa</h3>
              <div class="pull-right box-tools">
                <button type="button" class="btn btn-info btn-sm" data-widget="collapse" data-toggle="tooltip"
                        title="Collapse">
                  <i class="fa fa-minus"></i></button>
                <button type="button" class="btn btn-info btn-sm" data-widget="remove" data-toggle="tooltip"
                        title="Remove">
                  <i class="fa fa-times"></i></button>
              </div>
              
            </div>
            <form role="form" action="{{url('/profile-wilayah-desa/update/'.$pwd->id)}}" method="POST" enctype="multipart/form-data" >
              {{csrf_field()}}
              <div class="box-body">
                <div class="form-group">
                  <label for="judul">Judul</label>
                  <input type="text" class="form-control" name="judul" id="judul" value="{{$pwd->judul}}">
                  <input type="hidden" name="user_id" id="user_id" value="{{Auth::user()->id}}">
                </div>
                <div class="form-group">
                  <label for="gambar">Gambar</label><br>
                  @if($pwd->gambar==null)
                  <label>(Gambar Tidak Ada)</label>
                  @else
                  <label><img src="{{asset('uploads/'.$pwd->gambar)}}" width="100px" height="100px"></label>
                  @endif
                  <input type="file" class="form-control" name="gambar" id="gambar" value="">
                  <small>(Biarkan Kosong Jika Tidak Di Ganti)</small>
                </div>
                
                <div class="form-group">
                  <label>Body</label>
                   <textarea name="body" id="editor1" class="" placeholder="Place some text here"
                        style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
                        {!!$pwd->body!!}
                  </textarea>
                </div>
              </div>

              <div class="box-footer">
               
                <button type="reset" class="btn btn-danger">Reset</button>
                <button type="submit" class="btn btn-success"><i class="fa fa-paper-plane"></i> Simpan</button>
              </div>
            </form>
          </div>


        </div>
        <div class="col-md-4">
            <div class="callout callout-warning">
              <h4>Profil Wilayah Desa</h4>
              Menu Wilayah desa ini menjelaskan wilayah desa desa, harap disi atau di edit dengan benar
            </div>
          
        </div>

      </div>
</section>

@endsection
@push('bottom')

<script >
          
         
              
    </script>

@endpush