@extends('layouts.admin_layout.admin_layout')
@section('content')
  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Names</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{url('admin/dashboard')}}">Home</a></li>
              <li class="breadcrumb-item active">Manage Name</li>
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
              <h3 class="card-title">Manage Name</h3>
              <a href="{{ url('admin/name/create') }}"
                style="max-width: 150px; float:right; display:inline-block;" 
                class="btn btn-block btn-primary">Add Name</a>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="story" class="table table-bordered table-hover">
                <thead>
                  <tr>
                    <th>Sl.No</th>
                    <th>Name</th>
                    <th>Country</th>
                    <th>Coin</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody> 
                    @foreach($names as $name)
                  <tr>
                    <th>{{ $no++ }}</th>
                    <th>{{$name->n_name}}</th>
                    <th>{{$name->country_name}}</th>
                    <th>{{$name->coin}}</th>
                    <td>
                    
                    <a href="{{url('admin/name/edit/'.$name->id)}}" class="btn btn-success" role="button"><i class="material-icons option-icon">mode_edit</i></a>
                    &nbsp; &nbsp;
                    <a href="{{url('admin/name/delete/'.$name->id)}}" onclick="return confirm('Are you sure want to delete this Story?')" class="btn btn-danger" role="button"><i class="material-icons option-icon">delete</i></a>
                  </td>
                  </tr>
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