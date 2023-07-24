<head>
    <title>Our Partners</title>
    <link rel="stylesheet" href="{{url('frontend/css/partners.css')}}">
</head>

@extends('frontend.layouts.main')

@section('main-container')



<div class="loader">
    <div></div>
</div>

<div class="content">

    <!-- Main section starts here -->

    <main class="section-main">

        <section class="mini-hero">
          <h1>Our Partners</h1>
        </section>

    </main>

    <!-- Main section ends here -->



    <!-- Section-1 starts here -->


    <section class="section-1">
        <div class="section-1-heading">
            <h3>Airport Local Taxis Partners</h3>
        </div>

        <div class="about-column">
            <p>Our taxi service partners are an integral part of our mission to provide safe, reliable, and convenient transportation services to our customers. We recognize the importance of working with partners who share our values and are committed to delivering exceptional customer experiences. We have carefully selected our taxi alliance based on a rigorous vetting process that ensures they meet our high standards for safety, reliability, and customer service. Our alliance is equipped with experienced professionals who are licensed and insured to provide transportation facilities in their respective areas.</p>
            <p>We believe in building strong relationships with our cab service partners, and we work closely with them to ensure they have the support and resources they need to provide top-notch services to our customers. We provide them with access to our technology platform, which includes tools and features designed to enhance the customer experience, such as real-time GPS tracking, in-app messaging, and secure payment processing.</p>
            <p>Our taxi service alliance is an extension of our brand, and we are proud to work with them to deliver the best possible experience to our customers. We believe in transparency and honesty in our partnerships, and we are committed to ensuring they are treated fairly and with respect. We value their input and feedback and are always looking for ways to improve our partnership and the services we provide.</p>
            <p>We also believe in the power of community and giving back, and we encourage our taxi facility partners to get involved in their local communities. We think that by collaborating together, we can have a beneficial influence on the global community. Our cab partners are not just drivers, they are ambassadors of our brand and our commitment to excellence. We are dedicated to providing them with the support and resources they need to succeed, and we believe that by doing so, we can create a strong and sustainable partnership that benefits everyone involved.</p>
            <p>In order to get registered as our taxi partner, you must click the link below and fill out the registration form completely. After registering, please upload the required papers to the web portal. Shortly, an associate of our staff will speak with you and assist you with the setup.</p>
            <button type="button" onclick="location.href='{{url('/booking')}}'">Register Now</button>
        </div>
    </section>

    <!-- Section-1 ends here -->

</div>



@endsection