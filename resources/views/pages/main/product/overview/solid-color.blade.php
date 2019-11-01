@extends('layouts.mst')
@section('title', 'Product Overview: '.$title.' | '.env('APP_TITLE'))
@push('styles')
    <link rel="stylesheet" href="{{asset('vendor/lightgallery/dist/css/lightgallery.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap-tabs-responsive.css')}}">
    <link rel="stylesheet" href="{{asset('css/play-button.css')}}">
    <style>
        .breadcrumbs.solid-color {
            background-image: url({{asset('images/slider/solid-color3.jpg')}});
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
    </style>
@endpush
@section('content')
    <div class="breadcrumbs {{$category}}">
        <div class="breadcrumbs-overlay"></div>
        <div class="page-title">
            <h2>Our Product</h2>
            <p>Product overview of {{$title}}, films for digital prints.</p>
        </div>
        <ul class="crumb">
            <li><a href="{{route('home')}}"><i class="fa fa-home"></i></a></li>
            <li><a href="{{route('home')}}"><i class="fa fa-angle-double-right"></i> Home</a></li>
            <li><i class="fa fa-angle-double-right"></i></li>
            <li><a href="{{route('show.blog')}}"><i class="fa fa-blog"></i></a></li>
            <li><a href="{{url()->current()}}"><i class="fa fa-car"></i></a></li>
            <li><a href="{{url()->current()}}"><i class="fa fa-angle-double-right"></i> Overview</a></li>
            <li><a href="#" onclick="goToAnchor()"><i class="fa fa-angle-double-right"></i> {{$title}}</a></li>
        </ul>
    </div>

    <div class="page-content page-sidebar">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div data-aos="zoom-out" class="content-area">
                        <img id="mpi-switch" src="{{asset('images/home/about.png')}}" class="img-responsive"
                             alt="MPI&trade; SERIES">
                        <div class="custom-overlay">
                            <div class="custom-text">
                                <svg id="play-mpi-series" class="play" version="1.1" xmlns="http://www.w3.org/2000/svg"
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
                                <a href="#cc" id="cc-tab" role="tab" data-toggle="tab" aria-controls="cc"
                                   aria-expanded="true"><span class="text">COLORS</span></a>
                            </li>
                            <li role="presentation" class="next">
                                <a href="#ro" role="tab" id="ro-tab" data-toggle="tab" aria-controls="ro">
                                    <span class="text">OVERLAMINATE</span>
                                </a>
                            </li>
                            <li role="presentation" class="next">
                                <a href="#ht" role="tab" id="ht-tab" data-toggle="tab" aria-controls="ht">
                                    <span class="text">HINTS & TIPS</span>
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
                                    <li>MPI&trade; 1105 gives maximum life with up to 10 year durability and
                                        MPI&trade; 1104 and 1106 give a long life with up to 7 year durability.
                                    </li>
                                    <li>All 50 micron films.</li>
                                    <li>Premium cast MPI&trade; 1105 offers unparalleled performance on the most
                                        demanding 3D applications, whilst MPI&trade; 1104 offers an economy cast
                                        solution for versatile 3D performance.
                                    </li>
                                    <li>MPI&trade; 1106 features a hi-tack adhesive suitable for low-energy and
                                        difficult substrates.
                                    </li>
                                    <li>Excellent printability on all platforms.</li>
                                    <li>MPI&trade; 1105 also features Long Term Removability.</li>
                                    <li>UV, solvent, eco-solvent and latex inks compatible</li>
                                    <li>Easy Apply RS&trade; adhesive technology with air-egress, repositionability
                                        and slideability
                                    </li>
                                    <li>Covered by ICS Performance Guarantee</li>
                                </ul>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="cc"
                                 aria-labelledby="cc-tab" style="border: none">
                                <table>
                                    <tr>
                                        <th style="color: #E31B23">MPI 1104</th>
                                        <td>&nbsp;:&nbsp;</td>
                                        <td>Gloss White Repositionable</td>
                                    </tr>
                                    <tr>
                                        <th style="color: #E31B23">MPI 1104 EA</th>
                                        <td>&nbsp;:&nbsp;</td>
                                        <td>Gloss White Repositionable Easy Apply&trade;</td>
                                    </tr>
                                    <tr>
                                        <th style="color: #E31B23">MPI 1105</th>
                                        <td>&nbsp;:&nbsp;</td>
                                        <td>Gloss White</td>
                                    </tr>
                                    <tr>
                                        <th style="color: #E31B23">MPI 1105 EA RS</th>
                                        <td>&nbsp;:&nbsp;</td>
                                        <td>Gloss White Easy Apply&trade;</td>
                                    </tr>
                                    <tr>
                                        <th style="color: #E31B23">&nbsp;</th>
                                        <td>&nbsp;&nbsp;&nbsp;</td>
                                        <td>Repositionable Slideable</td>
                                    </tr>
                                    <tr>
                                        <th style="color: #E31B23">MPI 1106 Hi-tack EA</th>
                                        <td>&nbsp;:&nbsp;</td>
                                        <td>Gloss White Hi-tack Easy Apply&trade;</td>
                                    </tr>
                                </table>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="ro"
                                 aria-labelledby="ro-tab" style="border: none">
                                <div class="row">
                                    <div class="col-md-3">
                                        <ul align="justify">
                                            <li>DOL 1000 Gloss</li>
                                            <li>DOL 1100 Matt</li>
                                            <li>DOL 1460 Gloss</li>
                                            <li>DOL 1480 Matt</li>
                                            <li>DOL 1460 Z Gloss</li>
                                            <li>DOL 1480 Z Matt</li>
                                        </ul>
                                    </div>
                                    <div class="col-md-9">
                                        <img src="{{asset('images/product-overview/mpi-overlaminate.png')}}"
                                             class="img-responsive" alt="Recommended Overlaminate">
                                    </div>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="ht"
                                 aria-labelledby="ht-tab" style="border: none">
                                <div class="row">
                                    <div class="col-md-6">
                                        <h4 style="color: #eee">How should I outgas?</h4>
                                        <p align="justify" style="color: #bbb">Outgassing is the process of removing
                                            solvents from the printed graphic. Prior to lamination, prints should be
                                            left at 23°C, for a minimum of 48 Hours. Images with dense colours may
                                            need more time. There should be a constant flow of air over the graphics
                                            to ensure the solvent is moved away from the face. As solvent is heavier
                                            than air, it will not move unless aided from airflow.</p>
                                    </div>
                                    <div class="col-md-6">
                                        <h4 style="color: #eee">Why should I outgas?</h4>
                                        <p align="justify" style="color: #bbb;">Solvents still within the prints
                                            will cause the film to feel tacky when applying. Solvents soften the
                                            adhesive, removing any adhesive benefits. Once the graphic is applied,
                                            the solvent continues to soften and weaken the adhesive. Beware on panel
                                            edges and recesses, where the adhesive is weakened and no longer able to
                                            adhere, causing the film to ‘pop’ from the recess.</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <h4 style="color: #eee">How should I post heat?</h4>
                                        <p align="justify" style="color: #bbb">Post heating must be done after each
                                            panel is completed using a digital thermometer for accurate
                                            temperatures. Always remove the heat gun from the area you’re measuring,
                                            heat and measure every 3-4 inches referring to product bulletins for
                                            recommended temperatures. Use a small channel roller in the
                                            recesses.</p>
                                    </div>
                                    <div class="col-md-6">
                                        <h4 style="color: #eee">Why should I post heat?</h4>
                                        <p align="justify" style="color: #bbb;">Post heating speeds up the process
                                            of adhesive flow and helps reach maximum adhesive bond over a short
                                            amount of time. Post heating removes the film memory. If you do not post
                                            heat correctly this will cause the film to pop from a recess</p>
                                    </div>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="download"
                                 aria-labelledby="download-tab" style="border: none">
                                <ul align="justify">
                                    <li>
                                        <a href="{{asset('storage/datasheet/mpi-series/ds-Avery-Dennison-MPI-1105-wrapping-series-EN.pdf')}}"
                                           data-toggle="tooltip" title="Click here to download!"
                                           data-placement="right">MPI 1105 Wrapping Series</a></li>
                                    <li>
                                        <a href="{{asset('storage/datasheet/mpi-series/ds-Avery-Dennison-MPI-1105-wrapping-series-EN.pdf')}}"
                                           data-toggle="tooltip" title="Click here to download!"
                                           data-placement="right">MPI 1105 Wrapping Series Easy Apply RS</a></li>
                                    <li>
                                        <a href="{{asset('storage/datasheet/mpi-series/MPI-1105-Product-Overview-EN.pdf')}}"
                                           data-toggle="tooltip" title="Click here to download!"
                                           data-placement="right">Avery Dennison MPI 1105 Product Overview</a></li>
                                    <li>
                                        <a href="{{asset('storage/datasheet/mpi-series/digital-portfolio-overview-en.pdf')}}"
                                           data-toggle="tooltip" title="Click here to download!"
                                           data-placement="right">Product Portfolio Guide Avery Dennison Digital
                                            Imaging Media</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <h4 data-aos="fade-left" style="color: #eee">Avery Dennison® MPI&trade; 1105 Series</h4>
                    <p data-aos="fade-down" align="justify" style="color: #bbb;margin-bottom: 20px">A series of
                        super cast and cast films, offering a range of adhesive features to tackle any application.
                    </p>
                    <blockquote data-aos="fade-left">Supreme 3D conformability, stunning printability, and reliable
                        performance.
                    </blockquote>
                    <p data-aos="fade-down" align="justify" style="color: #bbb;margin-bottom: 20px">The ultimate
                        wrapping solution - new MPI 1105 Wrapping series films bring new levels of printability,
                        image quality and 3D conformability to vehicle wraps. Outstanding colour 'pop' and an
                        ability to cope easily with challenges such as rivets and corrugations make MPI 1105 the
                        product of choice across many different applications.</p>
                    <p data-aos="fade-down" align="justify" style="color: #bbb">With best-in-class 3D
                        conformability, MPI 1105 uses Easy Apply RS technology to ensure the same application speed
                        and convenience as Avery Dennison® Supreme Wrapping Film. That means endless creative
                        possibilities for the most demanding private vehicle and commercial fleet wraps. To protect
                        MPI 1105 series and enhance both colours and durability, we recommend using it in
                        combination with DOL 1460 Z Gloss and DOL 1480 Z Matt overlaminates.</p>
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
        <h2>Benchmark <strong>Test Results</strong></h2>
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <h3 data-aos="fade-right">Avery Dennison® MPI&trade; 1105 EA RS</h3>
                    <p data-aos="fade-right" align="justify"><strong>8</strong> digitally printable vehicle wrapping
                        films produced by major media manufactures and <strong>4</strong> independent applicators.</p>
                    <p data-aos="fade-down" align="justify" class="text">Media chosen for this benchmark was consisting
                        of EA RS equivalents <sub>(RS if available)</sub> in the market and rated for conformability,
                        slideability, etc.</p>
                </div>
                <div class="col-md-7">
                    <h3 data-aos="fade-left">Peak Performance</h3>
                    <p data-aos="fade-left" align="justify">The Independent Test Results</p>
                    <img data-aos="zoom-out" src="{{asset('images/product-overview/mpi-bm1.png')}}" alt="">
                </div>
            </div>
            <div class="row">
                <div class="col-md-7">
                    <h3 data-aos="fade-right">TOP 5</h3>
                    <p data-aos="fade-right" align="justify">Overall Performance</p>
                    <img data-aos="zoom-out" src="{{asset('images/product-overview/mpi-bm2.png')}}" alt=""
                         style="margin-top: -6em">
                </div>
                <div class="col-md-5">
                    <img data-aos="fade-left" src="{{asset('images/home/installer.png')}}" alt="">
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
        var $img = $(".{{$category}}"), images = ['{{$category}}1.jpg', '{{$category}}3.jpg', '{{$category}}2.jpg'],
            index = 0, maxImages = images.length - 1, timer = setInterval(function () {
                var currentImage = images[index];
                index = (index == maxImages) ? 0 : ++index;
                $img.fadeOut("slow", function () {
                    $img.css("background-image", 'url({{asset('images/slider')}}/' + currentImage + ')');
                    $img.fadeIn("slow");
                });
            }, 5000),

            $img_mpi = $("#mpi-switch"), images_mpi = ['about2.png', 'about.png'],
            index_mpi = 0, maxImages_mpi = images_mpi.length - 1, timer_mpi = setInterval(function () {
                var currentImage_mpi = images_mpi[index_mpi];
                index_mpi = (index_mpi == maxImages_mpi) ? 0 : ++index_mpi;
                $img_mpi.fadeOut("slow", function () {
                    $img_mpi.attr("src", '{{asset('images/home')}}/' + currentImage_mpi);
                    $img_mpi.fadeIn("slow");
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

        $('#play-mpi-series').on('click', function () {
            $(this).lightGallery({
                dynamic: true,
                dynamicEl: [
                    {
                        "src": 'https://youtu.be/3qBJoG-ULJ0',
                        'thumb': 'https://youtu.be/3qBJoG-ULJ0',
                    },
                    {
                        "src": 'https://youtu.be/RMzQLZRlXss',
                        'thumb': 'https://youtu.be/RMzQLZRlXss',
                    }]
            });
        });

        function goToAnchor() {
            $('html,body').animate({scrollTop: $(".page-content").offset().top}, 500);
        }
    </script>
@endpush

