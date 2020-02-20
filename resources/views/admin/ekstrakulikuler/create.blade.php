@extends('template_backend.home')

@section('title', 'Tambah Kegiatan')
<link href="{{ asset('ckeditor/plugins/codesnippet/lib/highlight/styles/default.css') }}" rel="stylesheet">
@section('sub-judul', 'Tambah Kegiatan')

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

    <form action="{{ route('ekstrakulikuler.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label>Ekstrakulikuler</label>
            <input type="text" class="form-control" name="name">
        </div>

        <div class="form-group">
            <label>Deskripsi</label>
            <textarea class="form-control" name="deskripsi" id="konten"></textarea>
        </div>

        <div class="form-group">
            <button class="btn btn-primary btn-block">Simpan Kegiatan</button>
        </div>
    </form>

    <script src="{{asset('ckeditor/ckeditor.js')}}"></script>
    
    <script src="{{ asset('ckeditor/plugins/codesnippet/lib/highlight/highlight.pack.js') }}"></script>
    <script>hljs.initHighlightingOnLoad();</script>
    <script>
        
            CKEDITOR.replace('konten');
    </script>
    

@endsection