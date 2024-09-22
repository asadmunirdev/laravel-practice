@extends('layout.Main')
@section('title', 'Student Update Page')

@section('update')

<div class="container mx-auto mt-10 px-4">
    <h1 class="text-5xl font-bold text-center mb-10 animate__animated animate__fadeIn animate__delay-1s">Update Student Form</h1>

    <!-- Form Container with Darker Background Color -->
    <form action="/update/{{$data->id}}" method="POST" class="form-container" enctype="multipart/form-data">
        @csrf

        <!-- Grid for input fields -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
            <!-- Student ID (Read-only) -->
            <div>
                <label for="id" class="label-styling">ID</label>
                <input type="text" class="input-styling" id="id" value="{{$data->id}}" readonly>
                <small class="text-gray-600">This field is read-only</small>
            </div>

            <!-- Student Name -->
            <div>
                <label for="name" class="label-styling">Student Name</label>
                <input type="text" class="input-styling" id="name" name="name" value="{{$data->name}}" placeholder="Enter Student Name">
            </div>
        </div>

        <!-- Email and Password in One Row -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
            <!-- Student Email -->
            <div>
                <label for="email" class="label-styling">Student Email</label>
                <input type="email" class="input-styling" id="email" name="email" value="{{$data->email}}" placeholder="Enter Student Email">
            </div>

            <!-- Student Password -->
            <div>
                <label for="password" class="label-styling">Student Password</label>
                <input type="password" class="input-styling" id="password" name="password" value="{{$data->password}}" placeholder="Enter Student Password">
            </div>
        </div>

        <!-- Address and Contact Number -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
            <!-- Student Address -->
            <div>
                <label for="address" class="label-styling">Student Address</label>
                <input type="text" class="input-styling" id="address" name="address" value="{{$data->address}}" placeholder="Enter Student Address">
            </div>

            <!-- Student Number -->
            <div>
                <label for="contact" class="label-styling">Student Number</label>
                <input type="text" class="input-styling" id="contact" name="contact" value="{{$data->contact}}" placeholder="Enter Student Number">
            </div>
        </div>

        <!-- Image Upload Section -->
        <div class="mb-6">
            <label for="studentImage" class="label-styling">Student Image</label>
            <input type="file" class="input-styling-file" id="studentImage" name="image" accept="image/*">
        </div>

        <!-- Submit Button -->
        <button type="submit" class="submit-button">Update</button>
    </form>
</div>

<style>
    /* Form Styling */
    .form-container {
        background: #d0e7f5;
        border-radius: 20px;
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
        padding: 40px;
        max-width: 800px;
        margin: 20px auto;
        border: 1px solid #b0d4ee;
        transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
    }

    /* Input Field Styling */
    .input-styling, .input-styling-file {
        width: 100%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
        transition: border-color 0.3s ease, transform 0.3s ease;
        background-color: #fff;
        outline: none;
    }
    
    .input-styling-file {
        padding: 8px;
    }

    .input-styling:focus, .input-styling-file:focus {
        border-color: #1d4ed8;
        transform: scale(1.02);
    }

    /* Label Styling */
    .label-styling {
        display: block;
        font-weight: bold;
        margin-bottom: 5px;
        color: #333;
        transition: color 0.3s ease;
    }

    .label-styling:hover {
        color: #1d4ed8;
    }

    /* Submit Button Styling */
    .submit-button {
        width: 100%;
        padding: 12px;
        background-color: #1d4ed8;
        color: #fff;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        font-weight: bold;
        transition: background-color 0.3s ease, transform 0.3s ease;
    }

    .submit-button:hover {
        background-color: #2563eb;
        transform: scale(1.05);
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
