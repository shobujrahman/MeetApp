@extends('layouts.admin_layout.admin_layout')
@section('content')
@php 
    $countries = DB::table('countries')->get();
    $videotypes = DB::table('videotypes')->get();
@endphp
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Video</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{url('admin/dashboard')}}">Home</a></li>
            <li class="breadcrumb-item"><a href="{{ url('admin/video') }}">Video</a></li>
            <li class="breadcrumb-item active">Edit Video</li>
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
                <h3 class="card-title">Edit Video</h3>
              </div>
                <br>
                    <x-alert/>
                    <!-- /.card-header -->
                    <!-- form start -->
                <form  name="videoForm" id="videoForm"  action="{{ url('admin/video/update/'.$videoEdit->id) }}"   method="post" enctype="multipart/form-data">@csrf
                    <input type="hidden" name="old_image" value="{{$videoEdit->v_image}}">
                    <input type="hidden" name="old_video" value="{{$videoEdit->video_upload}}">
                  <div class="card-body">
                    <div class="form-group">
                      <label>Country</label>
                      <select name="country_name" id="country_name" class="form-control select2" style="width: 100%;">
                        <option>Select</option>
                        @foreach($countries as $country)
                        <option  value="{{$country->id}}" <?php if($country->id==$videoEdit->cntry_id){
                                        echo "selected";
                                    } ?>>{{$country->country_name}}</option>
                        @endforeach
                      </select>
                    </div>
                    <!--  -->
                    <div class="form-group">
                      <label for="v_image">Video Thumbnail Image</label>
                      <div class="input-group">
                          <input type="file" class="form-control" id="v_image" name="v_image" value="{{$videoEdit->v_image}}"  placeholder="Enter Thumbnail Url">
                      </div>
                      <br>
                      <div>
                            <img width="320" height="320" src="{{asset('images/video_images/'.$videoEdit->v_image)}}">  
                      </div>
                    </div>
                    <!--  -->
                    <br>
                    <label  for="name">Type</label>
                    <select id="type" name="name" >
                        <option>Select</option>
                        @foreach($videotypes as $type)
                            <option value="{{$type->id}}" <?php if($type->id==$videoEdit->type){
                            echo "selected";
                        } ?>>{{$type->type_name}}</option>
                        @endforeach
                    </select>
                    <br>
                    <!--  -->
                    <div class="form-group" style="display: none;"  id='url'>
                        <label for="video_url">Video Url</label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="video_url" name="video_url" value="{{$videoEdit->video_url}}"  placeholder = "Enter URL" >
                        </div>
                    </div>
                    <!--  -->
                    <div class="form-group" style="display: none;" id="upload_video">
                        <label for="video_upload">Video Upload</label>
                        <div class="input-group">
                            <input type="file" class="form-control" id="video_upload" name="video_upload" value="{{$videoEdit->video_upload}}" >
                        </div>
                        <br>
                        <div>
                            <video width="320" height="220" preload="metadata" controls>
                                <source src="{{asset('images/video_images/videos/'.$videoEdit->video_upload)}}"
                                    type="video/mp4">
                            </video>

                        </div>
                    </div>
                    <!--  -->  
                  </div>
                    <div class="card-footer">
                    <button type="submit" class="btn btn-primary" >Update</button>
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