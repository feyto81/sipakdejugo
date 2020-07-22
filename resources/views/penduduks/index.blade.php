@extends('layouts.global')
@section('title','Penduduk | Sipakdejugo')
@section('content')

<section class="content">
  <div class="row">
    <div class="col-xs-12">
        <a href="{{url('penduduks/tambah')}}" class="btn btn-social btn-flat btn-success btn-sm visible-xs-block visible-sm-inline-block visible-md-inline-block visible-lg-inline-block"><i class="fa fa-plus"></i> Tambah</a>&nbsp;
        <a target="_blank" href="{{url('penduduks/eksport')}}" class="btn btn-social btn-flat btn-primary btn-sm visible-xs-block visible-sm-inline-block visible-md-inline-block visible-lg-inline-block"><i class="fa fa-file-excel-o"></i> Export Excel</a>&nbsp;
        <a href=""  data-toggle="modal" data-target="#importexcel" class="btn btn-social btn-flat btn-primary btn-sm btn-sm visible-xs-block visible-sm-inline-block visible-md-inline-block visible-lg-inline-block"><i class="fa fa-plus" aria-hidden="true"></i> Import Excel</a>&nbsp;
        
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
              <h3 class="box-title">Penduduk</h3>
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
                    <th>NIK</th>
                    <th>NO KK</th>
                    <th>Nama Lengkap</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                	@foreach($penduduks as $row)
                    <tr>
                      <td>{{$loop->iteration}}</td>
                      <td><a href="{{url('penduduks/detail/'.$row->id)}}">{{$row->nik}}</a></td>
                      <td>{{$row->no_kk}}</td>
                      <td>{{$row->nama}}</td>
                      <td>
                        <a href="{{url('penduduks/detail/'.$row->id)}}" class="btn bg-green btn-flat btn-sm"  title="Detail Data"><i class="fa fa-eye"></i></a>
                        <a href="{{url('penduduks/edit/'.$row->id)}}" class="btn bg-orange btn-flat btn-sm"  title="Ubah Data"><i class="fa fa-edit"></i></a>

                        <a href="{{url('penduduks/delete/'.$row->id)}}"  onclick="return confirm('Delete this Data permanently?')" class="btn bg-maroon btn-flat btn-sm"  title="Hapus"><i class="fa fa-trash-o"></i></a>
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
<div class="modal fade" id="importexcel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
                <h5 class="modal-title" id="exampleModalLabel">Import Excel</h5>
              </div>
              <div class="modal-body">
                <form action="{{url('penduduks/import_excel')}}" method="POST" enctype="multipart/form-data">
                  {{csrf_field()}}
                  <div class="form-group">
                    <label for="validationServer033">Upload Penduduk</label>
                   <input class="form-control"  type="file" name="file" required="required">
                   <small>(File Harus berupa xlsx,xlx,csv)</small>
                   @if($errors->has('file'))
                    <span class="text-danger">
                      <small>{{$errors->first('file')}}</small>
                    </span>
                  @endif
                    
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
                    <button type="reset" class="btn btn-danger">Reset</button>
                    <button type="submit" class="btn btn-primary"><i class="fa fa-paper-plane"></i>Submit</button>
                  </div>
                </form>
              </div>
            </div>

          </div>
        </div>

@endsection
@push('bottom')

<script >
          
          
              
    </script>

@endpush