@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-8">
    <h1 class="text-4xl font-bold text-center mb-6">Supercar Marketplace</h1>
    <p class="text-center text-gray-600 mb-8">Browse our elite collection of high-performance vehicles for sale.</p>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        <div class="bg-white rounded-lg shadow-md p-4">
            <img src="{{ asset('image/supercar1.jpg') }}" class="rounded-lg mb-4 w-full h-48 object-cover" alt="Car 1">
            <h2 class="text-xl font-semibold">McLaren P1</h2>
            <p class="text-gray-600">Hybrid. 903 HP. $1,150,000</p>
        </div>
        <div class="bg-white rounded-lg shadow-md p-4">
            <img src="{{ asset('image/supercar2.jpg') }}" class="rounded-lg mb-4 w-full h-48 object-cover" alt="Car 2">
            <h2 class="text-xl font-semibold">Bugatti Chiron</h2>
            <p class="text-gray-600">Gasoline. 1500 HP. $3,000,000</p>
        </div>
        <div class="bg-white rounded-lg shadow-md p-4">
            <img src="{{ asset('image/supercar3.jpg') }}" class="rounded-lg mb-4 w-full h-48 object-cover" alt="Car 3">
            <h2 class="text-xl font-semibold">Tesla Roadster</h2>
            <p class="text-gray-600">Electric. 1000+ HP. $200,000</p>
        </div>
    </div>
</div>
@endsection
