<header id="top-bar" class="navbar-fixed-top animated-header">
    <div class="container">
        <div class="navbar-header">
            <!-- responsive nav button -->
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <!-- /responsive nav button -->

            <!-- logo -->
            <div class="navbar-brand">
                <a href="{{url('/')}}" >
                    <img src="{{ asset('public/front/images/gplogo.jpg')}}" style="height: 100px;" alt="">
                </a>
            </div>
            <!-- /logo -->
        </div>
        <!-- main menu -->
        <nav class="collapse navbar-collapse navbar-right" role="navigation">
            <div class="main-menu">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="{{route('home')}}" >Home</a>
                    </li>
                    <li><a href="{{route('about')}}">About</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Events<span class="caret"></span></a>
                        <div class="dropdown-menu">
                            <ul>
                                <li><a href="{{url('event/list')}}">Events</a></li>
                                <li><a href="{{url('event/create')}}">Create New Event</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Blog<span class="caret"></span></a>
                        <div class="dropdown-menu">
                            <ul>
                                <li><a href="{{url('blog/list')}}">Blogs</a></li>
                                <li><a href="{{url('blog/create')}}">Create New Blog</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Blood Bank <span class="caret"></span></a>
                        <div class="dropdown-menu">
                            <ul>
                                <li><a href="{{url('bloodbank/list')}}">Blood Bank</a></li>
                                <li><a href="{{url('bloodbank/join')}}">Join Blood Bank</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Members<span class="caret"></span></a>
                        <div class="dropdown-menu">
                            <ul>
                                <li><a href="{{url('member/list')}}">Members</a></li>
                                <li><a href="{{url('alumniList')}}">Alumni</a></li>
                                <li><a href="{{route('login')}}">Alumni Login</a></li>
                            </ul>
                        </div>
                    </li>
                    <li><a href="{{route('gallery')}}">Gallery</a></li>
                    <li><a href="{{route('contact')}}">Contact</a></li>
                    <li><a href="{{route('admin.home')}}">Admin</a></li>

                </ul>
            </div>
        </nav>
        <!-- /main nav -->
    </div>
</header>
