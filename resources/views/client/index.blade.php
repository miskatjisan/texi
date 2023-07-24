@extends('client.layouts.master')
@section('title','Texi Booking | Home')
@section('content')

  <main class="section-main">
  <div class="hero">
            <div class="hero-content">
                <h1><span>Airport</span> Local Taxis</h1>
                <p>Discover the Top-Rated Taxi Service in London for Safe and Reliable Transportation.</p>

                <div class="buttons">
                    <button class="button" type="button" onclick="location.href='tel:03218347290'"> +92-321-8347290 </button>
                    
                    <a href="{{route('bookfind')}}" class="btn btn-primary">Book Now</a>
               
                </div>
            </div>
        </div>
  </main>

<!-- Main section ends here -->



<!-- Section-2 starts here -->

<section class="section-2">
    <div class="section-2-heading">
        <h2>Our Services</h2>
    </div>

    <div class="grid">
        <div class="card">
          <span class="icon">
            <svg
              viewBox="0 0 24 24"
              fill="none"
              stroke="currentColor"
              stroke-width="1.2"
              stroke-linecap="round"
              stroke-linejoin="round"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                d="M14.5 3.5C14.5 3.5 14.5 5.5 12 5.5C9.5 5.5 9.5 3.5 9.5 3.5H7.5L4.20711 6.79289C3.81658 7.18342 3.81658 7.81658 4.20711 8.20711L6.5 10.5V20.5H17.5V10.5L19.7929 8.20711C20.1834 7.81658 20.1834 7.18342 19.7929 6.79289L16.5 3.5H14.5Z"
              />
            </svg>
          </span>
          <h4>Airport pickup and drop-off</h4>
          <p>Our airport pickup and drop-off taxi facility provides reliable and affordable transportation to and from all major airports in London. Book now for a stress-free travel experience.</p>
          <div class="shine"></div>
          <div class="background">
            <div class="tiles">
              <div class="tile tile-1"></div>
              <div class="tile tile-2"></div>
              <div class="tile tile-3"></div>
              <div class="tile tile-4"></div>
      
              <div class="tile tile-5"></div>
              <div class="tile tile-6"></div>
              <div class="tile tile-7"></div>
              <div class="tile tile-8"></div>
      
              <div class="tile tile-9"></div>
              <div class="tile tile-10"></div>
            </div>
      
            <div class="line line-1"></div>
            <div class="line line-2"></div>
            <div class="line line-3"></div>
          </div>
        </div>
        <div class="card">
          <span class="icon">
            <svg
              viewBox="0 0 24 24"
              fill="none"
              stroke="currentColor"
              stroke-width="1.2"
              stroke-linecap="round"
              stroke-linejoin="round"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                d="M4.5 9.5V5.5C4.5 4.94772 4.94772 4.5 5.5 4.5H9.5C10.0523 4.5 10.5 4.94772 10.5 5.5V9.5C10.5 10.0523 10.0523 10.5 9.5 10.5H5.5C4.94772 10.5 4.5 10.0523 4.5 9.5Z"
              />
              <path
                d="M13.5 18.5V14.5C13.5 13.9477 13.9477 13.5 14.5 13.5H18.5C19.0523 13.5 19.5 13.9477 19.5 14.5V18.5C19.5 19.0523 19.0523 19.5 18.5 19.5H14.5C13.9477 19.5 13.5 19.0523 13.5 18.5Z"
              />
              <path d="M4.5 19.5L7.5 13.5L10.5 19.5H4.5Z" />
              <path
                d="M16.5 4.5C18.1569 4.5 19.5 5.84315 19.5 7.5C19.5 9.15685 18.1569 10.5 16.5 10.5C14.8431 10.5 13.5 9.15685 13.5 7.5C13.5 5.84315 14.8431 4.5 16.5 4.5Z"
              />
            </svg>
          </span>
          <h4>Local Airport taxi service</h4>
          <p>Experience hassle-free traveling with our local airport taxi services throughout London. Our prompt and courteous drivers ensure a comfortable ride, getting you to your destination in style and on time.</p>
          <div class="shine"></div>
          <div class="background">
            <div class="tiles">
              <div class="tile tile-1"></div>
              <div class="tile tile-2"></div>
              <div class="tile tile-3"></div>
              <div class="tile tile-4"></div>
      
              <div class="tile tile-5"></div>
              <div class="tile tile-6"></div>
              <div class="tile tile-7"></div>
              <div class="tile tile-8"></div>
      
              <div class="tile tile-9"></div>
              <div class="tile tile-10"></div>
            </div>
      
            <div class="line line-1"></div>
            <div class="line line-2"></div>
            <div class="line line-3"></div>
          </div>
        </div>
        <div class="card">
            <span class="icon">
              <svg
                viewBox="0 0 24 24"
                fill="none"
                stroke="currentColor"
                stroke-width="1.2"
                stroke-linecap="round"
                stroke-linejoin="round"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  d="M4.5 9.5V5.5C4.5 4.94772 4.94772 4.5 5.5 4.5H9.5C10.0523 4.5 10.5 4.94772 10.5 5.5V9.5C10.5 10.0523 10.0523 10.5 9.5 10.5H5.5C4.94772 10.5 4.5 10.0523 4.5 9.5Z"
                />
                <path
                  d="M13.5 18.5V14.5C13.5 13.9477 13.9477 13.5 14.5 13.5H18.5C19.0523 13.5 19.5 13.9477 19.5 14.5V18.5C19.5 19.0523 19.0523 19.5 18.5 19.5H14.5C13.9477 19.5 13.5 19.0523 13.5 18.5Z"
                />
                <path d="M4.5 19.5L7.5 13.5L10.5 19.5H4.5Z" />
                <path
                  d="M16.5 4.5C18.1569 4.5 19.5 5.84315 19.5 7.5C19.5 9.15685 18.1569 10.5 16.5 10.5C14.8431 10.5 13.5 9.15685 13.5 7.5C13.5 5.84315 14.8431 4.5 16.5 4.5Z"
                />
              </svg>
            </span>
            <h4>Long-Distance Taxi Service</h4>
            <p>With our reliable drivers and well-maintained vehicles, you can sit back, relax, and enjoy the journey. We offer competitive rates, flexible schedules, and exceptional customer services, making us the go-to option for long-distance transportation.</p>
            <div class="shine"></div>
            <div class="background">
              <div class="tiles">
                <div class="tile tile-1"></div>
                <div class="tile tile-2"></div>
                <div class="tile tile-3"></div>
                <div class="tile tile-4"></div>
        
                <div class="tile tile-5"></div>
                <div class="tile tile-6"></div>
                <div class="tile tile-7"></div>
                <div class="tile tile-8"></div>
        
                <div class="tile tile-9"></div>
                <div class="tile tile-10"></div>
              </div>
        
              <div class="line line-1"></div>
              <div class="line line-2"></div>
              <div class="line line-3"></div>
            </div>
          </div>
          <div class="card">
            <span class="icon">
              <svg
                viewBox="0 0 24 24"
                fill="none"
                stroke="currentColor"
                stroke-width="1.2"
                stroke-linecap="round"
                stroke-linejoin="round"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  d="M4.5 9.5V5.5C4.5 4.94772 4.94772 4.5 5.5 4.5H9.5C10.0523 4.5 10.5 4.94772 10.5 5.5V9.5C10.5 10.0523 10.0523 10.5 9.5 10.5H5.5C4.94772 10.5 4.5 10.0523 4.5 9.5Z"
                />
                <path
                  d="M13.5 18.5V14.5C13.5 13.9477 13.9477 13.5 14.5 13.5H18.5C19.0523 13.5 19.5 13.9477 19.5 14.5V18.5C19.5 19.0523 19.0523 19.5 18.5 19.5H14.5C13.9477 19.5 13.5 19.0523 13.5 18.5Z"
                />
                <path d="M4.5 19.5L7.5 13.5L10.5 19.5H4.5Z" />
                <path
                  d="M16.5 4.5C18.1569 4.5 19.5 5.84315 19.5 7.5C19.5 9.15685 18.1569 10.5 16.5 10.5C14.8431 10.5 13.5 9.15685 13.5 7.5C13.5 5.84315 14.8431 4.5 16.5 4.5Z"
                />
              </svg>
            </span>
            <h4>Pre-booking Service</h4>
            <p>Experience convenience and peace of mind with our pre-booking cab service in London. To accommodate your requirements, we provide a variety of vehicles. Make your ride reservations in advance to avoid the headache of finding a cab on the street.</p>
            <div class="shine"></div>
            <div class="background">
              <div class="tiles">
                <div class="tile tile-1"></div>
                <div class="tile tile-2"></div>
                <div class="tile tile-3"></div>
                <div class="tile tile-4"></div>
        
                <div class="tile tile-5"></div>
                <div class="tile tile-6"></div>
                <div class="tile tile-7"></div>
                <div class="tile tile-8"></div>
        
                <div class="tile tile-9"></div>
                <div class="tile tile-10"></div>
              </div>
        
              <div class="line line-1"></div>
              <div class="line line-2"></div>
              <div class="line line-3"></div>
            </div>
          </div>
      </div>
