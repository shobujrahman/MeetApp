
@extends('layouts.admin_layout.admin_layout')
@section('content')
  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Categories</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{url('admin/dashboard')}}">Home</a></li>
              <li class="breadcrumb-item active">Category</li>
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
              <h3 class="card-title">Manage Categorye</h3>
                <a href="{{ url('admin/category/create') }}"
                style="max-width: 150px; float:right; display:inline-block;" 
                class="btn btn-block btn-primary">Add Category</a>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              
              <table id="category" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>Sl.No</th>
                  <th>Category Name</th>
                  <th>Category Image</th>
                  <th>Actions</th>
                  
                </tr>
                </thead>
                <tbody> 
                  @foreach($categories as $category)
                  <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{$category->cat_name}}</td>
                    <td>
                      
                    @if(!empty($category->cat_image))
                      <img style="width: 77px; height: 67px;" src="{{asset('images/category_images/'.$category->cat_image)}}"/>
                    @endif
                    </td>
                    <td>
                      <a href="{{url('admin/category/edit/'.$category->id)}}" class="btn btn-success" role="button"><i class="material-icons option-icon">mode_edit</i></a>
                      &nbsp; &nbsp;
                      <a href="{{url('admin/category/delete/'.$category->id)}}"onclick="return confirm('Are you sure want to delete this Category?')" class="btn btn-danger" role="button">
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
