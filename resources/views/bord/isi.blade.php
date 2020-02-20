@extends('template_front.content')
@section('judul', 'Fasilitas')

    @section('isi')
    <section class="site-section">
        <div class="container">
            <div class="row">
                    @foreach ($data as $item)
                        
                    <div class="col-md-8 blog-content">
                        <div class="col-12 mb-5 text-left">
                            <img src="{{asset($item -> photo)}}" alt="Image" class="img-fluid">
                            <br><br><br><br>
                            <h3 class="section-subtitle">{!!$item->judul!!}</h3>
                        </div>
                        <p>{!!$item -> content!!}</p>
                    </div>
                    <br><br><br><br><br><br>
            
                    @endforeach
            </div>
        </div>
    </section>
        
    @endsection
    