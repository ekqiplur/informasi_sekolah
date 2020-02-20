@extends('template_backend.home')

@section('title', 'Kontak')
@section('sub-judul', 'Kontak')

@section('content')

    @if (Session::has('success'))
        <div class="alert alert-success" role="alert">
                {{ Session('success') }}
        </div>
    @endif

    <table class="table table-striped table-hover table-sm table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Telp</th>
                <th>Alamat</th>
                <th>Action</th>
            </tr>
        </thead>
        @foreach($kontak as $result => $hasil)
            <tbody>
                <tr>
                    <td>{{ $result + $kontak -> firstitem() }}</td>
                    <td>{{ $hasil -> telp }}</td>
                    <td>{{ $hasil -> alamat }}</td>
                    <td>
                        <a href="{{ route('kontak.edit', $hasil -> id) }}" class="btn btn-primary btn-sm">Edit</a>
                    </td>
                </tr>
            </tbody>
        @endforeach
    </table>
    {{ $kontak -> links() }}

@endsection