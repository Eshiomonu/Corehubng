@extends('layouts.app')

@section('title', 'Electronic Gadgets | Latest Tech & Devices for Sale')
@section('description', 'Explore our wide range of electronic gadgets. High-quality smartphones, laptops, accessories, smart home devices, with warranty and fast delivery.')

@section('content')

<!-- HERO SECTION -->
<section class="bg-gray-50 py-24">
    <div class="max-w-7xl mx-auto px-6 text-center">
        <h1 class="text-4xl md:text-5xl font-bold text-brand-gray">Top-Quality Electronic Gadgets for You</h1>
        <p class="mt-4 text-lg md:text-xl text-gray-600 max-w-2xl mx-auto">Discover the latest technology with authentic gadgets, fast delivery, and excellent support.</p>
        <a href="#products" class="mt-8 inline-block bg-brand-red text-white px-8 py-3 rounded-md font-medium hover:bg-brand-dark transition">
            Shop Now
        </a>
    </div>
</section>

<!-- FEATURED PRODUCTS -->
<section id="products" class="py-24 bg-white">
    <div class="max-w-7xl mx-auto px-6 text-center">
        <h2 class="text-3xl md:text-4xl font-bold text-brand-gray">Featured Gadgets</h2>
        <p class="mt-4 text-gray-600 max-w-2xl mx-auto">Our best-selling gadgets handpicked for you.</p>

        <div class="mt-12 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Product Card -->
            <div class="bg-gray-50 rounded-xl shadow hover:shadow-lg transition overflow-hidden">
                <img src="{{ asset('assets/images/gadgets/gadget1.jpg') }}" class="w-full h-64 object-cover" alt="Gadget 1">
                <div class="p-6 text-left">
                    <h3 class="font-semibold text-lg text-brand-gray">Smartphone X200</h3>
                    <p class="text-gray-600 text-sm mt-2">Latest smartphone with cutting-edge features.</p>
                    <div class="mt-4 flex items-center justify-between">
                        <span class="font-bold text-brand-red">$499</span>
                        <a href="{{ route('contact') }}" class="bg-brand-red text-white px-4 py-2 rounded-md text-sm hover:bg-brand-dark transition">
                            Buy Now
                        </a>
                    </div>
                </div>
            </div>

            <div class="bg-gray-50 rounded-xl shadow hover:shadow-lg transition overflow-hidden">
                <img src="{{ asset('assets/images/gadgets/gadget2.jpg') }}" class="w-full h-64 object-cover" alt="Gadget 2">
                <div class="p-6 text-left">
                    <h3 class="font-semibold text-lg text-brand-gray">Laptop Pro 15</h3>
                    <p class="text-gray-600 text-sm mt-2">High-performance laptop for work and gaming.</p>
                    <div class="mt-4 flex items-center justify-between">
                        <span class="font-bold text-brand-red">$899</span>
                        <a href="{{ route('contact') }}" class="bg-brand-red text-white px-4 py-2 rounded-md text-sm hover:bg-brand-dark transition">
                            Buy Now
                        </a>
                    </div>
                </div>
            </div>

            <div class="bg-gray-50 rounded-xl shadow hover:shadow-lg transition overflow-hidden">
                <img src="{{ asset('assets/images/gadgets/gadget3.jpg') }}" class="w-full h-64 object-cover" alt="Gadget 3">
                <div class="p-6 text-left">
                    <h3 class="font-semibold text-lg text-brand-gray">Smartwatch Z</h3>
                    <p class="text-gray-600 text-sm mt-2">Track your fitness and notifications in style.</p>
                    <div class="mt-4 flex items-center justify-between">
                        <span class="font-bold text-brand-red">$199</span>
                        <a href="{{ route('contact') }}" class="bg-brand-red text-white px-4 py-2 rounded-md text-sm hover:bg-brand-dark transition">
                            Buy Now
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- WHY SHOP WITH US -->
<section class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-6 text-center">
        <h2 class="text-3xl md:text-4xl font-bold text-brand-gray">Why Shop With Us</h2>
        <p class="mt-4 text-gray-600 max-w-2xl mx-auto">Trusted by thousands for quality, support, and speed.</p>

        <div class="mt-12 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
            <div class="p-6 bg-white rounded-xl shadow hover:shadow-lg transition">
                <img src="{{ asset('assets/images/services/icons/authentic.svg') }}" class="w-16 h-16 mx-auto mb-4" alt="Authentic Products">
                <h3 class="font-semibold text-lg text-brand-gray mb-2">Authentic Products</h3>
                <p class="text-gray-600 text-sm">All gadgets are genuine and sourced from trusted suppliers.</p>
            </div>
            <div class="p-6 bg-white rounded-xl shadow hover:shadow-lg transition">
                <img src="{{ asset('assets/images/services/icons/warranty.svg') }}" class="w-16 h-16 mx-auto mb-4" alt="Warranty">
                <h3 class="font-semibold text-lg text-brand-gray mb-2">Warranty & Support</h3>
                <p class="text-gray-600 text-sm">We provide warranties and reliable after-sales support.</p>
            </div>
            <div class="p-6 bg-white rounded-xl shadow hover:shadow-lg transition">
                <img src="{{ asset('assets/images/services/icons/shipping.svg') }}" class="w-16 h-16 mx-auto mb-4" alt="Fast Shipping">
                <h3 class="font-semibold text-lg text-brand-gray mb-2">Fast Shipping</h3>
                <p class="text-gray-600 text-sm">Quick delivery to your doorstep across the country.</p>
            </div>
            <div class="p-6 bg-white rounded-xl shadow hover:shadow-lg transition">
                <img src="{{ asset('assets/images/services/icons/offer.svg') }}" class="w-16 h-16 mx-auto mb-4" alt="Exclusive Offers">
                <h3 class="font-semibold text-lg text-brand-gray mb-2">Exclusive Offers</h3>
                <p class="text-gray-600 text-sm">Enjoy special deals and limited-time discounts on gadgets.</p>
            </div>
        </div>
    </div>
