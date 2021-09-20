@extends('layouts.admin_layout.admin_layout')
@section('content')
  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Settings</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{url('admin/dashboard')}}">Home</a></li>
              <li class="breadcrumb-item active">Settings</li>
            </ol>
          </div>
        </div>
      </div>
    </section>

    
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <x-alert/>
            <!-- SELECT2 EXAMPLE -->
            <div class="card card-default">
                <div class="card-header">
                    <h3 class="card-title">Settings</h3>

                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-remove"></i></button>
                </div>
            </div>
            <!-- /.card-header -->
            <form name="settingsForm" id="settingsForm" action="{{ url('admin/settings/update') }}" method="post" enctype="multipart/form-data">@csrf 
                <div class="card-body">
                    <!-- 1st row -->
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="video_ad_bonus">Video Ad Bonus</label>
                                <input type="text" class="form-control" name="video_ad_bonus" id="video_ad_bonus" value="{{$settings->video_ad_bonus}}"  placeholder="Video Ad Bonus" >
                            </div>
                            <div class="form-group">
                                <label for="login_bonus">Login Bonus</label>
                                <input type="text" class="form-control" name="login_bonus" id="login_bonus" value="{{$settings->login_bonus}}"  placeholder="Login Bonus" >
                            </div>
                            <div class="form-group">
                                <label for="refrl_fnd_bonus">Referal Friend Bonus</label>
                                <input type="text" class="form-control" name="refrl_fnd_bonus" id="refrl_fnd_bonus" value="{{$settings->refrl_fnd_bonus}}" placeholder="Google Id" >
                            </div>
                            <!-- <div class="form-group">
                                <label for="per_vdo_chrg">Per Video Charge</label>
                                <input type="text" class="form-control" name="per_vdo_chrg" id="per_vdo_chrg" value="{{$settings->per_vdo_chrg}}"  placeholder="Coin" >
                            </div> -->
                            <div class="form-group">
                                <label for="app_version">App Version</label>
                                <input type="text" class="form-control" name="app_version" id="app_version" value="{{$settings->app_version}}"  placeholder="version 1" >
                            </div>
                            <div class="form-group">
                                <label for="set_scnds_ads">Set Seconds Of Ads</label>
                                <input type="text" class="form-control" name="set_scnds_ads" id="set_scnds_ads" value="{{$settings->set_scnds_ads}}"  placeholder="Value" >
                            </div>
                            <div class="form-group">
                                <label for="ggl_play_id">Google Play Id</label>
                                <input type="text" class="form-control" name="ggl_play_id" id="ggl_play_id" value="{{$settings->ggl_play_id}}" placeholder="Google Id" >
                            </div>
                            <div class="form-group">
                                <div class="form-line">
                                    <label for="app_fcm_key">FCM Server Key</label>
                                    <input type="text" class="form-control" name="app_fcm_key" id="app_fcm_key" value="{{$settings->app_fcm_key}}" placeholder=" adjhbqjkdnqjdnqnoijdd0i-0o2o[pe/2e,,l;,lkamdwndkjnkjndjjqnn" required ></input>
                                </div>
                            </div>
                            <div class="form-group">
                              <div class="form-line">
                                <div class="font-12">Privacy Policy</div>
                                  <textarea class="textarea" placeholder="Place some text here" name="privacy_policy" id="privacy_policy" required
                                      style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
                                      {{$settings->privacy_policy}}
                                  </textarea>
                              </div>
                            </div>
                        </div>
                                        
                    </div>
                  </div>
                       
                  <div class="card-footer">
                    <button type="submit"  class="btn btn-primary">update</button>
                  </div>
                    
            </form>
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
