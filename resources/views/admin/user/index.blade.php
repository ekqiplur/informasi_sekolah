@extends('template_backend.home')

@section('title', 'User')
@section('sub-judul', 'User')

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
                <th>Nama User</th>
                <th>Email</th>
                <th>Type</th>
                <th>Action</th>
            </tr>
        </thead>
        @foreach($user as $result => $hasil)
            <tbody>
                <tr>
                    <td>{{ $result + $user -> firstitem() }}</td>
                    <td>{{ $hasil -> name }}</td>
                    <td>{{ $hasil -> email }}</td>
                    <td>
                        @if($hasil -> tipe)
                            <span class="badge badge-info">Administrator</span> 
                            @else
                            <span class="badge badge-warning">Author</span> 
                        @endif
                    </td>
                    <td>
                            <a href="{{ route('user.edit', $hasil -> id) }}" class="btn btn-primary btn-sm">Edit</a>
                    </td>
                </tr>
            </tbody>
        @endforeach
    </table>
    {{ $user -> links() }}

@endsection