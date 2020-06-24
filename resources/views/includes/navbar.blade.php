<div class="container">
    <nav class="row navbar navbar-expand-lg navbar-light bg-white">
        <a href="{{ url('') }}" class="navbar-brand">
            <img src="{{ url('assets/images/logo.png') }}" alt="tourify-logo">
        </a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#nav-item">
            <span class="navbar-toggler-icon">

            </span>
        </button>
        <div class="collapse navbar-collapse" id="nav-item">
            <ul class="navbar-nav ml-auto mr-3">
                <li class="nav-item mx-md-2">
                    <a href="#" class="nav-link active">Home</a>
                </li>
                <li class="nav-item mx-md-2">
                    <a href="#" class="nav-link">Paket Travel</a>
                </li>
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" id="nav-drop" data-toggle="dropdown">Services</a>
                    <div class="dropdown-menu">
                        <a href="#" class="dropdown-item">VISA</a>
                        <a href="#" class="dropdown-item">Passport</a>
                    </div>
                </li>
                <li class="nav-item mx-md-2">
                    <a href="#" class="nav-link">Testimonial</a>
                </li>
            </ul>
            <!-- mobile-button-start -->
            <form action="" class="form-inline d-sm-block d-lg-none">
                <button class="btn btn-login my-2 my-sm-0">
                    Masuk
                </button>
            </form>
            <!-- mobile-button-end -->

            <!-- desktop-button-start -->
            <form action="" class="form-inline my-2 my-lg-0 d-none d-lg-block">
                <button class="btn btn-login btn-navbar-right my-2 my-sm-0 px-4">
                    Masuk
                </button>
            </form>
            <!-- desktop-button-end -->
        </div>
    </nav>
</div>