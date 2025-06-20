<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\Baju;
use App\Models\Kategori;
use App\Models\User;
use App\Models\Toko;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TokoController extends Controller
{
    // ✅ Halaman dashboard pemilik
    public function dashboardToko()
    {
        return view('pemiliktoko.index');
    }

    // ✅ Menampilkan form tambah baju
    public function tambahBaju()
    {
        $toko = Toko::all();
        return view('pemiliktoko.tambah-baju', compact('toko'));
    }

    // ✅ Menyimpan data baju ke database
    public function simpan(Request $request)
    {
        $request->validate([
            'toko_id'=> 'required',
            'nama_baju'     => 'required|string|max:255',
            'ukuran'        => 'required|string|max:50',
            'stok'          => 'required|integer',
            'harga_sewa'    => 'required|numeric',
            'deskripsi'     => 'required|string',
            'gambar'        => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

       
        // Cek ID user yang login
        $userId = Auth::id();

        // Ambil toko milik user login
        // $toko = Toko::where('user_id', $userId)->first();

        // if (!$toko) {
        //     // Debug opsional: tampilkan id user jika toko tidak ditemukan
        //     // dd("User ID:", $userId, "Toko tidak ditemukan");
        //     return redirect()->back()->with('error', 'Toko tidak ditemukan. Silakan buat toko terlebih dahulu.');
        // }

        // Simpan data baju
        $baju = new Baju();
        $baju->toko_id      = $request->toko_id;
        $baju->nama_baju    = $request->nama_baju;
        $baju->ukuran       = $request->ukuran;
        $baju->stok         = $request->stok;
        $baju->harga_sewa   = $request->harga_sewa;
        $baju->deskripsi    = $request->deskripsi;

        if ($request->hasFile('gambar')) {
$path = $request->file('gambar')->store('public/gambar_baju');
$baju->gambar = str_replace('public/', '', $path); // hasil: "gambar_baju/nama.jpg"

        }

        $baju->save();

        return redirect()->route('lihat-baju')->with('success', 'Baju berhasil disimpan.');
    }

   // ✅ Fungsi lihatBaju
    public function lihatBaju()
    {
        $bajus = Baju::all();
        return view('pemiliktoko.lihat-baju', compact('bajus'));
    }
    // ✅ Menampilkan detail baju
    public function detailBaju($id)
    {
        $baju = Baju::findOrFail($id);
        return view('pemiliktoko.detail-baju', compact('baju'));
    }
}
