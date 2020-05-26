
@extends('admin.layouts.admin')
@section('menuleft')
    @include('admin/layouts/menuleft')
@stop
@section('content')
<!-- Content Header (Page header) -->
<script>
    function checkall() {
        document.getElementById("checkboxPrimary2").checked = true;
    }
    //alert('ok');
</script>
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">USERS</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">User</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>    
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="card card-info">
            <div class="card-header">
                <h3 class="card-title">Thêm mới</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form class="form-horizontal" method="post">
                {{ csrf_field()}}               
                <div class="card-body formadmin">
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Username</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="username" placeholder="Username"  autofocus>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
                        <div class="col-sm-10">
                            <input type="password" class="form-control" name="password" id="inputPassword3" placeholder="Password">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Họ tên</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="fullname" placeholder="Họ và tên" >
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Ngày sinh</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="dob" placeholder="Ngày sinh" >
                        </div>
                    </div> 
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Lớp</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="lop" placeholder="Lớp" >
                        </div>
                    </div>                    
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Địa chỉ</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="address" placeholder="Địa chỉ" >
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Số điện thoại</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="phone" placeholder="Phone" >
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" name="email" placeholder="Email">
                        </div>
                    </div>                    
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                    <div class="formadmin">
                        <button type="submit" class="btn btn-default">Cancel</button>
                        <button type="submit" class="btn btn-info float-right">Submit</button>
                    </div>
                </div>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                @if(Session::has('success'))
                  <div class="alert alert-success">
                    <ul>
                        <li>{{Session::get('success')}}</li>
                    </ul>   
                  </div>
                @endif                
                <!-- /.card-footer -->
            </form>
        </div>
    </section>
    <!-- /.content -->
@stop