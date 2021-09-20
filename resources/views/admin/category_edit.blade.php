@extends('layouts.admin_layout.admin_layout')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Category</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{url('admin/dashboard')}}">Home</a></li>
            <li class="breadcrumb-item"><a href="{{ url('admin/category') }}">Category</a></li>
            <li class="breadcrumb-item active">Edit Category</li>
          </ol>
        </div>
      </div>
    </div>
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
                <h3 class="card-title">Edit Category</h3>
              </div>
                <br>
                    <x-alert/>
                    <!-- /.card-header -->
               <form name="categoryForm" id="categoryForm"  action="{{ url('admin/category/update/'.$categoryData->id) }}"   method="post" enctype="multipart/form-data">@csrf
                    <input type="hidden" name="old_image" value="{{$categoryData->cat_image}}">
                <div class="card-body">
                
                  <div class="form-group">
                    <label for="cat_name">Category Name</label>
                    <input type="text" class="form-control" id="cat_name" name="cat_name" value= "{{$categoryData->cat_name}}" placeholder="Enter Category Name" >
                  </div>
                  <div class="form-group">
                    <label for="cat_image">Category Image</label>
                      <div class="input-group">
                        <input type="file" class="form-control" id="cat_image" name="cat_image" >
                      </div>
                      <br>
                      <div>
                        <img style="width:300px; height:300px;" src="{{asset('images/category_images/'.$categoryData->cat_image)}}">
                      </div>
                  </div>
                </div>
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Update</button>
                </div>
              </form>
            </div>
        </div>
      </div>
    </section>    
</div>
<!-- /.content-wrapper -->

@endsection