@extends('template_backend.home')

@section('title', 'Edit Kontak')
@section('sub-judul', 'Edit Kontak')

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

    <form action="{{ route('kontak.update', $kontak -> id) }}" method="POST">
        @csrf
        @method('put')
        <div class="form-group">
            <label>No.Telpon</label>
            <input type="text" class="form-control" name="telp" value="{{ $kontak -> telp }}">
        </div>
        <div class="form-group">
            <label>Alamat</label>
            <input type="text" class="form-control" name="alamat" value="{{ $kontak -> alamat }}">
        </div>

        <div class="form-group">
            <button class="btn btn-primary btn-block">Upadete Kontak</button>
        </div>
    </form>
    

@endsection