</section>

<!-- TESTIMONIALS -->
<section class="py-24 bg-white">
    <div class="max-w-7xl mx-auto px-6 text-center">
        <h2 class="text-3xl md:text-4xl font-bold text-brand-gray">Customer Reviews</h2>
        <p class="mt-4 text-gray-600 max-w-2xl mx-auto">See what our satisfied customers are saying.</p>

        <div class="mt-12 flex gap-6 overflow-x-auto snap-x snap-mandatory px-4 py-4">
            <div class="flex-none w-80 bg-gray-50 p-6 rounded-xl shadow hover:shadow-lg transition snap-center">
                <p class="text-gray-600 mb-4">"Excellent products and fast delivery. Will definitely buy again!"</p>
                <div class="flex items-center gap-3">
                    <img src="{{ asset('assets/images/testimonials/client3.jpg') }}" class="w-12 h-12 rounded-full" alt="Client">
                    <div>
                        <h4 class="font-semibold text-brand-gray">Sarah Williams</h4>
                        <div class="flex text-yellow-400">
                            @for ($i = 0; $i < 5; $i++)
                                <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.49 6.91l6.564-.955L10 0l2.946 5.955 6.564.955-4.755 4.635 1.123 6.545z"/></svg>
                            @endfor
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA -->
<section class="py-24 bg-brand-red text-white text-center">
    <h2 class="text-3xl md:text-4xl font-bold">Grab Your Gadget Today</h2>
    <p class="mt-4 text-lg md:text-xl max-w-2xl mx-auto">Shop now and enjoy authentic gadgets with fast delivery and great offers.</p>
    <a href="{{ route('contact') }}" class="mt-8 inline-block bg-white text-red-600 px-8 py-3 rounded-md font-medium hover:bg-gray-100 transition">
        Shop Now
    </a>
</section>

@endsection
