@extends('partner.layouts.master')
@section('title','Congestion Charge | Edit')
@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit By Milage Pricing </h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Congestion Charge </a></li>
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
        <form action="{{route('congcharges.update',$congcharge->id)}}" method="post">
              @csrf 
              <div class="card-body" oncontextmenu="return false;">
        <div class="row">
        <div class="col-6">
          <div class="form-group">
                <label for="" class="fs-3">Congestion Charge</label>
                <p class="fs-3">Enter the congestion charge value to be considered while computing the fares.</p>
                <input type="number" class="fs-3 form-control p-3" name="congestion_charge" value="{{$congcharge->congestion_charge}}" placeholder="Congestion Charge">
          </div>
          </div>

          <div class="col-6">
          <div class="form-group">
            <label for="" class="fs-3">Area Postcode</label>
            <p class="fs-3">The postcodes areas in which you want us to consider the above congestion charges as regulated by the Government of London.</p>
            <select name="area_postcode" class="form-control fs-3" id="">
              @foreach($areacovers as $areacover)
              <option value="{{$congcharge->area_postcode}}">{{$congcharge->area_postcode}}</option>
              <option value="{{$areacover->by_outcode}}">{{$areacover->by_outcode}}</option>
              @endforeach
            </select>
          </div>
          </div>
          
          </div>
            
            <div class="form-group">
              <button type="submit" class="btn btn-warning ">Update Congestion Charge</button>
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