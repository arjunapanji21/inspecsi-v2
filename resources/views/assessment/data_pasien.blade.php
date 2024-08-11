@extends('layout')

@section('content')
<section class="min-h-screen bg-gray-50 dark:bg-gray-900">
    <div class="mx-auto max-w-screen-lg">
        @if(auth()->user()->role == "Ketua Tim")
        <form action="{{route('data_pasien_submit', $data_pasien->id)}}" method="post">
            @csrf
            <div class="border-b border-b-gray-300 pb-8 mb-4">
                <h2 class="mb-4 text-xl font-bold text-gray-900 dark:text-white">Data Pasien</h2>
                <div class="grid gap-4 lg:grid-cols-2 sm:gap-6">
                    
                    <div class="w-full">
                        <label for="nama_pasien" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Pasien</label>
                        <input type="text" name="nama_pasien" id="nama_pasien" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" value="{{old('nama_pasien', $data_pasien->nama_pasien)}}" placeholder="Nama pasien" required="">
                    </div>
                    <div class="w-full">
                        <label for="no_rm" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">No. RM</label>
                        <input type="text" name="no_rm" id="no_rm" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" value="{{old('no_rm', $data_pasien->no_rm)}}" placeholder="No. RM" required="">
                    </div>
                    <div class="w-full">
                        <label for="tgl_lahir" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tanggal Lahir</label>
                        <input type="date" name="tgl_lahir" id="tgl_lahir" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" value="{{old('tgl_lahir', $data_pasien->tgl_lahir)}}" placeholder="Tanggal lahir pasien" required="">
                    </div>
                    <div class="w-full">
                        <label for="diagnosa_medis" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Diagnosa Medis</label>
                        <input type="text" name="diagnosa_medis" id="diagnosa_medis" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" value="{{old('diagnosa_medis', $data_pasien->diagnosa_medis)}}" placeholder="Diagnosa medis pasien" required="">
                    </div>
                    <div class="w-full">
                        <label for="ruang_rawat" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Ruang Rawat</label>
                        <input type="text" name="ruang_rawat" id="ruang_rawat" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" value="{{old('ruang_rawat', $data_pasien->ruang_rawat)}}" placeholder="Ruang rawat" required="">
                    </div>
                    <div class="w-full">
                        <label for="pendidikan" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Pendidikan</label>
                        <select  id="pendidikan" name="pendidikan" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                            <option disabled selected="">Pendidikan terakhir:</option>
                            <option @if($data_pasien->pendidikan == "Tidak Sekolah") selected @endif value="Tidak Sekolah">Tidak Sekolah</option>
                            <option @if($data_pasien->pendidikan == "SD") selected @endif value="SD">SD</option>
                            <option @if($data_pasien->pendidikan == "SLTP") selected @endif value="SLTP">SLTP</option>
                            <option @if($data_pasien->pendidikan == "SLTA") selected @endif value="SLTA">SLTA</option>
                            <option @if($data_pasien->pendidikan == "D3") selected @endif value="D3">D3</option>
                            <option @if($data_pasien->pendidikan == "D4/S1") selected @endif value="D4/S1">D4/S1</option>
                            <option @if($data_pasien->pendidikan == "S2") selected @endif value="S2">S2</option>
                            <option @if($data_pasien->pendidikan == "S3") selected @endif value="S3">S3</option>
                        </select>
                    </div>
                    <div class="w-full">
                        <label for="tgl_masuk" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tanggal Masuk</label>
                        <input type="date" name="tgl_masuk" id="tgl_masuk" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" value="{{old('tgl_masuk', $data_pasien->tgl_masuk)}}" placeholder="Tanggal masuk" required="">
                    </div>
                    <div class="w-full">
                        <label for="tgl_assessment" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tanggal Assessment</label>
                        <input type="date" name="tgl_assessment" id="tgl_assessment" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" value="{{old('tgl_assessment', $data_pasien->tgl_assessment)}}" placeholder="Tanggal assessment" required="">
                    </div>
                </div>
            </div>

            <div class="border-b border-b-gray-300 pb-8 mb-4">
                <h2 class="mb-4 text-xl font-bold text-gray-900 dark:text-white">Riwayat Kesehatan</h2>
                <div class="grid gap-4 lg:grid-cols-2 sm:gap-6">
                    
                    <div class="w-full">
                        <label for="keluhan_utama" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Keluhan Utama</label>
                        <input type="text" name="keluhan_utama" id="keluhan_utama" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" value="{{old('keluhan_utama', $data_pasien->keluhan_utama)}}" placeholder="Keluhan utama pasien" required="">
                    </div>
                    <div class="w-full">
                        <label for="riwayat_kesehatan_sekarang" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Riwayat Kesehatan Sekarang</label>
                        <input type="text" name="riwayat_kesehatan_sekarang" id="riwayat_kesehatan_sekarang" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" value="{{old('riwayat_kesehatan_sekarang', $data_pasien->riwayat_kesehatan_sekarang)}}" placeholder="Riwayat kesehatan pasien sekarang" required="">
                    </div>
                    <div class="w-full">
                        <label for="penyakit_genetik" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Penyakit Genetik</label>
                        <select  id="penyakit_genetik" name="penyakit_genetik" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                            <option value="Tidak Ada" selected>Tidak Ada</option>
                            <option value="Ada">Ada</option>
                        </select>
                    </div>
                    <div class="w-full">
                        <label for="ket_penyakit_genetik" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jelaskan Penyakit Genetik</label>
                        <input type="text" name="ket_penyakit_genetik" id="ket_penyakit_genetik" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" value="{{old('ket_penyakit_genetik', $data_pasien->ket_penyakit_genetik)}}" placeholder="Kosongkan bila tidak ada">
                    </div>
                    <div class="w-full">
                        <label for="trauma" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Trauma</label>
                        <select  id="trauma" name="trauma" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                            <option value="Tidak Ada" selected>Tidak Ada</option>
                            <option value="Ada">Ada</option>
                        </select>
                    </div>
                    <div class="w-full">
                        <label for="operasi" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Operasi</label>
                        <select  id="operasi" name="operasi" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                            <option value="Tidak Pernah" selected>Tidak Pernah</option>
                            <option value="Pernah">Pernah</option>
                        </select>
                    </div>
                    <div class="w-full">
                        <label for="penyakit_lainnya" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Penyakit Lainnya</label>
                        <select  id="penyakit_lainnya" name="penyakit_lainnya" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                            <option value="Tidak Ada" selected>Tidak Ada</option>
                            <option value="Ada">Ada</option>
                        </select>
                    </div>
                    <div class="w-full">
                        <label for="ket_penyakit_lainnya" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jelaskan Penyakit Lainnya</label>
                        <input type="text" name="ket_penyakit_lainnya" id="ket_penyakit_lainnya" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" value="{{old('ket_penyakit_lainnya', $data_pasien->ket_penyakit_lainnya)}}" placeholder="Kosongkan bila tidak ada">
                    </div>
                    <div class="w-full">
                        <label for="riwayat_kesehatan_keluarga" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Riwayat Kesehatan Keluarga</label>
                        <input type="text" name="riwayat_kesehatan_keluarga" id="riwayat_kesehatan_keluarga" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" value="{{old('riwayat_kesehatan_keluarga', $data_pasien->riwayat_kesehatan_keluarga)}}" placeholder="Riwayat kesehatan keluarga pasien" required="">
                    </div>
                    <div class="w-full">
                        <label for="auto_anamnesa_pasien" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Auto Anamnesa Pasien</label>
                        <select  id="auto_anamnesa_pasien" name="auto_anamnesa_pasien" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                            <option value="Kompeten" selected>Kompeten</option>
                            <option value="Tidak Kompeten">Tidak Kompeten</option>
                        </select>
                    </div>
                    <div class="w-full">
                        <label for="nama_pemberi_informasi" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Pemberi Informasi</label>
                        <input type="text" name="nama_pemberi_informasi" id="nama_pemberi_informasi" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" value="{{old('nama_pemberi_informasi', $data_pasien->nama_pemberi_informasi)}}" placeholder="Nama Pemberi Informasi" required="">
                    </div>
                </div>
            </div>

            <div class="border-b border-b-gray-300 pb-8 mb-4">
                <h2 class="mb-4 text-xl font-bold text-gray-900 dark:text-white">Status Fisik / Kebutuhan Fisiologis</h2>
                <div class="grid gap-4 lg:grid-cols-2 sm:gap-6">
                    <div class="w-full">
                        <label for="batuk" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Pasien Batuk-batuk?</label>
                        <select  id="batuk" name="batuk" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                            <option value="Tidak" selected>Tidak</option>
                            <option value="Ya">Ya</option>
                        </select>
                    </div>
                    <div class="w-full">
                        <label for="lama_batuk" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Sudah Berapa Lama Menderita Batuk?</label>
                        <input type="text" name="lama_batuk" id="lama_batuk" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" value="{{old('lama_batuk', $data_pasien->lama_batuk)}}" placeholder="Kosongkan bila pasien tidak menderita batuk">
                    </div>
                    <div class="w-full">
                        <label for="sputum" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Terdapat Sputum?</label>
                        <select  id="sputum" name="sputum" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                            <option value="Tidak" selected>Tidak</option>
                            <option value="Ya">Ya</option>
                        </select>
                    </div>
                    <div class="w-full">
                        <label for="ket_sputum" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Bentuk Sputum?</label>
                        <select  id="ket_sputum" name="ket_sputum" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                            <option value="Tidak Ada" selected>Tidak Ada</option>
                            <option value="Kental" >Kental</option>
                            <option value="Encer" >Encer</option>
                            <option value="Darah" >Darah</option>
                        </select>
                    </div>
                    <div class="w-full">
                        <label for="sesak_napas" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Pasien Menderita Sesak Napas?</label>
                        <select  id="sesak_napas" name="sesak_napas" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                            <option value="Tidak" selected>Tidak</option>
                            <option value="Ya">Ya</option>
                        </select>
                    </div>
                    <div class="w-full">
                        <label for="ket_sesak_napas" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Deskripsikan Sesak Napas Pasien</label>
                        <input type="text" name="ket_sesak_napas" id="ket_sesak_napas" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" value="{{old('ket_sesak_napas', $data_pasien->ket_sesak_napas)}}" placeholder="Kosongkan bila pasien tidak menderita sesak nafas">
                    </div>
                    <div class="w-full">
                        <label for="alat_bantu_napas" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Ada / Perlu Alat Bantu Napas?</label>
                        <select  id="alat_bantu_napas" name="alat_bantu_napas" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                            <option value="Tidak" selected>Tidak</option>
                            <option value="Ya">Ya</option>
                        </select>
                    </div>
                    <div class="w-full">
                        <label for="tekanan_darah" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tekanan Darah Pasien</label>
                        <input type="text" name="tekanan_darah" id="tekanan_darah" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" value="{{old('tekanan_darah', $data_pasien->tekanan_darah)}}" placeholder="Tekanan Darah Pasien" required>
                    </div>
                    <div class="w-full">
                        <label for="suhu" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Suhu Tubuh Pasien</label>
                        <input type="text" name="suhu" id="suhu" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" value="{{old('suhu', $data_pasien->suhu)}}" placeholder="Suhu Tubuh Pasien" required>
                    </div>
                    <div class="w-full">
                        <label for="nadi" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Denyut Nadi Pasien</label>
                        <input type="text" name="nadi" id="nadi" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" value="{{old('nadi', $data_pasien->nadi)}}" placeholder="Denyut Nadi Pasien" required>
                    </div>
                    <div class="w-full">
                        <label for="pernapasan" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Pernapasan Pasien</label>
                        <input type="text" name="pernapasan" id="pernapasan" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" value="{{old('pernapasan', $data_pasien->pernapasan)}}" placeholder="Pernapasan Pasien" required>
                    </div>
                    <div class="w-full">
                        <label for="spo2" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">SPO2</label>
                        <input type="text" name="spo2" id="spo2" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" value="{{old('spo2', $data_pasien->spo2)}}" placeholder="SPO2" required>
                    </div>
                    <div class="w-full">
                        <label for="crt" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">CRT</label>
                        <input type="text" name="crt" id="crt" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" value="{{old('crt', $data_pasien->crt)}}" placeholder="CRT" required>
                    </div>
                    <div class="w-full">
                        <label for="akral" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Akral</label>
                        <select  id="akral" name="akral" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                            <option value="Hangat" selected>Hangat</option>
                            <option value="Dingin">Dingin</option>
                        </select>
                    </div>
                    <div class="w-full">
                        <label for="kesulitan_minum" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Pasien Kesulitan Minum</label>
                        <select  id="kesulitan_minum" name="kesulitan_minum" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                            <option value="Tidak" selected>Tidak</option>
                            <option value="Ya">Ya</option>
                        </select>
                    </div>
                    <div class="w-full">
                        <label for="status_puasa" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Status Puasa</label>
                        <select  id="status_puasa" name="status_puasa" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                            <option value="Tidak" selected>Tidak</option>
                            <option value="Ya">Ya</option>
                        </select>
                    </div>
                    <div class="w-full">
                        <label for="turgor_kulit" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Turgor Kulit</label>
                        <select  id="turgor_kulit" name="turgor_kulit" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                            <option value="Baik" selected>Baik</option>
                            <option value="Menurun">Menurun</option>
                        </select>
                    </div>
                    <div class="w-full">
                        <label for="edema" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Edema</label>
                        <select  id="edema" name="edema" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                            <option value="Tidak" selected>Tidak</option>
                            <option value="Ya">Ya</option>
                        </select>
                    </div>
                    <div class="w-full">
                        <label for="derajat_edema" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Derajat Piting Edeme</label>
                        <input type="text" name="derajat_edema" id="derajat_edema" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" value="{{old('derajat_edema', $data_pasien->derajat_edema)}}" placeholder="Kosongkan bila tidak ada">
                    </div>
                    <div class="w-full">
                        <label for="muntah" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Muntah</label>
                        <select  id="muntah" name="muntah" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                            <option value="Tidak" selected>Tidak</option>
                            <option value="Ya">Ya</option>
                        </select>
                    </div>
                    <div class="w-full">
                        <label for="freq_muntah" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Frekuensi Muntah</label>
                        <input type="text" name="freq_muntah" id="freq_muntah" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" value="{{old('freq_muntah', $data_pasien->freq_muntah)}}" placeholder="Kosongkan bila tidak ada">
                    </div>
                    <div class="w-full">
                        <label for="kebutuhan_nutrisi" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kebutuhan Nutrisi</label>
                        <select  id="kebutuhan_nutrisi" name="kebutuhan_nutrisi" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                            <option value="Enterasi" selected>Enterasi</option>
                            <option value="Parenteral">Parenteral</option>
                        </select>
                    </div>
                    <div class="w-full">
                        <label for="tb" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tinggi Badan</label>
                        <input type="text" name="tb" id="tb" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" value="{{old('tb', $data_pasien->tb)}}" placeholder="Tinggi badan pasien" required>
                    </div>
                    <div class="w-full">
                        <label for="bb" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Berat Badan</label>
                        <input type="text" name="bb" id="bb" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" value="{{old('bb', $data_pasien->bb)}}" placeholder="Berat badan pasien" required>
                    </div>
                    <div class="w-full">
                        <label for="imt" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">IMT</label>
                        <select  id="imt" name="imt" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                            <option value="Underweight" selected>Underweight</option>
                            <option value="Normal">Normal</option>
                            <option value="Overweight">Overweight</option>
                            <option value="Obesity">Obesity</option>
                        </select>
                    </div>
                    <div class="w-full">
                        <label for="masalah_bab" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Masalah BAB</label>
                        <select  id="masalah_bab" name="masalah_bab" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                            <option value="Tidak Ada" selected>Tidak Ada</option>
                            <option value="Ada">Ada</option>
                        </select>
                    </div>
                    <div class="w-full">
                        <label for="ket_bab" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Keterangan BAB</label>
                        <input type="text" name="ket_bab" id="ket_bab" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" value="{{old('ket_bab', $data_pasien->ket_bab)}}" placeholder="Kosongkan bila tidak ada">
                    </div>
                    <div class="w-full">
                        <label for="freq_bab" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Frekuensi BAB</label>
                        <input type="text" name="freq_bab" id="freq_bab" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" value="{{old('freq_bab', $data_pasien->freq_bab)}}" placeholder="Kosongkan bila tidak ada">
                    </div>
                    <div class="w-full">
                        <label for="diare" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Diare</label>
                        <select  id="diare" name="diare" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                            <option value="Tidak" selected>Tidak</option>
                            <option value="Ya">Ya</option>
                        </select>
                    </div>
                    <div class="w-full">
                        <label for="freq_diare" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Frekuensi Diare</label>
                        <input type="text" name="freq_diare" id="freq_diare" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" value="{{old('freq_diare', $data_pasien->freq_diare)}}" placeholder="Kosongkan bila tidak ada">
                    </div>
                    <div class="w-full">
                        <label for="masalah_bak" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Masalah BAK</label>
                        <select  id="masalah_bak" name="masalah_bak" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                            <option value="Tidak Ada" selected>Tidak Ada</option>
                            <option value="Ada">Ada</option>
                        </select>
                    </div>
                    <div class="w-full">
                        <label for="ket_bak" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Keterangan BAK</label>
                        <input type="text" name="ket_bak" id="ket_bak" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" value="{{old('ket_bak', $data_pasien->ket_bak)}}" placeholder="Kosongkan bila tidak ada">
                    </div>
                    <div class="w-full">
                        <label for="freq_bak" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Frekuensi BAK</label>
                        <input type="text" name="freq_bak" id="freq_bak" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" value="{{old('freq_bak', $data_pasien->freq_bak)}}" placeholder="Kosongkan bila tidak ada">
                    </div>
                    <div class="w-full">
                        <label for="pola_tidur" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Pola Tidur</label>
                        <input type="text" name="pola_tidur" id="pola_tidur" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" value="{{old('pola_tidur', $data_pasien->pola_tidur)}}" placeholder="Pola Tidur Pasien" required>
                    </div>
                    <div class="w-full">
                        <label for="durasi_tidur" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Durasi Tidur</label>
                        <input type="text" name="durasi_tidur" id="durasi_tidur" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" value="{{old('durasi_tidur', $data_pasien->durasi_tidur)}}" placeholder="Durasi Tidur Pasien" required>
                    </div>
                    <div class="w-full">
                        <label for="gangguan_tidur" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Gangguan Tidur</label>
                        <select  id="gangguan_tidur" name="gangguan_tidur" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                            <option value="Tidak" selected>Tidak</option>
                            <option value="Ya">Ya</option>
                        </select>
                    </div>
                    <div class="w-full">
                        <label for="ket_gangguan_tidur" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Keterangan Gangguan Tidur</label>
                        <input type="text" name="ket_gangguan_tidur" id="ket_gangguan_tidur" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" value="{{old('ket_gangguan_tidur', $data_pasien->ket_gangguan_tidur)}}" placeholder="Kosongkan bila tidak ada">
                    </div>
                    <div class="w-full">
                        <label for="kesadaran" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kesadaran Pasien</label>
                        <input type="text" name="kesadaran" id="kesadaran" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" value="{{old('kesadaran', $data_pasien->kesadaran)}}" placeholder="Kesadaran Pasien">
                    </div>
                    <div class="w-full">
                        <label for="gangguan_reproduksi" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Gangguan Reproduksi</label>
                        <select  id="gangguan_reproduksi" name="gangguan_reproduksi" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                            <option value="Tidak Ada" selected>Tidak Ada</option>
                            <option value="Ada">Ada</option>
                        </select>
                    </div>
                    <div class="w-full">
                        <label for="ket_gangguan_reproduksi" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Keterangan Gangguan Reproduksi</label>
                        <input type="text" name="ket_gangguan_reproduksi" id="ket_gangguan_reproduksi" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" value="{{old('ket_gangguan_reproduksi', $data_pasien->ket_gangguan_reproduksi)}}" placeholder="Kosongkan bila tidak ada">
                    </div>
                </div>
            </div>

            <div class="border-b border-b-gray-300 pb-8 mb-4">
                <h2 class="mb-4 text-xl font-bold text-gray-900 dark:text-white">Psiko - Sosial - Spiritual</h2>
                <div class="grid gap-4 lg:grid-cols-2 sm:gap-6">
                    <div class="w-full">
                        <label for="psikologis" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kondisi Psikologi Pasien</label>
                        <select  id="psikologis" name="psikologis" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                            <option value="Tenang" selected>Tenang</option>
                            <option value="Cemas">Cemas</option>
                            <option value="Takut">Takut</option>
                            <option value="Marah / Agresif">Marah / Agresif</option>
                            <option value="Kecenderungan Bunuh Diri">Kecenderungan Bunuh Diri</option>
                            <option value="Lain-lain">Lain-lain</option>
                        </select>
                    </div>
                    <div class="w-full">
                        <label for="ket_psikologis" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Keterangan Psikologi Pasien</label>
                        <input type="text" name="ket_psikologis" id="ket_psikologis" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" value="{{old('ket_psikologis', $data_pasien->ket_psikologis)}}" placeholder="Kosongkan bila tidak ada">
                    </div>
                    <div class="w-full">
                        <label for="status_perkawinan" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Status Perkawinan</label>
                        <select  id="status_perkawinan" name="status_perkawinan" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                            <option value="Belum Kawin" selected>Belum Kawin</option>
                            <option value="Kawin">Kawin</option>
                            <option value="Cerai Hidup">Cerai Hidup</option>
                            <option value="Cerai Mati">Cerai Mati</option>
                        </select>
                    </div>
                    <div class="w-full">
                        <label for="pola_interaksi_sosial" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Pola Interaksi Sosial</label>
                        <select  id="pola_interaksi_sosial" name="pola_interaksi_sosial" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                            <option value="Baik" selected>Baik</option>
                            <option value="Buruk">Buruk</option>
                        </select>
                    </div>
                    <div class="w-full">
                        <label for="support_system" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Support System</label>
                        <select  id="support_system" name="support_system" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                            <option value="Keluarga" selected>Keluarga</option>
                            <option value="Panti Sosial / Jompo">Panti Sosial / Jompo</option>
                            <option value="Terlantar">Terlantar</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="border-b border-b-gray-300 pb-8 mb-4">
                <h2 class="mb-4 text-xl font-bold text-gray-900 dark:text-white">Ekonomi</h2>
                <div class="grid gap-4 lg:grid-cols-2 sm:gap-6">
                    <div class="w-full">
                        <label for="pekerjaan" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Status Pekerjaan Pasien</label>
                        <input type="text" name="pekerjaan" id="pekerjaan" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" value="{{old('pekerjaan', $data_pasien->pekerjaan)}}" placeholder="Status Pekerjaan Pasien" required>
                    </div>
                    <div class="w-full">
                        <label for="pembiayaan" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Pembiayaan / Jaminan Kesehatan</label>
                        <input type="text" name="pembiayaan" id="pembiayaan" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" value="{{old('pembiayaan', $data_pasien->pembiayaan)}}" placeholder="Pembiayaan / Jaminan Kesehatan" required>
                    </div>
                    <div class="w-full">
                        <label for="pj_pasien" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Penanggung Jawab Pasien</label>
                        <input type="text" name="pj_pasien" id="pj_pasien" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" value="{{old('pj_pasien', $data_pasien->pj_pasien)}}" placeholder="Penanggung Jawab Pasien" required>
                    </div>
                </div>
            </div>
            <div class="border-b border-b-gray-300 pb-8 mb-4">
                <h2 class="mb-4 text-xl font-bold text-gray-900 dark:text-white">Riwayat Alergi</h2>
                <div class="grid gap-4 lg:grid-cols-2 sm:gap-6">
                    <div class="w-full">
                        <label for="alergi" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Pasien Mempunyai Riwayat Alergi</label>
                        <select  id="alergi" name="alergi" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                            <option value="Tidak Ada" selected>Tidak Ada</option>
                            <option value="Ada">Ada</option>
                        </select>
                    </div>
                    <div class="w-full">
                        <label for="ket_alergi" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Keterangan Alergi</label>
                        <input type="text" name="ket_alergi" id="ket_alergi" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" value="{{old('ket_alergi', $data_pasien->ket_alergi)}}" placeholder="Kosongkan bila tidak ada">
                    </div>
                    <div class="w-full">
                        <label for="reaksi_alergi" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Reaksi Alergi</label>
                        <input type="text" name="reaksi_alergi" id="reaksi_alergi" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" value="{{old('reaksi_alergi', $data_pasien->reaksi_alergi)}}" placeholder="Kosongkan bila tidak ada">
                    </div>
                </div>
            </div>

            <div class="border-b border-b-gray-300 pb-8 mb-4">
                <h2 class="mb-4 text-xl font-bold text-gray-900 dark:text-white">Asesmen Nyeri</h2>
                <div class="grid gap-4 lg:grid-cols-2 sm:gap-6">
                    <div class="w-full">
                        <label for="keluhan_nyeri" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Pasien Mengeluhkan Nyeri</label>
                        <select  id="keluhan_nyeri" name="keluhan_nyeri" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                            <option value="Tidak" selected>Tidak</option>
                            <option value="Ya">Ya</option>
                        </select>
                    </div>
                    <div class="w-full">
                        <label for="nyeri_sejak" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nyeri Sejak Kapan</label>
                        <input type="text" name="nyeri_sejak" id="nyeri_sejak" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" value="{{old('nyeri_sejak', $data_pasien->nyeri_sejak)}}" placeholder="Kosongkan bila tidak ada">
                    </div>
                    <div class="w-full">
                        <label for="faktor_nyeri" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Faktor Pencetus Nyeri</label>
                        <input type="text" name="faktor_nyeri" id="faktor_nyeri" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" value="{{old('faktor_nyeri', $data_pasien->faktor_nyeri)}}" placeholder="Kosongkan bila tidak ada">
                    </div>
                    <div class="w-full">
                        <label for="karekteristik_nyeri" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Karakteristik Nyeri</label>
                        <input type="text" name="karekteristik_nyeri" id="karekteristik_nyeri" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" value="{{old('karekteristik_nyeri', $data_pasien->karekteristik_nyeri)}}" placeholder="Kosongkan bila tidak ada">
                    </div>
                    <div class="w-full">
                        <label for="lokasi_nyeri" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Lokasi Nyeri</label>
                        <input type="text" name="lokasi_nyeri" id="lokasi_nyeri" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" value="{{old('lokasi_nyeri', $data_pasien->lokasi_nyeri)}}" placeholder="Kosongkan bila tidak ada">
                    </div>
                    <div class="w-full">
                        <label for="skala_nyeri" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Skala Nyeri</label>
                        <input type="text" name="skala_nyeri" id="skala_nyeri" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" value="{{old('skala_nyeri', $data_pasien->skala_nyeri)}}" placeholder="Kosongkan bila tidak ada">
                    </div>
                    <div class="w-full">
                        <label for="durasi_nyeri" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Durasi Nyeri</label>
                        <input type="text" name="durasi_nyeri" id="durasi_nyeri" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" value="{{old('durasi_nyeri', $data_pasien->durasi_nyeri)}}" placeholder="Kosongkan bila tidak ada">
                    </div>
                </div>
            </div>

            <div class="border-b border-b-gray-300 pb-8 mb-4">
                <h2 class="mb-4 text-xl font-bold text-gray-900 dark:text-white">Kebutuhan Edukasi</h2>
                <div class="grid gap-4 lg:grid-cols-2 sm:gap-6">
                    <div class="w-full">
                        <label for="kebutuhan_edukasi" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kebutuhan Edukasi Pada Pasien</label>
                        <select  id="kebutuhan_edukasi" name="kebutuhan_edukasi" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                            <option value="Tidak Ada" selected>Tidak Ada</option>
                            <option value="Perawatan">Perawatan</option>
                            <option value="Nutrisi">Nutrisi</option>
                            <option value="Manajemen Nyeri">Manajemen Nyeri</option>
                            <option value="Perawatan Luka">Perawatan Luka</option>
                            <option value="Pengobatan">Pengobatan</option>
                            <option value="Aktivitas dan Latihan">Aktivitas dan Latihan</option>
                            <option value="Pencegahan Infeksi">Pencegahan Infeksi</option>
                            <option value="Lainnya">Lainnya</option>
                        </select>
                    </div>
                    <div class="w-full">
                        <label for="ket_edukasi" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Keterangan Edukasi</label>
                        <input type="text" name="ket_edukasi" id="ket_edukasi" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" value="{{old('ket_edukasi', $data_pasien->ket_edukasi)}}" placeholder="Kosongkan bila tidak ada">
                    </div>
                </div>
            </div>

            <div class="border-b border-b-gray-300 pb-8 mb-4">
                <h2 class="mb-4 text-xl font-bold text-gray-900 dark:text-white">Riwayat Penggunaan Obat</h2>
                <div class="grid gap-4 lg:grid-cols-2 sm:gap-6">
                    <div class="w-full">
                        <label for="riwayat_penggunaan_obat" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Riwayat Penggunaan Obat</label>
                        <input type="text" name="riwayat_penggunaan_obat" id="riwayat_penggunaan_obat" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" value="{{old('riwayat_penggunaan_obat', $data_pasien->riwayat_penggunaan_obat)}}" placeholder="Kosongkan bila tidak ada">
                    </div>
                    <div class="w-full">
                        <label for="assessment_populasi_khusus" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Asesmen Populasi Khusus</label>
                        <select  id="assessment_populasi_khusus" name="assessment_populasi_khusus" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                            <option value="Tidak Ada" selected>Tidak Ada</option>
                            <option value="Geriatrik">Geriatrik</option>
                            <option value="Kemoterapi">Kemoterapi</option>
                            <option value="Hemodialisa">Hemodialisa</option>
                            <option value="Terminal">Terminal</option>
                            <option value="Perioperatif">Perioperatif</option>
                            <option value="Lainnya">Lainnya</option>
                        </select>
                    </div>
                    <div class="w-full">
                        <label for="ket_assessment_populasi_khusus" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Keterangan Asesmen Populasi Khusus</label>
                        <input type="text" name="ket_assessment_populasi_khusus" id="ket_assessment_populasi_khusus" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" value="{{old('ket_assessment_populasi_khusus', $data_pasien->ket_assessment_populasi_khusus)}}" placeholder="Kosongkan bila tidak ada">
                    </div>
                </div>
            </div>

            <div class="border-b border-b-gray-300 pb-8 mb-4">
                <h2 class="mb-4 text-xl font-bold text-gray-900 dark:text-white">Hasil Pemeriksaan Penunjang</h2>
                <div class="grid gap-4 lg:grid-cols-2 sm:gap-6">
                    <div class="w-full">
                        <label for="hasil_lab" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Hasil Lab.</label>
                        <input type="text" name="hasil_lab" id="hasil_lab" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" value="{{old('hasil_lab', $data_pasien->hasil_lab)}}" placeholder="Kosongkan bila tidak ada">
                    </div>
                    <div class="w-full">
                        <label for="hasil_rontgen" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Hasil Rontgen</label>
                        <input type="text" name="hasil_rontgen" id="hasil_rontgen" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" value="{{old('hasil_rontgen', $data_pasien->hasil_rontgen)}}" placeholder="Kosongkan bila tidak ada">
                    </div>
                    <div class="w-full">
                        <label for="hasil_lainnya" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Hasil Lainnya</label>
                        <input type="text" name="hasil_lainnya" id="hasil_lainnya" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" value="{{old('hasil_lainnya', $data_pasien->hasil_lainnya)}}" placeholder="Kosongkan bila tidak ada">
                    </div>
                </div>
            </div>

            <div class="border-b border-b-gray-300 pb-8 mb-4">
                <h2 class="mb-4 text-xl font-bold text-gray-900 dark:text-white">Analisis Data</h2>
                <div class="grid gap-4 lg:grid-cols-2 sm:gap-6">
                    <div class="w-full">
                        <label for="data_subjektif" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Data Subjektif</label>
                        <input type="text" name="data_subjektif" id="data_subjektif" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" value="{{old('data_subjektif', $data_pasien->data_subjektif)}}" placeholder="Hasil Analisis Data Subjektif" required>
                    </div>
                    <div class="w-full">
                        <label for="data_objektif" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Data Objektif</label>
                        <input type="text" name="data_objektif" id="data_objektif" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" value="{{old('data_objektif', $data_pasien->data_objektif)}}" placeholder="Hasil Analisis Data Objektif" required>
                    </div>
                    <div class="w-full">
                        <label for="penyebab_etiologi" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Penyebab Etiologi</label>
                        <input type="text" name="penyebab_etiologi" id="penyebab_etiologi" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" value="{{old('penyebab_etiologi', $data_pasien->penyebab_etiologi)}}" placeholder="Hasil Analisis Penyebab Etiologi" required>
                    </div>
                    <div class="w-full">
                        <label for="masalah" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Masalah Pada Pasien</label>
                        <input type="text" name="masalah" id="masalah" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" value="{{old('masalah', $data_pasien->masalah)}}" placeholder="Hasil Analisis Masalah Pasien" required>
                    </div>
                </div>
            </div>

            <div class="border-b border-b-gray-300 pb-8 mb-4">
                <h2 class="mb-4 text-xl font-bold text-gray-900 dark:text-white">Perencanaan Pemulangan Pasien (P3) / <span class="italic">Discharge Planning</span></h2>
                <div class="grid gap-4 lg:grid-cols-2 sm:gap-6">
                    <div class="w-full">
                        <label for="usia_diatas_65" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Usia Pasien Diatas 65 Tahun</label>
                        <select  id="usia_diatas_65" name="usia_diatas_65" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                            <option value="Tidak" selected>Tidak</option>
                            <option value="Ya">Ya</option>
                        </select>
                    </div>
                    <div class="w-full">
                        <label for="keterbatasan_mobilitas" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Keterbatasan Mobilitas</label>
                        <select  id="keterbatasan_mobilitas" name="keterbatasan_mobilitas" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                            <option value="Tidak" selected>Tidak</option>
                            <option value="Ya">Ya</option>
                        </select>
                    </div>
                    <div class="w-full">
                        <label for="pengobatan_lanjut" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Perawatan / Pengobatan Lanjut</label>
                        <select  id="pengobatan_lanjut" name="pengobatan_lanjut" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                            <option value="Tidak" selected>Tidak</option>
                            <option value="Ya">Ya</option>
                        </select>
                    </div>
                    <div class="w-full">
                        <label for="bantuan_aktivitas_harian" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Bantuan Untuk Melakukan Aktivitas Sehari-hari</label>
                        <select  id="bantuan_aktivitas_harian" name="bantuan_aktivitas_harian" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                            <option value="Tidak" selected>Tidak</option>
                            <option value="Ya">Ya</option>
                        </select>
                    </div>
                    <div class="w-full">
                        <label for="masalah_keperawatan" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Diagnosa Pasien</label>
                        <select  id="masalah_keperawatan" name="masalah_keperawatan" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                            <option disabled selected>Pilih diagnosa:</option>
                            @foreach($kategori_masalah as $row)
                            <option disabled class="capitalize font-bold">{{$row->nama}}</option>
                            @foreach($row->item as $item)
                            <option @if($data_pasien->masalah_keperawatan == $item->kode) selected @endif value="{{$item->kode}}" class="capitalize">{{$item->kode." - ".$item->nama}}</option>
                            @endforeach
                            @endforeach
                        </select>
                    </div>
                    @if($data_pasien->masalah_keperawatan != null)
                    <div class="w-full lg:col-span-2">  
                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">SLKI</label>                      
                        <div class="bg-white rounded-lg p-4 shadow">
                            {!!$data_pasien->diagnosis->slki!!}
                        </div>
                    </div>
                    <div class="w-full lg:col-span-2">      
                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Intervensi / SIKI</label>                                        
                        <div class="bg-white rounded-lg p-4 shadow">
                            {!!$data_pasien->diagnosis->intervensi!!}
                        </div>
                    </div>
                    @endif
                </div>
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
        @else
        <form action="{{route('data_pasien_submit', $data_pasien->id)}}" method="post">
            @csrf
            <div class="border-b border-b-gray-300 pb-8 mb-4">
                <h2 class="mb-4 text-xl font-bold text-gray-900 dark:text-white">Data Pasien</h2>
                <div class="grid gap-4 lg:grid-cols-2 sm:gap-6">
                    
                    <div class="w-full">
                        <label for="nama_pasien" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Pasien</label>
                        <input type="text" name="nama_pasien" id="nama_pasien" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" value="{{old('nama_pasien', $data_pasien->nama_pasien)}}" disabled placeholder="Nama pasien" required="">
                    </div>
                    <div class="w-full">
                        <label for="no_rm" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">No. RM</label>
                        <input type="text" name="no_rm" id="no_rm" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" value="{{old('no_rm', $data_pasien->no_rm)}}" disabled placeholder="No. RM" required="">
                    </div>
                    <div class="w-full">
                        <label for="tgl_lahir" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tanggal Lahir</label>
                        <input type="date" name="tgl_lahir" id="tgl_lahir" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" value="{{old('tgl_lahir', $data_pasien->tgl_lahir)}}" disabled placeholder="Tanggal lahir pasien" required="">
                    </div>
                    <div class="w-full">
                        <label for="diagnosa_medis" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Diagnosa Medis</label>
                        <input type="text" name="diagnosa_medis" id="diagnosa_medis" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" value="{{old('diagnosa_medis', $data_pasien->diagnosa_medis)}}" disabled placeholder="Diagnosa medis pasien" required="">
                    </div>
                    <div class="w-full">
                        <label for="ruang_rawat" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Ruang Rawat</label>
                        <input type="text" name="ruang_rawat" id="ruang_rawat" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" value="{{old('ruang_rawat', $data_pasien->ruang_rawat)}}" disabled placeholder="Ruang rawat" required="">
                    </div>
                    <div class="w-full">
                        <label for="pendidikan" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Pendidikan</label>
                        <select disabled  id="pendidikan" name="pendidikan" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                            <option disabled selected="">Pendidikan terakhir:</option>
                            <option @if($data_pasien->pendidikan == "Tidak Sekolah") selected @endif value="Tidak Sekolah">Tidak Sekolah</option>
                            <option @if($data_pasien->pendidikan == "SD") selected @endif value="SD">SD</option>
                            <option @if($data_pasien->pendidikan == "SLTP") selected @endif value="SLTP">SLTP</option>
                            <option @if($data_pasien->pendidikan == "SLTA") selected @endif value="SLTA">SLTA</option>
                            <option @if($data_pasien->pendidikan == "D3") selected @endif value="D3">D3</option>
                            <option @if($data_pasien->pendidikan == "D4/S1") selected @endif value="D4/S1">D4/S1</option>
                            <option @if($data_pasien->pendidikan == "S2") selected @endif value="S2">S2</option>
                            <option @if($data_pasien->pendidikan == "S3") selected @endif value="S3">S3</option>
                        </select>
                    </div>
                    <div class="w-full">
                        <label for="tgl_masuk" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tanggal Masuk</label>
                        <input type="date" name="tgl_masuk" id="tgl_masuk" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" value="{{old('tgl_masuk', $data_pasien->tgl_masuk)}}" disabled placeholder="Tanggal masuk" required="">
                    </div>
                    <div class="w-full">
                        <label for="tgl_assessment" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tanggal Assessment</label>
                        <input type="date" name="tgl_assessment" id="tgl_assessment" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" value="{{old('tgl_assessment', $data_pasien->tgl_assessment)}}" disabled placeholder="Tanggal assessment" required="">
                    </div>
                </div>
            </div>

            <div class="border-b border-b-gray-300 pb-8 mb-4">
                <h2 class="mb-4 text-xl font-bold text-gray-900 dark:text-white">Riwayat Kesehatan</h2>
                <div class="grid gap-4 lg:grid-cols-2 sm:gap-6">
                    
                    <div class="w-full">
                        <label for="keluhan_utama" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Keluhan Utama</label>
                        <input type="text" name="keluhan_utama" id="keluhan_utama" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" value="{{old('keluhan_utama', $data_pasien->keluhan_utama)}}" disabled placeholder="Keluhan utama pasien" required="">
                    </div>
                    <div class="w-full">
                        <label for="riwayat_kesehatan_sekarang" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Riwayat Kesehatan Sekarang</label>
                        <input type="text" name="riwayat_kesehatan_sekarang" id="riwayat_kesehatan_sekarang" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" value="{{old('riwayat_kesehatan_sekarang', $data_pasien->riwayat_kesehatan_sekarang)}}" disabled placeholder="Riwayat kesehatan pasien sekarang" required="">
                    </div>
                    <div class="w-full">
                        <label for="penyakit_genetik" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Penyakit Genetik</label>
                        <select disabled  id="penyakit_genetik" name="penyakit_genetik" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                            <option value="Tidak Ada" selected>Tidak Ada</option>
                            <option value="Ada">Ada</option>
                        </select>
                    </div>
                    <div class="w-full">
                        <label for="ket_penyakit_genetik" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jelaskan Penyakit Genetik</label>
                        <input type="text" name="ket_penyakit_genetik" id="ket_penyakit_genetik" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" value="{{old('ket_penyakit_genetik', $data_pasien->ket_penyakit_genetik)}}" disabled placeholder="Kosongkan bila tidak ada">
                    </div>
                    <div class="w-full">
                        <label for="trauma" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Trauma</label>
                        <select disabled  id="trauma" name="trauma" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                            <option value="Tidak Ada" selected>Tidak Ada</option>
                            <option value="Ada">Ada</option>
                        </select>
                    </div>
                    <div class="w-full">
                        <label for="operasi" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Operasi</label>
                        <select disabled  id="operasi" name="operasi" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                            <option value="Tidak Pernah" selected>Tidak Pernah</option>
                            <option value="Pernah">Pernah</option>
                        </select>
                    </div>
                    <div class="w-full">
                        <label for="penyakit_lainnya" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Penyakit Lainnya</label>
                        <select disabled  id="penyakit_lainnya" name="penyakit_lainnya" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                            <option value="Tidak Ada" selected>Tidak Ada</option>
                            <option value="Ada">Ada</option>
                        </select>
                    </div>
                    <div class="w-full">
                        <label for="ket_penyakit_lainnya" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jelaskan Penyakit Lainnya</label>
                        <input type="text" name="ket_penyakit_lainnya" id="ket_penyakit_lainnya" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" value="{{old('ket_penyakit_lainnya', $data_pasien->ket_penyakit_lainnya)}}" disabled placeholder="Kosongkan bila tidak ada">
                    </div>
                    <div class="w-full">
                        <label for="riwayat_kesehatan_keluarga" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Riwayat Kesehatan Keluarga</label>
                        <input type="text" name="riwayat_kesehatan_keluarga" id="riwayat_kesehatan_keluarga" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" value="{{old('riwayat_kesehatan_keluarga', $data_pasien->riwayat_kesehatan_keluarga)}}" disabled placeholder="Riwayat kesehatan keluarga pasien" required="">
                    </div>
                    <div class="w-full">
                        <label for="auto_anamnesa_pasien" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Auto Anamnesa Pasien</label>
                        <select disabled  id="auto_anamnesa_pasien" name="auto_anamnesa_pasien" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                            <option value="Kompeten" selected>Kompeten</option>
                            <option value="Tidak Kompeten">Tidak Kompeten</option>
                        </select>
                    </div>
                    <div class="w-full">
                        <label for="nama_pemberi_informasi" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Pemberi Informasi</label>
                        <input type="text" name="nama_pemberi_informasi" id="nama_pemberi_informasi" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" value="{{old('nama_pemberi_informasi', $data_pasien->nama_pemberi_informasi)}}" disabled placeholder="Nama Pemberi Informasi" required="">
                    </div>
                </div>
            </div>

            <div class="border-b border-b-gray-300 pb-8 mb-4">
                <h2 class="mb-4 text-xl font-bold text-gray-900 dark:text-white">Status Fisik / Kebutuhan Fisiologis</h2>
                <div class="grid gap-4 lg:grid-cols-2 sm:gap-6">
                    <div class="w-full">
                        <label for="batuk" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Pasien Batuk-batuk?</label>
                        <select disabled  id="batuk" name="batuk" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                            <option value="Tidak" selected>Tidak</option>
                            <option value="Ya">Ya</option>
                        </select>
                    </div>
                    <div class="w-full">
                        <label for="lama_batuk" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Sudah Berapa Lama Menderita Batuk?</label>
                        <input type="text" name="lama_batuk" id="lama_batuk" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" value="{{old('lama_batuk', $data_pasien->lama_batuk)}}" disabled placeholder="Kosongkan bila pasien tidak menderita batuk">
                    </div>
                    <div class="w-full">
                        <label for="sputum" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Terdapat Sputum?</label>
                        <select disabled  id="sputum" name="sputum" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                            <option value="Tidak" selected>Tidak</option>
                            <option value="Ya">Ya</option>
                        </select>
                    </div>
                    <div class="w-full">
                        <label for="ket_sputum" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Bentuk Sputum?</label>
                        <select disabled  id="ket_sputum" name="ket_sputum" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                            <option value="Tidak Ada" selected>Tidak Ada</option>
                            <option value="Kental" >Kental</option>
                            <option value="Encer" >Encer</option>
                            <option value="Darah" >Darah</option>
                        </select>
                    </div>
                    <div class="w-full">
                        <label for="sesak_napas" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Pasien Menderita Sesak Napas?</label>
                        <select disabled  id="sesak_napas" name="sesak_napas" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                            <option value="Tidak" selected>Tidak</option>
                            <option value="Ya">Ya</option>
                        </select>
                    </div>
                    <div class="w-full">
                        <label for="ket_sesak_napas" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Deskripsikan Sesak Napas Pasien</label>
                        <input type="text" name="ket_sesak_napas" id="ket_sesak_napas" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" value="{{old('ket_sesak_napas', $data_pasien->ket_sesak_napas)}}" disabled placeholder="Kosongkan bila pasien tidak menderita sesak nafas">
                    </div>
                    <div class="w-full">
                        <label for="alat_bantu_napas" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Ada / Perlu Alat Bantu Napas?</label>
                        <select disabled  id="alat_bantu_napas" name="alat_bantu_napas" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                            <option value="Tidak" selected>Tidak</option>
                            <option value="Ya">Ya</option>
                        </select>
                    </div>
                    <div class="w-full">
                        <label for="tekanan_darah" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tekanan Darah Pasien</label>
                        <input type="text" name="tekanan_darah" id="tekanan_darah" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" value="{{old('tekanan_darah', $data_pasien->tekanan_darah)}}" disabled placeholder="Tekanan Darah Pasien" required>
                    </div>
                    <div class="w-full">
                        <label for="suhu" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Suhu Tubuh Pasien</label>
                        <input type="text" name="suhu" id="suhu" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" value="{{old('suhu', $data_pasien->suhu)}}" disabled placeholder="Suhu Tubuh Pasien" required>
                    </div>
                    <div class="w-full">
                        <label for="nadi" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Denyut Nadi Pasien</label>
                        <input type="text" name="nadi" id="nadi" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" value="{{old('nadi', $data_pasien->nadi)}}" disabled placeholder="Denyut Nadi Pasien" required>
                    </div>
                    <div class="w-full">
                        <label for="pernapasan" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Pernapasan Pasien</label>
                        <input type="text" name="pernapasan" id="pernapasan" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" value="{{old('pernapasan', $data_pasien->pernapasan)}}" disabled placeholder="Pernapasan Pasien" required>
                    </div>
                    <div class="w-full">
                        <label for="spo2" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">SPO2</label>
                        <input type="text" name="spo2" id="spo2" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" value="{{old('spo2', $data_pasien->spo2)}}" disabled placeholder="SPO2" required>
                    </div>
                    <div class="w-full">
                        <label for="crt" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">CRT</label>
                        <input type="text" name="crt" id="crt" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" value="{{old('crt', $data_pasien->crt)}}" disabled placeholder="CRT" required>
                    </div>
                    <div class="w-full">
                        <label for="akral" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Akral</label>
                        <select disabled  id="akral" name="akral" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                            <option value="Hangat" selected>Hangat</option>
                            <option value="Dingin">Dingin</option>
                        </select>
                    </div>
                    <div class="w-full">
                        <label for="kesulitan_minum" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Pasien Kesulitan Minum</label>
                        <select disabled  id="kesulitan_minum" name="kesulitan_minum" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                            <option value="Tidak" selected>Tidak</option>
                            <option value="Ya">Ya</option>
                        </select>
                    </div>
                    <div class="w-full">
                        <label for="status_puasa" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Status Puasa</label>
                        <select disabled  id="status_puasa" name="status_puasa" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                            <option value="Tidak" selected>Tidak</option>
                            <option value="Ya">Ya</option>
                        </select>
                    </div>
                    <div class="w-full">
                        <label for="turgor_kulit" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Turgor Kulit</label>
                        <select disabled  id="turgor_kulit" name="turgor_kulit" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                            <option value="Baik" selected>Baik</option>
                            <option value="Menurun">Menurun</option>
                        </select>
                    </div>
                    <div class="w-full">
                        <label for="edema" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Edema</label>
                        <select disabled  id="edema" name="edema" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                            <option value="Tidak" selected>Tidak</option>
                            <option value="Ya">Ya</option>
                        </select>
                    </div>
                    <div class="w-full">
                        <label for="derajat_edema" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Derajat Piting Edeme</label>
                        <input type="text" name="derajat_edema" id="derajat_edema" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" value="{{old('derajat_edema', $data_pasien->derajat_edema)}}" disabled placeholder="Kosongkan bila tidak ada">
                    </div>
                    <div class="w-full">
                        <label for="muntah" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Muntah</label>
                        <select disabled  id="muntah" name="muntah" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                            <option value="Tidak" selected>Tidak</option>
                            <option value="Ya">Ya</option>
                        </select>
                    </div>
                    <div class="w-full">
                        <label for="freq_muntah" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Frekuensi Muntah</label>
                        <input type="text" name="freq_muntah" id="freq_muntah" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" value="{{old('freq_muntah', $data_pasien->freq_muntah)}}" disabled placeholder="Kosongkan bila tidak ada">
                    </div>
                    <div class="w-full">
                        <label for="kebutuhan_nutrisi" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kebutuhan Nutrisi</label>
                        <select disabled  id="kebutuhan_nutrisi" name="kebutuhan_nutrisi" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                            <option value="Enterasi" selected>Enterasi</option>
                            <option value="Parenteral">Parenteral</option>
                        </select>
                    </div>
                    <div class="w-full">
                        <label for="tb" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tinggi Badan</label>
                        <input type="text" name="tb" id="tb" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" value="{{old('tb', $data_pasien->tb)}}" disabled placeholder="Tinggi badan pasien" required>
                    </div>
                    <div class="w-full">
                        <label for="bb" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Berat Badan</label>
                        <input type="text" name="bb" id="bb" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" value="{{old('bb', $data_pasien->bb)}}" disabled placeholder="Berat badan pasien" required>
                    </div>
                    <div class="w-full">
                        <label for="imt" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">IMT</label>
                        <select disabled  id="imt" name="imt" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                            <option value="Underweight" selected>Underweight</option>
                            <option value="Normal">Normal</option>
                            <option value="Overweight">Overweight</option>
                            <option value="Obesity">Obesity</option>
                        </select>
                    </div>
                    <div class="w-full">
                        <label for="masalah_bab" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Masalah BAB</label>
                        <select disabled  id="masalah_bab" name="masalah_bab" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                            <option value="Tidak Ada" selected>Tidak Ada</option>
                            <option value="Ada">Ada</option>
                        </select>
                    </div>
                    <div class="w-full">
                        <label for="ket_bab" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Keterangan BAB</label>
                        <input type="text" name="ket_bab" id="ket_bab" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" value="{{old('ket_bab', $data_pasien->ket_bab)}}" disabled placeholder="Kosongkan bila tidak ada">
                    </div>
                    <div class="w-full">
                        <label for="freq_bab" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Frekuensi BAB</label>
                        <input type="text" name="freq_bab" id="freq_bab" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" value="{{old('freq_bab', $data_pasien->freq_bab)}}" disabled placeholder="Kosongkan bila tidak ada">
                    </div>
                    <div class="w-full">
                        <label for="diare" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Diare</label>
                        <select disabled  id="diare" name="diare" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                            <option value="Tidak" selected>Tidak</option>
                            <option value="Ya">Ya</option>
                        </select>
                    </div>
                    <div class="w-full">
                        <label for="freq_diare" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Frekuensi Diare</label>
                        <input type="text" name="freq_diare" id="freq_diare" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" value="{{old('freq_diare', $data_pasien->freq_diare)}}" disabled placeholder="Kosongkan bila tidak ada">
                    </div>
                    <div class="w-full">
                        <label for="masalah_bak" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Masalah BAK</label>
                        <select disabled  id="masalah_bak" name="masalah_bak" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                            <option value="Tidak Ada" selected>Tidak Ada</option>
                            <option value="Ada">Ada</option>
                        </select>
                    </div>
                    <div class="w-full">
                        <label for="ket_bak" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Keterangan BAK</label>
                        <input type="text" name="ket_bak" id="ket_bak" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" value="{{old('ket_bak', $data_pasien->ket_bak)}}" disabled placeholder="Kosongkan bila tidak ada">
                    </div>
                    <div class="w-full">
                        <label for="freq_bak" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Frekuensi BAK</label>
                        <input type="text" name="freq_bak" id="freq_bak" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" value="{{old('freq_bak', $data_pasien->freq_bak)}}" disabled placeholder="Kosongkan bila tidak ada">
                    </div>
                    <div class="w-full">
                        <label for="pola_tidur" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Pola Tidur</label>
                        <input type="text" name="pola_tidur" id="pola_tidur" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" value="{{old('pola_tidur', $data_pasien->pola_tidur)}}" disabled placeholder="Pola Tidur Pasien" required>
                    </div>
                    <div class="w-full">
                        <label for="durasi_tidur" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Durasi Tidur</label>
                        <input type="text" name="durasi_tidur" id="durasi_tidur" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" value="{{old('durasi_tidur', $data_pasien->durasi_tidur)}}" disabled placeholder="Durasi Tidur Pasien" required>
                    </div>
                    <div class="w-full">
                        <label for="gangguan_tidur" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Gangguan Tidur</label>
                        <select disabled  id="gangguan_tidur" name="gangguan_tidur" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                            <option value="Tidak" selected>Tidak</option>
                            <option value="Ya">Ya</option>
                        </select>
                    </div>
                    <div class="w-full">
                        <label for="ket_gangguan_tidur" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Keterangan Gangguan Tidur</label>
                        <input type="text" name="ket_gangguan_tidur" id="ket_gangguan_tidur" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" value="{{old('ket_gangguan_tidur', $data_pasien->ket_gangguan_tidur)}}" disabled placeholder="Kosongkan bila tidak ada">
                    </div>
                    <div class="w-full">
                        <label for="kesadaran" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kesadaran Pasien</label>
                        <input type="text" name="kesadaran" id="kesadaran" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" value="{{old('kesadaran', $data_pasien->kesadaran)}}" disabled placeholder="Kesadaran Pasien">
                    </div>
                    <div class="w-full">
                        <label for="gangguan_reproduksi" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Gangguan Reproduksi</label>
                        <select disabled  id="gangguan_reproduksi" name="gangguan_reproduksi" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                            <option value="Tidak Ada" selected>Tidak Ada</option>
                            <option value="Ada">Ada</option>
                        </select>
                    </div>
                    <div class="w-full">
                        <label for="ket_gangguan_reproduksi" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Keterangan Gangguan Reproduksi</label>
                        <input type="text" name="ket_gangguan_reproduksi" id="ket_gangguan_reproduksi" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" value="{{old('ket_gangguan_reproduksi', $data_pasien->ket_gangguan_reproduksi)}}" disabled placeholder="Kosongkan bila tidak ada">
                    </div>
                </div>
            </div>

            <div class="border-b border-b-gray-300 pb-8 mb-4">
                <h2 class="mb-4 text-xl font-bold text-gray-900 dark:text-white">Psiko - Sosial - Spiritual</h2>
                <div class="grid gap-4 lg:grid-cols-2 sm:gap-6">
                    <div class="w-full">
                        <label for="psikologis" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kondisi Psikologi Pasien</label>
                        <select disabled  id="psikologis" name="psikologis" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                            <option value="Tenang" selected>Tenang</option>
                            <option value="Cemas">Cemas</option>
                            <option value="Takut">Takut</option>
                            <option value="Marah / Agresif">Marah / Agresif</option>
                            <option value="Kecenderungan Bunuh Diri">Kecenderungan Bunuh Diri</option>
                            <option value="Lain-lain">Lain-lain</option>
                        </select>
                    </div>
                    <div class="w-full">
                        <label for="ket_psikologis" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Keterangan Psikologi Pasien</label>
                        <input type="text" name="ket_psikologis" id="ket_psikologis" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" value="{{old('ket_psikologis', $data_pasien->ket_psikologis)}}" disabled placeholder="Kosongkan bila tidak ada">
                    </div>
                    <div class="w-full">
                        <label for="status_perkawinan" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Status Perkawinan</label>
                        <select disabled  id="status_perkawinan" name="status_perkawinan" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                            <option value="Belum Kawin" selected>Belum Kawin</option>
                            <option value="Kawin">Kawin</option>
                            <option value="Cerai Hidup">Cerai Hidup</option>
                            <option value="Cerai Mati">Cerai Mati</option>
                        </select>
                    </div>
                    <div class="w-full">
                        <label for="pola_interaksi_sosial" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Pola Interaksi Sosial</label>
                        <select disabled  id="pola_interaksi_sosial" name="pola_interaksi_sosial" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                            <option value="Baik" selected>Baik</option>
                            <option value="Buruk">Buruk</option>
                        </select>
                    </div>
                    <div class="w-full">
                        <label for="support_system" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Support System</label>
                        <select disabled  id="support_system" name="support_system" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                            <option value="Keluarga" selected>Keluarga</option>
                            <option value="Panti Sosial / Jompo">Panti Sosial / Jompo</option>
                            <option value="Terlantar">Terlantar</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="border-b border-b-gray-300 pb-8 mb-4">
                <h2 class="mb-4 text-xl font-bold text-gray-900 dark:text-white">Ekonomi</h2>
                <div class="grid gap-4 lg:grid-cols-2 sm:gap-6">
                    <div class="w-full">
                        <label for="pekerjaan" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Status Pekerjaan Pasien</label>
                        <input type="text" name="pekerjaan" id="pekerjaan" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" value="{{old('pekerjaan', $data_pasien->pekerjaan)}}" disabled placeholder="Status Pekerjaan Pasien" required>
                    </div>
                    <div class="w-full">
                        <label for="pembiayaan" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Pembiayaan / Jaminan Kesehatan</label>
                        <input type="text" name="pembiayaan" id="pembiayaan" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" value="{{old('pembiayaan', $data_pasien->pembiayaan)}}" disabled placeholder="Pembiayaan / Jaminan Kesehatan" required>
                    </div>
                    <div class="w-full">
                        <label for="pj_pasien" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Penanggung Jawab Pasien</label>
                        <input type="text" name="pj_pasien" id="pj_pasien" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" value="{{old('pj_pasien', $data_pasien->pj_pasien)}}" disabled placeholder="Penanggung Jawab Pasien" required>
                    </div>
                </div>
            </div>
            <div class="border-b border-b-gray-300 pb-8 mb-4">
                <h2 class="mb-4 text-xl font-bold text-gray-900 dark:text-white">Riwayat Alergi</h2>
                <div class="grid gap-4 lg:grid-cols-2 sm:gap-6">
                    <div class="w-full">
                        <label for="alergi" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Pasien Mempunyai Riwayat Alergi</label>
                        <select disabled  id="alergi" name="alergi" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                            <option value="Tidak Ada" selected>Tidak Ada</option>
                            <option value="Ada">Ada</option>
                        </select>
                    </div>
                    <div class="w-full">
                        <label for="ket_alergi" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Keterangan Alergi</label>
                        <input type="text" name="ket_alergi" id="ket_alergi" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" value="{{old('ket_alergi', $data_pasien->ket_alergi)}}" disabled placeholder="Kosongkan bila tidak ada">
                    </div>
                    <div class="w-full">
                        <label for="reaksi_alergi" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Reaksi Alergi</label>
                        <input type="text" name="reaksi_alergi" id="reaksi_alergi" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" value="{{old('reaksi_alergi', $data_pasien->reaksi_alergi)}}" disabled placeholder="Kosongkan bila tidak ada">
                    </div>
                </div>
            </div>

            <div class="border-b border-b-gray-300 pb-8 mb-4">
                <h2 class="mb-4 text-xl font-bold text-gray-900 dark:text-white">Asesmen Nyeri</h2>
                <div class="grid gap-4 lg:grid-cols-2 sm:gap-6">
                    <div class="w-full">
                        <label for="keluhan_nyeri" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Pasien Mengeluhkan Nyeri</label>
                        <select disabled  id="keluhan_nyeri" name="keluhan_nyeri" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                            <option value="Tidak" selected>Tidak</option>
                            <option value="Ya">Ya</option>
                        </select>
                    </div>
                    <div class="w-full">
                        <label for="nyeri_sejak" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nyeri Sejak Kapan</label>
                        <input type="text" name="nyeri_sejak" id="nyeri_sejak" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" value="{{old('nyeri_sejak', $data_pasien->nyeri_sejak)}}" disabled placeholder="Kosongkan bila tidak ada">
                    </div>
                    <div class="w-full">
                        <label for="faktor_nyeri" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Faktor Pencetus Nyeri</label>
                        <input type="text" name="faktor_nyeri" id="faktor_nyeri" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" value="{{old('faktor_nyeri', $data_pasien->faktor_nyeri)}}" disabled placeholder="Kosongkan bila tidak ada">
                    </div>
                    <div class="w-full">
                        <label for="karekteristik_nyeri" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Karakteristik Nyeri</label>
                        <input type="text" name="karekteristik_nyeri" id="karekteristik_nyeri" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" value="{{old('karekteristik_nyeri', $data_pasien->karekteristik_nyeri)}}" disabled placeholder="Kosongkan bila tidak ada">
                    </div>
                    <div class="w-full">
                        <label for="lokasi_nyeri" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Lokasi Nyeri</label>
                        <input type="text" name="lokasi_nyeri" id="lokasi_nyeri" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" value="{{old('lokasi_nyeri', $data_pasien->lokasi_nyeri)}}" disabled placeholder="Kosongkan bila tidak ada">
                    </div>
                    <div class="w-full">
                        <label for="skala_nyeri" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Skala Nyeri</label>
                        <input type="text" name="skala_nyeri" id="skala_nyeri" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" value="{{old('skala_nyeri', $data_pasien->skala_nyeri)}}" disabled placeholder="Kosongkan bila tidak ada">
                    </div>
                    <div class="w-full">
                        <label for="durasi_nyeri" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Durasi Nyeri</label>
                        <input type="text" name="durasi_nyeri" id="durasi_nyeri" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" value="{{old('durasi_nyeri', $data_pasien->durasi_nyeri)}}" disabled placeholder="Kosongkan bila tidak ada">
                    </div>
                </div>
            </div>

            <div class="border-b border-b-gray-300 pb-8 mb-4">
                <h2 class="mb-4 text-xl font-bold text-gray-900 dark:text-white">Kebutuhan Edukasi</h2>
                <div class="grid gap-4 lg:grid-cols-2 sm:gap-6">
                    <div class="w-full">
                        <label for="kebutuhan_edukasi" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kebutuhan Edukasi Pada Pasien</label>
                        <select disabled  id="kebutuhan_edukasi" name="kebutuhan_edukasi" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                            <option value="Tidak Ada" selected>Tidak Ada</option>
                            <option value="Perawatan">Perawatan</option>
                            <option value="Nutrisi">Nutrisi</option>
                            <option value="Manajemen Nyeri">Manajemen Nyeri</option>
                            <option value="Perawatan Luka">Perawatan Luka</option>
                            <option value="Pengobatan">Pengobatan</option>
                            <option value="Aktivitas dan Latihan">Aktivitas dan Latihan</option>
                            <option value="Pencegahan Infeksi">Pencegahan Infeksi</option>
                            <option value="Lainnya">Lainnya</option>
                        </select>
                    </div>
                    <div class="w-full">
                        <label for="ket_edukasi" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Keterangan Edukasi</label>
                        <input type="text" name="ket_edukasi" id="ket_edukasi" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" value="{{old('ket_edukasi', $data_pasien->ket_edukasi)}}" disabled placeholder="Kosongkan bila tidak ada">
                    </div>
                </div>
            </div>

            <div class="border-b border-b-gray-300 pb-8 mb-4">
                <h2 class="mb-4 text-xl font-bold text-gray-900 dark:text-white">Riwayat Penggunaan Obat</h2>
                <div class="grid gap-4 lg:grid-cols-2 sm:gap-6">
                    <div class="w-full">
                        <label for="riwayat_penggunaan_obat" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Riwayat Penggunaan Obat</label>
                        <input type="text" name="riwayat_penggunaan_obat" id="riwayat_penggunaan_obat" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" value="{{old('riwayat_penggunaan_obat', $data_pasien->riwayat_penggunaan_obat)}}" disabled placeholder="Kosongkan bila tidak ada">
                    </div>
                    <div class="w-full">
                        <label for="assessment_populasi_khusus" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Asesmen Populasi Khusus</label>
                        <select disabled  id="assessment_populasi_khusus" name="assessment_populasi_khusus" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                            <option value="Tidak Ada" selected>Tidak Ada</option>
                            <option value="Geriatrik">Geriatrik</option>
                            <option value="Kemoterapi">Kemoterapi</option>
                            <option value="Hemodialisa">Hemodialisa</option>
                            <option value="Terminal">Terminal</option>
                            <option value="Perioperatif">Perioperatif</option>
                            <option value="Lainnya">Lainnya</option>
                        </select>
                    </div>
                    <div class="w-full">
                        <label for="ket_assessment_populasi_khusus" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Keterangan Asesmen Populasi Khusus</label>
                        <input type="text" name="ket_assessment_populasi_khusus" id="ket_assessment_populasi_khusus" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" value="{{old('ket_assessment_populasi_khusus', $data_pasien->ket_assessment_populasi_khusus)}}" disabled placeholder="Kosongkan bila tidak ada">
                    </div>
                </div>
            </div>

            <div class="border-b border-b-gray-300 pb-8 mb-4">
                <h2 class="mb-4 text-xl font-bold text-gray-900 dark:text-white">Hasil Pemeriksaan Penunjang</h2>
                <div class="grid gap-4 lg:grid-cols-2 sm:gap-6">
                    <div class="w-full">
                        <label for="hasil_lab" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Hasil Lab.</label>
                        <input type="text" name="hasil_lab" id="hasil_lab" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" value="{{old('hasil_lab', $data_pasien->hasil_lab)}}" disabled placeholder="Kosongkan bila tidak ada">
                    </div>
                    <div class="w-full">
                        <label for="hasil_rontgen" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Hasil Rontgen</label>
                        <input type="text" name="hasil_rontgen" id="hasil_rontgen" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" value="{{old('hasil_rontgen', $data_pasien->hasil_rontgen)}}" disabled placeholder="Kosongkan bila tidak ada">
                    </div>
                    <div class="w-full">
                        <label for="hasil_lainnya" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Hasil Lainnya</label>
                        <input type="text" name="hasil_lainnya" id="hasil_lainnya" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" value="{{old('hasil_lainnya', $data_pasien->hasil_lainnya)}}" disabled placeholder="Kosongkan bila tidak ada">
                    </div>
                </div>
            </div>

            <div class="border-b border-b-gray-300 pb-8 mb-4">
                <h2 class="mb-4 text-xl font-bold text-gray-900 dark:text-white">Analisis Data</h2>
                <div class="grid gap-4 lg:grid-cols-2 sm:gap-6">
                    <div class="w-full">
                        <label for="data_subjektif" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Data Subjektif</label>
                        <input type="text" name="data_subjektif" id="data_subjektif" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" value="{{old('data_subjektif', $data_pasien->data_subjektif)}}" disabled placeholder="Hasil Analisis Data Subjektif" required>
                    </div>
                    <div class="w-full">
                        <label for="data_objektif" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Data Objektif</label>
                        <input type="text" name="data_objektif" id="data_objektif" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" value="{{old('data_objektif', $data_pasien->data_objektif)}}" disabled placeholder="Hasil Analisis Data Objektif" required>
                    </div>
                    <div class="w-full">
                        <label for="penyebab_etiologi" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Penyebab Etiologi</label>
                        <input type="text" name="penyebab_etiologi" id="penyebab_etiologi" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" value="{{old('penyebab_etiologi', $data_pasien->penyebab_etiologi)}}" disabled placeholder="Hasil Analisis Penyebab Etiologi" required>
                    </div>
                    <div class="w-full">
                        <label for="masalah" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Masalah Pada Pasien</label>
                        <input type="text" name="masalah" id="masalah" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" value="{{old('masalah', $data_pasien->masalah)}}" disabled placeholder="Hasil Analisis Masalah Pasien" required>
                    </div>
                </div>
            </div>

            <div class="border-b border-b-gray-300 pb-8 mb-4">
                <h2 class="mb-4 text-xl font-bold text-gray-900 dark:text-white">Perencanaan Pemulangan Pasien (P3) / <span class="italic">Discharge Planning</span></h2>
                <div class="grid gap-4 lg:grid-cols-2 sm:gap-6">
                    <div class="w-full">
                        <label for="usia_diatas_65" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Usia Pasien Diatas 65 Tahun</label>
                        <select disabled  id="usia_diatas_65" name="usia_diatas_65" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                            <option value="Tidak" selected>Tidak</option>
                            <option value="Ya">Ya</option>
                        </select>
                    </div>
                    <div class="w-full">
                        <label for="keterbatasan_mobilitas" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Keterbatasan Mobilitas</label>
                        <select disabled  id="keterbatasan_mobilitas" name="keterbatasan_mobilitas" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                            <option value="Tidak" selected>Tidak</option>
                            <option value="Ya">Ya</option>
                        </select>
                    </div>
                    <div class="w-full">
                        <label for="pengobatan_lanjut" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Perawatan / Pengobatan Lanjut</label>
                        <select disabled  id="pengobatan_lanjut" name="pengobatan_lanjut" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                            <option value="Tidak" selected>Tidak</option>
                            <option value="Ya">Ya</option>
                        </select>
                    </div>
                    <div class="w-full">
                        <label for="bantuan_aktivitas_harian" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Bantuan Untuk Melakukan Aktivitas Sehari-hari</label>
                        <select disabled  id="bantuan_aktivitas_harian" name="bantuan_aktivitas_harian" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                            <option value="Tidak" selected>Tidak</option>
                            <option value="Ya">Ya</option>
                        </select>
                    </div>
                    <div class="w-full">
                        <label for="masalah_keperawatan" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Diagnosa Pasien</label>
                        <select disabled  id="masalah_keperawatan" name="masalah_keperawatan" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                            <option disabled selected>Pilih diagnosa:</option>
                            @foreach($kategori_masalah as $row)
                            <option disabled class="capitalize font-bold">{{$row->nama}}</option>
                            @foreach($row->item as $item)
                            <option @if($data_pasien->masalah_keperawatan == $item->kode) selected @endif value="{{$item->kode}}" class="capitalize">{{$item->kode." - ".$item->nama}}</option>
                            @endforeach
                            @endforeach
                        </select>
                    </div>
                    @if($data_pasien->masalah_keperawatan != null)
                    <div class="w-full lg:col-span-2">  
                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">SLKI</label>                      
                        <div class="bg-white rounded-lg p-4 shadow">
                            {!!$data_pasien->diagnosis->slki!!}
                        </div>
                    </div>
                    <div class="w-full lg:col-span-2">      
                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Intervensi / SIKI</label>                                        
                        <div class="bg-white rounded-lg p-4 shadow">
                            {!!$data_pasien->diagnosis->intervensi!!}
                        </div>
                    </div>
                    @endif
                </div>
            </div>
            <div class="w-full flex gap-2 justify-end">
                <a href="{{route('assessments')}}" class="inline-flex items-center px-5 py-2.5 mt-4 sm:mt-6 text-sm font-medium text-center text-white bg-primary-700 rounded-lg focus:ring-4 focus:ring-primary-200 dark:focus:ring-primary-900 hover:bg-primary-800">
                    Kembali
                </a>
            </div>
        </form>
        @endif
    </div>
  </section>
@endsection