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
        Schema::create('catatan_perkembangan_pasiens', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('data_assessment_id');
            $table->string('tanggal');
            $table->string('masalah_keperawatan');
            $table->string('implementasi');
            $table->string('subjektif')->nullable();
            $table->string('objek')->nullable();
            $table->string('assessment')->nullable();
            $table->string('plan')->nullable();
            $table->bigInteger('user_id')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('catatan_perkembangan_pasiens');
    }
};
