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
        Schema::table('kas', function (Blueprint $table) {
            $table->integer('saldo_awal')->nullable()->default(0);
            $table->date('tanggal_saldo_awal')->nullable();
            $table->integer('saldo_akhir')->nullable()->default(0);
            $table->date('tanggal_saldo_akhir')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('kas', function (Blueprint $table) {
            $table->dropColumn('saldo_awal');
            $table->dropColumn('tanggal_saldo_awal');
            $table->dropColumn('saldo_akhir');
            $table->dropColumn('tanggal_saldo_akhir');
        });
    }
};
