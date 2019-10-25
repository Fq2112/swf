@extends('layouts.mst')
@section('title', 'Installers | '.env('APP_TITLE'))
@push('styles')
    <link rel="stylesheet" href="{{asset('css/downloadCard-gridList.css')}}">
    <style>
        .breadcrumbs {
            background-image: url({{asset('images/slider/installer5.jpg')}});
        }

        #map{
            border: 1px solid #FFF;
        }

        #map:hover {
            border: 1px solid #E31B23;
        }

        .gm-style-iw {
            width: 350px !important;
            top: 15px;
            left: 22px;
            background-color: #fff;
            box-shadow: 0 1px 6px rgba(178, 178, 178, 0.6);
            border: 1px solid rgba(227, 27, 35, 0.6);
            border-radius: 2px 2px 10px 10px;
        }

        .gm-style-iw > div:first-child {
            max-width: 350px !important;
        }

        #iw-container {
            margin-bottom: 10px;
        }

        #iw-container .iw-title {
            font-family: 'Open Sans Condensed', sans-serif;
            font-size: 22px;
            font-weight: 400;
            padding: 10px;
            background-color: #e31b23;
            color: white;
            margin: 0;
            border-radius: 2px 2px 0 0;
        }

        #iw-container .iw-content {
            font-size: 13px;
            line-height: 18px;
            font-weight: 400;
            margin-right: 1px;
            padding: 15px 5px 20px 15px;
            max-height: 140px;
            overflow-y: auto;
            overflow-x: hidden;
        }

        .iw-content a {
            color: #E31B23;
            text-decoration: none;
        }

        .iw-content img {
            float: right;
            margin: 0 5px 5px 10px;
            width: 30%;
        }

        .iw-subTitle {
            font-size: 16px;
            font-weight: 700;
            padding: 5px 0;
        }

        .iw-bottom-gradient {
            position: absolute;
            width: 326px;
            height: 25px;
            bottom: 10px;
            right: 18px;
            background: linear-gradient(to bottom, rgba(255, 255, 255, 0) 0%, rgba(255, 255, 255, 1) 100%);
            background: -webkit-linear-gradient(top, rgba(255, 255, 255, 0) 0%, rgba(255, 255, 255, 1) 100%);
            background: -moz-linear-gradient(top, rgba(255, 255, 255, 0) 0%, rgba(255, 255, 255, 1) 100%);
            background: -ms-linear-gradient(top, rgba(255, 255, 255, 0) 0%, rgba(255, 255, 255, 1) 100%);
        }

        #pac-input {
            margin: 1em;
            text-overflow: ellipsis;
            width: 400px;
            border-radius: 4px;
            box-sizing: border-box;
            -moz-box-sizing: border-box;
            height: 32px;
            outline: none;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.3);
        }

        @media (max-width: 1080px) {
            #pac-input {
                width: 320px;
            }
        }

        @media (max-width: 991px) {
            #pac-input {
                width: 550px;
            }
        }

        @media (max-width: 736px) {
            #pac-input {
                width: 550px;
            }
        }

        @media (max-width: 568px) {
            #pac-input {
                width: 380px;
            }
        }

        @media (max-width: 480px) {
            #pac-input {
                width: 300px;
            }
        }

        @media (max-width: 414px) {
            #pac-input {
                width: 240px;
            }
        }

        @media (max-width: 384px) {
            #pac-input {
                width: 220px;
            }
        }

        @media (max-width: 320px) {
            #pac-input {
                width: 160px;
            }
        }
    </style>
