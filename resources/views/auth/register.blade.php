@extends('layouts.app')

@section('title','Sign up!')

@section('assets_css')
    <link rel="stylesheet" href="{{ asset('css/custom/login.css') }}">
@endsection

@section('content')
<div class="container my-4">
    <div class="row justify-content-center">
        <div class="col-md-10 col-lg-8">
            <div class="card">
                <div class="card-header">Register</div>

                <div class="card-body pb-1">
                    <form class="form-horizontal  pb-0" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="username" class="col-md-4 d-inline-block text-md-right">Username</label>
                            <div class="col-md-6 d-inline-block">
                                <input id="username" type="text" class="form-control" name="username" value="{{ old('username') }}" required autofocus>
                            </div>

                            <div class="col-md-6 offset-md-4">
                                @if ($errors->has('username'))
                                    <span class="help-block">
                                            <strong>{{ $errors->first('username') }}</strong>
                                        </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 d-inline-block text-md-right">E-Mail Address</label>
                            <div class="col-md-6 d-inline-block">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>
                            </div>

                            <div class="col-md-6 offset-md-4">
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 d-inline-block text-md-right">Password</label>
                            <div class="col-md-6 d-inline-block">
                                <input id="password" type="password" class="form-control" name="password" required>
                            </div>

                            <div class="col-md-6 offset-md-4">
                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 d-inline-block text-md-right">Confirm Password</label>
                            <div class="col-md-6 d-inline-block">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-outline-success text-uppercase">
                                    Sign up
                                </button>
                            </div>
                        </div>
                        <hr class="hr-text mb-0" data-content="OR">
                        <p class="color-primary">Sign up with</p>

                        <p>
                            <a href="{{ url('/auth/facebook') }}" class="btn btn-twitter p-0"><i class="fa fa-facebook-f fa-lg"></i></a>
                            <a href="{{ url('/auth/twitter') }}" class="btn btn-facebook p-0"><i class="fa fa-twitter fa-lg"></i></a>
                        </p>

                        <hr>
                        <p class="text-center">
                            <a href="{{route('login')}}" class="fliper-btn">Already have an account?</a>
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
