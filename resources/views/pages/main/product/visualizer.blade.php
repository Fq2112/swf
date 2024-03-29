@extends('layouts.mst')
@section('title', 'Product Visualizer | '.env('APP_TITLE'))
@push('styles')
    <style>
        .breadcrumbs {
            background-image: url({{asset('images/slider/visualizer6.jpg')}});
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
    </div>

    <section class="block-section-4">
        <div class="container avd">
            <div class="frame-pureweb">
                <iframe data-aos="fade-down" class="purewebIframe"
                        src="https://reality.pureweb.io/?name=adocv2gnp4e24f&minSize=1080p&maxSize=1080p"
                        width="100%" scrolling="no" frameborder="0" allowfullscreen="{true}"></iframe>
            </div>
        </div>
    </section>

    <section class="callto-action bg-color2 padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="call-action">
                        <div data-aos="fade-down" class="text">
                            <p align="justify"><strong class="strong-red">Avery Dennison</strong> doesn't recommend the
                                use of <b>Conform Chrome</b> for full car wraps or covering vehicle proximity sensors.
                                Are you interested in wrapping your vehicle?</p>
                        </div>
                        <a data-aos="fade-down" href="{{route('show.installers')}}" class="btn btn-dark-red">
                            FIND AN INSTALLER</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@push('scripts')
    <script>
        var $img = $(".breadcrumbs"), images = ['visualizer1.jpg', 'visualizer2.jpg', 'visualizer3.jpg', 'visualizer4.jpg'],
            index = 0, maxImages = images.length - 1, timer = setInterval(function () {
                var currentImage = images[index];
                index = (index == maxImages) ? 0 : ++index;
                $img.fadeOut("slow", function () {
                    $img.css("background-image", 'url({{asset('images/slider')}}/' + currentImage + ')');
                    $img.fadeIn("slow");
                });
            }, 5000);

        function goToAnchor() {
            $('html,body').animate({scrollTop: $(".avd").offset().top}, 500);
        }
    </script>
@endpush
