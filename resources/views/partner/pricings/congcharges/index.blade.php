@extends('partner.layouts.master')
@section('title','Congestion  | Charges')
@section('content')  

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Congestion Charges</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Congestion Charges</a></li>
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
        <form action="{{route('congcharges.store')}}" method="post">
              @csrf
        <div class="card-body" oncontextmenu="return false;">
        <div class="row">
        <div class="col-6">
          <div class="form-group">
                <label for="" class="fs-3">Congestion Charge</label>
                <p class="fs-3">Enter the congestion charge value to be considered while computing the fares.</p>
                <input type="number" class="fs-3 form-control p-3" name="congestion_charge"  placeholder="Congestion Charge">
          </div>
          </div>

          <div class="col-6">
          <div class="form-group">
            <label for="" class="fs-3">Area Postcode</label>
            <p class="fs-3">The postcodes areas in which you want us to consider the above congestion charges as regulated by the Government of London.</p>
            <select name="area_postcode" class="form-control fs-3" id="">
            <option>None (Select one) </option>
              @foreach($areacovers as $areacover)
              
              <option value="{{$areacover->by_outcode}}">{{$areacover->by_outcode}}</option>
              @endforeach
            </select>
          </div>
          </div>
          
          </div>
            
            <div class="form-group">
              <button type="submit" class="btn btn-warning ">Add Congestion Charge</button>
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
                          <th>Congestion Charge</th>
                          <th>Area Postcode</th>
                          <th>Action</th>
                        </tr>
                      </thead>


                      <tbody>
                      <?php $i=1; ?>
                        @foreach($congcharges as $congcharge)
                        <tr>
                        <td>{{$i++}}</td>
                          <td>{{$congcharge->congestion_charge}}</td>
                          <td>{{$congcharge->area_postcode}}</td>
                          <td>
                            <form action="{{ route('congcharges.delete',$congcharge->id) }}" method="Post">
                                <a class="btn btn-info"  href="{{ route('congcharges.edit',$congcharge->id) }}">Edit</a>
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