@extends('layouts.admin_layout.admin_layout')
@section('content')
  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Coin Purchase Plan</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{url('admin/dashboard')}}">Home</a></li>
              <li class="breadcrumb-item active">Coin Purchase Plan</li>
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
                    <h3 class="card-title">Coin Purchase Plan</h3>

                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-remove"></i></button>
                </div>
            </div>
            <!-- /.card-header -->
            <form name="coinForm" id="coinForm" action="{{ url('admin/coin/update') }}" method="post" enctype="multipart/form-data">@csrf 
                <div class="card-body">
                    <!-- 1st row -->
                    <div class="row">
                      
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="coin">Coin</label>
                                <input type="text" class="form-control" name="coin" id="coin" value="{{$coin->coin}}"  placeholder="Coin" >
                            </div>
                            <div class="form-group">
                                <label for="value">Value</label>
                                <input type="text" class="form-control" name="value" id="value" value="{{$coin->value}}"  placeholder="Value" >
                            </div>
                            <div class="form-group">
                                <label for="pdct_id_ggl">Product Id Google</label>
                                <input type="text" class="form-control" name="pdct_id_ggl" id="pdct_id_ggl" value="{{$coin->pdct_id_ggl}}" placeholder="Google Id" >
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
