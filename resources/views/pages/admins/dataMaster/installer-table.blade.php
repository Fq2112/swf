@extends('layouts.mst_admin')
@section('title', 'PPF Admins: Installers Table | '.env('APP_TITLE'))
@push('styles')
    <link rel="stylesheet" href="{{asset('admins/modules/datatables/datatables.min.css')}}">
    <link rel="stylesheet"
          href="{{asset('admins/modules/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset('admins/modules/datatables/Select-1.2.4/css/select.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset('admins/modules/datatables/Buttons-1.5.6/css/buttons.dataTables.min.css')}}">
    <style>
        .bootstrap-select .dropdown-menu {
            min-width: 100% !important;
        }

        .form-control-feedback {
            position: absolute;
            top: 3em;
            right: 2em;
        }

        .modal-header {
            padding: 1rem !important;
            border-bottom: 1px solid #e9ecef !important;
        }

        .modal-footer {
            padding: 1rem !important;
            border-top: 1px solid #e9ecef !important;
        }

        #map {
            height: 384px;
        }

        #infowindow-content .title {
            font-weight: bold;
        }

        #infowindow-content {
            display: none;
        }

        #map #infowindow-content {
            display: inline;
        }

        .pac-container { z-index: 10000 !important; }
    </style>
@endpush
@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Installers Table</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="{{route('admin.dashboard')}}">Dashboard</a></div>
                <div class="breadcrumb-item">Data Master</div>
                <div class="breadcrumb-item">Installers</div>
            </div>
        </div>

        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-header-form">
                                <button onclick="createInstaller()" class="btn btn-primary text-uppercase">
                                    <strong><i class="fas fa-plus mr-2"></i>Create</strong>
                                </button>
                            </div>
                        </div>

                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped" id="dt-buttons">
                                    <thead>
                                    <tr>
                                        <th class="text-center">
                                            <div class="custom-checkbox custom-control">
                                                <input type="checkbox" class="custom-control-input" id="cb-all">
                                                <label for="cb-all" class="custom-control-label">#</label>
                                            </div>
                                        </th>
                                        <th class="text-center">ID</th>
                                        <th class="text-center">Logo</th>
                                        <th>Details</th>
                                        <th class="text-center">Created at</th>
                                        <th class="text-center">Last Update</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @php $no = 1; @endphp
                                    @foreach($installers as $row)
                                        <tr>
                                            <td style="vertical-align: middle" align="center">
                                                <div class="custom-checkbox custom-control">
                                                    <input type="checkbox" id="cb-{{$row->id}}"
                                                           class="custom-control-input dt-checkboxes">
                                                    <label for="cb-{{$row->id}}"
                                                           class="custom-control-label">{{$no++}}</label>
                                                </div>
                                            </td>
                                            <td style="vertical-align: middle" align="center">{{$row->id}}</td>
                                            <td style="vertical-align: middle;" align="center">
                                                <img class="img-fluid" width="100" alt="Logo" src="{{$row->logo == "" ?
                                                asset('images/logo/icon.png') : asset('storage/installers/'.$row->logo)}}">
                                            </td>
                                            <td style="vertical-align: middle">
                                                <table>
                                                    <tr>
                                                        <th>Name</th>
                                                        <td>&nbsp;:&nbsp;</td>
                                                        <td>{{$row->name}}</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Email</th>
                                                        <td>&nbsp;:&nbsp;</td>
                                                        <td><a href="mailto:{{$row->email}}">{{$row->email}}</a></td>
                                                    </tr>
                                                    <tr>
                                                        <th>Phone</th>
                                                        <td>&nbsp;:&nbsp;</td>
                                                        <td><a href="tel:{{$row->phone}}">{{$row->phone}}</a></td>
                                                    </tr>
                                                    <tr>
                                                        <th>Link</th>
                                                        <td>&nbsp;:&nbsp;</td>
                                                        <td><a href="{{$row->link}}" target="_blank">{{$row->link}}</a></td>
                                                    </tr>
                                                    <tr>
                                                        <th>Address</th>
                                                        <td>&nbsp;:&nbsp;</td>
                                                        <td>{{$row->address}}</td>
                                                    </tr>
                                                </table>
                                            </td>
                                            <td style="vertical-align: middle" align="center">
                                                {{\Carbon\Carbon::parse($row->created_at)->format('j F Y')}}</td>
                                            <td style="vertical-align: middle" align="center">
                                                {{$row->updated_at->diffForHumans()}}</td>
                                            <td style="vertical-align: middle" align="center">
                                                <button data-placement="left" data-toggle="tooltip" title="Edit"
                                                        type="button" class="btn btn-warning"
                                                        onclick="editInstaller('{{$row->id}}','{{$row->logo}}',
                                                            '{{$row->name}}','{{$row->phone}}','{{$row->address}}',
                                                            '{{$row->email}}','{{$row->city}}','{{$row->link}}',
                                                            '{{$row->lat}}','{{$row->long}}')">
                                                    <i class="fa fa-edit"></i></button>
                                                <hr class="mt-1 mb-1">
                                                <a href="{{route('delete.installers',['id'=>encrypt($row->id)])}}"
                                                   class="btn btn-danger delete-data" data-toggle="tooltip"
                                                   title="Delete" data-placement="left"><i class="fas fa-trash-alt"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                                <form method="post" id="form-mass">
                                    {{csrf_field()}}
                                    <input type="hidden" name="installer_ids">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="modal fade" id="installerModal" tabindex="-1" role="dialog" aria-labelledby="installerModalLabel"
         aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Create Form</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form id="form-installer" method="post" action="{{route('create.installers')}}"
                      enctype="multipart/form-data">
                    {{csrf_field()}}
                    <input type="hidden" name="_method">
                    <input type="hidden" name="id">
                    <input type="hidden" name="city">
                    <div class="modal-body">
                        <div class="row form-group">
                            <div class="col">
                                <label for="logo">Logo <sub>(optional)</sub></label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fa fa-images"></i></span>
                                    </div>
                                    <div class="custom-file">
                                        <input type="file" name="logo" class="custom-file-input" id="logo" accept="image/*">
                                        <label class="custom-file-label" id="txt_logo">Choose File</label>
                                    </div>
                                </div>
                                <div class="form-text text-muted">
                                    Allowed extension: jpg, jpeg, gif, png. Allowed size: < 5 MB
                                </div>
                            </div>
                            <div class="col">
                                <label for="name">Name</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fa fa-id-card"></i></span>
                                    </div>
                                    <input id="name" type="text" class="form-control" maxlength="191" name="name"
                                           placeholder="Installer name" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div id="map"></div>
                                <div id="infowindow-content">
                                    <img src="#" width="32" height="32" id="place-icon">
                                    <span id="place-name" class="title"></span><br>
                                    <span id="place-address"></span>
                                </div>
                            </div>
                            <div class="col">
                                <div class="row form-group">
                                    <div class="col">
                                        <label for="email">Email</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fa fa-envelope"></i></span>
                                            </div>
                                            <input id="email" type="email" class="form-control" name="email"
                                                   placeholder="Email" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col">
                                        <label for="phone">Phone</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fa fa-phone"></i></span>
                                            </div>
                                            <input id="phone" type="text" class="form-control" name="phone" maxlength="13"
                                                   placeholder="Phone number" onkeypress="return numberOnly(event, false)" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col">
                                        <label for="link">Link <sub>(optional)</sub></label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fa fa-external-link-alt"></i></span>
                                            </div>
                                            <input id="link" type="text" class="form-control" maxlength="191" name="link"
                                                   placeholder="Link">
                                        </div>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col">
                                        <label for="address_map">Address</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fa fa-map-marked-alt"></i></span>
                                            </div>
                                            <input id="address_map" type="text" class="form-control" maxlength="191"
                                                   name="address" placeholder="Address" autocomplete="off" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
