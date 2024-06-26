@extends('template.base')

@section('content')
    <div class="bg-white shadow-md rounded-lg p-8 max-w-2xl mx-auto">
        <h1 class="text-4xl font-bold text-center mb-4">Welcome to Our Website</h1>
        <p class="text-lg text-gray-700 text-center mb-6">
            We are delighted to have you here. Explore our wide range of products and learn more about what we have to offer. Our commitment is to provide you with the best experience possible.
        </p>
        <p class="text-lg text-gray-700 text-center mb-6">
            Our team is dedicated to ensuring you find exactly what you need. If you have any questions or need further assistance, please don't hesitate to reach out.
        </p>
        <div class="text-center">
            <a href="/products" class="bg-blue-500 text-white px-6 py-2 rounded-lg shadow hover:bg-blue-700 transition">Explore Products</a>
        </div>
    </div>
@endsection