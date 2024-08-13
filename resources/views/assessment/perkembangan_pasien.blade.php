@extends('layout')

@section('content')
<section class="min-h-screen bg-gray-50 dark:bg-gray-900">
    <div class="mx-auto max-w-screen-lg">
        @if(auth()->user()->role == "Ketua Tim")
        <h2 class="mb-4 text-xl font-bold text-gray-900 dark:text-white text-center">Perkembangan Pasien</h2>
        <div id="diagnosa" class="mb-5" data-accordion="collapse"
            data-active-classes="bg-blue-100 dark:bg-gray-800 text-blue-600 dark:text-white">
            @foreach($diagnosa as $row)
            <h2 id="diagnosa-heading-1">
                <button type="button"
                    class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-500 border border-b-0 border-gray-200 rounded-t-xl focus:ring-4 focus:ring-blue-200 dark:focus:ring-blue-800 dark:border-gray-700 dark:text-gray-400 hover:bg-blue-100 dark:hover:bg-gray-800 gap-3"
                    data-accordion-target="#diagnosa-{{$row->id}}" aria-expanded="false"
                    aria-controls="diagnosa-{{$row->id}}">
                    <span>{{$row->kode.' - '.$row->nama}}</span>
                    <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 5 5 1 1 5" />
                    </svg>
                </button>
            </h2>
            <div id="diagnosa-{{$row->id}}" class="hidden" aria-labelledby="accordion-color-heading-1">
                <div class="p-5 border border-b-0 border-gray-200 dark:border-gray-700 dark:bg-gray-900">
                    <h3>SLKI</h3>
                    {!!$row->slki!!}
                </div>
                <div class="p-5 border border-b-0 border-gray-200 dark:border-gray-700 dark:bg-gray-900">
                    <h3>Intervensi</h3>
                    {!!$row->intervensi!!}
                </div>
            </div>
            @endforeach
        </div>

        <form action="{{route('perkembangan_pasien_submit', $data_assessment->id)}}" method="post">
            @csrf
            <div class="border-b border-b-gray-300 pb-8 mb-4">
                <div class="grid gap-4">
                    <div class="w-full">
                        <label for="tanggal"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tanggal</label>
                        <input type="date" name="tanggal" id="tanggal"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            value="{{old('tanggal')}}" placeholder="Tanggal" required="">
                    </div>
                    <div>
                        <label for="masalah_keperawatan" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Masalah Keperawatan</label>
                        <select id="masalah_keperawatan" name="masalah_keperawatan" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                            <option selected disabled>Pilih masalah keperawatan:</option>
                            @foreach($diagnosa as $d)
                            <option value="{{$d->kode.' - '.$d->nama}}">{{$d->kode.' - '.$d->nama}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="w-full">
                        <label for="implementasi"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Implementasi</label>
                        <input type="text" name="implementasi" id="implementasi"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            value="{{old('implementasi')}}" placeholder="Implementasi" required="">
                    </div>
                </div>
            </div>
            <div class="border-b border-b-gray-300 pb-8 mb-4">
                <h2 class="mb-4 text-xl font-bold text-gray-900 dark:text-white">SOAP</h2>
                <div class="grid gap-4 lg:grid-cols-2 sm:gap-6">
                    <div class="w-full">
                        <label for="subjektif"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Subjektif</label>
                        <input type="text" name="subjektif" id="subjektif"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            value="{{old('subjektif')}}" placeholder="Subjektif" required="">
                    </div>
                    <div class="w-full">
                        <label for="objek"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Objektif</label>
                        <input type="text" name="objek" id="objek"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            value="{{old('objek')}}" placeholder="Objek" required="">
                    </div>
                    <div class="w-full">
                        <label for="assessment"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Assessment</label>
                        <input type="text" name="assessment" id="assessment"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            value="{{old('assessment')}}" placeholder="Assessment" required="">
                    </div>
                    <div class="w-full">
                        <label for="plan"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Plan</label>
                        <input type="text" name="plan" id="plan"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            value="{{old('plan')}}" placeholder="Plan" required="">
                    </div>
                </div>
                <div class="w-full flex gap-2 justify-end">
                    <button type="submit"
                        class="inline-flex items-center px-5 py-2.5 mt-4 sm:mt-6 text-sm font-medium text-center text-white bg-primary-700 rounded-lg focus:ring-4 focus:ring-primary-200 dark:focus:ring-primary-900 hover:bg-primary-800">
                        Simpan
                    </button>
                    <a href="{{route('assessments')}}"
                        class="inline-flex items-center px-5 py-2.5 mt-4 sm:mt-6 text-sm font-medium text-center text-primary-700 rounded-lg focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-900 hover:bg-gray-200">
                        Kembali
                    </a>
                </div>
            </div>
        </form>
        @endif

        <h2 class="mt-10 mb-4 text-xl font-bold text-gray-900 dark:text-white text-center">Catatan Perkembangan Pasien
        </h2>
        <div class="grid gap-4 lg:grid-cols-2 sm:gap-6">
            @foreach($perkembangan_pasien as $row)
            <div class="relative overflow-x-auto p-4 rounded-lg bg-white shadow">
                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                    <tr>
                        <th>DIAGNOSA</th>
                        <th>:</th>
                        <th>{{$row->masalah_keperawatan}}</th>
                    </tr>
                    <tr>
                        <td>Tanggal</td>
                        <td>:</td>
                        <td>{{date('d/m/Y', strtotime($row->tanggal))}}</td>
                    </tr>
                    <tr>
                        <td class="capitalize">implementasi</td>
                        <td>:</td>
                        <td>{{$row->implementasi}}</td>
                    </tr>
                    <tr>
                        <th colspan="2">SOAP</th>
                    </tr>
                    <tr>
                        <td class="capitalize">subjektif</td>
                        <td>:</td>
                        <td>{{$row->subjektif}}</td>
                    </tr>
                    <tr>
                        <td class="capitalize">objektif</td>
                        <td>:</td>
                        <td>{{$row->objek}}</td>
                    </tr>
                    <tr>
                        <td class="capitalize">assessment</td>
                        <td>:</td>
                        <td>{{$row->assessment}}</td>
                    </tr>
                    <tr>
                        <td class="capitalize">plan</td>
                        <td>:</td>
                        <td>{{$row->plan}}</td>
                    </tr>
                </table>
            </div>
            @endforeach
        </div>
        @if(auth()->user()->role != "Ketua Tim")
        <div class="w-full flex gap-2 justify-end">
            <a href="{{route('assessments')}}"
                class="inline-flex items-center px-5 py-2.5 mt-4 sm:mt-6 text-sm font-medium text-center text-white bg-primary-700 rounded-lg focus:ring-4 focus:ring-primary-200 dark:focus:ring-primary-900 hover:bg-primary-800">
                Kembali
            </a>
        </div>
        @endif
    </div>
</section>
@endsection