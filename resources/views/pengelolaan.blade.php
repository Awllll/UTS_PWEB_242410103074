@extends('layout.app')

@section('content')
<h2 class="text-success mb-3">Daftar Info Anime & Manga</h2>
<div class="row">
    @foreach ($berita as $b)
        <div class="col-md-4 mb-3">
            <div class="card show-sm">
                <div class="card-body">
                    <h5 class="card-title">{{ $b['judul'] }}</h5>
                    <p class="card-tet"><strong>Kategori:</strong> {{ $b['kategori'] }}</p>
                    <p class="card-text"><strong>Penulis:</strong> {{ $b['penulis'] }}</p>
                    <a href="#" class="btn btn-success btn-sm">Edit</a>
                    <a href="#" class="btn btn-outline-success btn-sm">Hapus</a>
                </div>
            </div>
        </div>
    @endforeach
</div>
@endsection
