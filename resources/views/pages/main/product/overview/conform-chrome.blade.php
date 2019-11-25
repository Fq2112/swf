@extends('layouts.mst')
@section('title', 'Product Overview: Conform Chrome | '.env('APP_TITLE'))
@push('styles')
    <link rel="stylesheet" href="{{asset('vendor/lightgallery/dist/css/lightgallery.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap-tabs-responsive.css')}}">
    <link rel="stylesheet" href="{{asset('css/play-button.css')}}">
    <link rel="stylesheet" href="{{asset('css/ig-feed.css')}}">
    <style>
        .breadcrumbs.conform-chrome {
            background-image: url({{asset('images/slider/conform-chrome3.jpg')}});
        }

        .content-area {
            position: relative;
            cursor: pointer;
            overflow: hidden;
        }

        .custom-overlay {
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            text-align: center;
            background: rgba(0, 0, 0, 0.7);
            opacity: 0;
            transition: all 400ms ease-in-out;
            height: 100%;
        }

        .custom-overlay:hover {
            opacity: 1;
        }

        .custom-text {
            position: absolute;
            top: 50%;
            left: 10px;
            right: 10px;
            transform: translateY(-50%);
        }

        .content-area img {
            margin: 0 auto;
            transition: transform .5s ease;
        }

        .content-area:hover img {
            transform: scale(1.2);
        }

        #myTab li.active .badge {
            background: #E31B23;
            color: #fff;
        }

        #myTabContent table a, #myTabContent ul li a {
            color: #bbb;
            text-decoration: none;
            transition: all .3s ease-in-out;
        }

        #myTabContent table a:hover, #myTabContent table a:focus, #myTabContent table a:active,
        #myTabContent ul li a:hover, #myTabContent ul li a:focus, #myTabContent ul li a:active {
            color: #E31B23;
            font-weight: 600;
            text-decoration: none;
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

        .ig-feed .custom-text h4 {
            color: #E31B23;
            text-transform: uppercase;
            transition: all .5s ease-in-out;
        }

        .ig-feed .content-area:hover .custom-text h4 {
            color: #fff;
        }
    </style>
