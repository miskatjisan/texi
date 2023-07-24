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
    <form >

            <h3>Congratulation ! Your Payment Successfully Done! Thank you. For More Book Please Goto The Find your Ride</h3>

            <a href="{{route('bookfind')}}" class="btn">Find your Ride</a>

</form>   
      </section>

   </div>

</div>


<script src="{{url('https://unpkg.com/aos@next/dist/aos.js')}}" defer></script>

<!-- custom js file link  -->
<script src="{{url('frontend/js/script.js')}}" defer></script>


</body>
</html>
