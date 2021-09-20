@extends('layouts.admin_layout.admin_layout')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Banner Photos</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{url('admin/dashboard')}}">Home</a></li>
            <li class="breadcrumb-item"><a href="{{ url('admin/banner') }}">Banner</a></li>
            <li class="breadcrumb-item active">Edit Banner Photos</li>
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
                <h3 class="card-title">Edit Banner Photos</h3>
              </div>
                <br>
                    <x-alert/>
                    <!-- /.card-header -->
                    <!-- form start -->
              <form name="bannerForm" id="bannerForm"  action="{{ url('admin/banner/update/'.$bannerEdit->id) }}"   method="post" enctype="multipart/form-data">@csrf
                <input type="hidden" name="old_image" value="{{$bannerEdit->banner_image}}">
                <div class="card-body">
                  <div class="form-group">
                    <label for="reference">Reference</label>
                    <input type="text" class="form-control" id="reference" name="reference" value="{{$bannerEdit->reference}}" placeholder="Enter Reference" >
                  </div>
                  <div class="form-group">
                    <label for="url">Url</label>
                    <input type="text" class="form-control" id="url" name="url" value="{{$bannerEdit->url}}" placeholder="Enter Url" >
                  </div>
                  <div class="form-group">
                    <label for="banner_image">Banner Image</label>
                      <div class="input-group">
                        <input type="file" class="form-control" id="banner_image" name="banner_image" >
                      </div>
                      <br>
                      <div>
                        <img style="width:300px; height:300px;" src="{{asset('images/banner_images/'.$bannerEdit->banner_image)}}">
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