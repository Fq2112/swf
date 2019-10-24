@extends('layouts.mst')
@section('title', 'Home | '.env('APP_TITLE'))
@push('styles')
@endpush
@section('content')
<!-- revolution slider begin -->
<section class="home-slider">
    <div id="slider">
        <div class="fullwidthbanner-container">
            <div id="revolution-slider">
                <ul>
                    <li class="slider-bg2" data-transition="fade" data-slotamount="7" data-masterspeed="500">
                        <img src="{{asset('images/slider/car-bg-4.jpg')}}" alt="">
                        <div class="tp-caption sfr stb custom-size-2 white tp-resizeme zindex"
                             data-x="center"
                             data-hoffset="-15"
                             data-y="170"
                             data-speed="300"
                             data-start="1400"
                             data-easing="easeInOut">
                            Find Your <strong class="strong-red">Dream Car</strong>
                        </div>
                        <div class="tp-caption sfr stt custom-size-6 white tp-resizeme zindex"
                             data-x="center"
                             data-hoffset="-15"
                             data-y="250"
                             data-speed="300"
                             data-start="1000"
                             data-easing="easeInOut">
                            Welcome To Carspot
                        </div>
                        <div class="tp-caption sfr stb text-center custom-size-8 white tp-resizeme zindex"
                             data-x="center"
                             data-hoffset="-15"
                             data-y="320"
                             data-speed="300"
                             data-start="1800"
                             data-easing="easeInOut">
                            <p>With over 10 years of experience helping businesses to find<br>
                                comprehensive solutions.</p>
                        </div>
                    </li>
                    <li class="slider-bg2" data-transition="fade" data-slotamount="7" data-masterspeed="500">
                        <img src="{{asset('images/slider/car-bg.jpg')}}" alt="">
                        <div class="tp-caption sfr stb custom-size-2 white tp-resizeme zindex"
                             data-x="center"
                             data-hoffset="-15"
                             data-y="170"
                             data-speed="300"
                             data-start="1400"
                             data-easing="easeInOut">
                            Find Your Dream Car
                        </div>
                        <div class="tp-caption sfr stt custom-size-6 white tp-resizeme zindex"
                             data-x="center"
                             data-hoffset="-15"
                             data-y="240"
                             data-speed="300"
                             data-start="1000"
                             data-easing="easeInOut">
                            Thousand Of <strong class="strong-red">Cars</strong> Of Your Choice
                        </div>
                        <div class="tp-caption sfr stb text-center custom-size-8 white tp-resizeme zindex"
                             data-x="center"
                             data-hoffset="-15"
                             data-y="310"
                             data-speed="300"
                             data-start="1800"
                             data-easing="easeInOut">
                            <p>With over 10 years of experience helping businesses to find<br>
                                comprehensive solutions.</p>
                        </div>
                    </li>

                </ul>
            </div>
        </div>
    </div>
</section>
@endsection
@push('scripts')
@endpush
