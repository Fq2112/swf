@extends('layouts.mst')
@section('title', 'Product Overview: Supreme Wrapping™ Films | '.env('APP_TITLE'))
@push('styles')
    <link rel="stylesheet" href="{{asset('vendor/lightgallery/dist/css/lightgallery.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap-tabs-responsive.css')}}">
    <link rel="stylesheet" href="{{asset('css/play-button.css')}}">
    <link rel="stylesheet" href="{{asset('css/ig-feed.css')}}">
    <style>
        .breadcrumbs.supreme-wrapping-films {
            background-image: url({{asset('images/slider/supreme-wrapping-films3.jpg')}});
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

        #ig-feed .custom-text h4 {
            color: #E31B23;
            text-transform: uppercase;
            transition: all .5s ease-in-out;
        }

        #ig-feed .content-area:hover .custom-text h4 {
            color: #fff;
        }
    </style>
@endpush
@section('content')
    <div class="breadcrumbs supreme-wrapping-films">
        <div class="breadcrumbs-overlay"></div>
        <div class="page-title">
            <h2>Our Product</h2>
            <p>Supreme Wrap&trade; Care, films with 3D exceptional conformability for color change.</p>
        </div>
        <ul class="crumb">
            <li><a href="{{route('home')}}"><i class="fa fa-home"></i></a></li>
            <li><a href="{{route('home')}}"><i class="fa fa-angle-double-right"></i> Home</a></li>
            <li><i class="fa fa-angle-double-right"></i></li>
            <li><a href="{{route('show.blog')}}"><i class="fa fa-blog"></i></a></li>
            <li><a href="{{url()->current()}}"><i class="fa fa-car"></i></a></li>
            <li><a href="{{url()->current()}}"><i class="fa fa-angle-double-right"></i> Overview</a></li>
            <li><a href="#" onclick="goToAnchor()"><i class="fa fa-angle-double-right"></i> Supreme Wrap&trade; Care</a>
            </li>
        </ul>
    </div>

    <div class="page-content page-sidebar">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div data-aos="zoom-out" class="content-area">
                        <img id="swf-switch" src="{{asset('images/product-overview/swf-overview1.png')}}"
                             class="img-responsive" alt="Supreme Wrap&trade; Care">
                        <div class="custom-overlay">
                            <div class="custom-text">
                                <svg id="play-supreme-wrapping-films" class="play" version="1.1"
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
                                    <li>Features Easy ApplyTM, repositionability and slideability adhesive technology
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
                                <div id="ig-feed" class="owl-carousel">
                                    <div data-aos="zoom-out" class="item content-area"
                                         data-src="{{asset('images/product-overview/colors/cc/001.png')}}"
                                         data-sub-html="<h4>CC 001</h4><p style='color: #fff;'>Conform Chrome Silver</p>">
                                        <img src="{{asset('images/product-overview/colors/cc/001.png')}}" alt="CC 001">
                                        <div class="custom-overlay">
                                            <div class="custom-text">
                                                <h4>CC 001</h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div data-aos="zoom-out" class="item content-area"
                                         data-src="{{asset('images/product-overview/colors/cc/002.png')}}"
                                         data-sub-html="<h4>CC 002</h4><p style='color: #fff;'>Conform Chrome Black</p>">
                                        <img src="{{asset('images/product-overview/colors/cc/002.png')}}" alt="CC 002">
                                        <div class="custom-overlay">
                                            <div class="custom-text">
                                                <h4>CC 002</h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div data-aos="zoom-out" class="item content-area"
                                         data-src="{{asset('images/product-overview/colors/cc/003.png')}}"
                                         data-sub-html="<h4>CC 003</h4><p style='color: #fff;'>Conform Chrome Blue</p>">
                                        <img src="{{asset('images/product-overview/colors/cc/003.png')}}" alt="CC 003">
                                        <div class="custom-overlay">
                                            <div class="custom-text">
                                                <h4>CC 003</h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div data-aos="zoom-out" class="item content-area"
                                         data-src="{{asset('images/product-overview/colors/cc/004.png')}}"
                                         data-sub-html="<h4>CC 004</h4><p style='color: #fff;'>Conform Chrome Red</p>">
                                        <img src="{{asset('images/product-overview/colors/cc/004.png')}}" alt="CC 004">
                                        <div class="custom-overlay">
                                            <div class="custom-text">
                                                <h4>CC 004</h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div data-aos="zoom-out" class="item content-area"
                                         data-src="{{asset('images/product-overview/colors/cc/005.png')}}"
                                         data-sub-html="<h4>CC 005</h4><p style='color: #fff;'>Conform Chrome Gold</p>">
                                        <img src="{{asset('images/product-overview/colors/cc/005.png')}}" alt="CC 005">
                                        <div class="custom-overlay">
                                            <div class="custom-text">
                                                <h4>CC 005</h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div data-aos="zoom-out" class="item content-area"
                                         data-src="{{asset('images/product-overview/colors/cc/006.png')}}"
                                         data-sub-html="<h4>CC 006</h4><p style='color: #fff;'>Conform Chrome Matt Silver</p>">
                                        <img src="{{asset('images/product-overview/colors/cc/006.png')}}" alt="CC 006">
                                        <div class="custom-overlay">
                                            <div class="custom-text">
                                                <h4>CC 006</h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div data-aos="zoom-out" class="item content-area"
                                         data-src="{{asset('images/product-overview/colors/cc/007.png')}}"
                                         data-sub-html="<h4>CC 007</h4><p style='color: #fff;'>Conform Chrome Violet</p>">
                                        <img src="{{asset('images/product-overview/colors/cc/007.png')}}" alt="CC 007">
                                        <div class="custom-overlay">
                                            <div class="custom-text">
                                                <h4>CC 007</h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div data-aos="zoom-out" class="item content-area"
                                         data-src="{{asset('images/product-overview/colors/cc/008.png')}}"
                                         data-sub-html="<h4>CC 008</h4><p style='color: #fff;'>Conform Chrome Rose Gold</p>">
                                        <img src="{{asset('images/product-overview/colors/cc/008.png')}}" alt="CC 008">
                                        <div class="custom-overlay">
                                            <div class="custom-text">
                                                <h4>CC 008</h4>
                                            </div>
                                        </div>
                                    </div>
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
                                <img src="{{asset('images/product-overview/swf-overlaminate.png')}}"
                                     class="img-responsive" alt="Recommended Overlaminate">
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="download"
                                 aria-labelledby="download-tab" style="border: none">
                                <ul align="justify">
                                    <li>
                                        <a href="{{asset('storage/datasheet/supreme-wrapping-films/po-eu-supreme-wrapping-films-en.pdf')}}"
                                           data-toggle="tooltip" title="Click here to download!" data-placement="right">
                                            Product Overview Avery Dennison® Conform Chrome Series</a></li>
                                    <li>
                                        <a href="{{asset('storage/datasheet/supreme-wrapping-films/ds-eu-avery-dennison-supreme-wrapping-films-en.pdf')}}"
                                           data-toggle="tooltip" title="Click here to download!" data-placement="right">
                                            Conform Chrome</a></li>
                                    <li>
                                        <a href="{{asset('storage/datasheet/supreme-wrapping-films/pds-sf-100-supreme-wrapping-films-series.pdf')}}"
                                           data-toggle="tooltip" title="Click here to download!" data-placement="right">
                                            Conform Chrome Specialty Film</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <h4 data-aos="fade-left" style="color: #eee">Avery Dennison® Conform Chrome</h4>
                    <p data-aos="fade-down" align="justify" style="color: #bbb;margin-bottom: 20px">Allow the Avery
                        Dennison conform chrome to add immediate impact to your next vehicle wrap project. Films
                        designed to add special effects and a sporty touch to vehicles.</p>
                    <p data-aos="fade-down" align="justify" style="color: #bbb;margin-bottom: 20px">Avery Dennison
                        Conform Accent Chrome is a premium quality specialty film designed for use in vehicle wraps and
                        graphics markets where high-end chrome accents are desired. The patented Avery Dennison™ Easy
                        Apply RS feature allows for faster positioning, bubble-free application, and long-term
                        removability.</p>
                    <blockquote data-aos="fade-left">Striking accents, premium look, and
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

            <div data-aos="fade-up" class="row text-center" style="padding: 0 0 6em 0;">
                <div class="col-lg-12">
                    <a href="{{route('show.gallery')}}" class="btn btn-dark-red ld ld-breath">
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

        var $img = $(".supreme-wrapping-films"),
            images = ['supreme-wrapping-films1.jpg', 'supreme-wrapping-films2.jpg', 'supreme-wrapping-films3.jpg'],
            index = 0, maxImages = images.length - 1, timer = setInterval(function () {
                var currentImage = images[index];
                index = (index == maxImages) ? 0 : ++index;
                $img.fadeOut("slow", function () {
                    $img.css("background-image", 'url({{asset('images/slider')}}/' + currentImage + ')');
                    $img.fadeIn("slow");
                });
            }, 5000),

            $img_swf = $("#swf-switch"), images_swf = ['swf-overview2.png', 'swf-overview1.png'],
            index_swf = 0, maxImages_swf = images_swf.length - 1, timer_swf = setInterval(function () {
                var currentImage_swf = images_swf[index_swf];
                index_swf = (index_swf == maxImages_swf) ? 0 : ++index_swf;
                $img_swf.fadeOut("slow", function () {
                    $img_swf.attr("src", '{{asset('images/product-overview')}}/' + currentImage_swf);
                    $img_swf.fadeIn("slow");
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

        $('#play-supreme-wrapping-films').on('click', function () {
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

        function goToAnchor() {
            $('html,body').animate({scrollTop: $(".page-content").offset().top}, 500);
        }
    </script>
@endpush
