<!-- Navbar & Hero Start -->
<div class="container-fluid position-relative p-0">
    <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
        <a href="" class="navbar-brand p-0">
            <h1 class="text-primary m-0"><i class="fa fa-map-marker-alt me-3"></i>Tourist</h1>
            <!-- <img src="img/logo.png" alt="Logo"> -->
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="fa fa-bars"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0">
                <a href="{{ url('#home') }}" class="nav-item nav-link active"> {{ __('Home') }} </a>
                <a href="{{ url('#about') }}" class="nav-item nav-link"> {{ __('About') }} </a>
                <a href="{{ url('#service') }}" class="nav-item nav-link"> {{ __('Services') }} </a>
                <a href="{{ url('#destination') }}" class="nav-item nav-link"> {{ __('Destinations') }} </a>
                <a href="{{ url('#package') }}" class="nav-item nav-link"> {{ __('Packages') }} </a>
                <a href="{{ url('#contact-us') }}" class="nav-item nav-link">Contact</a>
            </div>
        </div>
    </nav>

    <div class="container-fluid bg-primary py-5 mb-5 hero-header">
        <div class="container py-5">
            <div class="row justify-content-end py-5">
                @if (Session::has('success'))
                    <div class="alert alert-success justify-content-end w-25">
                        <div class="alert-body">
                            <i class="icon fas fa-check"></i>
                            {{session('success')}}
                        </div>
                    </div>
                @endif
                @if (Session::has('warning'))
                    <div class="alert alert-danger justify-content-end w-25">
                        <i class="icon fas fa-ban"></i>
                        {{session('warning')}}
                    </div>
                @endif
            </div>
            <div class="row justify-content-center py-5">
                <div class="col-lg-10 pt-lg-5 mt-lg-5 text-center">
                    <h1 class="display-3 text-white mb-3 animated slideInDown">Enjoy Your Vacation With Us</h1>
                    <p class="fs-4 text-white mb-4 animated slideInDown">Tempor erat elitr rebum at clita diam amet diam et eos erat ipsum lorem sit</p>
                    <div class="position-relative w-75 mx-auto animated slideInDown">
                        <input class="form-control border-0 rounded-pill w-100 py-3 ps-4 pe-5" type="text" placeholder="Eg: Thailand">
                        <button type="button" class="btn btn-primary rounded-pill py-2 px-4 position-absolute top-0 end-0 me-2" style="margin-top: 7px;">Search</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Navbar & Hero End -->
