@extends('layouts.global')
@section('title','Tambah Penduduk | Sipakdejugo')
@section('content')

<section class="content">
  <div class="row">
    <div class="col-xs-12">
       <a href="{{url('penduduks/konfigurasi')}}" data-toggle="tooltip" class="btn btn-social btn-flat btn-info btn-sm visible-xs-block visible-sm-inline-block visible-md-inline-block visible-lg-inline-block" title="Kembali Ke Data Desa"><i class="fa fa-arrow-circle-o-left"></i> Kembali Ke Data Penduduk</a>
        
    </div>
    <br>
    <br>
    <div class="col-xs-12">
  <div class='box box-primary'>
    <div class="box-header with-border">
    </div>
    <form action="{{url('penduduks/simpan')}}" method="POST">
      {{ csrf_field() }}
      <div class='box-body'>

        <div class="row">
          <div class='col-sm-4'>
            <div class='form-group'>
              <label for="nik">NIK </label>
              <input id="nik"  name="nik" class="form-control input-sm" type="text" placeholder="Nomor NIK" value=""></input>
            </div>
          </div>
          <div class='col-sm-4'>
            <div class='form-group'>
              <label for="no_kk">NO KK </label>
              <input id="no_kk"  name="no_kk" class="form-control input-sm" type="text" placeholder="Nomor KK" value=""></input>
            </div>
          </div>
          <div class='col-sm-4'>
            <div class='form-group'>
              <label for="nama">Nama Lengkap <code> (Tanpa Gelar) </code> </label>
              <input id="nama" name="nama" class="form-control input-sm" maxlength="100" type="text" placeholder="Nama Lengkap" value=""></input>
            </div>
          </div>
          
        </div>
        <div class="row">
          <div class='col-sm-4'>
            <div class='form-group'>
              <label for="jenis_kelamin">Jenis Kelamin</label>
              <select class="form-control input-sm" name="jenis_kelamin">
                <option value="" disabled selected="">--Pilih--</option>
                <option value="LAKI-LAKI">LAKI-LAKI</option>
                <option value="PEREMPUAN">PEREMPUAN</option>
              </select>
            </div>
          </div>
          <div class='col-sm-4'>
            <div class='form-group'>
              <label for="hubungan_keluarga">Hubungan Dalam Keluarga </label>
              <select class="form-control input-sm" name="hubungan_keluarga">
                <option disabled selected="">Pilih Hubungan Keluarga</option>
                    <option value="KEPALA KELUARGA">KEPALA KELUARGA</option>
                    <option value="SUAMI">SUAMI</option>
                    <option value="ISTRI">ISTRI</option>
                    <option value="ANAK">ANAK</option>
                    <option value="MENANTU">MENANTU</option>
                    <option value="CUCU">CUCU</option>
                    <option value="ORANGTUA">ORANGTUA</option>
                    <option value="MERTUA">MERTUA</option>
                    <option value="FAMILI LAINNYA">FAMILI</option>
                    <option value="PEMBANTU">PEMBANTU</option>
                    <option value="LAINNYA">LAINNYA</option>
                </select>
            </div>
          </div>
          <div class='col-sm-4'>
            <div class='form-group'>
              <label for="agama">Agama</label>
              <select class="form-control input-sm required" name="agama">
                <option value="" disabled selected="">Pilih Agama</option>
                                <option value="ISLAM" >ISLAM</option>
                                <option value="KRISTEN" >KRISTEN</option>
                                <option value="KATHOLIK" >KATHOLIK</option>
                                <option value="HINDU" >HINDU</option>
                                <option value="BUDHA" >BUDHA</option>
                                <option value="KHONGHUCU" >KHONGHUCU</option>
                                <option value="KEPERCAYAAN YME" >KEPERCAYAAN TERHADAP TUHAN YME / LAINNYA</option>
                            </select>
            </div>
          </div>
           <div class='col-sm-4'>
            <div class='form-group'>
              <label for="umur">Umur</label>
              <input id="umur" name="umur" class="form-control input-sm" type="number" placeholder="Umur" value=""></input>
            </div>
          </div>
          
        </div>
        <div class="row">
          <div class='col-sm-12'>
            <div class="form-group subtitle_head" style="background-color: #a2f2ef;">
              <label class="text-right"><strong>DATA KELAHIRAN :</strong></label>
            </div>
          </div>
        </div>
        <div class="row">
           <div class='col-sm-4'>
            <div class="form-group">
              <label for="akte_kelahiran">Akte Kelahiran</label>
              <select class="form-control input-sm" name="akte_kelahiran">
                <option value="" disabled selected="">Pilih</option>
                <option value="ADA">ADA</option>
                <option value="TIDAK ADA">TIDAK ADA</option>
            </select>
            </div>
            <div class='form-group'>
              <label for="no_akte_kelahiran">No Akte Kelahiran </label>
              <input id="no_akte_kelahiran"  name="no_akte_kelahiran" class="form-control input-sm" type="text" placeholder="No Akte Kelahiran" value=""></input>
            </div>
            </div>
            <div class='col-sm-4'>
              <div class='form-group'>
                <label for="tempat_lahir">Tempat Lahir</label>
                <input id="tempat_lahir" name="tempat_lahir" class="form-control input-sm" type="text" placeholder="Tempat Lahir" value=""></input>
              </div>
            </div>
            <div class='col-sm-4'>
              <div class='form-group'>
                <label for="tanggal_lahir">Tanggal Lahir</label>
                <input id="tanggal_lahir" name="tanggal_lahir" class="form-control input-sm" type="date" placeholder="dd/mm/yy"></input>
              </div>
            </div>
        </div>
        <div class="row">
          <div class='col-sm-12'>
            <div class="form-group subtitle_head" style="background-color: #a2f2ef;">
              <label class="text-right"><strong>PENDIDIKAN DAN PEKERJAAN :</strong></label>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-4">
            <label for="pendidikan">Pendidikan Dalam KK </label>
              <select class="form-control input-sm" name="pendidikan">
                <option value="" disabled selected="">Pilih Pendidikan (Dalam KK) </option>
                                <option value="TIDAK/BLM SEKOLAH">TIDAK / BELUM SEKOLAH</option>
                                <option value="BELUM TAMAT SD/SEDERAJAT" >BELUM TAMAT SD / SEDERAJAT</option>
                                <option value="TAMAT SD/SEDERAJAT" >TAMAT SD / SEDERAJAT</option>
                                <option value="SLTP/SEDERAJAT" >SLTP /SEDERAJAT</option>
                                <option value="SLTA/SEDERAJAT" >SLTA / SEDERAJAT</option>
                                <option value="DIPLOMA I/II" >DIPLOMA I / II</option>
                                <option value="AKADEMI/DIPLOMA III/SARJANA MUDA" >AKADEMI / DIPLOMA III/S. MUDA</option>
                                <option value="DIPLOMA IV/STRATA I" >DIPLOMA IV / STRATA I</option>
                                <option value="STRATA II" >STRATA II</option>
                                <option value="STRATA III" >STRATA III</option>
                            </select>
          </div>
          <div class="col-sm-4">
            <label for="pekerjaan">Pekerjaaan</label>
              <select class="form-control input-sm" name="pekerjaan">
                <option value="" disabled selected="">Pilih Pekerjaan</option>
                                <option value="BELUM/TIDAK BEKERJA">BELUM/TIDAK BEKERJA</option>
                                <option value="MENGURUS RUMAH TANGGA" >MENGURUS RUMAH TANGGA</option>
                                <option value="PELAJAR/MAHASISWA">PELAJAR/MAHASISWA</option>
                                <option value="PENSIUNAN">PENSIUNAN</option>
                                <option value="PEGAWAI NEGERI SIPIL (PNS)" >PEGAWAI NEGERI SIPIL (PNS)</option>
                                <option value="TENTARA NASIONAL INDONESIA" >TENTARA NASIONAL INDONESIA (TNI)</option>
                                <option value="KEPOLISIAN RI" >KEPOLISIAN RI (POLRI)</option>
                                <option value="PERDAGANGAN" >PERDAGANGAN</option>
                                <option value="PETANI/PEKEBUN" >PETANI/PEKEBUN</option>
                                <option value="PETERNAK" >PETERNAK</option>
                                <option value="NELAYAN/PERIKANAN" >NELAYAN/PERIKANAN</option>
                                <option value="INDUSTRI" >INDUSTRI</option>
                                <option value="KONSTRUKSI" >KONSTRUKSI</option>
                                <option value="TRANSPORTASI" >TRANSPORTASI</option>
                                <option value="KARYAWAN SWASTA" >KARYAWAN SWASTA</option>
                                <option value="KARYAWAN BUMN" >KARYAWAN BUMN</option>
                                <option value="KARYAWAN BUMD" >KARYAWAN BUMD</option>
                                <option value="KARYAWAN HONORER" >KARYAWAN HONORER</option>
                                <option value="BURUH HARIAN LEPAS" >BURUH HARIAN LEPAS</option>
                                <option value="BURUH TANI/PERKEBUNAN" >BURUH TANI/PERKEBUNAN</option>
                                <option value="BURUH NELAYAN/PERIKANAN" >BURUH NELAYAN/PERIKANAN</option>
                                <option value="BURUH PETERNAKAN" >BURUH PETERNAKAN</option>
                                <option value="PEMBANTU RUMAH TANGGA" >PEMBANTU RUMAH TANGGA</option>
                                <option value="TUKANG CUKUR" >TUKANG CUKUR</option>
                                <option value="TUKANG LISTRIK" >TUKANG LISTRIK</option>
                                <option value="TUKANG BATU" >TUKANG BATU</option>
                                <option value="TUKANG KAYU" >TUKANG KAYU</option>
                                <option value="TUKANG SOL SEPATU" >TUKANG SOL SEPATU</option>
                                <option value="TUKANG LAS/PANDAI BESI" >TUKANG LAS/PANDAI BESI</option>
                                <option value="TUKANG JAHIT" >TUKANG JAHIT</option>
                                <option value="TUKANG GIGI" >TUKANG GIGI</option>
                                <option value="TUKANG RIAS" >PENATA RIAS</option>
                                <option value="PENATA BUSANA" >PENATA BUSANA</option>
                                <option value="PENATA RAMBUT" >PENATA RAMBUT</option>
                                <option value="MEKANIK" >MEKANIK</option>
                                <option value="SENIMAN" >SENIMAN</option>
                                <option value="TABIB" >TABIB</option>
                                <option value="PARAJI" >PARAJI</option>
                                <option value="PERANCANG BUSANA" >PERANCANG BUSANA</option>
                                <option value="PENTERJEMAH" >PENTERJEMAH</option>
                                <option value="IMAM MASJID" >IMAM MASJID</option>
                                <option value="PENDETA" >PENDETA</option>
                                <option value="PASTOR" >PASTOR</option>
                                <option value="WARTAWAN" >WARTAWAN</option>
                                <option value="USTADZ/MUBALIGH" >USTADZ/MUBALIGH</option>
                                <option value="JURU MASAK" >JURU MASAK</option>
                                <option value="PROMOTOR ACARA" >PROMOTOR ACARA</option>
                                <option value="ANGGOTA DPR-RI" >ANGGOTA DPR-RI</option>
                                <option value="ANGGOTA DPD" >ANGGOTA DPD</option>
                                <option value="ANGGOTA BPK" >ANGGOTA BPK</option>
                                <option value="PRESIDEN" >PRESIDEN</option>
                                <option value="WAKIL PRESIDEN" >WAKIL PRESIDEN</option>
                                <option value="ANGGOTA MAHKAMAH KONSTITUSI" >ANGGOTA MAHKAMAH KONSTITUSI</option>
                                <option value="ANGGOTA KABINET KEMENTERIAN" >ANGGOTA KABINET KEMENTERIAN</option>
                                <option value="DUTA BESAR" >DUTA BESAR</option>
                                <option value="GUBERNUR" >GUBERNUR</option>
                                <option value="WAKIL GUBERNUR" >WAKIL GUBERNUR</option>
                                <option value="BUPATI" >BUPATI</option>
                                <option value="WAKIL BUPATI" >WAKIL BUPATI</option>
                                <option value="WALIKOTA" >WALIKOTA</option>
                                <option value="WAKIL WALIKOTA" >WAKIL WALIKOTA</option>
                                <option value="ANGGOTA DPRD PROVINSI" >ANGGOTA DPRD PROVINSI</option>
                                <option value="ANGGOTA DPRD KABUPATEN/KOTA" >ANGGOTA DPRD KABUPATEN/KOTA</option>
                                <option value="DOSEN" >DOSEN</option>
                                <option value="GURU" >GURU</option>
                                <option value="PILOT" >PILOT</option>
                                <option value="PENGACARA" >PENGACARA</option>
                                <option value="NOTARIS" >NOTARIS</option>
                                <option value="ARSITEK" >ARSITEK</option>
                                <option value="AKUNTAN" >AKUNTAN</option>
                                <option value="KONSULTAN" >KONSULTAN</option>
                                <option value="DOKTER" >DOKTER</option>
                                <option value="BIDAN" >BIDAN</option>
                                <option value="PERAWAT" >PERAWAT</option>
                                <option value="APOTEKER" >APOTEKER</option>
                                <option value="PSIKIATER/PSIKOLOG" >PSIKIATER/PSIKOLOG</option>
                                <option value="PENYIAR TELEVISI" >PENYIAR TELEVISI</option>
                                <option value="PENYIAR RADIO" >PENYIAR RADIO</option>
                                <option value="PELAUT" >PELAUT</option>
                                <option value="PENELITI" >PENELITI</option>
                                <option value="SOPIR" >SOPIR</option>
                                <option value="PIALANG" >PIALANG</option>
                                <option value="PARANORMAL" >PARANORMAL</option>
                                <option value="PEDAGANG" >PEDAGANG</option>
                                <option value="PERANGKAT DESA" >PERANGKAT DESA</option>
                                <option value="KEPALA DESA" >KEPALA DESA</option>
                                <option value="BIARAWATI" >BIARAWATI</option>
                                <option value="WIRASWASTA" >WIRASWASTA</option>
                                <option value="LAINNYA" >LAINNYA</option>
                            </select>
          </div>
        </div>
        <br>
        <div class="row">
          <div class='col-sm-12'>
            <div class="form-group subtitle_head" style="background-color: #a2f2ef;">
              <label class="text-right"><strong>DATA KEWARGANEGARAAN :</strong></label>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-4">
            <label for="kewarganegaraan">Status Warga Negara</label>
              <select class="form-control input-sm" name="kewarganegaraan">
                <option value="" disabled selected="">Pilih Warga Negara</option>
                <option value="WNI">WNI</option>
                <option value="WNA">WNA</option>
                <option value="DUA KEWARGANEGARAAN">DUA KEWARGANEGARAAN</option>
            </select>
          </div>
        </div><br>
        <div class="row">
          <div class='col-sm-12'>
            <div class="form-group subtitle_head" style="background-color: #a2f2ef;">
              <label class="text-right"><strong>DATA ORANG TUA :</strong></label>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-4">
            <div class='form-group'>
                  <label for="nik_ayah"> NIK Ayah </label>
                  <input id="nik_ayah"  name="nik_ayah"  class="form-control input-sm nik" type="text" placeholder="Nomor NIK Ayah"  value=""></input>
                </div>
          </div>
          <div class='col-sm-8'>
                <div class='form-group'>
                  <label for="nama_ayah">Nama Ayah </label>
                  <input id="nama_ayah" name="nama_ayah" class="form-control input-sm nama" maxlength="100" type="text" placeholder="Nama Ayah" value=""></input>
                </div>
          </div>
          <div class="col-sm-4">
            <div class='form-group'>
                  <label for="nik_ibu"> NIK Ibu </label>
                  <input id="nik_ibu"  name="nik_ibu"  class="form-control input-sm nik" type="text" placeholder="Nomor NIK Ibu"  value=""></input>
                </div>
          </div>
          <div class='col-sm-8'>
                <div class='form-group'>
                  <label for="nama_ibu">Nama Ibu </label>
                  <input id="nama_ibu" name="nama_ibu" class="form-control input-sm nama" maxlength="100" type="text" placeholder="Nama Ibu" value=""></input>
                </div>
          </div>
        </div><br>
        <div class="row">
          <div class='col-sm-12'>
            <div class="form-group subtitle_head" style="background-color: #a2f2ef;">
              <label class="text-right"><strong>ALAMAT :</strong></label>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-4">
            <label>Dusun </label>
                  <select name="dukuh" class="form-control input-sm required">
                  <option value="" disabled selected="">Pilih Dusun</option>
                  @foreach($dukuh as $row)
                      <option value="{{$row->dusun}}">{{$row->dusun}}</option>
                    @endforeach
                  </select>
          </div>
          <div class="col-sm-4">
            <label for="rw">RW </label>
            <input id="rw" name="rw" class="form-control input-sm nama" type="number" placeholder="RW" value=""></input>
          </div>
          <div class="col-sm-4">
            <label for="rw">RT </label>
            <input id="rt" name="rt" class="form-control input-sm nama" type="number" placeholder="RT" value=""></input>
          </div>
          
        </div>
        <br>
        <div class="row">
          <div class="col-sm-12">
            <label for="rw">Alamat Lengkap </label>
            <input id="alamat" name="alamat" class="form-control input-sm nama" type="text" placeholder="Alamat Lengkap" value=""></input>
          </div>
        </div>
        <br>
        <div class="row">
          <div class="col-sm-4">
            <label for="desa">Desa </label>
            <input id="desa" name="desa" class="form-control input-sm nama" type="text" placeholder="Desa" value=""></input>
          </div>
          <div class="col-sm-4">
            <label for="kec">Kecamatan </label>
            <input id="kec" name="kec" class="form-control input-sm nama" type="text" placeholder="Kecamatan" value=""></input>
          </div>
          <div class="col-sm-4">
            <label for="kabupaten">Kabupaten </label>
            <input id="kab" name="kab" class="form-control input-sm nama" type="text" placeholder="Kabupaten" value=""></input>
          </div>
        </div><br> 
        <div class="row">
          <div class='col-sm-12'>
            <div class="form-group subtitle_head" style="background-color: #a2f2ef;">
              <label class="text-right"><strong>STATUS PERKWAWINAN :</strong></label>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-4">
            <label for="status_kawin">Akte / Buku Nikah</label>
              <select class="form-control input-sm" name="buku_nikah">
                <option value="" disabled selected="">Pilih</option>
                    <option value="TIDAK ADA" >TIDAK ADA</option>
                    <option value="ADA" >ADA</option>
                    
                </select>
          </div>
          <div class="col-sm-4">
            <label for="status_kawin">Status Perkawinan</label>
              <select class="form-control input-sm" name="status_perkawinan">
                <option value="" disabled selected="">Pilih Status Perkawinan</option>
                    <option value="BELUM KAWIN" >BELUM KAWIN</option>
                    <option value="KAWIN" >KAWIN</option>
                    <option value="CERAI HIDUP" >CERAI HIDUP</option>
                    <option value="CERAI MATI" >CERAI MATI</option>
              </select>
          </div>
          <div class="col-sm-4">
            <label for="no_akta_buku_nikah">No. Akta Nikah (Buku Nikah)/Perkawinan </label>
            <input id="no_akta_buku_nikah" name="no_akta_buku_nikah" class="form-control input-sm nomor_sk" type="text" maxlength="40" placeholder="Nomor Akta Perkawinan" value=""></input>
          </div>
          <div class="col-sm-4">
            <div class='form-group'>
              <label for="tanggalperkawinan">Tanggal Perkawinan</label>
                <div class="input-group input-group-sm date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input class="form-control input-sm pull-right" id="tgl_3" name="tanggal_kawin" type="date" placeholder="dd/mm/yy" value="">
                </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-4">
            <label for="akta_cerai">Akta Perceraian</label>
            <select class="form-control input-sm" name="akta_cerai">
                <option value="" disabled selected="">Pilih</option>
                    <option value="TIDAK ADA" >TIDAK ADA</option>
                    <option value="ADA" >ADA</option>
                    
                </select>
          </div>
          <div class="col-sm-4">
            <label for="no_akta_cerai">No. Akta Cerai</label>
            <input id="no_akta_cerai" name="no_akta_cerai" class="form-control input-sm nomor_sk" type="text" maxlength="40" placeholder="Nomor Akta Cerai" value=""></input>
          </div>
          <div class='col-sm-4'>
              <label for="tanggal_penceraian">Tanggal Penceraian</label>
                <div class="input-group input-group-sm date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input class="form-control input-sm pull-right" id="tgl_3" name="tanggal_penceraian" placeholder="dd/mm/yy" type="date" value="">
                </div>
            </div>
        </div><br>
         <div class="row">
          <div class='col-sm-12'>
            <div class="form-group subtitle_head" style="background-color: #a2f2ef;">
              <label class="text-right"><strong>DATA KESEHATAN :</strong></label>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-4">
            <label for="gol_darah">Golongan Darah</label>
                  <select class="form-control input-sm required" name="gol_darah">
                    <option value="" disabled selected="">Pilih Golongan Darah</option>
                    <option value="A" >A</option>
                    <option value="B" >B</option>
                    <option value="AB" >AB</option>
                    <option value="O" >O</option>
                    <option value="A+" >A+</option>
                    <option value="A-" >A-</option>
                    <option value="B+" >B+</option>
                    <option value="B-" >B-</option>
                    <option value="AB+" >AB+</option>
                    <option value="AB-" >AB-</option>
                    <option value="O+" >O+</option>
                    <option value="O-" >O-</option>
                    <option value="TIDAK TAHU" >TIDAK TAHU</option>
                </select>
          </div>
          <div class="col-sm-4">
            <label for="penyandang_cacat">Cacat</label>
                  <select class="form-control input-sm" name="penyandang_cacat" >
                    <option value="" disabled selected="">Pilih Jenis Cacat</option>
                        <option value="CACAT FISIK" >CACAT FISIK</option>
                        <option value="CACAT NETRA/BUTA" >CACAT NETRA/BUTA</option>
                        <option value="CACAT RUNGU/WICARA" >CACAT RUNGU/WICARA</option>
                        <option value="CACAT MENTAL/JIWA" >CACAT MENTAL/JIWA</option>
                        <option value="CACAT FISIK DAN MENTAL" >CACAT FISIK DAN MENTAL</option>
                        <option value="CACAT LAINNYA" >CACAT LAINNYA</option>
                        <option value="TIDAK CACAT" >TIDAK CACAT</option>
                    </select>
          </div>
          <div class="col-sm-4">
            <label for="kelainan_fisik">Kelainan Fisik</label>
                  <select class="form-control input-sm" name="kelainan_fisik" >
                    <option value="" disabled selected=""></option>
                        <option value="TIDAK ADA" >TIDAK ADA</option>
                        <option value="ADA" >ADA</option>
                    </select>
          </div>
        </div>
      </div>
      <div class='box-footer'>
        <div class='col-xs-12'>
          <button type='reset' class='btn btn-social btn-flat btn-danger btn-sm' ><i class='fa fa-times'></i> Batal</button>
          <button type='submit' class='btn btn-social btn-flat btn-info btn-sm pull-right'><i class='fa fa-check'></i> Simpan</button>
        </div>
    </form>
  </div>
  </div>
  </section>


@endsection
@push('bottom')

<script >
          
          
              
    </script>

@endpush