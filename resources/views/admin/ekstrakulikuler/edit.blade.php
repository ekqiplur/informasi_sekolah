@extends('template_backend.home')

@section('title', 'Edit Kegiatan')
<link href="{{ asset('ckeditor/plugins/codesnippet/lib/highlight/styles/default.css') }}" rel="stylesheet">
@section('sub-judul', 'Edit Kegiatan')

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

    <form action="{{ route('ekstrakulikuler.update', $ekstra -> id) }}" method="POST">
        @csrf
        @method('patch')
        <div class="form-group">
            <label>Ekstrakulikuler</label>
            <input type="text" class="form-control" name="name" value="{{ $ekstra -> name }}">
        </div>

        <div class="form-group">
            <label>Deskripsi</label>
            <textarea class="form-control" name="deskripsi" id="konten">{!! $ekstra -> deskripsi !!}</textarea>
        </div>

        <div class="form-group">
            <button class="btn btn-primary btn-block">Updete Kegiatan</button>
        </div>
    </form>
    
    <script src="{{asset('ckeditor/ckeditor.js')}}"></script>
    
    <script src="{{ asset('ckeditor/plugins/codesnippet/lib/highlight/highlight.pack.js') }}"></script>
    <script>hljs.initHighlightingOnLoad();</script>
    <script>
        
            CKEDITOR.replace('konten');
    </script>

@endsection