@extends('layouts.app')

@section('title', 'Online Stores')

@section('page_title', 'Online Super Car Collection')

@section('content')
<div class="grid gap-6 mb-6 md:grid-cols-3">
    @foreach ([
        ['name' => 'Lamborghini Aventador', 'img' => 'lamborghini.jpg'],
        ['name' => 'Ferrari SF90', 'img' => 'ferrari.jpg'],
        ['name' => 'McLaren P1', 'img' => 'mclaren.jpg'],
        ['name' => 'Bugatti Chiron', 'img' => 'bugatti.jpg'],
        ['name' => 'Koenigsegg Jesko', 'img' => 'koenigsegg.jpg'],
        ['name' => 'Porsche 918 Spyder', 'img' => 'porsche.jpg']
    ] as $car)
    <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
        <img class="rounded-t-lg w-full h-48 object-cover" src="{{ asset('images/'.$car['img']) }}" alt="{{ $car['name'] }}" />
        <div class="p-5">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $car['name'] }}</h5>
            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                Discover the unmatched performance and design of the {{ $car['name'] }}. Available now in our online store.
            </p>
            <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-600 rounded-lg hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-500 dark:hover:bg-blue-600 dark:focus:ring-blue-800">
                Explore More
                <svg class="rtl:rotate-180 w-4 h-4 ms-2" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"></path>
                </svg>
            </a>
        </div>
    </div>
    @endforeach
</div>
@endsection
