@extends('template_backend.home')

@section('title', 'Fasilitas')
@section('sub-judul', 'Fasilitas')

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
                        <form action="{{ route('post.kill', $hasil -> id) }}" method="post">
                            @csrf
                            @method('delete')
                            <a href="{{ route('post.restore', $hasil -> id) }}" class="btn btn-info btn-sm">Restore</a>
                            <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                        </form>
                    </td>
                </tr>
            </tbody>
        @endforeach
    </table>
    {{ $post -> links() }}

@endsection