@endpush
@section('content')
    <div class="breadcrumbs">
        <div class="breadcrumbs-overlay"></div>
        <div class="page-title">
            <h2>Certified Installers</h2>
            <p>Feel free to get in touch with our certified installers! We've been set up a network of approved
                installers with a high-performance and responsive service.</p>
        </div>
        <ul class="crumb">
            <li><a href="{{route('home')}}"><i class="fa fa-home"></i></a></li>
            <li><a href="{{route('home')}}"><i class="fa fa-angle-double-right"></i> Home</a></li>
            <li><i class="fa fa-angle-double-right"></i></li>
            <li><a href="{{route('show.installers')}}"><i class="fa fa-tools"></i></a></li>
            <li><a href="#" onclick="goToAnchor()"><i class="fa fa-angle-double-right"></i> Installers</a></li>
        </ul>
    </div>

    <section class="home-intro">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div id="map" class="img-thumbnail" style="width: 100%;height: 600px"></div>
                    <input data-aos="zoom-out" data-aos-delay="100" id="pac-input" class="form-control"
                           type="text" placeholder="Enter your location">
                </div>
                <div class="col-lg-6">
                    <img src="{{asset('images/loading.gif')}}" id="image" class="img-responsive ld ld-breath">
                    <div data-view="list-view" class="download-cards nicescroll" id="ins-contacts"
                         style="height: 600px">
                    </div>
                    <form id="form-contact-installer" action="{{route('submit.contact.installers')}}"
                          method="post" style="display: none">
                        @csrf
                        <input type="hidden" name="ins_email">
                        <div class="modal-header" style="border-bottom: 1px solid #e5e5e5;padding: 0 0 .5em 0;margin-bottom: 1.5em;">
                            <button type="button" class="close" style="font-size: 1.5em;color: #fff">&times;</button>
                            <h3 class="modal-title"></h3>
                        </div>
                        <div class="row form-group">
                            <div class="col-md-6">
                                <label class="form-control-label" for="con_fname">First Name <span class="required">*</span></label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                    <input id="con_fname" type="text" class="form-control" name="con_fname"
                                           placeholder="First name" autofocus required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label class="form-control-label" for="con_lname">Last Name <span class="required">*</span></label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                    <input id="con_lname" type="text" class="form-control" name="con_lname"
                                           placeholder="Last name" required>
                                </div>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-md-12">
                                <label class="form-control-label" for="con_email">Email <span class="required">*</span></label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                    <input id="con_email" type="email" class="form-control" name="con_email"
                                           placeholder="Email" required>
                                </div>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-md-6">
                                <label class="form-control-label" for="con_company">Company <span class="required">*</span></label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-building"></i></span>
                                    <input id="con_company" type="text" class="form-control" name="con_company"
                                           placeholder="Company name" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label class="form-control-label" for="con_phone">Phone <span class="required">*</span></label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                                    <input placeholder="Phone number" type="text" maxlength="13"
                                           class="form-control"
                                           name="con_phone" onkeypress="return numberOnly(event, false)" required>
                                </div>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-md-12">
                                <label class="form-control-label" for="con_country">Country <span class="required">*</span></label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-flag"></i></span>
                                    <select id="con_country" class="form-control" name="con_country" required>
                                        @foreach($countries as $row)
                                            <option value="{{$row->name}}">{{$row->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-md-12">
                                <label class="form-control-label" for="con_subject">Subject <span class="required">*</span></label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-text-width"></i></span>
                                    <input id="con_subject" type="text" class="form-control" name="con_subject"
                                           placeholder="Subject" minlength="3" required>
                                </div>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-md-12">
                                <label class="form-control-label" for="con_message">Message <span class="required">*</span></label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-text-height"></i></span>
                                    <textarea id="con_message" class="form-control" name="con_message"
                                              placeholder="Write something here&hellip;" rows="5"
                                              style="resize: vertical" required></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-dark-red btn-block"><b>SUBMIT</b></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <section class="callto-action bg-color2 padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="call-action">
                        <div class="text">
                            <p>Do you want to be a <strong class="strong-red">certified installer?</strong> To integrate the certified installers network, we will evaluate your technical skills and knowledge.</p>
                        </div>
                        <a href="javascript:void(0)" data-toggle="modal" data-target="#certModal"
                           class="btn btn-dark-red ld ld-breath">APPLY NOW</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="modal fade" id="certModal" tabindex="-1" role="dialog" aria-labelledby="certModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h4 class="modal-title" id="certModalLabel">Certification Request</h4>
                </div>
                <div class="modal-body">
                    <form method="post" action="{{route('submit.certification')}}">
                        @csrf
                        <div class="row form-group">
                            <div class="col-md-6">
                                <label class="form-control-label" for="fname">First Name <span class="required">*</span></label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                    <input id="fname" type="text" class="form-control" name="fname"
                                           placeholder="First name" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label class="form-control-label" for="lname">Last Name <span class="required">*</span></label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                    <input id="lname" type="text" class="form-control" name="lname"
                                           placeholder="Last name" required>
                                </div>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-md-12">
                                <label class="form-control-label" for="email">Email <span class="required">*</span></label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                    <input id="email" type="email" class="form-control" name="email"
                                           placeholder="Email" required>
                                </div>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-md-12">
                                <label class="form-control-label" for="phone">Phone <span class="required">*</span></label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                                    <input placeholder="Phone number" type="text" maxlength="13" class="form-control"
                                           name="phone" onkeypress="return numberOnly(event, false)" required>
                                </div>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-md-4">
                                <label class="form-control-label" for="type">Certification Type <span class="required">*</span></label>
                                <p>
                                    <input type="radio" id="ppf" name="type" value="PPF" required>
                                    <label class="form-control-label" for="ppf">PPF</label>&ensp;
                                    <input type="radio" id="wrap" name="type" value="Wrap">
                                    <label class="form-control-label" for="wrap">Wrap</label>
                                </p>
                            </div>
                            <div class="col-md-8">
                                <label class="form-control-label" for="company">Company <span class="required">*</span></label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-building"></i></span>
                                    <input id="company" type="text" class="form-control" name="company"
                                           placeholder="Company name" required>
                                </div>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-md-12">
                                <label class="form-control-label" for="country">Country</label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-flag"></i></span>
                                    <select id="country" class="form-control" name="country">
                                        <option value="" selected>Rather not say</option>
                                        @foreach($countries as $row)
                                            <option value="{{$row->name}}">{{$row->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-dark-red">Submit</button>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
    <script src="{{asset('js/filter-gridList.js')}}"></script>
    <!-- Google Map -->
    <script
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBIljHbKjgtTrpZhEiHum734tF1tolxI68&libraries=places"></script>
    <script>
        var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 4,
            center: new google.maps.LatLng(-7.250445, 112.768845),
            mapTypeControl: false,
            styles: [
                {
                    "elementType": "geometry",
                    "stylers": [
                        {
                            "color": "#212121"
                        }
                    ]
                },
                {
                    "elementType": "labels.icon",
                    "stylers": [
                        {
                            "visibility": "off"
                        }
                    ]
                },
                {
                    "elementType": "labels.text.fill",
                    "stylers": [
                        {
                            "color": "#757575"
                        }
                    ]
                },
                {
                    "elementType": "labels.text.stroke",
                    "stylers": [
                        {
                            "color": "#212121"
                        }
                    ]
                },
                {
                    "featureType": "administrative",
                    "elementType": "geometry",
                    "stylers": [
                        {
                            "color": "#757575"
                        }
                    ]
                },
                {
                    "featureType": "administrative.country",
                    "elementType": "labels.text.fill",
                    "stylers": [
                        {
                            "color": "#9e9e9e"
                        }
                    ]
                },
                {
                    "featureType": "administrative.land_parcel",
                    "stylers": [
                        {
                            "visibility": "off"
                        }
                    ]
                },
                {
                    "featureType": "administrative.locality",
                    "elementType": "labels.text.fill",
                    "stylers": [
                        {
                            "color": "#bdbdbd"
                        }
                    ]
                },
                {
                    "featureType": "poi",
                    "elementType": "labels.text.fill",
                    "stylers": [
                        {
                            "color": "#757575"
                        }
                    ]
                },
                {
                    "featureType": "poi.park",
                    "elementType": "geometry",
                    "stylers": [
                        {
                            "color": "#181818"
                        }
                    ]
                },
                {
                    "featureType": "poi.park",
                    "elementType": "labels.text.fill",
                    "stylers": [
                        {
                            "color": "#616161"
                        }
                    ]
                },
                {
                    "featureType": "poi.park",
                    "elementType": "labels.text.stroke",
                    "stylers": [
                        {
                            "color": "#1b1b1b"
                        }
                    ]
                },
                {
                    "featureType": "road",
                    "elementType": "geometry.fill",
                    "stylers": [
                        {
                            "color": "#2c2c2c"
                        }
                    ]
                },
                {
                    "featureType": "road",
                    "elementType": "labels.text.fill",
                    "stylers": [
                        {
                            "color": "#8a8a8a"
                        }
                    ]
                },
                {
                    "featureType": "road.arterial",
                    "elementType": "geometry",
                    "stylers": [
                        {
                            "color": "#373737"
                        }
                    ]
                },
                {
                    "featureType": "road.highway",
                    "elementType": "geometry",
                    "stylers": [
                        {
                            "color": "#3c3c3c"
                        }
                    ]
                },
                {
                    "featureType": "road.highway.controlled_access",
                    "elementType": "geometry",
                    "stylers": [
                        {
                            "color": "#4e4e4e"
                        }
                    ]
                },
                {
                    "featureType": "road.local",
                    "elementType": "labels.text.fill",
                    "stylers": [
                        {
                            "color": "#616161"
                        }
                    ]
                },
                {
                    "featureType": "transit",
                    "elementType": "labels.text.fill",
                    "stylers": [
                        {
                            "color": "#757575"
                        }
                    ]
                },
                {
                    "featureType": "water",
                    "elementType": "geometry",
                    "stylers": [
                        {
                            "color": "#000000"
                        }
                    ]
                },
                {
                    "featureType": "water",
                    "elementType": "labels.text.fill",
                    "stylers": [
                        {
                            "color": "#3d3d3d"
                        }
                    ]
                }
            ]
        });

        var infowindow = new google.maps.InfoWindow({maxWidth: 350});

        var marker, i, markers = [];

        var input = document.getElementById('pac-input');
        map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);

        @foreach($installers as $ins)
            marker = new google.maps.Marker({
            position: new google.maps.LatLng('{{$ins->lat}}', '{{$ins->long}}'),
            map: map,
            icon: '{{asset('images/pin.png')}}',
            anchorPoint: new google.maps.Point(0, -29),
        });

        markers.push(marker);

        google.maps.event.addListener(marker, 'click', (function (marker, i) {
            return function () {
                map.panTo(marker.getPosition());
                map.setZoom(12);

                var contentString =
                    '<div id="iw-container">' +
                    '<div class="iw-title">{{$ins->name}}</div>' +
                    '<div class="iw-content">' +
                    '<img class="img-responsive" src="{{$ins->logo != "" ? asset('storage/installers/'. $ins->logo) : asset('images/logo/icon.png')}}" alt="{{$ins->name}} logo">' +
                    '<div class="iw-subTitle">Contacts</div>' +
                    '<p style="text-align: left;padding: 0;">{{$ins->address}}<br>Phone: <a href="tel:{{$ins->phone}}">{{$ins->phone}}</a><br>' +
                    'Email: <a href="mailto:{{$ins->email}}">{{$ins->email}}</a></p>' +
                    '</div><div class="iw-bottom-gradient"></div></div>';

                infowindow.setContent(contentString);
                infowindow.open(map, marker);

                $("#ins-contacts").hide();
                $("#form-contact-installer").show();
                $("#form-contact-installer .modal-title").text('{{$ins->name}}');
                $("#form-contact-installer input:not(:input[name=_token]), #form-contact-installer textarea").val('');
                $("#con_country").val(null).trigger('change');
                $("#form-contact-installer input[name='ins_email']").val('{{$ins->email}}');
                $("#map").css('height', map_height_form);
                $('html,body').animate({scrollTop: $("#ins-contacts").parent().offset().top}, 500);
                setTimeout(function () {
                    $('.use-nicescroll, .nicescroll').getNiceScroll().resize()
                }, 600);
            }
        })(marker, i));

        google.maps.event.addListener(map, 'click', (function (marker, i) {
            return function () {
                input.value = null;
                $("#ins-contacts, #form-contact-installer").hide();
                $("#form-contact-installer .modal-title").text('');
                $("#form-contact-installer input:not(:input[name=_token]), #form-contact-installer textarea").val('');
                $("#con_country").val(null).trigger('change');
                loadInstallers();
                infowindow.close();

                map.panTo(new google.maps.LatLng(-7.250445, 112.768845));
                map.setZoom(4);
            }
        })(marker, i));
        @endforeach

        google.maps.event.addListener(infowindow, 'domready', function () {
            var iwOuter = $('.gm-style-iw');
            var iwBackground = iwOuter.prev();

            iwBackground.children(':nth-child(2)').css({'display': 'none'});
            iwBackground.children(':nth-child(4)').css({'display': 'none'});

            iwOuter.css({left: '5px', top: '1px'});
            iwOuter.parent().parent().css({left: '0'});

            iwBackground.children(':nth-child(1)').attr('style', function (i, s) {
                return s + 'left: -39px !important;'
            });

            iwBackground.children(':nth-child(3)').attr('style', function (i, s) {
                return s + 'left: -39px !important;'
            });

            iwBackground.children(':nth-child(3)').find('div').children().css({
                'box-shadow': 'rgba(72, 181, 233, 0.6) 0 1px 6px',
                'z-index': '1'
            });

            var iwCloseBtn = iwOuter.next();
            iwCloseBtn.css({
                background: '#fff',
                opacity: '1',
                width: '30px',
                height: '30px',
                right: '15px',
                top: '6px',
                border: '6px solid #48b5e9',
                'border-radius': '50%',
                'box-shadow': '0 0 5px #3990B9'
            });

            if ($('.iw-content').height() < 140) {
                $('.iw-bottom-gradient').css({display: 'none'});
            }

            iwCloseBtn.mouseout(function () {
                $(this).css({opacity: '1'});
            });
        });

        // autoComplete
        var autocomplete = new google.maps.places.Autocomplete(input);

        autocomplete.bindTo('bounds', map);

        autocomplete.setFields(['address_components', 'geometry', 'icon', 'name']);

        autocomplete.addListener('place_changed', function () {
            $("#ins-contacts, #form-contact-installer").hide();
            $("#form-contact-installer .modal-title").text('');
            $("#form-contact-installer input:not(:input[name=_token]), #form-contact-installer textarea").val('');
            $("#con_country").val(null).trigger('change');
            infowindow.close();

            var place = autocomplete.getPlace(), city = '';

            for (var i = 0; i < place.address_components.length; i++) {
                for (var j = 0; j < place.address_components[i].types.length; j++) {
                    if (place.address_components[i].types[j] == "administrative_area_level_2") {
                        city = place.address_components[i].long_name;
                    }
                }
            }

            loadInstallers(city);

            if (!place.geometry) {
                window.alert("No details available for input: '" + place.name + "'");
                return;
            }

            if (place.geometry.viewport) {
                map.fitBounds(place.geometry.viewport);
            } else {
                map.setCenter(place.geometry.location);
                map.setZoom(17);
            }
        });

        var map_height = '', map_height_form = '';
        $(function () {
            window.mobilecheck() ? $(".w3-agileits-about-grids").removeClass('vertical-center') : '';
            map_height = window.mobilecheck() ? '475px' : '600px';
            map_height_form = window.mobilecheck() ? '475px' : '712px';

            $(".nicescroll").niceScroll({
                cursorcolor: "rgb(227,27,35)",
                cursorwidth: "8px",
                background: "rgba(222, 222, 222, .75)",
                cursorborder: 'none',
                // cursorborderradius:0,
                autohidemode: 'leave',
            });

            $("#country, #con_country").select2({
                placeholder: "-- Choose --",
                allowClear: true,
                width: '100%'
            });

            loadInstallers();
        });

        $("#pac-input").on('focus', function () {
            $("#map").css('border-color', '#e31b23');
        });

        $("#pac-input").on('blur', function () {
            $("#map").css('border-color', '#fff');
        });

        var $img = $(".breadcrumbs"),
            images = ['installer1.jpg', 'installer2.jpg', 'installer3.jpg', 'installer4.jpg', 'installer5.jpg'],
            index = 0, maxImages = images.length - 1, timer = setInterval(function () {
                var currentImage = images[index];
                index = (index == maxImages) ? 0 : ++index;
                $img.fadeOut("slow", function () {
                    $img.css("background-image", 'url({{asset('images/slider')}}/' + currentImage + ')');
                    $img.fadeIn("slow");
                });
            }, 5000);

        function loadInstallers(city) {
            clearTimeout(this.delay);
            this.delay = setTimeout(function () {
                $.ajax({
                    url: '{{route('get.city.installers', ['city' => ''])}}/' + city,
                    type: 'GET',
                    beforeSend: function () {
                        $('#image').show();
                        $("#ins-contacts").hide();
                    },
                    complete: function () {
                        $('#image').hide();
                        $("#ins-contacts").show();
                    },
                    success: function (data) {
                        var content = '';
                        $.each(data, function (i, val) {
                            var logo = val.logo != null ? '{{asset('storage/installers')}}/' + val.logo : '{{asset('images/logo/icon.png')}}',
                                link = val.link != null ? val.link : 'javascript:void(0)';

                            content +=
                                '<article class="download-card">' +
                                '<a onclick="contactInstaller(' + i + ',' + val.lat + ', ' + val.long + ', \'' + val.name + '\', \'' + val.email + '\')" href="javascript:void(0)">' +
                                '<div class="download-card__icon-box"><img src="' + logo + '" alt="' + val.name + ' logo"></div></a>' +
                                '<div class="download-card__content-box">' +
                                '<h3 class="download-card__content-box__title"><a href="' + link + '" ' +
                                'target="_blank" style="font-weight: bold">' + val.name + '</a></h3>' +
                                '<table style="font-size: 16px"><tbody>' +
                                '<tr><td><i class="fa fa-map-marked-alt"></i></td><td>&nbsp;</td><td>' + val.address + '</td></tr>' +
                                '<tr><td><i class="fa fa-phone"></i></td><td>&nbsp;</td><td><a href="tel:' + val.phone + '">' + val.phone + '</a></td></tr>' +
                                '<tr><td><i class="fa fa-envelope"></i></td><td>&nbsp;</td><td><a href="mailto:' + val.email + '">' + val.email + '</a></td></tr>' +
                                '<tr><td><i class="fa fa-external-link-alt"></i></td><td>&nbsp;</td><td><a href="' + link + '" target="_blank">Learn More</a></td></tr>' +
                                '</tbody></table></div>' +
                                '<div class="card-read-more">' +
                                '<a onclick="contactInstaller(' + i + ',' + val.lat + ', ' + val.long + ', \'' + val.name + '\', \'' + val.email + '\')" href="javascript:void(0)" ' +
                                'class="btn btn-block">Contact</a></div></article>'
                        });

                        if (content != '') {
                            $("#ins-contacts").empty().append(content);
                        } else {
                            swal('There seems to be none of the certified installer was found', '', 'warning');
                            $("#ins-contacts").empty().append('<em>There seems to be none of the certified installer was found&hellip;</em>');
                        }
                    },
                    error: function () {
                        swal('Oops..', 'Something went wrong! Please refresh this page.', 'error');
                    }
                });
            }.bind(this), 800);

            return false;
        }

        function contactInstaller(i, lat, long, name, email) {
            google.maps.event.trigger(markers[i], 'click');
            map.panTo(new google.maps.LatLng(lat, long));
            map.setZoom(17);

            $("#ins-contacts").hide();
            $("#form-contact-installer").show();
            $("#form-contact-installer .modal-title").text(name);
            $("#form-contact-installer input:not(:input[name=_token]), #form-contact-installer textarea").val('');
            $("#con_country").val(null).trigger('change');
            $("#form-contact-installer input[name='ins_email']").val(email);

            $("#map").css('height', map_height_form);
            $('html,body').animate({scrollTop: $("#ins-contacts").parent().offset().top}, 500);
            setTimeout(function () {
                $('.use-nicescroll, .nicescroll').getNiceScroll().resize()
            }, 600);
        }

        $("#form-contact-installer .close").on('click', function () {
            google.maps.event.trigger(map, 'click');

            $("#ins-contacts").show();
            $("#form-contact-installer").hide();
            $("#form-contact-installer .modal-title").text('');
            $("#form-contact-installer input:not(:input[name=_token]), #form-contact-installer textarea").val('');
            $("#con_country").val(null).trigger('change');

            $("#map").css('height', map_height);
            $('html,body').animate({scrollTop: $("#ins-contacts").parent().offset().top}, 500);
            setTimeout(function () {
                $('.use-nicescroll, .nicescroll').getNiceScroll().resize()
            }, 600);
        });

        function goToAnchor() {
            $('html,body').animate({scrollTop: $("#map").offset().top}, 500);
        }

        @if(session('certification'))
        swal('Successfully submitted!', '{{session('certification')}}', 'success');
        @elseif(session('contact'))
        swal('Successfully sent a message!', '{{session('contact')}}', 'success');
        @endif
    </script>
@endpush
