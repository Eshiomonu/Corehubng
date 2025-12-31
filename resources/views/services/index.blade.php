@extends('layouts.app')

@section('title', 'Our Services | Your Company Name — IT, Web & Software Development, Design & More')
@section('description', 'Explore the wide range of services offered by Your Company Name, including IT consultation, web & software development, graphics design, electronics sales, logistics, and education services. Learn how we can help your business succeed.')

@section('content')

    <!-- SERVICES HERO SECTION -->
    <section class="bg-gray-50 py-24">
        <div class="max-w-7xl mx-auto px-6 text-center lg:text-left">
            <h1 class="text-4xl md:text-5xl font-bold text-brand-gray">
                Our <span class="text-brand-red">Services</span>
            </h1>
            <p class="mt-6 text-gray-600 text-lg md:text-xl max-w-2xl mx-auto lg:mx-0">
                We provide comprehensive solutions across IT consultation, web and software development, graphic design, electronics, logistics, and education. Let’s help your business grow.
            </p>
        </div>
    </section>

    <!-- Placeholder for Services Grid -->
   <!-- SERVICES GRID SECTION -->
<section id="services-grid" class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-6">
        <!-- Section Header -->
        <div class="text-center max-w-2xl mx-auto">
            <h2 class="text-3xl md:text-4xl font-bold text-brand-gray">
                What We Offer
            </h2>
            <p class="mt-4 text-gray-600">
                Explore our wide range of services designed to help your business grow and succeed.
            </p>
        </div>

        <!-- Services Grid -->
        <div class="mt-12 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">

            <!-- Service Card 1: IT Consultation -->
            <div class="bg-gray-50 p-8 rounded-xl shadow hover:shadow-lg transition">
                <img src="{{ asset('assets/images/services/it-consultation.svg') }}" alt="IT Consultation" class="w-16 h-16 mb-4">
                <h3 class="text-xl font-semibold text-brand-gray mb-2">IT Consultation</h3>
                <p class="text-gray-600 mb-4">
                    Expert advice to optimize your IT infrastructure and streamline your technology strategy.
                </p>
                <a href="/services/it-consultation" class="text-brand-red font-medium hover:underline">Learn More →</a>
            </div>

            <!-- Service Card 2: Web & Software Development -->
            <div class="bg-gray-50 p-8 rounded-xl shadow hover:shadow-lg transition">
                <img src="{{ asset('assets/images/services/web-software.svg') }}" alt="Web & Software Development" class="w-16 h-16 mb-4">
                <h3 class="text-xl font-semibold text-brand-gray mb-2">Web & Software Development</h3>
                <p class="text-gray-600 mb-4">
                    Custom web and software solutions tailored to your business needs and goals.
                </p>
                <a href="/services/web-software" class="text-brand-red font-medium hover:underline">Learn More →</a>
            </div>

            <!-- Service Card 3: Graphic Design -->
            <div class="bg-gray-50 p-8 rounded-xl shadow hover:shadow-lg transition">
                <img src="{{ asset('assets/images/services/graphic-design.svg') }}" alt="Graphic Design" class="w-16 h-16 mb-4">
                <h3 class="text-xl font-semibold text-brand-gray mb-2">Graphic Design</h3>
                <p class="text-gray-600 mb-4">
                    Creative designs for your brand, marketing materials, and digital presence.
                </p>
                <a href="/services/graphic-design" class="text-brand-red font-medium hover:underline">Learn More →</a>
            </div>

            <!-- Service Card 4: Electronics Sales -->
            <div class="bg-gray-50 p-8 rounded-xl shadow hover:shadow-lg transition">
                <img src="{{ asset('assets/images/services/electronics.svg') }}" alt="Electronics Sales" class="w-16 h-16 mb-4">
                <h3 class="text-xl font-semibold text-brand-gray mb-2">Electronics Sales</h3>
                <p class="text-gray-600 mb-4">
                    Quality electronic gadgets and devices available for purchase with support and warranty.
                </p>
                <a href="/services/electronics" class="text-brand-red font-medium hover:underline">Learn More →</a>
            </div>

            <!-- Service Card 5: Logistics -->
            <div class="bg-gray-50 p-8 rounded-xl shadow hover:shadow-lg transition">
                <img src="{{ asset('assets/images/services/logistics.svg') }}" alt="Logistics" class="w-16 h-16 mb-4">
                <h3 class="text-xl font-semibold text-brand-gray mb-2">Logistics</h3>
                <p class="text-gray-600 mb-4">
                    Efficient and reliable logistics solutions for your business needs.
                </p>
                <a href="/services/logistics" class="text-brand-red font-medium hover:underline">Learn More →</a>
            </div>

            <!-- Service Card 6: Education Services -->
            <div class="bg-gray-50 p-8 rounded-xl shadow hover:shadow-lg transition">
                <img src="{{ asset('assets/images/services/education.svg') }}" alt="Education Services" class="w-16 h-16 mb-4">
                <h3 class="text-xl font-semibold text-brand-gray mb-2">Education Services</h3>
                <p class="text-gray-600 mb-4">
                    Training and educational programs to enhance skills and knowledge in IT and business.
                </p>
                <a href="/services/education" class="text-brand-red font-medium hover:underline">Learn More →</a>
            </div>

        </div>
    </div>
