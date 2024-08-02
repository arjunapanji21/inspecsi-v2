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
        Schema::create('data_assessments', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('assessment_id');
            $table->string('nama_pasien')->nullable();
            $table->string('no_rm')->nullable();
            $table->string('tgl_lahir')->nullable();
            $table->string('diagnosa_medis')->nullable();
            $table->string('ruang_rawat')->nullable();
            $table->string('pendidikan')->nullable();
            $table->string('tgl_masuk')->nullable();
            $table->string('tgl_assessment')->nullable();
            $table->string('keluhan_utama')->nullable();
            $table->text('riwayat_kesehatan_sekarang')->nullable();
            $table->enum('penyakit_genetik', ['Tidak Ada', 'Ada']);
            $table->string('ket_penyakit_genetik')->nullable();
            $table->enum('trauma', ['Tidak Ada', 'Ada']);
            $table->enum('operasi', ['Tidak Pernah', 'Pernah']);
            $table->enum('penyakit_lainnya', ['Tidak Ada', 'Ada']);
            $table->string('ket_penyakit_lainnya')->nullable();
            $table->text('riwayat_kesehatan_keluarga')->nullable();
            $table->enum('auto_anamnesa_pasien', ['Kompeten', 'Tidak Kompeten']);
            $table->string('nama_pemberi_informasi')->nullable();
            $table->enum('batuk', ['Tidak', 'Ya']);
            $table->string('lama_batuk')->nullable();
            $table->enum('sputum', ['Tidak', 'Ya']);
            $table->enum('ket_sputum', ['Kental', 'Encer', 'Darah']);
            $table->enum('sesak_nafas', ['Tidak', 'Ya']);
            $table->string('ket_sesak_nafas')->nullable();
            $table->enum('alat_bantu_nafas', ['Tidak', 'Ya']);
            $table->string('tekanan_darah')->nullable();
            $table->string('suhu')->nullable();
            $table->string('nadi')->nullable();
            $table->string('pernapasan')->nullable();
            $table->string('spo2')->nullable();
            $table->string('crt')->nullable();
            $table->enum('akral', ['Hangat', 'Dingin']);
            $table->enum('kesulitan_minum', ['Tidak', 'Ya']);
            $table->enum('status_puasa', ['Tidak', 'Ya']);
            $table->enum('turgor_kulit', ['Baik', 'Menurun']);
            $table->enum('edema', ['Tidak', 'Ya']);
            $table->string('derajat_edema')->nullable();
            $table->enum('muntah', ['Tidak', 'Ya']);
            $table->string('freq_muntah')->nullable();
            $table->enum('kebutuhan_nutrisi', ['Enterasi', 'Parenteral']);
            $table->string('tb')->nullable();
            $table->string('bb')->nullable();
            $table->enum('imt', ['Underweight', 'Normal', 'Overweight', 'Obesity']);
            $table->enum('masalah_bab', ['Tidak Ada', 'Ada']);
            $table->string('ket_bab')->nullable();
            $table->string('freq_bab')->nullable();
            $table->enum('diare', ['Tidak', 'Ya']);
            $table->string('freq_diare')->nullable();
            $table->enum('masalah_bak', ['Tidak Ada', 'Ada']);
            $table->string('ket_bak')->nullable();
            $table->string('freq_bak')->nullable();
            $table->string('pola_tidur')->nullable();
            $table->string('durasi_tidur')->nullable();
            $table->enum('gangguan_tidur', ['Tidak', 'Ya']);
            $table->string('ket_gangguan_tidur')->nullable();
            $table->string('kesadaran')->nullable();
            $table->enum('gangguan_reproduksi', ['Tidak Ada', 'Ada']);
            $table->string('ket_gangguan_reproduksi')->nullable();
            $table->enum('psikologis', ['Tenang', 'Cemas', 'Takut', 'Marah/Agresif', 'Kecenderungan Bunuh Diri', 'Lain-lain']);
            $table->string('ket_psikologis')->nullable();
            $table->enum('status_perkawinan', ['Belum Kawin', 'Kawin', 'Cerai Hidup', 'Cerai Mati']);
            $table->enum('pola_interaksi_sosial', ['Baik', 'Buruk']);
            $table->enum('support_system', ['Keluarga', 'Panti Sosial / Jompo', 'Terlantar']);
            $table->string('pekerjaan')->nullable();
            $table->string('pembiayaan')->nullable();
            $table->string('pj_pasien')->nullable();
            $table->enum('alergi', ['Tidak Ada', 'Ada']);
            $table->string('ket_alergi')->nullable();
            $table->string('reaksi_alergi')->nullable();
            $table->enum('keluhan_nyeri', ['Tidak Ada', 'Ada']);
            $table->string('nyeri_sejak')->nullable();
            $table->string('faktor_nyeri')->nullable();
            $table->string('karakteristik_nyeri')->nullable();
            $table->string('lokasi_nyeri')->nullable();
            $table->string('skala_nyeri')->nullable();
            $table->string('durasi_nyeri')->nullable();
            $table->enum('kebutuhan_edukasi', ['Perawatan', 'Nutrisi', 'Manajemen Nyeri', 'Perawatan Luka', 'Pengobatan', 'Aktivitas dan Latihan', 'Pencegahan Infeksi', 'Lainnya']);
            $table->string('ket_edukasi')->nullable();
            $table->enum('usia_diatas_65', ['Tidak', 'Ya']);
            $table->enum('keterbatasan_mobilitas', ['Tidak', 'Ya']);
            $table->enum('pengobatan_lanjut', ['Tidak', 'Ya']);
            $table->enum('bantuan_aktivitas_harian', ['Tidak', 'Ya']);
            $table->text('riwayat_penggunaan_obat')->nullable();
            $table->enum('assessment_populasi_khusus', ['Geriatrik', 'Kemoterapi', 'Hemodialisa', 'Terminal', 'Perioperatif', 'Lainnya']);
            $table->string('ket_assessment_populasi_khusus')->nullable();
            $table->string('hasil_lab')->nullable();
            $table->string('hasil_rontgen')->nullable();
            $table->string('hasil_lainnya')->nullable();
            $table->string('data_subjektif')->nullable();
            $table->string('data_objektif')->nullable();
            $table->string('penyebab_etiologi')->nullable();
            $table->string('masalah')->nullable();
            $table->text('masalah_keperawatan')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_assessments');
    }
};
