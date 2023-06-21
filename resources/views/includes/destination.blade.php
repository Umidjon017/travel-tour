<!-- Destination Start -->
<div class="container-xxl py-5 destination" id="destination">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="section-title bg-white text-center text-primary px-3">Destination</h6>
            <h1 class="mb-5">Popular Destination</h1>
        </div>
        <div class="row g-3">
            <div class="col-lg-7 col-md-6">
                <div class="row g-3">
                    @foreach($destinationTL as $tl)
                    <div class="col-lg-12 col-md-12 wow zoomIn" data-wow-delay="0.1s">
                        <a class="position-relative d-block overflow-hidden" href="">
                            <img class="img-fluid" src="{{ Voyager::image($tl->top_left_image) }}" alt="">
                            <div class="bg-white text-danger fw-bold position-absolute top-0 start-0 m-3 py-1 px-2">{{ $tl->top_left_sale }}% OFF</div>
                            <div class="bg-white text-primary fw-bold position-absolute bottom-0 end-0 m-3 py-1 px-2"> {{ $tl->top_left_country_name }} </div>
                        </a>
                    </div>
                    @endforeach
                    @foreach($destinationL as $l)
                    <div class="col-lg-6 col-md-12 wow zoomIn" data-wow-delay="0.{{$loop->iteration+1}}s">
                        <a class="position-relative d-block overflow-hidden" href="">
                            <img class="img-fluid" src="{{ Voyager::image($l->left_image) }}" alt="">
                            <div class="bg-white text-danger fw-bold position-absolute top-0 start-0 m-3 py-1 px-2">{{ $l->left_sale }}% OFF</div>
                            <div class="bg-white text-primary fw-bold position-absolute bottom-0 end-0 m-3 py-1 px-2">{{ $l->left_country_name }}</div>
                        </a>
                    </div>
                    @endforeach
                </div>
            </div>
            @foreach($destinationR as $r)
            <div class="col-lg-5 col-md-6 wow zoomIn" data-wow-delay="0.{{$loop->iteration+2}}s" style="min-height: 350px;">
                <a class="position-relative d-block h-100 overflow-hidden" href="">
                    <img class="img-fluid position-absolute w-100 h-100" src="{{ Voyager::image($r->right_image) }}" alt="" style="object-fit: cover;">
                    <div class="bg-white text-danger fw-bold position-absolute top-0 start-0 m-3 py-1 px-2">{{ $r->right_sale }}% OFF</div>
                    <div class="bg-white text-primary fw-bold position-absolute bottom-0 end-0 m-3 py-1 px-2">{{ $r->right_country_name }}</div>
                </a>
            </div>
            @endforeach
        </div>
    </div>
</div>
<!-- Destination Start -->
