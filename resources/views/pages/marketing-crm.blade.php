@extends('layouts.app')

@section('title', 'Marketing CRM')
@section('page_title', 'Super Car Marketing & CRM')

@section('content')
<div class="grid gap-6 mb-6 md:grid-cols-2">
    @foreach ([
        ['title' => 'Targeted Campaigns', 'img' => 'targeted-campaign.jpg', 'desc' => 'Send luxury offers directly to interested buyers.'],
        ['title' => 'Customer Insights', 'img' => 'customer-insights.jpg', 'desc' => 'Analyze buying behavior of super car enthusiasts.'],
        ['title' => 'Lead Management', 'img' => 'lead-management.jpg', 'desc' => 'Track and convert leads into loyal customers.']
    ] as $crm)
        <div class="max-w-full bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
            <div class="flex flex-col md:flex-row">
                <!-- Gambar dipanggil dari public/image -->
                <img class="w-full md:w-1/2 h-48 object-cover rounded-t-lg md:rounded-l-lg md:rounded-tr-none" 
                     src="{{ asset('image/'.$crm['img']) }}" 
                     alt="{{ $crm['title'] }}">
                <div class="p-5">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $crm['title'] }}</h5>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                        {{ $crm['desc'] }}
                    </p>
                    <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-white bg-blue-600 rounded-lg hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-500 dark:hover:bg-blue-600 dark:focus:ring-blue-800">
                        See Details
                        <svg class="w-4 h-4 ms-2 rtl:rotate-180" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    @endforeach
</div>
@endsection
