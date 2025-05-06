@extends('layouts.app')

@section('content')
    <div class="container mx-auto">
        <h1 class="text-4xl font-bold text-center my-8">Our Blog</h1>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="card">
                <img src="{{ asset('image/blog1.jpg') }}" alt="Blog Image" class="w-full h-auto">
                <div class="p-4">
                    <h3 class="font-semibold text-xl">Blog Post Title 1</h3>
                    <p class="text-gray-600">This is a brief description of the blog post.</p>
                </div>
            </div>
            <div class="card">
                <img src="{{ asset('image/blog2.jpg') }}" alt="Blog Image" class="w-full h-auto">
                <div class="p-4">
                    <h3 class="font-semibold text-xl">Blog Post Title 2</h3>
                    <p class="text-gray-600">This is a brief description of the blog post.</p>
                </div>
            </div>
            <div class="card">
                <img src="{{ asset('image/blog3.jpg') }}" alt="Blog Image" class="w-full h-auto">
                <div class="p-4">
                    <h3 class="font-semibold text-xl">Blog Post Title 3</h3>
                    <p class="text-gray-600">This is a brief description of the blog post.</p>
                </div>
            </div>
        </div>
    </div>
@endsection
