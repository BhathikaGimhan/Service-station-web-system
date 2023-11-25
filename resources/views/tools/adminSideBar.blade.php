
<div class="sidebar pe-4 pb-3">
    <nav class="navbar bg-secondary navbar-dark">
        <a href="{{ url('/') }}" class="navbar-brand mx-4 mb-3">
            <h3 class="text-primary"><i class="fa fa-gear me-2"></i>Motora</h3>
        </a>
        <div class="d-flex align-items-center ms-4 mb-4">
            <div class="ms-3">
                <h6 class="mb-0">{{ Auth::user()->name }}</h6>
                <span>{{ Auth::user()->role }}</span>
            </div>
        </div>
        <div class="navbar-nav w-100">
            <a href="{{ url('/home') }}" id="home" class="nav-item nav-link active"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
            @if (Auth::user()->role == 'Admin')
            <a href="{{ url('/AdminDashbord') }}" id="AdminDashbord" class="nav-item nav-link"><i class="fa fa-table me-2"></i>AdminDashbord</a>
            @endif
            {{-- <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-laptop me-2"></i>Elements</a>
                <div class="dropdown-menu bg-transparent border-0">
                    <a href="button.html" class="dropdown-item">Buttons</a>
                    <a href="typography.html" class="dropdown-item">Typography</a>
                    <a href="element.html" class="dropdown-item">Other Elements</a>
                </div>
            </div> --}}
            <a href="{{ url('/Booking') }}" id="Booking" class="nav-item nav-link"><i class="fa fa-th me-2"></i>Booking</a>
             <!-- <a href="{{ url('/AdminDashbord') }}" id="Forms" class="nav-item nav-link"><i class="fa fa-keyboard me-2"></i>Forms</a> -->
            {{-- <a href="chart.html" class="nav-item nav-link"><i class="fa fa-chart-bar me-2"></i>Charts</a>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="far fa-file-alt me-2"></i>Pages</a>
                <div class="dropdown-menu bg-transparent border-0">
                    <a href="signin.html" class="dropdown-item">Sign In</a>
                    <a href="signup.html" class="dropdown-item">Sign Up</a>
                    <a href="404.html" class="dropdown-item">404 Error</a>
                    <a href="blank.html" class="dropdown-item">Blank Page</a>
                </div>
            </div> --}}
            @php
                use Illuminate\Support\Str;

                $urlSegments = explode('/', rtrim(request()->url(), '/'));
                $lastWord = ucfirst(Str::slug(end($urlSegments), '-'));
                
            @endphp
            <input type="hidden" id="url" name="{{ $lastWord }}">
        </div>
    </nav>
</div>
{{-- fixed the side bar error --}}
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(document).ready(function() {
    var name = $("#url").attr("name");
    console.log(name);
    var link = $("#"+name).text();
    if(name == link){
        $('#home').removeClass('active');
        $('#'+link).addClass('active');
    }
});
</script>

