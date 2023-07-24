@extends('partner.layouts.master')
@section('title',"Document Operator's License | Edit")
@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit Operator's License </h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Operator's License </a></li>
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
        <form action="{{route('licenses.update',$license->id)}}" method="post">
              @csrf 
              @method('PUT')
              <div class="card-body" oncontextmenu="return false;">
        <div class="row">
        <div class="col-4">
          <div class="form-group">
                <label for="" class="fs-3">Licensing Authority</label>
                <input type="text" class="fs-3 form-control p-3" name="li_authority" value="{{$license->li_authority}}"  placeholder="Licensing Authority">
          </div>
          </div>

          <div class="col-4">
          <div class="form-group">
                <label for="" class="fs-3">License Number</label>
                <input type="number" class="fs-3 form-control p-3" name="li_number" value="{{$license->li_number}}"  placeholder="License Number">
          </div>
          </div>
          <div class="col-4">
          <div class="form-group">
                <label for="" class="fs-3">License Expiry Date</label>
                <input type="date" class="fs-3 form-control p-3" name="li_expiry_date" value="{{$license->li_expiry_date}}"  placeholder="License Expiry Date">
          </div>
          </div>

          </div>
            
            <div class="form-group">
              <button type="submit" class="btn btn-warning ">Update Operator License</button>
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