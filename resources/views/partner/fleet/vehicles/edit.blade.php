@extends('partner.layouts.master')
@section('title','Vehicle Price | Edit')
@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit Vehicle Price </h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Vehicle Price </a></li>
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
        <form action="{{route('vehicl.update',$vehicle->id)}}" method="post">
              @csrf 
              <div class="card-body" oncontextmenu="return false;">
        <div class="row">

        <div class="col-6">
          <div class="form-group">
                <label for="" class="fs-3">Vehicle Name</label>
                <input type="text" class="fs-3 form-control p-3" name="name" value="{{$vehicle->name}}"  placeholder="Vehicle Name">
          </div>
          </div>



          <div class="col-6">
          <div class="form-group">
                <label for="" class="fs-3">Select Area</label>
                <select name="area" id="" class="form-control fs-3">
                  <option value="{{$vehicle->area}}">{{$vehicle->area}}</option>
                  @foreach($areacovarages as $areacovarage)
                  <option value="{{$areacovarage->by_outcode}},{{$areacovarage->by_mileage}}">{{$areacovarage->by_outcode}},{{$areacovarage->by_mileage}}</option>
              @endforeach
                </select>
                
          </div>
          </div>




          <div class="col-6">
          <div class="form-group">
                <label for="" class="fs-3">Select Vehicle type</label>
                <select name="type" id="" class="form-control fs-3">
                <option value="{{$vehicle->type}}">{{$vehicle->type}}</option>
                  <option value="Minicab">Minicab</option>
                  <option value="Minibus">Minibus</option>
                  <option value="MPV">MPV</option>
                  <option value="Coach">Coach</option>
                </select>
                
          </div>
          </div>

          <div class="col-6">
          <div class="form-group">
                <label for="" class="fs-3">Select Vehicle Class</label>
                <select name="class" id="" class="form-control fs-3">
                <option value="{{$vehicle->class}}">{{$vehicle->class}}</option>
                  <option value="Standard">Standard</option>
                  <option value="Executive">Executive</option>
                  <option value="Luxury">Luxury</option>
                  <option value="Chauffeur">Chauffeur</option>
                </select>
                
          </div>
          </div>

          

          <div class="col-6">
          <div class="form-group">
                <label for="" class="fs-3" >No. of Passanger</label>
                <input type="number" class="fs-3 form-control p-3" name="passenger" value="{{$vehicle->passenger}}"  placeholder="No. of Passanger">
          </div>
          </div>

          
          <div class="col-6">
          <div class="form-group">
                <label for="" class="fs-3">No. of Vehicle</label>
                <input type="number" class="fs-3 form-control p-3" name="no_vehicle" value="{{$vehicle->no_vehicle}}"  placeholder="No. of Vehicle">
          </div>
          </div>


          <div class="col-6">
          <div class="form-group">
                <label for="" class="fs-3">No. of CheckIn</label>
                <input type="number" class="fs-3 form-control p-3" name="checkin" value="{{$vehicle->checkin}}"  placeholder="No. of CheckIn">
          </div>
          </div>

          <div class="col-6">
          <div class="form-group">
                <label for="" class="fs-3">No. of Cabin</label>
                <input type="number" class="fs-3 form-control p-3" name="cabin" value="{{$vehicle->cabin}}"  placeholder="No. of Cabin">
          </div>
          </div>

          <div class="col-6">
          <div class="form-group">
                <label for="" class="fs-3">Fare</label>
                <input type="number" class="fs-3 form-control p-3" name="fare" value="{{$vehicle->fare}}"  placeholder="Parcentage w.r.t Standard Price">
          </div>
          </div>
          
          </div>
            
            <div class="form-group">
              <button type="submit" class="btn btn-warning ">Update Vehicle</button>
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