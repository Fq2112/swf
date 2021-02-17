@extends('layouts.mst')
@section('title', 'Warranty | '.env('APP_TITLE'))
@push('styles')
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <style>
        .breadcrumbs {
            background-image: url({{asset('images/slider/warranty4.jpg')}});
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

        .hr-text {
            line-height: 1em;
            position: relative;
            outline: 0;
            border: 0;
            color: black;
            text-align: center;
            height: 1.5em;
            opacity: .5;
        }

        .hr-text:before {
            content: '';
            background: -webkit-gradient(linear, left top, right top, from(transparent), color-stop(#777), to(transparent));
            background: linear-gradient(to right, transparent, #777, transparent);
            position: absolute;
            left: 0;
            top: 50%;
            width: 100%;
            height: 1px;
        }

        .hr-text:after {
            content: attr(data-content);
            position: relative;
            display: inline-block;
            padding: 0 .5em;
            line-height: 1.5em;
            color: #ccc;
            background-color: #0e0e0e;
        }

        .select2-container {
            border-radius: 0;
            border: 1px solid #777;
        }

        .select2-selection {
            background-color: #0e0e0e !important;
            color: #fff;
            border-radius: 1rem !important;
            border: none !important;
        }

        .select2-container.select2-container--focus {
            border-color: #E31B23 !important;
            box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 8px rgba(227, 27, 35, 0.6);
        }

        .select2-container .select2-selection--multiple .select2-selection__choice {
            background-color: #e31b23;
            border: none;
        }

        .select2-container .select2-selection--multiple .select2-selection__choice__remove {
            color: #fff;
        }
    </style>
@endpush
@section('content')
    <div class="breadcrumbs">
        <div class="breadcrumbs-overlay"></div>
        <div class="page-title">
            <h2>Warranty Request</h2>
        </div>
    </div>

    <div class="page-content page-sidebar">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div data-aos="fade-down" class="content-area">
                        <img width="70%" src="{{asset('images/warranty.png')}}" class="img-responsive" alt="Warranty">
                        <div class="custom-overlay">
                            <div class="custom-text">
                                <a href="{{asset('storage/datasheet/warranty/pds-supreme-protection-film-spf-xi.pdf')}}"
                                   class="btn btn-dark-red"><b><i class="fa fa-file-pdf"></i>&ensp;DATASHEET</b></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-9">
                    <h4 data-aos="fade-down" style="color: #eee">Avery Dennison® Supreme Wrap&trade; Film Limited
                        Warranty</h4>
                    <p data-aos="fade-down" align="justify" style="color: #bbb;margin-bottom: 20px">Avery Dennison
                        Supreme Wrap Film has a limited warranty from date of purchase of your automobile. The film is
                        warranted to be free from defects in manufacturing and workmanship and against peeling,
                        yellowing, bubbling, or cracking of the film from UV exposure for 3 years as the original
                        purchaser owns and operates the automobile on which the Product is installed.</p>
                    <blockquote data-aos="fade-down">Feel free to get a warranty for the Avery Dennison® Supreme Wrap&trade;
                        Film installed on your automobile!
                    </blockquote>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <form id="form-warranty" action="{{route('submit.warranty')}}" method="post">
                        @csrf
                        <hr data-aos="fade-down" class="hr-text" data-content="CUSTOMER">
                        <div data-aos="fade-down" class="row form-group">
                            <div class="col-md-6">
                                <label for="fname">First Name <span class="required">*</span></label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                    <input id="fname" type="text" class="form-control" name="fname"
                                           placeholder="First name" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="lname">Last Name <span class="required">*</span></label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                    <input id="lname" type="text" class="form-control" name="lname"
                                           placeholder="Last name" required>
                                </div>
                            </div>
                        </div>
                        <div data-aos="fade-down" class="row form-group">
                            <div class="col-md-6">
                                <label for="email">Email <span class="required">*</span></label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                    <input id="email" type="email" class="form-control" name="email"
                                           placeholder="Email" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="phone">Phone <span class="required">*</span></label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                                    <input id="phone" placeholder="Phone number" type="text" maxlength="13"
                                           class="form-control" name="phone" required
                                           onkeypress="return numberOnly(event, false)">
                                </div>
                            </div>
                        </div>
                        <div data-aos="fade-down" class="row form-group">
                            <div class="col-md-12">
                                <label for="address">Address <span class="required">*</span></label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-map-marked-alt"></i></span>
                                    <textarea id="address" class="form-control" name="address" rows="3" required
                                              placeholder="Address" style="resize:vertical;"></textarea>
                                </div>
                            </div>
                        </div>

                        <hr data-aos="fade-down" class="hr-text" data-content="AUTHORIZED INSTALLER">
                        <div data-aos="fade-down" class="row form-group">
                            <div class="col-md-6">
                                <label for="installer_name">Installer Name <span class="required">*</span></label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-tools"></i></span>
                                    <input id="installer_name" type="text" class="form-control" name="installer_name"
                                           placeholder="Installer name" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="installed_by">Installed By <span class="required">*</span></label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-id-card"></i></span>
                                    <input id="installed_by" type="text" class="form-control" placeholder="Installed by"
                                           name="installed_by" required>
                                </div>
                            </div>
                        </div>
                        <div data-aos="fade-down" class="row form-group">
                            <div class="col-md-6">
                                <label for="installer_email">Installer Email <span class="required">*</span></label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                    <input id="installer_email" type="email" class="form-control" name="installer_email"
                                           placeholder="Installer email" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="installer_phone">Installer Phone <span class="required">*</span></label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                                    <input id="installer_phone" placeholder="Installer phone number" type="text"
                                           maxlength="13" class="form-control" name="installer_phone" required
                                           onkeypress="return numberOnly(event, false)">
                                </div>
                            </div>
                        </div>
                        <div data-aos="fade-down" class="row form-group">
                            <div class="col-md-6">
                                <label for="installation_date">Date of Installation <span
                                        class="required">*</span></label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-calendar-day"></i></span>
                                    <input id="installation_date" type="text" class="form-control datepicker" required
                                           name="installation_date" placeholder="yyyy-mm-dd" autocomplete="off">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="installation_location">Location of Installation <span
                                        class="required">*</span></label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-map-marker-alt"></i></span>
                                    <input id="installation_location" type="text" class="form-control"
                                           name="installation_location" placeholder="Installation location"
                                           autocomplete="off" required>
                                </div>
                            </div>
                        </div>

                        <hr data-aos="fade-down" class="hr-text" data-content="AUTOMOBILE">
                        <div data-aos="fade-down" class="row form-group">
                            <div class="col-md-6">
                                <label for="automobile_make">Automobile Make <span class="required">*</span></label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-registered"></i></span>
                                    <input id="automobile_make" type="text" class="form-control" name="automobile_make"
                                           placeholder="Automobile make" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="automobile_model">Automobile Model <span class="required">*</span></label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-trademark"></i></span>
                                    <input id="automobile_model" type="text" class="form-control"
                                           name="automobile_model" placeholder="Automobile model" required>
                                </div>
                            </div>
                        </div>
                        <div data-aos="fade-down" class="row form-group">
                            <div class="col-md-6">
                                <label for="automobile_year">Automobile Year <span class="required">*</span></label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-calendar-alt"></i></span>
                                    <input id="automobile_year" type="text" class="form-control yearpicker"
                                           name="automobile_year" placeholder="yyyy" autocomplete="off" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="automobile_color">Automobile Color <span class="required">*</span></label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-palette"></i></span>
                                    <input id="automobile_color" type="text" class="form-control"
                                           name="automobile_color" placeholder="Automobile color" required>
                                </div>
                            </div>
                        </div>
                        <div data-aos="fade-down" class="row form-group">
                            <div class="col-md-3">
                                <label for="automobile_vin">V.I.N. / Immatriculation <span
                                        class="required">*</span></label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-hashtag"></i></span>
                                    <input id="automobile_vin" type="text" class="form-control"
                                           name="automobile_vin" placeholder="e.g.: 1HGCG1658WA067709" required>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <label for="roll_lot_number">Roll Lot Number <span class="required">*</span></label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-hashtag"></i></span>
                                    <input id="roll_lot_number" type="text" class="form-control"
                                           name="roll_lot_number" placeholder="Roll lot number" required>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <label for="roll_fwo_number">Roll FWO Number <span class="required">*</span></label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-hashtag"></i></span>
                                    <input id="roll_fwo_number" type="text" class="form-control"
                                           name="roll_fwo_number" placeholder="Roll FWO number" required>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <label for="template_pattern_number">Template Pattern Number <span
                                        class="required">*</span></label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-hashtag"></i></span>
                                    <input id="template_pattern_number" type="text" class="form-control"
                                           name="template_pattern_number" placeholder="Template pattern number"
                                           required>
                                </div>
                            </div>
                        </div>
                        <div data-aos="fade-down" class="row form-group">
                            <div class="col-md-12">
                                <label for="areas_protected">Area(s) Protected <span class="required">*</span></label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-car"></i></span>
                                    <select id="areas_protected" class="form-control" multiple required
                                            name="areas_protected[]">
                                        <option value="A-Pillar">A-Pillar</option>
                                        <option value="Bumper">Bumper</option>
                                        <option value="Fender">Fender</option>
                                        <option value="Grille">Grille</option>
                                        <option value="Hood-Full">Hood-Full</option>
                                        <option value="Hood-Partial">Hood-Partial</option>
                                        <option value="Mirrors">Mirrors</option>
                                        <option value="Roof">Roof</option>
                                    </select>
                                    <span class="input-group-addon"><i class="fa fa-shield-alt"></i></span>
                                </div>
                            </div>
                        </div>

                        <hr data-aos="fade-down" class="hr-text" data-content="ADDITIONAL">
                        <div data-aos="fade-down" class="row form-group">
                            <div class="col-md-12">
                                <label for="comments">Comments</label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-comments"></i></span>
                                    <textarea id="comments" class="form-control" name="comments" rows="5"
                                              placeholder="Write something here&hellip;"
                                              style="resize:vertical;"></textarea>
                                </div>
                            </div>
                        </div>

                        <div class="row form-group" style="margin-bottom: 5em">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-dark-red btn-block"
                                        style="padding-top: 8px;padding-bottom: 8px"><b>SUBMIT</b></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBIljHbKjgtTrpZhEiHum734tF1tolxI68&libraries=places"></script>
    <script>
        $(function () {
            $('.datepicker').datepicker();
            $('.yearpicker').datepicker({
                dateFormat: "yy",
                yearRange: "c-100:c",
                changeMonth: false,
                changeYear: true,
                showButtonPanel: false,
                closeText: 'Select',
                currentText: 'This year',
                onChangeMonthYear : function (dateText, inst) {
                    var year = $("#ui-datepicker-div .ui-datepicker-year :selected").val();
                    $(this).val($.datepicker.formatDate("yy", new Date(year, 0, 1)));
                    $(this).datepicker('hide');
                },
                beforeShow: function (input, inst) {
                    if ($(this).val() != '') {
                        var tmpyear = $(this).val();
                        $(this).datepicker('option', 'defaultDate', new Date(tmpyear, 0, 1));
                    }
                }
            }).focus(function () {
                $(".ui-datepicker-month").hide();
                $(".ui-datepicker-calendar").hide();
                $(".ui-datepicker-current").hide();
                $(".ui-datepicker-prev").hide();
                $(".ui-datepicker-next").hide();
                $("#ui-datepicker-div").position({
                    my: "left top",
                    at: "left bottom",
                    of: $(this)
                });
            });

            $("#areas_protected").select2({
                placeholder: "-- Select Areas --",
                allowClear: true,
                width: '100%',
                closeOnSelect: false,
            });
        });

        var $img = $(".breadcrumbs"),
            images = ['warranty1.jpg', 'warranty2.jpg', 'warranty3.jpg', 'warranty4.jpg'],
            index = 0, maxImages = images.length - 1, timer = setInterval(function () {
                var currentImage = images[index];
                index = (index == maxImages) ? 0 : ++index;
                $img.fadeOut("slow", function () {
                    $img.css("background-image", 'url({{asset('images/slider')}}/' + currentImage + ')');
                    $img.fadeIn("slow");
                });
            }, 5000);

        function initialize() {
            var input = document.getElementById('installation_location');
            new google.maps.places.Autocomplete(input);
        }

        google.maps.event.addDomListener(window, 'load', initialize);

        $(document).on('mouseover', '.use-nicescroll', function () {
            $(this).getNiceScroll().resize();
        });

        @if(session('warranty'))
        swal('Successfully submitted!', '{{ session('warranty') }}', 'success');
        @endif
    </script>
@endpush
