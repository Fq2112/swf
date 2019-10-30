@extends('layouts.mst')
@section('title', 'Home | '.env('APP_TITLE'))
@push('styles')
    <link rel="stylesheet" href="{{asset('vendor/swiper/dist/css/swiper.min.css')}}">
    <link rel="stylesheet" href="{{asset('vendor/lightgallery/dist/css/lightgallery.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/ig-feed.css')}}">
    <link rel="stylesheet" href="{{asset('css/blog-swiper.css')}}">
    <style>
        .call-center:before {
            background: linear-gradient(to top, rgba(0, 0, 0, 0.5) 0%, rgba(0, 0, 0, 0.9) 100%),
            url({{asset('images/home/world_map.png')}});
            background-position: center;
            background-size: cover;
        }

        .call-center.bg1:before {
            background: linear-gradient(to top, rgba(105, 13, 16, 0.5) 0%, rgba(227, 27, 35, 0.9) 100%),
            url({{asset('images/home/installer.png')}});
            background-position: center;
            background-size: cover;
        }

        .lg-backdrop {
            z-index: 9999999;
        }

        .lg-outer {
            z-index: 10000000;
        }

        .lg-sub-html h4 {
            color: #eee;
        }

        .lg-sub-html p {
            color: #bbb;
        }
    </style>
