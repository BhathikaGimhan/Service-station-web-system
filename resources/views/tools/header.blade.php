<header class="header_section">
    <div class="container-fluid">
      <nav class="navbar navbar-expand-lg custom_nav-container ">
        <a class="navbar-brand" href="index.html">
          <span>Motora</span>
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class=""> </span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav  ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="{{ url('/') }}">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('/about') }}"> About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('/services') }}">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('/shop') }}">Shop</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('/contact') }}">Contact Us</a>
            </li>
          </ul>
          <div class="quote_btn-container">
            <form class="form-inline">
              <a href="{{ url('/home') }}">
                <span>Login</span>
                <i class="fa fa-user" aria-hidden="true"></i>

              </a>
            </form>
          </div>
        </div>
      </nav>
    </div>
  </header>
