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

        // tanggal,
        // type,
        // nominal,
        // kategori_id,
        // users_id,
        // keterangan,
        // kas_id,
        // metode_bayar,

        Schema::create('transaksi', function (Blueprint $table) {
            $table->id();
            $table->date('tanggal');
            $table->string('type');
            $table->integer('nominal');
            $table->string('keterangan');

            $table->unsignedBigInteger('kategori_id');
            $table->foreign('kategori_id')->references('id')->on('kategori');

            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');

            $table->unsignedBigInteger('kas_id');
            $table->foreign('kas_id')->references('id')->on('kas');

            $table->enum('metode_bayar', ['cash', 'bank']); // cash, bank

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transaksi');
    }
};
