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
        Schema::create('nota_bon', function (Blueprint $table) {
            $table->id();
            $table->date('tanggal');
            $table->string('nama_suplier',100);
            $table->integer('total');
            $table->string('status', 20); // Sudah Dibayar , Belum Dibayar
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nota_bon');
    }
};
