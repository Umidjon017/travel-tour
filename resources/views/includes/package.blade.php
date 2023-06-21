<!-- Package Start -->
<div class="container-xxl py-5" id="package">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="section-title bg-white text-center text-primary px-3">Packages</h6>
            <h1 class="mb-5">Awesome Packages</h1>
        </div>
        <div class="row g-4 justify-content-center">
            @foreach($packages as $package)
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.{{$loop->iteration+1}}s">
                <div class="package-item">
                    <div class="overflow-hidden">
                        <img class="img-fluid" src="{{ Voyager::image($package->image) }}" alt="">
                    </div>
                    <div class="d-flex border-bottom">
                        <small class="flex-fill text-center border-end py-2"><i class="fa fa-map-marker-alt text-primary me-2"></i> {{ $package->country_name }} </small>
                        <small class="flex-fill text-center border-end py-2"><i class="fa fa-calendar-alt text-primary me-2"></i> {{ $package->period }}</small>
                        <small class="flex-fill text-center py-2"><i class="fa fa-user text-primary me-2"></i> {{ $package->how_many_people }}</small>
                    </div>
                    <div class="text-center p-4">
                        <h3 class="mb-0">$ {{ $package->price }}.00</h3>
                        <div class="mb-3">
                            <small class="fa fa-star text-primary"></small>
                            <small class="fa fa-star text-primary"></small>
                            <small class="fa fa-star text-primary"></small>
                            <small class="fa fa-star text-primary"></small>
                            <small class="fa fa-star text-primary"></small>
                        </div>
                        <p> {{ $package->description }} </p>
                        <div class="d-flex justify-content-center mb-2">
                            <a href="#" class="btn btn-sm btn-primary px-3 border-end" style="border-radius: 30px 0 0 30px;">Read More</a>
                            <a href="#" class="btn btn-sm btn-primary px-3" style="border-radius: 0 30px 30px 0;">Book Now</a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
<!-- Package End -->
