@extends('layouts.mst')
@section('title', 'Home | '.env('APP_TITLE'))
@push('styles')
@endpush
@section('content')
<!-- revolution slider begin -->
<section class="home-slider">
    <div id="slider">
        <div class="fullwidthbanner-container">
            <div id="revolution-slider">
                <ul>
                    <li class="slider-bg2" data-transition="fade" data-slotamount="7" data-masterspeed="500">
                        <img src="{{'images/slider/car-bg-4.jpg'}}" alt="">
                        <div class="tp-caption sfr stb custom-size-2 white tp-resizeme zindex"
                             data-x="center"
                             data-hoffset="-15"
                             data-y="170"
                             data-speed="300"
                             data-start="1400"
                             data-easing="easeInOut">
                            Find Your <strong class="strong-red">Dream Car</strong>
                        </div>
                        <div class="tp-caption sfr stt custom-size-6 white tp-resizeme zindex"
                             data-x="center"
                             data-hoffset="-15"
                             data-y="250"
                             data-speed="300"
                             data-start="1000"
                             data-easing="easeInOut">
                            Welcome To Carspot
                        </div>
                        <div class="tp-caption sfr stb text-center custom-size-8 white tp-resizeme zindex"
                             data-x="center"
                             data-hoffset="-15"
                             data-y="320"
                             data-speed="300"
                             data-start="1800"
                             data-easing="easeInOut">
                            <p>With over 10 years of experience helping businesses to find<br>
                                comprehensive solutions.</p>
                        </div>
                    </li>
                    <li class="slider-bg2" data-transition="fade" data-slotamount="7" data-masterspeed="500">
                        <img src="{{'images/slider/car-bg.jpg'}}" alt="">
                        <div class="tp-caption sfr stb custom-size-2 white tp-resizeme zindex"
                             data-x="center"
                             data-hoffset="-15"
                             data-y="170"
                             data-speed="300"
                             data-start="1400"
                             data-easing="easeInOut">
                            Find Your Dream Car
                        </div>
                        <div class="tp-caption sfr stt custom-size-6 white tp-resizeme zindex"
                             data-x="center"
                             data-hoffset="-15"
                             data-y="240"
                             data-speed="300"
                             data-start="1000"
                             data-easing="easeInOut">
                            Thousand Of <strong class="strong-red">Cars</strong> Of Your Choice
                        </div>
                        <div class="tp-caption sfr stb text-center custom-size-8 white tp-resizeme zindex"
                             data-x="center"
                             data-hoffset="-15"
                             data-y="310"
                             data-speed="300"
                             data-start="1800"
                             data-easing="easeInOut">
                            <p>With over 10 years of experience helping businesses to find<br>
                                comprehensive solutions.</p>
                        </div>
                    </li>

                </ul>
            </div>
        </div>
    </div>
