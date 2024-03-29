@extends('layouts.mst')
@section('title', 'Product Overview: MPI™ SERIES | '.env('APP_TITLE'))
@push('styles')
    <link rel="stylesheet" href="{{asset('vendor/lightgallery/dist/css/lightgallery.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap-tabs-responsive.css')}}">
    <link rel="stylesheet" href="{{asset('css/play-button.css')}}">
    <style>
        .breadcrumbs.mpi-series {
            background-image: url({{asset('images/slider/mpi-series3.jpg')}});
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
    <div class="breadcrumbs mpi-series">
        <div class="breadcrumbs-overlay"></div>
        <div class="page-title">
            <h2>Our Product</h2>
            <p>MPI&trade; SERIES, films for digital prints.</p>
        </div>
    </div>

    <div class="page-content page-sidebar">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div data-aos="fade-down" class="content-area">
                        <img id="mpi-switch" src="{{asset('images/home/about.png')}}" class="img-responsive"
                             alt="MPI&trade; SERIES" width="65%">
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
                    <h4 data-aos="fade-down" style="color: #eee">Avery Dennison® MPI&trade; 1105 Series</h4>
                    <p data-aos="fade-down" align="justify" style="color: #bbb;margin-bottom: 20px">Avery Dennison has
                        launched MPI 1105, the next generation of digital Supercast wrapping films for all vehicle and
                        outdoor graphics needs. Ensure each job is completed on time with reliable, high-quality print
                        performance across all digital platforms: latex, solvent, eco-solvent and UV.</p>
                    <blockquote data-aos="fade-down">Supreme 3D conformability, stunning
                        printability, and reliable performance.
                    </blockquote>
                    <p data-aos="fade-down" align="justify" style="color: #bbb;margin-bottom: 20px">The ultimate
                        wrapping solution - new MPI 1105 Wrapping series films bring new levels of printability,
                        image quality and 3D conformability to vehicle wraps. Outstanding color 'pop' and an
                        ability to cope easily with challenges such as rivets and corrugations make MPI 1105 the
                        product of choice across many different applications.</p>
                    <p data-aos="fade-down" align="justify" style="color: #bbb">With best-in-class 3D
                        conformability, MPI 1105 uses Easy Apply RS technology to ensure the same application speed
                        and convenience as Avery Dennison® Supreme Wrapping Film. That means endless creative
                        possibilities for the most demanding private vehicle and commercial fleet wraps. To protect
                        MPI 1105 series and enhance both colors and durability, we recommend using it in
                        combination with DOL 1460 Z Gloss and DOL 1480 Z Matte overlaminates.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- stellar parallax -->
    <section class="stellar-parallax no-padding">
        <div class="third" data-stellar-background-ratio="0.5" style="background-image: url({{asset('images/stellar-parallax/mpi-1105-series.jpg')}});">
            <div class="stellar-overlay"></div>
            <h1>MPI<span style="color: #e31b23">&trade;</span> SERIES<br><sub>Supreme 3D conformability, stunning printability, and reliable performance.</sub>
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
                            <div role="tabpanel" class="tab-pane fade" id="kb"
                                 aria-labelledby="kb-tab" style="border: none">
                                <ul align="justify">
                                    <li>Faster, easier installation, conforming to the most demanding corrugations</li>
                                    <li>Up to 30% application time savings with Easy Apply RS™ technology and its
                                        air-egress capability
                                    </li>
                                    <li>Ease of application with low initial tack, repositionabilty & slideability</li>
                                    <li>Creative freedom thanks to outstanding printed image quality and longer printed
                                        graphics lifespan (up to 6 years*)
                                    </li>
                                    <li>Lower costs and time savings when films are removed at end of life</li>
                                    <li>End-user peace-of-mind with the Avery Dennison ICS Performance Guarantee</li>
                                </ul>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="cc"
                                 aria-labelledby="cc-tab" style="border: none">
                                <table>
                                    @foreach($data as $color)
                                        <tr>
                                            <th style="color: #E31B23">{{$color->code}}</th>
                                            <td>&nbsp;:&nbsp;</td>
                                            <td>{{$color->name}}</td>
                                        </tr>
                                    @endforeach
                                </table>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="ta"
                                 aria-labelledby="ta-tab" style="border: none">
                                <div class="row">
                                    <div class="col-md-4">
                                        <h4 style="color: #bbb">Recommended Overlaminate</h4>
                                        <ul align="justify" style="margin-left: 1em">
                                            <li>DOL 1000 Gloss</li>
                                            <li>DOL 1100 Matte</li>
                                            <li>DOL 1460 Gloss</li>
                                            <li>DOL 1480 Matte</li>
                                            <li>DOL 1460 Z Gloss</li>
                                            <li>DOL 1480 Z Matte</li>
                                        </ul>
                                    </div>
                                    <div class="col-md-8">
                                        <h4 style="color: #bbb">Recommended Uses</h4>
                                        <ul align="justify" style="margin-left: 1em">
                                            <li>Partial and full wraps on private vehicles</li>
                                            <li>Partial and full wraps on commercial fleet</li>
                                            <li>Interior & exterior signs</li>
                                        </ul>
                                        <img src="{{asset('images/product-overview/mpi-overlaminate.png')}}"
                                             class="img-responsive" alt="Recommended Overlaminate">
                                    </div>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="download"
                                 aria-labelledby="download-tab" style="border: none">
                                <ul align="justify">
                                    <li>
                                        <a href="{{asset('storage/datasheet/mpi-series/MPI-1105-Product-Overview-EN.pdf')}}"
                                           data-toggle="tooltip" title="Click here to download!"
                                           data-placement="right">Avery Dennison MPI 1105 Product Overview</a></li>
                                    <li>
                                        <a href="{{asset('storage/datasheet/mpi-series/pds-mpi-1105-sc-series.pdf')}}"
                                           data-toggle="tooltip" title="Click here to download!"
                                           data-placement="right">MPI 1105 SuperCast Series</a></li>
                                    <li>
                                        <a href="{{asset('storage/datasheet/mpi-series/ds-Avery-Dennison-MPI-1105-wrapping-series-EN.pdf')}}"
                                           data-toggle="tooltip" title="Click here to download!"
                                           data-placement="right">MPI 1105 Wrapping Series</a></li>
                                    <li>
                                        <a href="{{asset('storage/datasheet/mpi-series/digital-media-selector.pdf')}}"
                                           data-toggle="tooltip" title="Click here to download!"
                                           data-placement="right">Digital Media Selector</a></li>
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
            </div>

            <div data-aos="fade-down" class="row text-center" style="padding: 0 0 6em 0;">
                <div class="col-lg-12">
                    <a href="{{route('show.gallery')}}" class="btn btn-dark-red">
                        <b><i class="fa fa-photo-video"></i>&ensp;MORE VIDEOS</b></a>
                </div>
            </div>
        </div>
    </div>

    <section class="features-3">
        <h2 data-aos="fade-down">Benchmark <strong>Test Results</strong></h2>
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <h3 data-aos="fade-down">Avery Dennison® MPI&trade; 1105 EA RS</h3>
                    <p data-aos="fade-down" align="justify"><strong>8</strong> digitally printable vehicle wrapping
                        films produced by major media manufactures and <strong>4</strong> independent applicators.</p>
                    <p data-aos="fade-down" align="justify" class="text">Media chosen for this benchmark was consisting
                        of EA RS equivalents <sub>(RS if available)</sub> in the market and rated for conformability,
                        slideability, etc.</p>
                </div>
                <div class="col-md-7">
                    <h3 data-aos="fade-down">Peak Performance</h3>
                    <p data-aos="fade-down" align="justify">The Independent Test Results</p>
                    <img data-aos="fade-down" src="{{asset('images/product-overview/mpi-bm1.png')}}" alt="">
                </div>
            </div>
            <div class="row">
                <div class="col-md-7">
                    <h3 data-aos="fade-down">TOP 5</h3>
                    <p data-aos="fade-down" align="justify">Overall Performance</p>
                    <img data-aos="fade-down" src="{{asset('images/product-overview/mpi-bm2.png')}}" alt=""
                         style="margin-top: -6em">
                </div>
                <div class="col-md-5">
                    <img data-aos="fade-down" src="{{asset('images/home/installer.png')}}" alt="">
                </div>
            </div>
        </div>
    </section>

    <section class="features-3">
        <h2 data-aos="fade-down">Hints & <strong>Tips</strong></h2>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h4 data-aos="fade-down" style="color: #eee">How should I outgas?</h4>
                    <ul align="justify">
                        <li data-aos="fade-down">Outgassing is the process of removing
                            solvents from the printed graphic. Prior to lamination, prints should be
                            left at 23°C, for a minimum of 48 Hours. Images with dense colors may
                            need more time. There should be a constant flow of air over the graphics
                            to ensure the solvent is moved away from the face. As solvent is heavier
                            than air, it will not move unless aided from airflow.
                        </li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <h4 data-aos="fade-down" style="color: #eee">Why should I outgas?</h4>
                    <ul align="justify">
                        <li data-aos="fade-down">Solvents still within the prints
                            will cause the film to feel tacky when applying. Solvents soften the
                            adhesive, removing any adhesive benefits. Once the graphic is applied,
                            the solvent continues to soften and weaken the adhesive. Beware on panel
                            edges and recesses, where the adhesive is weakened and no longer able to
                            adhere, causing the film to ‘pop’ from the recess.
                        </li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <h4 data-aos="fade-down" style="color: #eee">How should I post heat?</h4>
                    <ul align="justify">
                        <li data-aos="fade-down">Post heating must be done after each
                            panel is completed using a digital thermometer for accurate
                            temperatures. Always remove the heat gun from the area you’re measuring,
                            heat and measure every 3-4 inches referring to product bulletins for
                            recommended temperatures. Use a small channel roller in the
                            recesses.
                        </li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <h4 data-aos="fade-down" style="color: #eee">Why should I post heat?</h4>
                    <ul align="justify">
                        <li data-aos="fade-down">Post heating speeds up the process
                            of adhesive flow and helps reach maximum adhesive bond over a short
                            amount of time. Post heating removes the film memory. If you do not post
                            heat correctly this will cause the film to pop from a recess
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
        $(function () {
            $("#kb-tab").click();
            $("#kf-tab").click();
        });

        var $img = $(".mpi-series"), images = ['mpi-series1.jpg', 'mpi-series2.jpg', 'mpi-series3.jpg'],
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
    </script>
@endpush
