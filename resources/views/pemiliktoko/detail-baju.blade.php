@extends('pemiliktoko.master')

@section('konten')
<div class="container mt-4">
    <h2>Detail Baju: {{ $baju->nama_baju }}</h2>

    <div class="card">
        <div class="card-body">
            <img src="{{ asset('storage/gambar_baju/' . $baju->gambar) }}" alt="Gambar Baju" width="300" class="mb-3">
            <p><strong>Ukuran:</strong> {{ $baju->ukuran }}</p>
            <p><strong>Stok:</strong> {{ $baju->stok }}</p>
            <p><strong>Harga Sewa:</strong> Rp {{ number_format($baju->harga_sewa) }}</p>
            <p><strong>Deskripsi:</strong> {{ $baju->deskripsi }}</p>
            <a href="{{ route('pemiliktoko.lihat-baju') }}" class="btn btn-secondary">Kembali</a>
        </div>
    </div>
</div>
@endsection