</section>
<!-- features-5 -->
<section class="our-car bot-50">
    <div class="container">
        <h2 class="text-heading border-4 text-center">Our <strong class="strong-red">Car</strong></h2>
        <p class="text-heading text-center">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt.</p>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-3">
                        <div class="car-box">
                            <div class="car-img-info">
                                <img src="{{'images/blog/cars/1.jpg'}}" alt="">
                            </div>
                            <div class="car-txt-content">
                                <p>$24.000</p>
                            </div>
                            <div class="car-txt-info">
                                <h2><a href="#">BMW X6, Navi, Leather, Abs</a></h2>
                                <ul>
                                    <li>45/65 <i class="fa fa-tachometer"></i></li>
                                    <li>Automatic <i class="fa fa-car"></i></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="car-box">
                            <div class="car-img-info">
                                <img src="{{'images/blog/cars/2.jpg'}}" alt="">
                            </div>
                            <div class="car-txt-content">
                                <p>$24.000</p>
                            </div>
                            <div class="car-txt-info">
                                <h2><a href="#">BMW X6, Navi, Leather, Abs</a></h2>
                                <ul>
                                    <li>45/65 <i class="fa fa-tachometer"></i></li>
                                    <li>Automatic <i class="fa fa-car"></i></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="car-box">
                            <div class="car-img-info">
                                <img src="{{'images/blog/cars/3.jpg'}}" alt="">
                            </div>
                            <div class="car-txt-content">
                                <p>$24.000</p>
                            </div>
                            <div class="car-txt-info">
                                <h2><a href="#">BMW X6, Navi, Leather, Abs</a></h2>
                                <ul>
                                    <li>45/65 <i class="fa fa-tachometer"></i></li>
                                    <li>Automatic <i class="fa fa-car"></i></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="car-box">
                            <div class="car-img-info">
                                <img src="{{'images/blog/cars/4.jpg'}}" alt="">
                            </div>
                            <div class="car-txt-content">
                                <p>$24.000</p>
                            </div>
                            <div class="car-txt-info">
                                <h2><a href="#">BMW X6, Navi, Leather, Abs</a></h2>
                                <ul>
                                    <li>45/65 <i class="fa fa-tachometer"></i></li>
                                    <li>Automatic <i class="fa fa-car"></i></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="car-box">
                            <div class="car-img-info">
                                <img src="{{'images/blog/cars/5.jpg'}}" alt="">
                            </div>
                            <div class="car-txt-content">
                                <p>$24.000</p>
                            </div>
                            <div class="car-txt-info">
                                <h2><a href="#">BMW X6, Navi, Leather, Abs</a></h2>
                                <ul>
                                    <li>45/65 <i class="fa fa-tachometer"></i></li>
                                    <li>Automatic <i class="fa fa-car"></i></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="car-box">
                            <div class="car-img-info">
                                <img src="{{'images/blog/cars/6.jpg'}}" alt="">
                            </div>
                            <div class="car-txt-content">
                                <p>$24.000</p>
                            </div>
                            <div class="car-txt-info">
                                <h2><a href="#">BMW X6, Navi, Leather, Abs</a></h2>
                                <ul>
                                    <li>45/65 <i class="fa fa-tachometer"></i></li>
                                    <li>Automatic <i class="fa fa-car"></i></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="car-box">
                            <div class="car-img-info">
                                <img src="{{'images/blog/cars/7.jpg'}}" alt="">
                            </div>
                            <div class="car-txt-content">
                                <p>$24.000</p>
                            </div>
                            <div class="car-txt-info">
                                <h2><a href="#">BMW X6, Navi, Leather, Abs</a></h2>
                                <ul>
                                    <li>45/65 <i class="fa fa-tachometer"></i></li>
                                    <li>Automatic <i class="fa fa-car"></i></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="car-box">
                            <div class="car-img-info">
                                <img src="{{'images/blog/cars/8.jpg'}}" alt="">
                            </div>
                            <div class="car-txt-content">
                                <p>$24.000</p>
                            </div>
                            <div class="car-txt-info">
                                <h2><a href="#">BMW X6, Navi, Leather, Abs</a></h2>
                                <ul>
                                    <li>45/65 <i class="fa fa-tachometer"></i></li>
                                    <li>Automatic <i class="fa fa-car"></i></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="text-center">
                            <a href="" class="btn btn-cars-view">View all</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Our amazing works -->
