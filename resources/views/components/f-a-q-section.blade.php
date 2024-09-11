<div id="faq" class="bg-white py-12">
    <div class="container mx-auto px-4">
        <h2 class="text-4xl font-bold text-center mb-8" style="color: #990011;">Frequently Asked Questions</h2>
        <div x-data="{ open: null }" class="space-y-6">
            <!-- FAQ 1 -->
            <div class="border-b border-gray-300 transition-transform duration-300 ease-in-out transform hover:scale-105">
                <button @click="open = open === 1 ? null : 1" class="w-full text-left py-4 px-2 text-xl font-semibold text-gray-800 focus:outline-none">
                    What is your main product?
                </button>
                <p x-show="open === 1" class="text-gray-600 px-2 pb-4">Our main product is a comprehensive software solution designed to help businesses streamline their operations and improve productivity.</p>
            </div>
            <!-- FAQ 2 -->
            <div class="border-b border-gray-300 transition-transform duration-300 ease-in-out transform hover:scale-105">
                <button @click="open = open === 2 ? null : 2" class="w-full text-left py-4 px-2 text-xl font-semibold text-gray-800 focus:outline-none">
                    How can I contact support?
                </button>
                <p x-show="open === 2" class="text-gray-600 px-2 pb-4">You can contact our support team via email at support@example.com or by filling out the contact form on our website.</p>
            </div>
            <!-- FAQ 3 -->
            <div class="border-b border-gray-300 transition-transform duration-300 ease-in-out transform hover:scale-105">
                <button @click="open = open === 3 ? null : 3" class="w-full text-left py-4 px-2 text-xl font-semibold text-gray-800 focus:outline-none">
                    What are your business hours?
                </button>
                <p x-show="open === 3" class="text-gray-600 px-2 pb-4">Our business hours are Monday through Friday, 9 AM to 6 PM. We are closed on weekends and public holidays.</p>
            </div>
            <!-- FAQ 4 -->
            <div class="transition-transform duration-300 ease-in-out transform hover:scale-105">
                <button @click="open = open === 4 ? null : 4" class="w-full text-left py-4 px-2 text-xl font-semibold text-gray-800 focus:outline-none">
                    Do you offer a free trial?
                </button>
                <p x-show="open === 4" class="text-gray-600 px-2 pb-4">Yes, we offer a 14-day free trial for all new users. You can sign up for the trial on our website to explore our features.</p>
            </div>
        </div>
    </div>
</div>
