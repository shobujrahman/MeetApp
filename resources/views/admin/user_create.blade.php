@extends('layouts.admin_layout.admin_layout')
@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Add User</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{url('admin/dashboard')}}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ url('admin/user') }}">Users</a></li>
                        <li class="breadcrumb-item active">Add User</li>
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
                    <h3 class="card-title">Add User</h3>

                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i
                                class="fas fa-minus"></i></button>
                        <button type="button" class="btn btn-tool" data-card-widget="remove"><i
                                class="fas fa-remove"></i></button>
                    </div>
                </div>
                <!-- /.card-header -->
                <form name="userForm" id="userForm" action="{{ url('admin/user/submit') }}" method="post"
                    enctype="multipart/form-data">@csrf
                    <div class="card-body">
                        <!-- 1st row -->
                        <div class="row">
                            <div class="col-md-6">
                                <!-- /.form-group -->
                                <div class="form-group">
                                    <label for="u_name">Name</label>
                                    <input type="text" class="form-control" name="u_name" id="u_name"
                                        value="{{ old('u_name') }}" placeholder="Enter Name" required>
                                </div>
                                <!--  -->
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" name="email" id="email"
                                        value="{{ old('email') }}" placeholder="Enter email" required>
                                </div>
                                <!--  -->
                                <div class="form-group">
                                    <label>Gender</label>
                                    <select name="gender" id="gender" class="form-control select2" required
                                        style="width: 100%;">
                                        <option>Select</option>

                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>

                                    </select>
                                </div>


                                <div class="form-group">
                                    <label for="phone">Phone</label>
                                    <input type="text" class="form-control" name="phone" id="phone"
                                        value="{{ old('phone') }}" required placeholder="Enter phone">
                                </div>
                                <!--  -->
                                <div class="form-group">
                                    <label for="u_image">Image</label>
                                    <div class="input-group">
                                        <input type="file" class="form-control" id="u_image" name="u_image">
                                    </div>
                                </div>
                                <!--  -->
                           
                                <div class="form-group">
                                    <label for="password"> New Password</label>
                                    <input type="password" class="form-control" id="password" name="password"
                                        placeholder="Enter newPassword" required>
                                </div>
                                <div class="form-group">
                                    <label for="confirm_password">Confirm Password</label>
                                    <input type="password" class="form-control" id="confirm_password"
                                        name="confirm_password" placeholder="confirmPassword" required>
                                </div>
                                <!-- <div style="margin-top: 7px;" id="CheckPasswordMatch"></div> -->
                            </div>
                        </div>

                    </div>

                    <div class="card-footer">
                        
                        <button type="submit" class="btn btn-info" onclick="return Validate()">Add User</button>
                    </div>

                </form>

            </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->



@endsection