<section class="text-center our-works2 border-3 bg-color color-white">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="title text-center">Our Gallery</h2>
                <p class="text-heading white">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. </p>
            </div>
        </div>
    </div>
    <div class="our-projects color-3">

        <ul id="filter" class="filter-projects color-1 none-style">
            <li><a href="#" class="current" data-filter="*" title="">All works</a></li>
            <li><a href="#" data-filter=".css" title="">Bussines</a></li>
            <li><a href="#" data-filter=".html5" title="">HTML5</a></li>
            <li><a href="#" data-filter=".design" title="">Design</a></li>
            <li><a href="#" data-filter=".jquery" title="">Website</a></li>
            <li><a href="#" data-filter=".wordpress" title="">Wordpress</a></li>
        </ul>

        <div id="gallery" class="all-projects projects-4">

            <div class="item css html5">
                <div class="project-box ">
                    <div class="image-project">
                        <img src="{{'images/blog/cars/9.jpg'}}" alt="">
                        <div class="overlay">
                            <h4><a href="project-details.html">Our Amazing</a></h4>
                            <a href="{{'images/blog/cars/9.jpg'}}" class="zoomin">
                                <i class="fa fa-expand"></i>
                            </a>
                            <a href="projects-single.html" class="linkout">
                                <i class="fa fa-link"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item wordpress html5">
                <div class="project-box ">
                    <div class="image-project">
                        <img src="{{'images/blog/cars/10.jpg'}}" alt="">
                        <div class="overlay">
                            <h4><a href="project-details.html">Our Amazing</a></h4>
                            <a href="{{'images/blog/cars/10.jpg'}}" class="zoomin">
                                <i class="fa fa-expand"></i>
                            </a>
                            <a href="projects-single.html" class="linkout">
                                <i class="fa fa-link"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item css wordpress">
                <div class="project-box">
                    <div class="image-project">
                        <img src="{{'images/blog/cars/11.jpg'}}" alt="">
                        <div class="overlay">
                            <h4><a href="project-details.html">Our Amazing</a></h4>
                            <a href="{{'images/blog/cars/11.jpg'}}" class="zoomin">
                                <i class="fa fa-expand"></i>
                            </a>
                            <a href="projects-single.html" class="linkout">
                                <i class="fa fa-link"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item jquery design">
                <div class="project-box ">
                    <div class="image-project">
                        <img src="{{'images/blog/cars/12.jpg'}}" alt="">
                        <div class="overlay">
                            <h4><a href="project-details.html">Our Amazing</a></h4>
                            <a href="{{'images/blog/cars/12.jpg'}}" class="zoomin">
                                <i class="fa fa-expand"></i>
                            </a>
                            <a href="projects-single.html" class="linkout">
                                <i class="fa fa-link"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item jquery design">
                <div class="project-box ">
                    <div class="image-project">
                        <img src="{{'images/blog/cars/13.jpg'}}" alt="">
                        <div class="overlay">
                            <h4><a href="project-details.html">Our Amazing</a></h4>
                            <a href="{{'images/blog/cars/13.jpg'}}" class="zoomin">
                                <i class="fa fa-expand"></i>
                            </a>
                            <a href="projects-single.html" class="linkout">
                                <i class="fa fa-link"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item css jquery">
                <div class="project-box ">
                    <div class="image-project">
                        <img src="{{'images/blog/cars/14.jpg'}}" alt="">
                        <div class="overlay">
                            <h4><a href="project-details.html">Our Amazing</a></h4>
                            <a href="{{'images/blog/cars/14.jpg'}}" class="zoomin">
                                <i class="fa fa-expand"></i>
                            </a>
                            <a href="projects-single.html" class="linkout">
                                <i class="fa fa-link"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item design html5">
                <div class="project-box ">
                    <div class="image-project">
                        <img src="{{'images/blog/cars/15.jpg'}}" alt="">
                        <div class="overlay">
                            <h4><a href="project-details.html">Our Amazing</a></h4>
                            <a href="{{'images/blog/cars/15.jpg'}}" class="zoomin">
                                <i class="fa fa-expand"></i>
                            </a>
                            <a href="projects-single.html" class="linkout">
                                <i class="fa fa-link"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item wordpress css">
                <div class="project-box ">
                    <div class="image-project">
                        <img src="{{'images/blog/cars/16.jpg'}}" alt="">
                        <div class="overlay">
                            <h4><a href="project-details.html">Our Amazing</a></h4>
                            <a href="{{'images/blog/cars/16.jpg'}}" class="zoomin">
                                <i class="fa fa-expand"></i>
                            </a>
                            <a href="projects-single.html" class="linkout">
                                <i class="fa fa-link"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- Start: Call center -->
<section class="car-wrapper-service">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="row">
                    <div class="call-center">
                        <div class="left-call">
                            <img src="{{'images/layer-slider/call-center.png'}}" alt="">
                        </div>
                        <div class="right-call">
                            <h2>Are you looking for a car?</h2>
                            <p>Search your car in our Inventory and request a quote on the vehicle of your choosing.</p>
                            <a href="" class="btn btn-cars">Search</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="row">
                    <div class="call-center bg1">
                        <div class="right-call padd-left">
                            <h2>Do you want to sell your car ?</h2>
                            <p>Search your car in our Inventory and request a quote on the vehicle of your choosing.</p>
                            <a href="" class="btn btn-cars color-white">Search</a>
                        </div>
                        <div class="left-call">
                            <img src="{{'images/layer-slider/call-center-2.png'}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Our recent -->
