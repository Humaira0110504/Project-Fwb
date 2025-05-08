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
        Schema::create('pesan', function (Blueprint $table) {
            $table->id();
            $table->foreignId('dari_user_id')->constrained('user')->onDelete('cascade');
            $table->foreignId('ke_pemilik_id')->constrained('user')->onDelete('cascade');
            $table->text('isi_pesan');
            $table->dateTime('waktu_kirim');
            $table->timestamps();
        });
        
        //
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pesan');
        //
    }
};
