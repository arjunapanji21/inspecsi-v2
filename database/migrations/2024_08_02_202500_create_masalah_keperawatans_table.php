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
        Schema::create('masalah_keperawatans', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('kategori_masalah_keperawatan_id');
            $table->string('kode');
            $table->string('nama');
            $table->text('slki')->nullable();
            $table->text('intervensi')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('masalah_keperawatans');
    }
};