@push("scripts")
    <script src="{{asset('admins/modules/datatables/datatables.min.js')}}"></script>
    <script src="{{asset('admins/modules/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{asset('admins/modules/datatables/Select-1.2.4/js/dataTables.select.min.js')}}"></script>
    <script src="{{asset('admins/modules/datatables/Buttons-1.5.6/js/buttons.dataTables.min.js')}}"></script>
    <script src="{{asset('admins/modules/jquery-ui/jquery-ui.min.js')}}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBIljHbKjgtTrpZhEiHum734tF1tolxI68&libraries=places"></script>
    <script>
        var google;

        function init(lat, long, logo, name, address) {
            var mapOptions = {
                zoom: 15,
                center: new google.maps.LatLng(lat, long),
                mapTypeControl: false,
                styles: [
                    {
                        "featureType": "administrative.land_parcel",
                        "elementType": "all",
                        "stylers": [{"visibility": "on"}]
                    }, {
                        "featureType": "landscape.man_made",
                        "elementType": "all",
                        "stylers": [{"visibility": "on"}]
                    }, {"featureType": "poi", "elementType": "labels", "stylers": [{"visibility": "on"}]}, {
                        "featureType": "road",
                        "elementType": "labels",
                        "stylers": [{"visibility": "simplified"}, {"lightness": 20}]
                    }, {
                        "featureType": "road.highway",
                        "elementType": "geometry",
                        "stylers": [{"hue": "#f49935"}]
                    }, {
                        "featureType": "road.highway",
                        "elementType": "labels",
                        "stylers": [{"visibility": "simplified"}]
                    }, {
                        "featureType": "road.arterial",
                        "elementType": "geometry",
                        "stylers": [{"hue": "#fad959"}]
                    }, {
                        "featureType": "road.arterial",
                        "elementType": "labels",
                        "stylers": [{"visibility": "on"}]
                    }, {
                        "featureType": "road.local",
                        "elementType": "geometry",
                        "stylers": [{"visibility": "simplified"}]
                    }, {
                        "featureType": "road.local",
                        "elementType": "labels",
                        "stylers": [{"visibility": "simplified"}]
                    }, {
                        "featureType": "transit",
                        "elementType": "all",
                        "stylers": [{"visibility": "on"}]
                    }, {
                        "featureType": "water",
                        "elementType": "all",
                        "stylers": [{"hue": "#a1cdfc"}, {"saturation": 30}, {"lightness": 49}]
                    }]
            };

            var mapElement = document.getElementById('map');

            var map = new google.maps.Map(mapElement, mapOptions);

            var marker = new google.maps.Marker({
                map: map,
                icon: '{{asset('images/pin.png')}}',
                position: new google.maps.LatLng(lat, long),
                anchorPoint: new google.maps.Point(0, -29)
            });

            var infowindow = new google.maps.InfoWindow();
            var infowindowContent = document.getElementById('infowindow-content');
            $("#place-icon").attr("src", logo == "" ? '{{asset('images/logo/icon.png')}}' : '{{asset('storage/installers')}}/' + logo);
            $("#place-name").text(name);
            $("#place-address").html(address);
            infowindow.setContent(infowindowContent);

            marker.addListener('click', function () {
                infowindow.open(map, marker);
            });

            google.maps.event.addListener(map, 'click', function () {
                infowindow.close();
            });

            var autocomplete = new google.maps.places.Autocomplete(document.getElementById('address_map'));

            autocomplete.bindTo('bounds', map);

            autocomplete.setFields(['address_components', 'geometry', 'icon', 'name']);

            autocomplete.addListener('place_changed', function () {
                infowindow.close();
                marker.setVisible(false);

                var place = autocomplete.getPlace(), city = '';

                for (var i = 0; i < place.address_components.length; i++) {
                    for (var j = 0; j < place.address_components[i].types.length; j++) {
                        if (place.address_components[i].types[j] == "administrative_area_level_2") {
                            city = place.address_components[i].long_name;
                        }
                    }
                }

                $("#form-installer input[name=city]").val(city);

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
                marker.setPosition(place.geometry.location);
                marker.setVisible(true);

                var address = '';
                if (place.address_components) {
                    address = [
                        (place.address_components[0] && place.address_components[0].short_name || ''),
                        (place.address_components[1] && place.address_components[1].short_name || ''),
                        (place.address_components[2] && place.address_components[2].short_name || '')
                    ].join(' ');
                }

                infowindowContent.children['place-icon'].src = place.icon;
                infowindowContent.children['place-name'].textContent = place.name;
                infowindowContent.children['place-address'].textContent = address;
                infowindow.open(map, marker);

                marker.addListener('click', function () {
                    infowindow.open(map, marker);
                });

                google.maps.event.addListener(map, 'click', function () {
                    infowindow.close();
                });
            });
        }

        google.maps.event.addDomListener(window, 'load', init(-7.2480988, 112.7797288, '', 'Premier Autostyling', 'Raya Kenjeran 469, Surabaya East Java, Indonesia - 60134.'));

        $(function () {
            var export_filename = 'Installers Table ({{now()->format('j F Y')}})',
                table = $("#dt-buttons").DataTable({
                    dom: "<'row'<'col-sm-12 col-md-3'l><'col-sm-12 col-md-5'B><'col-sm-12 col-md-4'f>>" +
                        "<'row'<'col-sm-12'tr>><'row'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7'p>>",
                    columnDefs: [
                        {sortable: false, targets: 6},
                        {targets: 1, visible: false, searchable: false}
                    ],
                    buttons: [
                        {
                            text: '<strong class="text-uppercase"><i class="far fa-clipboard mr-2"></i>Copy</strong>',
                            extend: 'copy',
                            exportOptions: {
                                columns: [0, 2, 3, 4, 5]
                            },
                            className: 'btn btn-warning assets-export-btn export-copy ttip'
                        }, {
                            text: '<strong class="text-uppercase"><i class="far fa-file-excel mr-2"></i>Excel</strong>',
                            extend: 'excel',
                            exportOptions: {
                                columns: [0, 2, 3, 4, 5]
                            },
                            className: 'btn btn-success assets-export-btn export-xls ttip',
                            title: export_filename,
                            extension: '.xls'
                        }, {
                            text: '<strong class="text-uppercase"><i class="fa fa-print mr-2"></i>Print</strong>',
                            extend: 'print',
                            exportOptions: {
                                columns: [0, 2, 3, 4, 5]
                            },
                            className: 'btn btn-info assets-select-btn export-print'
                        }, {
                            text: '<strong class="text-uppercase"><i class="fa fa-trash-alt mr-2"></i>Deletes</strong>',
                            className: 'btn btn-danger btn_massDelete'
                        }
                    ],
                    fnDrawCallback: function (oSettings) {
                        $('.use-nicescroll').getNiceScroll().resize();
                        $('[data-toggle="tooltip"]').tooltip();

                        $("#cb-all").on('click', function () {
                            if ($(this).is(":checked")) {
                                $("#dt-buttons tbody tr").addClass("terpilih")
                                    .find('.dt-checkboxes').prop("checked", true).trigger('change');
                            } else {
                                $("#dt-buttons tbody tr").removeClass("terpilih")
                                    .find('.dt-checkboxes').prop("checked", false).trigger('change');
                            }
                        });

                        $("#dt-buttons tbody tr").on("click", function () {
                            $(this).toggleClass("terpilih");
                            if ($(this).hasClass('terpilih')) {
                                $(this).find('.dt-checkboxes').prop("checked", true).trigger('change');
                            } else {
                                $(this).find('.dt-checkboxes').prop("checked", false).trigger('change');
                            }
                        });

                        $('.dt-checkboxes').on('click', function () {
                            if ($(this).is(':checked')) {
                                $(this).parent().parent().parent().addClass("terpilih");
                            } else {
                                $(this).parent().parent().parent().removeClass("terpilih");
                            }
                        });

                        $('.btn_massDelete').on("click", function () {
                            var ids = $.map(table.rows('.terpilih').data(), function (item) {
                                return item[1]
                            });
                            $("#form-mass input[name=installer_ids]").val(ids);
                            $("#form-mass").attr("action", "{{route('massDelete.installers')}}");

                            if (ids.length > 0) {
                                swal({
                                    title: 'Delete Installers',
                                    text: 'Are you sure to delete this ' + ids.length + ' selected record(s)? ' +
                                        'You won\'t be able to revert this!',
                                    icon: 'warning',
                                    dangerMode: true,
                                    buttons: ["No", "Yes"],
                                    closeOnEsc: false,
                                    closeOnClickOutside: false,
                                }).then((confirm) => {
                                    if (confirm) {
                                        swal({icon: "success", buttons: false});
                                        $("#form-mass")[0].submit();
                                    }
                                });
                            } else {
                                $("#cb-all").prop("checked", false).trigger('change');
                                swal("Error!", "There's no any selected record!", "error");
                            }
                        });
                    },
                });
        });

        function createInstaller() {
            init(-7.2480988, 112.7797288, '', 'Premier Autostyling', 'Raya Kenjeran 469, Surabaya East Java, Indonesia - 60134.');

            $("#installerModal .modal-title").text('Create Form');
            $("#form-installer").attr('action', '{{route('create.installers')}}');
            $("#form-installer input[name=_method]").val('');
            $("#form-installer input[name=id]").val('');
            $("#form-installer input[name=city]").val('');
            $("#form-installer button[type=submit]").text('Submit');
            $("#logo, #name, #phone, #address, #email, #link").val('');
            $("#txt_logo").text('Choose File');
            $("#installerModal").modal('show');
        }

        function editInstaller(id, logo, name, phone, address, email, city, link, lat, long) {
            init(lat, long, logo, name, address);

            $("#installerModal .modal-title").text('Edit Form');
            $("#form-installer").attr('action', '{{route('update.installers')}}');
            $("#form-installer input[name=_method]").val('PUT');
            $("#form-installer input[name=id]").val(id);
            $("#form-installer input[name=city]").val(city);
            $("#form-installer button[type=submit]").text('Save Changes');
            $("#name").val(name);
            $("#phone").val(phone);
            $("#address_map").val(address);
            $("#email").val(email);
            $("#link").val(link);

            if (logo != "") {
                $("#txt_logo").text(logo.length > 60 ? logo.slice(0, 60) + "..." : logo);
            } else {
                $("#txt_logo").text('Choose File');
            }

            $("#logo").removeAttr('required');

            $("#installerModal").modal('show');
        }

        $("#logo").on('change', function () {
            var files = $(this).prop("files"), names = $.map(files, function (val) {
                return val.name;
            }), text = names[0];
            $("#txt_logo").text(text.length > 60 ? text.slice(0, 60) + "..." : text);
        });
    </script>
@endpush
