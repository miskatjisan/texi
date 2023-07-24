@extends('partner.layouts.master')
@section('title','Driver | Information')
@section('content')  

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Diver Information</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Diver Information</a></li>
              <li class="breadcrumb-item active">Add</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>



    <section class="content">
    <div class="row">

    <div class="col-md-12">
          <div class="card card-outline card-info">
           
            <!-- /.card-header -->
        <form action="{{route('drivers.store')}}" method="post">
              @csrf
        <div class="card-body" oncontextmenu="return false;">
        <div class="row">

        <div class="col-6">
          <div class="form-group">
                <label for="" class="fs-3">Driver Name</label>
                <input type="text" class="fs-3 form-control p-3" name="name"  placeholder="Driver Name">
          </div>
          </div>

          <div class="col-6">
          <div class="form-group">
                <label for="" class="fs-3">Driver License No.</label>
                <input type="text" class="fs-3 form-control p-3" name="license_no"  placeholder="Driver License No.">
          </div>
          </div>

          <div class="col-6">
          <div class="form-group">
                <label for="" class="fs-3">Vehicle Make</label>
                <input type="text" class="fs-3 form-control p-3" name="vehicle_make"  placeholder="Vehicle Make">
          </div>
          </div>

          <div class="col-6">
          <div class="form-group">
                <label for="" class="fs-3">Vehicle Registration No</label>
                <input type="text" class="fs-3 form-control p-3" name="reg_no"  placeholder="Vehicle Registration No">
          </div>
          </div>

          <div class="col-6">
          <div class="form-group">
                <label for="" class="fs-3">Vehicle Model</label>
                <input type="text" class="fs-3 form-control p-3" name="vehicle_model"  placeholder="Vehicle Model">
          </div>
          </div>
          <div class="col-6">
          <div class="form-group">
                <label for="" class="fs-3">Vehicle PCO Number</label>
                <input type="text" class="fs-3 form-control p-3" name="pco_num"  placeholder="Vehicle PCO Number">
          </div>
          </div>


        <div class="col-6">
          <div class="form-group">
                <label for="" class="fs-3">Select Vehicle Class</label>
                <select name="vehicle_class" id="" class="form-control fs-3">
                  <option value="Standard">Standard</option>
                  <option value="Executive">Executive</option>
                  <option value="Luxury">Luxury</option>
                  <option value="Chauffeur">Chauffeur</option>
                </select>
                
          </div>
          </div>

          <div class="col-6">
          <div class="form-group">
                <label for="" class="fs-3">Select Vehicle type</label>
                <select name="vehicle_type" id="" class="form-control fs-3">
                  <option value="Minicab">Minicab</option>
                  <option value="Minibus">Minibus</option>
                  <option value="MPV">MPV</option>
                  <option value="Coach">Coach</option>
                </select>
                
          </div>
          </div>

          
          </div>
            
            <div class="form-group">
              <button type="submit" class="btn btn-warning ">Add Diver</button>
            </div>
            
            </div>
          </div>
        </form>
        
          </div>
</div>



    <div class="col-12">
      <div class="card">
                     
                    @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif
        <div class="card-body table-responsive p-0"> 
                    <table id="datatable" class="table table-hover text-nowrap">
                      <thead>
                        <tr>
                        <th>SL</th>
                        <th> Driver Name</th>
                        <th> Driver License No.</th>
                          <th>Vehicle Make</th>
                          <th>Vehicle Registration No</th>
                          <th>Vehicle Model</th>
                          <th> Vehicle PCO Number</th>
                          <th>Select Vehicle Class</th>
                          <th>Select Vehicle type</th>
                          <th>Action</th>
                        </tr>
                      </thead>


                      <tbody>
                      <?php $i=1; ?>
                        @foreach($drivers as $driver)
                        <tr>
                        <td>{{$i++}}</td>
                          <td>{{$driver->name}}</td>
                          <td>{{$driver->license_no}}</td>
                          <td>{{$driver->vehicle_make}}</td>
                          <td>{{$driver->reg_no}}</td>
                          <td>{{$driver->vehicle_model}}</td>
                          <td>{{$driver->pco_num}}</td>
                          <td>{{$driver->vehicle_class}}</td>
                          <td>{{$driver->vehicle_type}}</td>
                          <td>
                            <form action="{{ route('drivers.delete',$driver->id) }}" method="Post">
                                <a class="btn btn-info"  href="{{ route('drivers.edit',$driver->id) }}">Edit</a>
                                @csrf
                                <button type="submit" class="btn btn-danger" >Delete</button>
                            </form>
                        </td>
                        </tr>
                      @endforeach
                      </tbody>
                    </table>
</div>
</div>
</div>
</div>
</section>

</div>

@endsection