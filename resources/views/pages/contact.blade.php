@extends('template.base')

@section('content')
    <div class="bg-white shadow-md rounded-lg p-8 max-w-2xl mx-auto">
        <h1 class="text-4xl font-bold text-center mb-6">Contact Me</h1>
        <p class="text-lg text-gray-700 mb-6">
            If you have any questions, opportunities, or just want to say hello, feel free to reach out to me via email:
        </p>
        <div class="flex items-center justify-center mb-6">
            <svg class="w-8 h-8 mr-2 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M22 12h-6l-4 4m0 0l-4-4m4 4V4"></path>
            </svg>
            <a href="mailto:kentcarloestillore@gmail.com" class="text-blue-500 hover:underline">kentcarloestillore@gmail.com</a>
        </div>
        <p class="text-lg text-gray-700 mb-6">
            I look forward to hearing from you and will respond as soon as possible. Thank you for your interest!
        </p>
        <div class="text-center">
            <a href="http://127.0.0.1:7000/" class="bg-blue-500 text-white px-6 py-2 rounded-lg shadow hover:bg-blue-700 transition">Back to Home</a>
        </div>
    </div>
@endsection