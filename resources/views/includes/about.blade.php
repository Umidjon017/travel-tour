<!-- About Start -->
<div class="container-xxl py-5" id="about">
    <div class="container">
        @foreach($aboutUs as $item)
        <div class="row g-5">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px;">
                <div class="position-relative h-100">
                    <img class="img-fluid position-absolute w-100 h-100" src="{{ Voyager::image($item->image) }}" alt="" style="object-fit: cover;">
                </div>
            </div>
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                <h6 class="section-title bg-white text-start text-primary pe-3"> {{ $sectionAboutUsName }} </h6>
{{--                <h1 class="mb-4">Welcome to <span class="text-primary">Tourist</span></h1>--}}
                <h1 class="mb-4"> {{ $item->title }} </h1>
                <p class="mb-4"> {{ $item->description_one }} </p>
                <p class="mb-4"> {{ $item->description_two }} </p>
                <div class="row gy-2 gx-4 mb-4">
                    @php($facilities = explode(',', $item->facilities))
                    @foreach($facilities as $facility)
                    <div class="col-sm-6">
                        <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i> {{ $facility }} </p>
                    </div>
                    @endforeach
                </div>
                <a class="btn btn-primary py-3 px-5 mt-2" href="">Read More</a>
            </div>
        </div>
        @endforeach
    </div>
</div>
<!-- About End -->
