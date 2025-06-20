@extends('pemiliktoko.master')

@section('konten')
<div class="container mt-4">
    <h2>Daftar Baju Adat</h2>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Nama Baju</th>
                <th>Ukuran</th>
                <th>Stok</th>
                <th>Harga Sewa</th>
                <th>Deskripsi</th>
                <th>Gambar</th>
            </tr>
        </thead>
        <tbody>
            @forelse($bajus as $baju)
                <tr>
                    <td>{{ $baju->nama_baju }}</td>
                    <td>{{ $baju->ukuran }}</td>
                    <td>{{ $baju->stok }}</td>
                    <td>Rp {{ number_format($baju->harga_sewa, 0, ',', '.') }}</td>
                    <td>{{ $baju->deskripsi }}</td>
                    <td>
                    
                            <img src="{{ asset('storage/' . $baju->gambar) }}" width="100">
                
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="6">Belum ada data baju.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
