@extends('layouts.mst')
@section('title', 'Product Overview: Supreme Wrap™ Care | '.env('APP_TITLE'))
@push('styles')
    <link rel="stylesheet" href="{{asset('vendor/lightgallery/dist/css/lightgallery.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap-tabs-responsive.css')}}">
    <link rel="stylesheet" href="{{asset('css/play-button.css')}}">
    <style>
        .breadcrumbs.supreme-wrap-care {
            background-image: url({{asset('images/slider/supreme-wrap-care3.jpg')}});
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

        .features-3 ul {
            margin-left: 1em;
            margin-bottom: 1.5em;
            list-style: none;
        }

        .features-3 ul li:before {
            font-family: "Font Awesome 5 Free";
            content: '\f054';
            font-weight: 900;
            color: #E31B23;
            margin-left: -1.1em;
            padding-right: .5em;
        }
    </style>
@endpush
@section('content')
    <div class="breadcrumbs supreme-wrap-care">
        <div class="breadcrumbs-overlay"></div>
        <div class="page-title">
            <h2>Our Product</h2>
            <p>Supreme Wrap&trade; Care, designed to keep Avery Dennison vehicle graphic films in peak condition.</p>
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
                <div class="col-md-7">
                    <div data-aos="zoom-out" class="content-area">
                        <img id="swc-switch" src="{{asset('images/product-overview/swc4.png')}}"
                             class="img-responsive" alt="Supreme Wrap&trade; Care">
                        <div class="custom-overlay">
                            <div class="custom-text">
                                <svg id="play-supreme-wrap-care" class="play" version="1.1"
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
                                <a href="#po" role="tab" id="po-tab" data-toggle="tab"
                                   aria-controls="cleaner"><span class="text">PRODUCT OVERVIEW</span></a>
                            </li>
                            <li role="presentation" class="next">
                                <a href="#kf" id="kf-tab" role="tab" data-toggle="tab" aria-controls="kf"
                                   aria-expanded="true"><span class="text">KEY FEATURES</span></a>
                            </li>
                            <li role="presentation">
                                <a href="#download" role="tab" id="download-tab" data-toggle="tab"
                                   aria-controls="download">
                                    <span class="text">DATA SHEETS DOWNLOAD</span>
                                </a>
                            </li>
                        </ul>
                        <div id="myTabContent" class="tab-content">
                            <div role="tabpanel" class="tab-pane fade in active" id="po"
                                 aria-labelledby="po-tab" style="border: none">
                                <ul align="justify">
                                    <li>Supreme Wrap&trade; <strong>Cleaner</strong> is a general cleaning product for
                                        regular use –
                                        eliminates dust, light dirt, fingerprints and other marks.
                                    </li>
                                    <li>Supreme Wrap&trade; <strong>Power Cleaner</strong> delivers extra power to deal
                                        with difficult
                                        localized stains such as bird droppings, road grime, tree sap and much more.
                                    </li>
                                    <li>Supreme Wrap&trade; <strong>Sealant</strong> provides a protective layer on the
                                        wrap, making it
                                        easier to clean off everyday challenges like dirt, bird droppings and tree sap.
                                    </li>
                                </ul>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="kf"
                                 aria-labelledby="kf-tab" style="border: none">
                                <ul align="justify">
                                    <li>Protects & cleans vehicle graphics – helping to maintain the freshly wrapped
                                        look
                                    </li>
                                    <li>Suitable for all car wrap finishes*</li>
                                    <li>Fully tested with all Avery Dennison vehicle graphic films, including Supreme
                                        Wrapping&trade; Film
                                    </li>
                                    <li>Easy to use water based products</li>
                                    <li>An alternative to traditional car wash</li>
                                    <li>No additional water required</li>
                                </ul>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="download"
                                 aria-labelledby="download-tab" style="border: none">
                                <ul align="justify">
                                    <li>
                                        <a href="{{asset('storage/datasheet/supreme-wrap-care/supreme-wrap-care-product-overview-EN.pdf')}}"
                                           data-toggle="tooltip" title="Click here to download!"
                                           data-placement="right">Product Overview: Supreme Wrap™ Care</a></li>
                                    <li>
                                        <a href="{{asset('storage/datasheet/supreme-wrap-care/Avery-Dennison-Supreme-Wrap-Care-Cleaner-safety-data-sheet.pdf')}}"
                                           data-toggle="tooltip" title="Click here to download!"
                                           data-placement="right">Safety Data Sheet: Supreme Wrap™ Care Cleaner</a></li>
                                    <li>
                                        <a href="{{asset('storage/datasheet/supreme-wrap-care/Avery-Dennison-Supreme-Wrap-Care-Power-Cleaner-safety-data-sheet.pdf')}}"
                                           data-toggle="tooltip" title="Click here to download!"
                                           data-placement="right">Safety Data Sheet: Supreme Wrap™ Care Power
                                            Cleaner</a></li>
                                    <li>
                                        <a href="{{asset('storage/datasheet/supreme-wrap-care/Avery-Dennison-Supreme-Wrap-Care-Sealant-safety-data-sheet.pdf')}}"
                                           data-toggle="tooltip" title="Click here to download!"
                                           data-placement="right">Safety Data Sheet: Supreme Wrap™ Care Sealant</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-5">
                    <h4 data-aos="fade-left" style="color: #eee">New Avery Dennison® Supreme Wrap&trade; Care</h4>
                    <p data-aos="fade-down" align="justify" style="color: #bbb;margin-bottom: 20px">Vehicle wraps have
                        to deal with a whole range of tough challenges on the road.</p>
                    <blockquote data-aos="fade-left" style="text-align: justify">The premium finish made possible by
                        Avery Dennison vehicle graphic films deserves the very best in after care - if it looks great,
                        it should stay great.
                    </blockquote>
                    <p data-aos="fade-down" align="justify" style="color: #bbb;margin-bottom: 20px">The Avery Dennison
                        Supreme Wrap&trade; Care range is designed to help maintain vehicle graphics in premium
                        condition. It includes a Cleaner, Power Cleaner and Sealant – suitable for all types of vehicle
                        wrap films (matt, satin and gloss).</p>
                    <p data-aos="fade-down" align="justify" style="color: #bbb">These easy to use products have been
                        fully tested with all Avery Dennison vehicle graphic films, and are all you need to protect and
                        clean the graphics during their life. They are eco-responsible: being water-based, with no
                        hazardous solvents, and do not require any additional water.</p>
                </div>
            </div>

            <div data-aos="fade-up" class="row text-center" style="padding: 0 0 3em 0;">
                <div class="col-lg-12">
                    <a href="{{route('show.gallery')}}" class="btn btn-dark-red ld ld-breath">
                        <b><i class="fa fa-photo-video"></i>&ensp;MORE VIDEOS</b></a>
                </div>
            </div>
        </div>
    </div>

    <section class="features-3">
        <h2 data-aos="fade-down">Hints & <strong>Tips</strong></h2>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h4 data-aos="fade-right" style="color: #eee">Caring for Your Vehicle Graphics</h4>
                    <ul align="justify">
                        <li data-aos="fade-down">Care for your vehicle graphics like you would any fine paint finish.
                            Using high quality products designed specifically for car care, these cleaning and
                            maintenance procedures will help keep your vehicle graphics looking their best.
                        </li>
                    </ul>
                    <h4 data-aos="fade-right" style="color: #eee">Wash regularly</h4>
                    <ul align="justify">
                        <li data-aos="fade-down">Wash whenever the car appears dirty. Contaminants allowed to remain on
                            the graphic may be more difficult to remove during cleaning.
                        </li>
                        <li data-aos="fade-down">Rinse off as much dirt and grit as possible with water. Use a wet,
                            non-abrasive detergent such as VION Car Care Cleaner and a soft, clean cloth or sponge.
                        </li>
                        <li data-aos="fade-down">Rinse thoroughly with clean water. To reduce water spotting,
                            immediately use a silicone squeegee to remove water and finish with a clean microfibre
                            cloth.
                        </li>
                    </ul>
                    <h4 data-aos="fade-right" style="color: #eee">Automated car washes</h4>
                    <ul align="justify">
                        <li data-aos="fade-down">Brush-type car washes are not recommended as they can abrade the film
                            and cause edges to lift or chip, as well as dulling the film’s appearance. Brushless car
                            washes are acceptable.
                        </li>
                    </ul>
                    <h4 data-aos="fade-right" style="color: #eee">Pressure washing</h4>
                    <ul align="justify">
                        <li data-aos="fade-down">Although hand washing is the preferred cleaning method, pressure
                            washing may be used, providing these conditions are strictly followed:
                        </li>
                        <li data-aos="fade-down">Ensure the water pressure is kept below 2000 psi (14 MPa). Keep water
                            temperature below 80°C (180°F).
                        </li>
                        <li data-aos="fade-down">Use a spray nozzle with a 40 degree wide angle spray pattern.</li>
                        <li data-aos="fade-down">Keep the nozzle at least 300 mm (1 foot) away from and perpendicular
                            (at 90 degrees) to the graphic.
                        </li>
                        <li data-aos="fade-down">Beware holding the nozzle of a pressure washer at an angle to the
                            graphic, as it may lift the edges of the film.
                        </li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <h4 data-aos="fade-right" style="color: #eee">Difficult contaminants</h4>
                    <ul align="justify">
                        <li data-aos="fade-down">Soften difficult contaminants such as bug splatter, bird droppings,
                            tree sap and similar contaminants by soaking them for several minutes with very hot, soapy
                            water as early as possible. Rinse thoroughly and dry.
                        </li>
                        <li data-aos="fade-down">If further cleaning is needed, test one of these products in an
                            inconspicuous area to ensure no damage to the graphics. Spot clean the contaminants.
                        </li>
                        <li data-aos="fade-down">Do not use rough scrubbing or abrasive tools, which will scratch the
                            film. Wash and rinse off all residue immediately.
                        </li>
                    </ul>
                    <h4 data-aos="fade-right" style="color: #eee">Fuel spills</h4>
                    <ul align="justify">
                        <li data-aos="fade-down">Wipe off immediately to avoid degrading the vinyl and adhesive. Then
                            wash, rinse and dry as soon as possible.
                        </li>
                    </ul>
                    <h4 data-aos="fade-right" style="color: #eee">Polish and wax</h4>
                    <ul align="justify">
                        <li data-aos="fade-down">Most standard graphic films and overlaminates can be polished or waxed
                            with a high quality car wax.
                        </li>
                        <li data-aos="fade-down">Before use, test and approve in an inconspicuous area. Do not use any
                            abrasive polishes or cutting compounds.
                        </li>
                        <li data-aos="fade-down">3M do not recommend any polishing or wax product for the matt or
                            textured films.
                        </li>
                    </ul>
                    <h4 data-aos="fade-right" style="color: #eee">Store indoors or under cover whenever possible</h4>
                    <ul align="justify">
                        <li data-aos="fade-down">Vinyl graphics (just like paint) are degraded by prolonged exposure to
                            sun and atmospheric pollutants, particularly on the horizontal surfaces such as bonnet, boot
                            lid and roof.
                        </li>
                        <li data-aos="fade-down">Whenever possible, store in a garage or at least in a shaded area
                            during the day. At night protect the car from dew or rain, which may contain acidic
                            pollutants (a common problem in many large metropolitan areas).
                        </li>
                        <li data-aos="fade-down">When a garage is not available, consider using a cloth car cover at
                            night. If your graphics start to discolour or turn brown (which is caused by acidic
                            pollution), immediately remove the graphics from the vehicle to avoid staining the
                            underlying paint.
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
@endsection
@push('scripts')
    <script src="{{asset('vendor/lightgallery/lib/picturefill.min.js')}}"></script>
    <script src="{{asset('vendor/lightgallery/dist/js/lightgallery-all.min.js')}}"></script>
    <script src="{{asset('vendor/lightgallery/modules/lg-video.min.js')}}"></script>
    <script>
        var $img = $(".supreme-wrap-care"),
            images = ['supreme-wrap-care1.jpg', 'supreme-wrap-care2.jpg', 'supreme-wrap-care3.jpg'],
            index = 0, maxImages = images.length - 1, timer = setInterval(function () {
                var currentImage = images[index];
                index = (index == maxImages) ? 0 : ++index;
                $img.fadeOut("slow", function () {
                    $img.css("background-image", 'url({{asset('images/slider')}}/' + currentImage + ')');
                    $img.fadeIn("slow");
                });
            }, 5000),

            $img_swc = $("#swc-switch"), images_swc = ['swc1.png', 'swc2.png', 'swc3.png', 'swc4.png'],
            index_swc = 0, maxImages_swc = images_swc.length - 1, timer_swc = setInterval(function () {
                var currentImage_swc = images_swc[index_swc];
                index_swc = (index_swc == maxImages_swc) ? 0 : ++index_swc;
                $img_swc.fadeOut("slow", function () {
                    $img_swc.attr("src", '{{asset('images/product-overview')}}/' + currentImage_swc);
                    $img_swc.fadeIn("slow");
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

        $('#play-supreme-wrap-care').on('click', function () {
            $(this).lightGallery({
                dynamic: true,
                dynamicEl: [
                    {
                        "src": 'https://youtu.be/KnHCGe6KFcE',
                        'thumb': 'https://youtu.be/KnHCGe6KFcE',
                    },
                    {
                        "src": 'https://youtu.be/zBLcefmKKGw',
                        'thumb': 'https://youtu.be/zBLcefmKKGw',
                    },
                    {
                        "src": 'https://youtu.be/tdp6MnlQafM',
                        'thumb': 'https://youtu.be/tdp6MnlQafM',
                    },
                    {
                        "src": 'https://youtu.be/ijevgOD5zSk',
                        'thumb': 'https://youtu.be/ijevgOD5zSk',
                    }]
            });
        });

        function goToAnchor() {
            $('html,body').animate({scrollTop: $(".page-content").offset().top}, 500);
        }
    </script>
@endpush
