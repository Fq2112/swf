@extends('layouts.mst')
@section('title', 'Blog Author: '.$user->username.' | '.env('APP_TITLE'))
@push('styles')
    <link rel="stylesheet" href="{{asset('css/bootstrap-tabs-responsive.css')}}">
    <link rel="stylesheet" href="{{asset('css/blog-grid-list.css')}}">
    <link rel="stylesheet" href="{{asset('css/blog-accordion.css')}}">
    <style>
        .breadcrumbs {
            background-image: url({{asset('images/slider/blog2.jpg')}});
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

        .author {
            margin: .5em auto;
            text-transform: none;
        }

        .author a {
            text-decoration: none;
            color: #E31B23;
            transition: all .3s ease-in-out;
        }

        .author a:hover, .author a:focus, .author a:active {
            text-decoration: none;
            color: #981319;
        }
    </style>
@endpush
@section('content')
    <div class="breadcrumbs">
        <div class="breadcrumbs-overlay"></div>
        <div class="page-title">
            <h2>Blog Author</h2>
        </div>
        <ul class="crumb">
            <li><a href="{{route('home')}}"><i class="fa fa-home"></i></a></li>
            <li><a href="{{route('home')}}"><i class="fa fa-angle-double-right"></i> Home</a></li>
            <li><i class="fa fa-angle-double-right"></i></li>
            <li><a href="{{route('show.blog')}}"><i class="fa fa-blog"></i></a></li>
            <li><a href="{{route('show.blog')}}"><i class="fa fa-angle-double-right"></i> Blog</a></li>
            <li><a href="#" onclick="goToAnchor()"><i class="fa fa-angle-double-right"></i> Author</a></li>
        </ul>
    </div>

    <div class="page-content page-sidebar">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <img data-aos="zoom-out" class="img-thumbnail" alt="Avatar" src="{{$user->ava == "" ?
                    asset('admins/img/avatar/avatar-'.rand(1,5).'.png') : asset('storage/admins/ava/'.$user->ava)}}"
                         style="width:15%;border-radius: 100%;float: left;margin: 0 1.5em 1.5em 0">
                    <h3 data-aos="fade-right">{{$user->name}}</h3>
                    <h4 data-aos="fade-down" class="author">
                        <a href="{{route('detail.blog', ['author' => $user->username])}}">{{$user
                        ->username}}</a>&ensp;<span data-toggle="tooltip" data-placement="bottom" title="TOTAL POST">
                            <i class="fa fa-blog"></i>&ensp;{{$user->getBlog->count() > 1 ? $user->getBlog->count().' posts' :
                            $user->getBlog->count().' post'}}</span>
                    </h4>
                    @if($user->about != "")
                        <p data-aos="fade-down" align="justify">{{$user->about}}</p>
                    @else
                        <p data-aos="fade-down" align="justify"><em>The author hasn't written anything yet&hellip;</em>
                        </p>
                    @endif
                </div>
            </div>

            <div data-aos="fade-down" class="row">
                <div class="col-lg-12">
                    <div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
                        <ul data-aos="zoom-in-up" id="myTab" class="nav nav-tabs nav-tabs-responsive"
                            role="tablist">
                            <li role="presentation" class="active">
                                <a class="nav-item nav-link" href="#latest" id="latest-tab" role="tab"
                                   data-toggle="tab" aria-controls="latest" aria-expanded="true">
                                    <i class="fa fa-history"></i>&ensp;LATEST POST</a>
                            </li>
                            <li role="presentation" class="next">
                                <a class="nav-item nav-link" href="#archive" id="archive-tab" role="tab"
                                   data-toggle="tab" aria-controls="archive" aria-expanded="true">
                                    <i class="fa fa-archive"></i>&ensp;ARCHIVED POST</a>
                            </li>
                        </ul>
                        <div id="myTabContent" class="tab-content">
                            <div role="tabpanel" class="tab-pane fade in active" id="latest"
                                 aria-labelledby="latest-tab" style="border: none">
                                <div class="row" id="blog">
                                    @foreach($latest as $row)
                                        @php
                                            $date = \Carbon\Carbon::parse($row->created_at);
                                            $url = route('detail.blog', ['author' => $row->getUser->username,
                                            'y' => $date->format('Y'), 'm' => $date->format('m'), 'd' => $date->format('d'),
                                            'title' => $row->title_uri]);
                                        @endphp
                                        <div data-aos="zoom-out" class="blog-item">
                                            <a href="{{$url}}">
                                                <div class="icon">
                                                    <img src="{{asset('storage/blog/thumbnail/'.$row->thumbnail)}}"
                                                         alt="Thumbnail">
                                                </div>
                                                <div class="blog-content">
                                                    <p class="blog-category">{{$row->getBlogCategory
                                                    ->name}}<span class="blog-date"><i class="fa fa-calendar-alt"></i>{{$date
                                                    ->formatLocalized('%b %d, %Y')}}</span><br>
                                                        <sub class="blog-author">by <span>{{$user->username}}</span>
                                                        </sub>
                                                    </p>
                                                    <div class="title">{{$row->title}}</div>
                                                    <div class="rounded"></div>
                                                    {!!\Illuminate\Support\Str::words($row->content, 20, '...').'</p>'!!}
                                                </div>
                                                <div class="item-arrow">
                                                    <i class="fa fa-long-arrow-alt-right" aria-hidden="true"></i>
                                                </div>
                                            </a>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="archive" aria-labelledby="archive-tab"
                                 style="border: none">
                                <ul id="accordion" class="static-menu">
                                    @php $blog = $archive; @endphp
                                    @foreach($blog as $monthYear => $archive)
                                        <li>
                                            <div class="link">
                                                <i class="fa fa-chevron-right"></i>{{$monthYear}}&ensp;<span
                                                    class="badge badge-secondary">{{count($archive)}}</span>
                                            </div>
                                            <ul class="sub-menu">
                                                @foreach($archive as $data)
                                                    @php
                                                        $date = \Carbon\Carbon::parse($data->created_at);
                                                        $url = route('detail.blog', ['author' => $data->getUser->username,
                                                        'y' => $date->format('Y'), 'm' => $date->format('m'), 'd' => $date->format('d'),
                                                        'title' => $data->title_uri]);
                                                    @endphp
                                                    <li>
                                                        <a href="{{$url}}">
                                                            <p align="justify" class="blog-category">{{$data->getBlogCategory
                                                            ->name}}<i class="fa fa-calendar-alt"></i>{{$date
                                                            ->formatLocalized('%b %d, %Y')}}</p>
                                                            <h4>{{$data->title}}</h4>
                                                        </a>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
    <script>
        var $img = $(".breadcrumbs"),
            images = ['blog1.jpg', 'blog3.jpg', 'blog2.jpg'],
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

        $(function () {
            var Accordion = function (el, multiple) {
                this.el = el || {};
                this.multiple = multiple || false;

                var links = this.el.find('.link');
                links.on('click', {el: this.el, multiple: this.multiple}, this.dropdown);
            };

            Accordion.prototype.dropdown = function (e) {
                var $el = e.data.el;
                $this = $(this),
                    $next = $this.next();

                $next.slideToggle();
                $this.parent().toggleClass('open');

                if (!e.data.multiple) {
                    $el.find('.sub-menu').not($next).slideUp().parent().removeClass('open');
                }
            };

            var accordion = new Accordion($('#accordion'), false);
        });

        function goToAnchor() {
            $('html,body').animate({scrollTop: $(".page-content").offset().top}, 500);
        }
    </script>
@endpush
