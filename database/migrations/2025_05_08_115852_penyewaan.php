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
        Schema::create('penyewaan', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('user')->onDelete('cascade');
            $table->foreignId('baju_id')->constrained('baju_adat')->onDelete('cascade');
            $table->date('tanggal_sewa');
            $table->integer('lama_sewa');
            $table->decimal('total_bayar', 10, 2);
            $table->enum('status', ['pending', 'dibayar', 'selesai'])->default('pending');
            $table->timestamps();
        });
        
        //
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('penyewaan');
        //
    }
};