@endpush
@section('content')
    <!-- slider -->
    <section class="home-slider">
        <div id="slider">
            <div class="fullwidthbanner-container">
                <div id="revolution-slider">
                    <ul>
                        <li class="slider-bg2" data-transition="fade" data-slotamount="7" data-masterspeed="500">
                            <img src="{{asset('images/slider/home1.jpg')}}" alt="">
                            <div class="tp-caption sfr stb custom-size-2 white tp-resizeme zindex"
                                 data-x="center" data-hoffset="-15" data-y="170" data-speed="300" data-start="1400"
                                 data-easing="easeInOut">Welcome to <strong class="strong-red">Our Site</strong>
                            </div>
                            <div class="tp-caption sfr stt custom-size-7 white tp-resizeme zindex"
                                 data-x="center" data-hoffset="-15" data-y="250" data-speed="300" data-start="1000"
                                 data-easing="easeInOut">Authorized Sole Distributor in <strong class="strong-red">Indonesia</strong>
                            </div>
                            <div class="tp-caption sfr stb text-center custom-size-8 white tp-resizeme zindex"
                                 data-x="center" data-hoffset="-15" data-y="320" data-speed="300" data-start="1800"
                                 data-easing="easeInOut">
                                <a class="btn btn-dark-red tp-resizeme" href="#about">
                                    <b style="text-transform: uppercase">Learn more&ensp;<i
                                                class="fa fa-search"></i></b></a>
                            </div>
                        </li>
                        <li class="slider-bg2" data-transition="fade" data-slotamount="7" data-masterspeed="500">
                            <img src="{{asset('images/slider/home2.jpg')}}" alt="">
                            <div class="tp-caption sfr stb custom-size-2 white tp-resizeme zindex"
                                 data-x="center" data-hoffset="-15" data-y="170" data-speed="300" data-start="1400"
                                 data-easing="easeInOut">Welcome to <strong class="strong-red">Our Site</strong>
                            </div>
                            <div class="tp-caption sfr stt custom-size-6 white tp-resizeme zindex"
                                 data-x="center" data-hoffset="-15" data-y="240" data-speed="300" data-start="1000"
                                 data-easing="easeInOut">Avery Dennison <strong class="strong-red">SWF</strong>
                            </div>
                            <div class="tp-caption sfr stb text-center custom-size-8 white tp-resizeme zindex"
                                 data-x="center" data-hoffset="-15" data-y="310" data-speed="300" data-start="1800"
                                 data-easing="easeInOut">
                                <a class="btn btn-dark-red tp-resizeme" href="{{route('show.product.overview')}}">
                                    <b style="text-transform: uppercase">Learn more&ensp;<i
                                                class="fa fa-search"></i></b></a>
                            </div>
                        </li>
                        <li class="slider-bg2" data-transition="fade" data-slotamount="7" data-masterspeed="500">
                            <img src="{{asset('images/slider/home3.jpg')}}" alt="">
                            <div class="tp-caption sfr stb custom-size-2 white tp-resizeme zindex" data-x="center"
                                 data-hoffset="-15" data-y="170" data-speed="300" data-start="1400"
                                 data-easing="easeInOut">
                                Welcome to <strong class="strong-red">Our Site</strong></div>
                            <div class="tp-caption sfr stt custom-size-6 white tp-resizeme zindex" data-x="center"
                                 data-hoffset="-15" data-y="240" data-speed="300" data-start="1000"
                                 data-easing="easeInOut">
                                SWF (<strong class="strong-red">S</strong>upreme <strong class="strong-red">W</strong>rap
                                <strong class="strong-red">F</strong>ilm)
                            </div>
                            <div class="tp-caption sfr stb text-center custom-size-8 white tp-resizeme zindex"
                                 data-x="center" data-hoffset="-15" data-y="310" data-speed="300" data-start="1800"
                                 data-easing="easeInOut">
                                <a class="btn btn-dark-red tp-resizeme" href="#blog">
                                    <b style="text-transform: uppercase">Learn more&ensp;<i
                                                class="fa fa-search"></i></b></a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- about -->
    <section id="about" class="features-3">
        <h2>Our <strong>Company</strong></h2>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h3 data-aos="fade-right">Premier Autostyling</h3>
                    <p data-aos="fade-right" align="justify">We're the one and only authorized distributor of
                        <strong>Avery Dennison</strong> SWF (Supreme Wrap Film) in <strong>Indonesia</strong>.</p>
                    <p data-aos="fade-down" align="justify" class="text">The need for <strong>wrap film</strong>
                        products is now becoming a new trend that continues to grow among premium, luxury, sporty,
                        and dandy car lovers in Indonesia to maintain the durability of car paint and make the car
                        look more luxurious. <strong>Premier Autostyling</strong> is the <strong>Authorized Sole
                            Distributor</strong> of SWF brand <strong>Avery Dennison</strong> in Indonesia who has
                        been appointed directly by the Principal based in Singapore to be able to distribute
                        optimally through cooperation with dealers in cities that have a large number of
                        product-user markets, such as Jakarta, Bandung, Semarang, Yogyakarta, Denpasar, Banjarmasin,
                        Balikpapan, Makassar, Medan, Palembang.</p>
                </div>
                <div data-aos="fade-left" class="col-md-6">
                    <img src="{{asset('images/home/about.png')}}" alt="">
                </div>
            </div>
            <div data-aos="fade-up" class="row text-center" style="padding: 3em 0 0 0;">
                <div class="col-lg-12">
                    <a href="javascript:void(0)" data-toggle="modal" data-target="#swfModal"
                       class="btn btn-dark-red ld ld-breath"><b>LEARN MORE&ensp;<i class="fa fa-search"></i></b></a>
                    <div class="modal dark fade" id="swfModal" tabindex="-1" role="dialog">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    <img src="{{asset('images/home/about2.png')}}" alt="Avery Dennison SWF"
                                         class="img-responsive">
                                    <h4 class="modal-title" style="text-align: left;margin: .5em auto">
                                        Premium Vehicle Wrapping Film</h4>
                                    <p align="justify" style="font-size: 16px">Avery Dennison Supreme Wrapping Film is a
                                        premium cast, coloured vehicle wrap film with a 12 years durability. It is
                                        available in 110+ colours and finishes and is designed for vehicle detailing and
                                        full wraps providing excellent opacity to hide high-contrast surfaces.</p>
                                    <p align="justify" style="font-size: 16px">Supreme is easy to position and apply as
                                        well remove thanks to the Easy Apply adhesive with repositionable and slideable
                                        (RS) technology. Supreme offers excellent 3D conformability on the most
                                        demanding of recessed areas.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- why choose us -->
    <section class="block-section-4">
        <div class="container">
            <h2 data-aos="fade-right" class="text-heading text-center">Why <strong class="pri-color">Choose Us
                    ?</strong></h2>
            <p data-aos="fade-down" class="text-heading text-center">Avery Dennison Corporation is a global manufacturer
                and distributor of pressure-sensitive adhesive materials (such as self-adhesive labels), apparel
                branding labels and tags, RFID inlays, and specialty medical products. The company is a member of the
                Fortune 500 and is headquartered in Glendale, California that employs approximately 30,000 employees in
                more than 50 countries.</p>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="features-5">
                        <div data-aos="zoom-out" class="text-center">
                            <i class="fa fa-shield-alt"></i>
                        </div>
                        <h2 data-aos="fade-down">Durability Guarantee</h2>
                        <p data-aos="fade-down">Avery Dennison SWF has the durability for product quality
                            between 3 to 12 years since the installation on the car, depends on the usage level.</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="features-5">
                        <div data-aos="zoom-out" class="text-center">
                            <i class="fa fa-drafting-compass"></i>
                        </div>
                        <h2 data-aos="fade-down">Printable & Conformable</h2>
                        <p data-aos="fade-down">Avery Dennison SWF has the excellent of printability and it's
                            exceptional 3D conformability on concave and convex shapes including deep channels.</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="features-5">
                        <div data-aos="zoom-out" class="text-center">
                            <i class="fa fa-tools"></i>
                        </div>
                        <h2 data-aos="fade-down">Easy Installation</h2>
                        <p data-aos="fade-down">Avery Dennison SWF has the advantage because it's repositionability and
                            slideability adhesive technology with long term removability.</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="features-5">
                        <div data-aos="zoom-out" class="text-center">
                            <i class="fa fa-palette"></i>
                        </div>
                        <h2 data-aos="fade-down">Various Colors & Designs</h2>
                        <p data-aos="fade-down">Avery Dennison SWF provides more than 100 combinations of colored film
                            and protective layer in one-piece construction.</p>
                    </div>
                </div>
            </div>
            <div data-aos="fade-up" class="row text-center" style="padding: 3em 0 5em 0;">
                <div class="col-lg-12">
                    <a href="{{route('show.product.overview')}}" class="btn btn-dark-red ld ld-breath">
                        <b>LEARN MORE&ensp;<i class="fa fa-search"></i></b></a>
                </div>
            </div>
        </div>
    </section>

    <!-- certified-installers -->
    <section class="no-padding">
        <div class="row">
            <!-- find an installers -->
            <div class="col-md-6">
                <div class="row">
                    <div class="call-center">
                        <div class="left-call">
                            <img data-aos="fade-up" src="{{asset('images/layer-slider/call-center.png')}}" alt="">
                        </div>
                        <div class="right-call">
                            <h2 data-aos="fade-right">Do you need a certified installer ?</h2>
                            <p data-aos="fade-down" align="justify">We've been set up a network of approved installers
                                with a high-performance and responsive service.</p>
                            <a data-aos="fade-up" href="{{route('show.installers')}}" class="btn btn-cars ld ld-breath">
                                <b><i class="fa fa-map-marked-alt"></i> FIND ONE</b></a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- become an installers -->
            <div class="col-md-6">
                <div class="row">
                    <div class="call-center bg1">
                        <div class="right-call padd-left">
                            <h2 data-aos="fade-left">Do you want to be a certified installer ?</h2>
                            <p data-aos="fade-down" align="justify">To integrate the certified installers network, we
                                will evaluate your technical skills and knowledge.</p>
                            <a data-aos="fade-up" href="javascript:void(0)" data-toggle="modal"
                               data-target="#certModal" class="btn btn-cars color-white ld ld-breath">
                                <b><i class="fa fa-paper-plane"></i> APPLY NOW</b></a>
                            <div class="modal dark fade" id="certModal" tabindex="-1" role="dialog"
                                 aria-labelledby="certModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg" style="width: 40%" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                            <h4 class="modal-title" id="certModalLabel">Certification Request</h4>
                                        </div>
                                        <form method="post" action="{{route('submit.certification')}}">
                                            @csrf
                                            <div class="modal-body">
                                                <div class="row form-group">
                                                    <div class="col-md-6">
                                                        <label class="form-control-label" for="fname">First Name
                                                            <span
                                                                    class="required">*</span></label>
                                                        <div class="input-group">
                                                        <span class="input-group-addon"><i
                                                                    class="fa fa-user"></i></span>
                                                            <input id="fname" type="text" class="form-control"
                                                                   name="fname"
                                                                   placeholder="First name" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label class="form-control-label" for="lname">Last Name
                                                            <span
                                                                    class="required">*</span></label>
                                                        <div class="input-group">
                                                        <span class="input-group-addon"><i
                                                                    class="fa fa-user"></i></span>
                                                            <input id="lname" type="text" class="form-control"
                                                                   name="lname"
                                                                   placeholder="Last name" required>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col-md-12">
                                                        <label class="form-control-label" for="email">Email <span
                                                                    class="required">*</span></label>
                                                        <div class="input-group">
                                                        <span class="input-group-addon"><i
                                                                    class="fa fa-envelope"></i></span>
                                                            <input id="email" type="email" class="form-control"
                                                                   name="email"
                                                                   placeholder="Email" required>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col-md-12">
                                                        <label class="form-control-label" for="phone">Phone <span
                                                                    class="required">*</span></label>
                                                        <div class="input-group">
                                                        <span class="input-group-addon"><i
                                                                    class="fa fa-phone"></i></span>
                                                            <input placeholder="Phone number" type="text"
                                                                   maxlength="13"
                                                                   class="form-control"
                                                                   name="phone"
                                                                   onkeypress="return numberOnly(event, false)"
                                                                   required>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col-md-4">
                                                        <label class="form-control-label" for="type">Certification
                                                            Type
                                                            <span class="required">*</span></label>
                                                        <p>
                                                            <input type="radio" id="ppf" name="type" value="PPF"
                                                                   required>
                                                            <label class="form-control-label" for="ppf">PPF</label>&ensp;
                                                            <input type="radio" id="wrap" name="type" value="Wrap">
                                                            <label class="form-control-label"
                                                                   for="wrap">Wrap</label>
                                                        </p>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <label class="form-control-label" for="company">Company
                                                            <span
                                                                    class="required">*</span></label>
                                                        <div class="input-group">
                                                        <span class="input-group-addon"><i
                                                                    class="fa fa-building"></i></span>
                                                            <input id="company" type="text" class="form-control"
                                                                   name="company"
                                                                   placeholder="Company name" required>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col-md-12">
                                                        <label class="form-control-label"
                                                               for="country">Country</label>
                                                        <div class="input-group">
                                                        <span class="input-group-addon"><i
                                                                    class="fa fa-flag"></i></span>
                                                            <select id="country" class="form-control"
                                                                    name="country">
                                                                <option value="" selected>Rather not say</option>
                                                                @foreach($countries as $row)
                                                                    <option value="{{$row->name}}">{{$row->name}}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-grey" data-dismiss="modal">
                                                    Close
                                                </button>
                                                <button type="submit" class="btn btn-dark-red">Submit</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="left-call">
                            <img data-aos="fade-up" src="{{asset('images/layer-slider/call-center-2.png')}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- our-blog -->
    <section id="blog" class="block-section-4">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 data-aos="fade-right" class="text-heading text-center">Our <strong>Blog</strong></h2>
                    <p data-aos="fade-down" class="text-heading text-center bot-40">We're also provide you with a recent
                        news related to wrap film or any automobile things. Click SHOW MORE button below if you don't
                        wanna miss anything about it!</p>
                </div>
            </div>
            <div data-aos="fade-down" class="row">
                <div class="col-md-12">
                    <div class="blog-slider">
                        <div class="blog-slider__wrp swiper-wrapper">
                            @foreach($blog as $row)
                                @php
                                    $date = \Carbon\Carbon::parse($row->created_at);
                                    $url = route('detail.blog', ['author' => $row->getUser->username,
                                    'y' => $date->format('Y'), 'm' => $date->format('m'), 'd' => $date->format('d'),
                                    'title' => $row->title_uri]);
                                @endphp
                                <div class="blog-slider__item swiper-slide">
                                    <div class="blog-slider__img">
                                        <img src="{{asset('storage/blog/thumbnail/'.$row->thumbnail)}}" alt="Thumbnail">
                                    </div>
                                    <div class="blog-slider__content">
                                        <span class="blog-slider__code">{{$date->format('F d, Y')}}<br>
                                            <sub>by <a href="{{route('detail.blog', ['author' => $row->getUser->username])}}">{{$row->getUser->username}}</a></sub>
                                        </span>
                                        <div class="blog-slider__title">{{$row->title}}</div>
                                        <div class="blog-slider__text">{!!\Illuminate\Support\Str::words($row->content, 20, '...')!!}</div>
                                        <a href="{{$url}}" class="blog-slider__button">READ MORE</a>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div class="blog-slider__pagination"></div>
                    </div>
                </div>
            </div>
            <div data-aos="fade-up" class="row text-center" style="padding: 3em 0 3em 0;">
                <div class="col-lg-12">
                    <a href="{{route('show.blog')}}" class="btn btn-dark-red ld ld-breath">
                        <b><i class="fa fa-blog"></i> SHOW MORE</b></a>
                </div>
            </div>
        </div>
    </section>

    <!-- instagram feed -->
    <section class="no-padding">
        <div id="ig-feed" class="owl-carousel">
            @foreach($posts as $post)
                <div data-aos="zoom-out" class="item content-area"
                     data-src="{{$post->images->standard_resolution->url}}"
                     data-sub-html="<h4><a href='{{$post->link}}' target='_blank' class='ig-link'><i class='fa fa-external-link-alt'></i>&ensp;ORIGINAL POST</a></h4><p style='color: #fff;'>{{\Illuminate\Support\Str::words($post->caption->text, 20, '...')}}</h4>">
                    <img src="{{$post->images->standard_resolution->url}}" alt="{{$post->user->username}}'s Feed">
                    <div class="custom-overlay">
                        <div class="custom-text">
                            <table width="100%">
                                <tr>
                                    <td class="likes">{{$post->likes->count}}</td>
                                    <td class="comments">{{$post->comments->count}}</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div data-aos="fade-up" class="row text-center" style="padding: 3em 0 6em 0;">
            <div class="col-lg-12">
                <a href="https://instagram.com/averydennison.id" target="_blank" class="btn btn-dark-red ld ld-breath">
                    <b><i class="fab fa-instagram"></i> averydennison.id</b></a>
            </div>
        </div>
    </section>
