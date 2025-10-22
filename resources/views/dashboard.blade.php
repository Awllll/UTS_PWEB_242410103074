@extends('layout.app')

@section('content')
<div class="container mt-4">

    <h2 class="text-success mb-4">Okaerii, Admin {{ request()->query('username') }}!!</h2>

    <div class="card bg-success text-white mb-4 animate__animated animate__fadeIn">
        <div class="card-body">
            <h4 class="card-title">Admin ngapain aja sih??</h4>
            <p class="card-ttext">Yoo jadi tugas Admin di sini untuk mengelola website yaah.
                Admin bakal upload berita-berita yang ditulis sama member dari komunitas. Semangat mind mengatur nyaa.
                Klik link di bawah untuk menggunakan fitur yang sudah disediakan!!</p>
        </div>
    </div>

    <div class="d-flex gap-2 mb-4 animate__animated animate__fadeIn animate__delay-1s">
        <button class="btn btn-success">Lihat Semua Berita</button>
        <button class="btn btn-success">Tambah Berita</button>
        <button class="btn btn-success">Edit Profile</button>
    </div>
</div>
@endsection

