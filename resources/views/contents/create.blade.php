@extends('layout')

@section('title', 'Tambah Konten')

@section('content')
    <h2>Tambah Konten</h2>

    <form action="{{ route('contents.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="title">Judul:</label>
            <input type="text" class="form-control" id="title" name="title" required>
        </div>
        <div class="form-group">
            <label for="description">Deskripsi:</label>
            <textarea class="form-control" id="description" name="description" rows="4" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
@endsection