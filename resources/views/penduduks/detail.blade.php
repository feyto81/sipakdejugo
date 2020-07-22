@extends('layouts.global')
@section('title','Detail Penduduk | Sipakdejugo')
@section('content')

  <section class="content-header">
    <h1>Biodata Penduduk</h1>
    <ol class="breadcrumb">
      <li><a href="{{url('/home')}}"><i class="fa fa-home"></i> Home</a></li>
      <li><a href="{{url('penduduks/konfigurasi')}}"> Daftar Penduduk</a></li>
      <li class="active">Biodata Penduduk</li>
    </ol>
  </section>
  <section class="content" id="maincontent">
    <form id="mainform" name="mainform" action="" method="post">
      <div class="row">
        <div class="col-md-12">
          <div class="box box-info">
            <div class="box-header">
                 <a href="{{url('penduduks/konfigurasi')}}" class="btn btn-social btn-flat btn-info btn-sm btn-sm visible-xs-block visible-sm-inline-block visible-md-inline-block visible-lg-inline-block"  title="Kembali Ke Daftar Penduduk">
                <i class="fa fa-arrow-circle-left"></i>Kembali Ke Daftar Penduduk
                </a>
                <a href="{{url('penduduks/edit/'.$penduduks->id)}}" class="btn btn-social btn-flat btn-warning btn-sm visible-xs-block visible-sm-inline-block visible-md-inline-block visible-lg-inline-block" title="Ubah Biodata" ><i class="fa fa-edit"></i> Ubah Biodata</a>
                            
                           
            </div>
            <div class="box-body">
              <div class="row">
                <div class="col-md-12">
                  <div class="box-header with-border">
                    <h3 class="box-title">Biodata Penduduk (NIK : {{$penduduks->nik}})</h3>
                    <br>
                                          <p class="kecil">
                        Terdaftar sebelum:
                        <i class="fa fa-clock-o"></i>{{$penduduks->created_at}}                     </p>
                                                          </div>
                </div>
                <div class="col-md-12">
                  <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover" >
                      <tr>
                        <td colspan="3">
                                                      <img class="penduduk profile-user-img img-responsive img-circle" src="{{asset('uploads/avatar/b.png')}}" alt="Foto">
                                                  </td>
                      </tr>
                    </table>
                  </div>
                  <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover" >
                      <tbody>
                        
                        <tr>
                          <td width="300">Nama</td><td width="1">:</td>
                          <td>{{$penduduks->nama}}</td>
                        </tr>
                        <tr>
                          <td>Nomor Kartu Keluarga</td><td >:</td>
                          <td>
                            {{$penduduks->no_kk}}                                                      </td>
                        </tr>
                        
                        <tr>
                          <td>Hubungan Dalam Keluarga</td><td >:</td><td>{{$penduduks->hubungan_keluarga}}</td>
                        </tr>
                        <tr>
                          <td>Jenis Kelamin</td><td >:</td><td>{{$penduduks->jenis_kelamin}}</td>
                        </tr>
                        <tr>
                          <td>Agama</td><td >:</td><td>{{$penduduks->agama}}</td>
                        </tr>
                        
                        <tr>
                          <th colspan="3" class="subtitle_head"><strong>DATA KELAHIRAN</strong></th>
                        </tr>
                        <tr>
                          <td>Akta Kelahiran</td><td >:</td><td>{{$penduduks->akte_kelahiran}}</td>
                        </tr>
                        <tr>
                          <td>No Akta Kelahiran</td><td >:</td><td>{{$penduduks->no_akte_kelahiran}}</td>
                        </tr>
                        <tr>
                          <td>Tempat / Tanggal Lahir</td><td >:</td><td>{{$penduduks->tempat_lahir}},  {{$penduduks->tanggal_lahir}}</td>
                        </tr>
                        
                        <tr>
                          <th colspan="3" class="subtitle_head"><strong>PENDIDIKAN DAN PEKERJAAN</strong></th>
                        </tr>
                        <tr>
                          <td>Pendidikan dalam KK</td><td >:</td><td>{{$penduduks->pendidikan}}</td>
                        </tr>
                        
                        <tr>
                          <td>Pekerjaan</td><td >:</td><td>{{$penduduks->pekerjaan}}</td>
                        </tr>
                        <tr>
                          <th colspan="3" class="subtitle_head"><strong>DATA KEWARGANEGARAAN</strong></th>
                        </tr>
                        <tr>
                          <td>Warga Negara</td><td >:</td><td>{{$penduduks->kewarganegaraan}}</td>
                        </tr>
                       
                        <tr>
                          <td>NIK Ayah</td><td >:</td><td>{{$penduduks->nik_ayah}}</td>
                        </tr>
                        <tr>
                          <td>Nama Ayah</td><td >:</td><td>{{$penduduks->nama_ayah}}</td>
                        </tr>
                        <tr>
                          <td>NIK Ibu</td><td >:</td><td>{{$penduduks->nik_ibu}}</td>
                        </tr>
                        <tr>
                          <td>Nama Ibu</td><td >:</td><td>{{$penduduks->nama_ibu}}</td>
                        </tr>
                        <tr>
                          <th colspan="3" class="subtitle_head"><strong>ALAMAT</strong></th>
                        </tr>
                       
                        <tr>
                          <td>Alamat</td><td >:</td><td>{{$penduduks->alamat}}, DESA {{$penduduks->desa}}, KECAMATAN {{$penduduks->kec}}, KABUPATEN {{$penduduks->kab}}</td>
                        </tr>
                        <tr>
                          <td>Dukuh</td><td >:</td><td>{{$penduduks->dukuh}}</td>
                        </tr>
                        <tr>
                          <td>RT/ RW</td><td >:</td><td>{{$penduduks->rt}} / {{$penduduks->rw}}</td>
                        </tr>
                        
                        <tr>
                          <th colspan="3" class="subtitle_head"><strong>STATUS KAWIN</strong></th>
                        </tr>
                        <tr>
                          <td>Status Kawin</td><td >:</td><td>{{$penduduks->status_perkawinan}}</td>
                        </tr>
                                                                        <tr>
                          <th colspan="3" class="subtitle_head"><strong>DATA KESEHATAN</strong></th>
                        </tr>
                        <tr>
                          <td>Golongan Darah</td><td >:</td><td>{{$penduduks->gol_darah}}</td>
                        </tr>
                        <tr>
                          <td>Cacat</td><td >:</td><td>{{$penduduks->penyandang_cacat}}</td>
                        </tr>
                        <tr>
                          <td>Kelainan Fisik</td><td >:</td><td>{{$penduduks->kelainan_fisik}}</td>
                        </tr>
                       
                                                                        
                                              </thead>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </form>
  </section>

@endsection
@push('bottom')

<script >
          
          
              
    </script>

@endpush