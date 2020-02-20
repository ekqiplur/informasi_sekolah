@extends('template_backend.home')

@section('title', 'Profile')
@section('sub-judul', 'Profile')

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
                <th>Sejarah</th>
                <th>Action</th>
            </tr>
        </thead>
        @foreach($profile as $result => $hasil)
            <tbody>
                <tr>
                    <td>{{ $result + $profile -> firstitem() }}</td>
                    <td>{!! $hasil -> sejarah !!}</td>
                    <td>
                        <a href="{{ route('profil.sejarah.view', $hasil -> id) }}" class="btn btn-info btn-sm">Edit</a>
                    </td>
                </tr>
            </tbody>
        @endforeach
    </table>
    {{ $profile -> links() }}

@endsection