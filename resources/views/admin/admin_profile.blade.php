@extends('layouts.admin_layout.admin_layout')
@section('content')


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Profile</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">User Profile</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">

            <!-- Profile Image -->
            <div class="card card-primary card-outline">
              <div class="card-body box-profile">
                <div class="text-center">
                  <img class="profile-user-img img-fluid img-circle"
                       src="{{ asset('images/admin_images/avatar04.png  ') }}"
                       alt="User profile picture">
                </div>

                <h3 class="profile-username text-center">{{ucwords(Auth::guard('admin')->user()->userName)}}</h3>

                <p class="text-muted text-center">Super Admin</p>
                <div class="card-body">
                <table id="administrator" class="table table-bordered table-hover">
                    <thead>
                    <tr>
                       
                        <th>Username</th>
                        <th>Fullname</th>
                        <th>Email</th>
                        
                    </tr>
                    </thead>
                    <tbody>
                       @foreach($admins as $admin)
                        <tr>
                            
                            <td>{{$admin->userName}}</td>
                            <td>{{$admin->full_name}}</td>
                            <td>{{$admin->email }}</td>
                            
                        </tr>
                    </tbody>
                    @endforeach
                </table>
            </div>
                 
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
@endsection