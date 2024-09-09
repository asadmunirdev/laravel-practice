@extends('layout.Main')
@section('title', 'Products.com')
@section('index')
<div class="container mx-auto mt-10 px-4">
    <h1 class="text-3xl font-semibold text-center text-blue-600 mb-8">Latest Products</h1>

    <div x-data="{ open: null }" class="grid grid-cols-1 md:grid-cols-3 gap-8">
        <!-- Card 1 -->
        <div class="bg-white shadow-md rounded-lg overflow-hidden">
            <img src="{{ asset('assets/images/bag.avif') }}" class="w-full h-48 object-cover" alt="Bag Image">
            <div class="p-5">
                <h5 class="text-xl font-semibold mb-2">Bag Name</h5>
                <div class="flex items-center mb-2">
                    <span class="text-yellow-500">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </span>
                    <span class="ml-2 text-gray-600">(4.0)</span>
                </div>
                <p class="text-gray-700 mb-4">This is a brief description of the bag. It is available in multiple colors and sizes.</p>
                <p class="text-gray-600 mb-4">Availability: In Stock</p>
                <p class="text-gray-700 mb-4"><strong>Price:</strong> $75</p>
                <div class="flex justify-between items-center">
                    <a href="#" class="inline-block bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-600 transition-colors">Add to Cart</a>
                    <button @click="open = open === 1 ? null : 1" class="inline-block bg-gray-500 text-white py-2 px-4 rounded hover:bg-gray-600 transition-colors">View Details</button>
                </div>
                <div x-show="open === 1" class="mt-4">
                    <div class="bg-gray-100 p-4 rounded-lg shadow-md">
                        <p class="text-gray-800"><strong>Shipping:</strong> 5-7 days</p>
                        <p class="text-gray-800"><strong>Previous Sales:</strong> 1200 units</p>
                        <p class="text-gray-800"><strong>Material:</strong> Leather</p>
                        <p class="text-gray-800"><strong>Dimensions:</strong> 20x15x10 cm</p>
                        <p class="text-gray-800"><strong>Warranty:</strong> 1 year</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Card 2 -->
        <div class="bg-white shadow-md rounded-lg overflow-hidden">
            <img src="{{ asset('assets/images/watch.avif') }}" class="w-full h-48 object-cover" alt="Watch Image">
            <div class="p-5">
                <h5 class="text-xl font-semibold mb-2">Watch Name</h5>
                <div class="flex items-center mb-2">
                    <span class="text-yellow-500">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                        <i class="far fa-star"></i>
                    </span>
                    <span class="ml-2 text-gray-600">(3.5)</span>
                </div>
                <p class="text-gray-700 mb-4">This stylish watch is perfect for any occasion. Available in various designs.</p>
                <p class="text-gray-600 mb-4">Availability: Out of Stock</p>
                <p class="text-gray-700 mb-4"><strong>Price:</strong> $150</p>
                <div class="flex justify-between items-center">
                    <a href="#" class="inline-block bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-600 transition-colors">Add to Cart</a>
                    <button @click="open = open === 2 ? null : 2" class="inline-block bg-gray-500 text-white py-2 px-4 rounded hover:bg-gray-600 transition-colors">View Details</button>
                </div>
                <div x-show="open === 2" class="mt-4">
                    <div class="bg-gray-100 p-4 rounded-lg shadow-md">
                        <p class="text-gray-800"><strong>Shipping:</strong> 7-10 days</p>
                        <p class="text-gray-800"><strong>Previous Sales:</strong> 800 units</p>
                        <p class="text-gray-800"><strong>Material:</strong> Stainless Steel</p>
                        <p class="text-gray-800"><strong>Water Resistant:</strong> 30 meters</p>
                        <p class="text-gray-800"><strong>Warranty:</strong> 2 years</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Card 3 -->
        <div class="bg-white shadow-md rounded-lg overflow-hidden">
            <img src="{{ asset('assets/images/headphone.avif') }}" class="w-full h-48 object-cover" alt="Headphone Image">
            <div class="p-5">
                <h5 class="text-xl font-semibold mb-2">Headphone Name</h5>
                <div class="flex items-center mb-2">
                    <span class="text-yellow-500">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </span>
                    <span class="ml-2 text-gray-600">(4.5)</span>
                </div>
                <p class="text-gray-700 mb-4">Enjoy immersive sound with these high-quality headphones. Available in different colors.</p>
                <p class="text-gray-600 mb-4">Availability: In Stock</p>
                <p class="text-gray-700 mb-4"><strong>Price:</strong> $120</p>
                <div class="flex justify-between items-center">
                    <a href="#" class="inline-block bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-600 transition-colors">Add to Cart</a>
                    <button @click="open = open === 3 ? null : 3" class="inline-block bg-gray-500 text-white py-2 px-4 rounded hover:bg-gray-600 transition-colors">View Details</button>
                </div>
                <div x-show="open === 3" class="mt-4">
                    <div class="bg-gray-100 p-4 rounded-lg shadow-md">
                        <p class="text-gray-800"><strong>Shipping:</strong> 3-5 days</p>
                        <p class="text-gray-800"><strong>Previous Sales:</strong> 500 units</p>
                        <p class="text-gray-800"><strong>Battery Life:</strong> 20 hours</p>
                        <p class="text-gray-800"><strong>Color Options:</strong> Black, White, Blue</p>
                        <p class="text-gray-800"><strong>Warranty:</strong> 6 months</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Card 4 -->
        <div class="bg-white shadow-md rounded-lg overflow-hidden">
            <img src="{{ asset('assets/images/glasses.avif') }}" class="w-full h-48 object-cover" alt="Glasses Image">
            <div class="p-5">
                <h5 class="text-xl font-semibold mb-2">Glasses Name</h5>
                <div class="flex items-center mb-2">
                    <span class="text-yellow-500">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </span>
                    <span class="ml-2 text-gray-600">(4.0)</span>
                </div>
                <p class="text-gray-700 mb-4">These stylish glasses are perfect for any occasion. Available in various designs.</p>
                <p class="text-gray-600 mb-4">Availability: In Stock</p>
                <p class="text-gray-700 mb-4"><strong>Price:</strong> $60</p>
                <div class="flex justify-between items-center">
                    <a href="#" class="inline-block bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-600 transition-colors">Add to Cart</a>
                    <button @click="open = open === 4 ? null : 4" class="inline-block bg-gray-500 text-white py-2 px-4 rounded hover:bg-gray-600 transition-colors">View Details</button>
                </div>
                <div x-show="open === 4" class="mt-4">
                    <div class="bg-gray-100 p-4 rounded-lg shadow-md">
                        <p class="text-gray-800"><strong>Shipping:</strong> 5-7 days</p>
                        <p class="text-gray-800"><strong>Previous Sales:</strong> 1200 units</p>
                        <p class="text-gray-800"><strong>Material:</strong> Leather</p>
                        <p class="text-gray-800"><strong>Dimensions:</strong> 20x15x10 cm</p>
                        <p class="text-gray-800"><strong>Warranty:</strong> 1 year</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Card 5 -->
        <div class="bg-white shadow-md rounded-lg overflow-hidden">
            <img src="{{ asset('assets/images/skincare.avif') }}" class="w-full h-48 object-cover" alt="Skincare Image">
            <div class="p-5">
                <h5 class="text-xl font-semibold mb-2">Skincare Product Name</h5>
                <div class="flex items-center mb-2">
                    <span class="text-yellow-500">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                        <i class="far fa-star"></i>
                    </span>
                    <span class="ml-2 text-gray-600">(3.5)</span>
                </div>
                <p class="text-gray-700 mb-4">This skincare product is ideal for maintaining healthy skin. Available in different sizes.</p>
                <p class="text-gray-600 mb-4">Availability: Out of Stock</p>
                <p class="text-gray-700 mb-4"><strong>Price:</strong> $45</p>
                <div class="flex justify-between items-center">
                    <a href="#" class="inline-block bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-600 transition-colors">Add to Cart</a>
                    <button @click="open = open === 5 ? null : 5" class="inline-block bg-gray-500 text-white py-2 px-4 rounded hover:bg-gray-600 transition-colors">View Details</button>
                </div>
                <div x-show="open === 5" class="mt-4">
                    <div class="bg-gray-100 p-4 rounded-lg shadow-md">
                        <p class="text-gray-800"><strong>Shipping:</strong> 7-10 days</p>
                        <p class="text-gray-800"><strong>Previous Sales:</strong> 800 units</p>
                        <p class="text-gray-800"><strong>Material:</strong> Stainless Steel</p>
                        <p class="text-gray-800"><strong>Water Resistant:</strong> 30 meters</p>
                        <p class="text-gray-800"><strong>Warranty:</strong> 2 years</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Card 6 -->
        <div class="bg-white shadow-md rounded-lg overflow-hidden">
            <img src="{{ asset('assets/images/shoes.avif') }}" class="w-full h-48 object-cover" alt="Shoes Image">
            <div class="p-5">
                <h5 class="text-xl font-semibold mb-2">Shoes Name</h5>
                <div class="flex items-center mb-2">
                    <span class="text-yellow-500">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </span>
                    <span class="ml-2 text-gray-600">(4.5)</span>
                </div>
                <p class="text-gray-700 mb-4">These stylish shoes are perfect for any occasion. Available in various sizes and colors.</p>
                <p class="text-gray-600 mb-4">Availability: In Stock</p>
                <p class="text-gray-700 mb-4"><strong>Price:</strong> $90</p>
                <div class="flex justify-between items-center">
                    <a href="#" class="inline-block bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-600 transition-colors">Add to Cart</a>
                    <button @click="open = open === 6 ? null : 6" class="inline-block bg-gray-500 text-white py-2 px-4 rounded hover:bg-gray-600 transition-colors">View Details</button>
                </div>
                <div x-show="open === 6" class="mt-4">
                    <div class="bg-gray-100 p-4 rounded-lg shadow-md">
                        <p class="text-gray-800"><strong>Shipping:</strong> 3-5 days</p>
                        <p class="text-gray-800"><strong>Previous Sales:</strong> 500 units</p>
                        <p class="text-gray-800"><strong>Color Options:</strong> Black, White, Blue</p>
                        <p class="text-gray-800"><strong>Material:</strong> Leather</p>
                        <p class="text-gray-800"><strong>Warranty:</strong> 1 year</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
