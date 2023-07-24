@extends('partner.layouts.master')
@section('title','By Milage Pricing | Edit')
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
              <li class="breadcrumb-item"><a href="#">By Milage Pricing </a></li>
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
        <form action="{{route('bymilages.update',$bymilage->id)}}" method="post">
              @csrf 
              <div class="card-body" oncontextmenu="return false;">
        <div class="row">
        <div class="col-4">
          <div class="form-group">
                <label for="" class="fs-3">From</label>
                <input type="number" class="fs-3 form-control p-3" name="m_from" value="{{$bymilage->m_from}}"  placeholder="From">
          </div>
          </div>

          <div class="col-4">
          <div class="form-group">
                <label for="" class="fs-3">Miles</label>
                <input type="number" class="fs-3 form-control p-3" name="m_miles" value="{{$bymilage->m_miles}}"  placeholder="Miles">
          </div>
          </div>
          <div class="col-4">
          <div class="form-group">
                <label for="" class="fs-3">Fare</label>
                <input type="number" class="fs-3 form-control p-3" name="m_fare" value="{{$bymilage->m_fare}}"  placeholder="Fare '$/mi'">
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