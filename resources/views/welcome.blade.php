<x-app-layout>
    <!-- Hero Section -->
    <x-hero />

    <!-- Featured Cars Section -->
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-900 mb-4">Featured Vehicles</h2>
                <p class="text-lg text-gray-600 max-w-2xl mx-auto">Discover our hand-picked selection of premium vehicles, each thoroughly inspected and ready for their new owner.</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <x-cars.featured-car :car="[
                    'name' => 'Mercedes-Benz C-Class',
                    'price' => 45000,
                    'year' => '2023',
                    'mileage' => '15,000',
                    'transmission' => 'Automatic',
                    'image' => 'https://images.unsplash.com/photo-1617531653332-bd46c24f2068?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80'
                ]" />
                
                <x-cars.featured-car :car="[
                    'name' => 'BMW 3 Series',
                    'price' => 42000,
                    'year' => '2022',
                    'mileage' => '20,000',
                    'transmission' => 'Automatic',
                    'image' => 'https://images.unsplash.com/photo-1555215695-3004980ad54e?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80'
                ]" />
                
                <x-cars.featured-car :car="[
                    'name' => 'Audi A4',
                    'price' => 39000,
                    'year' => '2023',
                    'mileage' => '12,000',
                    'transmission' => 'Automatic',
                    'image' => 'https://images.unsplash.com/photo-1606664515524-ed2f786a0bd6?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80'
                ]" />
            </div>
            <div class="text-center mt-12">
                <a href="#" class="inline-flex items-center px-6 py-3 border border-transparent text-base font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700">
                    View All Vehicles
                    <svg class="ml-2 -mr-1 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                    </svg>
                </a>
            </div>
        </div>
    </section>

    <!-- Category Listing Section -->
    <x-category-listing />

    <!-- Ads Section -->
    <x-ads-section />

    <!-- Why Choose Us Section -->
    <section class="py-16 bg-gray-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-900 mb-4">Why Choose CarXChange</h2>
                <p class="text-lg text-gray-600 max-w-2xl mx-auto">We're committed to providing the best car buying and selling experience with our premium services and dedicated support.</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-white rounded-lg p-8 shadow-sm hover:shadow-md transition">
                    <div class="bg-blue-600 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-6">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-4 text-center">Trusted Sellers</h3>
                    <p class="text-gray-600 text-center">Every seller on our platform is thoroughly verified. We ensure transparency and trust in every transaction.</p>
                </div>

                <div class="bg-white rounded-lg p-8 shadow-sm hover:shadow-md transition">
                    <div class="bg-blue-600 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-6">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-4 text-center">Competitive Pricing</h3>
                    <p class="text-gray-600 text-center">Get the best value for your money with our market-competitive prices and transparent pricing policy.</p>
                </div>

                <div class="bg-white rounded-lg p-8 shadow-sm hover:shadow-md transition">
                    <div class="bg-blue-600 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-6">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-4 text-center">Seamless Experience</h3>
                    <p class="text-gray-600 text-center">Our streamlined process makes buying and selling cars quick, easy, and hassle-free.</p>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>
