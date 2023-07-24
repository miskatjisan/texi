@extends('partner.layouts.master')
@section('title','Driver | Edit')
@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit Driver </h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Driver </a></li>
              <li class="breadcrumb-item active">Edit</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">

        <div class="col-md-12">
          <div class="card card-outline card-info">
           
            <!-- /.card-header -->
        <form action="{{route('drive.update',$driver->id)}}" method="post">
              @csrf 
              <div class="card-body" oncontextmenu="return false;">
        <div class="row">

        <div class="col-6">
          <div class="form-group">
                <label for="" class="fs-3">Driver Name</label>
                <input type="text" class="fs-3 form-control p-3" name="name" value="{{$driver->name}}"  placeholder="Driver Name">
          </div>
          </div>

          <div class="col-6">
          <div class="form-group">
                <label for="" class="fs-3">Driver License No.</label>
                <input type="text" class="fs-3 form-control p-3" name="license_no" value="{{$driver->license_no}}"  placeholder="Driver License No.">
          </div>
          </div>

          <div class="col-6">
          <div class="form-group">
                <label for="" class="fs-3">Vehicle Make</label>
                <input type="text" class="fs-3 form-control p-3" name="vehicle_make" value="{{$driver->vehicle_make}}"  placeholder="Vehicle Make">
          </div>
          </div>

          <div class="col-6">
          <div class="form-group">
                <label for="" class="fs-3">Vehicle Registration No</label>
                <input type="text" class="fs-3 form-control p-3" name="reg_no" value="{{$driver->reg_no}}"  placeholder="Vehicle Registration No">
          </div>
          </div>

          <div class="col-6">
          <div class="form-group">
                <label for="" class="fs-3">Vehicle Model</label>
                <input type="text" class="fs-3 form-control p-3" name="vehicle_model" value="{{$driver->vehicle_model}}"  placeholder="Vehicle Model">
          </div>
          </div>
          <div class="col-6">
          <div class="form-group">
                <label for="" class="fs-3">Vehicle PCO Number</label>
                <input type="text" class="fs-3 form-control p-3" name="pco_num" value="{{$driver->pco_num}}"  placeholder="Vehicle PCO Number">
          </div>
          </div>


        <div class="col-6">
          <div class="form-group">
                <label for="" class="fs-3">Select Vehicle Class</label>
                <select name="vehicle_class" id="" class="form-control fs-3">
                <option value="{{$driver->vehicle_class}}">{{$driver->vehicle_class}}</option>
                  <option value="Standard">Standard</option>
                  <option value="Executive">Executive</option>
                  <option value="Luxury">Luxury</option>
                  <option value="Chauffeur">Chauffeur</option>
                </select>
                
          </div>
          </div>

          <div class="col-6">
          <div class="form-group">
                <label for="" class="fs-3">Select Vehicle type</label>
                <select name="vehicle_type" id="" class="form-control fs-3">
                <option value="{{$driver->vehicle_type}}">{{$driver->vehicle_type}}</option>
                  <option value="Minicab">Minicab</option>
                  <option value="Minibus">Minibus</option>
                  <option value="MPV">MPV</option>
                  <option value="Coach">Coach</option>
                </select>
                
          </div>
          </div>

        
          
          </div>
            
            <div class="form-group">
              <button type="submit" class="btn btn-warning ">Update Diver</button>
            </div>
            
            </div>
          </div>
        </form>
         
          </div>
</div>
</div>
     
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  @endsection