</section>

<!-- Section-2 ends here -->




<!-- Section-3 starts here -->

    <section class="section-3">
        <div class="why-colums">
            <div class="why-col-1">
                <h3>Why You Should Choose Our Airport Taxi Services?</h3>
                <p>Choosing the right airport taxi service can have a major impact on your travel experience if you're going to or from London. At "Local Airport Taxis," we are committed to providing the finest level of comfort, convenience, and reliability to our customers. Here are just a few reasons why you should choose our taxi services in London :</p>
                <ul>
                    <li>
                        <b>Punctuality :</b>
                        <p>We understand that time is of the essence, which is why we take pride in our punctuality. Our drivers are instructed to show up promptly and transport you to your location as quickly as they can.</p>
                    </li>
                    <li>
                        <b>Comfort :</b>
                        <p>Our fleet of vehicles is well-maintained, clean, and comfortable, ensuring that you have a relaxing journey to your destination. We provide a variety of automobiles, including sedans, SUVs, and luxury vehicles.</p>
                    </li>
                    <li>
                        <b>Experienced Drivers :</b>
                        <p>Our drivers have a tremendous amount of expertise and are well-versed about the roads in and around London. They ensure that your experience is enjoyable by being kind, friendly, and professional.</p>
                    </li>
                    <li>
                        <b>Competitive Pricing :</b>
                        <p>We provide affordable prices without sacrificing the caliber of our services.</p>
                    </li>
                    <li>
                        <b>Easy Booking :</b>
                        <p>Our booking process is simple and hassle-free, allowing you to book your ride in just a few clicks.</p>
                    </li>
                    <li>
                        <b>Safety :</b>
                        <p>We take the safety of our passengers very seriously and have implemented various safety measures to ensure your well-being.</p>
                    </li>
                </ul>
                <span>When traveling to your destination, you may relax and have fun with our airport shuttle service. Reserve your ride with us today !</span>
            </div>

            <div class="why-col-2">
              <img src="images/about-section-img.webp" alt="">
            </div>
        </div>
    </section>

