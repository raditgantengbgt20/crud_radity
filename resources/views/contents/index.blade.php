@extends('layout')

@section('title', 'Daftar Konten')

@section('content')
    <h2>Daftar Konten</h2>

    <a href="{{ route('contents.create') }}" class="btn btn-primary">Tambah Konten</a>

    @if (session()->has('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table">
        <thead>
            <tr>
                <th>No</th>
                <th>Judul</th>
                <th>Deskripsi</th>
                <th>Aksi</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($contents as $content)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $content->title }}</td>
                    <td>{{ $content->description }}</td>
                    <td class="hstack">
                        <a href="{{ route('contents.show', $content->id) }}" class="btn btn-info">Lihat</a>
                        <a href="{{ route('contents.edit', $content->id) }}" class="btn btn-primary">Ubah</a>
                        <form action="{{ route('contents.destroy', $content->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection