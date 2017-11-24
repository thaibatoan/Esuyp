@extends('layouts.app')

@section('title','Sign up!')


@section('content')
    <div class="container p-0 bg-white">
        <section class="hero hero-page gray-bg padding-small">
            <div class="container">
                <div class="row d-flex">
                    <div class="col-lg-9 order-2 order-lg-1">
                        <h1>About us</h1>
                    </div>
                    <ul class="breadcrumb d-flex justify-content-start justify-content-lg-center col-lg-3 text-right order-1 order-lg-2">
                        <li class="breadcrumb-item">
                            <a href="{{ route('index') }}">Home</a>
                        </li>
                        <li class="breadcrumb-item active">About us</li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- about us-->
        <section class="p-5 bg-white">
            <div class="container">
                <div class="row about-item">
                    <div class="col-lg-4 col-sm-3 d-none d-sm-flex align-items-center">
                        <div class="about-icon mr-lg-0">
                            <i class="fa fa-user-o fa-question-circle"> </i>
                        </div>
                    </div>
                    <div class="col-lg-8 col-sm-9">
                        <h2>Who we are</h2>
                        <p class="text-muted">s Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus pulvinar faucibus neque, nec rhoncus nunc ultrices sit amet.</p>
                    </div>
                </div>
                <div class="row about-item">
                    <div class="col-lg-8 col-sm-9">
                        <h2>We care</h2>
                        <p class="text-muted"> Curabitur ac sagittis neque, vel egestas est. Aenean elementum, erat at aliquet hendrerit, elit nisl posuere tortor, id suscipit diam dui sed nisi. Morbi sollicitudin massa vel tortor consequat, eget semper nisl fringilla.</p>
                    </div>
                    <div class="col-lg-4 col-sm-3 d-none d-sm-flex align-items-center">
                        <div class="about-icon ml-lg-0">
                            <i class="icon icon-heart fa fa-heart-o"></i>
                        </div>
                    </div>
                </div>
                <div class="row about-item">
                    <div class="col-lg-4 col-sm-3 d-none d-sm-flex align-items-center">
                        <div class="about-icon mr-lg-0">
                            <i class="fa-thumbs-o-up fa"> </i>
                        </div>
                    </div>
                    <div class="col-lg-8 col-sm-9">
                        <h2>Quality Content</h2>
                        <p class="text-muted"> Maecenas at hendrerit odio. Sed in mi eu quam suscipit bibendum quis at orci. Pellentesque fermentum nisl purus, et iaculis lectus pharetra sit amet.</p>
                    </div>
                </div>
                <div class="row about-item">
                    <div class="col-lg-8 col-sm-9">
                        <h2>Your security and privacy matters</h2>
                        <p class="text-muted">As am hastily invited settled at limited civilly fortune me. Really spring in extent an by. Judge but built party world. Of so am he remember although required. Bachelor unpacked be advanced at. Confined in declared marianne is vicinity.</p>
                    </div>
                    <div class="col-lg-4 col-sm-3 d-none d-sm-flex align-items-center">
                        <div class="about-icon ml-lg-0">
                            <i class="fa fa-shield"></i>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="p-5">
            <div class="container">
                <header>
                    <h2 class="h1">Our team</h2>
                    <p class="lead text-muted">This is the lead paragraph of the article. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget.</p>
                </header>
                <div class="row team">
                    <div class="col-sm-4 col-12">
                        <div class="team-member">
                            <div class="image">
                                <img src="{{asset('images/person-placeholder.png')}}" alt="" class="img-fluid rounded-circle">
                            </div>
                            <h3 class="h5"><a href="http://hub.ondrejsvestka.cz/1-0/{{ route('about') }}">First</a></h3>
                            <p class="role">founder</p>
                            <div class="social">
                                <a href="{{ route('about') }}" class="external facebook" title="Visit on facebook"><i class="fa fa-facebook"></i></a>
                                <a href="{{ route('about') }}" class="external twitter" title="Follow on twitter"><i class="fa fa-twitter"></i></a>
                                <a href="{{ route('about') }}" class="email" title="Send an email"><i class="fa fa-envelope"></i></a>
                            </div>
                            <div class="text">
                                <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
                            </div>
                        </div>
                        <!-- /.team-member            -->
                    </div>
                    <div class="col-sm-4 col-12">
                        <div class="team-member">
                            <div class="image">
                                <img src="{{asset('images/person-placeholder.png')}}" alt="" class="img-fluid rounded-circle">
                            </div>
                            <h3 class="h5"><a href="{{ route('about') }}">Second</a></h3>
                            <p class="role">CTO</p>
                            <div class="social">
                                <a href="{{ route('about') }}" class="external facebook" title="Visit on facebook"><i class="fa fa-facebook"></i></a>
                                <a href="{{ route('about') }}" class="external twitter" title="Follow on twitter"><i class="fa fa-twitter"></i></a>
                                <a href="{{ route('about') }}" class="email" title="Send an email"><i class="fa fa-envelope"></i></a>
                            </div>
                            <div class="text">
                                <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
                            </div>
                        </div>
                        <!-- /.team-member            -->
                    </div>
                    <div class="col-sm-4 col-12">
                        <div class="team-member">
                            <div class="image">
                                <img src="{{asset('images/person-placeholder.png')}}" alt="" class="img-fluid rounded-circle">
                            </div>
                            <h3 class="h5"><a href="{{ route('about') }}">Third</a></h3>
                            <p class="role">Team Leader</p>
                            <div class="social">
                                <a href="{{ route('about') }}" class="external facebook" title="Visit on facebook"><i class="fa fa-facebook"></i></a>
                                <a href="{{ route('about') }}" class="external twitter" title="Follow on twitter"><i class="fa fa-twitter"></i></a>
                                <a href="{{ route('about') }}" class="email" title="Send an email"><i class="fa fa-envelope"></i></a>
                            </div>
                            <div class="text">
                                <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
                            </div>
                        </div>
                        <!-- /.team-member            -->
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
