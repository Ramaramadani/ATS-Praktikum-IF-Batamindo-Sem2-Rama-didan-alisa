@extends('layouts.app')

@section('content')
    <div class="container mx-auto">
        <h1 class="text-4xl font-bold text-center my-8">Supercar Resources</h1>
        <img src="{{ asset('image/supercar.jpg') }}" alt="Supercar Image" class="w-full h-auto mb-8 rounded-lg shadow-lg">
        <p class="text-gray-700 text-lg">
            Explore the world of high-performance supercars. These machines are designed for speed, precision, and innovation, pushing the boundaries of engineering.
        </p>
        <div class="mt-8">
            <h2 class="text-3xl font-semibold">Supercar Categories</h2>
            <ul class="list-disc pl-6 text-lg text-gray-600 mt-4">
                <li>Sports Cars</li>
                <li>Luxury Cars</li>
                <li>Electric Supercars</li>
                <li>Concept Cars</li>
            </ul>
        </div>
        <div class="mt-8">
            <h2 class="text-3xl font-semibold">Featured Supercars</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mt-4">
                <!-- Example of supercar cards -->
                <div class="card bg-white shadow-lg rounded-lg p-4">
                    <img src="{{ asset('image/supercar1.jpg') }}" alt="Supercar 1" class="w-full h-64 object-cover rounded-lg mb-4">
                    <h3 class="font-semibold text-xl">Ferrari LaFerrari</h3>
                    <p class="text-gray-600">A hybrid supercar combining Ferrari's passion for speed with cutting-edge technology.</p>
                </div>
                <div class="card bg-white shadow-lg rounded-lg p-4">
                    <img src="{{ asset('image/supercar2.jpg') }}" alt="Supercar 2" class="w-full h-64 object-cover rounded-lg mb-4">
                    <h3 class="font-semibold text-xl">Lamborghini Aventador</h3>
                    <p class="text-gray-600">A true masterpiece with unmatched performance and stunning design.</p>
                </div>
                <div class="card bg-white shadow-lg rounded-lg p-4">
                    <img src="{{ asset('image/supercar3.jpg') }}" alt="Supercar 3" class="w-full h-64 object-cover rounded-lg mb-4">
                    <h3 class="font-semibold text-xl">Porsche 918 Spyder</h3>
                    <p class="text-gray-600">A hybrid supercar that blends exceptional speed with eco-consciousness.</p>
                </div>
            </div>
        </div>
    </div>
@endsection
