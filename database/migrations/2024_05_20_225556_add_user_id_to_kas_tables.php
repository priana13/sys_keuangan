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
            $table->unsignedBigInteger('user_id')->after('id');            
        });

        Schema::table('kategori', function (Blueprint $table) {
            $table->unsignedBigInteger('user_id')->after('id');
        });

        Schema::table('nota_bon', function (Blueprint $table) {
            $table->unsignedBigInteger('user_id')->after('id');
        });

        Schema::table('setting', function (Blueprint $table) {
            $table->unsignedBigInteger('user_id')->after('id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('kas', function (Blueprint $table) {
            $table->dropColumn('user_id');
        });

        Schema::table('kategori', function (Blueprint $table) {
            $table->dropColumn('user_id');
        });

        Schema::table('nota_bon', function (Blueprint $table) {
            $table->dropColumn('user_id');
        });

        Schema::table('setting', function (Blueprint $table) {
            $table->dropColumn('user_id');
        });
    }
};
