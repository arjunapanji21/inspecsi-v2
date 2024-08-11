@extends('layout')

@section('content')
<section class="min-h-screen bg-gray-50 dark:bg-gray-900">
    <div class="mx-auto max-w-screen-lg">
        <h2 class="mb-4 text-xl font-bold text-gray-900 dark:text-white">Add a new assessment</h2>
        <form action="{{route('submit_an_assessment')}}" method="post">
            @csrf
            <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">
                <div class="w-full">
                    <label for="karu_id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Hospital</label>
                    <input type="text" class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Kepala Ruang" value="{{auth()->user()->hospital->name}}" disabled/>
                </div>
                <div class="w-full">
                    <label for="karu_id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Room</label>
                    <input type="text" class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Kepala Ruang" value="{{auth()->user()->room->name}}" disabled/>
                </div>
                <div class="w-full col-span-2">
                    <label for="karu_id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Head of Room</label>
                    <input type="number" name="karu_id" id="karu_id" class="hidden bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Kepala Ruang" value="{{auth()->user()->id}}" />
                    <input type="text" class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Kepala Ruang" value="{{auth()->user()->name}}" disabled/>
                </div>
                <div class="w-full col-span-2">
                    <label for="assessment_date" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Assessment Date</label>
                    <input type="date" name="assessment_date" id="assessment_date" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Assessment Date" required="">
                </div>
                <div class="w-full col-span-2">
                    <label for="katim_id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Team Leader</label>
                    <select id="katim_id" name="katim_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                        <option selected disabled>Select team leader</option>
                        @foreach($katims as $katim)
                        <option value="{{$katim->id}}">{{$katim->name}}</option>
                        @endforeach
                    </select>
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