@endpush
@section('content')
    <div class="breadcrumbs conform-chrome">
        <div class="breadcrumbs-overlay"></div>
        <div class="page-title">
            <h2>Our Product</h2>
            <p>Conform Chrome, semi-conformable films for color change.</p>
        </div>
    </div>

    <div class="page-content page-sidebar">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div data-aos="fade-down" class="content-area">
                        <img id="chrome-switch" src="{{asset('images/product-overview/chrome-overview1.png')}}"
                             class="img-responsive" alt="Conform Chrome" width="65%">
                        <div class="custom-overlay">
                            <div class="custom-text">
                                <svg id="play-conform-chrome" class="play" version="1.1"
                                     xmlns="http://www.w3.org/2000/svg"
                                     xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" height="100px"
                                     width="100px" viewBox="0 0 100 100" enable-background="new 0 0 100 100"
                                     xml:space="preserve">
                                    <path class="stroke-solid" fill="none" stroke="#E31B23"
                                          d="M49.9,2.5C23.6,2.8,2.1,24.4,2.5,50.4C2.9,76.5,24.7,98,50.3,97.5c26.4-0.6,47.4-21.8,47.2-47.7C97.3,23.7,75.7,2.3,49.9,2.5"/>
                                    <path class="stroke-dotted" fill="none" stroke="#E31B23"
                                          d="M49.9,2.5C23.6,2.8,2.1,24.4,2.5,50.4C2.9,76.5,24.7,98,50.3,97.5c26.4-0.6,47.4-21.8,47.2-47.7C97.3,23.7,75.7,2.3,49.9,2.5"/>
                                    <path class="icon" fill="#E31B23"
                                          d="M38,69c-1,0.5-1.8,0-1.8-1.1V32.1c0-1.1,0.8-1.6,1.8-1.1l34,18c1,0.5,1,1.4,0,1.9L38,69z"/></svg>
                            </div>
                        </div>
                    </div>
                    <h4 data-aos="fade-down" style="color: #eee">Avery Dennison® Conform Chrome</h4>
                    <p data-aos="fade-down" align="justify" style="color: #bbb;margin-bottom: 20px">Allow the Avery
                        Dennison conform chrome to add immediate impact to your next vehicle wrap project. Films
                        designed to add special effects and a sporty touch to vehicles.</p>
                    <p data-aos="fade-down" align="justify" style="color: #bbb;margin-bottom: 20px">Avery Dennison
                        Conform Accent Chrome is a premium quality specialty film designed for use in vehicle wraps and
                        graphics markets where high-end chrome accents are desired. The patented Avery Dennison™ Easy
                        Apply RS feature allows for faster positioning, bubble-free application, and long-term
                        removability.</p>
                    <blockquote data-aos="fade-down">Striking accents, premium look, and
                        immediate impact.
                    </blockquote>
                    <p data-aos="fade-down" align="justify" style="color: #bbb;margin-bottom: 20px">Create a real chrome
                        effect with fast and easy application. Make your design shine with mirror sharp premium chrome
                        detailing. Now in a wider size and 3 new colors; Rose Gold, Violet and Matte Silver.</p>
                    <p data-aos="fade-down" align="justify" style="color: #bbb;margin-bottom: 20px"> Conform Chrome
                        Series is quick and easy to apply. Bring your design to the next level with sharp, eye-popping
                        chrome accents and details. The mirror-like finish of glossy Conform Chrome film creates a
                        distinctive and premium result - perfect for striking accents and special effects.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- stellar parallax -->
    <section class="stellar-parallax no-padding">
        <div class="third" data-stellar-background-ratio="0.5" style="background-image: url({{asset('images/stellar-parallax/conform-chrome.jpeg')}});">
            <div class="stellar-overlay"></div>
            <h1>CONFORM CHROME<span style="color: #e31b23">&trade;</span> SERIES<br><sub>Striking accents, premium look, and immediate impact.</sub>
            </h1>
        </div>
    </section>

    <div class="page-content page-sidebar">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div data-aos="fade-down" class="bs-example bs-example-tabs" role="tabpanel"
                         data-example-id="togglable-tabs">
                        <ul id="myTab" class="nav nav-tabs nav-tabs-responsive" role="tablist">
                            <li role="presentation" class="active">
                                <a href="#kf" id="kf-tab" role="tab" data-toggle="tab" aria-controls="kf"
                                   aria-expanded="true"><span class="text">FEATURES</span></a>
                            </li>
                            <li role="presentation" class="next">
                                <a href="#kb" role="tab" id="kb-tab" data-toggle="tab" aria-controls="kb">
                                    <span class="text">BENEFITS</span>
                                </a>
                            </li>
                            <li role="presentation" class="next">
                                <a href="#cc" id="cc-tab" role="tab" data-toggle="tab" aria-controls="cc"
                                   aria-expanded="true"><span class="text">COLORS</span></a>
                            </li>
                            <li role="presentation" class="next">
                                <a href="#ta" role="tab" id="ta-tab" data-toggle="tab" aria-controls="ta">
                                    <span class="text">APPLICATIONS</span>
                                </a>
                            </li>
                            <li role="presentation">
                                <a href="#download" role="tab" id="download-tab" data-toggle="tab"
                                   aria-controls="download">
                                    <span class="text">DOWNLOADS</span>
                                </a>
                            </li>
                        </ul>
                        <div id="myTabContent" class="tab-content">
                            <div role="tabpanel" class="tab-pane fade in active" id="kf"
                                 aria-labelledby="kf-tab" style="border: none">
                                <ul align="justify">
                                    <li>Up to 3 year durability, 142 micron film.</li>
                                    <li>UV, temperature, humidity, and salt-spray resistance.</li>
                                    <li>Very high gloss semi-conformable film.</li>
                                    <li>Suitable for flat, concave and convex surfaces.</li>
                                    <li>Features Easy Apply&trade;, repositionability and slideability adhesive
                                        technology
                                        with long term removability.
                                    </li>
                                    <li>Available in 1220mm width and variable roll lengths.</li>
                                </ul>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="kb"
                                 aria-labelledby="kb-tab" style="border: none">
                                <ul align="justify">
                                    <li>Wider size film for more design combinations with one roll</li>
                                    <li>Faster installation and higher-quality results: Easy ApplyRS™ technology makes
                                        the film easy to handle, repositionable and slidable while applying enabling up
                                        to 25% application time savings
                                    </li>
                                    <li>Long Term Removable- easy and clean removal over the long term</li>
                                </ul>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="cc"
                                 aria-labelledby="cc-tab" style="border: none">
                                <div class="ig-feed owl-carousel">
                                    @foreach($data as $color)
                                        <div data-aos="fade-down" class="item content-area"
                                             data-src="{{asset('storage/colors/'.$color->file)}}"
                                             data-sub-html="<h4>{{$color->code}}</h4><p style='color: #fff;'>{{$color->name}}</p>">
                                            <img src="{{asset('storage/colors/'.$color->file)}}"
                                                 alt="{{$color->code}}">
                                            <div class="custom-overlay">
                                                <div class="custom-text">
                                                    <h4>{{$color->code}}</h4>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="ta"
                                 aria-labelledby="ta-tab" style="border: none">
                                <ul align="justify">
                                    <li>Maximum visual impact - use also in combination with other wrapping
                                        films (Supreme Wrapping™ Film or MPI™ 1105 Wrapping Films) – to create
                                        accents and special effects on or around
                                    </li>
                                    <li>Transforming and highlight mirrors and wings, mild curves</li>
                                    <li>Avery Dennison does not recommend the use of Conform Chrome for full car
                                        wraps or covering vehicle proximity sensors.
                                    </li>
                                </ul>
                                <img src="{{asset('images/product-overview/chrome-overlaminate.png')}}"
                                     class="img-responsive" alt="Recommended Overlaminate">
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="download"
                                 aria-labelledby="download-tab" style="border: none">
                                <ul align="justify">
                                    <li>
                                        <a href="{{asset('storage/datasheet/conform-chrome/po-eu-conform-chrome-en.pdf')}}"
                                           data-toggle="tooltip" title="Click here to download!" data-placement="right">
                                            Product Overview Avery Dennison® Conform Chrome Series</a></li>
                                    <li>
                                        <a href="{{asset('storage/datasheet/conform-chrome/ds-eu-avery-dennison-conform-chrome-en.pdf')}}"
                                           data-toggle="tooltip" title="Click here to download!" data-placement="right">
                                            Conform Chrome</a></li>
                                    <li>
                                        <a href="{{asset('storage/datasheet/conform-chrome/pds-sf-100-conform-chrome-series.pdf')}}"
                                           data-toggle="tooltip" title="Click here to download!" data-placement="right">
                                            Conform Chrome Specialty Film</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div data-aos="fade-down" class="row text-center" style="padding: 0 0 6em 0;">
                <div class="col-lg-12">
                    <a href="{{route('show.gallery')}}" class="btn btn-dark-red">
                        <b><i class="fa fa-photo-video"></i>&ensp;MORE VIDEOS</b></a>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
    <script src="{{asset('vendor/lightgallery/lib/picturefill.min.js')}}"></script>
    <script src="{{asset('vendor/lightgallery/dist/js/lightgallery-all.min.js')}}"></script>
    <script src="{{asset('vendor/lightgallery/modules/lg-video.min.js')}}"></script>
    <script>
        $(function () {
            $("#kb-tab").click();
            $("#kf-tab").click();

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
                        items: 4,
                    },
                    768: {
                        items: 6,
                    }
                }
            });

            $('#ig-feed').lightGallery({selector: '.content-area'});
        });

        var $img = $(".conform-chrome"), images = ['conform-chrome1.jpg', 'conform-chrome2.jpg', 'conform-chrome3.jpg'],
            index = 0, maxImages = images.length - 1, timer = setInterval(function () {
                var currentImage = images[index];
                index = (index == maxImages) ? 0 : ++index;
                $img.fadeOut("slow", function () {
                    $img.css("background-image", 'url({{asset('images/slider')}}/' + currentImage + ')');
                    $img.fadeIn("slow");
                });
            }, 5000),

            $img_chrome = $("#chrome-switch"), images_chrome = ['chrome-overview2.png', 'chrome-overview1.png'],
            index_chrome = 0, maxImages_chrome = images_chrome.length - 1, timer_chrome = setInterval(function () {
                var currentImage_chrome = images_chrome[index_chrome];
                index_chrome = (index_chrome == maxImages_chrome) ? 0 : ++index_chrome;
                $img_chrome.fadeOut("slow", function () {
                    $img_chrome.attr("src", '{{asset('images/product-overview')}}/' + currentImage_chrome);
                    $img_chrome.fadeIn("slow");
                });
            }, 5000);

        $(document).on('show.bs.tab', '.nav-tabs-responsive [data-toggle="tab"]', function (e) {
            var $target = $(e.target);
            var $tabs = $target.closest('.nav-tabs-responsive');
            var $current = $target.closest('li');
            var $parent = $current.closest('li.dropdown');
            $current = $parent.length > 0 ? $parent : $current;
            var $next = $current.next();
            var $prev = $current.prev();
            var updateDropdownMenu = function ($el, position) {
                $el
                    .find('.dropdown-menu')
                    .removeClass('pull-xs-left pull-xs-center pull-xs-right')
                    .addClass('pull-xs-' + position);
            };

            $tabs.find('>li').removeClass('next prev');
            $prev.addClass('prev');
            $next.addClass('next');

            updateDropdownMenu($prev, 'left');
            updateDropdownMenu($current, 'center');
            updateDropdownMenu($next, 'right');
        });

        $('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
            setTimeout(function () {
                $('.use-nicescroll').getNiceScroll().resize()
            }, 600);
        });

        $('#play-conform-chrome').on('click', function () {
            $(this).lightGallery({
                dynamic: true,
                dynamicEl: [
                    {
                        "src": 'https://youtu.be/qd1QvnsvCto',
                        'thumb': 'https://youtu.be/qd1QvnsvCto',
                    },
                    {
                        "src": 'https://youtu.be/QeLJkYttvHY',
                        'thumb': 'https://youtu.be/QeLJkYttvHY',
                    },
                    {
                        "src": 'https://youtu.be/i7Nw9ig1Tik',
                        'thumb': 'https://youtu.be/i7Nw9ig1Tik',
                    }]
            });
        });
    </script>
@endpush
