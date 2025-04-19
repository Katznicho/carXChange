<div>
    <livewire:site.top-nav />

    <div class="mx-auto px-4">
        {{-- <nav class="py-4">
            <div class="flex items-center text-gray-600 text-sm">
                <a href="#" class="hover:text-gray-900">Home</a>
                <span class="mx-2">/</span>
                <span class="text-gray-900 font-medium">Cars for sale</span>
            </div>
        </nav> --}}

        {{-- <header class="mb-8">
            <h1 class="text-5xl font-bold text-gray-900">Cars for sale</h1>
        </header> --}}

        <div class="w-full relative overflow-hidden rounded-lg mb-8">
            {{-- <img src="https://images.unsplash.com/photo-1617531653332-bd46c24f2068?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80"
                alt="Background mountains and luxury home" class="w-full object-cover h-96" />

            <div class="absolute inset-0 flex flex-col justify-end p-8">
                <div class="bg-black bg-opacity-70 p-6 max-w-md">
                    <h2 class="text-white text-5xl font-bold leading-tight">
                        Imagine the
                        <br>
                        possibilities
                    </h2>
                </div>
            </div> --}}

            {{-- <div class="absolute bottom-0 left-0 bg-black bg-opacity-80 p-4 flex items-center">
                <div class="mr-4">
                    <svg class="w-12 h-12 text-white" viewBox="0 0 50 50" fill="currentColor">
                        <circle cx="25" cy="25" r="20" fill="none" stroke="currentColor"
                            stroke-width="2" />
                        <path d="M15,25 L35,25 M25,15 L25,35" stroke="none" fill="currentColor" />
                    </svg>
                </div>
                <div class="text-white">
                    <p class="text-xs uppercase tracking-wider">SPONSORED: 2025 Nissan Rogue ↗</p>
                    <p class="text-sm">Pick your ride.</p>
                </div>
            </div> --}}
        </div>
    </div>


    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h1 class="text-4xl font-bold">Advanced search</h1>

        <p class="text-xl font-medium text-gray-800 mb-4">12,500+ matches</p>

        <div class="relative max-w-sm flex my-1">
            <div>
                <label class="block text-sm font-medium text-gray-900">Category</label>

                <select wire:model.live.debounce.500ms='filtered_category'
                    class="mr-2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-indigo-500 focus:border-indigo-500 block p-2.5">
                    <option value="">Choose an option</option>

                    @foreach ($categories as $category)
                        <option value="{{ $category?->id }}">{{ $category?->name }}</option>
                    @endforeach
                </select>
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-900">Brand</label>

                <select wire:model.live.debounce.500ms='filtered_brand'
                    class="mr-2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-indigo-500 focus:border-indigo-500 block p-2.5">
                    <option value="">Choose an option</option>

                    @foreach ($brands as $bIndex => $b)
                        <option value="{{ $brands[$bIndex] }}">{{ $brands[$bIndex] }}</option>
                    @endforeach
                </select>
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-900">Condition</label>

                <select wire:model.live.debounce.500ms='filtered_condition'
                    class="mr-2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-indigo-500 focus:border-indigo-500 block p-2.5">
                    <option value="">Choose an option</option>

                    <option value="new">New</option>
                    <option value="used">Used</option>
                    <option value="certified">Certified</option>
                </select>
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-900">Min year</label>

                <select wire:model.live.debounce.500ms='filtered_min_year'
                    class="mr-2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-indigo-500 focus:border-indigo-500 block p-2.5">
                    <option value="">Choose an option</option>

                    @for ($year = now()->year; $year >= now()->year - 30; $year--)
                        <option value="{{ $year }}">{{ $year }}</option>
                    @endfor
                </select>
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-900">Max year</label>

                <select wire:model.live.debounce.500ms='filtered_max_year'
                    class="mr-2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-indigo-500 focus:border-indigo-500 block p-2.5">
                    <option value="">Choose an option</option>

                    @for ($year = now()->year; $year >= now()->year - 30; $year--)
                        <option value="{{ $year }}">{{ $year }}</option>
                    @endfor
                </select>
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-900">Transmission</label>

                <select wire:model.live.debounce.500ms='filtered_transmission'
                    class="mr-2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-indigo-500 focus:border-indigo-500 block p-2.5">
                    <option value="">Choose an option</option>

                    <option value="automatic">Automatic</option>
                    <option value="manual">Manual</option>
                </select>
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-900">Fuel type</label>

                <select wire:model.live.debounce.500ms='filtered_fuel_type'
                    class="mr-2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-indigo-500 focus:border-indigo-500 block p-2.5">
                    <option value="">Choose an option</option>

                    <option value="automatic">Automatic</option>
                    <option value="manual">Manual</option>
                </select>
            </div>

            {{-- <div>
                <label class="block text-sm font-medium text-gray-900">Mileage</label>

                <select wire:model.live.debounce.500ms='filtered_mileage'
                    class="mr-2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-indigo-500 focus:border-indigo-500 block p-2.5">
                    <option value="">Choose an option</option>

                    <option value="2025">2025</option>
                    <option value="2024">2024</option>
                    <option value="2023">2023</option>
                    <option value="2022">2022</option>
                    <option value="2021">2021</option>
                    <option value="2020">2020</option>
                    <option value="2019">2019</option>
                    <option value="2018">2018</option>
                </select>
            </div> --}}
        </div>

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


    <section class="pt-9 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-900 mb-4">Browse For All Vehicles</h2>
                <p class="text-lg text-gray-600 max-w-2xl mx-auto">Discover our hand-picked selection of premium
                    vehicles, each thoroughly inspected and ready for their new owner.</p>
            </div>

            <div class="max-w-7xl mx-auto px-4 py-8">
                <!-- Car Listing Cards Grid -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                    @foreach ($cars as $car)
                        <div wire:key={{ $car->id }} class="bg-white rounded-lg overflow-hidden shadow">
                            <!-- Card Image with Badge and Bookmark -->
                            <div class="relative">
                                @if ($car?->images)
                                    <img src="{{ Storage::url($car?->images[0]) }}" alt="Toyota Camry"
                                        class="w-full h-64 object-fit-cover">
                                @else
                                    <img src="{{ asset('assets/car_placeholder.png') }}" alt="Toyota Camry"
                                        class="w-full h-64 object-fit-cover">
                                @endif

                                @if ($car->is_featured)
                                    <div class="absolute top-4 left-4">
                                        <span
                                            class="bg-green-600 text-white px-4 py-2 rounded-full text-sm font-medium">
                                            Great Price
                                        </span>
                                    </div>
                                @endif

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
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5"
                                                viewBox="0 0 20 20" fill="currentColor">
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
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5"
                                                viewBox="0 0 20 20" fill="currentColor">
                                                <path fill-rule="evenodd"
                                                    d="M3 6a3 3 0 013-3h10a1 1 0 011 1v10a2 2 0 01-2 2H5a3 3 0 01-3-3V6zm3-1a1 1 0 00-1 1v7a1 1 0 001 1h10V5H6z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                        </div>

                                        <span class="text-sm">{{ ucfirst($car?->fuel_type) }}</span>

                                    </div>

                                    <div class="flex flex-col items-center">
                                        <div class="bg-gray-100 p-2 rounded-full mb-1">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5"
                                                viewBox="0 0 20 20" fill="currentColor">
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

                                    <a href="{{ route('site.car.details', $car?->slug) }}"
                                        class="text-blue-600 font-medium flex items-center">
                                        Details

                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1"
                                            viewBox="0 0 20 20" fill="currentColor">
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
        </div>
    </section>




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

    <livewire:site.footer />
</div>
