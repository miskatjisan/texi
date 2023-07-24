@extends('partner.layouts.master')
@section('title','Area Coverage | Edit')
@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit Area Coverage</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Area Coverage</a></li>
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
        <form action="{{route('areacovers.update',$areacover->id)}}" method="post">
              @csrf  
              @method('PUT')
          <div class="card-body" oncontextmenu="return false;">
          <div class="row">
            <div class="col-6">
          <div class="form-group">
                <label for="" class="fs-3">By Outcode</label>
                <input type="number" class="fs-3 form-control p-3" name="by_outcode" value="{{$areacover->by_outcode}}" placeholder="Type initial 3 letters of post code">
          </div>
          </div>

          <div class="col-6">
          <div class="form-group">
                <label for="" class="fs-3">By Mileage</label>
                <input type="text" class="fs-3 form-control p-3" name="by_mileage" value="{{$areacover->by_mileage}}" placeholder="Coverage Area By Mileage">
          </div>
          </div>

          </div>
            
            <div class="form-group">
              <button type="submit" class="btn btn-warning ">Update Area Coverage</button>
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