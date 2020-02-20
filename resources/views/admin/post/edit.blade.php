@extends('template_backend.home')

@section('title', 'Edit Post')
<link href="{{ asset('ckeditor/plugins/codesnippet/lib/highlight/styles/default.css') }}" rel="stylesheet">
@section('sub-judul', 'Edit Post')

@section('content')

    @if (count($errors)>0)
        @foreach ($errors -> all() as $error)

        <div class="alert alert-danger" role="alert">
            {{ $error }}
        </div>
        @endforeach
    @endif

    @if (Session::has('success'))
        <div class="alert alert-success" role="alert">
                {{ Session('success') }}
        </div>
    @endif

    <form action="{{ route('post.update', $post -> id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('patch')
        <div class="form-group">
            <label>Judul</label>
            <input type="text" class="form-control" name="judul" value="{{ $post -> judul }}">
        </div>

        <div class="form-group">
            <label>Deskripsi</label>
            <textarea class="form-control" name="content" id="konten">{!! $post -> content !!}</textarea>
        </div>

        <div class="form-group">
            <label>Photo</label>
            <img id="blah" src="{{asset($post -> photo)}}" alt="your image" style="width: 200px"/>
            <input type="file" class="form-control" name="photo" onchange="readURL(this);" >
        </div>

        <div class="form-group">
            <button class="btn btn-primary btn-block">Updete Fasilitas</button>
        </div>
    </form>
    
    <script src="{{asset('ckeditor/ckeditor.js')}}"></script>
    
    <script src="{{ asset('ckeditor/plugins/codesnippet/lib/highlight/highlight.pack.js') }}"></script>
    <script>hljs.initHighlightingOnLoad();</script>
    <script>
        
            CKEDITOR.replace('konten');
    </script>
    <script>
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#blah')
                        .attr('src', e.target.result);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>

@endsection