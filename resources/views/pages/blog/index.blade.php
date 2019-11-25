@extends('layouts.mst')
@section('title', 'Blog | '.env('APP_TITLE'))
@push('styles')
    <link rel="stylesheet" href="{{asset('vendor/jquery-ui/jquery-ui.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap-tabs-responsive.css')}}">
    <link rel="stylesheet" href="{{asset('css/blog-grid-list.css')}}">
    <style>
        .breadcrumbs {
            background-image: url({{asset('images/slider/blog3.jpg')}});
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
    </style>
@endpush
@section('content')
    <div class="breadcrumbs">
        <div class="breadcrumbs-overlay"></div>
        <div class="page-title">
            <h2>Our Blog</h2>
            <p>We're also provide you with a recent news related to wrap film or any automobile things.</p>
        </div>
    </div>

    <div class="page-content page-sidebar">
        <div class="container">
            <form data-aos="fade-down" id="form-loadBlog">
                <input type="hidden" name="category" id="category">
                <div class="form-group has-feedback">
                    <input id="keyword" type="text" name="q" class="form-control" autocomplete="off"
                           value="{{$keyword}}" placeholder="Search&hellip;"
                           style="border-radius: 1rem;margin: 1em auto">
                    <span class="glyphicon glyphicon-search form-control-feedback"></span>
                </div>
            </form>
            <div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
                <ul data-aos="fade-down" id="myTab" class="nav nav-tabs nav-tabs-responsive" role="tablist">
                    <li role="presentation" class="active">
                        <a class="nav-item nav-link" href="#all" id="all-tab" role="tab" data-toggle="tab"
                           aria-controls="all" aria-expanded="true" onclick="filterBlog('all')">
                            <i class="fa fa-sort-alpha-up"></i>&ensp;SHOW ALL&ensp;<span
                                class="badge badge-secondary">{{\App\Models\Blog::count()}}</span>
                        </a>
                    </li>
                    @foreach($categories as $row)
                        <li role="presentation" class="next">
                            <a class="nav-item nav-link" href="#{{$row->id}}" id="{{$row->id}}-tab" role="tab"
                               data-toggle="tab" aria-controls="{{$row->id}}" aria-expanded="true"
                               onclick="filterBlog('{{$row->id}}')">{{strtoupper($row->name)}}&ensp;
                                <span class="badge badge-secondary">{{count($row->getBlog)}}</span>
                            </a>
                        </li>
                    @endforeach
                </ul>
                <div id="myTabContent" class="tab-content">
                    <div role="tabpanel" class="tab-pane fade in" id="all" aria-labelledby="all-tab"
                         style="border: none">
                        <div class="ajax-loader">
                            <div class="preloader4"></div>
                        </div>
                        <div class="row" id="blog"></div>
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
    <script>
        var $img = $(".breadcrumbs"),
            images = ['blog1.jpg', 'blog2.jpg', 'blog3.jpg'],
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

        var last_page, $keyword = $("#keyword");

        $(function () {
            $('.ajax-loader').hide();
            $('#blog, .myPagination').show();
            $("#" + window.location.hash + "-tab").addClass('show active');
            $("#all-tab").parent().next().find('a').click();

            @if($category != '')
            $("#{{$category}}-tab").click();
            @else
            $("#all-tab").parent().next().click();
            $("#all-tab").click();
            @endif
        });

        $keyword.autocomplete({
            source: function (request, response) {
                $.getJSON('{{route('get.title.blog', ['title' => ''])}}/' + $keyword.val(), {
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
                $("#" + ui.item.category_id + "-tab").click();
            }
        });

        $keyword.on('keyup', function () {
            if (!$keyword.val()) {
                $("#all-tab").click();
                loadBlog();
            }
        });

        $("#form-loadBlog").on('submit', function (e) {
            e.preventDefault();
            loadBlog();
        });

        function decodeHtml(html) {
            var txt = document.createElement("textarea");
            txt.innerHTML = html;
            return txt.value;
        }

        function filterBlog(id) {
            $("#nav-tab a").removeClass('show active');
            $("#myTabContent .tab-pane").addClass('show active');

            $("#" + id + "-tab").addClass('show active');

            $("#category").val(id);
            loadBlog();
        }

        function loadBlog() {
            clearTimeout(this.delay);
            this.delay = setTimeout(function () {
                $.ajax({
                    url: "{{route('get.data.blog')}}",
                    type: "GET",
                    data: $("#form-loadBlog").serialize(),
                    beforeSend: function () {
                        $('.ajax-loader').show();
                        $('#blog, .myPagination').hide();
                    },
                    complete: function () {
                        $('.ajax-loader').hide();
                        $('#blog, .myPagination').show();
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
                $url = "{{url('/blog/data')}}" + '?page=' + page;
            }
            if ($(this).hasClass('prev')) {
                $url = "{{url('/blog/data')}}" + '?page=' + parseInt(active - 1);
            }
            if ($(this).hasClass('next')) {
                $url = "{{url('/blog/data')}}" + '?page=' + parseInt(+active + +1);
            }
            if ($(this).hasClass('hellip_prev')) {
                $url = "{{url('/blog/data')}}" + '?page=' + parseInt(hellip_prev - 1);
                page = parseInt(hellip_prev - 1);
            }
            if ($(this).hasClass('hellip_next')) {
                $url = "{{url('/blog/data')}}" + '?page=' + parseInt(+hellip_next + +1);
                page = parseInt(+hellip_next + +1);
            }
            if ($(this).hasClass('first')) {
                $url = "{{url('/blog/data')}}" + '?page=1';
            }
            if ($(this).hasClass('last')) {
                $url = "{{url('/blog/data')}}" + '?page=' + last_page;
            }

            clearTimeout(this.delay);
            this.delay = setTimeout(function () {
                $.ajax({
                    url: $url,
                    type: "GET",
                    data: $("#form-loadBlog").serialize(),
                    beforeSend: function () {
                        $('.ajax-loader').show();
                        $('#blog, .myPagination').hide();
                    },
                    complete: function () {
                        $('.ajax-loader').hide();
                        $('#blog, .myPagination').show();
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
            var $result = '', pagination = '', $page = '';

            $.each(data.data, function (i, val) {
                $result +=
                    '<div data-aos="fade-down" class="blog-item">' +
                    '<a href="' + val._url + '"><div class="icon"><img src="' + val._thumbnail + '" alt="Thumbnail"></div>' +
                    '<div class="blog-content"><p class="blog-category">' + val.category + '<span class="blog-date">' +
                    '<i class="fa fa-calendar-alt"></i>' + val.date + '</span><br><sub class="blog-author">by <span>' + val.author + '</span></sub></p>' +
                    '<div class="title">' + val.title + '</div><div class="rounded"></div>' + val._content + '</div>' +
                    '<div class="item-arrow"><i class="fa fa-long-arrow-alt-right" aria-hidden="true"></i></div></a></div>';
            });
            $("#blog").empty().append($result);

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

            if (page != "" && page != undefined) {
                $page = '&page=' + page;
            }
            window.history.replaceState("", "", '{{url('/blog')}}?q=' + $keyword.val() + '&category=' + $("#category").val() + $page);
            return false;
        }

        function goToAnchor() {
            $('html,body').animate({scrollTop: $(".page-content").offset().top}, 500);
        }

        $(document).on('mouseover', '.use-nicescroll', function () {
            $(this).getNiceScroll().resize();
        });
    </script>
@endpush
