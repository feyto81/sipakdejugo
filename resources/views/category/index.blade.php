@extends('layouts.global')
@section('title','All Category | Sipakdejugo')
@section('content')

<section class="content">
  <div class="row">
    <div class="col-xs-12">
        <button type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#addcategory"><i class="fa fa-plus"></i>&nbsp;Tambah Category</button>&nbsp;
        
    </div>
    <br>
    <br>
    <div class="col-xs-12">
        
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
              <h3 class="box-title">Category</h3>
              <div class="pull-right box-tools">
                <button type="button" class="btn btn-info btn-sm" data-widget="collapse" data-toggle="tooltip"
                        title="Collapse">
                  <i class="fa fa-minus"></i></button>
                <button type="button" class="btn btn-info btn-sm" data-widget="remove" data-toggle="tooltip"
                        title="Remove">
                  <i class="fa fa-times"></i></button>
              </div>
        </div>

        <div class="box-body table-responsive">
              <table id="example1" class="table table-bordered table-hover">
                <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Kategori</th>
                    <th>Slug</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                  @foreach ($category as $row)
                        <tr>
                          <td width="5%;">{{$loop->iteration}}</td>
                          <td>{{$row->nama_kategori}}</td>
                          <td>{{$row->slug}}</td>
                          <td>
                            <a title="Detail Data" id="set_dtl" class="btn btn-warning btn-sm" 
                              data-toggle="modal" data-target="#modal-detail"
                              data-namak="{{$row->nama_kategori}}"
                              data-slug="{{$row->slug}}"
                              data-buat="{{$row->created_at}}"
                              data-update="{{$row->updated_at}}">
                              <i class="fa fa-eye"></i>
                            </a>
                            <a href="{{url('category/edit/'.$row->id)}}" title="Edit Data" class="btn btn-primary btn-sm"><i class="fa fa-pencil fa-sm"></i></a>
                            <a href="{{url('category/delete/'.$row->id)}}"  onclick="return confirm('Delete this user permanently?')" class="btn btn-danger btn-sm btn-delete"  title="Hapus Data" ><i class="fas fa-sm fa fa-trash"></i></a>
                          </td>
                        </tr>
                    @endforeach
                </tbody>
                
              </table>
            </div>
      </div>
    </div>
  </div>
</section>
<div class="modal modal-primary fade" id="addcategory" tabindex="-1" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
    <form id="formSave" action="{{url('category/add')}}" method="POST">
      {{csrf_field()}}
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h4 class="modal-title">Add Category</h4>

      </div>
      <div class="modal-body">
        <div class="form-group">
            <label for="nama_kategori">Nama Kategori</label>
            <input type="text" name="nama_kategori" id="nama_kategori" class="form-control" value=""></input>
        </div>
        <div class="form-group">
            <label for="slug">Slug Kategori</label>
            <input type="text" name="slug" id="slug" class="form-control" value=""></input>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
        <button type="reset" class="btn btn-danger">Reset</button>
        <button type="submit" class="btn btn-success"><i class="fa fa-paper-plane"></i> Simpan</button>
      </div>
      </form>
    </div>
  </div>
</div>
<div class="modal"  tabindex="-1" role="dialog"  id="modal-detail">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header">
        
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h4 class="modal-title">Category Detail</h4>
      </div>
      <div class="modal-body table-responsive">
        <table class="table table-bordered table-striped" id="sampleTable">
          <tbody>
            <tr>
              <th style="width: 35%">Nama Kategori</th>
              <td><span id="nama_kategori_s"></span></td>
            </tr>
            <tr>
              <th style="">Slug</th>
              <td><span id="slug_s"></span></td>
            </tr>
            <tr>
              <th style="">Di Buat</th>
              <td><span id="created_at"></span></td>
            </tr>
            <tr>
              <th style="">Di Update</th>
              <td><span id="updated_at"></span></td>
            </tr>
            
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
@endsection
@push('bottom')

<script >
          
          $(document).ready(function() {
            $(document).on('click', '#set_dtl', function() {
              var nama_kategorii = $(this).data('namak');
              var slugi = $(this).data('slug');
              var created_at = $(this).data('buat');
              var updated_at = $(this).data('update');
             
              $('#nama_kategori_s').text(nama_kategorii);
              $('#slug_s').text(slugi);
              $('#created_at').text(created_at);
              $('#updated_at').text(updated_at);
            })
          })
              
    </script>

@endpush