@extends('frontEnd.master')

@section('mainContent')


    <section class="global-page-header">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="block">
                    <h2>About Our Organization</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="{{url('/')}}">
                                <i class="ion-ios-index"></i>
                                Home
                            </a>
                        </li>
                        <li class="active">About</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</section>

<!--
==================================================
    Company Description Section Start
================================================== -->
<section class="company-description">
    <div class="container">
        <div class="row">
            <div class="col-md-6 wow fadeInLeft" data-wow-delay=".3s" >
                <img src="{{ asset('public/front/images/about/about-company.jpg')}}" alt="" class="img-responsive">
            </div>
            <div class="col-md-6">
                <div class="block">
                    <h3 class="subtitle wow fadeInUp" data-wow-delay=".3s" data-wow-duration="500ms">Why We are Different</h3>
                    <p  class="wow fadeInUp" data-wow-delay=".5s" data-wow-duration="500ms">
                        Green for Peace is a non political organization of Chittagong University of Engineering and Technology Campus. It established on 6th june 1998. This is the oldest organization of CUET campus which doing its activity constantly. It is a non profitable organization of the students of CUET. It is mainly performing social activities like Tree Plantation, Blood Donation, Fish Farming, Vactination, Campus Cleaning, Distribution of warm cloths among poor people in winter, Fruite Festival, Pohela Baisakh, Independent Day, Mother Language Day, Victory Day & Versity Day Celebration etc.
                    </p>
                    <p  class="wow fadeInUp" data-wow-delay=".7s" data-wow-duration="500ms">

                    </p>

                </div>
            </div>
        </div>
    </div>
</section>


<!--
==================================================
    Company Feature Section Start
================================================== -->
<section class="about-feature clearfix">
    <div class="container-fluid">
        <div class="row">
            <div class="block about-feature-1 wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".3s">
                <h2>
                    Our Vision
                </h2>
                <p>
                    To encorage people about green technology, to make awareness about climate change & global warming, Encourage people for donation blood and environment cleaning & Welfare activities, Help the helpless people and children, Betterment the environment, Awareness & Student friendly activies in CUET Campus
                </p>
            </div>
            <div class="block about-feature-2 wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".5s">
                <h2 class="item_title">
                    Our Activities
                </h2>
                <p>
                    Tree plantation, Blood donation, Warm cloth distribution, Fund rising for helpless people,Creating awareness, Campus cleaning, Arrange workshop and seminar on environment friendly technology, Fruit festival, Environment olympiad, Fish farming, Photography exibition, National day celebration & Vaccination
                </p>
            </div>
            <div class="block about-feature-3 wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".7s">
                <h2 class="item_title">
                    Our Future Plan
                </h2>
                <p>
                    Arranging seminars and workshop on green technologies for tomorrow's world, Campaign about side effectsof misuse of antibiotics, Creating awareness about environment change, wildlife preservation, adverse effct of cutting hills & biodiversity, Facilated under previliged children, Awarenss about dangerous disease
                </p>
            </div>
        </div>
    </div>
</section>


