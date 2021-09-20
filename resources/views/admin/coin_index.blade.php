@extends('layouts.admin_layout.admin_layout')
@section('content')
  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Coin Purchase Plan</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{url('admin/dashboard')}}">Home</a></li>
              <li class="breadcrumb-item active">Manage Coin Purchase Plan</li>
            </ol>
          </div>
        </div>
      </div>
    </section>
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-12">
<x-alert/>
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Coin Purchase Plan</h3>
              <a href="{{ url('admin/coin/create') }}"
                style="max-width: 150px; float:right; display:inline-block;" 
                class="btn btn-block btn-primary">Add Coin Purchase Plan</a>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="category" class="table table-bordered table-hover">
                <thead>
                  <tr>
                    <th>Sl.No</th>
                    <th>Coin</th>                   
                    <th>Value</th>                   
                    <th>Product Id Google</th>                   
                    <th>Actions</th>                   
                  </tr>
                </thead>
                <tbody>
                    @foreach($coins as $coin) 
                   <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{$coin->coin}}</td>
                    <td>{{$coin->value}}</td>
                    <td>{{$coin->pdct_id_ggl}}</td>
                    
                    <td>
                      <a href="{{url('admin/coin/edit/'.$coin->id)}}" class="btn btn-success" role="button"><i class="material-icons option-icon">mode_edit</i></a>
                      &nbsp; &nbsp;
                      <a href="{{url('admin/coin/delete/'.$coin->id)}}" onclick="return confirm('Are you sure want to delete this Coin?')" class="btn btn-danger" role="button">
                        <i class="material-icons option-icon">delete</i></a>
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