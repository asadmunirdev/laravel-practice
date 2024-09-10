@extends('layout.Main')
@section('title', 'Home.com')
@section('welcome')

<!-- Hero Section -->
<div class="bg-gray-100 min-h-screen flex items-center justify-center p-4">
    <div class="container mx-auto flex flex-col md:flex-row items-center justify-between">
        <!-- Text Section -->
        <div class="md:w-1/2 text-center md:text-left md:pr-8">
            <h1 class="text-5xl font-extrabold text-blue-600 mb-6 animate__animated animate__fadeIn animate__delay-1s">Welcome to Our Landing Page</h1>
            <p class="text-lg text-gray-700 mb-8 animate__animated animate__fadeIn animate__delay-2s">We are excited to have you here. Explore our website to learn more about what we offer and how we can help you achieve your goals.</p>
            <a href="#faq" class="bg-blue-500 text-white py-3 px-6 rounded-lg shadow-lg hover:bg-blue-600 transition duration-300 transform hover:scale-105 animate__animated animate__fadeIn animate__delay-3s">Get Started</a>
        </div>
        <!-- Image Section -->
        <div class="md:w-1/2 mt-6 md:mt-0 animate__animated animate__fadeIn animate__delay-4s">
            <div class="relative overflow-hidden">
                <img src="{{ asset('assets/images/public.avif') }}" alt="Home Image" class="w-full max-w-xl rounded-lg shadow-xl mx-auto animate-zoom-in-out">
            </div>
        </div>
    </div>
</div>

<!-- Explore-more -->
<div class="bg-gray-100 py-16">
    <div class="container mx-auto px-4 flex justify-center">
        <div class="bg-white rounded-lg shadow-xl p-8 max-w-4xl mx-4 text-center transform transition-transform duration-300 ease-in-out hover:scale-105 animate__animated animate__fadeIn animate__delay-1s">
            <!-- Header with SVG Icon -->
            <div class="flex items-center justify-center mb-6">
                <svg class="w-12 h-12 text-blue-500 mr-3" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2 4 4 6-6 6 6v6H3v-6z" />
                </svg>
                <h1 class="text-4xl font-extrabold text-gray-800">Welcome to Asad-Shop</h1>
            </div>
            <!-- Description with Icon -->
            <div class="flex flex-col items-center mb-8">
                <svg class="w-8 h-8 text-gray-500 mb-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 7h16M4 12h16M4 17h16" />
                </svg>
                <p class="text-lg text-gray-600">Your one-stop shop for amazing products! Explore our top selections and exclusive offers to find exactly what you're looking for.</p>
            </div>
            <!-- Buttons with Icons -->
            <div class="flex justify-center gap-6">
                <a href="{{'/index'}}" class="bg-blue-500 text-white py-3 px-6 rounded-lg shadow-lg hover:bg-blue-600 transition duration-300 transform hover:scale-105 flex items-center gap-2">
                    <svg class="w-5 h-5 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7l10 10m0-10L7 17" />
                    </svg>
                    Explore Now
                </a>
                <a href="{{'/std'}}" class="bg-gray-500 text-white py-3 px-6 rounded-lg shadow-lg hover:bg-gray-600 transition duration-300 transform hover:scale-105 flex items-center gap-2">
                    <svg class="w-5 h-5 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12l7-7 7 7" />
                    </svg>
                    Contact Us
                </a>
            </div>
        </div>
    </div>
</div>

<!-- FAQ Section -->
<div id="faq" class="bg-white py-12">
    <div class="container mx-auto px-4">
        <h2 class="text-3xl font-bold text-center text-blue-600 mb-8 animate__animated animate__fadeIn animate__delay-1s">Frequently Asked Questions</h2>
        <div x-data="{ open: null }" class="space-y-6">
            <!-- FAQ 1 -->
            <div class="border-b border-gray-300 transition-transform duration-300 ease-in-out transform hover:scale-105">
                <button @click="open = open === 1 ? null : 1" class="w-full text-left py-4 px-2 text-xl font-semibold text-gray-800 focus:outline-none">
                    What is your main product?
                </button>
                <p x-show="open === 1" class="text-gray-600 px-2 pb-4">Our main product is a comprehensive software solution designed to help businesses streamline their operations and improve productivity.</p>
            </div>
            <!-- FAQ 2 -->
            <div class="border-b border-gray-300 transition-transform duration-300 ease-in-out transform hover:scale-105">
                <button @click="open = open === 2 ? null : 2" class="w-full text-left py-4 px-2 text-xl font-semibold text-gray-800 focus:outline-none">
                    How can I contact support?
                </button>
                <p x-show="open === 2" class="text-gray-600 px-2 pb-4">You can contact our support team via email at support@example.com or by filling out the contact form on our website.</p>
            </div>
            <!-- FAQ 3 -->
            <div class="border-b border-gray-300 transition-transform duration-300 ease-in-out transform hover:scale-105">
                <button @click="open = open === 3 ? null : 3" class="w-full text-left py-4 px-2 text-xl font-semibold text-gray-800 focus:outline-none">
                    What are your business hours?
                </button>
                <p x-show="open === 3" class="text-gray-600 px-2 pb-4">Our business hours are Monday through Friday, 9 AM to 6 PM. We are closed on weekends and public holidays.</p>
            </div>
            <!-- FAQ 4 -->
            <div class="transition-transform duration-300 ease-in-out transform hover:scale-105">
                <button @click="open = open === 4 ? null : 4" class="w-full text-left py-4 px-2 text-xl font-semibold text-gray-800 focus:outline-none">
                    Do you offer a free trial?
                </button>
                <p x-show="open === 4" class="text-gray-600 px-2 pb-4">Yes, we offer a 14-day free trial for all new users. You can sign up for the trial on our website to explore our features.</p>
            </div>
        </div>
    </div>
</div>

@endsection
