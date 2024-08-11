@extends('layout')

@section('content')
<section class="min-h-screen bg-gray-50 dark:bg-gray-900">
    <div class="mx-auto max-w-screen-lg">
        @if(auth()->user()->role == "Kepala Ruang")
        <form action="{{route('penilaian_submit', $assessment->id)}}" method="post">
            @csrf
            <h2 class="mb-4 text-xl font-bold text-gray-900 dark:text-white">Instrumen Penilaian Supervisi Asuhan Keperawatan</h2>
            <div class="border-b border-b-gray-300 pb-8 mb-4">
                <div class="grid gap-4 grid-cols-2 sm:gap-6">
                    <div class="w-full">
                        <label for="karu" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kepala Ruang</label>
                        <input type="text" name="karu" id="karu" class="bg-gray-200 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" value="{{$assessment->karu->name}}" placeholder="Nama Kepala Ruang" disabled>
                    </div>
                    <div class="w-full">
                        <label for="katim" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Ketua Tim</label>
                        <input type="text" name="katim" id="katim" class="bg-gray-200 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" value="{{$assessment->katim->name}}" placeholder="Nama Ketua Tim" disabled>
                    </div>
                    <div class="w-full">
                        <label for="ruangan" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Ruangan</label>
                        <input type="text" name="ruangan" id="ruangan" class="bg-gray-200 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" value="{{$assessment->karu->room->name}}" placeholder="Nama Ruangan" disabled>
                    </div>
                    <div class="w-full">
                        <label for="tanggal" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tanggal</label>
                        <input type="date" name="tanggal" id="tanggal" class="bg-gray-200 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" value="{{$assessment->assessment_date}}" placeholder="Tanggal" disabled>
                    </div>
                </div>
            </div>
            <h2 class="mb-4 text-xl font-bold text-gray-900 dark:text-white">Aspek Penilaian</h2>
            <h3 class="mb-4 font-bold text-gray-900 dark:text-white">A. Ketepatan Pengkajian Data Primer</h3>
            <div class="border-b border-b-gray-300 pb-8 mb-4">
                <div class="grid gap-4 lg:grid-cols-2 sm:gap-6">
                    <div class="w-full grid grid-cols-2 gap-5 items-center">
                        <label for="identitas_pasien" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Identitas Pasien</label>
                        <select onchange="getSelectedValues()" id="identitas_pasien" name="identitas_pasien" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                            <option value="Tidak Lengkap" selected>Tidak Lengkap</option>
                            <option @if($penilaian->identitas_pasien == "Lengkap") selected @endif value="Lengkap">Lengkap</option>
                        </select>
                    </div>
                    <div class="w-full grid grid-cols-2 gap-5 items-center">
                        <label for="alasan_masuk" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Alasan Pasien Masuk RS</label>
                        <select onchange="getSelectedValues()" id="alasan_masuk" name="alasan_masuk" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                            <option value="Tidak Lengkap" selected>Tidak Lengkap</option>
                            <option @if($penilaian->alasan_masuk == "Lengkap") selected @endif value="Lengkap">Lengkap</option>
                        </select>
                    </div>
                    <div class="w-full grid grid-cols-2 gap-5 items-center">
                        <label for="riwayat_penyakit_sekarang" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Riwayat Penyakit Saat Ini</label>
                        <select onchange="getSelectedValues()" id="riwayat_penyakit_sekarang" name="riwayat_penyakit_sekarang" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                            <option value="Tidak Lengkap" selected>Tidak Lengkap</option>
                            <option @if($penilaian->riwayat_penyakit_sekarang == "Lengkap") selected @endif value="Lengkap">Lengkap</option>
                        </select>
                    </div>
                    <div class="w-full grid grid-cols-2 gap-5 items-center">
                        <label for="riwayat_kesehatan_dulu" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Riwayat Kesehatan Masa Lalu</label>
                        <select onchange="getSelectedValues()" id="riwayat_kesehatan_dulu" name="riwayat_kesehatan_dulu" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                            <option value="Tidak Lengkap" selected>Tidak Lengkap</option>
                            <option @if($penilaian->riwayat_kesehatan_dulu == "Lengkap") selected @endif value="Lengkap">Lengkap</option>
                        </select>
                    </div>
                    <div class="w-full grid grid-cols-2 gap-5 items-center">
                        <label for="pemeriksaan_fisik" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Pemeriksaan Fisik</label>
                        <select onchange="getSelectedValues()" id="pemeriksaan_fisik" name="pemeriksaan_fisik" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                            <option value="Tidak Lengkap" selected>Tidak Lengkap</option>
                            <option @if($penilaian->pemeriksaan_fisik == "Lengkap") selected @endif value="Lengkap">Lengkap</option>
                        </select>
                    </div>
                    <div class="w-full grid grid-cols-2 gap-5 items-center">
                        <label for="data_psikologis" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Data Psikologis</label>
                        <select onchange="getSelectedValues()" id="data_psikologis" name="data_psikologis" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                            <option value="Tidak Lengkap" selected>Tidak Lengkap</option>
                            <option @if($penilaian->data_psikologis == "Lengkap") selected @endif value="Lengkap">Lengkap</option>
                        </select>
                    </div>
                </div>
            </div>

            <h3 class="mb-4 font-bold text-gray-900 dark:text-white">B. Ketepatan Pengkajian Data Sekunder</h3>
            <div class="border-b border-b-gray-300 pb-8 mb-4">
                <div class="grid gap-4 lg:grid-cols-2 sm:gap-6">
                    <div class="w-full grid grid-cols-2 gap-5 items-center">
                        <label for="pemeriksaan_penunjang" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Hasil Pemeriksaan Penunjang</label>
                        <select onchange="getSelectedValues()" id="pemeriksaan_penunjang" name="pemeriksaan_penunjang" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                            <option value="Tidak Lengkap" selected>Tidak Lengkap</option>
                            <option @if($penilaian->pemeriksaan_penunjang == "Lengkap") selected @endif value="Lengkap">Lengkap</option>
                        </select>
                    </div>
                    <div class="w-full grid grid-cols-2 gap-5 items-center">
                        <label for="terapi_pengobatan" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Terapi dan Pengobatan</label>
                        <select onchange="getSelectedValues()" id="terapi_pengobatan" name="terapi_pengobatan" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                            <option value="Tidak Lengkap" selected>Tidak Lengkap</option>
                            <option @if($penilaian->terapi_pengobatan == "Lengkap") selected @endif value="Lengkap">Lengkap</option>
                        </select>
                    </div>
                </div>
            </div>

            <h3 class="mb-4 font-bold text-gray-900 dark:text-white">C. Analisa Data</h3>
            <div class="border-b border-b-gray-300 pb-8 mb-4">
                <div class="grid gap-4 lg:grid-cols-2 sm:gap-6">
                    <div class="w-full grid grid-cols-2 gap-5 items-center">
                        <label for="identifikasi_data" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Identifikasi Data Senjang</label>
                        <select onchange="getSelectedValues()" id="identifikasi_data" name="identifikasi_data" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                            <option value="Tidak Lengkap" selected>Tidak Lengkap</option>
                            <option @if($penilaian->identifikasi_data == "Lengkap") selected @endif value="Lengkap">Lengkap</option>
                        </select>
                    </div>
                    <div class="w-full grid grid-cols-2 gap-5 items-center">
                        <label for="penyebab_etiologi" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Penulisan Penyebab/Etiologi</label>
                        <select onchange="getSelectedValues()" id="penyebab_etiologi" name="penyebab_etiologi" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                            <option value="Tidak Lengkap" selected>Tidak Lengkap</option>
                            <option @if($penilaian->penyebab_etiologi == "Lengkap") selected @endif value="Lengkap">Lengkap</option>
                        </select>
                    </div>
                    <div class="w-full grid grid-cols-2 gap-5 items-center">
                        <label for="masalah_keperawatan" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Penulisan Masalah Keperawatan</label>
                        <select onchange="getSelectedValues()" id="masalah_keperawatan" name="masalah_keperawatan" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                            <option value="Tidak Lengkap" selected>Tidak Lengkap</option>
                            <option @if($penilaian->masalah_keperawatan == "Lengkap") selected @endif value="Lengkap">Lengkap</option>
                        </select>
                    </div>
                </div>
            </div>

            <h3 class="mb-4 font-bold text-gray-900 dark:text-white">D. Diagnosa Keperawatan</h3>
            <div class="border-b border-b-gray-300 pb-8 mb-4">
                <div class="grid gap-4 lg:grid-cols-2 sm:gap-6">
                    <div class="w-full grid grid-cols-2 gap-5 items-center">
                        <label for="rumusan_pes" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Mencerminkan Rumusan PE/PES Berdasarkan SDKI</label>
                        <select onchange="getSelectedValues()" id="rumusan_pes" name="rumusan_pes" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                            <option value="Tidak Lengkap" selected>Tidak Lengkap</option>
                            <option @if($penilaian->rumusan_pes == "Lengkap") selected @endif value="Lengkap">Lengkap</option>
                        </select>
                    </div>
                    <div class="w-full grid grid-cols-2 gap-5 items-center">
                        <label for="rumusan_masalah" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Perumusan Prioritas Masalah</label>
                        <select onchange="getSelectedValues()" id="rumusan_masalah" name="rumusan_masalah" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                            <option value="Tidak Lengkap" selected>Tidak Lengkap</option>
                            <option @if($penilaian->rumusan_masalah == "Lengkap") selected @endif value="Lengkap">Lengkap</option>
                        </select>
                    </div>
                </div>
            </div>

            <h3 class="mb-4 font-bold text-gray-900 dark:text-white">E. Perencanaan</h3>
            <div class="border-b border-b-gray-300 pb-8 mb-4">
                <div class="grid gap-4 lg:grid-cols-2 sm:gap-6">
                    <div class="w-full grid grid-cols-2 gap-5 items-center">
                        <label for="membuat_tujuan" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Membuat Tujuan</label>
                        <select onchange="getSelectedValues()" id="membuat_tujuan" name="membuat_tujuan" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                            <option value="Tidak Lengkap" selected>Tidak Lengkap</option>
                            <option @if($penilaian->membuat_tujuan == "Lengkap") selected @endif value="Lengkap">Lengkap</option>
                        </select>
                    </div>
                    <div class="w-full grid grid-cols-2 gap-5 items-center">
                        <label for="kriteria_hasil" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kriteria Hasil Berdasarkan SLKI</label>
                        <select onchange="getSelectedValues()" id="kriteria_hasil" name="kriteria_hasil" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                            <option value="Tidak Lengkap" selected>Tidak Lengkap</option>
                            <option @if($penilaian->kriteria_hasil == "Lengkap") selected @endif value="Lengkap">Lengkap</option>
                        </select>
                    </div>
                    <div class="w-full grid grid-cols-2 gap-5 items-center">
                        <label for="rencana_keperawatan" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Rencana Keperawatan Melibatkan Pasien dan Keluarga</label>
                        <select onchange="getSelectedValues()" id="rencana_keperawatan" name="rencana_keperawatan" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                            <option value="Tidak Lengkap" selected>Tidak Lengkap</option>
                            <option @if($penilaian->rencana_keperawatan == "Lengkap") selected @endif value="Lengkap">Lengkap</option>
                        </select>
                    </div>
                    <div class="w-full grid grid-cols-2 gap-5 items-center">
                        <label for="rencana_tindakan" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Rencana Tindakan Mencerminkan Mandiri, Edukasi dan Kolaborasi</label>
                        <select onchange="getSelectedValues()" id="rencana_tindakan" name="rencana_tindakan" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                            <option value="Tidak Lengkap" selected>Tidak Lengkap</option>
                            <option @if($penilaian->rencana_tindakan == "Lengkap") selected @endif value="Lengkap">Lengkap</option>
                        </select>
                    </div>
                </div>
            </div>

            <h3 class="mb-4 font-bold text-gray-900 dark:text-white">F. Pelaksanaan</h3>
            <div class="border-b border-b-gray-300 pb-8 mb-4">
                <div class="grid gap-4 lg:grid-cols-2 sm:gap-6">
                    <div class="w-full grid grid-cols-2 gap-5 items-center">
                        <label for="kesesuaian_tindakan" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kesesuaian Tindakan Dengan Perencanaan</label>
                        <select onchange="getSelectedValues()" id="kesesuaian_tindakan" name="kesesuaian_tindakan" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                            <option value="Tidak Lengkap" selected>Tidak Lengkap</option>
                            <option @if($penilaian->kesesuaian_tindakan == "Lengkap") selected @endif value="Lengkap">Lengkap</option>
                        </select>
                    </div>
                    <div class="w-full grid grid-cols-2 gap-5 items-center">
                        <label for="tindakan_kolaboratif" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tindakan Kolaboratif Sesuai Kebutuhan</label>
                        <select onchange="getSelectedValues()" id="tindakan_kolaboratif" name="tindakan_kolaboratif" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                            <option value="Tidak Lengkap" selected>Tidak Lengkap</option>
                            <option @if($penilaian->tindakan_kolaboratif == "Lengkap") selected @endif value="Lengkap">Lengkap</option>
                        </select>
                    </div>
                    <div class="w-full grid grid-cols-2 gap-5 items-center">
                        <label for="pendidikan_kesehatan" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Memberikan Pendidikan Kesehatan Sesuai Rencana</label>
                        <select onchange="getSelectedValues()" id="pendidikan_kesehatan" name="pendidikan_kesehatan" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                            <option value="Tidak Lengkap" selected>Tidak Lengkap</option>
                            <option @if($penilaian->pendidikan_kesehatan == "Lengkap") selected @endif value="Lengkap">Lengkap</option>
                        </select>
                    </div>
                </div>
            </div>
            <h3 class="mb-4 font-bold text-gray-900 dark:text-white">G. Evaluasi</h3>
            <div class="border-b border-b-gray-300 pb-8 mb-4">
                <div class="grid gap-4 lg:grid-cols-2 sm:gap-6">
                    <div class="w-full grid grid-cols-2 gap-5 items-center">
                        <label for="catatan_perkembangan" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Membuat Catatan Perkembangan SOAP Mengacu Pada Hasil</label>
                        <select onchange="getSelectedValues()" id="catatan_perkembangan" name="catatan_perkembangan" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                            <option value="Tidak Lengkap" selected>Tidak Lengkap</option>
                            <option @if($penilaian->catatan_perkembangan == "Lengkap") selected @endif value="Lengkap">Lengkap</option>
                        </select>
                    </div>
                    <div class="w-full grid grid-cols-2 gap-5 items-center">
                        <label for="modifikasi_rencana_tindakan" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Memodifikasi Rencana Tindakan</label>
                        <select onchange="getSelectedValues()" id="modifikasi_rencana_tindakan" name="modifikasi_rencana_tindakan" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                            <option value="Tidak Lengkap" selected>Tidak Lengkap</option>
                            <option @if($penilaian->modifikasi_rencana_tindakan == "Lengkap") selected @endif value="Lengkap">Lengkap</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="flex justify-between gap-4 mb-4">
                <div>
                    <h3 class=" font-bold text-gray-900 dark:text-white">Lengkap = <span id="lengkap">0</span></h3>
                    <h3 class=" font-bold text-gray-900 dark:text-white">Tidak Lengkap = <span id="tidak_lengkap">22</span></h3>
                </div>
                <h3 class=" text-right font-bold text-gray-900 dark:text-white">Score Penilaian: <br/><span class="text-4xl" id="result">{{$assessment->score}}</span></h3>
                <input type="hidden" id="score" name="score" value="" readonly>
            </div>

            <div class="w-full flex gap-2 justify-end">
                <button type="submit" class="inline-flex items-center px-5 py-2.5 mt-4 sm:mt-6 text-sm font-medium text-center text-white bg-primary-700 rounded-lg focus:ring-4 focus:ring-primary-200 dark:focus:ring-primary-900 hover:bg-primary-800">
                    Simpan
                </button>
                <a href="{{route('assessments')}}" class="inline-flex items-center px-5 py-2.5 mt-4 sm:mt-6 text-sm font-medium text-center text-primary-700 rounded-lg focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-900 hover:bg-gray-200">
                    Kembali
                </a>
            </div>
        </form>
        @endif

        @if(auth()->user()->role != "Kepala Ruang")
        <h2 class="mb-4 text-xl font-bold text-gray-900 dark:text-white">Instrumen Penilaian Supervisi Asuhan Keperawatan</h2>
        <div class="border-b border-b-gray-300 pb-8 mb-4">
            <div class="grid gap-4 grid-cols-2 sm:gap-6">
                <div class="w-full">
                    <label for="karu" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kepala Ruang</label>
                    <input type="text" name="karu" id="karu" class="bg-gray-200 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" value="{{$assessment->karu->name}}" placeholder="Nama Kepala Ruang" disabled>
                </div>
                <div class="w-full">
                    <label for="katim" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Ketua Tim</label>
                    <input type="text" name="katim" id="katim" class="bg-gray-200 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" value="{{$assessment->katim->name}}" placeholder="Nama Ketua Tim" disabled>
                </div>
                <div class="w-full">
                    <label for="ruangan" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Ruangan</label>
                    <input type="text" name="ruangan" id="ruangan" class="bg-gray-200 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" value="{{$assessment->karu->room->name}}" placeholder="Nama Ruangan" disabled>
                </div>
                <div class="w-full">
                    <label for="tanggal" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tanggal</label>
                    <input type="date" name="tanggal" id="tanggal" class="bg-gray-200 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" value="{{$assessment->assessment_date}}" placeholder="Tanggal" disabled>
                </div>
            </div>
        </div>
        <h2 class="mb-4 text-xl font-bold text-gray-900 dark:text-white">Aspek Penilaian</h2>
        <h3 class="mb-4 font-bold text-gray-900 dark:text-white">A. Ketepatan Pengkajian Data Primer</h3>
        <div class="border-b border-b-gray-300 pb-8 mb-4">
            <div class="grid gap-4 lg:grid-cols-2 sm:gap-6">
                <div class="w-full grid grid-cols-2 gap-5 items-center">
                    <label for="identitas_pasien" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Identitas Pasien</label>
                    <select disabled id="identitas_pasien" name="identitas_pasien" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                        <option value="Tidak Lengkap" selected>Tidak Lengkap</option>
                        <option @if($penilaian->identitas_pasien == "Lengkap") selected @endif value="Lengkap">Lengkap</option>
                    </select>
                </div>
                <div class="w-full grid grid-cols-2 gap-5 items-center">
                    <label for="alasan_masuk" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Alasan Pasien Masuk RS</label>
                    <select disabled id="alasan_masuk" name="alasan_masuk" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                        <option value="Tidak Lengkap" selected>Tidak Lengkap</option>
                        <option @if($penilaian->alasan_masuk == "Lengkap") selected @endif value="Lengkap">Lengkap</option>
                    </select>
                </div>
                <div class="w-full grid grid-cols-2 gap-5 items-center">
                    <label for="riwayat_penyakit_sekarang" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Riwayat Penyakit Saat Ini</label>
                    <select disabled id="riwayat_penyakit_sekarang" name="riwayat_penyakit_sekarang" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                        <option value="Tidak Lengkap" selected>Tidak Lengkap</option>
                        <option @if($penilaian->riwayat_penyakit_sekarang == "Lengkap") selected @endif value="Lengkap">Lengkap</option>
                    </select>
                </div>
                <div class="w-full grid grid-cols-2 gap-5 items-center">
                    <label for="riwayat_kesehatan_dulu" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Riwayat Kesehatan Masa Lalu</label>
                    <select disabled id="riwayat_kesehatan_dulu" name="riwayat_kesehatan_dulu" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                        <option value="Tidak Lengkap" selected>Tidak Lengkap</option>
                        <option @if($penilaian->riwayat_kesehatan_dulu == "Lengkap") selected @endif value="Lengkap">Lengkap</option>
                    </select>
                </div>
                <div class="w-full grid grid-cols-2 gap-5 items-center">
                    <label for="pemeriksaan_fisik" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Pemeriksaan Fisik</label>
                    <select disabled id="pemeriksaan_fisik" name="pemeriksaan_fisik" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                        <option value="Tidak Lengkap" selected>Tidak Lengkap</option>
                        <option @if($penilaian->pemeriksaan_fisik == "Lengkap") selected @endif value="Lengkap">Lengkap</option>
                    </select>
                </div>
                <div class="w-full grid grid-cols-2 gap-5 items-center">
                    <label for="data_psikologis" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Data Psikologis</label>
                    <select disabled id="data_psikologis" name="data_psikologis" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                        <option value="Tidak Lengkap" selected>Tidak Lengkap</option>
                        <option @if($penilaian->data_psikologis == "Lengkap") selected @endif value="Lengkap">Lengkap</option>
                    </select>
                </div>
            </div>
        </div>

        <h3 class="mb-4 font-bold text-gray-900 dark:text-white">B. Ketepatan Pengkajian Data Sekunder</h3>
        <div class="border-b border-b-gray-300 pb-8 mb-4">
            <div class="grid gap-4 lg:grid-cols-2 sm:gap-6">
                <div class="w-full grid grid-cols-2 gap-5 items-center">
                    <label for="pemeriksaan_penunjang" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Hasil Pemeriksaan Penunjang</label>
                    <select disabled id="pemeriksaan_penunjang" name="pemeriksaan_penunjang" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                        <option value="Tidak Lengkap" selected>Tidak Lengkap</option>
                        <option @if($penilaian->pemeriksaan_penunjang == "Lengkap") selected @endif value="Lengkap">Lengkap</option>
                    </select>
                </div>
                <div class="w-full grid grid-cols-2 gap-5 items-center">
                    <label for="terapi_pengobatan" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Terapi dan Pengobatan</label>
                    <select disabled id="terapi_pengobatan" name="terapi_pengobatan" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                        <option value="Tidak Lengkap" selected>Tidak Lengkap</option>
                        <option @if($penilaian->terapi_pengobatan == "Lengkap") selected @endif value="Lengkap">Lengkap</option>
                    </select>
                </div>
            </div>
        </div>

        <h3 class="mb-4 font-bold text-gray-900 dark:text-white">C. Analisa Data</h3>
        <div class="border-b border-b-gray-300 pb-8 mb-4">
            <div class="grid gap-4 lg:grid-cols-2 sm:gap-6">
                <div class="w-full grid grid-cols-2 gap-5 items-center">
                    <label for="identifikasi_data" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Identifikasi Data Senjang</label>
                    <select disabled id="identifikasi_data" name="identifikasi_data" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                        <option value="Tidak Lengkap" selected>Tidak Lengkap</option>
                        <option @if($penilaian->identifikasi_data == "Lengkap") selected @endif value="Lengkap">Lengkap</option>
                    </select>
                </div>
                <div class="w-full grid grid-cols-2 gap-5 items-center">
                    <label for="penyebab_etiologi" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Penulisan Penyebab/Etiologi</label>
                    <select disabled id="penyebab_etiologi" name="penyebab_etiologi" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                        <option value="Tidak Lengkap" selected>Tidak Lengkap</option>
                        <option @if($penilaian->penyebab_etiologi == "Lengkap") selected @endif value="Lengkap">Lengkap</option>
                    </select>
                </div>
                <div class="w-full grid grid-cols-2 gap-5 items-center">
                    <label for="masalah_keperawatan" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Penulisan Masalah Keperawatan</label>
                    <select disabled id="masalah_keperawatan" name="masalah_keperawatan" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                        <option value="Tidak Lengkap" selected>Tidak Lengkap</option>
                        <option @if($penilaian->masalah_keperawatan == "Lengkap") selected @endif value="Lengkap">Lengkap</option>
                    </select>
                </div>
            </div>
        </div>

        <h3 class="mb-4 font-bold text-gray-900 dark:text-white">D. Diagnosa Keperawatan</h3>
        <div class="border-b border-b-gray-300 pb-8 mb-4">
            <div class="grid gap-4 lg:grid-cols-2 sm:gap-6">
                <div class="w-full grid grid-cols-2 gap-5 items-center">
                    <label for="rumusan_pes" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Mencerminkan Rumusan PE/PES Berdasarkan SDKI</label>
                    <select disabled id="rumusan_pes" name="rumusan_pes" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                        <option value="Tidak Lengkap" selected>Tidak Lengkap</option>
                        <option @if($penilaian->rumusan_pes == "Lengkap") selected @endif value="Lengkap">Lengkap</option>
                    </select>
                </div>
                <div class="w-full grid grid-cols-2 gap-5 items-center">
                    <label for="rumusan_masalah" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Perumusan Prioritas Masalah</label>
                    <select disabled id="rumusan_masalah" name="rumusan_masalah" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                        <option value="Tidak Lengkap" selected>Tidak Lengkap</option>
                        <option @if($penilaian->rumusan_masalah == "Lengkap") selected @endif value="Lengkap">Lengkap</option>
                    </select>
                </div>
            </div>
        </div>

        <h3 class="mb-4 font-bold text-gray-900 dark:text-white">E. Perencanaan</h3>
        <div class="border-b border-b-gray-300 pb-8 mb-4">
            <div class="grid gap-4 lg:grid-cols-2 sm:gap-6">
                <div class="w-full grid grid-cols-2 gap-5 items-center">
                    <label for="membuat_tujuan" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Membuat Tujuan</label>
                    <select disabled id="membuat_tujuan" name="membuat_tujuan" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                        <option value="Tidak Lengkap" selected>Tidak Lengkap</option>
                        <option @if($penilaian->membuat_tujuan == "Lengkap") selected @endif value="Lengkap">Lengkap</option>
                    </select>
                </div>
                <div class="w-full grid grid-cols-2 gap-5 items-center">
                    <label for="kriteria_hasil" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kriteria Hasil Berdasarkan SLKI</label>
                    <select disabled id="kriteria_hasil" name="kriteria_hasil" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                        <option value="Tidak Lengkap" selected>Tidak Lengkap</option>
                        <option @if($penilaian->kriteria_hasil == "Lengkap") selected @endif value="Lengkap">Lengkap</option>
                    </select>
                </div>
                <div class="w-full grid grid-cols-2 gap-5 items-center">
                    <label for="rencana_keperawatan" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Rencana Keperawatan Melibatkan Pasien dan Keluarga</label>
                    <select disabled id="rencana_keperawatan" name="rencana_keperawatan" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                        <option value="Tidak Lengkap" selected>Tidak Lengkap</option>
                        <option @if($penilaian->rencana_keperawatan == "Lengkap") selected @endif value="Lengkap">Lengkap</option>
                    </select>
                </div>
                <div class="w-full grid grid-cols-2 gap-5 items-center">
                    <label for="rencana_tindakan" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Rencana Tindakan Mencerminkan Mandiri, Edukasi dan Kolaborasi</label>
                    <select disabled id="rencana_tindakan" name="rencana_tindakan" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                        <option value="Tidak Lengkap" selected>Tidak Lengkap</option>
                        <option @if($penilaian->rencana_tindakan == "Lengkap") selected @endif value="Lengkap">Lengkap</option>
                    </select>
                </div>
            </div>
        </div>

        <h3 class="mb-4 font-bold text-gray-900 dark:text-white">F. Pelaksanaan</h3>
        <div class="border-b border-b-gray-300 pb-8 mb-4">
            <div class="grid gap-4 lg:grid-cols-2 sm:gap-6">
                <div class="w-full grid grid-cols-2 gap-5 items-center">
                    <label for="kesesuaian_tindakan" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kesesuaian Tindakan Dengan Perencanaan</label>
                    <select disabled id="kesesuaian_tindakan" name="kesesuaian_tindakan" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                        <option value="Tidak Lengkap" selected>Tidak Lengkap</option>
                        <option @if($penilaian->kesesuaian_tindakan == "Lengkap") selected @endif value="Lengkap">Lengkap</option>
                    </select>
                </div>
                <div class="w-full grid grid-cols-2 gap-5 items-center">
                    <label for="tindakan_kolaboratif" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tindakan Kolaboratif Sesuai Kebutuhan</label>
                    <select disabled id="tindakan_kolaboratif" name="tindakan_kolaboratif" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                        <option value="Tidak Lengkap" selected>Tidak Lengkap</option>
                        <option @if($penilaian->tindakan_kolaboratif == "Lengkap") selected @endif value="Lengkap">Lengkap</option>
                    </select>
                </div>
                <div class="w-full grid grid-cols-2 gap-5 items-center">
                    <label for="pendidikan_kesehatan" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Memberikan Pendidikan Kesehatan Sesuai Rencana</label>
                    <select disabled id="pendidikan_kesehatan" name="pendidikan_kesehatan" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                        <option value="Tidak Lengkap" selected>Tidak Lengkap</option>
                        <option @if($penilaian->pendidikan_kesehatan == "Lengkap") selected @endif value="Lengkap">Lengkap</option>
                    </select>
                </div>
            </div>
        </div>
        <h3 class="mb-4 font-bold text-gray-900 dark:text-white">G. Evaluasi</h3>
        <div class="border-b border-b-gray-300 pb-8 mb-4">
            <div class="grid gap-4 lg:grid-cols-2 sm:gap-6">
                <div class="w-full grid grid-cols-2 gap-5 items-center">
                    <label for="catatan_perkembangan" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Membuat Catatan Perkembangan SOAP Mengacu Pada Hasil</label>
                    <select disabled id="catatan_perkembangan" name="catatan_perkembangan" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                        <option value="Tidak Lengkap" selected>Tidak Lengkap</option>
                        <option @if($penilaian->catatan_perkembangan == "Lengkap") selected @endif value="Lengkap">Lengkap</option>
                    </select>
                </div>
                <div class="w-full grid grid-cols-2 gap-5 items-center">
                    <label for="modifikasi_rencana_tindakan" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Memodifikasi Rencana Tindakan</label>
                    <select disabled id="modifikasi_rencana_tindakan" name="modifikasi_rencana_tindakan" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                        <option value="Tidak Lengkap" selected>Tidak Lengkap</option>
                        <option @if($penilaian->modifikasi_rencana_tindakan == "Lengkap") selected @endif value="Lengkap">Lengkap</option>
                    </select>
                </div>
            </div>
        </div>

        <div class="flex justify-between gap-4 mb-4">
            <div>
                <h3 class=" font-bold text-gray-900 dark:text-white">Lengkap = <span id="lengkap">0</span></h3>
                <h3 class=" font-bold text-gray-900 dark:text-white">Tidak Lengkap = <span id="tidak_lengkap">22</span></h3>
            </div>
            <h3 class=" text-right font-bold text-gray-900 dark:text-white">Score Penilaian: <br/><span class="text-4xl" id="result">{{$assessment->score}}</span></h3>
            <input type="hidden" id="score" name="score" value="" readonly>
        </div>
        <div class="w-full flex gap-2 justify-end">
            <a href="{{route('assessments')}}" class="inline-flex items-center px-5 py-2.5 mt-4 sm:mt-6 text-sm font-medium text-center text-white bg-primary-700 rounded-lg focus:ring-4 focus:ring-primary-200 dark:focus:ring-primary-900 hover:bg-primary-800">
                Kembali
            </a>
        </div>
        @endif
    </div>
