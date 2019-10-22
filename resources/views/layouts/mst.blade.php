<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />

    <title>@yield('title')</title>
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('favicon.ico')}}" />
    <meta name="keywords" content="HTML5 Template , Responsive , html5 , css3" />
    <meta name="description" content="Baako - Responsive HTML5 CSS3 Template">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Bootstrap-3.3.7 fremwork css -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}"/>
    <!-- Core Style css -->
    <link rel="stylesheet" href="{{asset('css/colorbox.css')}}"/>
    <!-- Slider carousel css  -->
    <link rel="stylesheet" href="{{asset('css/owl.carousel.css')}}"/>
    <!-- Slider revolution css  -->
    <link rel="stylesheet" href="{{asset('rs-plugin/css/settings.css')}}"/>
    <link rel="stylesheet" href="{{asset('css/rev-settings.css')}}"/>
    <!-- Fontawesome 5.10.1 -->
    <link rel="stylesheet" type="text/css" href="{{asset('fonts/fontawesome/css/all.css')}}">
    <!-- Main style css -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}"/>
    @stack('styles')
</head>
<body>
<!-- page loader start -->
<div class="images-preloader">
    <div class="preloader4"></div>
</div>

<div class="wrapper">
    <div class="main-content scroll-none home-page">
        <!-- header start -->
        <header class="site-header cars-header border-bottom dropdown-green">
            <!-- Top search -->
            <div class="top-search">
                <div class="container">
                    <div class="row">
                        <input type="text" class="" name="x" placeholder="Type & Hit Enter" autofocus="autofocus">
                    </div>
                    <a href="#" id="search-delete"><i class="fa fa-times"></i></a>
                </div>
            </div>
            <!-- sub bar start -->
            <div class="sub-bar">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-sm-6">
                            <!-- Contacts start -->
                            <div class="contacts">
                                <p><a href="tel:+6281615007777"><i class="fa fa-phone"></i> +62 816 1500 7777</a></p>
                                <p><a href="mailto:{{env('MAIL_USERNAME')}}"><i class="fa fa-envelope"></i> {{env('MAIL_USERNAME')}}</a></p>
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
                            <img src="{{asset('images/car-logo-red.png')}}" alt="">
                        </a>
                    </div>
                    <button class="btn-toggle"><i class="fa fa-reorder"></i></button>
                    <nav class="nav">
                        <ul class="main-menu">
                            <li><a href="{{route('home')}}"><i class="fa fa-home" style="margin-right: .7em"></i>Home</a></li>
                            <li class="menu-item-has-children">
                                <a href="#"><i class="fa fa-car" style="margin-right: .7em"></i>Products <i class="fa fa-angle-down"></i></a>
                                <ul class="dropdown-menu dropdown-arrow">
                                    <li class="menu-item-has-children">
                                        <a href="{{route('show.product-overview')}}">Supreme Wrap Film</a>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="http://ppf.co.id" target="_blank">PPF (SPF-XI)</a>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="{{route('show.gallery')}}"><i class="fa fa-photo-video" style="margin-right: .7em"></i>Gallery</a></li>
                            <li><a href="{{route('show.installers')}}"><i class="fa fa-tools" style="margin-right: .7em"></i>Installers</a></li>
                            <li><a href="{{route('show.blog')}}"><i class="fa fa-blog" style="margin-right: .7em"></i>Blog</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </header>

        @yield('content')
    </div>

    <!-- footer Start -->
    <footer>
        <div class="content-widgets">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <div class="footer-widget widget">
                            <img src="{{asset('images/car-logo.png')}}" alt="">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua.</p>
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
                    <div class="col-md-3 col-sm-6">
                        <div class="footer-widget widget">
                            <h4>Useful Links</h4>
                            <ul class="contact">
                                <li>
                                    <a href=""><i class="fa fa-caret-right"></i> Home Page</a>
                                </li>
                                <li>
                                    <a href=""><i class="fa fa-caret-right"></i> Contact Us</a>
                                </li>
                                <li>
                                    <a href=""><i class="fa fa-caret-right"></i> FAQ's</a>
                                </li>
                                <li>
                                    <a href=""><i class="fa fa-caret-right"></i> Blog</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="footer-widget widget">
                            <h4>OUR SERVICE</h4>
                            <ul class="contact">
                                <li>
                                    <a href=""><i class="fa fa-caret-right"></i> Home Page</a>
                                </li>
                                <li>
                                    <a href=""><i class="fa fa-caret-right"></i> Contact Us</a>
                                </li>
                                <li>
                                    <a href=""><i class="fa fa-caret-right"></i> FAQ's</a>
                                </li>
                                <li>
                                    <a href=""><i class="fa fa-caret-right"></i> Blog</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="footer-widget widget">
                            <h4>Keep in touch</h4>
                            <ul class="contact">
                                <li>
                                    <i class="fa fa-map-marked-alt"></i>
                                    Raya Kenjeran 469, Surabaya East Java, Indonesia &ndash; 60134.
                                </li>
                                <li>
                                    <i class="fa fa-phone"></i>
                                    <a href="tel:+6281615007777">+62 816 1500 7777</a>
                                </li>
                                <li>
                                    <i class="fa fa-envelope"></i>
                                    <a href="mailto:info@ppf.co.id" style="text-transform: none">info@ppf.co.id</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright">
            <div class="container">
                <div class="row">
                    <div class="col-md-9">
                        <p>© {{now()->format('Y')}} Premier Autostyling. All rights reserved | Designed & Developed by
                            <a href="http://rabbit-media.net" target="_blank">Rabbit Media</a></p>
                    </div>
                    <div class="col-md-3">
                        <p class="back-top"><a href="#" id="to-top">BACK TO TOP <i class="fa fa-angle-up"></i></a></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>
<!-- Jquery -->
<script type="text/javascript" src="{{asset('js/jquery.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/bootstrap.js')}}"></script>
<script type="text/javascript" src="{{asset('js/classie.js')}}"></script>
<!-- Core Style -->
<script type="text/javascript" src="{{asset('js/jquery.colorbox.js')}}"></script>
<!-- Carousel Slider  -->
<script type="text/javascript" src="{{asset('js/owl.carousel.min.js')}}"></script>
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
<script type="text/javascript" src="{{asset('rs-plugin/js/jquery.themepunch.plugins.min.js')}}"></script>
<script type="text/javascript" src="{{asset('rs-plugin/js/jquery.themepunch.revolution.min.js')}}"></script>
<!-- Template core js -->
<script type="text/javascript" src="{{asset('js/index-car-2.js')}}"></script>
<script type="text/javascript" src="{{asset('js/wmbox.js')}}"></script>
</body>
</html>
