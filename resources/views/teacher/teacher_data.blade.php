@extends('layout.Main')
@section('title', 'Teacher Data')
@section('tch_view')

<div class="overflow-x-auto">
<h1 class="text-5xl font-bold text-center mb-10 animate__animated animate__fadeIn animate__delay-1s"
        >Teacher Data</h1>

    <table class="min-w-full table-auto border-collapse border border-gray-300 rounded-lg shadow-lg">
        <thead class="bg-blue-600 text-white rounded-t-lg">
            <tr>
                <th scope="col" class="px-4 py-2 border border-gray-200">ID</th>
                <th scope="col" class="px-4 py-2 border border-gray-200">NAME</th>
                <th scope="col" class="px-4 py-2 border border-gray-200">EMAIL</th>
                <th scope="col" class="px-4 py-2 border border-gray-200">SUBJECT</th>
                <th scope="col" class="px-4 py-2 border border-gray-200">DEPARTMENT</th>
                <th scope="col" class="px-4 py-2 border border-gray-200">ACTION</th>
            </tr>
        </thead>
        <tbody>
            @foreach($t_data as $d)
            <tr class="bg-gradient-to-r from-blue-100 to-blue-200 hover:bg-gradient-to-r hover:from-blue-200 hover:to-blue-300">
                <td scope="row" class="px-4 py-2 border border-gray-300">{{$d->id}}</td>
                <td class="px-4 py-2 border border-gray-300">{{$d->name}}</td>
                <td class="px-4 py-2 border border-gray-300">{{$d->email}}</td>
                <td class="px-4 py-2 border border-gray-300">{{$d->subject}}</td>
                <td class="px-4 py-2 border border-gray-300">{{$d->department}}</td>
                <td class="px-4 py-2 border border-gray-300">
                    <!-- Edit Button -->
                    <button class="px-3 py-1 bg-blue-500 text-white rounded-lg hover:bg-blue-700 transition">
                        <a href="/edit/{{$d->id}}">Edit</a>
                    </button>
                    <!-- Delete Button -->
                    <button class="px-3 py-1 bg-red-500 text-white rounded-lg hover:bg-red-700 transition ml-2">
                        <a href="/delete/{{$d->id}}">Delete</a>
                    </button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
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
