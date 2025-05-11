<div>
    <livewire:site.top-nav />


    <!-- Hero Section -->
    <section class="bg-blue-600 text-white py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h1 class="text-4xl font-bold mb-4">Contact Us</h1>
            <p class="text-lg">We’re here to help! Get in touch with us for inquiries, support, or feedback.</p>
        </div>
    </section>

    <!-- Contact Information Section -->
    <section class="py-16 bg-gray-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-900 mb-4">How to Reach Us</h2>
                <p class="text-lg text-gray-600 max-w-2xl mx-auto">Our team is available to assist you with any questions or concerns. Here's how you can contact us:</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Contact Methods -->
                <div class="bg-white rounded-lg p-8 shadow-sm hover:shadow-md transition text-center">
                    <div class="bg-blue-600 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-6">
                        <svg class="w-8 h-8 text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                            <path d="M2.003 5.884l8 4.8a1 1 0 00.994 0l8-4.8A1 1 0 0018 4H2a1 1 0 00-.997 1.884zM18 8.118l-8 4.8-8-4.8V14a1 1 0 001 1h14a1 1 0 001-1V8.118z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-2">Email Us</h3>
                    <p class="text-gray-600 mb-4">Send us an email and we’ll get back to you as soon as possible.</p>
                    <a href="mailto:support@carxchange.com" class="text-blue-600 font-medium">support@carxchange.com</a>
                </div>

                <div class="bg-white rounded-lg p-8 shadow-sm hover:shadow-md transition text-center">
                    <div class="bg-blue-600 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-6">
                        <svg class="w-8 h-8 text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M2 5a2 2 0 012-2h12a2 2 0 012 2v10a2 2 0 01-2 2H4a2 2 0 01-2-2V5zm14 0H4v10h12V5zM6 7h8v2H6V7z" clip-rule="evenodd" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-2">Call Us</h3>
                    <p class="text-gray-600 mb-4">Reach out to our support team via phone for immediate assistance.</p>
                    <a href="tel:+256123456789" class="text-blue-600 font-medium">+256 123 456 789</a>
                </div>

                <div class="bg-white rounded-lg p-8 shadow-sm hover:shadow-md transition text-center">
                    <div class="bg-blue-600 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-6">
                        <svg class="w-8 h-8 text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm-1-13a1 1 0 112 0v4a1 1 0 01-1 1H7a1 1 0 110-2h2V5z" clip-rule="evenodd" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-2">Visit Us</h3>
                    <p class="text-gray-600 mb-4">Stop by our office to meet with our team in person.</p>
                    <p class="text-gray-600">123 CarXChange Avenue, Kampala, Uganda</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Form Section -->
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-900 mb-4">Send Us a Message</h2>
                <p class="text-lg text-gray-600 max-w-2xl mx-auto">Fill out the form below and our team will get back to you as soon as possible.</p>
            </div>
            <form action="/submit-contact-form" method="POST" class="max-w-3xl mx-auto bg-gray-100 rounded-lg p-8 shadow-md">
                <div class="mb-6">
                    <label for="name" class="block text-gray-700 font-medium mb-2">Your Name</label>
                    <input type="text" id="name" name="name" class="w-full p-3 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500" placeholder="Enter your name" required />
                </div>
                <div class="mb-6">
                    <label for="email" class="block text-gray-700 font-medium mb-2">Your Email</label>
                    <input type="email" id="email" name="email" class="w-full p-3 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500" placeholder="Enter your email" required />
                </div>
                <div class="mb-6">
                    <label for="message" class="block text-gray-700 font-medium mb-2">Your Message</label>
                    <textarea id="message" name="message" rows="5" class="w-full p-3 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500" placeholder="Write your message here" required></textarea>
                </div>
                <div class="text-center">
                    <button type="submit" class="px-6 py-3 bg-blue-600 text-white font-medium rounded-lg hover:bg-blue-700 transition duration-300">Send Message</button>
                </div>
            </form>
        </div>
    </section>

    <livewire:site.footer />
</div>
