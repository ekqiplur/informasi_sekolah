@extends('template_backend.home')

@section('title', 'Post')
@section('sub-judul', 'Post')

@section('content')

    @if (Session::has('success'))
        <div class="alert alert-success" role="alert">
                {{ Session('success') }}
        </div>
    @endif

    <a href="{{ route('post.create') }}" class="btn btn-info btn-sm">Tambah Post</a>
    <br><br>

    <table class="table table-striped table-hover table-sm table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Judul</th>
                <th>Kontent</th>
                <th>Tumbnail</th>
                <th>Action</th>
            </tr>
        </thead>
        @foreach($post as $result => $hasil)
            <tbody>
                <tr>
                    <td>{{ $result + $post -> firstitem() }}</td>
                    <td>{{ $hasil -> judul }}</td>
                    <td>{!! substr(strip_tags($hasil -> content ), 0, 80) !!}{{ strlen(strip_tags($hasil -> deskripsi))>50?"...":"" }}</td>
                    <td><img src="{{ asset($hasil -> photo) }}" class="img-fluid" style="width:100px"></td>
                    <td>
                        <form action="{{ route('post.destroy', $hasil -> id) }}" method="post">
                            @csrf
                            @method('delete')
                            <a href="{{ route('post.edit', $hasil -> id) }}" class="btn btn-primary btn-sm">Edit</a>
                            <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                        </form>
                    </td>
                </tr>
            </tbody>
        @endforeach
    </table>
    {{ $post -> links() }}

@endsection