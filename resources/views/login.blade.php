@extends('layout.app')

@section('content')
<div class="container d-flex justify-content-center align-item-center" style="min-height: 80vh">
    <div class="card w-50 border-success shadow">
        <div class="card-header bg-success text-white text-center">
            Login Kepoin-Animanga
        </div>
        <div class="card-body">
            <form action="{{ route('dashboard') }}" method="GET">
                <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" name="username" class="form-control" placeholder="Masukkan username" required>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Pasword</label>
                    <input type="password" name="password" class="form-control" placeholder="Masukkan password" required>
                </div>
                <button type="submit" class="btn btn-success w-100">Login</button>
            </form>
        </div>
    </div>
</div>
@endsection
