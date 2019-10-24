@extends('layouts.mst')
@section('title', 'Product Visualizer | '.env('APP_TITLE'))
@push('styles')
    <style>
        .breadcrumbs {
            background-image: url({{asset('images/slider/product-visualizer.jpg')}});
        }

        .avd .purewebIframe {
            position: absolute;
            top: 0;
            left: 0;
            bottom: 0;
            right: 0;
            width: 100%;
            height: 100%;
            border: 0;
        }

        @supports (-webkit-overflow-scrolling: touch) {
            @media (orientation: landscape) and (max-aspect-ratio: 17/9) and (max-width: 740px) {
                .avd .frame-pureweb {
                    z-index: 99999;
                    position: fixed;
                    margin: auto;
                    top: 0;
                    left: 0;
                    height: calc(100vw * (9 / 16));
                    width: calc(100vh * (16 / 9));
                    max-height: calc(100vh);
                    min-height: calc(100vh / 4);
                    max-width: 100vw;
                    background-color: black;
                }
            }
            @media (orientation: landscape) and (min-aspect-ratio: 18/9) and (max-aspect-ratio: 20/9) and (max-width: 740px) {
                .avd .frame-pureweb {
                    z-index: 99999;
                    position: fixed;
                    margin: auto;
                    top: 0;
                    left: 0;
                    height: calc(100vw * (9 / 16));
                    width: calc(100vh * (16 / 9));
                    max-height: calc(100vh);
                    min-height: calc(100vh / 4);
                    max-width: 100vw;
                    background-color: black;
                }

                .avd .purewebIframe {
                    position: absolute;
                    width: 100%;
                    height: calc(100vh - 10vh);
                    border: 0;
                    background-color: black;
                }
            }
            @media (orientation: landscape) and (min-aspect-ratio: 18/9)  and (min-width: 740px) {
                .avd .frame-pureweb {
                    z-index: 99999;
                    position: fixed;
                    margin: auto;
                    top: 0;
                    left: 0;
                    height: calc(100vw * (9 / 19.4));
                    width: calc(100vh * (19.7 / 9));
                    max-height: calc(100vh);
                    min-height: calc(100vh / 4);
                    max-width: 100vw;
                    background-color: black;
                }

                .avd .purewebIframe {
                    position: absolute;
                    width: 100%;
                    height: calc(100vh - 11vh);
                    border: 0;
                    background-color: black;
                }
            }
            @media (orientation: landscape) and (min-aspect-ratio: 18/9) and (max-aspect-ratio: 20/9) and (min-width: 740px) {
                .avd .frame-pureweb {
                    z-index: 99999;
                    position: fixed;
                    margin: auto;
                    top: 0;
                    left: 0;
                    height: calc(100vw * (9 / 19.4));
                    width: calc(100vh * (19.7 / 9));
                    max-height: calc(100vh);
                    min-height: calc(100vh / 4);
                    max-width: 100vw;
                    background-color: black;
                }

                .avd .purewebIframe {
                    position: absolute;
                    width: 100%;
                    height: calc(100vh - 20vh);
                    border: 0;
                    background-color: black;
                }
            }
            @media (orientation: landscape) and (max-aspect-ratio: 5/3) {
                .avd .frame-pureweb {
                    position: relative;
                    width: 100%;
                    height: 0;
                    padding-bottom: 56.25%;
                }
            }
            @media (orientation: portrait) {
                .avd .frame-pureweb {
                    position: relative;
                    width: 100%;
                    height: 0;
                    padding-bottom: 56.25%;
                }
            }
        }

        @supports not (-webkit-overflow-scrolling: touch) {
            .avd .frame-pureweb {
                position: relative;
                width: 100%;
                height: 0;
                padding-bottom: 56.25%;
            }
        }
    </style>
@endpush
@section('content')
    <div class="breadcrumbs">
        <div class="breadcrumbs-overlay"></div>
        <div class="page-title">
            <h2>Car Wrap Visualizer</h2>
            <p>Take the guesswork out of choosing a vehicle wrap! Use our Wrap Visualizer Tool to help you decide. With
                over 120 different colors, your creativity and options are endless with Supreme Wrapping Film and
                Conform Chrome Series products.</p>
        </div>
        <ul class="crumb">
            <li><i class="fa fa-home"></i></li>
            <li><a href="{{route('home')}}"><i class="fa fa-angle-double-right"></i> Home</a></li>
            <li><i class="fa fa-angle-double-right"></i></li>
            <li><i class="fa fa-car"></i></li>
            <li><a href="{{route('show.product.overview')}}">
                    <i class="fa fa-angle-double-right"></i> Product (SWF)</a></li>
            <li><a href="#" onclick="goToAnchor()"><i class="fa fa-angle-double-right"></i> Visualizer</a></li>
        </ul>
    </div>

    <div class="avd main-content">
        <div class="frame-pureweb">
            <iframe class="purewebIframe"
                    src="https://reality.pureweb.io/?name=adocv2gnp4e24f&amp;minSize=1080p&amp;maxSize=1080p"
                    width="100%" scrolling="no" frameborder="0" allowfullscreen="{true}"></iframe>
        </div>

        <section class="callto-action bg-color2 padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="call-action">
                            <div class="text">
                                <p><strong class="strong-red">Avery Dennison</strong> doesn't recommend the use
                                    of <b>Conform Chrome</b> for full car wraps or covering vehicle proximity sensors.
                                    Are you interested in wrapping your vehicle?</p>
                            </div>
                            <a href="{{route('show.installers')}}" class="btn btn-dark-red ld ld-breath">FIND AN
                                INSTALLER</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
@push('scripts')
    <script>
        function goToAnchor() {
            $('html,body').animate({scrollTop: $(".avd").offset().top}, 500);
        }
    </script>
@endpush
