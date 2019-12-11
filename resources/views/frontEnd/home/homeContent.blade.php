@extends('frontEnd.master')

@section('mainContent')

    <div class="row" style="margin-right: 0;padding: 0;height: 50px;margin-top: 100px;float: bottom;">
        <div class="container">
            <div class="col-xs-12 col-md-12">
                <div class="col-xs-2" style="margin-right: 0px;">
                    <p class="news" style="background-color: #2e3192;height: 25px;padding-right:-10px;"><b style="color:white;margin-top:10px;margin-left: 90px;text-align: center;"><i>NEWS Update</i></b></p>
                </div>
                <div class="col-xs-10" style="background-color: #e1e1e1;">
                    <marquee>
                        <span><b>Lorem ipsum dolor sit amet, consectetur adipiscing elit.Sed blandit massa vel mauris sollicitudin dignissim.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></span>
                        <span><b>Lorem ipsum dolor sit amet, consectetur adipiscing elit.Sed blandit massa vel mauris sollicitudin dignissim.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></span>
                    </marquee>
                </div>
            </div>
        </div>
    </div>


<section id="hero-area" >
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="block wow fadeInUp" data-wow-delay=".3s">
                    <!-- Slider -->
                    <section class="cd-intro">
                        <h1 class="wow fadeInUp animated cd-headline slide" data-wow-delay=".4s" >
                            <span style="color: forestgreen;">Green For Peace</span><br>
                            <span>We work for</span><br>
                            <span class="cd-words-wrapper">
                                    <b class="is-visible">ENVIRONMENT</b>
                                    <b>SOCIETY</b>
                                    <b>HELPLESS PEOPLE</b>
                                </span>
                        </h1>
                    </section> <!-- cd-intro -->
                    <!-- /.slider -->
                    <h2 class="wow fadeInUp animated" data-wow-delay=".6s" >

                    </h2>
                    <a class="btn-lines dark light wow fadeInUp animated smooth-scroll btn btn-default btn-green" data-wow-delay=".9s" href="{{url('/about')}}" data-section="#works" >View Works</a>

                </div>
            </div>
        </div>
    </div>
</section><!--/#main-slider-->
<!--
==================================================
Slider Section Start
================================================== -->
<section id="about">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-6">
                <div class="block wow fadeInLeft" data-wow-delay=".3s" data-wow-duration="500ms">
                    <h2>
                        ABOUT US
                    </h2>
                    <p>
                        Green for Peace is a non political organization of Chittagong University of Engineering and Technology Campus.
                        It was established on 6th june 1998. This is the oldest organization of CUET campus which is doing its activity constantly.
                        It is a non profitable organization of the students of CUET. It is mainly performing social activities like Tree Plantation, Blood Donation, Fish Farming, Vactination, Campus Cleaning,
                        Distribution of warm cloths among poor people in winter, Fruite Festival, Pohela Baisakh, Independent Day, Mother Language Day, Victory Day & Versity Day Celebration etc.
                    </p>

                </div>

            </div>
            <div class="col-md-6 col-sm-6">
                <div class="block wow fadeInRight" data-wow-delay=".3s" data-wow-duration="500ms">
                    <br><br><img src="{{ asset('public/front/images/about/about.jpg')}}" alt="">
                </div>
            </div>
        </div>
    </div>
