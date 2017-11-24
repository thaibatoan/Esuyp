@extends('layouts.app')

@section('title','Sign in!')

@section('assets_css')
    <link rel="stylesheet" href="{{ asset('css/custom/login.css') }}">
@endsection

@section('content')

<div class="container my-4">
    <div class="row justify-content-center">
        <div class="col-md-10 col-lg-8">
            <div class="card card">
                <div class="card-header">Sign in</div>
                <div class="card-body pb-1">
                    <form class="form-horizontal pb-0" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}" style="vertical-align: top" >
                            <label for="email" class="col-md-4 d-inline-block text-md-right">Email</label>
                            <div class="col-md-6 d-inline-block">
                                <input id="email" type="email" placeholder="eg.. something@domain.com" class="form-control" name="email" value="{{ old('email') }}" required autofocus>
                            </div>
                            <div class="col-md-6 offset-md-4">
                                @if ($errors->has('email'))
                                    <span class="text-small text-danger card-text">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 d-inline-block text-md-right">Password</label>

                            <div class="col-md-6 col-12 d-inline-block">
                                <input id="password" type="password" placeholder="Password" class="form-control" name="password" required>
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
                            <div class="col-md-6 offset-md-4">
                                <span class="text-muted"> Remember me </span>
                                <div class="material-switch pull-right">
                                    <input id="someSwitchOptionPrimary" name="remember" type="checkbox" {{ old('remember') ? 'checked' : '' }}/>
                                    <label for="someSwitchOptionPrimary" class="badge-success"></label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-outline-success text-uppercase">
                                    Sign in
                                </button>
                            </div>
                        </div>
                        <hr class="hr-text mb-0" data-content="OR">
                        <p class="color-primary">Sign in with</p>

                        <p>
                            <a href="{{ url('/auth/facebook') }}" class="btn btn-twitter p-0"><i class="fa fa-facebook-f fa-lg"></i></a>
                            <a href="{{ url('/auth/twitter') }}" class="btn btn-facebook p-0"><i class="fa fa-twitter fa-lg"></i></a>
                        </p>

                        <hr>
                        <p class="text-center">
                            <a href="{{route('register')}}" class="fliper-btn">Create new account?</a>
                        </p>
                    </form>
                </div>
            </div>
            <div class="card-footer text-center bg-danger">
                <a class="btn btn-link color-white p-0" href="{{ route('password.request') }}">
                    Forgot Your Password?
                </a>
            </div>
        </div>
    </div>
</div>
@endsection

{{--@section('outside')--}}
    {{--<div id="myModal" class="modal fade" role="dialog">--}}
        {{--<div class="modal-dialog">--}}
            {{--<div class="flip">--}}
                {{--<div class="card">--}}
                    {{--<div class="face front">--}}
                        {{--<div class="modal-header">--}}
                            {{--<h4 class="modal-title">Sign in</h4>--}}
                            {{--<button type="button" class="close" data-dismiss="modal">&times;</button>--}}
                        {{--</div>--}}
                        {{--<div class="modal-content">--}}
                            {{--<div class="panel panel-default">--}}
                                {{--<form class="form-horizontal" method="POST" action="{{ route('login') }}">--}}
                                    {{--{{ csrf_field() }}--}}
                                    {{--<br>--}}
                                    {{--<h1 class="text-center">LOGO</h1>--}}
                                    {{--<br>--}}

                                    {{--<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }} d-flex justify-content-center" >--}}
                                        {{--<input id="email" type="email" placeholder="Email Address" class="form-control" name="email" value="{{ old('email') }}" required autofocus>--}}

                                        {{--@if ($errors->has('email'))--}}
                                            {{--<span class="help-block">--}}
                                                    {{--<strong>{{ $errors->first('email') }}</strong>--}}
                                                {{--</span>--}}
                                        {{--@endif--}}
                                    {{--</div>--}}
                                    {{--<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }} d-flex justify-content-center">--}}
                                        {{--<input id="password" type="password" placeholder="Password" class="form-control" name="password" required>--}}

                                        {{--@if ($errors->has('password'))--}}
                                            {{--<span class="help-block">--}}
                                                    {{--<strong>{{ $errors->first('password') }}</strong>--}}
                                                {{--</span>--}}
                                        {{--@endif--}}
                                    {{--</div>--}}
                                    {{--<p class="text-right"><a href="">Forgot Password</a></p>--}}
                                    {{--<button class="btn btn-primary btn-block">LOG IN</button>--}}
                                    {{--<hr>--}}
                                    {{--<p class="blue">Sign in with</p>--}}

                                    {{--<p>--}}
                                        {{--<a href="{{ url('/auth/facebook') }}" class="btn btn-twitter p-0"><i class="fa fa-facebook-f fa-lg"></i></a>--}}
                                        {{--<a href="{{ url('/auth/twitter') }}" class="btn btn-facebook p-0"><i class="fa fa-twitter fa-lg"></i></a>--}}
                                    {{--</p>--}}

                                    {{--<hr>--}}
                                    {{--<p class="text-center">--}}
                                        {{--<a href="#" class="fliper-btn">Create new account?</a>--}}
                                    {{--</p>--}}
                                {{--</form>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}

                    {{--<div class="face back">--}}
                        {{--<div class="modal-header">--}}
                            {{--<h4 class="modal-title">Sign up</h4>--}}
                            {{--<button type="button" class="close" data-dismiss="modal">&times;</button>--}}
                        {{--</div>--}}
                        {{--<div class="modal-content">--}}
                            {{--<div class="panel panel-default">--}}
                                {{--<form class="form-horizontal">--}}
                                    {{--<br>--}}
                                    {{--<h1 class="text-center">LOGO</h1>--}}
                                    {{--<br>--}}
                                    {{--<label>Basic Information</label>--}}
                                    {{--<input class="form-control" placeholder="Fullname"/>--}}
                                    {{--<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }} d-flex justify-content-center" >--}}
                                        {{--<input id="email" type="email" placeholder="Email Address" class="form-control" name="email" value="{{ old('email') }}" required autofocus>--}}

                                        {{--@if ($errors->has('email'))--}}
                                            {{--<span class="help-block">--}}
                                                    {{--<strong>{{ $errors->first('email') }}</strong>--}}
                                                {{--</span>--}}
                                        {{--@endif--}}
                                    {{--</div>--}}
                                    {{--<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }} d-flex justify-content-center">--}}
                                        {{--<input id="password" type="password" placeholder="Password" class="form-control" name="password" required>--}}

                                        {{--@if ($errors->has('password'))--}}
                                            {{--<span class="help-block">--}}
                                                    {{--<strong>{{ $errors->first('password') }}</strong>--}}
                                                {{--</span>--}}
                                        {{--@endif--}}
                                    {{--</div>--}}
                                    {{--<input class="form-control" placeholder="Mobile Number"/>--}}
                                    {{--<button class="btn btn-primary btn-block">SIGN UP</button>--}}
                                    {{--<p class="text-center">--}}
                                        {{--<a href="#" class="fliper-btn">Already have an account?</a>--}}
                                    {{--</p>--}}
                                {{--</form>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div><!-- /.container -->--}}
    {{--</div>--}}
    {{--<div id="page-mask"></div>--}}
{{--@endsection--}}
