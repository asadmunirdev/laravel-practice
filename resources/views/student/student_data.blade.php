@extends('layout.Main')
@section('title', 'Student View Page')

@section('std_view')
<div class="overflow-x-auto">
    <h1 class="text-5xl font-bold text-center mb-10 animate__animated animate__fadeIn animate__delay-1s">Student Data</h1>

    <table class="min-w-full table-auto border-collapse border border-gray-300 rounded-lg shadow-lg">
        <thead class="bg-purple-600 text-white rounded-t-lg">
            <tr>
                <th scope="col" class="px-4 py-2 border border-gray-200">IMAGE</th>
                <th scope="col" class="px-4 py-2 border border-gray-200">ID</th>
                <th scope="col" class="px-4 py-2 border border-gray-200">NAME</th>
                <th scope="col" class="px-4 py-2 border border-gray-200">EMAIL</th>
                <th scope="col" class="px-4 py-2 border border-gray-200">PHONE</th>
                <th scope="col" class="px-4 py-2 border border-gray-200">ADDRESS</th>
                <th scope="col" class="px-4 py-2 border border-gray-200">ACTION</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $d)
            <tr class="bg-gradient-to-r from-orange-100 to-yellow-100 hover:bg-gradient-to-r hover:from-orange-200 hover:to-yellow-200">
                <td scope="row" class="px-4 py-2 border border-gray-300 text-center">
                    <img src="{{ asset('storage/'.$d->image) }}" alt="Student Image" class="w-16 h-16 object-cover rounded-full mx-auto">
                    
                </td>
                <td class="px-4 py-2 border border-gray-300">{{$d->id}}</td>
                <td class="px-4 py-2 border border-gray-300">{{$d->name}}</td>
                <td class="px-4 py-2 border border-gray-300">{{$d->email}}</td>
                <td class="px-4 py-2 border border-gray-300">{{$d->contact}}</td>
                <td class="px-4 py-2 border border-gray-300">{{$d->address}}</td>
                <td class="px-4 py-2 border border-gray-300">
                    <!-- Edit Button -->
                    <button class="px-3 py-1 bg-purple-500 text-white rounded-lg hover:bg-purple-700 transition">
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
    /* Ensure uniform height and width for images */
    img {
        height: 64px;
        width: 64px;
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
