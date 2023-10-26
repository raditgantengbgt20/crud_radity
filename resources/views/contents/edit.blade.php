@extends('layout')

@section('title', 'Ubah Konten')

@section('content')
    <h2>Ubah Konten</h2>

    <form action="{{ route('contents.update', $content->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="title">Judul:</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ $content->title }}" required>
        </div>
        <div class="form-group">
            <label for="description">Deskripsi:</label>
            <textarea class="form-control" id="description" name="description" rows="4" required>{{ $content->description }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
    </form>
@endsection