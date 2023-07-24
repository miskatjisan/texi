@extends('partner.layouts.master')
@section('title',"Document Insurance | Edit")
@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit Insurance </h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Insurance </a></li>
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
        <form action="{{route('insuran.update',$insurance->id)}}" method="post">
              @csrf 
              <div class="card-body" oncontextmenu="return false;">
        <div class="row">

          <div class="col-6">
          <div class="form-group">
                <label for="" class="fs-3">Insurance Number</label>
                <input type="number" class="fs-3 form-control p-3" value="{{$insurance->ins_number}}" name="ins_number"  placeholder="Insurance Number">
          </div>
          </div>
          <div class="col-6">
          <div class="form-group">
                <label for="" class="fs-3">Insurance Expiry Date</label>
                <input type="date" class="fs-3 form-control p-3" value="{{$insurance->ins_expiry_date}}" name="ins_expiry_date"  placeholder="Insurance Expiry Date">
          </div>
          </div>

          </div>
            
            <div class="form-group">
              <button type="submit" class="btn btn-warning ">Update Insurance</button>
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