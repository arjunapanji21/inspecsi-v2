@extends('layout')

@section('content')
<section class="min-h-screen bg-gray-50 dark:bg-gray-900">
    <div class="mx-auto w-full">
        <h2 class="mb-4 text-xl font-bold text-gray-900 dark:text-white">{{$title}}</h2>
        <form action="{{route('room_baru_simpan')}}" method="post">
            @csrf
            <div class="grid gap-4 mb-4">
                <div class="w-full">
                    <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama</label>
                    <input type="text" name="name" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Nama Ruangan" required="">
                </div>
                <div>
                    <label for="hospital_id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Hospital / Rumah Sakit</label>
                    <select id="hospital_id" name="hospital_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                        <option selected disabled>Pilih rumah sakit:</option>
                        @foreach($hospitals as $row)
                        <option value="{{$row->id}}">{{$row->name}}</option>
                        @endforeach
                    </select>
                </div>
                
            </div>
            <div class="flex justify-between items-center space-x-4">
                <div class="flex items-center space-x-4">
                    <button type="submit" class="text-white bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
                        Simpan
                    </button>
                    <a href="{{route('rooms')}}" class="px-5 py-2.5 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">
                        Kembali
                    </a>
                </div>
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