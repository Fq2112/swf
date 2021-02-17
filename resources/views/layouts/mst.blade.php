<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>

    <title>@yield('title')</title>
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('favicon.ico')}}"/>
    <meta name="keywords" content="HTML5 Template , Responsive , html5 , css3"/>
    <meta name="description" content="{{env('APP_TITLE')}}">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Bootstrap-3.3.7 fremwork css -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}"/>
    <link rel="stylesheet" href="{{asset('admins/modules/bootstrap/css/glyphicons.css')}}"/>
    <!-- Core Style css -->
    <link rel="stylesheet" href="{{asset('css/colorbox.css')}}"/>
    <!-- Slider carousel css  -->
    <link rel="stylesheet" href="{{asset('vendor/owlcarousel/dist/assets/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('vendor/owlcarousel/dist/assets/owl.theme.default.min.css')}}">
    <!-- Slider revolution css  -->
    <link rel="stylesheet" href="{{asset('vendor/rs-plugin/css/settings.css')}}"/>
    <link rel="stylesheet" href="{{asset('css/rev-settings.css')}}"/>
    <!-- Fontawesome 5.10.1 -->
    <link rel="stylesheet" type="text/css" href="{{asset('fonts/fontawesome/css/all.css')}}">
    <!-- Main style css -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}"/>

    <!-- ajax-loader -->
    <link rel="stylesheet" href="{{asset('css/ajax-loader.css')}}">
    <!-- modal-dark -->
    <link rel="stylesheet" href="{{asset('css/modal-dark.css')}}">
    <!-- select2 -->
    <link href="{{asset('vendor/select2/dist/css/select2.css')}}" rel="stylesheet"/>
    <!-- Loading.io -->
    <link href="{{asset('css/loading.css')}}" rel="stylesheet">
    <!-- Sweetalert2 -->
    <link rel="stylesheet" href="{{asset('vendor/sweetalert/sweetalert2.css')}}">
    <!-- AOS -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css">
    <!-- Media queries -->
    <link rel="stylesheet" href="{{asset('css/media-query.css')}}">

    <style>
        .select2 {
            border-radius: 0 4px 4px 0;
            border: 1px solid #777;
        }

        .select2-dropdown {
            background-color: #0e0e0e;
            border: 1px solid #777;
        }

        span.select2-selection.select2-selection--single {
            outline: none;
        }

        .select2-container--default .select2-selection--single {
            background-color: unset;
            border: unset;
            border-radius: unset;
        }

        .required {
            color: #E31B23;
        }

        .form-control, .select2-search--dropdown .select2-search__field {
            background-color: #0e0e0e;
            color: #fff;
            border-color: #777;
        }

        .form-control:focus, .select2-search--dropdown .select2-search__field:focus {
            border-color: #E31B23 !important;
            box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 8px rgba(227, 27, 35, 0.6) !important;
        }

        .has-feedback .form-control-feedback {
            position: absolute;
            display: block;
            width: 34px;
            height: 34px;
            line-height: 34px;
            text-align: center;
        }

        [type="radio"]:checked,
        [type="radio"]:not(:checked) {
            position: absolute;
            left: -9999px;
        }

        [type="radio"]:checked + label,
        [type="radio"]:not(:checked) + label {
            position: relative;
            padding-left: 28px;
            cursor: pointer;
            line-height: 20px;
            display: inline-block;
            color: #666;
        }

        [type="radio"]:checked + label:before,
        [type="radio"]:not(:checked) + label:before {
            content: '';
            position: absolute;
            left: 0;
            top: 0;
            width: 20px;
            height: 20px;
            border: 1px solid #777;
            border-radius: 100%;
            background: transparent;
        }

        [type="radio"]:checked + label:before {
            border: 1px solid #E31B23;
        }

        [type="radio"]:checked + label:after,
        [type="radio"]:not(:checked) + label:after {
            content: '';
            width: 12px;
            height: 12px;
            background: #E31B23;
            position: absolute;
            top: 4px;
            left: 4px;
            border-radius: 100%;
            -webkit-transition: all 0.2s ease;
            transition: all 0.2s ease;
        }

        [type="radio"]:not(:checked) + label:after {
            opacity: 0;
            -webkit-transform: scale(0);
            transform: scale(0);
        }

        [type="radio"]:checked + label:after {
            opacity: 1;
            -webkit-transform: scale(1);
            transform: scale(1);
        }

        .btn-primary {
            background-color: #E31B23;
            border-color: #cd1b23;
        }

        .btn-primary:hover,
        .btn-primary:focus,
        .btn-primary.focus,
        .btn-primary:active,
        .btn-primary.active,
        .open > .dropdown-toggle.btn-primary {
            background-color: #c3181f;
            border-color: #af181f;
        }

        .btn-primary.disabled,
        .btn-primary[disabled],
        fieldset[disabled] .btn-primary,
        .btn-primary.disabled:hover,
        .btn-primary[disabled]:hover,
        fieldset[disabled] .btn-primary:hover,
        .btn-primary.disabled:focus,
        .btn-primary[disabled]:focus,
        fieldset[disabled] .btn-primary:focus,
        .btn-primary.disabled.focus,
        .btn-primary[disabled].focus,
        fieldset[disabled] .btn-primary.focus,
        .btn-primary.disabled:active,
        .btn-primary[disabled]:active,
        fieldset[disabled] .btn-primary:active,
        .btn-primary.disabled.active,
        .btn-primary[disabled].active,
        fieldset[disabled] .btn-primary.active {
            background-color: #E31B23;
            border-color: #cd1b23;
        }

        .btn-primary .badge {
            color: #E31B23;
            background-color: #fff;
        }

        .btn-dark-red, .btn-cars {
            background-image: linear-gradient(147deg, #E31B23 0%, #570e11 74%);
            box-shadow: 0 0 20px rgba(227, 27, 35, 0.4);
            color: #fff;
        }

        .btn-cars.color-white {
            box-shadow: 0 0 20px rgba(255, 255, 255, 0.4);
        }

        .stellar-parallax {
            margin: 3em auto
        }

        .stellar-overlay {
        	background: linear-gradient(to bottom, rgba(0, 0, 0, .2) 0%, rgba(0, 0, 0, .45) 30%, rgba(0, 0, 0, .65) 80%, rgba(0, 0, 0, .85) 100%) repeat scroll 0 0 rgba(0, 0, 0, 0);
        	position: absolute;
        	top: 0;
        	left: 0;
        	right: 0;
        	bottom: 0;
        	width: 100%;
        	height: 100%;
        }

        .stellar-parallax .first, .stellar-parallax .second, .stellar-parallax .third , .stellar-parallax .forth {
            width: 100%;
            height: 450px;
            margin: 0;
            display: table;
            background-size: cover;
            background-attachment: fixed;
            background-repeat: no-repeat;
        }

        .stellar-parallax .first h1, .stellar-parallax .second h1, .stellar-parallax .third h1,.stellar-parallax .forth h1,
        .stellar-parallax .first h2, .stellar-parallax .second h2, .stellar-parallax .third h2,.stellar-parallax .forth h2,
        .stellar-parallax .first h3, .stellar-parallax .second h3, .stellar-parallax .third h3, .stellar-parallax .forth h3 {
            margin: 0 auto;
            vertical-align: middle;
            text-align: center;
            display: table-cell;
            text-transform: none;
            position: relative;
            padding: 0 3em;
        }

        .stellar-parallax .first h1, .stellar-parallax .second h1, .stellar-parallax .third h1 {
            color: #eee;
        }

        .stellar-parallax .first h2, .stellar-parallax .second h2, .stellar-parallax .third h2 {
            color: #eee;
        }

        .stellar-parallax .first h3, .stellar-parallax .second h3, .stellar-parallax .third h3 {
            color: #aaa;
        }

        @media (min-width: 1440px) {
            .stellar-parallax .first h1, .stellar-parallax .second h1, .stellar-parallax .third h1,
            .stellar-parallax .first h2, .stellar-parallax .second h2, .stellar-parallax .third h2,
            .stellar-parallax .first h3, .stellar-parallax .second h3, .stellar-parallax .third h3 {
                font-size: 40px;
            }
        }

        @media (min-width: 1281px) and (max-width: 1439px) {
            .stellar-parallax .first h1, .stellar-parallax .second h1, .stellar-parallax .third h1,
            .stellar-parallax .first h2, .stellar-parallax .second h2, .stellar-parallax .third h2,
            .stellar-parallax .first h3, .stellar-parallax .second h3, .stellar-parallax .third h3 {
                font-size: 38px;
            }
        }

        @media (min-width: 1025px) and (max-width: 1280px) {
            .stellar-parallax .first h1, .stellar-parallax .second h1, .stellar-parallax .third h1,
            .stellar-parallax .first h2, .stellar-parallax .second h2, .stellar-parallax .third h2,
            .stellar-parallax .first h3, .stellar-parallax .second h3, .stellar-parallax .third h3 {
                font-size: 31px;
            }
        }

        @media (min-width: 768px) and (max-width: 1024px) {
            .stellar-parallax .first h1, .stellar-parallax .second h1, .stellar-parallax .third h1,
            .stellar-parallax .first h2, .stellar-parallax .second h2, .stellar-parallax .third h2,
            .stellar-parallax .first h3, .stellar-parallax .second h3, .stellar-parallax .third h3 {
                font-size: 30px;
            }
        }

        @media (min-width: 768px) and (max-width: 1024px) and (orientation: landscape) {
            .stellar-parallax .first h1, .stellar-parallax .second h1, .stellar-parallax .third h1,
            .stellar-parallax .first h2, .stellar-parallax .second h2, .stellar-parallax .third h2,
            .stellar-parallax .first h3, .stellar-parallax .second h3, .stellar-parallax .third h3 {
                font-size: 31px;
            }
        }

        @media (min-width: 481px) and (max-width: 767px) {
            .stellar-parallax .first h1, .stellar-parallax .second h1, .stellar-parallax .third h1,
            .stellar-parallax .first h2, .stellar-parallax .second h2, .stellar-parallax .third h2,
            .stellar-parallax .first h3, .stellar-parallax .second h3, .stellar-parallax .third h3 {
                font-size: 27px;
            }
        }

        @media (min-width: 320px) and (max-width: 480px) {
            .stellar-parallax .first h1, .stellar-parallax .second h1, .stellar-parallax .third h1,
            .stellar-parallax .first h2, .stellar-parallax .second h2, .stellar-parallax .third h2,
            .stellar-parallax .first h3, .stellar-parallax .second h3, .stellar-parallax .third h3 {
                font-size: 25px;
            }
        }
    </style>
    @stack('styles')
</head>
<body class="use-nicescroll">
<!-- page loader start -->
<div class="images-preloader">
    <div class="preloader4"></div>
</div>

<div class="wrapper">
    <div class="main-content home-page dark-page">
        <!-- header start -->
        <header class="site-header cars-header border-bottom dropdown-green navigation-dark">
            <!-- sub bar start -->
            <div class="sub-bar">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-sm-6">
                            <!-- Contacts start -->
                            <div class="contacts">
                                <p><a href="tel:+62817597777"><i class="fa fa-phone"></i> +62 817 597 777</a></p>
                                <p><a href="mailto:{{env('MAIL_USERNAME')}}"><i
                                                class="fa fa-envelope"></i> {{env('MAIL_USERNAME')}}</a></p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-6">
                            <!-- Social media start -->
                            <div class="social-media">
                                <a href="https://facebook.com/AveryDennisonCorporation" target="_blank">
                                    <i class="fab fa-facebook-f"></i></a>
                                <a href="https://twitter.com/AveryDennison" target="_blank">
                                    <i class="fab fa-twitter"></i></a>
                                <a href="https://instagram.com/averydennison.id" target="_blank">
                                    <i class="fab fa-instagram"></i></a>
                                <a href="https://youtube.com/AveryDennisonVideo" target="_blank">
                                    <i class="fab fa-youtube"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Main bar start -->
            <div class="main-bar bg-black" id="main-bar">
                <div class="container">
                    <div class="logo">
                        <a href="{{route('home')}}">
                            <img id="logo1" width="158px" src="{{asset('images/logo/white_horizontal.png')}}">
                        </a>
                    </div>
                    <button class="btn-toggle"><i class="fa fa-bars"></i></button>
                    <nav class="nav">
                        @include('layouts.partials._headerMenu')
                    </nav>
                </div>
            </div>
        </header>

        @yield('content')
    </div>

    <!-- footer Start -->
    <footer class="transparent-dark bgOverly footer-color7">
        <div class="content-widgets">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-6">
                        <div class="footer-widget widget">
                            <h4>Recent Posts</h4>
                            <ul class="recent-post">
                                @foreach(\App\Models\Blog::orderByDesc('id')->take(1)->get() as $row)
                                    @php
                                        $date = \Carbon\Carbon::parse($row->created_at);
                                        $url = route('detail.blog', ['author' => $row->getUser->username,
                                        'y' => $date->format('Y'), 'm' => $date->format('m'), 'd' => $date->format('d'),
                                        'title' => $row->title_uri]);
                                    @endphp
                                    <li>
                                        <a class="thumb" href="{{$url}}">
                                            <img src="{{asset('storage/blog/thumbnail/'.$row->thumbnail)}}" alt="">
                                        </a>
                                        <div class="right-post">
                                            <p style="padding-top: 0;padding-bottom: 5px;line-height: 1">{{strtoupper
                                            ($row->getBlogCategory->name)}} <i class="fa fa-calendar-alt"></i>{{$date
                                            ->format('F j, Y')}}<br><sub>by <a href="{{route('detail.blog', ['author' =>
                                            $row->getUser->username])}}">{{$row->getUser->username}}</a></sub></p>
                                            <a href="{{$url}}">{{$row->title}}</a>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                            <h4>Gallery</h4>
                            <div class="footer-gallery">
                                @foreach(\App\Models\Gallery::orderByDesc('id')->take(5)->get() as $row)
                                    <a href="{{route('show.gallery', ['title' => $row->title])}}">
                                        <img src="{{$row->type == 'photos' ? asset('storage/gallery/'.$row->file) :
                                        asset('storage/gallery/thumbnail/'.$row->thumbnail)}}" alt="">
                                    </a>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="footer-widget widget">
                            <div class="footer-logo">
                                <a href="{{route('home')}}">
                                    <img id="logo2" width="200px"
                                         src="{{asset('images/logo/red_horizontal.png')}}" alt=""></a>
                            </div>
                            <p>Our Company, <b>Premier Autostyling</b>, is the one and only
                                authorized distributor of <b>Avery Dennison</b> SWF (Supreme Wrap Film) in
                                <b>Indonesia</b>.</p>
                            <nav class="footer-nav" style="text-transform: uppercase">
                                <a href="{{route('show.contact')}}">Contact Us</a>
                                <a href="https://averydennison.com/en/home/legal-and-privacy-notices.html"
                                   target="_blank">Legal & Privacy Notices</a>
                            </nav>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="footer-widget widget">
                            <h4>Keep in Touch</h4>
                            <ul class="contact">
                                <li>
                                    <i class="fa fa-map-marked-alt"></i>
                                    Raya Kenjeran 469, Surabaya, East Java, Indonesia
                                </li>
                                <li>
                                    <i class="fa fa-phone"></i>
                                    <a href="tel:+62817597777">+62 817 597 777</a>
                                </li>
                                <li>
                                    <i class="fa fa-envelope"></i>
                                    <a href="mailto:info@supremewrap.co.id" style="text-transform: none">info@supremewrap.co.id</a>
                                </li>
                            </ul>
                            <div class="social-media">
                                <a href="https://facebook.com/AveryDennisonCorporation" target="_blank">
                                    <i class="fab fa-facebook-f"></i></a>
                                <a href="https://twitter.com/AveryDennison" target="_blank">
                                    <i class="fab fa-twitter"></i></a>
                                <a href="https://instagram.com/averydennison.id" target="_blank">
                                    <i class="fab fa-instagram"></i></a>
                                <a href="https://youtube.com/AveryDennisonVideo" target="_blank">
                                    <i class="fab fa-youtube"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <p>© {{now()->format('Y')}} Premier Autostyling. All rights reserved | Designed & Developed by
                            <a href="http://rabbit-media.net" target="_blank">Rabbit Media</a></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>

