@extends('layouts.frontend')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-3">
                <h1 class="h3 mt-5 font-weight-normal text-center">Please Register </h1>

                @if(session()->has('message'))
                    <div class="alert alert-{{ session('type') }}">
                        {{ session('message') }}
                    </div>
                @endif
                <form action="{{ route('register') }}" method="post" class="form-signin" style="margin-top: 30px;" >
                    @csrf
                    {{--full name--}}
                    <label for="fullName"style="margin:0;" class="lead">Full Name :</label>
                    <input  name="full_name" type="text" id="fullName" class="form-control" placeholder="Enter your full name" value="{{ old('full_name') }}" required autofocus>
                    @if ($errors->has('full_name'))
                        <div class="alert-danger">{{ $errors->first('full_name') }}</div>
                    @endif

                    {{--email--}}
                    <label for="email"style="margin:0;" class="lead">Email :</label>
                    <input  name="email" type="email" id="email" class="form-control" placeholder="Enter your email" value="{{ old('email') }}" required autofocus>
                    @if ($errors->has('email'))
                        <div class="alert-danger">{{ $errors->first('email') }}</div>
                    @endif

                    {{--phone number--}}
                    <label for="phoneNumber"style="margin:0;" class="lead">Phone Number :</label>
                    <input  name="phone_number" type="text" id="phoneNumber" class="form-control" placeholder="Enter your phone number" value="{{ old('phone_number') }}" required autofocus>
                    @if ($errors->has('phone_number'))
                        <div class="alert-danger">{{ $errors->first('phone_number') }}</div>
                    @endif

                    {{--password--}}
                    <label for="password"style="margin:0;" class="lead">Password :</label>
                    <input  name="password" type="password" id="password" class="form-control" placeholder="Enter your password" required autofocus>
                    @if ($errors->has('password'))
                        <div class="alert-danger">{{ $errors->first('password') }}</div>
                    @endif

                    {{--confirm password--}}
                    <label for="confirmPassword"style="margin:0;" class="lead">Confirm Password :</label>
                    <input  name="password_confirmation" type="password" id="confirmPassword" class="form-control mb-1" placeholder="Enter your confirm password" required autofocus>
                    @if ($errors->has('confirmPassword'))
                        <div class="alert-danger">{{ $errors->first('confirmPassword') }}</div>
                    @endif

                    {{--register button--}}
                    <button class="btn btn-lg btn-primary btn-block" type="submit">Register</button>
                    <p class="mt-5 mb-3 text-muted">&copy; 2017-2019</p>
                </form>
            </div>
        </div>
    </div>
@endsection

{{--
<form class="form-signin col-md-6 offset-3" style="margin-top: 30px;">
    <h1 class="h3 mb-3 font-weight-normal">Please Register in</h1>
    <label for="inputEmail"style="margin:0;" class="lead">Email address:</label>
    <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
    <label for="inputPassword"style="margin:0;" class="lead">Password:</label>
    <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
    <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
    <p class="mt-5 mb-3 text-muted">&copy; 2017-2019</p>
</form>
--}}
