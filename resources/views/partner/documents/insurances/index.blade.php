@extends('partner.layouts.master')
@section('title',"Documents | Insurances")
@section('content')  

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Insurance</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Insurance</a></li>
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
        <form action="{{route('insurances.store')}}" method="post">
              @csrf
        <div class="card-body" oncontextmenu="return false;">
        <div class="row">

          <div class="col-6">
          <div class="form-group">
                <label for="" class="fs-3">Insurance Number</label>
                <input type="number" class="fs-3 form-control p-3" name="ins_number"  placeholder="Insurance Number">
          </div>
          </div>
          <div class="col-6">
          <div class="form-group">
                <label for="" class="fs-3">Insurance Expiry Date</label>
                <input type="date" class="fs-3 form-control p-3" name="ins_expiry_date"  placeholder="Insurance Expiry Date">
          </div>
          </div>

          </div>
            
            <div class="form-group">
              <button type="submit" class="btn btn-warning ">Add Insurance</button>
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
                          <th>Insurance Number</th>
                          <th>Insurance Expiry Date</th>
                          <th>Action</th>
                        </tr>
                      </thead>


                      <tbody>
                      <?php $i=1; ?>
                        @foreach($insurances as $insurance)
                        <tr>
                        <td>{{$i++}}</td>
                          <td>{{$insurance->ins_number}}</td>
                          <td>{{$insurance->ins_expiry_date}}</td>
                          <td>
                            <form action="{{ route('insurances.delete',$insurance->id) }}" method="Post">
                                <a class="btn btn-info"  href="{{ route('insurances.edit',$insurance->id) }}">Edit</a>
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