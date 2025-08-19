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
        // sintaks di bawah untuk membuat tabel produk
        Schema::create('tb_produk', function (Blueprint $table) {
            $table->id('id_produk');// defaultnya adalah id
            $table->string('nama_produk', 150);
            $table->integer('harga');
            $table->text('deskripsi_produk');
            $table->integer('kategori_id');
            $table->timestamps(); // ini untuk membuat kolom created_at dan updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produks');
    }
};
