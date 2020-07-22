@extends('layouts.global')
@section('title','Lemabaga Pemberdayaan Masyarakat | Sipakdejugo')
@section('content')

<section class="content">
  <div class="row">
        <div class="col-md-9">
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
              <h3 class="box-title">Lemabaga Pemberdayaan Masyarakat</h3>
              <div class="pull-right box-tools">
                <button type="button" class="btn btn-info btn-sm" data-widget="collapse" data-toggle="tooltip"
                        title="Collapse">
                  <i class="fa fa-minus"></i></button>
                <button type="button" class="btn btn-info btn-sm" data-widget="remove" data-toggle="tooltip"
                        title="Remove">
                  <i class="fa fa-times"></i></button>
              </div>
              
            </div>
            <form role="form" action="{{url('/lpm/update/'.$lpm->id)}}" method="POST" enctype="multipart/form-data" >
              {{csrf_field()}}
              <div class="box-body">
                <div class="form-group">
                  <label for="title">Judul</label>
                  <input type="text" class="form-control" name="judul" id="judul" value="{{$lpm->judul}}">
                  <input type="hidden" name="user_id" id="user_id" value="{{Auth::user()->id}}">
                </div>
                <div class="form-group">
                  <label>Isi</label>
                   <textarea name="isi" id="konten" class="form-control" placeholder="Place some text here"
                         rows="10" cols="50">
                        {!!$lpm->isi!!}
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
        <div class="col-md-3">
            <div class="callout callout-warning">
              <h4>Lembaga Pemberdayaan Masyarakat</h4>
              Menu Lemabaga Pemberdayaan Masyarakat ini menjelaskan Lembaga Pemberdayaan Masyarakat desa Jugo, harap disi atau di edit dengan benar
            </div>
          
        </div>

      </div>
</section>

@endsection
@push('bottom')

<script >
          
         
              
    </script>

@endpush