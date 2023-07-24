@extends('partner.layouts.master')
@section('title','Airport Fixed Pricing | Edit')
@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit Airport Fixed Pricing </h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Airport Fixed Pricing </a></li>
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
        <form action="{{route('airfixprices.update',$airfixprice->id)}}" method="post">
              @csrf 
              <div class="card-body" oncontextmenu="return false;">
        <div class="row">
        <div class="col-6">
          <div class="form-group">
                <label for="" class="fs-3">Journey Type</label>
                <select name="journey_type" id="" class="form-control fs-3">
                  <option value="{{$airfixprice->journey_type}}">{{$airfixprice->journey_type}}</option>
                  <option value="Airport to Plot">Airport to Plot</option>
                  <option value="Plot to Airport">Plot to Airport</option>
                </select>
                
          </div>
          </div>

          <div class="col-6">
          <div class="form-group">
                <label for="" class="fs-3">Pickup/Dropoff Charges</label>
                <input type="number" class="fs-3 form-control p-3" name="pick_drop_charge" value="{{$airfixprice->pick_drop_charge}}"  placeholder="Pickup/Dropoff Charges">
          </div>
          </div>



          <div class="col-4">
          <div class="form-group">
                <label for="" class="fs-3">From</label>
                <input type="text" class="fs-3 form-control p-3" name="a_from" value="{{$airfixprice->a_from}}"  placeholder="From">
          </div>
          </div>

          <div class="col-4">
          <div class="form-group">
                <label for="" class="fs-3">To</label>
                <input type="text" class="fs-3 form-control p-3" name="a_to" value="{{$airfixprice->a_to}}"  placeholder="To">
          </div>
          </div>
          <div class="col-4">
          <div class="form-group">
                <label for="" class="fs-3">Fare</label>
                <input type="number" class="fs-3 form-control p-3" name="a_fare" value="{{$airfixprice->a_fare}}"  placeholder="Fare '$/mi'">
          </div>
          </div>
          
          </div>
            
            <div class="form-group">
              <button type="submit" class="btn btn-warning ">Update Airport fixed price</button>
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