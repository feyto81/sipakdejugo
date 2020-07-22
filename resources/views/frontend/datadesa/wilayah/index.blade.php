@extends('frontend.layouts.master')
@section('title','Wilayah | SipakdeJugo')
@section('content')

<div class="col-md-12 col-lg-8">
    <div class="row">
       <br>
        <div class="col-sm-12">
          <div class="box box">
              <h3>Demografi Berdasarkan Populasi Per Wilayah</h3>
          </div>
          <hr>
          <div class="table-responsive-xl">
            <table class="table table-hover table-bordered" id="sampleTable">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Nama Dusun</th>
                  <th>Nama Kepala Dusun</th>
                  <th>Jumlah RT</th>
                  <th>Jumlah RW</th>
                  <th>Jumlah KK</th>
                  <th>Jiwa</th>
                  <th>LK</th>
                  <th>PR</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  
                </tr>
                @foreach($dusun as $row)
                  <tr>
                    <td>{{$loop->iteration}}</td>
                    
                    <td>{{$row->dusun}}</>
                    <td>{{$row->kepala_dusun}}</td>
                    <td>{{$row->rt}}</td>
                    <td>{{$row->rw}}</td>
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

@endsection
@push('bottom')


@endpush

