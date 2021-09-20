@extends('layouts.admin_layout.admin_layout')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Category</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{url('admin/dashboard')}}">Home</a></li>
            <li class="breadcrumb-item"><a href="{{url('admin/administrator')}}"> Administrator </a></li>
            <li class="breadcrumb-item active">Edit Admin</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
    <!-- /.content-header -->
      <!-- Main content -->
      <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Edit Admin</h3>
              </div>
              <br>
              <x-alert/>
              <!-- /.card-header -->
              <!-- form start -->
              <form name="adminForm" id="adminForm"   action="{{ url('admin/administrator/update/'.$admindata->id) }}"   method="post" enctype="multipart/form-data">@csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="userName">Username</label>
                    <input id="userName" name="userName" type="text" class="form-control"   value="{{ $admindata['userName'] }}"   placeholder="Enter userName" readonly="">
                  </div>
                  <div class="form-group">
                    <label for="full_name">Fullname</label>
                    <input type="text" class="form-control" id="full_name" name="full_name" placeholder="Enter Full Name"  value="{{ $admindata['full_name'] }}" readonly="">
                  </div>
                  <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Enter Email"  value="{{ $admindata['email'] }}" readonly="" >
                  </div>
                  
                   
                  <div class="form-group">
                    <label for="password"> New Password</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Enter newPassword" >
                  </div>
                  <div class="form-group">
                    <label for="confirm_password">Confirm Password</label>
                    <input type="password" class="form-control" id="confirm_password" name="confirm_password" placeholder="confirmPassword"  >
                  </div> 
                  
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
        </div>
      </div>
    </section>    
</div>
<!-- /.content-wrapper -->

@endsection