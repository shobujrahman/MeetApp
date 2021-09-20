
@extends('layouts.admin_layout.admin_layout')
@section('content')
  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Gift</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{url('admin/dashboard')}}">Home</a></li>
              <li class="breadcrumb-item active">Gift</li>
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
              <h3 class="card-title">Gift</h3>
                <a href="{{ url('admin/gift/create') }}"
                style="max-width: 150px; float:right; display:inline-block;" 
                class="btn btn-block btn-primary">Add Gift</a>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              
              <table id="category" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>Sl.No</th>
                  <th>Category</th>
                  <th>Coins</th>
                  <th>Tags</th>
                  <th>Image</th>
                  <th>Actions</th>
                  
                </tr>
                </thead>
                <tbody> 
                  @foreach($gifts as $gift)
                  <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{$gift->cat_name}}</td>
                    <td>{{$gift->coin}}</td>
                    <td>{{$gift->tags}}</td>
                    <td>
                      @if(!empty($gift->gift_image))
                          <img style="width: 77px; height: 67px;" src="{{asset('images/gift_images/'.$gift->gift_image)}}"/>
                      @endif        
                    </td>
                    <td>
                      <a href="{{url('admin/gift/edit/'.$gift->id)}}" class="btn btn-success" role="button"><i class="material-icons option-icon">mode_edit</i></a>
                      &nbsp; &nbsp;
                      <a href="{{url('admin/gift/delete/'.$gift->id)}}"onclick="return confirm('Are you sure want to delete this Gift?')" class="btn btn-danger" role="button">
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
