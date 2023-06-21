<!-- Service Start -->
<div class="container-xxl py-5" id="service">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="section-title bg-white text-center text-primary px-3">Services</h6>
            <h1 class="mb-5"> {{ ucwords($sectionOurServiceName) }} </h1>
        </div>
        <div class="row g-4">
            @foreach($services as $service)
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.{{$loop->iteration+1}}s">
                <div class="service-item rounded pt-3">
                    <div class="p-4">
                        {!! $service->icon !!}
                        <h5> {{ $service->title }} </h5>
                        <p> {{ $service->description }} </p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
<!-- Service End -->
