<div class="relative bg-gray-900 h-[600px]">
    <img src="https://images.unsplash.com/photo-1492144534655-ae79c964c9d7?ixlib=rb-1.2.1&auto=format&fit=crop&w=1920&q=80" 
         alt="Hero Car Image"
         class="absolute inset-0 w-full h-full object-cover opacity-50">
    
    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 h-full flex items-center">
        <div class="text-center md:text-left max-w-2xl">
            <h1 class="text-4xl md:text-6xl font-bold text-white mb-6">Find Your Dream Car</h1>
            <p class="text-xl text-gray-200 mb-8">Discover the perfect vehicle that matches your style and budget</p>
            
            <div class="flex flex-col sm:flex-row gap-4">
                <a href="{{ route('site.car-listings') }}" class="inline-block bg-blue-600 text-white px-8 py-3 rounded-md text-lg font-semibold hover:bg-blue-700 transition">
                    Browse Cars
                </a>
                <a href="#" class="inline-block bg-white text-gray-900 px-8 py-3 rounded-md text-lg font-semibold hover:bg-gray-100 transition">
                    Sell Your Car
                </a>
            </div>
        </div>
    </div>
</div>