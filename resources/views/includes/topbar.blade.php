<!-- Topbar Start -->
<div class="container-fluid bg-dark px-5 d-none d-lg-block" id="home">
    <div class="row gx-0">
        <div class="col-lg-8 text-center text-lg-start mb-2 mb-lg-0">
            <div class="d-inline-flex align-items-center" style="height: 45px;">
                <small class="me-3 text-light"><i class="fa fa-map-marker-alt me-2"></i>123 Street, New York, USA</small>
                <small class="me-3 text-light"><i class="fa fa-phone-alt me-2"></i>+012 345 6789</small>
                <small class="text-light"><i class="fa fa-envelope-open me-2"></i>info@example.com</small>
            </div>
        </div>
        <div class="col-lg-4 text-center text-lg-end">
            <div class="d-inline-flex align-items-center" style="height: 45px;">
                <div class="dropdown me-2">
                    <button class="btn btn-sm btn-outline-light dropdown-toggle" type="button" id="languageDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        {{ trans('messages.language') }}
                    </button>
                    <div class="dropdown-menu" aria-labelledby="languageDropdown">
{{--                        <a class="dropdown-item {{ session('locale') === 'uz' ? 'active' : '' }}" href="{{ route('setLocale', ['locale' => 'uz']) }}">uz</a>--}}
{{--                        <a class="dropdown-item {{ session('locale') === 'ru' ? 'active' : '' }}" href="{{ route('setLocale', ['locale' => 'ru']) }}">ru</a>--}}
{{--                        <a class="dropdown-item {{ session('locale') === 'en' ? 'active' : '' }}" href="{{ route('setLocale', ['locale' => 'en']) }}">en</a>--}}
                        <a class="dropdown-item {{ session('locale') === 'uz' ? 'active' : '' }}" href="{{ route('setLocale', ['locale' => 'uz']) }}">uz</a>
                        <a class="dropdown-item {{ session('locale') === 'ru' ? 'active' : '' }}" href="{{ route('setLocale', ['locale' => 'ru']) }}">ru</a>
                        <a class="dropdown-item {{ session('locale') === 'en' ? 'active' : '' }}" href="{{ route('setLocale', ['locale' => 'en']) }}">en</a>
                    </div>
                </div>

                <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i class="fab fa-facebook-f fw-normal"></i></a>
                <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i class="fab fa-instagram fw-normal"></i></a>
                <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i class="fab fa-youtube fw-normal"></i></a>
                <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i class="fab fa-telegram fw-normal"></i></a>
            </div>
        </div>
    </div>
</div>
<!-- Topbar End -->
