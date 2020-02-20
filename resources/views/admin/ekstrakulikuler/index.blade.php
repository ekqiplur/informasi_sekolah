@extends('template_backend.home')

@section('title', 'Kegiatan')
@section('sub-judul', 'Kegiatan')

@section('content')

    @if (Session::has('success'))
        <div class="alert alert-success" role="alert">
                {{ Session('success') }}
        </div>
    @endif

    <a href="{{ route('ekstrakulikuler.create') }}" class="btn btn-info btn-sm">Tambah Kegiatan</a>
    <br><br>

    <table class="table table-striped table-hover table-sm table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Ektrakulikuler</th>
                <th>Deskripsi</th>
                <th>Action</th>
            </tr>
        </thead>
        @foreach($ekstra as $result => $hasil)
            <tbody>
                <tr>
                    <td>{{ $result + $ekstra -> firstitem() }}</td>
                    <td>{{ $hasil -> name }}</td>
                    <td>{!! substr(strip_tags($hasil -> deskripsi ), 0, 80) !!}{{ strlen(strip_tags($hasil -> deskripsi))>50?"...":"" }}</td>
                    <td>
                        <form action="{{ route('ekstrakulikuler.destroy', $hasil -> id) }}" method="post">
                            @csrf
                            @method('delete')
                            <a href="{{ route('ekstrakulikuler.edit', $hasil -> id) }}" class="btn btn-primary btn-sm">Edit</a>
                            <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                        </form>
                    </td>
                </tr>
            </tbody>
        @endforeach
    </table>
    {{ $ekstra -> links() }}

@endsection