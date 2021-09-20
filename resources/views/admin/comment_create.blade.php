@extends('layouts.admin_layout.admin_layout')
@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Comment</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{url('admin/dashboard')}}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ url('admin/comment') }}">Manage Comments</a></li>
                        <li class="breadcrumb-item active">Add Comment</li>
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
                    <h3 class="card-title">Add Comment</h3>

                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i
                                class="fas fa-minus"></i></button>
                        <button type="button" class="btn btn-tool" data-card-widget="remove"><i
                                class="fas fa-remove"></i></button>
                    </div>
                </div>
                <!-- /.card-header -->
                <form name="commentForm" id="commentForm" action="{{ url('admin/comment/submit') }}" method="post"
                    enctype="multipart/form-data">@csrf
                    <div class="card-body">
                        <!-- 1st row -->
                        <div class="row">
                            <div class="col-md-6">
                                <!-- /.form-group -->
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" class="form-control" name="name" id="name"
                                        value="{{ old('name') }}" placeholder="Enter name">
                                </div>
                                <div class="form-group">
                                    <label>Country</label>
                                    <select name="country_name" id="country_name" class="form-control select2" required
                                        style="width: 100%;">
                                        <option>Select</option>
                                        @foreach($countries as $country)
                                        <option value="{{$country->id}}">{{$country->country_name}}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="comment">Comment</label>
                                    <input type="text" class="form-control" name="comment" id="comment"
                                        value="{{ old('comment') }}" placeholder="Enter Comment">
                                </div>

                            </div>
                        </div>

                    </div>

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Publish</button>
                    </div>

                </form>

            </div>
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection