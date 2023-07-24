@extends('partner.layouts.master')
@section('title','Bank Account | All')
@section('content')      
      
       <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>All Bank Accounts</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Bank Accounts</a></li>
              <li class="breadcrumb-item active">All</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

  
    <section class="content">
    <div class="row">
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
                          <th>Bank Name</th>
                          <th>Account Name</th>
                          <th>Short Code</th>
                          <th>Account Number</th>
                          <th>Action</th>
                        </tr>
                      </thead>


                      <tbody>
                      <?php $i=1; ?>
                        @foreach($banks as $bank)
                        <tr>
                        <td>{{$i++}}</td>
                          <td>{{$bank->bank_name}}</td>
                          <td>{{$bank->acc_name}}</td>
                          <td>{{$bank->short_code}}</td>
                          <td>{{$bank->acc_num }}</td>
                          <td>
                            <form action="{{ route('banks.destroy',$bank->id) }}" method="Post">
                                <a class="btn btn-info"  href="{{ route('banks.edit',$bank->id) }}">Edit</a>
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