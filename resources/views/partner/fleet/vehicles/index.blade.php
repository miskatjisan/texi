@extends('partner.layouts.master')
@section('title','Vehicle | Price')
@section('content')  

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Vehicle Add Price</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Vehicle Price</a></li>
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
        <form action="{{route('vehicles.store')}}" method="post">
              @csrf
        <div class="card-body" oncontextmenu="return false;">
        <div class="row">

        <div class="col-6">
          <div class="form-group">
                <label for="" class="fs-3">Vehicle Name</label>
                <input type="text" class="fs-3 form-control p-3" name="name"  placeholder="Vehicle Name">
          </div>
          </div>


          <div class="col-6">
          <div class="form-group">
                <label for="" class="fs-3">Select Area</label>
                <select name="area" id="" class="form-control fs-3">
                  @foreach($areacovarages as $areacovarage)
                  <option value="{{$areacovarage->by_outcode}},{{$areacovarage->by_mileage}}">{{$areacovarage->by_outcode}},{{$areacovarage->by_mileage}}</option>
              @endforeach
                </select>
                
          </div>
          </div>


          <div class="col-6">
          <div class="form-group">
                <label for="" class="fs-3">Select Vehicle type</label>
                <select name="type" id="" class="form-control fs-3">
                  <option value="Minicab">Minicab</option>
                  <option value="Minibus">Minibus</option>
                  <option value="MPV">MPV</option>
                  <option value="Coach">Coach</option>
                </select>
                
          </div>
          </div>

          <div class="col-6">
          <div class="form-group">
                <label for="" class="fs-3">Select Vehicle Class</label>
                <select name="class" id="" class="form-control fs-3">
                  <option value="Standard">Standard</option>
                  <option value="Executive">Executive</option>
                  <option value="Luxury">Luxury</option>
                  <option value="Chauffeur">Chauffeur</option>
                </select>
                
          </div>
          </div>

          

          <div class="col-6">
          <div class="form-group">
                <label for="" class="fs-3">No. of Passanger</label>
                <input type="number" class="fs-3 form-control p-3" name="passenger"  placeholder="No. of Passanger">
          </div>
          </div>

          
          <div class="col-6">
          <div class="form-group">
                <label for="" class="fs-3">No. of Vehicle</label>
                <input type="number" class="fs-3 form-control p-3" name="no_vehicle"  placeholder="No. of Vehicle">
          </div>
          </div>


          <div class="col-6">
          <div class="form-group">
                <label for="" class="fs-3">No. of CheckIn</label>
                <input type="number" class="fs-3 form-control p-3" name="checkin"  placeholder="No. of CheckIn">
          </div>
          </div>

          <div class="col-6">
          <div class="form-group">
                <label for="" class="fs-3">No. of Cabin</label>
                <input type="number" class="fs-3 form-control p-3" name="cabin"  placeholder="No. of Cabin">
          </div>
          </div>

          <div class="col-6">
          <div class="form-group">
                <label for="" class="fs-3">Fare</label>
                <input type="number" class="fs-3 form-control p-3" name="fare"  placeholder="Parcentage w.r.t Standard Price">
          </div>
          </div>
          
          </div>
            
            <div class="form-group">
              <button type="submit" class="btn btn-warning ">Add Vehicle</button>
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
                        <th> Vehicle Name</th>
                        <th> Vehicle Area</th>
                        <th> Vehicle Type</th>
                          <th>Vehicle Class</th>
                          <th>Passenger</th>
                          <th>No Of Vehicles</th>
                          <th> CheckIn</th>
                          <th>CabIn</th>
                          <th>Fare</th>
                          <th>Action</th>
                        </tr>
                      </thead>


                      <tbody>
                      <?php $i=1; ?>
                        @foreach($vehicles as $vehicle)
                        <tr>
                        <td>{{$i++}}</td>
                          <td>{{$vehicle->name}}</td>
                          <td>{{$vehicle->area}}</td>
                          <td>{{$vehicle->type}}</td>
                          <td>{{$vehicle->class}}</td>
                          <td>{{$vehicle->passenger}}</td>
                          <td>{{$vehicle->no_vehicle}}</td>
                          <td>{{$vehicle->checkin}}</td>
                          <td>{{$vehicle->cabin}}</td>
                          <td>{{$vehicle->fare}}</td>
                          <td>
                            <form action="{{ route('vehicles.delete',$vehicle->id) }}" method="Post">
                                <a class="btn btn-info"  href="{{ route('vehicles.edit',$vehicle->id) }}">Edit</a>
                                @csrf
                                @method('DELETE')
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