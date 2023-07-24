<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Airport Local Taxis</title>
    {{-- <link rel="icon" href="{{url('frontend/images/favicon.png')}}" type="image/png"> --}}
    <link rel="apple-touch-icon" sizes="180x180" href="{{url('frontend/images/apple-touch-icon.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{url('frontend/images/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{url('frontend/images/favicon-16x16.png')}}">
    <link rel="mask-icon" href="{{url('frontend/images/safari-pinned-tab.svg')}}" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

    <script src="{{url('https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js')}}"></script>

    <!-- Animate-On-Scrool Library Import -->
    <link rel="stylesheet" href="{{url('https://unpkg.com/aos@next/dist/aos.css')}}">

    <!-- External [ Header / Footer ] css File Import -->
    <link rel="stylesheet" href="{{url('frontend/css/head_foot.css')}}">

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="{{url('http://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css')}}">

</head>
<body>

    <!-- header section starts  -->

    <header class="header" data-aos="fade-down" data-aos-delay="600">

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

 <!-- header section ends -->
