@extends('layout.Main')
@section('title', 'Student Update Page')

@section('update')

<div class="container mx-auto mt-10 px-4">
<h1 class="text-5xl font-bold text-center mb-10 animate__animated animate__fadeIn animate__delay-1s"
        >Update Student Form</h1>

    <!-- Form Container with Darker Background Color -->
    <form action="/update/{{$data->id}}" method="POST" class="form-container">
        @csrf

        <!-- Grid for input fields -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
            <!-- Student ID -->
            <div>
                <label for="id"
                    class="block text-gray-800 font-bold text-base mb-2 transition-colors duration-300 ease-in-out hover:text-blue-600">ID</label>
                <input type="text"
                    class="w-full p-3 border border-gray-300 rounded-lg bg-gray-100 focus:outline-none focus:ring-2 focus:ring-blue-500 placeholder-gray-400 text-sm"
                    id="id" value="{{$data->id}}" readonly>
                <small class="text-gray-600">This field is read-only</small>
            </div>

            <!-- Student Name -->
            <div>
                <label for="name"
                    class="block text-gray-800 font-bold text-base mb-2 transition-colors duration-300 ease-in-out hover:text-blue-600">Student Name</label>
                <input type="text"
                    class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 placeholder-gray-400 text-sm transition-transform duration-300 ease-in-out transform hover:scale-105"
                    id="name" name="name" value="{{$data->name}}" placeholder="Enter Student Name">
            </div>
        </div>

        <!-- Email and Password in One Row -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
            <!-- Student Email -->
            <div>
                <label for="email"
                    class="block text-gray-800 font-bold text-base mb-2 transition-colors duration-300 ease-in-out hover:text-blue-600">Student Email</label>
                <input type="email"
                    class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 placeholder-gray-400 text-sm transition-transform duration-300 ease-in-out transform hover:scale-105"
                    id="email" name="email" value="{{$data->email}}" placeholder="Enter Student Email">
            </div>

            <!-- Student Password -->
            <div>
                <label for="password"
                    class="block text-gray-800 font-bold text-base mb-2 transition-colors duration-300 ease-in-out hover:text-blue-600">Student Password</label>
                <input type="password"
                    class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 placeholder-gray-400 text-sm transition-transform duration-300 ease-in-out transform hover:scale-105"
                    id="password" name="password" value="{{$data->password}}" placeholder="Enter Student Password">
            </div>
        </div>

        <!-- Address and Contact Number -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
            <!-- Student Address -->
            <div>
                <label for="address"
                    class="block text-gray-800 font-bold text-base mb-2 transition-colors duration-300 ease-in-out hover:text-blue-600">Student Address</label>
                <input type="text"
                    class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 placeholder-gray-400 text-sm transition-transform duration-300 ease-in-out transform hover:scale-105"
                    id="address" name="address" value="{{$data->address}}" placeholder="Enter Student Address">
            </div>

            <!-- Student Number -->
            <div>
                <label for="contact"
                    class="block text-gray-800 font-bold text-base mb-2 transition-colors duration-300 ease-in-out hover:text-blue-600">Student Number</label>
                <input type="text"
                    class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 placeholder-gray-400 text-sm transition-transform duration-300 ease-in-out transform hover:scale-105"
                    id="contact" name="contact" value="{{$data->contact}}" placeholder="Enter Student Number">
            </div>
        </div>

        <!-- Submit Button -->
        <button type="submit"
            class="w-full py-3 bg-blue-500 text-white font-semibold rounded-lg shadow-md hover:bg-blue-600 transition duration-300 transform hover:scale-105">Update</button>
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
