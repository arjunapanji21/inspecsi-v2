@extends('layout')

@section('content')
<section class="min-h-screen bg-gray-50 dark:bg-gray-900">
    <div class="mx-auto w-full">
        <h2 class="mb-4 text-xl font-bold text-gray-900 dark:text-white">Update Diagnosis</h2>
        <form action="{{route('diagnosa_update', $masalah_keperawatan->id)}}" method="post">
            @csrf
            <div class="grid gap-4 mb-4 sm:grid-cols-2 sm:gap-6 sm:mb-5">
                <div class="sm:col-span-2">
                    <label for="kode" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kode</label>
                    <input type="text" name="kode" id="kode" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" value="{{$masalah_keperawatan->kode}}" placeholder="Kode Diagnosis" required="">
                </div>
                <div class="w-full">
                    <label for="nama" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama</label>
                    <input type="text" name="nama" id="nama" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" value="{{$masalah_keperawatan->nama}}" placeholder="Nama Diagnosis" required="">
                </div>
                <div>
                    <label for="kategori_masalah_keperawatan_id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kategori</label>
                    <select id="kategori_masalah_keperawatan_id" name="kategori_masalah_keperawatan_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                        <option selected disabled>Kategori diagnosis:</option>
                        @foreach($kategori_masalah_keperawatan as $row)
                        <option @if($masalah_keperawatan->kategori_masalah_keperawatan_id == $row->id) selected @endif value="{{$row->id}}">{{$row->nama}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="sm:col-span-2">
                    <label for="slki" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">SLKI</label>
                    <textarea id="slki" name="slki" rows="8" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="SLKI Diagnosis">{{$masalah_keperawatan->slki}}</textarea>
                </div>
                <div class="sm:col-span-2">
                    <label for="intervensi" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Intervensi</label>
                    <textarea id="intervensi" name="intervensi" rows="8" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Intervensi Diagnosis">{{$masalah_keperawatan->intervensi}}</textarea>
                </div>
            </div>
            <div class="flex justify-between items-center space-x-4">
                <div class="flex items-center space-x-4">
                    <button type="submit" class="text-white bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
                        Update diagnosis
                    </button>
                    <a href="{{route('diagnosa')}}" class="px-5 py-2.5 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">
                        Kembali
                    </a>
                </div>
                <a href="{{route('diagnosa_hapus', $masalah_keperawatan->id)}}" onclick="return confirm('Diagnosa akan dihapus, apakah anda yakin?')" class="text-red-600 inline-flex items-center hover:text-white border border-red-600 hover:bg-red-600 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:border-red-500 dark:text-red-500 dark:hover:text-white dark:hover:bg-red-600 dark:focus:ring-red-900">
                    <svg class="w-5 h-5 mr-1 -ml-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd"></path></svg>
                    Delete
                </a>
            </div>
        </form>
    </div>
  </section>
@endsection

@section('script')
<script type="module">
    window.addEventListener('DOMContentLoaded', () => {
    tinymce.init({
        selector: '#slki',
        placeholder: 'Type here...',
        license_key: 'gpl',
        /* TinyMCE configuration options */
        skin: false,
        content_css: false,
        menubar: false,
        toolbar: 'undo redo styles bold italic alignleft aligncenter alignright alignjustify | bullist numlist outdent indent'
    });
    tinymce.init({
        selector: '#intervensi',
        placeholder: 'Type here...',
        license_key: 'gpl',
        /* TinyMCE configuration options */
        skin: false,
        content_css: false,
        menubar: false,
        toolbar: 'undo redo styles bold italic alignleft aligncenter alignright alignjustify | bullist numlist outdent indent'
    });
});
</script>
    
@endsection