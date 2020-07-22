@extends('layouts.global')
@section('title','Pengumuman | Sipakdejugo')
@section('content')

<section class="content">
  <div class="row">
    <div class="col-xs-12">
        <a href="{{url('pengumuman/getadd')}}" class="btn btn-social btn-flat btn-success btn-sm visible-xs-block visible-sm-inline-block visible-md-inline-block visible-lg-inline-block"><i class="fa fa-plus"></i> Tambah</a>&nbsp;
        
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
              <h3 class="box-title">Pengumuman</h3>
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
                    <th>Judul</th>
                    <th>Nama Pembuat</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                	@foreach($pengumuman as $row)
                  	<tr>
                  		<td>{{$loop->iteration}}</td>
                  		<td>{{$row->judul}}</td>
                  		<td>{{$row->User->name}}</td>
                  		<td>
                  			<a href="{{url('pengumuman/edit/'.$row->id)}}" title="Edit Data" class="btn btn-primary btn-sm"><i class="fa fa-pencil fa-sm"></i></a>
                            <a href="{{url('pengumuman/delete/'.$row->id)}}"  onclick="return confirm('Delete this user permanently?')" class="btn btn-danger btn-sm btn-delete"  title="Hapus Data" ><i class="fas fa-sm fa fa-trash"></i></a>
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

@endsection
@push('bottom')

<script >
          
          $(document).ready(function() {
            $(document).on('click', '#set_dtl', function() {
              var ja = $(this).data('j');
              var ga = $(this).data('g');
              var nama_kategorii = $(this).data('nama_k');
              var u = $(this).data('nama_u');
              var created_at = $(this).data('buat');
              var updated_at = $(this).data('update');
             
              $('#jan').text(ja);
              $('#gan').text(ga);
              $('#nama_kategori_s').text(nama_kategorii);
              $('#user').text(u);
              $('#created_at').text(created_at);
              $('#updated_at').text(updated_at);
            })
          })
              
    </script>

@endpush