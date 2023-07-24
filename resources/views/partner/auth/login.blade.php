@extends('client.layouts.master')
@section('title','Texi Booking | SignIn')
@section('content')

<main class="container signin">
    <div class="card-header">
       <h2 class="text-center">Partner Login</h2> 
    </div>
   <div class="card-body">


<form action="{{route('partner.check')}}" method="POST">
  @csrf
  <div class="mb-3">
    <input type="email" class="fs-3 form-control p-3" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email">
    
  </div>
  <div class="mb-3">
    <input type="password" class="fs-3 form-control togglePassword p-3" name="password" id="exampleInputPassword1" placeholder="Password">
  </div>
  <div class="form-check"> 
        <input class="form-check-input fs-3" type="checkbox" value="" id="form2Example31" checked />
        <label class="form-check-label fs-3" for="form2Example31"> Remember me </label>
      </div>

<div class="form-check"> 
  <button type="submit" class="fs-3 btn btn-warning form-control text-white">Login</button>
  </div>
  <a href="{{'register'}}" class="fs-3">SignUp now</a>

</form>
</div>

</main>

@endsection
