@extends('master')

@section('content')
    <section id="main-slider" class="fixed-height">

        <!-- MAIN SLIDER TITLE OUTTER WRAPPER -->
        <div class="slide-title-outter-wrapper">

            <!-- MAIN SLIDER TITLE INNER WRAPPER -->
            <div class="slide-title-inner-wrapper">

                <!-- TITLE 1  -->
                <div class="slide-title align-middle">

                    <div class="container">
                        <div class="row">
                            <div class="col-md-offset-2 col-md-8">

                                <div class="page-title animation fadeInUp animated">
                                    <h1>GIFT REGISTRY</h1>

                                    <div class="heart-divider">
                                        <span class="white-line"></span>
                                        <i class="de-icon-heart pink-heart"></i>
                                        <i class="de-icon-heart white-heart"></i>
                                        <span class="white-line"></span>
                                    </div>

                                    <p>If you were thinking of giving a gift to help us on our way, <br>
                                        A gift of money in a card would really make our day!</p>

                                    <div class="heart-divider">
                                        <span class="white-line"></span>
                                        <i class="de-icon-heart pink-heart"></i>
                                        <i class="de-icon-heart white-heart"></i>
                                        <span class="white-line"></span>
                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>

                </div>

            </div><!-- END of MAIN SLIDER TITLE INNER WRAPPER -->

        </div> <!-- END of MAIN SLIDER TITLE OUTTER WRAPPER -->

        <!-- MAIN SLIDER IMAGES -->
        <div class="slides">
            <!-- SLIDE IMAGE -->
            <div data-stellar-ratio="0.5" class="slide-image" style="background-image:url(/images/photos/honeymoon.jpg);">
            </div>

            <div class="slide-overlay"> </div>
        </div>	<!-- END of MAIN SLIDER IMAGES -->

    </section>

{{--
    Please find within this poem information just for you with some rules and regulations that we both insit you do

    the first one is vital if you are to be our guest to eat drink and be merry or do your very best

    the second is an order so don't bring two left feet as when the vening comes around you must dance to the beat

    the third rule can be broken we realyl do not mind but if you choose to follow it thank you for being kind

    weve been together for a few years and have a lovelt home so there are lots of items that we already own

    so if your thoughts where on a git your precense will suffice but if you really feel the need then money would be nice

    the choice is reall up to you and we would like to say we hope you come enoj yourselfs and have a lovely day
--}}

    @include('home.rsvp')
@endsection