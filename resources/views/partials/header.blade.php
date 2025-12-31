<header id="mainHeader"
    class="sticky top-0 z-50 bg-white transition-all duration-300">

    <div class="max-w-7xl mx-auto px-4">
        <div class="flex items-center justify-between h-16">

            <!-- Logo (Image) -->
            <a href="{{ url('/') }}" class="flex items-center">
                <img
                    src="{{ asset('assets/images/logo.png') }}"
                    alt="MyCompany Logo"
                    class="h-8 sm:h-10 w-auto"
                >
            </a>

            <!-- Desktop Navigation -->
            <nav class="hidden md:flex items-center gap-8 font-medium text-brand-gray">
                <a href="/" class="hover:text-brand-red transition">Home</a>
                <a href="/about" class="hover:text-brand-red transition">About</a>
                <a href="/services" class="hover:text-brand-red transition">Services</a>
                <a href="/blog" class="hover:text-brand-red transition">Blog</a>
                <a href="/contact" class="hover:text-brand-red transition">Contact</a>
            </nav>

            <!-- Desktop CTA -->
            <div class="hidden md:block">
                <a href="/contact"
                    class="bg-brand-red hover:bg-brand-dark text-white px-5 py-2 rounded-md transition">
                    Get Started
                </a>
            </div>

            <!-- Mobile Menu Button -->
            <button id="menuBtn"
                class="md:hidden text-brand-gray focus:outline-none">
                <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-width="2" stroke-linecap="round"
                        d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>

        </div>
    </div>

    <!-- Mobile Menu -->
    <div id="mobileMenu"
        class="hidden md:hidden bg-white border-t border-gray-200">
        <nav class="flex flex-col px-6 py-4 gap-4 text-brand-gray font-medium">
            <a href="/" class="hover:text-brand-red">Home</a>
            <a href="/about" class="hover:text-brand-red">About</a>
            <a href="/services" class="hover:text-brand-red">Services</a>
            <a href="/blog" class="hover:text-brand-red">Blog</a>
            <a href="/contact" class="hover:text-brand-red">Contact</a>

            <a href="/contact"
                class="mt-2 bg-brand-red text-white text-center py-2 rounded-md">
                Get Started
            </a>
        </nav>
    </div>

</header>
