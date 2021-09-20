
@extends('layouts.admin_layout.admin_layout')
@section('content')
  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Country</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{url('admin/dashboard')}}">Home</a></li>
              <li class="breadcrumb-item active">Country</li>
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
              <h3 class="card-title">Country</h3>
                <a href="{{ url('admin/country/create') }}"
                style="max-width: 150px; float:right; display:inline-block;" 
                class="btn btn-block btn-primary">Add Country</a>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              
              <table id="category" class="table table-bordered table-hover">
                <thead>
                <tr>
                  
                  <th>Sl.No</th>
                  <th>Country Name</th>
                  <th>Country Image</th>
                  <th>Actions</th>
                  
                </tr>
                </thead>
                <tbody> 
                  @foreach($countries as $country)
                  <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{$country->country_name}}</td>
                    <td>
                        @if(!empty($country->country_image))
                            <img style="width: 77px; height: 67px;" src="{{asset('images/country_images/'.$country->country_image)}}"/>
                        @endif
                    </td>
                    <td>
                      <a href="{{url('admin/country/edit/'.$country->id)}}" class="btn btn-success" role="button"><i class="material-icons option-icon">mode_edit</i></a>
                      &nbsp; &nbsp;
                      <a href="{{url('admin/country/delete/'.$country->id)}}"onclick="return confirm('Are you sure want to delete this Country?')" class="btn btn-danger" role="button">
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
