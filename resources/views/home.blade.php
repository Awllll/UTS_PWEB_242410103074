@extends('layout.app')

@section('content')
<div class="text-center mt-5">
    <h1>Selamat datang di Portal Kepoin-AniManga</h1>
    <p>Klik tombol di bawah untuk login</p>
    <a href="{{ route('login') }}" class="btn btn-primary">Login</a>
</div>
@endsection
