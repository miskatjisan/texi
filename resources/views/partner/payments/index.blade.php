@extends('partner.layouts.master')
@section('title','Pay to Card | History')
@section('content')      
      
       <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Pay to Card History</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Pay to Card</a></li>
              <li class="breadcrumb-item active">History</li>
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
                          <th>Amount</th>
                          <th>Account Number</th>
                          <th>Date time</th>
                          <th>CVC</th>
                          <th>Description</th>
                          <th>Action</th>
                        </tr>
                      </thead>


                      <tbody>
                      <?php $i=1; ?>
                        @foreach($payments as $payment)
                        <tr>
                        <td>{{$i++}}</td>
                          <td>{{$payment->amount}}</td>
                          <td>{{$payment->card_number}}</td>
                          <td>{{$payment->date}}</td>
                          <td>{{$payment->cvc}}</td>
                          <td>{{$payment->description}}</td>
                          <td>
                            <form action="{{ route('payments.destroy',$payment->id) }}" method="Post">
                                <a class="btn btn-info"  href="{{ route('payments.edit',$payment->id) }}">Edit</a>
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