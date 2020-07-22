@extends('layouts.global')
@section('title','Edit Category | Sipakdejugo')
@section('content')

<section class="content">
  <div class="row">
        <div class="col-md-6">
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
              <h3 class="box-title">Edit Category</h3>
              <div class="pull-right box-tools">
                <button type="button" class="btn btn-info btn-sm" data-widget="collapse" data-toggle="tooltip"
                        title="Collapse">
                  <i class="fa fa-minus"></i></button>
                <button type="button" class="btn btn-info btn-sm" data-widget="remove" data-toggle="tooltip"
                        title="Remove">
                  <i class="fa fa-times"></i></button>
              </div>
            </div>
            <form role="form" action="{{url('/category/update/'.$category->id)}}" method="POST">
              {{csrf_field()}}
              <div class="box-body">
                <div class="form-group">
                  <label for="nama_kategori">Nama Kategori</label>
                  <input type="text" class="form-control" name="nama_kategori" id="nama_kategori" value="{{$category->nama_kategori}}">
                </div>
                <div class="form-group">
                  <label for="slug">Slug</label>
                  <input type="text" class="form-control" name="slug" id="slug" value="{{$category->slug}}">
                </div>
              </div>

              <div class="box-footer">
                <a href="{{url('category/all')}}" class="btn btn-warning"><i class="fa fa-backward">&nbsp;Kembali</i></a>
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