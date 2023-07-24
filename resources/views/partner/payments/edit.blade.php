@extends('partner.layouts.master')
@section('title','Pay to Card | Edit')
@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit Pay to Card </h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Pay to Card </a></li>
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
        <form action="{{route('payments.update',$payment->id)}}" method="post">
              @csrf  
              @method('PUT')
          <div class="card-body" oncontextmenu="return false;">
          <div class="row">
            <div class="col-3">
          <div class="form-group">
                <label for="" class="fs-3">Amount</label>
                <input type="number" class="fs-3 form-control p-3" name="amount" value="{{$payment->amount}}" placeholder="Amount">
          </div>
          </div>

          <div class="col-4">
          <div class="form-group">
                <label for="" class="fs-3">Card Number</label>
                <input type="text" class="fs-3 form-control p-3" name="card_number" value="{{$payment->card_number}}" placeholder="Card Number">
          </div>
          </div>
          <div class="col-3">
          <div class="form-group">
                <label for="" class="fs-3">Date Time</label>
                <input type="date" class="fs-3 form-control p-3" name="date" value="{{$payment->date}}" placeholder="Date Time">
          </div>
          </div>
          <div class="col-2">
          <div class="form-group">
                <label for="" class="fs-3">CVC</label>
                <input type="text" class="fs-3 form-control p-3" name="cvc" value="{{$payment->cvc}}" placeholder="CVC">
          </div>
          </div>

          <div class="col-12">
          <div class="form-group">
                <label for="" class="fs-3">Description</label>
                <input type="text" class="fs-3 form-control p-3" name="description" value="{{$payment->description}}" placeholder="Description">
          </div>
          </div>




          </div>
            
            <div class="form-group">
              <button type="submit" class="btn btn-warning ">Update Pay to Card</button>
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