<!-- Section-3 ends here -->



<!-- Section-4 starts here -->

<section class="section-4">
  <div class="section-4-heading">
      <h2>Airport Services</h2>
  </div>

  <div class="icons-container">
      <a href="">
          <div class="icons">
              <img src="images/heathrow.webp" alt="Heathrow">
          </div>
      </a>
      <a href="">
          <div class="icons">
              <img src="images/luton.webp" alt="Luton">
          </div>
      </a>
      <a href="">
          <div class="icons">
              <img src="images/gatwick.webp" alt="Gatwick">
          </div>
      </a>
      <a href="">
          <div class="icons">
              <img src="images/stansted.webp" alt="Stansted">
          </div>
      </a>
      <a href="">
          <div class="icons">
              <img src="images/london-city.webp" alt="London City">
          </div>
      </a>
  </div>
</section>

<!-- Section-4 ends here -->



<!-- Section-5 starts Here -->

<section class="section-5">
    <div class="section-5-heading">
      <h2>Station Services</h2>
    </div>
    <div class="grid">
       <div class="box">
          <abbr title="Click to Read More">
            <a href="">
              <img src="images/destination-1.jpg" alt="paddington">
              <h3><span>Paddington</span></h3>
            </a>
          </abbr>
       </div>
       <div class="box">
          <abbr title="Click to Read More">
            <a href="">
              <img src="images/destination-2.jpg" alt="euston">
              <h3><span>Euston</span></h3>
            </a>
          </abbr>
        </div>
       <div class="box">
          <abbr title="Click to Read More">
            <a href="">
              <img src="images/destination-3.jpg" alt="victoria">
              <h3><span>Victoria</span></h3>
            </a>
          </abbr>
        </div>
       <div class="box">
          <abbr title="Click to Read More">
            <a href="">
              <img src="images/destination-4.jpg" alt="waterloo">
              <h3><span>Waterloo</span></h3>
            </a>
          </abbr>
        </div>
       <div class="box">
          <abbr title="Click to Read More">
            <a href="">
              <img src="images/destination-5.jpg" alt="king cross">
              <h3><span>King Cross</span></h3>
            </a>
          </abbr>
        </div>
       <div class="box">
          <abbr title="Click to Read More">
            <a href="">
              <img src="images/destination-6.jpg" alt="charing">
              <h3><span>Charing Cross</span></h3>
            </a>
          </abbr>
        </div>
       <div class="box">
          <abbr title="Click to Read More">
            <a href="">
              <img src="images/destination-7.jpg" alt="london bridge">
              <h3><span>London Bridge</span></h3>
            </a>
          </abbr>
        </div>
       <div class="box">
          <abbr title="Click to Read More">
            <a href="">
              <img src="images/destination-8.jpg" alt="wembley">
              <h3><span>Wembley Central</span></h3>
            </a>
          </abbr>
        </div>
    </div>
</section>

<!-- Section-5 ends Here -->



<!-- Section-6 starts Here -->

<section class="section-6">
    <div class="section-6-heading">
      <h2>Our Vehicles</h2>
      <span>Experience Luxury and Comfort with Our <br> Premium Fleet of Vehicles</span>
    </div>

    <div></div>
</section>

<!-- Section-6 ends Here -->


@endsection
