@extends('layouts.global')
@section('title','Visi Dan Misi | Sipakdejugo')
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
              <h3 class="box-title">Visi Dan Misi</h3>
              <div class="pull-right box-tools">
                <button type="button" class="btn btn-info btn-sm" data-widget="collapse" data-toggle="tooltip"
                        title="Collapse">
                  <i class="fa fa-minus"></i></button>
                <button type="button" class="btn btn-info btn-sm" data-widget="remove" data-toggle="tooltip"
                        title="Remove">
                  <i class="fa fa-times"></i></button>
              </div>
              
            </div>
            <form role="form" action="{{url('/vm/update/'.$vm->id)}}" method="POST" enctype="multipart/form-data" >
              {{csrf_field()}}
              <div class="box-body">
                <div class="form-group">
                  <label for="title">Judul</label>
                  <input type="text" class="form-control" name="title" id="title" value="{{$vm->title}}">
                  <input type="hidden" name="user_id" id="user_id" value="{{Auth::user()->id}}">
                </div>
                <div class="form-group">
                  <label for="images">Gambar</label><br>
                  <label><img src="{{asset('uploads/'.$vm->images)}}" width="100px" height="100px"></label>

                  <input type="file" class="form-control" name="images" id="images" value="">
                  <small>(Biarkan Kosong Jika Tidak Di Ganti)</small>
                </div>
                
                <div class="form-group">
                  <label>Visi</label>
                   <textarea name="visi" id="editor1" class="textarea" placeholder="Place some text here"
                        style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
                        {!!$vm->visi!!}
                  </textarea>
                </div>
                <div class="form-group">
                  <label>Misi</label>
                   <textarea name="misi" id="editor2" class="" placeholder="Place some text here"
                        style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
                        {!!$vm->misi!!}
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
              <h4>Visi Dan Misi Desa</h4>
              Menu visi dan misi ini menjelaskan visi dan misi desa, harap disi atau di edit dengan benar
            </div>
          
        </div>

      </div>
</section>

@endsection
@push('bottom')

<script >
          
         
              
    </script>

@endpush