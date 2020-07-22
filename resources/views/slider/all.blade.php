@extends('layouts.global')
@section('title','Slider | Sipakdejugo')
@section('content')

<section class="content">
  <div class="row">
    <div class="col-xs-12">
        <button type="button" class="btn btn-social btn-flat btn-success btn-sm btn-sm visible-xs-block visible-sm-inline-block visible-md-inline-block visible-lg-inline-block" data-toggle="modal" data-target="#tambahslider"   title="Tambah Slider"><i class="fa fa-plus"></i>Tambah Slider</button>
        
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
              <h3 class="box-title">Slider</h3>
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
                    <th>Gambar</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                	@foreach($slider as $row)
                  	<tr>
                  		<td>{{$loop->iteration}}</td>
                  		<td><img src="{{asset('uploads/'.$row->gambar)}}" width="10%" height="10%"></td>
                  		<td>
                  			<a href="{{url('slider/edit/'.$row->id)}}" title="Edit Data" class="btn btn-primary btn-sm"><i class="fa fa-pencil fa-sm"></i></a>
                            <a href="{{url('slider/delete/'.$row->id)}}"  onclick="return confirm('Delete this user permanently?')" class="btn btn-danger btn-sm btn-delete"  title="Hapus Data" ><i class="fas fa-sm fa fa-trash"></i></a>
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
<div class="modal fade" id="tambahslider" tabindex="-1" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
      <form id="formSave" action="{{url('slider/simpan')}}" method="POST" enctype="multipart/form-data" >
        {{csrf_field()}}
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          <h4 class="modal-title">Add Slider</h4>
  
        </div>
        <div class="modal-body">
          <div class="form-group">
              <label for="gambar">Gambar</label>
              <input type="file" name="gambar" id="gambar" class="form-control" value=""></input>
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

@endsection
@push('bottom')



@endpush