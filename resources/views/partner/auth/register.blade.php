@extends('client.layouts.master')
@section('title','Texi Booking | SignIn')
@section('content')

<main class="container signin">
    <div class="card-header">
       <h2 class="text-center">Partner Registration</h2> 
    </div>
   <div class="card-body">


   <form action="{{route('partner.save')}}" method="POST">
  @csrf
  <div class="row">

  <div class="mb-3 col-6">
    <input type="text" class="fs-3 form-control p-3" id="exampleInputcomp_name" aria-describedby="comp_nameHelp" name="comp_name" placeholder="Company Name">
  </div>

  <div class="mb-3 col-6">
    <input type="text" class="fs-3 form-control p-3" id="exampleInputtrade_name" aria-describedby="trade_nameHelp" name="trade_name" placeholder="Trade Name">
  </div>

  <!-- <div class="mb-3 col-6">
    <input type="password" class="fs-3 form-control togglePassword p-3" id="exampleInputPassword1" name="password" placeholder="Password">
  </div> -->


  <div class="mb-3 col-6">
    <input type="tel" class="fs-3 form-control p-3" id="exampleInputcomp_phone" aria-describedby="comp_phoneHelp" name="comp_phone" placeholder="Company Phone Number">
  </div>

  <div class="mb-3 col-6">
  <input type="tel" class="fs-3 form-control p-3" id="exampleInputcomp_mobile" aria-describedby="comp_mobileHelp" name="comp_mobile" placeholder="Company Mobile Number">
  </div>


  <div class="mb-3 col-6">
    <input type="text" class="fs-3 form-control p-3" name="comp_url" id="exampleInputcomp_url" aria-describedby="comp_urlHelp" placeholder="Company Website Url">
  </div>


  <div class="mb-3 col-6">
    <input type="text" class="fs-3 form-control p-3" name="fulloffice_address" id="exampleInputfulloffice_address" placeholder="Company Office Adress With Postcode">
  </div>

  <div class="mb-3 col-4">
    <input type="text" class="fs-3 form-control p-3" name="post_code" id="exampleInputpost_code" placeholder="Postcode">
  </div>
  <div class="mb-3 col-4">
    <input type="text" class="fs-3 form-control p-3" name="city" id="exampleInputcity" placeholder="City">
  </div>
  <div class="mb-3 col-4">
    <input type="text" class="fs-3 form-control p-3" name="country" id="exampleInputcountry" placeholder="Country">
  </div>

  <div class="mb-3 col-6">
    <input type="text" class="fs-3 form-control p-3" id="exampleInputcontact_name" aria-describedby="contact_nameHelp" name="contact_name" placeholder="Contact Person Name">
    
  </div>
  <div class="mb-3 col-6">
    <input type="tel" class="fs-3 form-control p-3" id="exampleInputcontact_phone" name="contact_phone" placeholder="Contact Person Number">
  </div>

  <div class="mb-3 col-6">
    <input type="email" class="fs-3 form-control p-3" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" placeholder="Email for Login">
    
  </div>
  <div class="mb-3 col-6">
    <input type="password" class="fs-3 form-control togglePassword p-3" id="exampleInputPassword1" name="password" placeholder="Password">
  </div>

  <div class="mb-3 col-6">
    <lable class="text-danger fs-3">Kindly Enter the email address for regular booking information and accessible to all operators in your company.</lable>
    
  </div>
  <div class="mb-3 col-6">
    <input type="email" class="fs-3 form-control p-3" id="exampleInputbooking_email" name="booking_email" placeholder="Email for Booking Information">
  </div>

  <div class="fs-3 mb-3">
 <lable class="fs-3">Operator's Licence</lable>
  </div>

  <div class="mb-3 col-4">
 <input type="text" class="fs-3 form-control p-3" id="exampleInputli_authority" name="li_authority" placeholder="Licensing Authority">
  </div>

  <div class="mb-3 col-4">
  <input type="text" class="fs-3 form-control p-3" id="exampleInputli_number" name="li_number" placeholder="License Number">
  </div>

  <div class="mb-3 col-4">
  <input type="date" class="fs-3 form-control p-3" id="exampleInputli_expiry_date" name="li_expiry_date" placeholder="License Expiry Date">
  </div>


<div class="fs-3 mb-3">
  <lable class="fs-3">Employers Liability Insurance</lable>
</div>

  <div class="mb-3 col-6">
  <input type="text" class="fs-3 form-control p-3" id="exampleInputins_number" name="ins_number" placeholder="Insurance Number">
    
  </div>
  <div class="mb-3 col-6">
  <input type="date" class="fs-3 form-control p-3" id="exampleInputins_expiry_date" name="ins_expiry_date" placeholder="Insurance Expiry Date">
  </div>



  <div class="form-check d-flex mb-3">
        <input class="form-check-input fs-3 me-2" type="checkbox" value="" id="registerCheck" checked
          aria-describedby="registerCheckHelpText" />
        <label class="form-check-label fs-3" for="registerCheck">
        I agree with the Terms and Conditions <a href="#" class="fs-3 p-3 text-warning">terms & conditions</a> 
        </label>
      </div>








  </div>
  <a href="{{'login'}}" class="fs-3 btn btn-warning text-white">Back</a>
  <button type="submit" class="fs-3 btn btn-warning text-white">Submit</button>

  
</form>
</div>

</main>

@endsection
