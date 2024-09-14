@extends('layout.Main')
@section('title', 'Student Form')
@section('std_form')


<div class="container mx-auto mt-10 px-4">
    <h1 class="text-5xl font-bold text-center mb-10 animate__animated animate__fadeIn animate__delay-1s"
        >Student Form</h1>

    <!-- Form Container with Darker Background Color -->
    <form action="/xyz" method="post" class="form-container">
        @csrf

        <!-- Grid for input fields -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
            <!-- Student Name -->
            <div>
                <label for="studentName"
                    class="block text-gray-800 font-bold text-base mb-2 transition-colors duration-300 ease-in-out hover:text-blue-600">Student
                    Name</label>
                <input type="text"
                    class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 placeholder-gray-400 text-sm transition-transform duration-300 ease-in-out transform hover:scale-105"
                    id="studentName" placeholder="Enter Student Name" name="name">
            </div>

            <!-- Student Email -->
            <div>
                <label for="studentEmail"
                    class="block text-gray-800 font-bold text-base mb-2 transition-colors duration-300 ease-in-out hover:text-blue-600">Student
                    Email</label>
                <input type="email"
                    class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 placeholder-gray-400 text-sm transition-transform duration-300 ease-in-out transform hover:scale-105"
                    id="studentEmail" placeholder="Enter Student Email" name="email">
            </div>
        </div>

        <!-- Password and Number in One Row -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
            <!-- Student Password -->
            <div>
                <label for="studentPassword"
                    class="block text-gray-800 font-bold text-base mb-2 transition-colors duration-300 ease-in-out hover:text-blue-600">Student
                    Password</label>
                <input type="password"
                    class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 placeholder-gray-400 text-sm transition-transform duration-300 ease-in-out transform hover:scale-105"
                    id="studentPassword" placeholder="Enter Student Password" name="password">
            </div>

            <!-- Student Number -->
            <div>
                <label for="studentNumber"
                    class="block text-gray-800 font-bold text-base mb-2 transition-colors duration-300 ease-in-out hover:text-blue-600">Student
                    Number</label>
                <input type="number"
                    class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 placeholder-gray-400 text-sm transition-transform duration-300 ease-in-out transform hover:scale-105"
                    id="studentNumber" placeholder="Enter Student Number" name="contact">
            </div>
        </div>

        <!-- Student Address -->
        <div class="mb-6">
            <label for="studentAddress"
                class="block text-gray-800 font-bold text-base mb-2 transition-colors duration-300 ease-in-out hover:text-blue-600">Student
                Address</label>
            <textarea
                class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 placeholder-gray-400 text-sm transition-transform duration-300 ease-in-out transform hover:scale-105"
                id="studentAddress" rows="2" placeholder="Enter Student Address" name="address"></textarea>
        </div>

        <!-- Submit Button -->
        <button type="submit"
            class="w-full py-3 bg-blue-500 text-white font-semibold rounded-lg shadow-md hover:bg-blue-600 transition duration-300 transform hover:scale-105">Submit</button>
    </form>
</div>

<style>
    /* Form Styling */
    .form-container {
        background: #d0e7f5; /* Darker blue-gray background for the form */
        border-radius: 20px;
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
        padding: 40px;
        max-width: 800px;
        margin: 20px auto;
        border: 1px solid #b0d4ee;
        transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
    }

    /* Hover Effects for Form Container */
    .form-container:hover {
        transform: scale(1.05);
        box-shadow: 0 15px 30px rgba(0, 0, 0, 0.15);
        border-color: #99c5e8;
    }

    /* Header Styling */
    h1 {
        font-size: 2.2rem;
        text-align: center;
        color: #990011;
        margin-bottom: 20px;
        animation: slideIn 1s;
        text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.1);
        font-weight: bold;
    }

    /* Animations */
    @keyframes fadeIn {
        from {
            opacity: 0;
            transform: translateY(-20px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    @keyframes slideIn {
        from {
            opacity: 0;
            transform: translateX(-30px);
        }
        to {
            opacity: 1;
            transform: translateX(0);
        }
    }
</style>


@endsection
