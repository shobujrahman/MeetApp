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
                    <h1>Comments</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{url('admin/dashboard')}}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ url('admin/comment') }}">Manage Comments</a></li>
                        <li class="breadcrumb-item active">Edit Comment</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <x-alert />
            <!-- SELECT2 EXAMPLE -->
            <div class="card card-default">
                <div class="card-header">
                    <h3 class="card-title">Edit Comment</h3>

                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i
                                class="fas fa-minus"></i></button>
                        <button type="button" class="btn btn-tool" data-card-widget="remove"><i
                                class="fas fa-remove"></i></button>
                    </div>
                </div>
                <!-- /.card-header -->
                <form name="commentForm" id="commentForm" action="{{ url('admin/comment/update/'.$commentEdit->id) }}"
                    method="post" enctype="multipart/form-data">@csrf
                    <div class="card-body">
                        <!-- 1st row -->
                        <div class="row">
                            <div class="col-md-6">

                                <!-- /.form-group -->
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" class="form-control" name="name" id="name"
                                        value="{{ $commentEdit->name}}" placeholder="Enter name">
                                </div>

                                <div class="form-group">
                                    <label>Country</label>
                                    <select name="country_name" id="country_name" class="form-control select2"
                                        style="width: 100%;">
                                        <option value="">Select</option>
                                        @foreach($countries as $country)
                                        <option value="{{$country->id}}" <?php if($country->id==$commentEdit->cntry_id){
                                        echo "selected";
                                    } ?>>{{$country->country_name}}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="comment">Comment</label>
                                    <input type="text" class="form-control" name="comment" id="comment"
                                        value="{{$commentEdit->comment}}" placeholder="Enter Comment">
                                </div>

                            </div>
                        </div>

                    </div>

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>

                </form>

            </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection