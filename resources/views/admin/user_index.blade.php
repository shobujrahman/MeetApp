@extends('layouts.admin_layout.admin_layout')
@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Users</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{url('admin/dashboard')}}">Home</a></li>
                        <li class="breadcrumb-item active">Users</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-12">

                <x-alert />
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Users Table</h3>
                        <a href="{{ url('admin/user/create') }}"
                            style="max-width: 150px; float:right; display:inline-block;"
                            class="btn btn-block btn-primary">Add New User</a>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">

                        <table id="category" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>Sl.No</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Gender</th>
                                    <th>Image</th>
                                    <th>Phone</th>
                                    <th>Status</th>
                                    <th width="100px">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($users as $user)
                                <tr>
                                    <td>{{$no++}}</td>
                                    <td>{{$user->u_name}}</td>
                                    <td>{{$user->email}}</td>
                                    <td>{{$user->gender}}</td>
                                    <td>
                                        @if(!empty($user->u_image))
                                        <img style="width: 77px; height: 67px;"
                                            src="{{asset('images/user_images/'.$user->u_image)}}" />
                                        @endif
                                    </td>
                                    <!-- <td>6</td> -->
                                    <td>{{$user->phone}}</td>
                                    <td>
                                        @if($user->status==1)
                                        <a href="{{url('admin/user/update-status',$user->id)}}"
                                            class="btn btn-success">Active
                                        </a>
                                        @else
                                        <a href="{{url('admin/user/update-status',$user->id)}}"
                                            class="btn btn-danger">Inactive
                                        </a>
                                        @endif
                                    </td>

                                    <td>
                                        <a href="{{url('admin/user/edit/'.$user->id)}}" class=" btn btn-success"
                                            role="button"><i class="material-icons option-icon">mode_edit</i></a>
                                        &nbsp; &nbsp;


                                        <a href="{{url('admin/user/delete/'.$user->id)}}"
                                            onclick="return confirm('Are you sure want to delete this SubAdmin?')"
                                            class="btn btn-danger" role="button"><i
                                                class="material-icons option-icon">delete</i></a>


                                    </td>
                                </tr>


                                <br>
                                @endforeach
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