<!DOCTYPE html>
<html class="no-js" lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <title>GT | @yield('title')</title>

    <meta name="DC.title"  content=""/>
    <meta name="description" content=""/>
    <meta name="keywords" content=""/>

    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta name="csrf-token" content="jizWWRfrbVpaEojwYkjWPxom8gGrhhglIlxKTHab">

    <!-- Core CSS Files -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets\css\app.css')}}">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <script src="{{asset('assets\js\app.js')}}"></script>

    <!---- onesignal ------>
{{--    <link rel="manifest" href="onesignal/manifest.json" />--}}
{{--    <script src="../cdn.onesignal.com/sdks/OneSignalSDK.js" async=""></script>--}}
    <script>
        var OneSignal = window.OneSignal || [];
        OneSignal.push(function() {
            //push here
        });

        //onesignal
        OneSignal.push(["init", {
            appId: "6053d948-b8f6-472a-87e4-379fa89f78d8",
            // safari_web_id: oneSignalSafariWebId,
            persistNotification: false,
            notificationClickHandlerMatch: 'origin',
            autoRegister: false,
            notifyButton: {
                enable: false
            }
        }]);

    </script>
</head>
<!-- dir="rtl" -->
<body class="animation-s1 ">
<div class="se-pre-con" id="loader" style="display: block">
    <div class="pre-loader">
        <div class="la-line-scale">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
        <p>Loading..</p>
    </div>
</div>
<!-- Header Sections -->
<!-- Header Content -->
<header id="stickyHeader" class="header-area header-sticky d-none">
    <div class="header-sticky-inner  bg-sticky-bar">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-lg-2">
                    <div class="logo">
                        <a href="{{route('welcome')}}" class="logo" data-toggle="tooltip" data-placement="bottom" title="logo">
                            Global Tiles
                        </a>

                    </div>
                </div>
                <div class="col-12 col-lg-7" style="position: static;">
                    <nav id="navbar_header_9" class="navbar navbar-expand-lg  bg-nav-bar">

                        <div class="navbar-collapse">
                            <ul class="navbar-nav">
                                <li class="nav-item dropdown">
                                    <a class="nav-link "    href="{{route('welcome')}}"  >
                                        Home
                                    </a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link "    href="{{route('contectUs')}}"  >
                                        Contact Us
                                    </a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link "    href="{{route('aboutUs')}}"  >
                                        About Us
                                    </a>
                                </li>

                            </ul>
                        </div>
                    </nav>
                </div>
                <div class="col-12 col-lg-3">
                    <ul class="pro-header-right-options">

                        <li class="dropdown profile-tags">
                            <button class="btn btn-light dropdown-toggle" type="button" id="dropdownAccountButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-user"></i>
                            </button>

                            <div class="dropdown-menu" aria-labelledby="dropdownAccountButton">
                               @if(Auth::user())

                                    <a class="dropdown-item" >{{Auth()->user()->f_name}} {{Auth()->user()->l_name}}</a>
                                @else
                                <a class="dropdown-item" href="{{ route('login') }}">Login/Register</a>

                                @endif
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- //header style One -->
<header id="headerOne" class="header-area header-nine header-desktop d-none d-lg-block d-xl-block">
    <div class="header-mini bg-top-bar">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-4">

                    <div class="navbar-lang">

                    </div>
                </div>
                <div class="col-12 col-md-8">
                    <ul class="link-list">
                        <li class="">
                            <div class="link-item">
                                <div class="avatar">


                                </div>
                                <span> </span>
                            </div>
                        </li>
@if(Auth::user())
                            <li class="link-item"><i class="fa fa-lock" aria-hidden="true"></i>&nbsp;{{Auth()->user()->f_name}}&nbsp;{{Auth()->user()->l_name}}</li>
                        @else
                            <li class="link-item"> <a href="{{ route('login') }}"><i class="fa fa-lock" aria-hidden="true"></i>&nbsp;Login/Register</a> </li>
