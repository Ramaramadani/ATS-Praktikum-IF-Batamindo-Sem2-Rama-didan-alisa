@extends('layouts.app')

@section('title', 'Home')
@section('page_title', 'Selamat datang di Supercar News')

@section('content')
    <div class="bg-black text-white p-6 rounded-lg mb-8">
        <h1 class="text-3xl font-bold mb-4">Selamat Pagi, Petrolheads!</h1>
        <p class="mb-4 text-xl">Berikut update terbaru dunia supercar hari ini</p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        @include('components.card', [
            'imgsrc' => 'images/huracan.jpeg',
            'title' => 'Ferrari SF90 Stradale Meluncur di Batam',
            'desc' => 'Supercar hybrid terbaru Ferrari ini terlihat di jalanan Batam dengan spesifikasi menakjubkan: 1000 HP, 0-100 km/jam dalam 2.5 detik!'
        ])

        @include('components.card', [
            'imgsrc' => 'images/aventador.jpeg',
            'title' => 'Lamborghini Revuelto: The New V12 Hybrid',
            'desc' => 'Lamborghini menghadirkan penerus Aventador dengan teknologi hybrid namun tetap mempertahankan soul V12 yang legendaris.'
        ])

        @include('components.card', [
            'imgsrc' => 'images/galardo.jpeg',
            'title' => 'Supercar Meet Batam 2023',
            'desc' => 'Event tahunan para pecinta supercar di Batam kembali digelar dengan lebih dari 50 unit mobil eksotis dari berbagai merek ternama.'
        ])
    </div>

    <div class="mt-12 bg-gray-100 p-6 rounded-lg">
        <h2 class="text-2xl font-bold mb-4">Event Mendatang</h2>
        <p class="mb-2">📅 15 November - Test Drive McLaren 720S di Nagoya</p>
        <p class="mb-2">📅 22 November - Diskusi Teknologi Hypercar di Mega Mall</p>
        <p>📅 30 November - Supercar Charity Run untuk Pendidikan</p>
    </div>
@endsection
