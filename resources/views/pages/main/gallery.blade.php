@extends('layouts.mst')
@section('title', 'Gallery | '.env('APP_TITLE'))
@push('styles')
    <link rel="stylesheet" href="{{asset('vendor/jquery-ui/jquery-ui.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap-tabs-responsive.css')}}">
    <link rel="stylesheet" href="{{asset('vendor/lightgallery/dist/css/lightgallery.min.css')}}">
    <style>
        .breadcrumbs {
            background-image: url({{asset('images/slider/gallery3.jpg')}});
        }

        ul.ui-autocomplete {
            background: #0c0c0c;
            color: #777;
            border-radius: 0 0 1rem 1rem;
            border-color: #E31B23 !important;
        }

        ul.ui-autocomplete .ui-menu-item .ui-state-active,
        ul.ui-autocomplete .ui-menu-item .ui-state-active:hover,
        ul.ui-autocomplete .ui-menu-item .ui-state-active:focus {
            background: #E31B23;
            color: #fff;
            border-color: #E31B23;
        }

        ul.ui-autocomplete .ui-menu-item:last-child .ui-state-active,
        ul.ui-autocomplete .ui-menu-item:last-child .ui-state-active:hover,
        ul.ui-autocomplete .ui-menu-item:last-child .ui-state-active:focus {
            border-radius: 0 0 1rem 1rem;
        }

        #myTab li.active .badge {
            background: #E31B23;
            color: #fff;
        }

        .content-area {
            position: relative;
            cursor: pointer;
            overflow: hidden;
            margin: 1em auto;
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
            color: #eee;
        }

        .content-area img {
            transition: transform .5s ease;
        }

        .content-area:hover img {
            transform: scale(1.2);
        }

        .pagination > li > a,
        .pagination > li > span {
            color: #777;
            background-color: #080808;
            border: 1px solid #000;
            font-weight: 600;
            transition: all .3s ease-in-out;
        }

        .pagination > li > a:hover,
        .pagination > li > span:hover,
        .pagination > li > a:focus,
        .pagination > li > span:focus {
            background: #b91a21;
            color: #fff;
            border-color: #b91a21;
        }

        .pagination > .active > a,
        .pagination > .active > span,
        .pagination > .active > a:hover,
        .pagination > .active > span:hover,
        .pagination > .active > a:focus,
        .pagination > .active > span:focus {
            background: #e31b23;
            color: #fff;
            border-color: #E31B23;
        }

        .pagination > .disabled > a,
        .pagination > .disabled > a:focus,
        .pagination > .disabled > a:hover,
        .pagination > .disabled > span,
        .pagination > .disabled > span:focus,
        .pagination > .disabled > span:hover {
            background-color: #080808;
            border-color: #000;
            color: #777;
            pointer-events: none;
            cursor: no-drop !important;
            opacity: 0.3;
        }

        #myTabContent ul li:before {
            font-family: unset;
            content: unset;
            font-weight: unset;
            color: unset;
            margin-left: unset;
            padding-right: unset;
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

        .select2-container {
            border-radius: 1rem;
            border: 1px solid #777;
        }

        .select2-container .select2-search--inline .select2-search__field {
            background-image: url({{asset('images/color-swatch2-o.png')}});
            background-position: center right;
            background-repeat: no-repeat;
            background-size: contain;
            color: #777 !important;
            font-weight: 600 !important;
            padding-left: 6px;
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
            <h2>Our Gallery</h2>
        </div>
    </div>

    <div class="page-content page-sidebar">
        <div class="container">
            <form data-aos="fade-down" id="form-loadGallery">
                <input type="hidden" name="type" id="type">
                <div class="form-group" style="display: none">
                    <input id="keyword" type="text" name="q" class="form-control" autocomplete="off"
                           value="{{$keyword}}" placeholder="Search&hellip;"
                           style="border-radius: 1rem;margin: 1em auto">
                    <span class="glyphicon glyphicon-search form-control-feedback"></span>
                </div>
                <div class="form-group">
                    <select id="colors" class="form-control" name="colors[]" multiple>
                        @foreach($categories as $row)
                            <optgroup label="{{$row->name}}">
                                @foreach($row->getColorCode as $color)
                                    <option value="{{$color->id}}" data-image="{{$color->file}}" {{$colors == $color->id ?
                        'selected' : ''}}>{{$color->name.' ['.$color->code.']'}}</option>
                                @endforeach
                            </optgroup>
                        @endforeach
                    </select>
                </div>
            </form>
            <div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
                <ul data-aos="fade-down" id="myTab" class="nav nav-tabs nav-tabs-responsive" role="tablist">
                    <li role="presentation" class="active">
                        <a class="nav-item nav-link" href="#all" id="all-tab" role="tab" data-toggle="tab"
                           aria-controls="all" aria-expanded="true" onclick="filterGallery('all')">
                            <i class="fa fa-sort-alpha-up"></i>&ensp;SHOW ALL&ensp;<span
                                class="badge badge-secondary">{{count($gallery)}}</span></a></li>
                    <li role="presentation" class="next">
                        <a class="nav-item nav-link" href="#photos" id="photos-tab" role="tab" data-toggle="tab"
                           aria-controls="photos" aria-expanded="true" onclick="filterGallery('photos')">
                            <i class="fa fa-images"></i>&ensp;PHOTOS&ensp;<span
                                class="badge badge-secondary">{{count($photos)}}</span>
                        </a>
                    </li>
                    <li role="presentation">
                        <a class="nav-item nav-link" href="#videos" id="videos-tab" role="tab" data-toggle="tab"
                           aria-controls="videos" aria-expanded="true" onclick="filterGallery('videos')">
                            <i class="fa fa-film"></i>&ensp;videos&ensp;<span
                                class="badge badge-secondary">{{count($videos)}}</span>
                        </a>
                    </li>
                </ul>
                <div id="myTabContent" class="tab-content">
                    <div role="tabpanel" class="tab-pane fade in" id="all" aria-labelledby="all-tab"
                         style="border: none">
                        <div class="ajax-loader">
                            <div class="preloader4"></div>
                        </div>
                        <div class="row" id="lightgallery"></div>
                        <div class="row text-right">
                            <div class="col-12 myPagination">
                                <ul class="pagination justify-content-end" data-aos="fade-down"></ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
    <script src="{{asset('vendor/jquery-ui/jquery-ui.min.js')}}"></script>
    <script src="{{asset('vendor/masonry/masonry.pkgd.min.js')}}"></script>
    <script src="{{asset('vendor/lightgallery/lib/picturefill.min.js')}}"></script>
    <script src="{{asset('vendor/lightgallery/dist/js/lightgallery-all.min.js')}}"></script>
    <script src="{{asset('vendor/lightgallery/modules/lg-video.min.js')}}"></script>
    <script>
        var $img = $(".breadcrumbs"),
            images = ['gallery1.jpg', 'gallery2.jpg', 'gallery3.jpg'],
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

        var last_page, $keyword = $("#keyword"), $colors = $("#colors");

        $(function () {
            $('.ajax-loader').hide();
            $('#lightgallery, .myPagination').show();
            $("#" + window.location.hash + "-tab").addClass('show active');

            @if($type != '')
            $("#{{$type}}-tab").click();
            @else
            $("#photos-tab").click();
            $("#all-tab").click();
            @endif
        });

        $keyword.autocomplete({
            source: function (request, response) {
                $.getJSON('{{route('get.title.gallery', ['title' => ''])}}/' + $keyword.val(), {
                    name: request.term,
                }, function (data) {
                    response(data);
                });
            },
            focus: function (event, ui) {
                event.preventDefault();
            },
            select: function (event, ui) {
                event.preventDefault();
                $keyword.val(ui.item.title);
                $("#" + ui.item.type + "-tab").click();
            }
        });

        $keyword.on('keyup', function () {
            if (!$keyword.val()) {
                $("#all-tab").click();
                loadGallery();
            }
        });

        $colors.select2({
            placeholder: "Pick colors...",
            allowClear: true,
            width: '100%',
            templateResult: format,
            templateSelection: format,
            escapeMarkup: function (m) {
                return m;
            }
        });

        function format(option) {
            var optimage = $(option.element).data('image');

            if (!option.id) {
                return option.text;
            }

            if (!optimage) {
                return option.text;
            } else {
                return '<img width="64" src="{{asset('storage/colors')}}/' + optimage + '" style="padding: 5px">' + option.text;
            }
        }

        $colors.on("select2:select select2:unselect", function (e) {
            loadGallery();
        });

        $("#form-loadGallery").on('submit', function (e) {
            e.preventDefault();
            loadGallery();
        });

        function decodeHtml(html) {
            var txt = document.createElement("textarea");
            txt.innerHTML = html;
            return txt.value;
        }

        function filterGallery(id) {
            $("#nav-tab a").removeClass('show active');
            $("#myTabContent .tab-pane").addClass('show active');

            $("#" + id + "-tab").addClass('show active');

            $("#type").val(id);
            loadGallery();
        }

        function loadGallery() {
            clearTimeout(this.delay);
            this.delay = setTimeout(function () {
                $.ajax({
                    url: "{{route('get.data.gallery')}}",
                    type: "GET",
                    data: $("#form-loadGallery").serialize(),
                    beforeSend: function () {
                        $('.ajax-loader').show();
                        $('#lightgallery, .myPagination').hide();
                    },
                    complete: function () {
                        $('.ajax-loader').hide();
                        $('#lightgallery, .myPagination').show();
                    },
                    success: function (data) {
                        successLoad(data);
                    },
                    error: function () {
                        swal('Oops..', 'Something went wrong! Please refresh this page.', 'error');
                    }
                });
            }.bind(this), 800);

            return false;
        }

        $('.myPagination ul').on('click', 'li', function () {
            $('html,body').animate({scrollTop: $("#myTab").offset().top}, 500);

            var $url, page = $(this).children().text(),
                active = $(this).parents("ul").find('.active').eq(0).text(),
                hellip_prev = $(this).closest('.hellip_prev').next().find('a').text(),
                hellip_next = $(this).closest('.hellip_next').prev().find('a').text();

            if (page > 0) {
                $url = "{{url('/gallery/data')}}" + '?page=' + page;
            }
            if ($(this).hasClass('prev')) {
                $url = "{{url('/gallery/data')}}" + '?page=' + parseInt(active - 1);
            }
            if ($(this).hasClass('next')) {
                $url = "{{url('/gallery/data')}}" + '?page=' + parseInt(+active + +1);
            }
            if ($(this).hasClass('hellip_prev')) {
                $url = "{{url('/gallery/data')}}" + '?page=' + parseInt(hellip_prev - 1);
                page = parseInt(hellip_prev - 1);
            }
            if ($(this).hasClass('hellip_next')) {
                $url = "{{url('/gallery/data')}}" + '?page=' + parseInt(+hellip_next + +1);
                page = parseInt(+hellip_next + +1);
            }
            if ($(this).hasClass('first')) {
                $url = "{{url('/gallery/data')}}" + '?page=1';
            }
            if ($(this).hasClass('last')) {
                $url = "{{url('/gallery/data')}}" + '?page=' + last_page;
            }

            clearTimeout(this.delay);
            this.delay = setTimeout(function () {
                $.ajax({
                    url: $url,
                    type: "GET",
                    data: $("#form-loadGallery").serialize(),
                    beforeSend: function () {
                        $('.ajax-loader').show();
                        $('#lightgallery, .myPagination').hide();
                    },
                    complete: function () {
                        $('.ajax-loader').hide();
                        $('#lightgallery, .myPagination').show();
                    },
                    success: function (data) {
                        successLoad(data, page);
                    },
                    error: function () {
                        swal('Oops..', 'Something went wrong! Please refresh this page.', 'error');
                    }
                });
            }.bind(this), 800);

            return false;
        });

        function successLoad(data, page) {
            var $result = '', pagination = '', colors = '', $page = '';

            $.each(data.data, function (i, val) {
                var thumbnail = val.type == 'photos' ? '{{asset('storage/gallery')}}/' + val.file :
                    '{{asset('storage/gallery/thumbnail')}}/' + val.thumbnail,
                    file = val.type == 'photos' ? '{{asset('storage/gallery')}}/' + val.file : val.file;

                $result +=
                    '<div data-aos="fade-down" class="col-md-3 item" ' +
                    'data-src="' + file + '" data-sub-html="<h4>' + val.title + '</h4><p>' + val.caption + '</p>">' +
                    '<div class="content-area">' +
                    '<img src="' + thumbnail + '" alt="Thumbnail" class="img-responsive">' +
                    '<div class="custom-overlay">' +
                    '<div class="custom-text">' +
                    '<b>' + val.title + '</b>' +
                    '</div></div></div></div>';
            });
            $("#lightgallery").empty().append($result);

            if (data.last_page >= 1) {
                if (data.current_page > 4) {
                    pagination += '<li class="page-item first">' +
                        '<a class="page-link" href="' + data.first_page_url + '">' +
                        '<i class="fa fa-angle-double-left"></i></a></li>';
                }

                if ($.trim(data.prev_page_url)) {
                    pagination += '<li class="page-item prev">' +
                        '<a class="page-link" href="' + data.prev_page_url + '" rel="prev">' +
                        '<i class="fa fa-angle-left"></i></a></li>';
                } else {
                    pagination += '<li class="page-item disabled">' +
                        '<span class="page-link"><i class="fa fa-angle-left"></i></span></li>';
                }

                if (data.current_page > 4) {
                    pagination += '<li class="page-item hellip_prev">' +
                        '<a class="page-link" style="cursor: pointer">&hellip;</a></li>'
                }

                for ($i = 1; $i <= data.last_page; $i++) {
                    if ($i >= data.current_page - 3 && $i <= data.current_page + 3) {
                        if (data.current_page == $i) {
                            pagination += '<li class="page-item active"><span class="page-link">' + $i + '</span></li>'
                        } else {
                            pagination += '<li class="page-item">' +
                                '<a class="page-link" style="cursor: pointer">' + $i + '</a></li>'
                        }
                    }
                }

                if (data.current_page < data.last_page - 3) {
                    pagination += '<li class="page-item hellip_next">' +
                        '<a class="page-link" style="cursor: pointer">&hellip;</a></li>'
                }

                if ($.trim(data.next_page_url)) {
                    pagination += '<li class="page-item next">' +
                        '<a class="page-link" href="' + data.next_page_url + '" rel="next">' +
                        '<i class="fa fa-angle-right"></i></a></li>';
                } else {
                    pagination += '<li class="page-item disabled">' +
                        '<span class="page-link"><i class="fa fa-angle-right"></i></span></li>';
                }

                if (data.current_page < data.last_page - 3) {
                    pagination += '<li class="page-item last">' +
                        '<a class="page-link" href="' + data.last_page_url + '">' +
                        '<i class="fa fa-angle-double-right"></i></a></li>';
                }
            }
            $('.myPagination ul').html(pagination);

            if ($colors.val()) {
                colors = '&colors=' + $colors.val()
            }

            if (page != "" && page != undefined) {
                $page = '&page=' + page;
            }

            window.history.replaceState("", "", '{{url('/gallery')}}?type=' + $("#type").val() + colors + $page);

            setTimeout(function () {
                reloadGallery();
            }, 600);
            return false;
        }

        function reloadGallery() {
            var gallery = $("#lightgallery");

            // init
            gallery.masonry({
                itemSelector: '.item'
            });
            gallery.lightGallery({
                selector: '.item',
                loadYoutubeThumbnail: true,
                youtubeThumbSize: 'default',
            });

            // destroy
            gallery.masonry('destroy');
            gallery.removeData('masonry');
            gallery.data("lightGallery").destroy(true);

            // re-init
            gallery.masonry({
                itemSelector: '.item'
            });
            gallery.lightGallery({
                selector: '.item',
                loadYoutubeThumbnail: true,
                youtubeThumbSize: 'default',
            });
        }

        function goToAnchor() {
            $('html,body').animate({scrollTop: $(".page-content").offset().top}, 500);
        }

        $(document).on('mouseover', '.use-nicescroll', function () {
            $(this).getNiceScroll().resize();
        });
    </script>
@endpush
