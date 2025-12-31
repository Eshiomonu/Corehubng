@extends('layouts.app')

@section('title', 'Graphics Design | Creative Branding & Visual Solutions')
@section('description', 'Professional graphics design services for branding, UI/UX, print & digital marketing. Creative solutions to elevate your brand identity.')

@section('content')

<!-- HERO SECTION -->
<section class="bg-linear-to-r from-red-500 to-pink-500 py-24 text-white text-center">
    <div class="max-w-4xl mx-auto px-6">
        <h1 class="text-4xl md:text-5xl font-bold">Creative Graphics Design Solutions for Your Brand</h1>
        <p class="mt-4 text-lg md:text-xl">From logos to digital campaigns, we create visuals that tell your story and captivate your audience.</p>
        <a href="{{ route('contact') }}" class="mt-8 inline-block bg-white text-red-600 px-8 py-3 rounded-md font-medium hover:bg-gray-100 transition">
            Request a Design Consultation
        </a>
    </div>
</section>

<!-- WHY CHOOSE US / USPs -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-6 text-center">
        <h2 class="text-3xl md:text-4xl font-bold text-brand-gray">Why Choose Our Design Services</h2>
        <p class="mt-4 text-gray-600 max-w-2xl mx-auto">Creative, professional, and tailored design solutions for every brand.</p>

        <div class="mt-12 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
            <div class="p-6 bg-gray-50 rounded-xl shadow hover:shadow-lg transition">
                <img src="{{ asset('assets/images/services/icons/brand.svg') }}" class="w-16 h-16 mx-auto mb-4" alt="Brand Identity">
                <h3 class="font-semibold text-lg text-brand-gray mb-2">Brand Identity</h3>
                <p class="text-gray-600 text-sm">Logo, colors, typography, and complete brand visuals.</p>
            </div>
            <div class="p-6 bg-gray-50 rounded-xl shadow hover:shadow-lg transition">
                <img src="{{ asset('assets/images/services/icons/uiux.svg') }}" class="w-16 h-16 mx-auto mb-4" alt="UI/UX Design">
                <h3 class="font-semibold text-lg text-brand-gray mb-2">UI/UX Graphics</h3>
                <p class="text-gray-600 text-sm">Visually appealing interfaces and user experience enhancements.</p>
            </div>
            <div class="p-6 bg-gray-50 rounded-xl shadow hover:shadow-lg transition">
                <img src="{{ asset('assets/images/services/icons/print.svg') }}" class="w-16 h-16 mx-auto mb-4" alt="Print & Digital">
                <h3 class="font-semibold text-lg text-brand-gray mb-2">Print & Digital</h3>
                <p class="text-gray-600 text-sm">Banners, social media graphics, brochures, and campaigns.</p>
            </div>
            <div class="p-6 bg-gray-50 rounded-xl shadow hover:shadow-lg transition">
                <img src="{{ asset('assets/images/services/icons/fast.svg') }}" class="w-16 h-16 mx-auto mb-4" alt="Fast Delivery">
                <h3 class="font-semibold text-lg text-brand-gray mb-2">Fast Delivery & Revisions</h3>
                <p class="text-gray-600 text-sm">Quick turnaround and multiple revisions until you’re satisfied.</p>
            </div>
        </div>
    </div>
</section>

<!-- DESIGN PROCESS -->
<section class="bg-gray-50 py-20">
    <div class="max-w-7xl mx-auto px-6 text-center">
        <h2 class="text-3xl md:text-4xl font-bold text-brand-gray">Our Design Process</h2>
        <p class="mt-4 text-gray-600 max-w-2xl mx-auto">Collaborative approach to deliver stunning visuals that match your brand.</p>

        <div class="mt-12 flex flex-col lg:flex-row items-center justify-between relative">
            <div class="hidden lg:block absolute top-1/2 left-0 right-0 h-1 bg-gray-300 z-0"></div>

            <div class="relative flex flex-col items-center lg:w-1/5 z-10 mb-12 lg:mb-0">
                <div class="bg-red-500 text-white w-16 h-16 flex items-center justify-center rounded-full font-bold text-xl">1</div>
                <h3 class="mt-4 font-semibold text-lg text-brand-gray">Discovery & Concept</h3>
            </div>
            <div class="relative flex flex-col items-center lg:w-1/5 z-10 mb-12 lg:mb-0">
                <div class="bg-red-500 text-white w-16 h-16 flex items-center justify-center rounded-full font-bold text-xl">2</div>
                <h3 class="mt-4 font-semibold text-lg text-brand-gray">Sketch & Wireframe</h3>
            </div>
            <div class="relative flex flex-col items-center lg:w-1/5 z-10 mb-12 lg:mb-0">
                <div class="bg-red-500 text-white w-16 h-16 flex items-center justify-center rounded-full font-bold text-xl">3</div>
                <h3 class="mt-4 font-semibold text-lg text-brand-gray">Design & Prototype</h3>
            </div>
            <div class="relative flex flex-col items-center lg:w-1/5 z-10 mb-12 lg:mb-0">
                <div class="bg-red-500 text-white w-16 h-16 flex items-center justify-center rounded-full font-bold text-xl">4</div>
                <h3 class="mt-4 font-semibold text-lg text-brand-gray">Feedback & Revisions</h3>
            </div>
            <div class="relative flex flex-col items-center lg:w-1/5 z-10">
                <div class="bg-red-500 text-white w-16 h-16 flex items-center justify-center rounded-full font-bold text-xl">5</div>
                <h3 class="mt-4 font-semibold text-lg text-brand-gray">Final Delivery</h3>
            </div>
        </div>
    </div>
