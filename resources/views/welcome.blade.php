<!DOCTYPE html>
<html>

<head>
    @include('tools.function')
</head>

<body>

  <!-- header section strats -->
  @include('tools.header')
  <!-- end header section -->
  <!-- slider section -->
  <section class="slider_section ">
    <div id="customCarousel1" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <div class="container ">
            <div class="row">
              <div class="col-md-6 col-lg-5">
                <div class="detail-box">
                  <h1>
                    Car Repair <br>
                    And Maintenance
                  </h1>
                  <p>
                  Motora provides a wide range of general maintenance services, emphasizing quality workmanship, attention to detail, and timely service. Trust us for dependable and efficient vehicle maintenance, ensuring your satisfaction and a worry-free driving experience.</p>
                  <div class="btn-box">
                    <!-- <a href="" class="btn-1">
                      Read More
                    </a> -->
                    <a href="{{url('/contact')}}" class="btn-2">
                      Contact Us
                    </a>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-lg-7">
                <div class="img-box">
                  <img src="images/slider-img.png" alt="">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <ol class="carousel-indicators">
        <li data-target="#customCarousel1" data-slide-to="0" class="active"></li>
      </ol>
    </div>
  </section>
  <!-- end slider section -->

  <!-- service section -->

  <section class="service_section ">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          Our Services
        </h2>
      </div>
    </div>
    <div class="container ">
      <div class="row">
        <div class="col-md-6 col-lg-4">
          <div class="box ">
            <div class="img-box">
              <img src="images/s1.png" alt="">
            </div>
            <div class="detail-box">
              <h4>
                General Maintenance
              </h4>
              <p>
              Motora provides a wide range of general maintenance services, emphasizing quality workmanship, attention to detail, and timely service. Trust us for dependable and efficient vehicle maintenance, ensuring your satisfaction and a worry-free driving experience.
              </p>
              <!-- <a href="">
                Read More
                <i class="fa fa-long-arrow-right" aria-hidden="true"></i>

              </a> -->
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4">
          <div class="box ">
            <div class="img-box">
              <img src="images/s2.png" alt="">
            </div>
            <div class="detail-box">
              <h4>
                Repair and Replacement
              </h4>
              <p>
              Motora is your go-to destination for top-notch repair and replacement services. Our skilled technicians use cutting-edge technology and genuine parts to efficiently address a variety of automotive issues, prioritizing your safety and satisfaction.
              </p>
              <!-- <a href="">
                Read More
                <i class="fa fa-long-arrow-right" aria-hidden="true"></i>

              </a> -->
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 ">
          <div class="box ">
            <div class="img-box">
              <img src="images/s3.png" alt="">
            </div>
            <div class="detail-box">
              <h4>
                Tire Repair and Replacement
              </h4>
              <p>
              Specializing in expert tire care, Motora offers efficient and reliable solutions for puncture repairs or full replacements. Trust us for precision in tire maintenance, ensuring optimal traction, handling, and fuel efficiency.
              </p>
              <!-- <a href="">
                Read More
                <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
              </a> -->
            </div>
          </div>
        </div>
        <div class="btn-box">
          <!-- <a href="" class="btn-1">
            Read More
          </a> -->
          <a href="{{url('/services')}}" style="position:absolute; bottom:0; right:200px;" class="btn-2">
            See More..
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- end service section -->

  <!-- about section -->

  <section class="about_section layout_padding">
    <div class="container  ">
      <div class="row">
        <div class="col-md-6 ">
          <div class="img-box">
            <img src="images/about-img.png" alt="">
          </div>
        </div>
        <div class="col-md-6">
          <div class="detail-box">
            <div class="heading_container">
              <h2>
                About Us
              </h2>
            </div>
            <p>
            At Motora, we take pride in being your trusted partner in automotive care. With a commitment to excellence, our team of highly skilled technicians brings a wealth of expertise to every service we provide. From routine maintenance to complex repairs, we approach each task with precision and dedication to ensure your vehicle performs at its best. Our transparent communication, fair pricing, and use of top-quality materials set us apart in the industry. At Motora, we don't just fix cars; we build lasting relationships with our customers, prioritizing their satisfaction and the longevity of their vehicles. </p>
            <a href="{{ url('/about') }}">
              Read More
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end about section -->

  <!-- why section -->

  <section class="why_section ">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          Why Choose Us
        </h2>
      </div>
    </div>
    <div class="container ">
      <div class="row">
        <div class="col-md-6 col-lg-4 mx-auto">
          <div class="box ">
            <div class="img-box">
              <img src="images/w1.png" alt="">
            </div>
            <div class="detail-box">
              <h4>
                Best Workers
              </h4>
              <p>
              Motora boasts highly skilled technicians dedicated to precision and excellence in every service, handling the latest automotive technologies.
              </p>
              <!-- <a href="">
                Read More
                <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
              </a> -->
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 mx-auto ">
          <div class="box ">
            <div class="img-box">
              <img src="images/w2.png" alt="">
            </div>
            <div class="detail-box">
              <h4>
                Best Materials
              </h4>
              <p>
              We use top-quality components and genuine parts, prioritizing durability, performance, and reliability to keep your vehicle running smoothly.
              </p>
              <!-- <a href="">
                Read More
                <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
              </a> -->
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 mx-auto">
          <div class="box ">
            <div class="img-box">
              <img src="images/w3.png" alt="">
            </div>
            <div class="detail-box">
              <h4>
                Best Service
              </h4>
              <p>
              Our commitment to excellence is reflected in prompt and courteous customer service, transparent communication, and efficient vehicle maintenance, ensuring your satisfaction
              </p>
              <!-- <a href="">
                Read More
                <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
              </a> -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end why section -->

  <!-- client section -->
  <section class="client_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          Testimonial
        </h2>
        <p>
          Even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to
        </p>
      </div>
    </div>
    <div class="container px-0">
      <div id="customCarousel2" class="carousel  slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="container">
              <div class="row">
                <div class="col-lg-10 mx-auto">
                  <div class="box">
                    <div class="img-box">
                      <img src="images/client.jpg" alt="">
                    </div>
                    <div class="detail-box">
                      <div class="client_info">
                        <div class="client_name">
                          <h5>
                          K.M Perera
                          </h5>
                          <h6>
                            Customer
                          </h6>
                        </div>
                        <i class="fa fa-quote-left" aria-hidden="true"></i>
                      </div>
                      <p>
                      Commends Motora's excellent service, courteous staff, and outstanding workmanship.
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="container">
              <div class="row">
                <div class="col-md-10 mx-auto">
                  <div class="box">
                    <div class="img-box">
                      <img src="images/client1.jpg" alt="">
                    </div>
                    <div class="detail-box">
                      <div class="client_info">
                        <div class="client_name">
                          <h5>
                          Ravindu Jayasekara
                          </h5>
                          <h6>
                            Customer
                          </h6>
                        </div>
                        <i class="fa fa-quote-left" aria-hidden="true"></i>
                      </div>
                      <p>
                       Appreciates Motora's professionalism, expertise, transparency, and commitment to customer satisfaction.
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="container">
              <div class="row">
                <div class="col-md-10 mx-auto">
                  <div class="box">
                    <div class="img-box">
                      <img src="images/client2.jpg" alt="">
                    </div>
                    <div class="detail-box">
                      <div class="client_info">
                        <div class="client_name">
                          <h5>
                          Dasun Fernando
                          </h5>
                          <h6>
                            Customer
                          </h6>
                        </div>
                        <i class="fa fa-quote-left" aria-hidden="true"></i>
                      </div>
                      <p>
                      Highlights Motora's expertise, attention to detail, and proactive approach in addressing automotive needs.
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel_btn-box">
          <a class="carousel-control-prev" href="#customCarousel2" role="button" data-slide="prev">
            <i class="fa fa-angle-left" aria-hidden="true"></i>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#customCarousel2" role="button" data-slide="next">
            <i class="fa fa-angle-right" aria-hidden="true"></i>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
    </div>
  </section>
  <!-- end client section -->

  <!-- contact section -->
  <section class="contact_section layout_padding-bottom">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="form_container">
            <div class="heading_container ">
              <h2>
                Get In Touch
              </h2>
            </div>
            <form action="#">
              <div>
                <input type="text" placeholder="Your Name" />
              </div>
              <div>
                <input type="email" placeholder="Your Email" />
              </div>
              <div>
                <input type="text" placeholder="Your Phone" />
              </div>
              <div>
                <input type="text" class="message-box" placeholder="Message" />
              </div>
              <div class="btn_box ">
                <button>
                  SEND
                </button>
              </div>
            </form>
          </div>
        </div>
        <div class="col-md-6">
          <div class="img-box">
            <img src="images/contact-img.png" alt="">
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end contact section -->

  <!-- info section -->

  <section class="info_section ">
    <div class="info_container ">
      <div class="container">
        <div class="row">
          <div class="col-lg-9">
            <div class="info_contact ">
              <div class="row">
                <div class="col-md-3">
                  <a href="#" class="link-box">
                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                    <span>
                      Location
                    </span>
                  </a>
                </div>
                <div class="col-md-5">
                  <a href="#" class="link-box">
                    <i class="fa fa-phone" aria-hidden="true"></i>
                    <span>
                      Call +01 1234567890
                    </span>
                  </a>
                </div>
                <div class="col-md-4">
                  <a href="#" class="link-box">
                    <i class="fa fa-envelope" aria-hidden="true"></i>
                    <span>
                      demo@gmail.com
                    </span>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-5  col-lg-3 mx-auto">
            <div class="info_form ">
              <form action="#">
                <input type="email" placeholder="Enter Your Email" />
                <button>
                  <i class="fa fa-arrow-right" aria-hidden="true"></i>
                </button>
              </form>
            </div>
          </div>
        </div>
        <div class="info_logo">
          <a class="navbar-brand" href="index.html">
            <span>
              Motora
            </span>
          </a>
        </div>
        <div class="social-box">
          <a href="">
            <i class="fa fa-facebook" aria-hidden="true"></i>
          </a>
          <a href="">
            <i class="fa fa-twitter" aria-hidden="true"></i>
          </a>
          <a href="">
            <i class="fa fa-instagram" aria-hidden="true"></i>
          </a>
          <a href="">
            <i class="fa fa-youtube" aria-hidden="true"></i>
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- end info section -->

  <!-- footer section -->
  @include('tools.footer')
  <!-- footer section -->

</body>

</html>
