@extends('layout.Main')
@section('title', 'Teacher Update Page')

@section('tch_update')

<div class="container mx-auto mt-10 px-4">
    <h1 class="text-5xl font-bold text-center mb-10 animate__animated animate__fadeIn animate__delay-1s">Update Teacher Form</h1>

    <!-- Form Container with Green Background Color -->
    <form action="/update/{{$t_data->id}}" method="POST" class="form-container">
        @csrf

        <!-- Grid for input fields -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
            <!-- Teacher ID -->
            <div>
                <label for="id"
                    class="block text-gray-800 font-bold text-base mb-2 transition-colors duration-300 ease-in-out hover:text-green-600">ID</label>
                <input type="text"
                    class="w-full p-3 border border-gray-300 rounded-lg bg-gray-100 focus:outline-none focus:ring-2 focus:ring-green-500 placeholder-gray-400 text-sm"
                    id="id" value="{{$t_data->id}}" readonly>
                <small class="text-gray-600">This field is read-only</small>
            </div>

            <!-- Teacher Name -->
            <div>
                <label for="name"
                    class="block text-gray-800 font-bold text-base mb-2 transition-colors duration-300 ease-in-out hover:text-green-600">Teacher Name</label>
                <input type="text"
                    class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500 placeholder-gray-400 text-sm transition-transform duration-300 ease-in-out transform hover:scale-105"
                    id="name" name="name" value="{{$t_data->name}}" placeholder="Enter Teacher Name">
            </div>
        </div>

        <!-- Email and Password in One Row -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
            <!-- Teacher Email -->
            <div>
                <label for="email"
                    class="block text-gray-800 font-bold text-base mb-2 transition-colors duration-300 ease-in-out hover:text-green-600">Teacher Email</label>
                <input type="email"
                    class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500 placeholder-gray-400 text-sm transition-transform duration-300 ease-in-out transform hover:scale-105"
                    id="email" name="email" value="{{$t_data->email}}" placeholder="Enter Teacher Email">
            </div>

            <!-- Teacher Password -->
            <div>
                <label for="password"
                    class="block text-gray-800 font-bold text-base mb-2 transition-colors duration-300 ease-in-out hover:text-green-600">Teacher Password</label>
                <input type="password"
                    class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500 placeholder-gray-400 text-sm transition-transform duration-300 ease-in-out transform hover:scale-105"
                    id="password" name="password" value="{{$t_data->password}}" placeholder="Enter Teacher Password">
            </div>
        </div>

        <!-- Subject and Department -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
            <!-- Teacher Subject -->
            <div>
                <label for="subject"
                    class="block text-gray-800 font-bold text-base mb-2 transition-colors duration-300 ease-in-out hover:text-green-600">Teacher Subject</label>
                <input type="text"
                    class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500 placeholder-gray-400 text-sm transition-transform duration-300 ease-in-out transform hover:scale-105"
                    id="subject" name="subject" value="{{$t_data->subject}}" placeholder="Enter Teacher Subject">
            </div>

            <!-- Teacher Department -->
            <div>
                <label for="department"
                    class="block text-gray-800 font-bold text-base mb-2 transition-colors duration-300 ease-in-out hover:text-green-600">Teacher Department</label>
                <input type="text"
                    class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500 placeholder-gray-400 text-sm transition-transform duration-300 ease-in-out transform hover:scale-105"
                    id="department" name="department" value="{{$t_data->department}}" placeholder="Enter Teacher Department">
            </div>
        </div>

        <!-- Submit Button -->
        <button type="submit"
            class="w-full py-3 bg-green-500 text-white font-semibold rounded-lg shadow-md hover:bg-green-600 transition duration-300 transform hover:scale-105">Update</button>
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