<section class="text-center recent-projects color-1 light padd-50">
    <div class="container">
        <div class="row">
            <h2>Feature <strong class="strong-red">Car</strong></h2>
            <p class="text-heading text-center">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt.</p>
        </div>
    </div>
    <div id="recent-slider" class="similar-slider all-projects style-1 default-owl">
        <div class="item design css">
            <div class="project-box">
                <div class="image-project">
                    <img src="{{'images/blog/cars/17.jpg'}}" alt="">
                    <div class="overlay">
                        <a href="{{'images/blog/cars/17.jpg'}}" class="zoomin">
                            <i class="fa fa-expand"></i>
                        </a>
                        <a href="projects-single.html" class="linkout">
                            <i class="fa fa-link"></i>
                        </a>
                    </div>
                </div>
                <div class="pro-info">
                    <div class="arrow"></div>
                    <h4><a href="project-details.html">Sale 20% Off</a></h4>
                    <div class="cat-name"><a href="#" class="text-line-through">$250,000,000</a>, <a href="#">$200,000,000</a></div>
                </div>
            </div>
        </div>
        <div class="item css html5">
            <div class="project-box ">
                <div class="image-project">
                    <img src="{{'images/blog/cars/18.jpg'}}" alt="">
                    <div class="overlay">
                        <a href="{{'images/blog/cars/18.jpg'}}" class="zoomin">
                            <i class="fa fa-expand"></i>
                        </a>
                        <a href="projects-single.html" class="linkout">
                            <i class="fa fa-link"></i>
                        </a>
                    </div>
                </div>
                <div class="pro-info">
                    <div class="arrow"></div>
                    <h4><a href="project-details.html">Sale 18% Off</a></h4>
                    <div class="cat-name"><a href="#" class="text-line-through">$450,000,000</a>, <a href="#">$380,000,000</a></div>
                </div>
            </div>
        </div>
        <div class="item css wordpress">
            <div class="project-box ">
                <div class="image-project">
                    <img src="{{'images/blog/cars/19.jpg'}}" alt="">
                    <div class="overlay">
                        <a href="{{'images/blog/cars/19.jpg'}}" class="zoomin">
                            <i class="fa fa-expand"></i>
                        </a>
                        <a href="projects-single.html" class="linkout">
                            <i class="fa fa-link"></i>
                        </a>
                    </div>
                </div>
                <div class="pro-info">
                    <div class="arrow"></div>
                    <h4><a href="project-details.html">Sale 50% Off</a></h4>
                    <div class="cat-name"><a href="#" class="text-line-through">$320,000,000</a>, <a href="#">$160,000,000</a></div>
                </div>
            </div>
        </div>
        <div class="item jquery design">
            <div class="project-box ">
                <div class="image-project">
                    <img src="{{'images/blog/cars/20.jpg'}}" alt="">
                    <div class="overlay">
                        <a href="{{'images/blog/cars/20.jpg'}}" class="zoomin">
                            <i class="fa fa-expand"></i>
                        </a>
                        <a href="projects-single.html" class="linkout">
                            <i class="fa fa-link"></i>
                        </a>
                    </div>
                </div>
                <div class="pro-info">
                    <div class="arrow"></div>
                    <h4><a href="project-details.html">Sale 10% Off</a></h4>
                    <div class="cat-name"><a href="#" class="text-line-through">$500,000,000</a>, <a href="#">$400,000,000</a></div>
                </div>
            </div>
        </div>
        <div class="item css html5">
            <div class="project-box">
                <div class="image-project">
                    <img src="{{'images/blog/cars/21.jpg'}}" alt="">
                    <div class="overlay">
                        <a href="{{'images/blog/cars/21.jpg'}}" class="zoomin">
                            <i class="fa fa-expand"></i>
                        </a>
                        <a href="projects-single.html" class="linkout">
                            <i class="fa fa-link"></i>
                        </a>
                    </div>
                </div>
                <div class="pro-info">
                    <div class="arrow"></div>
                    <h4><a href="project-details.html">Sale 15% Off</a></h4>
                    <div class="cat-name"><a href="#" class="text-line-through">$150,000,000</a>, <a href="#">$125,000,000</a></div>
                </div>
            </div>
        </div>
    </div>
    <a href="#" class="nav-recent back-slide"><i class="fa fa-angle-left"></i></a>
    <a href="#" class="nav-recent next-slide"><i class="fa fa-angle-right"></i></a>
