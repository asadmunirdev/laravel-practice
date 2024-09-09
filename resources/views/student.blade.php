@extends('layout.Main')
@section('title', 'Form.com')
@section('form')

<div class="container mx-auto mt-10 px-4">
    <h1 class="text-2xl font-bold text-center text-blue-600 mb-4">Student Form</h1>

    <form action="/xyz" method="post" class="p-4 bg-white shadow-lg rounded-lg max-w-md mx-auto">
        @csrf
        <!-- Student Name -->
        <div class="mb-4">
            <label for="studentName" class="block text-gray-700 font-semibold text-sm mb-1">Student Name</label>
            <input type="text" class="w-full p-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-400 text-sm" id="studentName" placeholder="Enter Student Name" name="name">
        </div>
        
        <!-- Student Email -->
        <div class="mb-4">
            <label for="studentEmail" class="block text-gray-700 font-semibold text-sm mb-1">Student Email</label>
            <input type="email" class="w-full p-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-400 text-sm" id="studentEmail" placeholder="Enter Student Email" name="email">
        </div>
        
        <!-- Student Password -->
        <div class="mb-4">
            <label for="studentPassword" class="block text-gray-700 font-semibold text-sm mb-1">Student Password</label>
            <input type="password" class="w-full p-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-400 text-sm" id="studentPassword" placeholder="Enter Student Password" name="password">
        </div>
        
        <!-- Student Number -->
        <div class="mb-4">
            <label for="studentNumber" class="block text-gray-700 font-semibold text-sm mb-1">Student Number</label>
            <input type="number" class="w-full p-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-400 text-sm" id="studentNumber" placeholder="Enter Student Number" name="contact">
        </div>
        
        <!-- Student Address -->
        <div class="mb-4">
            <label for="studentAddress" class="block text-gray-700 font-semibold text-sm mb-1">Student Address</label>
            <textarea class="w-full p-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-400 text-sm" id="studentAddress" rows="3" placeholder="Enter Student Address" name="address"></textarea>
        </div>

        <!-- Submit Button -->
        <button type="submit" class="w-full py-2 bg-blue-500 text-white font-semibold rounded-lg shadow-md hover:bg-blue-600 transition duration-300">Submit</button>
    </form>
</div>

@endsection
