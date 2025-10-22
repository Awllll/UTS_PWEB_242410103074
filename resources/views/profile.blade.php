@extends('layout.app')

@section('content')
<div class="container">
    <h2 class="mb-4">Profile: {{ $username }}</h2>

    <div class="card shadow-sm animate__animated animate__fadeIn">
        <div class="card-body">
            <h5 class="card-title">Informasi Pengguna</h5>
            <p class="card-text"><strong>Username:</strong> {{ $username }}</p>
            <p class="card-text"><strong>Role:</strong> Admin</p>
            <button class="btn btn-success mt-2">Edit Profile</button>
        </div>
    </div>
</div>
@endsection
