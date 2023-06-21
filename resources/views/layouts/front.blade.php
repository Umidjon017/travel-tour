<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>{{ __('Tourist - Travel Agency') }}</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">

        <!-- Favicon -->
        <link href="{{ asset('/img/favicon.ico') }}" rel="icon">

        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap" rel="stylesheet">

        <!-- Icon Font Stylesheet -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.5/font/bootstrap-icons.min.css" rel="stylesheet" integrity="sha512-ZnR2wlLbSbr8/c9AgLg3jQPAattCUImNsae6NHYnS9KrIwRdcY9DxFotXhNAKIKbAXlRnujIqUWoXXwqyFOeIQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

        <!-- Libraries Stylesheet -->
        <link href="{{ asset('/lib/animate/animate.min.css') }}" rel="stylesheet">
        <link href="{{ asset('/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
        <link href="{{ asset('/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css') }}" rel="stylesheet" />

        <!-- Customized Bootstrap Stylesheet -->
        <link href="{{ asset('/css/bootstrap.min.css') }}" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="{{ asset('/css/style.css') }}" rel="stylesheet">
    </head>

    <body>
{{--        <!-- Spinner Start -->--}}
{{--        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">--}}
{{--            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">--}}
{{--                <span class="sr-only">Loading...</span>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <!-- Spinner End -->--}}

        @include('includes.topbar')

        @include('includes.navbar')

        @yield('main-content')

        @include('includes.footer')

        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-airplane"></i></a>

        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="{{ asset('/lib/wow/wow.min.js') }}"></script>
        <script src="{{ asset('/lib/easing/easing.min.js') }}"></script>
        <script src="{{ asset('/lib/waypoints/waypoints.min.js') }}"></script>
        <script src="{{ asset('/lib/owlcarousel/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('/lib/tempusdominus/js/moment.min.js') }}"></script>
        <script src="{{ asset('/lib/tempusdominus/js/moment-timezone.min.js') }}"></script>
        <script src="{{ asset('/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js') }}"></script>

        <!-- Template Javascript -->
        <script src="{{ asset('/js/main.js') }}"></script>

        <!-- Manual Javascript -->
        <script>
            $(document).ready(function() {
                $('a[href^="#"]').on('click', function(event) {
                    event.preventDefault();

                    let target = $(this.getAttribute('href'));

                    if (target.length) {
                        $('html, body').stop().animate({
                            scrollTop: target.offset().top
                        }, 1000);

                        $('a[href^="#"]').removeClass('active');
                        $(this).addClass('active');
                    }
                });
            });
        </script>
    </body>

</html>
