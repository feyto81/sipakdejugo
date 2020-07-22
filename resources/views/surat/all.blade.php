@extends('layouts.global')
@section('title','Cetak Surat | Sipakdejugo')
@section('content')
<section class="content-header">
    <h1>Cetak Layanan Surat</h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
      <li class="active">Cetak Layanan Surat</li>
    </ol>
  </section>
<section class="content" id="maincontent">
  <div class="row">
    
    <div class="col-xs-12">
      
      <div class="box box-primary">
                
        <div class="box-header with-border">
                 
                              

                  
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
                    <th>Layanan Administrasi Surat</th>
                    <th>Kode Surat</th>
                </tr>
                </thead>
                <tbody>
                  <tr>
                  	<td>1</td>
                  	<td class="nostretch">
						<a href="{{url('surat/pengantar')}}" class="btn btn-social btn-flat bg-purple btn-sm"  title="Buat Surat"><i class="fa fa-file-word-o"></i>Buat Surat</a>
						
					</td>
					<td>Keterangan Pengantar</td>
					<td>S-01</td>
                  </tr>
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
    <script type="text/javascript">
      //   function total(){
      //   lk = $('#laki').val();
      //   pr = $('#perempuan').val();
      //   hsl = (parseInt(lk) + parseInt(pr));  
      //   $('#jumlah_seluruh').val(hsl);
      // }
      </script>

@endpush
