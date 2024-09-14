@extends('layout.Main')
@section('title', 'Teacher View Page')
@section('tch_form')

<div class="container mx-auto mt-10 px-4">
    <h1 class="text-5xl font-bold text-center mb-10 animate__animated animate__fadeIn animate__delay-1s"
        >Teacher Form</h1>

    <!-- Form Container with Green Background Color -->
    <form action="/abc" method="post" class="form-container">
        @csrf

        <!-- Grid for input fields -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
            <!-- Teacher Name -->
            <div>
                <label for="teacherName"
                    class="block text-gray-800 font-bold text-base mb-2 transition-colors duration-300 ease-in-out hover:text-green-600">Teacher
                    Name</label>
                <input type="text"
                    class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500 placeholder-gray-400 text-sm transition-transform duration-300 ease-in-out transform hover:scale-105"
                    id="teacherName" placeholder="Enter Teacher Name" name="name">
            </div>

            <!-- Teacher Email -->
            <div>
                <label for="teacherEmail"
                    class="block text-gray-800 font-bold text-base mb-2 transition-colors duration-300 ease-in-out hover:text-green-600">Teacher
                    Email</label>
                <input type="email"
                    class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500 placeholder-gray-400 text-sm transition-transform duration-300 ease-in-out transform hover:scale-105"
                    id="teacherEmail" placeholder="Enter Teacher Email" name="email">
            </div>
        </div>

        <!-- Password and Subject in One Row -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
            <!-- Teacher Password -->
            <div>
                <label for="teacherPassword"
                    class="block text-gray-800 font-bold text-base mb-2 transition-colors duration-300 ease-in-out hover:text-green-600">Teacher
                    Password</label>
                <input type="password"
                    class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500 placeholder-gray-400 text-sm transition-transform duration-300 ease-in-out transform hover:scale-105"
                    id="teacherPassword" placeholder="Enter Teacher Password" name="password">
            </div>

            <!-- Teacher Subject -->
            <div>
                <label for="teacherSubject"
                    class="block text-gray-800 font-bold text-base mb-2 transition-colors duration-300 ease-in-out hover:text-green-600">Teacher
                    Subject</label>
                <input type="text"
                    class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500 placeholder-gray-400 text-sm transition-transform duration-300 ease-in-out transform hover:scale-105"
                    id="teacherSubject" placeholder="Enter Teacher Subject" name="subject">
            </div>
        </div>

        <!-- Teacher Department -->
        <div class="mb-6">
            <label for="teacherDepartment"
                class="block text-gray-800 font-bold text-base mb-2 transition-colors duration-300 ease-in-out hover:text-green-600">Teacher
                Department</label>
            <input type="text"
                class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500 placeholder-gray-400 text-sm transition-transform duration-300 ease-in-out transform hover:scale-105"
                id="teacherDepartment" placeholder="Enter Teacher Department" name="department">
        </div>

        <!-- Submit Button -->
        <button type="submit"
            class="w-full py-3 bg-green-500 text-white font-semibold rounded-lg shadow-md hover:bg-green-600 transition duration-300 transform hover:scale-105">Submit</button>
    </form>
</div>

<style>
    /* Form Styling */
    .form-container {
        background: #e0f5e5; /* Light green background for the form */
        border-radius: 20px;
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
        padding: 40px;
        max-width: 800px;
        margin: 20px auto;
        border: 1px solid #c2e5c0;
        transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
    }

    /* Hover Effects for Form Container */
    .form-container:hover {
        transform: scale(1.05);
        box-shadow: 0 15px 30px rgba(0, 0, 0, 0.15);
        border-color: #a4d1a1;
    }

    /* Header Styling */
    h1 {
        font-size: 2.2rem;
        text-align: center;
        color: #004d00;
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
