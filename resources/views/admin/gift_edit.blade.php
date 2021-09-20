@extends('layouts.admin_layout.admin_layout')
@section('content')

@php 
    $categories = DB::table('categories')->get();
@endphp

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Gift</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{url('admin/dashboard')}}">Home</a></li>
            <li class="breadcrumb-item"><a href="{{ url('admin/gift') }}">Gift</a></li>
            <li class="breadcrumb-item active">Edit Gift</li>
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
                <h3 class="card-title">Edit Gift</h3>
              </div>
                <br>
                    <x-alert/>
                    <!-- /.card-header -->
                    <!-- form start -->
              <form name="giftForm" id="giftForm"  action="{{ url('admin/gift/update/'.$giftEdit->id) }}"   method="post" enctype="multipart/form-data">@csrf
                <input type="hidden" name="old_image" value="{{$giftEdit->gift_image}}">
                <div class="card-body">
                    <div class="form-group">
                        <label for="coin">Coin</label>
                        <input type="text" class="form-control" id="coin" name="coin" value="{{$giftEdit->coin}}" placeholder="Enter Coin" >
                    </div>
                    <div class="form-group">
                        <label>Category</label>
                        <select name="cat_name" id="cat_name" class="form-control select2" style="width: 100%;">
                            <option>Select</option>                           
                            @foreach($categories as $category)
                                <option  value="{{$category->id}}" <?php if($category->id==$giftEdit->cat_id){
                                        echo "selected";
                                    } ?>>{{$category->cat_name}}</option>
                            @endforeach            
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Tags</label>
                        <select name="tags" id="tags" class="form-control select2" style="width: 100%;">
                            <option>Select</option>                           
                            <option  value="Emoji" @if($giftEdit->tags == "Emoji") {{'selected'}} @endif>Emoji</option>                                
                            <option  value="Hearts" @if($giftEdit->tags == "Hearts") {{'selected'}} @endif>Hearts</option>                                
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="gift_image">Gift Image</label>
                        <div class="input-group">
                            <input type="file" class="form-control" id="gift_image" name="gift_image" >
                        </div>
                        <br>
                        <div>
                            <img style="width:300px; height:300px;" src="{{asset('images/gift_images/'.$giftEdit->gift_image)}}">
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Update</button>
                </div>
              </form>
            </div>
        </div>
      </div>
    </section>
</div>
@endsection