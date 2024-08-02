@extends('layout')

@section('content')
<section class="min-h-screen bg-gray-50 dark:bg-gray-900">
    <div class="mx-auto max-w-screen-lg">
        <form action="{{route('submit_an_assessment')}}" method="post">
            @csrf

            <div class="border-b border-b-gray-300 pb-8 mb-4">
                <h2 class="mb-4 text-xl font-bold text-gray-900 dark:text-white">Data Pasien</h2>
                <div class="grid gap-4 lg:grid-cols-2 sm:gap-6">
                    
                    <div class="w-full">
                        <label for="nama_pasien" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Pasien</label>
                        <input type="text" name="nama_pasien" id="nama_pasien" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Nama pasien" required="">
                    </div>
                    <div class="w-full">
                        <label for="no_rm" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">No. RM</label>
                        <input type="text" name="no_rm" id="no_rm" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="No. RM" required="">
                    </div>
                    <div class="w-full">
                        <label for="tgl_lahir" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tanggal Lahir</label>
                        <input type="date" name="tgl_lahir" id="tgl_lahir" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Tanggal lahir pasien" required="">
                    </div>
                    <div class="w-full">
                        <label for="diagnosa_medis" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Diagnosa Medis</label>
                        <input type="date" name="diagnosa_medis" id="diagnosa_medis" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Diagnosa medis pasien" required="">
                    </div>
                    <div class="w-full">
                        <label for="ruang_rawat" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Ruang Rawat</label>
                        <input type="date" name="ruang_rawat" id="ruang_rawat" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Ruang rawat" required="">
                    </div>
                    <div class="w-full">
                        <label for="pendidikan" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Pendidikan</label>
                        <select id="pendidikan" name="pendidikan" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                            <option selected="">Pendidikan terakhir:</option>
                            <option value="Tidak Sekolah">Tidak Sekolah</option>
                            <option value="SD">SD</option>
                            <option value="SLTP">SLTP</option>
                            <option value="SLTA">SLTA</option>
                            <option value="D3">D3</option>
                            <option value="D4/S1">D4/S1</option>
                            <option value="S2">S2</option>
                            <option value="S3">S3</option>
                        </select>
                    </div>
                    <div class="w-full">
                        <label for="tgl_masuk" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tanggal Masuk</label>
                        <input type="date" name="tgl_masuk" id="tgl_masuk" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Tanggal masuk" required="">
                    </div>
                    <div class="w-full">
                        <label for="tgl_assessment" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tanggal Assessment</label>
                        <input type="date" name="tgl_assessment" id="tgl_assessment" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Tanggal assessment" required="">
                    </div>
                </div>
            </div>

            <div>
                <h2 class="mb-4 text-xl font-bold text-gray-900 dark:text-white">Riwayat Kesehatan</h2>
                <div class="grid gap-4 lg:grid-cols-2 sm:gap-6">
                    
                    <div class="w-full">
                        <label for="keluhan_utama" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Keluhan Utama</label>
                        <input type="text" name="keluhan_utama" id="keluhan_utama" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Keluhan utama pasien" required="">
                    </div>
                    <div class="w-full">
                        <label for="riwayat_kesehatan_sekarang" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Riwayat Kesehatan Sekarang</label>
                        <input type="text" name="riwayat_kesehatan_sekarang" id="riwayat_kesehatan_sekarang" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Riwayat kesehatan pasien sekarang" required="">
                    </div>
                    <div class="w-full">
                        <label for="penyakit_genetik" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Penyakit Genetik</label>
                        <select id="penyakit_genetik" name="penyakit_genetik" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                            <option value="Tidak Ada" selected>Tidak Ada</option>
                            <option value="Ada">Ada</option>
                        </select>
                    </div>
                    <div class="w-full">
                        <label for="ket_penyakit_genetik" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jelaskan Penyakit Genetik</label>
                        <input type="text" name="ket_penyakit_genetik" id="ket_penyakit_genetik" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Kosongkan bila tidak ada" required="">
                    </div>
                    <div class="w-full">
                        <label for="trauma" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Trauma</label>
                        <select id="trauma" name="trauma" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                            <option value="Tidak Ada" selected>Tidak Ada</option>
                            <option value="Ada">Ada</option>
                        </select>
                    </div>
                    <div class="w-full">
                        <label for="operasi" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Operasi</label>
                        <select id="operasi" name="operasi" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                            <option value="Tidak Pernah" selected>Tidak Pernah</option>
                            <option value="Pernah">Pernah</option>
                        </select>
                    </div>
                    <div class="w-full">
                        <label for="penyakit_lainnya" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Penyakit Lainnya</label>
                        <select id="penyakit_lainnya" name="penyakit_lainnya" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                            <option value="Tidak Ada" selected>Tidak Ada</option>
                            <option value="Ada">Ada</option>
                        </select>
                    </div>
                    <div class="w-full">
                        <label for="ket_penyakit_lainnya" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jelaskan Penyakit Lainnya</label>
                        <input type="text" name="ket_penyakit_lainnya" id="ket_penyakit_lainnya" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Kosongkan bila tidak ada" required="">
                    </div>
                    <div class="w-full">
                        <label for="riwayat_kesehatan_keluarga" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Riwayat Kesehatan Keluarga</label>
                        <input type="text" name="riwayat_kesehatan_keluarga" id="riwayat_kesehatan_keluarga" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Riwayat kesehatan keluarga pasien" required="">
                    </div>
                    <div class="w-full">
                        <label for="auto_anamnesa_pasien" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Auto Anamnesa Pasien</label>
                        <select id="auto_anamnesa_pasien" name="auto_anamnesa_pasien" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                            <option value="Kompeten" selected>Kompeten</option>
                            <option value="Tidak Kompeten">Tidak Kompeten</option>
                        </select>
                    </div>
                    <div class="w-full">
                        <label for="nama_pemberi_informasi" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Pemberi Informasi</label>
                        <input type="text" name="nama_pemberi_informasi" id="nama_pemberi_informasi" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Nama Pemberi Informasi" required="">
                    </div>
                </div>
            </div>

            <div class="w-full flex gap-2 justify-end">
                <button type="submit" class="inline-flex items-center px-5 py-2.5 mt-4 sm:mt-6 text-sm font-medium text-center text-white bg-primary-700 rounded-lg focus:ring-4 focus:ring-primary-200 dark:focus:ring-primary-900 hover:bg-primary-800">
                    Submit
                </button>
                <a href="{{route('assessments')}}" class="inline-flex items-center px-5 py-2.5 mt-4 sm:mt-6 text-sm font-medium text-center text-primary-700 rounded-lg focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-900 hover:bg-gray-200">
                    Cancel
                </a>
            </div>
        </form>
    </div>
  </section>
@endsection