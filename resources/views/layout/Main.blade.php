<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <!-- Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="icon" href="{{ asset('asad.ico') }}" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <style>
        /* Custom Navbar Styles */
        .custom-navbar {
            background: linear-gradient(135deg, #007bff, #0056b3);
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.2);
            border-bottom: 2px solid #0056b3;
            transition: background 0.3s ease, box-shadow 0.3s ease;
        }

        .custom-navbar:hover {
            background: linear-gradient(135deg, #0056b3, #003d80);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.3);
        }

        /* Custom Navigation Links */
        .custom-nav-link {
            position: relative;
            color: white;
            font-size: 18px;
            font-weight: 500;
            transition: color 0.3s ease, transform 0.3s ease;
        }

        .custom-nav-link::after {
            content: '';
            display: block;
            width: 0;
            height: 3px;
            background: #ffcc00;
            transition: width 0.3s ease;
            position: absolute;
            bottom: -5px;
            left: 0;
        }

        .custom-nav-link:hover {
            color: #ffcc00;
            transform: translateY(-2px);
        }

        .custom-nav-link:hover::after {
            width: 100%;
        }

        /* Search Form Styles */
        .search-form {
            width: 60%;
            max-width: 700px;
            margin: 0 auto;
        }

        .search-form input {
            border-radius: 30px;
            border: 1px solid #0056b3;
            padding: 10px 20px;
            font-size: 16px;
            transition: all 0.3s ease;
        }

        .search-form input:focus {
            border-color: #00bfff;
            box-shadow: 0 0 12px rgba(0, 191, 255, 0.6);
            transform: scale(1.03);
        }

        .search-form button {
            border-radius: 30px;
            background-color: #00bfff;
            border: none;
            color: white;
            padding: 10px 20px;
            font-size: 16px;
            transition: background-color 0.3s ease, transform 0.2s ease;
        }

        .search-form button:hover {
            background-color: #0099cc;
            transform: scale(1.05);
        }
    </style>
</head>

<body class="bg-gray-100 text-gray-800">

    <header>
        <nav class="custom-navbar bg-white shadow-md">
            <div class="container mx-auto px-4 py-3 flex justify-between items-center">
                <a class="text-xl font-semibold text-white" href="#">MySite</a>
                <button class="block md:hidden text-white focus:outline-none">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
                    </svg>
                </button>
                <div class="hidden md:flex space-x-6">
                    <a class="custom-nav-link" href="{{'/'}}">Home</a>
                    <a class="custom-nav-link" href="{{'/index'}}">Products</a>
                    <a class="custom-nav-link" href="{{'/std'}}">Form</a>
                    <a class="custom-nav-link" href="#contact">Contact</a>
                </div>
            </div>
        </nav>
    </header>

    <main class="container mx-auto mt-6 px-4">
        @yield('welcome')
        @yield('index')
        @yield('form')
    </main>

    <footer class="bg-gradient-to-r from-blue-500 to-indigo-600 py-6 mt-8 text-white shadow-inner">
        <div class="container mx-auto text-center">
            <p class="text-lg">&copy; 2024 MySite. All rights reserved.</p>
        </div>
    </footer>

    <!-- Tailwind JS for dropdown -->
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.x.x/dist/alpine.min.js" defer></script>
</body>

</html>
