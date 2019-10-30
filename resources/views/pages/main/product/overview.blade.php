@extends('layouts.mst')
@section('title', 'Product Overview: '.$title.' | '.env('APP_TITLE'))
@push('styles')
    <link rel="stylesheet" href="{{asset('vendor/lightgallery/dist/css/lightgallery.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap-tabs-responsive.css')}}">
    <link rel="stylesheet" href="{{asset('css/play-button.css')}}">
    <style>
        .breadcrumbs.mpi-series {
            background-image: url({{asset('images/slider/mpi-series3.jpg')}});
        }

        .breadcrumbs.conform-chrome {
            background-image: url({{asset('images/slider/conform-chrome3.jpg')}});
        }

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

        #myTabContent ul li:before {
            font-family: unset;
            content: unset;
            font-weight: unset;
            color: unset;
            margin-left: unset;
            padding-right: unset;
        }

        #myTabContent table a, #myTabContent ul li a {
            color: #777;
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
            <p>{{$check == 1 ? 'Product overview of '.$title.', films for digital prints.' :
            'Product overview of '.$title.', films for color change.'}}</p>
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
                        <img id="img-switch" src="{{asset('images/home/exc_'.rand(1,5).'.jpg')}}"
                             class="img-responsive" alt="Product Excellence">
                        <div class="custom-overlay">
                            <div class="custom-text">
                                <svg id="play-1" class="play" data-toggle="tooltip" title="Click here to play!"
                                     data-placement="bottom" version="1.1" xmlns="http://www.w3.org/2000/svg"
                                     xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" height="100px"
                                     width="100px"
                                     viewBox="0 0 100 100" enable-background="new 0 0 100 100" xml:space="preserve">
                                    <path class="stroke-solid" fill="none" stroke="#E31B23"
                                          d="M49.9,2.5C23.6,2.8,2.1,24.4,2.5,50.4C2.9,76.5,24.7,98,50.3,97.5c26.4-0.6,47.4-21.8,47.2-47.7C97.3,23.7,75.7,2.3,49.9,2.5"/>
                                    <path class="stroke-dotted" fill="none" stroke="#E31B23"
                                          d="M49.9,2.5C23.6,2.8,2.1,24.4,2.5,50.4C2.9,76.5,24.7,98,50.3,97.5c26.4-0.6,47.4-21.8,47.2-47.7C97.3,23.7,75.7,2.3,49.9,2.5"/>
                                    <path class="icon" fill="#E31B23"
                                          d="M38,69c-1,0.5-1.8,0-1.8-1.1V32.1c0-1.1,0.8-1.6,1.8-1.1l34,18c1,0.5,1,1.4,0,1.9L38,69z"/></svg>
                            </div>
                        </div>
                    </div>
                    <div data-aos="fade-down" class="what-agile-info">
                        <div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
                            <ul id="myTab" class="nav nav-tabs nav-tabs-responsive" role="tablist">
                                <li role="presentation" class="active">
                                    <a href="#po" id="po-tab" role="tab" data-toggle="tab" aria-controls="po"
                                       aria-expanded="true">
                                        <span class="text">OVERVIEW</span>
                                    </a>
                                </li>
                                <li role="presentation" class="next">
                                    <a href="#ta" id="ta-tab" role="tab" data-toggle="tab" aria-controls="ta"
                                       aria-expanded="true">
                                        <span class="text">APPLICATIONS</span>
                                    </a>
                                </li>
                                <li role="presentation" class="next">
                                    <a href="#kb" role="tab" id="kb-tab" data-toggle="tab" aria-controls="kb">
                                        <span class="text">BENEFITS</span>
                                    </a>
                                </li>
                                <li role="presentation" class="next">
                                    <a href="#kf" role="tab" id="kf-tab" data-toggle="tab" aria-controls="kf">
                                        <span class="text">FEATURES</span>
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
                                <div role="tabpanel" class="tab-pane fade in active" id="po" aria-labelledby="po-tab">
                                    <table>
                                        <tr>
                                            <th style="color: #E31B23">Product Name</th>
                                            <td>&nbsp;:&nbsp;</td>
                                            <td>Avery Dennison SPF-XI</td>
                                        </tr>
                                        <tr>
                                            <th style="color: #E31B23">Thickness</th>
                                            <td>&nbsp;:&nbsp;</td>
                                            <td>6.5 mil</td>
                                        </tr>
                                        <tr>
                                            <th style="color: #E31B23">Roll Size</th>
                                            <td>&nbsp;:&nbsp;</td>
                                            <td>1.52m x 15m</td>
                                        </tr>
                                        <tr>
                                            <th style="color: #E31B23">Durability</th>
                                            <td>&nbsp;:&nbsp;</td>
                                            <td>Up to 10 years for vertical applications in Zone 1</td>
                                        </tr>
                                        {{--<tr>
                                            <th style="color: #E31B23">Data Sheet</th>
                                            <td>&nbsp;:&nbsp;</td>
                                            <td><a href="http://graphics.averydennison.eu/spf" target="_blank">http://graphics.averydennison.eu/spf</a></td>
                                        </tr>--}}
                                    </table>
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="ta" aria-labelledby="ta-tab">
                                    <ul align="justify">
                                        <li>Wrapping of full-body or high-impact areas of cars, trucks, buses and mass
                                            transit, motorcycles and RV’s.
                                        </li>
                                    </ul>
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="kb" aria-labelledby="kb-tab">
                                    <ul align="justify">
                                        <li>High scratch resistance with “self-healing” performance.</li>
                                        <li>Resistant to corrosion and acidic contaminants to protect against bug
                                            splatters,
                                            bird droppings or acid rain.
                                        </li>
                                        <li>Preserves appearance while helping retain resale value.</li>
                                        <li>Enhances vehicle look with high gloss finish.</li>
                                        <li>Long term durability and yellowing resistance.</li>
                                        <li>Fast and easy to install with excellent conformability around curves and
                                            recesses.
                                        </li>
                                    </ul>
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="kf" aria-labelledby="kf-tab">
                                    <ul align="justify">
                                        <li>Durable optical clarity provides almost invisible protection for painted
                                            surfaces.
                                        </li>
                                        <li>Room temperature ‘self-healing’ performance.</li>
                                        <li>Excellent UV, temperature, humidity and salt-spray resistance.</li>
                                        <li>Enhances vehicle look with high gloss finish.</li>
                                        <li>Up to 10 years UV resistance*.</li>
                                        <li>Low initial tack for wet application; easy to trim.</li>
                                        <li>Easy to remove.</li>
                                    </ul>
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="download" aria-labelledby="download-tab">
                                    <ul align="justify">
                                        <li><a href="{{asset('storage/premier-spf-xi.pdf')}}"
                                               data-toggle="tooltip" title="Click here to download!"
                                               data-placement="right">SPF-XI Brochure</a></li>
                                        <li><a href="{{asset('storage/premier-tds-spf-xi-en.pdf')}}"
                                               data-toggle="tooltip" title="Click here to download!"
                                               data-placement="right">SPF-XI Technical Data Sheet</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <h4 data-aos="fade-left">Avery Dennison® SPF-XI Supreme Protection™ Film</h4>
                    <p data-aos="fade-down" align="justify">Avery Dennison Supreme Protection™ Film (SPF-XI)
                        improves and protects a vehicle’s appearance, while helping to retain resale value.
                        A high quality, top coated polyurethane film protects the paint from stone chips,
                        road debris, insect stains, weathering and minor abrasions. It’s “self-healing”
                        top coat helps absorb the impact from scratches and debris, without degrading the
                        original paint finish. The film is easy to apply and ultra-clear for a beautiful
                        aesthetic.</p>
                    <div data-aos="zoom-out" class="content-area" style="margin-top: 1em">
                        <img src="{{asset('images/home/avspf2.png')}}" class="img-responsive" alt="Product Excellence">
                        <div class="custom-overlay">
                            <div class="custom-text">
                                <svg id="play-2" class="play" data-toggle="tooltip" title="Click here to play!"
                                     data-placement="bottom" version="1.1" xmlns="http://www.w3.org/2000/svg"
                                     xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" height="100px"
                                     width="100px"
                                     viewBox="0 0 100 100" enable-background="new 0 0 100 100" xml:space="preserve">
                                    <path class="stroke-solid" fill="none" stroke="#E31B23"
                                          d="M49.9,2.5C23.6,2.8,2.1,24.4,2.5,50.4C2.9,76.5,24.7,98,50.3,97.5c26.4-0.6,47.4-21.8,47.2-47.7C97.3,23.7,75.7,2.3,49.9,2.5"/>
                                    <path class="stroke-dotted" fill="none" stroke="#E31B23"
                                          d="M49.9,2.5C23.6,2.8,2.1,24.4,2.5,50.4C2.9,76.5,24.7,98,50.3,97.5c26.4-0.6,47.4-21.8,47.2-47.7C97.3,23.7,75.7,2.3,49.9,2.5"/>
                                    <path class="icon" fill="#E31B23"
                                          d="M38,69c-1,0.5-1.8,0-1.8-1.1V32.1c0-1.1,0.8-1.6,1.8-1.1l34,18c1,0.5,1,1.4,0,1.9L38,69z"/></svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div data-aos="fade-up" class="row text-center" style="padding: 3em 0 6em 0;">
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
        var $img = $(".{{$category}}"),
            images = ['{{$category}}1.jpg', '{{$category}}3.jpg', '{{$category}}2.jpg'],
            index = 0, maxImages = images.length - 1, timer = setInterval(function () {
                var currentImage = images[index];
                index = (index == maxImages) ? 0 : ++index;
                $img.fadeOut("slow", function () {
                    $img.css("background-image", 'url({{asset('images/slider')}}/' + currentImage + ')');
                    $img.fadeIn("slow");
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

        $('#play-1').on('click', function () {
            $(this).lightGallery({
                dynamic: true,
                dynamicEl: [
                    {
                        "src": 'https://youtu.be/6jOPQDNHQjE',
                        'thumb': 'https://youtu.be/6jOPQDNHQjE',
                    },
                    {
                        "src": 'https://youtu.be/wFzwt2my2TQ',
                        'thumb': 'https://youtu.be/wFzwt2my2TQ',
                    }]
            });
        });

        $('#play-2').on('click', function () {
            $(this).lightGallery({
                dynamic: true,
                dynamicEl: [
                    {
                        "src": 'https://youtu.be/wFzwt2my2TQ',
                        'thumb': 'https://youtu.be/wFzwt2my2TQ',
                    },
                    {
                        "src": 'https://youtu.be/6jOPQDNHQjE',
                        'thumb': 'https://youtu.be/6jOPQDNHQjE',
                    }]
            });
        });

        function goToAnchor() {
            $('html,body').animate({scrollTop: $(".page-content").offset().top}, 500);
        }
    </script>
@endpush
