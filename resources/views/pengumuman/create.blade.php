@extends('layouts.global')
@section('title','Pengumuman | Sipakdejugo')
@section('content')

<section class="content">
  <div class="row">
        <div class="col-md-12">
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
              <h3 class="box-title">Pengumuman Desa</h3>
              <div class="pull-right box-tools">
                <button type="button" class="btn btn-info btn-sm" data-widget="collapse" data-toggle="tooltip"
                        title="Collapse">
                  <i class="fa fa-minus"></i></button>
                <button type="button" class="btn btn-info btn-sm" data-widget="remove" data-toggle="tooltip"
                        title="Remove">
                  <i class="fa fa-times"></i></button>
              </div>
              
            </div>
            <form role="form" action="{{url('pengumuman/save')}}" method="POST" enctype="multipart/form-data" >
              {{csrf_field()}}
              <div class="box-body">
                <div class="form-group">
                  <label for="judul">Judul Pengumuman</label>
                  <input type="text" class="form-control" name="judul" id="judul">
                  <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                </div>
                <div class="form-group">
                  <label for="slug">Gambar</label>
                  <input type="file" class="form-control" name="gambar" id="gambar">
                </div>
                
                <div class="form-group">
                  <label>Isi Pengumuman</label>
                   <textarea name="body" id="editor1" class="" placeholder="Place some text here"
                        style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
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
        

      </div>
</section>

@endsection
@push('bottom')

<script >
          
         
              
    </script>

@endpush