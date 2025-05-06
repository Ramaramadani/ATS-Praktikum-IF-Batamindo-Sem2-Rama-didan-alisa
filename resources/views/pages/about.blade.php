@extends('layouts.app')

@section('title', 'About Us')
@section('page_title', 'Tentang Supercar News')

@section('content')
    <div class="bg-gray-100 p-8 rounded-lg shadow-lg mb-8">
        <div class="max-w-4xl mx-auto">
            <h1 class="text-3xl font-bold text-red-600 mb-6">Tentang Kami</h1>

            <div class="mb-8">
                <h2 class="text-2xl font-semibold mb-4">Visi Kami</h2>
                <p class="text-gray-700 leading-relaxed">
                    Menjadi sumber informasi terdepan tentang dunia supercar dan otomotif high-performance di Indonesia,
                    memberikan liputan eksklusif, review mendalam, dan berita terkini tentang perkembangan industri otomotif mewah.
                </p>
            </div>

            <div class="mb-8">
                <h2 class="text-2xl font-semibold mb-4">Misi Kami</h2>
                <ul class="list-disc pl-5 space-y-2 text-gray-700">
                    <li>Menyajikan konten berkualitas tentang supercar dan hypercar terbaru</li>
                    <li>Memberikan analisis teknis yang mendalam untuk para enthusiast</li>
                    <li>Menjadi platform komunitas bagi para pecinta kendaraan berperforma tinggi</li>
                    <li>Meliput event-event otomotif eksklusif di Indonesia dan dunia</li>
                </ul>
            </div>

            <div class="grid md:grid-cols-2 gap-8 mb-8">
                <div>
                    <h2 class="text-2xl font-semibold mb-4">Tim Kami</h2>
                    <div class="space-y-4">
                        <div class="bg-white p-4 rounded-lg shadow">
                            <h3 class="font-bold text-lg">Rama - Founder</h3>
                            <p class="text-gray-600">Mantan mekanik F1 dengan passion di dunia supercar selama 15 tahun</p>
                        </div>
                        <div class="bg-white p-4 rounded-lg shadow">
                            <h3 class="font-bold text-lg">Didan - Editor</h3>
                            <p class="text-gray-600">Jurnalis otomotif dengan spesialisasi di kendaraan high-performance</p>
                        </div>
                        <div class="bg-white p-4 rounded-lg shadow">
                            <h3 class="font-bold text-lg">Alisa - Fotografer</h3>
                            <p class="text-gray-600">Spesialis fotografi otomotif dengan gaya khas yang dinamis</p>
                        </div>
                    </div>
                </div>

                <div>
                    <h2 class="text-2xl font-semibold mb-4">Kontak Kami</h2>
                    <div class="bg-white p-6 rounded-lg shadow">
                        <p class="mb-4"><i class="fas fa-map-marker-alt mr-2 text-red-600"></i> Jl. Boulevard Raya No. 88, Batam Center</p>
                        <p class="mb-4"><i class="fas fa-phone mr-2 text-red-600"></i> +62 812-3456-7890</p>
                        <p class="mb-4"><i class="fas fa-envelope mr-2 text-red-600"></i> info@supercarnews.co.id</p>
                        <p><i class="fas fa-clock mr-2 text-red-600"></i> Senin-Jumat: 09:00 - 17:00 WIB</p>
                    </div>
                </div>
            </div>

            <div class="bg-black text-white p-6 rounded-lg">
                <h2 class="text-2xl font-bold mb-4 text-yellow-400">Bergabung Dengan Komunitas Kami</h2>
                <p class="mb-4">Ikuti perkembangan terbaru dunia supercar melalui media sosial kami:</p>
                <div class="flex space-x-4">
                    <a href="#" class="text-blue-400 hover:text-blue-300"><i class="fab fa-facebook fa-2x"></i></a>
                    <a href="#" class="text-pink-600 hover:text-pink-400"><i class="fab fa-instagram fa-2x"></i></a>
                    <a href="#" class="text-blue-300 hover:text-blue-200"><i class="fab fa-twitter fa-2x"></i></a>
                    <a href="#" class="text-red-500 hover:text-red-400"><i class="fab fa-youtube fa-2x"></i></a>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('styles')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        .hero-about {
            background-image: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)), url('/images/supercar-garage.jpg');
            background-size: cover;
            background-position: center;
        }
    </style>
@endpush