<a href="#" onclick="scrollToTop()" class="to-top" title="Go to top">Top</a>
<div class="myProgress">
    <div class="bar"></div>
</div>

<!-- Jquery -->
<script type="text/javascript" src="{{asset('js/jquery.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/bootstrap.js')}}"></script>
<script type="text/javascript" src="{{asset('js/classie.js')}}"></script>
<!-- Core Style -->
<script type="text/javascript" src="{{asset('js/jquery.colorbox.js')}}"></script>
<!-- Carousel Slider  -->
<script src="{{asset('vendor/owlcarousel/dist/owl.carousel.min.js')}}"></script>
<!-- Jquery Waypoints -->
<script type="text/javascript" src="{{asset('js/waypoints.min.js')}}"></script>
<!-- Jquery Counter -->
<script type="text/javascript" src="{{asset('js/visible.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/waypoints.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/jquery.easing.js')}}"></script>
<script type="text/javascript" src="{{asset('js/jquery.counterup.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/jquery.isotope.min.js')}}"></script>
<!-- Jquery progress bar js-->
<script type="text/javascript" src="{{asset('js/pro-bars.js')}}"></script>
<!-- SLIDER REVOLUTION SCRIPTS  -->
<script type="text/javascript" src="{{asset('vendor/rs-plugin/js/jquery.themepunch.plugins.min.js')}}"></script>
<script type="text/javascript" src="{{asset('vendor/rs-plugin/js/jquery.themepunch.revolution.min.js')}}"></script>
<!-- Template core js -->
<script type="text/javascript" src="{{asset('js/index-car-2.js')}}"></script>
<script type="text/javascript" src="{{asset('js/wmbox.js')}}"></script>

