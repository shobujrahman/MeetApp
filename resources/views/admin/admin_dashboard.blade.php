@extends('layouts.admin_layout.admin_layout')
@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Dashboard</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{url('admin/dashboard')}}">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!--  -->
                <div class="col-lg-3 col-6">
                    <div class="small-box bg-danger">
                        <div class="inner">

                            <h3>{{$cCount}}</h3>

                            <p>Category</p>
                        </div>
                        <div class="icon">
                            <i class="small material-icons">view_list</i>
                        </div>
                        <a href="{{url('admin/category')}}" class="small-box-footer">More info <i
                                class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!--  -->

                <!--  -->
                <div class="col-lg-3 col-6">
                    <div class="small-box bg-success">
                        <div class="inner">
                            <h3>{{$countryCount}}</h3>

                            <p>Country</p>
                        </div>
                        <div class="icon">
                            <i class="small material-icons">public</i>
                        </div>
                        <a href="{{url('admin/country')}}" class="small-box-footer">More info <i
                                class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!--  -->
                <div class="col-lg-3 col-6">
                    <div class="small-box bg-info">
                        <div class="inner">
                            <h3> {{$commentCount}} </h3>

                            <p>Comment</p>
                        </div>
                        <div class="icon">

                            <i class="nav-icon far fa-comment"></i>
                        </div>
                        <a href="{{url('admin/comment')}}" class="small-box-footer">More info <i
                                class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!--  -->
                <div class="col-lg-3 col-6">
                    <div class="small-box bg-light">
                        <div class="inner">
                            <h3>{{$giftCount}}</h3>

                            <p>Gift</p>
                        </div>
                        <div class="icon">
                            <i class="nav-icon fas fa-gift"></i>
                        </div>
                        <a href="{{ url('admin/gift')}}" class="small-box-footer">More info <i
                                class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!--  -->
                <div class="col-lg-3 col-6">
                    <div class="small-box bg-secondary">
                        <div class="inner">
                            <h3>{{$imageCount}}</h3>

                            <p>Image</p>
                        </div>
                        <div class="icon">
                            <i class="nav-icon fas fa-images"></i>
                        </div>
                        <a href="{{ url('admin/image')}}" class="small-box-footer">More info <i
                                class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!--  -->
                <div class="col-lg-3 col-6">
                    <div class="small-box bg-primary">
                        <div class="inner">
                            <h3>{{$nameCount}}</h3>

                            <p>Name</p>
                        </div>
                        <div class="icon">
                            <i class="nav-icon fas fa-signature"></i>
                        </div>
                        <a href="{{url('admin/name')}}" class="small-box-footer">More info <i
                                class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!--  -->
                <div class="col-lg-3 col-6">
                    <div class="small-box bg-warning">
                        <div class="inner">
                            <h3>{{$videoCount}}</h3>

                            <p>Video</p>
                        </div>
                        <div class="icon">
                            <i class="nav-icon fas fa-video"></i>
                        </div>
                        <a href="{{url('admin/video')}}" class="small-box-footer">More info <i
                                class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!--  -->
                <div class="col-lg-3 col-6">
                    <div class="small-box bg-secondary">
                        <div class="inner">
                            <h3>{{$adCount}}</h3>

                            <p>Advertisement</p>
                        </div>
                        <div class="icon">
                            <i class="nav-icon fas fa-ad"></i>
                        </div>
                        <a href="{{url('admin/advertisement')}}" class="small-box-footer">More info <i
                                class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!--  -->
                <div class="col-lg-3 col-6">
                    <div class="small-box bg-warning">
                        <div class="inner">
                            <h3>{{$bannerCount}}</h3>

                            <p>Banner Photos</p>
                        </div>
                        <div class="icon">
                            <i class="nav-icon fas fa-images"></i>
                        </div>
                        <a href="{{url('admin/banner')}}" class="small-box-footer">More info <i
                                class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!--  -->
                <div class="col-lg-3 col-6">
                    <div class="small-box bg-success">
                        <div class="inner">
                            <h3>{{$coinCount}}</h3>

                            <p>Coin Purchase Plan</p>
                        </div>
                        <div class="icon">
                            <i class="nav-icon fas fa-coins"></i>
                        </div>
                        <a href="{{url('admin/coin')}}" class="small-box-footer">More info <i
                                class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!--  -->
                <div class="col-lg-3 col-6">
                    <div class="small-box bg-primary">
                        <div class="inner">
                            <h3>{{$vipCount}}</h3>

                            <p>Vip Plan</p>
                        </div>
                        <div class="icon">
                            <i class="nav-icon fas fa-user-friends"></i>
                        </div>
                        <a href="{{url('admin/vip')}}" class="small-box-footer">More info <i
                                class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!--  -->

                <div class="col-lg-3 col-6">
                    <div class="small-box bg-danger">
                        <div class="inner">
                            <h3>{{$adminCount}}</h3>

                            <p>Administrator</p>
                        </div>
                        <div class="icon">
                            <i class="small material-icons">settings</i>
                        </div>
                        <a href="{{url('admin/administrator')}}" class="small-box-footer">More info <i
                                class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!--  -->
                <div class="col-lg-3 col-6">
                    <div class="small-box bg-danger">
                        <div class="inner">
                            <h3>{{$userCount}}</h3>

                            <p>Users</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-user"></i>
                        </div>
                        <a href="{{url('admin/user')}}" class="small-box-footer">More info <i
                                class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!--  -->
                <div class="col-lg-3 col-6">
                    <div class="small-box bg-dark">
                        <div class="inner">
                            <h3>{{$notifiCount}}</h3>

                            <p>Notification</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-user"></i>
                        </div>
                        <a href="{{url('admin/notifications')}}" class="small-box-footer">More info <i
                                class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!--  -->
                <div class="col-lg-3 col-6">
                    <div class="small-box bg-light">
                        <div class="inner">
                            <h3>{{$settingCount}}</h3>

                            <p>Settings</p>
                        </div>
                        <div class="icon">
                            <i class="small material-icons">settings</i>
                        </div>
                        <a href="{{url('admin/settings')}}" class="small-box-footer">More info <i
                                class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!--  -->            
		</div>
        </div>
    </section>
</div>
@endsection