<div>
    <livewire:site.top-nav />

    <!-- Main Content -->
    <main class="max-w-7xl mx-auto px-4 py-6">
        <!-- Header Section -->
        <div class="flex flex-col lg:flex-row lg:items-start lg:justify-between mb-6">
            <!-- Title and Specs -->
            <div>
                <h1 class="text-3xl font-bold text-gray-900 mb-2">{{ $car->name }}</h1>

                {{-- <p class="text-gray-700 mb-4">3.5 D5 PowerPulse Momentum 5dr AWD Geartronic Estate</p> --}}

                <!-- Vehicle Details Pills -->
                <div class="flex flex-wrap gap-3">
                    <div class="flex items-center bg-blue-50 text-blue-700 rounded-full px-4 py-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                        </svg>
                        <span>{{ $car?->year }}</span>
                    </div>

                    <div class="flex items-center bg-blue-50 text-blue-700 rounded-full px-4 py-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 011.447-.894L9 7m0 13l6-3m-6 3V7m6 10l4.553 2.276A1 1 0 0021 18.382V7.618a1 1 0 00-.553-.894L15 4m0 13V4" />
                        </svg>
                        <span>{{ number_format($car?->mileage) }} miles</span>
                    </div>

                    <div class="flex items-center bg-blue-50 text-blue-700 rounded-full px-4 py-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                        <span>{{ ucfirst($car?->transmission) }}</span>
                    </div>

                    <div class="flex items-center bg-blue-50 text-blue-700 rounded-full px-4 py-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                        </svg>
                        <span>{{ ucfirst($car?->fuel_type) }}</span>
                    </div>
                </div>
            </div>

            <!-- Price and Actions -->
            <div class="mt-6 lg:mt-0 text-right">
                <div class="flex flex-col items-end">
                    <h2 class="text-3xl font-bold text-gray-900 mb-4"><span class="text-lg">Ugx</span>
                        {{ number_format($car?->price) }}</h2>
                    <button
                        class="flex items-center bg-blue-600 hover:bg-blue-700 text-white font-medium px-6 py-3 rounded-lg transition duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z" />
                        </svg>
                        Make An Offer Price
                    </button>

                    <!-- Action Buttons -->
                    <div class="flex mt-4 space-x-4">
                        <button class="p-2 text-gray-700 hover:text-blue-600 transition duration-300">
                            <span class="sr-only">Share</span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.368 2.684 3 3 0 00-5.368-2.684z" />
                            </svg>
                        </button>
                        <button class="p-2 text-gray-700 hover:text-blue-600 transition duration-300">
                            <span class="sr-only">Save</span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 5a2 2 0 012-2h10a2 2 0 012 2v16l-7-3.5L5 21V5z" />
                            </svg>
                        </button>
                        <button class="p-2 text-gray-700 hover:text-blue-600 transition duration-300">
                            <span class="sr-only">Compare</span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Car Images Grid -->
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-4 mt-8">
            <!-- Main Image -->
            <div class="lg:col-span-2 relative overflow-hidden rounded-lg">
                <div
                    class="absolute top-4 left-4 bg-blue-600 text-white px-4 py-1 rounded-full font-medium text-sm z-10">
                    Great Price
                </div>

                @if ($car?->images)
                    <img src="{{ Storage::url($car?->images[0]) }}" alt="Toyota Camry" class="w-full h-64 object-cover">
                @else
                    <img src="{{ asset('assets/car_placeholder.png') }}" alt="Toyota Camry"
                        class="w-full h-64 object-fit-cover" />
                @endif

                <button
                    class="absolute bottom-4 left-4 bg-blue-100 backdrop-blur-sm hover:bg-blue-200 text-gray-800 hover:text-blue-700 px-4 py-2 rounded-md flex items-center font-medium transition duration-300">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    Video
                </button>
            </div>

            <!-- Side Images Grid -->
            <div class="grid grid-cols-2 gap-4">
                @if ($car?->images && count($car?->images))
                    @foreach ($car?->images as $idx => $image)
                        <img src="{{ Storage::url($image) }}" alt="Toyota Camry" class="w-full h-24 object-cover">
                    @endforeach
                @endif
            </div>
        </div>
    </main>

    <section>
        <div class="flex flex-col lg:flex-row bg-white rounded-lg shadow-sm border border-gray-100 max-w-6xl mx-auto">
            <!-- Car Overview Section -->
            <div class="flex-1 p-6">
                <h2 class="text-2xl font-bold text-gray-800 mb-6">Car Overview</h2>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <!-- Left Column -->
                    <div class="space-y-4">
                        <div class="flex items-center">
                            <div class="w-8 text-gray-500">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" class="w-5 h-5">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7"></path>
                                </svg>
                            </div>
                            <div class="flex-1">
                                <p class="text-gray-600">Body</p>
                            </div>
                            <div class="flex-1">
                                <p class="font-medium">{{ $car?->body_type }}</p>
                            </div>
                        </div>

                        <div class="flex items-center">
                            <div class="w-8 text-gray-500">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" class="w-5 h-5">
                                    <circle cx="12" cy="12" r="10" stroke-width="2"></circle>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 8v4l3 3"></path>
                                </svg>
                            </div>
                            <div class="flex-1">
                                <p class="text-gray-600">Mileage</p>
                            </div>
                            <div class="flex-1">
                                <p class="font-medium">{{ number_format($car?->mileage) }} miles</p>
                            </div>
                        </div>

                        <div class="flex items-center">
                            <div class="w-8 text-gray-500">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" class="w-5 h-5">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 8h14M5 8a2 2 0 110-4h14a2 2 0 110 4M5 8v10a2 2 0 002 2h10a2 2 0 002-2V8m-14 0h14">
                                    </path>
                                </svg>
                            </div>
                            <div class="flex-1">
                                <p class="text-gray-600">Fuel Type</p>
                            </div>
                            <div class="flex-1">
                                <p class="font-medium">{{ ucfirst($car?->fuel_type) }}</p>
                            </div>
                        </div>

                        <div class="flex items-center">
                            <div class="w-8 text-gray-500">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" class="w-5 h-5">
                                    <rect x="3" y="4" width="18" height="18" rx="2" ry="2"
                                        stroke-width="2"></rect>
                                    <line x1="16" y1="2" x2="16" y2="6"
                                        stroke-width="2"></line>
                                    <line x1="8" y1="2" x2="8" y2="6"
                                        stroke-width="2"></line>
                                    <line x1="3" y1="10" x2="21" y2="10"
                                        stroke-width="2"></line>
                                </svg>
                            </div>
                            <div class="flex-1">
                                <p class="text-gray-600">Year</p>
                            </div>
                            <div class="flex-1">
                                <p class="font-medium">{{ $car?->year }}</p>
                            </div>
                        </div>

                        <div class="flex items-center">
                            <div class="w-8 text-gray-500">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" class="w-5 h-5">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 17V7m0 10a2 2 0 01-2 2H5a2 2 0 01-2-2V7a2 2 0 012-2h2a2 2 0 012 2m0 10a2 2 0 002 2h2a2 2 0 002-2M9 7a2 2 0 012-2h2a2 2 0 012 2m0 10V7m0 10a2 2 0 002 2h2a2 2 0 002-2V7a2 2 0 00-2-2h-2a2 2 0 00-2 2">
                                    </path>
                                </svg>
                            </div>
                            <div class="flex-1">
                                <p class="text-gray-600">Transmission</p>
                            </div>
                            <div class="flex-1">
                                <p class="font-medium">{{ ucfirst($car?->transmission) }}</p>
                            </div>
                        </div>

                        <div class="flex items-center">
                            <div class="w-8 text-gray-500">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" class="w-5 h-5">
                                    <rect x="3" y="11" width="18" height="11" rx="2" ry="2"
                                        stroke-width="2"></rect>
                                    <circle cx="12" cy="5" r="3" stroke-width="2"></circle>
                                </svg>
                            </div>
                            <div class="flex-1">
                                <p class="text-gray-600">Drive Type</p>
                            </div>
                            <div class="flex-1">
                                <p class="font-medium">{{ $car?->drive_type }}</p>
                            </div>
                        </div>
                    </div>

                    <!-- Right Column -->
                    <div class="space-y-4">
                        <div class="flex items-center">
                            <div class="w-8 text-gray-500">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" class="w-5 h-5">
                                    <circle cx="12" cy="12" r="10" stroke-width="2"></circle>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 8v8m-4-4h8"></path>
                                </svg>
                            </div>
                            <div class="flex-1">
                                <p class="text-gray-600">Condition</p>
                            </div>
                            <div class="flex-1">
                                <p class="font-medium">{{ ucfirst($car?->condition) }}</p>
                            </div>
                        </div>

                        <div class="flex items-center">
                            <div class="w-8 text-gray-500">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" class="w-5 h-5">
                                    <circle cx="12" cy="12" r="10" stroke-width="2"></circle>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M8 12h8"></path>
                                </svg>
                            </div>
                            <div class="flex-1">
                                <p class="text-gray-600">Engine Size</p>
                            </div>
                            <div class="flex-1">
                                <p class="font-medium">{{ $car?->engine_size }}</p>
                            </div>
                        </div>

                        <div class="flex items-center">
                            <div class="w-8 text-gray-500">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" class="w-5 h-5">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 3h18v18H3zM8 3v18M16 3v18"></path>
                                </svg>
                            </div>
                            <div class="flex-1">
                                <p class="text-gray-600">Door</p>
                            </div>
                            <div class="flex-1">
                                <p class="font-medium">{{ $car?->doors }} Doors</p>
                            </div>
                        </div>

                        <div class="flex items-center">
                            <div class="w-8 text-gray-500">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" class="w-5 h-5">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 2v4m0 12v4M4.93 4.93l2.83 2.83m8.48 8.48l2.83 2.83M2 12h4m12 0h4M4.93 19.07l2.83-2.83m8.48-8.48l2.83-2.83">
                                    </path>
                                </svg>
                            </div>
                            <div class="flex-1">
                                <p class="text-gray-600">Cylinder</p>
                            </div>
                            <div class="flex-1">
                                <p class="font-medium">{{ $car?->cylinders }}</p>
                            </div>
                        </div>

                        <div class="flex items-center">
                            <div class="w-8 text-gray-500">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" class="w-5 h-5">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h10a2 2 0 012 2v12a4 4 0 01-4 4H7zm10-4V5a2 2 0 012-2h2a2 2 0 012 2v12a4 4 0 01-4 4h-2a4 4 0 004-4z">
                                    </path>
                                </svg>
                            </div>
                            <div class="flex-1">
                                <p class="text-gray-600">Color</p>
                            </div>
                            <div class="flex-1">
                                <p class="font-medium">
                                    @foreach ($car?->color as $c)
                                        {{ $c }}{{ !$loop->last ? ', ' : '' }}
                                    @endforeach
                                </p>
                            </div>
                        </div>

                        <div class="flex items-center">
                            <div class="w-8 text-gray-500">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" class="w-5 h-5">
                                    <rect x="3" y="3" width="18" height="18" rx="2" ry="2"
                                        stroke-width="2"></rect>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M8 12h8"></path>
                                </svg>
                            </div>
                            <div class="flex-1">
                                <p class="text-gray-600">VIN</p>
                            </div>
                            <div class="flex-1">
                                <p class="font-medium">{{ $car?->vin }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Dealer Section -->
            <div class="lg:w-72 border-t lg:border-t-0 lg:border-l border-gray-100 p-6 flex flex-col">
                <div class="flex flex-col items-center mb-4">
                    <img src="/api/placeholder/100/100" alt="Dealer"
                        class="w-20 h-20 rounded-full object-cover mb-3" />
                    <h3 class="text-xl font-bold text-center">Dealer</h3>
                    <p class="text-gray-600">{{ $car?->dealer?->name }}</p>
                    <p class="text-gray-600">{{ $car?->dealer?->address }}</p>
                </div>

                <div class="space-y-4 mt-2">
                    <a href="#"
                        class="flex items-center justify-center text-blue-600 hover:text-blue-700 space-x-2">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" class="w-5 h-5">
                            <circle cx="12" cy="12" r="10" stroke-width="2"></circle>
                            <polyline points="12 16 16 12 12 8" stroke-width="2"></polyline>
                            <line x1="8" y1="12" x2="16" y2="12" stroke-width="2">
                            </line>
                        </svg>
                        <span>Get Direction</span>
                    </a>

                    <a href="tel:+256784058538"
                        class="flex items-center justify-center text-blue-600 hover:text-blue-700 space-x-2">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" class="w-5 h-5">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z">
                            </path>
                        </svg>
                        <span>{{ $car?->dealer?->phone }}</span>
                    </a>

                    <button
                        class="w-full bg-blue-600 hover:bg-blue-700 text-white py-3 px-4 rounded-lg flex items-center justify-center">
                        <span>Message Dealer</span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" viewBox="0 0 20 20"
                            fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M10.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L12.586 11H5a1 1 0 110-2h7.586l-2.293-2.293a1 1 0 010-1.414z"
                                clip-rule="evenodd" />
                        </svg>
                    </button>

                    <button
                        class="w-full border border-green-500 text-green-500 hover:bg-green-50 py-3 px-4 rounded-lg flex items-center justify-center">
                        <span>Chat Via Whatsapp</span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" viewBox="0 0 20 20"
                            fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M10.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L12.586 11H5a1 1 0 110-2h7.586l-2.293-2.293a1 1 0 010-1.414z"
                                clip-rule="evenodd" />
                        </svg>
                    </button>

                    <a href="#" class="flex items-center justify-center text-gray-600 hover:text-gray-800 mt-4">
                        <span>View All stock at this dealer</span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" viewBox="0 0 20 20"
                            fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M10.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L12.586 11H5a1 1 0 110-2h7.586l-2.293-2.293a1 1 0 010-1.414z"
                                clip-rule="evenodd" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="max-w-6xl mx-auto px-6 py-6">
            <h2 class="text-2xl font-bold text-gray-800 mb-4">Description</h2>

            <div class="space-y-4 mb-6">
                <p class="text-gray-700">
                    {{ $car?->description }}
                </p>

                <p class="text-gray-700">
                    Etiam sit amet ex pharetra, venenatis ante vehicula, gravida sapien. Fusce eleifend vulputate nibh,
                    non cursus augue placerat pellentesque. Sed venenatis risus nec felis mollis, in pharetra urna
                    euismod. Morbi aliquam ut turpis sit amet ultrices. Vestibulum mattis blandit nisl, et tristique
                    elit scelerisque nec. Fusce eleifend laoreet dui eget aliquet. Ut rutrum risus et nunc pretium
                    scelerisque.
                </p>
            </div>
        </div>
    </section>

    <section>
        <div class="max-w-6xl mx-auto px-6 py-6">
            <h2 class="text-2xl font-bold text-gray-800 mb-8">Features</h2>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Interior Column -->
                <div>
                    <h3 class="text-lg font-semibold mb-4">Interior</h3>
                    <ul class="space-y-3">
                        @if ($car->exterior_features && count($car->exterior_features) > 0)
                            @foreach ($car->exterior_features as $feat)
                                <li class="flex items-center">
                                    <span
                                        class="inline-flex items-center justify-center w-5 h-5 rounded-full bg-blue-100 text-blue-600 mr-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3" viewBox="0 0 20 20"
                                            fill="currentColor">
                                            <path fill-rule="evenodd"
                                                d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </span>
                                    {{ ucfirst($feat) }}
                                </li>
                            @endforeach
                        @endif
                    </ul>
                </div>

                <!-- Safety Column -->
                <div>
                    <h3 class="text-lg font-semibold mb-4">Safety</h3>
                    <ul class="space-y-3">
                        @if ($car->safety_features && count($car->safety_features) > 0)
                            @foreach ($car->safety_features as $feat)
                                <li class="flex items-center">
                                    <span
                                        class="inline-flex items-center justify-center w-5 h-5 rounded-full bg-blue-100 text-blue-600 mr-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3" viewBox="0 0 20 20"
                                            fill="currentColor">
                                            <path fill-rule="evenodd"
                                                d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </span>
                                    {{ ucfirst($feat) }}
                                </li>
                            @endforeach
                        @endif
                    </ul>
                </div>

                <!-- Exterior Column -->
                <div>
                    <h3 class="text-lg font-semibold mb-4">Exterior</h3>
                    <ul class="space-y-3">
                        @if ($car->exterior_features && count($car->exterior_features) > 0)
                            @foreach ($car->exterior_features as $feat)
                                <li class="flex items-center">
                                    <span
                                        class="inline-flex items-center justify-center w-5 h-5 rounded-full bg-blue-100 text-blue-600 mr-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3" viewBox="0 0 20 20"
                                            fill="currentColor">
                                            <path fill-rule="evenodd"
                                                d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </span>
                                    {{ ucfirst($feat) }}
                                </li>
                            @endforeach
                        @endif
                    </ul>
                </div>

                <!-- Comfort & Convenience Column -->
                <div>
                    <h3 class="text-lg font-semibold mb-4">Comfort & Convenience</h3>
                    <ul class="space-y-3">
                        @if ($car->comfort_features && count($car->comfort_features) > 0)
                            @foreach ($car->comfort_features as $feat)
                                <li class="flex items-center">
                                    <span
                                        class="inline-flex items-center justify-center w-5 h-5 rounded-full bg-blue-100 text-blue-600 mr-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3" viewBox="0 0 20 20"
                                            fill="currentColor">
                                            <path fill-rule="evenodd"
                                                d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </span>
                                    {{ ucfirst($feat) }}
                                </li>
                            @endforeach
                        @endif
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="max-w-6xl mx-auto p-6">
            <!-- Dimensions & Capacity Section -->
            <div class="mb-8">
                <h2 class="text-3xl font-bold mb-6">Dimensions & Capacity</h2>

                <div class="grid grid-cols-2 gap-4">
                    <div class="flex justify-between border-b pb-2">
                        <span class="font-medium">Length</span>
                        <span>{{ $car?->length }}</span>
                    </div>
                    <div class="flex justify-between border-b pb-2">
                        <span class="font-medium">Width</span>
                        <span>{{ $car?->width }}</span>
                    </div>

                    <div class="flex justify-between border-b pb-2">
                        <span class="font-medium">Height</span>
                        <span>{{ $car?->height }}</span>
                    </div>
                    <div class="flex justify-between border-b pb-2">
                        <span class="font-medium">Width (including mirrors)</span>
                        <span>{{ $car?->width_with_mirrors }}</span>
                    </div>

                    <div class="flex justify-between border-b pb-2">
                        <span class="font-medium">Wheelbase</span>
                        <span>{{ $car?->wheelbase }}</span>
                    </div>
                    <div class="flex justify-between border-b pb-2">
                        <span class="font-medium">Gross Vehicle Weight (kg)</span>
                        <span>{{ $car?->gross_weight }}</span>
                    </div>

                    <div class="flex justify-between border-b pb-2">
                        <span class="font-medium">Height (including roof rails)</span>
                        <span>{{ $car?->height_with_rails }}</span>
                    </div>
                    <div class="flex justify-between border-b pb-2">
                        <span class="font-medium">Max. Loading Weight (kg)</span>
                        <span>{{ $car?->max_loading_weight }}</span>
                    </div>

                    <div class="flex justify-between border-b pb-2">
                        <span class="font-medium">Luggage Capacity (Seats Up - Litres)</span>
                        <span>{{ $car?->luggage_capacity_seats_up }}</span>
                    </div>
                    <div class="flex justify-between border-b pb-2">
                        <span class="font-medium">Max. Roof Load (kg)</span>
                        <span>{{ $car?->max_roof_load }}</span>
                    </div>

                    <div class="flex justify-between border-b pb-2">
                        <span class="font-medium">Luggage Capacity (Seats Down - Litres)</span>
                        <span>{{ $car?->luggage_capacity_seats_down }}</span>
                    </div>
                    <div class="flex justify-between border-b pb-2">
                        <span class="font-medium">No. of Seats</span>
                        <span>{{ $car?->seats }}</span>
                    </div>
                </div>
            </div>

            <hr class="my-8 border-gray-200">

            <!-- Engine and Transmission Section -->
            <div class="mb-8">
                <h2 class="text-3xl font-bold mb-6">Engine and Transmission</h2>

                <div class="grid grid-cols-2 gap-4">
                    <div class="flex justify-between border-b pb-2">
                        <span class="font-medium">Fuel Tank Capacity (Litres)</span>
                        <span>{{ $car?->fuel_tank_capacity }}</span>
                    </div>
                    <div class="flex justify-between border-b pb-2">
                        <span class="font-medium">Minimum Kerbweight (kg)</span>
                        <span>{{ $car?->min_kerb_weight }}</span>
                    </div>

                    <div class="flex justify-between border-b pb-2">
                        <span class="font-medium">Max. Towing Weight - Braked (kg)</span>
                        <span>{{ $car?->max_towing_weight_braked }}</span>
                    </div>
                    <div class="flex justify-between border-b pb-2">
                        <span class="font-medium">Turning Circle - Kerb to Kerb (m)</span>
                        <span>6500</span>
                    </div>

                    <div class="flex justify-between border-b pb-2">
                        <span class="font-medium">Max. Towing Weight - Unbraked (kg)</span>
                        <span>{{ $car?->max_towing_weight_unbraked }}</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="max-w-4xl mx-auto p-6">
            {{-- <div class="mb-12">
                <h2 class="text-3xl font-bold mb-4">Location</h2>

                <p class="text-lg mb-2">{{ $car?->dealer?->address }}</p>

                <a href="#" class="inline-flex items-center text-blue-600 mb-4 hover:text-blue-800">
                    Get Direction
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1" viewBox="0 0 20 20"
                        fill="currentColor">
                        <path fill-rule="evenodd"
                            d="M10.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L12.586 11H5a1 1 0 110-2h7.586l-2.293-2.293a1 1 0 010-1.414z"
                            clip-rule="evenodd" />
                    </svg>
                </a>

                <div class="relative w-full h-96 border rounded-lg overflow-hidden shadow-md">
                    <!-- Map container -->
                    <div class="absolute inset-0 bg-gray-200">
                        <!-- Placeholder for the actual map -->
                        <img src="/api/placeholder/900/500" alt="Map of Kawempe, Tula"
                            class="w-full h-full object-cover" />

                        <!-- Zoom Controls -->
                        <div class="absolute left-4 top-4 flex flex-col bg-white rounded shadow">
                            <button class="p-1 border-b hover:bg-gray-100">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                                </svg>
                            </button>
                            <button class="p-1 hover:bg-gray-100">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M18 12H6" />
                                </svg>
                            </button>
                        </div>

                        <!-- Location Pin -->
                        <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
                            <div class="w-12 h-12 bg-blue-600 rounded-full flex items-center justify-center shadow-lg">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>
                            </div>
                        </div>

                        <!-- Attribution -->
                        <div
                            class="absolute right-1 bottom-1 text-xs text-gray-700 bg-white bg-opacity-75 px-1 rounded">
                            Leaflet | © OpenStreetMap contributors
                        </div>
                    </div>
                </div>
            </div> --}}

            <!-- Financing Calculator Section -->
            <div class="mb-12">
                <h2 class="text-3xl font-bold mb-6">Financing Calculator</h2>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-6">
                    <div class="w-full">
                        <label class="block text-gray-700 text-sm font-medium mb-2">Price (Ugx)</label>
                        <input type="text" value="10000"
                            class="w-full p-3 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-600">
                    </div>

                    <div class="w-full">
                        <label class="block text-gray-700 text-sm font-medium mb-2">Interest Rate</label>
                        <input type="text" value="10"
                            class="w-full p-3 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-600">
                    </div>

                    <div class="w-full">
                        <label class="block text-gray-700 text-sm font-medium mb-2">Loan Term (year)</label>
                        <input type="text" value="3"
                            class="w-full p-3 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-600">
                    </div>

                    <div class="w-full">
                        <label class="block text-gray-700 text-sm font-medium mb-2">Down Payment</label>
                        <input type="text" value="5000"
                            class="w-full p-3 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-600">
                    </div>
                </div>

                <div class="flex">
                    <button
                        class="bg-blue-600 hover:bg-blue-700 text-white font-medium py-3 px-8 rounded-md flex items-center">
                        Calculate
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-2" viewBox="0 0 20 20"
                            fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M10.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L12.586 11H5a1 1 0 110-2h7.586l-2.293-2.293a1 1 0 010-1.414z"
                                clip-rule="evenodd" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="max-w-4xl mx-auto p-6">
            <!-- Reviews Header -->
            <h2 class="text-3xl font-bold mb-8">{{ $car?->reviews->count() }} Reviews</h2>

            <!-- Ratings Overview -->
            <div class="flex flex-col md:flex-row items-start mb-12">
                <!-- Overall Rating Circle -->
                <div class="relative w-52 h-52 mb-6 md:mb-0 mr-8">
                    <div class="w-full h-full rounded-full border-[16px] border-blue-100"></div>

                    <div
                        class="absolute top-0 left-0 w-full h-full rounded-full border-[16px] border-blue-500 border-t-blue-500 border-r-blue-500 border-b-blue-500 border-l-blue-100">
                    </div>

                    <div class="absolute inset-0 flex flex-col items-center justify-center">
                        <span class="text-blue-500 text-sm">Overral Rating</span>

                        <span class="text-blue-500 text-6xl font-bold">
                            {{ round($car?->reviews->sum('rating') / $car?->reviews->count(), 1) }}</span>
                        <span class="text-blue-500 text-sm">Out of 5</span>
                    </div>
                </div>

                <!-- Rating Categories -->
                <div class="flex-1 grid grid-cols-1 md:grid-cols-2 gap-x-8 gap-y-4">
                    <!-- Column 1 -->
                    <div>
                        <!-- Comfort -->
                        <div class="mb-6">
                            <div class="flex justify-between mb-1">
                                <div>
                                    <span class="font-medium">Comfort</span>
                                    <p class="text-gray-600">Perfect</p>
                                </div>
                                <div class="flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-blue-500"
                                        viewBox="0 0 20 20" fill="currentColor">
                                        <path
                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                    </svg>
                                    <span class="ml-1 font-medium">5.0</span>
                                </div>
                            </div>
                            <div class="border-b border-gray-200"></div>
                        </div>

                        <!-- Exterior Styling -->
                        <div class="mb-6">
                            <div class="flex justify-between mb-1">
                                <div>
                                    <span class="font-medium">Exterior Styling</span>
                                    <p class="text-gray-600">Perfect</p>
                                </div>
                                <div class="flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-blue-500"
                                        viewBox="0 0 20 20" fill="currentColor">
                                        <path
                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                    </svg>
                                    <span class="ml-1 font-medium">5.0</span>
                                </div>
                            </div>
                            <div class="border-b border-gray-200"></div>
                        </div>

                        <!-- Performance -->
                        <div class="mb-6">
                            <div class="flex justify-between mb-1">
                                <div>
                                    <span class="font-medium">Performance</span>
                                    <p class="text-gray-600">Perfect</p>
                                </div>
                                <div class="flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-blue-500"
                                        viewBox="0 0 20 20" fill="currentColor">
                                        <path
                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                    </svg>
                                    <span class="ml-1 font-medium">5.0</span>
                                </div>
                            </div>
                            <div class="border-b border-gray-200"></div>
                        </div>
                    </div>

                    <!-- Column 2 -->
                    <div>
                        <!-- Interior Design -->
                        <div class="mb-6">
                            <div class="flex justify-between mb-1">
                                <div>
                                    <span class="font-medium">Interior Design</span>
                                    <p class="text-gray-600">Good</p>
                                </div>
                                <div class="flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-blue-500"
                                        viewBox="0 0 20 20" fill="currentColor">
                                        <path
                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                    </svg>
                                    <span class="ml-1 font-medium">4.5</span>
                                </div>
                            </div>
                            <div class="border-b border-gray-200"></div>
                        </div>

                        <!-- Value For The Money -->
                        <div class="mb-6">
                            <div class="flex justify-between mb-1">
                                <div>
                                    <span class="font-medium">Value For The Money</span>
                                    <p class="text-gray-600">Perfect</p>
                                </div>
                                <div class="flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-blue-500"
                                        viewBox="0 0 20 20" fill="currentColor">
                                        <path
                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                    </svg>
                                    <span class="ml-1 font-medium">5.0</span>
                                </div>
                            </div>
                            <div class="border-b border-gray-200"></div>
                        </div>

                        <!-- Reliability -->
                        <div class="mb-6">
                            <div class="flex justify-between mb-1">
                                <div>
                                    <span class="font-medium">Reliability</span>
                                    <p class="text-gray-600">Good</p>
                                </div>
                                <div class="flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-blue-500"
                                        viewBox="0 0 20 20" fill="currentColor">
                                        <path
                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                    </svg>
                                    <span class="ml-1 font-medium">4.5</span>
                                </div>
                            </div>
                            <div class="border-b border-gray-200"></div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Individual Reviews -->
            <div class="space-y-8">
                <div class="border-b pb-0">
                    @foreach ($car?->reviews as $review)
                        <div class="mb-6">
                            <div class="flex items-center mb-4">
                                {{-- <img src="/api/placeholder/48/48" alt="User Profile" class="w-12 h-12 rounded-full mr-4"> --}}
                                <div>
                                    <h3 class="font-bold text-lg">{{ $review?->reviewer_name }}</h3>
                                    <span class="text-gray-600">{{ $review?->created_at->format('F d, Y') }}</span>
                                </div>
                            </div>

                            <div class="flex text-blue-500 mb-3">
                                @for ($i = 0; $i < round($review?->rating); $i++)
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                        fill="currentColor">
                                        <path
                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                    </svg>
                                @endfor
                                <span class="ml-2 font-medium">{{ round($review?->rating, 1) }}</span>
                            </div>

                            <p class="text-gray-800">
                                {{ $review?->comment }}
                            </p>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    {{-- <section>
        <div class="max-w-4xl mx-auto p-6">
            <h1 class="text-3xl font-bold mb-8">Add a review</h1>

            <div class="grid md:grid-cols-2 gap-8 mb-8">
                <!-- Left Column -->
                <div class="space-y-6">
                    <div class="flex justify-between items-center">
                        <label class="text-lg font-medium">Comfort</label>
                        <div class="flex">
                            <svg class="w-5 h-5 text-blue-500" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118l-2.8-2.034c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                </path>
                            </svg>
                            <svg class="w-5 h-5 text-blue-500" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118l-2.8-2.034c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                </path>
                            </svg>
                            <svg class="w-5 h-5 text-blue-500" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118l-2.8-2.034c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                </path>
                            </svg>
                            <svg class="w-5 h-5 text-blue-500" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118l-2.8-2.034c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                </path>
                            </svg>
                            <svg class="w-5 h-5 text-blue-500" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118l-2.8-2.034c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                </path>
                            </svg>
                        </div>
                    </div>

                    <div class="flex justify-between items-center">
                        <label class="text-lg font-medium">Exterior Styling</label>
                        <div class="flex">
                            <svg class="w-5 h-5 text-blue-500" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118l-2.8-2.034c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                </path>
                            </svg>
                            <svg class="w-5 h-5 text-blue-500" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118l-2.8-2.034c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                </path>
                            </svg>
                            <svg class="w-5 h-5 text-blue-500" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118l-2.8-2.034c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                </path>
                            </svg>
                            <svg class="w-5 h-5 text-blue-500" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118l-2.8-2.034c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                </path>
                            </svg>
                            <svg class="w-5 h-5 text-blue-500" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118l-2.8-2.034c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                </path>
                            </svg>
                        </div>
                    </div>

                    <div class="flex justify-between items-center">
                        <label class="text-lg font-medium">Performance</label>
                        <div class="flex">
                            <svg class="w-5 h-5 text-blue-500" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118l-2.8-2.034c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                </path>
                            </svg>
                            <svg class="w-5 h-5 text-blue-500" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118l-2.8-2.034c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                </path>
                            </svg>
                            <svg class="w-5 h-5 text-blue-500" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118l-2.8-2.034c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                </path>
                            </svg>
                            <svg class="w-5 h-5 text-blue-500" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118l-2.8-2.034c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                </path>
                            </svg>
                            <svg class="w-5 h-5 text-blue-500" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118l-2.8-2.034c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                </path>
                            </svg>
                        </div>
                    </div>
                </div>

                <!-- Right Column -->
                <div class="space-y-6">
                    <div class="flex justify-between items-center">
                        <label class="text-lg font-medium">Interior Design</label>
                        <div class="flex">
                            <svg class="w-5 h-5 text-blue-500" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118l-2.8-2.034c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                </path>
                            </svg>
                            <svg class="w-5 h-5 text-blue-500" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118l-2.8-2.034c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                </path>
                            </svg>
                            <svg class="w-5 h-5 text-blue-500" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118l-2.8-2.034c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                </path>
                            </svg>
                            <svg class="w-5 h-5 text-blue-500" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118l-2.8-2.034c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                </path>
                            </svg>
                            <svg class="w-5 h-5 text-blue-500" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118l-2.8-2.034c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                </path>
                            </svg>
                        </div>
                    </div>

                    <div class="flex justify-between items-center">
                        <label class="text-lg font-medium">Value For The Money</label>
                        <div class="flex">
                            <svg class="w-5 h-5 text-blue-500" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118l-2.8-2.034c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                </path>
                            </svg>
                            <svg class="w-5 h-5 text-blue-500" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118l-2.8-2.034c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                </path>
                            </svg>
                            <svg class="w-5 h-5 text-blue-500" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118l-2.8-2.034c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                </path>
                            </svg>
                            <svg class="w-5 h-5 text-blue-500" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118l-2.8-2.034c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                </path>
                            </svg>
                            <svg class="w-5 h-5 text-blue-500" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118l-2.8-2.034c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                </path>
                            </svg>
                        </div>
                    </div>

                    <div class="flex justify-between items-center">
                        <label class="text-lg font-medium">Reliability</label>
                        <div class="flex">
                            <svg class="w-5 h-5 text-blue-500" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118l-2.8-2.034c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                </path>
                            </svg>
                            <svg class="w-5 h-5 text-blue-500" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118l-2.8-2.034c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                </path>
                            </svg>
                            <svg class="w-5 h-5 text-blue-500" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118l-2.8-2.034c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                </path>
                            </svg>
                            <svg class="w-5 h-5 text-blue-500" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118l-2.8-2.034c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                </path>
                            </svg>
                            <svg class="w-5 h-5 text-blue-500" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118l-2.8-2.034c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                </path>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex justify-center mt-6">
            <button
                class="bg-blue-500 text-white font-semibold py-2 px-4 rounded shadow hover:bg-blue-600 transition duration-300"
                wire:click="submitRating">
                Submit Rating
            </button>
    </section> --}}

    <livewire:site.footer />

</div>
