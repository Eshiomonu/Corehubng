@extends('layouts.app')

@section('title', 'Web & Software Development | Custom Solutions for Your Business')
@section('description', 'Professional web and software development services. Custom applications, scalable systems, UI/UX design, and expert development for your business growth.')

@section('content')

<!-- HERO SECTION -->
<section class="bg-gray-50 py-24">
    <div class="max-w-7xl mx-auto px-6 text-center">
        <h1 class="text-4xl md:text-5xl font-bold text-brand-gray">
            Custom Web & Software Solutions for Your Business
        </h1>
        <p class="mt-4 text-lg md:text-xl text-gray-600 max-w-2xl mx-auto">
            We build scalable, secure, and user-friendly web and software applications tailored to your business needs.
        </p>
        <a href="{{ route('contact') }}" class="mt-8 inline-block bg-brand-red text-white px-8 py-3 rounded-md font-medium hover:bg-brand-dark transition">
            Request a Quote
        </a>
    </div>
</section>

<!-- WHY CHOOSE US / USPs -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-6 text-center">
        <h2 class="text-3xl md:text-4xl font-bold text-brand-gray">Why Choose Our Development Services</h2>
        <p class="mt-4 text-gray-600 max-w-2xl mx-auto">Expertise, custom solutions, and reliable support for your business growth.</p>

        <div class="mt-12 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
            <div class="p-6 bg-gray-50 rounded-xl shadow hover:shadow-lg transition">
                <img src="{{ asset('assets/images/services/icons/custom.svg') }}" class="w-16 h-16 mx-auto mb-4" alt="Custom Software">
                <h3 class="font-semibold text-lg text-brand-gray mb-2">Custom Software Solutions</h3>
                <p class="text-gray-600 text-sm">Tailored applications that fit your exact business requirements.</p>
            </div>
            <div class="p-6 bg-gray-50 rounded-xl shadow hover:shadow-lg transition">
                <img src="{{ asset('assets/images/services/icons/scalable.svg') }}" class="w-16 h-16 mx-auto mb-4" alt="Scalable Systems">
                <h3 class="font-semibold text-lg text-brand-gray mb-2">Scalable & Secure</h3>
                <p class="text-gray-600 text-sm">Applications built to grow with your business and maintain security standards.</p>
            </div>
            <div class="p-6 bg-gray-50 rounded-xl shadow hover:shadow-lg transition">
                <img src="{{ asset('assets/images/services/icons/expert.svg') }}" class="w-16 h-16 mx-auto mb-4" alt="Expert Team">
                <h3 class="font-semibold text-lg text-brand-gray mb-2">Expert Development Team</h3>
                <p class="text-gray-600 text-sm">Certified developers with experience in modern technologies and frameworks.</p>
            </div>
            <div class="p-6 bg-gray-50 rounded-xl shadow hover:shadow-lg transition">
                <img src="{{ asset('assets/images/services/icons/fast.svg') }}" class="w-16 h-16 mx-auto mb-4" alt="Fast Delivery">
                <h3 class="font-semibold text-lg text-brand-gray mb-2">Fast Delivery & Support</h3>
                <p class="text-gray-600 text-sm">Quick project turnaround and ongoing support to ensure smooth operation.</p>
            </div>
        </div>
    </div>
</section>

<!-- DEVELOPMENT PROCESS -->
<section class="bg-gray-50 py-20">
    <div class="max-w-7xl mx-auto px-6 text-center">
        <h2 class="text-3xl md:text-4xl font-bold text-brand-gray">Our Development Process</h2>
        <p class="mt-4 text-gray-600 max-w-2xl mx-auto">Step-by-step methodology for delivering reliable, high-quality software solutions.</p>

        <div class="mt-12 flex flex-col lg:flex-row items-center justify-between relative">
            <div class="hidden lg:block absolute top-1/2 left-0 right-0 h-1 bg-gray-300 z-0"></div>

            <div class="relative flex flex-col items-center lg:w-1/5 z-10 mb-12 lg:mb-0">
                <div class="bg-brand-red text-white w-16 h-16 flex items-center justify-center rounded-full font-bold text-xl">1</div>
                <h3 class="mt-4 font-semibold text-lg text-brand-gray">Requirement Analysis</h3>
                <p class="text-gray-600 text-sm mt-2">We gather and understand your business and technical requirements.</p>
            </div>
            <div class="relative flex flex-col items-center lg:w-1/5 z-10 mb-12 lg:mb-0">
                <div class="bg-brand-red text-white w-16 h-16 flex items-center justify-center rounded-full font-bold text-xl">2</div>
                <h3 class="mt-4 font-semibold text-lg text-brand-gray">UI/UX Design</h3>
                <p class="text-gray-600 text-sm mt-2">Designing intuitive and user-friendly interfaces tailored to your audience.</p>
            </div>
            <div class="relative flex flex-col items-center lg:w-1/5 z-10 mb-12 lg:mb-0">
                <div class="bg-brand-red text-white w-16 h-16 flex items-center justify-center rounded-full font-bold text-xl">3</div>
                <h3 class="mt-4 font-semibold text-lg text-brand-gray">Development</h3>
                <p class="text-gray-600 text-sm mt-2">Building scalable, maintainable, and high-performance applications.</p>
            </div>
            <div class="relative flex flex-col items-center lg:w-1/5 z-10 mb-12 lg:mb-0">
                <div class="bg-brand-red text-white w-16 h-16 flex items-center justify-center rounded-full font-bold text-xl">4</div>
                <h3 class="mt-4 font-semibold text-lg text-brand-gray">Testing & QA</h3>
                <p class="text-gray-600 text-sm mt-2">Thorough testing to ensure quality, security, and reliability.</p>
            </div>
            <div class="relative flex flex-col items-center lg:w-1/5 z-10">
                <div class="bg-brand-red text-white w-16 h-16 flex items-center justify-center rounded-full font-bold text-xl">5</div>
                <h3 class="mt-4 font-semibold text-lg text-brand-gray">Deployment & Support</h3>
                <p class="text-gray-600 text-sm mt-2">Seamless deployment and ongoing support for long-term success.</p>
            </div>
        </div>
    </div>
