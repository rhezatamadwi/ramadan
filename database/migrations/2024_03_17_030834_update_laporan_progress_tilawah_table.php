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
        //
        Schema::table('laporan_progress_tilawah', function (Blueprint $table) {
            $table->bigInteger('id_user')->unsigned()->change();
            $table->bigInteger('id_surah')->unsigned()->change();

            $table->foreign('id_user')->references('id')->on('users');
            $table->foreign('id_surah')->references('id')->on('surahs');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::table('laporan_progress_tilawah', function (Blueprint $table) {
            $table->dropColumn('id_user');
            $table->dropColumn('id_surah');
        });
    }
};
