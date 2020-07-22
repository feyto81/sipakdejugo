@extends('layouts.global')
@section('title','Edit Slider | Sipakdejugo')
@section('content')

<section class="content">

  <div class="row">
    <div class="col-xs-12">
       <a href="{{url('slider/konfigurasi')}}" data-toggle="tooltip" class="btn btn-social btn-flat btn-info btn-sm visible-xs-block visible-sm-inline-block visible-md-inline-block visible-lg-inline-block" title="Kembali Ke Data Desa"><i class="fa fa-arrow-circle-o-left"></i> Kembali Ke Data Slider</a><br><br>
        
    </div>
        <div class="col-md-12">
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
              <h3 class="box-title">Edit Slider</h3>
              <div class="pull-right box-tools">
                <button type="button" class="btn btn-info btn-sm" data-widget="collapse" data-toggle="tooltip"
                        title="Collapse">
                  <i class="fa fa-minus"></i></button>
                <button type="button" class="btn btn-info btn-sm" data-widget="remove" data-toggle="tooltip"
                        title="Remove">
                  <i class="fa fa-times"></i></button>
              </div>
              
            </div>
            <form role="form" action="{{url('/slider/update/'.$slider->id)}}" method="POST" enctype="multipart/form-data" >
              {{csrf_field()}}
              <div class="box-body">
                
                <div class="form-group">
                  <label for="gambar">Gambar</label><br>
                  <label><img src="{{asset('uploads/'.$slider->gambar)}}" width="100%" height="100%"></label>

                  <input type="file" class="form-control" name="gambar" id="gambar" value="">
                  <small>Biarkan Kosong Jika Tidak Di Ganti</small>
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