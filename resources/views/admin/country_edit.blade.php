@extends('layouts.admin_layout.admin_layout')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Country</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{url('admin/dashboard')}}">Home</a></li>
            <li class="breadcrumb-item"><a href="{{ url('admin/country') }}">Country</a></li>
            <li class="breadcrumb-item active">Edit Country</li>
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
                <h3 class="card-title">Edit Country</h3>
              </div>
                <br>
                    <x-alert/>
                    <!-- /.card-header -->
                    <!-- form start -->
              <form name="countryForm" id="countryForm"  action="{{ url('admin/country/update/'.$countryData->id) }}"   method="post" enctype="multipart/form-data">@csrf
                    <input type="hidden" name="old_image" value="{{$countryData->country_image}}">
                <div class="card-body">
                  <div class="form-group">
                    <label for="country_name">Country Name</label>
                    <input type="text" class="form-control" id="country_name" name="country_name" value= "{{$countryData->country_name}}" placeholder="Enter Country Name" >
                  </div>
                  <div class="form-group">
                    <label for="country_image">Country Image</label>
                      <div class="input-group">
                        <input type="file" class="form-control" id="country_image" name="country_image" >
                      </div>
                      <br>
                      <div>
                        <img style="width:300px; height:300px;" src="{{asset('images/country_images/'.$countryData->country_image)}}">
                      </div>
                  </div>
                </div>
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Update</button>
                </div>
              </form>
            </div>
            <!-- /.card -->

        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
    
</div>
<!-- /.content-wrapper -->

@endsection