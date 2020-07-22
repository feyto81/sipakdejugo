@extends('layouts.global')
@section('title','Edit Berita | Sipakdejugo')
@section('content')

<section class="content">
  <div class="row">
        <div class="col-md-8">
          <div class="box box-primary">
                @if (count($errors) > 0)
                  <div class="alert alert-danger">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    
                      <ul>
                          @foreach ($errors->all() as $error)
                              <li>{{ $error }}</li>
                          @endforeach
                      </ul>
                  </div>
                  @endif
            <div class="box-header with-border">
              <h3 class="box-title">Edit Berita</h3>
              <div class="pull-right box-tools">
                <button type="button" class="btn btn-info btn-sm" data-widget="collapse" data-toggle="tooltip"
                        title="Collapse">
                  <i class="fa fa-minus"></i></button>
                <button type="button" class="btn btn-info btn-sm" data-widget="remove" data-toggle="tooltip"
                        title="Remove">
                  <i class="fa fa-times"></i></button>
              </div>
              
            </div>
            <form role="form" action="{{url('/berita/update/'.$berita->id)}}" method="POST" enctype="multipart/form-data" >
              {{csrf_field()}}
              <div class="box-body">
                <div class="form-group">
                  <label for="judul">Judul Berita</label>
                  <input type="text" class="form-control" name="judul" id="judul" value="{{$berita->judul}}">
                </div>
                <div class="form-group">
                  <label for="gambar">Gambar</label><br>
                  <label><img src="{{asset('uploads/'.$berita->gambar)}}" width="50px" height="50px"></label>

                  <input type="file" class="form-control" name="gambar" id="gambar" value="">
                  <small>Biarkan Kosong Jika Tidak Di Ganti</small>
                </div>
                <div class="form-group">
                  <label>Kategori Artikel</label>
                  <select name="categoris_id" class="form-control">
                      <option disabled selected="">--Pilih--</option>
                      @foreach($category as $row)
                        @if($row->id==$berita->categoris_id)
                        <option value={{$row->id}} selected='selected'>{{$row->nama_kategori}}</option>
                        @else
                        <option value={{$row->id}}>{{$row->nama_kategori}}</option>
                        @endif
                      @endforeach
                  </select>
                </div>
                <div class="form-group">
                  <label>Isi Berita</label>
                   <textarea name="body" id="editor1" class="" placeholder="Place some text here"
                        style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
                        {!!$berita->body!!}
                  </textarea>
                </div>
              </div>

              <div class="box-footer">
                <button type="button" class="btn btn-warning" data-dismiss="modal"><i class="fa fa-backward"></i> Back</button>
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