<section id="team">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="team-member wow fadeInLeft" data-wow-duration="500ms" data-wow-delay=".3s">
                    <div class="team-img">
                        <img src="{{ asset('public/front/images/team/sikto.JPG')}}" class="team-pic img-responsive" alt="" style="height: 200px; width: 180px;">
                    </div>
                    <h3 class="team_name">Shaadat UJ Jaman</h3>
                    <p class="team_designation">President</p>
                    <p class="team_text">Green for Peace, CUET</p>
                    <p class="team_text">Contact: 01736793711</p>
                    <p class="team_text"></p>
                    <p class="social-icons">
                        <a href="https://www.facebook.com/gsk.pappu" class="facebook" target="_blank"><i class="ion-social-facebook-outline"></i></a>
                        <a href="https://twitter.com/KibriaPappu" target="_blank"><i class="ion-social-twitter-outline"></i></a>
                        <a href="https://www.linkedin.com/in/pappu-kibria-505807a3/" target="_blank"><i class="ion-social-linkedin-outline"></i></a>

                    </p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="team-member wow fadeInLeft" data-wow-duration="500ms" data-wow-delay=".5s">
                    <div class="team-img" >
                        <img src="{{ asset('public/front/images/team/pritom.JPG')}}" class="team-pic img-responsive" alt="" style="height: 200px; width: 180px;align-self: center">
                    </div>
                    <h3 class="team_name">Pritom Kundu</h3>
                    <p class="team_designation">Vice President</p>
                    <p class="team_text">Green for Peace, CUET</p>
                    <p class="team_text">Contact: 01680261555</p>
                    <p class="team_text"></p>
                    <p class="social-icons">
                        <a href="https://www.facebook.com/jamal.ahamed" class="facebook" target="_blank"><i class="ion-social-facebook-outline"></i></a>
                        <a href="#" target="_blank"><i class="ion-social-twitter-outline"></i></a>
                        <a href="#" target="_blank"><i class="ion-social-linkedin-outline"></i></a>

                    </p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="team-member wow fadeInLeft" data-wow-duration="500ms" data-wow-delay=".3s">
                    <div class="team-img">
                        <img src="{{ asset('public/front/images/team/shahriar.jpg')}}" class="team-pic img-responsive" alt="" style="height: 200px; width: 180px;">
                    </div>
                    <h3 class="team_name">Rafatul Haque Shahriar</h3>
                    <p class="team_designation">General Secretary</p>
                    <p class="team_text">Green for Peace, CUET</p>
                    <p class="team_text">Contact: 01689654077</p>
                    <p class="team_text"></p>
                    <p class="social-icons">
                        <a href="https://www.facebook.com/gsk.pappu" class="facebook" target="_blank"><i class="ion-social-facebook-outline"></i></a>
                        <a href="https://twitter.com/KibriaPappu" target="_blank"><i class="ion-social-twitter-outline"></i></a>
                        <a href="https://www.linkedin.com/in/pappu-kibria-505807a3/" target="_blank"><i class="ion-social-linkedin-outline"></i></a>

                    </p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="team-member wow fadeInLeft" data-wow-duration="500ms" data-wow-delay=".3s">
                    <div class="team-img">
                        <img src="{{ asset('public/front/images/team/sudipto.jpg')}}" class="team-pic img-responsive" alt="" style="height: 200px; width: 180px;">
                    </div>
                    <h3 class="team_name">Sudipto Vhoumik</h3>
                    <p class="team_designation">Education & Research Secretary</p>
                    <p class="team_text">Green for Peace, CUET</p>
                    <p class="team_text">Contact: 01733575779</p>
                    <p class="team_text"></p>
                    <p class="social-icons">
                        <a href="https://www.facebook.com/gsk.pappu" class="facebook" target="_blank"><i class="ion-social-facebook-outline"></i></a>
                        <a href="https://twitter.com/KibriaPappu" target="_blank"><i class="ion-social-twitter-outline"></i></a>
                        <a href="https://www.linkedin.com/in/pappu-kibria-505807a3/" target="_blank"><i class="ion-social-linkedin-outline"></i></a>

                    </p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="team-member wow fadeInLeft" data-wow-duration="500ms" data-wow-delay=".3s">
                    <div class="team-img">
                        <img src="{{ asset('public/front/images/team/rifat.JPG')}}" class="team-pic img-responsive" alt="" style="height: 200px; width: 180px;">
                    </div>
                    <h3 class="team_name">Rifat Rahman</h3>
                    <p class="team_designation">Publication Secretary</p>
                    <p class="team_text">Green for Peace, CUET</p>
                    <p class="team_text">Contact: 01876604174</p>
                    <p class="team_text"></p>
                    <p class="social-icons">
                        <a href="https://www.facebook.com/gsk.pappu" class="facebook" target="_blank"><i class="ion-social-facebook-outline"></i></a>
                        <a href="https://twitter.com/KibriaPappu" target="_blank"><i class="ion-social-twitter-outline"></i></a>
                        <a href="https://www.linkedin.com/in/pappu-kibria-505807a3/" target="_blank"><i class="ion-social-linkedin-outline"></i></a>

                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<!--


<!--
==================================================
    Team Section Start
