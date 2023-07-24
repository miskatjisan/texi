@extends('client.layouts.master')
@section('title','Texi Booking | SignIn')
@section('content')

<main class="container signin">
    <div class="card-header">
       <h2 class="text-center">Sign In</h2> 
    </div>
   <div class="card-body">


<form action="{{route('login.post')}}" method="POST">
  @csrf
  <div class="mb-3">
    <input type="email" class="fs-3 form-control p-3" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" placeholder="Email">
    
  </div>
  <div class="mb-3">
    <input type="password" class="fs-3 form-control togglePassword p-3" id="exampleInputPassword1" name="password" placeholder="Password">
  </div>
  <div class="form-check"> 
        <input class="form-check-input fs-3" type="checkbox" value="" id="form2Example31" checked />
        <label class="form-check-label fs-3" for="form2Example31"> Remember me </label>
      </div>
 
  <button type="submit" class="fs-3 btn btn-warning text-white">SignIn</button>
  <a href="{{route('register')}}" class="fs-3 btn btn-warning text-white">SignUp</a>
  <a href="{{'/'}}" class="fs-3 btn btn-warning text-white">Continue as a gust</a>

</form>
</div>

</main>

@endsection
