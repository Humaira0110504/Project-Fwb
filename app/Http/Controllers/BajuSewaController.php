<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Baju;
use App\Models\Toko;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class BajuSewaController extends Controller
{
    // Tampilkan semua baju milik toko yang sedang login
    public function tambahBaju()
    {
        return view('pemiliktoko.tambah-baju');
    }
 // Simpan data baju
    public function simpanBaju(Request $request)
    {
        $request->validate([
            'nama_baju' => 'required|string|max:255',
            'ukuran' => 'required|string|max:10',
            'stok' => 'required|integer',
            'harga_sewa' => 'required|numeric',
            'deskripsi' => 'required|string',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $toko = Toko::where('user_id', Auth::id())->first();

        if (!$toko) {
            return redirect()->back()->with('error', 'Toko tidak ditemukan.');
        }

        $baju = new Baju();
        $baju->toko_id = $toko->id;
        $baju->nama_baju = $request->nama_baju;
        $baju->ukuran = $request->ukuran;
        $baju->stok = $request->stok;
        $baju->harga_sewa = $request->harga_sewa;
        $baju->deskripsi = $request->deskripsi;

        if ($request->hasFile('gambar')) {
            $path = $request->file('gambar')->store('public/gambar_baju');
            $baju->gambar = basename($path);
        }

        $baju->save();

        return redirect()->route('baju.tambah')->with('success', 'Baju berhasil disimpan.');
    }
public function lihatBaju()
{
    // Ambil toko milik user login
    $toko = Toko::where('user_id', Auth::id())->first();

    if (!$toko) {
        return redirect()->back()->with('error', 'Toko tidak ditemukan.');
    }

    // Ambil semua baju milik toko tersebut
    $bajus = Baju::where('toko_id', $toko->id)->get();

    return view('baju.lihat', compact('bajus'));
}

}