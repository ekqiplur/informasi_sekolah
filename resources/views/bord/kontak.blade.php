@extends('template_front.content')
@section('judul', 'Contact')

    @section('isi')
    <section class="site-section">
        <div class="container">
            <div class="row">
                    @foreach ($data as $item)
                        
                    <div class="col-md-8 blog-content">
                        <div class="col-12 mb-5 text-left">
                            <h3 class="section-subtitle">Telp.</h3>
                        </div>
                        <p>{!!$item -> telp!!}</p>
                    </div>
                    <br><br><br><br><br><br>

                    <div class="col-md-8 blog-content">
                        <div class="col-12 mb-5 text-left">
                            <h3 class="section-subtitle">Alamat</h3>
                        </div>
                        <p>{!!$item -> alamat!!}</p>
                    </div>
            
                    @endforeach
            </div>
        </div>
    </section>
        
    @endsection
    