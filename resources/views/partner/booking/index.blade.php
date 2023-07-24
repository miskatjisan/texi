@extends('partner.layouts.master')
@section('title','Booking | All')
@section('content')      
      
       <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Booking</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Booking</a></li>
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
                          <th>Payment Type</th>
                          <th>Price</th>
                           <th>Card Number</th>
                           <th>MM/YY CVC</th>
                           <th>From</th>
                           <th>To</th>
                           <th>Date</th>
                           <th>Time</th>
                           <th>Flight Number</th>
                           <th>Area</th>
                           <th>Class</th>
                           <th>Type</th>
                           <th>Passanger</th>
                           <th>Cabin</th>
                           <th>Check in</th>
                           <th>Client Name</th>
                           <th>Client Email</th>
                           <th>Client Phone</th>
                           <th>Client Country Code</th>
                          <th>Action</th>
                        </tr>
                      </thead>


                      <tbody>
                      <?php $i=1; ?>
                        @foreach($books as $book)
                        <tr>
                        <td>{{$i++}}</td>
                          <td>{{ $book->pay_type}}</td>
                          <td>{{$book->price}}</td>
                          <td>{{$book->card_num}}</td>
                          <td>{{$book->cvc_mm_yy}}</td>
                          <td>{{$book->from}}</td>
                          <td>{{$book->to}}</td>
                          <td>{{$book->date}}</td>
                          <td>{{$book->time}}</td>
                          <td>{{$book->flight_num}}</td>
                          <td>{{$book->area}}</td>
                          <td>{{$book->class}}</td>
                          <td>{{$book->type}}</td>
                          <td>{{$book->passenger}}</td>
                          <td>{{$book->cabin}}</td>
                          <td>{{$book->checkin}}</td>
                          <td>{{$book->client_name}}</td>
                          <td>{{$book->client_email}}</td>
                          <td>{{$book->client_phone}}</td>
                          <td>{{$book->client_countrycode}}</td>

                          <td>
                            <form action="{{ route('books.destroy',$book->id) }}" method="Post">
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