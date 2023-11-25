<!DOCTYPE html>
<html>

<head>
    @include('tools.function')

</head>

<body>

  <!-- header section strats -->
  @include('tools.header')
  <!-- end header section -->

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
            At Motora, we take pride in being your trusted partner in automotive care. With a commitment to excellence, our team of highly skilled technicians brings a wealth of expertise to every service we provide. From routine maintenance to complex repairs, we approach each task with precision and dedication to ensure your vehicle performs at its best. Our transparent communication, fair pricing, and use of top-quality materials set us apart in the industry. At Motora, we don't just fix cars; we build lasting relationships with our customers, prioritizing their satisfaction and the longevity of their vehicles. Whether you're in need of a tune-up, repair, or comprehensive maintenance, choose Motora Vehicle Service Station for an automotive experience that combines skill, reliability, and exceptional customer service. Your journey on the road starts with us. <br>

Founded on the principles of trust, expertise, and customer satisfaction, Motora is more than just a service provider; we're your automotive care partner. Our commitment to delivering the highest quality service is reflected in our team's unwavering dedication to staying at the forefront of industry advancements. We utilize cutting-edge technology and genuine parts, ensuring that your vehicle receives the best treatment available. What sets us apart is not just the efficiency with which we address your vehicle's needs, but the personalized attention we provide to each customer. At Motora, we understand that your vehicle is an integral part of your daily life, and we take pride in maintaining it with the utmost care and precision. Choose Motora Vehicle Service Station for an automotive experience where expertise meets a genuine commitment to customer satisfaction, setting new standards in the world of vehicle maintenance and repair.
 </p>
            <!-- <a href="">
              Read More
            </a> -->
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end about section -->

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
