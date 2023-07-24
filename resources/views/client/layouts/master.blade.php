<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Airport Local Taxis</title>

</head>
<link rel="stylesheet" href="{{url('frontend/css/head_foot.css')}}">
<!-- Bootstrap 5 Cdn -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Animate-On-Scrool Library Import -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css"/> 

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">

    <!-- External css File Import -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}">

</head>
<body>

    <!-- header section starts  -->

        <header class="header">

            <section class="flex">

            <a href="{{url('/')}}" class="logo">
              <img src="{{url('frontend/images/logo-main.png')}}" alt="Site Logo">
           </a>

               <nav class="navbar">
                @auth
                <a href="{{url('/')}}">Home</a>
                    <a href="{{url('/about')}}">About</a>
                    <a href="{{url('/services')}}">Services</a>
                    <a href="{{url('/areacovered')}}">Area Covered</a>
                    <a href="{{url('/partners')}}">Our Pertners</a>
                    <a href="{{'partner/login'}}">Partner Login</a>
                    <a href="">{{Auth::user()->fname}}</a>
                    <a href="{{route('logout')}}">Logout</a> 
               
            @endauth

            @guest
            <a href="{{url('/')}}">Home</a>
                    <a href="{{url('/about')}}">About</a>
                    <a href="{{url('/services')}}">Services</a>
                    <a href="{{url('/areacovered')}}">Area Covered</a>
                    <a href="{{url('/partners')}}">Our Pertners</a>
                    <a href="{{'partner/login'}}">Partner Login</a>
                    <a href="{{route('login')}}">Client Login</a>
            @endguest
                   
                </nav>

                <div id="menu-btn" class="fas fa-bars"></div>
 
            </section>
 
         </header>
<!-- Main section starts here -->



@yield('content')

@include('client.layouts.footer')



<script src="https://unpkg.com/aos@next/dist/aos.js"></script>

<!-- bootstrap 5 cdn script -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script>

<!-- Custom js File Link -->
<script defer src="{{asset('js/script.js')}}"></script>


</body>
</html>