</section>
<!-- Start: Testimonials -->
<section class="clients-testimonials bg1">
    <div class="container">
        <h2 class="text-heading border-4 white text-center">Clients <strong class="strong-red">Testimonials</strong></h2>
        <p class="text-heading white text-center">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt.</p>
    </div>
    <div class="container">
        <div id="testimonials" class="testi-slider owl-bg  text-center">
            <div class="testimonials style-10 quote color-white">
                <div class="col-md-4 item">
                    <blockquote>
                        <p><i class="fa fa-quote-left"></i> Denim you probably haven't heard of. Lorem ipsum dolor met consectetur adipisicing sit amet, consectetur adipisicing elit, of them jean shorts sed magna aliqua. Lorem ipsum dolor met. <i class="fa fa-quote-right"></i>
                        </p>
                    </blockquote>
                    <div class="carousel-info"> <img alt="" src="{{'images/faces/500/2.jpg'}}" class="pull-left img-thumbnail">
                        <div class="pull-left"> <span class="testimonials-name">John Doe</span> <span class="testimonials-post">Auto & Deller</span> </div>
                    </div>
                </div>
                <div class="col-md-4 item">
                    <blockquote>
                        <p><i class="fa fa-quote-left"></i> Denim you probably haven't heard of. Lorem ipsum dolor met consectetur adipisicing sit amet, consectetur adipisicing elit, of them jean shorts sed magna aliqua. Lorem ipsum dolor met. <i class="fa fa-quote-right"></i>
                        </p>
                    </blockquote>
                    <div class="carousel-info"> <img alt="" src="{{'images/faces/500/3.jpg'}}" class="pull-left img-thumbnail">
                        <div class="pull-left"> <span class="testimonials-name">Jason Doe</span> <span class="testimonials-post">Customer</span> </div>
                    </div>
                </div>
                <div class="col-md-4 item">
                    <blockquote>
                        <p><i class="fa fa-quote-left"></i> Denim you probably haven't heard of. Lorem ipsum dolor met consectetur adipisicing sit amet, consectetur adipisicing elit, of them jean shorts sed magna aliqua. Lorem ipsum dolor met. <i class="fa fa-quote-right"></i>
                        </p>
                    </blockquote>
                    <div class="carousel-info"> <img alt="" src="{{'images/faces/500/4.jpg'}}" class="pull-left img-thumbnail">
                        <div class="pull-left"> <span class="testimonials-name">Josh Doe</span> <span class="testimonials-post">Customer</span> </div>
                    </div>
                </div>
            </div>
            <div class="testimonials style-10 quote color-white">
                <div class="col-md-4 item">
                    <blockquote>
                        <p><i class="fa fa-quote-left"></i> Denim you probably haven't heard of. Lorem ipsum dolor met consectetur adipisicing sit amet, consectetur adipisicing elit, of them jean shorts sed magna aliqua. Lorem ipsum dolor met. <i class="fa fa-quote-right"></i>
                        </p>
                    </blockquote>
                    <div class="carousel-info"> <img alt="" src="{{'images/faces/500/1.jpg'}}" class="pull-left img-thumbnail">
                        <div class="pull-left"> <span class="testimonials-name">Jayden Doe</span> <span class="testimonials-post">Auto & Deller</span> </div>
                    </div>
                </div>
                <div class="col-md-4 item">
                    <blockquote>
                        <p><i class="fa fa-quote-left"></i> Denim you probably haven't heard of. Lorem ipsum dolor met consectetur adipisicing sit amet, consectetur adipisicing elit, of them jean shorts sed magna aliqua. Lorem ipsum dolor met. <i class="fa fa-quote-right"></i>
                        </p>
                    </blockquote>
                    <div class="carousel-info"> <img alt="" src="{{'images/faces/500/4.jpg'}}" class="pull-left img-thumbnail">
                        <div class="pull-left"> <span class="testimonials-name">Jacob Doe</span> <span class="testimonials-post">Customer</span> </div>
                    </div>
                </div>
                <div class="col-md-4 item">
                    <blockquote>
                        <p><i class="fa fa-quote-left"></i> Denim you probably haven't heard of. Lorem ipsum dolor met consectetur adipisicing sit amet, consectetur adipisicing elit, of them jean shorts sed magna aliqua. Lorem ipsum dolor met. <i class="fa fa-quote-right"></i>
                        </p>
                    </blockquote>
                    <div class="carousel-info"> <img alt="" src="{{'images/faces/500/2.jpg'}}" class="pull-left img-thumbnail">
                        <div class="pull-left"> <span class="testimonials-name">James Doe</span> <span class="testimonials-post">Customer</span> </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- fun-fact -->