</section>

<!-- PORTFOLIO / GALLERY -->
<section class="py-24 bg-white">
    <div class="max-w-7xl mx-auto px-6 text-center">
        <h2 class="text-3xl md:text-4xl font-bold text-brand-gray">Our Design Portfolio</h2>
        <p class="mt-4 text-gray-600 max-w-2xl mx-auto">Explore our creative projects across branding, UI/UX, and digital campaigns.</p>

        <div class="mt-12 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            <div class="rounded-xl overflow-hidden shadow hover:shadow-lg transition">
                <img src="{{ asset('assets/images/designs/design1.jpg') }}" class="w-full h-64 object-cover" alt="Design 1">
                <div class="p-4 text-left">
                    <h3 class="font-semibold text-lg text-brand-gray">Brand Logo Design</h3>
                    <p class="text-gray-600 text-sm">Clean and modern logo for a startup brand.</p>
                </div>
            </div>
            <div class="rounded-xl overflow-hidden shadow hover:shadow-lg transition">
                <img src="{{ asset('assets/images/designs/design2.jpg') }}" class="w-full h-64 object-cover" alt="Design 2">
                <div class="p-4 text-left">
                    <h3 class="font-semibold text-lg text-brand-gray">Social Media Campaign</h3>
                    <p class="text-gray-600 text-sm">Engaging visuals for Facebook and Instagram campaigns.</p>
                </div>
            </div>
            <div class="rounded-xl overflow-hidden shadow hover:shadow-lg transition">
                <img src="{{ asset('assets/images/designs/design3.jpg') }}" class="w-full h-64 object-cover" alt="Design 3">
                <div class="p-4 text-left">
                    <h3 class="font-semibold text-lg text-brand-gray">UI/UX Dashboard</h3>
                    <p class="text-gray-600 text-sm">Intuitive dashboard interface for a SaaS application.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- TESTIMONIALS -->
<section class="py-24 bg-gray-50">
    <div class="max-w-7xl mx-auto px-6 text-center">
        <h2 class="text-3xl md:text-4xl font-bold text-brand-gray">Client Feedback</h2>
        <p class="mt-4 text-gray-600 max-w-2xl mx-auto">Hear from our clients who trusted us with their design needs.</p>

        <div class="mt-12 flex gap-6 overflow-x-auto snap-x snap-mandatory px-4 py-4">
            <div class="flex-none w-80 bg-white p-6 rounded-xl shadow hover:shadow-lg transition snap-center">
                <p class="text-gray-600 mb-4">"Our brand visuals have never looked better. Highly professional team!"</p>
                <div class="flex items-center gap-3">
                    <img src="{{ asset('assets/images/testimonials/client2.jpg') }}" class="w-12 h-12 rounded-full" alt="Client">
                    <div>
                        <h4 class="font-semibold text-brand-gray">Michael Lee</h4>
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
    <h2 class="text-3xl md:text-4xl font-bold">Let’s Create Stunning Visuals for Your Brand</h2>
    <p class="mt-4 text-lg md:text-xl max-w-2xl mx-auto">Contact us today and elevate your brand identity with professional design solutions.</p>
    <a href="{{ route('contact') }}" class="mt-8 inline-block bg-white text-red-600 px-8 py-3 rounded-md font-medium hover:bg-gray-100 transition">
        Request a Design Consultation
    </a>
</section>

@endsection