</section>

@endsection

@section('script')
<script>
window.onload = getSelectedValues;
function getSelectedValues() {
  // Get the select elements by their IDs
  var selectedValues = [
    document.getElementById('identitas_pasien').value,
    document.getElementById('alasan_masuk').value,
    document.getElementById('riwayat_penyakit_sekarang').value,
    document.getElementById('riwayat_kesehatan_dulu').value,
    document.getElementById('pemeriksaan_fisik').value,
    document.getElementById('data_psikologis').value,
    document.getElementById('pemeriksaan_penunjang').value,
    document.getElementById('terapi_pengobatan').value,
    document.getElementById('identifikasi_data').value,
    document.getElementById('penyebab_etiologi').value,
    document.getElementById('masalah_keperawatan').value,
    document.getElementById('rumusan_pes').value,
    document.getElementById('rumusan_masalah').value,
    document.getElementById('membuat_tujuan').value,
    document.getElementById('kriteria_hasil').value,
    document.getElementById('rencana_keperawatan').value,
    document.getElementById('rencana_tindakan').value,
    document.getElementById('kesesuaian_tindakan').value,
    document.getElementById('tindakan_kolaboratif').value,
    document.getElementById('pendidikan_kesehatan').value,
    document.getElementById('catatan_perkembangan').value,
    document.getElementById('modifikasi_rencana_tindakan').value,
  ];

  // Create an object to store the selected values
  var lengkap = [];
  var tidak_lengkap = [];

  // Loop through each select element
  selectedValues.forEach(function(value, index) {
    if(value == "Lengkap"){
        lengkap.push(value);
    }else{
        tidak_lengkap.push(value);
    }
  });

  var score = (lengkap.length / 22) * 100;
  document.getElementById('lengkap').innerText = lengkap.length;
  document.getElementById('tidak_lengkap').innerText = tidak_lengkap.length;
  document.getElementById('result').innerText = score.toFixed(2);
  document.getElementById('score').value = score.toFixed(2);
}
</script>
@endsection