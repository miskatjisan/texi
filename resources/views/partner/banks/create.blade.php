@extends('partner.layouts.master')
@section('title','Bank Account | Add')
@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Add Bank Account</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Bank Account</a></li>
              <li class="breadcrumb-item active">Add</li>
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
        <form action="{{route('banks.store')}}" method="post">
              @csrf
        <div class="card-body" oncontextmenu="return false;">
        <div class="row">
            <div class="col-6">
          <div class="form-group">
                <label for="" class="fs-3">Bank Name</label>
                <input type="text" class="fs-3 form-control p-3" name="bank_name" placeholder="Bank Name">
          </div>
          </div>

          <div class="col-6">
          <div class="form-group">
                <label for="" class="fs-3">Account Name</label>
                <input type="text" class="fs-3 form-control p-3" name="acc_name" placeholder="Account Name">
          </div>
          </div>


          <div class="col-6">
          <div class="form-group">
                <label for="" class="fs-3">Short Code</label>
                <input type="text" class="fs-3 form-control p-3" name="short_code" placeholder="Short Code">
          </div>
          </div>

          <div class="col-6">
          <div class="form-group">
                <label for="" class="fs-3">Account Number</label>
                <input type="text" class="fs-3 form-control p-3" name="acc_num" placeholder="Account Number">
          </div>
          </div>
            
            <div class="form-group">
              <button type="submit" class="btn btn-warning ">Add Bank</button>
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