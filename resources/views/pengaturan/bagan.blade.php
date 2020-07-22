@extends('layouts.global')
@section('title','Bagan | Sipakdejugo')
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
              <h3 class="box-title">Bagan Struktur Organisasi Desa</h3>
              <div class="pull-right box-tools">
                
                <button type="button" class="btn btn-info btn-sm" data-widget="remove" data-toggle="tooltip"
                        title="Remove">
                  <i class="fa fa-times"></i></button>
              </div>
              
            </div>
            <form role="form" action="{{url('/bagan/update/'.$bagan->id)}}" method="POST" enctype="multipart/form-data" >
              {{csrf_field()}}
              <div class="box-body">
                
                <div class="form-group">
                  <label for="gambar">Gambar</label><br>
                  <label><img src="{{asset('uploads/'.$bagan->gambar)}}" width="100%" height="100%"></label>

                  <input type="file" class="form-control" name="gambar" id="gambar" value="">
                  <small>(Biarkan Kosong Jika Tidak Di Ganti)</small>
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