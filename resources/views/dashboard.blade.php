@extends('template_front.content')

@section('judul', 'Experts and High Quality Works ')
    
  @section('isi')

    <div class="site-section services-1-wrap">
      <div class="container">
        <div class="row mb-5 justify-content-center text-center">
          <div class="col-lg-5">
              <h3 class="section-subtitle">What We Do</h3>
              <h2 class="section-title mb-4 text-black">Enjoy your <strong>School</strong></h2>
          </div>
        </div>
        <div class="row no-gutters">
          <div class="col-lg-6 col-md-6">
            <div class="service-1">
              <span class="number">01</span>
              <div class="service-1-icon">
                <span class="flaticon-engineer"></span>
              </div>
              <div class="service-1-content">
                <h3 class="service-heading">Professional Team</h3>
                <p>Gravida sodales condimentum pellen tesq accumsan orci quam sagittis sapie</p>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-md-6">
            <div class="service-1">
              <span class="number">02</span>
              <div class="service-1-icon">
                <span class="flaticon-compass"></span>
              </div>
              <div class="service-1-content">
                <h3 class="service-heading">Great Ideas</h3>
                <p>Gravida sodales condimentum pellen tesq accumsan orci quam sagittis sapie</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- END services -->   

    <div class="site-section bg-light">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-12 mb-5 text-left">
            <h3 class="section-subtitle">News</h3>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 mb-4 mb-lg-0 col-lg-4">
            @foreach ($data as $item)                
            <div class="blog-entry">
              <a href="{{route('content.isi', $item->slug)}}" class="img-link">
                <img src="{{asset($item -> photo)}}" alt="Image" class="img-fluid">
              </a>
              <div class="blog-entry-contents">
                <h3><a href="{{route('content.isi', $item->slug)}}">{!!$item -> judul!!}</a></h3>
              </div>
              <br><br><br><br>
            </div>
            @endforeach
          </div>
        </div>
      </div>
    </div>
  
  @endsection

    