<!-- stellar-parallax -->
<script src="{{asset('vendor/stellar.js/jquery.stellar.min.js')}}"></script>
<!-- select2 -->
<script src="{{asset('vendor/select2/dist/js/select2.full.min.js')}}"></script>
<!-- check-mobile -->
<script src="{{asset('vendor/checkMobileDevice.js')}}"></script>
<!-- Nicescroll -->
<script src="{{asset('vendor/nicescroll/jquery.nicescroll.js')}}"></script>
<!-- Sweetalert2 -->
<script src="{{asset('vendor/sweetalert/sweetalert.min.js')}}"></script>
<!-- AOS -->
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
@stack('scripts')
<script type="text/javascript">
    $(function () {
        window.mobilecheck() ? $("body").removeClass('use-nicescroll') : $("body").css("overflow", "hidden");

        AOS.init({
            duration: 800,
            easing: 'slide',
            once: false,
        });

        $('[data-toggle="tooltip"]').tooltip();
        $('[data-toggle="popover"]').popover();

        $(window).stellar({
            responsive: true
        });
    });

    $('#logo1').hover(
        function () {
            $(this).attr('src', '{{asset('images/logo/red_horizontal.png')}}')
        },
        function () {
            $(this).attr('src', '{{asset('images/logo/white_horizontal.png')}}')
        }
    );

    $('#logo2').hover(
        function () {
            $(this).attr('src', '{{asset('images/logo/white_horizontal.png')}}')
        },
        function () {
            $(this).attr('src', '{{asset('images/logo/red_horizontal.png')}}')
        }
    );

    window.onscroll = function () {
        scrollFunction()
    };

    function scrollFunction() {
        if ($(this).scrollTop() > 100) {
            $('.to-top').addClass('show-to-top');
        } else {
            $('.to-top').removeClass('show-to-top');
        }
    }

    function scrollToTop(callback) {
        if ($('html').scrollTop()) {
            $('html').animate({scrollTop: 0}, callback);
            return;
        }
        if ($('body').scrollTop()) {
            $('body').animate({scrollTop: 0}, callback);
            return;
        }
        callback();
    }

    function numberOnly(e, decimal) {
        var key;
        var keychar;
        if (window.event) {
            key = window.event.keyCode;
        } else if (e) {
            key = e.which;
        } else return true;
        keychar = String.fromCharCode(key);
        if ((key == null) || (key == 0) || (key == 8) || (key == 9) || (key == 13) || (key == 27) || (key == 188)) {
            return true;
        } else if ((("0123456789").indexOf(keychar) > -1)) {
            return true;
        } else if (decimal && (keychar == ".")) {
            return true;
        } else return false;
    }

    var title = document.getElementsByTagName("title")[0].innerHTML;
    (function titleScroller(text) {
        document.title = text;
        setTimeout(function () {
            titleScroller(text.substr(1) + text.substr(0, 1));
        }, 500);
    }(title + " ~ "));

    <!--Scroll Progress Bar-->
    function progress() {
        var windowScrollTop = $(window).scrollTop();
        var docHeight = $(document).height();
        var windowHeight = $(window).height();
        var progress = (windowScrollTop / (docHeight - windowHeight)) * 100;
        var $bgColor = progress > 99 ? '#ff1f27' : '#E31B23';
        var $textColor = progress > 99 ? '#fff' : '#333';

        $('.myProgress .bar').width(progress + '%').css({backgroundColor: $bgColor});
        // $('h1').text(Math.round(progress) + '%').css({color: $textColor});
        $('.fill').height(progress + '%').css({backgroundColor: $bgColor});
    }

    progress();

    $(document).on('scroll', progress);

    window.onload = function () {
        $('.images-preloader').fadeOut();

        $(".use-nicescroll").niceScroll({
            cursorcolor: "rgb(227,27,35)",
            cursorwidth: "8px",
            background: "rgba(222, 222, 222, .75)",
            cursorborder: 'none',
            horizrailenabled: false,
            autohidemode: 'leave',
            zindex: 9999999,
        });

        var options = {
            whatsapp: "+62817597777",
            email: "sindhu@supremewrap.co.id",
            call_to_action: "Contact us",
            button_color: "#e31b23",
            position: "left",
            order: "email,whatsapp",
        };
        var proto = document.location.protocol, host = "getbutton.io", url = proto + "//static." + host;
        var s = document.createElement('script');
        s.type = 'text/javascript';
        s.async = true;
        s.src = url + '/widget-send-button/js/init.js';
        s.onload = function () {
            WhWidgetSendButton.init(host, proto, options);
        };
        var x = document.getElementsByTagName('script')[0];
        x.parentNode.insertBefore(s, x);
    };

    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();

            document.querySelector(this.getAttribute('href')).scrollIntoView({
                behavior: 'smooth'
            });
        });
    });

    $(document).on('mouseover', '.use-nicescroll', function () {
        $(this).getNiceScroll().resize();
    });
</script>
</body>
</html>
