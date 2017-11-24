<!DOCTYPE html> 
<html class=" js no-touch csstransforms3d csstransitions" lang="en">
    <head> 
        <meta http-equiv="content-type" content="text/html; charset=UTF-8"> 
        <meta charset="utf-8"> 
        <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
        <title>@yield('title')</title>
        <meta name="description" content=""> 
        <meta name="viewport" content="width=device-width, initial-scale=1"> 
        <meta name="robots" content="all,follow"> 
        <!-- Bootstrap CSS-->         
        <link rel="stylesheet" href="{{ asset('css/external/bootstrap.css') }}">
        <!-- Bootstrap Select-->         
        <link rel="stylesheet" href="{{ asset('css/external/bootstrap-select.css') }}"> 
        <!-- Google fonts - Poppins-->         
        <link rel="stylesheet" href="{{ asset('css/external/css.css') }}"> 
        <!-- theme stylesheet-->
        <link rel="stylesheet" href="{{ asset('css/custom/style.default.css') }}" id="theme-stylesheet">
        <!-- Font Awesome icons-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
        @yield('assets_css')
    </head>     
    <body>
        <!-- navbar-->
        <header class="header" style="position: fixed;width: 100%; z-index:9999;">
            <!-- Tob Bar-->
            <nav class="navbar navbar-expand-lg">
                <div id="header-content" class="container-fluid big-menu sm-md-nopadding" style="transition: all 0.3s; width:100%"> 
                    <!-- Navbar Header  -->
                    <a href="{{route('index')}}" class="navbar-brand">
                        <img id="logo-img" src="{{ asset('images/logo.png') }}" alt="Logo"> 
                        <p id="title" class="inline-block" style="margin-left: 15px;">
                        	Site Tittle</p>
                    </a>
                    <button type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler navbar-toggler-right">
                        <i class="fa fa-bars"></i>
                    </button>
                    <!-- Navbar Collapse -->
                    <div id="navbarCollapse" class="collapse navbar-collapse" style="transition: all 0.3s;justify-content: space-between; ">
                        <ul id="navbar" class="navbar-nav mx-auto">
                            <li class="nav-item">
                                <a href="{{route('index')}}" class="nav-link active" data-pgc-define>Home</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('browse')}}" class="nav-link">Explore</a>
                            </li>
                            <!-- Megamenu-->
                            <li class="nav-item dropdown menu-large">
                                <a href="#" data-toggle="dropdown" class="nav-link">
                                    Categories <i class="fa fa-angle-down"></i></a>
                            </li>
                            <!-- /Megamenu end-->
                            <!-- Multi level dropdown    -->
                            <li class="nav-item dropdown">
                                <a  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link">
                                    More<i class="fa fa-angle-down"></i></a>
                                <ul  class="dropdown-menu">
                                    <li>
                                        <a href="{{route('about')}}" class="dropdown-item">About Us</a>
                                    </li>
                                    <li>
                                        <a href="{{route('contact')}}" class="dropdown-item">Contact Us</a>
                                    </li>
                                    <li class="dropdown-submenu">
                                        <a  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link">Dropdown link                    <i class="fa fa-angle-down"></i></a>
                                        <ul  class="dropdown-menu">
                                            <li>
                                                <a href="{{route('about')}}" class="dropdown-item">About Us</a>
                                            </li>
                                            <li>
                                                <a href="{{route('contact')}}" class="dropdown-item">Contact</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="dropdown-submenu">
                                        <a id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link">Dropdown link                    <i class="fa fa-angle-down"></i></a>
                                        <ul aria-labelledby="navbarDropdownMenuLink2" class="dropdown-menu">
                                            <li>
                                                <a href="#" class="dropdown-item">Action</a>
                                            </li>
                                            <li>
                                                <a href="#" class="dropdown-item">Something else here</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <!-- Multi level dropdown end-->
                        </ul>
                        <div id="right-nav" class="right-col d-flex align-items-lg-center flex-column flex-lg-row">
                            <!-- Search Button-->
                            <div class="input-group search-wrap">
                                <span class="input-group-addon bg-white"><i class="fa fa-search "></i></span>
                                <input type="text" class="form-control search-box" placeholder="Search templates ...">
                            </div>
                            @guest
                                <a class="btn btn-primary btn-rect mx-2" href="{{ route('login') }}"><i class="fa fa-user"></i>Login</a>
                            @else
                                <div class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                                        @if (count(Auth::user()->profile))
                                            <img style="width:32px; height:32px; margin-top:-4px" src="{{ Auth::user()->profile->avatar_url }}" />
                                            <div style="font-size:0.8em; display:inline">{{ Auth::user()->profile->display_name }} </div>
                                            <i class="fa fa-angle-down"></i>
                                        @else
                                            {{ Auth::user()->username }} <i class="fa fa-angle-down"></i>
                                        @endif
                                    </a>

                                    <ul class="dropdown-menu" style="margin:15px 0 0 0;">
                                        <li>
                                            <a href="ab-us.html" class="dropdown-item">About Us</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('logout') }}" class="dropdown-item" 
                                                onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();">
                                                Logout
                                            </a>

                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                {{ csrf_field() }}
                                            </form>
                                        </li>
                                    </ul>
                                </div>
                            @endguest
                            <!-- User Dropdown-->
                            <div class="user dropdown collapse">
                                <a id="userdetails" href="https://example.com" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle"> <i class="fa fa-user"></i></a>
                                <ul aria-labelledby="userdetails" class="dropdown-menu"> 
                                    <li class="dropdown-item">
                                        <a href="#">Profile       </a>
                                    </li>
                                    <li class="dropdown-item">
                                        <a href="#">Orders       </a>
                                    </li>
                                    <li class="dropdown-divider"> </li>
                                    <li class="dropdown-item">
                                        <a href="#">Logout       </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </header>
        <div style="width:100%; height:70px"></div>
        <!-- Hero Section-->         
        <main>
            @yield('content')
        </main>

        @yield('body')
        <!-- Overview Popup    -->
        <div id="scrolltop" class="">
            <i class="fa fa-arrow-up"></i>
        </div>
        <!-- Footer-->         
        <footer class="main-footer"> 
            <!-- Service Block-->             
            <!-- Main Block -->             
            <div class="copyrights"> 
                <div class="container"> 
                    <div class="row d-flex align-items-center"> 
                        <div class="text col-md-6"> 
                            <p>© 2017 <a href="#" target="_blank">Team name </a> All rights reserved.</p> 
                        </div>
                    </div>                     
                </div>                 
            </div>             
        </footer>
        <!-- Javascript files-->         
        <script src="{{ asset('js/external/jquery.js') }}"> </script>
        <script src="{{ asset('js/external/jquery-3.js') }}"></script>
        <script src="{{ asset('js/external/popper.js') }}"> </script>
        <script src="{{ asset('js/external/bootstrap.js') }}"></script>
        <script src="{{ asset('js/external/bootstrap-select.js') }}"></script>
        <script src="{{ asset('js/external/wNumb.js') }}"></script>
        <script src="{{ asset('js/external/front.js') }}"></script>
        <script src="{{ asset('js/custom/master.js') }}" type="text/javascript"></script>
        <script src="{{ asset('js/custom/browse.js') }}" type="text/javascript"></script>
        <script type="text/javascript">
            $(function () {
                master.init();
                browse.init();
            })
      	</script>
        <!-- Tweaks for older IEs-->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        @yield('assets_js')
    </body>
</html>

