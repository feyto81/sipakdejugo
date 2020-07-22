@extends('layouts.global')
@section('title','Edit Penduduk | Sipakdejugo')
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
    <form action="{{url('penduduks/update/'.$penduduks->id)}}" method="POST">
      {{ csrf_field() }}
      <div class='box-body'>

        <div class="row">
          <div class='col-sm-4'>
            <div class='form-group'>
              <label for="nik">NIK </label>
              <input id="nik"  name="nik" class="form-control input-sm" type="text" placeholder="Nomor NIK" value="{{$penduduks->nik}}"></input>
            </div>
          </div>
          <div class='col-sm-4'>
            <div class='form-group'>
              <label for="no_kk">NO KK </label>
              <input id="no_kk"  name="no_kk" class="form-control input-sm" type="text" placeholder="Nomor KK" value="{{$penduduks->no_kk}}"></input>
            </div>
          </div>
          <div class='col-sm-4'>
            <div class='form-group'>
              <label for="nama">Nama Lengkap <code> (Tanpa Gelar) </code> </label>
              <input id="nama" name="nama" class="form-control input-sm" maxlength="100" type="text" placeholder="Nama Lengkap" value="{{$penduduks->nama}}"></input>
            </div>
          </div>
          
        </div>
        <div class="row">
          <div class='col-sm-4'>
            <div class='form-group'>
              <label for="jenis_kelamin">Jenis Kelamin</label>
              <select class="form-control input-sm" name="jenis_kelamin">
                <option value="" disabled selected="">Jenis Kelamin</option>
                <option value="LAKI-LAKI" @if($penduduks->jenis_kelamin == 'LAKI-LAKI') selected @endif>LAKI-LAKI</option>
                <option value="PEREMPUAN" @if($penduduks->jenis_kelamin == 'PEREMPUAN') selected @endif>PEREMPUAN</option>
              </select>
            </div>
          </div>
          <div class='col-sm-4'>
            <div class='form-group'>
              <label for="hubungan_keluarga">Hubungan Dalam Keluarga </label>
              <select class="form-control input-sm" name="hubungan_keluarga">
                <option disabled selected="">Pilih Hubungan Keluarga</option>


                    <option value="KEPALA KELUARGA" @if($penduduks->hubungan_keluarga == 'KEPALA KELUARGA') selected @endif>KEPALA KELUARGA</option>
                    <option value="SUAMI" @if($penduduks->jenis_kelamin == 'SUAMI') selected @endif>SUAMI</option>
                    <option value="ISTRI" @if($penduduks->jenis_kelamin == 'ISTRI') selected @endif>ISTRI</option>
                    <option value="ANAK" @if($penduduks->jenis_kelamin == 'ANAK') selected @endif>ANAK</option>
                    <option value="MENANTU" @if($penduduks->jenis_kelamin == 'MENANTU') selected @endif>MENANTU</option>
                    <option value="CUCU" @if($penduduks->jenis_kelamin == 'CUCU') selected @endif>CUCU</option>
                    <option value="ORANG TUA" @if($penduduks->jenis_kelamin == 'ORANG TUA') selected @endif>ORANG TUA</option>
                    <option value="MERTUA" @if($penduduks->jenis_kelamin == 'MERTUA') selected @endif>MERTUA</option>
                    <option value="FAMILI LAIN" @if($penduduks->jenis_kelamin == 'FAMILI LAIN') selected @endif>FAMILI LAIN</option>
                    <option value="PEMBANTU" @if($penduduks->jenis_kelamin == 'PEMBANTU') selected @endif>PEMBANTU</option>
                    <option value="LAINNYA" @if($penduduks->jenis_kelamin == 'LAINNYA') selected @endif>LAINNYA</option>
                </select>
            </div>
          </div>
          <div class='col-sm-4'>
            <div class='form-group'>
              <label for="agama">Agama</label>
              <select class="form-control input-sm required" name="agama">
                <option value="" disabled selected="">Pilih Agama</option>
                                

                                 <option value="ISLAM" @if($penduduks->agama == 'ISLAM') selected @endif>ISLAM</option>
                                 <option value="KRISTEN" @if($penduduks->agama == 'KRISTEN') selected @endif>KRISTEN</option>
                                 <option value="KATHOLIK" @if($penduduks->agama == 'KATHOLIK') selected @endif>KATHOLIK</option>
                                 <option value="HINDU" @if($penduduks->agama == 'HINDU') selected @endif>HINDU</option>
                                 <option value="BUDHA" @if($penduduks->agama == 'BUDHA') selected @endif>BUDHA</option>
                                 <option value="KHONGHUCU" @if($penduduks->agama == 'KHONGHUCU') selected @endif>KHONGHUCU</option>
                                 <option value="KEPERCAYAAN YME" @if($penduduks->agama == 'KEPERCAYAAN YME') selected @endif>KEPERCAYAAN YME</option>
                            </select>
            </div>
          </div>
           <div class='col-sm-4'>
            <div class='form-group'>
              <label for="umur">Umur</label>
              <input id="umur" name="umur" class="form-control input-sm" type="number" placeholder="Umur" value="{{$penduduks->umur}}"></input>
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
                

                <option value="ADA" @if($penduduks->akte_kelahiran == 'ADA') selected @endif>ADA</option>
                <option value="TIDAK ADA" @if($penduduks->akte_kelahiran == 'TIDAK ADA') selected @endif>TIDAK ADA</option>
            </select>
            </div>
            <div class='form-group'>
              <label for="no_akte_kelahiran">No Akte Kelahiran </label>
              <input id="no_akte_kelahiran"  name="no_akte_kelahiran" class="form-control input-sm" type="text" placeholder="No Akte Kelahiran" value="{{$penduduks->no_akte_kelahiran}}"></input>
            </div>
            </div>
            <div class='col-sm-4'>
              <div class='form-group'>
                <label for="tempat_lahir">Tempat Lahir</label>
                <input id="tempat_lahir" name="tempat_lahir" class="form-control input-sm" type="text" placeholder="Tempat Lahir" value="{{$penduduks->tempat_lahir}}"></input>
              </div>
            </div>
            <div class='col-sm-4'>
              <div class='form-group'>
                <label for="tanggal_lahir">Tanggal Lahir</label>
                <input id="tanggal_lahir" name="tanggal_lahir" class="form-control input-sm" type="date" placeholder="dd/mm/yy" value="{{$penduduks->tanggal_lahir}}"></input>
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
                <option disabled selected="">Pilih Pendidikan (Dalam KK) </option>
                                

                                <option value="TIDAK/BLM SEKOLAH" @if($penduduks->pendidikan == 'TIDAK/BLM SEKOLAH') selected @endif>TIDAK/BELUM SEKOLAH</option>
                                <option value="BELUM TAMAT SD/SEDERAJAT" @if($penduduks->pendidikan == 'BELUM TAMAT SD/SEDERAJAT') selected @endif>BELUM TAMAT SD/SEDERAJAT</option>
                                <option value="TAMAT SD/SEDERAJAT" @if($penduduks->pendidikan == 'TAMAT SD/SEDERAJAT') selected @endif>TAMAT SD/SEDERAJAT</option>
                                <option value="SLTP/SEDERAJAT" @if($penduduks->pendidikan == 'SLTP/SEDERAJAT') selected @endif>SLTP/SEDERAJAT</option>
                                <option value="SLTA/SEDERAJAT" @if($penduduks->pendidikan == 'SLTA/SEDERAJAT') selected @endif>SLTA/SEDERAJAT</option>
                                <option value="DIPLOMA I/II" @if($penduduks->pendidikan == 'DIPLOMA I/II') selected @endif>DIPLOMA I/II</option>
                                <option value="AKADEMI/DIPLOMA III/SARJANA MUDA" @if($penduduks->pendidikan == 'AKADEMI/DIPLOMA III/SARJANA MUDA') selected @endif>AKADEMI/DIPLOMA III/SARJANA MUDA</option>
                                <option value="DIPLOMA IV/STRATA I" @if($penduduks->pendidikan == 'DIPLOMA IV/STRATA I') selected @endif>DIPLOMA IV/STRATA I</option>
                                <option value="STRATA II" @if($penduduks->pendidikan == 'STRATA II') selected @endif>STRATA II</option>
                                <option value="STRATA III" @if($penduduks->pendidikan == 'STRATA III') selected @endif>STRATA III</option>

                            </select>
          </div>
          <div class="col-sm-4">
            <label for="pekerjaan">Pekerjaaan</label>
              <select class="form-control input-sm" name="pekerjaan">
                <option value="" disabled selected="">Pilih Pekerjaan</option>
                                

                                <option value="BELUM/TIDAK BEKERJA" @if($penduduks->pekerjaan == 'BELUM/TIDAK BEKERJA') selected @endif>BELUM/TIDAK BEKERJA</option>
                                <option value="MENGURUS RUMAH TANGGA" @if($penduduks->pekerjaan == 'MENGURUS RUMAH TANGGA') selected @endif>MENGURUS RUMAH TANGGA</option>
                                <option value="PELAJAR/MAHASISWA" @if($penduduks->pekerjaan == 'PELAJAR/MAHASISWA') selected @endif>PELAJAR/MAHASISWA</option>
                                <option value="PENSIUNAN" @if($penduduks->pekerjaan == 'PENSIUNAN') selected @endif>PENSIUNAN</option>
                                <option value="PEGAWAI NEGERI SIPIL (PNS)" @if($penduduks->pekerjaan == 'PEGAWAI NEGERI SIPIL (PNS)') selected @endif>PEGAWAI NEGERI SIPIL (PNS)</option>
                                <option value="TENTARA NASIONAL INDONESIA" @if($penduduks->pekerjaan == 'TENTARA NASIONAL INDONESIA') selected @endif>TENTARA NASIONAL INDONESIA</option>
                                <option value="KEPOLISIAN RI" @if($penduduks->pekerjaan == 'KEPOLISIAN RI') selected @endif>KEPOLISIAN RI</option>
                                <option value="PERDAGANGAN" @if($penduduks->pekerjaan == 'PERDAGANGAN') selected @endif>PERDAGANGAN</option>
                                <option value="PETANI/PEKEBUN" @if($penduduks->pekerjaan == 'PETANI/PEKEBUN') selected @endif>PETANI/PEKEBUN</option>
                                <option value="PETERNAK" @if($penduduks->pekerjaan == 'PETERNAK') selected @endif>PETERNAK</option>
                                <option value="NELAYAN/PERIKANAN" @if($penduduks->pekerjaan == 'NELAYAN/PERIKANAN') selected @endif>NELAYAN/PERIKANAN</option>
                                <option value="INDUSTRI" @if($penduduks->pekerjaan == 'INDUSTRI') selected @endif>INDUSTRI</option>
                                <option value="KONSTRUKSI" @if($penduduks->pekerjaan == 'KONSTRUKSI') selected @endif>KONSTRUKSI</option>
                                <option value="TRANSPORTASI" @if($penduduks->pekerjaan == 'TRANSPORTASI') selected @endif>TRANSPORTASI</option>
                                <option value="KARYAWAN SWASTA" @if($penduduks->pekerjaan == 'KARYAWAN SWASTA') selected @endif>KARYAWAN SWASTA</option>
                                <option value="KARYAWAN BUMN" @if($penduduks->pekerjaan == 'KARYAWAN BUMN') selected @endif>KARYAWAN BUMN</option>
                                <option value="KARYAWAN BUMD" @if($penduduks->pekerjaan == 'KARYAWAN BUMD') selected @endif>KARYAWAN BUMD</option>
                                <option value="KARYAWAN HONORER" @if($penduduks->pekerjaan == 'KARYAWAN HONORER') selected @endif>KARYAWAN HONORER</option>
                                <option value="BURUH HARIAN LEPAS" @if($penduduks->pekerjaan == 'BURUH HARIAN LEPAS') selected @endif>BURUH HARIAN LEPAS</option>
                                <option value="BURUH TANI/PERKEBUNAN" @if($penduduks->pekerjaan == 'BURUH TANI/PERKEBUNAN') selected @endif>BURUH TANI/PERKEBUNAN</option>
                                <option value="BURUH NELAYAN/PERIKANAN" @if($penduduks->pekerjaan == 'BURUH NELAYAN/PERIKANAN') selected @endif>BURUH NELAYAN/PERIKANAN</option>
                                <option value="BURUH PETERNAKAN" @if($penduduks->pekerjaan == 'BURUH PETERNAKAN') selected @endif>BURUH PETERNAKAN</option>
                                <option value="PEMBANTU RUMAH TANGGA" @if($penduduks->pekerjaan == 'PEMBANTU RUMAH TANGGA') selected @endif>PEMBANTU RUMAH TANGGA</option>
                                <option value="TUKANG CUKUR" @if($penduduks->pekerjaan == 'TUKANG CUKUR') selected @endif>TUKANG CUKUR</option>
                                <option value="TUKANG LISTRIK" @if($penduduks->pekerjaan == 'TUKANG LISTRIK') selected @endif>TUKANG LISTRIK</option>
                                <option value="TUKANG BATU" @if($penduduks->pekerjaan == 'TUKANG BATU') selected @endif>TUKANG BATU</option>
                                <option value="TUKANG KAYU" @if($penduduks->pekerjaan == 'TUKANG KAYU') selected @endif>TUKANG KAYU</option>
                                <option value="TUKANG SOL SEPATU" @if($penduduks->pekerjaan == 'TUKANG SOL SEPATU') selected @endif>TUKANG SOL SEPATU</option>
                                <option value="TUKANG LAS/PANDAI BESI" @if($penduduks->pekerjaan == 'TUKANG LAS/PANDAI BESI') selected @endif>TUKANG LAS/PANDAI BESI</option>
                                <option value="TUKANG JAHIT" @if($penduduks->pekerjaan == 'TUKANG JAHIT') selected @endif>TUKANG JAHIT</option>
                                <option value="TUKANG GIGI" @if($penduduks->pekerjaan == 'TUKANG GIGI') selected @endif>TUKANG GIGI</option>
                                <option value="TUKANG RIAS" @if($penduduks->pekerjaan == 'TUKANG RIAS') selected @endif>TUKANG RIAS</option>
                                <option value="PENATA BUSANA" @if($penduduks->pekerjaan == 'PENATA BUSANA') selected @endif>PENATA BUSANA</option>
                                <option value="PENATA RAMBUT" @if($penduduks->pekerjaan == 'PENATA RAMBUT') selected @endif>PENATA RAMBUT</option>
                                <option value="MEKANIK" @if($penduduks->pekerjaan == 'MEKANIK') selected @endif>MEKANIK</option>
                                <option value="SENIMAN" @if($penduduks->pekerjaan == 'SENIMAN') selected @endif>SENIMAN</option>
                                <option value="TABIB" @if($penduduks->pekerjaan == 'TABIB') selected @endif>TABIB</option>
                                <option value="PARAJI" @if($penduduks->pekerjaan == 'PARAJI') selected @endif>PARAJI</option>
                                <option value="PERANCANG BUSANA" @if($penduduks->pekerjaan == 'PERANCANG BUSANA') selected @endif>PERANCANG BUSANA</option>
                                <option value="PENTERJEMAH" @if($penduduks->pekerjaan == 'PENTERJEMAH') selected @endif>PENTERJEMAH</option>
                                <option value="IMAM MASJID" @if($penduduks->pekerjaan == 'IMAM MASJID') selected @endif>IMAM MASJID</option>
                                <option value="PENDETA" @if($penduduks->pekerjaan == 'PENDETA') selected @endif>PENDETA</option>
                                <option value="PASTOR" @if($penduduks->pekerjaan == 'PASTOR') selected @endif>PASTOR</option>
                                <option value="WARTAWAN" @if($penduduks->pekerjaan == 'WARTAWAN') selected @endif>WARTAWAN</option>
                                <option value="USTADZ/MUBALIGH" @if($penduduks->pekerjaan == 'USTADZ/MUBALIGH') selected @endif>USTADZ/MUBALIGH</option>
                                <option value="JURU MASAK" @if($penduduks->pekerjaan == 'JURU MASAK') selected @endif>JURU MASAK</option>
                                <option value="PROMOTOR ACARA" @if($penduduks->pekerjaan == 'PROMOTOR ACARA') selected @endif>PROMOTOR ACARA</option>
                                <option value="ANGGOTA DPR-RI" @if($penduduks->pekerjaan == 'ANGGOTA DPR-RI') selected @endif>ANGGOTA DPR-RI</option>
                                <option value="ANGGOTA DPD" @if($penduduks->pekerjaan == 'ANGGOTA DPD') selected @endif>ANGGOTA DPD</option>
                                <option value="ANGGOTA BPK" @if($penduduks->pekerjaan == 'ANGGOTA BPK') selected @endif>ANGGOTA BPK</option>
                                <option value="PRESIDEN" @if($penduduks->pekerjaan == 'PRESIDEN') selected @endif>PRESIDEN</option>
                                <option value="WAKIL PRESIDEN" @if($penduduks->pekerjaan == 'WAKIL PRESIDEN') selected @endif>WAKIL PRESIDEN</option>
                                <option value="ANGGOTA MAHKAMAH KONSTITUSI" @if($penduduks->pekerjaan == 'ANGGOTA MAHKAMAH KONSTITUSI') selected @endif>ANGGOTA MAHKAMAH KONSTITUSI</option>
                                <option value="ANGGOTA KABINET KEMENTERIAN" @if($penduduks->pekerjaan == 'ANGGOTA KABINET KEMENTERIAN') selected @endif>ANGGOTA KABINET KEMENTERIAN</option>
                                <option value="DUTA BESAR" @if($penduduks->pekerjaan == 'DUTA BESAR') selected @endif>DUTA BESAR</option>
                                ANGGOTA BPK</option>
                                <option value="GUBERNUR" @if($penduduks->pekerjaan == 'GUBERNUR') selected @endif>GUBERNUR</option>
                                <option value="WAKIL GUBERNUR" @if($penduduks->pekerjaan == 'WAKIL GUBERNUR') selected @endif>WAKIL GUBERNUR</option>
                                <option value="BUPATI" @if($penduduks->pekerjaan == 'BUPATI') selected @endif>BUPATI</option>
                                <option value="WAKIL BUPATI" @if($penduduks->pekerjaan == 'WAKIL BUPATI') selected @endif>WAKIL BUPATI</option>
                                <option value="WALIKOTA" @if($penduduks->pekerjaan == 'WALIKOTA') selected @endif>WALIKOTA</option>
                                <option value="WAKIL WALIKOTA" @if($penduduks->pekerjaan == 'WAKIL WALIKOTA') selected @endif>WAKIL WALIKOTA</option>
                                <option value="ANGGOTA DPRD PROVINSI" @if($penduduks->pekerjaan == 'ANGGOTA DPRD PROVINSI') selected @endif>ANGGOTA DPRD PROVINSI</option>
                                <option value="ANGGOTA DPRD KABUPATEN/KOTA" @if($penduduks->pekerjaan == 'ANGGOTA DPRD KABUPATEN/KOTA') selected @endif>ANGGOTA DPRD KABUPATEN/KOTA</option>
                                <option value="DOSEN" @if($penduduks->pekerjaan == 'DOSEN') selected @endif>DOSEN</option>
                                <option value="GURU" @if($penduduks->pekerjaan == 'GURU') selected @endif>GURU</option>
                                <option value="PILOT" @if($penduduks->pekerjaan == 'PILOT') selected @endif>PILOT</option>
                                <option value="PENGACARA" @if($penduduks->pekerjaan == 'PENGACARA') selected @endif>PENGACARA</option>
                                <option value="NOTARIS" @if($penduduks->pekerjaan == 'NOTARIS') selected @endif>NOTARIS</option>
                                <option value="ARSITEK" @if($penduduks->pekerjaan == 'ARSITEK') selected @endif>ARSITEK</option>
                                <option value="AKUNTAN" @if($penduduks->pekerjaan == 'AKUNTAN') selected @endif>AKUNTAN</option>
                                <option value="KONSULTAN" @if($penduduks->pekerjaan == 'KONSULTAN') selected @endif>KONSULTAN</option>
                                <option value="DOKTER" @if($penduduks->pekerjaan == 'DOKTER') selected @endif>DOKTER</option>
                                <option value="BIDAN" @if($penduduks->pekerjaan == 'BIDAN') selected @endif>BIDAN</option>
                                <option value="PERAWAT" @if($penduduks->pekerjaan == 'PERAWAT') selected @endif>PERAWAT</option>
                                <option value="APOTEKER" @if($penduduks->pekerjaan == 'APOTEKER') selected @endif>APOTEKER</option>
                                <option value="PSIKIATER/PSIKOLOG" @if($penduduks->pekerjaan == 'PSIKIATER/PSIKOLOG') selected @endif>PSIKIATER/PSIKOLOG</option>
                                <option value="PENYIAR TELEVISI" @if($penduduks->pekerjaan == 'PENYIAR TELEVISI') selected @endif>PENYIAR TELEVISI</option>
                                <option value="PENYIAR RADIO" @if($penduduks->pekerjaan == 'PENYIAR RADIO') selected @endif>PENYIAR RADIO</option>
                                <option value="PELAUT" @if($penduduks->pekerjaan == 'PELAUT') selected @endif>PELAUT</option>
                                <option value="PENELITI" @if($penduduks->pekerjaan == 'PENELITI') selected @endif>PENELITI</option>
                                <option value="SOPIR" @if($penduduks->pekerjaan == 'SOPIR') selected @endif>SOPIR</option>
                                <option value="PIALANG" @if($penduduks->pekerjaan == 'PIALANG') selected @endif>PIALANG</option>
                                <option value="PARANORMAL" @if($penduduks->pekerjaan == 'PARANORMAL') selected @endif>PARANORMAL</option>
                                <option value="PEDAGANG" @if($penduduks->pekerjaan == 'PEDAGANG') selected @endif>PEDAGANG</option>
                                <option value="PERANGKAT DESA" @if($penduduks->pekerjaan == 'PERANGKAT DESA') selected @endif>PERANGKAT DESA</option>
                                 <option value="KEPALA DESA" @if($penduduks->pekerjaan == 'KEPALA DESA') selected @endif>KEPALA DESA</option>
                                 <option value="WIRASWASTA" @if($penduduks->pekerjaan == 'WIRASWASTA') selected @endif>WIRASWASTA</option>
                                 <option value="BIARAWATI" @if($penduduks->pekerjaan == 'BIARAWATI') selected @endif>BIARAWATI</option>
                                 <option value="LAINNYA" @if($penduduks->pekerjaan == 'LAINNYA') selected @endif>LAINNYA</option>
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
                

                <option value="WNI" @if($penduduks->kewarganegaraan == 'WNI') selected @endif>WNI</option>
                <option value="WNA" @if($penduduks->kewarganegaraan == 'WNA') selected @endif>WNA</option>
                <option value="DUA KEWARGANEGARAAN" @if($penduduks->kewarganegaraan == 'DUA KEWARGANEGARAAN') selected @endif>DUA KEWARGANEGARAAN</option>
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
                  <input id="nik_ayah"  name="nik_ayah"  class="form-control input-sm nik" type="text" placeholder="Nomor NIK Ayah"  value="{{$penduduks->nik_ayah}}"></input>
                </div>
          </div>
          <div class='col-sm-8'>
                <div class='form-group'>
                  <label for="nama_ayah">Nama Ayah </label>
                  <input id="nama_ayah" name="nama_ayah" class="form-control input-sm nama" maxlength="100" type="text" placeholder="Nama Ayah" value="{{$penduduks->nama_ayah}}"></input>
                </div>
          </div>
          <div class="col-sm-4">
            <div class='form-group'>
                  <label for="nik_ibu"> NIK Ibu </label>
                  <input id="nik_ibu"  name="nik_ibu"  class="form-control input-sm nik" type="text" placeholder="Nomor NIK Ibu"  value="{{$penduduks->nik_ibu}}"></input>
                </div>
          </div>
          <div class='col-sm-8'>
                <div class='form-group'>
                  <label for="nama_ibu">Nama Ibu </label>
                  <input id="nama_ibu" name="nama_ibu" class="form-control input-sm nama" maxlength="100" type="text" placeholder="Nama Ibu" value="{{$penduduks->nama_ibu}}"></input>
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
                     <option @if($row->dusun==$penduduks->dukuh) selected @endif value="{{ $row->dusun}}">{{$row->dusun }}</option>
                    @endforeach
                  </select>
          </div>
          <div class="col-sm-4">
            <label for="rw">RW </label>
            <input id="rw" name="rw" class="form-control input-sm nama" type="number" placeholder="RW" value="{{$penduduks->rw}}"></input>
          </div>
          <div class="col-sm-4">
            <label for="rw">RT </label>
            <input id="rt" name="rt" class="form-control input-sm nama" type="number" placeholder="RT" value="{{$penduduks->rt}}"></input>
          </div>
          
        </div>
        <br>
        <div class="row">
          <div class="col-sm-12">
            <label for="rw">Alamat Lengkap </label>
            <input id="alamat" name="alamat" class="form-control input-sm nama" type="text" value="{{$penduduks->alamat}}" placeholder="Alamat Lengkap" value=""></input>
          </div>
        </div>
        <br>
        <div class="row">
          <div class="col-sm-4">
            <label for="desa">Desa </label>
            <input id="desa" name="desa" class="form-control input-sm nama" type="text" placeholder="Desa" value="{{$penduduks->desa}}"></input>
          </div>
          <div class="col-sm-4">
            <label for="kec">Kecamatan </label>
            <input id="kec" name="kec" class="form-control input-sm nama" type="text" placeholder="Kecamatan" value="{{$penduduks->kec}}"></input>
          </div>
          <div class="col-sm-4">
            <label for="kabupaten">Kabupaten </label>
            <input id="kab" name="kab" class="form-control input-sm nama" type="text" placeholder="Kabupaten" value="{{$penduduks->kab}}"></input>
          </div>
        </div><br> 
        <div class="row">
          <div class='col-sm-12'>
            <div class="form-group subtitle_head" style="background-color: #a2f2ef;">
              <label class="text-right"><strong>STATUS PERKWAWINANA :</strong></label>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-4">
            <label for="status_kawin">Akte / Buku Nikah</label>
              <select class="form-control input-sm" name="buku_nikah">
                <option value="" disabled selected="">Pilih</option>
                    <option value="TIDAK ADA" @if($penduduks->status_perkawinan == 'TIDAK ADA') selected @endif>TIDAK ADA</option>
                    <option value="ADA" @if($penduduks->status_perkawinan == 'ADA') selected @endif>ADA</option>
                    
                </select>
          </div>
          <div class="col-sm-4">
            <label for="status_kawin">Status Perkawinan</label>
              <select class="form-control input-sm" name="status_perkawinan">
                <option value="" disabled selected="">Pilih Status Perkawinan</option>
                    <option value="BELUM KAWIN" @if($penduduks->buku_nikah == 'BELUM KAWIN') selected @endif>BELUM KAWIN</option>
                    <option value="KAWIN" @if($penduduks->buku_nikah == 'KAWIN') selected @endif>KAWIN</option>
                    <option value="CERAI HIDUP" @if($penduduks->buku_nikah == 'CERAI HIDUP') selected @endif>CERAI HIDUP</option>
                    <option value="CERAI MATI" @if($penduduks->buku_nikah == 'CERAI MATI') selected @endif>CERAI MATI</option>
              </select>
          </div>
          <div class="col-sm-4">
            <label for="no_akta_buku_nikah">No. Akta Nikah (Buku Nikah)/Perkawinan </label>
            <input id="no_akta_buku_nikah" name="no_akta_buku_nikah" class="form-control input-sm nomor_sk" type="text" maxlength="40" placeholder="Nomor Akta Perkawinan" value="{{$penduduks->no_akta_buku_nikah}}"></input>
          </div>
          <div class="col-sm-4">
            <div class='form-group'>
              <label for="tanggalperkawinan">Tanggal Perkawinan</label>
                <div class="input-group input-group-sm date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input class="form-control input-sm pull-right" id="tgl_3" name="tanggal_kawin" type="date" placeholder="dd/mm/yy" value="{{$penduduks->tanggal_kawin}}">
                </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-4">
            <label for="akta_cerai">Akta Perceraian</label>
            <select class="form-control input-sm" name="akta_cerai">
                <option value="" disabled selected="">Pilih</option>
                    <option value="TIDAK ADA" @if($penduduks->akta_cerai == 'TIDAK ADA') selected @endif>TIDAK ADA</option>
                    <option value="ADA" @if($penduduks->akta_cerai == 'ADA') selected @endif>ADA</option>
                    
                </select>
          </div>
          <div class="col-sm-4">
            <label for="no_akta_cerai">No. Akta Cerai</label>
            <input id="no_akta_cerai" name="no_akta_cerai" class="form-control input-sm nomor_sk" type="text" maxlength="40" placeholder="Nomor Akta Cerai" value="{{$penduduks->no_akta_cerai}}"></input>
          </div>
          <div class='col-sm-4'>
              <label for="tanggal_penceraian">Tanggal Penceraian</label>
                <div class="input-group input-group-sm date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input class="form-control input-sm pull-right" id="tgl_3" name="tanggal_penceraian" placeholder="dd/mm/yy" type="date" value="{{$penduduks->tanggal_penceraian}}">
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
                    <option value="A" @if($penduduks->gol_darah == 'A') selected @endif>A</option>
                    <option value="B" @if($penduduks->gol_darah == 'B') selected @endif>B</option>
                    <option value="AB" @if($penduduks->gol_darah == 'AB') selected @endif>AB</option>
                    <option value="O" @if($penduduks->gol_darah == 'O') selected @endif>O</option>
                    <option value="A+" @if($penduduks->gol_darah == 'A+') selected @endif>A+</option>
                    <option value="A-" @if($penduduks->gol_darah == 'A-') selected @endif>A-</option>
                    <option value="B+" @if($penduduks->gol_darah == 'B+') selected @endif>B+</option>
                    <option value="B-" @if($penduduks->gol_darah == 'B-') selected @endif>B-</option>
                    <option value="AB+" @if($penduduks->gol_darah == 'AB+') selected @endif>AB+</option>
                    <option value="AB-" @if($penduduks->gol_darah == 'AB-') selected @endif>AB-</option>
                    <option value="O+" @if($penduduks->gol_darah == 'O+') selected @endif>O+</option>
                    <option value="O-" @if($penduduks->gol_darah == 'O-') selected @endif>O-</option>
                    <option value="TIDAK TAHU" @if($penduduks->gol_darah == 'TIDAK TAHU') selected @endif>TIDAK TAHU</option>
                </select>
          </div>
          <div class="col-sm-4">
            <label for="penyandang_cacat">Cacat</label>
                  <select class="form-control input-sm" name="penyandang_cacat" >
                    <option value="" disabled selected="">Pilih Jenis Cacat</option>
                        <option value="TIDAK CACAT" @if($penduduks->penyandang_cacat == 'TIDAK CACAT') selected @endif>TIDAK CACAT</option>
                        <option value="CACAT FISIK" @if($penduduks->penyandang_cacat == 'CACAT FISIK') selected @endif>CACAT FISIK</option>
                        <option value="CACAT NETRA/BUTA" @if($penduduks->penyandang_cacat == 'CACAT NETRA/BUTA') selected @endif>CACAT NETRA/BUTA</option>
                        <option value="CACAT RUNGU/WICARA" @if($penduduks->penyandang_cacat == 'CACAT RUNGU/WICARA') selected @endif>CACAT RUNGU/WICARA</option>
                        <option value="CACAT MENTAL/JIWA" @if($penduduks->penyandang_cacat == 'CACAT MENTAL/JIWA') selected @endif>CACAT MENTAL/JIWA</option>
                        <option value="CACAT FISIK DAN MENTAL" @if($penduduks->penyandang_cacat == 'CACAT FISIK DAN MENTAL') selected @endif>CACAT FISIK DAN MENTAL</option>
                        <option value="CACAT LAINNYA" @if($penduduks->penyandang_cacat == 'CACAT LAINNYA') selected @endif>CACAT LAINNYA</option>
                    </select>
          </div>
          <div class="col-sm-4">
            <label for="kelainan_fisik">Kelainan Fisik</label>
                  <select class="form-control input-sm" name="kelainan_fisik" >
                    <option value="" disabled selected="">PILIH</option>
                       
                        <option value="TIDAK ADA" @if($penduduks->kelainan_fisik == 'TIDAK ADA') selected @endif>TIDAK ADA</option>
                        <option value="ADA" @if($penduduks->kelainan_fisik == 'ADA') selected @endif>ADA</option>

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