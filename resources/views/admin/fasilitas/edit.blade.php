@extends('template_backend.home')

@section('title', 'Edit Fasilitas')
<link href="{{ asset('ckeditor/plugins/codesnippet/lib/highlight/styles/default.css') }}" rel="stylesheet">
@section('sub-judul', 'Edit Fasilitas')

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

    <form action="{{ route('fasilitas.update', $fasilitas -> id) }}" method="POST">
        @csrf
        @method('patch')
        <div class="form-group">
            <label>Fasilitas</label>
            <input type="text" class="form-control" name="name" value="{{ $fasilitas -> name }}">
        </div>

        <div class="form-group">
            <label>Deskripsi</label>
            <textarea class="form-control" name="deskripsi" id="konten">{!! $fasilitas -> deskripsi !!}</textarea>
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

@endsection