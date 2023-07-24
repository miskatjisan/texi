@extends('client.layouts.master')
@section('title','Texi Booking | Home')
@section('content')
<!-- Section-2 starts here -->

<section class="section-6">
<div class="section-6-heading">
<h2>Searching Result</h2>
</div>


<!-- card -->



@foreach($vehicles as $vehicle)

    <div class="card" style="width: 18rem;">
  <img src="..." class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">$ {{$vehicle->fare}}</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item"><strong>{{$vehicle->area}}</strong></li>
    <li class="list-group-item"><strong>Class : </strong> {{$vehicle->class}}</li>
    <li class="list-group-item"><strong>Type : </strong> {{$vehicle->type}} </li>
    <li class="list-group-item"><strong> <strong>No. of Vehicle : </strong> {{$vehicle->passenger}} </li>
    <li class="list-group-item"><strong>No. of Cabin : </strong> {{$vehicle->cabin}} </li>
  </ul>
  <div class="card-body">
    <a href="{{route('make.order',$vehicle->id)}}" class="btn btn-primary form-control">Book now</a>
  </div>
</div>



    @endforeach

    

<!-- card -->



</section>

<!-- Section-2 ends here -->






@endsection












