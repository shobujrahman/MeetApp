@extends('layouts.admin_layout.admin_layout')
@section('content')
  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Advertisement</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{url('admin/dashboard')}}">Home</a></li>
              <li class="breadcrumb-item active">Advertisement</li>
            </ol>
          </div>
        </div>
      </div>
      <!-- /.container-fluid -->
    </section>

    
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <x-alert/>
            <!-- SELECT2 EXAMPLE -->
            <div class="card card-default">
                <div class="card-header">
                    <h3 class="card-title">Advertisement</h3>

                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-remove"></i></button>
                </div>
            </div>
            <!-- /.card-header -->
            <form name="adForm" id="adForm" action="{{ url('admin/advertisement/update') }}" method="post" enctype="multipart/form-data">@csrf 
                <div class="card-body">
                    <!-- 1st row -->
                    <div class="row">
                      <!-- Admob Ads -->
                      
                      <div class="col-md-12">
                            <label class="card-title">Admob Ads:</label>
                      </div>
                          <br>
                          <br>
                          

                      <div class="col-md-6">
                        <div class="form-group">
                            <label for="admob_inter">Inter Ad Unit</label>
                            <input type="text" class="form-control" name="admob_inter" id="admob_inter" value="{{$advertisement->admob_inter}}" placeholder="Inter Ad Unit" >
                        </div>
                        <div class="form-group">
                            <label for="admob_banner">Banner Ad Unit</label>
                            <input type="text" class="form-control" name="admob_banner" id="admob_banner" value="{{$advertisement->admob_banner}}" placeholder="Banner Ad Unit" >
                        </div>
                      </div>
                      
                      <div class="col-md-6">
                        <div class="form-group">
                            <label for="admob_native">Native Ad Unit</label>
                            <input type="text" class="form-control" name="admob_native" id="admob_native" value="{{$advertisement->admob_native}}" placeholder="Native Ad Unit" >
                        </div>
                        <div class="form-group">
                            <label for="admob_reward">Reward Ad Unit</label>
                            <input type="text" class="form-control" name="admob_reward" id="admob_reward" value="{{$advertisement->admob_reward}}" placeholder="Reward Ad Unit" >
                        </div>
                      </div>

                      <!-- Admob Ads end -->
                      <!-- facebook Ads -->
                      <div class="col-md-12">
                            <label class="card-title">Facebook Ads:</label>
                      </div>
                          <br>
                          <br>
                          

                      <div class="col-md-6">
                        <div class="form-group">
                            <label for="fb_inter">Inter Ad Unit</label>
                            <input type="text" class="form-control" name="fb_inter" id="fb_inter" value="{{$advertisement->fb_inter}}" placeholder="Inter Ad Unit" >
                        </div>
                        <div class="form-group">
                            <label for="fb_banner">Banner Ad Unit</label>
                            <input type="text" class="form-control" name="fb_banner" id="fb_banner" value="{{$advertisement->fb_banner}}" placeholder="Banner Ad Unit" >
                        </div>
                      </div>
                      
                      <div class="col-md-6">
                        <div class="form-group">
                            <label for="fb_native">Native Ad Unit</label>
                            <input type="text" class="form-control" name="fb_native" id="fb_native" value="{{$advertisement->fb_native}}" placeholder="Native Ad Unit" >
                        </div>
                        <div class="form-group">
                            <label for="fb_reward">Reward Ad Unit</label>
                            <input type="text" class="form-control" name="fb_reward" id="fb_reward" value="{{$advertisement->fb_reward}}" placeholder="Reward Ad Unit" >
                        </div>
                      </div>
                      <!-- facebook Ads end -->
                      <!-- Startup Ads  -->
                      <div class="col-md-12">
                            <label class="card-title">Startup Ads:</label>
                      </div>
                          <br>
                          <br>
                      <div class="col-md-12">
                        <div class="form-group">
                            <label for="startup_inter">Inter Ad Unit</label>
                            <input type="text" class="form-control" name="startup_inter" id="startup_inter" value="{{$advertisement->startup_inter}}" placeholder="Inter Ad Unit" >
                        </div>
                        <div class="form-group">
                            <label for="startup_banner">Banner Ad Unit</label>
                            <input type="text" class="form-control" name="startup_banner" id="startup_banner" value="{{$advertisement->startup_banner}}" placeholder="Banner Ad Unit" >
                        </div>
<br>
<br>
                      </div>
                      <!-- Startup Ads end -->
                      <!--  -->
                      <div class="col-md-12">
                        <label class="card-title">Industrial Interval:</label>
                        <div class="form-group">
                            <!-- <h6></h6> -->
                            <input type="text" class="form-control" name="industrial_interval" id="industrial_interval" value="{{$advertisement->industrial_interval}}" placeholder="Industrial_Interval" >
                        </div>
                      </div>
                      <div class="col-md-12">
                        <label class="card-title">Native Ads:</label>
                        <div class="form-group">
                            <!-- <h6></h6> -->
                            <input type="text" class="form-control" name="native_ads" id="native_ads" value="{{$advertisement->native_ads}}" placeholder="Native_Ads" >
                        </div>
                      </div>
                      <!--  -->
                      <div class="col-md-12">
                        <div class="form-group">
                            <label for="ads_type">Ads Type</label>
                            
                            <select name="ads_type" id="ads_type" class="form-control select2" style="width: 100%;">
                              <option selected>Select</option>
                              <option  value="0" @if ($advertisement['ad_types'] == "0") {{ 'selected' }} @endif>Admob</option>  
                              <option  value="1" @if ($advertisement['ad_types'] == "1") {{ 'selected' }} @endif>Facebook</option>
                              <option  value="2" @if ($advertisement['ad_types'] == "2") {{ 'selected' }} @endif>Startup</option>  
                              <option  value="3" @if ($advertisement['ad_types'] == "3") {{ 'selected' }} @endif>Both</option>  
                             
                            </select>
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