================================================== -->
<section id="team">
    <div class="container" style="background-color: maroon">
        <div class="row">
            <h2 class="subtitle text-center" style="color: white">Our Honorable Advisors</h2>
            <div class="col-md-3">
                <div class="team-member wow fadeInLeft" data-wow-duration="500ms" data-wow-delay=".5s">
                    <div class="team-img">
                        <img src="{{ asset('public/front/images/team/jamal.jpg')}}" class="team-pic img-responsive" alt="" style="height: 200px; width: 180px;">
                    </div>
                    <h3 class="team_name" style="color: white">Dr. Jamal Uddin Ahamed</h3>
                    <p class="team_designation" style="color: white">Chief Advisor, Green For Peace</p>
                    <p class="team_text" style="color: white">Professor, Dept. of Mechanical Engineering</p>
                    <p class="social-icons">
                        <a href="https://www.facebook.com/jamal.ahamed" class="facebook" target="_blank"><i class="ion-social-facebook-outline"></i></a>
                        <a href="#" target="_blank"><i class="ion-social-twitter-outline"></i></a>
                        <a href="https://www.linkedin.com/in/dr-jamal-uddin-ahamed-phd-27183421/" target="_blank"><i class="ion-social-linkedin-outline"></i></a>

                    </p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="team-member wow fadeInLeft" data-wow-duration="500ms" data-wow-delay=".3s">
                    <div class="team-img">
                        <img src="{{ asset('public/front/images/team/Reaz.bmp')}}" class="team-pic img-responsive" alt="" style="height: 200px; width: 180px;">
                    </div>
                    <h3 class="team_name" style="color: white">Dr. Reaz Akter Mullic</h3>
                    <p class="team_designation" style="color: white">Advisor, Green For Peace</p>
                    <p class="team_text" style="color: white">Professor, Department of Civil Engineering</p>
                    <p class="social-icons">
                        <a href="https://www.facebook.com/reazmullick?ref=br_rs" class="facebook" target="_blank"><i class="ion-social-facebook-outline"></i></a>
                        <a href="#" target="_blank"><i class="ion-social-twitter-outline"></i></a>
                        <a href="#" target="_blank"><i class="ion-social-linkedin-outline"></i></a>

                    </p>
                </div>
            </div>


            <div class="col-md-3">
                <div class="team-member wow fadeInLeft" data-wow-duration="500ms" data-wow-delay=".9s">
                    <div class="team-img">
                        <img src="{{ asset('public/front/images/team/aysha.jpg')}}" class="team-pic img-responsive" alt="" style="height: 200px; width: 180px;">
                    </div>
                    <h3 class="team_name" style="color: white">Dr. Aysha Akter </h3>
                    <p class="team_designation" style="color: white">Advisor, Green For Peace</p>
                    <p class="team_text" style="color: white">Professor, Department of Civil Engineering</p>
                    <p class="social-icons">
                        <a href="https://www.facebook.com/aysha.akter" class="facebook" target="_blank"><i class="ion-social-facebook-outline"></i></a>
                        <a href="#" target="_blank"><i class="ion-social-twitter-outline"></i></a>
                        <a href="https://www.linkedin.com/in/aysha-akter-92a4861b/" target="_blank"><i class="ion-social-linkedin-outline"></i></a>

                    </p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="team-member wow fadeInLeft" data-wow-duration="500ms" data-wow-delay=".7s">
                    <div class="team-img">
                        <img src="{{ asset('public/front/images/team/arefin.jpg')}}" class="team-pic img-responsive" alt="" style="height: 200px; width: 180px;">
                    </div>
                    <h3 class="team_name" style="color: white">Dr. Mohammad Shamsul Arefin</h3>
                    <p class="team_designation" style="color: white">Advisor, Green For Peace</p>
                    <p class="team_text" style="color: white">Professor, Department of CSE</p>
                    <p class="social-icons">
                        <a href="https://www.facebook.com/msarefin1" class="facebook" target="_blank"><i class="ion-social-facebook-outline"></i></a>
                        <a href="#" target="_blank"><i class="ion-social-twitter-outline"></i></a>
                        <a href="https://www.linkedin.com/in/mohammad-shamsul-arefin-5a855179/?lipi=urn%3Ali%3Apage%3Ad_flagship3_search_srp_people%3BhqbQ4%2FykTiGvyBYzic5e0w%3D%3D&licu=urn%3Ali%3Acontrol%3Ad_flagship3_search_srp_people-search_srp_result" target="_blank"><i class="ion-social-linkedin-outline"></i></a>

                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<!--

<!--
==================================================
    Team Section Start
================================================== -->
<section id="team">
    <div class="container">
        <div class="row">
            <h2 class="subtitle text-center">About Developer</h2>
            <div class="col-md-3"></div>
            <div class="col-md-3"><div class="team-img" >
                    <img src="{{ asset('public/front/images/team/kibria.jpg')}}" class="team-pic img-responsive" alt="" style="height: 200px; width: 180px;margin-top:35px;">
                </div></div>
            <div class="col-md-3" >
                <div class="team-member wow fadeInLeft" data-wow-duration="500ms" data-wow-delay=".3s" style="align-self: center">

                    <h3 class="team_name">G. S. Kibria</h3>
                    <p class="team_designation">Web Developer</p>
                    <p class="team_text">Contact: 01521487551</p>
                    <p class="team_text">Email: kibriapappu@gmail.com</p>
                    <p class="team_text">Deptartment of CSE, CUET</p>
                    <p class="team_text">Website: http://www.pappukibria.com</p>
                    <p class="social-icons">
                        <a href="https://www.facebook.com/reazmullick?ref=br_rs" class="facebook" target="_blank"><i class="ion-social-facebook-outline"></i></a>
                        <a href="https://twitter.com/KibriaPappu" target="_blank"><i class="ion-social-twitter-outline"></i></a>
                        <a href="https://www.linkedin.com/in/pappu-kibria-505807a3/" target="_blank"><i class="ion-social-linkedin-outline"></i></a>

                    </p>
                </div>
            </div>

            <div class="col-md-3" style="align-items: center"></div>
        </div>
    </div>
</section>



@endsection


@section('title')
    Gallery - Green for Peace
@endsection