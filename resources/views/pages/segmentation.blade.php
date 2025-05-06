@extends('layouts.app')

@section('title', 'Segmentation')
@section('page_title', 'Car Market Segmentation')

@section('content')
<div class="grid gap-6 mb-6 md:grid-cols-3">
    @foreach ([
        ['segment' => 'Luxury', 'img' => 'luxury-car.jpg', 'desc' => 'High-end cars for exclusive clientele.'],
        ['segment' => 'Performance', 'img' => 'performance-car.jpg', 'desc' => 'Track-ready machines built for speed.'],
        ['segment' => 'Eco-Friendly', 'img' => 'electric-supercar.jpg', 'desc' => 'Electric supercars that don’t compromise power.']
    ] as $seg)
        <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
            <img class="rounded-t-lg w-full h-48 object-cover" src="{{ asset('images/'.$seg['img']) }}" alt="{{ $seg['segment'] }}" />
            <div class="p-5">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $seg['segment'] }}</h5>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                    {{ $seg['desc'] }}
                </p>
                <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-white bg-blue-600 rounded-lg hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-500 dark:hover:bg-blue-600 dark:focus:ring-blue-800">
                    Learn More
                    <svg class="w-4 h-4 ms-2 rtl:rotate-180" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/>
                    </svg>
                </a>
            </div>
        </div>
    @endforeach
</div>
@endsection
