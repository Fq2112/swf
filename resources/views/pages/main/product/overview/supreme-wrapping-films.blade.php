@extends('layouts.mst')
@section('title', 'Product Overview: Supreme Wrapping™ Films | '.env('APP_TITLE'))
@push('styles')
    <link rel="stylesheet" href="{{asset('vendor/lightgallery/dist/css/lightgallery.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap-tabs-responsive.css')}}">
    <link rel="stylesheet" href="{{asset('css/play-button.css')}}">
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

        .ig-feed .content-area {
            position: relative;
            cursor: pointer;
            overflow: hidden;
        }

        .ig-feed .content-area img {
            transition: transform .5s ease;
        }

        .ig-feed .content-area:hover img {
            transform: scale(1.2);
        }

        .ig-feed .custom-overlay {
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            text-align: center;
            background: rgba(0, 0, 0, .6);
            opacity: 0;
            transition: all 400ms ease-in-out;
            height: 100%;
        }

        .ig-feed .custom-overlay:hover {
            opacity: 1;
        }

        .ig-feed .custom-text {
            position: absolute;
            top: 50%;
            left: 10px;
            right: 10px;
            transform: translateY(-50%);
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
    <div class="breadcrumbs supreme-wrapping-films">
        <div class="breadcrumbs-overlay"></div>
        <div class="page-title">
            <h2>Our Product</h2>
            <p>Supreme Wrapping&trade; Films, films with 3D exceptional conformability for color change.</p>
        </div>
    </div>

    <div class="page-content page-sidebar">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div data-aos="fade-down" class="content-area">
                        <img id="swf-switch" src="{{asset('images/product-overview/swf-overview1.png')}}"
                             class="img-responsive" alt="Supreme Wrapping&trade; Films" width="65%">
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
                    <h4 data-aos="fade-down" style="color: #eee">Avery Dennison® Supreme Wrapping&trade; Films</h4>
                    <p data-aos="fade-down" align="justify" style="color: #bbb;margin-bottom: 20px">Avery Dennison
                        Supreme Wrapping&trade; Film combines style with performance, versatility and easy-to-apply
                        convenience.</p>
                    <p data-aos="fade-down" align="justify" style="color: #bbb;margin-bottom: 20px">Large range of
                        premium cast, dual layer films designed for solid color vehicle detailing and full wraps with
                        exceptional 3D conformability.</p>
                    <blockquote data-aos="fade-down">Superior performance, fast and easy application, and removability.
                    </blockquote>
                    <p data-aos="fade-down" align="justify" style="color: #bbb;margin-bottom: 20px">For a wrapping film
                        that combines supreme performance and application speed, look no further than Avery Dennison
                        Supreme Wrapping Film. This dual-layer film combines color, texture, and clear protective
                        layers, providing a smooth, paint-like finish that's both durable and dazzling.</p>
                    <p data-aos="fade-down" align="justify" style="color: #bbb;margin-bottom: 20px">With a choice of
                        many colors, Avery Dennison® Supreme Wrapping Film today offers an even broader palette of
                        options than ever before. And... our color matching service brings you virtually any color
                        you like!</p>
                </div>
            </div>
        </div>
    </div>

    <!-- stellar parallax -->
    <section class="stellar-parallax no-padding">
        <div class="third" data-stellar-background-ratio="0.5"
             style="background-image: url({{asset('images/stellar-parallax/swf.jpg')}});">
            <div class="stellar-overlay"></div>
            <h1>SUPREME WRAPPING<span style="color: #e31b23">&trade;</span> FILMS<br><sub>Superior performance, fast and
                    easy application and removability.</sub>
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
                                    <li>Up to 12 year durability, 80 micron film.</li>
                                    <li>Exceptional 3D conformability on concave and convex shapes including deep
                                        channels.
                                    </li>
                                    <li>Available in a choice of high gloss, satin, matte, metallic pearl and diamond
                                        finishes, resulting in ‘paint-like’ appearance.
                                    </li>
                                    <li>Features Easy Apply&trade;, repositionability and slideability adhesive
                                        technology with long term removability.
                                    </li>
                                    <li>Available in 1524mm x 25m roll sizes.</li>
                                    <li>Faster positioning and air bubble-free car wrapping film application</li>
                                    <li>Even the most experienced applicators are more productive, compared to the
                                        standard permanent adhesive
                                    </li>
                                    <li>Cost-efficient application</li>
                                    <li>Available in opaque and textured, special effect, and metallic options</li>
                                    <li>Provides colored and/or textured film and protective layer in a one-piece
                                        laminate
                                    </li>
                                    <li>Supreme Wrapping Film also available for Marine Applications</li>
                                </ul>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="kb"
                                 aria-labelledby="kb-tab" style="border: none">
                                <ul align="justify">
                                    <li>Faster installation, higher-quality results, thanks to Avery Dennison® Easy
                                        Apply™ RS adhesive technology
                                    </li>
                                    <li>Extensive color range with many color options</li>
                                    <li>color matching service to match virtually any color you like within a few days –
                                        minimum order quantity 10 rolls
                                    </li>
                                    <li>Cover large panels with just one piece of material – fewer seams</li>
                                </ul>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="cc"
                                 aria-labelledby="cc-tab" style="border: none">
                                <div class="row" style="margin-bottom: 1em">
                                    @foreach($data as $row)
                                        <div class="col-md-6">
                                            <h4 style="color: #eee">{{$row->name}}</h4>
                                            <div class="ig-feed owl-carousel">
                                                @foreach($row->getColorCode as $color)
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
                                    @endforeach
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="ta"
                                 aria-labelledby="ta-tab" style="border: none">
                                <ul align="justify">
                                    <li>Personalise and refresh your car’s appearance with a cool new fashion look
                                        and/or texture
                                    </li>
                                    <li>Brand your company’s fleet with your company color</li>
                                    <li>Improve the life and resale value of your vehicle by protecting the original
                                        paintwork
                                    </li>
                                </ul>
                                <img src="{{asset('images/product-overview/swf-overlaminate.png')}}"
                                     class="img-responsive" alt="Recommended Overlaminate">
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="download"
                                 aria-labelledby="download-tab" style="border: none">
                                <ul align="justify">
                                    <li>
                                        <a href="{{asset('storage/datasheet/supreme-wrapping-films/supreme_wrapping_film_product_overview_en.pdf')}}"
                                           data-toggle="tooltip" title="Click here to download!" data-placement="right">
                                            Product Overview: Supreme Wrapping&trade; Films
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{asset('storage/datasheet/supreme-wrapping-films/pds-swf-ea-rs.pdf')}}"
                                           data-toggle="tooltip" title="Click here to download!" data-placement="right">
                                            Avery Dennison® Supreme Wrapping&trade; Films Easy Apply RS
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{asset('storage/datasheet/supreme-wrapping-films/po-supreme-wrapping-film-coastal-collection.pdf')}}"
                                           data-toggle="tooltip" title="Click here to download!" data-placement="right">
                                            Product Overview: Supreme Wrapping&trade; Films &ndash; Coastal Collection
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{asset('storage/datasheet/supreme-wrapping-films/en-avery-dennison-colour-matching-service-overview.pdf')}}"
                                           data-toggle="tooltip" title="Click here to download!" data-placement="right">
                                            Avery Dennison® Color Matching Service Overview
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{asset('storage/datasheet/supreme-wrapping-films/swf-color-card-final-oct.pdf')}}"
                                           data-toggle="tooltip" title="Click here to download!" data-placement="right">
                                            SWF Digital Color Selector
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{asset('storage/datasheet/supreme-wrapping-films/pds-sw-900-wrapping-film.pdf')}}"
                                           data-toggle="tooltip" title="Click here to download!" data-placement="right">
                                            Avery Dennison® SW900 Series Supreme Wrapping Film&trade;
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{asset('storage/datasheet/supreme-wrapping-films/swf-opaque-metallic-specialty-ea-rs.pdf')}}"
                                           data-toggle="tooltip" title="Click here to download!" data-placement="right">
                                            Avery Dennison® Supreme Wrapping Film&trade; Opaque/Metallic/Specialty Easy
                                            Apply RS

                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{asset('storage/datasheet/supreme-wrapping-films/swf-colorflow-overview.pdf')}}"
                                           data-toggle="tooltip" title="Click here to download!" data-placement="right">
                                            Avery Dennison® ColorFlow Series Supreme Wrapping Film&trade; Overview
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{asset('storage/datasheet/supreme-wrapping-films/swf-colorflow-ea-rs.pdf')}}"
                                           data-toggle="tooltip" title="Click here to download!" data-placement="right">
                                            Avery Dennison® ColorFlow Series Supreme Wrapping Film&trade; Easy Apply RS
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{asset('storage/datasheet/supreme-wrapping-films/swf-brushed-metallic-ea-rs.pdf')}}"
                                           data-toggle="tooltip" title="Click here to download!" data-placement="right">
                                            Avery Dennison® Series Supreme Wrapping Film&trade; Brushed Metallic Easy
                                            Apply RS
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{asset('storage/datasheet/supreme-wrapping-films/swf-diamond-line-ea-rs.pdf')}}"
                                           data-toggle="tooltip" title="Click here to download!" data-placement="right">
                                            Avery Dennison® Series Supreme Wrapping Film&trade; Diamond Line Easy Apply
                                            RS
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{asset('storage/datasheet/supreme-wrapping-films/swf-carbon-fiber-ea-rs.pdf')}}"
                                           data-toggle="tooltip" title="Click here to download!" data-placement="right">
                                            Avery Dennison® Series Supreme Wrapping Film&trade; Carbon Fiber Easy Apply
                                            RS
                                        </a>
                                    </li>
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
                        items: 5,
                    }
                }
            });

            $('.ig-feed').lightGallery({selector: '.content-area'});
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
                        "src": 'https://youtu.be/ySWxKY1eUTk',
                        'thumb': 'https://youtu.be/ySWxKY1eUTk',
                    },
                    {
                        "src": 'https://youtu.be/qMEOEqHij0g',
                        'thumb': 'https://youtu.be/qMEOEqHij0g',
                    },
                    {
                        "src": 'https://youtu.be/nKz0Bmtf8z4',
                        'thumb': 'https://youtu.be/nKz0Bmtf8z4',
                    }]
            });
        });
    </script>
@endpush
