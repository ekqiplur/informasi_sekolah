@extends('template_backend.home')

@section('title', 'Edit Profile')
<link href="{{ asset('ckeditor/plugins/codesnippet/lib/highlight/styles/default.css') }}" rel="stylesheet">

@section('sub-judul', 'Edit Profile')

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

    <form action="{{ route('profil.sejarah.update', $profile -> id) }}" method="POST">
        @csrf
        @method('put')
        <div class="form-group">
            <label>Sejarah</label>
            <textarea class="form-control" name="sejarah" id="konten">{{ $profile -> sejarah }}</textarea>
        </div>
        <div class="form-group">
            <button class="btn btn-primary btn-block">Upadete Profile</button>
        </div>
    </form>

    <script src="{{asset('ckeditor/ckeditor.js')}}"></script>
    
    <script src="{{ asset('ckeditor/plugins/codesnippet/lib/highlight/highlight.pack.js') }}"></script>
    <script>hljs.initHighlightingOnLoad();</script>
    <script>
        
            CKEDITOR.replace('konten');
    </script>
    

@endsection