@extends('layouts.admin_layout.admin_layout')
@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Edit User</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{url('admin/dashboard')}}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ url('admin/user') }}">Users</a></li>
                        <li class="breadcrumb-item active">Edit User</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <x-alert />
            <!-- SELECT2 EXAMPLE -->
            <div class="card card-default">
                <div class="card-header">
                    <h3 class="card-title">Edit User</h3>

                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i
                                class="fas fa-minus"></i></button>
                        <button type="button" class="btn btn-tool" data-card-widget="remove"><i
                                class="fas fa-remove"></i></button>
                    </div>
                </div>
                <!-- /.card-header -->
                <form name="userForm" id="userForm" action="{{ url('admin/user/update/'.$userEdit->id) }}" method="post"
                    enctype="multipart/form-data">
                    @csrf 
                    
                    <input type="hidden" name="old_image" value="{{$userEdit->u_image}}">
                    <div class="card-body">
                        <!-- 1st row -->
                        <div class="row">
                            <div class="col-md-6">
                                <!-- /.form-group -->
                                <div class="form-group">
                                    <label for="u_name">Name</label>
                                    <input type="text" class="form-control" name="u_name" id="u_name"
                                        value="{{$userEdit->u_name}}" placeholder="Enter Name" >
                                </div>
                                <!--  -->
                                <div class="form-group">
                                    <label for="email ">Email</label>
                                    <input type="email" class="form-control" name="email " id="email "
                                        value="{{$userEdit->email}}" placeholder="Enter email " readonly="">
                                </div>
                                <!--  -->
                                <div class="form-group">
                                    <label>Gender</label>
                                    <select name="gender" id="gender" class="form-control select2" 
                                        style="width: 100%;">
                                        <option>Select</option>

                                        <option value="Male" @if($userEdit->gender == "Male") {{'selected'}} @endif>Male</option>
                                        <option value="Female" @if($userEdit->gender == "Female") {{'selected'}} @endif>Female</option>
                                         

                                    </select>
                                </div>


                                <div class="form-group">
                                    <label for="phone">Phone</label>
                                    <input type="text" class="form-control" name="phone" id="phone"
                                        value="{{ $userEdit->phone }}"  placeholder="Enter phone">
                                </div>
                                <!--  -->
                                <div class="form-group">
                                    <label for="u_image">Image</label>
                                    <div class="input-group">
                                        <input type="file" class="form-control" id="u_image" name="u_image">
                                    </div>

                                    <br>
                                    <div>
                                        <img style="width:200px; height:200px;" src="{{asset('images/user_images/'.$userEdit->u_image)}}">
                                    </div>
                                </div>
                                <!--  -->
                                <div class="form-group">
                                    <label for="password"> New Password</label>
                                    <input type="password" class="form-control" id="password" name="password"
                                        placeholder="Enter newPassword" >
                                </div>
                                <div class="form-group">
                                    <label for="confirm_password">Confirm Password</label>
                                    <input type="password" class="form-control" id="confirm_password"
                                        name="confirm_password" placeholder="confirmPassword" >
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>

                </form>

            </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection