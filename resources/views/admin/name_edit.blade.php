@extends('layouts.admin_layout.admin_layout')
@section('content')

@php 
    $countries = DB::table('countries')->get();
@endphp
  
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Names</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{url('admin/dashboard')}}">Home</a></li>
              <li class="breadcrumb-item"><a href="{{ url('admin/name') }}">Manage Names</a></li>
              <li class="breadcrumb-item active">Edit Name</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <x-alert/>
            <!-- SELECT2 EXAMPLE -->
            <div class="card card-default">
                <div class="card-header">
                    <h3 class="card-title">Edit Name</h3>

                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-remove"></i></button>
                </div>
            </div>
            <!-- /.card-header -->
            <form name="nameForm" id="nameForm" action="{{ url('admin/name/update/'.$nameEdit->id) }}" method="post" enctype="multipart/form-data">@csrf
                <div class="card-body">
                    <!-- 1st row -->
                    <div class="row">
                        <div class="col-md-6">


                            <div class="form-group">
                                <label for="n_name">Name</label>
                                <input type="text" class="form-control" name="n_name" id="n_name" value="{{$nameEdit->n_name}}" placeholder="Enter Name" >
                            </div>
                            
                            <!-- /.form-group -->
                            <div class="form-group">
                                <label>Country</label>
                                <select name="country_name" id="country_name" class="form-control select2" style="width: 100%;">
                                    <option value="">Select</option>
                                    @foreach($countries as $country)
                                    <option  value="{{$country->id}}"<?php if($country->id==$nameEdit->cntry_id){
                                        echo "selected";
                                    } ?>>{{$country->country_name}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <!--  -->
                            <div class="form-group">
                                <label for="coin">Coin</label>
                                <input type="text" class="form-control" name="coin" id="coin" value="{{$nameEdit->coin}}" >
                            </div>
                        </div>
                    </div>

                </div>
                       
                        <div class="card-footer">
                            <button type="submit"  class="btn btn-primary">Update</button>
                        </div>
                    
            </form>

        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
  <!-- /.content-wrapper -->
@endsection




