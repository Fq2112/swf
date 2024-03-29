@extends('layouts.mst')
@section('title', 'Contact | '.env('APP_TITLE'))
@push('styles')
    <style>
        .breadcrumbs {
            background-image: url({{asset('images/slider/contact4.jpg')}});
        }

        #btn_contact:disabled {
            opacity: .7;
            cursor: no-drop;
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
    </style>
    <script src='https://www.google.com/recaptcha/api.js?onload=recaptchaCallback&render=explicit' async defer></script>
@endpush
@section('content')
    <div class="breadcrumbs">
        <div class="breadcrumbs-overlay"></div>
        <div class="page-title">
            <h2>Contact Us</h2>
            <p>Feel free to get in touch with us!</p>
        </div>
    </div>

    <section class="no-padding">
        <div class="row">
            <div class="col-lg-6">
                <div data-aos="fade-down" id="map" style="width: 100%;height: 600px"></div>
            </div>
            <div data-aos="fade-down" class="col-lg-6" style="padding: 3em 5em 0px 3em;">
                <form id="form-contact" action="{{route('submit.contact')}}" method="post">
                    @csrf
                    <div class="row form-group">
                        <div class="col-md-12">
                            <label class="form-control-label" for="name">Full Name <span
                                    class="required">*</span></label>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-id-card"></i></span>
                                <input id="name" type="text" class="form-control" name="name" placeholder="Full name"
                                       required>
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
                            <label class="form-control-label" for="subject">Subject <span
                                    class="required">*</span></label>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-text-width"></i></span>
                                <input id="subject" type="text" class="form-control" name="subject"
                                       placeholder="Subject" minlength="3" required>
                            </div>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-12">
                            <label class="form-control-label" for="message">Message <span
                                    class="required">*</span></label>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-text-height"></i></span>
                                <textarea id="message" class="form-control" name="message"
                                          placeholder="Write something here&hellip;" rows="5"
                                          style="resize: vertical" required></textarea>
                            </div>
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col-md-12">
                            <div id="recaptcha-contact"></div>
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col-md-12">
                            <button id="btn_contact" type="submit" class="btn btn-dark-red btn-block"
                                    style="padding-top: 8px;padding-bottom: 8px" disabled><b>SUBMIT</b></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection
@push('scripts')
    <script
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBIljHbKjgtTrpZhEiHum734tF1tolxI68&libraries=places"></script>
    <script>
        var google;

        function init() {
            var myLatlng = new google.maps.LatLng(-7.250445, 112.768845);

            var mapOptions = {
                zoom: 15,
                center: myLatlng,
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
            };

            var mapElement = document.getElementById('map');

            var map = new google.maps.Map(mapElement, mapOptions);

            var contentString =
                '<div id="iw-container">' +
                '<div class="iw-title">Premier Autostyling</div>' +
                '<div class="iw-content">' +
                '<img class="img-fluid" src="{{asset('images/logo/icon.png')}}">' +
                '<div class="iw-subTitle">Contacts</div>' +
                '<p>Raya Kenjeran 469, Surabaya, East Java, Indonesia — 60134.<br>' +
                '<br>Phone: <a href="tel:+62817597777">+62 817 597 777</a>' +
                '<br>E-mail: <a href="mailto:{{env('MAIL_USERNAME')}}">{{env('MAIL_USERNAME')}}</a>' +
                '</p></div><div class="iw-bottom-gradient"></div></div>';

            var infowindow = new google.maps.InfoWindow({
                content: contentString,
                maxWidth: 350
            });

            var marker = new google.maps.Marker({
                position: myLatlng,
                map: map,
                icon: '{{asset('images/pin.png')}}',
                anchorPoint: new google.maps.Point(0, -29)
            });

            infowindow.open(map, marker);

            marker.addListener('click', function () {
                infowindow.open(map, marker);
            });

            google.maps.event.addListener(map, 'click', function () {
                infowindow.close();
            });

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
        }

        google.maps.event.addDomListener(window, 'load', init);

        var $img = $(".breadcrumbs"),
            images = ['contact1.jpg', 'contact2.jpg', 'contact3.jpg', 'contact4.jpg'],
            index = 0, maxImages = images.length - 1, timer = setInterval(function () {
                var currentImage = images[index];
                index = (index == maxImages) ? 0 : ++index;
                $img.fadeOut("slow", function () {
                    $img.css("background-image", 'url({{asset('images/slider')}}/' + currentImage + ')');
                    $img.fadeIn("slow");
                });
            }, 5000);

        function goToAnchor() {
            $('html,body').animate({scrollTop: $("#map").offset().top}, 500);
        }

        var recaptcha_contact, recaptchaCallback = function () {
            recaptcha_contact = grecaptcha.render(document.getElementById('recaptcha-contact'), {
                'sitekey': '{{env('reCAPTCHA_v2_SITEKEY')}}',
                'callback': 'enable_btnContact',
                'expired-callback': 'disabled_btnContact'
            });
        };

        function enable_btnContact() {
            $("#btn_contact").removeAttr('disabled');
        }

        function disabled_btnContact() {
            $("#btn_contact").attr('disabled', 'disabled');
        }

        $("#form-contact").on("submit", function (e) {
            if (grecaptcha.getResponse(recaptcha_contact).length === 0) {
                e.preventDefault();
                swal('ATTENTION!', 'Please confirm us that you\'re not a robot by clicking in ' +
                    'the reCAPTCHA dialog-box.', 'warning');
            }
        });

        @if(session('contact'))
        swal('Successfully sent a message!', '{{ session('contact') }}', 'success');
        @endif
    </script>
@endpush
