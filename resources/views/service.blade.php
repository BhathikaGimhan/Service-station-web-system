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
                Generators on the Internet tend to repeat predefined chunks as necessary
              </p>
              <a href="">
                Read More
                <i class="fa fa-long-arrow-right" aria-hidden="true"></i>

              </a>
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
                Generators on the Internet tend to repeat predefined chunks as necessary
              </p>
              <a href="">
                Read More
                <i class="fa fa-long-arrow-right" aria-hidden="true"></i>

              </a>
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
                Generators on the Internet tend to repeat predefined chunks as necessary
              </p>
              <a href="">
                Read More
                <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
              </a>
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
                Wheel Alignment
              </h4>
              <p>
                Generators on the Internet tend to repeat predefined chunks as necessary
              </p>
              <a href="">
                Read More
                <i class="fa fa-long-arrow-right" aria-hidden="true"></i>

              </a>
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
                Fuel System Repair
              </h4>
              <p>
                Generators on the Internet tend to repeat predefined chunks as necessary
              </p>
              <a href="">
                Read More
                <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
              </a>
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
                Tune Up
              </h4>
              <p>
                Generators on the Internet tend to repeat predefined chunks as necessary
              </p>
              <a href="">
                Read More
                <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
              </a>
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
