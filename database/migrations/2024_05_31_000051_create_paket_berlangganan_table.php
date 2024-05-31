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
        Schema::create('paket_berlangganan', function (Blueprint $table) {
            $table->id();
            $table->string('nama_produk');
            $table->text('keterangan')->nullable();
            $table->integer('harga');
            $table->integer('disc')->nullable();
            $table->integer('kapasitas')->default(1); // kapasitas bulan
            $table->boolean('status')->default(true); // 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('paket_berlangganan');
    }
};
