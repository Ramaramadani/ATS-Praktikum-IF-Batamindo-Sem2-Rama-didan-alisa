@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-8">
    <h1 class="text-4xl font-bold text-center mb-6">Contact Supercar HQ</h1>
    <p class="text-center text-gray-600 mb-8">We'd love to hear from you! Reach out for collaboration, sponsorship, or questions.</p>
    
    <form class="max-w-xl mx-auto bg-white p-6 rounded-lg shadow-md space-y-4">
        <div>
            <label for="name" class="block text-gray-700 font-semibold">Name</label>
            <input type="text" id="name" class="w-full p-2 border rounded-lg">
        </div>
        <div>
            <label for="email" class="block text-gray-700 font-semibold">Email</label>
            <input type="email" id="email" class="w-full p-2 border rounded-lg">
        </div>
        <div>
            <label for="message" class="block text-gray-700 font-semibold">Message</label>
            <textarea id="message" rows="5" class="w-full p-2 border rounded-lg"></textarea>
        </div>
        <button class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Send Message</button>
    </form>
</div>
@endsection
