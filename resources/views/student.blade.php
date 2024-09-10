@extends('layout.Main')
@section('title', 'Form.com')
@section('form')

<div class="container mx-auto mt-10 px-4">
    <h1 class="text-3xl font-bold text-center text-blue-600 mb-6 animate__animated animate__fadeIn animate__delay-1s">Student Form</h1>

    <form action="/xyz" method="post" class="p-6 bg-white shadow-lg rounded-lg max-w-md mx-auto border border-gray-200 hover:shadow-2xl transition-shadow duration-300 ease-in-out">
        @csrf

        <!-- Student Name -->
        <div class="mb-6">
            <label for="studentName" class="block text-gray-700 font-semibold text-sm mb-2">Student Name</label>
            <input type="text" class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 placeholder-gray-400 text-sm transition-transform duration-300 ease-in-out transform hover:scale-105" id="studentName" placeholder="Enter Student Name" name="name">
        </div>

        <!-- Student Email -->
        <div class="mb-6">
            <label for="studentEmail" class="block text-gray-700 font-semibold text-sm mb-2">Student Email</label>
            <input type="email" class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 placeholder-gray-400 text-sm transition-transform duration-300 ease-in-out transform hover:scale-105" id="studentEmail" placeholder="Enter Student Email" name="email">
        </div>

        <!-- Student Password -->
        <div class="mb-6">
            <label for="studentPassword" class="block text-gray-700 font-semibold text-sm mb-2">Student Password</label>
            <input type="password" class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 placeholder-gray-400 text-sm transition-transform duration-300 ease-in-out transform hover:scale-105" id="studentPassword" placeholder="Enter Student Password" name="password">
        </div>

        <!-- Student Number -->
        <div class="mb-6">
            <label for="studentNumber" class="block text-gray-700 font-semibold text-sm mb-2">Student Number</label>
            <input type="number" class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 placeholder-gray-400 text-sm transition-transform duration-300 ease-in-out transform hover:scale-105" id="studentNumber" placeholder="Enter Student Number" name="contact">
        </div>

        <!-- Student Address -->
        <div class="mb-6">
            <label for="studentAddress" class="block text-gray-700 font-semibold text-sm mb-2">Student Address</label>
            <textarea class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 placeholder-gray-400 text-sm transition-transform duration-300 ease-in-out transform hover:scale-105" id="studentAddress" rows="4" placeholder="Enter Student Address" name="address"></textarea>
        </div>

        <!-- Submit Button -->
        <button type="submit" class="w-full py-3 bg-blue-500 text-white font-semibold rounded-lg shadow-md hover:bg-blue-600 transition duration-300 transform hover:scale-105">Submit</button>
    </form>
</div>

@endsection