</section> <!-- /#about -->
<!--
==================================================
Portfolio Section Start
================================================== -->
<section id="works" class="works">
    <div class="container">
        <div class="section-heading">
            <h1 class="title wow fadeInDown" data-wow-delay=".3s">Latest Works</h1>
            <p class="wow fadeInDown" data-wow-delay=".5s">

            </p>
        </div>
        <div class="row slider demo-slider">
            <div class="col-sm-4 col-xs-12">
                <figure class="wow fadeInLeft animated portfolio-item" data-wow-duration="500ms" data-wow-delay="0ms">
                    <div class="img-wrapper">
                        <img src="{{ asset('public/front/images/portfolio/item-1.jpg')}}" class="img-responsive" alt="this is a title" >
                        <div class="overlay">
                            <div class="buttons">
                                <a rel="gallery" class="fancybox" href="{{ asset('public/front/images/portfolio/item-1.jpg')}}">VIEW</a>
                                <<!--<a target="_blank" href="single-portfolio.html">Details</a>-->
                            </div>
                        </div>
                    </div>
                    <figcaption>
                        <h4>
                            <a href="#">
                                Cleaning Bangladesh
                            </a>
                        </h4>
                        <p>
                            Cleaning Bangladesh along with "Poriborton Chai on 5th February"
                        </p>
                    </figcaption>
                </figure>
            </div>
            <div class="col-sm-4 col-xs-12">
                <figure class="wow fadeInLeft animated" data-wow-duration="500ms" data-wow-delay="300ms">
                    <div class="img-wrapper">
                        <img src="{{ asset('public/front/images/portfolio/item-2.jpg')}}" class="img-responsive" alt="this is a title" >
                        <div class="overlay">
                            <div class="buttons">
                                <a rel="gallery" class="fancybox" href="{{ asset('public/front/images/portfolio/item-2.jpg')}}">VIEW</a>
                                <<!--<a target="_blank" href="single-portfolio.html">Details</a>-->
                            </div>
                        </div>
                    </div>
                    <figcaption>
                        <h4>
                            <a href="#">
                                Warm Cloth Distribution
                            </a>
                        </h4>
                        <p>
                            Warm cloths were distributed among poor people in the last winter on 10 January
                        </p>
                    </figcaption>
                </figure>
            </div>
            <div class="col-sm-4 col-xs-12">
                <figure class="wow fadeInLeft animated" data-wow-duration="500ms" data-wow-delay="300ms">
                    <div class="img-wrapper">
                        <img src="{{ asset('public/front/images/portfolio/item-3.jpg')}}" class="img-responsive" alt="" >
                        <div class="overlay">
                            <div class="buttons">
                                <a rel="gallery" class="fancybox" href="{{ asset('public/front/images/portfolio/item-3.jpg')}}">VIEW</a>
                                <<!--<a target="_blank" href="single-portfolio.html">Details</a>-->
                            </div>
                        </div>
                    </div>
                    <figcaption>
                        <h4>
                            <a href="#">
                                Seminar
                            </a>
                        </h4>
                        <p>
                            Seminar on "Green Building Opportunity in Banglsadesh" on 18 March
                        </p>
                    </figcaption>
                </figure>
            </div>
            <div class="col-sm-4 col-xs-12">
                <figure class="wow fadeInLeft animated" data-wow-duration="500ms" data-wow-delay="300ms">
                    <div class="img-wrapper">
                        <img src="{{ asset('public/front/images/portfolio/tour.jpg')}}" class="img-responsive" alt="this is a title" >
                        <div class="overlay">
                            <div class="buttons">
                                <a rel="gallery" class="fancybox" href="{{ asset('public/front/images/portfolio/tour.jpg')}}">VIEW</a>
                                <<!--<a target="_blank" href="single-portfolio.html">Details</a>-->
                            </div>
                        </div>
                    </div>
                    <figcaption>
                        <h4>
                            <a href="#">
                                Green Tour
                            </a>
                        </h4>
                        <p>
                            A day long tour held at Rangamati on 10 March 2017
                        </p>
                    </figcaption>
                </figure>
            </div>
            <div class="col-sm-4 col-xs-12">
                <figure class="wow fadeInLeft animated" data-wow-duration="500ms" data-wow-delay="300ms">
                    <div class="img-wrapper">
                        <img src="{{ asset('public/front/images/portfolio/photography.jpg')}}" class="img-responsive" alt="this is a title" >
                        <div class="overlay">
                            <div class="buttons">
                                <a rel="gallery" class="fancybox" href="{{ asset('public/front/images/portfolio/photography.jpg')}}">VIEW</a>
                                <<!--<a target="_blank" href="single-portfolio.html">Details</a>-->
                            </div>
                        </div>
                    </div>
                    <figcaption>
                        <h4>
                            <a href="#">
                                Green Day Photography Exibition
                            </a>
                        </h4>
                        <p>
                            A photography exibition on environment arranged on "E-Cube 2nd Greeb Day '17" held on 25 May 2017
                        </p>
                    </figcaption>
                </figure>
            </div>
            <div class="col-sm-4 col-xs-12">
                <figure class="wow fadeInLeft animated" data-wow-duration="500ms" data-wow-delay="300ms">
                    <div class="img-wrapper">
                        <img src="{{ asset('public/front/images/portfolio/muktibrikkho.jpg')}}" class="img-responsive" alt="this is a title" >
                        <div class="overlay">
                            <div class="buttons">
                                <a rel="gallery" class="fancybox" href="{{ asset('public/front/images/portfolio/muktibrikkho.jpg')}}">VIEW</a>
                                <<!--<a target="_blank" href="single-portfolio.html">Details</a>-->
                            </div>
                        </div>
                    </div>
                    <figcaption>
                        <h4>
                            <a href="#">
                                "Mukti Brikkho" named tree plantation
                            </a>
                        </h4>
                        <p>
                            A tree plantation called "Mukti Brikkho" arranged by UGC on "E-Cube 2nd Greeb Day '17" held on 25 May 2017
                        </p>
                    </figcaption>
                </figure>
            </div>
            <div class="col-sm-4 col-xs-12">
                <figure class="wow fadeInLeft animated" data-wow-duration="500ms" data-wow-delay="300ms">
                    <div class="img-wrapper">
                        <img src="{{ asset('public/front/images/portfolio/item-6.jpg')}}" class="img-responsive" alt="this is a title" >
                        <div class="overlay">
                            <div class="buttons">
                                <a rel="gallery" class="fancybox" href="{{ asset('public/front/images/portfolio/item-6.jpg')}}">VIEW</a>
                                <<!--<a target="_blank" href="single-portfolio.html">Details</a>-->
                            </div>
                        </div>
                    </div>
                    <figcaption>
                        <h4>
                            <a href="#">
                                Victory Day Celebration
                            </a>
                        </h4>
                        <p>
                            Independent day of Bangladesh selebrated by "Green for Peace" held on 26 March 2017
                        </p>
                    </figcaption>
                </figure>
            </div>
        </div>
    </div>
</section> <!-- #works -->

@endsection


@section('title')
    Home - Green for Peace
@endsection

