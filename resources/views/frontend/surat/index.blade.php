@extends('frontend.layouts.master')
@section('title','Surat Online | SipakdeJugo')
@section('content')

<div class="col-md-12 col-lg-8">
    <div class="row">

        <div class="col-sm-12">
            
            <h3 class="p-title" style="margin-top: -10px">Pelayanan Surat</h3>
            

            <br>
            <div class="col-sm-12">
            <div class="box box">
                
            </div>
            <div class="box box">
                <form id="contact-form" method="post" action="{{url('surat/kirim')}}" role="form">
                    {{ csrf_field() }}
                    <div class="messages"></div>

                    <div class="controls">

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="form_name">Nama *</label>
                                    <input id="form_name" type="text" name="nama" class="form-control" placeholder="Silahkan masukkan nama anda *" required="required" data-error="Nama harus diisi!.">
                                    <input type="hidden"  name="surat_id" value="{{$max_code}}">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="form_lastname">NIK *</label>
                                    <input id="form_lastname" type="text" name="nik" class="form-control" placeholder="Silahkan masukkan NIK anda *" required="required" data-error="NIK Harus diisi!.">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="form_email">No WA *</label>
                                    <input id="form_email" type="text" name="no_wa" class="form-control" placeholder="Silahkan masukkan no wa *" required="required" data-error="Format email salah.">
                                    <input id="form_email" type="hidden" name="tanggal" value="{{date('Y-m-d')}}" class="form-control" placeholder="" required="required" data-error="Format email salah.">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="form_need">Pilih Jenis Surat *</label>
                                    <select id="form_need" name="jenis_surat" class="form-control" required="required" data-error="Pilih jenis surat yang anda perlukan">
                                        <option value="" disabled selected="">Silahkan Pilih Surat</option>
                                        <option value="Surat Pengantar">Surat Pengantar</option>
                                        <!-- <option value="Surat Keterangan Usaha">Surat Keterangan Usaha</option>
                                        <option value="Surat Keterangan Tidak Mampu">Surat Keterangan Tidak Mampu</option>
                                        <option value="Surat Keterangan Miskin">Surat Keterangan Miskin</option>
                                        <option value="Surat Keterangan Belum Pernah Menikah">Surat Keterangan Belum Pernah Menikah</option>
                                        <option value="Surat Keterangan Kelahiran">Surat Keterangan Kelahiran</option>
                                        <option value="Surat Keterangan Kematian">Surat Keterangan Kematian</option>
                                        <option value="Surat Keterangan Beda Nama">Surat Keterangan Beda Nama</option>
                                        <option value="Surat Keterangan Penghasilan">Surat Keterangan Penghasilan</option>
                                        <option value="Surat Keterangan Harga Tanah">Surat Keterangan Harga Tanah</option> -->
                                    </select>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="form_message">Keperluan *</label>
                                    <textarea id="form_message" name="keperluan" class="form-control" placeholder="Silahkan isi keperluan atau keterangan lainnya disini *" rows="4" required="required" data-error="Silahkan isi pesan atau keterangan anda."></textarea>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <input type="submit" class="btn btn-success btn-send" value="Kirim Permohonan">
                            </div>
                            <div class="col-md-6">
                                <input type="button" class="btn btn-primary btn-send" value="Kembali" onclick="window.history.back()" />
                                </div>
                        </div>
            
                    </div>

                </form>
            </div>
            <br><br>
        </div>
        </div>
    </div>
</div>
@endsection
