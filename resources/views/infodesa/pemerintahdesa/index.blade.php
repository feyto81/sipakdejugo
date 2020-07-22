@extends('layouts.global')
@section('title','Aparat Pemerintah Desa | Sipakdejugo')
@section('content')
<section class="content-header">
    <h1>Pemerintahan Desa</h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
      <li class="active">Pemerintahan Desa</li>
    </ol>
  </section>
<section class="content" id="maincontent">
  <div class="row">
    
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
                  <a href="{{url('tambah-aparat')}}" class="btn btn-social btn-flat btn-success btn-sm btn-sm visible-xs-block visible-sm-inline-block visible-md-inline-block visible-lg-inline-block"  title="Tambah Staf">
                  <i class="fa fa-plus"></i>Tambah Aparat Pemerintahan Desa            </a>
                
                </a>
                <a href="" class="btn btn-social btn-flat bg-purple btn-sm visible-xs-block visible-sm-inline-block visible-md-inline-block visible-lg-inline-block" title="Cetak Data" data-remote="false" data-toggle="modal" data-target="#modalBox" data-title="Cetak Data"><i class="fa fa-print "></i> Cetak</a>
                
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
                    <th>Aksi</th>
                    <th>Foto</th>
                    <th>Nama,NIP/NIAP,NIK</th>
                    <th>Tempat,Tanggal_Lahir</th>
                    <th>Jenis_Kelamin</th>
                    <th>Agama</th>
                    <th>Pangkat/Golongan</th>
                    <th>Jabatan</th>
                    <th>Pendidikan_Terakhir</th>
                    <th>Nomor_SK_Pengangkatan </th>
                    <th>Tanggal_SK_Pengangkatan</th>
                    <th>Nomor_SK_Pemberhentian</th>
                    <th>Tanggal_SK_Pemberhentian</th>
                    <th>Masa/Periode_Jabatan</th>
                </tr>
                </thead>
                <tbody>
                  @foreach($aparat as $row)
                  <tr>
                    <td>{{$loop->iteration}}</td>
                    <td nowrap>
                        <a href="{{url('aparat/edit/'.$row->id)}}" class="btn bg-orange btn-flat btn-sm"  title="Ubah Data"><i class="fa fa-edit"></i></a>
                        <a href="{{url('aparat/delete/'.$row->id)}}"  onclick="return confirm('Delete this Data permanently?')" class="btn bg-maroon btn-flat btn-sm"  title="Hapus"><i class="fa fa-trash-o"></i></a>
                    </td>
                    
                    @if($row->foto==null)
                    <td>Gambar Tidak Ada</td>
                    @else
                      <td><img class="profile-user-img img-responsive img-circle" src="{{asset('uploads/'.$row->foto)}}" alt="Logo">
                    </td>
                    @endif
                    <td class="nowrap">{{$row->nama}}<p class='text-blue'>
                      <i>NIP :{{$row->nip}}</i></br>
                    <i>NIK :{{$row->nik}}</i>
                    </p></td>
                    <td>{{$row->tempat}}, {{$row->tanggal_lahir}}</td>
                    @if($row->jenis_kelamin == 'L')
                      <td>Laki - Laki</td>
                    @else
                      <td>Perempuan</td>
                    @endif
                    
                    @if($row->agama == 1)
                      <td>Islam</td>
                    @elseif($row->agama == 2)
                      <td>Kristen</td>
                    @elseif($row->agama == 3)
                      <td>Katholik</td>
                    @elseif($row->agama == 4)
                      <td>Hindu</td>
                    @elseif($row->agama == 5)
                      <td>Budha</td>
                    @elseif($row->agama == 6)
                      <td>Khonghucu</td>
                    @else
                      <td>Kepercayaan terhada YME</td>
                      @endif
                    <td>{{$row->pangkat}}</td>
                    <td>{{$row->jabatan}}</td>

                    @if($row->pendidikan_terakhir == 1)
                      <td>Tidak / Belum Sekolah</td>
                    @elseif($row->pendidikan_terakhir == 2)
                      <td>Belum Tamat SD / Sederajat</td>
                    @elseif($row->pendidikan_terakhir == 3)
                      <td>Tamat SD / Sederajat</td>
                    @elseif($row->pendidikan_terakhir == 4)
                      <td>SLTP / Sederajat</td>
                    @elseif($row->pendidikan_terakhir == 5)
                      <td>SLTA / Sederajat</td>
                    @elseif($row->pendidikan_terakhir == 6)
                      <td>Diploma I / II</td>
                    @elseif($row->pendidikan_terakhir == 7)
                      <td>Akademi / Diploma III / S.Muda</td>
                    @elseif($row->pendidikan_terakhir == 8)
                      <td>Diploma IV / Strata I</td>
                    @elseif($row->pendidikan_terakhir == 9)
                      <td>Strata II</td>

                    @else
                      <td>Strata III</td>
                      @endif


                    <td>{{$row->nomor_sk_pengangkatan}}</td>
                    <td>{{$row->tanggal_sk_pengangkatan}}</td>
                    <td>{{$row->nomor_sk_pemberhentian}}</td>
                    <td>{{$row->tanggal_sk_pemberhentian}}</td>
                    <td>{{$row->masa_periode}}</td>

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