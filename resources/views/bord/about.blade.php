@extends('template_front.content')
    @section('judul', 'About Us')
        
    @section('isi')
    <section class="site-section">
        <div class="container">
            <div class="row">
                    @foreach ($data as $item)
                        
                    <div class="col-md-8 blog-content">
                        <div class="col-12 mb-5 text-left">
                            <h3 class="section-subtitle">Sejarah</h3>
                        </div>
                        <p>{!!$item -> sejarah!!}</p>
            
                            
                    </div><br><br><br><br><br><br><br><br>
                    <div class="col-md-8 blog-content">
                        <div class="col-12 mb-5 text-left">
                            <h3 class="section-subtitle">Visi-misi</h3>
                        </div>
                        <p>{!!$item -> visi_misi!!}</p>
            
                            
                    </div>
                    @endforeach
            </div>
        </div>
    </section>
        
    @endsection
    