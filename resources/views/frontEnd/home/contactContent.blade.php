@extends('frontEnd.master')

@section('title')
    Contact - Green For Peace
@endsection

@section('mainContent')

    <section class="global-page-header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="block">
                        <h2>Contact</h2>
                        <ol class="breadcrumb">
                            <li>
                                <a href="{{url('/')}}">
                                    <i class="ion-ios-index"></i>
                                    Home
                                </a>
                            </li>
                            <li class="active">Contact</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section><!--/#page-header-->


    <!--
    ==================================================
        Contact Section Start
    ================================================== -->
    <section id="contact-section">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="block">
                        <h2 class="subtitle wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".3s">Contact With Us</h2>
                        <p class="subtitle-des wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".5s">
                            Send us email if you have any query about us
                        </p>
                        <div class="contact-form">
                            <form id="contact-form" method="post" action="sendemail.php" role="form">

                                <div class="form-group wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".6s">
                                    <input type="text" placeholder="Your Name" class="form-control" name="name" id="name">
                                </div>

                                <div class="form-group wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".8s">
                                    <input type="email" placeholder="Your Email" class="form-control" name="email" id="email" >
                                </div>

                                <div class="form-group wow fadeInDown" data-wow-duration="500ms" data-wow-delay="1s">
                                    <input type="text" placeholder="Subject" class="form-control" name="subject" id="subject">
                                </div>

                                <div class="form-group wow fadeInDown" data-wow-duration="500ms" data-wow-delay="1.2s">
                                    <textarea rows="6" placeholder="Message" class="form-control" name="message" id="message"></textarea>
                                </div>


                                <div id="submit" class="wow fadeInDown" data-wow-duration="500ms" data-wow-delay="1.4s">
                                    <input type="submit" id="contact-submit" class="btn btn-default btn-send" value="Send Message">
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="map-area">
                        <h2 class="subtitle  wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".3s">Find Us</h2>
                        <p class="subtitle-des wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".5s">
                            You can find us using google map
                        </p>
                        <div class="map">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3687.175768449247!2d91.96881151420678!3d22.460028242755072!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30ad2fca34ae5549%3A0x35c88a37b3e90e97!2sChittagong+University+of+Engineering+%26+Technology!5e0!3m2!1sen!2sbd!4v1495477000773" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row address-details">
                <div class="col-md-3">
                    <div class="address wow fadeInLeft" data-wow-duration="500ms" data-wow-delay=".3s">
                        <i class="ion-ios-location-outline"></i>
                        <h5>Chittagong University of Engineering & Technology</h5>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="address wow fadeInLeft" data-wow-duration="500ms" data-wow-delay=".5s">
                        <i class="ion-ios-location-outline"></i>
                        <h5>Pahartoli, Raozan, Chittagong-4349, Bangladesh</h5>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="email wow fadeInLeft" data-wow-duration="500ms" data-wow-delay=".7s">
                        <i class="ion-ios-email-outline"></i>
                        <p>greenforpeace.cuet@gmail.com</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="phone wow fadeInLeft" data-wow-duration="500ms" data-wow-delay=".9s">
                        <i class="ion-ios-telephone-outline"></i>
                        <p>01521487551</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection


