<nav class="bg-dental-teal">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-16">
            <!-- Logo -->
            <div class="flex items-center">
                <div class="flex-shrink-0 flex items-center">
                    <div class="mr-3">
                        <img src="{{ asset('images/mentah/logo_denta_polos.png') }}" alt="DentaTime" class="w-12 h-12">
                    </div>
                    <span class="text-white font-bold text-3xl">DentaTime</span>
                </div>
            </div>

            <!-- Navigation Links -->
            <div class="hidden md:block">
                <div class="ml-10 flex items-baseline space-x-4">
                    <a href="#" class="text-white hover:bg-dental-teal px-3 py-2 rounded-md text-base font-medium transition-colors">
                        Home
                    </a>
                    <a href="#" class="text-white hover:bg-dental-teal px-3 py-2 rounded-md text-base font-medium transition-colors">
                        Pricing
                    </a>
                    <a href="#" class="text-white hover:bg-dental-teal px-3 py-2 rounded-md text-base font-medium transition-colors">
                        Contact
                    </a>
                </div>
            </div>

            <!-- Auth Buttons -->
            <div class="flex items-center space-x-4">
                <a href="#" class="text-white hover:text-gray-200 px-3 py-2 rounded-md text-base font-medium transition-colors">
                    Login
                </a>
                <a href="#" class="bg-dental-orange text-white hover:bg-dental-light-orange px-4 py-2 rounded-md text-base font-semibold transition-colors">
                    Signup
                </a>
            </div>

            <!-- Mobile menu button -->
            <div class="md:hidden">
                <button type="button" class="text-white hover:text-gray-200 focus:outline-none focus:text-gray-200" onclick="toggleMobileMenu()">
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
            </div>
        </div>

        <!-- Mobile menu -->
        <div id="mobile-menu" class="md:hidden hidden">
            <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3">
                <a href="#" class="text-white hover:bg-dental-teal block px-3 py-2 rounded-md text-base font-medium">
                    Home
                </a>
                <a href="#" class="text-white hover:bg-dental-teal block px-3 py-2 rounded-md text-base font-medium">
                    Pricing
                </a>
                <a href="#" class="text-white hover:bg-dental-teal block px-3 py-2 rounded-md text-base font-medium">
                    Contact
                </a>
                <a href="#" class="text-white hover:bg-dental-teal block px-3 py-2 rounded-md text-base font-medium">
                    Login
                </a>
                <a href="#" class="bg-dental-orange text-white hover:bg-dental-light-orange block px-3 py-2 rounded-md text-base font-medium">
                    Signup
                </a>
            </div>
        </div>
    </div>
</nav>

<script>
function toggleMobileMenu() {
    const mobileMenu = document.getElementById('mobile-menu');
    mobileMenu.classList.toggle('hidden');
}
</script>