@endsection
@push('scripts')
    <script src="{{asset('vendor/swiper/dist/js/swiper.min.js')}}"></script>
    <script src="{{asset('vendor/lightgallery/lib/picturefill.min.js')}}"></script>
    <script src="{{asset('vendor/lightgallery/dist/js/lightgallery-all.min.js')}}"></script>
    <script src="{{asset('vendor/lightgallery/modules/lg-video.min.js')}}"></script>
    <script>
        $(function () {
            window.mobilecheck() ? $("#certModal .modal-dialog").css('width', 'unset') :
                $("#certModal .modal-dialog").css('width', '40%');

            $("#country").select2({
                placeholder: "-- Choose --",
                allowClear: true,
                width: '100%',
                dropdownParent: $('#certModal .modal-content')
            });

            $('.owl-carousel').owlCarousel({
                loop: false,
                rewind: true,
                nav: false,
                dots: false,
                autoHeight: true,
                autoplay: true,
                items: 5,
                stage: 1,
                rtl: false,
                navText: ['<i class="fa fa-caret-left" aria-hidden="true"></i>', '<i class="fa fa-caret-right" aria-hidden="true"></i>'],
                responsive: {
                    0: {
                        items: 1,
                    },
                    320: {
                        items: 3,
                    },
                    768: {
                        items: 5,
                    }
                }
            });

            $('#ig-feed').lightGallery({selector: '.content-area'});
        });

        var swiper = new Swiper('.blog-slider', {
            spaceBetween: 30,
            effect: 'fade',
            loop: true,
            mousewheel: {
                invert: false,
            },
            // autoHeight: true,
            pagination: {
                el: '.blog-slider__pagination',
                clickable: true,
            }
        });

        @if(session('certification'))
        swal('Successfully submitted!', '{{session('certification')}}', 'success');
        @endif
    </script>
@endpush