</section>

<!-- PORTFOLIO / PROJECTS -->
<section class="py-24 bg-white">
    <div class="max-w-7xl mx-auto px-6 text-center">
        <h2 class="text-3xl md:text-4xl font-bold text-brand-gray">Our Projects</h2>
        <p class="mt-4 text-gray-600 max-w-2xl mx-auto">Take a look at some of our successful web and software development projects.</p>

        <div class="mt-12 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
            <div class="rounded-xl overflow-hidden shadow hover:shadow-lg transition">
                <img src="{{ asset('assets/images/projects/project1.jpg') }}" class="w-full h-48 object-cover" alt="Project 1">
                <div class="p-6 text-left">
                    <h3 class="font-semibold text-lg text-brand-gray mb-2">E-Commerce Platform</h3>
                    <p class="text-gray-600 text-sm">Custom e-commerce application with integrated payment gateways.</p>
                </div>
            </div>
            <div class="rounded-xl overflow-hidden shadow hover:shadow-lg transition">
                <img src="{{ asset('assets/images/projects/project2.jpg') }}" class="w-full h-48 object-cover" alt="Project 2">
                <div class="p-6 text-left">
                    <h3 class="font-semibold text-lg text-brand-gray mb-2">Inventory Management System</h3>
                    <p class="text-gray-600 text-sm">Web application for tracking inventory with real-time analytics.</p>
                </div>
            </div>
            <div class="rounded-xl overflow-hidden shadow hover:shadow-lg transition">
                <img src="{{ asset('assets/images/projects/project3.jpg') }}" class="w-full h-48 object-cover" alt="Project 3">
                <div class="p-6 text-left">
                    <h3 class="font-semibold text-lg text-brand-gray mb-2">Custom CRM Solution</h3>
                    <p class="text-gray-600 text-sm">Tailored CRM software to improve client management and workflow.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- TESTIMONIALS -->
<section class="py-24 bg-gray-50">
    <div class="max-w-7xl mx-auto px-6 text-center">
        <h2 class="text-3xl md:text-4xl font-bold text-brand-gray">Client Feedback</h2>
        <p class="mt-4 text-gray-600 max-w-2xl mx-auto">Hear from businesses that trusted us for their software projects.</p>

        <div class="mt-12 flex gap-6 overflow-x-auto snap-x snap-mandatory px-4 py-4">
            <!-- Example testimonial card -->
            <div class="flex-none w-80 bg-white p-6 rounded-xl shadow hover:shadow-lg transition snap-center">
                <p class="text-gray-600 mb-4">"The team delivered our software project on time and exceeded expectations!"</p>
                <div class="flex items-center gap-3">
                    <img src="{{ asset('assets/images/testimonials/client1.jpg') }}" class="w-12 h-12 rounded-full" alt="Client 1">
                    <div>
                        <h4 class="font-semibold text-brand-gray">Alice Johnson</h4>
                        <div class="flex text-yellow-400">
                            @for ($i = 0; $i < 5; $i++)
                                <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.49 6.91l6.564-.955L10 0l2.946 5.955 6.564.955-4.755 4.635 1.123 6.545z"/></svg>
                            @endfor
                        </div>
                    </div>
                </div>
            </div>

            <!-- Add more testimonials as needed -->
        </div>
    </div>
</section>

<!-- CTA -->
<section class="py-24 bg-brand-red text-white text-center">
    <h2 class="text-3xl md:text-4xl font-bold">Ready to Build Your Software Solution?</h2>
    <p class="mt-4 text-lg md:text-xl max-w-2xl mx-auto">Contact us today and let's start building a solution tailored for your business.</p>
    <a href="{{ route('contact') }}" class="mt-8 inline-block bg-white text-brand-red px-8 py-3 rounded-md font-medium hover:bg-gray-100 transition">
        Request a Quote
    </a>
</section>

@endsection
