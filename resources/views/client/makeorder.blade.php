<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Book Now</title>
   <link rel="icon" href="{{url('frontend/images/favicon.png')}}" type="image/png">

   <script src="{{url('https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js')}}"></script>


   

   <!-- Animate-On-Scrool Library Import -->
   <link rel="stylesheet" href="{{url('https://unpkg.com/aos@next/dist/aos.css')}}">

   <!-- External css File Import -->
   <link rel="stylesheet" href="{{url('frontend/css/booking.css')}}">

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="{{url('http://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css')}}">


</head>
<body>

<div class="loader">
   <div></div>
</div>


<div class="content">

   <header class="header" data-aos="fade-down" data-aos-delay="600">

      <section class="flex">
      
         <nav class="navbar">
            <a href="{{url('/')}}">back</a>
         </nav>

         <div id="menu-btn" class="fas fa-bars"></div>

      </section>

   </header>


   <div class="container home" data-aos="zoom-out">

      <section class="flex" data-aos="zoom-in" data-aos-delay="600">

<form action="{{route('order.store')}}"  method="post" >
   @csrf
            <h3>Payment Now</h3>

<select name="pay_type"class="box" id="">
   <option value="Card">Card</option>
</select>
            <input type="text" name="price" value="{{$vehicle->fare}}" required readonly class="box">
            <input type="text" name="card_num" required placeholder="Enter Card Number" class="box">
            <input type="text" name="cvc_mm_yy" required placeholder="MM/YY CVC" class="box">
            <p>Journey Details</p>
            <input type="text" name="from" required placeholder="From) Enter You Travel From" class="box form-control">
            <input type="text" name="to" required placeholder="To) Enter You Travel To" class="box form-control">
            <input type="date" name="date" required  class="box form-control">
            <input type="time" name="time" required  class="box form-control">
            <input type="number" name="flight_num" min="1" max="10" maxlength="2" required placeholder="Enter Flight Number" class="box form-control">
           
           
           <p>Vehicle Details</p>
            <input type="text" name="area" value="{{$vehicle->area}}" required readonly class="box">
            <input type="text" name="class" value="{{$vehicle->class}}" required readonly class="box">
            <input type="text" name="type" value="{{$vehicle->type}}" required readonly class="box">
            <input type="text" name="passenger" value="{{$vehicle->passenger}}" required readonly class="box">
            <input type="text" name="cabin" value="{{$vehicle->cabin}}" required readonly class="box">
            <input type="text" name="checkin" value="{{$vehicle->checkin}}" required readonly class="box">

            <p>Customer Details</p>
            <input type="text" name="client_name"  value="{{$data->fname}} {{$data->lname}}" required class="box">
            <input type="text" name="client_email"  value="{{$data->email}}" required class="box">
             <input type="text" name="client_phone"  value="{{$data->phone}}" required class="box">
               <input type="text" name="client_countrycode"  value="{{$data->countrycode}}" required class="box">

            <input type="submit" value="Book Now" class="btn">

        
            </form>
      </section>

   </div>

</div>


<script src="{{url('https://unpkg.com/aos@next/dist/aos.js')}}" defer></script>

<!-- custom js file link  -->
<script src="{{url('frontend/js/script.js')}}" defer></script>


</body>
</html>
