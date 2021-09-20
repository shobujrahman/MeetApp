
@extends('layouts.admin_layout.admin_layout')
@section('content')
  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Banner Photos</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{url('admin/dashboard')}}">Home</a></li>
              <li class="breadcrumb-item active">Banner</li>
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
              <h3 class="card-title">Banner Photo</h3>
                <a href="{{ url('admin/banner/create') }}"
                style="max-width: 150px; float:right; display:inline-block;" 
                class="btn btn-block btn-primary">Add Banner Photo</a>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              
              <table id="category" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>Sl.No</th>
                  <th>Reference</th>
                  <th>Url</th>
                  <th>Banner Image</th>
                  <th>Actions</th>                 
                </tr>
                </thead>
                <tbody> 
                  @foreach($banners as $banner)
                  <tr>
                    <th>{{ $no++ }}</th>
                    <th>{{$banner->reference}}</th>
                    <th>{{$banner->url}}</th>
                    <th>
                        @if(!empty($banner->banner_image))
                            <img style="width: 77px; height: 67px;" src="{{asset('images/banner_images/'.$banner->banner_image)}}"/>
                        @endif
                    </th>
                    <td>
                    
                    <a href="{{url('admin/banner/edit/'.$banner->id)}}" class="btn btn-success" role="button"><i class="material-icons option-icon">mode_edit</i></a>
                    &nbsp; &nbsp;

                    <!-- Button trigger modal -->
                      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter_{{$banner->id}}">
                        <i class="material-icons option-icon">launch</i>
                      </button>

                    <!-- Modal -->
                      <div class="modal fade" id="exampleModalCenter_{{$banner->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLongTitle">Banner</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                              <br>
                              <h3>Reference:- </h3>
                              <h5>{{$banner->reference}}</h5>
                              <br>
                              <br>
                              <h3>Url:- </h3>
                              <h5><a href="">{{$banner->url}}</a></h5>
                              <br>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                              
                            </div>
                          </div>
                        </div>
                      </div>
                    &nbsp; &nbsp;
                    <a href="{{url('admin/banner/delete/'.$banner->id)}}" onclick="return confirm('Are you sure want to delete this Banner?')" class="btn btn-danger" role="button"><i class="material-icons option-icon">delete</i></a>
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
