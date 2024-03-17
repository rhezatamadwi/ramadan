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
        Schema::table('kegiatan', function (Blueprint $table) {
            $table->string('gambar')->nullable()->after('icon');
            $table->string('isi')->nullable()->after('gambar');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::table('kegiatan', function (Blueprint $table) {
            $table->dropColumn('gambar');
            $table->dropColumn('isi');
        });
    }
};
