@extends('layouts.dashboard')

@section('content')
<div class="relative flex flex-col items-center w-full h-full p-12">
    <div class="w-full">
        <span class="text-[#1D1B31] text-2xl font-bold">{{ __('nav.poems') }}</span>
    </div>
    <div class="flex justify-end w-full mt-4 space-x-2">
        <button onclick="showModal()" class="bg-blue-700 text-white hover:bg-blue-800 focus:ring-blue-300 font-medium rounded-lg px-5 py-2.5">создавать</button>
        <button class="bg-white text-gray-900 border border-gray-300 hover:bg-gray-100 focus:ring-gray-100 font-medium rounded-lg px-5 py-2.5">порядок</button>
    </div>
    @include('./admin/includePoem.index')

    @if(isset($poem->showEdit))
        @include('./admin/includePoem.edit')
    @endif

    @include('./admin/includePoem.create')
</div>

@endsection