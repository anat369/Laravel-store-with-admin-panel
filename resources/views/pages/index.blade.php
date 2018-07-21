@extends('layout')

@section('content')
    <!-- Slider Container -->
    <div class="slider-wrapper">


        <!-- START REVOLUTION SLIDER 3.1 rev5 fullwidth mode -->

        <div class="tp-banner-container">
            <div class="shop-slider" >
                <ul>

                    <!-- SLIDE  -->
                    <li data-transition="slidehorizontal" data-slotamount="1" data-masterspeed="1000" data-fstransition="fade" data-fsmasterspeed="1000" data-fsslotamount="7" data-saveperformance="off"  data-title="Следующий слайд">
                        <!-- MAIN IMAGE -->
                        <img src="/images/slider/slider1.jpg"  alt="slidebg1"  data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat">
                    </li>

                    <li data-transition="slidehorizontal" data-slotamount="1" data-masterspeed="1000" data-fstransition="fade" data-fsmasterspeed="1000" data-fsslotamount="7" data-saveperformance="off"  data-title="Следующий слайд">
                        <!-- MAIN IMAGE -->
                        <img src="/images/slider/slider2.jpg"  alt="slidebg1"  data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat">

                    </li>

                    <li data-transition="slidehorizontal" data-slotamount="1" data-masterspeed="1000" data-fstransition="fade" data-fsmasterspeed="1000" data-fsslotamount="7" data-saveperformance="off"  data-title="Следующий слайд">
                        <!-- MAIN IMAGE -->
                        <img src="/images/slider/slider3.jpg"  alt="slidebg1"  data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat">
                    </li>

                    <li data-transition="slidehorizontal" data-slotamount="1" data-masterspeed="1000" data-fstransition="fade" data-fsmasterspeed="1000" data-fsslotamount="7" data-saveperformance="off"  data-title="Следующий слайд">
                        <!-- MAIN IMAGE -->
                        <img src="/images/slider/slider4.jpg"  alt="slidebg1"  data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat">
                    </li>

                    <li data-transition="slidehorizontal" data-slotamount="1" data-masterspeed="1000" data-fstransition="fade" data-fsmasterspeed="1000" data-fsslotamount="7" data-saveperformance="off"  data-title="Следующий слайд">
                        <!-- MAIN IMAGE -->
                        <img src="/images/slider/slider5.jpg"  alt="slidebg1"  data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat">

                    </li>

                    <div class="tp-bannertimer tp-bottom"></div>

                </ul>
            </div>
        </div>


        <!-- END REVOLUTION SLIDER -->

    </div>
    <!-- /Slider Container -->

    <!-- Main Container -->
    <div class="main-wrapper">

        <br>

        <!-- Container -->
        <div class="container">

            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <h3 class="fancy-title text-center animation fadeInUp"><span>Новые изделия</span></h3>
                    <div class="white-space space-small"></div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <!-- Carousel -->
                    <div class="carousel-box" >
                        <div class="carousel carousel-nav-out carousel-simple" data-carousel-autoplay="false" data-carousel-items="4" data-carousel-nav="true" data-carousel-pagination="false"  data-carousel-speed="1000">

                            @foreach($items as $item)


                            <div class="carousel-item">

                                @include('pages.block-item')

                            </div>
                            @endforeach

                        </div>
                    </div>
                    <!-- /Carousel -->
                    <div class="white-space space-big"></div>
                </div>
            </div>

        </div>
        <!-- /Container -->

        <!-- Parallax -->
        <div class="parallax parallax-background16" data-stellar-background-ratio="0.3">
            <div class="bg-overlay bg-color-default"></div>
            <div class="white-space space-big"></div>
            <div class="container">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="iconbox vertical panel panel-light animation zoomIn">
                            <div class="panel-body">
                                <span class="livicon" data-op="1" data-hc="#fff" data-c="#fff" data-s="64" data-n="truck"></span>
                                <div class="iconbox-content">
                                    <h4 class="color-white">Бесплатная доставка</h4>
                                    <div class="center-block">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="white-space space-xsmall"></div>
                    </div>
                    <div class="col-sm-4">
                        <div class="iconbox vertical panel panel-light animation zoomIn">
                            <div class="panel-body">
                                <span class="livicon" data-op="1" data-hc="#fff" data-c="#fff" data-s="64" data-n="piggybank"></span>
                                <div class="iconbox-content">
                                    <h4 class="color-white">Никаких переплат</h4>
                                    <div class="center-block">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="white-space space-xsmall"></div>
                    </div>
                    <div class="col-sm-4">
                        <div class="iconbox vertical panel panel-light animation zoomIn">
                            <div class="panel-body">
                                <span class="livicon" data-op="1" data-hc="#fff" data-c="#fff" data-s="64" data-n="phone"></span>
                                <div class="iconbox-content">
                                    <h4 class="color-white">Всегда на связи</h4>
                                    <div class="center-block">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="white-space space-xsmall"></div>
                    </div>
                </div>
            </div>
            <div class="white-space space-medium"></div>
        </div>
        <!-- /Parallax -->

        <!-- Full Size -->
        <div class="fullsize bg-color-dark">
            <div class="white-space space-big"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <h3 class="fancy-title text-center animation fadeInUp"><span>Рекомендованные изделия</span></h3>
                        <p class="lead text-center"></p>
                        <div class="white-space space-small"></div>
                    </div>
                </div>
            </div>
            <!-- Carousel -->
            <div class="carousel-box" >
                <div class="carousel carousel-nav-out carousel-simple" data-carousel-autoplay="6000" data-carousel-items="5" data-carousel-nav="true" data-carousel-pagination="false"  data-carousel-speed="1000">
                    @foreach($popularItems as $item)

                    <div class="carousel-item animation fadeInLeft">

                        @include('pages.block-item')

                    </div>

                        @endforeach
                </div>
            </div>
            <!-- /Carousel -->
        </div>
        <!-- /Full Size -->


    </div>
    <!-- /Main Container -->

@endsection