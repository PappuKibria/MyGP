@extends('frontEnd.master')

@section('mainContent')

<section class="global-page-header">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="block">
                    <h2>Gallery</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="{{url('/')}}">
                                <i class="ion-ios-index"></i>
                                Home
                            </a>
                        </li>
                        <li class="active">Gallery</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</section><!--/#Page header-->
<section id="gallery" class="gallery">
    <div class="container">
        <div class="row">
            <div class="col-sm-4 col-xs-12">
                <figure class="wow fadeInLeft animated portfolio-item animated" data-wow-duration="500ms" data-wow-delay="0ms" style="visibility: visible; animation-duration: 300ms; -webkit-animation-duration: 300ms; animation-delay: 0ms; -webkit-animation-delay: 0ms; animation-name: fadeInLeft; -webkit-animation-name: fadeInLeft;">
                    <div class="img-wrapper">
                        <img src="{{ asset('public/front/images/portfolio/item-1.jpg')}}" class="img-responsive" alt="this is a title">
                        <div class="overlay">
                            <div class="buttons">
                                <a rel="gallery" class="fancybox" href="{{ asset('public/front/images/portfolio/item-1.jpg')}}">Zoom</a>
                            </div>
                        </div>
                    </div>
                </figure>
            </div>
            <div class="col-sm-4 col-xs-12">
                <figure class="wow fadeInLeft animated animated" data-wow-duration="500ms" data-wow-delay="300ms" style="visibility: visible; animation-duration: 300ms; -webkit-animation-duration: 300ms; animation-delay: 300ms; -webkit-animation-delay: 300ms; animation-name: fadeInLeft; -webkit-animation-name: fadeInLeft;">
                    <div class="img-wrapper">
                        <img src="{{ asset('public/front/images/portfolio/item-2.jpg')}}" class="img-responsive" alt="">
                        <div class="overlay">
                            <div class="buttons">
                                <a rel="gallery" class="fancybox" href="{{ asset('public/front/images/portfolio/item-2.jpg')}}">Zoom</a>
                            </div>
                        </div>
                    </div>
                </figure>
            </div>
            <div class="col-sm-4 col-xs-12">
                <figure class="wow fadeInLeft animated animated" data-wow-duration="500ms" data-wow-delay="500ms" style="visibility: visible; animation-duration: 300ms; -webkit-animation-duration: 300ms; animation-delay: 300ms; -webkit-animation-delay: 300ms; animation-name: fadeInLeft; -webkit-animation-name: fadeInLeft;">
                    <div class="img-wrapper">
                        <img src="{{ asset('public/front/images/portfolio/item-3.jpg')}}" class="img-responsive" alt="">
                        <div class="overlay">
                            <div class="buttons">
                                <a rel="gallery" class="fancybox" href="{{ asset('public/front/images/portfolio/item-3.jpg')}}'">Zoom</a>
                            </div>
                        </div>
                    </div>
                </figure>
            </div>
            <div class="col-sm-4 col-xs-12">
                <figure class="wow fadeInLeft animated" data-wow-duration="500ms" data-wow-delay="700ms" style="visibility: hidden; animation-duration: 300ms; -webkit-animation-duration: 300ms; animation-delay: 600ms; -webkit-animation-delay: 600ms; animation-name: none; -webkit-animation-name: none;">
                    <div class="img-wrapper">
                        <img src="{{ asset('public/front/images/portfolio/item-4.jpg')}}" class="img-responsive" alt="">
                        <div class="overlay">
                            <div class="buttons">
                                <a rel="gallery" class="fancybox" href="{{ asset('public/front/images/portfolio/item-4.jpg')}}">Zoom</a>
                            </div>
                        </div>
                    </div>
                </figure>
            </div>
            <div class="col-sm-4 col-xs-12">
                <figure class="wow fadeInLeft animated" data-wow-duration="500ms" data-wow-delay="900ms" style="visibility: hidden; animation-duration: 300ms; -webkit-animation-duration: 300ms; animation-delay: 900ms; -webkit-animation-delay: 900ms; animation-name: none; -webkit-animation-name: none;">
                    <div class="img-wrapper">
                        <img src="{{ asset('public/front/images/portfolio/item-5.jpg')}}" class="img-responsive" alt="">
                        <div class="overlay">
                            <div class="buttons">
                                <a rel="gallery" class="fancybox" href="{{ asset('public/front/images/portfolio/item-5.jpg')}}">Zoom</a>
                            </div>
                        </div>
                    </div>
                </figure>
            </div>
            <div class="col-sm-4 col-xs-12">
                <figure class="wow fadeInLeft animated" data-wow-duration="500ms" data-wow-delay="1100ms" style="visibility: hidden; animation-duration: 300ms; -webkit-animation-duration: 300ms; animation-delay: 1200ms; -webkit-animation-delay: 1200ms; animation-name: none; -webkit-animation-name: none;">
                    <div class="img-wrapper">
                        <img src="{{ asset('public/front/images/portfolio/item-6.jpg')}}" class="img-responsive" alt="">
                        <div class="overlay">
                            <div class="buttons">
                                <a rel="gallery" class="fancybox" href="{{ asset('public/front/images/portfolio/item-6.jpg')}}">Zoom</a>
                            </div>
                        </div>
                    </div>
                </figure>
            </div>
            <div class="col-sm-4 col-xs-12">
                <figure class="wow fadeInLeft animated" data-wow-duration="500ms" data-wow-delay="1100ms" style="visibility: hidden; animation-duration: 300ms; -webkit-animation-duration: 300ms; animation-delay: 1200ms; -webkit-animation-delay: 1200ms; animation-name: none; -webkit-animation-name: none;">
                    <div class="img-wrapper">
                        <img src="{{ asset('public/front/images/portfolio/rally.jpg')}}" class="img-responsive" alt="">
                        <div class="overlay">
                            <div class="buttons">
                                <a rel="gallery" class="fancybox" href="{{ asset('public/front/images/portfolio/rally.jpg')}}">Zoom</a>
                            </div>
                        </div>
                    </div>
                </figure>
            </div>
            <div class="col-sm-4 col-xs-12">
                <figure class="wow fadeInLeft animated" data-wow-duration="500ms" data-wow-delay="1100ms" style="visibility: hidden; animation-duration: 300ms; -webkit-animation-duration: 300ms; animation-delay: 1200ms; -webkit-animation-delay: 1200ms; animation-name: none; -webkit-animation-name: none;">
                    <div class="img-wrapper">
                        <img src="{{ asset('public/front/images/portfolio/muktibrikkho.jpg')}}" style="height:240px"  class="img-responsive" alt="">
                        <div class="overlay">
                            <div class="buttons">
                                <a rel="gallery" class="fancybox" href="{{ asset('public/front/images/portfolio/muktibrikkho.jpg')}}">Zoom</a>
                            </div>
                        </div>
                    </div>
                </figure>
            </div>
            <div class="col-sm-4 col-xs-12">
                <figure class="wow fadeInLeft animated" data-wow-duration="500ms" data-wow-delay="1100ms" style="visibility: hidden; animation-duration: 300ms; -webkit-animation-duration: 300ms; animation-delay: 1200ms; -webkit-animation-delay: 1200ms; animation-name: none; -webkit-animation-name: none;">
                    <div class="img-wrapper">
                        <img src="{{ asset('public/front/images/portfolio/mukti.jpg')}}" style="height:240px" class="img-responsive" alt="">
                        <div class="overlay">
                            <div class="buttons">
                                <a rel="gallery" class="fancybox" href="{{ asset('public/front/images/portfolio/mukti.jpg')}}">Zoom</a>
                            </div>
                        </div>
                    </div>
                </figure>
            </div>
            <div class="col-sm-4 col-xs-12">
                <figure class="wow fadeInLeft animated" data-wow-duration="500ms" data-wow-delay="1100ms" style="visibility: hidden; animation-duration: 300ms; -webkit-animation-duration: 300ms; animation-delay: 1200ms; -webkit-animation-delay: 1200ms; animation-name: none; -webkit-animation-name: none;">
                    <div class="img-wrapper">
                        <img src="{{ asset('public/front/images/portfolio/tree.jpg')}}" style="height:240px" class="img-responsive" alt="">
                        <div class="overlay">
                            <div class="buttons">
                                <a rel="gallery" class="fancybox" href="{{ asset('public/front/images/portfolio/tree.jpg')}}">Zoom</a>
                            </div>
                        </div>
                    </div>
                </figure>
            </div>
            <div class="col-sm-4 col-xs-12">
                <figure class="wow fadeInLeft animated" data-wow-duration="500ms" data-wow-delay="1100ms" style="visibility: hidden; animation-duration: 300ms; -webkit-animation-duration: 300ms; animation-delay: 1200ms; -webkit-animation-delay: 1200ms; animation-name: none; -webkit-animation-name: none;">
                    <div class="img-wrapper">
                        <img src="{{ asset('public/front/images/portfolio/tour.jpg')}}" class="img-responsive" alt="">
                        <div class="overlay">
                            <div class="buttons">
                                <a rel="gallery" class="fancybox" href="{{ asset('public/front/images/portfolio/tour.jpg')}}">Zoom</a>
                            </div>
                        </div>
                    </div>
                </figure>
            </div>
            <div class="col-sm-4 col-xs-12">
                <figure class="wow fadeInLeft animated" data-wow-duration="500ms" data-wow-delay="1100ms" style="visibility: hidden; animation-duration: 300ms; -webkit-animation-duration: 300ms; animation-delay: 1200ms; -webkit-animation-delay: 1200ms; animation-name: none; -webkit-animation-name: none;">
                    <div class="img-wrapper">
                        <img src="{{ asset('public/front/images/portfolio/photography.jpg')}}" style="height:240px" class="img-responsive" alt="">
                        <div class="overlay">
                            <div class="buttons">
                                <a rel="gallery" class="fancybox" href="{{ asset('public/front/images/portfolio/photography.jpg')}}">Zoom</a>
                            </div>
                        </div>
                    </div>
                </figure>
            </div>
            <div class="col-sm-4 col-xs-12">
                <figure class="wow fadeInLeft animated" data-wow-duration="500ms" data-wow-delay="1100ms" style="visibility: hidden; animation-duration: 300ms; -webkit-animation-duration: 300ms; animation-delay: 1200ms; -webkit-animation-delay: 1200ms; animation-name: none; -webkit-animation-name: none;">
                    <div class="img-wrapper">
                        <img src="{{ asset('public/front/images/portfolio/tree.jpg')}}" style="height:240px" class="img-responsive" alt="">
                        <div class="overlay">
                            <div class="buttons">
                                <a rel="gallery" class="fancybox" href="{{ asset('public/front/images/portfolio/tree.jpg')}}">Zoom</a>
                            </div>
                        </div>
                    </div>
                </figure>
            </div>
            <div class="col-sm-4 col-xs-12">
                <figure class="wow fadeInLeft animated" data-wow-duration="500ms" data-wow-delay="1100ms" style="visibility: hidden; animation-duration: 300ms; -webkit-animation-duration: 300ms; animation-delay: 1200ms; -webkit-animation-delay: 1200ms; animation-name: none; -webkit-animation-name: none;">
                    <div class="img-wrapper">
                        <img src="{{ asset('public/front/images/portfolio/tour2.jpg')}}" style="height:240px" class="img-responsive" alt="">
                        <div class="overlay">
                            <div class="buttons">
                                <a rel="gallery" class="fancybox" href="{{ asset('public/front/images/portfolio/tour2.jpg')}}">Zoom</a>
                            </div>
                        </div>
                    </div>
                </figure>
            </div>
            <div class="col-sm-4 col-xs-12">
                <figure class="wow fadeInLeft animated" data-wow-duration="500ms" data-wow-delay="1100ms" style="visibility: hidden; animation-duration: 300ms; -webkit-animation-duration: 300ms; animation-delay: 1200ms; -webkit-animation-delay: 1200ms; animation-name: none; -webkit-animation-name: none;">
                    <div class="img-wrapper">
                        <img src="{{ asset('public/front/images/portfolio/seminar2.jpg')}}" class="img-responsive" alt="">
                        <div class="overlay">
                            <div class="buttons">
                                <a rel="gallery" class="fancybox" href="{{ asset('public/front/images/portfolio/seminar2.jpg')}}">Zoom</a>
                            </div>
                        </div>
                    </div>
                </figure>
            </div>
            <div class="col-sm-4 col-xs-12">
                <figure class="wow fadeInLeft animated" data-wow-duration="500ms" data-wow-delay="1100ms" style="visibility: hidden; animation-duration: 300ms; -webkit-animation-duration: 300ms; animation-delay: 1200ms; -webkit-animation-delay: 1200ms; animation-name: none; -webkit-animation-name: none;">
                    <div class="img-wrapper">
                        <img src="{{ asset('public/front/images/portfolio/seminar3.jpg')}}" class="img-responsive" alt="">
                        <div class="overlay">
                            <div class="buttons">
                                <a rel="gallery" class="fancybox" href="{{ asset('public/front/images/portfolio/seminar3.jpg')}}">Zoom</a>
                            </div>
                        </div>
                    </div>
                </figure>
            </div>
        </div>
    </div>
</section>


@endsection


@section('title')
    Gallery - Green for Peace
@endsection
