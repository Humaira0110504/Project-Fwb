<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('bajus', function (Blueprint $table) {
        $table->id();
        $table->unsignedBigInteger('toko_id'); // aktifkan relasi toko
        $table->string('nama_baju', 100);
        $table->string('ukuran', 10);
        $table->integer('stok');
        $table->decimal('harga_sewa', 10, 2);
        $table->text('deskripsi');
        $table->string('gambar', 255);
        $table->timestamps();

        // Foreign key ke tabel tokos
        $table->foreign('toko_id')->references('id')->on('users')->onDelete('cascade');
    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bajus');
    }
};