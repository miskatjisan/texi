@extends('partner.layouts.master')
@section('title','Billing Address | update ')
@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Billing Address</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Billing Address</a></li>
              <li class="breadcrumb-item active">Update</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif
    <section class="content">
      <div class="row">

        <div class="col-md-12">
          <div class="card card-outline card-info">
           
            <!-- /.card-header -->
        <form action="{{route('billingAddress.update',$bill->id)}}" method="post">
              @csrf  
          <div class="card-body" oncontextmenu="return false;">
          <div class="row">
            <div class="col-6">
          <div class="form-group">
                <label for="" class="fs-3">Billing Address</label>
                <input type="text" class="fs-3 form-control p-3" name="fulloffice_address" value="{{$bill->fulloffice_address}}" placeholder="Billing Address">
          </div>
          </div>

          <div class="col-6">
          <div class="form-group">
                <label for="" class="fs-3">Post Code</label>
                <input type="text" class="fs-3 form-control p-3" value="{{$bill->post_code}}" name="post_code" placeholder="Post Code">
          </div>
          </div>


          <div class="col-6">
          <div class="form-group">
                <label for="" class="fs-3">City</label>
                <input type="text" class="fs-3 form-control p-3" name="city" value="{{$bill->city}}" placeholder="City">
          </div>
          </div>

          <div class="col-6">
          <div class="form-group">
                <label for="" class="fs-3">Country</label>
                <input type="text" class="fs-3 form-control p-3" name="country" value="{{$bill->country}}" placeholder="Country">
          </div>
          </div>
            
            <div class="form-group">
              <button type="submit" class="btn btn-warning mt-5">Save</button>
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