<section class="fun-fact fun-style fun-style-car padd-65">
    <div class="container">
        <div class="row">

            <div class="col-md-3 col-sm-6">
                <div class="fact-box bottom-20">
                    <i class="fa fa-car"></i>
                    <div class="num-fact counter-skills"><h6>2589</h6></div>
                    <p>Vehicles in stock</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="fact-box bottom-20">
                    <i class="fa fa-commenting-o"></i>
                    <div class="num-fact counter-skills"><h6>3985</h6></div>
                    <p>Dealer reviews</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="fact-box">
                    <i class="fa fa-users"></i>
                    <div class="num-fact counter-skills"><h6>5890</h6></div>
                    <p>Happy customer</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="fact-box">
                    <i class="fa fa-trophy"></i>
                    <div class="num-fact counter-skills"><h6>9909</h6></div>
                    <p>Awards</p>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- Blog -->
<section class="latest-blog color-2">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="container text-center">
                    <h2>Latest <strong class="strong-red">News</strong></h2>
                    <p class="text-heading">Lorem ipsum dolor sit amet, consectetuer adipiscing elit,tincidunt consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <article class="latest-post item-post style-1">
                    <div class="post-thumb">
                        <a href="blog-post.html"><img src="{{'images/blog/600x400/1.jpg'}}" alt=""></a>
                    </div>
                    <div class="post-meta">
                        <div class="avatar-date">
                            <p><span>25</span></p>
                            <p>Jan</p>
                            <div class="avatar-comment">
                                <p><i class="fa fa-comment-o"></i> 10</p>
                            </div>
                        </div>
                        <div class="meta-right">
                            <h4><a href="blog-post.html">Lates Blog Post With Image</a></h4>
                            <p>There are many variations passages available, but the lorem, ipsum...</p>
                        </div>
                    </div>
                </article>
            </div>
            <div class="col-md-4">
                <article class="latest-post item-post style-1">
                    <div class="post-thumb">
                        <a href="blog-post.html"><img src="{{'images/blog/600x400/2.jpg'}}" alt=""></a>
                    </div>
                    <div class="post-meta">
                        <div class="avatar-date">
                            <p><span>5</span></p>
                            <p>Jan</p>
                            <div class="avatar-comment">
                                <p><i class="fa fa-comment-o"></i> 10</p>
                            </div>
                        </div>
                        <div class="meta-right">
                            <h4><a href="blog-post.html">Lates Blog Post With Image</a></h4>
                            <p>There are many variations passages available, but the lorem, ipsum...</p>
                        </div>
                    </div>
                </article>
            </div>
            <div class="col-md-4">
                <article class="latest-post item-post style-1">
                    <div class="post-thumb">
                        <a href="blog-post.html"><img src="{{'images/blog/600x400/3.jpg'}}" alt=""></a>
                    </div>
                    <div class="post-meta">
                        <div class="avatar-date">
                            <p><span>18</span></p>
                            <p>Jan</p>
                            <div class="avatar-comment">
                                <p><i class="fa fa-comment-o"></i> 10</p>
                            </div>
                        </div>
                        <div class="meta-right">
                            <h4><a href="blog-post.html">Lates Blog Post With Image</a></h4>
                            <p>There are many variations passages available, but the lorem, ipsum...</p>
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </div>
</section>
<!-- Our Client -->
<section id="our-client" class="our-client bg-1 color-1">
    <h2>Our Clients</h2>
    <div class="container">
        <div id="clients" class="client-slider default-owl client-border">
            <div class="logo-item">
                <a href="#"><img src="{{'images/logos/white/logo-1.png'}}" alt=""></a>
            </div>
            <div class="logo-item">
                <a href="#"><img src="{{'images/logos/white/logo-2.png'}}" alt=""></a>
            </div>
            <div class="logo-item">
                <a href="#"><img src="{{'images/logos/white/logo-3.png'}}" alt=""></a>
            </div>
            <div class="logo-item">
                <a href="#"><img src="{{'images/logos/white/logo-4.png'}}" alt=""></a>
            </div>
            <div class="logo-item">
                <a href="#"><img src="{{'images/logos/white/logo-5.png'}}" alt=""></a>
            </div>
            <div class="logo-item">
                <a href="#"><img src="{{'images/logos/white/logo-6.png'}}" alt=""></a>
            </div>
            <div class="logo-item">
                <a href="#"><img src="{{'images/logos/white/logo-7.png'}}" alt=""></a>
            </div>
            <div class="logo-item">
                <a href="#"><img src="{{'images/logos/white/logo-8.png'}}" alt=""></a>
            </div>
        </div>
    </div>
</section>
@endsection
@push('scripts')
@endpush
