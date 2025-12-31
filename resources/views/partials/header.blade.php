<header id="mainHeader" class="sticky top-0 z-50 bg-white transition-all duration-300">
    <div class="max-w-7xl mx-auto px-4">
        <div class="flex items-center justify-between h-16">

            <!-- Logo -->
            <a href="{{ url('/') }}" class="flex items-center">
                <img src="{{ asset('assets/images/logo.png') }}" alt="MyCompany Logo" class="h-8 sm:h-10 w-auto">
            </a>

            <!-- Desktop Navigation -->
            <nav class="hidden md:flex items-center gap-8 font-medium text-brand-gray relative">

                <a href="{{ url('/') }}" class="{{ request()->is('/') ? 'text-brand-red' : '' }} hover:text-brand-red transition">Home</a>
                <a href="{{ url('/about') }}" class="{{ request()->is('about') ? 'text-brand-red' : '' }} hover:text-brand-red transition">About</a>

                <!-- Services Dropdown -->
                <div class="relative group">
                    <button class="flex items-center gap-1 {{ request()->is('services*') ? 'text-brand-red' : '' }} hover:text-brand-red transition">
                        Services
                        <svg class="w-4 h-4 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-width="2" stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div class="absolute left-0 mt-2 w-48 bg-white border border-gray-200 rounded-md shadow-lg opacity-0 group-hover:opacity-100 invisible group-hover:visible transition-opacity">
                        <a href="{{ url('/services/it-consultation') }}" class="block px-4 py-2 text-gray-700 hover:bg-gray-100 {{ request()->is('services/it-consultation') ? 'text-brand-red font-semibold' : '' }}">IT Consultation</a>
                        <a href="{{ url('/services/web-software') }}" class="block px-4 py-2 text-gray-700 hover:bg-gray-100 {{ request()->is('services/web-software') ? 'text-brand-red font-semibold' : '' }}">Web & Software</a>
                        <a href="{{ url('/services/graphic-design') }}" class="block px-4 py-2 text-gray-700 hover:bg-gray-100 {{ request()->is('services/graphic-design') ? 'text-brand-red font-semibold' : '' }}">Graphic Design</a>
                        <a href="{{ url('/services/electronics') }}" class="block px-4 py-2 text-gray-700 hover:bg-gray-100 {{ request()->is('services/electronics') ? 'text-brand-red font-semibold' : '' }}">Electronics</a>
                        <a href="{{ url('/services/logistics') }}" class="block px-4 py-2 text-gray-700 hover:bg-gray-100 {{ request()->is('services/logistics') ? 'text-brand-red font-semibold' : '' }}">Logistics</a>
                        <a href="{{ url('/services/education') }}" class="block px-4 py-2 text-gray-700 hover:bg-gray-100 {{ request()->is('services/education') ? 'text-brand-red font-semibold' : '' }}">Education</a>
                    </div>
                </div>

                <a href="{{ url('/blog') }}" class="{{ request()->is('blog') ? 'text-brand-red' : '' }} hover:text-brand-red transition">Blog</a>
                <a href="{{ url('/contact') }}" class="{{ request()->is('contact') ? 'text-brand-red' : '' }} hover:text-brand-red transition">Contact</a>
            </nav>

            <!-- Desktop CTA -->
            <div class="hidden md:block">
                <a href="{{ url('/contact') }}" class="bg-brand-red hover:bg-brand-dark text-white px-5 py-2 rounded-md transition">Get Started</a>
            </div>

            <!-- Mobile Menu Button -->
            <button id="menuBtn" class="md:hidden text-brand-gray focus:outline-none">
                <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-width="2" stroke-linecap="round" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>

        </div>
    </div>

    <!-- Mobile Menu -->
    <div id="mobileMenu" class="hidden md:hidden bg-white border-t border-gray-200">
        <nav class="flex flex-col px-6 py-4 gap-4 text-brand-gray font-medium">
            <a href="{{ url('/') }}" class="{{ request()->is('/') ? 'text-brand-red' : '' }} hover:text-brand-red">Home</a>
            <a href="{{ url('/about') }}" class="{{ request()->is('about') ? 'text-brand-red' : '' }} hover:text-brand-red">About</a>

            <!-- Mobile Services Dropdown -->
            <div x-data="{ open: false }" class="flex flex-col">
                <button @click="open = !open" class="flex justify-between items-center w-full hover:text-brand-red transition">
                    Services
                    <svg :class="{'rotate-180': open}" class="w-4 h-4 transform transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-width="2" stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>
                <div x-show="open" class="flex flex-col pl-4 mt-2 space-y-1">
                    <a href="{{ url('/services/it-consultation') }}" class="hover:text-brand-red">IT Consultation</a>
                    <a href="{{ url('/services/web-software') }}" class="hover:text-brand-red">Web & Software</a>
                    <a href="{{ url('/services/graphic-design') }}" class="hover:text-brand-red">Graphic Design</a>
                    <a href="{{ url('/services/electronics') }}" class="hover:text-brand-red">Electronics</a>
                    <a href="{{ url('/services/logistics') }}" class="hover:text-brand-red">Logistics</a>
                    <a href="{{ url('/services/education') }}" class="hover:text-brand-red">Education</a>
                </div>
            </div>

            <a href="{{ url('/blog') }}" class="{{ request()->is('blog') ? 'text-brand-red' : '' }} hover:text-brand-red">Blog</a>
            <a href="{{ url('/contact') }}" class="{{ request()->is('contact') ? 'text-brand-red' : '' }} hover:text-brand-red">Contact</a>

            <a href="{{ url('/contact') }}" class="mt-2 bg-brand-red text-white text-center py-2 rounded-md">
                Get Started
            </a>
        </nav>
    </div>
</header>
