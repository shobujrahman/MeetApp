@extends('layouts.admin_layout.admin_layout')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Vip Plan</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{url('admin/dashboard')}}">Home</a></li>
            <li class="breadcrumb-item"><a href="{{ url('admin/vip') }}">Manage Vip Plan</a></li>
            <li class="breadcrumb-item active">Edit Vip Plan</li>
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
                <h3 class="card-title">Edit Vip Plan</h3>
              </div>
                <br>
                    <x-alert/>
                    <!-- /.card-header -->
                    <!-- form start -->
                <form name="vipForm" id="vipForm"  action="{{ url('admin/vip/update/'.$vipEdit->id) }}"   method="post" enctype="multipart/form-data">@csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="subcrptn_date">Subscription Date</label>
                            <div class="input-group">
                                <input type="text" class="form-control" id="subcrptn_date" name="subcrptn_date" value="{{$vipEdit->subcrptn_date}}" placeholder = "Enter Date" >
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="ggl_pdct_id">Google Product Id</label>
                            <div class="input-group">
                                <input type="text" class="form-control" id="ggl_pdct_id" name="ggl_pdct_id" value="{{$vipEdit->ggl_pdct_id}}" placeholder = "Enter Google Product Id" >
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                    <button type="submit" class="btn btn-primary">update</button>
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