@extends('layouts.admin_layout.admin_layout')
@section('content')

@php 
    $countries = DB::table('countries')->get();
@endphp
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Image</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{url('admin/dashboard')}}">Home</a></li>
            <li class="breadcrumb-item"><a href="{{ url('admin/image') }}">Image</a></li>
            <li class="breadcrumb-item active">Edit Image</li>
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
                <h3 class="card-title">Edit Image</h3>
              </div>
                <br>
                    <x-alert/>
                    <!-- /.card-header -->
                    <!-- form start -->
              <form name="imageForm" id="imageForm"  action="{{ url('admin/image/update/'.$imageEdit->id) }}"   method="post" enctype="multipart/form-data">@csrf
                <input type="hidden" name="old_image" value="{{$imageEdit->image}}">
                <div class="card-body">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{$imageEdit->name}}" placeholder="Enter Name" >
                    </div>
                    <div class="form-group">
                        <label>Country</label>
                        <select name="country_name" id="country_name" class="form-control select2" style="width: 100%;">
                            <option>Select</option>                           
                            @foreach($countries as $country)
                                <option  value="{{$country->id}}" <?php if($country->id==$imageEdit->cntry_id){
                                        echo "selected";
                                    } ?>>{{$country->country_name}}</option>
                            @endforeach            
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="image">Image</label>
                        <div class="input-group">
                            <input type="file" class="form-control" id="image" name="image"  >
                        </div>
                        <br>
                        <div>
                            <img style="width:300px; height:300px;" src="{{asset('images/only_images/'.$imageEdit->image)}}">
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Update</button>
                </div>
              </form>
            </div>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
    
</div>
<!-- /.content-wrapper -->

@endsection