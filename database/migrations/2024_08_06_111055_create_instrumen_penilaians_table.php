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
        Schema::create('instrumen_penilaians', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('assessment_id');
            $table->bigInteger('karu_id');
            $table->bigInteger('katim_id');
            $table->enum('identitas_pasien', ['Tidak Lengkap', 'Lengkap']);
            $table->enum('alasan_masuk', ['Tidak Lengkap', 'Lengkap']);
            $table->enum('riwayat_penyakit_sekarang', ['Tidak Lengkap', 'Lengkap']);
            $table->enum('riwayat_kesehatan_dulu', ['Tidak Lengkap', 'Lengkap']);
            $table->enum('pemeriksaan_fisik', ['Tidak Lengkap', 'Lengkap']);
            $table->enum('data_psikologis', ['Tidak Lengkap', 'Lengkap']);
            $table->enum('pemeriksaan_penunjang', ['Tidak Lengkap', 'Lengkap']);
            $table->enum('terapi_pengobatan', ['Tidak Lengkap', 'Lengkap']);
            $table->enum('identifikasi_data', ['Tidak Lengkap', 'Lengkap']);
            $table->enum('penyebab_etiologi', ['Tidak Lengkap', 'Lengkap']);
            $table->enum('masalah_keperawatan', ['Tidak Lengkap', 'Lengkap']);
            $table->enum('rumusan_pes', ['Tidak Lengkap', 'Lengkap']);
            $table->enum('rumusan_masalah', ['Tidak Lengkap', 'Lengkap']);
            $table->enum('membuat_tujuan', ['Tidak Lengkap', 'Lengkap']);
            $table->enum('kriteria_hasil', ['Tidak Lengkap', 'Lengkap']);
            $table->enum('rencana_keperawatan', ['Tidak Lengkap', 'Lengkap']);
            $table->enum('rencana_tindakan', ['Tidak Lengkap', 'Lengkap']);
            $table->enum('kesesuaian_tindakan', ['Tidak Lengkap', 'Lengkap']);
            $table->enum('tindakan_kolaboratif', ['Tidak Lengkap', 'Lengkap']);
            $table->enum('pendidikan_kesehatan', ['Tidak Lengkap', 'Lengkap']);
            $table->enum('catatan_perkembangan', ['Tidak Lengkap', 'Lengkap']);
            $table->enum('modifikasi_rencana_tindakan', ['Tidak Lengkap', 'Lengkap']);
            $table->bigInteger('score')->default(0);
            $table->text('rekomendasi')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('instrumen_penilaians');
    }
};
