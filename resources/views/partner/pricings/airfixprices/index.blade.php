@extends('partner.layouts.master')
@section('title','Airport Fixed | Pricing')
@section('content')  

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Airport Fixed Pricing</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Airport Fixed</a></li>
              <li class="breadcrumb-item active">Pricing</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>



    <section class="content">
    <div class="row">

    <div class="col-md-12">
          <div class="card card-outline card-info">
          <h5>Kindly Note:The prices set here is the 'Standard Price' which is used to calculate various vehicle surcharges.</h5>
           
            <!-- /.card-header -->
        <form action="{{route('airfixprices.store')}}" method="post">
              @csrf
        <div class="card-body" oncontextmenu="return false;">
        <div class="row">
        <div class="col-6">
          <div class="form-group">
                <label for="" class="fs-3">Journey Type</label>
                <select name="journey_type" id="" class="form-control fs-3">
                  <option>Select your journey type</option>
                  <option value="Airport to Plot">Airport to Plot</option>
                  <option value="Plot to Airport">Plot to Airport</option>
                </select>
                
          </div>
          </div>

          <div class="col-6">
          <div class="form-group">
                <label for="" class="fs-3">Pickup/Dropoff Charges</label>
                <input type="number" class="fs-3 form-control p-3" name="pick_drop_charge"  placeholder="Pickup/Dropoff Charges">
          </div>
          </div>



          <div class="col-4">
          <div class="form-group">
                <label for="" class="fs-3">From</label>
                <input type="text" class="fs-3 form-control p-3" name="a_from"  placeholder="From">
          </div>
          </div>

          <div class="col-4">
          <div class="form-group">
                <label for="" class="fs-3">To</label>
                <input type="text" class="fs-3 form-control p-3" name="a_to"  placeholder="To">
          </div>
          </div>
          <div class="col-4">
          <div class="form-group">
                <label for="" class="fs-3">Fare</label>
                <input type="number" class="fs-3 form-control p-3" name="a_fare"  placeholder="Fare '$/mi'">
          </div>
          </div>
          
          </div>
            
            <div class="form-group">
              <button type="submit" class="btn btn-warning ">Add Airport Fixed Pricing</button>
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
                        <th> Journey Type</th>
                        <th> Pickup/Dropoff Charges</th>
                          <th>From</th>
                          <th>Miles</th>
                          <th>Fare</th>
                          <th>Action</th>
                        </tr>
                      </thead>


                      <tbody>
                      <?php $i=1; ?>
                        @foreach($airfixprices as $airfixprice)
                        <tr>
                        <td>{{$i++}}</td>
                          <td>{{$airfixprice->journey_type}}</td>
                          <td>{{$airfixprice->pick_drop_charge}}</td>
                          <td>{{$airfixprice->a_from}}</td>
                          <td>{{$airfixprice->a_to}}</td>
                          <td>{{$airfixprice->a_fare}}</td>
                          <td>
                            <form action="{{ route('airfixprices.delete',$airfixprice->id) }}" method="Post">
                                <a class="btn btn-info"  href="{{ route('airfixprices.edit',$airfixprice->id) }}">Edit</a>
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