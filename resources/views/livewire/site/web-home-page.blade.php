<div>
    <!-- Hero Section -->
    <x-hero />

    <div class="max-w-7xl mx-auto px-4 py-8">
        <h1 class="text-3xl font-bold text-gray-900 mb-6">Popular categories</h1>

        <!-- Category Pills -->
        <div class="flex items-center space-x-3 overflow-x-auto pb-4 mb-8">
            <button class="whitespace-nowrap px-6 py-3 rounded-full text-sm font-medium bg-black text-white">
                Electric
            </button>
            <button
                class="whitespace-nowrap px-6 py-3 rounded-full text-sm font-medium bg-gray-200 text-gray-800 hover:bg-gray-200">
                SUV
            </button>
            <button
                class="whitespace-nowrap px-6 py-3 rounded-full text-sm font-medium bg-gray-200 text-gray-800 hover:bg-gray-200">
                Sedan
            </button>
            <button
                class="whitespace-nowrap px-6 py-3 rounded-full text-sm font-medium bg-gray-200 text-gray-800 hover:bg-gray-200">
                Pickup Truck
            </button>
            <button
                class="whitespace-nowrap px-6 py-3 rounded-full text-sm font-medium bg-gray-200 text-gray-800 hover:bg-gray-200">
                Luxury
            </button>
            <button
                class="whitespace-nowrap px-6 py-3 rounded-full text-sm font-medium bg-gray-200 text-gray-800 hover:bg-gray-200">
                Crossover
            </button>
            <button
                class="whitespace-nowrap px-6 py-3 rounded-full text-sm font-medium bg-gray-200 text-gray-800 hover:bg-gray-200">
                Hybrid
            </button>
            <button
                class="whitespace-nowrap px-6 py-3 rounded-full text-sm font-medium bg-gray-200 text-gray-800 hover:bg-gray-200">
                Diesel
            </button>
            <button
                class="whitespace-nowrap px-6 py-3 rounded-full text-sm font-medium bg-gray-200 text-gray-800 hover:bg-gray-200">
                Coupe
            </button>
            <button
                class="whitespace-nowrap px-6 py-3 rounded-full text-sm font-medium bg-gray-200 text-gray-800 hover:bg-gray-200">
                Hatchback
            </button>
            <button
                class="whitespace-nowrap px-6 py-3 rounded-full text-sm font-medium bg-gray-200 text-gray-800 hover:bg-gray-200">
                Wagon
            </button>
            <button
                class="whitespace-nowrap px-6 py-3 rounded-full text-sm font-medium bg-gray-200 text-gray-800 hover:bg-gray-200">
                Convertible
            </button>
            <button class="flex items-center justify-center w-10 h-10 rounded-full bg-gray-100 text-gray-800">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                </svg>
            </button>
        </div>

        <!-- EV Card Grid -->
        <div class="grid grid-cols-1 md:grid-cols-5 gap-4">
            <!-- Left Panel -->
            {{-- <div class="bg-white p-6">
                <h2 class="text-3xl font-bold mb-4">All new EVs</h2>
                <p class="text-gray-700 mb-6">Experience the best way to search new cars</p>
                <a href="#" class="font-medium">Shop new cars</a>
            </div> --}}

            <!-- Car Cards -->
            <!-- Tesla Model 3 -->
            <div class="bg-white p-4">
                <img src="https://cdn.pixabay.com/photo/2012/04/12/23/47/car-30984_1280.png" alt="Tesla Model 3"
                    class="w-full h-auto mb-4">
                <h3 class="font-medium mb-2">Tesla Model 3</h3>
                <a href="#" class="font-medium">Shop now</a>
            </div>

            <!-- Tesla Model S -->
            <div class="bg-white p-4">
                <img src="https://cdn.pixabay.com/photo/2016/05/18/10/52/buick-1400243_1280.jpg" alt="Tesla Model S"
                    class="w-full h-auto mb-4">
                <h3 class="font-medium mb-2">Tesla Model S</h3>
                <a href="#" class="font-medium">Shop now</a>
            </div>

            <!-- Nissan Leaf -->
            <div class="bg-white p-4">
                <img src="https://cdn.pixabay.com/photo/2013/07/12/12/45/car-146185_1280.png" alt="Nissan Leaf"
                    class="w-full h-auto mb-4">
                <h3 class="font-medium mb-2">Nissan Leaf</h3>
                <a href="#" class="font-medium">Shop now</a>
            </div>

            <!-- Tesla Model Y -->
            <div class="bg-white p-4">
                <img src="https://cdn.pixabay.com/photo/2012/04/12/23/48/car-30990_1280.png" alt="Tesla Model Y"
                    class="w-full h-auto mb-4">
                <h3 class="font-medium mb-2">Tesla Model Y</h3>
                <a href="#" class="font-medium">Shop now</a>
            </div>

            <!-- Second Row -->
            <!-- Ford Mustang Mach-E -->
            <div class="bg-white p-4">
                <img src="https://cdn.pixabay.com/photo/2017/01/06/05/28/car-1957037_1280.jpg" alt="Ford Mustang Mach-E"
                    class="w-full h-auto mb-4">
                <h3 class="font-medium mb-2">Ford Mustang Mach-E</h3>
                <a href="#" class="font-medium">Shop now</a>
            </div>

            <!-- Ford F-150 Lightning -->
            <div class="bg-white p-4">
                <img src="https://cdn.pixabay.com/photo/2016/05/05/18/03/coupe-1374448_1280.jpg"
                    alt="Ford F-150 Lightning" class="w-full h-auto mb-4">
                <h3 class="font-medium mb-2">Ford F-150 Lightning</h3>
                <a href="#" class="font-medium">Shop now</a>
            </div>

            <!-- BMW i3 -->
            <div class="bg-white p-4">
                <img src="https://cdn.pixabay.com/photo/2012/04/12/23/47/car-30984_1280.png" alt="BMW i3"
                    class="w-full h-auto mb-4">
                <h3 class="font-medium mb-2">BMW i3</h3>
                <a href="#" class="font-medium">Shop now</a>
            </div>

            <!-- Volkswagen ID.4 -->
            <div class="bg-white p-4">
                <img src="https://cdn.pixabay.com/photo/2012/04/12/23/47/car-30984_1280.png" alt="Volkswagen ID.4"
                    class="w-full h-auto mb-4">
                <h3 class="font-medium mb-2">Volkswagen ID.4</h3>
                <a href="#" class="font-medium">Shop now</a>
            </div>

            <!-- EV Information Banner -->
            <div class="bg-white p-4">
                <img src="https://cdn.pixabay.com/photo/2012/04/12/23/47/car-30984_1280.png" alt="EV Information"
                    class="w-full h-auto mb-4">
                <h3 class="font-medium mb-2">What to know before purchasing an EV</h3>
                <a href="#" class="font-medium">Watch EV101 Series Now</a>
            </div>
        </div>
    </div>


    <!-- Featured Cars Section -->
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-900 mb-4">Featured Vehicles</h2>
                <p class="text-lg text-gray-600 max-w-2xl mx-auto">Discover our hand-picked selection of premium
                    vehicles, each thoroughly inspected and ready for their new owner.</p>
            </div>

            <div class="max-w-7xl mx-auto px-4 py-8">
                <!-- Car Listing Cards Grid -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">

                    <!-- Toyota Camry Card -->
                    <div class="bg-white rounded-lg overflow-hidden shadow">
                        <!-- Card Image with Badge and Bookmark -->
                        <div class="relative">
                            <img src="https://cdn.pixabay.com/photo/2013/08/29/04/37/automobile-176989_1280.jpg"
                                alt="Toyota Camry" class="w-full h-64 object-cover">
                            <div class="absolute top-4 left-4">
                                <span class="bg-green-600 text-white px-4 py-2 rounded-full text-sm font-medium">Great
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
                            <h3 class="text-xl font-semibold mb-1">Toyota Camry New</h3>
                            <p class="text-gray-600 text-sm mb-4">3.5 D5 PowerPulse Momentum 5dr AWD Geartronic</p>

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
                                    <span class="text-sm">20 Miles</span>
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
                                    <span class="text-sm">Petrol</span>
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
                                    <span class="text-sm">Automatic</span>
                                </div>
                            </div>

                            <!-- Price and CTA -->
                            <div class="flex items-center justify-between">
                                <span class="text-lg font-bold"><span class="text-[0.7rem]">UGX</span> 40,000,000</span>
                                
                                <a href="{{ route('site.car.details') }}" class="text-blue-600 font-medium flex items-center">
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

                    <!-- T-Cross Card -->
                    <div class="bg-white rounded-lg overflow-hidden shadow">
                        <!-- Card Image with Bookmark -->
                        <div class="relative">
                            <img src="https://cdn.pixabay.com/photo/2016/11/22/23/55/car-1851299_1280.jpg"
                                alt="T-Cross" class="w-full h-64 object-cover">

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
                            <h3 class="text-xl font-semibold mb-1">T-Cross – 2023</h3>
                            <p class="text-gray-600 text-sm mb-4">4.0 D5 PowerPulse Momentum 5dr AWD Geartronic</p>

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
                                    <span class="text-sm">15 Miles</span>
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
                                    <span class="text-sm">Petrol</span>
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
                                    <span class="text-sm">CVT</span>
                                </div>
                            </div>

                            <!-- Price and CTA -->
                            <div class="flex items-center justify-between">
                                <span class="text-lg font-bold"><span class="text-[0.7rem]">UGX</span> 40,000,000</span>
                                
                                <a href="#" class="text-blue-600 font-medium flex items-center">
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

                    <!-- C-Class Card -->
                    <div class="bg-white rounded-lg overflow-hidden shadow">
                        <!-- Card Image with Bookmark -->
                        <div class="relative">
                            <img src="https://cdn.pixabay.com/photo/2012/11/02/13/02/car-63930_1280.jpg"
                                alt="C-Class" class="w-full h-64 object-cover">

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
                            <h3 class="text-xl font-semibold mb-1">C-Class – 2023</h3>
                            <p class="text-gray-600 text-sm mb-4">4.0 D5 PowerPulse Momentum 5dr AWD Geartronic</p>

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
                                    <span class="text-sm">50 Miles</span>
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
                                    <span class="text-sm">Petrol</span>
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
                                    <span class="text-sm">Automatic</span>
                                </div>
                            </div>

                            <!-- Price and CTA -->
                            <div class="flex items-center justify-between">
                                <span class="text-lg font-bold"><span class="text-[0.7rem]">UGX</span> 40,000,000</span>
                                
                                <a href="#" class="text-blue-600 font-medium flex items-center">
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

                    <!-- Ford Transit Card -->
                    <div class="bg-white rounded-lg overflow-hidden shadow">
                        <!-- Card Image with Badge and Bookmark -->
                        <div class="relative">
                            <img src="https://cdn.pixabay.com/photo/2015/01/19/13/51/car-604019_1280.jpg"
                                alt="Ford Transit" class="w-full h-64 object-cover">
                            <div class="absolute top-4 left-4">
                                <span class="bg-green-600 text-white px-4 py-2 rounded-full text-sm font-medium">Great
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
                            <h3 class="text-xl font-semibold mb-1">Ford Transit – 2021</h3>
                            <p class="text-gray-600 text-sm mb-4">4.0 D5 PowerPulse Momentum 5dr AWD Geartronic</p>

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
                                    <span class="text-sm">2500 Miles</span>
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
                                    <span class="text-sm">Diesel</span>
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
                                    <span class="text-sm">Manual</span>
                                </div>
                            </div>

                            <!-- Price and CTA -->
                            <div class="flex items-center justify-between">
                                <span class="text-lg font-bold"><span class="text-[0.7rem]">UGX</span> 40,000,000</span>
                                
                                <a href="#" class="text-blue-600 font-medium flex items-center">
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

                </div>
            </div>

            <!-- View All Vehicles Button Container -->
            <div class="max-w-7xl mx-auto px-4 py-8 flex justify-center">
                <!-- View All Button -->
                <a href="#"
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

            {{-- <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <x-cars.featured-car :car="[
                    'name' => 'Mercedes-Benz C-Class',
                    'price' => 45000,
                    'year' => '2023',
                    'mileage' => '15,000',
                    'transmission' => 'Automatic',
                    'image' =>
                        'https://images.unsplash.com/photo-1617531653332-bd46c24f2068?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80',
                ]" />

                <x-cars.featured-car :car="[
                    'name' => 'BMW 3 Series',
                    'price' => 42000,
                    'year' => '2022',
                    'mileage' => '20,000',
                    'transmission' => 'Automatic',
                    'image' =>
                        'https://images.unsplash.com/photo-1555215695-3004980ad54e?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80',
                ]" />

                <x-cars.featured-car :car="[
                    'name' => 'Audi A4',
                    'price' => 39000,
                    'year' => '2023',
                    'mileage' => '12,000',
                    'transmission' => 'Automatic',
                    'image' =>
                        'https://images.unsplash.com/photo-1606664515524-ed2f786a0bd6?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80',
                ]" />
            </div> --}}

            {{-- <div class="text-center mt-12">
                <a href="#"
                    class="inline-flex items-center px-6 py-3 border border-transparent text-base font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700">
                    View All Vehicles
                    <svg class="ml-2 -mr-1 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M17 8l4 4m0 0l-4 4m4-4H3" />
                    </svg>
                </a>
            </div> --}}
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
            <!-- News Item 1 -->
            <div
                class="group relative overflow-hidden rounded-lg shadow-lg bg-white hover:shadow-xl transition duration-300">
                <div class="relative h-64 overflow-hidden">
                    <img src="https://cdn.pixabay.com/photo/2016/05/05/18/02/coupe-1374444_1280.jpg"
                        alt="Mercedes AMG CLE53"
                        class="w-full h-full object-cover transition duration-300 group-hover:scale-105">

                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent"></div>
                </div>
                <div class="absolute bottom-0 left-0 right-0 p-6">
                    <h3 class="text-xl font-bold text-white">Sticker-Tape Parade: Mercedes Announces 2026 AMG CLE53
                        Manufaktur Editions</h3>
                </div>
                <a href="#" class="absolute inset-0" aria-label="Read article about Mercedes AMG CLE53"></a>
            </div>

            <!-- News Item 2 -->
            <div
                class="group relative overflow-hidden rounded-lg shadow-lg bg-white hover:shadow-xl transition duration-300">
                <div class="relative h-64 overflow-hidden">
                    <img src="https://cdn.pixabay.com/photo/2017/03/05/15/29/aston-martin-2118857_1280.jpg"
                        alt="BMW M2"
                        class="w-full h-full object-cover transition duration-300 group-hover:scale-105">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent"></div>
                </div>
                <div class="absolute bottom-0 left-0 right-0 p-6">
                    <h3 class="text-xl font-bold text-white">How Are Automakers Responding to Trump's Tariffs?</h3>
                </div>
                <a href="#" class="absolute inset-0"
                    aria-label="Read article about automakers responding to tariffs"></a>
            </div>

            <!-- News Item 3 -->
            <div
                class="group relative overflow-hidden rounded-lg shadow-lg bg-white hover:shadow-xl transition duration-300">
                <div class="relative h-64 overflow-hidden">
                    <img src="https://cdn.pixabay.com/photo/2019/05/04/23/54/aston-martin-vantage-2019-4179420_1280.jpg"
                        alt="Volkswagen GLI"
                        class="w-full h-full object-cover transition duration-300 group-hover:scale-105">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent"></div>
                </div>
                <div class="absolute bottom-0 left-0 right-0 p-6">
                    <h3 class="text-xl font-bold text-white">How Trump's 25% Tariffs on Automobiles, Automotive Parts
                        Will Affect You</h3>
                </div>
                <a href="#" class="absolute inset-0"
                    aria-label="Read article about tariffs on automobiles"></a>
            </div>

            <!-- News Item 4 -->
            <div
                class="group relative overflow-hidden rounded-lg shadow-lg bg-white hover:shadow-xl transition duration-300">
                <div class="relative h-64 overflow-hidden">
                    <img src="https://cdn.pixabay.com/photo/2023/07/29/16/42/car-8157299_1280.jpg" alt="Toyota Prius"
                        class="w-full h-full object-cover transition duration-300 group-hover:scale-105">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent"></div>
                </div>
                <div class="absolute bottom-0 left-0 right-0 p-6">
                    <h3 class="text-xl font-bold text-white">How Much Do Hybrids Currently Depreciate?</h3>
                </div>
                <a href="#" class="absolute inset-0" aria-label="Read article about hybrid depreciation"></a>
            </div>
        </div>

        <!-- View All Articles Button -->
        <div class="mt-8 text-center">
            <a href="#"
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
    <section class="py-16 bg-gray-100">
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
</div>
