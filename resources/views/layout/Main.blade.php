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
    <style>
        .nav-link {
            position: relative;
            display: inline-block;
            transition: color 0.3s ease, transform 0.3s ease;
        }

        .nav-link::after {
            content: '';
            position: absolute;
            bottom: -2px;
            left: 0;
            width: 100%;
            height: 2px;
            background-color: #3b82f6; /* Tailwind blue-500 */
            transform: scaleX(0);
            transition: transform 0.3s ease;
            transform-origin: bottom right;
        }

        .nav-link:hover {
            color: #3b82f6; /* Tailwind blue-500 */
            transform: scale(1.05);
        }

        .nav-link:hover::after {
            transform: scaleX(1);
            transform-origin: bottom left;
        }
    </style>
</head>

<body class="bg-gray-100 text-gray-800">

    <header>
        <nav class="bg-white shadow-md">
            <div class="container mx-auto px-4 py-3 flex justify-between items-center">
                <a class="text-xl font-semibold text-blue-500" href="#">MySite</a>
                <button class="block md:hidden text-gray-600 focus:outline-none">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
                    </svg>
                </button>
                <div class="hidden md:flex space-x-6">
                    <a class="nav-link text-gray-600 hover:text-blue-500" href="{{'/'}}">Home</a>
                    <a class="nav-link text-gray-600 hover:text-blue-500" href="{{'/index'}}">Products</a>
                    <a class="nav-link text-gray-600 hover:text-blue-500" href="{{'/std'}}">Form</a>
                    <a class="nav-link text-gray-600 hover:text-blue-500" href="#contact">Contact</a>
                </div>
            </div>
        </nav>
    </header>

    <main class="container mx-auto mt-6 px-4">
        @yield('welcome')
        @yield('index')
        @yield('form')
    </main>

    <footer class="bg-white py-4 mt-8 shadow-inner">
        <div class="container mx-auto text-center">
            <p class="text-gray-600">&copy; 2024 MySite. All rights reserved.</p>
        </div>
    </footer>

    <!-- Tailwind JS for dropdown -->
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.x.x/dist/alpine.min.js" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/@headlessui/react@latest/dist/headlessui.min.js"></script>
</body>

</html>