</section>


 
   <!-- HOW WE WORK / PROCESS SECTION -->
<section id="process" class="bg-gray-50 py-20">
    <div class="max-w-7xl mx-auto px-6 text-center">
        <!-- Section Header -->
        <h2 class="text-3xl md:text-4xl font-bold text-brand-gray">
            How We Work
        </h2>
        <p class="mt-4 text-gray-600 max-w-2xl mx-auto">
            Our proven process ensures your projects are delivered efficiently, creatively, and successfully.
        </p>

        <!-- Horizontal Timeline -->
        <div class="mt-16 flex flex-col lg:flex-row items-center justify-between relative">

            <!-- Arrow Line -->
            <div class="hidden lg:block absolute top-1/2 left-0 right-0 h-1 bg-gray-300 z-0"></div>

            <!-- Step 1: Discover -->
            <div class="relative flex flex-col items-center lg:w-1/5 mb-12 lg:mb-0 z-10">
                <div class="bg-brand-red text-white w-16 h-16 flex items-center justify-center rounded-full font-bold text-xl">
                    1
                </div>
                <h3 class="mt-4 text-lg font-semibold text-brand-gray">Discover</h3>
                <p class="mt-2 text-gray-600 text-sm text-center lg:text-center">
                    We understand your needs and objectives.
                </p>
            </div>

            <!-- Step 2: Design -->
            <div class="relative flex flex-col items-center lg:w-1/5 mb-12 lg:mb-0 z-10">
                <div class="bg-brand-red text-white w-16 h-16 flex items-center justify-center rounded-full font-bold text-xl">
                    2
                </div>
                <h3 class="mt-4 text-lg font-semibold text-brand-gray">Design</h3>
                <p class="mt-2 text-gray-600 text-sm text-center">
                    Crafting creative and user-focused designs.
                </p>
            </div>

            <!-- Step 3: Build -->
            <div class="relative flex flex-col items-center lg:w-1/5 mb-12 lg:mb-0 z-10">
                <div class="bg-brand-red text-white w-16 h-16 flex items-center justify-center rounded-full font-bold text-xl">
                    3
                </div>
                <h3 class="mt-4 text-lg font-semibold text-brand-gray">Build</h3>
                <p class="mt-2 text-gray-600 text-sm text-center">
                    Developing robust and scalable solutions.
                </p>
            </div>

            <!-- Step 4: Deploy -->
            <div class="relative flex flex-col items-center lg:w-1/5 mb-12 lg:mb-0 z-10">
                <div class="bg-brand-red text-white w-16 h-16 flex items-center justify-center rounded-full font-bold text-xl">
                    4
                </div>
                <h3 class="mt-4 text-lg font-semibold text-brand-gray">Deploy</h3>
                <p class="mt-2 text-gray-600 text-sm text-center">
                    Launching your project with precision.
                </p>
            </div>

            <!-- Step 5: Support -->
            <div class="relative flex flex-col items-center lg:w-1/5 z-10">
                <div class="bg-brand-red text-white w-16 h-16 flex items-center justify-center rounded-full font-bold text-xl">
                    5
                </div>
                <h3 class="mt-4 text-lg font-semibold text-brand-gray">Support</h3>
                <p class="mt-2 text-gray-600 text-sm text-center">
                    Continuous support and maintenance.
                </p>
            </div>

        </div>
    </div>
</section>


  <!-- SERVICES CTA SECTION -->
<section class="bg-brand-red py-24">
    <div class="max-w-7xl mx-auto px-6 text-center text-white">

        <!-- CTA Heading -->
        <h2 class="text-3xl md:text-4xl font-bold">
            Ready to Take Your Business to the Next Level?
        </h2>
        <p class="mt-4 text-lg md:text-xl text-white/90 max-w-2xl mx-auto">
            Contact us today to discuss your project or get a custom solution tailored to your business needs.
        </p>

        <!-- CTA Buttons -->
        <div class="mt-8 flex flex-col sm:flex-row justify-center gap-4">
            <a href="{{ route('contact') }}" 
               class="bg-white text-brand-red px-8 py-3 rounded-md font-medium shadow hover:shadow-lg transition">
                Get a Quote
            </a>
            <a href="{{ route('services') }}" 
               class="border border-white text-white px-8 py-3 rounded-md font-medium hover:bg-white hover:text-brand-red transition">
                Explore Services
            </a>
        </div>

    </div>
</section>


@endsection