@endif
                    </ul>

                </div>
            </div>
        </div>
    </div>
    <div class="header-navbar logo-nav bg-menu-bar">
        <div class="container">
            <nav id="navbar_1_2" class="navbar navbar-expand-lg  bg-nav-bar">
                <a href="{{route('welcome')}}" class="logo" data-toggle="tooltip" data-placement="bottom" title="logo">
                    Global Tiles
                </a>
                <div class=" navbar-collapse">
                    <ul class="navbar-nav ">
                        <li class="nav-item dropdown">
                            <a class="nav-link "    href="{{route('welcome')}}"  >
                                Home
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link "    href="{{route('aboutUs')}}"  >
                                About US
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link "    href="{{route('contectUs')}}"  >
                                Contact Us
                            </a>
                        </li>


                    </ul>
                </div>

            </nav>
        </div>
    </div>
    <div class="header-maxi bg-header-bar">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-lg-6">
                    <form class="form-inline" action="http://laravel2.themes-coder.net/shop" method="get">
                        <div class="search-field-module">
                            <input type="hidden" name="category" class="category-value" value="">
                            <button class="btn btn-secondary swipe-to-top dropdown-toggle header-selection" type="button" id="headerOneCartButton"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                    data-toggle="tooltip" data-placement="bottom" title="All Categories">
                                All Categories                </button>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="headerOneCartButton">
                                <a class="dropdown-item categories-list " value="Accessories" slug="accessories" >Accessories</a><a class="dropdown-item categories-list " value="Cameras, Audio & Video" slug="cameras-audio-video" >Cameras, Audio & Video</a><a class="dropdown-item categories-list " value="Computers & Accessories" slug="computers-accessories" >Computers & Accessories</a><a class="dropdown-item categories-list " value="Home appliances" slug="home-appliances" >Home appliances</a><a class="dropdown-item categories-list " value="Kitchen Appliances" slug="kitchen-appliances" >Kitchen Appliances</a><a class="dropdown-item categories-list " value="Mobiles and Tablets" slug="mobiles-and-tablets" >Mobiles and Tablets</a><a class="dropdown-item categories-list " value="Watches" slug="watches" >Watches</a><a class="dropdown-item categories-list " value="Music and video games" slug="music-and-video-games" >Music and video games</a>
                            </div>
                            <div class="search-field-wrap">
                                <input  type="search" name="search" placeholder="Search Products..." data-toggle="tooltip" data-placement="bottom" title="Search Products" alue="">
                                <button class="btn btn-secondary swipe-to-top" data-toggle="tooltip"
                                        data-placement="bottom" title="Search Products">
                                    <i class="fa fa-search"></i></button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-12 col-lg-4">
                    <ul class="top-right-list">
                        <li class="phone-header">
                            <a href="#">
                                <i class="fas fa-phone"></i>
                                <span class="block">
                        <span class="title">Call Us Now</span>
                        <span class="items">+92 312 1234567</span>
                      </span>
                            </a>
                        </li>
                        <li class="cart-header dropdown head-cart-content">
                            <a href="#" id="dropdownCartButton_3" class="dropdown-toggle cart-down"
                               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">


                                <div class="cart-left">
                                    <i class="fas fa-shopping-bag"></i>
                                    <span class="badge badge-secondary">0</span>
                                </div>
                                <span class="block">
    <span class="title">My Cart </span>
    <span class="items">Item</span>
  </span>
                            </a>


                            <div class="shopping-cart shopping-cart-empty dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                                <ul class="shopping-cart-items">
                                    <li>You have no items in your shopping cart.</li>
                                </ul>
                            </div>

                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- End Header Content -->
<header id="headerMobile" class="header-area header-mobile d-lg-none d-xl-none">
    <div class="header-mini bg-top-bar">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12">

                    <nav id="navbar_0" class="navbar navbar-expand-md navbar-dark navbar-0">
                        <div class="navbar-lang">

                            <div class="select-control currency" >

                            </div>
                            <!-- END  Currency LANGUAGE CODE SECTION -->

                        </div>

                    </nav>
                </div>
            </div>
        </div>
    </div>
    <div class="header-maxi bg-header-bar ">
        <div class="container">

            <div class="row align-items-center">
                <div class="col-2 pr-0">
                    <div class="navigation-mobile-container">
                        <a href="javascript:void(0)" class="navigation-mobile-toggler">
                            <span class="fas fa-bars"></span>
                        </a>
                        <nav id="navigation-mobile">
                            <div class="logout-main">
                                <div class="welcome">
                                    <span> </span>
                                </div>
                            </div>

                            <a href="{{route('welcome')}}" class="main-manu btn btn-primary">
                                Home                      </a>

                            <a class=" main-manu btn btn-primary" data-toggle="collapse" href="#productpages" role="button" aria-expanded="false" aria-controls="productpages">
                                 <span><i class="fas fa-chevron-down"></i></span>
                                <span><i class="fas fa-chevron-up"></i></span>
                            </a>
                            <div class="sub-manu collapse multi-collapse" id="productpages">
                                <ul class="unorder-list">
                                    <li class="">
                                    </li>
                                </ul>
                            </div>
                            <div class="nav-link">Welcome!</div>
                            <a href="login.html" class="main-manu btn btn-primary"><i class="fa fa-lock" aria-hidden="true"></i>&nbsp;Login/Register</a>
                        </nav>
                    </div>

                </div>



                <div class="col-8">
                    <a href="{{route('welcome')}}" class="logo">
                        Global Tiles

                    </a>
                </div>

            </div>
        </div>
    </div>
    <div class="header-navbar bg-menu-bar">
        <div class="container">
            <form class="form-inline" action="http://laravel2.themes-coder.net/shop" method="get">
                <div class="search">
                    <div class="select-control">
                        <select class="form-control" name="category">
                            <option value="">Categories</option><option value="accessories" >Accessories</option><option value="cameras-audio-video" >Cameras, Audio & Video</option><option value="computers-accessories" >Computers & Accessories</option><option value="home-appliances" >Home appliances</option><option value="kitchen-appliances" >Kitchen Appliances</option><option value="mobiles-and-tablets" >Mobiles and Tablets</option><option value="watches" >Watches</option><option value="music-and-video-games" >Music and video games</option>              </select>
                    </div>
                    <input  type="search" placeholder="Search entire store here">
                    <button class="btn btn-secondary" type="submit">
                        <i class="fa fa-search"></i></button>
                </div>
            </form>
        </div>
    </div>
</header>
<!-- End of Header Sections -->
