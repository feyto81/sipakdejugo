@extends('layouts.global')
@section('title','Wilayah Administratif Desa | Sipakdejugo')
@section('content')
<section class="content-header">
    <h1>Wilayah Administratif Dusun</h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
      <li class="active">Daftar Dusun</li>
    </ol>
  </section>
<section class="content" id="maincontent">
  <div class="row">
    
    <div class="col-xs-12">
      
      <div class="box box-primary">
                
        <div class="box-header with-border">
                 
                <button type="button" class="btn btn-social btn-flat btn-success btn-sm btn-sm visible-xs-block visible-sm-inline-block visible-md-inline-block visible-lg-inline-block" data-toggle="modal" data-target="#tambahdusun"   title="Tambah Dusun"><i class="fa fa-plus"></i>Tambah Dusun</button>
                
                
              <div class="pull-right box-tools">
                <button type="button" class="btn btn-info btn-sm" data-widget="collapse" data-toggle="tooltip"
                        title="Collapse">
                  <i class="fa fa-minus"></i></button>
                <button type="button" class="btn btn-info btn-sm" data-widget="remove" data-toggle="tooltip"
                        title="Remove">
                  <i class="fa fa-times"></i></button>
                  
              </div>
              <hr>
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
        </div>

        <div class="box-body table-responsive">
              <table id="example1" class="table table-bordered table-hover">
                <thead>
                <tr>
                    <th>No</th>
                    <th>Aksi</th>
                    <th>Dusun</th>
                    <th>Kepala Dusun</th>
                    <th>RW</th>
                    <th>RT</th>
                    <th>KK</th>
                    <th>L+P</th>
                    <th>L</th>
                    <th>P</th>
                    
                </tr>
                </thead>
                <tbody>
                  @foreach($dusun as $row)
                  <tr>
                    <td>{{$loop->iteration}}</td>
                    <td nowrap>
                        <a href="{{url('wilayah/edit/'.$row->id)}}" class="btn bg-orange btn-flat btn-sm"  title="Ubah Data"><i class="fa fa-edit"></i></a>
                        <a href="{{url('wilayah/delete/'.$row->id)}}"  onclick="return confirm('Delete this Data permanently?')" class="btn bg-maroon btn-flat btn-sm"  title="Hapus"><i class="fa fa-trash-o"></i></a>
                    </td>
                    <td>{{$row->dusun}}</>
                    <td>{{$row->kepala_dusun}}</td>
                    <td>{{$row->rw}}</td>
                    <td>{{$row->rt}}</td>
                    <td>{{$row->kk}}</td>
                    <td>{{$row->jumlah_seluruh}}</td>
                    <td>{{$row->laki}}</td>
                    <td>{{$row->perempuan}}</td>

                  </tr>
                  @endforeach
                </tbody>
                
              </table>
            </div>
      </div>
    </div>
  </div>
</section>
<div class="modal"  tabindex="-1" role="dialog"  id="modal-detail">
  <div class="modal-dialog modal-lg">
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
              <th style="width: 35%">Judul</th>
              <td><span id="jan"></span></td>
            </tr>
            <tr>
              <th style="width: 35%">Gambar</th>
              <td><span id="gan"></span></td>
            </tr>
            <tr>
              <th style="width: 35%">Nama Kategori</th>
              <td><span id="nama_kategori_s"></span></td>
            </tr>
            <tr>
              <th style="">Nama Pembuat</th>
              <td><span id="user"></span></td>
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
<div class="modal fade" id="tambahdusun" tabindex="-1" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
      <form id="formSave" action="{{url('dusun/add')}}" method="POST">
        {{csrf_field()}}
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          <h4 class="modal-title">Add Dusun</h4>
  
        </div>
        <div class="modal-body">
          <div class="form-group">
              <label for="dusun">Dusun</label>
              <input type="text" name="dusun" id="dusun" class="form-control" value=""></input>
          </div>
          <div class="form-group">
              <label for="kepala_dusun">Kepala Dusun</label>
              <input type="text" name="kepala_dusun" id="kepala_dusun" class="form-control" value=""></input>
          </div>
          <div class="form-group">
            <label for="rw">RW</label>
            <input type="number" name="rw" id="rw" class="form-control" value=""></input>
        </div>
        <div class="form-group">
            <label for="rt">RT</label>
            <input type="number" name="rt" id="rt" class="form-control" value=""></input>
        </div>
        <div class="form-group">
            <label for="kk">KK</label>
            <input type="text" name="kk" id="kk" class="form-control" value=""></input>
        </div>
        <div class="form-group">
            <label for="laki">Jumlah Laki-laki</label>
            <input type="number" name="laki" id="laki" class="form-control" value=""></input>
        </div>
        <div class="form-group">
            <label for="perempuan">Jumlah Perempuan</label>
            <input type="number" name="perempuan" id="perempuan" class="form-control" value=""></input>
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
    <script type="text/javascript">
      //   function total(){
      //   lk = $('#laki').val();
      //   pr = $('#perempuan').val();
      //   hsl = (parseInt(lk) + parseInt(pr));  
      //   $('#jumlah_seluruh').val(hsl);
      // }
      </script>

@endpush
