@extends('layouts.global')
@section('title','Edit User | Sipakdejugo')
@section('content')
<section class="content" id="maincontent">
        <form id="mainform" action="{{url('user/update/'.$user->id)}}" method="POST" enctype="multipart/form-data" class="form-horizontal">
                                        {{csrf_field() }}
            <div class="row">
                
                <div class="col-md-12">
                    <div class="box box-info">
                        <div class="box-header with-border">
                            
                            <a href="{{route('users.index')}}" data-toggle="tooltip" class="btn btn-social btn-flat btn-info btn-sm visible-xs-block visible-sm-inline-block visible-md-inline-block visible-lg-inline-block" title="Kembali Ke Data Desa"><i class="fa fa-arrow-circle-o-left"></i> Kembali Ke User</a>

                            <div class="pull-right box-tools">
                                
                            <button type="button" class="btn btn-info btn-sm" data-widget="collapse" data-toggle="tooltip"
                                    title="Collapse">
                              <i class="fa fa-minus"></i></button>
                            <button type="button" class="btn btn-info btn-sm" data-widget="remove" data-toggle="tooltip"
                                    title="Remove">
                              <i class="fa fa-times"></i></button>
                          </div>
                        </div>

                        <div class="box-body">

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
                            <hr>

                            <div class="row">
                                <div class="col-md-12">
                                    
                                        <div class="table-responsive">
                                            <table class="table table-bordered table-striped table-hover" >
                                                <tbody>
                                                    <tr>
                                                        <th colspan="3" class="subtitle_head"><strong>Edit User</strong></th>
                                                    </tr>
                                                    <tr>
                                                        <td width="300">Nama</td><td width="1">:</td>
                                                        <td>
                                                            <input id="name" name="name" class="form-control input-sm required" type="text"  value="{{$user->name}}"></input>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td width="300">Username</td><td width="1">:</td>
                                                        <td>
                                                            <input id="username" name="username" class="form-control input-sm required" type="text"  value="{{$user->username}}"></input>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td width="300">Email</td><td width="1">:</td>
                                                        <td>
                                                            <input id="email" name="email" class="form-control input-sm required" type="email"  value="{{$user->email}}"></input>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td width="300">Password</td><td width="1">:</td>
                                                        <td>
                                                            <input id="name" name="password" class="form-control input-sm required" type="text"  value=""></input>
                                                            <small>Biarkan kosong jika tidak ingin mengubah password</small>
                                                        </td>
                                                    </tr>
                                                    
                                                    <tr>
                                                        <td width="300">Level</td><td width="1">:</td>
                                                        <td>
                                                        <div>  
                                                                <select name="level_id" class="form-control demoSelect" id="level_id">
                                                                  <option disabled selected>-- Select Level -- </option>
                                                                  @foreach ($level as $row)
                                                                  <option @if($row->id==$user->level_id) selected @endif value="{{ $row->id}}">{{$row->name }}</option>
                                                                @endforeach
                                                                </select>
                                                                
                                                            </div>
                                                        </td>
                                                    </tr>
                                                   

                                                    <tr>
                                                        <td  width="300"></td>
                                                        <td></td>
                                                        <td>
                                                            <button type='submit' class='btn btn-social btn-flat btn-info btn-sm pull-right'><i class='fa fa-check'></i> Simpan</button>
                                                        </td>
                                                    </tr>
                                                </tbody>
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
    <script type="text/javascript">
        $(function () {
    //Initialize Select2 Elements
    $('.select2').select2();

    
  })
    </script>
    <script type="text/javascript">
        $('#file_browser').click(function(e)
    {
        e.preventDefault();
        $('#file').click();
    });
    $('#file').change(function()
    {
        $('#file_path').val($(this).val());
        if ($(this).val() == '')
        {
            $('#'+$(this).data('submit')).attr('disabled','disabled');
        }
        else
        {
            $('#'+$(this).data('submit')).removeAttr('disabled');;
        }
    });
    $('#file_path').click(function()
    {
        $('#file_browser').click();
    });
    </script>
@endpush