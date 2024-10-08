@extends('layout')

@section('content')
<section class="min-h-screen bg-gray-50 dark:bg-gray-900">
    <div class="mx-auto w-full">
        @if(auth()->user()->role == "Super Admin")
        <div class="grid grid-cols-2 lg:grid-cols-4 gap-5 mb-10">
            <div class="bg-white text-gray-700 rounded-lg shadow-md p-5">
                <h3 class="font-medium text-lg mb-2 border-b">Assessments</h3>
                <p class="font-semibold text-5xl text-right">{{count($assessments)}}</p>
            </div>
            <div class="bg-white text-gray-700 rounded-lg shadow-md p-5">
                <h3 class="font-medium text-lg mb-2 border-b">Hospitals</h3>
                <p class="font-semibold text-5xl text-right">{{count($hospitals)}}</p>
            </div>
            <div class="bg-white text-gray-700 rounded-lg shadow-md p-5">
                <h3 class="font-medium text-lg mb-2 border-b">Rooms</h3>
                <p class="font-semibold text-5xl text-right">{{count($rooms)}}</p>
            </div>
            <div class="bg-white text-gray-700 rounded-lg shadow-md p-5">
                <h3 class="font-medium text-lg mb-2 border-b">Users</h3>
                <p class="font-semibold text-5xl text-right">{{count($users)}}</p>
            </div>
        </div>
        @else
        <div class="grid grid-cols-2 gap-5 mb-10">
            <div class="bg-white text-gray-700 rounded-lg shadow-md p-5">
                <h3 class="font-medium text-lg mb-2 border-b">Assessments Uncompleted</h3>
                <p class="font-semibold text-5xl text-right">{{$uncompleted}}</p>
            </div>
            <div class="bg-white text-gray-700 rounded-lg shadow-md p-5">
                <h3 class="font-medium text-lg mb-2 border-b">Assessments Completed</h3>
                <p class="font-semibold text-5xl text-right">{{$completed}}</p>
            </div>
        </div>
        @endif
        <div class=" bg-white dark:bg-gray-800 relative shadow-md sm:rounded-lg overflow-hidden">
            <div class="flex flex-col md:flex-row items-center justify-between space-y-3 md:space-y-0 md:space-x-4 p-4">
                <div class="w-full md:w-1/2">
                    <form class="flex items-center">
                        <label for="simple-search" class="sr-only">Search</label>
                        <div class="relative w-full">
                            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd" />
                                </svg>
                            </div>
                            <input type="text" id="simple-search" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full pl-10 p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Search" required="">
                        </div>
                    </form>
                </div>
                @if(auth()->user()->role == 'Kepala Ruang')
                <div class="w-full md:w-auto flex flex-col md:flex-row space-y-2 md:space-y-0 items-stretch md:items-center justify-end md:space-x-3 flex-shrink-0">
                    <a href="{{route('assessment_create')}}" class="flex items-center justify-center text-white bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-primary-600 dark:hover:bg-primary-700 focus:outline-none dark:focus:ring-primary-800">
                        <svg class="h-3.5 w-3.5 mr-2" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <path clip-rule="evenodd" fill-rule="evenodd" d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" />
                        </svg>
                        New Assessment
                    </a>
                </div>
                @endif
            </div>
            <div class="overflow-x-auto min-h-80">
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-4 py-3">Assessment Date</th>
                            <th scope="col" class="px-4 py-3">KARU</th>
                            <th scope="col" class="px-4 py-3">KATIM</th>
                            <th scope="col" class="px-4 py-3">Status</th>
                            <th scope="col" class="px-4 py-3 text-right">Score</th>
                            <th scope="col" class="px-4 py-3">
                                <span class="sr-only">Actions</span>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($assessments as $assessment)
                        <tr class="border-b dark:border-gray-700">
                            <th scope="row" class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white">{{date('d/m/Y', strtotime($assessment->assessment_date))}}</th>
                            <td class="px-4 py-3">{{$assessment->karu->name}}</td>
                            <td class="px-4 py-3">{{$assessment->katim->name}}</td>
                            <td class="px-4 py-3"><span class="@if($assessment->finished_at != null) bg-green-100 text-green-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:bg-green-900 dark:text-green-300 @else bg-blue-100 text-blue-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:bg-blue-900 dark:text-blue-300 @endif">{{$assessment->finished_at == null ? 'Uncompleted' : 'Completed'}}</span></td>
                            <td class="px-4 py-3 text-right font-semibold">{{$assessment->score}}</td>
                            <td class="px-4 py-3 flex items-center justify-end">
                                <button id="assessment-{{$assessment->id}}-button" data-dropdown-toggle="assessment-{{$assessment->id}}" class="inline-flex items-center p-0.5 text-sm font-medium text-center text-gray-500 hover:text-gray-800 rounded-lg focus:outline-none dark:text-gray-400 dark:hover:text-gray-100" type="button">
                                    <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z" />
                                    </svg>
                                </button>
                                <div id="assessment-{{$assessment->id}}" class="hidden z-10 w-44 bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700 dark:divide-gray-600">
                                    <ul class="py-1 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="assessment-{{$assessment->id}}-button">
                                        <li>
                                            <a href="{{route('data_pasien', $assessment->id)}}" class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Data Pasien</a>
                                        </li>
                                        <li>
                                            <a href="{{route('perkembangan_pasien', $assessment->id)}}" class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Perkembangan</a>
                                        </li>
                                    </ul>
                                    <div class="py-1">
                                        <a href="{{route('penilaian', $assessment->id)}}" class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Penilaian</a>
                                    </div>
                                    @if(auth()->user()->role == "Super Admin")
                                    <div class="py-1">
                                        <a href="#" class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Hapus</a>
                                    </div>
                                    @endif
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <nav class="flex flex-col md:flex-row justify-between items-start md:items-center space-y-3 md:space-y-0 p-4" aria-label="Table navigation">
                {{-- <span class="text-sm font-normal text-gray-500 dark:text-gray-400">
                    Showing
                    <span class="font-semibold text-gray-900 dark:text-white">1-10</span>
                    of
                    <span class="font-semibold text-gray-900 dark:text-white">1000</span>
                </span>
                <ul class="inline-flex items-stretch -space-x-px">
                    <li>
                        <a href="#" class="flex items-center justify-center h-full py-1.5 px-3 ml-0 text-gray-500 bg-white rounded-l-lg border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                            <span class="sr-only">Previous</span>
                            <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd" />
                            </svg>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center justify-center text-sm py-2 px-3 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">1</a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center justify-center text-sm py-2 px-3 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">2</a>
                    </li>
                    <li>
                        <a href="#" aria-current="page" class="flex items-center justify-center text-sm z-10 py-2 px-3 leading-tight text-primary-600 bg-primary-50 border border-primary-300 hover:bg-primary-100 hover:text-primary-700 dark:border-gray-700 dark:bg-gray-700 dark:text-white">3</a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center justify-center text-sm py-2 px-3 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">...</a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center justify-center text-sm py-2 px-3 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">100</a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center justify-center h-full py-1.5 px-3 leading-tight text-gray-500 bg-white rounded-r-lg border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                            <span class="sr-only">Next</span>
                            <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                            </svg>
                        </a>
                    </li>
                </ul> --}}
            </nav>
        </div>
    </div>
    </section>
@endsection