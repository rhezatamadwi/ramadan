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
            $table->unsignedTinyInteger('is_khatam')->unsigned()->default(0)->after('⁠percentage_all');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::table('laporan_progress_tilawah', function (Blueprint $table) {
            $table->dropColumn('is_khatam');
        });
    }
};
