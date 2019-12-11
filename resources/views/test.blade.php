{{--@extends('layouts.app')--}}

{{--@section('content')--}}
        <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Colgis BD') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('public/js/app.js') }}"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('public/css/app.css') }}" rel="stylesheet">
    <script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
</head>
<body>
<div id="app">
    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                {{ config('app.name', 'Colgis BD') }}
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto">

                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
                    <!-- Authentication Links -->
                    @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>

    <main class="py-4">

        <div class="container">
            <div class="row justify-content-center">
                {{--<div class="col-md-8">--}}
                {{--<div class="card">--}}
                {{--<div class="card-header">Dashboard</div>--}}

                {{--<div class="card-body">--}}
                {{--@if (session('status'))--}}
                {{--<div class="alert alert-success" role="alert">--}}
                {{--{{ session('status') }}--}}
                {{--</div>--}}
                {{--@endif--}}

                {{--</div>--}}
                {{--</div>--}}

                {{--</div>--}}
                <div class="row">
                    <div class="container">
                        <div class="col-md-12">
                            <div class="dropdown">
                                <select id="myselect" onclick="myFunction()" class="form-control">
                                    <option>Select Table</option>
                                    @foreach($tables as $table)
                                        @foreach($table as $key => $value)
                                            <option class="table" value="{{$value}}">{{$value}}</option>
                                        @endforeach
                                    @endforeach
                                </select>


                                {{--<button class="btn btn-secondary dropdown-toggle" type="button" id="myselect" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}
                                {{--Select Table--}}
                                {{--</button>--}}
                                {{--<div class="dropdown-menu" aria-labelledby="dropdownMenu2">--}}
                                {{--@foreach($tables as $table)--}}
                                {{--@foreach($table as $key => $value)--}}
                                {{--<button class="dropdown-item" id="myBtn" type="button" value="{{$value}}">{{$value}}</button>--}}
                                {{--@endforeach--}}
                                {{--@endforeach--}}
                                {{--</div>--}}
                            </div>
                        </div>
                    </div>
                </div>

                <table id="tab1">
                    <thead>
                    <th id="columns"></th>
                    </thead>
                    <tbody>
                    <tr>
                        <td></td>
                    </tr>
                    </tbody>
                </table>


                <br />
                <div class="form-group">
                    <select name="state" id="state" class="form-control input-lg dynamic" data-dependent="city">
                        <option value="">Select Table</option>
                    </select>
                </div>
                <br />
                <div class="form-group">
                    <select name="city" id="city" class="form-control input-lg">
                        <option value="">Select Column</option>
                    </select>
                </div>
                {{ csrf_field() }}
                <br />
                <br />
            </div><br />

            <br />
        </div>


            </div>
        </div>
    </main>
</div>

<script type="text/javascript" src="{{asset('public/js/jquery-3.4.1.min.js')}}"></script>
<script>
    $(document).ready(function(){

        $('.dynamic').change(function(){
            if($(this).val() != '')
            {
                var select = $(this).attr("id");
                var value = $(this).val();
                var dependent = $(this).data('dependent');
                var _token = $('input[name="_token"]').val();
                $.ajax({
                    url:"{{ route('dynamicdependent.fetch') }}",
                    method:"POST",
                    data:{select:select, value:value, _token:_token, dependent:dependent},
                    success:function(result)
                    {
                        $('#'+dependent).html(result);
                    }

                })
            }
        });

        $('#country').change(function(){
            $('#state').val('');
            $('#city').val('');
        });

        $('#state').change(function(){
            $('#city').val('');
        });


    });

    $(function () {
        $("#dropselect").change(function () {
            let $value;
            if (($(this).val() === "24Hours") || ($(this).val() === "15Days")) {
                $value = $(this).val();
                $.ajax({
                    type: 'GET',
                    url: route("test"),
                    data: {'dropselect': $value},
                    dataType: 'json',
                    success: function (data) {
                        $('#listdetails').html(data);
                        // console.log(data);
                    }
                });

            }
            else
            {
                alert('Select Status');
            }
        });
    });

</script>

</body>
</html>

{{--@endsection--}}
