@extends('pemiliktoko.master')

@section('konten')
<div class="container mt-4">
    <h2>Tambah Baju Adat</h2>

    {{-- Tampilkan pesan sukses --}}
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    {{-- Tampilkan error validasi --}}
    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('baju.simpan') }}" method="POST" enctype="multipart/form-data">
        @csrf
          <div class="form-group mb-3">
            <label for="nama_baju">Toko id</label>
            <input type="text" name="toko_id" class="form-control" required>
        </div>
        <div class="form-group mb-3">
            <label for="nama_baju">Nama Baju</label>
            <input type="text" name="nama_baju" class="form-control" value="{{ old('nama_baju') }}" required>
        </div>

        <div class="form-group mb-3">
            <label for="ukuran">Ukuran</label>
            <input type="text" name="ukuran" class="form-control" value="{{ old('ukuran') }}" required>
        </div>

        <div class="form-group mb-3">
            <label for="stok">Stok</label>
            <input type="number" name="stok" class="form-control" value="{{ old('stok') }}" required>
        </div>

        <div class="form-group mb-3">
            <label for="harga_sewa">Harga Sewa</label>
            <input type="number" name="harga_sewa" class="form-control" value="{{ old('harga_sewa') }}" required>
        </div>

        <div class="form-group mb-3">
            <label for="deskripsi">Deskripsi</label>
            <textarea name="deskripsi" class="form-control" rows="3" required>{{ old('deskripsi') }}</textarea>
        </div>

        <div class="form-group mb-4">
            <label for="gambar">Gambar Baju</label>
            <input type="file" name="gambar" class="form-control-file">
        </div>

        <button type="submit" class="btn btn-success">Simpan</button>
        <a href="{{ route('lihat-baju') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection