@extends('layouts.app')

@section('title', 'Logistics Services | Fast, Secure & Reliable Delivery Solutions')
@section('description', 'Professional logistics solutions with nationwide coverage, secure handling, real-time tracking, and timely delivery. Trusted by businesses and individuals.')

@section('content')

<!-- HERO SECTION -->
<section class="bg-gray-50 py-24">
    <div class="max-w-7xl mx-auto px-6 text-center">
        <h1 class="text-4xl md:text-5xl font-bold text-brand-gray">Reliable Logistics Solutions for Your Business</h1>
        <p class="mt-4 text-lg md:text-xl text-gray-600 max-w-2xl mx-auto">From local deliveries to nationwide shipping, we ensure your packages arrive safely and on time.</p>
        <a href="{{ route('contact') }}" class="mt-8 inline-block bg-brand-red text-white px-8 py-3 rounded-md font-medium hover:bg-brand-dark transition">
            Request a Quote
        </a>
    </div>
</section>

<!-- WHY CHOOSE US / USPs -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-6 text-center">
        <h2 class="text-3xl md:text-4xl font-bold text-brand-gray">Why Choose Our Logistics Services</h2>
        <p class="mt-4 text-gray-600 max-w-2xl mx-auto">Efficient, secure, and reliable logistics solutions tailored for your business needs.</p>

        <div class="mt-12 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
            <div class="p-6 bg-gray-50 rounded-xl shadow hover:shadow-lg transition">
                <img src="{{ asset('assets/images/services/icons/fast.svg') }}" class="w-16 h-16 mx-auto mb-4" alt="Fast Delivery">
                <h3 class="font-semibold text-lg text-brand-gray mb-2">Fast & On-Time Delivery</h3>
                <p class="text-gray-600 text-sm">We prioritize speed and reliability for every shipment.</p>
            </div>
            <div class="p-6 bg-gray-50 rounded-xl shadow hover:shadow-lg transition">
                <img src="{{ asset('assets/images/services/icons/nationwide.svg') }}" class="w-16 h-16 mx-auto mb-4" alt="Coverage">
                <h3 class="font-semibold text-lg text-brand-gray mb-2">Nationwide & International</h3>
                <p class="text-gray-600 text-sm">Extensive coverage ensuring your packages reach any destination.</p>
            </div>
            <div class="p-6 bg-gray-50 rounded-xl shadow hover:shadow-lg transition">
                <img src="{{ asset('assets/images/services/icons/tracking.svg') }}" class="w-16 h-16 mx-auto mb-4" alt="Tracking">
                <h3 class="font-semibold text-lg text-brand-gray mb-2">Real-Time Tracking</h3>
                <p class="text-gray-600 text-sm">Stay updated with instant notifications and live tracking.</p>
            </div>
            <div class="p-6 bg-gray-50 rounded-xl shadow hover:shadow-lg transition">
                <img src="{{ asset('assets/images/services/icons/secure.svg') }}" class="w-16 h-16 mx-auto mb-4" alt="Secure">
                <h3 class="font-semibold text-lg text-brand-gray mb-2">Secure Handling</h3>
                <p class="text-gray-600 text-sm">Your goods are handled with care and delivered safely.</p>
            </div>
        </div>
    </div>
</section>

<!-- LOGISTICS PROCESS -->
<section class="bg-gray-50 py-20">
    <div class="max-w-7xl mx-auto px-6 text-center">
        <h2 class="text-3xl md:text-4xl font-bold text-brand-gray">How Our Logistics Process Works</h2>
        <p class="mt-4 text-gray-600 max-w-2xl mx-auto">Transparent workflow ensures timely and secure delivery of your shipments.</p>

        <div class="mt-12 flex flex-col lg:flex-row items-center justify-between relative">
            <div class="hidden lg:block absolute top-1/2 left-0 right-0 h-1 bg-gray-300 z-0"></div>

            <div class="relative flex flex-col items-center lg:w-1/5 z-10 mb-12 lg:mb-0">
                <div class="bg-red-500 text-white w-16 h-16 flex items-center justify-center rounded-full font-bold text-xl">1</div>
                <h3 class="mt-4 font-semibold text-lg text-brand-gray">Order Pickup</h3>
            </div>
            <div class="relative flex flex-col items-center lg:w-1/5 z-10 mb-12 lg:mb-0">
                <div class="bg-red-500 text-white w-16 h-16 flex items-center justify-center rounded-full font-bold text-xl">2</div>
                <h3 class="mt-4 font-semibold text-lg text-brand-gray">Sorting & Dispatch</h3>
            </div>
            <div class="relative flex flex-col items-center lg:w-1/5 z-10 mb-12 lg:mb-0">
                <div class="bg-red-500 text-white w-16 h-16 flex items-center justify-center rounded-full font-bold text-xl">3</div>
                <h3 class="mt-4 font-semibold text-lg text-brand-gray">Transit & Tracking</h3>
            </div>
            <div class="relative flex flex-col items-center lg:w-1/5 z-10">
                <div class="bg-red-500 text-white w-16 h-16 flex items-center justify-center rounded-full font-bold text-xl">4</div>
                <h3 class="mt-4 font-semibold text-lg text-brand-gray">Delivery Confirmation</h3>
            </div>
        </div>
    </div>
</section>

<!-- SERVICE COVERAGE -->
<section class="py-24 bg-white">
    <div class="max-w-7xl mx-auto px-6 text-center">
        <h2 class="text-3xl md:text-4xl font-bold text-brand-gray">Our Service Coverage</h2>
        <p class="mt-4 text-gray-600 max-w-2xl mx-auto">We deliver across the country with precision and reliability.</p>

        <div class="mt-12 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
            <div class="p-6 bg-gray-50 rounded-xl shadow hover:shadow-lg transition">
                <h3 class="font-semibold text-lg text-brand-gray mb-2">Lagos</h3>
            </div>
            <div class="p-6 bg-gray-50 rounded-xl shadow hover:shadow-lg transition">
                <h3 class="font-semibold text-lg text-brand-gray mb-2">Abuja</h3>
            </div>
            <div class="p-6 bg-gray-50 rounded-xl shadow hover:shadow-lg transition">
                <h3 class="font-semibold text-lg text-brand-gray mb-2">Port Harcourt</h3>
            </div>
            <div class="p-6 bg-gray-50 rounded-xl shadow hover:shadow-lg transition">
                <h3 class="font-semibold text-lg text-brand-gray mb-2">Kano</h3>
            </div>
        </div>
    </div>
</section>

<!-- TESTIMONIALS -->
<section class="py-24 bg-gray-50">
    <div class="max-w-7xl mx-auto px-6 text-center">
        <h2 class="text-3xl md:text-4xl font-bold text-brand-gray">What Our Clients Say</h2>
        <p class="mt-4 text-gray-600 max-w-2xl mx-auto">Trusted by businesses and individuals for reliable logistics.</p>

        <div class="mt-12 flex gap-6 overflow-x-auto snap-x snap-mandatory px-4 py-4">
            <div class="flex-none w-80 bg-white p-6 rounded-xl shadow hover:shadow-lg transition snap-center">
                <p class="text-gray-600 mb-4">"Timely deliveries and excellent support. Highly recommend!"</p>
                <div class="flex items-center gap-3">
                    <img src="{{ asset('assets/images/testimonials/client4.jpg') }}" class="w-12 h-12 rounded-full" alt="Client">
                    <div>
                        <h4 class="font-semibold text-brand-gray">Olusegun Ade</h4>
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
<section class="py-24 bg-red-500 text-white text-center">
    <h2 class="text-3xl md:text-4xl font-bold">Ship Your Packages with Confidence</h2>
    <p class="mt-4 text-lg md:text-xl max-w-2xl mx-auto">Contact us today to schedule a pickup or request a quote for your logistics needs.</p>
    <a href="{{ route('contact') }}" class="mt-8 inline-block bg-white text-red-600 px-8 py-3 rounded-md font-medium hover:bg-gray-100 transition">
        Request a Quote
    </a>
</section>

@endsection
