@extends('layouts.admin_layout.admin_layout')
@section('content')

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Administrator</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{url('admin/dashboard')}}">Home</a></li>
              <li class="breadcrumb-item active">Administrator</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-12">

        <x-alert/>
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Administrator</h3>
              <a href="{{ url('admin/administrator/create') }}"
                style="max-width: 150px; float:right; display:inline-block;" 
                class="btn btn-block btn-primary">Add New Admin</a>
            </div>
            <!-- /.card-header -->
            <div class="card-body">

              <table id="category" class="table table-bordered table-hover">
                <thead>
                  <tr>
                    <th>Sl.No</th>
                    <th>Username</th>
                    <th>Fullname</th>
                    <!-- <th>Email</th> -->
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach($admins as $admin)
                      <tr>
                          <td>{{ $no++ }}</td>
                          <td>{{$admin->userName}}</td>
                          <td>{{$admin->full_name}}</td>
                          <!-- <td>{{$admin->email}}</td> -->
                          <td>
                            <a href="{{url('admin/administrator/edit/'.$admin->id)}}" class="btn btn-success" role="button"><i class="material-icons option-icon">mode_edit</i></a>
                            &nbsp; &nbsp;
                            <?php
                              if ($admin->id == 1) {

                                } else {
                            ?>
                                                    
                              <a href="{{url('admin/administrator/delete/'.$admin->id)}}"onclick="return confirm('Are you sure want to delete this SubAdmin?')" class="btn btn-danger" role="button"><i class="material-icons option-icon">delete</i></a>
                                <?php
                                }
                            ?>
                            
                          </td>
                      </tr>
                    @endforeach

                    <br>
              
                </tbody>

              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

@endsection