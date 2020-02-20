@extends('template_front.content')
@section('judul', 'News')

    @section('isi')
            
                <div class="site-section bg-light">
                    <div class="container">
                      <div class="row justify-content-center">
                        <div class="col-12 mb-5 text-center">
                          <h3 class="section-subtitle">News</h3>
                        </div>
                      </div>
                      <div class="row">
                        <div class="row justify-content-center">
                          <div class="col-md-8 mb-4 mb-lg-0 col-lg-4">
                            @foreach ($data as $item)                
                          <div class="blog-entry">
                          <a href="{{route('content.isi', $item->slug)}}" class="img-link">
                              <img src="{{asset($item -> photo)}}" alt="Image" class="img-fluid">
                            </a>
                            <div class="blog-entry-contents">
                              <h3><a href="{{route('content.isi', $item->slug)}}">{!!$item -> judul!!}</a></h3>
                            </div>
                            <br><br><br><br><br><br>
                          </div>
                          @endforeach
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                {{$data->links()}}
                </div>
                    </div>
                  </div>
        
    @endsection
    