<head>
    <title>About us</title>
    <link rel="stylesheet" href="{{url('frontend/css/about.css')}}">
</head>

@extends('frontend.layouts.main')

@section('main-container')



<div class="loader">
    <div></div>
</div>

<!-- Main section starts here -->

<div class="content">

    <main class="section-main">

        <section class="mini-hero">
          <h1>About Us</h1>
        </section>

    </main>

</div>

<!-- Main section ends here -->


<!-- Section-1 starts here -->


    <section class="section-1">
        <div class="section-1-heading">
            <h2>About Our Airport Taxi Transportation Company</h2>
        </div>

        <div class="service-colums">
            <div class="service-col-1">
                <p>We take great pride in being a leading provider of safe and reliable transportation. Our company has been serving the community for many years, and we have a reputation for being one of the most trusted airport taxi service providers in London.</p>
                <p>Our mission is to provide our customers with exceptional cab service, from the moment they book their ride to the moment they reach their destination. We understand that travelling can be stressful, which is why we strive to make our customers' experience as smooth and comfortable as possible.</p>
            </div>

            <div class="service-col-2">
              <img src="{{url('frontend/images/about-sect-1.webp')}}" alt="About-Sect-1">
            </div>
        </div>
    </section>


<!-- Section-1 ends here -->


<!-- Section-2 starts here -->


<section class="section-2">
    <div class="section-2-heading">
        <h2>Who we are</h2>
    </div>

    <div class="service-colums">
        <div class="service-col-1">
            <p>Our company was established with the aim of providing reliable transportation to and from all major airports including Heathrow,Gatwick,Stansted and Luton. As a reliable taxi middleman, we have partnerships with various reliable taxi companies. Over the years, we have expanded our services to include other transportation needs, such as corporate transportation, station pick, and drop service, hourly cab facility, and long-distance taxi facility. Our commitment to providing exceptional customer service has helped us build a loyal client base, and our alliance of experienced cab companies is dedicated to ensuring that you have a hassle-free and comfortable journey.</p>
        </div>

        <div class="service-col-2">
          <img src="{{url('frontend/images/about-sect-2.webp')}}" alt="About-Sect-2">
        </div>
    </div>
</section>


<!-- Section-2 ends here -->




<!-- Section-3 starts here -->


<section class="section-3">
    <div class="section-3-heading">
        <h3>Why we are the Best Airport Taxi Company in London</h3>
    </div>

    <div class="about-column">
        <p>There are several reasons why we believe that we are the best in our business. Firstly, we prioritise customer satisfaction and ensure that every ride is a positive experience for our customers. We are committed to offering safe, dependable, and effective transportation by utilising our highly skilled and experienced drivers.</p>
        <p>Secondly, we offer competitive pricing, which means that our customers can enjoy affordable rates without compromising on the quality of service. In addition, we offer our customers round-the-clock customer service to address any doubts or difficulties they may have.
        <p>Lastly, we have a standing as one of London's most dependable and trustworthy airport cab brokers. With years of experience serving the community, we have built a loyal customer base who trust us to provide them with exceptional service every time. Overall, we believe that our commitment to customer satisfaction, competitive pricing, and reliability sets us apart from other taxi broker companies and makes us the best transportation option throughout London.</p>
    </div>
</section>


<!-- Section-3 ends here -->


@endsection