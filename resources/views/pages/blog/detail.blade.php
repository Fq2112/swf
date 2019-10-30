@extends('layouts.mst')
@section('title', $blog->getBlogCategory->name.' Blog: '.$blog->title.' | '.env('APP_TITLE'))
@push('styles')
    <link rel="stylesheet" href="{{asset('css/sliders/camera.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('vendor/lightgallery/dist/css/lightgallery.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/play-button.css')}}">
    <style>
        .breadcrumbs {
            background-image: url({{asset('images/slider/blog1.jpg')}});
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

        .blog-category span {
            text-transform: uppercase;
        }

        .blog-category span:before {
            content: '\f073';
            font-family: "Font Awesome 5 Free";
            font-weight: 900;
            margin-left: 10px;
            margin-right: 10px;
        }

        .blog-author a {
            color: #E31B23;
            text-decoration: none;
            transition: all .3s ease-in-out;
        }

        .blog-author a:hover, .blog-author a:focus, .blog-author a:active {
            color: #9b1219;
            text-decoration: none;
        }

        .blog-content p {
            color: #666;
        }

        .lg-backdrop {
            z-index: 9999999;
        }

        .lg-outer {
            z-index: 10000000;
        }
    </style>
@endpush
@section('content')
    <div class="breadcrumbs">
        <div class="breadcrumbs-overlay"></div>
        <div class="page-title">
            <h2>Our Blog</h2>
        </div>
        <ul class="crumb">
            <li><a href="{{route('home')}}"><i class="fa fa-home"></i></a></li>
            <li><a href="{{route('home')}}"><i class="fa fa-angle-double-right"></i> Home</a></li>
            <li><i class="fa fa-angle-double-right"></i></li>
            <li><a href="{{route('show.blog')}}"><i class="fa fa-blog"></i></a></li>
            <li><a href="{{route('show.blog')}}"><i class="fa fa-angle-double-right"></i> Blog</a></li>
            <li><a href="#" onclick="goToAnchor()"><i class="fa fa-angle-double-right"></i> {{$blog->getBlogCategory
            ->name}}</a></li>
        </ul>
    </div>

    <div class="page-content page-sidebar">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-lg-9">
                    <div class="content-container">
                        <div class="blog-list single-post">
                            <article class="item-post">
                                @if($blog->getBlogGallery->count() > 0)
                                    <div data-aos="zoom-out" class="content-area">
                                        <img src="{{asset('storage/blog/thumbnail/'.$blog->thumbnail)}}"
                                             class="img-responsive" alt="Thumbnail">
                                        <div class="custom-overlay">
                                            <div class="custom-text">
                                                <svg id="play" class="play" version="1.1"
                                                     xmlns="http://www.w3.org/2000/svg"
                                                     xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                     height="100px" width="100px" viewBox="0 0 100 100"
                                                     enable-background="new 0 0 100 100" xml:space="preserve">
                                                    <path class="stroke-solid" fill="none" stroke="#E31B23"
                                                          d="M49.9,2.5C23.6,2.8,2.1,24.4,2.5,50.4C2.9,76.5,24.7,98,50.3,97.5c26.4-0.6,47.4-21.8,47.2-47.7C97.3,23.7,75.7,2.3,49.9,2.5"/>
                                                    <path class="stroke-dotted" fill="none" stroke="#E31B23"
                                                          d="M49.9,2.5C23.6,2.8,2.1,24.4,2.5,50.4C2.9,76.5,24.7,98,50.3,97.5c26.4-0.6,47.4-21.8,47.2-47.7C97.3,23.7,75.7,2.3,49.9,2.5"/>
                                                    <path class="icon" fill="#E31B23"
                                                          d="M38,69c-1,0.5-1.8,0-1.8-1.1V32.1c0-1.1,0.8-1.6,1.8-1.1l34,18c1,0.5,1,1.4,0,1.9L38,69z"/></svg>
                                            </div>
                                        </div>
                                    </div>
                                @else
                                    <img data-aos="zoom-out" src="{{asset('storage/blog/thumbnail/'.$blog->thumbnail)}}"
                                         class="img-responsive" alt="Thumbnail">
                                @endif

                                <div class="post-content none-margin">
                                    <h2 data-aos="fade-right">{{$blog->title}}</h2>
                                    <ul data-aos="fade-down">
                                        <li><i class="fa fa-user"></i> <b>by</b> <span><a href="{{route('detail.blog',
                                        ['author' => $user->username])}}">{{$user->username}}</a></span></li>
                                        <li><i class="fa fa-tag"></i> <span><a href="{{route('show.blog',
                                        ['category' => $blog->category_id])}}">{{strtoupper($blog->getBlogCategory
                                        ->name)}}</a></span></li>
                                        <li><i class="fa fa-calendar-alt"></i> <span>{{\Illuminate\Support\Carbon::parse
                                        ($blog->created_at)->format('F d, Y')}}</span></li>
                                    </ul>
                                    <div data-aos="fade-down">
                                        {!! $blog->content !!}
                                    </div>
                                </div>

                                <div class="meta-single">
                                    <h3 data-aos="fade-right"><i class="fa fa-share"></i> Share this post</h3>
                                    <ul class="none-style">
                                        <li data-aos="fade-up">
                                            <a href="mailto:?subject={{$blog->title}}&body=Hi, I thought you'd like this: {{$uri}}">
                                                <i class="fa fa-envelope email-color"></i></a></li>
                                        <li data-aos="fade-up">
                                            <a href="whatsapp://send?text=Hi, I thought you'd like this: {{$uri}}">
                                                <i class="fab fa-whatsapp whatsapp-color"></i></a></li>
                                        <li data-aos="fade-up">
                                            <a href="https://facebook.com/sharer/sharer.php?u={{$uri}}"
                                               target="popup" onclick="shareBlog($(this).attr('href'))">
                                                <i class="fab fa-facebook-f fb-color"></i></a></li>
                                        <li data-aos="fade-up">
                                            <a href="https://linkedin.com/shareArticle?mini=true&url={{$uri}}"
                                               target="popup" onclick="shareBlog($(this).attr('href'))">
                                                <i class="fab fa-linkedin-in linkedin-color"></i></a></li>
                                        <li data-aos="fade-up">
                                            <a href="https://twitter.com/intent/tweet?text=Hi, I thought you'd like this: {{$uri}}"
                                               target="popup" onclick="shareBlog($(this).attr('href'))">
                                                <i class="fab fa-twitter tw-color"></i></a></li>
                                    </ul>
                                </div>

                                @if(count($relates) > 0)
                                    <div class="related-post default-owl">
                                        <h4 data-aos="fade-right" class="title-block">RELATED POSTS</h4>
                                        <div id="related-post">
                                            @foreach($relates as $post)
                                                @php
                                                    $date = \Carbon\Carbon::parse($post->created_at);
                                                    $url = route('detail.blog', ['author' => $post->getUser->username,
                                                    'y' => $date->format('Y'), 'm' => $date->format('m'), 'd' => $date->format('d'),
                                                    'title' => $post->title_uri]);
                                                @endphp
                                                <div data-aos="zoom-out" class="tabs-post">
                                                    <a class="thumb" href="{{$url}}">
                                                        <img src="{{asset('storage/blog/thumbnail/'.$post->thumbnail)}}"
                                                             alt="Thumbnail">
                                                    </a>
                                                    <div class="right-post">
                                                        <a href="{{$url}}">{{\Illuminate\Support\Str::words($post
                                                    ->title,3,'...')}}</a>
                                                        <p><i class="fa fa-calendar-alt"></i> Posted on {{$date
                                                    ->formatLocalized('%b %d, %Y')}}</p>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                @endif
                            </article>
                        </div>
                    </div>
                </div>

                <div data-aos="fade-left" class="col-md-4 col-lg-3">
                    <div class="sidebar">
                        <div class="widget widget_search">
                            <form id="form-search" class="search-form input-group" action="{{route('show.blog')}}">
                                <input id="keyword" type="text" name="q" class="form-control" autocomplete="off"
                                       placeholder="Search&hellip;" required>
                                <span class="input-group-btn">
                                    <button class="btn btn-dark-red" type="submit"><i class="fa fa-search"></i></button>
                                </span>
                            </form>
                        </div>
                        <div class="widget widget_categories">
                            <h4>Categories</h4>
                            <ul>
                                @foreach(\App\Models\BlogCategory::orderBy('name')->get() as $row)
                                    <li class="hover-li">
                                        <a href="{{route('show.blog', ['category' => $row->id])}}">
                                            <i class="fa fa-caret-right"></i> {{$row->name}}</a>
                                        <span class="hover-span">({{count($row->getBlog)}})</span>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="widget">
                            <h4>About The Author</h4>
                            <div class="textwidget">
                                @if($user->about != "")
                                    <p>{{$user->about}}</p>
                                @else
                                    <p><em>The author hasn't written anything yet&hellip;</em></p>
                                @endif
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
    <script src="{{asset('vendor/lightgallery/lib/picturefill.min.js')}}"></script>
    <script src="{{asset('vendor/lightgallery/dist/js/lightgallery-all.min.js')}}"></script>
    <script src="{{asset('vendor/lightgallery/modules/lg-video.min.js')}}"></script>
    <script>
        $(function () {
            $("#related-post").owlCarousel({
                navigation: true,
                navigationText: ["<i class='fa fa-caret-left'></i>", "<i class='fa fa-caret-right'></i>"],
                slideSpeed: 600,
                autoPlay: 8000,
                items: 3,
                itemsDesktop: [1199, 2],
                itemsDesktopSmall: [979, 3],
                itemsTablet: [768, 2],
                itemsMobile: [479, 1],
                pagination: false
            });
        });

        var $img = $(".breadcrumbs"),
            images = ['blog3.jpg', 'blog2.jpg', 'blog1.jpg'],
            index = 0, maxImages = images.length - 1, timer = setInterval(function () {
                var currentImage = images[index];
                index = (index == maxImages) ? 0 : ++index;
                $img.fadeOut("slow", function () {
                    $img.css("background-image", 'url({{asset('images/slider')}}/' + currentImage + ')');
                    $img.fadeIn("slow");
                });
            }, 5000);

        $('#play').on('click', function () {
            $(this).lightGallery({
                dynamic: true,
                dynamicEl: [
                        @foreach($blog->getBlogGallery as $row)
                    {
                        "src": '{{$row->type == 'photos' ? asset('storage/blog/'.$row->files) : $row->files}}',
                        'thumb': '{{$row->type == 'photos' ? asset('storage/blog/'.$row->files) : $row->files}}',
                    },
                    @endforeach
                ]
            });
        });

        $("#keyword").autocomplete({
            source: function (request, response) {
                $.getJSON('{{route('get.title.blog', ['title' => ''])}}/' + $("#keyword").val(), {
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
                $("#keyword").val(ui.item.title);
                $("#form-search")[0].submit();
            }
        });

        function shareBlog(url) {
            window.open(url, 'popup', 'width=600,height=400');
            return false;
        }

        function goToAnchor() {
            $('html,body').animate({scrollTop: $(".page-content").offset().top}, 500);
        }
    </script>
@endpush
