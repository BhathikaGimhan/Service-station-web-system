<!DOCTYPE html>
<html>

<head>
@include('tools.function')
</head>

<body>

  <!-- header section strats -->
    @include('tools.header')

  <!-- end header section -->

  <!-- service section -->

  <section class="service_section layout_padding">
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
        <div class="col-md-6 col-lg-4">
          <div class="box ">
            <div class="img-box">
              <img src="images/s4.png" alt="">
            </div>
            <div class="detail-box">
              <h4>
              Fuel System Repair:
              </h4>
              <p>
              Motora's expert technicians diagnose and resolve fuel system issues using cutting-edge technology and high-quality components. Trust us to keep your fuel system running smoothly for a trouble-free driving experience.
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
              <img src="images/s5.png" alt="">
            </div>
            <div class="detail-box">
              <h4>
              Engine Tune-Up
              </h4>
              <p>
              Motora's skilled technicians optimize engine components for peak efficiency, providing a comprehensive tune-up that enhances fuel efficiency, power delivery, and overall drivability.
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
              <img src="images/s6.png" alt="">
            </div>
            <div class="detail-box">
              <h4>
              Full Service
              </h4>
              <p>
              Elevate your driving experience with Motora's full-service package, offering thorough interior and exterior cleaning, meticulous oil checking, fluid top-ups, and high-quality service that enhances both aesthetics and longevity.
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

  <!-- end service section -->

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
