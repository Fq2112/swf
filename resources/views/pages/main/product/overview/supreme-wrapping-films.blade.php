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
        <ul class="crumb">
            <li><a href="{{route('home')}}"><i class="fa fa-home"></i></a></li>
            <li><a href="{{route('home')}}"><i class="fa fa-angle-double-right"></i> Home</a></li>
            <li><i class="fa fa-angle-double-right"></i></li>
            <li><a href="{{route('show.blog')}}"><i class="fa fa-blog"></i></a></li>
            <li><a href="{{url()->current()}}"><i class="fa fa-car"></i></a></li>
            <li><a href="{{url()->current()}}"><i class="fa fa-angle-double-right"></i> Overview</a></li>
            <li><a href="#" onclick="goToAnchor()"><i class="fa fa-angle-double-right"></i> Supreme Wrapping&trade;
                    Films</a></li>
        </ul>
    </div>

    <div class="page-content page-sidebar">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div data-aos="zoom-out" class="content-area">
                        <img id="swf-switch" src="{{asset('images/product-overview/swf-overview1.png')}}"
                             class="img-responsive" alt="Supreme Wrapping&trade; Films">
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
                                    <div class="col-md-6">
                                        <h4 style="color: #eee">Gloss</h4>
                                        <div class="ig-feed owl-carousel">
                                            <div data-aos="zoom-out" class="item content-area"
                                                 data-src="{{asset('images/product-overview/colors/swf-g-burgundy.png')}}"
                                                 data-sub-html="<h4>SW 900-475-O</h4><p style='color: #fff;'>Burgundy</p>">
                                                <img
                                                    src="{{asset('images/product-overview/colors/swf-g-burgundy.png')}}"
                                                    alt="SW 900-475-O">
                                                <div class="custom-overlay">
                                                    <div class="custom-text">
                                                        <h4>SW 900-475-O</h4>
                                                    </div>
                                                </div>
                                            </div>
                                            <div data-aos="zoom-out" class="item content-area"
                                                 data-src="{{asset('images/product-overview/colors/swf-g-carmine-red.png')}}"
                                                 data-sub-html="<h4>SW 900-436-O</h4><p style='color: #fff;'>Carmine Red</p>">
                                                <img
                                                    src="{{asset('images/product-overview/colors/swf-g-carmine-red.png')}}"
                                                    alt="SW 900-436-O">
                                                <div class="custom-overlay">
                                                    <div class="custom-text">
                                                        <h4>SW 900-436-O</h4>
                                                    </div>
                                                </div>
                                            </div>
                                            <div data-aos="zoom-out" class="item content-area"
                                                 data-src="{{asset('images/product-overview/colors/swf-g-soft-red.png')}}"
                                                 data-sub-html="<h4>SW 900-427-O</h4><p style='color: #fff;'>Soft Red</p>">
                                                <img
                                                    src="{{asset('images/product-overview/colors/swf-g-soft-red.png')}}"
                                                    alt="SW 900-427-O">
                                                <div class="custom-overlay">
                                                    <div class="custom-text">
                                                        <h4>SW 900-427-O</h4>
                                                    </div>
                                                </div>
                                            </div>
                                            <div data-aos="zoom-out" class="item content-area"
                                                 data-src="{{asset('images/product-overview/colors/swf-g-cardinal-red.png')}}"
                                                 data-sub-html="<h4>SW 900-433-O</h4><p style='color: #fff;'>Cardinal Red</p>">
                                                <img
                                                    src="{{asset('images/product-overview/colors/swf-g-cardinal-red.png')}}"
                                                    alt="SW 900-433-O">
                                                <div class="custom-overlay">
                                                    <div class="custom-text">
                                                        <h4>SW 900-433-O</h4>
                                                    </div>
                                                </div>
                                            </div>
                                            <div data-aos="zoom-out" class="item content-area"
                                                 data-src="{{asset('images/product-overview/colors/swf-g-red.png')}}"
                                                 data-sub-html="<h4>SW 900-415-O</h4><p style='color: #fff;'>Red</p>">
                                                <img src="{{asset('images/product-overview/colors/swf-g-red.png')}}"
                                                     alt="SW 900-415-O">
                                                <div class="custom-overlay">
                                                    <div class="custom-text">
                                                        <h4>SW 900-415-O</h4>
                                                    </div>
                                                </div>
                                            </div>
                                            <div data-aos="zoom-out" class="item content-area"
                                                 data-src="{{asset('images/product-overview/colors/swf-g-orange.png')}}"
                                                 data-sub-html="<h4>SW 900-373-O</h4><p style='color: #fff;'>Orange</p>">
                                                <img src="{{asset('images/product-overview/colors/swf-g-orange.png')}}"
                                                     alt="SW 900-373-O">
                                                <div class="custom-overlay">
                                                    <div class="custom-text">
                                                        <h4>SW 900-373-O</h4>
                                                    </div>
                                                </div>
                                            </div>
                                            <div data-aos="zoom-out" class="item content-area"
                                                 data-src="{{asset('images/product-overview/colors/swf-g-dark-yellow.png')}}"
                                                 data-sub-html="<h4>SW 900-249-O</h4><p style='color: #fff;'>Dark Yellow</p>">
                                                <img
                                                    src="{{asset('images/product-overview/colors/swf-g-dark-yellow.png')}}"
                                                    alt="SW 900-249-O">
                                                <div class="custom-overlay">
                                                    <div class="custom-text">
                                                        <h4>SW 900-249-O</h4>
                                                    </div>
                                                </div>
                                            </div>
                                            <div data-aos="zoom-out" class="item content-area"
                                                 data-src="{{asset('images/product-overview/colors/swf-g-yellow.png')}}"
                                                 data-sub-html="<h4>SW 900-235-O</h4><p style='color: #fff;'>Yellow</p>">
                                                <img src="{{asset('images/product-overview/colors/swf-g-yellow.png')}}"
                                                     alt="SW 900-235-O">
                                                <div class="custom-overlay">
                                                    <div class="custom-text">
                                                        <h4>SW 900-235-O</h4>
                                                    </div>
                                                </div>
                                            </div>
                                            <div data-aos="zoom-out" class="item content-area"
                                                 data-src="{{asset('images/product-overview/colors/swf-g-ambulance-yellow.png')}}"
                                                 data-sub-html="<h4>SW 900-236-O</h4><p style='color: #fff;'>Ambulance Yellow</p>">
                                                <img
                                                    src="{{asset('images/product-overview/colors/swf-g-ambulance-yellow.png')}}"
                                                    alt="SW 900-236-O">
                                                <div class="custom-overlay">
                                                    <div class="custom-text">
                                                        <h4>SW 900-236-O</h4>
                                                    </div>
                                                </div>
                                            </div>
                                            <div data-aos="zoom-out" class="item content-area"
                                                 data-src="{{asset('images/product-overview/colors/swf-g-light-pistachio.png')}}"
                                                 data-sub-html="<h4>SW 900-728-O</h4><p style='color: #fff;'>Light Pistachio</p>">
                                                <img
                                                    src="{{asset('images/product-overview/colors/swf-g-light-pistachio.png')}}"
                                                    alt="SW 900-728-O">
                                                <div class="custom-overlay">
                                                    <div class="custom-text">
                                                        <h4>SW 900-728-O</h4>
                                                    </div>
                                                </div>
                                            </div>
                                            <div data-aos="zoom-out" class="item content-area"
                                                 data-src="{{asset('images/product-overview/colors/swf-g-lime-green.png')}}"
                                                 data-sub-html="<h4>SW 900-731-O</h4><p style='color: #fff;'>Lime Green</p>">
                                                <img
                                                    src="{{asset('images/product-overview/colors/swf-g-lime-green.png')}}"
                                                    alt="SW 900-731-O">
                                                <div class="custom-overlay">
                                                    <div class="custom-text">
                                                        <h4>SW 900-731-O</h4>
                                                    </div>
                                                </div>
                                            </div>
                                            <div data-aos="zoom-out" class="item content-area"
                                                 data-src="{{asset('images/product-overview/colors/swf-g-grass-green.png')}}"
                                                 data-sub-html="<h4>SW 900-758-O</h4><p style='color: #fff;'>Grass Green</p>">
                                                <img
                                                    src="{{asset('images/product-overview/colors/swf-g-grass-green.png')}}"
                                                    alt="SW 900-758-O">
                                                <div class="custom-overlay">
                                                    <div class="custom-text">
                                                        <h4>SW 900-758-O</h4>
                                                    </div>
                                                </div>
                                            </div>
                                            <div data-aos="zoom-out" class="item content-area"
                                                 data-src="{{asset('images/product-overview/colors/swf-g-dark-green.png')}}"
                                                 data-sub-html="<h4>SW 900-792-O</h4><p style='color: #fff;'>Dark Green</p>">
                                                <img
                                                    src="{{asset('images/product-overview/colors/swf-g-dark-green.png')}}"
                                                    alt="SW 900-792-O">
                                                <div class="custom-overlay">
                                                    <div class="custom-text">
                                                        <h4>SW 900-792-O</h4>
                                                    </div>
                                                </div>
                                            </div>
                                            <div data-aos="zoom-out" class="item content-area"
                                                 data-src="{{asset('images/product-overview/colors/swf-g-sea-breeze-blue.png')}}"
                                                 data-sub-html="<h4>SW 900-648-O</h4><p style='color: #fff;'>Sea Breeze Blue</p>">
                                                <img
                                                    src="{{asset('images/product-overview/colors/swf-g-sea-breeze-blue.png')}}"
                                                    alt="SW 900-648-O">
                                                <div class="custom-overlay">
                                                    <div class="custom-text">
                                                        <h4>SW 900-648-O</h4>
                                                    </div>
                                                </div>
                                            </div>
                                            <div data-aos="zoom-out" class="item content-area"
                                                 data-src="{{asset('images/product-overview/colors/swf-g-cloudy-blue.png')}}"
                                                 data-sub-html="<h4>SW 900-656-O</h4><p style='color: #fff;'>Cloudy Blue</p>">
                                                <img
                                                    src="{{asset('images/product-overview/colors/swf-g-cloudy-blue.png')}}"
                                                    alt="SW 900-656-O">
                                                <div class="custom-overlay">
                                                    <div class="custom-text">
                                                        <h4>SW 900-656-O</h4>
                                                    </div>
                                                </div>
                                            </div>
                                            <div data-aos="zoom-out" class="item content-area"
                                                 data-src="{{asset('images/product-overview/colors/swf-g-smoky-blue.png')}}"
                                                 data-sub-html="<h4>SW 900-612-O</h4><p style='color: #fff;'>Smoky Blue</p>">
                                                <img
                                                    src="{{asset('images/product-overview/colors/swf-g-smoky-blue.png')}}"
                                                    alt="SW 900-612-O">
                                                <div class="custom-overlay">
                                                    <div class="custom-text">
                                                        <h4>SW 900-612-O</h4>
                                                    </div>
                                                </div>
                                            </div>
                                            <div data-aos="zoom-out" class="item content-area"
                                                 data-src="{{asset('images/product-overview/colors/swf-g-light-blue.png')}}"
                                                 data-sub-html="<h4>SW 900-632-O</h4><p style='color: #fff;'>Light Blue</p>">
                                                <img
                                                    src="{{asset('images/product-overview/colors/swf-g-light-blue.png')}}"
                                                    alt="SW 900-632-O">
                                                <div class="custom-overlay">
                                                    <div class="custom-text">
                                                        <h4>SW 900-632-O</h4>
                                                    </div>
                                                </div>
                                            </div>
                                            <div data-aos="zoom-out" class="item content-area"
                                                 data-src="{{asset('images/product-overview/colors/swf-g-intense-blue.png')}}"
                                                 data-sub-html="<h4>SW 900-667-O</h4><p style='color: #fff;'>Intense Blue</p>">
                                                <img
                                                    src="{{asset('images/product-overview/colors/swf-g-intense-blue.png')}}"
                                                    alt="SW 900-667-O">
                                                <div class="custom-overlay">
                                                    <div class="custom-text">
                                                        <h4>SW 900-667-O</h4>
                                                    </div>
                                                </div>
                                            </div>
                                            <div data-aos="zoom-out" class="item content-area"
                                                 data-src="{{asset('images/product-overview/colors/swf-g-blue.png')}}"
                                                 data-sub-html="<h4>SW 900-677-O</h4><p style='color: #fff;'>Blue</p>">
                                                <img src="{{asset('images/product-overview/colors/swf-g-blue.png')}}"
                                                     alt="SW 900-677-O">
                                                <div class="custom-overlay">
                                                    <div class="custom-text">
                                                        <h4>SW 900-677-O</h4>
                                                    </div>
                                                </div>
                                            </div>
                                            <div data-aos="zoom-out" class="item content-area"
                                                 data-src="{{asset('images/product-overview/colors/swf-g-dark-blue.png')}}"
                                                 data-sub-html="<h4>SW 900-681-O</h4><p style='color: #fff;'>Dark Blue</p>">
                                                <img
                                                    src="{{asset('images/product-overview/colors/swf-g-dark-blue.png')}}"
                                                    alt="SW 900-681-O">
                                                <div class="custom-overlay">
                                                    <div class="custom-text">
                                                        <h4>SW 900-681-O</h4>
                                                    </div>
                                                </div>
                                            </div>
                                            <div data-aos="zoom-out" class="item content-area"
                                                 data-src="{{asset('images/product-overview/colors/swf-g-indigo-blue.png')}}"
                                                 data-sub-html="<h4>SW 900-699-O</h4><p style='color: #fff;'>Indigo Blue</p>">
                                                <img
                                                    src="{{asset('images/product-overview/colors/swf-g-indigo-blue.png')}}"
                                                    alt="SW 900-699-O">
                                                <div class="custom-overlay">
                                                    <div class="custom-text">
                                                        <h4>SW 900-699-O</h4>
                                                    </div>
                                                </div>
                                            </div>
                                            <div data-aos="zoom-out" class="item content-area"
                                                 data-src="{{asset('images/product-overview/colors/swf-g-white.png')}}"
                                                 data-sub-html="<h4>SW 900-101-O</h4><p style='color: #fff;'>White</p>">
                                                <img src="{{asset('images/product-overview/colors/swf-g-white.png')}}"
                                                     alt="SW 900-101-O">
                                                <div class="custom-overlay">
                                                    <div class="custom-text">
                                                        <h4>SW 900-101-O</h4>
                                                    </div>
                                                </div>
                                            </div>
                                            <div data-aos="zoom-out" class="item content-area"
                                                 data-src="{{asset('images/product-overview/colors/swf-g-grey.png')}}"
                                                 data-sub-html="<h4>SW 900-832-O</h4><p style='color: #fff;'>Grey</p>">
                                                <img src="{{asset('images/product-overview/colors/swf-g-grey.png')}}"
                                                     alt="SW 900-832-O">
                                                <div class="custom-overlay">
                                                    <div class="custom-text">
                                                        <h4>SW 900-832-O</h4>
                                                    </div>
                                                </div>
                                            </div>
                                            <div data-aos="zoom-out" class="item content-area"
                                                 data-src="{{asset('images/product-overview/colors/swf-g-dark-grey.png')}}"
                                                 data-sub-html="<h4>SW 900-865-O</h4><p style='color: #fff;'>Dark Grey</p>">
                                                <img
                                                    src="{{asset('images/product-overview/colors/swf-g-dark-grey.png')}}"
                                                    alt="SW 900-865-O">
                                                <div class="custom-overlay">
                                                    <div class="custom-text">
                                                        <h4>SW 900-865-O</h4>
                                                    </div>
                                                </div>
                                            </div>
                                            <div data-aos="zoom-out" class="item content-area"
                                                 data-src="{{asset('images/product-overview/colors/swf-g-rock-grey.png')}}"
                                                 data-sub-html="<h4>SW 900-821-O</h4><p style='color: #fff;'>Rock Grey</p>">
                                                <img
                                                    src="{{asset('images/product-overview/colors/swf-g-rock-grey.png')}}"
                                                    alt="SW 900-821-O">
                                                <div class="custom-overlay">
                                                    <div class="custom-text">
                                                        <h4>SW 900-821-O</h4>
                                                    </div>
                                                </div>
                                            </div>
                                            <div data-aos="zoom-out" class="item content-area"
                                                 data-src="{{asset('images/product-overview/colors/swf-g-black.png')}}"
                                                 data-sub-html="<h4>SW 900-190-O</h4><p style='color: #fff;'>Black</p>">
                                                <img src="{{asset('images/product-overview/colors/swf-g-black.png')}}"
                                                     alt="SW 900-190-O">
                                                <div class="custom-overlay">
                                                    <div class="custom-text">
                                                        <h4>SW 900-190-O</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <h4 style="color: #eee">Gloss Metallic</h4>
                                        <div class="ig-feed owl-carousel">
                                            <div data-aos="zoom-out" class="item content-area"
                                                 data-src="{{asset('images/product-overview/colors/swf-gm-spark.png')}}"
                                                 data-sub-html="<h4>SW 900-419-M</h4><p style='color: #fff;'>Spark</p>">
                                                <img
                                                    src="{{asset('images/product-overview/colors/swf-gm-spark.png')}}"
                                                    alt="SW 900-419-M">
                                                <div class="custom-overlay">
                                                    <div class="custom-text">
                                                        <h4>SW 900-419-M</h4>
                                                    </div>
                                                </div>
                                            </div>
                                            <div data-aos="zoom-out" class="item content-area"
                                                 data-src="{{asset('images/product-overview/colors/swf-gm-passion-red.png')}}"
                                                 data-sub-html="<h4>SW 900-448-S</h4><p style='color: #fff;'>Passion Red</p>">
                                                <img
                                                    src="{{asset('images/product-overview/colors/swf-gm-passion-red.png')}}"
                                                    alt="SW 900-448-S">
                                                <div class="custom-overlay">
                                                    <div class="custom-text">
                                                        <h4>SW 900-448-S</h4>
                                                    </div>
                                                </div>
                                            </div>
                                            <div data-aos="zoom-out" class="item content-area"
                                                 data-src="{{asset('images/product-overview/colors/swf-gm-fun-purple.png')}}"
                                                 data-sub-html="<h4>SW 900-568-S</h4><p style='color: #fff;'>Fun Purple</p>">
                                                <img
                                                    src="{{asset('images/product-overview/colors/swf-gm-fun-purple.png')}}"
                                                    alt="SW 900-568-S">
                                                <div class="custom-overlay">
                                                    <div class="custom-text">
                                                        <h4>SW 900-568-S</h4>
                                                    </div>
                                                </div>
                                            </div>
                                            <div data-aos="zoom-out" class="item content-area"
                                                 data-src="{{asset('images/product-overview/colors/swf-gm-sand-sparkle.png')}}"
                                                 data-sub-html="<h4>SW 900-255-M</h4><p style='color: #fff;'>Sand Sparkle</p>">
                                                <img
                                                    src="{{asset('images/product-overview/colors/swf-gm-sand-sparkle.png')}}"
                                                    alt="SW 900-255-M">
                                                <div class="custom-overlay">
                                                    <div class="custom-text">
                                                        <h4>SW 900-255-M</h4>
                                                    </div>
                                                </div>
                                            </div>
                                            <div data-aos="zoom-out" class="item content-area"
                                                 data-src="{{asset('images/product-overview/colors/swf-gm-gold.png')}}"
                                                 data-sub-html="<h4>SW 900-215-M</h4><p style='color: #fff;'>Gold</p>">
                                                <img
                                                    src="{{asset('images/product-overview/colors/swf-gm-gold.png')}}"
                                                    alt="SW 900-215-M">
                                                <div class="custom-overlay">
                                                    <div class="custom-text">
                                                        <h4>SW 900-215-M</h4>
                                                    </div>
                                                </div>
                                            </div>
                                            <div data-aos="zoom-out" class="item content-area"
                                                 data-src="{{asset('images/product-overview/colors/swf-gm-radioactive.png')}}"
                                                 data-sub-html="<h4>SW 900-762-M</h4><p style='color: #fff;'>Radioactive</p>">
                                                <img
                                                    src="{{asset('images/product-overview/colors/swf-gm-radioactive.png')}}"
                                                    alt="SW 900-762-M">
                                                <div class="custom-overlay">
                                                    <div class="custom-text">
                                                        <h4>SW 900-762-M</h4>
                                                    </div>
                                                </div>
                                            </div>
                                            <div data-aos="zoom-out" class="item content-area"
                                                 data-src="{{asset('images/product-overview/colors/swf-gm-bright-blue.png')}}"
                                                 data-sub-html="<h4>SW 900-646-M</h4><p style='color: #fff;'>Bright Blue</p>">
                                                <img
                                                    src="{{asset('images/product-overview/colors/swf-gm-bright-blue.png')}}"
                                                    alt="SW 900-646-M">
                                                <div class="custom-overlay">
                                                    <div class="custom-text">
                                                        <h4>SW 900-646-M</h4>
                                                    </div>
                                                </div>
                                            </div>
                                            <div data-aos="zoom-out" class="item content-area"
                                                 data-src="{{asset('images/product-overview/colors/swf-gm-dark-blue.png')}}"
                                                 data-sub-html="<h4>SW 900-653-M</h4><p style='color: #fff;'>Dark Blue</p>">
                                                <img
                                                    src="{{asset('images/product-overview/colors/swf-gm-dark-blue.png')}}"
                                                    alt="SW 900-653-M">
                                                <div class="custom-overlay">
                                                    <div class="custom-text">
                                                        <h4>SW 900-653-M</h4>
                                                    </div>
                                                </div>
                                            </div>
                                            <div data-aos="zoom-out" class="item content-area"
                                                 data-src="{{asset('images/product-overview/colors/swf-gm-magnetic-burst.png')}}"
                                                 data-sub-html="<h4>SW 900-679-M</h4><p style='color: #fff;'>Magnetic Burst</p>">
                                                <img
                                                    src="{{asset('images/product-overview/colors/swf-gm-magnetic-burst.png')}}"
                                                    alt="SW 900-679-M">
                                                <div class="custom-overlay">
                                                    <div class="custom-text">
                                                        <h4>SW 900-679-M</h4>
                                                    </div>
                                                </div>
                                            </div>
                                            <div data-aos="zoom-out" class="item content-area"
                                                 data-src="{{asset('images/product-overview/colors/swf-gm-silver.png')}}"
                                                 data-sub-html="<h4>SW 900-803-M</h4><p style='color: #fff;'>Silver</p>">
                                                <img
                                                    src="{{asset('images/product-overview/colors/swf-gm-silver.png')}}"
                                                    alt="SW 900-803-M">
                                                <div class="custom-overlay">
                                                    <div class="custom-text">
                                                        <h4>SW 900-803-M</h4>
                                                    </div>
                                                </div>
                                            </div>
                                            <div data-aos="zoom-out" class="item content-area"
                                                 data-src="{{asset('images/product-overview/colors/swf-gm-quick-silver.png')}}"
                                                 data-sub-html="<h4>SW 900-816-M</h4><p style='color: #fff;'>Quick Silver</p>">
                                                <img
                                                    src="{{asset('images/product-overview/colors/swf-gm-quick-silver.png')}}"
                                                    alt="SW 900-816-M">
                                                <div class="custom-overlay">
                                                    <div class="custom-text">
                                                        <h4>SW 900-816-M</h4>
                                                    </div>
                                                </div>
                                            </div>
                                            <div data-aos="zoom-out" class="item content-area"
                                                 data-src="{{asset('images/product-overview/colors/swf-gm-grey.png')}}"
                                                 data-sub-html="<h4>SW 900-807-M</h4><p style='color: #fff;'>Grey</p>">
                                                <img
                                                    src="{{asset('images/product-overview/colors/swf-gm-grey.png')}}"
                                                    alt="SW 900-807-M">
                                                <div class="custom-overlay">
                                                    <div class="custom-text">
                                                        <h4>SW 900-807-M</h4>
                                                    </div>
                                                </div>
                                            </div>
                                            <div data-aos="zoom-out" class="item content-area"
                                                 data-src="{{asset('images/product-overview/colors/swf-gm-brown.png')}}"
                                                 data-sub-html="<h4>SW 900-929-M</h4><p style='color: #fff;'>Brown</p>">
                                                <img
                                                    src="{{asset('images/product-overview/colors/swf-gm-brown.png')}}"
                                                    alt="SW 900-929-M">
                                                <div class="custom-overlay">
                                                    <div class="custom-text">
                                                        <h4>SW 900-929-M</h4>
                                                    </div>
                                                </div>
                                            </div>
                                            <div data-aos="zoom-out" class="item content-area"
                                                 data-src="{{asset('images/product-overview/colors/swf-gm-eclipse.png')}}"
                                                 data-sub-html="<h4>SW 900-199-M</h4><p style='color: #fff;'>Eclipse</p>">
                                                <img
                                                    src="{{asset('images/product-overview/colors/swf-gm-eclipse.png')}}"
                                                    alt="SW 900-199-M">
                                                <div class="custom-overlay">
                                                    <div class="custom-text">
                                                        <h4>SW 900-199-M</h4>
                                                    </div>
                                                </div>
                                            </div>
                                            <div data-aos="zoom-out" class="item content-area"
                                                 data-src="{{asset('images/product-overview/colors/swf-gm-black.png')}}"
                                                 data-sub-html="<h4>SW 900-192-M</h4><p style='color: #fff;'>Black</p>">
                                                <img
                                                    src="{{asset('images/product-overview/colors/swf-gm-black.png')}}"
                                                    alt="SW 900-192-M">
                                                <div class="custom-overlay">
                                                    <div class="custom-text">
                                                        <h4>SW 900-192-M</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row" style="margin-bottom: 1em">
                                    <div class="col-md-6">
                                        <h4 style="color: #eee">Satin</h4>
                                        <div class="ig-feed owl-carousel">
                                            <div data-aos="zoom-out" class="item content-area"
                                                 data-src="{{asset('images/product-overview/colors/swf-s-carmine-red.png')}}"
                                                 data-sub-html="<h4>SW 900-438-O</h4><p style='color: #fff;'>Carmine Red</p>">
                                                <img
                                                    src="{{asset('images/product-overview/colors/swf-s-carmine-red.png')}}"
                                                    alt="SW 900-438-O">
                                                <div class="custom-overlay">
                                                    <div class="custom-text">
                                                        <h4>SW 900-438-O</h4>
                                                    </div>
                                                </div>
                                            </div>
                                            <div data-aos="zoom-out" class="item content-area"
                                                 data-src="{{asset('images/product-overview/colors/swf-s-orange.png')}}"
                                                 data-sub-html="<h4>SW 900-372-O</h4><p style='color: #fff;'>Orange</p>">
                                                <img src="{{asset('images/product-overview/colors/swf-s-orange.png')}}"
                                                     alt="SW 900-372-O">
                                                <div class="custom-overlay">
                                                    <div class="custom-text">
                                                        <h4>SW 900-372-O</h4>
                                                    </div>
                                                </div>
                                            </div>
                                            <div data-aos="zoom-out" class="item content-area"
                                                 data-src="{{asset('images/product-overview/colors/swf-s-yellow.png')}}"
                                                 data-sub-html="<h4>SW 900-226-O</h4><p style='color: #fff;'>Yellow</p>">
                                                <img src="{{asset('images/product-overview/colors/swf-s-yellow.png')}}"
                                                     alt="SW 900-226-O">
                                                <div class="custom-overlay">
                                                    <div class="custom-text">
                                                        <h4>SW 900-226-O</h4>
                                                    </div>
                                                </div>
                                            </div>
                                            <div data-aos="zoom-out" class="item content-area"
                                                 data-src="{{asset('images/product-overview/colors/swf-s-safari-gold.png')}}"
                                                 data-sub-html="<h4>SW 900-260-O</h4><p style='color: #fff;'>Safari Gold</p>">
                                                <img
                                                    src="{{asset('images/product-overview/colors/swf-s-safari-gold.png')}}"
                                                    alt="SW 900-260-O">
                                                <div class="custom-overlay">
                                                    <div class="custom-text">
                                                        <h4>SW 900-260-O</h4>
                                                    </div>
                                                </div>
                                            </div>
                                            <div data-aos="zoom-out" class="item content-area"
                                                 data-src="{{asset('images/product-overview/colors/swf-s-khaki-green.png')}}"
                                                 data-sub-html="<h4>SW 900-712-O</h4><p style='color: #fff;'>Khaki Green</p>">
                                                <img
                                                    src="{{asset('images/product-overview/colors/swf-s-khaki-green.png')}}"
                                                    alt="SW 900-712-O">
                                                <div class="custom-overlay">
                                                    <div class="custom-text">
                                                        <h4>SW 900-712-O</h4>
                                                    </div>
                                                </div>
                                            </div>
                                            <div data-aos="zoom-out" class="item content-area"
                                                 data-src="{{asset('images/product-overview/colors/swf-s-grass-green.png')}}"
                                                 data-sub-html="<h4>SW 900-759-O</h4><p style='color: #fff;'>Grass Green</p>">
                                                <img
                                                    src="{{asset('images/product-overview/colors/swf-s-grass-green.png')}}"
                                                    alt="SW 900-759-O">
                                                <div class="custom-overlay">
                                                    <div class="custom-text">
                                                        <h4>SW 900-759-O</h4>
                                                    </div>
                                                </div>
                                            </div>
                                            <div data-aos="zoom-out" class="item content-area"
                                                 data-src="{{asset('images/product-overview/colors/swf-s-light-blue.png')}}"
                                                 data-sub-html="<h4>SW 900-633-O</h4><p style='color: #fff;'>Light Blue</p>">
                                                <img
                                                    src="{{asset('images/product-overview/colors/swf-s-light-blue.png')}}"
                                                    alt="SW 900-633-O">
                                                <div class="custom-overlay">
                                                    <div class="custom-text">
                                                        <h4>SW 900-633-O</h4>
                                                    </div>
                                                </div>
                                            </div>
                                            <div data-aos="zoom-out" class="item content-area"
                                                 data-src="{{asset('images/product-overview/colors/swf-s-dark-blue.png')}}"
                                                 data-sub-html="<h4>SW 900-682-O</h4><p style='color: #fff;'>Dark Blue</p>">
                                                <img
                                                    src="{{asset('images/product-overview/colors/swf-s-dark-blue.png')}}"
                                                    alt="SW 900-682-O">
                                                <div class="custom-overlay">
                                                    <div class="custom-text">
                                                        <h4>SW 900-682-O</h4>
                                                    </div>
                                                </div>
                                            </div>
                                            <div data-aos="zoom-out" class="item content-area"
                                                 data-src="{{asset('images/product-overview/colors/swf-s-awesome-orchid.png')}}"
                                                 data-sub-html="<h4>SW 900-502-O</h4><p style='color: #fff;'>Awesome Orchid</p>">
                                                <img
                                                    src="{{asset('images/product-overview/colors/swf-s-awesome-orchid.png')}}"
                                                    alt="SW 900-502-O">
                                                <div class="custom-overlay">
                                                    <div class="custom-text">
                                                        <h4>SW 900-502-O</h4>
                                                    </div>
                                                </div>
                                            </div>
                                            <div data-aos="zoom-out" class="item content-area"
                                                 data-src="{{asset('images/product-overview/colors/swf-s-bubblegum-pink.png')}}"
                                                 data-sub-html="<h4>SW 900-514-O</h4><p style='color: #fff;'>Bubblegum Pink</p>">
                                                <img
                                                    src="{{asset('images/product-overview/colors/swf-s-bubblegum-pink.png')}}"
                                                    alt="SW 900-514-O">
                                                <div class="custom-overlay">
                                                    <div class="custom-text">
                                                        <h4>SW 900-514-O</h4>
                                                    </div>
                                                </div>
                                            </div>
                                            <div data-aos="zoom-out" class="item content-area"
                                                 data-src="{{asset('images/product-overview/colors/swf-s-white.png')}}"
                                                 data-sub-html="<h4>SW 900-116-O</h4><p style='color: #fff;'>White</p>">
                                                <img src="{{asset('images/product-overview/colors/swf-s-white.png')}}"
                                                     alt="SW 900-116-O">
                                                <div class="custom-overlay">
                                                    <div class="custom-text">
                                                        <h4>SW 900-116-O</h4>
                                                    </div>
                                                </div>
                                            </div>
                                            <div data-aos="zoom-out" class="item content-area"
                                                 data-src="{{asset('images/product-overview/colors/swf-s-white-pearl.png')}}"
                                                 data-sub-html="<h4>SW 900-117-O</h4><p style='color: #fff;'>White Pearl</p>">
                                                <img
                                                    src="{{asset('images/product-overview/colors/swf-s-white-pearl.png')}}"
                                                    alt="SW 900-117-O">
                                                <div class="custom-overlay">
                                                    <div class="custom-text">
                                                        <h4>SW 900-117-O</h4>
                                                    </div>
                                                </div>
                                            </div>
                                            <div data-aos="zoom-out" class="item content-area"
                                                 data-src="{{asset('images/product-overview/colors/swf-s-grey.png')}}"
                                                 data-sub-html="<h4>SW 900-833-O</h4><p style='color: #fff;'>Grey</p>">
                                                <img src="{{asset('images/product-overview/colors/swf-s-grey.png')}}"
                                                     alt="SW 900-833-O">
                                                <div class="custom-overlay">
                                                    <div class="custom-text">
                                                        <h4>SW 900-833-O</h4>
                                                    </div>
                                                </div>
                                            </div>
                                            <div data-aos="zoom-out" class="item content-area"
                                                 data-src="{{asset('images/product-overview/colors/swf-s-dark-basalt.png')}}"
                                                 data-sub-html="<h4>SW 900-871-O</h4><p style='color: #fff;'>Dark Basalt</p>">
                                                <img
                                                    src="{{asset('images/product-overview/colors/swf-s-dark-basalt.png')}}"
                                                    alt="SW 900-871-O">
                                                <div class="custom-overlay">
                                                    <div class="custom-text">
                                                        <h4>SW 900-871-O</h4>
                                                    </div>
                                                </div>
                                            </div>
                                            <div data-aos="zoom-out" class="item content-area"
                                                 data-src="{{asset('images/product-overview/colors/swf-s-black.png')}}"
                                                 data-sub-html="<h4>SW 900-197-O</h4><p style='color: #fff;'>Black</p>">
                                                <img src="{{asset('images/product-overview/colors/swf-s-black.png')}}"
                                                     alt="SW 900-197-O">
                                                <div class="custom-overlay">
                                                    <div class="custom-text">
                                                        <h4>SW 900-197-O</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <h4 style="color: #eee">Satin Metallic</h4>
                                        <div class="ig-feed owl-carousel">
                                            <div data-aos="zoom-out" class="item content-area"
                                                 data-src="{{asset('images/product-overview/colors/swf-sm-energetic-yellow.png')}}"
                                                 data-sub-html="<h4>SW 900-261-S</h4><p style='color: #fff;'>Energetic Yellow</p>">
                                                <img
                                                    src="{{asset('images/product-overview/colors/swf-sm-energetic-yellow.png')}}"
                                                    alt="SW 900-261-S">
                                                <div class="custom-overlay">
                                                    <div class="custom-text">
                                                        <h4>SW 900-261-S</h4>
                                                    </div>
                                                </div>
                                            </div>
                                            <div data-aos="zoom-out" class="item content-area"
                                                 data-src="{{asset('images/product-overview/colors/swf-sm-hope-green.png')}}"
                                                 data-sub-html="<h4>SW 900-767-S</h4><p style='color: #fff;'>Hope Green</p>">
                                                <img
                                                    src="{{asset('images/product-overview/colors/swf-sm-hope-green.png')}}"
                                                    alt="SW 900-767-S">
                                                <div class="custom-overlay">
                                                    <div class="custom-text">
                                                        <h4>SW 900-767-S</h4>
                                                    </div>
                                                </div>
                                            </div>
                                            <div data-aos="zoom-out" class="item content-area"
                                                 data-src="{{asset('images/product-overview/colors/swf-sm-wave-blue.png')}}"
                                                 data-sub-html="<h4>SW 900-629-S</h4><p style='color: #fff;'>Wave Blue</p>">
                                                <img
                                                    src="{{asset('images/product-overview/colors/swf-sm-wave-blue.png')}}"
                                                    alt="SW 900-629-S">
                                                <div class="custom-overlay">
                                                    <div class="custom-text">
                                                        <h4>SW 900-629-S</h4>
                                                    </div>
                                                </div>
                                            </div>
                                            <div data-aos="zoom-out" class="item content-area"
                                                 data-src="{{asset('images/product-overview/colors/swf-sm-metallic-purple.png')}}"
                                                 data-sub-html="<h4>SW 900-566-M</h4><p style='color: #fff;'>Metallic Purple</p>">
                                                <img
                                                    src="{{asset('images/product-overview/colors/swf-sm-metallic-purple.png')}}"
                                                    alt="SW 900-566-M">
                                                <div class="custom-overlay">
                                                    <div class="custom-text">
                                                        <h4>SW 900-566-M</h4>
                                                    </div>
                                                </div>
                                            </div>
                                            <div data-aos="zoom-out" class="item content-area"
                                                 data-src="{{asset('images/product-overview/colors/swf-sm-silver-metallic.png')}}"
                                                 data-sub-html="<h4>SW 900-805-M</h4><p style='color: #fff;'>Silver Metallic</p>">
                                                <img
                                                    src="{{asset('images/product-overview/colors/swf-sm-silver-metallic.png')}}"
                                                    alt="SW 900-805-M">
                                                <div class="custom-overlay">
                                                    <div class="custom-text">
                                                        <h4>SW 900-805-M</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row" style="margin-bottom: 1em">
                                    <div class="col-md-6">
                                        <h4 style="color: #eee">Matte</h4>
                                        <div class="ig-feed owl-carousel">
                                            <div data-aos="zoom-out" class="item content-area"
                                                 data-src="{{asset('images/product-overview/colors/swf-m-orange.png')}}"
                                                 data-sub-html="<h4>SW 900-321-O</h4><p style='color: #fff;'>Orange</p>">
                                                <img src="{{asset('images/product-overview/colors/swf-m-orange.png')}}"
                                                     alt="SW 900-321-O">
                                                <div class="custom-overlay">
                                                    <div class="custom-text">
                                                        <h4>SW 900-321-O</h4>
                                                    </div>
                                                </div>
                                            </div>
                                            <div data-aos="zoom-out" class="item content-area"
                                                 data-src="{{asset('images/product-overview/colors/swf-m-khaki-green.png')}}"
                                                 data-sub-html="<h4>SW 900-711-O</h4><p style='color: #fff;'>Khaki Green</p>">
                                                <img
                                                    src="{{asset('images/product-overview/colors/swf-m-khaki-green.png')}}"
                                                    alt="SW 900-711-O">
                                                <div class="custom-overlay">
                                                    <div class="custom-text">
                                                        <h4>SW 900-711-O</h4>
                                                    </div>
                                                </div>
                                            </div>
                                            <div data-aos="zoom-out" class="item content-area"
                                                 data-src="{{asset('images/product-overview/colors/swf-m-olive-green.png')}}"
                                                 data-sub-html="<h4>SW 900-732-O</h4><p style='color: #fff;'>Olive Green</p>">
                                                <img
                                                    src="{{asset('images/product-overview/colors/swf-m-olive-green.png')}}"
                                                    alt="SW 900-732-O">
                                                <div class="custom-overlay">
                                                    <div class="custom-text">
                                                        <h4>SW 900-732-O</h4>
                                                    </div>
                                                </div>
                                            </div>
                                            <div data-aos="zoom-out" class="item content-area"
                                                 data-src="{{asset('images/product-overview/colors/swf-m-dark-grey.png')}}"
                                                 data-sub-html="<h4>SW 900-856-O</h4><p style='color: #fff;'>Dark Grey</p>">
                                                <img
                                                    src="{{asset('images/product-overview/colors/swf-m-dark-grey.png')}}"
                                                    alt="SW 900-856-O">
                                                <div class="custom-overlay">
                                                    <div class="custom-text">
                                                        <h4>SW 900-856-O</h4>
                                                    </div>
                                                </div>
                                            </div>
                                            <div data-aos="zoom-out" class="item content-area"
                                                 data-src="{{asset('images/product-overview/colors/swf-m-black.png')}}"
                                                 data-sub-html="<h4>SW 900-180-O</h4><p style='color: #fff;'>Black</p>">
                                                <img src="{{asset('images/product-overview/colors/swf-m-black.png')}}"
                                                     alt="SW 900-180-O">
                                                <div class="custom-overlay">
                                                    <div class="custom-text">
                                                        <h4>SW 900-180-O</h4>
                                                    </div>
                                                </div>
                                            </div>
                                            <div data-aos="zoom-out" class="item content-area"
                                                 data-src="{{asset('images/product-overview/colors/swf-m-white.png')}}"
                                                 data-sub-html="<h4>SW 900-102-O</h4><p style='color: #fff;'>White</p>">
                                                <img src="{{asset('images/product-overview/colors/swf-m-white.png')}}"
                                                     alt="SW 900-102-O">
                                                <div class="custom-overlay">
                                                    <div class="custom-text">
                                                        <h4>SW 900-102-O</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <h4 style="color: #eee">Matte Metallic</h4>
                                        <div class="ig-feed owl-carousel">
                                            <div data-aos="zoom-out" class="item content-area"
                                                 data-src="{{asset('images/product-overview/colors/swf-mm-cherry.png')}}"
                                                 data-sub-html="<h4>SW 900-444-M</h4><p style='color: #fff;'>Cherry</p>">
                                                <img src="{{asset('images/product-overview/colors/swf-mm-cherry.png')}}"
                                                     alt="SW 900-444-M">
                                                <div class="custom-overlay">
                                                    <div class="custom-text">
                                                        <h4>SW 900-444-M</h4>
                                                    </div>
                                                </div>
                                            </div>
                                            <div data-aos="zoom-out" class="item content-area"
                                                 data-src="{{asset('images/product-overview/colors/swf-mm-garnet-red.png')}}"
                                                 data-sub-html="<h4>SW 900-472-M</h4><p style='color: #fff;'>Garnet Red</p>">
                                                <img
                                                    src="{{asset('images/product-overview/colors/swf-mm-garnet-red.png')}}"
                                                    alt="SW 900-472-M">
                                                <div class="custom-overlay">
                                                    <div class="custom-text">
                                                        <h4>SW 900-472-M</h4>
                                                    </div>
                                                </div>
                                            </div>
                                            <div data-aos="zoom-out" class="item content-area"
                                                 data-src="{{asset('images/product-overview/colors/swf-mm-blaze-orange.png')}}"
                                                 data-sub-html="<h4>SW 900-371-M</h4><p style='color: #fff;'>Blaze Orange</p>">
                                                <img
                                                    src="{{asset('images/product-overview/colors/swf-mm-blaze-orange.png')}}"
                                                    alt="SW 900-371-M">
                                                <div class="custom-overlay">
                                                    <div class="custom-text">
                                                        <h4>SW 900-371-M</h4>
                                                    </div>
                                                </div>
                                            </div>
                                            <div data-aos="zoom-out" class="item content-area"
                                                 data-src="{{asset('images/product-overview/colors/swf-mm-brown.png')}}"
                                                 data-sub-html="<h4>SW 900-954-M</h4><p style='color: #fff;'>Brown</p>">
                                                <img src="{{asset('images/product-overview/colors/swf-mm-brown.png')}}"
                                                     alt="SW 900-954-M">
                                                <div class="custom-overlay">
                                                    <div class="custom-text">
                                                        <h4>SW 900-954-M</h4>
                                                    </div>
                                                </div>
                                            </div>
                                            <div data-aos="zoom-out" class="item content-area"
                                                 data-src="{{asset('images/product-overview/colors/swf-mm-yellow-green.png')}}"
                                                 data-sub-html="<h4>SW 900-243-M</h4><p style='color: #fff;'>Yellow Green</p>">
                                                <img
                                                    src="{{asset('images/product-overview/colors/swf-mm-yellow-green.png')}}"
                                                    alt="SW 900-243-M">
                                                <div class="custom-overlay">
                                                    <div class="custom-text">
                                                        <h4>SW 900-243-M</h4>
                                                    </div>
                                                </div>
                                            </div>
                                            <div data-aos="zoom-out" class="item content-area"
                                                 data-src="{{asset('images/product-overview/colors/swf-mm-apple-green.png')}}"
                                                 data-sub-html="<h4>SW 900-745-M</h4><p style='color: #fff;'>Apple Green</p>">
                                                <img
                                                    src="{{asset('images/product-overview/colors/swf-mm-apple-green.png')}}"
                                                    alt="SW 900-745-M">
                                                <div class="custom-overlay">
                                                    <div class="custom-text">
                                                        <h4>SW 900-745-M</h4>
                                                    </div>
                                                </div>
                                            </div>
                                            <div data-aos="zoom-out" class="item content-area"
                                                 data-src="{{asset('images/product-overview/colors/swf-mm-frosty-blue.png')}}"
                                                 data-sub-html="<h4>SW 900-643-M</h4><p style='color: #fff;'>Frosty Blue</p>">
                                                <img
                                                    src="{{asset('images/product-overview/colors/swf-mm-frosty-blue.png')}}"
                                                    alt="SW 900-643-M">
                                                <div class="custom-overlay">
                                                    <div class="custom-text">
                                                        <h4>SW 900-643-M</h4>
                                                    </div>
                                                </div>
                                            </div>
                                            <div data-aos="zoom-out" class="item content-area"
                                                 data-src="{{asset('images/product-overview/colors/swf-mm-powder-blue.png')}}"
                                                 data-sub-html="<h4>SW 900-614-M</h4><p style='color: #fff;'>Powder Blue</p>">
                                                <img
                                                    src="{{asset('images/product-overview/colors/swf-mm-powder-blue.png')}}"
                                                    alt="SW 900-614-M">
                                                <div class="custom-overlay">
                                                    <div class="custom-text">
                                                        <h4>SW 900-614-M</h4>
                                                    </div>
                                                </div>
                                            </div>
                                            <div data-aos="zoom-out" class="item content-area"
                                                 data-src="{{asset('images/product-overview/colors/swf-mm-blue.png')}}"
                                                 data-sub-html="<h4>SW 900-615-M</h4><p style='color: #fff;'>Blue</p>">
                                                <img src="{{asset('images/product-overview/colors/swf-mm-blue.png')}}"
                                                     alt="SW 900-615-M">
                                                <div class="custom-overlay">
                                                    <div class="custom-text">
                                                        <h4>SW 900-615-M</h4>
                                                    </div>
                                                </div>
                                            </div>
                                            <div data-aos="zoom-out" class="item content-area"
                                                 data-src="{{asset('images/product-overview/colors/swf-mm-brilliant-blue.png')}}"
                                                 data-sub-html="<h4>SW 900-671-M</h4><p style='color: #fff;'>Brilliant Blue</p>">
                                                <img
                                                    src="{{asset('images/product-overview/colors/swf-mm-brilliant-blue.png')}}"
                                                    alt="SW 900-671-M">
                                                <div class="custom-overlay">
                                                    <div class="custom-text">
                                                        <h4>SW 900-671-M</h4>
                                                    </div>
                                                </div>
                                            </div>
                                            <div data-aos="zoom-out" class="item content-area"
                                                 data-src="{{asset('images/product-overview/colors/swf-mm-night-blue.png')}}"
                                                 data-sub-html="<h4>SW 900-623-M</h4><p style='color: #fff;'>Night Blue</p>">
                                                <img
                                                    src="{{asset('images/product-overview/colors/swf-mm-night-blue.png')}}"
                                                    alt="SW 900-623-M">
                                                <div class="custom-overlay">
                                                    <div class="custom-text">
                                                        <h4>SW 900-623-M</h4>
                                                    </div>
                                                </div>
                                            </div>
                                            <div data-aos="zoom-out" class="item content-area"
                                                 data-src="{{asset('images/product-overview/colors/swf-mm-purple.png')}}"
                                                 data-sub-html="<h4>SW 900-565-M</h4><p style='color: #fff;'>Purple</p>">
                                                <img src="{{asset('images/product-overview/colors/swf-mm-purple.png')}}"
                                                     alt="SW 900-565-M">
                                                <div class="custom-overlay">
                                                    <div class="custom-text">
                                                        <h4>SW 900-565-M</h4>
                                                    </div>
                                                </div>
                                            </div>
                                            <div data-aos="zoom-out" class="item content-area"
                                                 data-src="{{asset('images/product-overview/colors/swf-mm-pink.png')}}"
                                                 data-sub-html="<h4>SW 900-520-M</h4><p style='color: #fff;'>Pink</p>">
                                                <img src="{{asset('images/product-overview/colors/swf-mm-pink.png')}}"
                                                     alt="SW 900-520-M">
                                                <div class="custom-overlay">
                                                    <div class="custom-text">
                                                        <h4>SW 900-520-M</h4>
                                                    </div>
                                                </div>
                                            </div>
                                            <div data-aos="zoom-out" class="item content-area"
                                                 data-src="{{asset('images/product-overview/colors/swf-mm-silver.png')}}"
                                                 data-sub-html="<h4>SW 900-857-M</h4><p style='color: #fff;'>Silver</p>">
                                                <img src="{{asset('images/product-overview/colors/swf-mm-silver.png')}}"
                                                     alt="SW 900-857-M">
                                                <div class="custom-overlay">
                                                    <div class="custom-text">
                                                        <h4>SW 900-857-M</h4>
                                                    </div>
                                                </div>
                                            </div>
                                            <div data-aos="zoom-out" class="item content-area"
                                                 data-src="{{asset('images/product-overview/colors/swf-mm-anthracite.png')}}"
                                                 data-sub-html="<h4>SW 900-858-M</h4><p style='color: #fff;'>Anthracite</p>">
                                                <img
                                                    src="{{asset('images/product-overview/colors/swf-mm-anthracite.png')}}"
                                                    alt="SW 900-858-M">
                                                <div class="custom-overlay">
                                                    <div class="custom-text">
                                                        <h4>SW 900-858-M</h4>
                                                    </div>
                                                </div>
                                            </div>
                                            <div data-aos="zoom-out" class="item content-area"
                                                 data-src="{{asset('images/product-overview/colors/swf-mm-gunmetal.png')}}"
                                                 data-sub-html="<h4>SW 900-840-M</h4><p style='color: #fff;'>Gunmetal</p>">
                                                <img
                                                    src="{{asset('images/product-overview/colors/swf-mm-gunmetal.png')}}"
                                                    alt="SW 900-840-M">
                                                <div class="custom-overlay">
                                                    <div class="custom-text">
                                                        <h4>SW 900-840-M</h4>
                                                    </div>
                                                </div>
                                            </div>
                                            <div data-aos="zoom-out" class="item content-area"
                                                 data-src="{{asset('images/product-overview/colors/swf-mm-charcoal.png')}}"
                                                 data-sub-html="<h4>SW 900-845-M</h4><p style='color: #fff;'>Charcoal</p>">
                                                <img
                                                    src="{{asset('images/product-overview/colors/swf-mm-charcoal.png')}}"
                                                    alt="SW 900-845-M">
                                                <div class="custom-overlay">
                                                    <div class="custom-text">
                                                        <h4>SW 900-845-M</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row" style="margin-bottom: 1em">
                                    <div class="col-md-6">
                                        <h4 style="color: #eee">ColorFlow&trade;</h4>
                                        <div class="ig-feed owl-carousel">
                                            <div data-aos="zoom-out" class="item content-area"
                                                 data-src="{{asset('images/product-overview/colors/swf-cf-fresh-spring-gold-silver.png')}}"
                                                 data-sub-html="<h4>SW 900-252-S</h4><p style='color: #fff;'>Fresh Spring Gold/Silver</p>">
                                                <img
                                                    src="{{asset('images/product-overview/colors/swf-cf-fresh-spring-gold-silver.png')}}"
                                                    alt="SW 900-252-S">
                                                <div class="custom-overlay">
                                                    <div class="custom-text">
                                                        <h4>SW 900-252-S</h4>
                                                    </div>
                                                </div>
                                            </div>
                                            <div data-aos="zoom-out" class="item content-area"
                                                 data-src="{{asset('images/product-overview/colors/swf-cf-rising-sun-red-gold.png')}}"
                                                 data-sub-html="<h4>SW 900-447-S</h4><p style='color: #fff;'>Rising Sun Red/Gold</p>">
                                                <img
                                                    src="{{asset('images/product-overview/colors/swf-cf-rising-sun-red-gold.png')}}"
                                                    alt="SW 900-447-S">
                                                <div class="custom-overlay">
                                                    <div class="custom-text">
                                                        <h4>SW 900-447-S</h4>
                                                    </div>
                                                </div>
                                            </div>
                                            <div data-aos="zoom-out" class="item content-area"
                                                 data-src="{{asset('images/product-overview/colors/swf-cf-roaring-thunder-blue-red.png')}}"
                                                 data-sub-html="<h4>SW 900-552-S</h4><p style='color: #fff;'>Roaring Thunder Blue/Red</p>">
                                                <img
                                                    src="{{asset('images/product-overview/colors/swf-cf-roaring-thunder-blue-red.png')}}"
                                                    alt="SW 900-552-S">
                                                <div class="custom-overlay">
                                                    <div class="custom-text">
                                                        <h4>SW 900-552-S</h4>
                                                    </div>
                                                </div>
                                            </div>
                                            <div data-aos="zoom-out" class="item content-area"
                                                 data-src="{{asset('images/product-overview/colors/swf-cf-rushing-riptide-cyan-purple.png')}}"
                                                 data-sub-html="<h4>SW 900-674-S</h4><p style='color: #fff;'>Rushing Riptide Cyan/Purple</p>">
                                                <img
                                                    src="{{asset('images/product-overview/colors/swf-cf-rushing-riptide-cyan-purple.png')}}"
                                                    alt="SW 900-674674-S">
                                                <div class="custom-overlay">
                                                    <div class="custom-text">
                                                        <h4>SW 900-674-S</h4>
                                                    </div>
                                                </div>
                                            </div>
                                            <div data-aos="zoom-out" class="item content-area"
                                                 data-src="{{asset('images/product-overview/colors/swf-cf-urban-jungle-silver-green.png')}}"
                                                 data-sub-html="<h4>SW 900-787-S</h4><p style='color: #fff;'>Urban Jungle Silver/Green</p>">
                                                <img
                                                    src="{{asset('images/product-overview/colors/swf-cf-urban-jungle-silver-green.png')}}"
                                                    alt="SW 900-787-S">
                                                <div class="custom-overlay">
                                                    <div class="custom-text">
                                                        <h4>SW 900-787-S</h4>
                                                    </div>
                                                </div>
                                            </div>
                                            <div data-aos="zoom-out" class="item content-area"
                                                 data-src="{{asset('images/product-overview/colors/swf-cf-lightning-ridge-green-purple.png')}}"
                                                 data-sub-html="<h4>SW 900-611-S</h4><p style='color: #fff;'>Lightning Ridge Green/Purple</p>">
                                                <img
                                                    src="{{asset('images/product-overview/colors/swf-cf-lightning-ridge-green-purple.png')}}"
                                                    alt="SW 900-611-S">
                                                <div class="custom-overlay">
                                                    <div class="custom-text">
                                                        <h4>SW 900-611-S</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <h4 style="color: #eee">Extreme Texture</h4>
                                        <div class="ig-feed owl-carousel">
                                            <div data-aos="zoom-out" class="item content-area"
                                                 data-src="{{asset('images/product-overview/colors/swf-et-brushed-bronze.png')}}"
                                                 data-sub-html="<h4>SW 900-933-X</h4><p style='color: #fff;'>Brushed Bronze</p>">
                                                <img
                                                    src="{{asset('images/product-overview/colors/swf-et-brushed-bronze.png')}}"
                                                    alt="SW 900-933-X">
                                                <div class="custom-overlay">
                                                    <div class="custom-text">
                                                        <h4>SW 900-933-X</h4>
                                                    </div>
                                                </div>
                                            </div>
                                            <div data-aos="zoom-out" class="item content-area"
                                                 data-src="{{asset('images/product-overview/colors/swf-et-brushed-aluminium.png')}}"
                                                 data-sub-html="<h4>SW 900-812-X</h4><p style='color: #fff;'>Brushed Aluminium</p>">
                                                <img
                                                    src="{{asset('images/product-overview/colors/swf-et-brushed-aluminium.png')}}"
                                                    alt="SW 900-812-X">
                                                <div class="custom-overlay">
                                                    <div class="custom-text">
                                                        <h4>SW 900-812-X</h4>
                                                    </div>
                                                </div>
                                            </div>
                                            <div data-aos="zoom-out" class="item content-area"
                                                 data-src="{{asset('images/product-overview/colors/swf-et-brushed-titanium.png')}}"
                                                 data-sub-html="<h4>SW 900-802-X</h4><p style='color: #fff;'>Brushed Titanium</p>">
                                                <img
                                                    src="{{asset('images/product-overview/colors/swf-et-brushed-titanium.png')}}"
                                                    alt="SW 900-802-X">
                                                <div class="custom-overlay">
                                                    <div class="custom-text">
                                                        <h4>SW 900-802-X</h4>
                                                    </div>
                                                </div>
                                            </div>
                                            <div data-aos="zoom-out" class="item content-area"
                                                 data-src="{{asset('images/product-overview/colors/swf-et-brushed-steel.png')}}"
                                                 data-sub-html="<h4>SW 900-813-X</h4><p style='color: #fff;'>Brushed Steel</p>">
                                                <img
                                                    src="{{asset('images/product-overview/colors/swf-et-brushed-steel.png')}}"
                                                    alt="SW 900-813-X">
                                                <div class="custom-overlay">
                                                    <div class="custom-text">
                                                        <h4>SW 900-813-X</h4>
                                                    </div>
                                                </div>
                                            </div>
                                            <div data-aos="zoom-out" class="item content-area"
                                                 data-src="{{asset('images/product-overview/colors/swf-et-brushed-black.png')}}"
                                                 data-sub-html="<h4>SW 900-193-X</h4><p style='color: #fff;'>Brushed Black</p>">
                                                <img
                                                    src="{{asset('images/product-overview/colors/swf-et-brushed-black.png')}}"
                                                    alt="SW 900-193-X">
                                                <div class="custom-overlay">
                                                    <div class="custom-text">
                                                        <h4>SW 900-193-X</h4>
                                                    </div>
                                                </div>
                                            </div>
                                            <div data-aos="zoom-out" class="item content-area"
                                                 data-src="{{asset('images/product-overview/colors/swf-et-carbon-fiber-white.png')}}"
                                                 data-sub-html="<h4>SW 900-115-X</h4><p style='color: #fff;'>Carbon Fiber White</p>">
                                                <img
                                                    src="{{asset('images/product-overview/colors/swf-et-carbon-fiber-white.png')}}"
                                                    alt="SW 900-115-X">
                                                <div class="custom-overlay">
                                                    <div class="custom-text">
                                                        <h4>SW 900-115-X</h4>
                                                    </div>
                                                </div>
                                            </div>
                                            <div data-aos="zoom-out" class="item content-area"
                                                 data-src="{{asset('images/product-overview/colors/swf-et-carbon-fiber-black.png')}}"
                                                 data-sub-html="<h4>SW 900-194-X</h4><p style='color: #fff;'>Carbon Fiber Black</p>">
                                                <img
                                                    src="{{asset('images/product-overview/colors/swf-et-carbon-fiber-black.png')}}"
                                                    alt="SW 900-194-X">
                                                <div class="custom-overlay">
                                                    <div class="custom-text">
                                                        <h4>SW 900-194-X</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row" style="margin-bottom: 1em">
                                    <div class="col-md-6">
                                        <h4 style="color: #eee">Diamond</h4>
                                        <div class="ig-feed owl-carousel">
                                            <div data-aos="zoom-out" class="item content-area"
                                                 data-src="{{asset('images/product-overview/colors/swf-diamond-red.png')}}"
                                                 data-sub-html="<h4>SW 900-426-D</h4><p style='color: #fff;'>Diamond Red</p>">
                                                <img
                                                    src="{{asset('images/product-overview/colors/swf-diamond-red.png')}}"
                                                    alt="SW 900-426-D">
                                                <div class="custom-overlay">
                                                    <div class="custom-text">
                                                        <h4>SW 900-426-D</h4>
                                                    </div>
                                                </div>
                                            </div>
                                            <div data-aos="zoom-out" class="item content-area"
                                                 data-src="{{asset('images/product-overview/colors/swf-diamond-amber.png')}}"
                                                 data-sub-html="<h4>SW 900-221-D</h4><p style='color: #fff;'>Diamond Amber</p>">
                                                <img
                                                    src="{{asset('images/product-overview/colors/swf-diamond-amber.png')}}"
                                                    alt="SW 900-221-D">
                                                <div class="custom-overlay">
                                                    <div class="custom-text">
                                                        <h4>SW 900-221-D</h4>
                                                    </div>
                                                </div>
                                            </div>
                                            <div data-aos="zoom-out" class="item content-area"
                                                 data-src="{{asset('images/product-overview/colors/swf-diamond-purple.png')}}"
                                                 data-sub-html="<h4>SW 900-587-D</h4><p style='color: #fff;'>Diamond Purple</p>">
                                                <img
                                                    src="{{asset('images/product-overview/colors/swf-diamond-purple.png')}}"
                                                    alt="SW 900-587-D">
                                                <div class="custom-overlay">
                                                    <div class="custom-text">
                                                        <h4>SW 900-587-D</h4>
                                                    </div>
                                                </div>
                                            </div>
                                            <div data-aos="zoom-out" class="item content-area"
                                                 data-src="{{asset('images/product-overview/colors/swf-diamond-blue.png')}}"
                                                 data-sub-html="<h4>SW 900-676-D</h4><p style='color: #fff;'>Diamond Blue</p>">
                                                <img
                                                    src="{{asset('images/product-overview/colors/swf-diamond-blue.png')}}"
                                                    alt="SW 900-676-D">
                                                <div class="custom-overlay">
                                                    <div class="custom-text">
                                                        <h4>SW 900-676-D</h4>
                                                    </div>
                                                </div>
                                            </div>
                                            <div data-aos="zoom-out" class="item content-area"
                                                 data-src="{{asset('images/product-overview/colors/swf-diamond-white.png')}}"
                                                 data-sub-html="<h4>SW 900-161-D</h4><p style='color: #fff;'>Diamond White</p>">
                                                <img
                                                    src="{{asset('images/product-overview/colors/swf-diamond-white.png')}}"
                                                    alt="SW 900-161-D">
                                                <div class="custom-overlay">
                                                    <div class="custom-text">
                                                        <h4>SW 900-161-D</h4>
                                                    </div>
                                                </div>
                                            </div>
                                            <div data-aos="zoom-out" class="item content-area"
                                                 data-src="{{asset('images/product-overview/colors/swf-diamond-silver.png')}}"
                                                 data-sub-html="<h4>SW 900-878-D</h4><p style='color: #fff;'>Diamond Silver</p>">
                                                <img
                                                    src="{{asset('images/product-overview/colors/swf-diamond-silver.png')}}"
                                                    alt="SW 900-878-D">
                                                <div class="custom-overlay">
                                                    <div class="custom-text">
                                                        <h4>SW 900-878-D</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <h4 style="color: #eee">Pearl</h4>
                                        <div class="ig-feed owl-carousel">
                                            <div data-aos="zoom-out" class="item content-area"
                                                 data-src="{{asset('images/product-overview/colors/swf-p-red.png')}}"
                                                 data-sub-html="<h4>SW 900-437-S</h4><p style='color: #fff;'>Red</p>">
                                                <img
                                                    src="{{asset('images/product-overview/colors/swf-p-red.png')}}"
                                                    alt="SW 900-437-S">
                                                <div class="custom-overlay">
                                                    <div class="custom-text">
                                                        <h4>SW 900-437-S</h4>
                                                    </div>
                                                </div>
                                            </div>
                                            <div data-aos="zoom-out" class="item content-area"
                                                 data-src="{{asset('images/product-overview/colors/swf-p-gold-orange.png')}}"
                                                 data-sub-html="<h4>SW 900-326-S</h4><p style='color: #fff;'>Gold Orange</p>">
                                                <img
                                                    src="{{asset('images/product-overview/colors/swf-p-gold-orange.png')}}"
                                                    alt="SW 900-326-S">
                                                <div class="custom-overlay">
                                                    <div class="custom-text">
                                                        <h4>SW 900-326-S</h4>
                                                    </div>
                                                </div>
                                            </div>
                                            <div data-aos="zoom-out" class="item content-area"
                                                 data-src="{{asset('images/product-overview/colors/swf-p-light-green.png')}}"
                                                 data-sub-html="<h4>SW 900-777-S</h4><p style='color: #fff;'>Light Green</p>">
                                                <img
                                                    src="{{asset('images/product-overview/colors/swf-p-light-green.png')}}"
                                                    alt="SW 900-777-S">
                                                <div class="custom-overlay">
                                                    <div class="custom-text">
                                                        <h4>SW 900-777-S</h4>
                                                    </div>
                                                </div>
                                            </div>
                                            <div data-aos="zoom-out" class="item content-area"
                                                 data-src="{{asset('images/product-overview/colors/swf-p-dark-green.png')}}"
                                                 data-sub-html="<h4>SW 900-796-S</h4><p style='color: #fff;'>Dark Green</p>">
                                                <img
                                                    src="{{asset('images/product-overview/colors/swf-p-dark-green.png')}}"
                                                    alt="SW 900-796-S">
                                                <div class="custom-overlay">
                                                    <div class="custom-text">
                                                        <h4>SW 900-796-S</h4>
                                                    </div>
                                                </div>
                                            </div>
                                            <div data-aos="zoom-out" class="item content-area"
                                                 data-src="{{asset('images/product-overview/colors/swf-p-white.png')}}"
                                                 data-sub-html="<h4>SW 900-109-S</h4><p style='color: #fff;'>White</p>">
                                                <img
                                                    src="{{asset('images/product-overview/colors/swf-p-white.png')}}"
                                                    alt="SW 900-109-S">
                                                <div class="custom-overlay">
                                                    <div class="custom-text">
                                                        <h4>SW 900-109-S</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
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
                <div class="col-md-4">
                    <h4 data-aos="fade-left" style="color: #eee">Avery Dennison® Supreme Wrapping&trade; Films</h4>
                    <p data-aos="fade-down" align="justify" style="color: #bbb;margin-bottom: 20px">Avery Dennison
                        Supreme Wrapping&trade; Film combines style with performance, versatility and easy-to-apply
                        convenience.</p>
                    <p data-aos="fade-down" align="justify" style="color: #bbb;margin-bottom: 20px">Large range of
                        premium cast, dual layer films designed for solid color vehicle detailing and full wraps with
                        exceptional 3D conformability.</p>
                    <blockquote data-aos="fade-left">Superior performance, fast and easy application, and removability.
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
                        items: 4,
                    },
                    768: {
                        items: 4,
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

        function goToAnchor() {
            $('html,body').animate({scrollTop: $(".page-content").offset().top}, 500);
        }
    </script>
@endpush
