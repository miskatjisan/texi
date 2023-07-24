@extends('partner.layouts.master')
@section('title','By Milage | Pricing')
@section('content')  

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>By Milage Pricing</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">By Milage</a></li>
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
        <form action="{{route('bymilages.store')}}" method="post">
              @csrf
        <div class="card-body" oncontextmenu="return false;">
        <div class="row">
        <div class="col-4">
          <div class="form-group">
                <label for="" class="fs-3">From</label>
                <input type="number" class="fs-3 form-control p-3" name="m_from"  placeholder="From">
          </div>
          </div>

          <div class="col-4">
          <div class="form-group">
                <label for="" class="fs-3">Miles</label>
                <input type="number" class="fs-3 form-control p-3" name="m_miles"  placeholder="Miles">
          </div>
          </div>
          <div class="col-4">
          <div class="form-group">
                <label for="" class="fs-3">Fare</label>
                <input type="number" class="fs-3 form-control p-3" name="m_fare"  placeholder="Fare '$/mi'">
          </div>
          </div>

          </div>
            
            <div class="form-group">
              <button type="submit" class="btn btn-warning ">Add Milage Pricing</button>
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
                          <th>From</th>
                          <th>Miles</th>
                          <th>Fare</th>
                          <th>Action</th>
                        </tr>
                      </thead>


                      <tbody>
                      <?php $i=1; ?>
                        @foreach($bymilages as $bymilage)
                        <tr>
                        <td>{{$i++}}</td>
                          <td>{{$bymilage->m_from}}</td>
                          <td>{{$bymilage->m_miles}}</td>
                          <td>{{$bymilage->m_fare}}</td>
                          <td>
                            <form action="{{ route('bymilages.delete',$bymilage->id) }}" method="Post">
                                <a class="btn btn-info"  href="{{ route('bymilages.edit',$bymilage->id) }}">Edit</a>
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