@extends('layouts.admin_layout.admin_layout')
@section('content')
  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Video</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{url('admin/dashboard')}}">Home</a></li>
              <li class="breadcrumb-item active">Video</li>
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
              <h3 class="card-title">Manage Video</h3>
              <a href="{{ url('admin/video/create') }}"
                style="max-width: 150px; float:right; display:inline-block;" 
                class="btn btn-block btn-primary">Add Video</a>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="category" class="table table-bordered table-hover">
                <thead>
                  <tr>
                    <th>Sl. No</th>
                    <th>Country</th>
                    <th>Image</th>
                    <th>Url</th>
                    <th>Video</th>
                    <th>Type</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody> 
                    @foreach($videos as $video)
                  <tr>
                    <td>{{ $no++ }}</td> 
                    <td>{{$video->country_name}}</td>
                    <td>
                       @if($video->v_image)
                            <img style="width: 77px; height: 67px;" src="{{asset('images/video_images/'.$video->v_image)}}"/>
                        @endif
                    </td>
                    
                    <td>{{$video->video_url}}</td>
                    
                    
                    <td>
                        @if(!empty($video->video_upload))
                            <video width="300" height="200" preload="metadata" controls>
                              <source src="{{asset('images/video_images/videos/'.$video->video_upload)}}" type="video/mp4">
                            </video>
                        @endif
                    </td>

                    <td>{{$video->type_name}}</td>
                    
                    <td>
                      <a href="{{url('admin/video/edit/'.$video->id)}}" class="btn btn-success" role="button"><i class="material-icons option-icon">mode_edit</i></a>
                      &nbsp; &nbsp;
                      <a href="{{url('admin/video/delete/'.$video->id)}}"onclick="return confirm('Are you sure want to delete this News?')" class="btn btn-danger" role="button">
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