@extends('pemiliktoko.master')

@section('konten')
<div class="container mt-4">
    <h2>Edit Baju: {{ $baju->nama_baju }}</h2>

    <form action="{{ route('baju.update', $baju->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label>Nama Baju</label>
            <input type="text" name="nama_baju" class="form-control" value="{{ $baju->nama_baju }}" required>
        </div>
        <div class="mb-3">
            <label>Ukuran</label>
            <input type="text" name="ukuran" class="form-control" value="{{ $baju->ukuran }}" required>
        </div>
        <div class="mb-3">
            <label>Stok</label>
            <input type="number" name="stok" class="form-control" value="{{ $baju->stok }}" required>
        </div>
        <div class="mb-3">
            <label>Harga Sewa</label>
            <input type="number" step="0.01" name="harga_sewa" class="form-control" value="{{ $baju->harga_sewa }}" required>
        </div>
        <div class="mb-3">
            <label>Deskripsi</label>
            <textarea name="deskripsi" class="form-control" required>{{ $baju->deskripsi }}</textarea>
        </div>
        <div class="mb-3">
            <label>Gambar Saat Ini:</label><br>
            <img src="{{ asset('storage/gambar_baju/' . $baju->gambar) }}" alt="Gambar" width="150">
        </div>
        <div class="mb-3">
            <label>Ganti Gambar (Opsional):</label>
            <input type="file" name="gambar" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection
