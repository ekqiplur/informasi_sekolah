<!DOCTYPE html>
<html lang="en">

<head>
  <title>Engineers &mdash; Website Template by Colorlib</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


  <link href="https://fonts.googleapis.com/css?family=Oswald:300,400,700|Muli:300,400" rel="stylesheet">
  <link rel="stylesheet" href="fonts/icomoon/style.css">

  <link rel="stylesheet" href="{{asset('front/css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{asset('front/css/jquery-ui.css')}}">
  <link rel="stylesheet" href="{{asset('front/css/owl.carousel.min.css')}}">
  <link rel="stylesheet" href="{{asset('front/css/owl.theme.default.min.css')}}">
  <link rel="stylesheet" href="{{asset('front/css/owl.theme.default.min.css')}}">

  <link rel="stylesheet" href="{{asset('front/css/jquery.fancybox.min.css')}}">

  <link rel="stylesheet" href="{{asset('front/css/bootstrap-datepicker.css')}}">

  <link rel="stylesheet" href="{{asset('front/fonts/flaticon/font/flaticon.css')}}">

  <link rel="stylesheet" href="{{asset('front/css/aos.css')}}">
  <link href="{{asset('front/css/jquery.mb.YTPlayer.min.css')}}" media="all" rel="stylesheet" type="text/css">

  <link rel="stylesheet" href="{{asset('front/css/style.css')}}">



</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

  <div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>


    
    <div class="header-top bg-light">
      
      <div class="site-navbar py-2 js-sticky-header site-navbar-target d-none pl-0 d-lg-block" role="banner">

      <div class="container">
        <div class="d-flex align-items-center">
          
          <div class="mr-auto">
            <nav class="site-navigation position-relative text-right" role="navigation">
              <ul class="site-menu main-menu js-clone-nav mr-auto d-none pl-0 d-lg-block">
                <li class="active">
                  <a href="{{ url('') }}" class="nav-link text-left">Home</a>
                </li>
                <li>
                  <a href="{{route('news.list')}}" class="nav-link text-left">News</a>
                </li>
                <li>
                  <a href="{{route('fasilitas')}}" class="nav-link text-left">Fasilitas</a>
                </li>
                <li><a href="{{route('kegiatan')}}" class="nav-link text-left">kegiatan</a></li>
                <li>
                  <a href="{{route('about')}}" class="nav-link text-left">About Us</a>
                </li>
                <li>
                    <a href="{{route('kontak.bord')}}" class="nav-link text-left">Contact</a>
                  </li>
              </ul>                                                                                                                                                                                                                                                                                          </ul>
            </nav>

          </div>
         
        </div>
      </div>

    </div>
    
    </div>
    
    <div class="hero-slide owl-carousel site-blocks-cover">
      <div class="intro-section" style="background-image: url('images/hero_1.jpg');">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-12 mx-auto text-center" data-aos="fade-up">
              <h1><strong>@yield('judul')</strong></h1>
            </div>
          </div>
        </div>
      </div>

      <div class="intro-section" style="background-image: url('images/hero_1.jpg');">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-12 mx-auto text-center" data-aos="fade-up">
              <span class="d-block"></span>
              <h1>We Are <strong>Leading</strong> Inonvation Schools</h1>
            </div>
          </div>
        </div>
      </div>

    </div>
    <!-- END slider -->