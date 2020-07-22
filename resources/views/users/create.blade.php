@extends('layouts.global')
@section('title','Create Users')
@section('content')

<section class="content">
    <div class="row">
        <div class="col-sx-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">
                        @yield('title')
                    </h3>
                </div>
                <!-- alert -->
                @if(session('status'))
                <div class="callout callout-success">
                    <h4>Success!</h4>
                    <p><b>{{session('status')}}</b></p>
                </div>
                @endif
                <!-- ./alert -->

                <form role="form" action="{{route('users.store')}}" method="post" enctype="multipart/form-data" >
              @csrf
              <div class="box-body">
                <div class="form-group">
                  <label for="name">Name</label>
                  <input type="text" name="name" class="form-control" id="name" placeholder="Enter name">
                </div>
                <div class="form-group">
                  <label for="username">Username</label>
                  <input type="text" class="form-control" id="username" name="username" placeholder="Enter Username">
                </div>
                <div class="checkbox">
                  <label for="ADMIN">
                    <input type="checkbox" name="roles[]" id="ADMIN" value="ADMIN"> Administrator
                  </label>
                  <label for="STAFF">
                    <input type="checkbox" name="roles[]" id="STAFF" value="STAFF">Staff
                  </label>
                  <label for="CUSTOMER">
                    <input type="checkbox" name="roles[]" id="CUSTOMER" value="CUSTOMER">Customer
                  </label>
                </div>
                <div class="form-group">
                  <label for="phone">Phone Number</label>
                  <input type="text" name="phone" class="form-control" id="phone" placeholder="Enter Phone Number">
                </div>
                <!-- textarea -->
                <div class="form-group">
                  <label for="address">Address</label>
                  <textarea class="form-control" name="address" rows="3" placeholder="Enter Address ..." id="address"></textarea>
                </div>
                <div class="form-group">
                  <label for="exampleInputFile">Avatar Image</label>
                  <input type="file" id="avatar" name="avatar">

                  <p class="help-block">Silahkan masukkan avatar anda</p>
                </div>
                <div class="form-group">
                  <label for="email">Email</label>
                  <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                </div>
                <div class="form-group">
                  <label for="password">Password</label>
                  <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                </div>
                <div class="form-group">
                  <label for="password_confirmation">Password Confirmation</label>
                  <input type="password" class="form-control" id="password_confirmation" placeholder="Password Confirmation" name="password_confirmation">
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary" value="Save">Submit</button>
              </div>
            </form>

            </div>
        </div>
    </div>
</section>

@endsection