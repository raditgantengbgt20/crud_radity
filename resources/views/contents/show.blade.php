@extends('layout')

@section('title', 'Lihat Konten')

@section('content')
    <h2>Lihat Konten</h2>

    <div class="card">
        <div class="card-body">
            <div class="card-title">
                <strong>Judul:</strong> {{ $content->title }}
            </div>

            <p><strong>Deskripsi:</strong> {{ $content->description }}</p>
        </div>
    </div>
    <a href="{{ route('contents.index') }}" class="btn btn-secondary">Kembali</a>
@endsection