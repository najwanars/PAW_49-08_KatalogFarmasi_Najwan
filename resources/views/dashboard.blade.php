@extends('layouts.app')

@section('title', 'Dashboard - Modul Katalog Farmasi')

@section('content')
<div class="card shadow-sm p-4">
    <h1 class="h3 fw-bold mb-2">Selamat Datang di Modul Katalog Farmasi</h1>
    <p class="text-muted mb-4">
        Anda login sebagai <strong>{{ auth()->user()->username }}</strong> ({{ auth()->user()->role }}).
        Kelola master data obat-obatan, kategori, sediaan, pabrikan, harga, dan stok Klinik Rawat Jalan.
    </p>
    <div class="d-flex flex-wrap gap-3">
        <a href="{{ route('obats.index') }}" class="btn btn-primary px-4 py-2 fw-semibold">
            Buka Katalog Obat
        </a>
        @if (auth()->user()->isAdmin())
            <a href="{{ route('obats.create') }}" class="btn btn-outline-primary px-4 py-2 fw-semibold">
                + Tambah Data Obat
            </a>
        @endif
    </div>
</div>
@endsection
