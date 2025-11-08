@extends('layouts.dashboard')

@section('title', 'Detail Kucing')

@section('content')
<div class="cat-card mx-auto" style="max-width: 600px;">
    <h2 class="cat-title mb-3 text-center">
        <!--1. Panggil variabel untuk menampilkan nama kucing -->
        {{ $kucing->nama_kucing }}
    </h2>
    <ul class="list-group list-group-flush">
        <li class="list-group-item"><strong>Ras:</strong> <!--2. Panggil variabel untuk menampilkan ras kucing --> {{ $kucing->ras }}</li>
        <li class="list-group-item"><strong>Warna Bulu:</strong> <!--3. Panggil variabel untuk menampilkan warna bulu kucing --> {{ $kucing->warna_bulu }}</li>
        <li class="list-group-item"><strong>Usia:</strong> <!--4. Panggil variabel untuk menampilkan usia kucing --> {{ $kucing->usia }} tahun</li>
        <li class="list-group-item"><strong>Deskripsi:</strong> {{ $kucing->deskripsi }}</li>
    </ul>
    <div class="text-center mt-4">
        <!--4. Isi value untuk atribut href agar mendirect ke halaman daftar kucing -->
        <a href="{{ route('kucing.index') }}" class="btn btn-custom">Kembali ke Daftar</a>
    </div>
</div>
@endsection