@extends('layout.Main')
@section('title', 'Contact Us')

@section('contact')

<style>
    /* Header Styling */
    h1 {
        font-size: 2.2rem;
        text-align: center;
        color: #990011;
        margin-bottom: 20px;
        animation: slideInFromTop 1s ease-in-out; /* Apply the new animation */
        text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.1);
        font-weight: bold;
    }

    /* New Animation for Sliding from the Top */
    @keyframes slideInFromTop {
        from {
            opacity: 0;
            transform: translateY(-30px); /* Starts from the top */
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
</style>

<div class="bg-gray-100 min-h-screen flex flex-col justify-between">
    <!-- Main content -->
    <div class="flex-grow py-12 bg-white">
        <div class="container mx-auto px-4 text-center">
            <!-- Title -->
            <h1 class="text-5xl font-bold text-center mb-10 animate__animated animate__fadeIn animate__delay-1s">Contact Us</h1>
            <!-- Description -->
            <p class="text-lg text-gray-700 mb-12">We’d love to hear from you! Whether you have a question, comment, or just want to say hello, feel free to get in touch.</p>
            <!-- Information Section -->
            <div class="flex flex-col items-center space-y-8 md:space-y-0 md:flex-row md:justify-around">
                <!-- Personal Information -->
                <div class="w-full md:w-1/3 bg-gray-50 p-6 rounded-lg shadow-md text-left">
                    <div class="flex items-center mb-4">
                        <svg class="w-8 h-8 text-blue-500 mr-3" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 1v4m0 14v4m-5-5h10m-5-5v4m0-14h-2m0 14v-4m0 0h-2m2 0h2M5 5h14m0 14H5m0 0V5m14 14V5" />
                        </svg>
                        <h3 class="text-xl font-semibold" style="color: #990011;">Muhammad Asad Munir</h3>
                    </div>
                    <p class="text-gray-700 mb-2"><i class="fas fa-briefcase"></i> Web Developer</p>
                    <p class="text-gray-700 mb-2"><i class="fas fa-envelope"></i> <a href="mailto:asadmunir6645@gmail.com" class="text-blue-500 hover:underline">asadmunir6645@gmail.com</a></p>
                    <p class="text-gray-700 mb-2"><i class="fas fa-phone"></i> <a href="tel:03244590782" class="text-blue-500 hover:underline">03244590782</a></p>
                    <p class="text-gray-700"><i class="fas fa-map-marker-alt"></i> Sohwari Link Road Mughapura Lahore</p>
                </div>
                <!-- Social Links -->
                <div class="w-full md:w-1/3 bg-gray-50 p-6 rounded-lg shadow-md text-left">
                    <h3 class="text-xl font-semibold mb-4" style="color: #990011;">Connect with Me</h3>
                    <div class="flex flex-col items-start space-y-4">
                        <a href="https://linkedin.com/in/asadmunir6645" target="_blank" class="flex items-center text-blue-700 hover:text-blue-900">
                            <i class="fab fa-linkedin fa-2x mr-3"></i> LinkedIn
                        </a>
                        <a href="https://github.com/asadmunirdev" target="_blank" class="flex items-center text-gray-700 hover:text-gray-900">
                            <i class="fab fa-github fa-2x mr-3"></i> GitHub
                        </a>
                        <a href="https://www.facebook.com/profile.php?id=100014569362969&mibextid=ZbWKwL" target="_blank" class="flex items-center text-blue-600 hover:text-blue-800">
                            <i class="fab fa-facebook fa-2x mr-3"></i> Facebook
                        </a>
                        <a href="https://www.instagram.com/asadawan6645?igsh=MWNzd3hhb2Q5M2tnNg==" target="_blank" class="flex items-center text-pink-600 hover:text-pink-800">
                            <i class="fab fa-instagram fa-2x mr-3"></i> Instagram
                        </a>
                        <a href="mailto:asadmunir6645@gmail.com" target="_blank" class="flex items-center text-blue-500 hover:text-blue-700">
                            <i class="fas fa-envelope fa-2x mr-3"></i> Email
                        </a>
                        <a href="tel:03244590782" target="_blank" class="flex items-center text-green-600 hover:text-green-800">
                            <i class="fas fa-phone fa-2x mr-3"></i> Phone
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
