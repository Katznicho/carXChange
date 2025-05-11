<div>
    <livewire:site.top-nav />

    <!-- Hero Section -->
    <x-hero />

    <div class="max-w-7xl mx-auto px-4 py-8">
        <h1 class="text-3xl font-bold text-gray-900 mb-6">Popular categories</h1>

        <!-- Category Pills -->
        <div class="flex items-center space-x-3 overflow-x-auto pb-4 scrollbar-hide">
            @foreach ($categories as $category)
                <button wire:click='setCategory({{ $category?->id }})'
                    class="whitespace-nowrap px-6 py-3 rounded-full text-sm font-medium {{ $selectedCategory == $category?->id ? 'bg-black text-white' : 'bg-gray-200 text-gray-800 hover:bg-gray-200' }} ">
                    {{ $category?->name }}
                </button>
            @endforeach
        </div>


        {{-- <div class="grid grid-cols-1 md:grid-cols-5 gap-4">
            @foreach ($categories as $category)
                <div class="bg-white p-4">
                    <img src="{{ Storage::url($category?->image) }}" alt="Tesla Model 3" class="w-full h-auto mb-4" />
                </div>
            @endforeach
        </div> --}}
    </div>


    <!-- Featured Cars Section -->
    <section class="py-8 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-900 mb-4">Featured Vehicles</h2>
                <p class="text-lg text-gray-600 max-w-2xl mx-auto">Discover our hand-picked selection of premium
                    vehicles, each thoroughly inspected and ready for their new owner.</p>

                <div class="relative mt-8 mx-auto w-1/3">
                    <div class="absolute inset-y-0 rtl:inset-r-0 start-0 flex items-center ps-3 pointer-events-none">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-500" fill="currentColor"
                            viewBox="0 0 24 24">
                            <path
                                d="M10 2a8 8 0 105.293 14.707l4.387 4.387a1 1 0 001.414-1.414l-4.387-4.387A8 8 0 0010 2zm0 2a6 6 0 110 12 6 6 0 010-12z" />
                        </svg>
                    </div>

                    <input type="text" wire:model.live.debounce.500ms='filtered_search'
                        class="w-full h-[3rem] block p-2 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-indigo-500 focus:border-indigo-500"
                        placeholder="Search for cars, trucks, SUVs, etc." />
                </div>
            </div>

            <div class="max-w-7xl mx-auto px-4 py-8">
                <!-- Car Listing Cards Grid -->

                @if ($cars->count() == 0)
                    <p class="text-center text-gray-500">No cars found</p>
                @endif

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                    @foreach ($cars as $carIndex => $car)
                        <div wire:key={{ $car->id }} class="bg-white rounded-lg overflow-hidden shadow">
                            <div class="relative">

                                <a href="{{ route('site.car.details', $car->slug) }}">
                                    @if ($car?->images)
                                        <img src="{{ Storage::url($car?->images[0]) }}" alt="Toyota Camry"
                                            class="w-full h-64 object-cover">
                                    @else
                                        <img src="{{ asset('assets/car_placeholder.png') }}" alt="Toyota Camry"
                                            class="w-full h-64 object-fit-cover" />
                                    @endif
                                </a>

                                <div class="absolute top-4 left-4">
                                    <span
                                        class="bg-blue-600 text-white px-4 py-2 rounded-full text-sm font-medium">Great
                                        Price</span>
                                </div>

                                <button class="absolute top-4 right-4 bg-white p-2 rounded-full shadow">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M5 5a2 2 0 012-2h10a2 2 0 012 2v16l-7-3.5L5 21V5z" />
                                    </svg>
                                </button>
                            </div>

                            <!-- Car Details -->
                            <div class="p-4">
                                <h3 class="text-xl font-semibold mb-1">{{ $car?->name }}</h3>
                                <p class="text-gray-600 text-sm mb-4 two-line-truncate">{{ $car?->description }}</p>

                                <!-- Car Specs -->
                                <div class="flex justify-between mb-4">
                                    <div class="flex flex-col items-center">
                                        <div class="bg-gray-100 p-2 rounded-full mb-1">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                                fill="currentColor">
                                                <path d="M10 12a2 2 0 100-4 2 2 0 000 4z" />
                                                <path fill-rule="evenodd"
                                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm0-2a6 6 0 100-12 6 6 0 000 12z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                        </div>
                                        <span class="text-sm">{{ number_format($car?->mileage) }} Miles</span>
                                    </div>

                                    <div class="flex flex-col items-center">
                                        <div class="bg-gray-100 p-2 rounded-full mb-1">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                                fill="currentColor">
                                                <path fill-rule="evenodd"
                                                    d="M3 6a3 3 0 013-3h10a1 1 0 011 1v10a2 2 0 01-2 2H5a3 3 0 01-3-3V6zm3-1a1 1 0 00-1 1v7a1 1 0 001 1h10V5H6z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                        </div>

                                        <span class="text-sm">{{ ucfirst($car?->fuel_type) }}</span>

                                    </div>

                                    <div class="flex flex-col items-center">
                                        <div class="bg-gray-100 p-2 rounded-full mb-1">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                                fill="currentColor">
                                                <path fill-rule="evenodd"
                                                    d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                        </div>

                                        <span class="text-sm">{{ ucfirst($car?->transmission) }}</span>
                                    </div>
                                </div>

                                <!-- Price and CTA -->
                                <div class="flex items-center justify-between">
                                    <span class="text-lg font-bold"><span class="text-[0.7rem]">UGX</span>
                                        {{ number_format($car?->price) }}</span>

                                    <a href="{{ route('site.car.details', $car->slug) }}"
                                        class="text-blue-600 font-medium flex items-center">
                                        Details

                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1" viewBox="0 0 20 20"
                                            fill="currentColor">
                                            <path fill-rule="evenodd"
                                                d="M10.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L12.586 11H5a1 1 0 110-2h7.586l-2.293-2.293a1 1 0 010-1.414z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

            <!-- View All Vehicles Button Container -->
            <div class="max-w-7xl mx-auto px-4 py-8 flex justify-center">
                <!-- View All Button -->
                <a href="{{ route('site.car-listings') }}"
                    class="inline-flex items-center justify-center px-8 py-3 border-2 border-blue-600 text-blue-600 font-medium text-lg rounded-full hover:bg-blue-600 hover:text-white transition duration-300 shadow-md">
                    View All Vehicles
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" viewBox="0 0 20 20"
                        fill="currentColor">
                        <path fill-rule="evenodd"
                            d="M10.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L12.586 11H5a1 1 0 110-2h7.586l-2.293-2.293a1 1 0 010-1.414z"
                            clip-rule="evenodd" />
                    </svg>
                </a>
            </div>
        </div>
    </section>


    <!-- Category Listing Section -->
    {{-- <x-category-listing /> --}}

    <!-- Ads Section -->
    <x-ads-section />

    <!-- News & Reviews Section -->
    <section class="max-w-7xl mx-auto px-4 py-12">
        <h2 class="text-4xl font-bold mb-8 text-gray-900">News & reviews</h2>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            @foreach ($blogs as $blog)
                <div
                    class="group relative overflow-hidden rounded-lg shadow-lg bg-white hover:shadow-xl transition duration-300">
                    <a href="{{ route('site.blog.details', $blog?->slug) }}">
                        <div class="relative h-64 overflow-hidden">
                            <img src="{{ Storage::url($blog?->featured_image) }}" alt="{{ $blog?->title }}"
                                class="w-full h-full object-cover transition duration-300 group-hover:scale-105">

                            <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent"></div>
                        </div>

                        <div class="absolute bottom-0 left-0 right-0 p-6">
                            <h3 class="text-xl font-bold text-white">{{ $blog?->title }}</h3>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>

        <!-- View All Articles Button -->
        <div class="mt-8 text-center">
            <a href="{{ route('site.blogs') }}"
                class="inline-flex items-center justify-center px-8 py-3 border-2 border-blue-600 text-blue-600 font-medium text-lg rounded-full hover:bg-blue-600 hover:text-white transition duration-300 shadow-md">
                View All Articles
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" viewBox="0 0 20 20"
                    fill="currentColor">
                    <path fill-rule="evenodd"
                        d="M10.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L12.586 11H5a1 1 0 110-2h7.586l-2.293-2.293a1 1 0 010-1.414z"
                        clip-rule="evenodd" />
                </svg>
            </a>
        </div>
    </section>


    <!-- Why Choose Us Section -->
    <section class="py-16 bg-gray-100" id="why-choose-us">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-900 mb-4">Why Choose CarXChange</h2>
                <p class="text-lg text-gray-600 max-w-2xl mx-auto">We're committed to providing the best car buying and
                    selling experience with our premium services and dedicated support.</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-white rounded-lg p-8 shadow-sm hover:shadow-md transition">
                    <div class="bg-blue-600 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-6">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-4 text-center">Trusted Sellers</h3>
                    <p class="text-gray-600 text-center">Every seller on our platform is thoroughly verified. We ensure
                        transparency and trust in every transaction.</p>
                </div>

                <div class="bg-white rounded-lg p-8 shadow-sm hover:shadow-md transition">
                    <div class="bg-blue-600 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-6">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-4 text-center">Competitive Pricing</h3>
                    <p class="text-gray-600 text-center">Get the best value for your money with our market-competitive
                        prices and transparent pricing policy.</p>
                </div>

                <div class="bg-white rounded-lg p-8 shadow-sm hover:shadow-md transition">
                    <div class="bg-blue-600 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-6">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M13 10V3L4 14h7v7l9-11h-7z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-4 text-center">Seamless Experience</h3>
                    <p class="text-gray-600 text-center">Our streamlined process makes buying and selling cars quick,
                        easy, and hassle-free.</p>
                </div>
            </div>
        </div>
    </section>

    <livewire:site.footer />
</div>
