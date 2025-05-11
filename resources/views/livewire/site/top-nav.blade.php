<nav class="bg-gray-900 shadow-md">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex-shrink-0 flex items-center">
                <!-- Replace with your logo -->
                <a href="{{ route('site.index') }}" class="text-white font-bold text-xl">{{ config('app.name') }}</a>
            </div>

            <!-- Desktop Navigation Menu -->
            <div class="hidden md:flex items-center">
                <div class="ml-10 flex items-baseline space-x-4">
                    <a href="{{ route('site.index') }}"
                        class="text-white hover:bg-gray-800 px-3 py-2 rounded-md font-medium">Home</a>
                    <a href="{{ route('site.car-listings') }}"
                        class="text-gray-300 hover:bg-gray-800 hover:text-white px-3 py-2 rounded-md font-medium">Browse
                        Cars</a>
                    <a href="{{ url('/dealer') }}" target="_blank"
                        class="text-gray-300 hover:bg-gray-800 hover:text-white px-3 py-2 rounded-md font-medium">Sell
                        Your Car</a>
                    <a href="{{ route('site.about-us') }}"
                        class="text-gray-300 hover:bg-gray-800 hover:text-white px-3 py-2 rounded-md font-medium">About
                        Us</a>
                    <a href="{{ route('site.contact-us') }}"
                        class="text-gray-300 hover:bg-gray-800 hover:text-white px-3 py-2 rounded-md font-medium">Contact</a>
                </div>
            </div>

            <!-- Mobile menu button -->
            <div class="flex md:hidden items-center">
                <button type="button"
                    class="mobile-menu-button bg-gray-800 inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-white hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white"
                    aria-controls="mobile-menu" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <!-- Icon when menu is closed -->
                    <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                    <!-- Icon when menu is open -->
                    <svg class="hidden h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile menu, show/hide based on menu state -->
    <div class="md:hidden hidden" id="mobile-menu">
        <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3">
            <a href="{{ route('site.index') }}"
                class="bg-gray-800 text-white block px-3 py-2 rounded-md text-base font-medium">Home</a>
            <a href="{{ route('site.car-listings') }}"
                class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Browse
                Cars</a>
            <a href="#"
                class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Sell
                Your Car</a>
            <a href="/#why-choose-us"
                class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">About
                Us</a>
            <a href="#"
                class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Contact</a>
        </div>
    </div>

    <script>
        // Add this script to handle the mobile menu toggle
        document.addEventListener('DOMContentLoaded', function() {
            const mobileMenuButton = document.querySelector('.mobile-menu-button');
            const mobileMenu = document.getElementById('mobile-menu');

            mobileMenuButton.addEventListener('click', function() {
                // Toggle the menu
                mobileMenu.classList.toggle('hidden');

                // Toggle the icon
                const menuOpenIcon = mobileMenuButton.querySelector('svg:first-child');
                const menuCloseIcon = mobileMenuButton.querySelector('svg:last-child');

                menuOpenIcon.classList.toggle('hidden');
                menuOpenIcon.classList.toggle('block');
                menuCloseIcon.classList.toggle('hidden');
                menuCloseIcon.classList.toggle('block');
            });
        });
    </script>
</nav>
