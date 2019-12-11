@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Alumni Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="student-id" class="col-md-4 col-form-label text-md-right">{{ __('Student ID') }}</label>

                            <div class="col-md-6">
                                <input id="student-id" type="text" class="form-control @error('student_id') is-invalid @enderror" name="student_id" value="{{ old('student_id') }}" required autocomplete="student_id" autofocus>

                                @error('student_id')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="bloodGroup" class="col-md-4 col-form-label text-md-right">{{ __('Blood Group') }}</label>

                            <div class="col-md-6">
                                {{--<input id="student-id" type="text" class="form-control @error('student_id') is-invalid @enderror" name="student_id" value="{{ old('student_id') }}" required autocomplete="student_id" autofocus>--}}
                                <select name="blood_group" id="bloodGroup" class="form-control">
                                    <option class="dropdown-item" type="button" value="0">Select Blood Group</option>
                                    <option class="dropdown-item" type="button" value="AB+">AB+</option>
                                    <option class="dropdown-item" type="button" value="AB-">AB-</option>
                                    <option class="dropdown-item" type="button" value="A+">A+</option>
                                    <option class="dropdown-item" type="button" value="A-">A-</option>
                                    <option class="dropdown-item" type="button" value="B+">B+</option>
                                    <option class="dropdown-item" type="button" value="B-">B-</option>
                                    <option class="dropdown-item" type="button" value="O+">O+</option>
                                    <option class="dropdown-item" type="button" value="O-">O-</option>
                                </select>

                                @error('blood_group')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="CommitteeSession" class="col-md-4 col-form-label text-md-right">{{ __('Committee Session') }}</label>

                            <div class="col-md-6">
                                {{--<input id="student-id" type="text" class="form-control @error('student_id') is-invalid @enderror" name="student_id" value="{{ old('student_id') }}" required autocomplete="student_id" autofocus>--}}
                                <select name="committee_session" id="CommitteeSession" class="form-control">
                                        <option class="dropdown-item" type="button" value="0">Committee Session</option>
                                        <option class="dropdown-item" type="button" value="1998-2002">1998-2002</option>
                                        <option class="dropdown-item" type="button" value="2002-2003">2002-2003</option>
                                        <option class="dropdown-item" type="button" value="2003-2005">2003-2005</option>
                                        <option class="dropdown-item" type="button" value="2005-2007">2005-2007</option>
                                        <option class="dropdown-item" type="button" value="2007-2009">2007-2009</option>
                                        <option class="dropdown-item" type="button" value="2009-2010">2009-2010</option>
                                        <option class="dropdown-item" type="button" value="2010-2011">2010-2011</option>
                                        <option class="dropdown-item" type="button" value="2011-2012">2011-2012</option>
                                        <option class="dropdown-item" type="button" value="2012-2013">2012-2013</option>
                                        <option class="dropdown-item" type="button" value="2013-2014">2013-2014</option>
                                        <option class="dropdown-item" type="button" value="2014-2015">2014-2015</option>
                                        <option class="dropdown-item" type="button" value="2015-2016">2015-2016</option>
                                        <option class="dropdown-item" type="button" value="2016-2017">2016-2017</option>
                                        <option class="dropdown-item" type="button" value="2017-2018">2017-2018</option>
                                        <option class="dropdown-item" type="button" value="2018-2019">2018-2019</option>
                                        <option class="dropdown-item" type="button" value="2019-2020">2019-2020</option>
                                        <option class="dropdown-item" type="button" value="2020-2021">2020-2021</option>
                                        <option class="dropdown-item" type="button" value="2021-2022">2021-2022</option>
                                        <option class="dropdown-item" type="button" value="2022-2023">2022-2023</option>
                                        <option class="dropdown-item" type="button" value="2023-2024">2023-2024</option>
                                        <option class="dropdown-item" type="button" value="2024-2025">2024-2025</option>
                                </select>

                                @error('committee_session')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="phone" class="col-md-4 col-form-label text-md-right">{{ __('Contact Number') }}</label>

                            <div class="col-md-6">
                                <input id="phone" type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required>

                                @error('phone')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="address" class="col-md-4 col-form-label text-md-right">{{ __('Address') }}</label>

                            <div class="col-md-6">
                                <textarea id="address" type="address" rows="5" class="form-control @error('email') is-invalid @enderror" name="address" required></textarea>

                                @error('address')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="photo" class="col-md-4 col-form-label text-md-right">{{ __('Upload Photo') }}</label>

                            <div class="col-md-6">
                                <input id="photo" type="file" accept="image/*" class="@error('photo') is-invalid @enderror" name="photo" required>

                                @error('photo')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="registrationType" class="col-md-4 col-form-label text-md-right">{{ __('Blood Group') }}</label>

                            <div class="col-md-6">
                                {{--<input id="student-id" type="text" class="form-control @error('student_id') is-invalid @enderror" name="student_id" value="{{ old('student_id') }}" required autocomplete="student_id" autofocus>--}}
                                <select name="reg_type" id="registrationType" class="form-control">
                                    <option class="dropdown-item" type="button" value="0">Select Registration Type</option>
                                    <option class="dropdown-item" type="button" value="1">Executive Member</option>
                                    <option class="dropdown-item" type="button" value="2">Committee Member</option>
                                    <option class="dropdown-item" type="button" value="3">Alumni</option>
                                </select>

                                @error('reg_type')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        {{--<div class="form-group row">--}}
                            {{--<label for="activityCheck" class="col-md-4 col-form-label text-md-right">{{ __('Activity') }}</label>--}}
                            {{--<div class="col-md-6" style="margin-left: 20px;margin-top: 5px;">--}}
                                {{--<input class="form-check-input" name="is_active" type="checkbox" value="1" id="activityCheck">--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
