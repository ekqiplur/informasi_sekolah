@extends('template_backend.home')

@section('title', 'Fasilitas')
@section('sub-judul', 'Fasilitas')

@section('content')

    @if (Session::has('success'))
        <div class="alert alert-success" role="alert">
                {{ Session('success') }}
        </div>
    @endif

    <a href="{{ route('fasilitas.create') }}" class="btn btn-info btn-sm">Tambah Fasilitas</a>
    <br><br>

    <table class="table table-striped table-hover table-sm table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Fasilitas</th>
                <th>Deskripsi</th>
                <th>Action</th>
            </tr>
        </thead>
        @foreach($fasilitas as $result => $hasil)
            <tbody>
                <tr>
                    <td>{{ $result + $fasilitas -> firstitem() }}</td>
                    <td>{{ $hasil -> name }}</td>
                    <td>{!! substr(strip_tags($hasil -> deskripsi ), 0, 80) !!}{{ strlen(strip_tags($hasil -> deskripsi))>50?"...":"" }}</td>
                    <td>
                        <form action="{{ route('fasilitas.destroy', $hasil -> id) }}" method="post">
                            @csrf
                            @method('delete')
                            <a href="{{ route('fasilitas.edit', $hasil -> id) }}" class="btn btn-primary btn-sm">Edit</a>
                            <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                        </form>
                    </td>
                </tr>
            </tbody>
        @endforeach
    </table>
    {{ $fasilitas -> links() }}

@endsection