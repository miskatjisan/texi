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

<form action="{{route('bookserch')}}"  method="GET" role="search">
            <h3>find your ride</h3>

            <p>pickup location</p>
            <input type="number" name="term1" required maxlength="50" placeholder="Type initial 3 letters of post code" class="box form-control">
           
            <!-- <p>pickup time</p>
            <input type="date" name="date" class="box" placeholder="no. of people" required> -->
 
            <p>Select Vehicle type</p>
            <select class="box" name="term1">
            <option value="Minicab">Minicab</option>
                  <option value="Minibus">Minibus</option>
                  <option value="MPV">MPV</option>
                  <option value="Coach">Coach</option>
            </select>
 

            <p>Select Vehicle Class</p>
            <select class="box" name="term1">
            <option value="Standard">Standard</option>
                  <option value="Executive">Executive</option>
                  <option value="Luxury">Luxury</option>
                  <option value="Chauffeur">Chauffeur</option>
            </select>

           <p>no. of people</p>
            <input type="number" name="term1" min="1" max="10" maxlength="2" placeholder="number of guests" required class="box">

            <p>No. of Cabin</p>
            <input type="number" name="term1" min="1" max="10" maxlength="2" placeholder="No. of Cabin" required class="box">

            <input type="submit" value="search ride" name="search" class="btn">

        
            </form>
      </section>

   </div>

</div>


<script src="{{url('https://unpkg.com/aos@next/dist/aos.js')}}" defer></script>

<!-- custom js file link  -->
<script src="{{url('frontend/js/script.js')}}" defer></script>


</body>
</html>
