@extends('layouts.global')
@section('title','Users')
@section('content')
<section class="content-header">
    <h1>Users</h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
      <li class="active">User</li>
    </ol>
  </section>
   <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box box-primary">
            <div class="box-header with-border">
                <button type="button" class="btn btn-social btn-flat btn-success btn-sm btn-sm visible-xs-block visible-sm-inline-block visible-md-inline-block visible-lg-inline-block" data-toggle="modal" data-target="#tambahuser"   title="Tambah Dusun"><i class="fa fa-plus"></i>Tambah User</button>

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
            
           
            <div class="box-body">
              <table id="example1" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Name</th>
                  <th>Username</th>
                  <th>Email</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                    @foreach($users as $user)
                <tr>
                  <td>{{$loop->iteration}}</td>
                  <td>{{$user->name}}</td>
                  <!-- name -->
                  <td>{{$user->username}}</td>
                  <!-- usename -->
                  <td>{{$user->email}}</td>
                  <!-- email -->
                  
                  <td>
                        <a href="{{url('user/edit/'.$user->id)}}" class="btn bg-orange btn-flat btn-sm"  title="Ubah Data"><i class="fa fa-edit"></i></a>
                        <a href="{{url('user/delete/'.$user->id)}}"  onclick="return confirm('Delete this Data permanently?')" class="btn bg-maroon btn-flat btn-sm"  title="Hapus"><i class="fa fa-trash-o"></i></a>
                    </td>
                    
                </tr>
                @endforeach
                </tbody>
                
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  <div class="modal fade" id="tambahuser" tabindex="-1" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
      <form id="formSave" action="{{url('user/add')}}" method="POST" enctype="multipart/form-data" >
        {{csrf_field()}}
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          <h4 class="modal-title">Add User</h4>
  
        </div>
        <div class="modal-body">
          <div class="form-group">
              <label for="dusun">Name</label>
              <input type="text" name="name" id="name" class="form-control" value=""></input>
          </div>
          <div class="form-group">
              <label for="kepala_dusun">Username</label>
              <input type="text" name="username" id="username" class="form-control" value=""></input>
          </div>
          <div class="form-group">
              <label for="kepala_dusun">Email</label>
              <input type="text" name="email" id="email" class="form-control" value=""></input>
          </div>
          <div class="form-group">
            <label for="rw">Password</label>
            <input type="password" name="password" id="password" class="form-control" value=""></input>
        </div>
        <div class="form-group">
            <label for="rt">Password Confirmation</label>
            <input type="password" name="passwordconf" id="passwordconf" class="form-control" value=""></input>
        </div>
       
        <div class="form-group">
                <label for="exampleInputEmail1">Level</label>
                <select name="level_id" id="level_id" class="form-control demoSelect" required="">
                    <option disabled selected>--Select Level-- </option>
                      @foreach ($level as $row)
                        <option value="{{$row->id}}">{{$row->name}}</option>
                      @endforeach
                      </select>
                   
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
<script>
  
</script>
@endsection