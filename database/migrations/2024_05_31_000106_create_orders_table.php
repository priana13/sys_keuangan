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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('kode_transaksi',100);
            $table->unsignedBigInteger('user_id');
            $table->date('tanggal');
            $table->integer('nominal');
            $table->unsignedBigInteger('product_id');
            $table->string('status_transaksi')->default("Pending"); // Pending;Expired;Paid
            $table->string('catatan')->nullable();
            $table->string('snap_token')->nullable(); // khusus midtrans 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
