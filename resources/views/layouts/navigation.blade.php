<nav class="bg-white border-b border-gray-100">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->
                <div class="flex-shrink-0 flex items-center">
                    <a href="#" class="text-xl font-bold text-gray-800">
                        CarXChange
                    </a>
                </div>
            </div>
            
            <!-- Desktop Navigation Links -->
            <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                <a href="#" class="inline-flex items-center px-1 pt-1 text-gray-500 hover:text-gray-900">Browse Cars</a>
                <a href="#" class="inline-flex items-center px-1 pt-1 text-gray-500 hover:text-gray-900">Sell Your Car</a>
                <a href="#" class="inline-flex items-center px-1 pt-1 text-gray-500 hover:text-gray-900">About Us</a>
                <a href="#" class="inline-flex items-center px-1 pt-1 text-gray-500 hover:text-gray-900">Contact</a>
            </div>

            <!-- Mobile menu button -->
            <div class="flex items-center sm:hidden">
                <button type="button" @click="mobileMenuOpen = !mobileMenuOpen" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100">
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile menu -->
    <div x-show="mobileMenuOpen" class="sm:hidden" x-cloak>
        <div class="pt-2 pb-3 space-y-1">
            <a href="#" class="block pl-3 pr-4 py-2 text-base font-medium text-gray-500 hover:text-gray-900 hover:bg-gray-50">Browse Cars</a>
            <a href="#" class="block pl-3 pr-4 py-2 text-base font-medium text-gray-500 hover:text-gray-900 hover:bg-gray-50">Sell Your Car</a>
            <a href="#" class="block pl-3 pr-4 py-2 text-base font-medium text-gray-500 hover:text-gray-900 hover:bg-gray-50">About Us</a>
            <a href="#" class="block pl-3 pr-4 py-2 text-base font-medium text-gray-500 hover:text-gray-900 hover:bg-gray-50">Contact</a>
        </div>
    </div>
</nav>

<!-- Add Alpine.js for mobile menu toggle -->
<script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
<script>
    document.addEventListener('alpine:init', () => {
        Alpine.data('navigation', () => ({
            mobileMenuOpen: false
        }))
    })
</script>