@extends('frontEnd.master')

@section('mainContent')

    <section id="team">
        <div class="container" style="background-color: maroon">
            <div class="row"><br><br>
                <h2 class="subtitle text-center" style="color: white">Our Honorable Alumnis</h2>
                @foreach($alumnis as $alumni)
                <div class="col-md-3 responsive" style="overflow: hidden" data-slick='{"slidesToShow": 4, "slidesToScroll": 4, autoplay: true, autoplaySpeed: 2000,}'>
                    <div class="team-member wow fadeInLeft" data-wow-duration="500ms" data-wow-delay=".5s">
                        <div class="team-img">
                            <img height="100" width="100"  src="{{asset('public/alumni/'.$alumni->photo)}}">
                        </div>
                        <h3 class="team_name" style="color: white">{{$alumni->name}}</h3>
                        <p class="team_name" style="color: white">{{$alumni->student_id}}</p>
                        <p class="team_name" style="color: white">Blood Group: {{$alumni->blood_group}}</p>
                        <p class="team_name" style="color: white">Phone no: {{$alumni->phone}}</p>
                        <p class="team_name" style="color: white">Email: {{$alumni->email}}</p>
                        <p class="team_name" style="color: white">Address: {{$alumni->address}}</p>
                        <p class="team_designation" style="color: white">Committee {{$alumni->committee_session}}, Green For Peace</p>
                        <p class="social-icons">
                            {{--<a href="https://www.facebook.com/jamal.ahamed" class="facebook" target="_blank"><i class="ion-social-facebook-outline"></i></a>--}}
                            {{--<a href="#" target="_blank"><i class="ion-social-twitter-outline"></i></a>--}}
                            {{--<a href="https://www.linkedin.com/in/dr-jamal-uddin-ahamed-phd-27183421/" target="_blank"><i class="ion-social-linkedin-outline"></i></a>--}}

                        </p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <section id="team">
        <div class="container" style="background-color: maroon">
            <div class="row"><br><br>
                <h2 class="subtitle text-center" style="color: white">Our Present Committee Members</h2>
                @foreach($committees as $committee)
                    <div class="col-md-3 responsive" style="overflow: hidden">
                        <div class="team-member wow fadeInLeft" data-wow-duration="500ms" data-wow-delay=".5s">
                            <div class="team-img">
                                <img height="100" width="100"  src="{{asset('public/alumni/'.$committee->photo)}}">
                            </div>
                            <h3 class="team_name" style="color: white">{{$committee->name}}</h3>
                            <p class="team_name" style="color: white">{{$committee->student_id}}</p>
                            <p class="team_name" style="color: white">Blood Group: {{$committee->blood_group}}</p>
                            <p class="team_name" style="color: white">Phone no: {{$committee->phone}}</p>
                            <p class="team_name" style="color: white">Email: {{$committee->email}}</p>
                            <p class="team_name" style="color: white">Address: {{$committee->address}}</p>
                            <p class="team_designation" style="color: white">Committee {{$committee->committee_session}}, Green For Peace</p>
                            <p class="social-icons">
                                {{--<a href="https://www.facebook.com/jamal.ahamed" class="facebook" target="_blank"><i class="ion-social-facebook-outline"></i></a>--}}
                                {{--<a href="#" target="_blank"><i class="ion-social-twitter-outline"></i></a>--}}
                                {{--<a href="https://www.linkedin.com/in/dr-jamal-uddin-ahamed-phd-27183421/" target="_blank"><i class="ion-social-linkedin-outline"></i></a>--}}

                            </p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section id="team">
        <div class="container" style="background-color: maroon">
            <div class="row"><br><br>
                <h2 class="subtitle text-center" style="color: white">Our Present Executive Members</h2>
                @foreach($members as $member)
                    <div class="col-md-3 responsive" style="overflow: hidden">
                        <div class="team-member wow fadeInLeft" data-wow-duration="500ms" data-wow-delay=".5s">
                            <div class="team-img">
                                <img height="100" width="100"  src="{{asset('public/alumni/'.$member->photo)}}">
                            </div>
                            <h3 class="team_name" style="color: white">{{$member->name}}</h3>
                            <p class="team_name" style="color: white">{{$member->student_id}}</p>
                            <p class="team_name" style="color: white">Blood Group: {{$member->blood_group}}</p>
                            <p class="team_name" style="color: white">Phone no: {{$member->phone}}</p>
                            <p class="team_name" style="color: white">Email: {{$member->email}}</p>
                            <p class="team_name" style="color: white">Address: {{$member->address}}</p>
                            <p class="team_designation" style="color: white">Committee {{$member->committee_session}}, Green For Peace</p>
                            <p class="social-icons">
                                {{--<a href="https://www.facebook.com/jamal.ahamed" class="facebook" target="_blank"><i class="ion-social-facebook-outline"></i></a>--}}
                                {{--<a href="#" target="_blank"><i class="ion-social-twitter-outline"></i></a>--}}
                                {{--<a href="https://www.linkedin.com/in/dr-jamal-uddin-ahamed-phd-27183421/" target="_blank"><i class="ion-social-linkedin-outline"></i></a>--}}

                            </p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
<script>
    $('.responsive').slick({
        dots: true,
        infinite: false,
        speed: 300,
        slidesToShow: 4,
        slidesToScroll: 4,
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3,
                    infinite: true,
                    dots: true
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
            // You can unslick at a given breakpoint now by adding:
            // settings: "unslick"
            // instead of a settings object
        ]
    });
</script>
@endsection


@section('title')
    Gallery - Green for Peace
@endsection


